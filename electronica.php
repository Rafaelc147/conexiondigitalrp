<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrónica - Digital RP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: auto; background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .products-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
        .product-card { border: 1px solid #ddd; padding: 15px; text-align: center; }
        .product-card img { max-width: 100%; height: auto; }
        .product-card h4 { margin: 10px 0; }
        .product-price { color: #888; }
        .add-to-cart { background-color: #28a745; color: white; padding: 10px 15px; border: none; cursor: pointer; }
        .header-link { position: absolute; top: 20px; right: 20px; text-decoration: none; background-color: #007bff; color: white; padding: 10px 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="header-link">Volver a la Página Principal</a>
        <h1>Electrónica</h1>
        <div class="products-grid">
            <?php
            include 'conexion.php';
            $sql = "SELECT * FROM productos WHERE categoria = 'Electrónica'";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                while ($p = $resultado->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<img src='{$p['imagen_url']}' alt='{$p['nombre']}'>";
                    echo "<h4>{$p['nombre']}</h4>";
                    echo "<p class='product-price'>$" . number_format($p['precio_venta'], 0, ',', '.') . "</p>";
                    echo "<button class='add-to-cart'>Agregar al carrito</button>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay productos en esta categoría.</p>";
            }
            $conexion->close();
            ?>
        </div>
    </div>
</body>
</html>
