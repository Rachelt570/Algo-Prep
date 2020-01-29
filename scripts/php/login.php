<?php 
if(isset($_POST["Login-Submit"]))
{
	require "DBHandler.php";
	$Username = $_POST["Username-Input"];
	$Password = $_POST["Password-Input"];
	if(empty($Username) || empty($Password))
	{
		header("Location: http://localhost/School-Project/Index.php?error=emptyfield");
		exit();
	} else 
	{
			$Query = "SELECT * FROM users where nameUsers=?"; 
			if(!$stmt = $SQLIConnection->prepare("$Query"))
			{
				header("Location: http://localhost/School-Project/Index.php?error=SQLError");
				exit();
			}
		else 
		{
			$stmt->bind_param('s', $Username);
			$stmt->execute();
			$Results = $stmt->get_result();
			if($row = mysqli_fetch_assoc($Results)) 
			{
				$VerifyPassword = password_verify($Password, $row["passwordUsers"]);
				if(!$VerifyPassword)
				{
					header("Location: http://localhost/School-Project/Index.php?error=wrongPassword");
					exit();
				}
				else 
				{
					session_start();
					$_SESSION['userID'] = $row['idUsers'];
					$_SESSION['Username'] = $row['nameUsers'];
					header("Location: http://localhost/School-Project/Index.php?success=LoggedIn");
					exit();
				}
			} 
			else 
			{
				header("Location: http://localhost/School-Project/Index.php?error=nouser");
			}
		}
	}
} else 
{
	header("Location: http://localhost/School-Project/Index.php?error=ImproperAccess");
}
exit();
?>

