<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'backend');


$name = $_POST['name'];
$Email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['confirmpassword'];

$s = "select * from register where Email_ID='$Email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "User Id already exists";
} else {
    $reg = "insert into register values('$name','$Email','$pass','$cpass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}