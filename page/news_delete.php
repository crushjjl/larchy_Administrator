<?php
//$db = new MySQLi("localhost","root","root","gift");
//!mysqli_connect_error() or die("连接失败！");
require('conn.php');
$id = $_GET["id"];

$sql = "delete from news where n_id ='{$id}'";
$r = @mysql_query($sql);
if($r)
{
  header("location:news.php");
}
else
{
  echo "删除失败！";
}
?>