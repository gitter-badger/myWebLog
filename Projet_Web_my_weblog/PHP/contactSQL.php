<?php

session_start();

include("myPDO.php");

	$message = $_POST['messageMail'];

	$obj = "De " . $_SESSION['name'] . " : " . $_POST['object'] . ", " . $_SESSION['mail'];

	mail("coquelet.c@gmail.com", $obj, $message);

?>

	<script type="text/javascript">alert("Votre mail a bien ete envoye");</script>

<?php

	header("Refresh:1; accueil.php");

?>