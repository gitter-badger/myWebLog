function sendLogin()
{
	var validLogin = true;
	
	if(document.getElementById("logPseudo").value == "")
	{
		document.loginForm.pseudo.style.backgroundColor = "red";
		validLogin = false;
	}
	
	if(document.getElementById("logPass").value == "")
	{
		docuument.loginForm.motpass.style.backgroundColor = "red";
		validLogin = false;
	}
	
	return validLogin;
}