<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Base extends Controller{
	//初始化
	public function _initialize($value='')
	{
		/*if (!Session::has('id')) {
			$this->redirect('Login/login');
		}*/
		$head = config('BASE_TKD');
		$this->assign(compact('head'));
	}
}