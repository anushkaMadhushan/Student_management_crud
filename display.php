<?php
include 'connect.php';
include 'delete.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Passwrod</th>
                    <th scope="col">Confirm Passwrod</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from `studentregcurd`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id =  $row['id'];
                        $name =  $row['name'];
                        $age = $row['age'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $confirmpassword = $row['confirmpassword'];
                        echo
                        ' <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $age . '</td>
                            <td>' . $email . '</td>
                            <td>' . $password . '</td>
                            <td>' . $confirmpassword . '</td>
                            <td>
                            <button class="btn btn-primary"><a  class="text-light" href="update.php?updateid=' . $id . '">Update</a></button>
                            <button class="btn btn-danger"><a class="text-light" href=" delete.php?deleteid= ' . $id . '" >Delete</a></button>
                            </td>
                        </tr>';
                    }
                };


                ?>



            </tbody>
        </table>
    </div>

</body>

</html>