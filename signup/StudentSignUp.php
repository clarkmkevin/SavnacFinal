<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "login"; 
 $message = "";
 $Course_ID=$_REQUEST['Course_ID'];
 $Student_ID=$_REQUEST['Student_ID'];
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


$sql = "INSERT INTO enrollment (Student_ID, Course_ID)
VALUES ('$Student_ID', '$Course_ID')";
 
$connect->exec($sql);
echo "<script>alert('Student Added to Class Successfully!'); window.location='../teachroster.php'</script>";


 }
    catch(PDOException $error)  
 {  
      $message = $error->getMessage(); 
      echo $error; 
 }  
 ?>  