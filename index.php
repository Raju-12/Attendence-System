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
			<a href="view.php" class="btn btn-primary">View</a>
			<a href="add.php" class="btn btn-primary pull-right">Add</a>

			<form action="" method="POST">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Father Name</th>
						<th>Email</th>
						<th>Attenednce</th>
					</tr>
				</thead>
 				<tbody>


				<?php 
					$query="select * from employee";
					$result=$link->query($query);

					while($show=$result->fetch_assoc()){

				 ?>


					<tr>
						<td><?php echo $show['name']; ?></td>
						<td><?php echo $show['fname']; ?></td>
						<td><?php echo $show['email']; ?></td>
						<td>
							Present <input required type="radio" name="atten[<?php echo $show['emp_id']; ?>]" value="Present">

							Absent <input required type="radio" name="atten[<?php echo $show['emp_id']; ?>]" value="Absent">
						</td>
					</tr>
					<?php } ?>
					
				</tbody>
			


		<?php 

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$atten=$_POST['atten'];
				$date=date('d-m-y');
				$query="select distinct date from attan";
				$result=$link->query($query);
				$b=false;
				if($result->num_rows>0){
					while($check=$result->fetch_assoc()){
						if($date==$check['date']){
							$b=true;
							echo "<div class='alert alert-danger'>
							Attendance already taken !!!!!;
					</div>";
						}
					}


				}
				if(!$b){

						foreach ($atten as $key => $value) {
							if($value=="Present"){

								$query="insert into attan(value,emp_id,date) values('Present',$key,'$date')";
								$insertResult=$link->query($query);
							}
							else{
								$query="insert into attan(value,emp_id,date) values('Absent',$key,'$date')";
								$insertResult=$link->query($query);
							}
						}
						
						if(isset($insertResult)){
							echo "<div class='alert alert-success'>
							Attendance taken successfully;
					</div>";
						}
					}
				
			}

		 ?>
		 </table>
			<input class="btn btn-primary" type="submit" value="Take Attendence">
		</form>


		</div>
		<div class="panel-footer">
			
		</div>
	</div>
</body>
</html>