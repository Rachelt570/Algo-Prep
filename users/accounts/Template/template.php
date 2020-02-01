

<!DOCTYPE html>
<html lang = "en-US">
<head>
	<?php 
		require "../../../Title.php";
		require "../../../General-Styles.php";
	?>
	<link rel="stylesheet" type="text/css" href="../../styles/users.css">
</head>
<body>

	<?php 
		require "../../../Header.php";
		require "../../../Nav.php";
	?>
	<div id = "Outer-Wrapper">
	
		<main> 
			<h1> Algo-Prep </h1>
			<article id = "About"> 
				<section id = "User-Head-Info-Section">
					<h2> User-Name </h2>
					<ul id = "User-Head-Info"> 
						<li id = "User-Profile-Pic"> 
							<form action = "../../scripts/php/Upload-Profile-Pic.php" method="POST" enctype = "multipart/form-data">
								<input type = "file" name = "Profile-Picture">
								<input type = "submit" name = "submit-profile-picture" value = "submit">
							</form>
							<figure id = "User-Profile-Figure">
								<img id = "User-Profile-Picture" src = "images/Profile-Picture.jpg" alt = "User-Name">
							</figure>
						</li>
						<li id = "User-Contact-List">
							<a href = "#" id = "User-Contact-List-Link"> Contacts </a>
						</li>
						<li id = "User-Contact-Options"> 
							<input type = "button" id = "Add-To-Contact" value = "Add to Contacts"> <!-- Show to non-owner -->
							<input type = "button" id = "Remove-From-Contacts" value = "Remove from Contacts"> <!-- Show to owner -->
						</li>

				</section>
					<section id = "About-Section"> 
						<h3 id = "About-Header"> About </h3>
						<ul id = "About"> 
							<li id = "Description">
								<p id = "Description-Text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</li>
							<li id = "Professional-History">
								<ul id = "User-Professional-History"> 
									<li id = "Education-One"> 
										<p id  = "Education-One-Text"> High-School: Example-School [Example-Start:Example-End]</p>
									</li>
									<li id = "Education-Two"> 
										<p id  = "Education-Two-Text"> BSCS from Example University [Example-Start:Example-End] </p>
									</li>
									<li id = "Employment-One"> 
										<p id = "Employment-One-Text"> Job Title at Example Company [Example-Start:Example-End]
									</li>
								</ul>
							 </li>
							<li id = "Show-Case"> 
								<h3 id = "Show-Case-Header"> 
									Show-Case
								</h3>
								<ul list = User-Show-Case> 
									<li id = "Placeholder-One"> 
										<a href = "#" id = "USCPH1"> 
											<img id = "USCPHI1" src = "#" alt = "Placeholder-One"/> 
										</a>
									</li>
									<li id = "Placeholder-Two">
										<a href = "#" id = "USCPH2"> 
											<img id = "USCPHI2" src = "#" alt = "Placeholder-Two" /> 
										</a>
									 </li>
									<li id = "Placeholder-Three"> 
										<a href = "#" id = "USCPH3">
											<img id = "USCHPI3" src = "#" alt = "Placeholder-Three" />
										</a>
									</li>
								</ul>
							</li>		
							<li id = "Contact"> 
								<h3 id = "User-Contact-Info-Header"> Contact-Info </h3>
								<ul id = "User-Contact-Info"> 
									<li id = "User-Contact-Phone">
										<a href = "tel:000-000-0000" target = "_top"> 000-000-0000 </a>
									</li>
									<li id = "User-Contact-Email">
										<a href = "mailto:placeholder@example.com" target = "_top"> Placeholder@example.com </a>
									</li>
									<li id = "User-Contact-Fax">
										<a href = "tel:111-111-1111"> 111-111-1111 </a>
									</li>
								</ul>
							</li>
					</section>
					<section id = "Professional-Section"> 
						<h3 id = "Professional-Links-Header"> Professional Information </h3>
						<ul id = "Professional-Links">  
							<li> 
								<a href = "https://github.com/" id = "Github"> Github </a>
							</li>
							<li> 
								<a href = "https://linkedin.com" id = "Linkedin"> Linkedin </a>
							</li>
							<li> 
								<a href = "https://stackoverflow.com/" id = "Stackoverflow"> Stackoverflow </a>
							</li>
							<li> 
								<a href = "#" id = "Professional-Website"> Professional Website </a>

							</li>
							<li> 
								<a href = "#" id = "Resume"> Resume </a>
							</li>
						</ul>
					</section>
			</article>

			<aside id = "Achievements"> 
					<ul> 
						<li> 
							<a href id = "PH1-Link"> <img id = "PH1" src = "#" alt = "PH1"/> </a>
						</li>
						<li> 
							<a href id = "PH2-Link"> <img id = "PH2" src = "#" alt = "PH2"/> </a>
						</li>
						<li> 
							<a href id = "PH3-Link"> <img id = "PH3" src = "#" alt = "PH3"/> </a>
						</li>
						<li> 
							<a href id = "PH4-Link"> <img id = "PH4" src = "#" alt = "PH4"/> </a>
						</li>
						<li> 
							<a href id = "PH5-Link"> <img id = "PH5" src = "#" alt = "PH5"/> </a>
						</li>
						<li> 
							<a href id = "PH6-Link"> <img id = "PH6" src = "#" alt = "PH6"/> </a>
						</li>
						<li>
							<a href id = "PH7-Link"> <img id = "PH7" src = "#" alt = "PH7"/> </a>
						</li>
						<li> 
							<a href id = "Show-More-Link"> <img id = "Show-More" src = "#" alt = "Show-More"/> </a>
						</li>
					</ul></aside> 


		</main> 
		<?php
			require "../../../Footer.php";
		?>
	</div>
</body>
</html>