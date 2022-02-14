/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - db10119213penyewaanmobil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db10119213penyewaanmobil` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db10119213penyewaanmobil`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id_customer` varchar(5) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id_customer`,`nama_customer`,`alamat`,`no_telp`,`username`,`password`) values 
('C001','Dodi Gunawan','Bandung,Jawa Barat','087946813547','a','a'),
('C002','Mutiara Rahmat','Cirebon,Jawa Barat','085968347210','b','b'),
('C003','Maman Sidikin','Cicaheum,Jawa Barat','085846379215','c','c'),
('C004','Didik Mahendra','Jayagiri,Jawa Barat','089468573182','d','d'),
('C005','Tri Tafriyadi','Lembang,Jawa Barat','081426789345','e','e'),
('C006','Jusni Indra','GunungPutri,Jawa Barat','088764931852','f','f'),
('C007','Miyawaki Triana','Cibodas,Jawa Barat','084979815624','g','g'),
('C008','Sepi Sentosa','GudangKahuripan,Jawa Barat','089873462158','h','h'),
('C009','Muhammad Rizky','Cihampelas,Jawa Barat','081910541990','i','i'),
('C010','Reggie Sukanta','Dipatiukur,Jawa Barat','083456781944','j','j'),
('C011','Wiyana Sakti','Kopo,Jawa Barat','081648729531','k','k'),
('C012','Najib Novarino','Ngamprah,Jawa Barat','088946378542','l','l'),
('C013','Ahmad Fahlevi','Cisarua,Jawa Barat','085437918625','m','m'),
('C014','Joyson Irdhana','Cimahi,Jawa Barat','081310246859','n','n'),
('C015','Ayu Wahyuni','Cikarang,Jawa Barat','084975816438','o','o'),
('C016','Kang Hansol','Bogor,Jawa Barat','081976484259','p','p'),
('C017','Pasha Ungu','Bekasi,Jawa Barat','084678193582','q','q'),
('C018','Nicholas Saputra','Paronpong,Jawa Barat','084975816431','r','r'),
('C019','Jefri Nicole','Cikole,Jawa Barat','085497381640','s','s'),
('C020','Christopher Devin','Subang,Jawa Barat','087946821621','t','t'),
('C021','Benjamin','Sumedang,Jawa Barat','089678519348','u','u'),
('C022','Koruru','Setiabudi,Jawa Barat','085494867391','v','v'),
('C023','Refi Zulhaqi','Sukamaju,Jawa Barat','081795438265','w','w'),
('C024','Senandung','Sukaempat,Jawa Barat','085498763182','x','x'),
('C025','Cahya Nun Sukun','Wangunsari,Jawa Barat','084978653821','y','y');

/*Table structure for table `destinasi` */

DROP TABLE IF EXISTS `destinasi`;

CREATE TABLE `destinasi` (
  `id_destinasi` varchar(5) NOT NULL,
  `id_customer` varchar(5) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_destinasi`),
  KEY `id_customer` (`id_customer`),
  CONSTRAINT `destinasi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `destinasi` */

insert  into `destinasi`(`id_destinasi`,`id_customer`,`tgl_sewa`,`tgl_kembali`,`tujuan`) values 
('D001','C001','2021-04-02','2021-04-03','Lembang'),
('D002','C002','2021-04-05','2021-04-08','Bandung'),
('D003','C003','2021-04-09','2021-04-11','Cirebon'),
('D004','C004','2021-04-12','2021-04-13','Cikole'),
('D005','C005','2021-04-14','2021-04-16','Dipatiukur'),
('D006','C006','2021-04-17','2021-04-18','Bandung'),
('D007','C007','2021-04-18','2021-04-19','Lembang'),
('D008','C008','2021-04-20','2021-04-21','SetiaBudi'),
('D009','C009','2021-04-22','2021-04-23','Cikole'),
('D010','C010','2021-04-24','2021-04-26','Kopo'),
('D011','C011','2021-04-27','2021-04-28','Cicaheum'),
('D012','C012','2021-05-01','2021-05-03','Cisarua'),
('D013','C013','2021-05-04','2021-05-06','Lembang'),
('D014','C014','2021-05-07','2021-05-10','Dipatiukur'),
('D015','C015','2021-05-11','2021-05-14','Dipatiukur'),
('D016','C016','2021-05-15','2021-05-18','Bandung'),
('D017','C017','2021-05-19','2021-05-22','Bandung'),
('D018','C018','2021-05-23','2021-05-24','Lembang'),
('D019','C019','2021-05-25','2021-05-29','Kopo'),
('D020','C020','2021-06-01','2021-06-04','Lembang'),
('D021','C021','2021-06-05','2021-06-08','Lembang'),
('D022','C022','2021-06-09','2021-06-11','Lembang'),
('D023','C023','2021-06-12','2021-06-15','Bandung'),
('D024','C024','2021-06-16','2021-06-19','Bandung'),
('D025','C025','2021-06-20','2021-06-25','Bandung');

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(5) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id_karyawan`,`nama_karyawan`,`no_telp`,`username`,`password`) values 
('K001','Akbar Gunawan','085910233131','a','a'),
('K002','Dodi Rahmat','088883112315','b','b'),
('K003','Maman Taher','083875425333','c','c'),
('K004','Agus Suhendra','089657244131','d','d'),
('K005','Ari Tri Tafriyadi','085427844566','e','e'),
('K006','Arham Sitorus','085705069967','f','f'),
('K007','Denden Tri Triana','082212750007','g','g'),
('K008','Senja Rahmat Sentosa','082874365979','h','h'),
('K009','Muhammad Irdhana','081910541990','i','i'),
('K010','Regi Prabowo','085874265131','j','j'),
('K011','Irmawan Sakti Wiguna','083445825777','k','k'),
('K012','Raffi Indrwawan','081246597888','l','l'),
('K013','Rizky Raihan','082365797824','m','m'),
('K014','Kelvin Sulistiawan','088120659769','n','n'),
('K015','Doni Wejaya','085575244151','o','o'),
('K016','Caesar Pamungkas','083465862135','p','p'),
('K017','Salman Hidayah','089465821567','q','q'),
('K018','Ujang Marshmello','083468512487','r','r'),
('K019','Pasha Al-Muntada','081006549835','s','s'),
('K020','Rizki Okta','085469356894','t','t'),
('K021','Anas Kajib','084657978021','u','u'),
('K022','Arjuna Ibrahimovic','085845136925','v','v'),
('K023','Ben Taaruf','087824356700','w','w'),
('K024','Tri Kazuto','085862135498','x','x'),
('K025','Den Alfian','087594862157','y','y');

/*Table structure for table `mobil` */

DROP TABLE IF EXISTS `mobil`;

CREATE TABLE `mobil` (
  `id_mobil` varchar(5) NOT NULL,
  `plat_mobil` varchar(15) NOT NULL,
  `merk_mobil` varchar(15) NOT NULL,
  `jenis_mobil` varchar(10) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `harga_sewa` int(10) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mobil` */

insert  into `mobil`(`id_mobil`,`plat_mobil`,`merk_mobil`,`jenis_mobil`,`nama_mobil`,`harga_sewa`) values 
('M001','D 1500 AJC','Toyota','SUV','Toyota Raize',2000000),
('M002','D 1097 AJS','Toyota','SUV','Toyota Rush',2000000),
('M003','D 1523 AJB','Toyota','SUV','Toyota Fortuner',2500000),
('M004','D 1532 AJD','Toyota','SUV','Toyota Land Cruiser',2500000),
('M005','D 1987 AAF','Toyota','SEDAN','Toyota Camry',1900000),
('M006','D 1197 AAB','Toyota','SEDAN','Toyota Vios',1500000),
('M007','D 1275 AAS','Toyota','SEDAN','Toyota Camry Hybrid',2500000),
('M008','D 1567 AAF','Toyota','SEDAN','Toyota Corolla Altis',1800000),
('M009','D 1996 AFA','Toyota','MINIVAN','Toyota Haice',2000000),
('M010','D 1504 AJE','Toyota','MPV','Toyota Kijang Innova',1300000),
('M011','D 1281 AJY','Toyota','MPV','Toyota Avanza',1500000),
('M012','D 1309 AJK','Toyota','MPV','Toyota Avanza Veloz',1700000),
('M013','D 1425 AJL','Toyota','MPV','Toyota Calya',1400000),
('M014','D 1783 AJQ','Toyota','MPV','Toyota Alphard',2600000),
('M015','D 1041 AJT','Toyota','MPV','Toyota Vellfire',2500000),
('M016','D 1293 AJR','Toyota','MPV','Toyota Voxy',2500000),
('M017','D 1562 AJH','Toyota','MPV','Toyota Sienta',1500000),
('M018','D 1720 AJW','Toyota','PICKUP','Toyota Hilux',2500000),
('M019','D 1723 AJY','Toyota','CROSSOVER','Toyota CHR Hybrid',2500000),
('M020','D 1911 AJS','Toyota','CROSSOVER','Toyota CHR',1800000),
('M021','D 1398 AJO','Toyota','CROSSOVER','Toyota Corolla Cross',1800000),
('M022','D 1188 AAG','Toyota','Coupe','Toyota 86',2560000),
('M023','D 1002 AAT','Toyota','Coupe','Toyota GR Supra',3000000),
('M024','D 1541 AFE','Toyota','HATCHBACK','Toyota Yaris',1500000),
('M025','D 1996 AFW','Toyota','HATCHBACK','Toyota Agya',1500000);

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(5) NOT NULL,
  `id_karyawan` varchar(5) NOT NULL,
  `id_customer` varchar(5) NOT NULL,
  `id_mobil` varchar(5) NOT NULL,
  `id_destinasi` varchar(5) NOT NULL,
  `total_harga_sewa` int(10) NOT NULL,
  `metode_bayar` enum('Tunai','Kredit') NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_karyawan` (`id_karyawan`),
  KEY `id_customer` (`id_customer`),
  KEY `id_mobil` (`id_mobil`),
  KEY `pembayaran_ibfk_4` (`id_destinasi`),
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`id_pembayaran`,`id_karyawan`,`id_customer`,`id_mobil`,`id_destinasi`,`total_harga_sewa`,`metode_bayar`) values 
('B001','K001','C001','M001','D001',2000000,'Tunai'),
('B002','K002','C002','M002','D002',6000000,'Tunai'),
('B003','K003','C003','M003','D003',5000000,'Kredit'),
('B004','K004','C004','M004','D004',2500000,'Kredit'),
('B005','K005','C005','M005','D005',3800000,'Tunai'),
('B006','K006','C006','M006','D006',1500000,'Tunai'),
('B007','K007','C007','M007','D007',2500000,'Tunai'),
('B008','K008','C008','M008','D008',1800000,'Tunai'),
('B009','K009','C009','M009','D009',2000000,'Tunai'),
('B010','K010','C010','M010','D010',2600000,'Tunai'),
('B011','K011','C011','M011','D011',1500000,'Tunai'),
('B012','K012','C012','M012','D012',2400000,'Tunai'),
('B013','K013','C013','M013','D013',2800000,'Tunai'),
('B014','K014','C014','M014','D014',7800000,'Kredit'),
('B015','K015','C015','M015','D015',7500000,'Kredit'),
('B016','K016','C016','M016','D016',7500000,'Kredit'),
('B017','K017','C017','M017','D017',6000000,'Tunai'),
('B018','K018','C018','M018','D018',2500000,'Tunai'),
('B019','K019','C019','M019','D019',10000000,'Tunai'),
('B020','K020','C020','M020','D020',5400000,'Tunai'),
('B021','K021','C021','M021','D021',5400000,'Tunai'),
('B022','K022','C022','M022','D022',5120000,'Tunai'),
('B023','K023','C023','M023','D023',9000000,'Kredit'),
('B024','K024','C024','M024','D024',6000000,'Tunai'),
('B025','K025','C025','M025','D025',7500000,'Kredit');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
