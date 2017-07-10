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
	require('conn.php');
	$id = $_GET["id"];
	
	$sql1 = "select * from list_goods where id='{$id}'";
	$returnData = @mysql_query($sql1);
	$att1 = @mysql_fetch_array($returnData);
	?>
	<form action="product_updatapost.php" method="post">
		<br><br><center><font color=green size=3><b>修 改 商 品 信 息</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="15%" align="center" valign="bottom" height="19">商品ID</td>
		    <td width="25%" align="center" valign="bottom">商品名称</td>
		    <td width="15%" align="center" valign="bottom">商品价格</td>
		    <td width="25%" align="center" valign="bottom">图片路径</td>
		    <td width="20%" align="center" valign="bottom">操作</td>
		</tr>
		<tr>
			<td><input type="text" name="id" value="<?php echo $att1[0] ?>" readonly="readonly"/></td>
			<td><input type="text" name="pro_name" value="<?php echo $att1[2] ?>" /></td>
			<td><input type="text" name="pro_price" value="<?php echo $att1[3] ?>" /></td>
			<td><input type="text" name="pro_src" value="<?php echo $att1[8] ?>" /></td>
			<td><input type="submit"  value="确认修改"/></td>
		</tr>
		</table>
	</form>
  </body>
</html>