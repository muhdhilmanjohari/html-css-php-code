<?php

session_start();

$con = new mysqli("localhost","root","","connect") or die("unable to connect");

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from userdata1 where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$row = mysqli_fetch_array($result);

if($row["type"]=="user")
{	


	header('location:index1.html');
}
elseif($row["type"]=="admin")
{
	$_SESSION["username"]=$username;
	header('location:admin.php');
}
else
{
	echo "username or password incorrect";
}

}










?>