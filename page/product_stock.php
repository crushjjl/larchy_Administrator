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
  	<br><br><center><font color=green size=3><b>全 部 商 品 库 存 与 销 量</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="10%" align="center" valign="bottom" height="19">商品编号</td>
		    <td width="30%" align="center" valign="bottom">商品名称</td>
		    <td width="10%" align="center" valign="bottom">商品价格</td>
		    <td width="10%" align="center" valign="bottom">商品库存</td>
		    <td width="10%" align="center" valign="bottom">商品销售</td>
		    <td width="15%" align="center" valign="bottom">上架时间</td>
		    <td width="15%" align="center" valign="bottom">操作</td>
		</tr>
		<?php
			date_default_timezone_set("PRC");
			require('1_init.php');
			$sql = "SELECT * FROM list_goods";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['pro_id'];?></td>
			<td><?php echo $row['pro_name'];?></td>
			<td><?php echo $row['pro_price'];?></td>
			<td><?php echo $row['pro_num'];?></td>
			<td><?php echo $row['pro_sales'];?></td>
			<td><?php echo $row['pro_addtime'];?></td>
			<td>
				<a href='product_stock_delete.php?id=<?php echo $row['pro_id'];?>');\">删除</a>
				<a href='product_numChange.php?id=<?php echo $row['pro_id'];?>');\">修改库存</a>
			</td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
