<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:97:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\informationregister\information_register.html";i:1542963710;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
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
<style>
	.dropdown-display{
		width: 100%;
        height: 32px;
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
								<li><a href="#">实验室</a></li>
								</li>
								</li>
								<li><a href="#">信息登录</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BOX -->
						<div class="box border">
							<div class="box-title">
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile">信息登录</span></h4>
							</div>
							<div class="box-body">
								<div class="tabbable header-tabs">
									<ul class="nav nav-tabs">
									</ul>
								    <div class="tab-content">
									 	<div class="tab-pane fade in active" id="box_tab4">
									 	<!-- 临床信息录入  onkeydown="if(event.keyCode==13)return false;"-->
									 		<form action="<?php echo url('Informationregister/InformationregisterSampleAdd'); ?>" method="post" id="formID" onkeydown="if(event.keyCode==13)return false;">
										 		<div class="clinical_listBox">
											 		<div class="clinical_inputting_info">
											 			<img src="/static/img/newIcon/avatar large.png" alt="">
											 			<span class="avatar_span1">信息登录基本信息</span>
											 			<span class="avatar_span2">（带*为必填选项）</span>
											 		</div>
												 	<div class="container">
														<div class="row inputting_rowList">
														  	<div class="col-md-12 .col-lg-12 .col-sm-12 ">
																<div class="row">
																  	<!-- 左侧 -->
																  	<div class="col-md-4 .col-lg-4 .col-sm-4">
															 			<div class="inputting_listTltie">* 账号</div>
															 			<div class="dropdown-sin-1">
                                                                			<select class="inputting_listInput" placeholder="请选择来源单位" name="account" id="account">
	                                                                    		<option value="">请选择</option>
	                                                                    		<?php if(is_array($lydw) || $lydw instanceof \think\Collection || $lydw instanceof \think\Paginator): $i = 0; $__LIST__ = $lydw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ly): $mod = ($i % 2 );++$i;?>
	                                                                    		<option value="<?php echo $ly['id']; ?>"><?php echo $ly['account']; ?></option>
	                                                                    		<?php endforeach; endif; else: echo "" ;endif; ?>
                                                                			</select>
                                                            			</div>
																		<div class="inputting_listTltie">* 姓名</div>
																		<div>
																			<input class="inputting_listInput" type="text" name="username" id="username"/>
																		</div>
	                                                    				<div class="inputting_listTltie">癌种</div>
																		<div class="inputting_checkTltie">
																			<table id="example" cellpadding="0" cellspacing="0" border="0" class="table">
																				<thead id="volistThead">
																					<tr>
																						<?php if(is_array($carcinomacx) || $carcinomacx instanceof \think\Collection || $carcinomacx instanceof \think\Paginator): $k = 0; $__LIST__ = $carcinomacx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($k % 2 );++$k;?>
																						
																						<td>
																							<input type="checkbox" name="carcinoma[]" value="<?php echo $ca['id']; ?>" />
																							<?php echo $ca['carcinomaname']; ?>
																						</td>

																						<?php if(( $k % 5 ==0 )): ?></tr><tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								 														
																					</tr>
																					<tr>
																						<td><div class="addcss" data-value="1">+</div></td>
																					</tr>
																				</thead>
																			</table>
																		</div>
																		<div class="inputting_listTltie"> * 样本类型</div>
																		<div class="inputting_checkTltie">
																			<table id="example" cellpadding="0" cellspacing="0" border="0" class="table">
																				<thead id="volistThead">
																					<tr>
																						<?php if(is_array($sampletypecx) || $sampletypecx instanceof \think\Collection || $sampletypecx instanceof \think\Paginator): $k = 0; $__LIST__ = $sampletypecx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$se): $mod = ($k % 2 );++$k;?>
																						
																						<td>
																							<input type="checkbox" name="sarcinoma[]" value="<?php echo $se['id']; ?>" />
																							<?php echo $se['sampletypename']; ?>
																						</td>
																						<?php if(( $k % 5 ==0 )): ?></tr><tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
																					</tr>
																					<tr>
																						<td><div class="addcss" data-value="2">+</div></td>
																					</tr>
																				</thead>
																			</table>
																		</div>
																		<div class="inputting_listTltie">* 检测项目</div>
																		<div class="dropdown-sin-2">
                                                                			<select class="inputting_listInput" placeholder="请选择来源单位" name="project" id="project">
	                                                                    		<option value="">请选择</option>
                                                                			</select>
                                                            			</div>
															 		</div>
															 		<div class="col-md-4 .col-lg-4 .col-sm-4">
															 			<div class="inputting_listTltie">* 编号</div>
															 			<div>
                                                                			<input class="inputting_listInput" type="text" name="number" id="number" readonly="readonly" value="<?php echo $number; ?>" />
                                                                			<input type="hidden" name="dnumber" value="<?php echo $dnumber; ?>">
                                                            			</div>
                                                            			<div class="inputting_listTltie">* 年龄</div>
																		<div>
																			<input class="inputting_listInput" type="text" name="age" id="age"/>
																		</div>
															 		</div>
															 		<div class="col-md-4 .col-lg-4 .col-sm-4">
															 			<div class="inputting_listTltie" style="visibility:hidden;">* 编号</div>
															 			<div style="visibility:hidden;">
                                                                			<input class="inputting_listInput" type="text"/>
                                                            			</div>
                                                            			<div class="inputting_listTltie">* 性别</div>
																		<div>
																			<input class="" type="radio" name="gender" id="gender" value="男" />男
																			<input class="" type="radio" name="gender" id="gender" value="女" checked="checked" />女
																		</div>
															 		</div>
															 	</div>
															 	<div class="infoBox">
																	<input type="submit" id="subBtn" value="保存" >
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
			<div class="sample_batch_titleBox">添加<samp class="addname"></samp></div>
			<div class="sample_batch_contentBox">
				<div class="container sample_container">
					<div class="row ">
						<div class="col-md-4 .col-lg-4 .col-sm-4 sample_container_title">
							添加<samp class="addname"></samp>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 .col-lg-4 .col-sm-4 ">
							<div class="sample_listTltie"><samp class="addname"></samp>名称:</div>
							<div><input class="sample_listInput" type="text" name="addname"  /></div>
							<!-- <div><input type="text"  value="" id="demo-1"></div> -->
						</div>
					</div>
					<div class="row abbreviation" style="display: none;">
						<div class="col-md-4 .col-lg-4 .col-sm-4 ">
							<div class="sample_listTltie"><samp class="addnameabbreviation"></samp>名称:</div>
							<div><input class="sample_listInput" type="text" name="addnameabbreviation"  /></div>
							<!-- <div><input type="text"  value="" id="demo-1"></div> -->
						</div>
					</div>
				</div>
				<div class="sample_batch_btnBox">
					<input type="hidden" name="hid" value="">
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
$('.dropdown-sin-1').dropdown({
    readOnly: true,
    input: '<input type="text" maxLength="20" placeholder="请输入搜索">'
});
// $('.dropdown-sin-2').dropdown({
//     readOnly: true,
//     input: '<input type="text" maxLength="20" placeholder="请输入搜索">'
// });
$(".dropdown-sin-1>.dropdown-main>ul>.dropdown-option").click(function () {
	var userid=$(this).attr('data-value');
	// var a = $('.dropdown-sin-2>dropdown-main>ul');
	$("#project").find('option').remove();
	// $("#project").next().next().find('ul').find('li').remove()
	var option="<option value=''>请选择</option>";
	$.ajax({
	    url: "<?php echo url('Informationregister/InformationRegisterProject'); ?>",
	    type:'post',
	    dataType : 'json',
	    data: {userid: userid},
	    success:function (data){
	    	for (var i = 0; i<data.length; i++) {
	    		option+="<option value='"+data[i].id+"'>"+data[i].projectname+"</option>"
	    		// console.log(data[i].projectname);
	    		// $("#project").prepend("<option value='"+data[i].id+"'>"+data[i].projectname+"</option>")
	    		// $("#project").next().next().find('ul').prepend("<li tabindex data-value='"+data[i].id+"' class='dropdown-option'>"+data[i].projectname+"</li>")
	    	}
	    	$("#project").prepend(option)
		},
		error:function(XMLHttpRequest, textStatus, errorThrown) {
	       alert(XMLHttpRequest.status);
	       alert(XMLHttpRequest.readyState);
	       alert(textStatus);
		}
	})
});
$("#subBtn").click(function(){
	var account=$("select[name=account]").val();
	var username=$("input[name=username]").val();
	var age=$("input[name=age]").val();
	var project=$("select[name=project]").val();
	var chckBox = document.getElementsByName("sarcinoma[]");
	var ids=''; 
	for(var i =0 ; i<chckBox.length; i++){  
        if(chckBox[i].checked){  
            ids += chckBox[i].value + ",";
        }  
    }
	if (account == '') {
		alert('请选择账号');
		return false;
	}else if(username == ''){
		alert('姓名不能为空');
		return false;
	}else if(age == ''){
		alert('年龄不能为空');
		return false;
	}else if(project == ''){
		alert('请选择检测项目');
		return false;
	}else if(ids==''){
		alert('请选择样本类型');
	}else{
		$('#formID').submit();
	}
	return false;
});
$('.addcss').click(function(){
	var val = $(this).attr('data-value');
	if (val == 1) {
		$('.addname').html('癌种');
	}else if (val == 2) {
		$('.addname').html('样本类型');
		$('.addnameabbreviation').html('简写');
		$('.abbreviation').css("display","block");
	}
	$("input[name=hid]").val(val);
	$('.sample_batch_shaow').css("display","block");
});
$('#sample_batch_img').click(function(){
	$('.sample_batch_shaow').css("display", "none");
	$('.abbreviation').css("display", "none");
	$('.addname').html('');
	$('.addname').html('');
	$('.addnameabbreviation').html('')
});
$('input[name=sub]').click(function (){
	var addname = $('input[name=addname]').val();
	var hid = $('input[name=hid]').val();
	var addnameabbreviation=$('input[name=addnameabbreviation]').val();
	if (hid == 2) {
		if(addnameabbreviation == '' || addnameabbreviation == null){
			alert('请填写简写');
			return false;
		}
	}
	// console.log(addname,hid,addnameabbreviation);
	$.ajax({
		"type":"post",
		"url":"<?php echo url('Informationregister/cancerSample'); ?>",
		"dataType" : 'json',
		"data" : {
			addname:addname,
			hid:hid,
			abbreviation:addnameabbreviation
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
