<?php
require_once './db.php';
error_reporting(0); // 错误不输出
$error_msg = null;
if ( isset($_POST['uname']) && isset($_POST['passwd']) && isset($_POST['company']) ) {
    global $db_link;
    $uname = $_POST['uname'];
    $upasswd = $_POST['passwd'];
    $nickname = $_POST['nickname'];
    $company = $_POST['company'];
    // 防止 sql 注入，和 XSS 攻击
    $_uname = mysqli_real_escape_string($db_link, $uname);
    $_passwd = mysqli_real_escape_string($db_link, $upasswd);
    $_nickname = mysqli_real_escape_string($db_link, $nickname);
    $_company = mysqli_real_escape_string($db_link, $company);
    // 查询当账户名密码一致的结果
    $res = query("select id, uname from user where uname = '$_uname'");
    if ( count($res) < 1 ) {
        $id = insert("insert into user (uname, passwd, nick_name, company_name) values ('$_uname', '$_passwd', '$_nickname', '$_company')");
        $_SESSION['user_id'] = $id;
        $_SESSION['uname'] = $_uname;
        $_SESSION['nick_name'] = $_nickname;
        $_SESSION['company_name'] = $_company;
        header('Location: /index.php');
    } else {
        $error_msg = '该用户已经注册了，直接<a href="signin.php">登录</a>吧...';
    }
} else {
    $error_msg = '注册信息不全，请检查！';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <style>
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
        .signup-panel {
            margin: 0 auto;
            width: 500px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            
            padding: 30px 40px;
        }
        .panel-title-text {
            border-bottom: 2px solid #e4eaec;
            padding-bottom: 15px;
        }
        .signup-form{
            margin: 20px 0 20px;
        }
        .signup-form .form-cell {
            position: relative;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .signup-form .floating-label {
            color: #62a8ea;
            top: 8px;
            font-size: 14px;
        }
        .signup-form .input-text {
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
        .signup-form .input-text:focus {
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
    </style>
</head>
<body>
    <div class="middle-outer">
        <div class="vmiddle">
            <div class="signup-panel">
            <h2 class="panel-title-text">会员注册</h2>
                <form class="signup-form" action="signup.php" method="post">
                    <div class="form-cell">
                        <label class="floating-label">登录邮箱：</label>
                        <input class="input-text" type="text" name="uname">
                    </div>
                    <div class="form-cell">
                        <label class="floating-label">公司名称：</label>
                        <input class="input-text" type="text" name="company">
                    </div>
                    <div class="form-cell">
                        <label class="floating-label">昵称：</label>
                        <input class="input-text" type="text" name="nickname">
                    </div>
                    <div class="form-cell">
                        <label class="floating-label">密码：</label>
                        <input class="input-text" type="password" name="passwd">
                    </div>
                    <div class="form-cell">
                        <label class="floating-label">密码确认：</label>
                        <input class="input-text" type="password" name="repasswd">
                    </div>
                    <div class="form-action">
                        <button class="btn-action" type="submit">注册</button>
                    </div>
                    <?php
                        if  ( $error_msg ) {
                            echo "<p class=\"text-center text-danger\">$error_msg</p>";
                        }
                    ?>
                </form>
                <p class="text-center">
                    已有账号? 去 <a href="signin.php">登录</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>