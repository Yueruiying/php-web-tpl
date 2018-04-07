<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION && isset($_SESSION['nick_name'])) {
            echo $_SESSION['company_name'] . '(' . $_SESSION['nick_name'] . ')';
            echo '<a href="quit.php">注销</a>';
        } else {
            echo '<a href="signin.php">登录去</a> or <a href="signup.php">注册</a>';
        }
    ?>
</body>
</html>