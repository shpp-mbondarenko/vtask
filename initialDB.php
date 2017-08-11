<?php
	include 'connect.php';
	$dbSelected = mysqli_select_db($conn, $dbname);
	if(!$dbSelected){
		// If we couldn't, then it either doesn't exist, or we can't see it.
			$sql = 'CREATE DATABASE ' . $dbname;
			if ($conn->query($sql) === TRUE) {
		    echo "Database created successfully<br>";
		    $conn = new mysqli($servername, $username, $password, $dbname);
		    if ($conn->connect_error) {
				die("Connection failed to db: " . $conn->connect_error);
			} 		   
		    $sql = 'CREATE TABLE ' . $mainTab . ' (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
					name VARCHAR(30) NOT NULL,					
					age INTEGER(3) NOT NULL,
					salary INTEGER(10) NOT NULL					
					)';
			if ($conn->query($sql) === TRUE) {
				echo "Table " . $mainTab . " created successfully3<br>";
			} else {
				echo "Error creating table: " . $conn->error;
			}
		} else {
		    echo "Error creating database: " . $conn->error;
		}
	}
	$conn->close();
?>