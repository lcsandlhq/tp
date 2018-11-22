<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Project extends Base
{
	public function project()
	{
		$bt['bt']='项目管理';
		$project=model('project')->DataQuery();
		$this->assign(compact('bt','project'));
		return $this->fetch();
	}
	public function projectAdd()
	{
		if (request()->isPost()) {
			$add['projectname']=input("post.projectname");
			$project=model('project')->DataAdd($add);
			if ($project) {
				$data['successof']=1;
				$data['data']='添加成功';
			}else{
				$data['successof']=2;
				$data['data']='添加失败';
			}
			echo json_encode($data);
		}else{
			$bt['bt']='项目管理添加';
			$this->assign(compact('bt'));
			return $this->fetch();
		}
	}
}