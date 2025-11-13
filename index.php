<?php
require_once 'db.php';


 $menu_stmt = $pdo->query("SELECT * FROM menu_items ORDER BY category, name");
 $menu_items = $menu_stmt->fetchAll();


 $menus_by_category = [];
foreach ($menu_items as $item) {
    $menus_by_category[$item['category']][] = $item;
}


 $testimonial_stmt = $pdo->query("SELECT * FROM testimonials ORDER BY id DESC LIMIT 3");
 $testimonials = $testimonial_stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alkid Coffee - Small Space Coffee Shop Kekinian</title>
    <meta name="description" content="Nikmati kopi pilihan terbaik di ruang kecil yang nyaman dan kekinian. Alkid Coffee, tempatnya pecinta kopi sejati.">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
        <nav class="navbar container">
            <a href="#" class="nav-logo">Alkid Coffee</a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#home" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="#testimonials" class="nav-link">Testimoni</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Small Space Coffee Shop Kekinian</h1>
                <p>Kecanduan Kopi, Bukan Alkohol. Temukan kenikmatan kopi autentik di ruang intim dan nyaman.</p>
                <a href="#menu" class="btn btn-primary">Lihat Menu Kami</a>
            </div>
        </section>

        <section id="about" class="section-about">
            <div class="container">
                <h2 class="section-title">Tentang Alkid Coffee</h2>
                <p class="section-subtitle">Kami bukan sekadar coffee shop, kami adalah wadah untuk para pencinta kopi sejati.</p>
                <div class="about-content">
                    <div class="about-text">
                        <p>Alkid Coffee lahir dari kecintaan kami pada kopi berkualitas. Meskipun ruang kami kecil, komitmen kami untuk menyajikan secangkir kopi terbaik sangatlah besar. Kami memilih biji kopi pilihan, menyanggangnya dengan hati, dan menyeduhnya dengan presisi untuk menghadirkan pengalaman tak terlupakan bagi Anda.</p>
                        <p>Tempat ini dirancang untuk menjadi "third place" Anda—ruang ketiga yang nyaman di antara rumah dan tempat kerja. Suasana yang hangat, musik yang santai, dan aroma kopi yang memikat siap menyambut Anda.</p>
                    </div>
                    <img src="assets/about-us.jpg" alt="Tentang Alkid Coffee" class="about-img">
                </div>
            </div>
        </section>

        <section id="menu" class="section-menu">
            <div class="container">
                <h2 class="section-title">Menu Pilihan Kami</h2>
                <p class="section-subtitle">Dari kopi klasik hingga kreasi kekinian, semua dibuat dengan cinta.</p>
                
                <?php foreach ($menus_by_category as $category => $items): ?>
                <div class="menu-category">
                    <h3><?php echo htmlspecialchars($category); ?></h3>
                    <div class="menu-grid">
                        <?php foreach ($items as $item): ?>
                        <div class="menu-card">
                            <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                            <div class="menu-card-body">
                                <h4 class="menu-item-name"><?php echo htmlspecialchars($item['name']); ?></h4>
                                <p class="menu-item-description"><?php echo htmlspecialchars($item['description']); ?></p>
                                <p class="menu-item-price">Rp <?php echo number_format($item['price'], 0, ',', '.'); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="testimonials" class="section-testimonials">
            <div class="container">
                <h2 class="section-title">Apa Kata Mereka?</h2>
                <p class="section-subtitle">Kepuasan pelanggan adalah prioritas utama kami.</p>
                <div class="testimonials-grid">
                    <?php foreach ($testimonials as $testimonial): ?>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <span>&#9733;</span>
                            <?php endfor; ?>
                        </div>
                        <p class="testimonial-text">"<?php echo htmlspecialchars($testimonial['testimonial_text']); ?>"</p>
                        <p class="testimonial-author">- <?php echo htmlspecialchars($testimonial['customer_name']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="contact" class="section-contact">
            <div class="container">
                <h2 class="section-title">Temukan Kami</h2>
                <div class="contact-content">
                    <div class="contact-info">
                        <h3>Alkid Coffee</h3>
                        <p>Jl. Nogosari Kidul No.10, RT.04/RW.02, Kadipaten, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55132</p>
                        <p>Senin - Jumat: 08:00 - 22:00</p>
                        <p>Sabtu - Minggu: 09:00 - 23:00</p>
                        <p>Telepon: (021) 1234-5678</p>
                        <p>Email: hello@alkidcoffee.com</p>
                        <div class="social-links">
                            <a href="#">Facebook</a>
                            <a href="#">Instagram</a>
                            <a href="#">Twitter</a>
                        </div>
                    </div>
                    <div class="map-placeholder">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8217.04709607511!2d110.35335960140257!3d-7.810263002294001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a570027ac4c27%3A0x96218a313944d2d3!2sSMALL%20SPACE!5e1!3m2!1sen!2sid!4v1761807749994!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Alkid Coffee. All Rights Reserved. Kecanduan Kopi Sejak 2024.</p>
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>