<?php

$servername = "localhost:3306";
$database = "ecommerceST";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
mysqli_close($conn);



?>