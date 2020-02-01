<?php 
	require "users/scripts/php/Find-Profile-Pic.php";
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
						 	<img id = "Logo" src = "http://localhost/School-Project/assets/logo.png" alt = "Algo-Prep"/>
						 </figure> 
					</a>
				</li>
				<li id = "Logout-Area"> 
						<div id = "Logged-Out-Content"> <!--Only display if signed in -->
							<form id = "Logout" action = "http://localhost/School-Project/scripts/php/logout.php" method = "Post">
								<input type = "submit" class = "Account-Button" name = "Logout-Submit" id = "Logout-Submit" value="Signout">
							</form>
							<a href = "http://localhost/School-Project/users/accounts/'.$_SESSION['userID'].'/'.'Messages.php" id = "Header-Messages">
								<figure id = "Messages-Figure">
									<img id = "Messages-Image" src = "	http://localhost/School-Project/Assets/Messages.png"/>
									<figcaption> Messages </figcaption>
								</figure>
							</a>
							<a href = "http://localhost/School-Project/users/accounts/'.$_SESSION['userID'].'/'.$_SESSION['Username'].'.php" id = "Profile-Link"> 			
									<figure id = "Profile-Figure"> 
										<img src = "'.$_SESSION['ProfilePicture'].'." id = "Profile-Picture" alt = "User-Name"/>
										<figcaption> '.$_SESSION['Username'].' </figcaption>					
								</figure>
							</a>
							
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