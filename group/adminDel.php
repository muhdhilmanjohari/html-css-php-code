<?php
include("dbcon.php");
session_start();


$query = "DELETE FROM users WHERE id = ".$_GET['id'];
$conn->exec($query);

echo"<script>alert('Successfully deleted user ');
     document.location.href='admin.php';
     </script>";
?>