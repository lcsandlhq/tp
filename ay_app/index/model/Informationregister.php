<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Informationregister extends Model
{
	protected static $informationregister_db;
	protected static function init(){
		self::$informationregister_db = model('informationregister');
	}
	public function informationregisterselect($value)
	{
		return self::$informationregister_db->field("max(dnumber) as max")->where($value)->find();
	}
	public function informationregisterAdd($value)
	{
		return self::$informationregister_db->insert($value);
	}
	public function dataQuery($value)
	{
		return self::$informationregister_db->alias('i')->field("i.id,number,i.username,s.sampletypename,i.sampledate,i.completedate,i.sample")->join('er_sampletype s','i.sampletype=s.id','LEFT')->where($value)->select();
	}
	public function dataModification($where,$value)
	{
		return self::$informationregister_db->where($where)->update($value);
	}
}