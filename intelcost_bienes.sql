CREATE DATABASE IF NOT EXISTS `intelcost_bienes` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `intelcost_bienes`;

CREATE TABLE IF NOT EXISTS `intelcost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_intelcost` int(11) DEFAULT NULL,
  `direction` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

