<?php
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['pwd']))
	{}
	else
	{
		header('Location: ../index.php');
	}
	$_SESSION['admin'] === false ? header('Location: ../PHP/accueil.php') : "";
?>
