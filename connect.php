<?php

$con = new mysqli('localhost', 'root', '', 'studentregistrationcurd');

if (!$con) {
    die(mysqli_error($con));
}
