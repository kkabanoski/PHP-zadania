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
        echo 'Połączono do bazy danych';
      } else {
        echo 'nie połączono z bazą danych';
      }
      

    ?>
    <!-- 2. wyświetlanie listy użytkowników -->
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
      <input type="email" name="email" id="email" placeholder="email">
      <input type="text" name="nazwa" id="username" placeholder="nazwa">
      <input type="password" name="haslo" id="password" placeholder="haslo">
      <button>wyślij</button>
      </form>
      <form action="updateuser.php" method="POST">
          <input type="number" name="id" id="number" placeholder="ID">
      <input type="email" name="email" id="email" placeholder=" nowy email">
      <input type="text" name="nazwa" id="username" placeholder=" nowa nazwa">
      <button>wyślij</button>
      </form>
</body>
</html>