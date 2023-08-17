<html>

<head>

<title>E-RENTING</title>

<link href="css/style.css" rel="stylesheet" />

<style type="text/css">

body {
background-image: url('assets/img/header-bg.jpeg');
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
     		<a href="homepage.html">HOME     </a>
     		<a href="about.html">ABOUT    </a>
  		<a href="contact.html">CONTACT     </a>
		<a href="option.html">LOGIN     </a>
     	</li>
     </ul>
</nav>

<script language=Javascript>
    function validate()
    {
        var username = document.register.uname.value;
        var pass = document.register.password.value;
    
        if(username == "")
        {
            alert("Please fill in your username");
            document.register.username.focus();
            return false;
        }
        else if(!isNaN(username))
        {
            alert("Please make sure the value is in string");
            document.register.username.focus();
            return false;
        }
        else if(pass == "")
        {
            alert("Please fill in your password");
            document.register.pass.focus();
            return false;
        }
        else
        {
            alert("Hello " + username + ", Your are sucessfully login");
        }
    }
</script>

<body>

<hr>
<br>
</br>

<font face='futura' color="white"><h1 align="center">LOGIN GUEST</h1></font>

<form name="register" action="login.php" method="post">
<fieldset>
<legend align="center"><font face="damages" size="5" color="white"> Login </font></legend>

<br>
</br>

<center>
<table class="center">


<?php if (isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<tr>
    <td><font color="white">Username: </font></td>
    <td><input name="uname" type="text" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 5 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Password: </font></td>
    <td><input name="password" type="password" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 5 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td>
    <a href="#forgotpass">
    <font color="white">Forgot Password</font>
    </a>
    </td>
</tr>

<tr><td></td></tr>

<tr>
    <td>
    <a href="register.php">
    <font color="white">Sign Up</font>
    </a>
    </td>
</tr>

</table>
</center>

<center>
<p>
<center>
<input type="reset" name="Reset" value="Clear">
<input type="submit" name="Submit" value="Submit" onClick="return validate();">
<input type="reset" name="button" value="Cancel">
</center>

<font face= futura>

<br>
</br>

</fieldset>
</form></font>

<hr>

<div class="footer">
<center>
<font face='damages' color="white" size='5'><a href=index.html> Booking </a></font>
<font color='black'><pre>
Facility
Inventory




</pre>
</center>
</div>

<div class="footer">
<center>
<font face='damages' color="white" size='5'><a href=about.html> About </a></font>
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
<font face='damages' color="white" size='5'><a href=contact.html> Contact </a></font>
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