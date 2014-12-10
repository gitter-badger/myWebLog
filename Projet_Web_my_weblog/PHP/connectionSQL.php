<?php
	include('myPDO.php');

	//check connection
	if(isset($_POST['pseudo']) && isset($_POST['motpass']))
	{
		$login = $_POST['pseudo'];
		$pass = sha1($_POST['motpass']);
		$sql = "SELECT * FROM user_profile WHERE login = '" . $login . "' AND passwd = '" . $pass . "'";
		$log = $connect->prepare($sql);
		$log->execute();
		$loged = $log->fetch();
		
		if($loged == TRUE)
		{
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['pwd'] = $pass;
			$check = $connect->prepare("SELECT * FROM user_profile WHERE login = '$login' AND passwd = '$pass'");
			$check->execute();
			$adminOrNot = $check->fetch();
			if($adminOrNot['id_type_account'] == 1)
			{
				header('Location: ../admin/admin.php');
			}
			else
			{
				header('Location: fetchInfo.php');
			}
		}
		else
		{
			
			
		}
		
	}
	
	
?>