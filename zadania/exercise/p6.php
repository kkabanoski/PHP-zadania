<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$connn = mysqli_connect("localhost","root","","php_practice");

$user_id = $_POST['user_id'];
$title = $_POST['title'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$due_date = $_POST['due_date'];
$status = $_POST['status'];


$ssql = "INSERT INTO exercises VALUES (id,'$user_id', '$title', '$description','$subject','$due_date','$status')";

mysqli_query($connn,$ssql);
