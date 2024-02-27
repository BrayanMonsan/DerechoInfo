<?php
$servername = "localhost";
$username = "brayan";
$password = "DESDE2009Brayan2407bsfm";
$dbname = "derechoinfo";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
