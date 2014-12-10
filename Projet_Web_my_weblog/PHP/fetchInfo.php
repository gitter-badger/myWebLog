<?php
	include('myPDO.php');
	session_start();
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
	header('Location: accueil.php');
?>