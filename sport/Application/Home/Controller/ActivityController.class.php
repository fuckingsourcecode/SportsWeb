<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
 class ActivityController extends Controller
 {
     public function activity()
     {
        $m=M();
         $arr=$m->query("select name from `sport_project`");
         $this->assign('arr',$arr);
        $this->display();
     }
     public function join()
     {
         $name=session('name');
         $id=session('id');
         $arr['name']=$name;
         $arr['id']=$id;

     }
 }