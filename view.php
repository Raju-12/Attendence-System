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
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				


				<?php 

					$query="select distinct date from attan ";
					$result=$link->query($query);
					if($result->num_rows>0){
						$i=0;
						while ($val=$result->fetch_assoc()) {
							$i++;
						
					


				 ?>


					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $val['date'] ?></td>
						<td><a href="Viewp.php?date=<?php echo $val['date'] ?> " class="btn btn-primary" >View</a></td>
					</tr>
					<?php }} ?>

		</div>
		<div class="panel-footer">
			
		</div>
	</div>
</body>
</html>