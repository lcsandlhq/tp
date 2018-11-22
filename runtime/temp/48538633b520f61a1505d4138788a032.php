<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\project\project_add.html";i:1542336552;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title><?php echo $head['title']; ?> | <?php echo $bt['bt']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="/static/css/cloud-admin.css" >
	<!-- 头部及侧边栏样式 -->
	<link rel="stylesheet" type="text/css"  href="/static/css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="/static/css/responsive.css" >
	<link href="/static/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/static/js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css" />
	<link rel="stylesheet" type="text/css" href="/static/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<link rel="stylesheet" type="text/css" href="/static/DataTables-1.10.15/media/css/jquery.dataTables.css" />
	<link rel="stylesheet" type="text/css" href="/static/js/datatables/media/assets/css/datatables.min.css" />
	<link rel="stylesheet" type="text/css" href="/static/js/datatables/extras/TableTools/media/css/TableTools.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/static/css/sampleBatch.css">
	<link rel="stylesheet" href="/static/css/headerSib.css">
	
<link  rel="stylesheet" href="/static/css/jquery.dropdown.css" />
<link rel="stylesheet" href="/static/css/inputting.css">
<style type="text/css">
	#permissions{
	    margin-left: 12px;
		margin-right: 10px;
	}
</style>

</head>
<body>
	
<section id="page">
	<div class="container heightDataAll">
		<div class="row heightDataAll">
			<div id="content" class="col-lg-12">
				<!-- PAGE HEADER-->
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							<div class="clearfix">
								<h3 class="content-title pull-left">二代测试管理界面</h3>
							</div>
							<ul class="breadcrumb">
								<li>
									<span>您目前所在的位置:</span>
								<li><a href="#">系统管理</a></li>
								</li>
								</li>
								<li><a href="#">项目添加</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BOX -->
						<div class="box border">
							<div class="box-title">
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile">项目添加</span></h4>
							</div>
							<div class="box-body">
								<div class="tabbable header-tabs">
									<ul class="nav nav-tabs">
									</ul>
								    <div class="tab-content">
									 	<div class="tab-pane fade in active" id="box_tab4">
									 	<!-- 临床信息录入  onkeydown="if(event.keyCode==13)return false;"-->
									 		<form action="<?php echo url('Project/projectAdd'); ?>" method="post" id="formID">
										 		<div class="clinical_listBox">
											 		<div class="clinical_inputting_info">
											 			<img src="/static/img/newIcon/avatar large.png" alt="">
											 			<span class="avatar_span1">项目添加基本信息</span>
											 			<span class="avatar_span2">（带*为必填选项）</span>
											 		</div>
												 	<div class="container">
														<div class="row inputting_rowList">
														  	<div class="col-md-12 .col-lg-12 .col-sm-12 ">
																<div class="row">
																  	<!-- 左侧 -->
																  	<div class="col-md-4 .col-lg-4 .col-sm-4">
															 			<div class="inputting_listTltie">* 项目名称</div>
															 			<div>
															 				<input class="inputting_listInput" type="text" name="projectname" id="projectname"/>
															 			</div>
																		
	                                                    				<div class="inputting_listTltie">* 项目价格</div>
																		<div>
																			<input class="inputting_listInput" type="text" name="price" id="price"/>
																		</div>
															 		</div>
															 	</div>
															 	<div class="infoBox">
																	<input type="submit" id="subBtn" value="提交">
														 		</div>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</body>
<script src="/static/js/jquery/mock.js"></script>
<script src="/static/js/jquery/jquery-2.0.3.min.js"></script>
<script src="/static/js/jquery/jquery.dropdown.js"></script>
<script src="/static/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
<!--<script src="/static/bootstrap-dist/js/bootstrap.min.js"></script>-->
<script src="/static/js/bootstrap-daterangepicker/moment.min.js"></script>
<script src="/static/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="/static/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/DataTables-1.10.15/media/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/static/js/datatables/media/assets/js/datatables.min.js"></script>
<script type="text/javascript" src="/static/js/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
<script type="text/javascript" src="/static/js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js"></script>
<script type="text/javascript" src="/static/js/jQuery-Cookie/jquery.cookie.min.js"></script>
