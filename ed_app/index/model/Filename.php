<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Filename extends Model
{
	protected static $filename_db;
	protected static function init(){
		self::$filename_db = model('filename');
	}
	public function selectfilename($value)
	{
		return self::$filename_db->field("max(filenumber) as max")->where($value)->find();
	}
	public function addfilename($value)
	{
		return self::$filename_db->insert($value);
	}
	public function selectqbfilename($value)
	{
		return self::$filename_db->field("id,fileurl")->where($value)->order('filedate DESC,filenumber DESC')->select();
	}
	public function selectonefilename($value)
	{
		return self::$filename_db->field("fileurl,filecontent")->where($value)->order('filedate,filenumber DESC')->find();
	}
}