<link rel="stylesheet" href="style1.css">
<?php
include("conexion.php");
?>

<?php
$Tacos = $_POST['Tacos'];
$Descripcion = $_POST['Descripcion'];
$Precio = $_POST['Precio'];
$Proporcion = $_POST['Proporcion'];

$query = "INSERT INTO taqueria (Tacos, Descripcion, Precio, Proporcion) VALUES ('$Tacos','$Descripcion', '$Precio', '$Proporcion' )";
$result = mysqli_query($conexion, $query);

if ($result) {
    echo "Cotización guardada correctamente.";
} else {
    echo "Error al guardar la cotización: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

<br>
<button onclick="window.location.href='index.php'">Regresar a la lista de cotizaciones</button>
