<?php 
	include 'connect.php';
	
	$stmt = mysqli_prepare($conn, "UPDATE " . $mainTab . " SET name = ?, age = ?, salary = ? WHERE id = ?");
	$id = $_POST["id"];
	$name = $_POST["name"];
	$age = $_POST["age"];
	$salary = $_POST["salary"];	
	mysqli_stmt_bind_param($stmt,'ssss',$name, $age, $salary, $id);
	if(mysqli_stmt_execute($stmt)){
		$conn->close();
		echo "Editing is successful"; 	
	}
	
	
	function clearFromTags($string) {
		$res = preg_replace("/[^a-zA-Z=_\s]/", '', $string);
		return $res;
	}
?> 