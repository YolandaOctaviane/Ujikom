/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.20-MariaDB : Database - data
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`data` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `data`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id_buku` varchar(20) NOT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `nama_buku` varchar(50) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `buku` */

insert  into `buku`(`id_buku`,`kategori`,`nama_buku`,`harga`,`stok`,`penerbit`) values 
('k1002','Keilmuan','Artifical Intelligence',45000,60,'Penerbit Informatika'),
('k2003','Keilmuan','Autocad 3Dimensi',40000,25,'Penerbit Informatika'),
('k3004','Keilmuan','Cloud Computing Technology',85000,15,'Penerbit Informatika'),
('n1001','Novel','Cahaya Di Penjuru Hati',68000,10,'Penerbit Informatika'),
('n1002','Novel','Aku Ingin Cerita',48000,12,'Penerbit Informatika');

/*Table structure for table `penerbit` */

DROP TABLE IF EXISTS `penerbit`;

CREATE TABLE `penerbit` (
  `Id_penerbit` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `telepon` int(10) DEFAULT NULL,
  PRIMARY KEY (`Id_penerbit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penerbit` */

insert  into `penerbit`(`Id_penerbit`,`nama`,`alamat`,`kota`,`telepon`) values 
('sp01','Penerbit Informatika','Jl. Buah Batu No.121','Bandung',2147483647),
('sp02','Andi Offset','Jl. Suryalana IX No 3','Bandung',2147483647),
('sp03','Danendra','Jl. Moch. Toha 44','Bandung',225201215);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
