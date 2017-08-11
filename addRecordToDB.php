<?php 
	include 'connect.php';

	$stmt = mysqli_prepare($conn, "INSERT INTO " . $mainTab . " (name, age, salary) VALUES (?, ?, ?)");
	$name = $_POST["name"];
	$age = $_POST["age"];
	$salary = $_POST["salary"];	
	mysqli_stmt_bind_param($stmt,'sss',$name, $age, $salary);
	if(mysqli_stmt_execute($stmt)){
		$conn->close();
		echo "Adding is successful"; 	
	}
	
	
	function clearFromTags($string) {
		$res = preg_replace("/[^a-zA-Z=_\s]/", '', $string);
		return $res;
	}
?> 