<?php
include 'conn.php';
if (isset($_POST['add'])) {
    $dept_Id = $_POST['dept_Id'];
    $dept_code = $_POST['dept_code'];
    $dept_name = $_POST['dept_name'];
    $q = "INSERT INTO department(dept_Id,dept_code,dept_name) VALUES('$dept_Id','$dept_code','$dept_name')";
    $query = mysqli_query($con, $q);
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
<title>Department Application</title>

<body>
    <h2 class="text-center">Department Information</h2><br>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> Insert Department Details </h3>
                </div><br>
                <label for="dept_Id">Department ID</label>
                <input type="text" name="dept_Id" id="dept_Id" class="form-control" placeholder="Department ID" required><br>

                <label for="dept_code">Department Code</label>
                <input type="text" name="dept_code" id="dept_code" class="form-control" placeholder="Department Code" required><br>

                <label for="dept_name">Department Name</label> <input type="text" name="dept_name" id="dept_name" class="form-control" placeholder="Department Name" required><br><br>

                <button class="btn btn-success" type="submit" name="add">Submit</button><br>
                <button class="btn btn-danger" type="cancel">Cancel</button> <br>
            </div>
    </div>
    </form>
    <div class="text-center">
        <button class="btn btn-primary"><a class="text-white textcenter" href="http://localhost:8080/Student Records System/project/view.php">Display Department Details
            </a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>