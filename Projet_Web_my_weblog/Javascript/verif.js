function verifConnexion()
{
	var login = document.getElementById("login");
	var pwd = document.getElementById("pwd");

	if (pwd.value.length < 4)
	{
      pwd.style.borderColor = "#D42020";
	}
}

function verifInscr()
{

	var nom = document.getElementById("nom");
	var prenom = document.getElementById("prenom");
	var pseudo = document.getElementById("pseudo");
	var password = document.getElementById("password");
	var email = document.getElementById("email");


	if (nom.value.length == 0 )
	{
		nom.style.borderColor = "#D42020";
		alert("Vous n'avez pas renseigné votre nom !");
	}

	if (prenom.value.length == 0)
	{
		prenom.style.borderColor = "#D42020";
		alert("Vous n'avez pas renseigné votre prenom !");
	}

	if (pseudo.value.length == 0)
	{
		pseudo.style.borderColor = "#D42020";
		alert("Vous n'avez pas renseigné votre pseudo !");
	}

	if (password.value.length == 0)
	{
		password.style.borderColor = "#D42020";
		alert("Vous n'avez pas renseigné de mot de passe !");
	}

	if (email.value.length == 0)
	{
		email.style.borderColor = "#D42020";
		alert("Votre email est invalide !");
	}

}