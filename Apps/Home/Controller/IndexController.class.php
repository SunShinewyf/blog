<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
         $module = M('Module');
         $article = D('Article');
         $message = M('Message');
         $feel =M('Feel');

         $fee = $feel->limit(5)->select();
//          dump($fee);
//          dump($message);
         $mess = $message->limit(5)->select();
//          dump($mess);
//          exit;
         $parent = $module->where('parentid = 0')->select();
         $result = $module->where("parentid!= 0")->select();
         $mid1 = $module->where("parentid = 6")->field('mid')->select();
         $mid2 = $module->where("parentid = 7")->field('mid')->select();
         $list = $article->relation(true)->limit(2)->order('aid desc')->select();
//          dump($tui);
//          exit;
         $this->assign("home",$home);
//          dump($mid1);
//          dump($mid2);
//          exit;
         $data1 = array();
         $data2 = array();
         foreach($mid1 as $key=>$value)
         {
             foreach($value as $key2=>$value2)
             {
                 $data1[$key]=$value2;
             }
         }
         foreach($mid2 as $key=>$value)
         {
             foreach($value as $key2=>$value2)
             {
                 $data2[$key]=$value2;
             }
         }
         $this->assign("mess",$mess);
         $this->assign("feel",$fee);
         $condition1['mid'] = array('in',$data1);
         $home = $article->relation(true)->where($condition1)->limit(5)->select();
         $condition2['mid'] = array('in',$data2);
         $admin = $article->relation(true)->where($condition2)->limit(5)->select();
         $this->assign("home",$home);
//          dump($home);
//          dump($admin);
//          exit;
         $this->assign("admin",$admin);
         $this->assign("parent",$parent);
         $this->assign("result",$result);
         $this->assign("list",$list);
         $this->display();
    }
    
    public function articlelist()
    {
         $parentid = $_GET['e'];
        //dump( $parentid);
        $article = D("Article");
        $module = M('module');
        $count=$article->count();
        $p = getpage($count,8);
        $mid2 = $module->where("parentid = $parentid")->field('mid')->select();
        $parent = $module->where('parentid = 0')->select();
        $result = $module->where("parentid!= 0")->select();
        $data=array();     //attention
        foreach($mid2 as $key=>$value)
        {
            foreach($value as $key2=>$value2)
            {
                $data[$key]=$value2;
            }
        }
      // dump($data);
       $data[$key+1]=$parentid;
        $condition['mid'] = array('in',$data);
        $list = $article->relation(true)->limit($p->firstRow.','.$p->listRows)->where($condition)->select();
       // dump($list);
        $this->assign('page', $p->show());
        $this->assign("parent",$parent);
        $this->assign("result",$result);
        $this->assign("list",$list);
        $this->display();
        
    }
    
    public function GetAll()
    {
        
        $mid = $_GET['e'];
        $article = D('Article');
        $module = M('module');
        $parent = $module->where('parentid = 0')->select();
        $result = $module->where("parentid!= 0")->select();
        $list = $article->where("mid = $mid")->select();
        $this->assign("parent",$parent);
        $this->assign("result",$result);
        $this->assign("list",$list);
        $this->display('articlelist');
    }
    
    public function detail()
    {
        if(isset($_GET['e']) && is_numeric($_GET['e']))
        {
            $aid=$_GET['e'];
            $article=D('Article');
            $article->where("aid=$aid")->setInc('atime');
            $one=$article->where("aid=$aid")->relation(true)->select();
//             dump($one);
//             exit;
            $this->assign("New",$one);
            $this->display();
        }
    }
    
    public function hot()
    {
        $article = D('Article');
        $result = $article->order('aid desc')->limit(7)->select();
//         dump($result);
//         exit;
         $this->ajaxReturn($result, 'JSON');
    }
    
    
    public function tui()
    {
        $article = D('Article');
        $result = $article->where("atui = 1")->limit(7)->select();
        $this->ajaxReturn($result, 'JSON');
    }
    
    public function message(){
        $article = D('Article');
     
        $message = M('Message');
        $module = M('Module');
        $parent = $module->where('parentid = 0')->select();
        $result = $module->where("parentid!= 0")->select();
        $count=$message->count();
        $p = getpage($count,4);
        $mess = $message->limit($p->firstRow.','.$p->listRows)->select();
//         dump($mess);
//         exit;
        $this->assign('page', $p->show());
        $this->assign("mess",$mess);
        $this->assign("parent",$parent);
        $this->assign("result",$result);
       
        $this->display();
    }
    
    public function add()
    {
         $mess = M("Message");
         $data['mauthor'] = $_POST['nickname'];
         $data['mcontent'] = $_POST['content'];
         $data['mtime'] = date('Y-m-d H:i:s');
         $mess->create($data);
         $re = $mess->add();
         if($re)
         {
             $this->redirect("message");
         }
       
    }
    
    public function feel(){
        $module = M('Module');
        $parent = $module->where('parentid = 0')->select();
        $result = $module->where("parentid!= 0")->select();
        $feel = M('Feel');

        $count=$feel->count();
        $p = getpage($count,8);
        $list = $feel->limit($p->firstRow.','.$p->listRows)->select();
        // dump($list);
        // exit;
        $this->assign("parent",$parent);
        $this->assign('page', $p->show());
        $this->assign("list",$list);
        $this->display();
    }
}