<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "login"; 
 $message = "";
 $ID=$_POST['ID'];
 $ClassName=$_POST['ClassName'];
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


$sql2 = "INSERT INTO classes (ID, ClassName)
VALUES ('$ID', '$ClassName')";
 
$connect->exec($sql2);
echo "<script>alert('Class created successfully!'); window.location='../teachroster.php'</script>";


 }
    catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  