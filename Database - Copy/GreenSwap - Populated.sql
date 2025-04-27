-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for greenswap
CREATE DATABASE IF NOT EXISTS `greenswap` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `greenswap`;

-- Dumping structure for table greenswap.howitworks
CREATE TABLE IF NOT EXISTS `howitworks` (
  `photo_link` varchar(100) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_desc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.howitworks: ~4 rows (approximately)
INSERT INTO `howitworks` (`photo_link`, `item_name`, `item_desc`) VALUES
	('images\\browse.png', 'Browse for Items', 'Browse our website to find any item that is listed'),
	('images\\buy.png', 'Add the item to your cart', 'Press the \'Buy\' button to add the item to your cart'),
	('images/cart.png', 'Checkout', 'Once you have completed all your shopping simply checkout and fill out the required details');

-- Dumping structure for table greenswap.newsletter_mailing_list
CREATE TABLE IF NOT EXISTS `newsletter_mailing_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_subscribed` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.newsletter_mailing_list: ~0 rows (approximately)

-- Dumping structure for table greenswap.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL,
  `account_id` int NOT NULL,
  `product_quantity` int NOT NULL,
  `order_total` double NOT NULL,
  `order_shipping_cost` double NOT NULL,
  `order_date_finalised` date NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `account_id_orders` (`account_id`),
  CONSTRAINT `account_id_orders` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.orders: ~0 rows (approximately)

-- Dumping structure for table greenswap.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL,
  `product_name` char(50) NOT NULL,
  `product_desc` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_category` char(50) NOT NULL,
  `price` double NOT NULL,
  `product_image_link` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_condition` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `product_stock` int DEFAULT NULL,
  `is_featured` tinyint(1) unsigned zerofill DEFAULT '0',
  `is_swapable` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.products: ~46 rows (approximately)
INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_category`, `price`, `product_image_link`, `product_condition`, `product_stock`, `is_featured`, `is_swapable`) VALUES
	(1, 'Tropical Leaf Plant', 'Lush banana-style foliage to bring a tropical vibe to any room.', 'Plant', 5.99, '\\plants\\plant1.png', 'good', 4, 1, 1),
	(2, 'Zen Leaf Arrangement\n\n', 'Minimalist indoor plant ideal for calming and clean decor styles.\n\n', 'Plant', 14.5, '\\plants\\plant2.png', 'ripe', 2, 0, 1),
	(3, 'Oasis Shrub\n\n', 'A vibrant indoor shrub that thrives in low light and brings fresh energy.', 'Plant', 6.9, '\\plants\\plant3.png', 'old', 1, 0, 1),
	(4, 'Variegated Harmony', 'Balanced greenery with natural variegation — a statement piece for any space.', 'Plant', 12.99, '\\plants\\plant4.png', 'half good', 2, 0, 1),
	(5, 'Elegant Spire Plant\n\n', 'Tall, slender greenery that adds vertical elegance to modern interiors.', 'Plant', 14.99, '\\plants\\plant5.png', 'great', 1, 1, 1),
	(6, 'Mini Forest Terrarium', 'A hand-crafted glass terrarium featuring real moss, stones, and succulents.', 'Plant', 10, '\\plants\\plant6.png', 'perfect condition', 3, 0, 1),
	(7, 'Lavender Bunch', 'A fragrant bundle of dried lavender — perfect for calming energy and rustic decor.', 'Plant', 10, '\\plants\\plant7.png', 'perfect condition', 3, 0, 1),
	(8, 'Desert Palm Mini', ' A sun-loving mini palm that adds a desert-inspired charm to your space.', 'Plant', 10, '\\plants\\plant8.png', 'perfect condition', 3, 0, 0),
	(9, 'Pink Bloom Bonsai\n\n', 'A vibrant flowering bonsai bringing a splash of color and elegance to your room.', 'Plant', 10, '\\plants\\plant9.png', 'perfect condition', 3, 0, 0),
	(10, 'Ornamental Bowl Grass\n\n', 'Compact ornamental grass in a stylish bowl, ideal for tabletops and window sills.', 'Plant', 10, '\\plants\\plant10.png', 'perfect condition', 3, 0, 0),
	(11, 'Tropical Split-Leaf\n\n', 'A lush split-leaf plant known for its bold foliage and natural air-purifying benefits.', 'Plant', 10, '\\plants\\plant11.png', 'perfect condition', 3, 0, 0),
	(12, 'Trailing Ivy Hanger\n\n', 'A hanging ivy plant that cascades beautifully — perfect for vertical green decor.', 'Plant', 10, '\\plants\\plant12.png', '#', 3, 0, 0),
	(13, 'Classic Teddy Bear', 'A soft and cuddly teddy bear — perfect for bedtime hugs.', 'Toys', 12.99, '\\toys\\toy1.png', NULL, NULL, 0, 0),
	(14, 'Learning Blocks Set', 'Colorful blocks to help kids learn numbers and basic math.', 'Toys', 9.5, '\\toys\\toy2.png', NULL, NULL, 0, 0),
	(15, 'Mini Toy Shelf Set', 'A pretend play shelf with tiny books and accessories.', 'Toys', 15, '\\toys\\toy3.png', NULL, NULL, 0, 0),
	(16, 'Educational Play Set', 'Shapes, letters, and stacking blocks for early development.', 'Toys', 13.75, '\\toys\\toy4.png', NULL, NULL, 0, 0),
	(17, 'Rubber Duck Duo', 'Classic bath time yellow and green rubber duckies.', 'Toys', 4.99, '\\toys\\toy5.png', NULL, NULL, 0, 0),
	(18, 'Off-Road RC Car', 'High-speed remote control car with rugged tires.', 'Toys', 22.49, '\\toys\\toy6.png', NULL, NULL, 0, 0),
	(19, 'Tea Party Set', 'Complete pretend tea set with cups, plates, and utensils.', 'Toys', 10.99, '\\toys\\toy7.png', NULL, NULL, 0, 0),
	(20, 'Homemade Toys', 'Homemade Toys created for kids', 'Toys', 34, '\\toys\\toy8.png', NULL, NULL, 0, 0),
	(21, 'Knitted Bear Plush', 'Handmade cozy bear with a warm, rustic look.', 'Toys', 11.95, '\\toys\\toy9.png', NULL, NULL, 0, 0),
	(22, 'Stacking Rings Tower', 'Brightly colored rings for stacking and motor skill learning.', 'Toys', 8.75, '\\toys\\toy10.png', NULL, NULL, 1, 0),
	(23, 'Ride-On Truck', 'Toddler ride-on truck for backyard adventures.', 'Toys', 29.99, '\\toys\\toy11.png', NULL, NULL, 0, 0),
	(24, 'Russian Nesting Dolls', 'Traditional matryoshka dolls with colorful designs.', 'Toys', 18.5, '\\toys\\toy12.png', NULL, NULL, 0, 0),
	(25, 'Ficus Elastica in Woven Basket', 'An elegant indoor Rubber Plant  presented in a hand-woven basket.', 'Plant', 39.99, '\\plants\\plant13.png', NULL, NULL, 1, 0),
	(26, 'Mini Jade Bonsai Duo', 'A set of two charming Jade Bonsai plants in minimalist metallic pots. Perfect for desktops or small shelves.', 'Plant', 24.99, '\\plants\\plant14.png', NULL, NULL, 0, 0),
	(27, 'Succulent in Aqua Ceramic Pot', 'A resilient succulent housed in a glossy aqua-colored ceramic pot.', 'Plant', 12.99, '\\plants\\plant15.png', NULL, NULL, 0, 0),
	(28, 'Banana Leaf Plant in Wooden Pot', 'A bold statement plant with large banana-like leaves, nestled in a sleek wooden pot for modern aesthetics.', 'Plant', 44.99, '\\plants\\plant16.png', NULL, NULL, 0, 0),
	(29, 'Snake Plant on Shelf', 'A stylish snake plant displayed on a minimalist wooden shelf. A striking combination of design and greenery.', 'Plant', 34.5, '\\plants\\plant17.png', NULL, NULL, 1, 0),
	(30, 'Desert Aloe in Clay Pot', 'Small but mighty, this Aloe plant thrives in dry conditions and adds rustic charm with its matte clay pot.', 'Plant', 15.75, '\\plants\\plant18.png', NULL, NULL, 0, 0),
	(31, 'Topiary Ball in Black Planter', 'A lush, perfectly-rounded topiary plant presented in a modern black container.', 'Plant', 49, '\\plants\\plant19.png', NULL, NULL, 0, 0),
	(32, 'Zebra Cactus in Cream Pot', 'A striking zebra cactus with bold striping, placed in a neutral-toned pot to complement any room.', 'Plant', 13.25, '\\plants\\plant20.png', NULL, NULL, 1, 0),
	(33, 'Tiny Tree in White Pot', 'A small decorative indoor tree in a clean white planter. Adds subtle greenery and calm to your space.', 'Plant', 18.99, '\\plants\\plant21.png', NULL, NULL, 0, 0),
	(34, 'The Killing of The Reavey Brothers', 'In this gripping true crime account, Eugene Reavey takes readers on a harrowing journey through the darkest chapter of his life during the Northern Ireland Troubles.', 'Book', 19.99, '/books/book1.jpg', NULL, NULL, 0, 0),
	(35, 'Dermot Whelan: Busy and Wrecked', 'Create space and energy for the people and things that really matter. Get ready to de-whelm your day, reclaim your calm, and find your way back to yourself.', 'Book', 18.99, '/books/book2.jpg', NULL, NULL, 0, 0),
	(36, 'I Am by Gerry Hussey', 'Gerry Hussey offers a transformative guide to unlocking your true potential and living a fulfilled life.', 'Book', 21.5, '/books/book3.jpg', NULL, NULL, 1, 0),
	(37, 'Dream State', 'An exploration into the subconscious mind and the power of dreams in shaping our reality.', 'Book', 17.99, '/books/book4.jpg', NULL, NULL, 0, 0),
	(38, 'Frogs for Watchdogs', 'A whimsical tale that delves into the unexpected adventures of unlikely heroes.', 'Book', 16.5, '/books/book5.jpg', NULL, NULL, 0, 0),
	(39, 'The Bee Sting by Paul Murray', 'A darkly comic novel that examines the complexities of family life and personal ambition.', 'Book', 22, '/books/book6.jpg', NULL, NULL, 0, 0),
	(40, 'Strange Sally Diamond by Liz Nugent', 'A gripping psychological thriller that unravels the secrets of a seemingly ordinary woman.', 'Book', 19.99, '/books/book7.jpg', NULL, NULL, 1, 0),
	(41, 'Sunday Miscellany: A Selection 2018–2023', 'A curated collection of essays and stories from the beloved radio program.', 'Book', 24.99, '/books/book8.jpg', NULL, NULL, 0, 0),
	(42, 'Paul O\'Connell: The Battle (A Memoir)', 'There has never been a rugby player quite like Paul O\'Connell. He is synonymous with passion, heart and determination;', 'Book', 20, '/books/book9.jpg', NULL, NULL, 1, 0),
	(43, 'Flavour: Every Day Food Made Exceptional', 'A culinary masterpiece that brings new life to traditional recipes.', 'Book', 25, '/books/book10.jpg', NULL, NULL, 1, 0),
	(44, 'My Hot Friend', 'A contemporary novel exploring friendship and desire.', 'Book', 18, '/books/book11.jpg', NULL, NULL, 0, 0),
	(45, 'The President\'s Dog', 'A charming children\'s book about the adventures of the President\'s canine companion.', 'Book', 15.99, '/books/book12.jpg', NULL, NULL, 0, 0),
	(46, 'I Am The Wind: Irish Poems for Children Everywhere', 'A delightful anthology of Irish poetry tailored for young readers.', 'Book', 17.5, '/books/book13.jpg', NULL, NULL, 0, 0);

-- Dumping structure for table greenswap.users
CREATE TABLE IF NOT EXISTS `users` (
  `account_id` int NOT NULL,
  `username` char(20) NOT NULL,
  `user_password` char(30) NOT NULL,
  `user_profile_picture_link` char(100) NOT NULL,
  `user_account_create_date` date NOT NULL,
  `user_bio` char(255) DEFAULT NULL,
  `user_firstname` char(20) NOT NULL,
  `user_lastname` char(20) NOT NULL,
  `user_email` char(50) NOT NULL,
  `user_phone_number` char(15) DEFAULT NULL,
  `user_age` int NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table greenswap.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
