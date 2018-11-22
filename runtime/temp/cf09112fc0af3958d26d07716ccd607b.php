<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\reportupload\report_upload.html";i:1542600742;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
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
	
<link rel="stylesheet" href="/static/css/RightWrong.css">
<style>
.input-sm {
    width: 200px;
}

select .input-sm {
    width: 75px !important;
}

.displaycode_downLists{
    border: 1px solid #D8DDE6;
    border-radius: 4px;
    width: 110px;
    height: 30px;
    text-align: center;
    line-height:25px;
    display: inline-block;
}
.displaycode_downLists a{
    font-size: 12px;
    color: #0070D2;
    margin:0;
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
                                <h3 class="content-title pull-left"><?php echo $bt['bt']; ?>管理界面</h3>
                            </div>
                            <ul class="breadcrumb">
                                <li>
                                    <span>您目前所在的位置:</span>
                                    <a href="#"><?php echo $bt['bt']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="displaycode_addLists">
                    <form  class="displaycode_file" action="<?php echo url('Reportupload/ReportUploadFile'); ?>" method="post"
                          enctype="multipart/form-data">
                        <a href='javascript:void(0);' class="blueButton">+ 选择文件</a>
                        <input name="file" type="file" class="form-control" id="file" multiple="multiple">
                        <div class="show">未选择任何文件</div>
                        <button type="button" name="sub" class="submit">上传</button>
                    </form>
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

<script>
$(".form-control").change(function() {
    // console.log('122121212');
    // alert('1212')
    var arrs=$(this)[0].files.length;
    // console.log('1212')
    // alert(arrs)
    var filename = '已选'+arrs+'文件';
    // var arrs=$(this).val().split('\\');
    // var filename=arrs[arrs.length-1];
    $(".show").html(filename);
    // console.log(filename)
});
$(".submit").click(function(){
    // console.log('1212')
    if($("#file").val() == ''){
        alert('请先选择文件！');
    }else{
        // $('.sample_batch_shaow_jz').css('display','block');
        upload();
    }
})
function upload(){
    // alert('1232123');
    var files = document.getElementById('file').files;
    // console.log(file)
    var form = new FormData();
    // var files = $("#file1")[0].files;//等价于document.getElementById("file1").files;  
    for(var i = 0; i < files.length; i++){  
        form.append("file[]",files[i]);   // 文件对象 ,fileupload必须加中括号   
    } 
    // console.log(files.length);
    $.ajax({
        url: "<?php echo url('Reportupload/ReportUploadFile'); ?>",//上传地址
        dataType : 'json',
        async: true,//异步
        type: 'post',//post方式
        data: form,//FormData数据
        processData: false,//不处理数据流 !important
        contentType: false,//不设置http头 !important
        success: function(date){
            //上传成功回调
            // console.log("文档当前位置是："+data);//获取文件链接
            // document.cookie = "url="+data;//此行可忽略
            
            // console.log(date);
            // alert("hhh");  
            
            if (date.cgsb == '1') {
                alert(date.sfcg);
                window.location.reload()
            }else{
                alert(date.sfcg);
            }
        },
        error: function(data){
            alert("网络错误，请检查网络");  
        }
    })
}
</script>
