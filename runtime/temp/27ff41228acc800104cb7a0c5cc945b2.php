<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:104:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\buildlibrarymanagement\build_library_management.html";i:1542961930;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;s:62:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\list.html";i:1542962123;}*/ ?>
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
								<li>
									<a href="#"><?php echo $bt['hasnot']; ?></a>
								</li>
								<!--<li>user_tables</li>-->
							</ul>
						</div>
					</div>
				</div>
				<?php if(($hasnot ==1 or $hasnot ==3 or $hasnot ==5)): ?>
				<div class="displaycode_addLists">
					<button class="button" id="button"><?php echo $bt['state']; ?></button>
                </div>
                <?php endif; ?>
				<div class="row">
					<div class="col-md-12">
						<!-- BOX -->
						<div class="box border">
							<div class="box-title">
								<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile"><?php echo $bt['bt']; ?> | <?php echo $bt['hasnot']; ?></span></h4>	
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
												<?php if(($hasnot ==1 or $hasnot ==3 or $hasnot ==5)): ?>
												<th><input type="checkbox" id="checkItems"></th>
												<?php endif; ?>
												<th>来源</th>
												<th>编号</th>
												<?php if(($hasnot != 1)): ?>
												<th>实验编号</th>
												<?php endif; ?>
												<th>姓名</th>
												<th>性别</th>
												<th>项目</th>
												<th>样本类型</th>
												<th>到样日期</th>
												<th>完成日期</th>
												<th>状态</th>
											</tr>
										</thead>
										<tbody id="idData">
											<?php if(is_array($querydata) || $querydata instanceof \think\Collection || $querydata instanceof \think\Paginator): $i = 0; $__LIST__ = $querydata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sj): $mod = ($i % 2 );++$i;?>
											<tr>
												<?php if(($hasnot ==1 or $hasnot ==3 or $hasnot ==5)): ?>
												<td><input type="checkbox" name="userid[]" id="userid" value="<?php echo $sj['id']; ?>"></td>
												<?php endif; ?>
												<td><?php echo $sj['account']; ?></td>
												<td><?php echo $sj['number']; ?></td>
												<?php if(($hasnot != 1)): ?>
												<td><?php echo $sj['numberabbreviationname']; ?></td>
												<?php endif; ?>
												<td><?php echo $sj['username']; ?></td>
												<td><?php echo $sj['gender']; ?></td>
												<td><?php echo $sj['projectname']; ?></td>
												<td class="sampletypename" data-value="<?php echo $sj['sid']; ?>" data-sid="<?php echo $sj['qbsid']; ?>"><?php echo $sj['sampletypename']; ?></td>
												<td><?php echo $sj['sampledate']; ?></td>
												<td><?php echo $sj['completedate']; ?></td>
												<td><?php if(($sj['sample'] == 1)): ?>已到样<?php endif; if(($sj['sample'] == 2)): ?>建库中<?php endif; if(($sj['sample'] == 3)): ?>上机中<?php endif; if(($sj['sample'] == 4)): ?>数据分析<?php endif; if(($sj['sample'] == 5)): ?>下载<?php endif; ?></td>
												
											</tr>
											<?php endforeach; endif; else: echo "" ;endif; if(empty($querydata) || (($querydata instanceof \think\Collection || $querydata instanceof \think\Paginator ) && $querydata->isEmpty())): ?>
											<tr>
												<td <?php if(($hasnot ==1 )): ?> colspan="10" <?php elseif(($hasnot ==3 or $hasnot ==5)): ?> colspan="11" <?php else: ?> colspan="10" <?php endif; ?> style="text-align: center;">未查到数据......</td>
											</tr>
											<?php endif; ?>
										</tbody>
									</table>
									<?php echo $querydata->render(); ?>
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
	<div class="sample_batch_shaow" style="display: none">
		<div class="sample_batch_Box">
			<div class="sample_batch_x">
				<img src="/static/img/newIcon/icon_countermand.png" id="sample_batch_img" alt="">
			</div>
			<div class="sample_batch_titleBox"></div>
			<div class="sample_batch_contentBox">
				<div class="container sample_container">
					<div class="row ">
						<div class="col-md-4 .col-lg-4 .col-sm-4 sample_container_title"></div>
					</div>
					<div class="row">
						<div class="col-md-4 .col-lg-4 .col-sm-4 ">
							<div class="sample_listTltie"></div>
							<div><input class="sample_listInput" type="text" name="excelname"  /></div>
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
var hasnot='<?php echo $hasnot; ?>';
if (hasnot == 1) {
	$(window).load(function(){
		var arr = new Array();
		var sid= new Array();
		var sampletypename = $('.sampletypename');
		var valuename=sampletypename.prev().prev().prev().prev().prev().prev().find('#userid');
		for (var i = 0;i <sampletypename.length; i++) {
			if(sampletypename[i].attributes[1].value>=1){
				arr=sampletypename[i].innerHTML.split('，');
				sid=sampletypename[i].attributes[2].value.split('，');
				var str = '';
				for (var j =0; j < arr.length; j++) {
					str+="<input type='checkbox'class='inchoose"+valuename[i].value+"' name='choose[]' value='"+sid[j]+"'>"+arr[j];
				}
				// var wzstr="<span class='choose'>"+str+"</span>"
				sampletypename[i].innerHTML=str;
			}
		}
		// console.log(sampletypename)
		
	})
}

document.getElementById('checkItems').onclick=function() {  
 // 获取所有的复选框  
    var checkElements=document.getElementsByName('userid[]');  
    if (this.checked) {  
        for(var i=0;i<checkElements.length;i++){  
            var checkElement=checkElements[i];  
            checkElement.checked="checked";  
        }  
        //console.log(checkElements.length)
        /*$(".gs").html("选中"+checkElements.length+"个默认板的位置有"+sl+"个");
        j=checkElements.length;*/
    }  
    else{  
        for(var i=0;i<checkElements.length;i++){  
            var checkElement=checkElements[i];  
            checkElement.checked=null;  
        } 
        //console.log(checkElements.length) 
        /*$(".gs").html('');
        j=0;*/
    }
}
/*check=document.getElementsByName('check[]');
for (var i = 0; i < check.length; i++) {
		function item(i) {
			check[i].onclick=function () {
				//var count=0;
			if (this.checked) {  
				j++
				//console.log(checkItems.checked)
				//if (checkItems.checked) {}
			}else{
				j--
			}
			if (j==0) {
				$(".gs").html('');
			}else{
				$(".gs").html("选中"+j+"个默认板的位置有"+sl+"个");
			}
			//console.log(j)
			}
		}(i)
	item(i)
}*/
document.getElementById('button').onclick=function() {
	var chckBox = document.getElementsByName("userid[]"); 
	var choose = document.getElementsByName("choose[]"); 
	var sampletypename = $('.sampletypename');
	var choosezhi='';
	var excelname=''; 
    var ids = ""; 
    var hasnot = '<?php echo $hasnot; ?>';
    var sampletypenamepd=false;
    var qbids=new Array();
    
    for(var i =0 ; i<chckBox.length; i++){  
        if(chckBox[i].checked){  
            //ids.push({barcode:chckBox[i].value});
            ids += chckBox[i].value + ",";
            var a=sampletypename.find(".inchoose"+chckBox[i].value);
            if (a.length>1) {
            	var b='';
            	for (var j = 0; j<a.length; j++) {
            		if (a[j].checked) {
            			sj={iid:chckBox[i].value,sid:a[j].value};
            			b+=sj;
		            	qbids.push(sj)
            		}
	            }
	            if (b==''){
        			alert('请选择样本类型')
        			return false;
        		}
            }else{
            	sj={iid:chckBox[i].value,sid:sampletypename[i].attributes[2].value};
            	qbids.push(sj);
            } 
        }  
    }
    // console.log(ids)
    if (ids == '') {
    	alert("请选择数据");
    }else{
    	if (hasnot == 3) {
    		$('.sample_batch_titleBox').html('生成excel表格');
    		$('.sample_container_title').html('生成excel表格');
    		$('.sample_listTltie').html('生成excel表格名称');
    		$('.sample_batch_shaow').css("display","block");
    	}else{
	    	$.ajax({
	    		"type":"post",
	    		"url":"<?php echo url('Buildlibrarymanagement/BuildLibraryManagementState'); ?>",
	    		"dataType" : 'json',
	    		"data" : {
	    			id:ids,
	    			hasnot:hasnot,
	    			excelname:excelname,
	    			qbids:qbids
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
    	}
    }

};
$('#sample_batch_img').click(function(){
	$('.sample_batch_shaow').css("display", "none");
});
$('input[name=sub]').click(function(){
	var chckBox = document.getElementsByName("userid[]"); 
	var excelname=$('input[name=excelname]').val(); 
    var ids = ""; 
    var hasnot = '<?php echo $hasnot; ?>';
    for(var i =0 ; i<chckBox.length; i++){  
        if(chckBox[i].checked){  
            //ids.push({barcode:chckBox[i].value});
            ids += chckBox[i].value + ",";
            //console.log(abc)
        }  
    }
    $.ajax({
		"type":"post",
		"url":"<?php echo url('Buildlibrarymanagement/BuildLibraryManagementState'); ?>",
		"dataType" : 'json',
		"data" : {
			id:ids,
			hasnot:hasnot,
			excelname:excelname
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
