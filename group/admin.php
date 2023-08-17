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

<nav>
     	<div class="logo">
		<h4 align="center">E-RENTING</h4>
     	</div>

     <ul class="nav-links">
     	<li>
		<a href="index.html">LOGOUT     </a>
     	</li>
     </ul>
</nav>

<body>

<hr>
<br>
</br>

<font face='Zamenhof Outline' size="6" color="#fed136"><h1 align="center">List of users</h1></font>

<?php
$samb = mysqli_connect("localhost","root","","sportcomp");
if (mysqli_connect_errno()){
echo "Error to connect to database:".mysqli_connect_error();
}

?>   
<center>
<br><br><br><br>
<table bgcolor="#fed136" width="811" height='100' border="1" align="center">  
   <tr align="center">
    <td width="38"><b>No.</b></td>
    <td width="193"><b>Name</b></td>
    <td width="193"><b>Username</b></td>
    <td width="169"><b>Email</b></td>
    <td width="99"><b>Contact</b></td>
    <td width="99"><b>Usertype</b></td>
    <th width=10%>Update</th>
    <th width=10%>Delete</th></font>
  </tr>

  <?php 
  $data1=mysqli_query($samb,"SELECT * FROM users ORDER BY name DESC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['name']; ?><br></td>
	  <td><?php echo $info1['user_name']; ?><br></td>
         <td><?php echo $info1['email']; ?><br></td>
        <td><?php echo $info1['contact']; ?><br></td>
       <td><?php echo $info1['usertype']; ?><br></td>
      
    <td><a href="adminUpdate.php?id=
	<?php echo $info1['id'];?>"><center><img src='assets/img/edit.jpg' width=20px  height=20px></center></a>
   <td><a href="adminDel.php?id=
       <?php echo $info1['id'];?>"><center><img src='assets/img/del.jpg' width=20px  height=20px></center></a>  
 
	</td>
  </tr>
  <?php $no++; } ?>
</table>

<br>
</br>

<form action="admin.html" method="post">
<input type="submit" name="button" value="Back">
</form>

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