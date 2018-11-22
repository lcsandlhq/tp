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
		$conditions=array();
		$totalprice=0;
		$data=array();
		$keyword=array();
		// echo self::$user_db['superconservator'];
		if (!empty(input("account"))) {
			$conditions['i.lid']=input("account");
			$keyword['account']=input("account");
		}
		if (!empty(input("sampledate"))) {
			$date=input("sampledate");
			$sampledate=explode('~',$date);
			$conditions['i.sampledate']=array(["<=",$sampledate[1]],[">=",$sampledate[0]],'and');
			$keyword['sampledate']=$date;
		}
		if (!empty(input("head"))) {
			$conditions['l.head']=input("head");
			$keyword['head']=input("head");
		}
		if (empty($conditions)) {
			$conditions=1;
		}
		$financial=self::$informationregister->financial($conditions,$keyword);
		foreach ($financial as $value) {
			$arr = explode(',', $value['sampletype']);
			$arr = array_unique($arr);
			$str = implode( ',', $arr);
			$where['id']=array('in',$str);
			$projectsj=self::$project->selectProjectwhere($where);
			// var_dump($projectsj);
			$lyprojectxj=array();
			$lyproject=array();
			$arraygs=explode(',', $value['sampletype']);
			$arraygs=array_count_values($arraygs);
			foreach ($projectsj as $val) {
				if (array_key_exists($val['id'],$arraygs)) {
					$lyprojectxj['sampletypename']=$val['projectname'];
					$lyprojectxj['sampletypegs']=$arraygs[$val['id']];
					$lyproject[]=$lyprojectxj;
				}
			}
			// var_dump($lyproject);
			$value['lyproject']=$lyproject;
			$totalprice=$totalprice+$value['price'];
			$data[]=$value;
			// echo substr_count($value['sampletype'],'1');
		}
		$bt['bt']='财务';
		$this->assign(compact('bt','data','totalprice'));
		return $this->fetch();
	}
}