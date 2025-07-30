<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital RP | Tienda de Tecnología</title>
    <link rel="icon" type="image/png" href="imagenes/logo.png">
    <style>
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

        /* Header Styles */
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

        .cart-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white !important;
            padding: 0.7rem 1.5rem !important;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
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
        }

        /* Hero Section */
        .hero {
            margin-top: 150px;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
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
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-btn {
            background: linear-gradient(45deg, #ff6b6b, #ee5a52);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.3);
        }

        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 107, 107, 0.4);
        }

        /* Categories Section */
        .categories {
            padding: 6rem 2rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .categories-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .category-card:hover::before {
            left: 100%;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .product-card {
            transition: all 0.4s ease;
        }

        .category-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-icon {
            transform: scale(1.1);
        }

        .category-card h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .category-card p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .category-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .category-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        /* Social Media Section */
        .social-section {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            text-align: center;
        }

        .social-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .social-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
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
            font-size: 1.5rem;
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

        /* Featured Products */
        .featured {
            padding: 6rem 2rem;
            background: rgba(255, 255, 255, 0.95);
        }

        .featured-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .carousel {
            position: relative;
            overflow: hidden;
        }

        .carousel-container {
            display: flex;
            transition: transform 0.5s ease;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 1rem;
            cursor: pointer;
            z-index: 10;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            color: #333;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #999;
            position: relative;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-info h4 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-size: 1.4rem;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 1rem;
        }

        .add-to-cart {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .add-to-cart:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        /* Cart Modal */
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
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }

        .close-cart {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #999;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }

        .cart-total {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            margin: 2rem 0;
            color: #667eea;
        }

        .checkout-btn {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
        }

        /* Footer */
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

        /* Animations */
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

        /* Responsive Design */
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

            .categories-grid {
                grid-template-columns: 1fr;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .social-links {
                flex-direction: column;
                align-items: center;
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
    </style>
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
                    <li><a href="gaming.html">Gaming</a></li>
                    <li><a href="electronica.html">Electrónica</a></li>
                    <li><a href="varios.html">Varios</a></li>
                </ul>
            </nav>
            <a href="#" class="cart-btn" onclick="toggleCart()">
                🛒 Carrito <span class="cart-count" id="cart-count">0</span>
            </a>
        </div>

<div class="products-grid">
    <?php include 'productos.php'; ?>
</div>


        <div class="search-container">
            <input type="text" id="search-bar" placeholder="Buscar productos...">
            <button class="search-btn">🔍</button>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Ofertas Exclusivas en Tecnología</h1>
            <p>Descubre los mejores productos electrónicos a precios increíbles</p>
            <a href="#categorias" class="hero-btn">Explorar Productos</a>
        </div>
    </section>

    <section class="categories" id="categorias">
        <div class="categories-container">
            <h2 class="section-title">Nuestras Categorías</h2>
            <div class="categories-grid">
                <div class="category-card" onclick="window.location.href='componentes.html'">
                    <div class="category-icon">🖥️</div>
                    <h3>Componentes y Periféricos</h3>
                    <p>Mouses, teclados, monitores y más componentes esenciales</p>
                    <a href="componentes.html" class="category-btn">Ver Productos</a>
                </div>
                <div class="category-card" onclick="window.location.href='audio.html'">
                    <div class="category-icon">🎵</div>
                    <h3>Audio</h3>
                    <p>Audífonos, bocinas y equipos de sonido profesional</p>
                    <a href="audio.html" class="category-btn">Ver Productos</a>
                </div>
                <div class="category-card" onclick="window.location.href='cableado.html'">
                    <div class="category-icon">🔌</div>
                    <h3>Cableado</h3>
                    <p>Cables, adaptadores y accesorios de conectividad</p>
                    <a href="cableado.html" class="category-btn">Ver Productos</a>
                </div>
                <div class="category-card" onclick="window.location.href='gaming.html'">
                    <div class="category-icon">🎮</div>
                    <h3>Gaming</h3>
                    <p>Sillas gamer, pantallas y accesorios para gamers</p>
                    <a href="gaming.html" class="category-btn">Ver Productos</a>
                </div>
                <div class="category-card" onclick="window.location.href='electronica.html'">
                    <div class="category-icon">💡</div>
                    <h3>Electrónica</h3>
                    <p>Componentes y dispositivos electrónicos</p>
                    <a href="electronica.html" class="category-btn">Ver Productos</a>
                </div>
                <div class="category-card" onclick="window.location.href='varios.html'">
                    <div class="category-icon">📦</div>
                    <h3>Varios</h3>
                    <p>Productos y accesorios diversos</p>
                    <a href="varios.html" class="category-btn">Ver Productos</a>
                </div>
            </div>
        </div>
    </section>

    <section class="featured">
        <div class="featured-container">
            <h2 class="section-title">Productos Destacados</h2>
            <div class="carousel">
                <div class="carousel-container" id="featured-products">
                    <!-- Los productos se cargarán aquí dinámicamente -->
                </div>
                <button class="carousel-btn prev-btn">‹</button>
                <button class="carousel-btn next-btn">›</button>
            </div>
        </div>
    </section>

    <section class="social-section">
        <div class="social-container">
            <h2 class="section-title">Síguenos en Redes Sociales</h2>
            <p>Mantente al día con nuestras ofertas y productos nuevos</p>
            <div class="social-links">
                <a href="https://wa.me/573001234567" class="social-link" target="_blank">
                    📱 WhatsApp
                </a>
                <a href="https://instagram.com/digitalrp.store" class="social-link" target="_blank">
                    📷 Instagram
                </a>
                <a href="https://facebook.com/digitalrp.store" class="social-link" target="_blank">
                    📘 Facebook
                </a>
                <a href="mailto:info@digitalrp.store" class="social-link">
                    ✉️ Email
                </a>
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/573001234567?text=Hola,%20estoy%20interesado%20en%20sus%20productos" class="whatsapp-float" target="_blank">
        📱
    </a>

    <!-- Cart Modal -->
    <div class="cart-modal" id="cart-modal">
        <div class="cart-content">
            <div class="cart-header">
                <h3>Tu Carrito</h3>
                <button class="close-cart" onclick="toggleCart()">×</button>
            </div>
            <div id="cart-items">
                <!-- Los items del carrito se mostrarán aquí -->
            </div>
            <div class="cart-total">
                Total: $<span id="cart-total">0</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">Proceder al Pago</button>
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
        // Datos de productos con sistema de imágenes
        const productos = {
            componentes: [
                { 
                    id: 1, 
                    nombre: "Mouse Gamer RGB", 
                    precio: 80000, 
                    imagen: "imagenes/imagen1.jpg", // AQUÍ cambias por tu imagen
                    descripcion: "Mouse gamer con iluminación RGB y alta precisión"
                },
                { 
                    id: 2, 
                    nombre: "Teclado Mecánico", 
                    precio: 120000, 
                    imagen: "imagenes/imagen2.jpg", // AQUÍ cambias por tu imagen
                    descripcion: "Teclado mecánico con switches azules"
                },
            ],
            audio: [
                { 
                    id: 5, 
                    nombre: "Audífonos Bluetooth", 
                    precio: 95000, 
                    imagen: "imagenes/imagen5.jpg", // AQUÍ cambias por tu imagen
                    descripcion: "Audífonos inalámbricos con cancelación de ruido"
                },
                { 
                    id: 6, 
                    nombre: "Bocina Inteligente", 
                    precio: 180000, 
                    imagen: "imagenes/imagen6.jpg", // AQUÍ cambias por tu imagen
                    descripcion: "Bocina con asistente de voz integrado"
                },
            ]
        };

        // Carrito de compras
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Función para cargar productos destacados
        function cargarProductosDestacados() {
            const container = document.getElementById('featured-products');
            const productosDestacados = [
                productos.componentes[0],
                productos.audio[0]
            ];

            productosDestacados.forEach(producto => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card animate-fade-in';
                productCard.innerHTML = `
                    <div class="product-image">
                        <img src="${producto.imagen}" alt="${producto.nombre}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div style="display: none; align-items: center; justify-content: center; width: 100%; height: 100%; background: #f0f0f0; font-size: 2rem; color: #999;">📦</div>
                    </div>
                    <div class="product-info">
                        <h4>${producto.nombre}</h4>
                        <p>${producto.descripcion}</p>
                        <p class="product-price">$${producto.precio.toLocaleString()}</p>
                        <button class="add-to-cart" onclick="agregarAlCarrito(${producto.id})">
                            Agregar al Carrito
                        </button>
                    </div>
                `;
                container.appendChild(productCard);
            });
        }

        // Función para agregar al carrito
        function agregarAlCarrito(id) {
            let producto = null;
            for (let categoria in productos) {
                producto = productos[categoria].find(p => p.id === id);
                if (producto) break;
            }
            
            if (producto) {
                carrito.push(producto);
                localStorage.setItem('carrito', JSON.stringify(carrito));
                actualizarCarrito();
                mostrarNotificacion('Producto agregado al carrito');
            }
        }

        // Función para actualizar el carrito
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
                    <button onclick="eliminarDelCarrito(${index})" style="background: #ff4757; color: white; border: none; padding: 0.2rem 0.5rem; border-radius: 5px; cursor: pointer;">×</button>
                `;
                cartItems.appendChild(cartItem);
                total += item.precio;
            });

            cartTotal.textContent = total.toLocaleString();
        }

        // Función para eliminar del carrito
        function eliminarDelCarrito(index) {
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            actualizarCarrito();
        }

        // Función para alternar el carrito
        function toggleCart() {
            const cartModal = document.getElementById('cart-modal');
            cartModal.style.display = cartModal.style.display === 'block' ? 'none' : 'block';
        }

        // Función para proceder al pago
        function checkout() {
            if (carrito.length === 0) {
                alert('Tu carrito está vacío');
                return;
            }
            
            // Crear mensaje para WhatsApp
            let mensaje = "Hola! Quiero hacer el siguiente pedido:%0A%0A";
            let total = 0;
            
            carrito.forEach(item => {
                mensaje += `• ${item.nombre} - $${item.precio.toLocaleString()}%0A`;
                total += item.precio;
            });
            
            mensaje += `%0ATotal: $${total.toLocaleString()}%0A%0A¿Podrían confirmar disponibilidad y método de pago?`;
            
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
                background: #28a745;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                z-index: 3000;
                animation: fadeInOut 3s ease;
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

            const featuredProductsContainer = document.getElementById('featured-products');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');

            if (featuredProductsContainer && prevBtn && nextBtn) {
                const products = featuredProductsContainer.children;
                let productWidth = products[0].offsetWidth + 20; // 20 es el gap
                let currentIndex = 0;

                function updateCarousel() {
                    featuredProductsContainer.style.transform = `translateX(-${currentIndex * productWidth}px)`;
                }

                nextBtn.addEventListener('click', () => {
                    if (currentIndex < products.length - 1) {
                        currentIndex++;
                        updateCarousel();
                    }
                });

                prevBtn.addEventListener('click', () => {
                    if (currentIndex > 0) {
                        currentIndex--;
                        updateCarousel();
                    }
                });

                window.addEventListener('resize', () => {
                    productWidth = products[0].offsetWidth + 20;
                    updateCarousel();
                });
            }
        });