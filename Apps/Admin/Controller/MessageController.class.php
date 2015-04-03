<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {
    public function index(){
        $message = M('Message');
        $mess = $message->select();
        $this->assign('list',$mess);
         $this->display();
    }
    
    public function delete()
    {
        $mid = $_GET['id'];
        
        $mess = M('Message');
        $where['mid'] = $mid;
        $re = $mess->delete($where);
        if($re)
        {
            $this->success("删除数据成功!");
        }else{
            $this->error("删除失败!");
        }
    }
}