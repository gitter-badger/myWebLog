<?php
	include('myPDO.php');

	if(isset($_POST['sexe']) && isset($_POST['civilite']) && isset($_POST['nom']) && $_POST['nom'] !== "" && isset($_POST['prenom']) && $_POST['prenom'] !== "" && isset($_POST['login']) && $_POST['login'] !== "" && isset($_POST['password']) && $_POST['password'] !== "" && isset($_POST['email']) && $_POST['email'] !== "")
	{
		/*
			récupérer le x-ème compte;
		*/
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$login = $_POST['login'];
		$password = $_POST['password'];
		$password = sha1($password);
		$mail = $_POST['email'];
		$sexe = $_POST['sexe'];
						 
		$insertAccount = "INSERT INTO user_profile VALUES ('', '$nom', '$prenom', '$mail', '','$sexe', '', '$login', '$password', 2)";
		$register = $connect->prepare($insertAccount);
		$register->execute();
		echo $insertAccount;
	}
	header('Location: ../index.php');
?>
