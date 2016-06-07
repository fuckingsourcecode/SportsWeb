<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index()
    {
         $m=new Model();
        /*运动快报*/
        $arr=$m->query('select * from `sport_news`');
        $this->assign('arr',$arr);
        /*预告消息*/
        $array=$m->query('select * from `sport_project` ORDER BY `hosttime` asc');
        $this->assign('array',$array);

        $this->display();
    }
    public function checkSession()
    {
     if(!isset($_SESSION['name'])||$_SESSION['name']=='')
     {
         $this->ajaxReturn('please login');
     }
        else{
            $this->ajaxReturn($_SESSION['name']);
        }
    }
    public function logout()
    {
        session(null);
        //$this->ajaxReturn("OK");
        $this->redirect('index');
    }

}