<!DOCTYPE html>

<html>
<head>
    <title>Table with Database</title>
	
	
	
	<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
	
	
	
	
	
	
	
	
	
	
	
	
</head>

<body>
   <table> 
	<tr>
	     <th>Job ID</th>
		 
	    <th>Job Name</th>
		
		<th>Job Description</th>
		
		<th>Minimum Salary</th>
		
		<th>Maximum Salary</th>
		
		<th>Experience Required</th>
		
		<th>Qualification Required</th>
		
		<th>Job Post Created Date</th>
		
	</tr>
	
	
	
	    <?php
		
		    $conn = mysqli_connect( "localhost" , "root" , "" , "job");
		     
			 if($conn-> connect_error){
				 
				 die("Connection Failed :" . $conn-> connect_error);
				 
				 
			 }
		
		
		$sql = "SELECT * from job_post";
		
		$result = $conn-> query ($sql);
		
		
		
		if($result -> num_rows >0){
			
			
			while($row = $result->fetch_assoc()){
				
				echo "<tr><td>" . $row["id_jobpost"]."</td><td>" .
				                  $row["jobtitle"]."</td><td>".
				                  $row["description"]."</td><td>" .
				                  $row["minimumsalary"]."</td><td>".
				                  $row["maximumsalary"]."</td><td>".
			                      $row["experiencerequired"]."</td><td>".
				                  $row["qualificationrequired"]."</td><td>" .
			                      $row["createat"]."</td><tr>";
				
				
			}
			
			
			echo "</table>";
			
			
		}
		
		else{
			
			echo "0 result";
			
			
			
		}
		
		$conn->close();
		
		?>
	
	
	
	
	
  </table>
</body>

</html>
