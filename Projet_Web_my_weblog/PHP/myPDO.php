<?php
	//unix_socket=/home/coquel_d/.mysql/mysql.sock
	$home = "unix_socket=";
	$home .= getenv("HOME");
	$home .= ".mysql/mysql.sock"; 
	try
	{
		$connect = new PDO('mysql:host=localhost;dbname=myweblog;unix_socket=/home/mesa-g_f/.mysql/mysql.sock', 'root', '');
	}
	catch(PDOException $except)
	{
		die($except->getMessage());
	}
?>