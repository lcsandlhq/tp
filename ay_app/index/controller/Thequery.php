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
		$bt['bt']="查询";
		$this->assign(compact('bt','lydw'));
		return $this->fetch();
	}
}