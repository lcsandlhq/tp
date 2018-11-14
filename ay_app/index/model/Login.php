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
		return self::$login_db->alias('l')->field("l.account,l.head,l.khdate,l.pwdming,l.settlementprice,GROUP_CONCAT(p.projectname separator ',') AS projectname ")->join("er_lplist lp","l.id=lp.lid","LEFT")->join("er_project p","lp.pid = p.id","LEFT")->where('l.superconservator',0)->group("l.account")->select();
	}
	public function loginuserdl($value)
	{
		return self::$login_db->where($value)->find();
	}
	public function lydw()
	{
		return self::$login_db->field('id,account')->where('superconservator',0)->select();
	}
}