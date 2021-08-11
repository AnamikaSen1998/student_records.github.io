<?php
include 'conn.php';
if(isset($_POST['add'])){
    $dept_Id=$_POST['dept_Id'];
    $dept_code=$_POST['dept_code'];
    $dept_name=$_POST['dept_name'];
    $q="SELECT * FROM department";
    $query=mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<title>Department Application</title>
<body>
<div class="container">
    <div class="col-lg-12"><br><br>
        <h1 class="text-warning text-center "> DEPARTMENT DETAILS </h1><br>
        <table class="table table-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
            <th>Department ID</th>
            <th>Department Code</th>
            <th>Department Name</th>
            <th>Deletion</th>
            <th>Updatation</th>
        </tr>

        <?php
            include 'conn.php';
            $q="SELECT * FROM department";
            $query=mysqli_query($con,$q);
            while($res=mysqli_fetch_array($query)){
            
        ?>
        <tr class="text-center">
            <td><?php echo $res['dept_Id'];?></td>
            <td><?php echo $res['dept_code'];?></td>
            <td><?php echo $res['dept_name'];?></td>
            <td><button class="btn-danger btn"><a href="remove_dept.php?dept_Id=<?php echo $res['dept_Id'];?>"class="text-white">Delete</a></button></td>
            <td><button class="btn-success btn"><a href="update_dept.php?dept_Id=<?php echo $res['dept_Id'];?>"class="text-white">Update</a></button></td>
        </tr>
       <?php
            }
            ?>
     </table>
    </div>
</div>         
<div class="text-center">
        <button class="btn btn-danger"><a class="text-white text-center" href="http://localhost:8080/Student Records System/project/add.php">Go Back </a></button>
        <button class="btn btn-primary"><a class="text-white text-center" href="http://127.0.0.1:5501/index.html">Go to Homepage </a></button>
    </div>
</body>
</html>