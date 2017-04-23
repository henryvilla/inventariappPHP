# SQL Manager 2010 for MySQL 4.5.0.9
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : inventariapp2


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `inventariapp2`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `inventariapp2`;

#
# Structure for the `requerimientos` table : 
#

CREATE TABLE `requerimientos` (
  `id_requerimiento` int(11) NOT NULL AUTO_INCREMENT,
  `tip_producto` varchar(8) DEFAULT NULL,
  `tip_requerimiento` varchar(20) DEFAULT NULL,
  `id_atm` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `responsable` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `proyecto` varchar(30) DEFAULT NULL,
  `grupo` varchar(30) DEFAULT NULL,
  `periodo_prog` int(11) DEFAULT NULL,
  `proveedor` varchar(20) DEFAULT NULL,
  `contacto` varchar(30) DEFAULT NULL,
  `telf_contacto` int(9) DEFAULT NULL,
  `mail_contacto` varchar(45) DEFAULT NULL,
  `l_departamento` varchar(29) DEFAULT NULL,
  `l_provincia` varchar(30) DEFAULT NULL,
  `l_distrito` varchar(30) DEFAULT NULL,
  `l_direccion` varchar(60) DEFAULT NULL,
  `l_locación` varchar(30) DEFAULT NULL,
  `l_zona` varchar(30) DEFAULT NULL,
  `marca_old` varchar(20) DEFAULT NULL,
  `modelo_old` varchar(20) DEFAULT NULL,
  `serie_old` varchar(20) DEFAULT NULL,
  `marca_new` varchar(20) DEFAULT NULL,
  `modelo_new` varchar(20) DEFAULT NULL,
  `serie_new` varchar(20) DEFAULT NULL,
  `mueble_new` varchar(20) DEFAULT NULL,
  `denominaciones_new` varchar(20) DEFAULT NULL,
  `conf_ipATM` varchar(20) DEFAULT NULL,
  `conf_mask` varchar(20) DEFAULT NULL,
  `conf_ip_gw` varchar(20) DEFAULT NULL,
  `conf_ip_tandem` varchar(20) DEFAULT NULL,
  `conf_puerto` varchar(20) DEFAULT NULL,
  `conf_ip_alarma` varchar(20) DEFAULT NULL,
  `costo_invension` float(9,3) DEFAULT NULL,
  `costo_igv` float(9,3) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_requerimiento`),
  UNIQUE KEY `id_requerimiento` (`id_requerimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Definition for the `ingresar_requerimiento` procedure : 
#

CREATE DEFINER = 'root'@'localhost' PROCEDURE `ingresar_requerimiento`(
        IN tip_producto VARCHAR(20),
        IN tip_requerimiento VARCHAR(20)
    )
    NOT DETERMINISTIC
    CONTAINS SQL
    SQL SECURITY DEFINER
    COMMENT ''
BEGIN
  insert into requerimientos (tip_producto,tip_requerimiento ) Values ( tip_producto , tip_requerimiento);
  COMMIT;
END;

#
# Data for the `requerimientos` table  (LIMIT 0,500)
#

INSERT INTO `requerimientos` (`id_requerimiento`, `tip_producto`, `tip_requerimiento`, `id_atm`, `status`, `responsable`, `fecha`, `proyecto`, `grupo`, `periodo_prog`, `proveedor`, `contacto`, `telf_contacto`, `mail_contacto`, `l_departamento`, `l_provincia`, `l_distrito`, `l_direccion`, `l_locación`, `l_zona`, `marca_old`, `modelo_old`, `serie_old`, `marca_new`, `modelo_new`, `serie_new`, `mueble_new`, `denominaciones_new`, `conf_ipATM`, `conf_mask`, `conf_ip_gw`, `conf_ip_tandem`, `conf_puerto`, `conf_ip_alarma`, `costo_invension`, `costo_igv`, `descripcion`) VALUES 
  (1,'KIO','Recambio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
  (2,'MON','Nueva Instalación',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
  (4,'asd','asdddd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
  (5,'123','fdsfsfd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
  (6,'123','3333',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
  (7,'123','3333',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
  (8,'KIO','Retiro temporal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;