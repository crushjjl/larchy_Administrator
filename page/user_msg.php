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
  	<br><br><center><font color=green size=3><b>用 户 留 言 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="15%" align="center" valign="bottom" height="19">留言编号</td>
		    <td width="10%" align="center" valign="bottom">联系人</td>
		    <td width="15%" align="center" valign="bottom">联系邮箱</td>
		    <td width="10%" align="center" valign="bottom">联系方式</td>
		    <td width="30%" align="center" valign="bottom">留言内容</td>
		    <td width="10%" align="center" valign="bottom">留言时间</td>
		    <td width="10%" align="center" valign="bottom">留言管理</td>
		</tr>
		<?php
			date_default_timezone_set("PRC");
			require('1_init.php');
			$sql = "SELECT * FROM user_msg";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['m_id'];?></td>
			<td><?php echo $row['m_user'];?></td>
			<td><?php echo $row['m_email'];?></td>
			<td><?php echo $row['m_phone'];?></td>
			<td><?php echo $row['m_content'];?></td>
			<td><?php echo $row['m_sendtime'];?></td>
			<td>
				<a href='usermsg_delete.php?id=<?php echo $row['m_id'];?>');\">删除</a>
			</td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
