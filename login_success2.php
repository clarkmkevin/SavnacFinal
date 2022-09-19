

<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login_success.css">


</head>
<body>



<div class="header">
  <img src="imges/MSU.png">
  
</div>

<div class="navbar">
  <a href="login_success2.php" class="active">Home</a>
 
   <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
 	  echo '<span><a href="logout.php" class=right>Logout</a></span>';  
      echo '<span><a href="#" class=right >  Welcome - '.$_SESSION["username"].'</a></span>';  
 }  
 else  
 {  
      header("location:pdo_login.php");  
 }  
 ?> 
</div>

<div class="row">


    <div class="side3">
    	<p>
  	<label id="lab">Q&A Question Center</label><br /><br />
  	<a href="../messages/social_media/messages2.php"><input type="submit" name="Ask a Question!" id="create" value="Ask a Question!"></a>
  
</p>
  </div>
</div>

<div class="footer">
  <h2>Copyright &copy; 2021 Kevin and Nathan Q&A</h2>
</div>

</body>
</html>
