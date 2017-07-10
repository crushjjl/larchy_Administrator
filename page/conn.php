<?php
	// $db = new MySQLi("localhost","root","root","larchy");
	// !mysqli_connect_error() or die("连接失败！");
	header('Content-Type:text/html;charset=utf-8');
	header("Access-Control-Allow-Origin:*"); //允许任何访问(包括ajax跨域) 
	$host='localhost';//主机  
	$user='root';//数据库账号  
	$password='root';//数据库密码
	$database='larchy';//数据库名
	@mysql_connect($host,$user,$password) or die("error");//连接数据库管理系统  
	@mysql_select_db($database);//选择操作数据库  
	@mysql_query("SET NAMES utf8");//设置设置UTF-8编码(JSON的唯一编码)，数据库整理为：utf8_general_ci，以此达到输出中文简体的目的  
?>
