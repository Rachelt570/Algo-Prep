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
			<h1> Terra570  </h1>
			<article id = "About"> 
				<section id = "User-Head-Info-Section">
					<h2> Terra570</h2>
					<ul id = "User-Head-Info"> 
						<li id = "User-Profile-Pic"> 
						<?php
							if(isAdmin()) {
								echo'
							<form action = "../../scripts/php/Upload-Profile-Pic.php" method="POST" enctype = "multipart/form-data" id = "Upload-Profile-Pic-Form">
								<input type = "file" id = "Input-Profile-Photo" name = "Profile-Picture">
								<input type = "submit" id = "Input-Profile-Submit" name = "submit-profile-picture" value = "Submit">
							</form>
					
									<form action = "../../scripts/php/Delete-Profile-Pic.php" method = "POST" id = "Delete-Profile-Pic-Form">
										<input type = "submit" id = "Input-Profile-Delete" name = "delete-profile-picture" value = "Delete Picture">	
									</form>';
							}	
							?>
							<figure id = "User-Profile-Figure">
								<?php
									echo '<img src =  "'.getProfilePicture().'" id = "User-Profile-Picture" alt = "User-Name">'
								?>
							</figure>
						</li>
						<li id = "User-Contact-List">
							<h3> Contacts </h3>
							<ul id = "Contacts">
 								<li id = "ContactPH1L">
 									
									<a href = "#" id = "ContactPH1"> 
										<figure> 
											<img id = "ContactPH1I" src = "../../assets/images/Achievements/Day.png" alt = "ContactPH1I"> 
											<figcaption>Contact One</figcaption>
										</figure>
									</a>
								</li>
								<li id = "ContactPH2L">
									<a href = "#" id = "ContactPH2"> 
										<figure> 
											<img id = "ContactPH2I" src = "../../assets/images/Achievements/Night.png" alt = "ContactPH2I"> 
											<figcaption>Contact Two</figcaption>
										</figure>
									</a>
								</li>
								<li id = "ContactPH3L">
									<a href = "#" id = "ContactPH3"> 
										<figure> 
											<img id = "ContactPH3I" src = "../../assets/images/Achievements/Clock.png" alt = "ContactPH3I"> 
											<figcaption>Contact Three</figcaption>
										</figure>
									</a>
								</li>
								<li id = "Contact-Show-MoreL">
									<a href = "#"> 
										<figure> 
											<img id = "Contact-Show-MoreI" src = "../../assets/images/Achievements/Plus.png" alt = "ContactPH4I"> 
											<figcaption>Show More</figcaption>
										</figure>
									</a>
								</li>
							</ul>

								<a href = "#" id = "Contact-Requests"> <img id = "Contact-Requests-Notifications" src = "../../assets/images/Notifications/Notifications.png" alt = "Notifications"> View Contact Requests </a>
						
								<form id = "Add-Contact-Form" method = "POST" action = "#">
									<label for = "Add-Contact-Input"> Add Contact </label>
									<input type = "text" name = "Add-Contact-Input" placeholder="Username" id = "Add-Contact-Input">
									<input type = "submit" id = "Add-Contact-Submit" name = "Add-Contact-Submit">
								 </form>
							
						</li>
						<li id = "User-Contact-Options"> 
							<?php
								if(isLoggedIn() && !isAdmin()) {
									echo '
									<input type = "button" id = "Add-To-Contact" value = "Add to Contacts"> <!-- Show to non-owner -->
									<input type = "button" id = "Remove-From-Contacts" value = "Remove Contact"> <!-- Show to owner -->
									';
								}
							?>
						</li>
					</ul>
				</section>
				
				<section id = "About-Section"> 
						<h3 id = "About-Header"> About </h3>
						<ul id = "AboutUL"> 
							<li id = "Description">
								<textarea id = "Description"> 
									Description-Text
								</textarea>
							</li>
							<li id = "Professional-History">
								<?php
								if(isAdmin()) 
									echo '
								<form id = "Add-History" method = "POST" action = "#"> 
									<label for = "Add-Education" id = "Education-Label"> Add Education </label>
									<input id = "Add-Education" id = "Education" name = "Add-Education" type = "Text">
									<label for = "Add-Employment" id = "Employment-Label"> Add Employment </label>
									<input id = "Add-Employment" id = "Employment" name = "Add-Employment" type = "Text">
									<input id = "Submit-History" type = "submit" value = "Submit"> 
								</form>
									'
								?>
								<ul id = "User-Professional-History"> 
									<li id = "Education-One"> 
										<p id  = "Education-One-Text"> High-School: Example-School [Example-Start:Example-End] </p>
										<?php 
											if(isAdmin()) {
												echo '
												<button class = "Delete-Info"> <img src = "../../assets/images/delete.png" alt = "Delete"/> </button>
												<button class = "Edit-Info"> <img src = "../../assets/images/edit.png" alt = "Edit"/> </button>
												';
											}
										?>
								
									</li>
										<li id = "Education-Two"> 
										<p id  = "Education-Two-Text"> BSCS from Example University [Example-Start:Example-End] </p>
										<?php 
											if(isAdmin()) {
												echo '
												<button class = "Delete-Info"> <img src = "../../assets/images/delete.png" alt = "Delete"/> </button>
												<button class = "Edit-Info"> <img src = "../../assets/images/edit.png" alt = "Edit"/> </button>
												';
											}
										?>
									</li>
									<li id = "Employment-One"> 
										<p id = "Employment-One-Text"> Job Title at Example Company [Example-Start:Example-End] </p>
										<?php 
											if(isAdmin()) {
												echo '
												<button class = "Delete-Info"> <img src = "../../assets/images/delete.png" alt = "Delete"/> </button>
												<button class = "Edit-Info"> <img src = "../../assets/images/edit.png" alt = "Edit"/> </button>
												';
											}
										?>
									</li>
								</ul>
							 </li>
							<li id = "Show-Case"> 
								<h3 id = "Show-Case-Header"> 
									Show-Case
								</h3>
								<ul id = "User-Show-CaseUL"> 
									<li id = "Placeholder-One"> 
										<a href = "" id = "USCPH1"> 
											<img id = "USCPHI1" src = "images/show-case/one.png" alt = "Placeholder-One"/> 
										</a>
										<p id = "USCPHP1"> 
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</li>
									<li id = "Placeholder-Two">
										<a href = "#" id = "USCPH2"> 
											<img id = "USCPHI2" src = "images/show-case/two.png" alt = "Placeholder-Two" /> 
										</a>
										<p id = "USCPHP2"> 
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									 </li>
									<li id = "Placeholder-Three"> 
										<a href = "#" id = "USCPH3">
											<img id = "USCHPI3" src = "images/show-case/three.png" alt = "Placeholder-Three" />
										</a>
										<p id = "USCPHP3"> 
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</li>
								</ul>
							</li>		
							<li id = "Contact"> 
								<h3 id = "User-Contact-Info-Header"> Contact-Info </h3>
								<ul id = "User-Contact-InfoUL"> 
									<?php
									if(isAdmin())
										echo '
									<li id = "User-Contact-Controls"> 
										<button class = "Delete-Info"> <img src = "../../assets/images/delete.png" alt = "Delete"/> </button>
										<button class = "Edit-Info"> <img src = "../../assets/images/edit.png" alt = "Edit"/> </button>
									</li>
										';
									?>
									<li id = "User-Contact-Phone">
										<h4> Phone </h4>
										<a href = "tel:000-000-0000" target = "_top">000-000-0000 </a>
									</li>
									<li id = "User-Contact-Email">
										<h4> Email: </h4>
										<a href = "mailto:placeholder@example.com" target = "_top"> Placeholder@example.com </a>
									</li>
									<li id = "User-Contact-Fax">
										<h4> Fax: </h4>
										<a href = "tel:111-111-1111"> 111-111-1111 </a>
									</li>
									<li id = "User-Contact-Address">
										<h4> Address </h4>
										<a href = "#"> 101 Nowhere Street, Calgary, Alberta, Canada </a>
									</li>
								</ul>
							</li>
				</section>
				
				<section id = "Professional-Section"> 
						<h3 id = "Professional-Links-Header"> Professional Information </h3>
						<ul id = "Professional-LinksUL">  
							<?php 
							if(isAdmin()){
								echo '
							<li id = "Professional-Links-Controls"> 
								<button class = "Edit-Info"> <img src = "../../assets/images/edit.png" alt = "Edit"/> </button>
								<button class = "Delete-Info"> <img src = "../../assets/images/delete.png" alt = "Delete"/> </button>
							</li> ';
							}							
							?>
							<li id = "GithubLI"> 
								<a href = "https://github.com/" id = "Github"> Github </a>
							</li>
							<li id = "LinkedinLI"> 
								<a href = "https://linkedin.com" id = "Linkedin"> Linkedin </a>
							</li>
							<li id = "StackoverflowLI"> 
								<a href = "https://stackoverflow.com/" id = "Stackoverflow"> Stackoverflow </a>
							</li>
							<li id = "HackerrankLI">
								<a href = "https://www.hackerrank.com/"> Hacker Rank </a>
							</li>
							<li id = "Professional-WebsiteLI"> 
								<a href = "#" id = "Professional-Website"> Professional Website </a>

							</li>
							<li id = "ResumeLI"> 
								<a href = "#" id = "Resume"> Resume </a>
							</li>

						</ul>
					</section>
			</article>
			<aside id = "Achievements"> 
					<ul> 
						<li id = "Achievements-Header">
							<h2> Achievements </h2>
						 </li>
						<li id = "Achievement-1"> 
							<a href id = "PH1-Link">
								<figure> 
									 <img id = "PH1" src = "../../assets/images/Achievements/Trophy.png" alt = "PH1"/>
									<figcaption>Solve a Problem</figcaption>
								</figure>
							</a>
						</li>
						<li id = "Achievement-2"> 
							<a href id = "PH2-Link"> 
								<figure>
									<img id = "PH2" src = "../../assets/images/Achievements/Book.png" alt = "PH2"/> 								
									<figcaption>Enroll in a class</figcaption>
								</figure>
							</a>

						</li>
						<li id = "Achievement-3"> 
							<a href id = "PH3-Link"> 
								<figure>
									<img id = "PH3" src = "../../assets/images/Achievements/World.png" alt = "PH3"/>
									<figcaption>Connect Your Website</figcaption>
								</figure>
							</a>
						</li>
						<li id = "Achievement-4"> 
							<a href id = "PH4-Link"> 
								<figure>
									<img id = "PH4" src = "
									../../assets/images/Achievements/Clock.png" alt = "PH4"/> 
									<figcaption>Spend 100 Hours on Problems</figcaption>
								</figure>
							</a>
						</li>
						<li id = "Achievement-5"> 
							<a href id = "PH5-Link">
								<figure> 
									 <img id = "PH5" src = "../../assets/images/Achievements/Night.png" alt = "PH5"/>				<figcaption>Spend 50 Hours on Problems Between 00:00-08:00</figcaption>
								</figure>
							 </a>
						</li>
						<li id = "Achievement-6"> 
							<a href id = "PH6-Link"> 
								<figure> 
									<img id = "PH6" src = "../../assets/images/Achievements/Day.png" alt = "PH6"/>
									<figcaption>Spend 50 Hours on Problems Between 8:00-14:00</figcaption>
								</figure>
							</a>
						</li>
						<li id = "Achievement-7">
							<a href id = "PH7-Link"> 
								<figure>
									<img id = "PH7" src = "../../assets/images/Achievements/Eraser.png" alt = "PH7"/>
									<figcaption>Erase 10000 Lines of Code</figcaption>
								</figure>
							</a>
						</li>
						<li id = "Achievement-Show-More"> 
							<a href id = "Show-More-Link"> 
								<figure> 
									<img id = "Show-More" src = "../../assets/images/Achievements/Plus.png" alt = "Show-More"/>
									<figcaption>See More</figcaption>
								</figure>
							</a>
						</li>
					</ul></aside> 


		</main> 
		<?php
			require "../../../Footer.php";
		?>
	</div>
</body>
</html>

<?php 

	function isAdmin() {
		if(!isset($_SESSION['Username'])) {
			return false;
		}
		if($_SESSION['Username'] == (basename(__FILE__, '.php'))) {
			return true;
		}
		else {
			return false;
		}
	}
	function isLoggedIn() {
		return (isset($_SESSION['Username']));
	}
	function getProfilePicture() 
	{
		$ImageDir = "images";
		$possibleExt = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG');
		foreach ($possibleExt as $value) 
		{
			if(file_exists($ImageDir."/Profile-Picture.".$value))
			{
				return ($ImageDir."/Profile-Picture.".$value);
			}
				return ($ImageDir."/Default-Profile-Picture.png");
		}
	}
?>