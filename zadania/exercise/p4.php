<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name3 = $_POST['name3'];
$surname3 = $_POST['surname3'];


if(empty($name3)) {
    echo "name puste<br>";
} elseif (strlen($name3) < 3) {
    echo "name krutsze niż 3 znaki<br>";
} else {
    echo "name ok<br>";
}

if (empty($surname3)) {
    echo "puste pole surname<br>";
} elseif (strlen($surname3) < 3) {
    echo "surname krótsze niż 3 znaki<br>";}
 else {
    echo "surname ok<br>";
}


if(isset($_POST['terms']) == "yes"){
    echo "terms = 1";
}else{
    echo "terms = 0";
}
