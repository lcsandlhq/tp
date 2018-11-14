<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
class Index extends Base
{
    public function index()
    {
    	// print_r(Cookie::get('user'));
    	// print_r(json_decode(Cookie::get('user'),true));
    	$permissions=self::$user_db['superconservator'];
    	$this->assign(compact('permissions'));
        return $this->fetch();
    }
}
