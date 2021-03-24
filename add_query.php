<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
                $description = $_POST['description'];
                $check = $_POST['check'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO roles (name,lastname,email,contact, description, terms) VALUES ('$firstname', '$lastname', '$email', '$contact', '$description', '$check');";
                $sql.= "INSERT INTO users (name,lastname,email,password) VALUES ('$firstname', '$lastname', '$email', '$contact');";
				$conn->exec($sql);
                echo "
				<script>alert('User Added ! Can use Phone# as password to login !')</script>
				<script>window.location = 'userForm.php'</script>
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