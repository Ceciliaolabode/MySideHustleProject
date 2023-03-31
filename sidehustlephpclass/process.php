<!-- // this file will process all our php requests or alll our form requests -->
<?php
     require "header.php";
     // isset is a php input function that checks if a particular button is being clicked or if a particular action is being taken
     if (isset($_POST["save_student"])) { // checking if the submit button has been clicked
        $name = $_POST["student_name"];
        $age = $_POST["student_age"];
        $gender = $_POST["student_gender"];

        $insert_data = mysqli_query($db_connect, "INSERT INTO students( name, age, gender)VALUES( ' $name', ' $age', ' $gender')");

        if ($insert_data) {
           //Header is a php function that we can call, it redirects a user to a particular location or page.
           header("Location: all-students.php");
        }
     }
?>
