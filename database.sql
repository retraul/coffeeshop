
CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `menu_items` (`category`, `name`, `description`, `price`, `image_url`) VALUES
('Kopi Hitam', 'Alkid V60', 'Single origin beans yang diseduh dengan metode V60, menghasilkan rasa yang clean dan kompleks.', 25000.00, 'assets/v60.jpg'),
('Kopi Hitam', 'Alkid French Press', 'Kopi dengan body yang penuh dan rasa yang bold, cocok untuk pencinta kopi klasik.', 22000.00, 'assets/french-press.jpg'),
('Kopi Susu', 'Cappuccino', 'Perpaduan sempurna antara espresso, steamed milk, dan busa yang lembut.', 28000.00, 'assets/cappuccino.jpg'),
('Kopi Susu', 'Caramel Macchiato', 'Espresso, vanilla syrup, susu, dan karamel drizzle. Manis dan memikat.', 32000.00, 'assets/macchiato.jpg'),
('Non-Kopi', 'Iced Tea Lychee', 'Teh manis dingin dengan sentuhan buah leci yang segar.', 20000.00, 'assets/tea.jpg'),
('Makanan', 'Croissant Almond', 'Pastry renyah dengan isian krim almond dan taburan almond slice.', 25000.00, 'assets/croissant.jpg');

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `testimonial_text` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `testimonials` (`customer_name`, `testimonial_text`, `rating`) VALUES
('Budi Santoso', 'Tempatnya nyaman, kopinya mantap! Pilihan biji kopinya beragam dan baristanya ramah. Recommended banget!', 5),
('Siti Nurhaliza', 'Small space-nya bikin betah. Suasananya cozy, pas buat ngopi-ngopi sambil kerja atau ngobrol bareng teman.', 5),
('Andi Pratama', 'Cappuccino di sini yang terbaik! Rasa kopinya pas, tidak terlalu pahit. Pasti akan balik lagi.', 4);