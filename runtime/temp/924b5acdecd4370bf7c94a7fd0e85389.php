<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"E:\wamp\www\aiyics\thinkphp\aiyi/../ay_app/index\view\index\index.html";i:1541991528;s:62:"E:\wamp\www\aiyics\thinkphp\ay_app\index\view\public\base.html";i:1541989552;s:64:"E:\wamp\www\aiyics\thinkphp\ay_app\index\view\public\header.html";i:1542157473;s:62:"E:\wamp\www\aiyics\thinkphp\ay_app\index\view\public\left.html";i:1542186747;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title><?php echo $head['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="/static/css/cloud-admin.css" >
	<!-- 头部及侧边栏样式 -->
	<link rel="stylesheet" type="text/css"  href="/static/css/themes/default.css" id="skin-switcher" >
	<!-- <link rel="stylesheet" type="text/css"  href="/static/css/responsive.css" > -->
	<link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/static/js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css" />
	<!-- <link rel="stylesheet" type="text/css" href="/static/js/bootstrap-daterangepicker/daterangepicker-bs3.css" /> -->
	<link rel="stylesheet" type="text/css" href="/static/node_modules/._datatables@1.10.13@datatables/media/css/jquery.dataTables.css" />
	<!-- <link rel="stylesheet" type="text/css" href="/static/js/datatables/media/assets/css/datatables.min.css" /> -->
	<link rel="stylesheet" type="text/css" href="/static/js/datatables/extras/TableTools/media/css/TableTools.min.css" />
	<link rel="stylesheet" href="/static/css/headerSib.css">
	
</head>
<body>
<header class="navbar clearfix" id="header">
		<!-- <include file="header" /> -->
		<div class="container">
			<div class="navbar-brand">
				<a href="index.html">
					<img src="/static/img/logo/icon_aita.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120"> 
				</a>
				<div class="visible-xs">
					<a href="#" class="team-status-toggle switcher btn dropdown-toggle">
						<i class="fa fa-users"></i>
					</a>
				</div> <div id="sidebar-collapse" class="sidebar-collapse btn">
					<i class="fa fa-bars" 
						data-icon1="fa fa-bars" 
						data-icon2="fa fa-bars" ></i>
				</div>
			</div>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown user" id="header-user">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="username"></span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="">密码修改</a></li>
						<li><a href="<?php echo url('Login/loginexit'); ?>"><i class="fa fa-power-off"></i>退出</a></li>
					</ul>
				</li>
				<li><img class="icon_head" src="/static/img/newIcon/icon_head.png" alt=""></li>
			</ul>
		</div>
</header>

	<section id="page">
	<!-- SIDEBAR 侧边栏-->
<div id="sidebar" class="sidebar">
	<div class="sidebar-menu nav-collapse">
		<div class="divide-20"></div>
		<ul class="indexUl">
			<?php if(($permissions == 1 or $permissions == 2)): ?>
			<li class="has-sub">
				<a class="">
				<img class="sidebar_icon" src="/static/img/newIcon/icon_The sample.png" alt=""><span class="menu-text">实验室</span>
				<span class="arrow"></span>
				</a>
				<ul class="sub">
					<li>
						<a class="" href="<?php echo url('Informationregister/InformationRegister'); ?>" target='demo_frame'>
							<span class="sub-menu-text">信息登记</span>
						</a>
					</li>
					<li>
						<a>
							<span class="sub-menu-text">建库管理</span>
						</a>
						<ul class="sub">
							<li>
								<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>1]); ?>" target='demo_frame'>
								<span class="sub-menu-text">未建库</span>
								</a>
							</li>
							<li>
								<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>2]); ?>" target='demo_frame'>
								<span class="sub-menu-text">已建库</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<span class="sub-menu-text">上机管理</span>
						</a>
						<ul class="sub">
							<li>
								<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>3]); ?>" target='demo_frame'>
								<span class="sub-menu-text">未上机</span>
								</a>
							</li>
							<li>
								<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>4]); ?>" target='demo_frame'>
								<span class="sub-menu-text">已上机</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a>
							<span class="sub-menu-text">数据分析管理</span>
						</a>
						<ul class="sub">
							<li>
								<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>5]); ?>" target='demo_frame'>
								<span class="sub-menu-text">未数据分析</span>
								</a>
							</li>
							<li>
								<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>6]); ?>" target='demo_frame'>
								<span class="sub-menu-text">已数据分析</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="" href="<?php echo url('Buildlibrarymanagement/BuildLibraryManagement',['hasnot'=>7]); ?>" target='demo_frame'>
							<span class="sub-menu-text">报告下载</span>
						</a>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			<li class="has-sub">
				<a href="<?php echo url('Thequery/thequery'); ?>" class="current" target='demo_frame'>
					<img class="sidebar_icon" src="/static/img/newIcon/icon_retrieval.png" alt="">
					<span class="menu-text">查询</span>
				</a>
			</li>
			<?php if(($permissions == 1)): ?>
			<li class="has-sub">
				<a class="">
				<img class="sidebar_icon" src="/static/img/newIcon/icon_setting.png" alt=""><span class="menu-text">系统管理</span>
				<span class="arrow"></span>
				</a>
				<ul class="sub">
					<li><a class="" href="<?php echo url('Superconservator/superconservatoruser'); ?>" target='demo_frame'><span class="sub-menu-text">用户管理</span></a></li>
				</ul>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</div>
	<!--测试分页-->
<div style="height: 100%">
	<div style="height: 100%">
		<iframe style="overflow:auto;margin-left: 14%;" width="86%" height="100%" name="demo_frame" frameborder="0" id="iframesrc"></iframe>
	</div>
</div>
</section>


<script src="/static/js/jquery/jquery-2.0.3.min.js"></script>
<script src="/static/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/static/bootstrap-dist/js/bootstrap.min.js"></script>
<script src="/static/js/bootstrap-daterangepicker/moment.min.js"></script>
<script src="/static/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="/static/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="/static/node_modules/._datatables@1.10.13@datatables/media/js/jquery.dataTables.js"></script>
<!-- <script type="text/javascript" src="/static/js/datatables/media/assets/js/datatables.min.js"></script>-->
<!-- <script type="text/javascript" src="/static/js/datatables/extras/TableTools/media/js/TableTools.min.js"></script> --> 
<script type="text/javascript" src="/static/js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-Cookie/jquery.cookie.min.js"></script>
<script src="/static/js/script.js"></script>

<script>
	jQuery(document).ready(function() {	
		function iframesrc() {
			var url=$('.indexUl').children('li').eq(0).children('a').attr("href");
			if (url == '' || url == null) {
				url=$('.indexUl').children('li').eq(0).children('.sub').children('li').eq(0).children('a').attr("href");
			}
				//console.log(url);
			
			// var url=$('.indexUl').children('li').eq(0).children('.sub').children('li').eq(0).children('a').attr("href");
			document.getElementById("iframesrc").src = url;
		}	
		window.onload = iframesrc;
		//var strSession = ;
		 //setTime=setInterval("check_remind()",5000);
		 
		App.setPage("dynamic_table");  //Set current page
		App.init(); //Initialise plugins and elements
	});
	/*function check_remind() {
		 	alert('');
		 }*/
</script>

</body>
</html>