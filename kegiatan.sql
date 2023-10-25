-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table kegiatan.kegiatan
CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bersiap` varchar(200) DEFAULT '0',
  `persiapan_1` varchar(200) DEFAULT '0',
  `persiapan_2` varchar(200) DEFAULT '0',
  `verifikasi` varchar(200) DEFAULT '0',
  `tampil` varchar(200) DEFAULT '0',
  `after` varchar(200) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kegiatan.kegiatan: ~0 rows (approximately)
INSERT INTO `kegiatan` (`id`, `bersiap`, `persiapan_1`, `persiapan_2`, `verifikasi`, `tampil`, `after`) VALUES
	(1, 'DALO SU RUATA KOMBOS TIMUR', 'SANGKAKALA MALALAYANG SATU', 'ANDREAS BANJER', 'Sesawi Watutumou', 'MORIA SASARAN	', 'SYALOOM DENDENGAN DALAM');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
