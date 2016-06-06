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

       if($count>0)
       {
           //thinphp的sql函数
           //$date['name']= $m->where($where)->getField('name');
           //$date['id']=$m->where($where)->getField('id');
           $sql1="select NAME from `sport_user` WHERE `id`='$id'and `password`='$password'";
           var_dump($m->query($sql1));
           $name2=implode($m->query($sql1));
           dump($name2);

          $_SESSION['name']=$name2;

           $this->success('登录成功',U('Index/index'));
       }
        else{
            $this->error('登录失败！');
        }
    }
}