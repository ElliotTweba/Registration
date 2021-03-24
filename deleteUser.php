
<?php
	require_once 'conn.php';
$email = $_GET['email'];
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare( "DELETE FROM users WHERE email =:email" );
    $stmt->bindParam(':email', $email);
    $stmt->execute();
     echo "
     <script>alert('User Deleted !')</script>
     <script>window.location = 'viewUsers.php'</script>
     ";
}catch(PDOException $e){
    echo $e->getMessage();
}
	
			$conn = null; 
			

?>