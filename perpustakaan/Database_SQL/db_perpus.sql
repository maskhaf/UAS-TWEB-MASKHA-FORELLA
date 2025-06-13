-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `db_perpus` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_perpus`;

CREATE TABLE `anggota` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `no_hp`) VALUES
(1,	'Maskha ',	'G. Obos 12',	'081234567890'),
(2,	'Joni',	'Jl. Merdeka No.2',	'089876543210'),
(5,	'Pak Rommi',	'G. Obos 13',	'082353310001'),
(8,	'Andri',	'JL. Menteng 25',	'081254458991');

CREATE TABLE `buku` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun` year DEFAULT NULL,
  `stok` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `stok`) VALUES
(1,	'Laskar Pelangi',	'Andrea Hirata',	'Bentang Pustaka',	'2005',	6),
(2,	'Bumi Manusia',	'Pramoedya Ananta Toer',	'Hasta Mitra',	'1980',	3),
(4,	'Belajar PHP dan MySQL',	'Agus Surono',	'Informatika',	'2021',	4),
(5,	'Pemrograman Web Lanjut',	'Dewi Pratiwi',	'Graha Ilmu',	'2022',	2),
(6,	'Algoritma dan Pemrograman',	'Rizal Hakim',	'Andi Publisher',	'2020',	7),
(7,	'Dasar-Dasar Jaringan Komputer',	'Yudi Setiawan',	'Elex Media',	'2019',	4),
(8,	'Sistem Basis Data',	'Rina Hartati',	'Gava Media',	'2023',	4),
(10,	'Algoritma dan Logika Pemrograman',	'Andi Firmansyah',	'Deepublish',	'2020',	5),
(11,	'Sistem Operasi',	'Siti Nurhaliza',	'Salemba Empat',	'2021',	8),
(12,	'Manajemen Basis Data',	'Yoga Pratama',	'Elex Media Komputindo',	'2022',	4);

CREATE TABLE `peminjaman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `buku_id` int NOT NULL,
  `anggota_id` int NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('dipinjam','kembali') DEFAULT 'dipinjam',
  PRIMARY KEY (`id`),
  KEY `buku_id` (`buku_id`),
  KEY `anggota_id` (`anggota_id`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`id`) ON DELETE CASCADE,
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `peminjaman` (`id`, `buku_id`, `anggota_id`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1,	1,	1,	'2025-06-10',	'2025-06-17',	'kembali'),
(2,	2,	2,	'2025-06-05',	'2025-06-12',	'kembali'),
(4,	8,	2,	'2025-06-13',	'2025-06-19',	'dipinjam'),
(5,	4,	1,	'2025-06-19',	'2025-06-19',	'dipinjam'),
(6,	5,	8,	'2025-06-13',	'2025-06-20',	'dipinjam');

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','petugas') DEFAULT 'petugas',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1,	'admin',	'e1417e6e55b78673fb53fb39ed78fd30',	'admin');

-- 2025-06-13 13:49:07
