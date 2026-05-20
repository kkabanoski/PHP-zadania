
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost","root","","php_practice");

$id = $_POST['user_id'];
$sql = "DELETE FROM users WHERE id = $id";

mysqli_query($conn, $sql);

echo "<h1>usunięto użtykownika <sup>id:$id</sup> i jego wszystkie wpisy</h1>";
