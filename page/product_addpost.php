<?php
require('conn.php');

@$pid = $_POST['id'];
@$pname = $_POST["pro_name"];
@$price  = $_POST["pro_price"];
@$pro_src = $_POST["pro_src"];


// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

$sql = "INSERT INTO list_goods VALUES('$pid','$pid','$pname','$price',NULL,NULL,NULL,NULL,'$pro_src',NULL,NULL,NULL)";
// $r = $db->query($sql);
$r = @mysql_query($sql);
if($r)
{
    header("location:product1.php");
}
else
{
    echo "fail！";
}
?>