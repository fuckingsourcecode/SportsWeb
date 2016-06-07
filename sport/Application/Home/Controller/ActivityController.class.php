<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
 class ActivityController extends Controller
 {
     public function activity()
     {
         $name=session('name');
         $id=session('id');
         $arr['name']=$name;
         $arr['id']=$id;
        $this->display();
     }
 }