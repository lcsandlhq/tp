<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Thequery extends Base
{
	protected static $login;
	public function thequery()
	{
		self::$login=model('login');
		$lydw=self::$login->lydw();
		$xs=self::$user_db['superconservator'];
		$bt['bt']="查询";
		$this->assign(compact('bt','lydw','xs'));
		return $this->fetch();
	}
}