<link rel="stylesheet" href="style1.css">
<?php
include("conexion.php");
?>
<?php
$id = $_POST['id'];
$Tacos = $_POST['Tacos'];
$Descripcion = $_POST['Descripcion'];
$Precio = $_POST['Precio'];
$Proporcion = $_POST['Proporcion'];

$query = "UPDATE taqueria SET Tacos = '$Tacos', Descripcion = '$Descripcion', Precio = '$Precio', Proporcion = '$Proporcion' ";
$result = mysqli_query($conexion, $query);

if ($result) {
    echo "Cotización actualizada correctamente.";
} else {
    echo "Error al actualizar cotización: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
<br>
<button onclick="window.location.href='index.php'">Regresar a la lista de cotizaciones</button>