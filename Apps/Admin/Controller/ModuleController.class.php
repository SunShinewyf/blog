<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ModuleController extends CommonController {
    public function index(){
        $module=M('Module');
        $parent = $module->where("parentid = 0")->select();
        
        $arr=$module->select();
//         dump($arr);
//         exit;
        $this->assign('arr',$arr);
        $this->assign("parent",$parent);
//         dump($parent);
//         exit;
         $this->display();
    }
    
    
    public function add()
    {
       $module = M('Module');
       $name = $_POST['nickname'];
       $desc = $_POST['desc'];
       $parentid = $_POST['parentid'];
       $data['mname'] = $name;
       $data['mdesc'] = $desc;
       $data['parentid'] = $parentid;
       $data['mtime'] = date('Y-m-d H:i:s');
       $module->create($data);
       $re=$module->add();
       if($re)
       {
           $this->success("模块添加成功!","index");
       }else{
           $this->error("模块添加失败!");
       }
    }
    
    public function delete()
    {
        $mid = $_GET['id'];
        $module = M('Module');
        $re=$module->where("mid = $mid")->delete();
        if($re)
        {
            $this->success("删除模块成功!");
        }else{
            $this->error("删除模块失败!");
        }
    }
    
    public function edit()
    {
        $mid = $_GET['id'];
         
        $module = M('Module');
        import('ORG.Util.Page');// 导入分页类
        $count = $module->count();
        $page = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
        //分页跳转的时候保证查询条件
        $show = $page->show();
        $arr = $module->limit($page->firstRow.','.$page->listRows)->select();
        $parent = $module->where("parentid = 0")->select();
        //         dump($arr);
        //         exit;
        
        $result = $module->where("mid = $mid")->find();
        $this->assign('arr',$arr);
        $this->assign("parent",$parent);
        $this->assign('data',$result);
        $this->display();
    }
    
    
    
    public function update(){
          $module = M('Module');
         // dump($_POST);
          $mid = $_POST['mid'];
          $mname = $_POST['nickname'];
          $parentid = $_POST['parentid'];
          $mdesc = $_POST['desc'];
          $data['mname'] = $mname;
          $data['parentid'] = $parentid;
          $data['mdesc'] = $mdesc;
          $data['mtime'] =  date('Y-m-d H:i:s');
          $id=$module->where("mid = $mid")->create($data);
          $re = $module->save();
          if($re)
          {
              $this->success("模块编辑成功!","Index/index",1);
          }else{
              $this->error("模块编辑失败!");
          }
          
          
    }
}