<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"E:\wamp\www\aiyics\thinkphp\thinkphp\tpl\dispatch_jump.tpl";i:1528684348;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px; text-align: center;margin-top: 300px}
        .system-message{ padding: 24px 48px; }
        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
        .system-message .jump{ padding-top: 10px; }
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em;font-size: 30px;}
        .system-message .success{color: #5076C2;}
        .system-message .error{color: #DB2C2C;}
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
        
        /* @font-face {  
            font-family: 锐字工房云字库粗圆GBK;  
            src:url('锐字工房云字库粗圆GBK.ttf'),
        }   */
        .success_box{
            width: 100px;
            height: 100px;
            background:#fff;
            border: 2px solid #5076C2;
            border-radius: 50%;
            text-align: center;
            margin: auto;
        }
        @keyframes myfirst {
             0%   {border-left: 0 solid #61BFF7;border-bottom:0px ;height: 10px;width: 0;margin-top: 35px;}
            25%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 0;margin-top: 35px ;}
            50%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 20px;margin-top: 35px ;}
            100% {border-left: 4px solid #61BFF7;border-bottom:4px solid #61BFF7 ;height: 30px;width: 50px;margin-top: 25px;}
        }
        
        /* Firefox */
        @-moz-keyframes myfirst {
             0%   {border-left: 0 solid #61BFF7;border-bottom:0px ;height: 10px;width: 0;margin-top: 35px;}
            25%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 0;margin-top: 35px ;}
            50%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 20px;margin-top: 35px ;}
            100% {border-left: 4px solid #61BFF7;border-bottom:4px solid #61BFF7 ;height: 30px;width: 50px;margin-top: 25px;}
        }

        /* Safari 和 Chrome */
        @-webkit-keyframes myfirst {
             0%   {border-left: 0 solid #61BFF7;border-bottom:0px ;height: 10px;width: 0;margin-top: 35px;}
            25%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 0;margin-top: 35px ;}
            50%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 20px;margin-top: 35px ;}
            100% {border-left: 4px solid #61BFF7;border-bottom:4px solid #61BFF7 ;height: 30px;width: 50px;margin-top: 25px;}
        }
        /* Opera */
        @-o-keyframes myfirst{
             0%   {border-left: 0 solid #61BFF7;border-bottom:0px ;height: 10px;width: 0;margin-top: 35px;}
            25%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 0;margin-top: 35px ;}
            50%  {border-left: 4px solid #61BFF7;border-bottom:0px ;height: 30px;width: 20px;margin-top: 35px ;}
            100% {border-left: 4px solid #61BFF7;border-bottom:4px solid #61BFF7 ;height: 30px;width: 50px;margin-top: 25px;}
        }

        .success_txt{
            margin: 25px auto;
            width: 50px;
            height: 30px;
            background:#fff;
            border-left: 4px solid #61BFF7;
            border-bottom: 4px solid #61BFF7;
            transform:rotate(-45deg);
            -webkit-transition:rotate(-45deg);
            -moz-transition:rotate(-45deg);
            -o-transition: rotate(-45deg);
            animation:myfirst 0.5s;
            -moz-animation:myfirst 0.5s; /* Firefox */
            -webkit-animation:myfirst 0.5s; /* Safari and Chrome */
            -o-animation:myfirst 0.5s; /* Opera */
        } 
        .success_box1{
            width: 100px;
            height: 100px;
            background: #fff;
            border-radius: 50%;
            text-align: center;
            border:2px solid #DB2C2C;
            overflow: hidden;
            transition: all 2s ease;
            transform: rotateY(180deg);
            margin: auto;
        }
       @keyframes myorder {
            from{margin-top:-50px;}
            to{margin-top:10px;}
        }
        
        /* Firefox */
        @-moz-keyframes myorder {
            from{margin-top:-50px;}
            to{margin-top:10px;}
        }

        /* Safari 和 Chrome */
        @-webkit-keyframes myorder {
            from{margin-top:-50px;}
            to{margin-top:10px;}
        }
        /* Opera */
        @-o-keyframes myorder{
            from{margin-top:-50px;}
            to{margin-top:10px;}
        }
        .success_txt1{
            /* margin-top: 10px; */
            font-size: 80px;
            color: #EB5D57;
            line-height: 80px;
            /* font-family:PingFang Light; */
            font-weight: lighter;
            animation:myorder 0.5s;
            -moz-animation:myorder 0.5s; /* Firefox*/
            -webkit-animation:myorder 0.5s; /* Safari and Chrome */
            -o-animation:myorder 0.5s; /* Opera */ 
        }
    </style>
</head>
<body>
    <div class="system-message">
        <?php switch ($code) {case 1:?>
            <div class="success_box"><div class="success_txt"></div></div>
            <p class="success"><?php echo(strip_tags($msg));?></p>
            <?php break;case 0:?>
            <div class="success_box1"><div class="success_txt1">x</div></div>
            <p class="error"><?php echo(strip_tags($msg));?></p>
            <?php break;} ?>
        <p class="detail"></p>
        <p class="jump">
            页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
        </p>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
