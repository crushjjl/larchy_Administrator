<?php
require('conn.php');
@$oid = $_POST['o_id'];
@$o_user = $_POST['o_user'];
@$o_user_tel = $_POST['o_user_tel'];
@$o_user_add = $_POST['o_user_add'];
@$o_remarks = $_POST['o_remarks'];
@$o_totalmoney = $_POST['o_totalmoney'];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

// $sql = "update user_order set status=$status where o_id=$oid";
//$sql = "update user set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
$sql = "update user_order set o_user='{$o_user}',
							  o_user_tel='{$o_user_tel}',
						      o_user_add='{$o_user_add}',
						      o_remarks='{$o_remarks}',
						      o_totalmoney='{$o_totalmoney}' WHERE o_id='{$oid}'";
// $sql = "update user set username=77 where userid=$userid";
$r = @mysql_query($sql);
if($r)
{
    header("location:order1.php");
}
else
{
    echo "fail！";
}
?>