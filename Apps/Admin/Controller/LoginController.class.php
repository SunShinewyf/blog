<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
         $this->display();
    }
    
    public function recheck()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
//        dump($_POST);
//        dump($password);
        $admin = M("Admin");
       
        $result = $admin->select();
//         dump($result);
// //         exit;
        $data=array();
        if(!($username==$result[0]['username'] && $password==$result[0]['password']))
        {
            $data['status']=0;
        }else{
            session('username',$username);
            session('password',$password);
            $data['status']=1;
            $data['name'] = $username;
        }

        $this->ajaxReturn($data, 'JSON');
    }
 
}