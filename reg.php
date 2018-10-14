<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    用户名：<input type="text" id="user">
    <span class="error name-err"></span><br>
    密码：<input type="password" id="pwd1">
    <span class="error p1Err"></span><br>
    确认密码：<input type="password" id="pwd2">
    <button id="btn">注册</button>
    <script src="jquery-1.12.4.js"></script>
    <script>
        $(function () {
            $('#btn').on('click',function () {
                    var user=$('#user').val();
                    var pwd1=$('#pwd1').val();
                    var pwd2=$('#pwd2').val();
                    $.get('serve2.php',{
                        name:user,
                        pwd1:pwd1,
                        pwd2:pwd2
                    },function (data) {
                        if(data == 'nameErr'){
                            $('.name-err').html('用户名不能为空');
                        }
                        if(data == 'p1Err'){
                            $('.p1Err').html('密码不能为空');
                        }
                    },'text');
            })

        })
    </script>
</body>
</html>