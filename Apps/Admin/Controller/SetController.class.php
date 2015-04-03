<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class SetController extends CommonController {
    public function index(){
         $this->display();
    }
    
    public function change(){
          $admin=M('Admin');
          $result=$admin->find();
          if(isset($_POST))
          {
              $result['password']=md5($_POST['password']);
              $re=$admin->save($result);
              if($re)
              {
                  $this->success("修改密码成功!");
              }else{
                  $this->error("修改密码失败!");
              }
          }
    }
}