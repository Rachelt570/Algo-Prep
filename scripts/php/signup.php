<?php

if(isset($_POST["Signup-Submit"]))
{

	require "DBHandler.php";
	$Username = $_POST["Username"];
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	$ConfirmPassword = $_POST["ConfirmPassword"];

	if(empty($Username) || empty($Email) || empty($Password) || empty($ConfirmPassword)) 
	{
		header("Location: http://localhost/School-Project/Signup.php?error=emptyFields&Username=".$Username."&Email=".$Email);	
		exit();
	}
	else if (!filter_var($Email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z0-9]*$/", $Username)))
	{
		header("Location: http://localhost/School-Project/Signup.php?error=emptyFields&Username=".$Username."&Email=".$Email);	
		exit();
	}
	else if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
	{
		header("Location: http://localhost/School-Project/Signup.php?error=invalidEmail&Username=".$Username);	
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $Username)) 
	{
		header("Location: http://localhost/School-Project/Signup.php?error=invalidUsername&Email=".$Email);	
		exit();
	}
	else if ($Password !== $ConfirmPassword) 
	{
		header("Location: http://localhost/School-Project/	Signup.php?error=DifferentPasswords");	
		exit();
	}
	else 
	{
		$Query = "SELECT nameUsers FROM users where nameUsers=?";

		if (!$stmt = $SQLIConnection->prepare($Query))
			{
				 printf('errno: %d, error: %s', $SQLIConnection->errno, $SQLIConnection->error);

   				 die;
				header ("Location: http://localhost/School-Project/Signup.php?error=SQLEfasdfadsRROR&");

			}
		else {
				$stmt->bind_param('s', $Username);
				$stmt->execute();
				$stmt->store_result();
				$ResultCheck = $stmt->num_rows();
				$stmt->close();
				if($ResultCheck >= 1) 
				{
					header ("Location: http://localhost/School-Project/Signup.php?error=UsernameAlreadyTaken");
					exit();
				}
				else
				{
					$Query = "INSERT INTO users (nameUsers, emailUsers, passwordUsers) VALUES (?, ?, ?)";
				if (!$stmt = $SQLIConnection->prepare("$Query"))  
				{
					header ("Location: http://localhost/School-Project/Signup.php?error=SQLError");
					exit();
				}
				else {
					$HashedPassword = password_hash($Password, PASSWORD_DEFAULT);
					$stmt->bind_param("sss", $Username, $Email, $HashedPassword);
					$stmt->execute();

					$stmt->close();
					$Query = "SELECT * FROM users where nameUsers=?"; 
					if(!$stmt = $SQLIConnection->prepare("$Query"))
					{
						header("Location: http://localhost/School-Project/Index.php?error=SQLError");
						exit();
					}
					$stmt->bind_param('s', $Username);
					$stmt->execute();
					$Results = $stmt->get_result();
					if($row = mysqli_fetch_assoc($Results)) 
					{		
						session_start();
						$_SESSION['userID'] = $row['idUsers'];
						$_SESSION['Username'] = $row['nameUsers'];
					}
					else 
					{
						header ("Location: http://localhost/School-Project/Index.php?Error=Servererror");
					}

					header ("Location: http://localhost/School-Project/Index.php?signup=success");
					exit();
				}
			}
		}	
	}
	$stmt.close();
	$SQLIConnection.close();
}
exit();
?>