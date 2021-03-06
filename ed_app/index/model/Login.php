<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Login extends Model
{
	protected static $login_db;
	protected static function init(){
		self::$login_db = model('login');
	}
	public function login($value)
	{
		return self::$login_db->insertGetId($value);
	}
	public function slelogin()
	{
		return self::$login_db->alias('l')->field("l.id,l.account,l.head,l.khdate,l.pwdming,GROUP_CONCAT(p.projectname separator ',') AS projectname ")->join("er_lplist lp","l.id=lp.lid","LEFT")->join("er_project p","lp.pid = p.id","LEFT")->where('l.superconservator','<>',1)->group("l.account")->select();
	}
	public function loginuserdl($value)
	{
		return self::$login_db->where($value)->find();
	}
	public function lydw()
	{
		return self::$login_db->field('id,account')->where('superconservator',0)->select();
	}
	public function fzdw()
	{
		return self::$login_db->field('id,head')->where('superconservator',0)->group('head')->select();
	}
	public function loginupdate($where,$value)
	{
		return self::$login_db->where($where)->update($value);
	}
}