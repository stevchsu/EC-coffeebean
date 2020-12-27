<?php 
	session_start(); 
	session_destroy(); //等於做登出的動作
	header("Location: index.php");  //回首頁


?> <!--先開啟session-->
