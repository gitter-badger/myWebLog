<?php
	session_start();
	
	if(isset($_SESSION['login']) && isset($_SESSION['pwd']))
	{
		echo $_SESSION['login'];
	}
	else
	{
		header('Location: ../index.php');
	}
	
?>