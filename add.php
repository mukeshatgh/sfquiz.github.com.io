<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
	$question=$_POST['question'];
	$ch1=$_POST['ch1'];
	$ch2=$_POST['ch2'];
	$ch3=$_POST['ch3'];
	$ch4=$_POST['ch4'];
	$correct=$_POST['correct'];
	$class=$_POST['class'];
//$query="INSERT into 'qbank'('question','ch1','ch2','ch3','ch4','correct','class') VALUES('$question','$ch1','$ch2','$ch3','$ch4','$correct','$class')";
$q="INSERT INTO `qbank`(`question`, `ch1`, `ch2`, `ch3`, `ch4`, `correct`, `class`) VALUES ('$question','$ch1','$ch2','$ch3','$ch4','$correct','$class')";

$run=mysqli_query($con,$q);

if($run){
	echo "<script>alert('Data inserted successfully');</script>";
	//echo "<p><a href='view.php'><button align='right' class='btn btn-success'>Add New</button></a></p>";
		}
else{
		echo "<script>alert('Error!');</script>";
    //echo "error";
	
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Question...</h2>
  <form  method="post">
    <div class="form-group">
      <label for="question">Question</label>
      <input type="text" class="form-control" id="question" placeholder="Enter Question" name="question" required="required">
    </div>
    <div class="form-group">
      <label for="choice1">Choice1</label>
      <input type="text" class="form-control" id="Choice1" placeholder="Enter Choice1" name="ch1" required="required">
    </div>
    <div class="form-group">
      <label for="choice2">Choice2</label>
      <input type="text" class="form-control" id="Choice2" placeholder="Enter Choice2" name="ch2" required="required">
    </div>
    <div class="form-group">
      <label for="choice3">Choice3</label>
      <input type="text" class="form-control" id="Choice3" placeholder="Enter Choice3" name="ch3" required="required">
    </div>
    <div class="form-group">
      <label for="choice4">Choice4</label>
      <input type="text" class="form-control" id="Choice4" placeholder="Enter Choice4" name="ch4" required="required">
    </div>
    <div class="form-group">
      <label for="correct">Correct</label>
      <input type="text" class="form-control" id="correct" placeholder="Enter Correct answer" name="correct" required="required">
    </div>
    <div class="form-group">
      <label for="class">Choice1</label>
      <input type="text" class="form-control" id="class" placeholder="Enter class" name="class" required="required">
    </div>
    
    <button type="submit" class="btn btn-success" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
