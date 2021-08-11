<?php
    include 'conn.php';
    $dept_Id=$_GET['dept_Id'];
    $q="DELETE FROM department WHERE dept_Id=$dept_Id";
    mysqli_query($con,$q);
    header('location:view.php');
?>