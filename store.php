<?php include('connection.php'); ?>

<?php
	$name 	=$_POST['studentName'];
	$roll 	=$_POST['studentRoll'];
	$age 		=$_POST['studentAge'];
	$address =$_POST['studentAddress'];
	$contact =$_POST['studentContact'];
?>

<?php 
	$conn=connectDB();
	$sql="insert into child values(null,'$name','$roll','$age','$address','$contact')";
	$result=mysqli_query($conn,$sql);

	if($result)	{
		echo "Data inserted";
		header("Location: index.php");
	}else{
		echo "Not inserted";
	}	
?>