<?php 
$name =  $_GET['name']; 
$lastname =  $_GET['lastname']; 
$email =  $_GET['email']; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" >MultiPay</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Update User</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="update_query.php" method="POST">	
				<h4 class="text-success">User info...[please don't edit email]</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" value='<?php echo"$name" ?>' name="name" />
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" value='<?php echo"$lastname" ?>' name="lastname" />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" hidden="" value='<?php echo"$email" ?>' name="email" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="update">Update</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>