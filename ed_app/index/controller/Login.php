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
		Cookie::set('user',$loginxx,86400);#
		$this->success('登录成功','Index/index','',1);
	}
	public function loginexit()
	{
		Cookie::clear('user');
		$this->redirect('/');
	}
	public function ChangePassword()
	{
		if (request()->isPost()) {
			$username=input("post.username");
			$qdusername=input("post.qdusername");
			$where['id']=json_decode(Cookie::get('user'),true)['id'];
			$save['pwdan']=md5($username);
			$save['pwdming']=$username;
			if(self::$login=model('login')->loginupdate($where,$save)){
				Cookie::clear('user');
				$data['successof']=1;
				$data['data']='修改成功';
			}else{
				$data['successof']=2;
				$data['data']='修改失败';
			}
			echo json_encode($data);
		}else{
			$bt['bt']='修改密码';
			$head = config('BASE_TKD');
			$this->assign(compact('head','bt'));
			return $this->fetch();
		}
	}
}