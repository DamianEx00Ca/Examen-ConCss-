
<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
    <title>Editar Menu</title>
</head>
<body>
      <div class="container">
    <h1>Editar Menu</h1>
    <div class="table-container">

    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM taqueria WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Tacos:</label>
        <input type="text" name="Tacos" value="<?php echo $row['Tacos']; ?>" required>
        <br><br>
        <label>Descripcion:</label>
        <input type="text" name="Descripcion" value="<?php echo $row['Descripcion']; ?>" required>
        <br><br>
        <label>Precio:</label>
        <input type="number" name="Precio" step="0.01" value="<?php echo $row['Precio']; ?>" required>
        <br><br>
        <label>Proporcion:</label>
        <input type="number" name="Proporcion" value="<?php echo $row['Proporcion']; ?>" required>
        <br><br>
        <button type="submit">Actualizar cotización</button>
    </form>
</body>
</html>
