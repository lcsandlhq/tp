<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\login\change_password.html";i:1542790707;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
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
	<div class="container heightDataAll">
		<div class="row heightDataAll">
			<div id="content" class="col-lg-12">
				<!-- PAGE HEADER-->
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							<div class="clearfix">
								<h3 class="content-title pull-left">修改密码</h3>
							</div>
							<div class="description">修改密码</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BOX -->
						<div class="box border">
							<div class="box-title">
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile">修改密码</span></h4>
							</div>
							<div class="box-body">
								<div class="tabbable header-tabs">
								    <ul class="nav nav-tabs">
									    <li><a href="#box_tab5" data-toggle="tab"><i class="fa fa-flask"></i> <span class="hidden-inline-mobile">修改密码</span></a></li>
								    </ul>
								    <div class="tab-content">
									    <div class="tab-pane fade in active" id="box_tab4">
									 		<div class="inputBox">
									 			<label for="username"><span>新密码: </span>
									 				<input type="password" name="username" id="username" />
									 			</label>
									 		</div>
									 		<div class="inputBox">
									 			<label><span>确认新密码: </span>
									 				<input type="password" name="qdusername" id="username" />
									 			</label>
									 		</div>
										 	<div>
										 		<input type="submit" value="确认修改" name="submit">
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
	$('input[name=submit]').click(function () {
		var username=$('input[name=username]').val();
		var qdusername=$('input[name=qdusername]').val();
		if (username == '') {
			alert('请填写新密码');
		}else if(qdusername == ''){
			alert('请填写确定新密码');
		}else if (username != qdusername ) {
			alert('密码不一致');
		}else{
			$.ajax({
	    		"type":"post",
	    		"url":"<?php echo url('Login/ChangePassword'); ?>",
	    		"dataType" : 'json',
	    		"data" : {
	    			username:username,
	    			qdusername:qdusername
	    		},
	    		success : function(data) {
	    			// console.log(data)  
	    			if (data.successof == 1) {
	    				alert(data.data); 
	    				window.location.href ="http://seq.aitagene.com/"; 
	    			}else{
	              	    alert(data.data);  
	    			}
	                //  window.location.reload() 
	            },  
	            error : function(data) {  
	                alert("网络错误，请检查网络");  
	            }  
	    	});
		}
	});
</script>
