<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function check()
    {
        if(!isset($_SESSION['username'])||$_SESSION['username']=='')
        {
            $this->redirect();
        }
    }
    public function index()
    {
      $this->display();
    }
}