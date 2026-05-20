<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="removeuser2.php" method="POST">
    <input type="number" name="user_id" placeholder="Podaj Id użytkownika do usunięcia">
    <button>usuń użytkownika o ID</button>

</form>

<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "projekcik12");
    
    $sql = "SELECT * FROM users";

    $wynik = mysqli_query($polaczenie, $sql);

    while($wiersz = mysqli_fetch_assoc($wynik)){
        $imie = $wiersz['imie'];
        $id = $wiersz['id'];
        // $wiek = $wiersz['wiek'];
        // $zgoda = $wiersz['zgoda'];
    // echo "<div class='wyswietl'> <div class='split'><h1> $imie </h1><h2>$id</h2></div><div class='split'><h1>$wiek</h1><h2>$zgoda</h2></div></div>";
    echo "
        <li>
        <h2>$imie</h2>
        <form action='removeuser.php' method='POST'>
        <input type='hidden' value=$id name='id'>
        <button>Usuń</button>
        </form>
        </li>";
    
    }
    
?>






    <!-- <form action="process.php" method="POST">

        <div>
            <label for="imie">Imie</label>
            <input type="text" id="imie" name="imie">
        </div>



        <div> 
            <label for="wiek">wiek</label>
            <input type="number" id="wiek" name="wiek">
        </div>

        
        <div>
            <label for="plec">Płeć</label>
            <select name="plec" id="plec">
                <option value="kobieta">Kobieta</option>
                <option value="mezczyzna">Mężczyzna</option>
            </select>
        </div>

        <div class="checkbox">
            <input type="checkbox" id="zgoda" name="zgoda" value="tak">
            <label for="zgoda">Akceptuję regulamin</label>
        </div>

        <button>Wyślij</button>

    </form> -->

</body>
</html>