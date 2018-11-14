<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo \think\Lang::get('System Error'); ?></title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
        html,body{
            background: #fafafa;
            padding: 0;
            margin: 0;
        }

        a{
            color: #5e87b0;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover{
            text-decoration: none;
        }
        .echo{
            background: #fff;
            padding: 20px 15px;
        }
        .content-title{
            color: #5076C2;
            font-size: 20px;
            font-weight: bold;
            padding-left: 10px;
            border-left: 6px solid #5076C2;
            margin-bottom: 13px;
        }
        .adressTitle1{
            font-size: 14px;
            color: #333;
        }
        .message {
            text-align: center;
            padding-top: 170px;
            padding-bottom: 40px;

        }
        .message img{
            width: 380px;
            height: 220px;
        }
        .exceptionNO{
            text-align: center;
            font-size: 28px;
            color: #16325C;
        }
        .exceptionNOLogin{
            font-size: 16px;
            color: #16325C;
            text-align: center;
            margin-top: 35px;
        }
    </style>
</head>
<body>
    <div class="echo">
        <div class="content-title">页面错误</div>
        <div><span class="adressTitle1">您目前所在的位置:</span> <a href="#">页面错误</a></div>
    </div>
    <div class="exception">
        <div class="message">
            <img src="http://cloud2.aitagene.com/static/img/newIcon/Page_Not_found.png" alt="">
        </div>
        <div class="exceptionNO">
            页面未找到
        </div>
        <div class="exceptionNOLogin">
            链接不存在，或者出现其他错误，请尝试重新加载。
        </div>
    </div>
</body>
</html>
