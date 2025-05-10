<?php
$servername = "localhost";

$username = "root";
$password = "";
$dbname = "chair";
// $username = "root";
// $password = "";
// $dbname = "earning";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
function getArray($sql){
  global $conn;
  return mysqli_fetch_assoc(mysqli_query($conn, $sql));
}
$product = getArray("SELECT * FROM product WHERE id = 1");
$section_1 = getArray("SELECT * FROM section_1 WHERE id = 1");
$section_2 = getArray("SELECT * FROM section_2 WHERE id = 1");
$system_set = getArray("SELECT * FROM system_set WHERE id = 1");
$slider = getArray("SELECT * FROM slider WHERE id = 1");
?>