
<?php
 include 'conn.php';
 if(isset($_POST['update'])){
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $dept_code=$_POST['dept_code'];
    $q="UPDATE student SET roll='$roll',name='$name',dept_code='$dept_code' WHERE roll='$_GET[roll]'";
    $query=mysqli_query($con,$q);
    header('location:display.php');
 }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>

<title>Student Application</title>
<body>
    <h2 class="text-center">Student Records</h2>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> Update Operation </h3>
                </div><br>
                    <label for="roll">Roll Number</label>
                    <input type="number" name="roll" class="form-control" id="roll" placeholder="Roll number" required><br>

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control"placeholder="Full Name" required><br>
            
                    <label for="dept_code">Department Code</label>
                    <input type="text" name="dept_code" id="dept_code" class="form-control" placeholder="Department" required><br><br>  
                    
                    <button class="btn btn-success" type="submit" name="update">Submit</button><br>
                    <button class="btn btn-danger" type="cancel">Cancel</button> <br>
            </div>
    </form>
    </div>
    <div class="text-center">
        <button class="btn btn-danger"><a class="text-white text-center" href="http://localhost:8080/Student Records System/project/display.php">Go Back </a></button>
        <button class="btn btn-primary"><a class="text-white text-center" href="http://127.0.0.1:5501/index.html">Go to Homepage </a></button>
    </div>
    </body> 
</html>