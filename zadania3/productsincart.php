<?php
$conn = mysqli_connect("localhost", "root", "", "php_przyklad");
$idu = $_POST['idu'];
$sql = "SELECT * FROM produkty where id = $idu";
      
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $nazwa = $row['nazwa'];
        $cena = $row['cena'];
        
        
        echo "
        <tr>
        <td>$id</td>
        <td>$nazwa</td>
        <td>$cena</td>
        </tr>




        
        ";
      }