<?php

include('config.php');
 
$id = (int) $_GET['id']; 
$query = sprintf("DELETE FROM `berita` WHERE `id` = '%s' ", $id);
$exec = mysqli_query($con, $query); 

if($exec){
	echo "Row id ".$id ." is deleted.<br /> ";
}else{
	"Nothing deleted.<br /> ";
}
 
?> 

<a href='index.php'>Back To Listing</a>
