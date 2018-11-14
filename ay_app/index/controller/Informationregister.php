<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Informationregister extends Base
{
	protected static $login;
	protected static $carcinoma;
	protected static $sampletype;
	protected static $lplist;
	protected static $informationregister;
	protected static $iclist;
	protected static $islist;
	public function InformationRegister()
	{
		
		$bt['bt']='信息登记';
		self::$login=model('login');
		self::$carcinoma=model('Carcinoma');
		self::$sampletype=model('Sampletype');
		self::$informationregister=model('Informationregister');
		$lydw=self::$login->lydw();
		$carcinomacx = self::$carcinoma->selectcarcinoma();
		$sampletypecx = self::$sampletype->selectsarcinoma();
		$conditions['samplemonth'] = date("Y-m");
		$max = self::$informationregister->informationregisterselect($conditions); 
		$dnumber = $max['max']+1;
		$dnumber = str_pad($dnumber,"3","0",STR_PAD_LEFT);
		$number = date("Ymd").$dnumber;
		$this->assign(compact('bt','lydw','carcinomacx','sampletypecx','number','dnumber'));
		return $this->fetch();
	}
	public function InformationRegisterProject()
	{
		$select['lp.lid']=input("post.userid");
		self::$lplist=model('Lplist');
		$project = self::$lplist->project($select);
		// echo $project;
		echo json_encode($project);
	}
	public function InformationregisterSampleAdd()
	{
		self::$iclist=model('Iclist');
		self::$islist=model('Islist');
		self::$informationregister=model('Informationregister');
		$number=input("post.number");
		$add['number']=$number;
		$add['lid']=input("post.account");
		$add['dnumber']=input("post.dnumber");
		$add['username']=input("post.username");
		$add['age']=input("post.age");
		$add['gender']=input("post.gender");
		$add['sample']=1;
		$add['sampletype']=input("post.project");
		$add['sampledate']=date("Y-m-d");
		$add['samplemonth']=date("Y-m");
		$carcinoma=!empty($_POST['carcinoma'])? $_POST['carcinoma']:array();
		$sarcinoma=!empty($_POST['sarcinoma'])? $_POST['sarcinoma']:array();
		$informationregisterinsert = self::$informationregister->informationregisterAdd($add);
		if (!empty($carcinoma)) {
			$carcinomainsert = self::$iclist->carcinomaAdd($number,$carcinoma);
		}
		if (!empty($sarcinoma)) {
			$sarcinomainsert = self::$islist->sarcinomaAdd($number,$sarcinoma);
		}
		if ($informationregisterinsert) {
			$this->success('添加成功','Informationregister/InformationRegister','',1);
		}else{
			$this->error('添加失败');
		}
	}
}