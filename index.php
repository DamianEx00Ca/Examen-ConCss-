<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$db = 'taqueriarre';
$user = 'root';
$password = '';

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar los elementos de la tabla
$sql = "SELECT * FROM taqueria";
$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Elementos de la tabla Taqueria</title>
    <style>table {
            margin-left: auto;
            margin-right: auto;
        }
         </style>
    <link rel="stylesheet" href="style1.css">
</head>
<body> 
    <div class="IndexFondo">
    <div class="comic-sans">
    
    <h1>Elementos de la tabla Taqueria</h1>
    <div class=".table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tacos</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Proporción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Tacos']; ?></td>
                    <td><?php echo $row['Descripcion']; ?></td>
                    <td><?php echo $row['Precio']; ?></td>
                    <td><?php echo $row['Proporcion']; ?></td>
                    <td><?php echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a>";?>
                <?php echo " | ";?>
               <?php echo "<a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a>";?>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <div class=".table-container">

     <a href="agregar_menu.php">Agregar Comida</a>
 </div class="IndexFondo">
 </div class="comic-sans">

    <div class="footer">
    <footer>
        Este es mi pie de página.
    </footer>
    </div class="footer">
    

</body>
</html>


