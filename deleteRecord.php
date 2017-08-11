<?php
	 include 'connect.php';
	 $q = $_GET['del_id'];
	 $query = "DELETE FROM " . $mainTab . " WHERE id=" . $q;	
	 if (mysqli_query($conn,$query)) {
	 	echo "Record deleted!";
	 } else {
	 	echo "Fail deleting!";
	 }
	 
?>