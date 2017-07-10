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
  	<br><br><center><font color=green size=3><b>销 售 金 额 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="20%" align="center" valign="bottom" height="19">订单编号</td>
		    <td width="20%" align="center" valign="bottom">订单交易人</td>
		    <td width="20%" align="center" valign="bottom">订单金额</td>
		    <td width="20%" align="center" valign="bottom">订单时间</td>
		    <td width="20%" align="center" valign="bottom">操作</td>
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
			<td><?php echo $row['o_totalmoney'];?></td>
			<td><?php echo $row['o_dealtime'];?></td>
			<td>
				<a href='order_delete.php?id=<?php echo $row['o_id'];?>');\"></a>
				<a href='sales_amount_detail.php?id=<?php echo $row['o_id'];?>');\">查看详情</a>
			</td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
