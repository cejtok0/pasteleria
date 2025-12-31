<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pedidos - Pastelería sdsdssd</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Pedidos de la Pastelería</h1>
<a href="nuevo_pedido.php">Nuevo Pedido</a>

<table border="1">
    <tr>
        <th>Cliente</th>
        <th>Dirección</th>
        <th>Pastel</th>
        <th>Estado</th>
        <th>Acción</th>
    </tr>

<?php
$sql = "
SELECT p.id, c.nombre, p.direccion, t.nombre AS pastel, p.estado
FROM pedidos p
JOIN clientes c ON p.cliente_id = c.id
JOIN tipos_pastel t ON p.tipo_pastel_id = t.id
";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['nombre']}</td>
        <td>{$row['direccion']}</td>
        <td>{$row['pastel']}</td>
        <td>{$row['estado']}</td>
        <td>
            <a href='cambiar_estado.php?id={$row['id']}&estado=preparando'>Preparar</a> |
            <a href='cambiar_estado.php?id={$row['id']}&estado=despachado'>Despachar</a>
        </td>
    </tr>";
}
?>
</table>

</body>
</html>
