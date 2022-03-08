
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scientific_journal";

$conn = @mysqli_connect($servername, $username, $password,$dbname);
mysqli_query($conn,"SET NAMES UTF8");
mysqli_set_charset($conn,'utf8');
mysqli_query($conn,"SET CHARACTER SET UTF8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
?>
