<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php include 'initialDB.php';?>		
	</head>
	<body onload="showAllRecords()">
		<div class = "blockMain">			
			<div class="addRecord" id="addRecord">
				<form autocomplete="on">
					<p>Add new record:</p>
					Name: <input type="text" id="name" name="name">
					Age: <input type="text" id="age" name="age">
					Salary: <input type="text" id="salary" name="salary">
					<button onclick="addRecord()" type="button">Add</button><br>
					<div id="txtHint"></div> 					
				</form>
			</div>
		</div>	
		<div id="table" class = "blockMain"></div>
		<div id="searchBySalary" class = "blockMain">
			<form>
				Search by salary: <input type="text" id="searchSalary" name="searchSalary" >				
				<button onclick="findRecordsBySalary()" type="button">Search</button><br>					
			</form>
		</div>
		<div id="editBlock" class = "blockMain hidden">
			<form>
				<p>Edit record:</p>
				ID: <input type="text" id="editId" name="editId" readonly>
				Name: <input type="text" id="editName" name="editName">
				Age: <input type="text" id="editAge" name="editAge">
				Salary: <input type="text" id="editSalary" name="editSalary">
				<button onclick="editRecord()" type="button">Save</button><br>
				<div id="txtEditHint"></div> 					
			</form>
		</div> 					

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="scripts.js"></script>		
	</body>
</html>