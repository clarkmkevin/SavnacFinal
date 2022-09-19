<?php  include 'connection.php';

$getclasses = $connect ->prepare ("SELECT * FROM enrollment INNER JOIN classes ON enrollment.Course_ID = classes.ID");
$getclasses ->execute();
$classes = $getclasses ->fetchAll();

$getstudents = $connect ->prepare ("SELECT * FROM enrollment INNER JOIN user ON enrollment.Student_ID = user.id");
$getstudents ->execute();
$students = $getstudents ->fetchAll();

$getuniqueID = $connect ->prepare ("SELECT * FROM enrollment
INNER JOIN classes ON enrollment.Course_ID = classes.ID INNER JOIN user ON enrollment.Student_ID = user.id");
$getuniqueID ->execute();
$uniqueID = $getuniqueID ->fetchAll();

$addstudents = $connect ->prepare ("SELECT * FROM user");
$addstudents ->execute();
$liststudents =$addstudents ->fetchAll();

$addcourses = $connect ->prepare ("SELECT * FROM classes");
$addcourses ->execute();
$listcourses =$addcourses ->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savnac</title>
    <link rel="stylesheet" href="teachroster.css">
    <script defer src="teacherroster.js"></script>
</head>
<body>
    <div class="pill-nav">
        <a href="teacherwelcom.html">Home</a>
        <a href="#news">Attendance</a>
        <a href="#contact">Polls</a>
        <a class="active" href="#about">Roster</a>
      </div>
      <div class="logo">
        <img src="logo.png" class="logo" alt="">
        <h1>Savnac</h1>
    </div>
    <h2>Current Class Rosters</h2>

    <div class="buttonmenu">
    <a  class="button" onclick="openForm()" id="button1" >Create class</a>
    <a  class="button" onclick="openForm1()" id="button2">Add Student</a>
    <a  class="button" onclick="openForm2()"id="button3">Delete Student</a>
    </div>



    <div class="modal-bg" id="modalbg">
        <div class="modal1" id="modal1">
            <h3>Create Class</h3>
          <button onclick="closeForm()" class="close-button">&times;</button>
          <form method="post" action="signup/ClassSignup.php">
              <input type="text" name = "ClassName" placeholder="Class Name">
              <input type="submit">
          </form>
          </div>



          
          <div class="modal1" id="modal2">
            <h3>Add Student</h3>
          <button onclick="closeForm()" class="close-button">&times;</button>
          <form method="post" action="signup/StudentSignUp.php">
              
                
                    <select name = "Student_ID">
                    <?php foreach ($liststudents as $Student_ID){   
                        
                        ?>
                    <option value = <?php echo $Student_ID['id']; ?>> 
                    <?php echo $Student_ID['firstName'] , " ", $Student_ID['lastName']; }?>
                    
                    </option> 
                    <option value = "1" disabled selected> Student Name </option>
                        
                        
                    </select>
                

                <select name = "Course_ID">

                    <?php foreach ($listcourses as $Course_ID){

                        ?>
                    }
                    <option value = <?php echo $Course_ID ['ID']; ?>>
                    <?php echo $Course_ID ['ClassName']; }?>
                    

                </option>
                <option value = "1" disabled selected> Class Name </option>

                </select>
             <input type="submit">


          </form>
          </div>

          <div class="modal1" id="modal3">
            <h4>Delete Student</h4>
          <button onclick="closeForm()" class="close-button">&times;</button>
          <form method="post" action="signup/DeleteSignup.php">
                   
          <select name = "UNIQUE_ID">
                    <?php foreach ($uniqueID as $enrollmentID => $key2)
                    {   
                        
                        ?>
                    <option value = <?php echo $key2['UNIQUE_ID']; ?>> 
                    <?php echo $key2['firstName'], " ", $key2['lastName'] , " in ", $key2['ClassName']; }?>
                    
                    </option> 
                    <option value = "1" disabled selected> Enrollment Options </option>
                        
                        
                    </select>
                

            
             <input type="submit">


          </form>
          </div>


    </div>
 
    <table border = "3"cellpadding ="5" cellspacing ="5">
   <tr>
       <th>Course Name</th>
       <th> Student Name</th>
</tr>
<?php foreach($classes as $class => $key)
{
    $student = $students[$class];

    ?>
    <tr>
        <td><?php echo $key['ClassName']; ?></td>
        <td><?php echo $student['firstName'], " ", $student['lastName']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>