<?php
session_start();
include('public.php');
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/10
 * Time: 15:31
 */
//连接数据库
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>";
echo "<br><br>帖子信息展示：<br>";
if ($_GET == null) {
    header("location:allposts.php");
} else {
    $_GET['postID'] = mysql_real_escape_string($_GET['postID']);
    $data = time();
//帖子信息展示处理

    $result = mysql_query("select * from posts where postID='" . $_GET['postID'] . "'");
    while ($row = mysql_fetch_row($result)) {
        echo "postUser:" . $row[0] . "<br>";
        echo "postID:" . $row[1] . "<br>";
        echo "postTittle:" . $row[2] . "<br>";
        echo "postContent" . $row[3] . "<br>";
        echo "postTime" . $row[4] . "<br>";
    }
//评论处处理
    echo "<br><br>评论信息展示：<br>";
    $result = mysql_query("select * from reply where postID='" . $_GET['postID'] . "'");
    $i = 1;
    while ($row = mysql_fetch_row($result)) {
        echo "评论" . $i . ":<br>";
        $i++;
        echo "replyID:" . $row[0] . "<br>";
        echo "postID:" . $row[1] . "<br>";
        echo "userID:" . $row[2] . "<br>";
        echo "replyContent:" . $row[3] . "<br>";
        echo "date:" . $row[4] . "<br>";
        echo "<a style='display: inline-block' href='javascript:void(0)' onclick='nihao();' replayID='" . $row[0] . "'><strong><</strong></a>";
        echo "<div style='display: inline-block' id='" . $row[0] . "'>score:" . $row[5] . "</div>";
        echo "<a style='display: inline-block' href='javascript:void(0)' onclick='nihao();'  replayID='" . $row[0] . "'><strong>></strong></a>";
        echo "<br><br><br>";
    }
}

?>
