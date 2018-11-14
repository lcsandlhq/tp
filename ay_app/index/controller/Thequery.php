<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Thequery extends Base
{
	public function thequery()
	{
		$bt['bt']="查询";
		$this->assign(compact('bt'));
		return $this->fetch();
	}
}