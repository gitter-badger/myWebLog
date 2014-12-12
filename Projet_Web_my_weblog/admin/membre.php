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
<!DOCTYPE html>
<html>
<head>
	<title>Admin - gestion des membres</title>
	<meta name="description" content="Description de ma page web." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
</head>
<body>

</body>
</html>