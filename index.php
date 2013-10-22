<?php
include('config.php'); 
?>

<a href=new.php>Buat Berita Baru</a> 

<table border="1" >
<thead>
<tr>
<th><b>Id</b></th>
<th><b>Judul</b></th>
<th><b>Action</b></th>
</tr>
</thead>

<?php

$result = mysqli_query($con, "SELECT * FROM `berita`"); 
while($row = mysqli_fetch_array($result)){ 

	echo "<tbody><tr>";  
	echo "<td valign='top'>" . $row['id']. "</td>";  
	echo "<td valign='top'>" . $row['title']. "</td>";
	echo "<td valign='top'><a href=edit.php?id={$row['id']}>Edit</a> | <a href=read.php?id={$row['id']}>Read</a> |  <a href=delete.php?id={$row['id']}>Delete</a></td> "; 
	echo "</tr></tbody>"; 

} 

?>

</table> 

