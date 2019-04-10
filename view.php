<?php
include 'dbcon.php';
$q="SELECT * FROM qbank";
	
		?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Question Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	a{
		
	}
</style>
<body oncontextmenu="return false">

	<h3 class="container" align="center">View Question Bank </h3>
		
<div>
	<table class="table" border="1">
		<p><a href="add.php"><button align="right" class="btn btn-success">Add New</button></a></p>
		<?php 
			$run=mysqli_query($con,$q);
		echo "<tr>
			<th>Question</th>
			<th>Choice 1</th>
			<th>Choice 2</th>
			<th>Choice 3</th>
			<th>Choice 4</th>
			<th>Correct Answer</th>";
		echo "</tr>";
			
		echo "<tr>";
while($row=mysqli_fetch_assoc($run)){
	echo "<tr>";
	echo "<td>";
	echo $row['question'];
	echo "</td>";
	echo "<td>";
	echo $row['ch1'];
	echo "</td>";
	echo "<td>";
	echo $row['ch2'];
	echo "</td>";
	echo "<td>";
	echo $row['ch3'];
	echo "</td>";
	echo "<td>";
	echo $row['ch4'];
	echo "</td>";
	echo "<td>";
	echo $row['correct'];
	echo "</td>";
	echo "</tr>";
			}
	
			 ?>


					
	</table>
</div>


	</body>
	</html>