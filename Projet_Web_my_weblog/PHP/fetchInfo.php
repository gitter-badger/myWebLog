<?php
	session_start();
	include('myPDO.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['pwd']))
	{
		$sql = "SELECT * FROM user_profile WHERE login = '" . $_SESSION['login'] . "' AND passwd = '" . $_SESSION['pwd'] . "'";
		$recupInfo = $connect->query($sql);
		while($recupFinal = $recupInfo->fetch())
		{
			$_SESSION['name'] = $recupFinal['nom'];
			$_SESSION['surname'] = $recupFinal['prenom'];
			$_SESSION['mail'] = $recupFinal['mail'];
			$_SESSION['born'] = $recupFinal['date_naissance'];
			$_SESSION['sexe'] = $recupFinal['sexe']; //restructurer sexe dans sql;
			$_SESSION['tel'] = $recupFinal['telephone'];
		}
	}
	if($_SESSION['admin'] === false)
	{
		  header('Location: accueil.php');
	}
	else
	{
		header('Location: ../admin/admin.php');
	}
	   
?>