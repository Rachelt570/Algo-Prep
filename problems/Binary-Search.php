<!DOCTYPE html>
<html lang = "en-US">
<head>
	<?php 
		require "../Title.php";
		require "../General-Styles.php";
		require "Problem-Styles.php"; //Imports all style-sheets shared across all problem pages
	?> 
</head>
<body>
	<div id = "Outer-Wrapper">
		<?php
			require "../Header.php";
		?>
		<?php 
			require "../Nav.php";
		?>
		 <main> 
			<h1> Binary-Search </h1>
			<article id = "About"> 
				<h2> About Binary-Search </h2>
				<p> Binary-Search is a search-algorithm which, given a sorted array, returns the index of a target value. More specifically, given a sorted array A, and a target value X binary search works by checking if A[middle] equals X, if so it turns middle. Otherwise it checks if A[middle] is less than X, if so it then calls Binary search with a subarray of only elements with indexes < middle. Then it checks if A[middle] is greater than X, in which case it calls itself with a subarray of elements only greater than > middle. If Binary-Search fails to find the value, it typically returns -1.
				</p>
				<p> There are multiple methods for implementing Binary-Search. Several are listed below: </p>

				<div id = "Recursive-Method">
					<h3> Recursive method </h3>
						<p> While Recursive Binary-Search should not be utilized in production code, it is still important to understand the implentation as an exercise in thinking recursively. One should be careful as the space-complexity of recursive binary-search is O(log<sub>2</sub>n) using stack-memory which can lead to the system running out of resources for high values of n. 
						</p>
<code> <!-- White space pre -->
function Binary-Search(Array, Low, High, Target) 
{ 
  if(Low < High) 
  {
    Middle = (Low + (High - 1) / 2); //Middle element
    if(Array[Middle] == Target)
    {
      return Middle; //Found target
    }
      if(Array[Middle] > Target)
      {
        return Binary-Search(Array, Low, (Middle - 1), Target);
        //Target might be in right-half
      }
        return Binary-Search(Array, (Middle + 1), High, Target);
        //Target might be in left-half
  }
  return -1;  //Not found
}


</code>

</div>
<div id = "Iterative-Method">
<h3> Iterative Method </h3>
	<p> 
		Binary-Search can also be implemented in an Iterative manner. When Binary-Search is implemented in an Iterative manner it has a space-complexity of O(1). Otherwise it performs the same as the Recursive method, and as such is preferable should large values of n be feasible.
	</p>
<code>
function Binary-Search(Array, Low, High, Target) 
{ 
  while(Low < High) 
  {
    Middle = (Low + (High - 1) / 2); //Middle element
    if(Array[Middle] == Target)
    {
      return Middle; //Found target
    }
      if(Array[Middle] > Target)
      {
        Low = (Middle + 1);
        //Target might be in right-half
      }
        High = (Middle - 1);
        //Target might be in left-half
  }
  return -1;  //Not found
}
</code>

</div>
<div id = "Multi-Threaded Method">
<h3> Multi-Threaded Method Coming Soon </h3>
</div>
			<h3> Time-Complexity Information </h3>
			<table>
				<caption>Time-Complexity</caption>
				<tr>
					<th> Method </th>
					<th> Best </th>
					<th> Average</th>
					<th> Worst</th>
				</tr>
				<tr>
					<td> Recursive Method </td>
					<td> O(1)</td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(nlog<sub>n</sub>)</td>
				</tr>
				<tr> 
					<td> Iterative Method </td>
					<td> O(1)</td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(n<sub>2</sub>)</td>
				</tr>
				<tr> 
					<td> Multi-Threaded </td>
					<td> O(1) </td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(n<sub>2</sub>)</td>
				</tr>
			</table>
			</p>
			<section id = "External-Resources">
				<h3> Video Explanation of Binary-Search  </h3>
				<video autoplay loop muted controls>  <!-- Chrome doesn't support autoplay without mute --> 
					<source src = "../assets/videos/Quick-Sort-Explained.mp4"/>
				</video>
			</section>
			</article>
			<?php
				require "Problem-Parts.php";
				require "Settings.php";
				require "Recommendations.php";
			?>
</main> 
	<?php  require "../Footer.php";
	?>

</div> <!-- End Outer Wrapper --> 
	<?php
			require "Problem-Script.php";
	?>
</body>
</html>