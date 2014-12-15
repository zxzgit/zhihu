<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/10
 * Time: 17:40
 */
function linkDb()
{
    $con = mysql_connect('localhost', 'root', '');
    mysql_select_db('BBSdb', $con);
}
linkDb();
