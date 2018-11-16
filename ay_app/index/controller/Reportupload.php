<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Cookie;
/**
 * 
 */
class Reportupload extends Base
{
	protected static $informationregister;
	public function ReportUpload()
	{
		$bt['bt']='报告上传';
		$this->assign(compact('bt'));
		return $this->fetch();
	}
	public function ReportUploadFile()
	{
		self::$informationregister=model('Informationregister');
		$upcg = array();
		$upsb = array();
		$files = request()->file('file');
		foreach($files as $file){
	        $info = $file->validate(['ext'=>'pdf'])->rule('uniqid')->move('upload/pdf','');
	        if($info){
	            // // 成功上传后 获取上传信息
	            // // 输出 jpg
	            // $upcg[]=$info->getExtension(); 
	            // // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            // $upcg[]=$info->getFilename(); 
	            $where['number']=explode('.',$info->getFilename())[0];
	            $up['sample']=5;
	            $upcg[]=self::$informationregister->dataModification($where,$up);

	        }else{
	        	$upsb[]=$file->getError();
	            // // 上传失败获取错误信息
	            // echo $file->getError();
	        }   
	    }
	    if (empty($upsb)) {
	    	$cg['cgsb']=1;
	    	$cg['sfcg'] = '上传成功';
	    }else{
	    	$cg['cgsb']=2;
	    	$cg['sfcg'] = '上传失败'.$upsb;
	    }
	    echo json_encode($cg);
	}
}