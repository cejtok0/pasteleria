<?php
include "db.php";

$id = $_GET['id'];
$estado = $_GET['estado'];

$conn->query("UPDATE pedidos SET estado='$estado' WHERE id=$id");

header("Location: index.php");
