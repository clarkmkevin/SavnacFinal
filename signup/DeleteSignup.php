<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "login"; 
 $message = "";
 $UNIQUE_ID=$_REQUEST['UNIQUE_ID'];
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  


$sql = "DELETE FROM enrollment WHERE UNIQUE_ID = $UNIQUE_ID"; 
$connect->exec($sql);
echo "<script>alert('Student has been removed from the class successfully!'); window.location='../teachroster.php'</script>";


 }
    catch(PDOException $error)  
 {  
      $message = $error->getMessage(); 
      echo $error; 
 }  
 ?>  