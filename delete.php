
<?php 
	include('connection.php');

  $id= $_GET['id']; /*come hear from index.php age*/

	$conn=connectDB();
	$sql="delete from child where id=$id";
	$result=mysqli_query($conn,$sql);
	
	if($result){
		header("Location: index.php");
	}


  //$studentView=mysqli_fetch_assoc($result);
  
  /* N:B: echo $studentView['name'];*/
?>

