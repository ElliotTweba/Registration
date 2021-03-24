<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO users (name,lastname,email,password) VALUES ('$firstname', '$lastname', '$email', '$password')";
				$conn->exec($sql);
                echo "
				<script>alert('Registration Successfully !')</script>
				<script>window.location = 'index.php'</script>
			";
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	
			$conn = null;
			
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}
?>