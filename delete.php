<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $age = $row['age'];
    $email = $row['email'];
    $password = $row['password'];
    $confirmpassword = $row['confirmpassword'];

    $sql = "delete from `studentregcurd` where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Delete successfull";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
