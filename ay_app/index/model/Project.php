<?php
namespace app\index\model;
use think\Paginator;
use think\Model;
/**
 * 
 */
class Project extends Model
{
	protected static $project_db;
	protected static function init(){
		self::$project_db = model('project');
	}
	public function DataQuery()
	{
		return self::$project_db->select();
	}
	public function DataAdd($value)
	{
		return self::$project_db->insert($value);
	}
	public function selectProjectwhere($value)
	{
		return self::$project_db->where($value)->select();
	}
}