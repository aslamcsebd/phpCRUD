
<?php 
	include('connection.php');
  	$id= $_GET['id']; /*come hear from index.php age*/

	$conn=connectDB();
	$sql="select*from child where id=$id";
	$result=mysqli_query($conn,$sql);	

  $studentView=mysqli_fetch_assoc($result);
  
  /* N:B: echo $studentView['name'];*/
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

	  			<div class="col-md-6">
	  				<h2>Student Information</h2>
	  				<hr>
	  				<table class="table">
		  				<tr>
		               <th width="100" class="text-right">Name : </th>     
		               <td class="text-left"> <?= $studentView['name']; ?></td>     
		            </tr>
		            <tr>
		               <th width="100" class="text-right">Roll : </th> 
		               <td class="text-left"> <?= $studentView['roll']; ?> </td>     
		            </tr>
		            <tr>
		               <th width="100" class="text-right">Age : </th>    
		               <td class="text-left"> <?= $studentView['age']; ?> </td>     
		            </tr>
		            <tr>
		               <th width="100" class="text-right">Address : </th> 
		               <td class="text-left">  <?= $studentView['address']; ?> </td>     
		            </tr>
		            <tr>
		               <th width="100" class="text-right">Contact : </th> 
		               <td class="text-left"> <?= $studentView['contact']; ?> </td>     
		            </tr>	  					
	  				</table>
	  			</div>
	  		</div>
	  	</div>
  	</body>
</html>