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
			<h1> Reverse Linked-List </h1>
			<article id = "About"> 
				<h2> Reversing a Linked-List  </h2>
				<p> 
					Given a singly-linked-list these algorithims will reverse the order of the elements of this list. For example: <br>
					(1) &rarr; (6) &rarr; (5) &rarr; (NULL) <br>
					will output <br>
					(5) &rarr; (6)&rarr;(1) &rarr; (NULL) <br> 
				</p>
				<p> 
					There are several different approaches to solving this problem. Three of the
					more common methods are listed below.
				</p>
<div id = "Recursive-Method">
<h3> Recursive Method</h3>
<p> 
	One intuitive solution is to approach the problem recursively. This problem is exceptionally easy to solve recursively. However, one should take care as will all recursive solutions as each function call will use more stack memory with a space-complexity of O(n). 
</p>
<code> <!-- White space pre -->
function reverse(Node * head) 
{ 
  if(head == NULL || head-> getNext() == NULL)
  {
    return head;
  }
  node * rest-of-list = reverse(head->next);
  head->getNext()->getNext() = head;
  head->getNext() = NULL;
  return rest;
}
</code>

</div>
<div id = "Iterative-Method">
<h3> Iterative Method </h3>
	<p> 
		The Iterative method is somewhat more difficult to conceptualize, however does not risk overflowing stack-memory for high values of n. It also, unfortunately, has two lines residing outside of the while loop which is clearly poor form.
	</p>
<code>
function reverse(Node * head) 
{ 
  Node * Current = Head;
  Node * Previous = NULL;
  Node * Next = NULL;
  while (current != NULL) { 
    Next = Current -> getNext();
    Current->setNext(Previous);
    Previous = Current;
    Current = Next;
  }
  head = Previous;
  return head;
}
</code>

</div>
<div id = "Two-Pointer-Method">
<h3> Two-Pointer-Method </h3>
	<p> 
		Our personal favorite approach is the Two-Pointer-Method. Instead of passing a pointer to the Node's head, a pointer to the pointer of the node's head is passed, this is referred to as the head's handle. Because we are using a handle, we are able to remove all of code after the while loop, this is clearly better form.
	</p>
<code>
function reverse(Node ** headHandle) 
{ 
  Node * Current = *headHandle;
  Node * Next = NULL;
  while (Current->getNext() != NULL)
  {
    next = Current -> getNext();
    Current -> setNext(Next->getNext());
    Next -> setNext(*headHandle);
    *headHandle = Next;
  }
}
</code>
</div>
		<h3> Time-Complexity Information </h3>
			<table>
				<tr>
					<caption> Time-Complexity Information </caption>
					<th> Method </th>
					<th> Best Case Time Complexity </th>
					<th> Average Case Time Complexity </th>
					<th> Worst Case Time Complexity </th>
				</tr>
				<tr>
					<td> Recursive Method </td>
					<td> O(n)</td>
					<td> O(n)</td>
					<td> O(n)</td>
				</tr>
				<tr> 
					<td> Iterative Method </td>
					<td> O(n)</td>
					<td> O(n)</td>
					<td> O(n)</td>
				</tr>
				<tr> 
					<td> Two-Pointer Method </td>
					<td> O(n) </td>
					<td> O(n)</td>
					<td> O(n)</td>
				</tr>
			</table>
			</p>
			<section id = "External-Resources">
				<h3> Video Explanation of Reversing-Linked-List </h3>
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