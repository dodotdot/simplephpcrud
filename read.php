<?php 
include('config.php');
 
if (isset($_GET['id']) ) { 
	$id = (int) $_GET['id'];
	$row = mysqli_fetch_array (mysqli_query($con,"SELECT * FROM `berita` WHERE `id` = '$id' ")); 

	echo "<p>Judul : ".$row['title']."</p>";
	echo "<p>Content : ".$row['content']."</p>";
	echo "<p><a href='index.php'>Back To Listing</a></p>";

} 
?> 

