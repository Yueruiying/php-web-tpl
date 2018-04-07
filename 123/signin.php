<?php
require_once './db.php';
error_reporting(0); 
$error_msg = null;
if ( isset($_POST['uname']) && isset($_POST['passwd']) ) {
    $uname = $_POST['uname'];
    $upasswd = $_POST['passwd'];
    // 防止 sql 注入，和 XSS 攻击
    $q_uname = mysqli_real_escape_string($conn, $uname);
    $q_passwd = mysqli_real_escape_string($conn, $upasswd);
    // 查询当账户名密码一致的结果
    $res = query("select id, uname, passwd, nick_name, company_name from user where uname = '$uname' and passwd = '$q_passwd' limit 1");
    if ( count($res) > 0 ) {
        $current_user = $res[0];
        $_SESSION['user_id'] = $current_user['id'];
        $_SESSION['uname'] = $current_user['uname'];
        $_SESSION['nick_name'] = $current_user['nick_name'];
        $_SESSION['company_name'] = $current_user['company_name'];
        header('Location: /index.php');
    } else {
        $error_msg = '用户名或密码错误';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        html, body {
            margin: 0;
            padding: 0;
        }
        body {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            content: '';
            background: #62a8ea;
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
            background-image: linear-gradient(to bottom, #62a8ea 0, #3583ca 100%);
            background-repeat: repeat-x;
            background-position: center top;
            -webkit-background-size: cover;
            background-size: cover;
        }
        .login-panel {
            margin: 0 auto;
            width: 500px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            
            padding: 50px 40px 40px;
        }
        .login-form {
            margin: 45px 0 30px;
        }
        .login-form .form-cell {
            position: relative;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .login-form .input-text {
            padding: 0;
            
            width: 100%;

            border: none;

            height: 36px;
            font-size: 14px;

            background-image: linear-gradient(#62a8ea, #62a8ea), linear-gradient(#e4eaec, #e4eaec);
            background-position: center bottom, center calc(100% - 1px);
            background-size: 0 2px, 100% 1px;

            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;

            
        }
        .login-form .input-text:focus {
            outline: none;
        }
        .form-action .btn-action {
            color: #fff;
            background-color: #62a8ea;
            border-color: #62a8ea;

            padding: 10px 18px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 4px;
            
            display: block;
            width: 100%;
            
            margin-top: 40px;
        }
        .middle-outer {
            display: table;
            position: absolute;
            height: 100%;
            width: 100%;
        }
        .vmiddle {
            display: table-cell;
            vertical-align: middle;
        }
        .login-form .floating-label {
            color: #62a8ea;
            top: 7.99999998px;
            font-size: 14px;
        }
        .text-center {
            text-align: center;
        }
        .text-danger {
            color: #F66239;
        }
        a {
            color: #62a8ea;
            text-decoration: none;
        }
        .panel-title-text {
            border-bottom: 1px solid #e4eaec;
            padding-bottom: 15px;
        }
    </style>
    <title>登录</title>
</head>
<body>
    <div class="middle-outer">
        <div class="vmiddle">
            <div class="login-panel">
                <h2 class="panel-title-text">会员登录</h2>
                <form class="login-form" action="signin.php" method="post">
                    <div class="form-cell">
                        <label class="floating-label">用户名/邮箱/手机</label>
                        <input class="input-text" type="text" name="uname">
                    </div>
                    <div class="form-cell">
                    <label class="floating-label">密码</label>
                        <input class="input-text" type="password" name="passwd">
                    </div>
                    <div class="form-action">
                        <button class="btn-action" type="submit">登录</button>
                    </div>
                </form>
                <p class="text-center">
                    没有账号? 去 <a href="signup.php">注册</a>
                </p>
                <?php
                    if ($error_msg) {
                        echo "<p class=\"text-center text-danger\">$error_msg</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

