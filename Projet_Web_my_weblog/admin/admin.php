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
	<title>admin</title>
	<meta name="description" content="Description de ma page web." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
</head>
<body>
	<h1><a href="accueil.php"><img src="../img/homeWhite.png" alt="logo home" id="acc"><span>Accueil</span></a></h1>

	<nav id="navTop">
		<ul>
			<li><a href="../PHP/accueil.php">Accueil</a></li>
			<li><a href="../PHP/contact.php">Contacter un responsable</a></li>
			<li><a href="../admin/admin.php">Panel administrateur</a></li>
			<li><a href="../PHP/deconnexion.php">Déconnexion</a></li>
		</ul>
	</nav>
	<aside id="listePost">
		<p>Bonjour, <?php echo $_SESSION['name'] . " " . $_SESSION['surname']; ?></p>
		<input type="text" name="search" id="idSearch" class="clSearch" placeholder="#Recherche" />
		<h2>Liste des Posts</h2>
		<ul>
			<li>POST1</li>
			<li>POST2</li>
		</ul>
	</aside>

	<div id="compte">
		<p>Nombre de blog :</p>
		<p>Nombre de post :</p>
		<p>Nombre de likes :</p>
	</div>
	<div id="gestion">
		<ul>
			<li><a href="#">Gestion des membres</a></li>
			<li><a href="#">Forum</a></li>
			<li><a href="#">Livre d'or</a></li>
		</ul>
	</div>
		<?php include("../Includes/footer.php"); ?>
</body>
</html>