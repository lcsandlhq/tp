<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class View extends Model
{
	/*protected static $view_information_db;
	protected static function init(){
		self::$view_information_db = model('information_view');
	}*/
	public function dataQuery($value)
	{
		return db('view_information')->field("account,id,number,username,projectname,age,gender,sampledate,GROUP_CONCAT(carcinomaname separator '，') as carcinomaname,GROUP_CONCAT(sampletypename separator '，') as sampletypename,completedate,sample,length(GROUP_CONCAT(sid separator ','))-length(REPLACE (GROUP_CONCAT(sid separator ','), ',', ''))as sid,
GROUP_CONCAT(sid separator '，') as qbsid")->where($value)->order('number DESC')->group('number')->paginate(30,false);
	}
	public function dataQueryCX($value,$keyword)
	{
		return db('view_information')->field("account,id,number,username,projectname,age,gender,sampledate,GROUP_CONCAT(carcinomaname separator '，') as carcinomaname,GROUP_CONCAT(sampletypename separator '，') as sampletypename,completedate,sample,length(GROUP_CONCAT(sid separator ','))-length(REPLACE (GROUP_CONCAT(sid separator ','), ',', ''))as sid,
GROUP_CONCAT(sid separator '，') as qbsid")->where($value)->order('number DESC')->group('number')->paginate(30,false,array('query'=>$keyword));
	}
	public function dataExcel($value)
	{
		return db('view_information')->field("account,number,username,projectname,sampledate")->where($value)->order('number DESC')->group('number')->select();
	}
}