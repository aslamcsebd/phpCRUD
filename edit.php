
<?php 
	include('connection.php');

  $id= $_GET['id']; /*come hear from index.php age*/

	$conn=connectDB();
	$sql="select*from child where id=$id";
	$result=mysqli_query($conn,$sql);	

  	$studentView=mysqli_fetch_assoc($result);  
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
  				<h2>Edit Student</h2>
  				<hr>
  		  
        <form action="update.php?id=<?php echo $id ?>" method="POST">

          <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" name="studentName" placeholder="Student Name"  value="<?php echo $studentView['name']; ?>" >            
          </div>

          <div class="form-group">
            <label for="Roll">Roll: </label>
            <input type="text" class="form-control" name="studentRoll" placeholder="Roll" value="<?php echo $studentView['roll']; ?>">            
          </div>

          <div class="form-group">
            <label for="Age">Age: </label>
            <input type="text" class="form-control" name="studentAge" placeholder="Age" value="<?php echo $studentView['age']; ?>">            
          </div>

          <div class="form-group">
            <label for="Adress">Address: </label>
            <input type="text" class="form-control" name="studentAddress" placeholder="Address" value="<?php echo $studentView['address']; ?>">            
          </div>

          <div class="form-group">
            <label for="Contack">Contact: </label>
            <input type="text" class="form-control" name="studentContact" placeholder="Contact" value="<?php echo $studentView['contact']; ?>">            
          </div>          
          
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  			</div>
  		</div>
  	</div>




  </body>
 </html>


