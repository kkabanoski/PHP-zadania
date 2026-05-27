<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // 1. połączenie z bazą danych
    $con = mysqli_connect("localhost", "root", "","php_przyklad");
    
    if ($con) {
        echo '1. Połączono do bazy danych';
      } else {
        echo '1. nie połączono z bazą danych';
      }
      

    ?>
    <!-- 2. wyświetlanie listy użytkowników -->
    <h1>2. wyświetlanie użytkownika</h1>
    <table>
      <tr>
        <th>id</th>
        <th>nazwa</th>
        <th>email</th>
        </tr>
      <?php 
      $sql = "SELECT * FROM uzytkownicy";
      
      $result = mysqli_query($con, $sql);
      while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $nazwa = $row['nazwa'];
        $email = $row['email'];
        
        
        echo "
        <tr>
        <td>$id</td>
        <td>$nazwa</td>
        <td>$email</td>
        </tr>




        
        ";
      }
      ?>
            </table>

      <form action="adduser.php" method="POST">
        <h1>3. Dodawanie użytkownika</h1>
      <input type="email" name="email" id="email" placeholder="email">
      <input type="text" name="nazwa" id="username" placeholder="nazwa">
      <input type="password" name="haslo" id="password" placeholder="haslo">
      <button>Dodaj</button>
      </form>
      
      <form action="updateuser.php" method="POST">
      <h1>4. aktualizowanie danych użytkownika</h1>
          <input type="number" name="id" id="number" placeholder="ID">
      <input type="email" name="email" id="email" placeholder=" nowy email">
      <input type="text" name="nazwa" id="username" placeholder=" nowa nazwa">
      <button>aktualizuj</button>
      </form>

      <form action="deleteuser.php" method="POST">
      <h1>5. usuwanie użytkownika</h1>    
      <input type="number" name="id" id="number" placeholder="ID">
      <button>Usuń</button>
      </form>
      <h1>6. dostępne produkty</h1>  
      <table>
      <tr>
        <th>id</th>
        <th>nazwa</th>
        <th>cena</th>
        </tr>
        <?php
      include("availableproducts.php");
    ?>
            </table>
      <form action="addproduct.php" method="POST">
        <h1>7. Dodawanie produktu</h1>
        <input type="text" name="nazwap" id="nazwap" placeholder="nazwa produktu">
        <input type="text" name="opis" id="opis" placeholder="opis">
        <input type="text" name="cena" id="cena" placeholder="cena">
        <input type="text" name="kategoria" id="kategoria" placeholder="kategoria">
        <button>Dodaj</button>
      </form>
      <form action="updateprice.php" method="POST">
        <h1>8. aktualizowanie ceny produktu</h1>
        <input type="text" name="idp" id="idp" placeholder="ID produktu">
        <input type="text" name="cena" id="cena" placeholder="cena">
        <button>aktualizuj</button>
      </form>

      <h1>9. produkty w koszyku</h1>  
      <form action="productsincart.php" method="POST">
        <input type="number" name="idu" id="idu" placeholder="ID użytkownika">
        <button>sprawdz</button>
      </form>
      <table>
      <tr>
        <th>id</th>
        <th>nazwa</th>
        <th>cena</th>
        </tr>
        <?php

?>
      </body>
</html>