<html>

<head>

<title>NAJMI ARIF</title>

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
     		<a href="index.html">HOME     </a>
     		<a href="about.html">ABOUT    </a>
  		<a href="contact.html">CONTACT     </a>
		<a href="option.html">LOGIN     </a>
     	</li>
     </ul>
</nav>

<script language=Javascript>
    function validate()
    {
        var name = document.register.name.value;
        var username = document.register.uname.value;
        var email = document.register.email.value;
        var no = document.register.contact.value;
        var type = document.register.usertype.value;
        var pass = document.register.password.value;
    
        if(name == "")
        {
            alert("Please fill in your first name");
            document.register.name.focus();
            return false;
        }
        else if(!isNaN(name))
        {
            alert("Please make sure the value is in string");
            document.register.name.focus();
            return false;
        }
        else if(username == "")
        {
            alert("Please fill in your name");
            document.register.username.focus();
            return false;
        }
        else if(!isNaN(username))
        {
            alert("Please make sure the value is in string");
            document.register.username.focus();
            return false;
        }
        else if(email == "")
        {
            alert("Please fill in your email");
            document.register.email.focus();
            return false;
        }
        else if(no == "")
        {
            alert("Please fill in your contant number");
            document.register.no.focus();
            return false;
        }
        else if(type == "")
        {
            alert("Please fill in your password");
            document.register.usertype.focus();
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
            alert("Hello " + username + ", Your are sucessfully sign up");
        }
    }
</script>

<body>

<hr>
<br>
</br>

<font face='futura' color="white"><h1 align="center">Sign Up</h1></font>

<form name="register" action="signup-check.php" method="post">
<fieldset>
<legend align="center"><font face="damages" size="5" color="white"> Register </font></legend>

<br>
</br>

<center>
<table class="center">
<tr>
    <td><font color="white">Name: </font></td>
    <td><input name="name" type="text" maxlength="50" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Email: </font></td>
    <td><input name="email" type="text" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">User Type: </font></td>
    <td>
    <select name="usertype">
    <option value="Student">Student</option>
    <br>
    <option selected="selected" value="Resident">Resident</option>
    <br>
    <option value="Outsider">Outsider</option>
    <br>
</select>
    </td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Telephone: </font></td>
    <td><input name="contact" type="contact" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: Without"-"</td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Username: </font></td>
    <td><input name="uname" type="text" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 3 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Password: </font></td>
    <td><input name="password" type="password" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 3 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Re-Enter Password: </font></td>
    <td><input name="re_password" type="password" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 3 - 12 characters maximum</font></td>
</tr>

</table>
</center>

<center>
<p>
<center>
<input type="reset" name="Reset" value="Clear">
<input type="submit" name="button" value="Submit" onClick="return validate();">
<input type="reset" name="button" value="Cancel">
</center>


<br>
</br>

</fieldset>
</form></font>

<hr>

<div class="footer">
<center>
<font face='damages' color="white" size='5'><a href=option.html> Booking </a></font>
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