<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
         $this->display();
    }
    
    public function logOut()
    {
        session(null);
        $this->redirect('Login/login');
    
    }
}