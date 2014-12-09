<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta name="description" content="Description de ma page web."/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
</head>


<body>
	<div id="header">
			<h1><a href="index.php"></a>My Web Blog</h1>
	</div>
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
			

			<div id="sexe">
				<span>Sexe :</span>
				<input type="radio" name="sexe" value="homme" class="sexe" />
				<label for="sexe">Homme</label>

				<input type="radio" name="sexe" value="femme" class="sexe"/>
				<label for="lsexe">Femme</label>

				<input type="radio" name="sexe" value="autre" class="sexe"/>
				<label for="lsexe">Autre</label>

				</div>

				<div id="civil">
				<label for="lcivilite">Civilité:</label> 
				<select name="civilite" id="civilite">
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
