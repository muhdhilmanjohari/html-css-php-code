<html>
<head>
    <title> User Login And Registration </title>
    <link rel="stylesheet" type="text/css" href="regisStyle.css" >
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
      <a href="index.html">
      <img class ="logo" src="logo1.png">
    </a>
      <ul>
        <li class="active"><a href = "login1.php">LOG IN</a></li>
      </ul>
    </div>
</nav>

<body>
    <div class = "regis">
  <form action="register.php" method="post"> 
    <div class = "test">
<table class="center">
    <h1>Registeration Forms</h1>
<tr>
    <td><font color="black">First Name: </font></td>
    <td><input name="fname" type="text" maxlength="50" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Last Name: </font></td>
    <td><input name="lname" type="text" maxlength="50" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Gender: </font></td>
    <td><input type="radio" name="gender" value="male"><font color="black">Male</font></td>
</tr>
<tr>
    <td></td>
    <td><input type="radio" name="gender" value="female"><font color="black">Female</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Home Address: </font></td>
    <td><textarea name="address" rows="10" cols="42" required></textarea></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">City: </font></td>
    <td>
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
    </td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Email: </font></td>
    <td><input name="email" type="text" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Phone Number: </font></td>
    <td><input type="tel" name="phone" placeholder="012-1234567" pattern="[0-9]{3}[0-9]{7}" required></td>

</tr>
<tr>
    <td></td>
    <td><font color="black">Note: Without"-"</td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Education Background:</font></td>
    <td>
    <font color="black">
    SPM <input type="checkbox" name="edu" value ="SPM">
    Diploma <input type="checkbox" name="edu" value = "Diploma">
    Degree <input type="checkbox" name="edu" value = "Degree">
    Master <input type="checkbox" name="edu" value = "Master">
    PhD <input type="checkbox" name="edu" value = "PhD">
    </font>
    </td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Username: </font></td>
    <td><input name="username" type="text" minlength="5" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="black">Note: 5 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Password: </font></td>
    <td><input name="password" type="password" minlength="5" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="black">Note: 5 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="black">Re-Enter Password: </font></td>
    <td><input name="rePassword" type="password" minlength="5" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="black">Note: 5 - 12 characters maximum</font></td>
</tr>
<tr>
<td><button class="button" type = "submit" value= "submit">Sign up</button></td>
</tr>

</form>
</table>
</div>

<script>
    document.querySelector('.button').onClick = function(){

        var password = document.querySelector('.passowrd').value,
        rePassword = document.querySelector('.rePassword').value;

        if(password== ""){
            alert("Password cannot be empty.");
        }
        else if (password != rePassword){
            alert("Password did not match. Please Try Again");
            return false
        }
        else if(password == rePassword){
            alert("Password Match.")
        }
        return true
    }

</script>
</div>
</body>
</html>