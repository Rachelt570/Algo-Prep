<?php
	session_start();
	if(isset($_SESSION['userID']))
	{
		if($_SESSION['ProfilePicture'] != 'http://localhost/School-Project/users/accounts/'.$_SESSION['userID'].'/images/Default-Profile-Picture.png') 
		{
			$UserIDNUM = $_SESSION['userID'];
			$targetDir = "../../accounts/".$UserIDNUM."/images/";
			unlink($targetDir."/Profile-Picture.".explode('.', $_SESSION['ProfilePicture'])[1]);
			$_SESSION['ProfilePicture'] = 'http://localhost/School-Project/users/accounts/'.$_SESSION['userID'].'/images/Default-Profile-Picture.png';
			header("Refresh:0; url=".$targetDir); //Refresh the file to
			// Ensure Update
		}
		header ("location: ../../accounts/".$_SESSION['userID']."/".$_SESSION['Username'].".php?deleteProfilePic=success");
	} else {
		header ("http://localhost/School-Project/index.php?improperAccess");
		
	}
?>