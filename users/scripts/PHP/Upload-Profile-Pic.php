<?php 
	session_start();
	if(isset ($_POST['submit-profile-picture']))
	{	
		if(!isset($_SESSION['userID']))
		{
			header ("location: ../../accounts/template/index.php?invalidAccess");
			exit();
		}
		$file = $_FILES['Profile-Picture'];
		$fileName = $_FILES['Profile-Picture']['name'];
		$fileTmpName = $_FILES['Profile-Picture']['tmp_name'];
		$fileSize = $_FILES['Profile-Picture']['size'];
		$fileError = $_FILES['Profile-Picture']['error'];
		$fileType = $_FILES['Profile-Picture']['type'];
		$UserIDNUM = $_SESSION['userID'];

		$fileExt = explode('.', $fileName); //Does this break if multiple '.' in file name?
		$fileActualExt = strtolower(end($fileExt));


		$allowedExt = array('jpg', 'jpeg', 'png');
		
		if(in_array($fileActualExt, $allowedExt)) 
		{
			if($fileError !== 0) {
				header("Location: ../../accounts/".$UserIDNUM."/".$_SESSION['Username'].".php?error=fileUploadFailed");
				exit();
			}
			if($fileSize > 1000000) {
				"Location: ../../accounts/".$UserIDNUM."/".$_SESSION['Username'].".php?error=MaximumSizeExceedMax1MB";
				exit();
			}
			$fileNameNew = "Profile-Picture.".$fileActualExt;
			$targetDir = "../../accounts/".$UserIDNUM."/images/";
			$fileDestination = $targetDir.$fileNameNew;
			if($_SESSION['ProfilePicture'] != 'http://localhost/School-Project/users/accounts/'.$_SESSION['userID'].'/images/Default-Profile-Picture.png') {
				unlink($targetDir."/Profile-Picture.".explode('.', $_SESSION['ProfilePicture'])[1]);
			}
			move_uploaded_file($fileTmpName, $fileDestination);
			header("Refresh:0; url=".$targetDir); //Refresh the file to
			// Ensure Update
			header ("location: ../../accounts/".$_SESSION['userID']."/".$_SESSION['Username'].".php?upload=success");	
		}
		else
		{
			header("Location: ../../accounts/".$UserIDNUM."/".$_SESSION['Username'].".php?error=InvalidFileType");
				exit();
		}
	}


?>