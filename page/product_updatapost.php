<?php

require('conn.php');

@$pid = $_POST['id'];
@$pname = $_POST["pro_name"];
@$price  = $_POST["pro_price"];
@$pic = $_POST["pro_src"];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

$sql = "update list_goods set pro_name='$pname',
						   	  pro_price='$price',
						      pro_src='$pic' where id=$pid";
//$sql = "update user set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
//$sql = "update user set username='{$username}',
//						password='{$password}',
//						nickname='{$nickname}',
//						money= 888,
//						userimg='{$userimg}',
//						email='{$email}',
//						phone='{$phone}',
//						sex={$s},
//						birth='{$birth}',
//						sign='{$sign}',
//						time={$time} WHERE userid='{$userid}'";
//$sql = "update user set username=77 where userid=$userid";
// $r = $db->query($sql);
// var_dump($sql);
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