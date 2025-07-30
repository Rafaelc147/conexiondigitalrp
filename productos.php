<?php
// Habilitar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conectarse a la base de datos
include 'conexion.php';

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    echo "<p>Error de conexión: " . $conexion->connect_error . "</p>";
    exit;
}

// Consultar todos los productos de la tabla
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

// Verificar si la consulta fue exitosa
if (!$resultado) {
    echo "<p>Error en la consulta: " . $conexion->error . "</p>";
    exit;
}

// Verificar si hay productos
if ($resultado->num_rows > 0) {
    while ($p = $resultado->fetch_assoc()) {
        echo "
        <div class='product-card'>
            <div class='product-image'>
                <img src='{$p['imagen_url']}' alt='{$p['nombre']}' style='width:100%; height:200px; object-fit:cover;'>
            </div>
            <div class='product-info'>
                <h4>{$p['nombre']}</h4>
                <p>{$p['descripcion']}</p>
                <p class='product-price'>$" . number_format($p['precio_venta'], 0, ',', '.') . "</p>
                <button class='add-to-cart'>Agregar al carrito</button>
            </div>
        </div>
        ";
    }
} else {
    echo "<p>No se encontraron productos en la base de datos.</p>";
}

// Cierra la conexión
$conexion->close();
?>
