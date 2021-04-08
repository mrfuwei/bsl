<?php


namespace app\index\controller;



use think\Controller;
use think\Exception;
use think\exception\PDOException;
use think\Request;
use think\Db;
use ZipArchive;

class Api extends Controller
{
    function verifyfaces()
    {
//        var_dump(111);
        header("Access-Control-Allow-Origin: *");
        if (request()->isPost()) {
            //1。上传图片方式
//            $farr = $this->upload("faces");
//            $img_dir = ROOT_PATH . 'public' . DS . 'uploads' . DS . $farr['save'];
//            $img_base64 = $this->imgToBase64($img_dir);
//            $param['image'] = substr($img_base64, 22);
            //2。base64字符串形式
            $img_base64 = input("post.faces");
            $param['image'] = $img_base64;
            $membernum = input("post.membernum");
            $url = "https://aip.baidubce.com/rest/2.0/face/v3/detect?access_token=" . $this->getbdtoken();


            $param['image_type'] = "BASE64";
            $param['face_type'] = "LIVE";
            $param['face_field'] = "eye_status,quality,glasses,angle,beauty,expression,mask";
            $param['max_face_num'] = 10;
//            var_dump($param['image']);
//            exit();
            $o = "";
            foreach ($param as $k => $v) {
                $o .= "$k=" . urlencode($v) . "&";
            }
            $post_data = substr($o, 0, -1);
//            var_dump($post_data);
//            exit();
            $res = $this->request_post($url, $post_data);

            $res = json_decode($res);
            if ($res->error_code!==0){
                return json($res);
            }
            file_put_contents("test.log", json_encode($res) . "\r\n", FILE_APPEND);

            if($res->result->face_num!=$membernum){
                return json(['error_code' => 10010, 'error_msg' => '人脸数量不一致']);
            }
            if ($res->error_code === 0) {
                $result = $this->face_pic_check($res);
                return json($result);
            } else {
                return json($res);
            }

//            return json_encode($arr, JSON_UNESCAPED_UNICODE);
        }else{
            return json(['code' => 00, 'message' => "请求失败"]);
        }

    }

    private function getbdtoken()
    {
        $bdconfig = config("bdface");
        $token = db('bdtoken')->find();
        if ($token) {
            if ($token['end_timestamp'] > time()) {
                return $token['access_token'];
            } else {

                $url = 'https://aip.baidubce.com/oauth/2.0/token';
                $post_data['grant_type'] = 'client_credentials';
                $post_data['client_id'] = $bdconfig['API_Key'];
                $post_data['client_secret'] = $bdconfig['Secret_Key'];
                $o = "";
                foreach ($post_data as $k => $v) {
                    $o .= "$k=" . urlencode($v) . "&";
                }
                $post_data = substr($o, 0, -1);
                $res = $this->request_post($url, $post_data);
                $res = json_decode($res, true);
                $res['end_timestamp'] = time() + $res['expires_in'];
                try {
                    $token = db("bdtoken")->where('id', $token['id'])->update($res);
                    return $token['access_token'];
                } catch (PDOException $e) {
                    var_dump($e);
                } catch (Exception $e) {
                    var_dump($e);
                }
            }

        } else {
            $url = 'https://aip.baidubce.com/oauth/2.0/token';
            $post_data['grant_type'] = 'client_credentials';
            $post_data['client_id'] = $bdconfig['API_Key'];
            $post_data['client_secret'] = $bdconfig['Secret_Key'];
            $o = "";
            foreach ($post_data as $k => $v) {
                $o .= "$k=" . urlencode($v) . "&";
            }
            $post_data = substr($o, 0, -1);
            $res = $this->request_post($url, $post_data);
            $res = json_decode($res, true);
            $res['end_timestamp'] = time() + $res['expires_in'];
            db('bdtoken')->insert($res);
            return $res['access_token'];
        }
    }

    private function request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }

        $postUrl = $url;
        $curlPost = $param;
        $headers = array("Content-type: application/json;charset='utf-8'", "Accept: application/json");
        $curl = curl_init();//初始化curl
        curl_setopt($curl, CURLOPT_URL, $postUrl);//抓取指定网页
        curl_setopt($curl, CURLOPT_HEADER, 0);//设置header
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($curl, CURLOPT_POST, 1);//post提交方式
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        if (strpos($postUrl, "https") !== false) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        }
        $data = curl_exec($curl);//运行curl
        curl_close($curl);
        return $data;

    }

    function imgToBase64($img_file)
    {

        $img_base64 = '';
        if (file_exists($img_file)) {
            $app_img_file = $img_file; // 图片路径
            $img_info = getimagesize($app_img_file); // 取得图片的大小，类型等

            //echo '<pre>' . print_r($img_info, true) . '</pre><br>';
            $fp = fopen($app_img_file, "r"); // 图片是否可读权限

            if ($fp) {
                $filesize = filesize($app_img_file);
                $content = fread($fp, $filesize);
                $file_content = chunk_split(base64_encode($content)); // base64编码
                switch ($img_info[2]) {           //判读图片类型
                    case 1:
                        $img_type = "gif";
                        break;
                    case 2:
                        $img_type = "jpg";
                        break;
                    case 3:
                        $img_type = "png";
                        break;
                }

                $img_base64 = 'data:image/' . $img_type . ';base64,' . $file_content;//合成图片的base64编码

            }
            fclose($fp);
        }

        return $img_base64; //返回图片的base64
    }

    /**
     * Notes:人脸照片各参数校验
     * Auther: Paul(389572613@qq.com)
     * Date: 2020/4/20
     * Time: 14:42
     * @param $bdapiret
     * @return array $result
     */
    private function face_pic_check($bdapiret)
    {
        $face_list = $bdapiret->result->face_list[0];
        file_put_contents('test.log', json_encode($bdapiret) . "\r\n", FILE_APPEND);
        //人脸框相对于竖直方向的顺时针旋转角度不能大于20
        $rotation = $face_list->location->rotation;
        $result['error_code'] = $bdapiret->error_code;
        $result['error_msg'] = $bdapiret->error_msg;
        if (abs($rotation) > 20) {
            $result['error_code'] = 100001;
            $result['error_msg'] = "人脸框相对于竖直方向的顺时针旋转角度过大";
            return $result;
        }
        //校验人脸大小
        $faceWidth=$face_list->location->width;
        $faceHeight=$face_list->location->height;
        if ($faceWidth<110||$faceHeight<110){
            $result['error_code'] = 100012;
            $result['error_msg'] = "拍照距离太远";
            return $result;
        }
        //校验人脸置信度
        $face_probability = $face_list->face_probability;
        if ($face_probability < 0.9) {
            $result['error_code'] = 100002;
            $result['error_msg'] = "人脸置信度过低";
            return $result;
        }
        //校验人脸旋转角度
        $angle = $face_list->angle;
        if (abs($angle->yaw) > 20 || abs($angle->pitch) > 20 || abs($angle->roll) > 20) {
            $result['error_code'] = 100003;
            $result['error_msg'] = "人脸旋转角度过大";
            return $result;
        }
        //校验是否大笑
        $expression = $face_list->expression;
        if ($expression->type == "laugh") {
            $result['error_code'] = 100004;
            $result['error_msg'] = "请勿大笑";
            return $result;
        }
        //校验是否戴墨镜
        $glasses = $face_list->glasses;
        if ($glasses->type == "sun") {
            $result['error_code'] = 100005;
            $result['error_msg'] = "请勿佩戴墨镜";
            return $result;
        }
        //校验双眼是否闭合
        $eye_status = $face_list->eye_status;
        if ($eye_status->left_eye < 0.6 || $eye_status->right_eye < 0.6) {
            $result['error_code'] = 100006;
            $result['error_msg'] = "请勿闭眼";
            return $result;
        }
        //校验是否戴口罩
        $mask = $face_list->mask;
        if ($mask->type === 1) {
            $result['error_code'] = 100007;
            $result['error_msg'] = "请勿佩戴口罩";
            return $result;
        }
        //校验人脸质量（脸部各部位是否遮挡）
        $quality = $face_list->quality;
        $occlusion = $quality->occlusion;
        //校验遮挡
        if ($occlusion->left_eye > 0.4 || $occlusion->right_eye > 0.4 || $occlusion->nose > 0.4 || $occlusion->mouth > 0.4 || $occlusion->left_cheek > 0.4 || $occlusion->right_cheek > 0.4 || $occlusion->chin_contour > 0.4) {
            $result['error_code'] = 100008;
            $result['error_msg'] = "请勿遮挡";
            return $result;
        }
        //校验光照
        if ($quality->illumination < 60) {
            $result['error_code'] = 100009;
            $result['error_msg'] = "光亮不足";
            return $result;
        }
        //校验人脸模糊
        if ($quality->blur>0.6){
            $result['error_code'] = 100010;
            $result['error_msg'] = "人脸太模糊";
            return $result;
        }

        //校验人脸是否在图像边界内
        if ($quality->completeness === 0) {
            $result['error_code'] = 100011;
            $result['error_msg'] = "请勿超出人脸边界";
            return $result;
        }
        return $result;
    }
    public function upload($name)
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($name);
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $info = $file->move(ROOT_PATH . 'uploads');

        if ($info) {
            // 成功上传后 获取上传信息
            // 输出 jpg
            $upload['houzhui'] = $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $upload['save'] = $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            $upload['name'] = $info->getFilename();
        } else {
            // 上传失败获取错误信息
            $upload['error'] = $file->getError();
        }
        return $upload;
    }

    public function cardinfo(){
        $cardinfo=db('cardinfo')->order('CARDAMT asc')->select();
        return json(['data' => $cardinfo, 'code' => 1, 'message' => "查询成功"]);
    }

    public function addcard()
    {
        $post = input('post.');
        trace(request()->url().":".json_encode($post), 'api');
        if (!is_array($post['username'])||!is_array($post['phone'])||!is_array($post['shenfenz'])||!is_array($post['photo'])){
            return json(['code' => 1, "msg" => "username,phone,shenfenz,photo 必须是一个数组"]);
        }
        if(empty($post['groupphoto'])||empty($post['cardid'])||empty($post['starttime'])||empty($post['endtime'])){
            return json(['code' => 1, "msg" => "groupphoto,cardid,starttime,endtime 不能为空"]);
        }
//        return false;
        $data['cardid'] = $post['cardid'];
        $data['startdate'] = $post['starttime'];
        $data['enddate'] = $post['endtime'];
        $data['pay_way'] = isset($post['pay_way'])?$post['pay_way']:0;
        $data['pay_fee'] = isset($post['pay_fee'])?$post['pay_fee']:0;
        $data['card_type']=$post['card_type'];
        $data['photo']=base64_image_content("data:image/jpeg;base64,".$post['groupphoto'],  "uploads");

        $ret=Db::transaction(function () use ($post, $data) {
            try {
                $getid = db('clubinfo')->insertGetId($data);
                $push_data=db('clubinfo')->where('cardno', $getid)->find();
                for ($i = 0; $i < count($post['photo']); $i++) {
                    if (empty($post['photo'][$i])||empty($post['username'][$i])){
                        return ['code' => 1, 'msg' => "photo,username 不能为空"];
                    }
                    if ($i===0){
                        if (empty($post['shenfenz'][$i])||empty($post['phone'][$i])){
                            return ['code' => 1, 'msg' => "手机号,身份证号 不能为空"];
                        }
                    }
                    if (!empty($post['shenfenz'][$i])){
                        if(preg_match("/([\x81-\xfe][\x40-\xfe])/", $post['shenfenz'][$i], $match)){
                            return ['code' => 1, 'msg' => "身份证号不能有中文"];
                        }
                    }
                    if (!empty($post['phone'][$i])){
                        if(!is_numeric($post['phone'][$i])){
                            return ['code' => 1, 'msg' => "手机号必须是数字"];
                        }
                    }

                    $data2 = [];
                    $data2['cardno'] = $getid;
                    $data2['membername'] = $post['username'][$i];
                    $data2['phone'] = isset($post['phone'][$i])?$post['phone'][$i]:"";
                    $data2['idnumber'] = isset($post['shenfenz'][$i])?$post['shenfenz'][$i]:"";
                    $data2['memberbirthday'] = empty($data2['idnumber']) ? "" : substr($data2['idnumber'], 6, 8);
                    $data2['photo'] = base64_image_content("data:image/jpeg;base64," . $post['photo'][$i], "uploads");
                    $data2['issub'] = ($i === 0) ? 0 : 1;
                    $memberid=db('memberinfo')->insertGetId($data2);
                    $data3=db('memberinfo')->where('id', $memberid)->find();
                    $push_data['member'][$i] = $data3;
                }

                $send_data['uid'] = "all";
                $send_data['pushType'] = "add";
                $send_data['data'] = $push_data;
                $push = controller("push/Index");
                $push->send_push($send_data);
                return ['code'=>0,"msg"=>"添加成功"];
            } catch (Exception $e) {
                trace(request()->url().":".$e->getMessage(), 'api');
                return ['code'=>1,"msg"=>"添加失败"];
            }
        });
        return json($ret);
    }

    public function datasync(){
        $today = date("Y-m-d");
//        $card=Db::view("clubinfo","cardno,startdate,enddate,photo as groupphoto")
//            ->view("memberinfo", "membername,phone,idnumber,photo", "memberinfo.cardno=clubinfo.cardno")
//            ->view("cardinfo", "cardname", "cardinfo.cardid=clubinfo.cardid")
//            ->whereTime("clubinfo.enddate", ">=", $today)->select();
        $card=Db::view("clubinfo",'startdate,enddate,photo as groupphoto,cardno')
            ->view('cardinfo','cardname','cardinfo.cardid=clubinfo.cardid')->group("clubinfo.cardno")
            ->whereTime("enddate", ">=", $today)->select();


        foreach ($card as $k=>$v){
            $member=db("memberinfo")->where('cardno', $v['cardno'])->field('id,membername,photo')->select();
            if (!empty($member)){
                $card[$k]['member'] = $member;
            }else{
                unset($card[$k]);
            }
        }
        $send_data['uid'] = "all";
        $send_data['pushType'] = "sync";
        $send_data['data'] = array_merge($card);
        $push = controller("push/Index");
        $push->send_push($send_data);


    }

    public function cardtosync(){
        ini_set('memory_limit','1024M');
        try{
            $today = date("Y-m-d");
            $card = Db::view("clubinfo", 'startdate,enddate,photo,cardno,card_type')
                ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
                ->whereTime("clubinfo.enddate", ">=", $today)
                ->select();
            $membertotal=0;
            foreach ($card as $k=>$v){
                $member=db("memberinfo")->where('cardno',$v['cardno'])->select();
                if ($member){
                    $membertotal += count($member);
                    $card[$k]['member'] = $member;
                }else{
                    unset($card[$k]);
                }
            }
           $card = array_merge($card);
            $writeArr=['code'=>0,'msg' =>"success",'count'=>$membertotal,'data'=>$card];
            $file=md5(uniqid());
            $filename2 = "uploads/cardsync/".$file . ".txt";
            file_put_contents($filename2, json_encode($writeArr) . "\n\r",LOCK_EX);
            $path = ROOT_PATH . "public/" . $filename2;
            $filename = ROOT_PATH . "public/uploads/cardsync/".$file.".zip";
            $zip = new ZipArchive();
            $zip->open($filename,ZipArchive::CREATE);   //打开压缩包
            $zip->addFile($path,basename($path));   //向压缩包中添加文件
            $zip->close();  //关闭压缩包
            return json(['code'=>0,'msg' =>"success",'filename'=>"/uploads/cardsync/".$file.".zip"]);
        }catch (Exception $e){
            return json(['code'=>1,'msg' =>$e->getMessage()]);
        }



    }
    public function cardStatistics(){
        $datag['time'] = input('get.time');
        $datag['zhonglei'] = input('get.zhonglei');
        if ($datag['time'] || $datag['zhonglei']) {
            $time = date('Y-m-d', strtotime('-' . $datag['time']));
            //var_dump($datag);
            if (@$datag['time'] != '' && $datag['zhonglei'] == '') {
                //echo 1;
                $str[0] = "createtime";
                $str[1] = ">";
                $str[2] = $time;
                $list = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,createtime')
                    ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
                    ->view('memberinfo','membername,idnumber,phone,photo','memberinfo.cardno=clubinfo.cardno')
                    ->where('memberinfo.issub',0)
                    ->whereTime($str[0], $str[1], $str[2])
                    ->order('clubinfo.createtime DESC')
                    ->paginate(15);
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    $card['num'][$cardinfo[$i]['cardname']] = 0;
                    $card['num'][$cardinfo[$i]['cardname']] = db('clubinfo')->where('cardid', $cardinfo[$i]['cardid'])->whereTime($str[0], $str[1], $str[2])->count();
                    $card['zongshuliang'] += $card['num'][$cardinfo[$i]['cardname']];
                    $card['zongjiner'] += $card['num'][$cardinfo[$i]['cardname']] * $cardinfo[$i]['cardamt'];
                }
            }
            if ($datag['time'] == '' && $datag['zhonglei'] != '') {
                //echo 2;
                $list = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,createtime')
                    ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
                    ->view('memberinfo','membername,idnumber,phone,photo','memberinfo.cardno=clubinfo.cardno')
                    ->where('memberinfo.issub',0)
                    ->where('cardid', $datag['zhonglei'])
                    ->order('clubinfo.createtime DESC')
                    ->paginate(15);
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    if ($cardinfo[$i]['cardid'] != $datag['zhonglei']) {
                        $card['num'][$cardinfo[$i]['cardname']] = 0;
                    } else {
                        $card['num'][$cardinfo[$i]['cardname']] = db('clubinfo')->where('cardid', $cardinfo[$i]['cardid'])->count();
                    }
                    $card['zongshuliang'] += $card['num'][$cardinfo[$i]['cardname']];
                    $card['zongjiner'] += $card['num'][$cardinfo[$i]['cardname']] * $cardinfo[$i]['cardamt'];
                }

            }
            if ($datag['time'] != '' && $datag['zhonglei'] != '') {
                //echo 3;
                $str[0] = "clubinfo.CREATETIME";
                $str[1] = ">";
                $str[2] = $time;
                $list = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,createtime')
                    ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
                    ->view('memberinfo','membername,idnumber,phone,photo','memberinfo.cardno=clubinfo.cardno')
                    ->where('memberinfo.issub',0)
                    ->where('clubinfo.cardid', $datag['zhonglei'])
                    ->whereTime($str[0], $str[1], $str[2])
                    ->order('clubinfo.createtime DESC')
                    ->paginate(15);
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    if ($cardinfo[$i]['cardid'] != $datag['zhonglei']) {
                        $card['num'][$cardinfo[$i]['cardname']] = 0;
                    } else {
                        $card['num'][$cardinfo[$i]['cardname']] = db('clubinfo')->where('cardid', $cardinfo[$i]['cardid'])->whereTime($str[0], $str[1], $str[2])->count();
                    }
                    $card['zongshuliang'] += $card['num'][$cardinfo[$i]['cardname']];
                    $card['zongjiner'] += $card['num'][$cardinfo[$i]['cardname']] * $cardinfo[$i]['cardamt'];
                }
            }
            return json(['list'=>$list,'card'=>$card]);

        } else {
            $list = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,createtime')
                ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
                ->view('memberinfo','membername,idnumber,phone,photo','memberinfo.cardno=clubinfo.cardno')
                ->where('memberinfo.issub',0)
                ->order('createtime DESC')
                ->paginate(15);
            $cardinfo = db('cardinfo')->select();
            $card['zongshuliang'] = 0;
            $card['zongjiner'] = 0;
            for ($i = 0; $i < count($cardinfo); $i++) {
                $card['num'][$cardinfo[$i]['cardname']] = 0;
                $card['num'][$cardinfo[$i]['cardname']] = db('clubinfo')->where('cardid', $cardinfo[$i]['cardid'])->count();
                $card['zongshuliang'] += $card['num'][$cardinfo[$i]['cardname']];
                $card['zongjiner'] += $card['num'][$cardinfo[$i]['cardname']] * $cardinfo[$i]['cardamt'];
            }
            return json(['list'=>$list,'card'=>$card]);

        }

    }

    public function set_features(){
        $memberid=input('post.memberid');
        $is_get_features=input('post.is_get_features');
        $ret=db('memberinfo')->where('id', $memberid)->update(['is_get_features'=>$is_get_features]);
        if ($ret){
            $data['code']=0;
            $data['data']=null;
            $data['msg'] = "成功";
        }else{
            $data['code']=10000;
            $data['data']=null;
            $data['msg'] = "失败";
        }
        return json($data);

    }

    public function apk_upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file("file");
        // 移动到框架应用根目录/public/uploads/apk/ 目录下
        $saveDir = ROOT_PATH . 'public' . DS . 'uploads' . DS . 'apk';
        $info = $file->rule('uniqid')->move($saveDir);
//        $info = $file->move(ROOT_PATH . 'uploads');

        if ($info) {
            // 成功上传后 获取上传信息
            // 输出 apk
//            $upload['houzhui'] = $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.apk
            $upload['save'] = $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.apk
//            $upload['name'] = $info->getFilename();
            $upload['host'] = $_SERVER["HTTP_HOST"];
            $data['data']=$upload;
            $data['code']=0;
            $data['msg'] = "上传成功";
            return json($data);
        } else {
            // 上传失败获取错误信息
            $upload['error'] = $file->getError();
            $data['data']=$upload;
            $data['code']=1;
            $data['msg'] = "上传失败";
            return json($data);
        }
    }

    public function version_update(){
        $version_info=db('version_update')->order('id desc')->find();
        if ($version_info){
            return json(['code' => 0, 'data' => $version_info, 'msg' => ""]);
        }else{
            return json(['code' => 0, 'data' => "", 'msg' => "没有数据"]);
        }
    }

    public function test(){
        $arr=array(
            'usernmae'=>'admin',
            'c_time'=>1617798302
        );
        var_dump(base64_encode(json_encode($arr)));
    }




}