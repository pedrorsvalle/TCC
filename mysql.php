<?php
$servername = "localhost";
$username = "id20703063_pedro";
$password = "a<sDNEEC=*Jx66^";
$dbname = "id20703063_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
