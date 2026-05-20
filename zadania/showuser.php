<?php
$conn = mysqli_connect("localhost","root","","php_practice");
$user_id = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

    $imie = $row['first_name'];

    // znaczy to że pierwsze ciupki to gdy będzie true a drugie to gdy bedzie false

    echo "<div>
    
        <h3>Imie użytkownika: $imie<sup>ID: $user_id</sup></h3>
        <label for='zgoda'>
            Czy użytkownik wyraził zgode
            <input type='text' disabled id='zgoda' value=$zgoda>
        </label>
    </div>
    ";
}