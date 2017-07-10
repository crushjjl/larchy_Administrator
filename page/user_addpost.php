<?php
require('conn.php');
//@$userid = $_POST['userid'];
@$username = $_POST["username"];
@$password  = $_POST["password"];
@$email = $_POST["email"];

//创建用户资料表单
// require('1_init.php');
$sql = "INSERT INTO user VALUES(NULL,'$username','$password','$email')";
// $result = mysqli_query($conn,$sql);
// $userId = mysqli_insert_id($conn);

// $sql = "INSERT INTO address VALUES(NULL,'$userId',NULL,NULL,NULL,NULL,NULL)";
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