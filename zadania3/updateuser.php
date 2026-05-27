<?php

$conn = mysqli_connect("localhost", "root", "", "php_przyklad");

$id = $_POST['id'];
$nazwa = $_POST['nazwa'];
$email = $_POST['email'];

$sql = "UPDATE uzytkownicy SET nazwa = '$nazwa' , email = '$email' WHERE id = $id";

mysqli_query($conn, $sql);
header("Location: index.php");