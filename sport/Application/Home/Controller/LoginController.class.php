<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class LoginController extends Controller{
    public function login()
    {
        $this->display();
    }
    public function do_login()
    {
        $id = $_POST['inputStuNum'];
        $password = $_POST['inputPassword'];
        $checkbox=$_POST['checkbox'];

     /*   thinkphp的sql操作函数
        $m=M('user');
        $where['id']=$id;
        $where['password']=$password;
        $count=$m->where($where)->select();*/
        $m=new Model();
        $sql="select * from `sport_user` WHERE `id`='$id'and `password`='$password'";
        //$sql2="select ID from `sport_user` WHERE `id`='$id'and `password`='$password'";
        $count=$m->query($sql);
       if($count!=null)
       {
           //thinphp的sql函数
           //$date['name']= $m->where($where)->getField('name');
           //$date['id']=$m->where($where)->getField('id');

           //取出登录者的name作为session
           $sql1="select NAME from `sport_user` WHERE `id`='$id'and `password`='$password'";
           $date=$m->query($sql1);
            $name= $date[0]['NAME'];
             session('name',$name);
           $this->success('登录成功',U('Index/index'),3);
       }
        else{
            $this->error('用户名或密码错误！');
        }
    }
}