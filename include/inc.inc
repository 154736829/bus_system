<?php
/**
*公共信息
*/
//连接数据库
include(DIR . '/include/mysql.php');
$db = new DB();

$db->db_host = 'localhost';
$db->db_name = 'bus_system';
$db->db_user = 'root';
$db->db_pass = 'root';

if(!$db->connect('utf8')) exit('连接数据库出错!');
?>