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
	public function dataModification($where,$value)
	{
		return self::$informationregister_db->where($where)->update($value);
	}
	public function financial($value,$keyword)
	{
		return self::$informationregister_db->alias('i')->field("l.account,GROUP_CONCAT(i.sampletype separator ',') AS sampletype,sum(i.price) as price")->join('er_login l','i.lid=l.id ','LEFT')->where($value)->group('i.lid')->paginate(30,false,array('query'=>$keyword));
	}
	public function selectnumber($value)
	{
		return self::$informationregister_db->field("number,numberabbreviationname")->where($value)->find();
	}
}