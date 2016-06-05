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

}