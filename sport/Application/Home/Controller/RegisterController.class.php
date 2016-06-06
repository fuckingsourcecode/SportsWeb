<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class RegisterController extends  Controller{
     public  function register()
     {
         $this->display();
     }

    public function do_register()
    {

        $id = $_POST['inputStuNum'];
        $name = $_POST['inputStuName'];
        $password = $_POST['inputPassword'];
        $confirm = $_POST['inputConfirm'];
        $academy = $_POST['inputCollege'];
        $sex = $_POST['optionsRadio'];
      /*  //thinkphp对数据的插入操作
      $m = M('user');
       $date = array(
            'id' => $id,
            'name' => $name,
            'password' => $password,
            'academy' => $academy,
            'sex' => $sex,
        );
        $count = $m->add($date);*/
        $m=new Model();
        $m->query("SET NAMES 'utf8'");
        $sql="INSERT INTO `sport_user`(`id`, `name`, `password`, `academy`, `sex`) VALUES ('$id','$name','$password','$academy','$sex')";
        $count=$m->execute($sql);
       if ($count)
        {
            $this->success('注册成功', U('Login/login'),2);
            exit;
        } else
        {
            $this->error("注册失败！");
        }
    }
    public function ajaxAcademy()
    {
        $m=new Model();
        $m->query('set names utf8');
        $sql="select name from sport_academy ";
        $arr=$m->query($sql);
        $this->ajaxReturn($arr,'JSON');
    }
    public function ajaxNum()
    {
        $id=$_POST['id'];
        $m=M('user');
        $count=$m->where($id)->select();
        if($count>0)
        {
            $this->ajaxReturn("该账号已注册！");
        }
        else{
            $this->ajaxReturn("该账号可注册！");
        }
    }
}