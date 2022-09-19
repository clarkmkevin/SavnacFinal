<?php  
 session_start();  
 $host = "localhost";  
 $username = "Admin";  
 $password = "pa55word";  
 $database = "login";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


 }
    catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  