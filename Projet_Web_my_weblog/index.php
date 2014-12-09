<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include('Includes/head.php'); ?>
	<title>MyWeblog</title>
</head>


<body>
	<header>
			<h1><a href="index.php"></a>My Web Blog</h1>
	</header>
<div id="main">

	<div id="formulaireConnexion">
		<h2>Connexion</h2>
		
		<form method="post" action="PHP/connectionSQL.php" class="connect">
			<p>
				<input type="text" name="pseudo" class="inputlog" placeholder="Login"/>
				<input type="password" name="motpass" class="inputlog" placeholder="Password"/>
				<input type="submit" name="validConnect" id="connexion" value="Connexion" />
				<a href="">Mot de passe oublié ?</a>
			</p>	
		</form>
	</div>


	<div id="formulaireInscription">

		<h2>Inscription</h2>

		<form method="post" action="PHP/registerSQL.php">
			

			<div id="divSexe">
				<span>Sexe :</span>
				<input type="radio" name="sexe" value="homme" class="sexe" id="sexe"/>
				<label for="sexe">Homme</label>

				<input type="radio" name="sexe" value="femme" class="sexe" id="lsexe"/>
				<label for="lsexe">Femme</label>

				<input type="radio" name="sexe" value="autre" class="sexe" id="asexe"/>
				<label for="asexe">Autre</label>

				</div>

				<div id="civil">
				<label for="lcivilite">Civilité:</label> 
				<select name="civilite" id="lcivilite">
					<option>M.</option>
					<option>Mme.</option>
				</select>

				</div>


				<div id="info">
				<input type="text" name="nom" id="nom" class="inscr" placeholder="Nom"/>
 
				<input type="text" name="prenom" id="prenom" class="inscr" placeholder="Prénom"/>

				<input type="text" name="login" class="inscr" placeholder="Pseudo"/>

				<input type="password" name="password" class="inscr" placeholder="Password"/>
				
				<input type="text" name="email" id="email" class="inscr" placeholder="Email"/>

				<input type="submit" name="valid" id="valid" value="Inscription" />

				</div>
			
		</form>


	</div>

	</div>
	<?php include('Includes/footer.php'); ?>
</body>
</html>
