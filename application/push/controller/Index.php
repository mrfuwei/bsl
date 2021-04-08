<?php
namespace app\push\controller;

use think\Controller;
use Workerman\Worker;
use think\Db;

class Index extends Controller
{
    public function index(){
        // 初始化一个worker容器，监听1234端口
        $worker = new Worker('websocket://0.0.0.0:2345');
// ====这里进程数必须必须必须设置为1====
        $worker->count = 1;

// worker进程启动后建立一个内部通讯端口
        $worker->onWorkerStart = function($worker)
        {
            // 开启一个内部端口，方便内部系统推送数据，Text协议格式 文本+换行符
            $inner_text_worker = new Worker('Text://127.0.0.1:5678');
            $inner_text_worker->onMessage = function($connection, $buffer)
            {
                // $data数组格式，里面有uid，表示向那个uid的页面推送数据
                trace($buffer, 'push');
                $data = json_decode($buffer, true);
                $uid = $data['uid'];
                unset($data['uid']);
                $postarr = json_encode($data);
                // 通过workerman，向uid的页面推送数据
                if ($uid=="all"){
                    broadcast($postarr);
                }else{
                    $ret = sendMessageByUid($uid, $postarr);
                    // 返回推送结果
                    $connection->send($ret ? 'ok' : 'fail');
                }


            };
            $inner_text_worker->listen();
        };
// 新增加一个属性，用来保存uid到connection的映射(uid是用户id或者客户端唯一标识)
        $worker->uidConnections = array();
// 当有客户端发来消息时执行的回调函数
        $worker->onMessage = function($connection, $data)
        {
            global $worker;
            // 判断当前客户端是否已经验证,即是否设置了uid
            if(!isset($connection->uid))
            {
                // 没验证的话把第一个包当做uid（这里为了方便演示，没做真正的验证）

                $connection->uid = $data;
                /* 保存uid到connection的映射，这样可以方便的通过uid查找connection，
                 * 实现针对特定uid推送数据
                 */
                trace("用户：".$connection->uid." 已建立连接\n", 'websocket');
                print "用户：".$connection->uid." 已建立连接\n";
                $worker->uidConnections[$connection->uid] = $connection;
                return $connection->send('login success, your uid is ' . $connection->uid);
            }
            // 其它逻辑，针对某个uid发送 或者 全局广播
            // 假设消息格式为 uid:message 时是对 uid 发送 message
            // uid 为 all 时是全局广播
//    list($recv_uid, $message) = explode(':', $data);
//    // 全局广播
//    if($recv_uid == 'all')
//    {
//        broadcast($message);
//    }
//    // 给特定uid发送
//    else
//    {
//        sendMessageByUid($recv_uid, $message);
//    }
        };

// 当有客户端连接断开时
        $worker->onClose = function($connection)
        {
            global $worker;
            if(isset($connection->uid))
            {
                // 连接断开时删除映射
                unset($worker->uidConnections[$connection->uid]);
                print "用户：".$connection->uid." 已经断开连接\n";
                trace("用户：".$connection->uid." 已经断开连接\n", 'websocket');
            }
        };


// 向所有验证的用户推送数据
        function broadcast($message)
        {
            global $worker;
            if (is_array($message)){
                $message = json_encode($message);
            }
            if (empty($worker->uidConnections)){
                print "没有用户连接,数据推送失败：".$message."\n";
//                trace("没有用户连接,数据推送失败：".$message."\n", 'websocket');
                $push['uid']=0;
                $push['message']=$message;
                $push['status']=0;
                Db::table("push_record")->insert($push);
                return false;
            }else{
                foreach($worker->uidConnections as $connection)
                {
                    print "向用户：".$connection->uid." 发送数据：".$message."\n";
//                    trace("向用户：".$connection->uid." 发送数据：".$message."\n", 'websocket');
                    $push['uid']=$connection->uid;
                    $push['message']=$message;
                    $push['status']=1;
                    Db::table('push_record')->insert($push);
                    $connection->send($message);
                }
            }

        }

// 针对uid推送数据
        function sendMessageByUid($uid, $message)
        {
            global $worker;
            if(isset($worker->uidConnections[$uid]))
            {
                $connection = $worker->uidConnections[$uid];
                $connection->send($message);
                return true;
            }
            return false;
        }

// 运行所有的worker（其实当前只定义了一个）
        Worker::runAll();
    }

    public function send_push($data){
        $client = stream_socket_client('tcp://127.0.0.1:5678', $errno, $errmsg, 1);

// 发送数据，注意5678端口是Text协议的端口，Text协议需要在数据末尾加上换行符
        fwrite($client, json_encode($data)."\n");
// 读取推送结果
//        echo fread($client, 8192);
    }
}