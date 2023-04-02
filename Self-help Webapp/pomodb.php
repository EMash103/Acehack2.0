<?php

session_start();
/* header('location:todo.html'); */

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'backend');


$task = $_POST['task'];

$s = "select * from todo where element='$task'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$reg = "insert into todo values('$task')";
mysqli_query($con, $reg);