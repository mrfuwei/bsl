<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Exception;
use think\exception\PDOException;
use think\Request;
use think\Session;

class Index extends Controller
{

    public function __construct(){
        //使用父类的构造函数，也就是调用Controller类的构造函数
        parent::__construct();
        $contact = db('admin_index_contact')->find();
        $this->assign('contact', $contact);

    }

    public function form(){
        if(request()->isPost()){
            $data=input('post.');
            $res=db('admin_form')->insert($data);
            if($res){
                echo "<script>alert('提交成功');history.go(-2)</script>";

                return;
            }else{
                echo "<script>alert('提交失败');history.go(-2)</script>";

                return;
            }
        }
    }

    public function index(){
        $banner=db('admin_index_banner')->select();
        $part2=db('admin_index_part2')->find();
//        var_dump($part2);
        $this->assign("list", $banner);
        $this->assign("part2", $part2);
        $part3_1=db('admin_index_part3')->where('id',1)->find();
        $part3_2=db('admin_index_part3')->where('id',2)->find();

        $this->assign("part3_1", $part3_1);
        $this->assign("part3_2", $part3_2);
        $part4=db('admin_index_part4')->find();
        $this->assign("part4", $part4);
        $part5=db('admin_index_part5')->find();
        $this->assign("part5", $part5);
        $part6=db('admin_index_part6')->find();
        $this->assign("part6", $part6);
        return $this->fetch('index');
    }

    public function eight(){
        return $this->fetch('eight');
    }

    public function brand(){
        $list1 = db('admin_honor')->where('pic_type', 1)->order('sort desc')->select();
        $list2 = db('admin_honor')->where('pic_type', 2)->order('sort desc')->select();
        $list3 = db('admin_honor')->where('pic_type', 3)->order('sort desc')->select();
        $this->assign('list1', $list1);
        $this->assign('list2', $list2);
        $this->assign('list3', $list3);
        return $this->fetch('brand');
    }

    public function productSearch(){
        return $this->fetch('productSearch');
    }

    public function topshop(){
        return $this->fetch('topshop');
    }

    public function museum(){
        return $this->fetch('museum');
    }

    public function live_museum(){
        return $this->fetch('live_museum');
    }

    public function remould(){
        return $this->fetch('remould');
    }

    public function news(){
        if(request()->isGet()){
            $getData=input('get.');
            $page=(empty($getData['page']))?1:$getData['page'];
            $pageSize=(empty($getData['page_size']))?8:$getData['page_size'];
            $info=db('admin_new')->page($page,$pageSize)->order('c_time desc')->select();
            $this->assign('list', $info);
            $menu_info=db('admin_new_menu')->select();
            $this->assign('menu_list', $menu_info);

        }



        return $this->fetch('news');
    }

    public function news_detail(){
        if(request()->isGet()){
            $getData=input('get.');
            $info=db('admin_new')->where('id',$getData['id'])->find();
            $this->assign('list', $info);
        }else{
            $this->assign('list', '');
        }



        return $this->fetch('news_detail');
    }



    public function news_video(){
        return $this->fetch('news_video');
    }

    public function brandWitness1(){
        return $this->fetch('brandWitness1');
    }

    public function cooperation(){
        return $this->fetch('cooperation');
    }

    public function contact(){
        return $this->fetch('contact');
    }

    public function join(){
        return $this->fetch('join');
    }

    public function franchisee(){
        return $this->fetch('franchisee');
    }

    public function cooperate_people(){
        return $this->fetch('cooperate_people');
    }
    public function pos(){
        return $this->fetch('pos');
    }

    public function live_grid_sketch(){
        return $this->fetch('live_grid_sketch');
    }

    public function live_grid_sketch_detail(){
        return $this->fetch('live_grid_sketch_detail');
    }

    public function recruit(){
        return $this->fetch('recruit');
    }

    public function service(){
        return $this->fetch('service');
    }

    public function prize(){
        return $this->fetch('prize');
    }

    public function patent(){
        return $this->fetch('patent');
    }

    public function designer_detail(){
        return $this->fetch('designer_detail');
    }

    public function say(){
        return $this->fetch('say');
    }


    public function getIndexBanner(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFailMsg(1);
        }
        $info=db('admin_index_banner')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFailMsg(2);
        }

    }

//    public function login()
//    {
//        $cookie = cookie('token');
//        $data[0] = "";
//        $data[1] = "";
//        if (Cookie::has('token') == 1) {
//            $data = $this->jiemi($cookie, 5);
//
//        }
//        $this->assign('data', $data);
//        return $this->fetch('login');
//    }

    public function loginyz()
    {
        $data = input('post.');
        $pwd = md5(md5($data['username']) . md5($data['password']));
        $userinfo = db('userinfo')->where('userid', $data['username'])->find();
        if ($userinfo) {
            if ($userinfo['userid'] == $data['username'] && $userinfo['passwd'] == $pwd) {
                db('userinfo')->where('username', $data['username'])->update(['logintime' => date("Y-m-d H:i:s")]);
                Session::set('username', $data['username']);
                $this->redirect('index/index');
            } else {
                $this->error('登陆失败');
            }
        } else {
            $this->error('登陆失败');
        }

    }

    public function home()
    {
        $this->islogin();
        $isgo = $this->isgo('niankaguanli');
        //var_dump($isgo);
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $cardinfo = db('cardinfo')->order('cardid asc')->select();
        $this->assign("cardinfo", $cardinfo);
        return $this->fetch();
    }

    public function logout()
    {
        Session::delete('username');
        $this->redirect('index/login');
        return $this->fetch();
    }

    public function addcards()
    {
        $this->islogin();
        $id = input("get.id");
        $cardxx = db('cardinfo')->where('cardid', $id)->find();
        $this->assign('cardxx', $cardxx);
        return $this->fetch();
    }

    public function addcard()
    {
        $post = input('post.');
//        return false;
        $data['cardid'] = $post['cardid'];
        $data['startdate'] = $post['starttime'];
        $data['enddate'] = $post['endtime'];
        $data['photo']=$this->base64_image_content("data:image/jpeg;base64,".$post['groupphoto'],  "uploads");
        $ret=Db::transaction(function () use ($post, $data) {
            try {
                $getid = db('clubinfo')->insertGetId($data);
                $push_data=db('clubinfo')->where('cardno', $getid)->find();
                for ($i = 0; $i < count($post['photo']); $i++) {
                    $data2 = [];
                    $data2['cardno'] = $getid;
                    $data2['membername'] = $post['username'][$i];
                    $data2['phone'] = $post['phone'][$i];
                    $data2['idnumber'] = $post['shenfenz'][$i];
                    $data2['memberbirthday'] = empty($post['shenfenz'][$i]) ? "" : substr($post['shenfenz'][$i], 6, 8);
                    $data2['photo'] = $this->base64_image_content("data:image/jpeg;base64," . $post['photo'][$i], "uploads");
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
                return $getid;
            } catch (Exception $e) {
                file_put_contents("test.log", json_encode($e) . "\r\n", FILE_APPEND);
                return 0;
            }
        });
        return json(['code'=>$ret]);
    }


    /**
     * Notes:base64图片转存本地
     * Auther: Paul(389572613@qq.com)
     * Date: 2020/4/24
     * Time: 16:41
     * @param $base64_image_content
     * @param $path
     * @return bool|string
     */
    public function base64_image_content($base64_image_content, $path)
    {
        //匹配出图片的格式
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result)) {
            $type = $result[2];
            $new_file = $path . "/" . date('Ymd', time()) . "/";
            if (!file_exists($new_file)) {
                //检查是否有该文件夹，如果没有就创建，并给予最高权限
                mkdir($new_file, 0700);
            }
            $new_file = $new_file . md5(uniqid()) . ".{$type}";
            if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_image_content)))) {
                return '/' . $new_file;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function test()
    {

    }

    public function role()
    {
        $this->islogin();
        $isgo = $this->isgo('jueseguanli');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $lists = Db::view('userinfo', 'userid,username,passwd,orgid,userstate,userrole,logintime,createtime')->
        view('orginfo', 'orgname', 'userinfo.orgid=orginfo.orgid')->select();
        $this->assign('lists', $lists);
        //var_dump($lists);
        return $this->fetch();
    }





    public function list1()
    {
        $this->islogin();
        $isgo = $this->isgo('niankaliebiao');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $now = date('Y-m-d');
        //var_dump($now);
        $list = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,photo,createtime,card_type')
            ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
            ->view('memberinfo', '*', 'memberinfo.cardno=clubinfo.cardno')
            ->whereTime('clubinfo.enddate', '>=', $now)
            ->where("memberinfo.issub","0")
            ->order('clubinfo.enddate desc,createtime desc')
            ->paginate(10);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return $this->fetch();
    }


    public function dayin()
    {
        $this->islogin();
        if (request()->isGet()) {
            $id = input('get.id');
            $clubxx = db('clubinfo')->where('cardno', $id)->find();
            $cardxx = db('cardinfo')->where('cardid', $clubxx['cardid'])->find();
            $this->assign('cardxx', $cardxx);
            $memberxx = db('memberinfo')->where('cardno', $id)->select();
            $this->assign('memberxx', $memberxx);
            $this->assign('clubxx', $clubxx);
            return $this->fetch();
        }

    }



    public function bumen()
    {
        $this->islogin();
        $isgo = $this->isgo('bumenguanli');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $lists=db('orginfo')->select();
        $this->assign('lists', $lists);
        return $this->fetch();
    }


    public function addbumen()
    {
        $this->islogin();
        if (request()->isPost()) {
            $data_p['orgid'] = input('post.id');
            $data_p['orgname'] = input('post.bumen');
            $orginfo = db('orginfo')->where('orgid', $data_p['orgid'])->find();
            if ($orginfo) {
                $data['rest'] = '0';
                $data['msg'] = 'ID号已存在';
            } else {
                $res = db('orginfo')->insert($data_p);
                if ($res) {
                    $data['rest'] = '1';
                    $data['msg'] = '新增部门成功';
                } else {
                    $data['rest'] = '0';
                    $data['msg'] = '新增部门失败';
                }
            }
            return json($data);
        }
        return $this->fetch();
    }


    function isgo($fangwenbankuai)
    {
        $username = request()->session('username');
        $userbtn = db('userbtn')->where('userid', $username)->select();
        //var_dump($userbtn);
        for ($i = 0; $i < count($userbtn); $i++) {
            if ($userbtn[$i]['btnid'] == $fangwenbankuai || $userbtn[$i]['btnid'] == 'all') {
                $isgo = true;
            }
        }
        return @$isgo;
    }


    function delbumen()
    {
        $id = input('post.id');
        $newid = explode(',', $id);
        if ($newid != '') {
            for ($i = 0; $i < count($newid); $i++) {
                $rest = db('orginfo')->where('ORGID', $newid[$i])->delete();
                if ($rest) {
                    $data = "1";
                } else {
                    $data = "0";
                }
            }
            return json($data);
        }
    }


    public function profile()
    {
        $this->islogin();
        if (request()->isGet()) {
            $name = input('get.username');
            if (isset($name) && $name != "") {
                $userxx = db('userinfo')->where('userid', $name)->find();
                if ($userxx != "") {
                    $this->assign('userxx', $userxx);
                }
                $userqx = db('userbtn')->field('btnid')->where('userid', $name)->select();
                if ($userqx != "false") {
                    for ($i = 0; $i < count($userqx); $i++) {
                        foreach ($userqx[$i] as $key => $value) {
                            $quanxian[$i] = $value;
                        }
                    }
                    @$this->assign('quanxian', $quanxian);
                }
            }
        }
        $bumen = db('orginfo')->select();
        $this->assign('bumen', $bumen);
        $quanxianinfo = db('btninfo')->order('orderid ASC')->select();
//        var_dump($quanxianinfo);
        $this->assign('quanxianinfo', $quanxianinfo);
        return $this->fetch();
    }

    public function statistics()
    {
        header("Content-type: text/html; charset=utf-8");
        $this->islogin();
        $isgo = $this->isgo('caiwuguanli');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $datag['time'] = input('get.time');
        $datag['zhonglei'] = input('get.zhonglei');
        if ($datag['time'] || $datag['zhonglei']) {
            $time = date('Y-m-d', strtotime('-' . $datag['time']));
            //var_dump($datag);
            if (@$datag['time'] != '' && $datag['zhonglei'] == '') {
                //echo 1;
                $str[0] = "CREATETIME";
                $str[1] = ">";
                $str[2] = $time;
                $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                    ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                    ->whereTime($str[0], $str[1], $str[2])
                    ->order('clubinfo.CREATETIME DESC')
                    ->paginate(15);
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    $card['num'][$i] = 0;
                    $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->whereTime($str[0], $str[1], $str[2])->count();
                    $card['zongshuliang'] += $card['num'][$i];
                    $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
                }
            }
            if ($datag['time'] == '' && $datag['zhonglei'] != '') {
                //echo 2;
                $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                    ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                    ->where('CARDID', $datag['zhonglei'])
                    ->order('clubinfo.CREATETIME DESC')
                    ->paginate(15);
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    if ($cardinfo[$i]['CARDID'] != $datag['zhonglei']) {
                        $card['num'][$i] = 0;
                    } else {
                        $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->count();
                    }
                    $card['zongshuliang'] += $card['num'][$i];
                    $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
                }

            }
            if ($datag['time'] != '' && $datag['zhonglei'] != '') {
                //echo 3;
                $str[0] = "clubinfo.CREATETIME";
                $str[1] = ">";
                $str[2] = $time;
                $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                    ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                    ->where('clubinfo.CARDID', $datag['zhonglei'])
                    ->whereTime($str[0], $str[1], $str[2])
                    ->order('clubinfo.CREATETIME DESC')
                    ->paginate(15);
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    if ($cardinfo[$i]['CARDID'] != $datag['zhonglei']) {
                        $card['num'][$i] = 0;
                    } else {
                        $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->whereTime($str[0], $str[1], $str[2])->count();
                    }
                    $card['zongshuliang'] += $card['num'][$i];
                    $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
                }
            }

            $this->assign('card', $card);
            $this->assign('cardinfo', $cardinfo);
            // 把分页数据赋值给模板变量list
            $this->assign('list', $list);
        } else {
            $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                ->order('CREATETIME DESC')
                ->paginate(15);
            $cardinfo = db('cardinfo')->select();
            $card['zongshuliang'] = 0;
            $card['zongjiner'] = 0;
            for ($i = 0; $i < count($cardinfo); $i++) {
                $card['num'][$i] = 0;
                $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->count();
                $card['zongshuliang'] += $card['num'][$i];
                $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
            }

            $this->assign('card', $card);
            $this->assign('cardinfo', $cardinfo);
            // 把分页数据赋值给模板变量list
            $this->assign('list', $list);
        }
        return $this->fetch();
    }

    /*
    导出财务统计
    */
    function importExcel()
    {
        $filename = '财务统计.xls';
        $objPHPExcel = new \PHPExcel();

        $datag = input('get.');
        if ($datag) {
            $time = date('Y-m-d', strtotime('-' . $datag['time']));
            //var_dump($datag);
            if (@$datag['time'] != '' && $datag['zhonglei'] == '') {
                //echo 1;
                $str[0] = "CREATETIME";
                $str[1] = ">";
                $str[2] = $time;
                $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                    ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                    ->whereTime($str[0], $str[1], $str[2])
                    ->order('clubinfo.CREATETIME DESC')
                    ->select();
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    $card['num'][$i] = 0;
                    $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->whereTime($str[0], $str[1], $str[2])->count();
                    $card['zongshuliang'] += $card['num'][$i];
                    $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
                }
            }
            if ($datag['time'] == '' && $datag['zhonglei'] != '') {
                //echo 2;
                $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                    ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                    ->where('CARDID', $datag['zhonglei'])
                    ->order('clubinfo.CREATETIME DESC')
                    ->select();
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    if ($cardinfo[$i]['CARDID'] != $datag['zhonglei']) {
                        $card['num'][$i] = 0;
                    } else {
                        $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->count();
                    }
                    $card['zongshuliang'] += $card['num'][$i];
                    $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
                }

            }
            if ($datag['time'] != '' && $datag['zhonglei'] != '') {
                //echo 3;
                $str[0] = "clubinfo.CREATETIME";
                $str[1] = ">";
                $str[2] = $time;
                $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                    ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                    ->where('clubinfo.CARDID', $datag['zhonglei'])
                    ->whereTime($str[0], $str[1], $str[2])
                    ->order('clubinfo.CREATETIME DESC')
                    ->select();
                $cardinfo = db('cardinfo')->select();
                $card['zongshuliang'] = 0;
                $card['zongjiner'] = 0;
                for ($i = 0; $i < count($cardinfo); $i++) {
                    if ($cardinfo[$i]['CARDID'] != $datag['zhonglei']) {
                        $card['num'][$i] = 0;
                    } else {
                        $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->whereTime($str[0], $str[1], $str[2])->count();
                    }
                    $card['zongshuliang'] += $card['num'][$i];
                    $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
                }
            }
            // $clubinfo=Db::view('clubinfo','cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,CREATETIME')
            // ->view('cardinfo','CARDNAME','cardinfo.CARDID=clubinfo.CARDID')
            // ->order('CREATETIME ASC')->select();
            // $ertong=db('cardinfo')->where('CARDNAME','儿童年卡')->value('CARDID');
            // $chengren=db('cardinfo')->where('CARDNAME','成人年卡')->value('CARDID');
            // $family1=db('cardinfo')->where('CARDNAME','家庭年卡A')->value('CARDID');
            // $family2=db('cardinfo')->where('CARDNAME','家庭年卡B')->value('CARDID');
            // $family2amt=db('cardinfo')->where('CARDNAME','家庭年卡B')->value('CARDAMT');
            // $ertongamt=db('cardinfo')->where('CARDNAME','儿童年卡')->value('CARDAMT');
            // $chengrenamt=db('cardinfo')->where('CARDNAME','成人年卡')->value('CARDAMT');
            // $family1amt=db('cardinfo')->where('CARDNAME','家庭年卡A')->value('CARDAMT');
            // $card['zonggong']=db('clubinfo')->count();
            // $card['chengren']=db('clubinfo')->where('CARDID',$chengren)->count();
            // $card['ertong']=db('clubinfo')->where('CARDID',$ertong)->count();
            // $card['family1']=db('clubinfo')->where('CARDID',$family1)->count();
            // $card['family2']=db('clubinfo')->where('CARDID',$family2)->count();
            // $card['zongjine']=$card['ertong']*$ertongamt+$card['chengren']*$chengrenamt+$card['family1']*$family1amt+$card['family2']*$family2amt;
        } else {
            $list = Db::view('clubinfo', 'cardno,CARDID,STARTDATE,ENDDATE,MEMBERNAME,IDNUMBER,PHONE,ADDR,PHOTO,CREATETIME')
                ->view('cardinfo', 'CARDNAME', 'cardinfo.CARDID=clubinfo.CARDID')
                ->order('clubinfo.CREATETIME DESC')
                ->select();
            $cardinfo = db('cardinfo')->select();
            $card['zongshuliang'] = 0;
            $card['zongjiner'] = 0;
            for ($i = 0; $i < count($cardinfo); $i++) {
                $card['num'][$i] = 0;
                $card['num'][$i] = db('clubinfo')->where('CARDID', $cardinfo[$i]['CARDID'])->count();
                $card['zongshuliang'] += $card['num'][$i];
                $card['zongjiner'] += $card['num'][$i] * $cardinfo[$i]['CARDAMT'];
            }
        }

        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(0);//把当前创建的sheet设置为活动sheet
        $objSheet = $objPHPExcel->getActiveSheet();//获得当前活动Sheet
        $objSheet->setTitle("年卡统计");
        for ($i = 1; $i < count($list); $i++) {
            $objSheet->setCellValue('A1', '卡号')->setCellValue('B1', '卡种')->setCellValue('C1', '主姓名')->setCellValue('D1', '身份证号')
                ->setCellValue('E1', '电话')->setCellValue('F1', '地址')->setCellValue('G1', '开始时间')->setCellValue('H1', '结束时间')->setCellValue('I1', '办理时间');
            $j = 2;
            foreach ($list as $key => $value) {
                $objSheet->setCellValue('A' . $j, $value['cardno'])->setCellValue('B' . $j, $value['CARDNAME'])->setCellValue('C' . $j, $value['MEMBERNAME'])
                    ->setCellValue('D' . $j, $value['IDNUMBER'])->setCellValue('E' . $j, $value['PHONE'])->setCellValue('F' . $j, $value['ADDR'])->setCellValue('G' . $j, $value['STARTDATE'])
                    ->setCellValue('H' . $j, $value['ENDDATE'])->setCellValue('I' . $j, $value['CREATETIME']);
                $j++;
            }
        }
        $max = count($list) + 2;
        $arr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'Q', 'M', 'L', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        for ($i = 0; $i < count($cardinfo); $i++) {
            $objSheet->setCellValue($arr[$i] . $max, $cardinfo[$i]['CARDNAME'] . '：' . $card['num'][$i] . '张');
        }
        $objSheet->setCellValue($arr[$i + 1] . $max, '总量计数' . $card['zongshuliang'] . '张');
        $objSheet->setCellValue($arr[$i + 2] . $max, '总计金额：' . $card['zongjiner'] . '元');
        // $objSheet->setCellValue('A'.$max,'儿童卡:'.$card['ertong'].'张')->setCellValue('B'.$max,'成人卡:'.$card['chengren'].'张')->setCellValue('C'.$max,'家庭卡A:'.$card['family1'].'张')->setCellValue('D'.$max,'家庭卡B:'.$card['family2'].'张')
        // ->setCellValue('E'.$max,'总量计数:'.$card['zonggong'].'张')->setCellValue('F'.$max,'总计金额:'.$card['zongjine'].'元');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');//告诉浏览器将要输出excel03文件
        header('Content-Disposition: attachment;filename="' . $filename . '"');//告诉浏览器将输出文件的名称(文件下载)
        header('Cache-Control: max-age=0');//禁止缓存
        $objWriter->save("php://output");
    }

    /*
	对单个用户增，改
    */
    public function adduser(Request $request)
    {
        $datap = input('post.');
//        file_put_contents('test.log', json_encode($datap) . "\r\n", FILE_APPEND);
        $data['userid'] = $datap['username'];
        $data['username'] = $datap['name'];
        $data['passwd'] = md5(md5($datap['username']).md5($datap['password']));
        $data['orgid'] = $datap['suoshubumen'];
        $data['userrole'] = $datap['juesebeizhu'];
        $data['userstate'] = "00";
        $ctrlFlag= $datap['ctrlFlag'];
        //1。添加新数据 2。修改数据
        if($ctrlFlag==1){
            db('userinfo')->insert($data);
            foreach ($datap['quanxian'] as $k=>$v){
                $data2['userid']=$datap['username'];
                $data2['btnid']=$v;
                db('userbtn')->insert($data2);
            }
        }else{
            db('userinfo')->where('userid', $datap['username'])->update($data);
            db('userbtn')->where('userid', $datap['username'])->delete();
            foreach ($datap['quanxian'] as $k=>$v){
                $data2['userid']=$datap['username'];
                $data2['btnid']=$v;
                db('userbtn')->insert($data2);
            }
        }

        if ($ctrlFlag == '1') {
            echo"<script>alert('新增成功');history.go(-1);</script>";
        } elseif ($ctrlFlag == '2') {
            echo"<script>alert('修改成功');history.go(-1);</script>";
        }else{
            $this->error("操作失败");
        }


    }

public function modifycard(){
        if (request()->isPost()){
            Db::transaction(function(){
                $post = input('post.');
                file_put_contents("test.log",json_encode(input('post.'))."\n\r",FILE_APPEND);
                if (!empty($post['groupphoto'])) {
                    $data['photo'] = $this->base64_image_content("data:image/jpeg;base64," . $post['groupphoto'], "uploads");
                }
                $data['startdate'] = $post['starttime'];
                $data['enddate'] = $post['endtime'];
                $data['card_type'] = $post['card_type'];
                db("clubinfo")->where('cardno', $post['cardno'])->update($data);
                $data['cardid'] = $post['cardid'];
                $membernum = db("cardinfo")->where('cardid', $post['cardid'])->value("cardmember");
                for ($i = 0; $i < $membernum; $i++) {
                    $data2 = [];
                    $data2['membername'] = $post['username'][$i];
                    $data2['idnumber'] = $post['shenfenz'][$i];
                    $data2['phone'] = $post['phone'][$i];
                    $data2['is_get_features'] = $post['is_get_features'][$i];
                    if (!empty($post['photo'][$i])) {
                        $data2['photo'] = $this->base64_image_content("data:image/jpeg;base64," . $post['photo'][$i], "uploads");
                    }
                    $data2['memberbirthday'] = empty($post['shenfenz'][$i]) ? "" :substr($data2['idnumber'], 6, 8);
                    db('memberinfo')->where('id', $post['id'][$i])->update($data2);
                    $data['member'][$i] = $data2;
                    $data['member'][$i]['id'] = $post['id'][$i];

                }
                $data['groupphoto']=db("clubinfo")->where('cardno', $post['cardno'])->value("photo");
                $data['cardno'] = $post['cardno'];
                $send_data['uid'] = "all";
                $send_data['pushType'] = "modify";
                $send_data['data'] = $data;
                $push = controller("push/Index");
                $push->send_push($send_data);
            });
            return true;
        }else{
            return false;
        }

    }


    public function chaxuncard()
    {
        $this->islogin();
        $now = date('Y-m-d');
        //var_dump($now);
        $list = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,createtime,card_type')
            ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
            ->view('memberinfo','membername,idnumber,phone,photo','memberinfo.cardno=clubinfo.cardno')
            ->whereTime('enddate', '>=', $now)
            ->paginate(10);
        // $cardno=db('clubinfo')->where('MEMBERNAME','王辰浩')->select();
        // var_dump($cardno);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return $this->fetch();

    }


    function sousuocard()
    {
        if (request()->isPost()) {
            $data_p = input('post.title');
            $data_s = input('post.search_type');
            switch ($data_s) {
                case 'name':
                    $data = Db::view('memberinfo',"*")
                        ->view("clubinfo","startdate,enddate,card_type","clubinfo.cardno=memberinfo.cardno")
                    ->where('memberinfo.membername', $data_p)->order('memberinfo.cardno desc')->limit(10)->select();

                    break;
                case 'phone':
                    $data = Db::view('memberinfo',"*")
                        ->view("clubinfo","startdate,enddate","clubinfo.cardno=memberinfo.cardno")
                        ->where('memberinfo.phone', $data_p)->order('memberinfo.cardno desc')->limit(10)->select();
                    break;
                case 'cardid':
                    $data = Db::view('memberinfo',"*")
                        ->view("clubinfo","startdate,enddate","clubinfo.cardno=memberinfo.cardno")
                        ->where('memberinfo.idnumber', $data_p)->order('memberinfo.cardno desc')->limit(10)->select();
                    break;

                default:
                    # code...
                    break;
            }


            return json(['code'=>0,'msg'=>"","count"=>1,'data'=>$data]);

        }
    }


    public function chakan()
    {
        $this->islogin();
        if (request()->isGet() && input('get.id') != '') {
            $username = request()->session('username');
            $id = input('get.id');


            $clubxx = db('clubinfo')->where('cardno', $id)->find();
            $cardxx = db('cardinfo')->where('cardid', $clubxx['cardid'])->find();
            $this->assign('cardxx', $cardxx);
            $memberxx = db('memberinfo')->where('cardno', $id)->order('issub', 'asc')->select();
            $this->assign('memberxx', $memberxx);
            $this->assign('clubxx', $clubxx);
            return $this->fetch();
        }
    }


    //新增过期年卡续费
    public function chakan2()
    {
        $this->islogin();
        if (request()->isGet() && input('get.id') != '') {
            $username = request()->session('username');
            $id = input('get.id');
            $clubxx = db('clubout')->where('cardno', $id)->find();
            $cardxx = db('cardinfo')->where('cardid', $clubxx['cardid'])->find();
            $this->assign('cardxx', $cardxx);
            $memberxx = db('memberout')->where('cardno', $id)->order('issub', 'asc')->select();
            $this->assign('memberxx', $memberxx);
            $this->assign('clubxx', $clubxx);
            return $this->fetch();
        }
    }


    function huifu()
    {
        $id = input('post.id');
        $clubxx = db('clubout')->where('cardno', $id)->find();
        $memberxx = db('memberout')->where('cardno', $id)->select();
        db('clubinfo')->insert($clubxx);
        for ($i = 0; $i < count($memberxx); $i++) {
            db('memberinfo')->insert($memberxx[$i]);
        }

        $rest = db('clubout')->where('cardno', $id)->delete();
        $rest1 = db('memberout')->where('cardno', $id)->delete();
        if ($rest && $rest1) {
            $data = 1;
        } else {
            $data = 0;
        }

        return json($data);

    }

    function cxoutuser()
    {
        $this->islogin();
        $name = input('post.name');
        $userxx = Db::view('clubinfo', 'cardno,cardid,startdate,enddate,photo,createtime,card_type')
            ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubinfo.cardid')
            ->view('memberinfo', '*', 'memberinfo.cardno=clubinfo.cardno')
            ->where('memberinfo.membername', $name)
            ->where("memberinfo.issub","0")
            ->order('clubinfo.enddate desc,createtime desc')
            ->find();
        return json($userxx);
    }


    public function list2()
    {
        $this->islogin();
        $isgo = $this->isgo('guoqinianka');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $now = date('Y-m-d');
        $list = Db::view('clubout', 'cardno,cardid,startdate,enddate,photo,createtime,card_type')
            ->view('cardinfo', 'cardname', 'cardinfo.cardid=clubout.cardid')
            ->view('memberout', '*', 'memberout.cardno=clubout.cardno')
            ->whereTime('clubout.enddate', '>=', $now)
            ->where("memberout.issub","0")
            ->order('enddate desc,createtime desc')
            ->paginate(10);
        $this->assign('list', $list);
        return $this->fetch();
    }

//新增过期年卡续费  结束


    public function editcard()
    {
        $this->islogin();
        $isgo = $this->isgo('bianjinianka');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        if (request()->isGet() && input('get.id') != '') {
            $username = request()->session('username');

            $id = input('get.id');

            $clubxx = db('clubinfo')->where('cardno', $id)->find();
            $cardxx = db('cardinfo')->where('cardid', $clubxx['cardid'])->find();
            $this->assign('cardxx', $cardxx);
            $memberxx = db('memberinfo')->where('cardno', $id)->order('issub', 'asc')->select();
            $this->assign('memberxx', $memberxx);
            $this->assign('clubxx', $clubxx);
            // $cardno=db('memberinfo')->where('cardno','6000001')->select();
            // var_dump($cardno);
            return $this->fetch();
        } else if (request()->isPost()) {
            $kahao = input('post.oidid');
            $newkahao = input('post.id');
            $idnumber = db('clubinfo')->where('cardno', $kahao)->find();
            $isyou = db('clubinfo')->where('cardno', $newkahao)->count();
            if ($isyou >= 1) {
                $msg = "卡号已存在，请勿重复输入！";
            } else {
                // $clubres=db('clubinfo')->where(array('IDNUMBER'=>$idnumber['IDNUMBER'],'CARDID'=>$idnumber['CARDID'],'MEMBERNAME'=>$idnumber['MEMBERNAME']))->update(array('cardno'=>$newkahao));
                $clubres = db('clubinfo')->where(array('cardno' => $idnumber['cardno']))->update(array('cardno' => $newkahao));

                $cardno = db('memberinfo')->where('cardno', $kahao)->select();
                for ($i = 0; $i < count($cardno); $i++) {
                    $cardno[$i]['cardno'] = $newkahao;
                    db('memberinfo')->where('cardno', $kahao)->delete();
                    $res = db('memberinfo')->insert($cardno[$i]);
                }
                if ($clubres && $res > 0) {
                    $msg = "修改成功！";
                } else {
                    $msg = "修改失败！";
                }
            }
            return json($msg);
        }
    }


    function delusers()
    {
        $isgo = $this->isgo('bianjinianka');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $id = input('post.id');
        $newid = explode(',', $id);
        if ($newid != '') {
            for ($i = 0; $i < count($newid); $i++) {
                $rest = db('userinfo')->where('USERID', $newid[$i])->delete();
                if ($rest) {
                    db('userbtn')->where('USERID', $newid[$i])->delete();
                    $data = "1";
                } else {
                    $data = "0";
                }
            }
            return json($data);
        }
    }

    function delcarduser()
    {
        $isgo = $this->isgo('shanchunianka');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        if (request()->isPost()){
            $ret=Db::transaction(function(){
                $id = input('post.id');
                $newid = explode(',', $id);
                if (!empty($newid)){
                    for ($i = 0; $i < count($newid); $i++) {
                        db('clubinfo')->where('cardno', $newid[$i])->delete();
                        db('memberinfo')->where('cardno', $newid[$i])->delete();
                    }
                    $send_data['uid'] = "all";
                    $send_data['pushType'] = "delete";
                    $send_data['data'] = $newid;
                    $push = controller("push/Index");
                    $push->send_push($send_data);
                }
                return true;
            });
            return $ret;
        }else{
            return false;
        }

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

    public function uploads($name)
    {
        // 获取表单上传文件 例如上传了001.jpg
        $files = request()->file($name);

        foreach ($files as $k => $file) {
            //validate(['ext'=>'','size'=>'']) ext:判断文件的后缀,size:限制文件上传的大小
            //move()   移动文件
            $info = $file->validate(['ext' => 'jpg,png,gif', 'size' => 2048000])->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                //获取上传文件的详情信息
                $uploads[] = 'uploads' . DS . $info->getSaveName();
                //获取上传文件的名称
//            $upload[]=$info->getSaveName();
            } else {
                die("<script>alert('" . $file->getError() . "');history.back();</script>");
            }

        }
        return isset($uploads) ? $uploads : null;

    }

    function islogin()
    {
        $username = request()->session('username');
        if (!isset($username)) {
            $this->success('请先登陆', 'index/login');
        } else {
            $this->assign('username', $username);
        }
    }

    function getRandChar($length)
    {
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol) - 1;

        for ($i = 0; $i < $length; $i++) {
            $str .= $strPol[rand(0, $max)];
            //rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }

    function jiami($username, $pwd, $num)
    {
        $stbegin = $this->getRandChar($num);
        $stend = $this->getRandChar($num);
        $ckusername = base64_encode(base64_encode($username));
        $ckpswd = base64_encode(base64_encode($pwd));
        $token = base64_encode($stbegin . $ckusername . "," . $ckpswd . $stend);
        return $token;
    }

    function jiemi($str, $num)
    {
        $d = base64_decode($str);
        $ad = explode(',', $d);
        $username = base64_decode(base64_decode(substr($ad[0], $num)));
        $psd = base64_decode(base64_decode(substr($ad[1], 0, '-' . $num)));
        $data[0] = $username;
        $data[1] = $psd;
        return $data;
    }


    /**
     * Notes:
     * User: Paul(389572613@qq.com)
     * Date: 2020/4/17
     * Time: 17:57
     * @return false|string
     */

    function verifyfaces()
    {
        if (request()->isPost()) {
//            $farr = $this->upload("faces");
//            file_put_contents("face.log", json_encode($farr) . "\r\n", FILE_APPEND);
//            $arr['ret'] = 1;
//            $arr['mgs'] = "成功";
//            $img_dir = ROOT_PATH . 'public' . DS . 'uploads' . DS . $farr['save'];
//            $img_base64 = $this->imgToBase64($img_dir);
            $img_base64=input("post.faces");
            $membernum=input("post.membernum");
            $url = "https://aip.baidubce.com/rest/2.0/face/v3/detect?access_token=" . $this->getbdtoken();
            $param['image'] = substr($img_base64, 23);

            $param['image_type'] = "BASE64";
            $param['face_type'] = "LIVE";
            $param['face_field'] = "eye_status,quality,glasses,angle,beauty,expression,mask";
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
            if($res->result->face_num!=$membernum){
                return json(['error_code' => 10010, 'error_message' => '人脸数量不一致']);
            }
            if ($res->error_code === 0) {
                $result = $this->face_pic_check($res);
                return json_encode($result);
            } else {
                return json_encode($res);
            }

//            return json_encode($arr, JSON_UNESCAPED_UNICODE);
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
        //人脸框相对于竖直方向的顺时针旋转角度不能大于20
        $rotation = $face_list->location->rotation;
        $result['error_code'] = $bdapiret->error_code;
        $result['error_msg'] = $bdapiret->error_msg;
        if (abs($rotation) > 20) {
            $result['error_code'] = 100001;
            $result['error_msg'] = "人脸框相对于竖直方向的顺时针旋转角度过大";
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
        if ($eye_status->left_eye < 0.8 || $eye_status->right_eye < 0.8) {
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
        if ($quality->illumination < 100) {
            $result['error_code'] = 100009;
            $result['error_msg'] = "光亮不足";
            return $result;
        }
        //校验人脸模糊
        if ($quality->blur > 0.6) {
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

    public function test2(){
        trace('我是一条测试的日志','push');
        $data['uid'] = "all";
        $data['data']=['test','test2'];
        $push = new \app\push\controller\Index();
        $push->send_push($data);

    }

    public function addcardstmp(){
        $post = input('post.');
        for($a=0;$a<$post['num'];$a++){
            $data['cardid'] = $post['cardid'];
            $data['startdate'] = $post['starttime'];
            $data['enddate'] = $post['endtime'];
            $data['photo']=$post['groupphoto'];
            $getid = db('clubinfo')->insertGetId($data);
            for ($i = 0; $i < count($post['photo']); $i++) {
                $data2 = [];
                $data2['cardno'] = $getid;
                $data2['membername'] = $post['username'][$i];
                $data2['phone'] = isset($post['phone'][$i])?:"";
                $data2['idnumber'] = isset($post['shenfenz'][$i])?:"";
                $data2['memberbirthday'] = empty($data2['idnumber']) ? "" : substr($data2['idnumber'], 6, 8);
                $data2['photo'] = $post['photo'][$i];
                $data2['issub'] = ($i === 0) ? 0 : 1;
                db('memberinfo')->insert($data2);
            }
        }
        return true;
    }

    public function push_record(){
        $this->islogin();
        $isgo = $this->isgo('pushRecord');
        if (@!$isgo) {
            $this->error('您无权限访问此页面！');
        }
        $recordInfo=db('push_record')->order('create_at desc')->paginate(10);
        $this->assign('recordInfo',$recordInfo);
        return $this->fetch();
    }

    public function version_update(){
        $this->islogin();
        $isgo = $this->isgo('version_update');
        $versionInfo=db('version_update')->order('create_at desc')->paginate(10);
        $this->assign("versionInfo", $versionInfo);
        return $this->fetch();
    }

    public function version_add(){
        $this->islogin();
        return $this->fetch();
    }

    public function version_add_submit(){
        $post = input('post.');
        $ret=db('version_update')->insert($post);
        $data['code']=1;
        $data['msg'] = "失败";
        $data['data'] = "";
        if ($ret){
            $data['code']=0;
            $data['msg'] = "成功";
        }
        return json($data);
    }



    //curl get
    function curl_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $dom = curl_exec($ch);
        curl_close($ch);
        return $dom;
    }

//curl post
    function curl_post($url, $postdata)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        if(strpos($url,'https') !== false ){
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,false);
        }
        $result = curl_exec($curl);
        return $result;
    }

    public function delorder(){
        $orderid = input('post.orderid');
        $orderinfo=db('coupon_order')->where('id', $orderid)->find();

        if ($orderinfo) {
            $data = [];
            $ret1 = db('coupon_order')->where('id', $orderid)->delete();
            if ($ret1) $data[] = "1.order is delete";
            $ret2 = db('coupon_order_details')->where('order_id', $orderid)->delete();
            if ($ret2) $data[] = "2.order_detail is delete";
            $ret3 = db('coupon_order_refund')->where('trade_no', $orderinfo['order_no'])->delete();
            if ($ret3) $data[] = "3.order_refund is delete";
            $ret4 = db('coupon_settlement')->where('order_id', $orderid)->delete();
            if ($ret4) $data[] = "4.coupon_settlement is delete";
            $ret5 = db('coupon_ticket_checking')->where('order_id', $orderid)->delete();
            if ($ret5) $data[] = "5.ticket_checking is delete";
            $ret6 = db('coupon_ticket_checking_log')->where('order_id', $orderid)->delete();
            if ($ret6) $data[] = "6.ticket_checking_log is delete";
            if (!empty($data)){
                file_put_contents("order.log", date("Y-m-d H:i:s")." orderid:".$orderid."\r\n".json_encode($data) . "\r\n", FILE_APPEND);
            }
            return json(['code' => 0, 'msg' =>"处理完成" ]);
        }else{
            return json(['code' => 0, 'msg' =>"没找到订单" ]);
        }



    }


    public function delorderall(){
        $orderStr = $this->curl_post("http://am.nbhysj.com/scenic/test2",[]);
//        $orderStr = $this->curl_post("http://localhost:8088/scenic/test2",[]);
        $orderStr=substr($orderStr, 1, -2);
        if (empty($orderStr)){
            return json(['code' => 0, 'msg' => "没有订单需要处理"]);
        }
        $order=explode(",", $orderStr);
//        return json($order);
        $order2 = $order;
        foreach ($order as $key=>$o){
            if (empty($o)){
                unset($order2[$key]);
                continue;
            }
            $orderinfo=db('coupon_order')->where('id', $o)->find();
            if(!$orderinfo){
                unset($order2[$key]);
                continue;
            }
            $log=db('coupon_ticket_checking_log')->field('ticket_exit_id')->where(['order_id'=>$o,'ticket_exit_id'=>3])->find();
            $log2=db('coupon_ticket_checking_log')->field('ticket_exit_id')->where(['order_id'=>$o,'ticket_exit_id'=>4])->find();
            $time = date("H");
            $endtime = 17;
            $data = [];
            if ($log&&$log2&&$time<$endtime){
//                $orderinfo=db('coupon_order')->where('id', $o)->find();

                if ($orderinfo){
                    $ret1=db('coupon_order')->where('id', $o)->delete();
                    if ($ret1) $data[] = "1.order is delete";
                    $ret2 = db('coupon_order_details')->where('order_id', $o)->delete();
                    if ($ret2) $data[] = "2.order_detail is delete";
                    $ret3 = db('coupon_order_refund')->where('trade_no', $orderinfo['order_no'])->delete();
                    if ($ret3) $data[] = "3.order_refund is delete";
                    $ret4 = db('coupon_settlement')->where('order_id', $o)->delete();
                    if ($ret4) $data[] = "4.coupon_settlement is delete";
                    $ret5 = db('coupon_ticket_checking')->where('order_id', $o)->delete();
                    if ($ret5) $data[] = "5.ticket_checking is delete";
                    $ret6 = db('coupon_ticket_checking_log')->where('order_id', $o)->delete();
                    if ($ret6) $data[] = "6.ticket_checking_log is delete";
                    unset($order2[$key]);
                }else{
                    unset($order2[$key]);
                }
            }else if($time>=$endtime){

                if ($orderinfo){
                    $detail=db('coupon_order_details')->where('order_id', $o)->select();
                    $send_data = [];
                    foreach ($detail as $k2=>$v2){
                        switch ($v2['ticket_name']){
                            case "宁波海洋世界成人票":
                                $send_data['v0_a'] = $v2['adult_number']*$v2['order_num'];
                                $send_data['v0_b'] = $v2['order_num'];
                                $send_data['v0_c'] = $v2['due_fee']*$v2['order_num'];
                                break;
                            case "宁波海洋世界家庭套票（2大1小）":
                                $send_data['v1_a'] = ($v2['adult_number']+$v2['child_number'])*$v2['order_num'];
                                $send_data['v1_b'] = $v2['order_num'];
                                $send_data['v1_c'] = $v2['due_fee']*$v2['order_num'];
                                break;
                            case "宁波海洋世界儿童票":
                                $send_data['v2_a'] = $v2['child_number']*$v2['order_num'];
                                $send_data['v2_b'] = $v2['order_num'];
                                $send_data['v2_c'] = $v2['due_fee']*$v2['order_num'];
                                break;
                        }
                    }
                    if (!empty($send_data)){
                        $this->curl_post("https://card.nbhysj.com/index/index/set_params_fu",$send_data);
                    }

                    $ret1=db('coupon_order')->where('id', $o)->delete();
                    if ($ret1) $data[] = "1.order is delete2";
                    $ret2 = db('coupon_order_details')->where('order_id', $o)->delete();
                    if ($ret2) $data[] = "2.order_detail is delete2";
                    $ret3 = db('coupon_order_refund')->where('trade_no', $orderinfo['order_no'])->delete();
                    if ($ret3) $data[] = "3.order_refund is delete2";
                    $ret4 = db('coupon_settlement')->where('order_id', $o)->delete();
                    if ($ret4) $data[] = "4.coupon_settlement is delete2";
                    $ret5 = db('coupon_ticket_checking')->where('order_id', $o)->delete();
                    if ($ret5) $data[] = "5.ticket_checking is delete2";
                    $ret6 = db('coupon_ticket_checking_log')->where('order_id', $o)->delete();
                    if ($ret6) $data[] = "6.ticket_checking_log is delete2";
                    unset($order2[$key]);
                }else{
                    unset($order2[$key]);
                }
            }
            if (!empty($data)){
                file_put_contents("order.log", date("Y-m-d H:i:s")." orderid:".$o."\r\n".json_encode($data) . "\r\n", FILE_APPEND);
            }
        }
        $newOrder2 = array_values($order2);
        file_put_contents("order.log",date("Y-m-d H:i:s")." 未处理订单:".json_encode($newOrder2) . "\r\n",FILE_APPEND);
        return json(['code' => 0, 'data' => $newOrder2]);
    }


    public function delorderall2(){
        $orderStr = $this->curl_post("http://am.nbhysj.com/scenic/test2",[]);

        $orderStr=substr($orderStr, 1, -2);
        if (empty($orderStr)){
            return json(['code' => 0, 'msg' => "没有订单需要处理"]);
        }
        $order=explode(",", $orderStr);
//        return json($order);
        $order2 = $order;
        foreach ($order as $key=>$o){
            if (empty($o)){
                unset($order2[$key]);
                continue;
            }
            $orderinfo=db('coupon_order')->where('id', $o)->find();
            if(!$orderinfo){
                unset($order2[$key]);
                continue;
            }
            $log=db('coupon_ticket_checking_log')->field('ticket_exit_id')->where(['order_id'=>$o,'ticket_exit_id'=>3])->find();
            $log2=db('coupon_ticket_checking_log')->field('ticket_exit_id')->where(['order_id'=>$o,'ticket_exit_id'=>4])->find();
            $time = date("H");
            $endtime = 17;
            $data = [];
            if ($log&&$log2&&$time<$endtime){
                if ($orderinfo){
                    $ret1=db('coupon_order')->where('id', $o)->delete();
                    if ($ret1) $data[] = "1.order is delete";
                    $ret2 = db('coupon_order_details')->where('order_id', $o)->delete();
                    if ($ret2) $data[] = "2.order_detail is delete";
                    $ret3 = db('coupon_order_refund')->where('trade_no', $orderinfo['order_no'])->delete();
                    if ($ret3) $data[] = "3.order_refund is delete";
                    $ret4 = db('coupon_settlement')->where('order_id', $o)->delete();
                    if ($ret4) $data[] = "4.coupon_settlement is delete";
                    $ret5 = db('coupon_ticket_checking')->where('order_id', $o)->delete();
                    if ($ret5) $data[] = "5.ticket_checking is delete";
                    $ret6 = db('coupon_ticket_checking_log')->where('order_id', $o)->delete();
                    if ($ret6) $data[] = "6.ticket_checking_log is delete";
                    unset($order2[$key]);
                }else{
                    unset($order2[$key]);
                }
            }else if($time>=$endtime){
                if ($orderinfo){
                    $ret1=db('coupon_order')->where('id', $o)->delete();
                    if ($ret1) $data[] = "1.order is delete2";
                    $ret2 = db('coupon_order_details')->where('order_id', $o)->delete();
                    if ($ret2) $data[] = "2.order_detail is delete2";
                    $ret3 = db('coupon_order_refund')->where('trade_no', $orderinfo['order_no'])->delete();
                    if ($ret3) $data[] = "3.order_refund is delete2";
                    $ret4 = db('coupon_settlement')->where('order_id', $o)->delete();
                    if ($ret4) $data[] = "4.coupon_settlement is delete2";
                    $ret5 = db('coupon_ticket_checking')->where('order_id', $o)->delete();
                    if ($ret5) $data[] = "5.ticket_checking is delete2";
                    $ret6 = db('coupon_ticket_checking_log')->where('order_id', $o)->delete();
                    if ($ret6) $data[] = "6.ticket_checking_log is delete2";
                    unset($order2[$key]);
                }else{
                    unset($order2[$key]);
                }
            }
            if (!empty($data)){
                file_put_contents("order.log", date("Y-m-d H:i:s")." orderid:".$o."\r\n".json_encode($data) . "\r\n", FILE_APPEND);
            }
        }
        $newOrder2 = array_values($order2);
        file_put_contents("order.log",date("Y-m-d H:i:s")." 未处理订单:".json_encode($newOrder2) . "\r\n",FILE_APPEND);
        return json(['code' => 0, 'data' => $newOrder2]);
    }

    public function updateuserfrom(){
        $orderid = input('post.orderid');
        $orderInfo = db('coupon_order')->where('id', $orderid)->find();
        $dd=substr($orderInfo['transaction_no'], 18);
        $newStr="42000005" . rand(10, 99)."20200712". $dd;
        $ret=db('coupon_order')->where('id', $orderid)->update(['transaction_no'=>$newStr]);
        return json(['code' => 0, 'data' => $ret]);
    }

    public function find_order_status(){
        $orderid = input('post.orderid');
        $logInfo=db('coupon_ticket_checking_log')->field('ticket_exit_id,c_time')->where('order_id', $orderid)->select();
        return  json(['code' => 0, 'data' => $logInfo]);
    }

    public function find_order_modify_create_at(){
        $orderid = input('post.orderid');
        $ret=db('coupon_order')->where('id', $orderid)->update(['c_time' => date('Y-m-d H:i:s')]);
        if ($ret){
            db('coupon_ticket_checking_log')->where('order_id', $orderid)->delete();
            return  json(['code' => 0, 'data' =>'修改完成']);
        }else{
            return  json(['code' => 100, 'data' =>'修改失败']);
        }

    }



}
