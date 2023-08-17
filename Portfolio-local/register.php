
<?php

$con = new mysqli("localhost","root","","connect") or die("unable to connect");
if ($con){

	
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
$chk="";
$s = "select * from userdata1 where username = '$user'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"<script>alert('Username already been taken!');window.location='regis.php'</script>";
} else{
	$reg=" insert into userdata1(fname,lname,gender,address,city,email, phone,edu,username,password) value ('$fname', '$lname', '$gender', '$address', '$city','$email', '$phone', '$edu', '$user','$pass')";
	mysqli_query($con,$reg);
	echo "<script>alert('Successfully Register!'); window.location='login1.php'</script>";
}
}

?>