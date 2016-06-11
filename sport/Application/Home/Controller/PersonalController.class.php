<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class PersonalController extends Controller{
    public function personal()
    {
        $m=new Model();
        $m->query('set names utf8');
        $name=$_SESSION['name'];
        $sql="select * from `sport_user` WHERE name='$name'";
        $array=$m->query($sql);
        $this->assign('array',$array);
        $this->display();
    }
}