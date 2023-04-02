<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'backend');

$Email = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from register where Email_ID='$Email' and  Password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION["email"] = $Email;
    header('location:homepage.php');
} else {
    header('location:login.php');
}