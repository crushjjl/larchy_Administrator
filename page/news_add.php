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
	<form action="news_addpost.php" method="post">
		<br><br><center><font color=green size=3><b>添 加 新 闻 信 息</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="10%" align="center" valign="bottom" height="19">新闻编号ID</td>
		    <td width="30%" align="center" valign="bottom">新闻标题</td>
		    <td width="40%" align="center" valign="bottom">新闻内容</td>
		    <td width="10%" align="center" valign="bottom">发布者</td>
		    <td width="10%" align="center" valign="bottom">发布时间</td>
		    <td width="10%" align="center" valign="bottom">操作</td>
		</tr>
		<tr>
			<td><input type="text" name="n_id" value="" /></td>
			<td><input type="text" name="n_title" value="" /></td>
			<td><input type="text" name="n_content" value="" /></td>
			<td><input type="text" name="n_sender" value="" /></td>
			<td><input type="text" name="n_sendtime" value="" /></td>
			<td align="center" valign="bottom"><input type="submit"  value="确认添加"/></td>
		</tr>
		</table>
	</form>
  </body>
</html>
