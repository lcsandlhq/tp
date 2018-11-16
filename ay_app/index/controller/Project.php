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
			$add['price']=input("post.price");
			$project=model('project')->DataAdd($add);
			if ($project) {
				$this->success('添加成功','Project/projectAdd','',1);
			}else{
				$this->error('添加失败');
			}
		}else{
			$bt['bt']='项目管理添加';
			$this->assign(compact('bt'));
			return $this->fetch();
		}
	}
}