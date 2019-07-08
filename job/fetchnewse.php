<?php
$connect = mysqli_connect("localhost", "root", "", "job");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM job_post 
	WHERE jobtitle LIKE '%".$search."%'
	OR minimumsalary LIKE '%".$search."%' 
	OR maximumsalary LIKE '%".$search."%' 
	OR experiencerequired LIKE '%".$search."%' 
	OR qualificationrequired LIKE '%".$search."%'
	OR createat LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM job_post ORDER BY id_jobpost";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
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
	while($row = mysqli_fetch_array($result))
	{
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
}
else
{
	echo 'Data Not Found';
}
?>