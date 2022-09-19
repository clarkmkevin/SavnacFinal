<?php  include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> &#128039; Signup</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="registration.css">


</head>
<body>






<form method="post" action="insert_query.php">

  <h2> Registration </h2>

  <input type="text" name="firstName" placeholder="First Name" required /> 
  <br /> <br />
  <input type="text" name="lastName" placeholder="Last Name" required /> 
  <br /> <br />

  <input type="email" name="email" placeholder="Email@montclair.edu" required /> 
  <br /> <br />

  <input type="text" name="userName" placeholder="Create User Name" required /> 
  <br /> <br />


  <input type="password" name="password" placeholder="Create Password" required /> 
  <br /> <br />
  
  <button type="submit" name="submit"> Submit</button>
  <br />
    <br />





<p>
<a href="../login/pdo_login.php"><span><small>SIGN IN NOW</small></span></a>
</p>


</form>





</body>
</html>