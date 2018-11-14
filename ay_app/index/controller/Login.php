<?php
namespace app\index\controller;
use think\Controller;
use think\Cookie;
/**
 * 
 */
class Login extends Controller
{
	protected static $login;
	public function login()
	{
		$head = config('BASE_TKD');
		$this->assign(compact('head'));
		return $this->fetch();
	}
	public function logindl()
	{
		self::$login=model('login');
		$login['account']=input('post.account');
		$login['pwdan']=md5(input('post.password'));
		$loginxx = self::$login->loginuserdl($login);
		Cookie::set('user',$loginxx,86400);
		$this->success('登录成功','Index/index','',1);
	}
	public function loginexit()
	{
		Cookie::clear('user');
		$this->redirect('/');
	}
}