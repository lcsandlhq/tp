<?php
namespace app\index\controller;
use think\Controller;
use think\Cookie;
class Base extends Controller{
	protected static $user_db;
	//初始化
	public function _initialize($value='')
	{
		if (!Cookie::has('user')) {
			$this->redirect('Login/login');
		}
		self::$user_db=json_decode(Cookie::get('user'),true);
		$head = config('BASE_TKD');
		$this->assign(compact('head'));
	}
}