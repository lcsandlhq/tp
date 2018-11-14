<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Iclist extends Model
{
	protected static $iclist_db;
	protected static function init(){
		self::$iclist_db = model('iclist');
	}
	public function carcinomaAdd($number,$value)
	{
		foreach ($value as $key => $val) {
			$ass['cid']=$val;
			$ass['number']=$number;
			if(!self::$iclist_db->insert($ass)){
			    return false;
		    }
		}
		return true;
	}
}