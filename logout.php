<?php
session_start(); 
session_destroy();
echo "
<script>alert('Logged Out  !')</script>
<script>window.location = 'index.php'</script>
";
?>