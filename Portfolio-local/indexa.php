<?php  include('php_code.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="stylecrud.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM userdata"); ?>

<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Adrress</th>
			<th>City</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Education Background</th>
			<th>Username</th>
			<th>Password</th>
			<th>User Type</th>

			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

	<form method="post" action="server.php" >
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
			<textarea name="Address" value="" rows = "10" cols="109 "></textarea> 
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
			<button class="btn" type="submit" name="save" >Save</button>
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


	</form>
</body>
</html>