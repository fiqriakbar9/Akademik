-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: akademik
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'root','akademik');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dosen`
--

DROP TABLE IF EXISTS `data_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen` (
  `nip` char(8) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_dosen` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen`
--

LOCK TABLES `data_dosen` WRITE;
/*!40000 ALTER TABLE `data_dosen` DISABLE KEYS */;
INSERT INTO `data_dosen` VALUES ('09118020','fiqritamma','Tatang S.Dm','Tatangrejim@gmail.com','Jl.Jeruk lemon no.89 Bojongloa 696969','semarang','1977-05-19','L','Islam'),('09118021','qwerty56','Rijki','rijkialala@gmail.com','JL.Buahan 78 ','Bandung','1988-09-09','L','Islam'),('09118022','qwerty565','Rini','riniku@gmail.com','JL jalanalajah','tegal','1986-02-02','P','Islam'),('09118023','qwerty56','Isti','istike7@gmail.com','Jl.Kapanjalannyabos','semarang','1989-08-11','P','Islam'),('09118024','fiqritamma','Fiqri','fiqrigamteng@gmail.com',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_mhs`
--

DROP TABLE IF EXISTS `data_mhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_mhs` (
  `nim` char(8) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_mahasiswa` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `jenjang` char(2) NOT NULL,
  `semester` char(5) NOT NULL,
  `kd_jurusan` varchar(10) NOT NULL,
  PRIMARY KEY (`nim`),
  KEY `kd_jurusan` (`kd_jurusan`),
  CONSTRAINT `data_mhs_ibfk_1` FOREIGN KEY (`kd_jurusan`) REFERENCES `jurusan` (`kd_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_mhs`
--

LOCK TABLES `data_mhs` WRITE;
/*!40000 ALTER TABLE `data_mhs` DISABLE KEYS */;
INSERT INTO `data_mhs` VALUES ('10118020','fiqritamma','Fiqri Akbar Pratama','Fiqriakbar9@gmail.com','Bandung','2000-05-12','L','Islam','S1','IV','JR001'),('10118021','fiqritamma','Tamma','tammaatmpan@gmail.com	','Jakarta','1989-11-15','L','Islam','S1','V','JR004');
/*!40000 ALTER TABLE `data_mhs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fakultas`
--

DROP TABLE IF EXISTS `fakultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fakultas` (
  `kd_fakultas` varchar(10) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fakultas`
--

LOCK TABLES `fakultas` WRITE;
/*!40000 ALTER TABLE `fakultas` DISABLE KEYS */;
INSERT INTO `fakultas` VALUES ('FK001',' ‎Fakultas Teknik dan Ilmu Komputer'),('FK002','Fakultas Sosiologi'),('FK003','Fakultas Design');
/*!40000 ALTER TABLE `fakultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurusan` (
  `kd_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `kd_fakultas` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_jurusan`),
  KEY `kd_fakultas` (`kd_fakultas`),
  CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`kd_fakultas`) REFERENCES `fakultas` (`kd_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurusan`
--

LOCK TABLES `jurusan` WRITE;
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
INSERT INTO `jurusan` VALUES ('JR001','Teknik Informatika','FK001'),('JR002','Psikologi','FK002'),('JR003','Arsitektur','FK003'),('JR004','Sistem Informasi','FK001');
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `krs`
--

DROP TABLE IF EXISTS `krs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(8) NOT NULL,
  `kd_matakuliah` varchar(10) NOT NULL,
  `semester` char(3) NOT NULL,
  `nilai` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_krs`),
  KEY `kd_matakuliah` (`kd_matakuliah`),
  KEY `nim` (`nim`),
  CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`kd_matakuliah`) REFERENCES `matakuliah` (`kd_matakuliah`),
  CONSTRAINT `krs_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `data_mhs` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `krs`
--

LOCK TABLES `krs` WRITE;
/*!40000 ALTER TABLE `krs` DISABLE KEYS */;
INSERT INTO `krs` VALUES (1,'10118020','MK001','4',85),(2,'10118020','MK003','2',50),(3,'10118020','MK004','4',NULL),(5,'10118020','MK002','3',NULL),(6,'10118021','MK001','4',NULL),(7,'10118021','MK002','3',NULL);
/*!40000 ALTER TABLE `krs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matakuliah` (
  `kd_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(35) NOT NULL,
  `sks` int(1) NOT NULL,
  `semester` int(2) NOT NULL,
  `nip` char(8) NOT NULL,
  PRIMARY KEY (`kd_matakuliah`),
  KEY `nip` (`nip`),
  CONSTRAINT `matakuliah_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matakuliah`
--

LOCK TABLES `matakuliah` WRITE;
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` VALUES ('MK001','Algoritma Pemrograman',3,4,'09118020'),('MK002','Matematika Diskrit',4,3,'09118021'),('MK003','Basis Data',4,2,'09118022'),('MK004','Program Visual',2,4,'09118023');
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-17 17:14:03
