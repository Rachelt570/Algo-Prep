<!DOCTYPE html>
<html lang = "en-US">
<head>
	<?php 
		require "../../../Title.php";
		require "../../../General-Styles.php";
	?>

	<link rel="stylesheet" type="text/css" href="../../Styles/Main-Forum.css">

</head>
<body>
	<div id = "Outer-Wrapper">
		<?php 
			require "../../../Header.php";
			require "../../../Nav.php";
		?>
		<main> 
			<h1> Terra570 </h1>
			<article id = "About"> 
				<ul id = "ForumUL"> 
					<li> 
						<nav id = "Forum-Nav"> 
							<ul id = "Forum-NavUL">
								<li> <a href = "#"> Forum </a> &rarr;  </li>
								<li> <a href = "#"> Introductions </a> &rarr;  </li>
								<li> <a href = "#"> Terra570 </a> </li>
							</ul>	

						</nav> 
				</li>
					<li> 
							<ul id = "Terra570-IntroductionUL"> 
								<li class = "Forum-Post"> 
									<span class = "User-Info">
										<figure class = "User-Figure">
											<a href = "http://localhost/School-Project/users/accounts/51/Terra570.php"> 
												<img src = "http://localhost/School-Project/users/accounts/51/images/Profile-Picture.jpg" class = "Profile-Picture">

												</img>
												<figcaption> 
													Terra570
												</figcaption>
											</a> 
											<p class = "Forum-Role Role-Administrator"> Site Administrator </p>
										</figure>
										<p class = "Signature"> Just a developer trying to improve and make something cool </p>
									</span>
									<span class = "Post-Content">
										<p> 
											Hello everyone, I'm Terra. I am the site-founder and lead-administrator. This is both my first post on the forums and the first post of the forums in general. I am a self-taught software engineer who wants to make the process of becoming a self-taught software engineer easier for others. This is why I founded and 
											continue to develop this site.

										</p>
									</span>
								 </li>	
								<li id = "Add-Post"> 
									<span id = "Add-Post-Info"> 
										<p> The Administrator has locked this page. </p>

									</span>
									<form id = "Add-Post-Form">
										<textarea id = "Add-Post-Content"> </textarea> 
										<input type = "submit" name = "Terra570-Introduction-Submit" value = "Submit" class = "Disabled"> 


									</form>

								</li>
							</ul>
					</li>
				</ul>
			</article>
		</main> 
		<?php
			require "../../../Footer.php";
		?>
	</div>
</body>
</html>