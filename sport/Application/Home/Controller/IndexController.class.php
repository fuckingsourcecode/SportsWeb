<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index()
    {
         $m=new Model();
        $arr=$m->query('select * from `sport_news`');
        $this->assign('arr',$arr);
        $this->display();
    }
    public function checkSession()
    {
     if(!isset($_SESSION['name'])||$_SESSION['name']=='')
     {
         $date=urlencode("没有登录有个JB的session");
         $date= json_encode($date);
        echo  $date=urldecode($date);

     }
        else{
            $this->ajaxReturn($_SESSION['name']);
        }
    }
    public function logout()
    {

    }
}