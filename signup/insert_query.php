<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "login";  
 $message = ""; 
 $first_name=$_POST['firstName'];
 $last_name=$_POST['lastName'];
 $user_email=$_POST['email'];
 $user_name=$_POST['userName'];
 $password1=$_POST['password']; 
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


$sql = "INSERT INTO user (firstName, lastName, email, userName, password)
VALUES ('$first_name', '$last_name', '$user_email', '$user_name', '$password1')";
 
$connect->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='../index.html'</script>";


 }
    catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  






 