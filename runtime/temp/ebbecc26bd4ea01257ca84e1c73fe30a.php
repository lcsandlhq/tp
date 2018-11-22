<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\financial\financialdetails.html";i:1542613536;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
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
								<h3 class="content-title pull-left"><?php echo $bt['bt']; ?></h3>
							</div>
							<ul class="breadcrumb">
								<li>
									<span>您目前所在的位置:</span>
									<!-- <i class="fa fa-home"></i> -->
									<a href="#"><?php echo $bt['bt']; ?></a>
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
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile"><?php echo $bt['bt']; ?></span></h4>	
							</div>
							<div class="box-body">
								<div class="tabbable header-tabs">
								<div class="tab-content">
									<div class="tab-pane fade in active" id="box_tab4">
									 <!-- 临床信息录入 -->
									<!-- <input id="addTables" type="button" value="添加"> -->
								 	<table id="example" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>来源</th>
												<th>样品数量</th>
												<th>总价格</th>
											</tr>
										</thead>
										<tbody id="idData">
											<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?>
											<tr>
												<td><?php echo $da['account']; ?></td>
												<td><?php if(is_array($da['lyproject']) || $da['lyproject'] instanceof \think\Collection || $da['lyproject'] instanceof \think\Paginator): $i = 0; $__LIST__ = $da['lyproject'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ly): $mod = ($i % 2 );++$i;?><?php echo $ly['sampletypename']; ?>(<?php echo $ly['sampletypegs']; ?>)<?php endforeach; endif; else: echo "" ;endif; ?></td>
												<td><?php echo $da['price']; ?></td>
											</tr>
											<?php endforeach; endif; else: echo "" ;endif; if(!(empty($data) || (($data instanceof \think\Collection || $data instanceof \think\Paginator ) && $data->isEmpty()))): ?>
											<tr>
												<td colspan="3" style="text-align: right;">总计:<?php echo $totalprice; ?></td>
											</tr>
											<?php endif; if(empty($data) || (($data instanceof \think\Collection || $data instanceof \think\Paginator ) && $data->isEmpty())): ?>
											<tr>
												<td colspan="3" style="text-align: center;">未查到数据......</td>
											</tr>
											<?php endif; ?>
										</tbody>
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

<script type="text/javascript">
</script>
