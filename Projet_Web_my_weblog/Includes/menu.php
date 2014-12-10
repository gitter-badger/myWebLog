<h1><a href="accueil.php"><img src="#" alt="bhj"><span>logo</span></a></h1>

<nav id="navTop">
	<ul>
		<li><a href="accueil.php">Accueil</a></li>
		<li><a href="contact.php">Contacter un responsable</a></li>
		<li><a href="../admin/admin.php">Panel administrateur</a></li>
		<li><a href="deconnexion.php">Déconnexion</a></li>
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

