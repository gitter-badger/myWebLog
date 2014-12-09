<?php
	include('myPDO.php');
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['pwd']))
	{
		$sql = "SELECT * FROM user_profile WHERE id_user = '" . $-SESSION['login'] . " AND passwd = '" . $_SESSION['pwd'] . "'";
		$recupInfo = $connect->query($sql);
		$recupFinal = $recupInfo->fetch();
		$_SESSION['name'] = $recupFinal['nom'];
		$_SESSION['surname'] = $recupInfo['prenom'];
		$_SESSION['mail'] = $recupInfo['mail'];
		$_SESSION['born'] = $recupInfo['date_naissance'];
		$_SESSION['sexe'] = $recupInfo['sexe']; //restructurer sexe dans sql;
		$_SESSION['tel'] = $recupInfo['telephone'];
		
	}
?>