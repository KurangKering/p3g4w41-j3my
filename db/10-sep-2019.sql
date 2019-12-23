-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.40-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pegawai_jemmy
DROP DATABASE IF EXISTS `pegawai_jemmy`;
CREATE DATABASE IF NOT EXISTS `pegawai_jemmy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pegawai_jemmy`;

-- Dumping structure for table pegawai_jemmy.data_dokumen
DROP TABLE IF EXISTS `data_dokumen`;
CREATE TABLE IF NOT EXISTS `data_dokumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_pegawai_id` int(11) DEFAULT NULL,
  `sk_cpns` varchar(250) DEFAULT NULL,
  `ka_npwp` varchar(250) DEFAULT '',
  `sk_pns` varchar(250) DEFAULT NULL,
  `sk_terakhir` varchar(250) DEFAULT NULL,
  `ka_pegawai` varchar(250) DEFAULT NULL,
  `photo_profil` varchar(250) DEFAULT NULL,
  `ka_taspen` varchar(250) DEFAULT NULL,
  `karis` varchar(250) DEFAULT NULL,
  `ktp` varchar(250) DEFAULT NULL,
  `buku_nikah` varchar(250) DEFAULT NULL,
  `ka_keluarga` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_data_dokumen_data_pegawai` (`data_pegawai_id`),
  CONSTRAINT `FK_data_dokumen_data_pegawai` FOREIGN KEY (`data_pegawai_id`) REFERENCES `data_pegawai` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.data_dokumen: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_dokumen` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_dokumen` ENABLE KEYS */;

-- Dumping structure for table pegawai_jemmy.data_pegawai
DROP TABLE IF EXISTS `data_pegawai`;
CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `jabatan` varchar(250) DEFAULT NULL,
  `nip` varchar(250) DEFAULT NULL,
  `tempat_lahir` varchar(250) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `pendidikan_terakhir` varchar(250) DEFAULT NULL,
  `pangkat_golongan` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.data_pegawai: ~1 rows (approximately)
/*!40000 ALTER TABLE `data_pegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_pegawai` ENABLE KEYS */;

-- Dumping structure for table pegawai_jemmy.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `role_name`) VALUES
	(1, 'Admin');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table pegawai_jemmy.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  KEY `FK_users_roles` (`role_id`),
  CONSTRAINT `FK_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `username`, `nama`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
	(5, 'admin', 'admin', 'admin@admin.com', '7815696ecbf1c96e6894b779456d330e', 1, '2019-07-25 12:30:19', '2019-09-10 10:41:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
