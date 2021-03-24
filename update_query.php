<?php
	require_once 'conn.php';
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET name=?, lastname=? WHERE email=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$name, $lastname, $email]);
    echo "
     <script>alert('User Updated !')</script>
     <script>window.location = 'viewUsers.php'</script>
     ";
}catch(PDOException $e){
    echo $e->getMessage();
}
$conn = null; 
			
		
?>