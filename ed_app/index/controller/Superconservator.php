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
			$add['head']=input('post.head');
			$pwd=$this->random();
			$add['pwdan']=md5($pwd);
			$add['pwdming']=$pwd;
			$add['khdate']=date("Y-m-d");
			$add['superconservator']=input("post.permissions");
			$project=!empty($_POST['check'])? $_POST['check']:array();
			$loginid = self::$login->login($add);
			$projectdata=array();
			foreach ($project as $value) {
				$projectadd['lid']=$loginid;
				$projectadd['pid']=$value;
				$projectadd['price']=input("post.".$value);
				$projectdata[]=$projectadd;
			}
			if (!empty($projectdata)) {
				$lplistsf = self::$lplist->lplist_dbadd($projectdata);
			}
			if ($loginid || $lplistsf) {
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
	public function SuperconservatorUserUpdate()
	{
		if (request()->isPost()) {
			self::$login=model('login');
			self::$lplist=model('lplist');
			$hid=input('post.hid');
			$up['account']=input('post.account');
			$up['head']=input('post.head');
			$up['khdate']=date("Y-m-d");
			$up['superconservator']=input("post.permissions");
			$loginwhere['id']=$hid;
			$project=!empty($_POST['check'])? $_POST['check']:array();
			$loginid = self::$login->loginupdate($loginwhere,$up);
			$lplistsf='';
			foreach ($project as $value) {
				$projectup['lid']=$hid;
				$projectup['pid']=$value;
				$projectup['price']=input("post.".$value);
				$projectdata[]=$projectup;
			}
			$projectwhere['lid']=$hid;
			$lplistsf = self::$lplist->lplist_dbupdate($projectwhere,$projectdata);
			if ($loginid || $lplistsf) {
				$this->success('修改成功','Superconservator/superconservatoruser','',1);
			}else{
				$this->error('修改失败');
			}
		}else{
			$bt['bt']='修改';
			$accountid=input("accountid");
			$where['id']=$accountid;
			$projectwhere['lid']=$accountid;
			$project=model('project')->DataQuery();
			$loginuserdl=model('login')->loginuserdl($where);
			$projectcselectsomeone=model('lplist')->projectcselectsomeone($projectwhere);
			$projectid=array_column($projectcselectsomeone,'pid');
			$this->assign(compact('project','bt','loginuserdl','projectid','projectcselectsomeone','accountid'));
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