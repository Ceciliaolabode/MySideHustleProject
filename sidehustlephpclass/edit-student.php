<!-- Editing is the updating part of the CRUD -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Firstly, lets add our link to the all student -->
    <a href="all-students.php"> All Students</a>
    <?php
         include 'header.php';
        //  To get our data, we first query the database
        $id = $_GET['id'];

        $student = mysqli_query($db_connect, "SELECT * FROM students WHERE id = '$id' ");

        if (!$student) {
           exit('Student not found');
        }

        $student_details = mysqli_fetch_assoc($student);
    ?>
    <h2>Edit Student</h2>
    <form action="process.php" method="post">

        <label for="">Name:</label>
        <input type="text" name="student_name" value="<?php $student_details['name']?>"> <br> <br>

        <label for="">Age:</label>
        <input type="text" name="student_age"> <br> <br>

        <label for="">Gender</label>
        <select name="student_gender">
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br><br>
        <input type="submit" value="Save" name="save_student"> <br> <br>
    </form> 
    </body>
    </html>