<?php
  $host = "localhost";  
  $username = "root";  
  $password = "";  
  $database = "login";

  $conn = new mysqli($host, 
    $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " 
            . $conn->connect_error);
    }
    $addstudents = "SELECT * FROM `user`";
    $addstudentsquery = mysqli_query($conn,$addstudents);
    $addcourses = "SELECT * FROM `classes`";
    $addcoursesquery = mysqli_query($conn,$addcourses);
    if(isset($_POST['submit']))
    {
        $student = mysqli_real_escape_string($conn,$_POST['Student_ID']);
         
        $classes = mysqli_real_escape_string($conn,$_POST['Course_ID']); 
         
        $sql_insert = 
        "INSERT INTO enrollment (Student_ID, Course_ID)
        VALUES ('$student', '$classes')";
           
  
          if(mysqli_query($conn,$sql_insert))
        {
            echo '<script>alert("Product added successfully")</script>';
        }else{
            echo "ERROR:$sql_insert. " 
                . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<h3>Add Student</h3>
<input class="datalist" list="browsers" placeholder="Student Name" name="Student_ID" id="Student_ID">

          <form method="POST">
                <datalist id="browsers">
                    <select name = "Student_ID">
                        <?php
                    while ($students = mysqli_fetch_array(
                        $addstudentsquery,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $students["id"];
                        ?>">
                        <?php echo $students["firstName"];
                        ?>
                    
                    </option>
                    <?php
                    endwhile;
                    ?> 
                    </select>
                </datalist>

                <input class="datalist1" list="browsers1" placeholder="Class Name" name="Course_ID" id="Course_ID">
                <datalist id="browsers1">
                <select name = "Course_ID">
                <?php
                    while ($courses = mysqli_fetch_array(
                        $addcoursesquery,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $courses["ID"];
                        ?>">
                        <?php echo $courses["ClassName"];
                        ?>
                    
                    </option>
                    <?php
                    endwhile;
                    ?> 
                </select>
                </datalist>
                <input type="submit" value="submit" name="submit">


          </form>