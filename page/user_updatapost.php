<?php
require('conn.php');
@$user_id = $_POST['user_id'];
@$username = $_POST["username"];
@$password  = $_POST["password"];
@$email = $_POST["email"];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

$sql = "update user set username='{$username}',
						password='{$password}',
						email='{$email}' where user_id='{$user_id}'";
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
$r = @mysql_query($sql);
if($r)
{
    header("location:user2.php");
}
else
{
    echo "fail！";
}
?>