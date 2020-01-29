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
			require "../Header.php"
		?>
		<?php 
			require "../Nav.php"
		?>
		 <main> 
			<h1> Quick Sort </h1>
			<article id = "About"> 
				<h2> About Quicksort </h2>
				<p> Quicksort is a sorting algorithim which works by subdividing the array repeatedly through a process known as pivoting. More specifically, given an array X, quicksort assigns an element E as a pivot. Then, the index of element E, X[E], is swapped with elements contained in X, such that all elements in X < E are stored in unique indexes < X[E-1] and all elements X >= E are stored in unique indexes >= X[E+1]. Quicksort is then called again twice—Once using the subarray defined by all elements with indexes <= X[E-1] and once with all elements with indexes >= X[E+1]. There are some implementations of Quicksort that do not rely on recursion but the same general principle of pivoting and subdividing still holds. 
				</p>
				<p> There is, of course, the question as to how Quicksort places the pivot and how it selects the pivot. There are several options demonstrated as follows:

<div id = "Lomuto-Method">
<h3> Lomuto's Method </h3>
<p> Lomuto's method is a straight-forward and easy to understand technique. However, it's worst-case
		performance is when lists are already sorted, or sorted in reverse order. As already sorted lists 
		is a rather common input this is extremely bad. Additionally, when compared to Hoare's Method this 
		algorithim requires significantly more memory swaps on average and is as such less efficient.
</p>
<code> <!-- White space pre -->
function partition(Array, Low, High) 
{ 
  Pivot = Array[High];
  Outer = Low;
  for(Inner = Low; Inner < High; Inner++) 
  {
    if(Array[Inner] < Pivot) 
    {
     swap(Array[Outer], Array[Inner]);
     Outer++;
    }
  }
  Swap (Array[Outer], Array[High]);
  return Outer;
}
</code>

</div>
<div id = "Hoare-Method">
<h3> Hoare's Method </h3>
	<p> 
		Hoare's Method is the original quick-sort partition methodology. It was developed by Tony Hoare in 1959. 
		Because the Pivot chosen is Array[(High + Low) / 2] in general the worst-case performance on sorted lists
		does not occur as it does in Lomuto's method. However, whenever the pivot is the first or last element in 
		the list, the algorithim does experience worst-case behavior on sorted lists.   
	</p>
<code>
function partition(Array, Low, High) 
{ 
  Pivot = Array[(High + Low) / 2];
  Outer = Low - 1;
  Inner = high + 1;
  while(NotDone) {
  	do {
      Outer++;
    } (while Array[Outer] < Pivot)
    do {
      Inner--;
    } (while Array[Inner] > Pivot)
    if(Inner >= Outer){
      return Outer;
    }
  Swap(Array[Inner], Array[Outer]);
}
</code>

</div>
<div id = "Three-Way-Method">
<h3> Three Way Partition Coming Soon </h3>
</div>
			<h3> Time-Complexity Information </h3>
			<table>
				<caption> Time-Complexity</caption>
				<tr>
					<th> Method </th>
					<th> Best </th>
					<th> Average</th>
					<th> Worst</th>
				</tr>
				<tr>
					<td> Lomuto's Method </td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(n<sup>2</sup>)</td>
				</tr>
				<tr> 
					<td> Hoare's Method </td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(n<sup>2</sup>)</td>
				</tr>
				<tr> 
					<td> 3 Way Method </td>
					<td> O(n) </td>
					<td> O(nlog<sub>n</sub>)</td>
					<td> O(n<sup>2</sup>)</td>
				</tr>
			</table>
			</p>
			<section id = "External-Resources">
				<h3> Video Explanation of Quick-Sort  </h3>
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
		<?php 
		require "../Footer.php";
		?>

	</div>

	<?php
			require "Problem-Script.php";
	?>
	</body>
</html>