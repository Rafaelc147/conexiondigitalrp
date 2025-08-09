<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital RP | Cableado</title>
    <link rel="icon" type="image/png" href="imagenes/logo.png">
    <style>
        /* ESTILOS GENERALES */
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

        /* HEADER */
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
            opacity: 0.9;
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

        /* PRODUCTOS */
        .featured {
            padding: 150px 2rem 4rem; /* Más espacio arriba para el header */
            background: rgba(255, 255, 255, 0.95);
        }

        .featured-container {
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
            color: #333;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .product-card {
            transition: all 0.4s ease;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(255, 107, 107, 0.9);
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

        .product-image img {
            width: 80%;
            height: 80%;
            object-fit: contain;
            transition: transform 0.3s ease;
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
            color: #667eea;
            margin-bottom: 1.5rem;
            display: block;
        }

        .add-to-cart {
            background: linear-gradient(45deg, #667eea, #764ba2);
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
        }

        .add-to-cart:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        /* CARRITO Y WHATSAPP */
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
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
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

        /* FOOTER */
        footer {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1.5rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .footer-links a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 1.1rem;
        }

        .footer-links a:hover {
            color: #667eea;
        }

        footer p {
            margin: 0.5rem 0;
            color: #bdc3c7;
        }

        footer strong {
            color: #ecf0f1;
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

            .products-grid {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 180px;
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
                    <li><a href="cableado.html" class="active">Cableado</a></li>
                    <li><a href="gaming.html">Gaming</a></li>
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

    <section class="featured">
        <div class="featured-container">
            <h2 class="section-title">Cableado</h2>
            <div class="products-grid" id="cableado-products">
                <!-- Productos de cableado se cargarán aquí -->
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/573001234567?text=Hola,%20estoy%20interesado%20en%20sus%20productos%20de%20cableado" class="whatsapp-float" target="_blank">
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
                <!-- Items del carrito -->
            </div>
            <div class="cart-total">
                Total: $<span id="cart-total">0</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">
                <span>🛒</span> Proceder al Pago
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
        // Datos de productos de cableado
        const productosCableado = [
            { 
                id: 1, 
                nombre: "Cable HDMI 4K S M 2.0 Real", 
                precio: 35000, 
                imagenes: ["imagenes/cable1.jpg"],
                descripcion: "Cable de Video HDMI 4K S M 2.0 Real de 60 MHz",
                marca: "SIMBOS"
            },
            { 
                id: 2, 
                nombre: "Cable HDMI Premium 8K 6m", 
                precio: 34000, 
                imagenes: ["imagenes/cable2.jpg"],
                descripcion: "Cable de Video HDMI Premium 8K 6m V 2.0",
                marca: "AUTICIT"
            },
            { 
                id: 3, 
                nombre: "Cable HDMI Premium 8K 3m", 
                precio: 34000, 
                imagenes: ["imagenes/cable3.jpg"],
                descripcion: "Cable de Video HDMI Premium 8K 3m V 2.0",
                marca: "JATIEN"
            },
            { 
                id: 4, 
                nombre: "Cable HDMI Premium 4K 5m", 
                precio: 27000, 
                imagenes: ["imagenes/cable4.jpg"],
                descripcion: "Cable de Video HDMI Premium 4K 5m V 2.0",
                marca: "METICIT"
            },
            { 
                id: 5, 
                nombre: "Cable HDMI 4K 1.8m", 
                precio: 24000, 
                imagenes: ["imagenes/cable5.jpg"],
                descripcion: "Cable de Video HDMI 4K 1.8m 2.0 Real de 60 MHz",
                marca: "STADOAS",
                nuevo: true
            },
            { 
                id: 6, 
                nombre: "Cable HDMI Premium 4K 3m", 
                precio: 16000, 
                imagenes: ["imagenes/cable6.jpg"],
                descripcion: "Cable de Video HDMI Premium 4K 3m V 2.0",
                marca: "JATIEN"
            },
            { 
                id: 7, 
                nombre: "Cable HDMI 3m 2.0 Real", 
                precio: 12000, 
                imagenes: ["imagenes/cable7.jpg"],
                descripcion: "Cable de Video HDMI 3m 2.0 Real de 60 MHz",
                marca: "STADOAS"
            },
            { 
                id: 8, 
                nombre: "Cable HDMI 3m 2.0 Real", 
                precio: 13000, 
                imagenes: ["imagenes/cable8.jpg"],
                descripcion: "Cable de Video HDMI 3m 2.0 Real de 60 MHz",
                marca: "STADOAS"
            }
        ];

        // Carrito de compras
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Cargar productos de cableado
        function cargarProductosCableado() {
            const container = document.getElementById('cableado-products');
            container.innerHTML = '';

            productosCableado.forEach(producto => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                
                let badge = '';
                if (producto.nuevo) {
                    badge = '<div class="product-badge">NUEVO</div>';
                }
                
                productCard.innerHTML = `
                    ${badge}
                    <div class="product-image">
                        ${createCarouselHTML(producto.imagenes, producto.id)}
                    </div>
                    <div class="product-info">
                        <div style="color: #667eea; font-weight: 600; margin-bottom: 8px;">${producto.marca}</div>
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
            const producto = productosCableado.find(p => p.id === id);
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
            let mensaje = "Hola! Quiero hacer el siguiente pedido:%0A%0A";
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

        // Inicializar
        document.addEventListener('DOMContentLoaded', () => {
            cargarProductosCableado();
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