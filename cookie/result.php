<?php date_default_timezone_set("Asia/Taipei");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<h1>登入成功</h1>  


歡迎<?=$_COOKIE['login'];?>

<p>
        <a href="login.php?login=1">回登入頁</a>
        <br>
        <a href='logout.php'>登出</a>
    </p>
</body>
</html>