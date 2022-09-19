<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "login";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM log WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:teacherwewelcom.html");  
                } 

                else  
           {  
                $query = "SELECT * FROM user WHERE userName = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:studentwelcom.html");  
                } 

                else  
                {  
                     $message = '<font color=#999999> Please enter a valid username and password</font>';  
                }  
           }  
      }  
 } 

 } 
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentlog.css">
    <title>SAVNAC Student Login</title>
</head>
<body>
    <img src="pics/Wel1.jpg" class="logo" alt="">
    <form method="post"> 
    <div class="loginbar">
        <h1>Student Login</h1>
    </div>
    <div>
          <<input type="text" name="username" placeholder="User Name" required />
          <label for="fname">First Name</label>
          <<input type="password" id="lname" name="password" placeholder="Password">          
          <input type="submit" class = "logbutton" name="login" value="Login" />
          <a href="signup/signup.php"class = "signbutton">Sign up</a>
          <p>Don't have an account yet?</p>
        </form>
      </div>
</body>

</script></body>  
</html>