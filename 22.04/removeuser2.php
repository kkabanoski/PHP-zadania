<?php
$polaczenie = mysqli_connect("localhost","root","","projekcik12");

$id = $_POST['user_id'];
$sql = "DELETE FROM users where id = $id";

mysqli_query($polaczenie, $sql);

header("Location: index.php");