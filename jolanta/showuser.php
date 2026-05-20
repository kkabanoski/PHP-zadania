<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$conn = mysqli_connect("localhost", "root", "", "projekcik12");

$user_id = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

    $imie = $row['imie'];
    $wiek = $row['wiek'];
    
    
    $id = $row['id'];
    
    $zgoda = $row['zgoda'] ? "tak" : "nie";
    // znaczy to że pierwsze ciupki to gdy będzie true a drugie to gdy bedzie false

    echo "<div>
    
        <h3>Imie użytkownika: $imie<sup>ID: $id</sup></h3>
        <p>wiek użytkownika: $wiek</p>
        <label for='zgoda'>
            Czy użytkownik wyraził zgode
            <input type='text' disabled id='zgoda' value=$zgoda>
        </label>
    </div>
    ";
}


?>




</body>
</html>
