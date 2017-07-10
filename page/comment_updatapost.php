<?php
require('conn.php');
@$id = $_POST['id'];
@$pro_comment = $_POST['pro_comment'];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

// $sql = "update user_order set status=$status where o_id=$oid";
//$sql = "update user set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
$sql = "update list_goods set pro_comment='{$pro_comment}' WHERE id='{$id}'";
// $sql = "update user set username=77 where userid=$userid";
$r = @mysql_query($sql);
if($r)
{
    header("location:product_comment.php");
}
else
{
    echo "fail！";
}
?>