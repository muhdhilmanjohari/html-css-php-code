<html>
<head>

<title>E-RENTING</title>

<link href="css/style.css" rel="stylesheet" />

<style type="text/css">

body {
background-image: url('assets/img/header-bg.jpg');
background-repeat: no-repeat;
background-attachment: scroll;
background-position: center center;
background-size: cover;
}

</style>

</head>

</head>

<nav>
     	<div class="logo">
		<h4 align="center">E-RENTING</h4>
     	</div>

     <ul class="nav-links">
     	<li>
     		<h4 align="center">ADMIN SITE</h4>
     	</li>
     </ul>
</nav>

<hr>
<br>
</br>

<font face='Zamenhof Outline' size="6" color="#fed136"><h1 align="center">Update List</h1></font>
<br>
</br>
<p>

<body>
<?php

$samb = mysqli_connect("localhost","root","","sportcomp");
if (mysqli_connect_errno()){
echo "Error to connect to database:".mysqli_connect_error();
}

if(isset($_POST['update']))
{    
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $usertype = $_POST['usertype'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
	$id=$_POST['id'];
	
//SAVE WITH NEW VALUE
$result = mysqli_query($samb,
"UPDATE users SET name='$name',user_name='$user_name',usertype='$usertype',email='$email',contact='$contact' WHERE id=$id");
echo "<script>alert('Successfully Update!'); 
window.location='admin.php'</script>";
}

//GET THE ID FROM URL
$id = $_GET['id'];
//SHOW THE CURRENT RECORD
$result = mysqli_query($samb, "SELECT * FROM users
WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $name=$res['name'];
    $user_name=$res['user_name'];
    $usertype=$res['usertype'];
    $email=$res['email'];
	$contact=$res['contact'];
}
?>

<center>
    <form name="form1" action="adminUpdate.php" method="POST">
<table class="center">  
  <tr>
    <td width="100"><font color="white"><b>Name: </b></font></td>
    <td><b>
	<input size="50"type="text" name="name" id="name" value="<?php echo $name;?>" />
	</td>
  </tr>
  <tr>
  <tr>
    <td width="100"><font color="white"><b>User Name: </b></font></td>
    <td><b>
	<input size="50"type="text" name="user_name" id="user_name" value="<?php echo $user_name;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="white"><b>User Type: </b></font></td>
    <td><b>
	<input size="50"type="text" name="usertype" id="usertype" value="<?php echo $usertype;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="white"><b>Email: </b></font></td>
    <td><b>
	<input size="50"type="text" name="email" id="email" value="<?php echo $email;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="white"><b>Contact: </b></font></td>
    <td><b>
    <input size="50"type="text" name="contact" id="contact" value="<?php echo $contact;?>" />
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

<br>
</br>

<hr>

<div class="footer">
<center>
<font face='damages' color="black" size='5'> Booking </font>
<font color='black'><pre>
Facility
Inventory




</pre>
</center>
</div>

<div class="footer">
<center>
<font face='damages' color="black" size='5'> About </font>
<font color='black'><pre>
Introduction
Mission
Vision


Copyright Sport Complex
</pre></hl></font>
</center>
</div>

<div class="footer">
<center>
<font face='damages' color="black" size='5'> Contact </font>
<font color='black'><pre>
Phone Number: 
04-9882415
Fax Number:
04-9882412


</pre></hl></font>
</center>
</div>


</body>
</html>