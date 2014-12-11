<?php
	//unix_socket=/home/coquel_d/.mysql/mysql.sock
	$home = "unix_socket=";
	$home .= getenv("HOME");
	$home .= ".mysql/mysql.sock"; 
	try
	{
		$connect = new PDO("mysql:host=localhost;dbname=myweblog;$home", 'root', '');
	}
	catch(PDOException $except)
	{
		die($except->getMessage());
	}
?>