<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2018/10/14
 * Time: 9:42
 */
//$name = $_GET['user'];
//$p = $_GET['password'];

$name = $_POST['user'];
$p = $_POST['password'];
$s = $_POST['sex'];
$h = $_POST['hobby'];
echo "用户名是：".$name,"密码是：".$p,"性别：".$s,"爱好：".$h;
//$_GET获取数据，可见，有限制2000
//$_POST插入，信息对其他人不可见，信息数量无限制
//$_put修改
//用什么方式传用什么方式接
//数据在后台算



