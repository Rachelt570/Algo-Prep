<!DOCTYPE html>
	<html lang = "en-US">
	<head>
		<?php
			require "Title.php";
			require "scripts/php/session.php"; /* As this page doesn't have header.php session needs to be included directly.*/ 
		?>
		<link rel="stylesheet" type="text/css" href="styles/signup.css">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
		<link rel="stylesheet" type="text/css" href="styles/nav.css">
		<link rel="stylesheet" type="text/css" href="styles/footer.css">
		<!-- As this page does not have a header, can't require General-Styles.php -->
	</head>
	<body>
		<div id = "Outer-Wrapper">
			<header> </header> <!-- Header is for contact, on contact page so no header -->
			<?php 
				require "Nav.php";

			?>
			<main> 
				<h1> Signup </h1>
					<form id = "Signup-Form" action = "scripts/php/signup.php" method = "Post">
						<ul> 
							<li> 
								<label id = "Signup-Username-Label" for = "Signup-Username"> Username </label>
								<input id = "Signup-Username" name = "Username" type = "text" >
							</li>
							<li>
								<label id = "Signup-Password-Label" for = "Signup-Password"> Password </label>
								<input id = "Signup-Password" name = "Password" type = "password">
							</li>
							<li> 
								<label id = "Signup-Confirm-Password-Label" for = "Signup-Confirm-Password"> Confirm Password </label>
								<input id = "Signup-Confirm-Password" name = "ConfirmPassword" type = "password">
							</li>
							<li> 
								<label id = "Signup-Email-Label" for = "Signup-Email"> Email </label>
								<input id = "Signup-Email" name = "Email" type = "email">
							</li>
						</ul>
					<input id = "Signup-Submit" type = "submit" name = "Signup-Submit" value = "Submit">
					</form>
			</main> 
			<?php 
				require "Footer.php"
			?>

		</div>
	</body>
	</html>