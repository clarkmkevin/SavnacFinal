<?php  include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
</head>
<body>
    <img src="../pics/Wel1.jpg" class="logo" alt="">
    <div class="loginbar">
        <h1>Sign Up</h1>
    </div>
    <div>

    <form method="post" action="insert_query.php">
    <input type="text" name="firstName" placeholder="First Name" required />
    <input type="text" name="lastName" placeholder="Last Name" required />
    <input type="email" id="email" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[edu]{2,}$">  
    <input type="text" name="userName" placeholder="Create User Name" required />
    <input type="password" name="password" placeholder="Create Password" required || pattern="(?=.*\d)(?=.*?[a-zA-Z])(?=.*?[\W_]).{6,10}$"/>
    <button type="submit" name="submit" class = "signbutton"> Sign Up</button>
    <a href="../studentlog.php" class = "logbutton">Log in</a>
    <p>Already have an account?</p>

        </form>
      </div>
</body>
</html>