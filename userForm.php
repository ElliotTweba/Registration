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
		<h3 class="text-primary">Add User </h3>
        <a href="viewRoles.php" style="color:red; float:right; margin-bottom: 25px;">View Roles</a>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="add_query.php" method="POST">	
				<h4 class="text-success">Fill in...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" />
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" />
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input type="number" class="form-control" required="" name="contact" />
				</div>
				<br />
                <h3 class="text-primary"> User Roles </h3>
                <div class="form-group">
					<label>Description</label>
					<input type="text" class="form-control" required="" name="description" />
				</div>
                <div class="form-group">
                    <p>Aggree to terms & condition</p>
					<input type="checkbox" name="check"  required=""/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">Register</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>