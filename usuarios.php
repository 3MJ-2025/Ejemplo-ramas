<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Simulación de datos de usuarios
            $usuarios = [
                ['id' => 1, 'nombre' => 'Juan Pérez', 'correo' => 'correo@correo.com'],
            ];

            // Iterar sobre los usuarios y mostrarlos en la tabla
            foreach ($usuarios as $usuario) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($usuario['id']) . "</td>";
                echo "<td>" . htmlspecialchars($usuario['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($usuario['correo']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total de usuarios: <?php echo count($usuarios); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>