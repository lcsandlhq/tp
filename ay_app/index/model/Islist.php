<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Islist extends Model
{
	protected static $islist_db;
	protected static function init(){
		self::$islist_db = model('islist');
	}
	public function sarcinomaAdd($number,$value)
	{
		foreach ($value as $key => $val) {
			$ass['sid']=$val;
			$ass['number']=$number;
			if(!self::$islist_db->insert($ass)){
			    return false;
		    }
		}
		return true;
	}
}