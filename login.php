<?php
session_start();
include('public.php');
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/10
 * Time: 14:01
 */
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
if ($_SESSION['userName'] != null) {
    echo "这是" . $_SESSION['userName'] . "的主页：<br>";
    echo "<br><a href='allposts.php'>跳转至网页主页</a>";
    echo "<br><a href='Posts.html'>发帖</a>";
    echo "<br><a href='exit.php'>退出</a>";
} elseif ($_POST['userName'] == null) {
    header("location:login.html");
} else {
    $_POST['userName'] = mysql_real_escape_string($_POST['userName']);
    $_POST['userName'] = mysql_real_escape_string($_POST['userName']);
    $_SESSION['userName'] = $_POST['userName'];
    $result = mysql_query("select * from user where userName='" . $_POST['userName'] . "' and Password='" . $_POST['Password'] . "'");
    if ($row = mysql_fetch_row($result)) {
        echo "登入成功<br>用户信息：<br>";
        $_SESSION['userID'] = $row[0];
        echo "userID:" . $row[0] . "<br>";
        echo "userName:" . $row[1] . "<br>";
        echo "Password:" . $row[2] . "<br>";
        echo "Sign:" . $row[3] . "<br>";
        echo "Email:" . $row[4] . "<br>";
        echo "<br><a href='allposts.php'>跳转至网页主页</a>";
        echo "<br><a href='Posts.html'>发帖</a>";
        echo "<br><a href='exit.php'>退出</a>";
    } else {
        echo "登陆失败";
    }

}