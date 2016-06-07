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
         $classid=session('$classid');
         $grade=session('grade');
         $academy=session('academy');
         $sex=session('sex');

         /*取出来是一个数组，需要合并为一个字符串*/
         $array =$_POST["project"];
         $project=implode('/',$array);
         var_dump($project);

         $m1=new Model();
         $sql="insert into `sport_player`(`id`,`name`,`classid`,`grade`,`academy`,`sex` ,`project`)VALUES ('$id','$name','$classid','$grade','$academy','$sex','$project')";
        $count=$m1->execute($sql);
        if($count>0)
        {
            $this->success("报名成功！");
        }
         else{
             $this->error("报名失败!");
         }
     }
 }