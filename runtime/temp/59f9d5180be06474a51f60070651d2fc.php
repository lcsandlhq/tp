<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\wamp\www\aiyics\thinkphp\aiyi/../ay_app/index\view\login\login.html";i:1542014728;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $head['title']; ?> | 登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="/static/css/cloud-admin.css">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/static/js/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
    <link rel="stylesheet" type="text/css" href="/static/js/uniform/css/uniform.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/animatecss/animate.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <style>
        body {
            background: url("/static/img/newIcon/login_bg.png") no-repeat;
            background-size: 100% 1000px;
        }
        .login-box-plain {
            width: 450px;
            margin: 60px auto;
            padding: 40px 60px 70px;
            border:none;
        }
        .bigintro {
            font-size: 30px;
            color: #333333;
        }
        label {
            font-size: 14px;
            color: #A1A6B5;
            font-weight: 300;
        }
        .form-control {
            background: #F2F6FB !important;
            border-radius: 20px !important;
            width: 320px !important;
            border:none;
        }
        .form-actions {
            background-color: #fff;
            border: none;
            margin-top: 80px;
            padding: 0;
        }
        button[name=Submit] {
            background: #0070D2;
            border-radius: 4px;
            width: 320px;
            height: 50px;
            border: none;
        }
        button[name=Submit]:hover{
            background: #0070D2;
        }

        .login_title{
            font-size: 32px;
            color: #FFFFFF;
            margin-top: 130px;
            text-align: center;
        }
        .login_title2{
            font-size: 22px;
            color: #FFFFFF;
            text-align: center;
        }
        .login-foot{
            width: 168px;
            height: 20px;
            /*margin: 70px 0 40px;*/
            text-align: center;
        }
        .login-icon{
            text-align: center;
            position: absolute;
            bottom: 50px;
            width: 100%;
        }
        .container{
            padding-left: 0;
        }
    </style>
</head>
<body>
<section id="page">
    <section id="login" class="visible">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div>
                        <div class="login_title">二代测序平台</div>
                        <div class="login_title2">Second Generation Sequencing Platform</div>
                    </div>
                    <div class="login-box-plain">
                        <h2 class="bigintro">登  录</h2>
                        <div class="divide-40"></div>

                        <form role="form" action="<?php echo url('Login/logindl'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">登录名 </label>
                                <!--<i class="fa fa-envelope"></i>-->
                                <input class="form-control" id="exampleInputEmail1" name="account">
                            </div>
                            <!-- <input type="checkbox" style="width:40px; margin-top:5px; margin-left:5px;" name="sourceMark" value='1'/>以管理员账户登录 -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">密码</label>
                                <!--<i class="fa fa-lock"></i>-->
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-danger" name="Submit">登录</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- <div class="login-icon">
                <img class="login-foot" src="/static/img/newIcon/logo.png" alt="">
            </div> -->
        </div>
    </section>
</section>
<script src="/static/js/jquery/jquery-2.0.3.min.js"></script>
<script src="/static/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/static/bootstrap-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/js/uniform/jquery.uniform.min.js"></script>
<script src="/static/js/script.js"></script>
</body>
</html>