<?php
require('conn.php');

@$nid = $_POST['n_id'];
@$ntitle = $_POST["n_title"];
@$ncontent  = $_POST["n_content"];
@$nsender = $_POST["n_sender"];
@$nsendtime = $_POST["n_sendtime"];

// $db = new MySQLi("localhost","root","root","larchy");
// !mysqli_connect_error() or die("连接失败！");

$sql = "INSERT INTO news VALUES('$nid','$ntitle','$ncontent','$nsender','$nsendtime',NULL)";
// $r = $db->query($sql);
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