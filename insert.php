<?php 
	include('connection.php');	 
	$conn=connectDB();
	$sql="select*from child";
	$result=mysqli_query($conn,$sql);	
?>

<!DOCTYPE html>
<html>
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<title>Bazar</title>
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/style.css">
   </head>
  	<body>
			<br><br><br><br>

	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-3" >
	  				<a href="index.php" class="btn btn-info">Student List</a>
	  			</div>

	  			<div class="col-md-8">
	  				<h2>Student list</h2>
	  				<hr>
	  		  
	        <form action="store.php" method="POST">

	          <div class="form-group">
	            <label for="name">Name: </label>
	            <input type="text" class="form-control" name="studentName" placeholder="Student Name" required>            
	          </div>

	          <div class="form-group">
	            <label for="Roll">Roll: </label>
	            <input type="text" class="form-control" name="studentRoll" placeholder="Roll">            
	          </div>

	          <div class="form-group">
	            <label for="Age">Age: </label>
	            <input type="text" class="form-control" name="studentAge" placeholder="Age">            
	          </div>

	          <div class="form-group">
	            <label for="Adress">Address: </label>
	            <input type="text" class="form-control" name="studentAddress" placeholder="Address">            
	          </div>

	          <div class="form-group">
	            <label for="Contack">Contact: </label>
	            <input type="text" class="form-control" name="studentContact" placeholder="Contact">            
	          </div>          
	          
	          <button type="submit" class="btn btn-primary">Submit</button>
	      </form>
	  			</div>
	  		</div>
	  	</div>

  	</body>
</html>