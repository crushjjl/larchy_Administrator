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
  <style type="text/css">
    div{
      width: auto;
      height: auto;
      padding: 15px 0;
      font-size: 16px;
      color: #666;
      font-family: 'microsoft yahei';
    }
    input{
      width: 200px;
      height: 20px;
    }
    .confirm_btn{
      width: 280px;
      height: 40px;
      text-align: center;
      vertical-align: middle;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
 </head>
  <body style="text-align: center;">
	<h2>添加用户</h2>
	<form action="user_addpost.php" method="post">
    <div>用户名字：<input type="text" name="username" value="" /></div>
    <div>用户密码：<input type="text" name="password" value="" /></div>
    <div>联系邮箱：<input type="text" name="email" value="" /></div>
		<div><input type="submit" class="confirm_btn" value="确认添加" /></div>
	</form>
  </body>
</html>