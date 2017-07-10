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
  	<br><br><center><font color=green size=3><b>全 部 订 单 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="10%" align="center" valign="bottom" height="19">订单编号</td>
		    <td width="10%" align="center" valign="bottom">订单用户</td>
		    <td width="10%" align="center" valign="bottom">订单联系方式</td>
		    <td width="20%" align="center" valign="bottom">订单地址</td>
		    <td width="30%" align="center" valign="bottom">订单备注</td>
		    <td width="10%" align="center" valign="bottom">订单金额</td>
		    <td width="10%" align="center" valign="bottom">操作</td>
		</tr>
		<?php
			date_default_timezone_set("PRC");
			require('1_init.php');
			$sql = "SELECT * FROM user_order";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['o_id'];?></td>
			<td><?php echo $row['o_user'];?></td>
			<td><?php echo $row['o_user_tel'];?></td>
			<td><?php echo $row['o_user_add'];?></td>
			<td><?php echo $row['o_remarks']?></td>
			<td><?php echo $row['o_totalmoney'];?></td>
			<td>
				<a href='order_delete.php?id=<?php echo $row['o_id'];?>');\">删除</a>
				<a href='order_updata.php?id=<?php echo $row['o_id'];?>');\">详情</a>
			</td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
