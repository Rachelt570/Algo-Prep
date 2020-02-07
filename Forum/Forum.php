<!DOCTYPE html>
<html lang = "en-US">
<head>
	<?php 
		require "../Title.php";
		require "../General-Styles.php";
	?>

	<link rel="stylesheet" type="text/css" href="Styles/Main-Forum.css">

</head>
<body>
	<div id = "Outer-Wrapper">
		<?php 
			require "../Header.php";
			require "../Nav.php";
		?>
		<main> 
			<h1> Algo-Prep Forums </h1>
			<article id = "About"> 
				<ul id = "ForumUL"> 
					<li> 
							<ul id = "Forum-New-UsersUL"> 
								<li id = "Forum-New-Users-Header"> 
									<h2> New Users Start Here </h2>
								</li>
								<li id = "Forum-New-Users-Rules">
									<a href = "rules/Rules.php"> Rules </a>
								</li>
								<li id = "Forum-New-Users-Introductions">
									<ul class = "Folder" id = "Forum-New-Users-IntroductionsUL">
										<li> 
									 		<a href = "introductions/new-page.php"> Introduce Yourself </a>
										 </li>
										 <li>
										 	<ul class = "Folder" id = "Users-IntroductionsUL">
										 		<li>
									 				<a href = "introductions/users/Terra570.php"> Terra570 </a>
												 </li>
										 	</ul>
										 </li>
									
									 	

									</ul>
									</li>
							</ul>
					</li>
					<li>
						<ul id = "Forum-ProblemsUL"> 
							<li id = "Forum-Problems-Header">
								<h2> Problems </h2>
							</li>
							<li> 
								<a href = "problems/read-me.php"> Read Me </a>
							</li>
							</ul>
					</li>
					<li> 
							<ul id = "Forum-JobsUL">
								<li> 
									<h2> Jobs </h2> 
								</li>
								<li>
									 <a href = "Jobs/Readme.php"> Read Me </a> 
								</li>
								<li> 
									<ul class = "Folder" id = "Jobs-Postings">
										<li> 
											<a href = "Jobs/View-Postings.php"> View Postings </a> 
										</li>
										<li>
											<a href = "Jobs/View-Posting/New-Page.php"> Add Posting </a>
										</li>
									</ul>
									<ul class = "Folder" id = "Job-Seeking"> 
										<li>
											<a href = "Jobs/View-Seeking.php"> View View-Seeking </a>
										</li>
										<li> 
											<a href = "Jobs/View-Seeking/New-Page.php"> Add Seeking </a>
										</li>
									</ul>
								</li>
						
							</ul>
					</li>
					<li> 
							<ul id = "Forum-General"> 
								<li> <h2> General </h2> </li>
								<li> <a href = "General/Readme.php"> Read Me </a> </li>
							</ul>
					</li>
					<li>
							<ul id = "Forum-MetaUL">
								<li> <h2> Meta </h2> </li>
								<li> <a href = "Meta/Readme.php"> Read Me </a> </li>
								<li> <a href = "Meta/Suggestions.php"> Site Suggestions </a> </li>
							 </ul>
					</li>
					<li> 
						<ul id = "Forum-ShowcaseUL"> 
							<li> <h2> Showcase </h2> </li>
							<li> <a href = "Showcase/Readme.php"> Read Me </a> </li>
						</ul>
					</li>
					<li>
						<ul id = "Forum-AchievementsUL">
							<li> <h2> Achievements </h2> </li>
							<li> <a href = "Achievements/Readme.php"> Read Me </a> </li>
						</ul>
					</li>
					<li> 
						<ul id = "Forum-ProjectsUL"> 
								<li> <h2> Projects </h2> </li> 
								<li> <a href = "Projects/Readme.php">
									Read Me </a> </li>
								<li> <a href = "Projects/Submit-Project.php"> Submit Project </a> </li>
								<li> 
									<ul class = "Folder" id = "Projects-UL"> 
										<li> 
											<a href = "#"> Placeholder1 </a> 
										</li>
										<li> 
											<a href = "#"> Placeholder2 </a> 
										</li>
										<li> 
											<a href = "#"> Placeholder3 </a> 
										</li>
										<li> 
											<a href = "#"> Placeholder4 </a> 
										</li>
									</ul> 
								</li>
						</ul>
					</li>
			</article>
		</main> 
		<?php
			require "../Footer.php";
		?>
	</div>
</body>
</html>