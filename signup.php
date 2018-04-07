<?php
require_once './db.php';
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
    </style>
</head>
<body>
    <div class="middle-outer">
        <div class="vmiddle">
            <div class="login-panel">
                <form action="signup.php" method="post">
                    登录邮箱：<input type="text" name="uname" />
                    公司名称：<input type="text" name="company" />
                    昵称：<input type="text" name="nickname" />
                    密码：<input type="password" name="passwd" />
                    密码确认：<input type="password" name="repasswd" />
                    <button type="submit">注册</button>
                    <?php
                        if  ( $error_msg ) {
                            echo "<p class=\"text-center text-danger\">$error_msg</p>";
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>