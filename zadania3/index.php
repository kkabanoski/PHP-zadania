<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md</title>
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
    </table>
    <tr>
        <th>id</th>
      <?php 
      $sql = "SELECT * FROM uzytkownicy";
      
      $result = mysqli_query($con, $sql);
      while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $nazwa = $row['nazwa'];
        $email = $row['email'];
        
        
        echo "<div>
        





        </div>
        ";
      }
      ?>
      </tr>
            </table>
</body>
</html>