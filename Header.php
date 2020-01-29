<?php 
	require "scripts/php/session.php";
?>
<header> 
		<?php 
			if (isset($_SESSION['userID']))
			{
				echo '
				<ul id = "Header-List">
				<li id = "Website-Logo"> 
					<a href = "http://localhost/School-Project/index.php"> 
						<figure>
						 	<img id = "Logo" src = "http://localhost/School-Project/assets/logo.png" alt = "SITE_TITLE"/>
						 </figure> 
					</a>
				</li>
				<li id = "Logout-Area"> 
						<div id = "Logged-Out-Content"> <!--Only display if signed in -->
							<form id = "Logout" action = "http://localhost/School-Project/scripts/php/logout.php" method = "Post">
								<input type = "submit" class = "Account-Button" name = "Logout-Submit" id = "Logout-Submit" value="Signout">
							</form>
						</div>
				</li>
				';
			}
			else 
			{
				echo '
				<ul id = "Header-List">
				<li id = "Website-Logo"> 
					<a href = "http://localhost/School-Project/index.php"> 
						<figure>
						 	<img id = "Logo" src = "http://localhost/School-Project/assets/logo.png" alt = "SITE_TITLE"/>
						 </figure> 
					</a>
				</li>
				<li id = "Login-Area">
					<div id = "Logged-In-Content"> 
					 <!-- Only display if not signed in -->
						<form id = "Login-Form" action = "http://localhost/School-Project/scripts/php/login.php" method = "Post"> 
							<label id = "Username-Input-Label" for = "Username-Input"> Username </label>
							<input id = "Username-Input" name = "Username-Input" type = "text">
							<label id = "Password-Input-Label" name = "Password-Input" for = "Password-Input"> Password </label>
							<input id = "Password-Input" type = "password" name = "Password-Input">
							<input  type = "submit" class = "Account-Button" name = "Login-Submit" id = "Login-Submit" value = "Submit" > 
							<a  class = "Account-Button" id = "Login-Signup" href = "http://localhost/School-Project/Signup.php"> Signup </a>
						</form>
					
					</div>
				</li>
				';
			}
		?>
					
			</ul>
		</header>