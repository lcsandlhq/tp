<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Carcinoma extends Model
{
	protected static $carcinoma_db;
	protected static function init(){
		self::$carcinoma_db = model('carcinoma');
	}
	public function selectcarcinoma()
	{
		return self::$carcinoma_db->select();
	}
}