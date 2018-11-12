<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:96:"E:\wamp\www\aiyics\thinkphp\aiyi/../ay_app/index\view\superconservator\superconservatoruser.html";i:1542001857;s:63:"E:\wamp\www\aiyics\thinkphp\ay_app\index\view\public\cssjs.html";i:1541992280;}*/ ?>
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
	
<style>
.userBox{
    position: fixed;
    top: 0;
    width: 100%;
    height: 100%;
    text-align: center;
    background: rgba(0,0,0,0.5);
    z-index: 999;
}
.listBox{
    position: absolute;
    top: 200px;
    text-align: center;
    width: 100%;

}
.listUserData{
	margin: auto;
	background: #fff;
	width: 300px;
	padding: 5px 25px 25px;

}
.listUserData div{
	margin-top: 10px;
}

.listUserData div label{
	width: 30%;
}
.listDown{
	text-align: right;
}
.user_triangle{
    width: 0;
    height: 0;
	display: inline-block;
	margin-left: 20px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 10px solid #000;
}
.user_lower{
    width: 0;
    height: 0;
	display: inline-block;
	margin-left: 20px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 10px solid #000;
}

/*.table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th{*/
	/*background: #D8DDE6;*/
/*}*/
</style>

</head>
<body>
	
<section id="page">
		<!-- SIDEBAR 侧边栏-->
	<div class="container" style="height: 100%;">
		<div class="row" style="height: 100%;">
			<div id="content" class="col-lg-12">
				<!-- PAGE HEADER-->
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							<div class="clearfix">
								<h3 class="content-title pull-left">用户管理</h3>
							</div>
							<ul class="breadcrumb">
								<li>
									<span>您目前所在的位置:</span>
									<!-- <i class="fa fa-home"></i> -->
									<a href="#">系统管理</a>
								</li>
								<li>
									<a href="#">用户管理</a>
								</li>
								<!--<li>user_tables</li>-->
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BOX -->
						<div class="box border">
							<div class="box-title">
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile">用户管理</span></h4>	
							</div>
							<div class="box-body">
								<div class="tabbable header-tabs">
								<ul class="nav nav-tabs">
									<li>
										<a href="">
											<i class="fa fa-street-view"></i>
											<span class="hidden-inline-mobile">用户来源</span>
										</a>
									</li>
									<li><a href="" ><i class="fa fa-sitemap"></i> <span class="hidden-inline-mobile">权限分组</span></a></li>
									<li class="active">
									 	<a href="<?php echo url('Superconservator/superconservatoruser'); ?>" >
									 		<i class="fa fa-user-plus"></i>
									 		<span class="hidden-inline-mobile">用户管理</span>
									 	</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade in active" id="box_tab4">
									 <!-- 临床信息录入 -->
									<input id="addTables" type="button" value="添加">
								 	<table id="example" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="px " data-paixu="" data-pxname="user">用户名<span class="user_triangle"></span></th>
												<th>密码</th>
												<th class="px" data-paixu="" data-pxname="act">激活状态</th>
												<th class="px" data-paixu="" data-pxname="group">权限管理</th>
												<th class="px" data-paixu="" data-pxname="source">来源管理</th>
												<th>操作</th>
											</tr>
										</thead>
									</table>
									</div>
								</div>
							    </div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-tools">
					<span class="go-top">
						<i class="fa fa-chevron-up"></i> Top
					</span>
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

<script type="text/javascript">
document.getElementById('addTables').onclick = function () {
		//alert('aaa');
	window.location.href="<?php echo url('Superconservator/SuperconservatorUserAdd'); ?>";

}
</script>
