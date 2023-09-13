/*
SQLyog Ultimate
MySQL - 11.2.0-MariaDB : Database - tafita_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tafita_db` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `tafita_db`;

/*Table structure for table `auteurs` */

DROP TABLE IF EXISTS `auteurs`;

CREATE TABLE `auteurs` (
  `id_auteur` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_auteur` varchar(255) DEFAULT NULL,
  `prenom_auteur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `auteurs` */

insert  into `auteurs`(`id_auteur`,`nom_auteur`,`prenom_auteur`) values 
(1,NULL,NULL);

/*Table structure for table `livres` */

DROP TABLE IF EXISTS `livres`;

CREATE TABLE `livres` (
  `id_livre` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_auteur` bigint(20) unsigned DEFAULT NULL,
  `tit_livre` varchar(255) DEFAULT NULL,
  `page_livre` varchar(255) DEFAULT NULL,
  `edit_livre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_livre`),
  KEY `id_auteur` (`id_auteur`),
  CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteurs` (`id_auteur`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `livres` */

insert  into `livres`(`id_livre`,`id_auteur`,`tit_livre`,`page_livre`,`edit_livre`) values 
(1,1,'Roman de la vie 2','200 2','2000 2'),
(2,1,'La belle et la bete','400','2003'),
(3,1,'Naruto','1000','1999'),
(4,1,'Tafita le Hercule 2','200 2','2000 2'),
(5,NULL,NULL,NULL,NULL),
(6,NULL,NULL,NULL,NULL),
(7,1,'Tafita le Hercule','200','2000');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
