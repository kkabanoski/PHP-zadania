<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            width: 100vw;
            margin: 0px;
            align-items: center;
            justify-content: center;
            background-color: blue;
        }
        fieldset {
            display: flex;
            border: 2px solid white;
            margin: 10px 0px;
        }
        button, input[type="number"]{
            background-color: blue;
            border: 2px solid white;
            color: white;
        }
        legend, label {
            color: white;
        }
    </style>
</head>
<body>
    
<?php 

$conn = mysqli_connect("localhost","root","","projekcik12");

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edytuj'])){
        $wiek = $_POST['wiek'];
        $id = $_POST['id'];
        $sql2 = "UPDATE users SET wiek = $wiek where id = $id";
        mysqli_query($conn, $sql2);
        header("Location: index.php");
        exit;
    };
    
    $user_id = $_POST['user_id'];
    
    $sql = "SELECT * FROM users WHERE id = $user_id";
    
    $result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)){

    $imie = $row['imie'];
    $wiek = $row['wiek'];
    $id = $row['id'];

    echo "
        <form action='./modifyuser.php' method='POST'>
        <fieldset>
            <legend>$imie</legend>
            <label>
            Podaj wartość wieku do zmiany
            <input type='number' value='$wiek' name='wiek' id='wiek' plaecholder='Podaj wiek do zmiany'>
            <input type='hidden' name='id' id='id' value=$id>
            </label>
        </fieldset>
        <button name= 'edytuj'>Edytuj</button>
        </form>
    
    ";

}

?>


</body>
</html>