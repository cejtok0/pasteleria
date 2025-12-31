<?php include "db.php"; ?>

<h2>Nuevo Pedido</h2>

<form action="guardar_pedido.php" method="post">
    Cliente: <input type="text" name="cliente" required><br><br>
    Teléfono: <input type="text" name="telefono"><br><br>
    Dirección: <input type="text" name="direccion" required><br><br>

    Tipo de Pastel:
    <select name="tipo_pastel">
        <?php
        $tipos = $conn->query("SELECT * FROM tipos_pastel");
        while ($t = $tipos->fetch_assoc()) {
            echo "<option value='{$t['id']}'>{$t['nombre']}</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Guardar Pedido</button>
</form>
