<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\wamp\www\aiyics\thinkphp\ed/../ed_app/index\view\financial\financial.html";i:1542614463;s:63:"E:\wamp\www\aiyics\thinkphp\ed_app\index\view\public\cssjs.html";i:1542174800;}*/ ?>
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
.classA:hover{ text-decoration:none;}
td.highlight {
    background-color: red !important;
}
tr.am-primary{
    background-color: yellow !important;
}

.showul label {
    display: block;
    margin: 3px 0;
}

.showul {
    padding: 10px 15px;
}

.graph i {
    display: inline-block;
    width: 15px;
    height: 15px;
}

ul.showul li:not(:last-child) {
    border-bottom: 1px dashed #ccc;
}
.header_box{
    margin-left: 250px;
}
.box.border, .box.solid{
    border:0;
}
 form i {
    color: #54698D;
    display: block !important;
    font-size: 16px;
    height: 16px;
    margin: 9px 2px 4px 10px;
    position: absolute !important;
    text-align: center;
    width: 16px;
    z-index: 1;
}
.infoBox input{
    margin: 0 50px 50px;
}
.dropdown-display{
    width: 100%;
    height: 32px;
}
</style>

</head>
<body>
	
<section id="page">
    <div class="container heightDataAll">
        <div class="row heightDataAll">
            <div id="content" class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header">
                            <div class="clearfix">
                                <h3 class="content-title pull-left"><?php echo $bt['bt']; ?>界面</h3>
                            </div>
                            <ul class="breadcrumb">
                                <li>
                                    <span>您目前所在的位置:</span>
                                    <a><?php echo $bt['bt']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box border">
                            <div class="box-title">
                                <!--<h4><i class="fa fa-th"></i><span class="hidden-inline-mobile">综合检索</span></h4>-->
                            </div>
                            <div class="box-body">
                                <div class="tabbable header-tabs">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="box_tab4">
                                            <form action="<?php echo url('Financial/financialdetails'); ?>" method="post" enctype="multipart/form-data">
                                                <div class="clinical_listBox">
	                                                <div class="clinical_inputting_info">
	                                                    <img src="/static/img/newIcon/icon_Medical records2.png" alt="">
	                                                    <span class="avatar_span1"><?php echo $bt['bt']; ?></span>
	                                                </div>
	                                                <div class="container">
	                                                    <div class="row">
	                                                        <div class="col-md-4 col-lg-4 col-sm-4">
	                                                            <div class="inputting_listTltie">来源</div>
	                                                            <div class="dropdown-sin-1">
                                                                    <select style="display:block;width:100%" class="inputting_listInput" placeholder="搜索来源" name="account" >
                                                                        <option value="">请选择</option>
                                                                        <?php if(is_array($lydw) || $lydw instanceof \think\Collection || $lydw instanceof \think\Paginator): $i = 0; $__LIST__ = $lydw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ly): $mod = ($i % 2 );++$i;?>
                                                                        <option value="<?php echo $ly['id']; ?>"><?php echo $ly['account']; ?></option>
                                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </select>
                                                                </div>
	                                                            <div class="inputting_listTltie">到样时间:</div>
	                                                            <div class="" style="position:relative;">
	                                                                <input type="text" name="sampledate"  autoComplete='off' id="reportrange" value="" class="inputting_listInput" style="margin: 0 10px 0 0;">
	                                                                <span class="fa fa-times-circle inputting_circle" style="position: absolute;right:25px;top:10px;display:none"></span>
	                                                            </div>
                                                                <div class="inputting_listTltie">负责人:</div>
                                                                <div class="dropdown-sin-2">
                                                                    <select style="display:block;width:100%" class="inputting_listInput" placeholder="搜索状态" name="head" >
                                                                        <option selected value="">请选择</option>
                                                                        <?php if(is_array($fzdw) || $fzdw instanceof \think\Collection || $fzdw instanceof \think\Paginator): $i = 0; $__LIST__ = $fzdw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fz): $mod = ($i % 2 );++$i;?>
                                                                        <option value="<?php echo $fz['head']; ?>"><?php echo $fz['head']; ?></option>
                                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </select>
                                                                </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
                                                </div>
                                                <div class="infoBox">
                                                    <input type="hidden" value="8" name="hasnot">
                                                    <input type="submit" value="搜索">
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

<script type="text/javascript">
	jQuery(document).ready(function () {
        $('.dropdown-sin-1').dropdown({
            readOnly: true,
            input: '<input type="text" maxLength="20" placeholder="请输入搜索">'
        });
        $('.dropdown-sin-2').dropdown({
            readOnly: true,
            input: '<input type="text" maxLength="20" placeholder="请输入搜索">'
        });
        // App.setPage("dynamic_table");  //Set current page
        // App.init(); //Initialise plugins and elements

        $("input").focus(function () {
            $(this).css({"border": "1px solid #0076DE", "box-shadow": "0 0 3px 0"});
        });
        $("input").blur(function () {
            $(this).css({"border": "1px solid #A8B7C7", "box-shadow": "0 0 0 0 "});
        });
         $('#search').bind('input propertychange', function () {
            var inputVal = $('#search').val();
            if (inputVal == '') {
                $('.inputting_times').css("display", "none");
            } else {
                $('.inputting_times').css("display", "block");
            }
        }); 
        
        $('.inputting_times').click(function () {
            $(this).css("display", "none");
            $('#search').val("");
        })
        $('#reportrange').bind('input propertychange', function () {
            var inputVal = $('#reportrange').val();
            if(inputVal == ''){
                $('.inputting_circle').css("display", "none");
            }else{
                $('.inputting_circle').css("display", "block");
            }
        }); 
        $('.inputting_circle').click(function () {
            $(this).css("display","none");
            $('#reportrange').val("");
        })

        // $("#checkFigure1").change(function()
        // {
        //     var arrs=$(this).val().split('\\');
        //     var filename=arrs[arrs.length-1];
        //     $(".check1").html(filename);
        // });
        //
        // $("#checkFigure2").change(function()
        // {
        //     var arrs=$(this).val().split('\\');
        //     var filename=arrs[arrs.length-1];
        //     $(".check2").html(filename);
        // });
    });
    function cb(start, end) {
             //console.log(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'),1111)
           var inputVal = $('#reportrange').val();
            if (inputVal == '') {
                $('.inputting_circle').css("display", "none");
            } else {
                $('.inputting_circle').css("display", "block");
            }
            $('#reportrange span').html(start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
            //  console.log($('#reportrange').val(),111)
            
        }
        var start = moment();
        var end = moment();
            cb(start, end);
            //console.log(start,'start', end,'end')
    $('#reportrange').daterangepicker({  
            showDropdowns : true,
            "linkedCalendars": false,
            "showCustomRangeLabel": false,
            "alwaysShowCalendars": true,
            "opens": "right",//日期选择框的弹出位置  
            startDate: start,
            endDate: end,
            ranges: {
                '今天': [moment().subtract(0, 'days'), moment().subtract(0, 'days')],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '最近7天': [moment().subtract(6, 'days'), moment()],
                '最近30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上个月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            locale : {  
                applyLabel : '确定',  
                cancelLabel : '取消',  
                fromLabel : '起始时间',  
                toLabel : '结束时间',  
                customRangeLabel : '自定义',  
                daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],  
                monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月',  
                        '七月', '八月', '九月', '十月', '十一月', '十二月' ],  
                firstDay : 1  
            },
            buttonClasses : [ 'btn btn-default' ],  
            applyClass : 'btn-small btn-primary blue',  
            cancelClass : 'btn-small',
            format:'YYYY-MM-DD',
            separator: ' ~ ',
        }, cb);
</script>
