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
	public function lplist_dbadd($loginid,$value)
	{
		foreach ($value as $key => $val) {
			$ass['pid']=$val;
			$ass['lid']=$loginid;
			if(!self::$lplist_db->insert($ass)){
			    return false;
		    }
		}
		return true;
	}
	public function project($value)
	{
		return self::$lplist_db->alias('lp,er_project p')->field('p.id,p.projectname')->where('lp.pid=p.id')->where($value)->select();
	}
}