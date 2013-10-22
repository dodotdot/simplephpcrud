<?php
include('config.php'); 

if (isset($_POST['submitted'])) { 

	$sql = sprintf("INSERT INTO `berita` ( `title`,`content`) VALUES ('%s','%s') ",$_POST['title'],$_POST['content']); 
	$exec = mysqli_query($con,$sql) or die(mysqli_error()); 

	if($exec){
		echo "Added row.<br />"; 
	}
} 
?>

<form method='POST'> 
<p><b>Judul:</b><br /><input type='text' name='title'/></p>
<p><b>Content:</b><br /><textarea name='content'></textarea></p>
<p><input type='submit' value='Add record' /><input type='hidden' value='1' name='submitted' /> </p>
</form> 

<p><a href='index.php'>Back To Listing</a></p>

