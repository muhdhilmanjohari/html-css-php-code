<?php
include("dbcon.php");
session_start();


$query = "DELETE FROM userdata1 WHERE id = ".$_GET['id'];
$conn->exec($query);

echo"<script>alert('Successfully deleted user ');
     document.location.href='admin.php';
     </script>";
?>