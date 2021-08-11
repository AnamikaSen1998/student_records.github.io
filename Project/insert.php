<?php
include 'conn.php';
if(isset($_POST['done'])){
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    // $dept_name=$_POST['dept_name'];
    $q="INSERT INTO student(roll,name,dept_Id) VALUES('$roll','$name','$_POST[dept_Id]')";
    $query=mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<title>Student Application</title>
<body>
    <h2 class="text-center">Student Records</h2><br>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> Insert Operation </h3>
                </div><br>
                    <label for="roll">Roll Number</label>
                    <input type="number" name="roll" class="form-control" id="roll" placeholder="Roll number" required><br>

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control"placeholder="Full Name" required><br>
            
                    <!-- <label for="dept_code">Department Code</label>
                    <input type="text" name="dept_code" id="dept_code" class="form-control" placeholder="Department" required><br><br>   -->
                    
                    <?php
                            include('conn.php');

                        $result = $con -> query("SELECT dept_Id,dept_name FROM student_records.department") ;

                            echo "Select Department: ";
                        ?> 
                            <select name=dept_Id>
                        <?php
                            while ($row = $result -> fetch_assoc()) 
                            {
                            echo "<option value='" . $row['deptID']. "'>" . $row['dept_name'] . "</option>";
                            }
                            echo "</select>";

                        ?> 
                        <br>
                    <button class="btn btn-success" type="submit" name="done">Submit</button><br>
                    <button class="btn btn-danger" type="cancel">Cancel</button> <br>
            </div>
        </div>     
    </form>
    <div class="text-center">
        <button class="btn btn-primary"><a class="text-white text-center" href="http://localhost:8080/Student Records System/project/display.php">Display Students Records</a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
