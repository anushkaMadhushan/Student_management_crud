<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql = "insert into `studentregcurd`(name,age,email,password,confirmpassword) 
    values('$name','$age','$email','$password','$confirmpassword')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data insert successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Enter Your age" name="age" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password again" name="confirmpassword" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>