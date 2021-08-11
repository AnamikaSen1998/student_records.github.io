<?php
include 'conn.php';
if(isset($_POST['add'])){
    $dept_Id=$_POST['dept_Id'];
    $dept_code=$_POST['dept_code'];
    $dept_name=$_POST['dept_name'];
    $q="UPDATE department SET dept_Id='$dept_Id',dept_code='$dept_code',dept_name='$dept_name' WHERE dept_Id='$_GET[dept_Id]'";
    $query=mysqli_query($con,$q);
    header('location:view.php');
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
    <h2 class="text-center">Department Information</h2><br>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> Update Department Details </h3>
                </div><br>

                    <label for="dept_Id">Department ID</label>
                    <input type="text" name="dept_Id" id="dept_Id" class="form-control" placeholder="Department ID" required><br>
            
                    <label for="dept_code">Department Code</label>
                    <input type="text" name="dept_code" id="dept_code" class="form-control" placeholder="Department Code" required><br>
                    
                    <label for="dept_name">Department Name</label>
                    <input type="text" name="dept_name" id="dept_name" class="form-control" placeholder="Department Name" required><br><br>  
                    
                    <button class="btn btn-success" type="submit" name="add">Submit</button><br>
                    <button class="btn btn-danger" type="cancel">Cancel</button> <br>
            </div>
        </div>     
    </form>
    <div class="text-center">
        <button class="btn btn-danger"><a class="text-white text-center" href="http://localhost:8080/Student Records System/project/view.php">Go Back </a></button>
        <button class="btn btn-primary"><a class="text-white text-center" href="http://127.0.0.1:5501/index.html">Go to Homepage </a></button>
    </div>
    </body>
</html>
