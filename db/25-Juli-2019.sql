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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.data_dokumen: ~3 rows (approximately)
DELETE FROM `data_dokumen`;
/*!40000 ALTER TABLE `data_dokumen` DISABLE KEYS */;
INSERT INTO `data_dokumen` (`id`, `data_pegawai_id`, `sk_cpns`, `ka_npwp`, `sk_pns`, `sk_terakhir`, `ka_pegawai`, `ka_taspen`, `karis`, `ktp`, `buku_nikah`, `ka_keluarga`, `created_at`, `updated_at`) VALUES
	(6, 22, '9c3aef848ac1a47ba99bcdaa4190658b.jpg', 'd15dfdfa80980515d07d1b08e18fddbc.png', 'b9b6b0b73555d1832edfc433ba667d69.png', '4d89e52c57cc9b10a5c74aef26494df7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-24 13:52:04', '2019-07-24 19:59:21'),
	(7, 23, '426438d063267882762bd29663252a6d.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-24 14:29:14', '2019-07-24 14:29:14'),
	(8, 24, '60bea605525ac95190de2672215772f0.png', '8714b993f4d509ad44854485d9714529.png', '673a194006cfbc7d801db733d346dfb8.jpg', 'b00abc55a11661570fd8d3c43732d8b6.jpg', '68e49acf7ce106279d8b4fd8235d5f5c.jpg', '986d45f42c747a5a9600dd9b00b2e4ea.jpg', '70c4ba557be5736265dde0f6977d78c7.jpg', 'b76383893bb59c327377c6430575c3e5.jpg', '8bafcd6d3d975c34e3ee39f07207b72d.jpg', '6265236bf35caf365ba66c6967f0318e.jpg', '2019-07-25 06:47:14', '2019-07-25 06:48:25');
/*!40000 ALTER TABLE `data_dokumen` ENABLE KEYS */;

-- Dumping structure for table pegawai_jemmy.data_pegawai
DROP TABLE IF EXISTS `data_pegawai`;
CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.data_pegawai: ~3 rows (approximately)
DELETE FROM `data_pegawai`;
/*!40000 ALTER TABLE `data_pegawai` DISABLE KEYS */;
INSERT INTO `data_pegawai` (`id`, `nama`, `jabatan`, `nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pendidikan_terakhir`, `pangkat_golongan`, `created_at`, `updated_at`) VALUES
	(22, 'asdf', 'saf', '2341a', 'adf', '1991-01-01', 'afd', 'saf', 'sf', '2019-07-24 13:51:27', '2019-07-24 13:51:27'),
	(23, 'asf', 'saf', 'asf', 'sf', '1991-01-01', 'afs', 'saf', 'sfa', '2019-07-24 14:25:30', '2019-07-24 14:25:30'),
	(24, 'kasdkf', 'asfksa', 'safj', 'sfjksa', '1991-01-01', 'sf', 'sf', 's', '2019-07-25 06:46:51', '2019-07-25 06:46:51');
/*!40000 ALTER TABLE `data_pegawai` ENABLE KEYS */;

-- Dumping structure for table pegawai_jemmy.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pegawai_jemmy.roles: ~0 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `role_name`) VALUES
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

-- Dumping data for table pegawai_jemmy.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
	(5, 'admin', '', '', 'asd', 1, '2019-07-25 12:30:19', '2019-07-25 12:30:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
