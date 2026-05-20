<style>
    body {
        display: flex;  


        flex-direction: column;
        gap: 20px;
        height: 97vh;
        width: 50vw;
    }
    table,td,tr,th {
        align-items: center;
        justify-content: center;
        border: 1px black solid;
        border-collapse: collapse;
    }
</style>

<body>
                        <table>
                                <tr>
        <th>id</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>email</th>
        <th>student_index</th>
        <th>data_utworzenia</th>
    </tr>
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost","root","","php_practice");

$sql = "SELECT * FROM users";

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
                } ?>
                </table>
                       <table>
                                <tr>
        <th>id_wpisu</th>
        <th>id_użytkownika</th>
        <th>tytuł</th>
        <th>opis</th>
        <th>temat</th>
        <th>termin</th>
        <th>status</th>
    </tr>
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost","root","","php_practice");

$sql = "SELECT * FROM exercises";

                $wynik = mysqli_query($conn, $sql);

                while ($wiersz = mysqli_fetch_assoc($wynik)) {
                    $id = $wiersz['id'];
                    $user_id= $wiersz['user_id'];
                    $title = $wiersz['title'];
                    $description = $wiersz['description'];
                    $subject = $wiersz['subject'];
                    $due_date = $wiersz['due_date'];
                    $status = $wiersz['status'];
                    echo "
                


    <tr>
        <td>$id</td>
        <td>$user_id</td>
        <td>$title</td>
        <td>$description</td>
        <td>$subject</td>
        <td>$due_date</td>
        <td>$status</td>
    </tr>

";
                } ?>
                </table>
</body>
