<?php
	//unix_socket=/home/coquel_d/.mysql/mysql.sock
	try
	{
		$connect = new PDO('mysql:host=localhost;dbname=myweblog', 'root', '');
	}
	catch(PDOException $except)
	{
		die($except->getMessage());
	}
?>