<?php
    $flag=true;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['user'];
        $p = $_POST['password'];
        if($name=='admin' && $p=='123'){
            $flag=false;
        }else $flag=true;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if ($flag){
            ?>
    <form action="login.php" method="post">
<!-- method默认get-->
        用户名：<input type="text" name="user"><br>
        密码：<input type="password" name="password"><br>
<!--        性别：<input type="radio" name="sex" value="f">女-->
<!--        <input type="radio" name="sex" value="m">男<br>-->
<!--        <input type="checkbox" name="hobby[]" value="排球">排球-->
<!--        <input type="checkbox" name="hobby[]" value="篮球">篮球-->
<!--        <input type="checkbox" name="hobby[]" value="游泳">游泳-->
        <input type="submit">
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "用户名密码错误";
        }
        ?>
    </form>
    <?php } else{
        echo "登陆成功";
    } ?>
</body>
</html>