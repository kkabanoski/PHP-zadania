<?php

$conn = mysqli_connect("localhost", "root", "", "php_przyklad");

$id = $_POST['id'];


mysqli_query($conn, "DELETE FROM koszyk WHERE id_uzytkownika = $id");
mysqli_query($conn, "DELETE FROM uzytkownicy WHERE id = $id");

header("Location: index.php");