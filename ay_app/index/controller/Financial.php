<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Financial extends Base
{
	protected static $login;
	protected static $informationregister;
	protected static $project;
	public function financial()
	{
		self::$login=model('login');
		$lydw=self::$login->lydw();
		$fzdw=self::$login->fzdw();
		$bt['bt']='财务';
		$this->assign(compact('bt','lydw','fzdw'));
		return $this->fetch();
	}
	public function financialdetails()
	{
		self::$informationregister=model('Informationregister');
		self::$project=model('Project');
		$totalprice=0;
		$data=array();
		$financial=self::$informationregister->financial();
		foreach ($financial as $value) {
			$arr = explode( ',', $value['sampletype']);
			$arr = array_unique($arr);
			$str = implode( ',', $arr);
			$where['id']=array('in',$str);
			$projectsj=self::$project->selectProjectwhere($where);
			// var_dump($sampletypesj);
			$price=0;
			foreach ($projectsj as $val) {
				if (substr_count($value['sampletype'],$val['id'])) {
					$lyprojectxj['sampletypename']=$val['sampletypename'];
					$lyprojectxj['sampletypegs']=substr_count($value['sampletype'],$val['id']);
					$lyproject[]=$lyprojectxj;
					$price=$price+$val['price'];
				}
			}
			$value['lyproject']=$lyproject;
			$value['price']=$price;
			$totalprice=$totalprice+$price;
			$data[]=$value;
			// echo substr_count($value['sampletype'],'1');
		}
		$bt['bt']='财务';
		$this->assign(compact('bt','data','totalprice'));
		return $this->fetch();
	}
}