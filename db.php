<?php
$host = "sql306.infinityfree.com";
$user = "if0_40796311";
$pass = "misifu31415";
$db   = "if0_40796311_pasteleria";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
