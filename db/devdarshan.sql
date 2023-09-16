-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for devdarshan
CREATE DATABASE IF NOT EXISTS `devdarshan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `devdarshan`;

-- Dumping structure for table devdarshan.booking_details
CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `package` varchar(100) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table devdarshan.booking_details: ~0 rows (approximately)

-- Dumping structure for table devdarshan.contact_details
CREATE TABLE IF NOT EXISTS `contact_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table devdarshan.contact_details: ~2 rows (approximately)
INSERT INTO `contact_details` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
	(1, 'Khushal', 'Galav', 'khushal@sansoftwares.com', '9783618305', 'demo mesage'),
	(2, 'Praful', 'Kumar', 'praful.kumar@sansoftwares.com', '9876543210', 'ok\r\n'),
	(3, 'fsdf', 'sdf', 'fsdf@gsmad.dsa', '9999999999', 'dfsdfs'),
	(4, 'Manish', 'Gupta', 'khushal@sansoftwares.com', '9876541230', 'ok');

-- Dumping structure for table devdarshan.subscribe
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table devdarshan.subscribe: ~2 rows (approximately)
INSERT INTO `subscribe` (`id`, `email`) VALUES
	(1, 'dasd'),
	(2, 'dasd@fdg.dfs');

-- Dumping structure for table devdarshan.user_details
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_browser` varchar(50) DEFAULT NULL,
  `user_ip` varchar(50) DEFAULT NULL,
  `user_device` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table devdarshan.user_details: ~0 rows (approximately)
INSERT INTO `user_details` (`id`, `user_browser`, `user_ip`, `user_device`) VALUES
	(1, 'Chrome', '::1', 'pc');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
