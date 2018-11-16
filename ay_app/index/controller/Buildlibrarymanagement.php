<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Buildlibrarymanagement extends Base
{
	protected static $informationregister;
	public function BuildLibraryManagement()
	{
		$hasnot=input("hasnot");
		self::$informationregister=model('Informationregister');
		switch ($hasnot) {
			case '1':
				$bt['bt']='建库管理';
				$bt['hasnot']='未建库';
				$bt['state']='建库';
				$conditions['sample']=1;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '2':
				$bt['bt']='建库管理';
				$bt['hasnot']='已建库';
				$bt['state']='';
				$conditions['sample']=2;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '3':
				$bt['hasnot']='未上机';
				$bt['bt']='上机管理';
				$bt['state']='上机';
				$conditions['sample']=2;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '4':
				$bt['hasnot']='已上机';
				$bt['bt']='上机管理';
				$bt['state']='';
				$conditions['sample']=3;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '5':
				$bt['hasnot']='未数据分析';
				$bt['bt']='数据分析管理';
				$bt['state']='数据分析';
				$conditions['sample']=3;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '6':
				$bt['hasnot']='已数据分析';
				$bt['bt']='数据分析管理';
				$bt['state']='';
				$conditions['sample']=4;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '7':
				$bt['hasnot']='报告下载';
				$bt['bt']='实验室';
				$bt['state']='';
				$conditions['sample']=5;
				$querydata=self::$informationregister->dataQuery($conditions);
				break;
			case '8':
				$bt['hasnot']='查询';
				$bt['bt']='查询';
				$bt['state']='';
				$conditions=array();
				// echo self::$user_db['superconservator'];
				if (self::$user_db['superconservator']) {
					if (!empty(input("account"))) {
						$conditions['lid']=input("account");
						$keyword['account']=input("account");
					}
				}else{
					// echo self::$user_db['id'];;
					$conditions['lid']=self::$user_db['id'];
				}
				if (!empty(input("username"))) {
					$conditions['username']=input("username");
					$keyword['username']=input("username");
				}
				if (!empty(input("sampledate"))) {
					$date=input("sampledate");
					$sampledate=explode('~',$date);
					$conditions['sampledate']=array(["<=",$sampledate[1]],[">=",$sampledate[0]],'and');
					$keyword['sampledate']=$date;
				}
				if (!empty(input("sample"))) {
					$conditions['sample']=input("sample");
					$keyword['sample']=input("sample");
				}
				if (empty($conditions)) {
					$conditions=1;
				}
				$keyword['hasnot']=8;
				// print_r($conditions);
				$querydata=self::$informationregister->dataQueryCX($conditions,$keyword);
				// echo $querydata;
				break;
			default:
				exit();
				break;
		}
		$overdue=date("Y-m-d");
		$this->assign(compact('bt','querydata','overdue','hasnot'));
		return $this->fetch();
	}
	public function BuildLibraryManagementState()
	{
		$where['id']=substr(input("post.id"),0,-1);
		$hasnot=input("post.hasnot");
		switch ($hasnot) {
			case '1':
				$up['sample']=2;
				break;
			case '3':
				$up['sample']=3;
				break;
			case '5':
				$up['sample']=4;
				break;
			default:
				exit();
				break;
		}
		
		if(self::$informationregister=model('Informationregister')->datamodification($where,$up)){
			$data=$this->successfulResults($hasnot);
		}else{
			$data=failedResults($hasnot);
		}
		echo json_encode($data);
	}
	private function successfulResults($hasnot){
		switch ($hasnot) {
			case '1':
				$data['successof']=1;
				$data['data']='建库成功';
				break;
			case '3':
				$data['successof']=1;
				$data['data']='上机成功';
				break;
			case '5':
				$data['successof']=1;
				$data['data']='数据分析成功';
				break;
			default:
				exit();
				break;
		}
		return $data;
	}
	private function failedResults($hasnot){
		switch ($hasnot) {
			case '1':
				$data['successof']=2;
				$data['data']='建库失败';
				break;
			case '3':
				$data['successof']=2;
				$data['data']='上机失败';
				break;
			case '5':
				$data['successof']=2;
				$data['data']='数据分析失败';
				break;
			default:
				exit();
				break;
		}
		return $data;
	}
}