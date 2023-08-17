<html>
<head>

<title>E-RENTING</title>

<link href="css/style.css" rel="stylesheet" />

</head>

</head>

<br>
</br>

<center>
<img src='assets/img/unitsukan.png' width='113 pixels' height='111.5 pixels'>
</center>
<br>

<h1 align="center">Receipt</h1></font>
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
    $programme = $_POST['programme'];
    $applicant = $_POST['applicant'];
    $date = $_POST['date'];
    $facility = $_POST['facility'];
    $inventory = $_POST['inventory'];
    $usertype = $_POST['usertype'];
    $telephone=$_POST['telephone'];
    $totalCharge=$_POST['totalCharge'];
	      $id=$_POST['id'];
	
//SAVE WITH NEW VALUE
$result = mysqli_query($samb,
"UPDATE booking SET programme='$programme',applicant='$applicant',date='$date',facility='$facility',inventory='$inventory',usertype='$usertype',telephone='$telephone',totalCharge='$totalCharge' WHERE id=$id");
echo "<script>alert('Successfully Update!'); 
window.location='payment.php'</script>";
}

//GET THE ID FROM URL
$id = $_GET['id'];
//SHOW THE CURRENT RECORD
$result = mysqli_query($samb, "SELECT * FROM booking
WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $programme=$res['programme'];
    $applicant=$res['applicant'];
    $date=$res['date'];
    $facility=$res['facility'];
    $inventory=$res['inventory'];
    $usertype=$res['usertype'];
    $telephone=$res['telephone'];
    $totalCharge=$res['totalCharge'];
}
?>

<center>
    <form name="form1" action="payment.html" method="POST">
<table width="882" align="center">  
  <tr>
    <td width="500"><font color="black"><b>Programme: </b></font></td>
    <td><b>
	<input size="50"type="text" name="programme" id="programme" value="<?php echo $programme;?>" />
	</td>
  </tr>
  <tr>
  <tr>
    <td width="500"><font color="black"><b>Applicant: </b></font></td>
    <td><b>
	<input size="50"type="text" name="applicant" id="applicant" value="<?php echo $applicant;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="black"><b>Date: </b></font></td>
    <td><b>
	<input size="50"type="date" name="date" id="date" value="<?php echo $date;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="black"><b>User Type: </b></font></td>
    <td><b>
	<input size="50"type="text" name="usertype" id="usertype" value="<?php echo $usertype;?>" />
	</td>
  </tr>
    <tr>
    <td width="100"><font color="black"><b>Telephone: </b></font></td>
    <td><b>
    <input size="50"type="text" name="telephone" id="telephone" value="<?php echo $telephone;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="black"><b>Facility: </b></font></td>
    <td><b>
	<input size="50"type="text" name="facility" id="facility" value="<?php echo $facility;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="black"><b>Inventory: </b></font></td>
    <td><b>
    <input size="50"type="text" name="inventory" id="inventory" value="<?php echo $inventory;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="black"><b>Total Charge: </b></font></td>
    <td><b>
    <input size="50"type="text" name="totalCharge" id="totalCharge" value="<?php echo $totalCharge;?>" />
	</td>
  </tr>

</table>
<br>
</br>	
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<input type="button" name="button" id="button" value="Print" />
    </form>
    <center><font color="white" size="4"><b><pre>Note* : Make Sure You Print This Receipt Before Proceed To Payment<pre></b></font></center>
          
          <table border="1" align="center" bgcolor="white" width="300" height="50">
          <tr>
                    <td><div class="nav-links b">
                      <center><a href="payment.html">Proceed To Payment</a></center>
                    </div>
              </td>
          </tr>
          </table>
        </body></center>

<br>
</br>

</body>
</html>