<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta name="description" content="Description de ma page web." />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../CSS/style.css" />
</head>
<body>

	<div id="contactMail">
			<h2 id="h2Contact">Contactez nous</h2>
		<form method="POST" action="" id="contact">

			<input type="text" name="nom" id="nom" class="clmail" placeholder="Nom"/>
			<input type="text" name="object" id="object" class="clmail" placeholder="objet"/>
			<input type="text" name="messageMail" id="messageMail" class="clmail" placeholder="Le message a nous faire passer ..."/>
			<input type="submit" id="validMail"/>	


		</form>
	</div>

<?php include('../Includes/footer.php'); ?>
</body>
</html>
