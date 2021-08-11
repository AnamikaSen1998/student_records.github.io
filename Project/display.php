<?php
include 'conn.php';
if (isset($_POST['done'])) {
    include 'conn.php';
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept_Id = $_POST['dept_Id'];
    $q = "SELECT * FROM student";
    $query = mysqli_query($con, $q);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</head>

<title>Student Application</title>

<body>
    <div class="container">
        <div class="col-lg-12"><br><br>
            <h1 class="text-warning text-center "> STUDENT DETAILS </h1><br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Department Id</th>
                    <th>Deletion</th>
                    <th>Updatation</th>
                </tr>

                <?php
                include 'conn.php';
                $q = "SELECT * FROM student";
                $query = mysqli_query($con, $q);
                while ($res = mysqli_fetch_array($query)) {

                ?>
                    <tr class="text-center">
                        <td><?php echo $res['roll']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['dept_Id']; ?></td>
                        <td><button class="btn-danger btn"><a href="delete.php?roll=<?php echo $res['roll']; ?>" class="text-white">Delete</a></button></td>
                        <td><button class="btn-success btn"><a href="update.php?roll=<?php echo $res['roll']; ?>" class="text-white">Update</a></button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-danger"><a class="text-white text-center" href="http://localhost:8080/Student Records System/project/insert.php">Go Back </a></button>
        <button class="btn btn-primary"><a class="text-white text-center" href="http://127.0.0.1:5501/index.html">Go to Homepage </a></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>