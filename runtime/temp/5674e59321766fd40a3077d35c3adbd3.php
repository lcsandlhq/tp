<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:99:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\superconservator\superconservator_user_add.html";i:1542609131;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
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
	.addcss{
		border:2px dotted #A8B7C7;
		border-radius: 4px;
		width: 100%;
	    text-align: center;
	    cursor: pointer;
	    color: #A8B7C7;
	}
	.addcss:hover{
		border:2px dotted #3e76b2;
		color: #3e76b2;
	}
	.price{
		width: 90px;
		border-radius: 4px;
	    border: 1px solid #A8B7C7;
	    height: 32px;
	    font-size: 13px;
	    color: #16325C;
	    background: #fff;
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
									 	<!-- 临床信息录入  onkeydown="if(event.keyCode==13)return false;"-->
									 		<form action="<?php echo url('Superconservator/SuperconservatorUserAdd'); ?>" method="post" id="formID">
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
															 				<input class="inputting_listInput" type="text" name="account" id="account"/>
															 			</div>
																		<div class="inputting_listTltie">* 项目</div>
																		<div class="inputting_checkTltie">
																			<table id="example" cellpadding="0" cellspacing="0" border="0" class="table">
																				<thead id="volistThead">
																					<tr>
																						<?php if(is_array($project) || $project instanceof \think\Collection || $project instanceof \think\Paginator): $k = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pt): $mod = ($k % 2 );++$k;?>
																						
																						<td>
																							<input type="checkbox" name="check[]" value="<?php echo $pt['id']; ?>" />
																							<?php echo $pt['projectname']; ?>
																						</td>
																						<td><input class="price" type="text" name="<?php echo $pt['id']; ?>" id="head"  placeholder="价格单位:元"/></td>
																						<?php if(( $k % 1 ==0 )): ?></tr><tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
																					</tr>
																					<tr>
																						<td colspan="2"><div class="addcss">+</div></td>
																					</tr>
																				</thead>
																			</table>
																			
																		</div>
																		<div class="inputting_listTltie">* 负责人</div>
																		<div>
																			<input class="inputting_listInput" type="text" name="head" id="head"/>
																		</div>
																		<div class="inputting_listTltie">* 权限</div>
																		<div>
																			<input class="dxk" type="radio" name="permissions" id="permissions" value="0" checked="checked" />普通用户
																			<input class="dxk" type="radio" name="permissions" id="permissions" value="2" />实验室
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
	<div class="sample_batch_shaow" style="display: none">
		<div class="sample_batch_Box">
			<div class="sample_batch_x">
				<img src="/static/img/newIcon/icon_countermand.png" id="sample_batch_img" alt="">
			</div>
			<div class="sample_batch_titleBox">添加项目</div>
			<div class="sample_batch_contentBox">
				<div class="container sample_container">
					<div class="row ">
						<div class="col-md-4 .col-lg-4 .col-sm-4 sample_container_title">
							添加项目
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 .col-lg-4 .col-sm-4 ">
							<div class="sample_listTltie">项目名称:</div>
							<div><input class="sample_listInput" type="text" name="projectname"  /></div>
							<!-- <div><input type="text"  value="" id="demo-1"></div> -->
						</div>
					</div>
				</div>
				<div class="sample_batch_btnBox">
					<input type="submit" name="sub" value="添加">
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
	$('.addcss').click(function () {
		$('.sample_batch_shaow').css("display", "block");
	});
	$('#sample_batch_img').click(function(){
		$('.sample_batch_shaow').css("display", "none");
	});
	$('input[name=sub]').click(function (){
		var projectname = $('input[name=projectname]').val();
		$.ajax({
    		"type":"post",
    		"url":"<?php echo url('Project/projectAdd'); ?>",
    		"dataType" : 'json',
    		"data" : {
    			projectname:projectname
    		},
    		success : function(data) {
    			// console.log(data)  
    			if (data.successof == 1) {
    				alert(data.data); 
    				window.location.reload() 
    			}else{
              	    alert(data.data);  
    			}
                //  window.location.reload() 
            },  
            error : function(data) {  
                alert("网络错误，请检查网络");  
            }  
    	});
	});
</script>
