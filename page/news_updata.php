<?php

require('conn.php');
@$n_id = $_POST['n_id'];
@$n_title = $_POST['n_title'];
@$n_content = $_POST['n_content'];
@$n_sender = $_POST['n_sender'];
@$n_sendtime = $_POST['n_sendtime'];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

// $sql = "update user_order set status=$status where o_id=$oid";
//$sql = "update user set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
$sql = "update news set n_title='{$n_title}',
						n_content='{$n_content}',
						n_sender='{$n_sender}',
						n_sendtime='{$n_sendtime}' WHERE n_id='{$n_id}'";
// $sql = "update user set username=77 where userid=$userid";
$r = @mysql_query($sql);
if($r)
{
    header("location:news.php");
}
else
{
    echo "fail！";
}
?>