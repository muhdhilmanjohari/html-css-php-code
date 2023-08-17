<html>
<head>
<title>E-RENTING</title>
</head>
<center>
<body>
<?php

$samb = mysqli_connect("localhost","root","","sportcomp");
if (mysqli_connect_errno())
{
	echo "Error to connect to database:".mysqli_connect_error();
}

//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($connection,"sportcomp");

if(isset($_POST['booked']))
{
	$programme = $_POST['programme'];
	$applicant = $_POST['applicant'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$usertype = $_POST['usertype'];
	$facility = $_POST['facility'];
	$inventory = $_POST['inventory'];
	$telephone = $_POST['telephone'];
	$totalCharge = $_POST['totalCharge'];

	$sql = "INSERT INTO booking(programme,applicant,date,gender,usertype,facility,inventory,telephone,totalCharge) VALUES ('$programme','$applicant','$date','$gender','$usertype','$facility','$inventory','$telephone','$totalCharge')";

	//$query = "INSERT INTO `booking`('programme','applicant',`date`,`gender`,`facility`,`inventory`,`telephone`,`totalCharge`) VALUES ('$programme','$applicant','$date','$gender','$facility','$inventory','$telephone','$totalCharge')";
	//$query_run = mysqli_query($connection,$query);

	if ($samb->query($sql) === TRUE) 
    {
     	echo  "<script>alert('Your Info has Successfully Added'); 
		window.location='ScheduleReceipt.php'</script>";
    } 

	//if($query_run)
	//{
	//	echo ' <script type="text/javascript"> alert("Your Booking has Successfully") </script> '; 
	//}
	//else
	//{
	//	echo ' <script type="text/javascript"> alert("Your Booking has Not Successfully") </script> '; 
	//}
}

?>

</body>
</html>