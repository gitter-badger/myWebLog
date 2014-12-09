<?php
	session_start();
	
	if(isset($_SESSION['login']) && isset($_SESSION['pwd']))
	{
		
	}
	else
	{
		header('Location: ../index.php');
	}
	
?>