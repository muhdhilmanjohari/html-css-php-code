<html>
<head>
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="styleupdate.css" >
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>

<style>
    body {
    background-color: lightgray;
  height: 100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>
<nav>
    <div class ="main">
      <img class ="logo" src="logo1.png">
    </a>
    </div>
</nav>
<body>
<?php

$samb = mysqli_connect("localhost","root","","connect");
if (mysqli_connect_errno()){
echo "Error to connect to database:".mysqli_connect_error();
}

if(isset($_POST['update']))
{    
    $fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$edu = $_POST['edu'];
$password = $_POST['password'];
$type = $_POST['type'];
$id = $_POST['id'];
	
//SAVE WITH NEW VALUE
$result = mysqli_query($samb,"UPDATE userdata1 
  SET fname ='$fname',
  lname = '$lname',
  gender = '$gender',
  address = '$address',
  city = '$city',
  email='$email',
  phone = '$phone',
  edu = '$edu',
  password = '$password',
  type = '$type' 
    WHERE id=$id");
echo "<script>alert('Successfully Update!'); window.location='admin.php'</script>";
}

//GET THE ID FROM URL
$id = $_GET['id'];
//SHOW THE CURRENT RECORD
$result = mysqli_query($samb, "SELECT * FROM userdata1 WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $fname = $res['fname'];
$lname = $res['lname'];
$gender = $res['gender'];
$address = $res['address'];
$city = $res['city'];
$email = $res['email'];
$phone = $res['phone'];
$edu = $res['edu'];
$username = $res['username'];
$password = $res['password'];
$type = $res['type'];
}
?>

<br><br><br><br>
<center>
    <form name="form1" action="adminUpdate.php" method="POST">
<table class="center">  
  <tr>
    <td width="100"><font><b>First Name: </b></font></td>
    <td><b>
	<input size="50"type="text" name="fname" id="fname" value="<?php echo $fname;?>" />
	</td>
  </tr>

  <tr>
  <tr>
    <td width="100"><font><b>Last Name: </b></font></td>
    <td><b>
	<input size="50"type="text" name="lname" id="lname" value="<?php echo $lname;?>" />
	</td>
  </tr>

  <tr>
    <td width="100"><font><b>Gender: </b></font></td>
    <td><b>
	<input size="50"type="text" name="gender" id="gender" value="<?php echo $gender;?>" />
	</td>
  </tr>

  <tr>
    <td width="100"><font><b>Home Address: </b></font></td>
    <td><b>
	<input size="50"type="text" name="address" id="address" value="<?php echo $address;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font><b>City: </b></font></td>
    <td><b>
    <input size="50"type="text" name="city" id="city" value="<?php echo $city;?>" />
	</td>
  </tr>

  <tr>
    <td width="100"><font><b>Email: </b></font></td>
    <td><b>
  <input size="50"type="text" name="email" id="email" value="<?php echo $email;?>" />
  </td>
  </tr>

  <tr>
    <td width="100"><font><b>Phone Number: </b></font></td>
    <td><b>
  <input size="50"type="text" name="phone" id="phone" value="<?php echo $phone;?>" />
  </td>
  </tr>

  <tr>
    <td width="100"><font><b>Education: </b></font></td>
    <td><b>
  <input size="50"type="text" name="edu" id="edu" value="<?php echo $edu;?>" />
  </td>
  </tr>

  <tr>
    <td width="100"><font><b>Username: </b></font></td>
    <td><b>
  <input size="50"type="text" name="username" id="username" value="<?php echo $username;?>" />
  </td>
  </tr>
  <tr>
    <td width="100"><font><b>Password: </b></font></td>
    <td><b>
  <input size="50"type="text" name="password" id="password" value="<?php echo $password;?>" />
  </td>
  </tr>
  <tr>
    <td width="100"><font><b>User type: </b></font></td>
    <td><b>
  <input size="50"type="text" name="type" id="type" value="<?php echo $type;?>" />
  </td>
  </tr>
  <tr>

</table>	
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<input type="submit" name="update" id="submit" value="Update" />
<input type="reset"  value="Reset" />
    </form>
    <font face='Futura' color="white" size='5'>
    <a href="admin.php">List of users</a><br>
    </font>
        </body></center>
</html>