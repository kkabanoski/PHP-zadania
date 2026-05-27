<?php

$conn = mysqli_connect("localhost", "root", "", "php_przyklad");

$nazwap = $_POST['nazwap'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$kategoria = $_POST['kategoria'];

$sql = "INSERT INTO produkty (nazwa, opis, cena, kategoria) VALUES ('$nazwap', '$opis', '$cena', '$kategoria')";

mysqli_query($conn, $sql);
