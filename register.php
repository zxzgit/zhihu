<?php
include('public.php');
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/10
 * Time: 13:26
 */
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
$_POST['userName'] = mysql_real_escape_string( $_POST['userName']);
$_POST['Password'] = mysql_real_escape_string( $_POST['Password']);
$data = time();
if ( $_POST == null) {
    header("location:register.html");
} else {
    $result = mysql_query("insert into user values('user" . $data . "','" .  $_POST['userName'] . "','" .  $_POST['Password'] . "','nihao','helloEmail')");
    echo "注册成功";
    echo "<br><a href='allposts.php'>点击跳转至主页</a>";
}