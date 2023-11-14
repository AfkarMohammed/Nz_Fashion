-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dsmart
DROP DATABASE IF EXISTS `dsmart`;
CREATE DATABASE IF NOT EXISTS `dsmart` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dsmart`;

-- Dumping structure for table dsmart.admin_log
DROP TABLE IF EXISTS `admin_log`;
CREATE TABLE IF NOT EXISTS `admin_log` (
  `user_id` varchar(100) NOT NULL,
  `access_code` varchar(100) NOT NULL,
  `user_group` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table dsmart.admin_log: ~1 rows (approximately)
REPLACE INTO `admin_log` (`user_id`, `access_code`, `user_group`) VALUES
	('admin@gmail.com', 'x0NmcaiUO6Xw.', 'admin');

-- Dumping structure for table dsmart.customer_log
DROP TABLE IF EXISTS `customer_log`;
CREATE TABLE IF NOT EXISTS `customer_log` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `access_code` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table dsmart.customer_log: ~4 rows (approximately)
REPLACE INTO `customer_log` (`customer_id`, `email`, `cus_name`, `address`, `access_code`) VALUES
	(1, 'afkarmohammed35@gmail.com', 'afkar', '44', 'x0NmcaiUO6Xw.'),
	(2, 'afkamohammed356@gmail.com', 'afkar', '123', 'x0NmcaiUO6Xw.'),
	(3, 'd@gmail.com', 'afkar', '44', 'x0NmcaiUO6Xw.'),
	(4, 'user@gmail.com', 'User', 'User@Kandy', 'x0NmcaiUO6Xw.');

-- Dumping structure for table dsmart.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- Dumping data for table dsmart.product: ~27 rows (approximately)
REPLACE INTO `product` (`pid`, `title`, `category`, `description`, `price`, `picture`) VALUES
	(29, 'Jet Black Navy Blue White Lemon Yellow /Red Short ', 'T-shirt', '', 1113, '29_117925084517963152551882521557.jpg'),
	(30, ' JET Black Mens T Shirt New Style 100%', 'T-shirt', 'Good Quality\r\nDurable\r\nFashionable\r\n\r\n', 1240, '30_67489091411667902491833387.jpg'),
	(33, 'Black And White Mens Short Sleeve T Shirt', 'T-shirt', 'Lightweight & Perfect Fit\r\nEasy To Wash\r\nA go-to wardrobe addition\r\nTrue to size', 1113, '33_191154981413727322261051739296.jpg'),
	(34, 'White And Black Long Sleeves Mens T Shirt New Styl', 'T-shirt', 'Good Quality\r\nDurable', 1122, '34_21086736652127284268710489965.jpg'),
	(35, 'White Short Sleeve Mens T Shirt New Style Material', 'T-shirt', 'World Number 01 T Shirt Material.\r\n65% Cotton 35% Polyester .\r\nRegular Fit.', 1113, '35_19811704085014806591152851680.jpg'),
	(37, 'White Mens Plain T Shirt New trend Comfortable, Du', 'T-shirt', 'Half sleeve stylish design\r\nBreathable and lightweight\r\nCasual business style,comfy and soft, perfect fit and breathable, not easy to wrinkle with strong toughness.', 1017, '37_465848691037407978689977.jpg'),
	(40, 'White Long Sleeve T Shirt With Navy Blue And Red C', 'T-shirt', 'World Number 01 T Shirt Material.\r\n65% Cotton 35% Polyester .\r\nRegular Fit.', 1209, '40_46887421218978595282102257330.jpg'),
	(41, 'T-shirt Republic Black - Mens Premium Polo T shirt', 'T-shirt', 'Colour : Raven Black T shirt - Black\r\nMaterial : 65/35 Cotton Pique Knit (Crocodile Material)\r\nSpecialties : Comfortable, Excellent Colorfastness, Anti-shrink', 1650, '41_5884678097936528661230165201.jpg'),
	(42, 'Jents Mens High Qulity Denim For Work Party And Tr', 'Denims', 'blue color\r\n4 pockets\r\nhigh quality denim\r\nmachine and hand washable', 3490, '42_1705327867631523707663579908.jpg'),
	(43, 'Jents Mens High Qulity Denim For Work Party And Tr', 'Denims', 'blue color\r\n4 pockets\r\nhigh quality denim\r\nmachine and hand washable', 3490, '43_1066589000659110921773085239.jpg'),
	(44, 'Jents Mens High Qulity Denim For Work Party And Tr', 'Denims', 'blue color\r\n4 pockets\r\nhigh quality denim\r\nmachine and hand washable', 5000, '44_1762973349447400211369473112.jpg'),
	(49, 'JUMP Mens Short Sleeve Tropical Printed', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nTropical print', 2563, '49_193421778512850599291919924558.jpg'),
	(52, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '52_8695145063673264321240922075.jpg'),
	(53, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '53_1787907956106628070310202636.jpg'),
	(54, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '54_73013050918582437391033649157.jpg'),
	(55, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '55_20720764601206963697880008301.jpg'),
	(56, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '56_13943313871388556600854449686.jpg'),
	(57, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Shirts', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '57_812988889149682718977174296.jpg'),
	(58, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Featured collection', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '58_17083429156817230291041660213.jpg'),
	(59, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Featured collection', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '59_156934781712110895133488639.jpg'),
	(60, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Featured collection', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '60_11179691551629810421792293487.jpg'),
	(61, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Featured collection', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '61_37958311617640012311809088285.jpg'),
	(62, 'JUMP Mens Short Sleeve Floral Printed Shirt', 'Featured collection', 'Soft and comfortable\r\nGood Quality\r\nSpread collar\r\nFloral print', 2490, '62_20167382501388540325582673062.jpg'),
	(63, 'Men Suit Vest Design Casual Street Sports Short Sl', 'Suits', 'Men Suit Vest Design Casual Street Sports Short Sleeve T-Shirt Oversized Retro Style 3D Printing Summer round neck top Tees\r\nApplicable Scene:Casual', 14800, '63_8586429233729539411563848060.jpg'),
	(65, 'White Mens Plain T Shirt New trend Comfortable, Du', 'Featured collection', 'Half sleeve stylish design\r\nBreathable and lightweight\r\nCasual business style,comfy and soft, perfect fit and breathable, not easy to wrinkle with strong toughness.', 1850, '65_20490479421224174335251088038.jpg'),
	(66, 'White Mens Plain T Shirt New trend Comfortable, Du', 'Featured collection', 'Half sleeve stylish design\r\nBreathable and lightweight\r\nCasual business style,comfy and soft, perfect fit and breathable, not easy to wrinkle with strong toughness.', 1850, '66_77012084612022199801628645323.jpg'),
	(67, 'White Mens Plain T Shirt New trend Comfortable, Du', 'Featured collection', 'Half sleeve stylish design\r\nBreathable and lightweight\r\nCasual business style,comfy and soft, perfect fit and breathable, not easy to wrinkle with strong toughness.', 1850, '67_1619422901358814702201840424.jpg');

-- Dumping structure for table dsmart.wishlist
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dsmart.wishlist: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
