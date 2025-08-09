<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital RP | Gaming</title>
    <link rel="icon" type="image/png" href="imagenes/logo.png">
    <style>
        /* ESTILOS BASE (consistentes con otras páginas) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
            line-height: 1.6;
        }

        /* HEADER (consistente) */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
            position: relative;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-link {
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: inherit;
            transition: all 0.3s ease;
        }

        .logo-link:hover {
            transform: scale(1.05);
        }

        .logo h1 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo span {
            font-size: 0.9rem;
            color: #666;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
        }

        nav a:hover {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-2px);
        }

        .active {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white !important;
        }

        .cart-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white !important;
            padding: 0.7rem 1.5rem !important;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            position: relative;
        }

        .cart-count {
            background: #ff4757;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        /* Animación del carrito */
        .cart-btn .cart-count.animate {
            animation: bounce 0.5s ease;
        }

        @keyframes bounce {
            0%, 100% { transform: scale(1); }
            30% { transform: scale(1.5); }
            50% { transform: scale(0.9); }
            70% { transform: scale(1.2); }
        }

        /* HERO SECTION CON TEMA GAMING */
        .hero {
            margin-top: 150px;
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-bottom: 3px solid #00eeff;
            box-shadow: inset 0 0 50px rgba(0, 238, 255, 0.2);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=2070') center/cover no-repeat;
            opacity: 0.2;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            background: linear-gradient(45deg, #00eeff, #ff00aa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        /* PRODUCTOS GAMING (con fondo blanco pero con toques gaming) */
        .featured {
            padding: 6rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            position: relative;
            overflow: hidden;
        }

        .featured::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 10% 20%, rgba(0, 238, 255, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255, 0, 170, 0.05) 0%, transparent 20%);
            z-index: 1;
        }

        .featured-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
            position: relative;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #00eeff, #ff00aa);
            border-radius: 2px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid #eee;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            border-color: #00eeff;
        }

        .product-card {
            transition: all 0.4s ease;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: linear-gradient(45deg, #ff0066, #ff00aa);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 10;
        }

        .gaming-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, #00eeff, #0077ff);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 10;
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: #f7f9fc;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(0, 238, 255, 0.05), rgba(255, 0, 170, 0.05));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .product-card:hover .product-image::before {
            opacity: 1;
        }

        .product-image img {
            width: 80%;
            height: 80%;
            object-fit: contain;
            transition: transform 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-brand {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .product-info h4 {
            font-size: 1.25rem;
            margin-bottom: 0.8rem;
            color: #2c3e50;
            min-height: 60px;
        }

        .product-info p {
            color: #7f8c8d;
            margin-bottom: 1.2rem;
            font-size: 0.95rem;
            flex-grow: 1;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ff00aa;
            margin-bottom: 1.5rem;
            display: block;
        }

        .add-to-cart {
            background: linear-gradient(45deg, #00eeff, #ff00aa);
            color: white;
            padding: 0.9rem 1.8rem;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .add-to-cart::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
            z-index: -1;
        }

        .add-to-cart:hover::before {
            left: 100%;
        }

        .add-to-cart:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 238, 255, 0.4);
        }

        /* CARRITO CON TEMA GAMING */
        .cart-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            backdrop-filter: blur(5px);
        }

        .cart-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 20px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            animation: slideIn 0.4s ease-out;
            border: 2px solid #00eeff;
            box-shadow: 0 0 30px rgba(0, 238, 255, 0.3);
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }

        .cart-header h3 {
            color: #ff00aa;
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
        }

        .close-cart {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #ff00aa;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .cart-total {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            margin: 2rem 0;
            color: #ff00aa;
        }

        .checkout-btn {
            background: linear-gradient(45deg, #00eeff, #ff00aa);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .checkout-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
            z-index: -1;
        }

        .checkout-btn:hover::before {
            left: 100%;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 238, 255, 0.4);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #25d366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* FOOTER (consistente) */
        footer {
            background: #333;
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #667eea;
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeInUp 0.8s ease-out;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                height: auto;
                padding: 1rem;
            }

            nav ul {
                flex-direction: column;
                gap: 1rem;
                margin-top: 1rem;
            }

            .hero {
                margin-top: 120px;
                padding: 2rem 1rem;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .featured {
                padding: 130px 1rem 2rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
        .search-container {
            display: flex;
            justify-content: center;
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.95);
        }

        #search-bar {
            width: 50%;
            padding: 0.8rem 1.5rem;
            border-radius: 25px 0 0 25px;
            border: 1px solid #ddd;
            border-right: none;
            font-size: 1rem;
        }

        .search-btn {
            padding: 0.8rem 1.5rem;
            border-radius: 0 25px 25px 0;
            border: 1px solid #ddd;
            background: #f8f8f8;
            cursor: pointer;
            font-size: 1rem;
        }
        /* NUEVOS ESTILOS PARA EL CARRUSEL */
        .carousel-container {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: #f7f9fc;
        }

        .carousel-slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .carousel-slide {
            min-width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-slide img {
            max-width: 80%;
            max-height: 90%;
            object-fit: contain;
            padding: 10px;
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            z-index: 10;
        }

        .carousel-btn {
            background: rgba(102, 126, 234, 0.7);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            margin: 0 10px;
        }

        .carousel-btn:hover {
            background: rgba(118, 75, 162, 0.9);
            transform: scale(1.1);
        }

        .carousel-dots {
            position: absolute;
            bottom: 10px;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 10;
        }

        .carousel-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(102, 126, 234, 0.5);
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-dot.active {
            background: #667eea;
            transform: scale(1.2);
        }

        .carousel-thumbnails {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            gap: 5px;
        }

        .carousel-thumb {
            width: 50px;
            height: 50px;
            border: 2px solid transparent;
            border-radius: 5px;
            overflow: hidden;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .carousel-thumb:hover, .carousel-thumb.active {
            opacity: 1;
            border-color: #667eea;
        }

        .carousel-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <a href="index.html" style="text-decoration: none; color: inherit;">
                    <h1>DIGITAL RP</h1>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="componentes.html">Componentes</a></li>
                    <li><a href="audio.html">Audio</a></li>
                    <li><a href="cableado.html">Cableado</a></li>
                    <li><a href="gaming.html" class="active">Gaming</a></li>
                    <li><a href="electronica.html">Electrónica</a></li>
                    <li><a href="varios.html">Varios</a></li>
                </ul>
            </nav>
            <a href="#" class="cart-btn" onclick="toggleCart()">
                🛒 Carrito <span class="cart-count" id="cart-count">0</span>
            </a>
        </div>
        <div class="search-container">
            <input type="text" id="search-bar" placeholder="Buscar productos...">
            <button class="search-btn">🔍</button>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Mundo Gaming</h1>
            <p>Descubre los productos más vendidos para llevar tu experiencia de juego al siguiente nivel</p>
        </div>
    </section>

    <section class="featured">
        <div class="featured-container">
            <h2 class="section-title">Productos Gaming Más Vendidos</h2>
            <div class="products-grid" id="gaming-products">
                <!-- Productos se cargarán aquí -->
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/573001234567?text=Hola,%20estoy%20interesado%20en%20sus%20productos%20gaming" class="whatsapp-float" target="_blank">
        📱
    </a>

    <!-- Cart Modal -->
    <div class="cart-modal" id="cart-modal">
        <div class="cart-content">
            <div class="cart-header">
                <h3>Tu Carrito Gaming</h3>
                <button class="close-cart" onclick="toggleCart()">×</button>
            </div>
            <div id="cart-items">
                <!-- Items del carrito -->
            </div>
            <div class="cart-total">
                Total: $<span id="cart-total">0</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">
                <span>🎮</span> Proceder al Pago
            </button>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Términos y Condiciones</a>
                <a href="#">Política de Privacidad</a>
                <a href="#">Contacto</a>
                <a href="#">Soporte</a>
            </div>
            <p>&copy; 2025 Digital RP - Todos los derechos reservados</p>
            <p>Visítanos en: <strong>digitalrp.store</strong></p>
            <p>📱 WhatsApp: +57 300 123 4567 | ✉️ info@digitalrp.store</p>
        </div>
    </footer>

    <script>
        // Productos gaming más vendidos actualmente
        const productosGaming = [
            {
                id: 1,
                nombre: "PlayStation 5",
                precio: 2200000,
                imagenes: ["imagenes/ps5.jpg"],
                descripcion: "Consola de última generación con SSD ultrarrápido",
                marca: "SONY",
                nuevo: true
            },
            {
                id: 2,
                nombre: "Xbox Series X",
                precio: 2100000,
                imagenes: ["imagenes/xbox.jpg"],
                descripcion: "Potente consola con compatibilidad con 4K y 120 FPS",
                marca: "MICROSOFT"
            },
            {
                id: 3,
                nombre: "Nintendo Switch OLED",
                precio: 1500000,
                imagenes: ["imagenes/switch.jpg"],
                descripcion: "Consola híbrida con pantalla OLED de 7 pulgadas",
                marca: "NINTENDO"
            },
            {
                id: 4,
                nombre: "RTX 4090",
                precio: 8500000,
                imagenes: ["imagenes/rtx4090.jpg"],
                descripcion: "Tarjeta gráfica más potente del mercado para gaming en 4K",
                marca: "NVIDIA",
                nuevo: true
            },
            {
                id: 5,
                nombre: "Monitor Gamer 240Hz",
                precio: 1800000,
                imagenes: ["imagenes/monitor.jpg"],
                descripcion: "Monitor curvo de 27 pulgadas con 240Hz y 1ms de respuesta",
                marca: "SAMSUNG"
            },
            {
                id: 6,
                nombre: "Teclado Mecánico RGB",
                precio: 450000,
                imagenes: ["imagenes/teclado.jpg"],
                descripcion: "Teclado mecánico con switches Cherry MX y RGB personalizable",
                marca: "RAZER"
            },
            {
                id: 7,
                nombre: "Mouse Gamer Inalámbrico",
                precio: 350000,
                imagenes: ["imagenes/mouse.jpg"],
                descripcion: "Mouse inalámbrico con sensor de 25K DPI y 70h de batería",
                marca: "LOGITECH"
            },
            {
                id: 8,
                nombre: "Auriculares 7.1 Surround",
                precio: 550000,
                imagenes: ["imagenes/auriculares.jpg"],
                descripcion: "Auriculares con sonido envolvente 7.1 y micrófono retráctil",
                marca: "STEELSERIES"
            },
            {
                id: 9,
                nombre: "Silla Gamer Ergonómica",
                precio: 1200000,
                imagenes: ["imagenes/silla.jpg"],
                descripcion: "Silla ergonómica con soporte lumbar y reposacabezas ajustable",
                marca: "COOLER MASTER"
            },
            {
                id: 10,
                nombre: "Volante Gamer Force Feedback",
                precio: 1800000,
                imagenes: ["imagenes/volante.jpg"],
                descripcion: "Volante con force feedback 900° y pedales metálicos",
                marca: "LOGITECH"
            }
        ];

        // Carrito de compras
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Cargar productos gaming
        function cargarProductosGaming() {
            const container = document.getElementById('gaming-products');
            container.innerHTML = '';

            productosGaming.forEach(producto => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card animate-fade-in';

                let badge = '';
                if (producto.nuevo) {
                    badge = '<div class="product-badge">NUEVO</div>';
                }

                productCard.innerHTML = `
                    ${badge}
                    <div class="gaming-tag">GAMING</div>
                    <div class="product-image">
                        ${createCarouselHTML(producto.imagenes, producto.id)}
                    </div>
                    <div class="product-info">
                        <div class="product-brand">${producto.marca}</div>
                        <h4>${producto.nombre}</h4>
                        <p>${producto.descripcion}</p>
                        <span class="product-price">$${producto.precio.toLocaleString()}</span>
                        <button class="add-to-cart" onclick="agregarAlCarrito(${producto.id})">
                            <span>🛒</span> COMPRAR
                        </button>
                    </div>
                `;
                container.appendChild(productCard);
                setTimeout(() => initCarousel(`carousel-${producto.id}`), 100);
            });
        }

        // Función para animar el carrito
        function animarCarrito() {
            const cartCount = document.getElementById('cart-count');
            cartCount.classList.add('animate');

            // Remover la clase después de la animación
            setTimeout(() => {
                cartCount.classList.remove('animate');
            }, 500);
        }

        // Funciones del carrito
        function agregarAlCarrito(id) {
            const producto = productosGaming.find(p => p.id === id);
            if (producto) {
                carrito.push(producto);
                localStorage.setItem('carrito', JSON.stringify(carrito));
                actualizarCarrito();
                animarCarrito(); // Animación del carrito
                mostrarNotificacion('Producto agregado al carrito');
            }
        }

        function actualizarCarrito() {
            const cartCount = document.getElementById('cart-count');
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');

            cartCount.textContent = carrito.length;
            cartItems.innerHTML = '';

            let total = 0;
            carrito.forEach((item, index) => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <span>${item.nombre}</span>
                    <span>$${item.precio.toLocaleString()}</span>
                    <button onclick="eliminarDelCarrito(${index})" style="
                        background: #ff4757;
                        color: white;
                        border: none;
                        padding: 0.3rem 0.6rem;
                        border-radius: 5px;
                        cursor: pointer;
                    ">×</button>
                `;
                cartItems.appendChild(cartItem);
                total += item.precio;
            });

            cartTotal.textContent = total.toLocaleString();
        }

        function eliminarDelCarrito(index) {
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            actualizarCarrito();
        }

        function toggleCart() {
            const cartModal = document.getElementById('cart-modal');
            cartModal.style.display = cartModal.style.display === 'block' ? 'none' : 'block';
        }

        function checkout() {
            if (carrito.length === 0) {
                alert('Tu carrito está vacío');
                return;
            }

            // Crear mensaje para WhatsApp
            let mensaje = "Hola! Quiero hacer el siguiente pedido de productos gaming:%0A%0A";
            let total = 0;

            carrito.forEach(item => {
                mensaje += `• ${item.nombre} - $${item.precio.toLocaleString()}%0A`;
                total += item.precio;
            });

            mensaje += `%0ATotal: $${total.toLocaleString()}%0A%0AMi información:%0ANombre:%0ADirección:%0ATel:`;

            // Abrir WhatsApp con el mensaje
            window.open(`https://wa.me/573001234567?text=${mensaje}`, '_blank');
        }

        // Función para mostrar notificaciones
        function mostrarNotificacion(mensaje) {
            const notificacion = document.createElement('div');
            notificacion.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: linear-gradient(45deg, #00eeff, #ff00aa);
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                z-index: 3000;
                animation: fadeInOut 3s ease;
                font-weight: 600;
            `;
            notificacion.textContent = mensaje;
            document.body.appendChild(notificacion);

            // Crear animación
            const style = document.createElement('style');
            style.textContent = `
                @keyframes fadeInOut {
                    0% { opacity: 0; transform: translateY(-20px); }
                    10% { opacity: 1; transform: translateY(0); }
                    90% { opacity: 1; transform: translateY(0); }
                    100% { opacity: 0; transform: translateY(-20px); }
                }
            `;
            document.head.appendChild(style);

            // Eliminar después de 3 segundos
            setTimeout(() => {
                document.body.removeChild(notificacion);
                document.head.removeChild(style);
            }, 3000);
        }

        // Inicializar
        document.addEventListener('DOMContentLoaded', () => {
            cargarProductosGaming();
            actualizarCarrito();
        });

        document.addEventListener('DOMContentLoaded', () => {
            const searchBar = document.getElementById('search-bar');
            if (searchBar) {
                searchBar.addEventListener('input', (e) => {
                    const searchTerm = e.target.value.toLowerCase();
                    const productCards = document.querySelectorAll('.product-card');

                    productCards.forEach(card => {
                        const productName = card.querySelector('h4').textContent.toLowerCase();
                        const productDescription = card.querySelector('p').textContent.toLowerCase();

                        if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>