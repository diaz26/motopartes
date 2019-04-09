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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `part_articulos` */

insert  into `part_articulos`(`id`,`nombre`,`descripcion`,`id_parte`,`ubicacion`,`cantidad`,`precio`,`id_marca`,`id_referencia`,`year`,`id_color`,`img`) values 
(1,'Cúpula frontal  - MT 09','Carenaje de la farola','1','frente',2,400000.00,1,1,2018,1,'jquery.mobile/images/cupula.jpg'),
(2,'Carenaje - R1','Carenaje completo','2','todo',1,4500000.00,1,2,2019,2,'jquery.mobile/images/yamaha.jpg'),
(3,'Kit de arrastre - Evo R3','Kit de arrastre (cadenilla y piñones)','3','abajo',5,45000.00,5,3,2017,3,'jquery.mobile/images/kitarr.jpg'),
(4,'Sliders - MT 07','Sliders-Protecciones laterales','4','Lateral',10,70000.00,1,4,2016,3,'jquery.mobile/images/sliders.jpg');

/*Table structure for table `part_colores` */

DROP TABLE IF EXISTS `part_colores`;

CREATE TABLE `part_colores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `part_colores` */

insert  into `part_colores`(`id`,`color`) values 
(1,'Negro'),
(2,'Blanco'),
(3,'Metal');

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

/*Table structure for table `part_marcas` */

DROP TABLE IF EXISTS `part_marcas`;

CREATE TABLE `part_marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `part_marcas` */

insert  into `part_marcas`(`id`,`marca`) values 
(1,'Yamaha'),
(2,'Honda'),
(3,'Suzuki'),
(4,'Kawasaki'),
(5,'AKT'),
(6,'KTM'),
(7,'BMW');

/*Table structure for table `part_parte` */

DROP TABLE IF EXISTS `part_parte`;

CREATE TABLE `part_parte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parte` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `part_parte` */

insert  into `part_parte`(`id`,`parte`) values 
(1,'Farola'),
(2,'Completo'),
(3,'Rodamiento'),
(4,'Proteccion');

/*Table structure for table `part_referencias` */

DROP TABLE IF EXISTS `part_referencias`;

CREATE TABLE `part_referencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `part_referencias` */

insert  into `part_referencias`(`id`,`referencia`) values 
(1,'MT-09'),
(2,'R1'),
(3,'Evo-R3'),
(4,'MT-07');

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
