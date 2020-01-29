<!DOCTYPE html>
<html lang = "en-US">
<head>
	<?php 
		require "Title.php";
		require "General-Styles.php";
	?>
	<link rel="stylesheet" type="text/css" href="http://localhost/School-Project/styles/home.css">
</head>
<body>
	<div id = "Outer-Wrapper">
		<?php 
			require "Header.php";
			require "Nav.php";
		?>
		<main> 
			<h1> Algo-Prep </h1>
			<article id = "About"> 
				<section>
					<h2> Why Algo-Prep? </h2>
					<p> Note: Video on YouTube has audio problems. This is not a
					site bug </p>
	
					<iframe width="560" height="315" src="https://www.youtube.com/embed/7LJQpePcu68" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
					
				</section>
				<p> 
					<ul id = "Why-Algo-Prep"> 
						<li id = "Hand-Picked">
							<h2> Hand picked questions </h2>
							<p> Our questions are picked specifically to cover a broad
								range of knowledge, in order to maximize your chances at acing 
								that coding interview.
							</p>
						</li>
						<li id = "Hours-Of-Video">
						 	<h2> Hours of Video Explanations </h2>
						 	<p> Presenting information in an easy to digest format is essential for us, as such we elected to provide video explainations for all our algorithims, as well as video series on data-structures and several other topics. With hours of new video content weekly 
						 	you'll never run dry of content.
						 	</p>
						</li>
						<li id = "Quizzes-And-Tests"> 
						 	<h2> Quizzes and tests </h2>
						 	<p> Doing is the best way to learn anything. However, breaking large 
						 		problems up can help one to retain the material. For this reason
						 		we utilize flash-card style quizzes and focused tests to help ensure
						 	our users get the most of their time </p>
						</li>
						<li id = "Data-Structures">
						 	<h2> Data Structures Explained </h2>
						 	<p> Data Structures are often a weak point for self-taught programs. That
						 		is why we have dedicated so much to ensuring that the material is in depth, 
						 		concise, and presented in an approachable manner.</p>
						 </li>
					 	<li id = "Multi-Language">
						 	<h2> Code in a Language That is Right for You </h2>
						 	<p> We all have our favourite language, and language specifics aren't what new programmers
						 	should spend their time worrying about. Instead, our multi-language support ensures that you can use a familiar language so that there is no unnecessary distractions.</p>
						</li>	
						<li id = "Time-Space">
						 	<h2> Time-Space Complexity Analysis </h2>
						 	<p> Time-Space Complexity Analysis can sometimes seem daunting to new programmers. For this reason, we not only provide Time-Space Complexity for all of our Algorithims, but also walk you through exactly how to derive the Time-Space Complexity. </p>
						</li>
						<li id = "Proofs">
						 	<h2> Proofs </h2>
						 	<p> Using Mathematical Proofs to demonstrate that your algorithims are correct is extremely important. It not only ensures that your solution is complete, but also deepens your understanding of algorithms. As such, we provide mathematical proofs for all of our algorithims. </p>
						</li> 
						<li id = "Get-Started">
							<h2> Get Started </h2>
							<p> What are you waiting for? Our services are free-of-charge. So go get out there and ensure you ace your next interview.	
							</p>
						</li>
						<li id = "Support-Us">
							<h2> Donate </h2>
							<p> As we don't charge for our services we are 100% funded by your generous donations. If you can afford to, we'd really appreciate support.
							</p>
						</li>
					 </ul>
				</p>
			</article>
		</main> 
		<?php
			require "Footer.php";
		?>
	</div>
</body>
</html>