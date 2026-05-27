<?php
$sql = "SELECT * FROM produkty WHERE dostępność = 1";
      
      $result = mysqli_query($con, $sql);
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