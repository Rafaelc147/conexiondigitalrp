<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios - Digital RP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            background: #ffffff;
            padding: 40px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            border-radius: 12px;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 25px;
        }
        .product-card {
            border: none;
            padding: 20px;
            text-align: center;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.08);
        }
        .product-card img {
            max-width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .product-card h4 {
            margin: 10px 0;
            font-size: 1.15rem;
            color: #343a40;
            font-weight: 700;
        }
        .product-price {
            color: #dc3545;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .add-to-cart {
            background: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .add-to-cart:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }
        .header-link {
            position: absolute;
            top: 25px;
            right: 25px;
            text-decoration: none;
            background-color: #343a40;
            color: white;
            padding: 12px 18px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        .header-link:hover {
            background-color: #23272b;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.8rem;
            color: #343a40;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="header-link">Volver a la Página Principal</a>
        <h1>Varios</h1>
        <div class="products-grid">
            <?php
            include 'conexion.php';
            $sql = "SELECT * FROM productos WHERE categoria = 'Varios'";
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
