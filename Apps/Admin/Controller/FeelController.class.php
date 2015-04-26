<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class FeelController extends CommonController {
    public function index(){
        $Feel = M('Feel');
        $feel = $Feel->select();
      
        $this->assign('list',$feel);
         $this->display();
    }
    
   
    public function add()
    {
        $data['fcontent'] = $_POST['content'];
        $data['ftime'] = date("Y-m-d H:i:s");
        $feel = M('Feel');
        $feel->create($data);
        $re = $feel->add();
        if($re)
        {
            $this->success("添加成功!","index");
        }else{
            $this->error("添加失败!");
        }
     }
     
     public function delete()
     {
         $fid = $_GET['id'];
         $where['fid'] = $fid;
         $feel = M('Feel');
         $re = $feel->delete($where);
         if($re){
             $this->success("删除成功!");
         }else{
             $this->error("删除失败!");
         }
     }
     
     public function edit()
     {
         $feel = M("Feel");
         $list = $feel->select();
         $aid = $_GET['id'];
//          dump($aid);
         $result = $feel->where("fid = $aid")->find();
//          dump($result);
//          exit;
         $this->assign('arr',$result);
         $this->assign("list",$list);
         $this->display();
     }
     
     public function update()
     {
         $feel = M('Feel');
         $data['fcontent'] = $_POST['content'];
         $data['ftime'] = date("Y-m-d H:i:s");
         $feel->create($data);
         $re = $feel->save();
         if($re)
         {
             $this->success("编辑成功!","index");
         }else{
             $this->error("编辑失败!");
         }
         
     }
}