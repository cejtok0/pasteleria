<?php
include "db.php";

$cliente  = $_POST['cliente'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipo = $_POST['tipo_pastel'];

$conn->query("INSERT INTO clientes (nombre, telefono) VALUES ('$cliente', '$telefono')");
$cliente_id = $conn->insert_id;

$conn->query("
INSERT INTO pedidos (cliente_id, direccion, tipo_pastel_id)
VALUES ($cliente_id, '$direccion', $tipo)
");

header("Location: index.php");
