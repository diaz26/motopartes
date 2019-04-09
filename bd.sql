/*
SQLyog Community v13.1.0 (64 bit)
MySQL - 10.1.38-MariaDB : Database - motopartes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`motopartes` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `motopartes`;

/*Table structure for table `part_articulos` */

DROP TABLE IF EXISTS `part_articulos`;

CREATE TABLE `part_articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `id_parte` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float(11,2) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_referencia` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `id_color` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `part_articulos` */

/*Table structure for table `part_info` */

DROP TABLE IF EXISTS `part_info`;

CREATE TABLE `part_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opcion1` varchar(20) DEFAULT NULL,
  `opcion2` varchar(20) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `bg_header` varchar(20) DEFAULT NULL,
  `bg_botones` varchar(20) DEFAULT NULL,
  `color_letra_botones` varchar(20) DEFAULT NULL,
  `opcion3` varchar(20) DEFAULT NULL,
  `opcion4` varchar(20) DEFAULT NULL,
  `opcion5` varchar(20) DEFAULT NULL,
  `bg_opciones` varchar(20) DEFAULT NULL,
  `color_opciones` varchar(20) DEFAULT NULL,
  `descri1` varchar(100) DEFAULT NULL,
  `descri2` varchar(100) DEFAULT NULL,
  `descri3` varchar(100) DEFAULT NULL,
  `bg_descripciones` varchar(20) DEFAULT NULL,
  `titulo` varchar(40) DEFAULT NULL,
  `bg_titulo` varchar(20) DEFAULT NULL,
  `color_titulo` varchar(20) DEFAULT NULL,
  `bg_subtitulo` varchar(20) DEFAULT NULL,
  `color_subtitulo` varchar(20) DEFAULT NULL,
  `color_descripciones` varchar(20) DEFAULT NULL,
  `bg_card` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `part_info` */

insert  into `part_info`(`id`,`opcion1`,`opcion2`,`img`,`bg_header`,`bg_botones`,`color_letra_botones`,`opcion3`,`opcion4`,`opcion5`,`bg_opciones`,`color_opciones`,`descri1`,`descri2`,`descri3`,`bg_descripciones`,`titulo`,`bg_titulo`,`color_titulo`,`bg_subtitulo`,`color_subtitulo`,`color_descripciones`,`bg_card`) values 
(1,'Home','Login','jquery.mobile/images/inicial.png','#F72929','#000000','#FFFFFF','Productos','¿Quienes somos?','Contacto','#A8E5CD','#000000','Compra tus repuestos desde la comodidad de tu hogar','Envíos Nacionales Garantizados','Repuestos importados 100% originales','#A8C8E5','Algunos de nuestros productos','#A8E5CD','#000000','#B2F7D9','#000000','#000000','#E1E1E1');

/*Table structure for table `part_usuarios` */

DROP TABLE IF EXISTS `part_usuarios`;

CREATE TABLE `part_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `security` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `part_usuarios` */

insert  into `part_usuarios`(`id`,`user`,`pass`,`rol`,`security`) values 
(1,'jeff','jda','Ultra','MINAMEISJEFF');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
