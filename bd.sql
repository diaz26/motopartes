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
  `parte` varchar(100) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_referencia` int(11) DEFAULT NULL,
  `id_color` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `part_articulos` */

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
