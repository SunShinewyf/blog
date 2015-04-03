<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    protected function _initialize(){
//         dump($_SESSION);
//         exit;
        if(!isset($_SESSION['username']) || $_SESSION['username']==''){
            // 尚未登录，清楚该用户所有session
            $this->redirect('Login/index');
        }
    }
}