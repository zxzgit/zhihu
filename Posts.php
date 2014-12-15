<?php
session_start();
include('public.php');
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/10
 * Time: 14:29
 */
if ($_POST==null) {
    header("location:Posts.html");
} else {
    echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
    echo "发布成功！<br>";
    echo "题目:" . $_POST['postTittle'] . "<br>内容:" . $_POST['postContent'];
    $_POST['postTittle'] = mysql_real_escape_string($_POST['postTittle']);
    $_POST['postContent'] = mysql_real_escape_string( $_POST['postContent']);
    $data = time();
    echo "this is sessionID:" . $_SESSION['userID'];
    $result = mysql_query("insert into posts(userID,postID,postTittle,postContent) values('" . $_SESSION['userID'] . "','post" . $data . "','" .  $_POST['postTittle'] . "','" .  $_POST['postContent'] . "')");
}