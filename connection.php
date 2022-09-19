<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "login";  
 $message = "";
 $table_enrollment="enrollment";
 $table_students="user";
 $table_courses="classes" ;
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