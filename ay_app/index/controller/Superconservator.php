<?php
namespace app\index\controller;
use app\index\controller\Base;
/**
 * 
 */
class Superconservator extends Base
{
	protected static $lplist;
	protected static $login;
	public function superconservatoruser()
	{
		$bt['bt']='用户管理';
		self::$login=model('login');
		$loginxs = self::$login->slelogin();
		$this->assign(compact('loginxs','bt'));
		return $this->fetch();
	}
	public function SuperconservatorUserAdd()
	{
		if (request()->isPost()) {
			self::$login=model('login');
			self::$lplist=model('lplist');
			$add['account']=input('post.account');
			$add['settlementprice']=input('post.settlementprice');
			$add['head']=input('post.head');
			$pwd=$this->random();
			$add['pwdan']=md5($pwd);
			$add['pwdming']=$pwd;
			$add['superconservator']=0;
			$add['khdate']=date("Y-d-m");
			$add['superconservator']=input("post.permissions");
			$project=$_POST['check'];
			$loginid = self::$login->login($add);
			$lplistsf = self::$lplist->lplist_dbadd($loginid,$project);
			if ($loginid && $lplistsf) {
				$this->success('添加成功','Superconservator/superconservatoruser','',1);
			}else{
				$this->error('添加失败');
			}
		}else{
			$bt['bt']='添加';
			$project=model('project')->DataQuery();
			$this->assign(compact('project','bt'));
			return $this->fetch();
		}
	}
	private function random()
    {
        $arr = "0123456789abcoefjhijklmnopqrstuvwxyz";
        $qaz = strlen($arr)-1;//获取字符串长度
        $wsx = rand(0,$qaz);
        $qw = '';
        for ($a=0; $a <6 ; $a++) {
            $wsx = rand(0,$qaz);
            $qw.=$arr[$wsx];
        }
        return $qw;
    }
}