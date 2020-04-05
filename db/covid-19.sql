-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 05 Apr 2020 pada 06.03
-- Versi server: 5.7.23
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_desa`
--

DROP TABLE IF EXISTS `ref_desa`;
CREATE TABLE IF NOT EXISTS `ref_desa` (
  `id_kecamatan` int(11) NOT NULL,
  `kd_desa` int(11) NOT NULL COMMENT 'kode desa / kelurahan',
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `status_desa` int(11) NOT NULL COMMENT '2 = Desa 1 = Kelurahan',
  `nama_desa` varchar(50) NOT NULL,
  `id_zona` int(11) NOT NULL,
  PRIMARY KEY (`id_desa`) USING BTREE,
  UNIQUE KEY `id_kecamatan` (`id_kecamatan`,`kd_desa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `ref_desa`
--

INSERT INTO `ref_desa` (`id_kecamatan`, `kd_desa`, `id_desa`, `status_desa`, `nama_desa`, `id_zona`) VALUES
(230206, 1001, 1, 1, 'Praya', 1),
(230206, 1002, 2, 1, 'Leneng', 1),
(230206, 1003, 3, 1, 'Gerunung', 1),
(230206, 1004, 4, 1, 'Semayan', 1),
(230206, 1005, 5, 1, 'Perapen', 1),
(230206, 1006, 6, 1, 'Tiwugalih', 1),
(230206, 1007, 7, 1, 'Gonjak', 1),
(230206, 1008, 8, 1, 'Panji Sari', 1),
(230206, 1009, 9, 1, 'Renteng', 1),
(230206, 2010, 10, 2, 'Mertak Tombok', 1),
(230206, 2011, 11, 2, 'Aik Mual', 1),
(230206, 2012, 12, 2, 'Montong Terep', 1),
(230206, 2013, 13, 2, 'Jago', 1),
(230206, 2014, 14, 2, 'Bunut Baok', 1),
(230206, 2015, 15, 2, 'Mekar Damai', 1),
(230210, 2001, 16, 2, 'Barejulat', 1),
(230210, 2002, 17, 2, 'Ubung', 1),
(230210, 2003, 18, 2, 'Jelantik', 1),
(230210, 2004, 19, 2, 'Labulia', 1),
(230210, 2005, 20, 2, 'Batu Tulis', 1),
(230210, 2006, 21, 2, 'Perina', 1),
(230210, 2007, 22, 2, 'Pengenjek', 1),
(230210, 2008, 23, 2, 'Puyung', 1),
(230210, 2009, 24, 2, 'Nyerot', 1),
(230210, 2010, 25, 2, 'Sukarara', 1),
(230210, 2011, 26, 2, 'Gemel', 1),
(230210, 2012, 27, 2, 'Bonjeruk', 1),
(230210, 2013, 28, 2, 'Bunkate', 1),
(230209, 2001, 29, 2, 'Bujak', 1),
(230209, 2002, 30, 2, 'Selebung', 1),
(230209, 2003, 31, 2, 'Peresak', 1),
(230209, 2004, 32, 2, 'Mantang', 1),
(230209, 2005, 33, 2, 'Aik Darek', 1),
(230209, 2006, 34, 2, 'Tampak Siring', 1),
(230209, 2007, 35, 2, 'Barabali', 1),
(230209, 2008, 36, 2, 'Beber', 1),
(230209, 2009, 37, 2, 'Pagutan', 1),
(230209, 2010, 38, 2, 'Mekar Bersatu', 1),
(230202, 2001, 39, 2, 'Sengkol', 1),
(230202, 2002, 40, 2, 'Segala Anyar', 1),
(230202, 2003, 41, 2, 'Sukadana', 1),
(230202, 2004, 42, 2, 'Teruwai', 1),
(230202, 2005, 43, 2, 'Pengengat', 1),
(230202, 2006, 44, 2, 'Kawo', 1),
(230202, 2007, 45, 2, 'Gapura', 1),
(230202, 2008, 46, 2, 'Rembitan', 1),
(230202, 2009, 47, 2, 'Kuta', 1),
(230202, 2010, 48, 2, 'Pengembur', 1),
(230202, 2011, 49, 2, 'Tumpak', 1),
(230202, 2012, 50, 2, 'Mertak', 1),
(230202, 2013, 51, 2, 'Prabu', 1),
(230202, 2014, 52, 2, 'Tanak Awu', 1),
(230202, 2015, 53, 2, 'Ketara', 1),
(230202, 2016, 54, 2, 'Bangket Parak', 1),
(230201, 2001, 55, 2, 'Bonder', 1),
(230201, 2002, 56, 2, 'Banyu Urip', 1),
(230201, 2003, 57, 2, 'Mangkung', 1),
(230201, 2004, 58, 2, 'Kateng', 1),
(230201, 2005, 59, 2, 'Setanggor', 1),
(230201, 2006, 60, 2, 'Penujak', 1),
(230201, 2007, 61, 2, 'Selong Blanak', 1),
(230201, 2008, 62, 2, 'Mekar Sari', 1),
(230201, 2009, 63, 2, 'Batujai', 1),
(230201, 2010, 64, 2, 'Tanak Rarang', 1),
(230203, 2001, 65, 2, 'Sukaraja', 1),
(230203, 2002, 66, 2, 'Beleka', 1),
(230203, 2003, 67, 2, 'Semoyang', 1),
(230203, 2004, 68, 2, 'Mujur', 1),
(230203, 2005, 69, 2, 'Landah', 1),
(230203, 2006, 70, 2, 'Sengkerang', 1),
(230203, 2007, 71, 2, 'Bilelando', 1),
(230203, 2008, 72, 2, 'Ganti', 1),
(230203, 2009, 73, 2, 'Marong', 1),
(230203, 2010, 74, 2, 'Kidang', 1),
(230204, 2001, 75, 2, 'Lekor', 1),
(230204, 2002, 76, 2, 'Langko', 1),
(230204, 2003, 77, 2, 'Janapria', 1),
(230204, 2004, 78, 2, 'Loang Maka', 1),
(230204, 2005, 79, 2, 'Saba', 1),
(230204, 2006, 80, 2, 'Bakan', 1),
(230204, 2007, 81, 2, 'Durian', 1),
(230204, 2008, 82, 2, 'Pendem', 1),
(230204, 2009, 83, 2, 'Selebung Rembiga', 1),
(230204, 2010, 84, 2, 'Kerembong', 1),
(230204, 2011, 85, 2, 'Jango', 1),
(230204, 2012, 86, 2, 'Setuta', 1),
(230208, 2001, 87, 2, 'Pringarata', 1),
(230208, 2002, 88, 2, 'Sepakek', 1),
(230208, 2003, 89, 2, 'Murbaya', 1),
(230208, 2004, 90, 2, 'Bagu', 1),
(230208, 2005, 91, 2, 'Sintung', 1),
(230208, 2006, 92, 2, 'Bilebante', 1),
(230208, 2007, 93, 2, 'Pemepek', 1),
(230208, 2008, 94, 2, 'Menemeng', 1),
(230208, 2009, 95, 2, 'Arjangka', 1),
(230208, 2010, 96, 2, 'Taman Indah', 1),
(230208, 2011, 97, 2, 'Sisik', 1),
(230205, 2001, 98, 2, 'Lendang Are', 1),
(230205, 2002, 99, 2, 'Monggas', 1),
(230205, 2003, 100, 2, 'Muncan', 1),
(230205, 2004, 101, 2, 'Bebuak', 1),
(230205, 2005, 102, 2, 'Kopang Rembiga', 1),
(230205, 2006, 103, 2, 'Dasan Baru', 1),
(230205, 2007, 104, 2, 'Montong Gamang', 1),
(230205, 2008, 105, 2, 'Darmaji', 1),
(230205, 2009, 106, 2, 'Wajageseng', 1),
(230205, 2010, 107, 2, 'Aik Bual', 1),
(230205, 2011, 108, 2, 'Semparu', 1),
(230212, 1001, 109, 1, 'Gerantung', 1),
(230212, 1002, 110, 1, 'Jontlak', 1),
(230212, 1003, 111, 1, 'Sasake', 1),
(230212, 2004, 112, 2, 'Jurang Jaler', 1),
(230212, 2005, 113, 2, 'Beraim', 1),
(230212, 2006, 114, 2, 'Batunyala', 1),
(230212, 2007, 115, 2, 'Lajut', 1),
(230212, 2008, 116, 2, 'Pengadang', 1),
(230212, 2009, 117, 2, 'Kelebuh', 1),
(230212, 2010, 118, 2, 'Pejanggik', 1),
(230212, 2011, 119, 2, 'Dakung', 1),
(230212, 2012, 120, 2, 'Prai Meke', 1),
(230211, 2001, 121, 2, 'Montong Sapah', 1),
(230211, 2002, 122, 2, 'Ungga', 1),
(230211, 2003, 123, 2, 'Kabul', 1),
(230211, 2004, 124, 2, 'Pelambik', 1),
(230211, 2005, 125, 2, 'Darek', 1),
(230211, 2006, 126, 2, 'Ranggagata', 1),
(230211, 2007, 127, 2, 'Pandan Indah', 1),
(230211, 2008, 128, 2, 'Serage', 1),
(230211, 2009, 129, 2, 'Montong Ajan', 1),
(230211, 2010, 130, 2, 'Batu Jangkih', 1),
(230211, 2011, 131, 2, 'Teduh', 1),
(230207, 2001, 132, 2, 'Lantan', 1),
(230207, 2002, 133, 2, 'Setiling', 1),
(230207, 2003, 134, 2, 'Tanak Beak', 1),
(230207, 2004, 135, 2, 'Aik Bukaq', 1),
(230207, 2005, 136, 2, 'Teratak', 1),
(230207, 2006, 137, 2, 'Aik Berik', 1),
(230207, 2007, 138, 2, 'Mas-mas', 1),
(230207, 2008, 139, 2, 'Karang Sidemen', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_kecamatan`
--

DROP TABLE IF EXISTS `ref_kecamatan`;
CREATE TABLE IF NOT EXISTS `ref_kecamatan` (
  `id_pemda` int(11) NOT NULL DEFAULT '1',
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kecamatan`) USING BTREE,
  KEY `id_kecamatan` (`id_pemda`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `ref_kecamatan`
--

INSERT INTO `ref_kecamatan` (`id_pemda`, `id_kecamatan`, `nama_kecamatan`) VALUES
(1, 230201, 'Praya Barat'),
(1, 230202, 'Pujut'),
(1, 230203, 'Praya Timur'),
(1, 230204, 'Janapria'),
(1, 230205, 'Kopang'),
(1, 230206, 'Praya'),
(1, 230207, 'Batukliang Utara'),
(1, 230208, 'Pringgarata'),
(1, 230209, 'Batukliang'),
(1, 230210, 'Jonggat'),
(1, 230211, 'Praya Barat Daya'),
(1, 230212, 'Praya Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

DROP TABLE IF EXISTS `tbl_lokasi`;
CREATE TABLE IF NOT EXISTS `tbl_lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kecamatan` int(100) DEFAULT NULL,
  `kd_desa` int(100) DEFAULT NULL,
  `koordinat` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sebaran`
--

DROP TABLE IF EXISTS `tbl_sebaran`;
CREATE TABLE IF NOT EXISTS `tbl_sebaran` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_lokasi` int(255) DEFAULT NULL,
  `pdp_dalam_pengawasan` int(100) DEFAULT NULL,
  `pdp_lepas_pengawasan` int(100) DEFAULT NULL,
  `odp_dalam_pemantauan` int(100) DEFAULT NULL,
  `odp_lepas_pemantauan` int(100) DEFAULT NULL,
  `positif` int(100) DEFAULT NULL,
  `meninggal` int(100) DEFAULT NULL,
  `sembuh` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(35) NOT NULL DEFAULT '',
  `last_login` datetime NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `last_login`, `active`) VALUES
(1, 'Admin', 'administrator', '$2y$10$hhnC6P3N3EMPjrHIxyrjY.kGzRGNY4bUJXCq.XdsCbNCz3PQfW8kS', 'administrator', '2020-04-05 12:56:41', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
