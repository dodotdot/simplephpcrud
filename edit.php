<?php 
include('config.php');
 
if (isset($_GET['id']) ) { 
	$id = (int) $_GET['id'];
	if (isset($_POST['submitted'])) { 

		$sql = sprintf("UPDATE `berita` SET  `title` =  '%s', `content` = '%s' WHERE `id` = '%s' ",$_POST['title'],$_POST['content'],$id); 
		$exec = mysqli_query($con, $sql) or die(mysqli_error()); 
		if($exec){
			echo "Edited row.<br />";
		}else{
			echo "Nothing changed. <br />"; 
		}
		
	}
 
$row = mysqli_fetch_array (mysqli_query($con,"SELECT * FROM `berita` WHERE `id` = '$id' ")); 

?>

<form action='' method='POST'> 
<p><b>Title:</b><br /><input type='text' name='title' value='<?php echo stripslashes($row['title']); ?>' /> 
<p><b>Content:</b><br /><textarea name='content'><?php echo stripslashes($row['content']); ?> </textarea> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<?php } ?> 

<p><a href='index.php'>Back To Listing</a></p>
