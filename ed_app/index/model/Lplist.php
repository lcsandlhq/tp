<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Lplist extends Model
{
	protected static $lplist_db;
	protected static function init(){
		self::$lplist_db = model('lplist');
	}
	public function lplist_dbadd($value)
	{
		return self::$lplist_db->insertAll($value);
	}
	public function project($value)
	{
		return self::$lplist_db->alias('lp,er_project p')->field('p.id,p.projectname')->where('lp.pid=p.id')->where($value)->select();
	}
	public function projectcselect($value)
	{
		return self::$lplist_db->field('price')->where($value)->find();
	}
	public function projectcselectsomeone($value)
	{
		return self::$lplist_db->where($value)->select();
	}
	public function lplist_dbupdate($where,$value)
	{
		self::$lplist_db->where($where)->delete();
		return self::$lplist_db->insertAll($value);
	}
}