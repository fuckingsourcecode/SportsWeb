<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class PersonalController extends Controller{
    public function personal()
    {
        $m=new Model();
        $m->query('set names utf8');
        $id=$_SESSION['id'];
        $sql="select * from `sport_user`  WHERE id='$id'";
        $array=$m->query($sql);

        $sql1="select project from `sport_player`  WHERE id='$id'";
        $project=$m->query($sql1);
        $this->assign('project',$project);
        $this->assign('array',$array);
        $this->display();
    }
}