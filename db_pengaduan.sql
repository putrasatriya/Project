/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - db_pengaduan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pengaduan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pengaduan`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`id`,`username`,`password`) values 
(1,'admin','admin');

/*Table structure for table `tb_aduan` */

DROP TABLE IF EXISTS `tb_aduan`;

CREATE TABLE `tb_aduan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `kategori` varchar(75) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Menunggu Respon',
  `tanggapan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_aduan` */

/*Table structure for table `tb_info` */

DROP TABLE IF EXISTS `tb_info`;

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_info` */

/*Table structure for table `tb_nik` */

DROP TABLE IF EXISTS `tb_nik`;

CREATE TABLE `tb_nik` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) DEFAULT NULL,
  `nama` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tb_nik` */

insert  into `tb_nik`(`no`,`nik`,`nama`) values 
(1,'3471141912750001\r\n','Hartono\r\n'),
(2,'3471145212720002\r\n','Sari Asih\r\n'),
(3,'3471141512980001\r\n','Ratna Puspa Kusuma\r\n'),
(4,'3471140609030003\r\n','Harjono\r\n'),
(5,'3471147112080002\r\n','Sarjilah\r\n'),
(6,'3471142302130001\r\n','Tri Hartanto\r\n'),
(7,'3471142305680001','Sarwo Untoro\r\n'),
(8,'3471145912720001','Ari Lestari'),
(9,'3471145912720001','Seto Diwangkara\r\n'),
(10,'3471142801590001\r\n','Robby Febriansyah\r\n'),
(11,'3471147112610014\r\n','Hendro Siswanto\r\n'),
(12,'3471140512890001\r\n','Devi Ekaristy\r\n');

/*Table structure for table `tb_survei` */

DROP TABLE IF EXISTS `tb_survei`;

CREATE TABLE `tb_survei` (
  `id_survei` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `t1` varchar(100) DEFAULT NULL,
  `t2` varchar(100) DEFAULT NULL,
  `t3` varchar(100) DEFAULT NULL,
  `t4` varchar(100) DEFAULT NULL,
  `t5` varchar(100) DEFAULT NULL,
  `t6` varchar(100) DEFAULT NULL,
  `t7` varchar(100) DEFAULT NULL,
  `t8` varchar(100) DEFAULT NULL,
  `t9` varchar(100) DEFAULT NULL,
  `10` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_survei`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_survei` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`no`,`nama`,`email`,`telepon`,`nik`,`username`,`password`) values 
(8,'Satria YP','satriayp@gmail.com','089536718888','457709259918009','satria','123456');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
