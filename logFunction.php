<?php

 function goHome(){
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

 }

 
 ?> 