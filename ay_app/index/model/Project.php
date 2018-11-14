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
}