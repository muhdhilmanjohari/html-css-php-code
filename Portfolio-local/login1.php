<html>
<head>
    <title> User Login And Registration </title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css" >
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
    </div>
</nav>

<body>
    <div class = "regis">
  <form action="validation.php" method="post"> 
    <div class = "test">
<h1>Log In</h1>
      <tr><td></td></tr>

<tr>
    <td><font color="black">Username: </font></td>
    <td><input name="username" type="text" minlength="5" maxlength="12" size="40" required></td>
</tr>
<tr><td></td></tr>
<br><br>
<tr>
    <td><font color="black">Password: </font></td>
    <td><input name="password" type="password" minlength="5" maxlength="12" size="40" required></td>
</tr>
<br><br>
<tr>
<td><button class="button" type = "submit" value= "submit">login</button></td>
</tr>
</form>
</table>
</div>
</div>
</body>
</html>