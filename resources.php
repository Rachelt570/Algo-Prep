<!DOCTYPE html>
<html lang = "en-US">
<head>
	<?php 
		require "Title.php";
		require "General-Styles.php";
	?>
	<title>SITE_TITLE</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/School-Project/styles/main.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/School-Project/styles/resources.css">
</head>
<body>
	<div id = "Outer-Wrapper">
		<?php 
			require "Header.php";
			require "Nav.php";
		?>
		<main> 
			<h1> Resources </h1>
			<article id = "About"> 
				<section>
					<h2> External Resources </h2>
					<ul> 
						<li> <h3> General Purpose </h3> </li>
						<li>
						<a href = "https://github.com/ForrestKnight/open-source-cs" target = "_blank"> Open-Source Computer Science Degree </a>
						</li>
						<li> <a href = "https://udemy.com" target = "_blank"> Udemy </a> </li>
						<li> <a href = "https://www.amazon.ca/Pragmatic-Programmer-journey-mastery-Anniversary/dp/0135957052/ref=sr_1_1?gclid=CjwKCAiA1L_xBRA2EiwAgcLKA-lO8IJJlmK4q5Qy3gTAqe8_fBLhbxqIgurIiCWZ-T1xyEtUFVGHDRoC_WQQAvD_BwE&hvadid=231002869086&hvdev=c&hvlocphy=9001313&hvnetw=g&hvpos=1t1&hvqmt=e&hvrand=14695087702305552577&hvtargid=kwd-298735734907&hydadcr=23314_10308567&keywords=pragmatic+programmer&qid=1580243299&sr=8-1" target = "_blank"> The Pragmatic Programmer </a> </li>

						<li> <h3> Web Development </h3> </li>
						<li> <a href = "https://developer.mozilla.org/en-US/" target = "_blank"> Mozilla Developer </a> </li>
						<li> <a href = "https://www.w3schools.com/" target = "_blank"> W3Schools.com </a> </li>

						<li> <h3> Community Resources </h3> </li>
						<li> <a href = "https://stackoverflow.com/" target = "_blank"> Stack-Overflow </a> </li>
						<li> <a href = "https://github.com" target = "_blank"> Github </a> </li>
						
					</ul>
				</section>
				
			</article>
		</main> 
		<?php
			require "Footer.php";
		?>
	</div>
</body>
</html>

