<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Sampletype extends Model
{
	protected static $sampletype_db;
	protected static function init(){
		self::$sampletype_db = model('sampletype');
	}
	public function selectsarcinoma()
	{
		return self::$sampletype_db->select();
	}
	public function selectsarcinomawhere($value)
	{
		return self::$sampletype_db->where($value)->select();
	}
}