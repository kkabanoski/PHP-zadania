<?php

if(isset($_GET['user_id'])){

    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM users  WHERE id = $user_id";
    
    $wynik = mysqli_query($conn, $sql);
    
    while ($wiersz = mysqli_fetch_assoc($wynik)) {
        $id = $wiersz['id'];
        $first_name = $wiersz['first_name'];
        $last_name = $wiersz['last_name'];
        $email = $wiersz['email'];
        $student_index = $wiersz['student_index'];
        $created_at = $wiersz['created_at'];
        echo "
                    
    
    
        <tr>
            <td>$id</td>
            <td>$first_name</td>
            <td>$last_name</td>
            <td>$email</td>
            <td>$student_index</td>
            <td>$created_at</td>
        </tr>
    
    ";
    }
    
    $sql2 = "SELECT * FROM exercises where id = $user_id";
    
    $wynik2 = mysqli_query($conn, $sql2);
    
    while ($wiersz = mysqli_fetch_assoc($wynik2)) {
        $id_wpis = $wiersz['id'];
        $id = $wiersz['user_id'];
        $title = $wiersz['title'];
        $description = $wiersz['description'];
        $subject = $wiersz['subject'];
        $due_date = $wiersz['due_date'];
        $status = $wiersz['status'];
        echo "
        <table>
        <hr>
        <tr>
            <td>$id</td>
            <td>$id_wpis</td>
            <td>$title</td>
            <td>$description</td>
            <td>$subject</td>
            <td>$due_date</td>
            <td>$status</td>
        </tr>
        </table>
    ";
    }

}    

?>