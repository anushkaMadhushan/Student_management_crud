<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `studentregcurd`";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['name'];
$age = $row['age'];
$email = $row['email'];
$password = $row['password'];
$confirmpassword = $row['confirmpassword'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql = "update  `studentregcurd`set id=$id,name='$name',age=$age,email='$email',password='$password',confirmpassword='$confirmpassword' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data Update successfully";
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
                <input type="text" class="form-control" placeholder="Enter Your name" name="name" value="<?php echo $name; ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Enter Your age" name="age" value="<?php echo $age; ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" value="<?php echo $email; ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password" value="<?php echo $password; ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password again" name="confirmpassword" value="<?php echo $confirmpassword; ?>" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

</body>

</html>