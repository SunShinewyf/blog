<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
         $article = D("Article");
         $count = $article->count();
//          dump($count);
//          exit;
         $page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
         //分页跳转的时候保证查询条件
         $show = $page->show();
         $result = $article->limit($page->firstRow.','.$page->listRows)->relation(true)->select();
//          dump($result);
//          exit;
         $this->assign('result',$result);
        $this->assign('page',$show);// 赋值分页输出
//          dump($result);
//          exit;
         $this->display();
    }
    
    public function add(){
        $module = M("Module");
        $result=$module->select();
        $this->assign('arr',$result);
        $this->display();
    }
    
    public function save(){
//         dump($_POST);
//         exit;
        $data['atitle'] = $_POST['title'];
        $data['aauthor'] = $_POST['author'];
        $data['acontent'] = $_POST['content'];
        $data['mid'] = $_POST['mid'];
        $data['atui'] = $_POST['tui'];
        $data['atime'] = 0;
        $data['aupdate'] = date('Y-m-d H:i:s');
        $article = D('Article');
        $article->create($data);
        $re=$article->add();
        if($re)
        {
            $this->success("文章添加成功!","index",1);
        }else{
            $this->error("文章添加失败!");
        }
        
    }
    
    
    //文章的删除
    public function delete(){
        $aid = $_GET['id'];
//         dump($aid);
//         exit;
        $article = D('Article');
        $re=$article->where("aid = $aid")->delete();
//         dump($re);
//         exit;
        if($re)
        {
            $this->success("文章删除成功!");
        }else{
            $this->error("删除文章失败!");
        }
   }
   
   
   //编辑文章
   
   public function edit()
   {
	 
       $article = D("Article");
       $module = M('Module');
       $aid = $_GET['id'];
       $result = $article->where("aid = $aid")->relation(true)->find();
       $list = $module->select();
//        dump($result);
//        exit;
       $this->assign('module',$list);
       $this->assign('arr',$result);
       $this->display();
   }
   
   public function update()
   {
   //  dump($_POST);
  // exit;
      $aid=$_POST['aid'];
      $data['atitle'] = $_POST['title'];
      $data['aauthor'] = $_POST['author'];
      $data['acontent'] = $_POST['content'];
      $data['mid'] = $_POST['mid'];
      $data['atui'] = $_POST['tui'];
      $data['aupdate'] = date('Y-m-d H:i:s');
      $article = D('Article');
      $vo=$article->where("aid = $aid")->create($data);
   
      $re = $article->save();
//       dump($re);
//       exit;
      if($re)
      {
          $this->success("编辑文章成功!","index",1);
      }else{
          $this->error("编辑文章失败!");
      }
   }

}