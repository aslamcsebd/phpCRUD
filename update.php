<?php include('connection.php'); ?>

<?php
	$id 	=$_GET['id'];
	$name 	=$_POST['studentName'];
	$roll 	=$_POST['studentRoll'];
	$age 	=$_POST['studentAge'];
	$address =$_POST['studentAddress'];
	$contact=$_POST['studentContact'];
?>

<?php 
	$conn=connectDB();
	$sql="update child set name='$name',roll='$roll',age='$age',address='$address',contact='$contact' where id=$id";

	$result=mysqli_query($conn,$sql);

	if($result)	{

		header("Location: view.php?id=".$id);
	}else{
		echo "Not inserted";
	}	
?>
    
