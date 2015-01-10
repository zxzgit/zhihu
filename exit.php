<?php
session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/11
 * Time: 9:04
 */
echo "已经退出  ddfdf";
$_SESSION['userName']=null;
header("location:login.html");
