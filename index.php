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
  				<a href="insert.php" class="btn btn-info">New Student</a>
  			</div>

  			<div class="col-md-8">
  				<h2>Student list</h2>
  				<hr>
  				<table class="table">
  					<thead>
  						<th>Id</th>
  						<th>Name</th>
  						<th>Roll</th>
  						<th>Age</th>
  						<th>Actions</th>
  					</thead>

  					<tbody>
  						<?php while($row = mysqli_fetch_assoc($result)) { ?>
  						<tr>
  							<td> <?php echo $row['id'] ?> </td>
  							<td> <?= $row['name'] ?> </td>
  							<td> <?= $row['roll'] ?> </td>
  							<td> <?= $row['age'] ?> </td>
  							
  							<td>
  								<a class="btn btn-info" href="view.php?id=<?php echo $row['id']; ?>">View</a>
  								<a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
  								<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
  							</td>
  						</tr>
  						<?php } ?>
  					</tbody>
  				</table>
  			</div>
  		</div>
  	</div>
  	</body>
</html>