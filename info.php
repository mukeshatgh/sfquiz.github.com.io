
<?php
$con=mysqli_connect("localhost","root","","") or die("Error:");
mysqli_select_db('sfquiz',$con);
if(mysqli_select_db){
	echo "connected";
	$qry="SELECT * FROM qbank";
	mysqli_query($qry,$con);
	echo $row['question'];
}
else
{
	echo "Checkit please!";
}
?>
