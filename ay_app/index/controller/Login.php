<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
/**
 * 
 */
class Login extends Controller
{
	public function login()
	{
		$head = config('BASE_TKD');
		$this->assign(compact('head'));
		return $this->fetch();
	}
}