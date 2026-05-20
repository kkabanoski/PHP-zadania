<?php

// $polaczenie = mysqli_connect("localhost", "root", "", "php_practice");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

 if(isset($_POST['terms']) == "yes"){
     $terms = 1;
 }else{
     $terms = 0;
 }

// $sql = "INSERT INTO users VALUES (NULL, '$first_name', $last_name)";
echo "<h1>First name: $first_name</h1>";
echo "<h1>Last name: $last_name</h1>";
echo "<p>Agree?: $terms</p>";
// if($zgoda = 1){
//     mysqli_query($polaczenie, $sql);
//     header("Location: /zadania/index.php");
// }