<!DOCTYPE HTML>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="keywords" content="scclui框架">
	<meta name="description" content="scclui为轻量级的网站后台管理系统模版。">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
  <title>首页</title>
 </head>
  <body>
	<?php
	date_default_timezone_set("PRC");
	//$db = new MySQLi("localhost","root","root","gift");
	//!mysqli_connect_error() or die("连接失败！");
	require('conn.php');
	$id = $_GET["id"];
	
	$sql1 = "select * from user_order where o_id='{$id}'";
	$returnData = @mysql_query($sql1);
	$att1 = @mysql_fetch_array($returnData);
	?>
	<form action="product_sales_amount.php" method="post">
		<br><br><center><font color=green size=3><b>查 看 订 单 详 情</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="10%" align="center" valign="bottom" height="19">订单编号ID</td>
		    <td width="10%" align="center" valign="bottom">订单用户</td>
		    <td width="10%" align="center" valign="bottom">订单联系方式</td>
		    <td width="20%" align="center" valign="bottom">订单地址</td>
		    <td width="30%" align="center" valign="bottom">订单备注</td>
		    <td width="10%" align="center" valign="bottom">订单金额</td>
		    <td width="10%" align="center" valign="bottom">操作</td>
		</tr>
		<tr>
			<td><input type="text" name="o_id" value="<?php echo $att1[0] ?>" readonly="readonly"/></td>
			<td><input type="text" name="o_user" value="<?php echo $att1[1] ?>" readonly="readonly"/></td>
			<td><input type="text" name="o_user_tel" value="<?php echo $att1[2] ?>" readonly="readonly"/></td>
			<td><input type="text" name="o_user_add" value="<?php echo $att1[3] ?>" readonly="readonly"/></td>
			<td><input type="text" name="o_remarks" value="<?php echo $att1[4] ?>" readonly="readonly"/></td>
			<td><input type="text" name="o_totalmoney" value="<?php echo $att1[5] ?>" readonly="readonly"/></td>
			<td><input type="submit"  value="确认信息"/></td>
		</tr>
		</table>
	</form>
  </body>
</html>