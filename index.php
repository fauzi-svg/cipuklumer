<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cipuk - Menu & Order</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Simple Header -->
    <header class="simple-header">
        <div class="logo">
            <h1>🍢 CIPUK KITA</h1>
            <p>Authentic Indonesian Snack</p>
        </div>
        <a href="https://wa.me/6285745770970" class="whatsapp-btn" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <span>Order via WA</span>
        </a>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>Cipuk yang bikin <span class="highlight">nagih</span></h2>
            <p>Pesan langsung via WhatsApp, gausah ribet!</p>
        </div>
        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
             alt="Cipuk" class="hero-img">
    </section>

    <!-- Menu Section -->
    <section class="menu-section">
        <h2 class="section-title">Menu Kami</h2>
        <p class="section-subtitle">Klik menu untuk langsung pesan via WhatsApp</p>
        
        <div class="menu-container">
            <!-- Menu 1 -->
            <div class="menu-item" onclick="orderWA('Original Cipuk', 15000)">
                <div class="menu-img">
                    <img src="cipuk.jpg" alt="Original">
                </div>
                <div class="menu-content">
                    <h3>Original Cipuk</h3>
                    <p>Rasa autentik resep turun-temurun</p>
                    <div class="menu-footer">
                        <span class="price">Rp 15.000</span>
                        <button class="order-btn">
                            <i class="fab fa-whatsapp"></i>
                            Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu 2 -->
            <div class="menu-item" onclick="orderWA('Spicy Cipuk', 17000)">
                <div class="menu-img">
                    <img src="cipukpedas.jpg" alt="Spicy">
                </div>
                <div class="menu-content">
                    <h3>Spicy Cipuk</h3>
                    <p>Pedas buat yang suka challenge</p>
                    <div class="menu-footer">
                        <span class="price">Rp 17.000</span>
                        <button class="order-btn">
                            <i class="fab fa-whatsapp"></i>
                            Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu 3 -->
            <div class="menu-item" onclick="orderWA('Cheese Cipuk', 20000)">
                <div class="menu-img">
                    <img src="cipukejuu.jpg" alt="Cheese">
                </div>
                <div class="menu-content">
                    <h3>Cheese Cipuk</h3>
                    <p>Keju mozzarella yang melumer</p>
                    <div class="menu-footer">
                        <span class="price">Rp 20.000</span>
                        <button class="order-btn">
                            <i class="fab fa-whatsapp"></i>
                            Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu 4 -->
            <div class="menu-item" onclick="orderWA('Cipuk Kuah Rujak', 25000)">
                <div class="menu-img">
                    <img src="cipukrujak.jpg" alt="Special">
                </div>
                <div class="menu-content">
                    <h3>Cipuk Kuah Rujak</h3>
                    <p>Premium ingredients, rasa istimewa dengan tambahan bumbu rujak khas sunda</p>
                    <div class="menu-footer">
                        <span class="price">Rp 25.000</span>
                        <button class="order-btn">
                            <i class="fab fa-whatsapp"></i>
                            Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu 5 -->
            <div class="menu-item" onclick="orderWA('Cipuk Chilli Oil', 25000)">
                <div class="menu-img">
                    <img src="chilioil.webp" alt="Mini Pack">
                </div>
                <div class="menu-content">
                    <h3>Cipuk Chili Oil</h3>
                    <p>10 pcs cipuk chilli oil, cocok untuk sharing</p>
                    <div class="menu-footer">
                        <span class="price">Rp 25.000</span>
                        <button class="order-btn">
                            <i class="fab fa-whatsapp"></i>
                            Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu 6 -->
            <div class="menu-item" onclick="orderWA('Cipuk Frozen', 28000)">
                <div class="menu-img">
                    <img src="frozen.png" alt="Crispy">
                </div>
                <div class="menu-content">
                    <h3>Cipuk Frozen</h3>
                    <p>Cipuh beku fresh dengan isi 20 pcs</p>
                    <div class="menu-footer">
                        <span class="price">Rp 28.000</span>
                        <button class="order-btn">
                            <i class="fab fa-whatsapp"></i>
                            Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Section -->
    <section class="wa-section">
        <div class="wa-card">
            <div class="wa-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <h2>Pesan via WhatsApp</h2>
            <p>Klik tombol di bawah untuk langsung chat kami</p>
            
            <a href="https://wa.me/6285745770970?text=Halo%20Cipuk%2C%20saya%20mau%20pesan" 
               class="wa-order-btn" target="_blank">
                <i class="fab fa-whatsapp"></i>
                Chat Sekarang
            </a>
            
            <div class="wa-info">
                <p><i class="fas fa-phone"></i> 0857-4577-0970</p>
                <p><i class="fas fa-clock"></i> Buka: 9AM - 9PM</p>
                <p><i class="fas fa-truck"></i> Gratis ongkir > Rp 50.000</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <h3>🍢 CIPUK</h3>
            <p>Traditional Indonesian Snack</p>
            
            <div class="footer-contact">
                <a href="https://wa.me/6285745770970" target="_blank">
                    <i class="fab fa-whatsapp"></i> 0857-4577-0970
                </a>
                <p><i class="fas fa-map-marker-alt"></i> Bandung, Indonesia</p>
            </div>
            
            <div class="footer-hours">
                <p><strong>Buka Setiap Hari</strong></p>
                <p>09:00 - 21:00</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 Cipuk Kita. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating WA Button -->
    <div class="floating-wa">
        <a href="https://wa.me/6285745770970" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <script>
        // Function langsung ke WhatsApp
        function orderWA(itemName, itemPrice) {
            const phone = '6285745770970'; // GANTI NOMOR INI
            const message = `Halo Admin Cipuk Kita! Saya mau pesan:\n\n🍢 ${itemName}\n💰 Rp ${itemPrice.toLocaleString()}\n\nBisa info ketersediaan?`;
            const waURL = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
            window.open(waURL, '_blank');
        }
        
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>