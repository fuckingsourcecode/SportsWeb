<?php
namespace Home\Controller;
use Think\Controller;

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
        $m=M('user');
        $where['id']=$id;
        $where['password']=$password;
        $count=$m->where($where)->select();
       if($count>0)
       {
           $date['name']= $m->where($where)->getField('name');
           $date['id']=$m->where($where)->getField('id');
           $_SESSION['name']=$date['name'];
           $_SESSION['id']=$date['id'];
           $this->success('登录成功',U('Index/index'));
       }
        else{
            $this->error('登录失败！');
        }
    }
}