<?php
$nombre1 = $_POST['nombre1'];
$precio1 = $_POST['precio1'];
$nombre2 = $_POST['nombre2'];
$precio2 = $_POST['precio2'];
$nombre3 = $_POST['nombre3'];
$precio3 = $_POST['precio3'];
$suma = $precio1 + precio2 + precio3

echo "<h2>Productos</h2>";
echo "El producto $nombre1 cuesta $precio1.<br>";
echo "El producto $nombre3 cuesta $precio3.<br>";
echo "El producto $nombre3 cuesta $precio3.<br>";
echo "La suma de los precios de los productos es $suma.";
?>
