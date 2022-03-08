

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scientific_journal";
$connn = new mysqli($servername, $username, $password,$dbname);
mysqli_query($connn,"SET NAMES UTF8");
mysqli_set_charset($connn,'utf8');
mysqli_query($connn,"SET CHARACTER SET UTF8");

if ($connn->connect_error) {
	 die("Connection failed: " . $connn->connect_error);

}
?>
