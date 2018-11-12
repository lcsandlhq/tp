<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:101:"E:\wamp\www\aiyics\thinkphp\aiyi/../ay_app/index\view\superconservator\superconservator_user_add.html";i:1542003500;s:63:"E:\wamp\www\aiyics\thinkphp\ay_app\index\view\public\cssjs.html";i:1541992280;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title></title>
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
								<h3 class="content-title pull-left">TA临床信息管理界面</h3>
							</div>
							<ul class="breadcrumb">
								<li>
									<span>您目前所在的位置:</span>
								<li><a href="#">系统管理</a></li>
								</li>
								</li>
								<li><a href="#">用户添加</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BOX -->
						<div class="box border">
							<div class="box-title">
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile">用户添加</span></h4>
							</div>
							<div class="box-body">
								<div class="tabbable header-tabs">
									<ul class="nav nav-tabs">
									</ul>
								    <div class="tab-content">
									 	<div class="tab-pane fade in active" id="box_tab4">
									 	<!-- 临床信息录入 -->
									 		<form action="<?php echo url('Clinical/addclinical'); ?>" method="post" id="formID" onkeydown="if(event.keyCode==13)return false;">
										 		<div class="clinical_listBox">
											 		<div class="clinical_inputting_info">
											 			<img src="/static/img/newIcon/avatar large.png" alt="">
											 			<span class="avatar_span1">用户添加基本信息</span>
											 			<span class="avatar_span2">（带*为必填选项）</span>
											 		</div>
												 	<div class="container">
														<div class="row inputting_rowList">
														  	<div class="col-md-12 .col-lg-12 .col-sm-12 ">
																<div class="row">
																  	<!-- 左侧 -->
																  	<div class="col-md-4 .col-lg-4 .col-sm-4">
															 			<div class="inputting_listTltie">* 账号</div>
															 			<div>
															 				<input class="inputting_listInput" type="text" name="number" id="number"/>
															 			</div>
																		<div class="inputting_listTltie">联系方式</div>
																		<div>
																			<input class="inputting_listInput" type="text" name="tel_1" id="tel_1" />
																		</div>
																		<div class="inputting_listTltie">* 来源医院</div>
														  				
														  				<div class="dropdown-sin-1">
	                                                        				<select style="display:block;width:100%" class="inputting_listInput" placeholder="请选择来源" name="source_hospital" >
	                                                            				<option selected value="">请选择</option>
	                                                            				<option value=""></option>
	                                                        				</select>
	                                                    				</div>
	                                                    				<div class="inputting_listTltie">* 性别</div>
																		<div>
																			<select class="inputting_listInput" name="gender">
																				<option value="男">男</option>
																				<option value="女" selected="selected">女</option>
																				<option value="未登记">未登记</option>
																			</select>
																		</div>
															 		</div>
															 	</div>
															 	<div class="infoBox">
																	<input type="button" id="subBtn" value="提交">
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
<script src="/static/js/jquery/jquery-2.0.3.min.js"></script>
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
