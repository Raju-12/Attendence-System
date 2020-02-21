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
			<a href="" class="btn btn-primary">View</a>
			<a href="add.php" class="btn btn-primary pull-right">Add</a>

			<form action="" method="POST">
			<table class="table">
				<thead>
					<tr>
						<th>Sr No:</th>
						<th>Name</th>
						<th>Father Name</th>
						<th>Email</th>
						<th>Attendence</th>
					</tr>
				</thead>
				


				<?php 

					if($_GET['date']){
						$date=$_GET['date'];

					$query="SELECT employee.*,attan.* from attan inner join employee on attan.emp_id=employee.emp_id and attan.date='$date'";

					$result=$link->query($query);

					if($result->num_rows>0){
						$i=0;
						while ($val=$result->fetch_assoc()) {
							$i++;
						
					


				 ?>


					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $val['name'] ?></td>
						<td><?php echo $val['fname'] ?></td>
						<td><?php echo $val['email'] ?></td>

						<td>
							
						Present <input type="radio"

							value="Present"
							<?php 

								if($val['value']=='Present')
									echo "checked";

							?>

						>
						Absent <input type="radio"

							value="Absent"
							<?php 

								if($val['value']=='Absent')
									echo "checked";
							?>

						>

						</td>
						
					</tr>
					<?php }}} ?>

		</div>
		<div class="panel-footer">
			
		</div>
	</div>
</body>
</html>