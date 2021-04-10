<?php


namespace app\Index\controller;



use think\Controller;
use think\Request;

class Api extends Controller
{
    
    public function __construct(){        
        //使用父类的构造函数，也就是调用Controller类的构造函数
//        parent::__construct();
        $request = Request::instance();
//         var_dump($request->method());
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

    public function indexFormList(){
        $data=input('get.');
        if(empty($data)){
            return $this->jsonFailMsg(1);
        }
        $map['form_type'] = $data['form_type'];
        $start = ($data['start']==0)?1:$data['start'];

        $info=db('admin_form')->where('form_type',$data['form_type'])->page($start,$data['length'])->order('id '.$data['order'][0]['dir'])->select();
        $result['draw'] = $data['draw'];
        $result['recordsTotal'] = count($info);
        $result['recordsFiltered'] = count($info);
        $result['data'] = $info;
        return json($result);

    }

    public function indexFormDelete(){
        if(input('id')) $id=input('id');
        if(empty(input('id'))) return $this->jsonFail();
        $res = db('admin_form')->where('id', $id)->delete();
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
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

    public function indexPart2Modify(){
        if(input('title1')) $data['title1']=input('title1');
        if(input('title2')) $data['title2']=input('title2');
        if(input('title3')) $data['title3']=input('title3');
        if(input('title4')) $data['title4']=input('title4');
        if(input('content')) $data['content']=input('content');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_file1")){
            $path=$this->upload("pic_file1");
            $data['pic1'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_file2")){
            $path=$this->upload("pic_file2");
            $data['pic2'] = '/uploads' . DS . $path['save'];
        }

        $res=db('admin_index_part2')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexPart3Modify(){
        if(input('str_1')) $data['str_1']=input('str_1');
        if(input('str_2')) $data['str_2']=input('str_2');
        if(input('str_3')) $data['str_3']=input('str_3');
        if(input('str_4')) $data['str_4']=input('str_4');
        if(input('str_5')) $data['str_5']=input('str_5');
        if(input('str_6')) $data['str_6']=input('str_6');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_1'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_2")){
            $path=$this->upload("pic_2");
            $data['pic_2'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_3")){
            $path=$this->upload("pic_3");
            $data['pic_3'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_4")){
            $path=$this->upload("pic_4");
            $data['pic_4'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_5")){
            $path=$this->upload("pic_5");
            $data['pic_5'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_6")){
            $path=$this->upload("pic_6");
            $data['pic_6'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("video_1")){
            $path=$this->upload("video_1");
            $data['video_1'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("video_2")){
            $path=$this->upload("video_2");
            $data['video_2'] = '/uploads' . DS . $path['save'];
        }
        $res=db('admin_index_part3')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexPart4Modify(){
        if(input('str_1')) $data['str_1']=input('str_1');
        if(input('str_2')) $data['str_2']=input('str_2');
        if(input('str_3')) $data['str_3']=input('str_3');
        if(input('str_4')) $data['str_4']=input('str_4');
        if(input('str_5')) $data['str_5']=input('str_5');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_1'] = '/uploads' . DS . $path['save'];
        }
        $res=db('admin_index_part4')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexPart5Modify(){
        if(input('str_1')) $data['str_1']=input('str_1');
        if(input('str_2')) $data['str_2']=input('str_2');
        if(input('str_3')) $data['str_3']=input('str_3');
        if(input('str_4')) $data['str_4']=input('str_4');
        if(input('str_5')) $data['str_5']=input('str_5');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_1'] = '/uploads' . DS . $path['save'];
        }
        $res=db('admin_index_part5')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexPart6Modify(){
        if(input('str_1')) $data['str_1']=input('str_1');
        if(input('str_2')) $data['str_2']=input('str_2');
        if(input('str_3')) $data['str_3']=input('str_3');
        if(input('str_4')) $data['str_4']=input('str_4');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_1'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_2")){
            $path=$this->upload("pic_2");
            $data['pic_2'] = '/uploads' . DS . $path['save'];
        }
        $res=db('admin_index_part6')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexContactModify(){
        if(input('str_1')) $data['str_1']=input('str_1');
        if(input('str_2')) $data['str_2']=input('str_2');
        if(input('str_3')) $data['str_3']=input('str_3');
        if(input('str_4')) $data['str_4']=input('str_4');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_1'] = '/uploads' . DS . $path['save'];
        }
        if(request()->file("pic_2")){
            $path=$this->upload("pic_2");
            $data['pic_2'] = '/uploads' . DS . $path['save'];
        }
        $res=db('admin_index_contact')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexHonorModify(){
        if(input('str_1')) $data['sort']=input('str_1');
        if(input('id')) $id=input('id');
        if(empty(input('id'))&&count($data)<1) return $this->jsonFail();
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_url'] = '/uploads' . DS . $path['save'];
        }
        $res=db('admin_honor')->where('id',$id)->update($data);
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexHonorDelete(){
        if(input('id')) $id=input('id');
        if(empty(input('id'))) return $this->jsonFail();
        $res = db('admin_honor')->where('id', $id)->delete();
        if($res){
            return $this->jsonSuccess();
        }else{
            return $this->jsonFail();
        }

    }

    public function indexHonorAdd(){
        if(input('str_1')) $data['sort']=input('str_1');
        if(input('pic_type')) $data['pic_type']=input('pic_type');
        if(request()->file("pic_1")){
            $path=$this->upload("pic_1");
            $data['pic_url'] = '/uploads' . DS . $path['save'];
        }

        if(count($data)<1) return $this->jsonFail();

        $res=db('admin_honor')->insert($data);
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
//        return json(['data'=>$userInfo]);
    }

    public function honorList(){
        $data=input('get.');
        if(empty($data)){
            return $this->jsonFailMsg(1);
        }
        $map['pic_type'] = $data['pic_type'];
        $start = ($data['start']==0)?1:$data['start'];

        $info=db('admin_honor')->where('pic_type',$data['pic_type'])->page($start,$data['length'])->order('sort '.$data['order'][0]['dir'])->select();
        $result['draw'] = $data['draw'];
        $result['recordsTotal'] = count($info);
        $result['recordsFiltered'] = count($info);
        $result['data'] = $info;
        return json($result);

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

    public function getIndexPart2(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFail();
        }
        $info=db('admin_index_part2')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFail();
        }

    }



    public function getIndexPart3(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFail();
        }
        $info=db('admin_index_part3')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFail();
        }

    }

    public function getIndexPart4(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFail();
        }
        $info=db('admin_index_part4')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFail();
        }

    }

    public function getIndexPart5(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFail();
        }
        $info=db('admin_index_part5')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFail();
        }

    }

    public function getIndexPart6(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFail();
        }
        $info=db('admin_index_part6')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFail();
        }

    }

    public function getIndexContact(){
        $id=input('id');
        if(empty($id)){
            return $this->jsonFail();
        }
        $info=db('admin_index_contact')->where('id',$id)->find();
        if ($info) {
            return $this->jsonSuccessData($info);
        }else{
            return $this->jsonFail();
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