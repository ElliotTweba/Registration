<?php
	require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="css/css/util.css">
	    <link rel="stylesheet" type="text/css" href="css/css/main.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" >MultiPay</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-8 well">
		<h3 class="text-primary">User Roles</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
        <div class="table100 ver2 m-b-110">
            
            <div class="table100-head">
                <table>
                    <thead>
                        <tr class="row100 head">
                            <th class="cell100 column1">Name</th>
                            <th class="cell100 column3">Email</th>
                            <th class="cell100 column3">Description</th>
                            <th class="cell100 column3">Terms</th>
                        </tr>
                    </thead>
                </table>
            </div>
            
            <div class="table100-body js-pscroll">
                <table>
                    <tbody>
                        <?php
                        try {
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->query("SELECT * FROM roles")->fetchAll();
                            foreach ($stmt as $row) {
                        ?>
                        <tr class="row100 body">
                            <td class="cell100 column1"><?php echo $row['name']; ?></td>
                            <td class="cell100 column2"><?php echo $row['email']; ?></td>
                            <td class="cell100 column3"><?php echo $row['description']; ?></td>
                            <td class="cell100 column3"><?php echo $row['terms']; ?></td>
                        </tr>
                        <?php 
							}
						}
							
						catch(PDOException $e){
							echo $e . "<br>" . $e->getMessage();
						}
						$conn = null;
					?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>