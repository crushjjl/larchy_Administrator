<?php
require('conn.php');
@$pro_id = $_POST['id'];
@$pro_name = $_POST['pro_name'];
@$pro_price = $_POST['pro_price'];
@$pro_num = $_POST['pro_num'];
@$pro_sales = $_POST['pro_sales'];
@$pro_addtime = $_POST['pro_addtime'];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

// $sql = "update user_order set status=$status where o_id=$oid";
//$sql = "update user set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
$sql = "update list_goods set pro_name='{$pro_name}',
						      pro_price='{$pro_price}',
						      pro_num='{$pro_num}',
						      pro_sales='{$pro_sales}',
						      pro_addtime='{$pro_addtime}' WHERE id='{$pro_id}'";
// $sql = "update user set username=77 where userid=$userid";
$r = @mysql_query($sql);
if($r)
{
    header("location:product_stock.php");
}
else
{
    echo "fail！";
}
?>