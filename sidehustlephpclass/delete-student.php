<?php
     require 'header.php';

     $id = $_GET['id']; //getting the id
     $delete = mysqli_query($db_connect, "DELETE FROM students WHERE id = '$id' ");  // using the id, we query the database

     if ($delete) {
       header("Location: all-students.php");
     }
?>