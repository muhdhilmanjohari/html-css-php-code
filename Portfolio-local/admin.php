<html>
<head>
    <title> Admin CRUD </title>
    <link rel="stylesheet" type="text/css" href="stylecrud.css">
    

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
 ul{
    float: right;
    list-style-type: none;
    margin-top: 30px;
}

ul li{
    display: inline-block;

}

ul li a{

    padding: 10px 30px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    font-family: "Roboto";

}

ul li a:hover{
    background-color: white;
    color: black;
}

ul li.active a{
    color: #white;
}
.logo {
    display: inline-block;
    vertical-align: top;
    width: 80px;
    height: 80px;
    margin-right: 20px;
 } 
 .main{
  box-shadow: 0 6px 12px -1px rgba(0,0,0,0.5);
    width: 100%;  /* i'm assuming full width */
    height: 80px; /* change it to desired width */
    background-color: grey; /* change to desired color */
}
</style>
<nav>
    <div class ="main">
      <a href="admin.php">
      <img class ="logo" src="logo1.png">
    </a>
      <ul>
        <li class="active"><a href = "admin.php">User List</a></li>
        <li class="active"><a href = "index.html">User Page</a></li>
        <li class="active"><a href = "index1.html">User Page(logged in)</a></li>
      </ul>
    </div>
</nav>

<?php
$samb = mysqli_connect("localhost","root","","connect");
if (mysqli_connect_errno()){
echo "Error to connect to database:".mysqli_connect_error();
}

?>   

<body>
<table>  
  <thead>
   <tr>
    <th>No.</th>
    <th width = 20%>First Name</th>
    <th width = 20%>Last Name</th>
    <th>Gender</th>
    <th width = 30%>Home Address</th>
    <th>City</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Education</th>
    <th>Username</th>
    <th>Password</th>
    <th>User Type</th>
    <th width=10%>Update</th>
    <th width=10%>Delete</th>
  </tr>
</thead>

  <?php 
  $data1=mysqli_query($samb,"SELECT * FROM userdata1 ORDER BY fname DESC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['fname']; ?><br></td>
	  <td><?php echo $info1['lname']; ?><br></td>
         <td><?php echo $info1['gender']; ?><br></td>
        <td><?php echo $info1['address']; ?><br></td>
       <td><?php echo $info1['city']; ?><br></td>
       <td><?php echo $info1['email']; ?><br></td>
       <td><?php echo $info1['phone']; ?><br></td>
       <td><?php echo $info1['edu']; ?><br></td>
       <td><?php echo $info1['username']; ?><br></td>
       <td><?php echo $info1['password']; ?><br></td>
       <td><?php echo $info1['type']; ?><br></td>
      
    <td><a href="adminUpdate.php?id=<?php echo $info1['id'];?>" class="edit_btn">edit</a>
   <td><a href="adminDel.php?id=<?php echo $info1['id'];?>" class ="del_btn">Delete</a>
    
 
	</td>
  </tr>
  <?php $no++; } ?>
</table>
<br><br>
<form method="post" action="register1.php" >
    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="fname" value="">
    </div>
    <div class="input-group">
      <label>Lastname</label>
      <input type="text" name="lname" value="">
    </div>
    <div >
      <label>Gender</label>
      <br>
      <input type="radio" name="gender" value="male" id="Male1">Male</input>
      
      <input type="radio" name="gender" value="female" id ="Female1">Female</input>
      
    </div>
    

    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" value=""> 
    </div>

    <div class="input-group">
      <label>City</label>
      <select name="city">
    <option value="PERLIS">Perlis</option>
    <br>
    <option value="KEDAH">Kedah</option>
    <br>
    <option selected="selected" value="PERAK">Perak</option>
    <br>
    <option value="JOHOR">Johor</option>
    <br>
    <option value="KELANTAN">Kelantan</option>
    <br>
    <option value="MELAKA">Melaka</option>
    <br>
    <option value="NEGERI SEMBILAN">Negeri Sembilan</option>
    <br>
    <option value="PENANG">P.Pinang</option>
    <br>
    <option value="SABAH">Sabah</option>
    <br>
    <option value="SARAWAK">Sarawak</option>
    <br>
    <option value="SELANGOR">Selangor</option>
    <br>
    <option value="TERENGGANU">Terengganu</option>
    <br>
    <option value="PAHANG">Pahang</option>
    <br>
    <option value="KUALA LUMPUR">Kuala Lumpur</option>
    <br>
</select>
    </div>

    

    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email" value="">
    </div>
    <div class="input-group">
      <label>Phone Number</label>
      <input type="text" name="phone" value="">
    </div>
    <div>
      <label>Education Background</label><br>
      <input type="checkbox" name="edu" value ="SPM">SPM</input>
        <input type="checkbox" name="edu" value = "Diploma">Diploma </input>
        <input type="checkbox" name="edu" value = "Degree">Degree </input>
        <input type="checkbox" name="edu" value = "Master">Master </input>
        <input type="checkbox" name="edu" value = "PhD">PhD</input>

    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="text" name="password" value="">
    </div>
    <div class="input-group">
      <label>User Type</label>
      <input type="text" name="type" value="">
    </div>

   <div class="input-group">
      <button class="btn" type="submit" name="submit" >Save</button>
    </div>
  </form>

</body>
 </html>