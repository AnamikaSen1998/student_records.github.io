<?php
 include 'conn.php';
 $roll=$_GET['roll'];
 $q="DELETE FROM student WHERE roll=$roll";
 mysqli_query($con,$q);
 header('location:display.php');
 ?>


