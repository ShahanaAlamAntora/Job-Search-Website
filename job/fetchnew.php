<?php
$connect=mysqli_connect("localhost","root","","job");

$output='';  
$sql="SELECT * FROM job_post WHERE jobtitle LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result) > 0)
{
	$output .= '<h4 align="center">Search Result</h4>';
	$output .= '<div class="table-responsive">
	                 <table class="table table bordered">
					     <tr>
						     <th>Job Title</th>
							 <th>Job Description</th>
							 <th>Minimum Salary</th>
							 <th>Maximum Salary</th>
							 <th>Experience Required</th>
							 <th>Qualification Required</th>
							 <th>Job posted DATE</th>
						</tr>';
						
	while($row = mysqli_fetch_array($result)){
		$output .= '
		     <tr>
			     <td> '.$row["jobtitle"].'</td>
				  <td> '.$row["description"].'</td>
				   <td> '.$row["minimumsalary"].'</td>
				    <td> '.$row["maximumsalary"].'</td>
					 <td> '.$row["experiencerequired"].'</td>
					  <td> '.$row["qualificationrequired"].'</td>
					   <td> '.$row["createat"].'</td>
			 </tr>
			';
			
	}
	echo $output;						 
	
	
}else
{
	echo 'Data Not Found';
}

?>