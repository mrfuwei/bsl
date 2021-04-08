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
    
    public function __construct(){        
        //使用父类的构造函数，也就是调用Controller类的构造函数
       // parent::__construct(); 
        $request = Request::instance();
        // var_dump($request->method());
        if(($request->action())!="login"&&($request->method()!='GET')){
            $token=input('token');
           if(!$token||empty($token)){
                echo json_encode(['code'=>400,'msg'=>'没有权限']);
                exit;
           } 
           $arr=json_decode(base64_decode($token));
           if(!isset($arr->username)){
                echo json_encode(['code'=>400,'msg'=>'没有权限']);
                exit;
           } 
           $info=db('admin_user')->where('username',$arr->username)->find();
           if($info['token']!=$token){
            // var_dump(3);
                echo json_encode(['code'=>400,'msg'=>'没有权限']);
                exit;
           } 
           if(($arr->c_time+7200)<time()){
                echo json_encode(['code'=>400,'msg'=>'没有权限']);
                exit;
           } 
        }
       

    }

    public function indexBannerModify(){
        if(input('title')) $data['title']=input('title');
        if(input('sub_title')) $data['sub_title']=input('sub_title');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_file")){
            $path=$this->upload("pic_file");
            $data['pic_url'] = '/uploads' . DS . $path['save'];
        }
        
        $res=db('admin_index_banner')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }
       
    }


    private function upload($name)
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

    public function test(){
        // $token=input('token');
        // $arr=json_decode(base64_decode($token));
       var_dump($request->method());
    }

    public function login(){

        $data=input('post.');
        $userInfo=db('admin_user')->where('username',$data['username'])->find();
        if($userInfo['username']!=$data['username']){
            return $this->jsonFail();
        }
        if($userInfo['password']!=md5('bsl'.$data['password'])){
            return $this->jsonFail();
        }
        $token=$this->getToken($data['username']);
        db('admin_user')->where('id',$userInfo['id'])->update(['token'=>$token]);
        return $this->jsonSuccessData($token);

        // var_dump($data);
        return json(['data'=>$userInfo]);
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

    public function tokenIsExpire(){
        return $this->jsonSuccess();
    }


    private function jsonFailMsg($msg){
         return json(['msg'=>$msg,'code'=>500]);  
    }

    private function jsonFail(){
         return json(['msg'=>'失败','code'=>500]);  
    }

    private function jsonSuccess(){
         return json(['msg'=>'成功','code'=>200]);  
    }


    private function jsonSuccessData($data){
         return json(['msg'=>'成功','code'=>200,'data'=>$data]);  
    }

    private function jsonFailCodeMsg($code,$msg){
         return json(['msg'=>$msg,'code'=>$code]);  
    }

    private function getToken($username){
        $arr=array(
            'username'=>$username,
            'c_time'=>time()
        );
        return base64_encode(json_encode($arr));
    }





}