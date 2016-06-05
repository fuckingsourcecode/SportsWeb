<?php
namespace Home\Controller;
use Think\Controller;

class RegisterController extends  Controller{
     public  function register()
     {
         $this->display();
     }
    public function do_register()
    {
        $m=M('user');
        $id=$_POST['inputStuNum'];
        $name=$_POST['inputStuName'];
        $password=$_POST['inputPassword'];
        $confirm=$_POST['inputConfirm'];
        $academy=$_POST['inputCollege'];
        $sex=$_POST['optionsRadio'];
        $date=array(
            'id'      =>$id,
            'name'    =>$name,
            'password'=>$password,
            'academy' =>$academy,
            'sex'     =>$sex,
        );
        $m->add($date);
    }
 }