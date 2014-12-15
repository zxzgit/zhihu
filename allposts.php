<?php
session_start();
include('public.php');
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/10
 * Time: 15:58
 */

echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
echo "<br><br>所有的帖子：<br>";

//$con=mysql_connect('localhost','root','');
//mysql_select_db('BBSdb',$con);

//帖子信息展示处理

$result = mysql_query("select * from posts");
while ($row = mysql_fetch_row($result)) {
    echo "postUser:" . $row[0] . "<br>";
    echo "postID:" . $row[1] . "<br>";
    echo "postTittle:" . $row[2] . "<a href='postDisplay.php?postID=" . $row[1] . "'>" . $row[2] . "</a><br>";
    echo "postContent:" . $row[3] . "<br>";
    echo "postTime:" . $row[4] . "<br><br><br>";

}
