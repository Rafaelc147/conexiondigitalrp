<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrónica - Digital RP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .container {
            max-width: 1200px;
            margin: auto;
            background: white;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        .product-card {
            border: 1px solid #e0e0e0;
            padding: 20px;
            text-align: center;
            background: #fff;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.08);
        }
        .product-card img {
            max-width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        .product-card h4 {
            margin: 15px 0 10px;
            font-size: 1.2rem;
            color: #333;
        }
        .product-price {
            color: #007bff;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .add-to-cart {
            background-color: #007bff;
            color: white;
            padding: 12px 25px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        .add-to-cart:hover {
            background-color: #0056b3;
        }
        .header-link {
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .header-link:hover {
            background-color: #218838;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
            color: #333;
        }
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
