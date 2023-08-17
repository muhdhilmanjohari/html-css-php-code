<?php 
	$con = new mysqli("localhost","root","","connect") or die("unable to connect");
if ($con){

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$edu = $_POST['edu'];
$user = $_POST['username'];
$pass = $_POST['password'];
$type = $_POST['type']

		 $regg ="insert into userdata (fname,lname,gender,address,city,email,phone,edu,username,password,type) VALUES ('$fname', '$lname', '$gender', '$address', '$city','$email', '$phone', '$edu', '$user','$pass','$type')"); 
         mysqli_query($db,$reg);
		$_SESSION['message'] = "Address saved"; 
		header('location: indexa.php');
	}
}