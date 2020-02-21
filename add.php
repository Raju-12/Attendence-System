<?php 
	
	include_once("connection.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="css/bootstrap.min.js"></script>
	<script src="css/jquery.js"></script>
</head>
<body>
	<div class="panel panel-default container" >
		<div class="panel-heading">
			<h1 style="text-align:center;">Attendence Management System</h1>
		</div>
		<div class="panel-body">

		<?php 

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$nam=$_POST['name'];
				$fname=$_POST['fnme'];// Problem ase
				$emaill=$_POST['email'];

				if($nam=="" || $fnme="" || $emaill==""){
					echo "<div class='alert alert-danger'>
							Fields Must not be empty
					</div>";
				}


				elseif(!filter_var($emaill,FILTER_VALIDATE_EMAIL)){
					echo "<div class='alert alert-danger'>
							Invalid Email;
					</div>";
				}


				else{
	$query1="insert into employee(name,fname,email) values('$nam','$fname','$emaill')";
					$result=$link->query($query1);

					if($result){
						echo "<div class='alert alert-success'>
							Data Inserted Succesfully;
					</div>";

					}
					
				}
				
			}

			

		 ?>
		<form action="" method="post">
			<a href="#" class="btn btn-primary">View</a>
			<a href="index.php" class="btn btn-primary pull-right">Back</a>
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" >
			</div>


			<div class="form-group">
				<label for="name">Father Name</label>
				<input type="text" name="fnme" class="form-control" >
			</div>


			<div class="form-group">
				<label for="name">Email</label>
				<input type="text" name="email" class="form-control">
			</div>

			<input type="submit" value="submit" class="btn btn-primary">

		</form>
		</div>
		<div class="panel-footer">
			
		</div>
	</div>
</body>
</html>