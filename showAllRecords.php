<?php
	 include 'connect.php';
	 $query = "SELECT * FROM " . $mainTab;
	 $result = mysqli_query($conn,$query);
	 echo '<table>
			  <tr>
			    <th>Id</th>
			    <th>Name</th>
			    <th>Age</th>
			    <th>Salary</th>
			    <th>Edit record</th>
			    <th>Deleting</th>
			    <th><Button onclick="deleteWithCheckBoxes()">Delete Several</Button></th>
			  </tr>';
	 while ($output = mysqli_fetch_assoc($result)) {
	 	echo '<tr>
			    <td>'. $output['id'] .'</td>
			    <td>'. $output['name'] .'</td>
			    <td>'. $output['age'] .'</td>
			    <td>'. $output['salary'] .'</td>
			    <td onclick="fillEditForm(this)">Edit</td>
			    <td><a onclick="deleteThisRecord('.$output['id'].')">Delete</a></td>
			    <td><input type="checkbox" class="delCb" myid="'.$output['id'].'"></td>		    
			  </tr>';	 	
	 }
	 echo "</table>";
?>