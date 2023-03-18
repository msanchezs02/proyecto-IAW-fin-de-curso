-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para database
CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `database`;

-- Volcando estructura para tabla database.Administrador
CREATE TABLE IF NOT EXISTS `Administrador` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Administrador: ~0 rows (aproximadamente)
INSERT INTO `Administrador` (`id_admin`, `username`, `password`) VALUES
	(1, 'admin', 'admin');

-- Volcando estructura para tabla database.Palas
CREATE TABLE IF NOT EXISTS `Palas` (
  `id_pala` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(15) NOT NULL DEFAULT '0',
  `modelo` varchar(30) NOT NULL DEFAULT '0',
  `tipopala` varchar(15) NOT NULL DEFAULT '0',
  `formapala` varchar(15) NOT NULL DEFAULT '0',
  `peso` int(11) NOT NULL DEFAULT 0,
  `precio` decimal(20,6) NOT NULL DEFAULT 0.000000,
  `img` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_pala`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Palas: ~8 rows (aproximadamente)
INSERT INTO `Palas` (`id_pala`, `marca`, `modelo`, `tipopala`, `formapala`, `peso`, `precio`, `img`) VALUES
	(1, 'StarVie', 'Triton Pro2.0', 'Ataque', 'Lagrima', 355, 316.500000, 'assets/triton.jpg'),
	(2, 'StarVie', 'Raptor Evolution', 'Hibrida', 'Redonda', 356, 239.930000, 'assets/raptor.jpeg'),
	(3, 'Adidas', 'Metalbone HRD3.2', 'Ataque', 'Octagonal', 345, 390.000000, 'assets/metalbone.jpeg'),
	(4, 'Adidas', 'Adipower Multiweight CTRL', 'Control', 'Redonda', 360, 400.000000, 'assets/multiweight.jpeg'),
	(5, 'Bullpadel', 'Vertex 03 Comfort', 'Ataque', 'Diamante', 370, 244.950000, 'assets/vertex.jpeg'),
	(6, 'Bullpadel', 'Hack 03', 'Ataque', 'Diamante', 375, 349.950000, 'assets/hack.jpeg'),
	(7, 'Siux', 'Electra ST2 Stupa Pro', 'Ataque', 'Hibrida', 355, 350.000000, 'assets/electra.jpeg'),
	(8, 'Siux', 'Diablo Revolution II Sanyo Pro', 'Control', 'Hibrida', 355, 350.000000, 'assets/diablo.jpeg'),
	(9, 'Joma', 'Staff', 'Ataque', 'Lagrima', 344, 210.990000, NULL),
	(10, 'Head', 'Alpha Pro', 'Ataque', 'Diamante', 350, 340.600000, NULL),
	(11, 'Wilson', 'Bela', 'Ataque', 'Lagrima', 340, 400.000000, NULL),
	(12, 'Protón', 'Pyton', 'Control', 'Redonda', 350, 79.990000, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
