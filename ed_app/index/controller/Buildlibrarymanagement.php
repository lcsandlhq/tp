<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Buildlibrarymanagement extends Base
{
	protected static $view_information;
	protected static $informationregister;
	protected static $filename;
	public function BuildLibraryManagement()
	{
		$hasnot=input("hasnot");
		self::$view_information=model('View');
		switch ($hasnot) {
			case '1':
				$bt['bt']='建库管理';
				$bt['hasnot']='未建库';
				$bt['state']='建库';
				$conditions['sample']=1;
				$querydata=self::$view_information->dataQuery($conditions);
				break;
			case '2':
				$bt['bt']='建库管理';
				$bt['hasnot']='已建库';
				$bt['state']='';
				$conditions['sample']=2;
				$querydata=self::$view_information->dataQuery($conditions);
				break;
			case '3':
				$bt['hasnot']='未上机';
				$bt['bt']='上机管理';
				$bt['state']='上机';
				$conditions['sample']=2;
				$querydata=self::$view_information->dataQuery($conditions);
				break;
			case '4':
				$bt['hasnot']='已上机';
				$bt['bt']='上机管理';
				$bt['state']='';
				$conditions['sample']=3;
				$querydata=self::$view_information->dataQuery($conditions);
				break;
			case '5':
				$bt['hasnot']='未数据分析';
				$bt['bt']='数据分析管理';
				$bt['state']='数据分析';
				$conditions['sample']=3;
				$querydata=self::$view_information->dataQuery($conditions);
				break;
			case '6':
				$bt['hasnot']='已数据分析';
				$bt['bt']='数据分析管理';
				$bt['state']='';
				$conditions['sample']=4;
				$querydata=self::$view_information->dataQuery($conditions);
				break;
			case '7':
				$bt['hasnot']='报告下载';
				$bt['bt']='实验室';
				$bt['state']='';
				$conditions['sample']=5;
				$querydata=self::$view_information->dataQuery($conditions);
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
				$querydata=self::$view_information->dataQueryCX($conditions,$keyword);
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
		$id=substr(input("post.id"),0,-1);
		$excelname=input("post.excelname");
		$where['id']=$id;
		$hasnot=input("post.hasnot");
		switch ($hasnot) {
			case '1':
				$up['sample']=2;
				if(!$this->savefiledatalibraries($id,2)){
					exit();
				}
				break;
			case '3':
				$up['sample']=3;
				if(!$this->savefiledatalibraries($id,3,$excelname)){
					exit();
				}
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
			$data=$this->failedResults($hasnot);
		}
		echo json_encode($data);
	}
	public function BuildLibraryManagementFile()
	{
		$hasnot=input("hasnot");
		self::$filename=model('Filename');
		$where['savetype']=$hasnot;
		$qbfilename=self::$filename->selectqbfilename($where);
		switch ($hasnot) {
			case '2':
				$bt['hasnot']='文件下载';
				$bt['bt']='建库管理';
				break;
			case '3':
				$bt['hasnot']='文件下载';
				$bt['bt']='上机管理';
				break;
			default:
				exit();
				break;
		}
		$this->assign(compact('bt','qbfilename'));
		return $this->fetch();
	}
	public function DownloadFile()
	{
		$where['id']= input('id');
		self::$view_information=model('View');
		self::$filename=model('Filename');
		$content=self::$filename->selectonefilename($where);
		$wherecontent['id']=$content['filecontent'];
		$header=array('来源','编号','姓名','项目','到样时间');
		$data=self::$view_information->dataExcel($wherecontent);
		array_unshift($data,$header);
		$filenumber=$content['fileurl'];
		$excel =$this->create_xls($data,$filenumber);
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
	private function savefiledatalibraries($where,$hasnot,$excelname='')
	{
		self::$filename=model('Filename');
		$filewhere['filedate']=date("Y-m-d");
		$filewhere['savetype']=$hasnot;
		$max=self::$filename->selectfilename($filewhere);
		$filenames=$max['max']+1;
		$filenames = str_pad($filenames,"3","0",STR_PAD_LEFT);
		$filenumber=date("Ymd").$filenames;
		if (empty($excelname)) {
			$addfile['fileurl']=$filenumber;
		}else{
			$addfile['fileurl']=$excelname;
		}
		$addfile['filecontent']=$where;
		$addfile['filedate']=date("Y-m-d");
		$addfile['filenumber']=$filenames;
		$addfile['savetype']=$hasnot;
		if(self::$filename->addfilename($addfile)){
			return true;
		}else{
			return false;
		}
	}
	/*public function Savefile($where=1,$hasnot=2)
	{
		self::$view_information=model('View');
		self::$filename=model('Filename');
		$header=array('来源','编号','姓名','项目','到样时间');
		$data=self::$view_information->dataExcel($where);
		array_unshift($data,$header);
		$filewhere['filedate']=date("Y-m-d");
		$max=self::$filename->selectfilename($filewhere);
		$filenames=$max['max']+1;
		$filenames = str_pad($filenames,"3","0",STR_PAD_LEFT);
		$filenumber=date("Ymd").$filenames;
		$excel =$this->create_xls($data,$filenumber);
		print_r($excel);
		if ($excel) {
			$add['fileurl']=date("Ymd")."/".$filenumber."xlsx";
			$add['filedate']=date("Y-m-d");
			$add['filenumber']=$filenames;
			$add['savetype']=$hasnot;
			self::$filename->addfilename($add);
		}else{
			exit();
		}
	}*/
	private function create_xls($data,$filename){
	    ini_set('max_execution_time', '0');
	    Vendor('PHPExcel.PHPExcel');
	    $filename=$filename.".xlsx";
	    $phpexcel = new \PHPExcel();
	    $phpexcel->getProperties()
	        ->setCreator("Maarten Balliauw")
	        ->setLastModifiedBy("Maarten Balliauw")
	        ->setTitle("Office 2007 XLSX Test Document")
	        ->setSubject("Office 2007 XLSX Test Document")
	        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
	        ->setKeywords("office 2007 openxml php")
	        ->setCategory("Test result file");
	    $phpexcel->getActiveSheet()->fromArray($data);
	    $phpexcel->getActiveSheet()->setTitle('Sheet1');
	    $phpexcel->setActiveSheetIndex(0);
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$filename);
		header('Cache-Control: max-age=0');  
	    // $objwriter = \PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
	    $objwriter = new \PHPExcel_Writer_Excel2007($phpexcel);
	    $objwriter->save("php://output");
	    exit();
	}
}