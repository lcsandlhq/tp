<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Inslist extends Model
{
	protected static $inslist_db;
	protected static function init(){
		self::$inslist_db = model('inslist');
	}
	public function insertinslist($value)
	{
		return self::$inslist_db->insert($value);
	}
}