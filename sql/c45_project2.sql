-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2021 pada 17.15
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c45_project2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-08-17-055922', 'App\\Database\\Migrations\\TbUser', 'default', 'App', 1629189122, 1),
(2, '2021-08-17-055926', 'App\\Database\\Migrations\\TbData', 'default', 'App', 1629189122, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(20) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_kks` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `rek` varchar(100) NOT NULL,
  `bpnt_nokks` varchar(100) NOT NULL,
  `k1` varchar(100) NOT NULL,
  `k2` varchar(100) NOT NULL,
  `k3` varchar(100) NOT NULL,
  `k4` varchar(100) NOT NULL,
  `k5` varchar(100) NOT NULL,
  `k6` varchar(100) NOT NULL,
  `k7` varchar(100) NOT NULL,
  `k8` varchar(100) NOT NULL,
  `k9` varchar(100) NOT NULL,
  `k10` varchar(100) NOT NULL,
  `k11` varchar(100) NOT NULL,
  `k12` varchar(100) NOT NULL,
  `k13` varchar(100) NOT NULL,
  `k14` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`id`, `nik`, `nama`, `alamat`, `no_kks`, `jenis`, `rek`, `bpnt_nokks`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `k11`, `k12`, `k13`, `k14`, `rekomendasi`) VALUES
(1, '1406024505910004', 'Nisra Wati', 'RT 01 RW 01 Dusun III', '1406024505910004', 'RASTRA', '1080018034976', '6032989829635856', 'Lebih', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(2, '1406025201650001', 'Erma Wati', 'Sei Talas Dusun 02 RW 04 RT 001', '1406025103860003', 'RASTRA', '1080018034984', '6032989829634461', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(3, '1406020402710002', 'Wamri', 'Kampung Baru Dusun 01 RW 02 RT 001', '1406022446680004', 'RASTRA', '1080018034968', '6032989829632606', 'Kurang', 'Semen', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(4, '1406024202690002', 'Misna', 'Lubuk Ulat Dusun III RW 06 RT 002', '1406025201650001', 'RASTRA', '1080018035478', '6032989829632812', 'Kurang', 'Semen', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(5, '1406026005390001', 'Tiowa', 'Pintu Kuari Dusun 02 RW03 RT 001', '1406020402710002', 'RASTRA', '1080018035221', '6032989829640690', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(6, '1406025103860003', 'Leni Marlina', 'Sei Kijang Dusun 01 RW 01 RT 001', '1406026005390001', 'RASTRA', '1080018035528', '6032989829640294', 'Kurang', 'Semen', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Sanggup', 'Karyawan Swasta', 'Tamat SD', 'Ya', 'Tidak Layak'),
(7, '1406025806930002', 'Winda Iriani', 'RT 01 RW 01 Dusun 03 Kampung Tengah', '1406024612590001', 'RASTRA', '1080018035437', '6032989829638132', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(8, '1406024612590001', 'Sibah', 'Sei Kijang Dusun 01 RW 01 RT 002', '1406021712880005', 'RASTRA', '1080018035197', '6032989829636664', 'Lebih', 'Semen', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(9, '1406024704830005', 'Almiati', 'Sei Kijang Dusun 01 RW 01 RT 002', '1406024202690002', 'RASTRA', '1080018034992', '6032989829635310', 'Lebih', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Gas LPG', 'Ya', 'Tidak', 'Ya', 'Sanggup', 'Karyawan Swasta', 'Tamat SMA', 'Ya', 'Tidak Layak'),
(10, '1406024107500082', 'Rosna', 'RT 02 RW 02 Dusun I', '1406021309650002', 'RASTRA', '1080018035122', '6032989829634909', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(11, '1406021309650002', 'Mariatun', 'Sei Talas Dusun II RW 04 RT 002', '1406022406020001', 'RASTRA', '1080018035114', '6032989829638173', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(12, '1406021706830002', 'Asrijal', 'Rokan Hulu', '1406025402570003', 'RASTRA', '1080018035160', '6032989829635047', 'Lebih', 'Semen', 'Tembok di Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Gas LPG', 'Ya', 'Tidak', 'Ya', 'Sanggup', 'Pedagang', 'Tamat SD', 'Ya', 'Tidak Layak'),
(13, '1406024306830002', 'Misdar', 'Sei Talas Dusun 02 RW 04 RT 002', '1406025511010001', 'RASTRA', '1080018035106', '6032989829632879', 'Lebih', 'Semen', 'Tembok di Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tamat SD', 'Ya', 'Tidak Layak'),
(14, '1406026000464000', 'Nurbainah', 'Kampung Baru Dusun 01 RW 02 RT 001', '1406020101800025', 'RASTRA', '1080018035262', '6032989829637522', 'Lebih', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(15, '1406024410500001', 'Mariana', 'Suka Maju RT 02 RW 02 Dusun 01 RW 02 RT 002', '1406025708810005', 'RASTRA', '1080018035445', '6032989829633448', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(16, '1406022406020001', 'Siros', 'Sei Kijang Dusun 01 RW 01 RT 002', '1406024811830006', 'RASTRA', '1080018035353', '6032989829635385', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(17, '1406024403800001', 'Misdawanis', 'Lubuk Ulat Dusun 03 RW 06 RT 001', '1406024811830007', 'RASTRA', '1080018035320', '6032989829640856', 'Lebih', 'Semen', 'Tembok di Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(18, '1406025402570003', 'Musdalipah', 'Dusun 01 RW 01 RT002', '1406024704830005', 'RASTRA', '1080018035072', '6032989829631442', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(19, '1406025511010001', 'Ernawilis', 'Lubuk Ulat Dusun 03 RW 06 RT 001', '1406021706830002', 'RASTRA', '1080018035387', '6032989829631913', 'Kurang', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(20, '1406022446680004', 'Elpina', 'Kampung Baru 01 RW02 RT 001', '1406024306830002', 'RASTRA', '1080018035080', '6032989829635252', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tamat SD', 'Tidak', 'Layak'),
(21, '1406024811830006', 'Misra', 'Lubuk Ulat Dusun 03 RW 06 RT 002', '1406024809560001', 'RASTRA', '1080018035304', '6032989829636003', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tamat SMA', 'Ya', 'Layak'),
(22, '1406024405740006', 'Dasma Wati', 'Kampung Tengah Dusun 03 RW 05 RT 002', '1406024107660121', 'RASTRA', '1080018035551', '6032989829637829', 'Lebih', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(23, '1406024410500001', 'Mariana', 'Suka Maju RT 02 RW 02 Dusun 01 RW 02 RT 002', '1406026000464000', 'RASTRA', '1080018035130', '6032989829636011', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(24, '1406024811830007', 'Wirda', 'RT 03 RW 001 Dusun 02', '1406024405760006', 'RASTRA', '1080018035163', '6032989829636094', 'Kurang', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(25, '1406024804470001', 'Suriani', 'RT 01 RW 01 Dusun 02', '1406024403800001', 'RASTRA', '1080018035015', '6032989829635260', 'Lebih', 'Semen', 'Tembok di Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(26, '1406024107753009', 'Rusmi', 'Kampung Baru Dusun 01 RW 02 RT 001', '1406024405740006', 'RASTRA', '1080018035544', '6032989829632309', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(27, '1406024107660121', 'Samseha', 'Pintu Kuari Dusun 02 RW03 RT 001', '1406024101690006', 'RASTRA', '1080018035254', '6032989829631806', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(28, '1406024405760006', 'Nurhasiti', 'Sei Talas Dusun 02 RW 04 RT 002', '1406024311650001', 'RASTRA', '1080018035577', '6032989829636839', 'Kurang', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(29, '1406024605520001', 'Nurma', 'RT 01 RW 01 Dusun III', '1406024107753009', 'RASTRA', '1080018035171', '6032989829637530', 'Kurang', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(30, '1406024101690006', 'Asnah', 'Sei Talas Dusun 02 RW 04 RT 001', '1406024804470001', 'RASTRA', '1080018035148', '6032989829639783', 'Kurang', 'Semen', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(31, '1406024105730003', 'Erma', 'Kampung Baru Dusun 01 RW 02 RT 001', '1406020703830001', 'RASTRA', '1080018035064', '6032989829631889', 'Lebih', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(32, '1406025206540001', 'Ana', 'Kampung Tengah Dusun 03 RW 05 RT 001', '1406024105730003', 'RASTRA', '1080018035049', '6032989829632804', 'Kurang', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(33, '1406024311650001', 'Ratna Sari', 'Pintu Kuari Dusun 02 RW03 RT 002', '1406020106760004', 'RASTRA', '1080018035411', '6032989829636466', 'Kurang', 'Semen', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(34, '1406024502880003', 'Asni', 'Lubuk Ulat Dusun  03 RW 06 RT 001', '1406026502750001', 'RASTRA', '1080018035007', '6032989829635567', 'Lebih', 'Semen', 'Tembok di Plester', 'Memiliki Fasilitas BAB', 'Menggunakan Listrik', 'Sumur', 'Gas LPG', 'Ya', 'Tidak', 'Ya', 'Sanggup', 'Petani', 'Tamat SD', 'Ya', 'Tidak Layak'),
(35, '1406024503550001', 'Rosminar', 'RT 01 RW01 Dusun III', '1406024502880003', 'RASTRA', '1080018035270', '6032989829631822', 'Kurang', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(36, '1406024809560001', 'Nurbaina', 'Sei Talas Dusun 02 RW 04 RT 001', '1406025506880003', 'RASTRA', '1080018035288', '6032989829636730', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tamat SD', 'Tidak', 'Layak'),
(37, '1406025506880003', 'Ramunas', 'Lubuk Ulat Dusun  03 RW 06 RT 002', '1406024710870001', 'RASTRA', '1080018035239', '6032989829635518', 'Lebih', 'Semen', 'Tembok di Plester', 'Memiliki Fasilitas BAB', 'Menggunakan Listrik', 'Sumur', 'Gas LPG', 'Ya', 'Tidak', 'Ya', 'Sanggup', 'Petani', 'Tamat SD', 'Ya', 'Tidak Layak'),
(38, '1406024111850002', 'Yetrianis', 'Sei Kijang Dusun 01 RW 01 RT 001', '1406024405880002', 'RASTRA', '1080018035098', '6032989829635740', 'Lebih', 'Semen', 'Tembok di Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sumur', 'Gas LPG', 'Ya', 'Ya', 'Ya', 'Sanggup', 'Pedagang', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(39, '1406025011820005', 'Erda', 'Lubuk Ulat Dusun 03 RW 06 RT 001', '1406024111850002', 'RASTRA', '1080018035023', '6032989829641045', 'Lebih', 'Semen', 'Tembok Tanpa Plester', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Gas LPG', 'Tidak', 'Tidak', 'Tidak', 'Sanggup', 'Petani', 'Tidak Tamat SD', 'Ya', 'Tidak Layak'),
(40, '1406025006570006', 'Mesna', 'RT 02 RW 02 Dusun I Kampung Baru', '1406022708850006', 'RASTRA', '1080018035312', '6032989829633729', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Tidak Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tidak Tamat SD', 'Tidak', 'Layak'),
(41, '1406020703830001', 'Asri', 'Kampung Tengah Dusun 03 RW 05 RT 01', '1406020304980004', 'RASTRA', '1080018035536', '6032989829631541', 'Kurang', 'Kayu Murahan', 'Kayu Berkualitas Rendah', 'Tidak Memiliki', 'Menggunakan Listrik', 'Sungai', 'Kayu Bakar', 'Tidak', 'Tidak', 'Tidak', 'Tidak Sanggup', 'Petani', 'Tamat SD', 'Tidak', 'Layak'),
(42, '1406024510920002', 'Misda Wati', 'Pintu Kuari Dusun 02 RW 03 RT 02', '140602511190001', 'RASTRA', '1080018035395', '6032989829634487', 'Lebih', 'Semen', 'Tembok di Plester', 'Memiliki Fasilitas BAB', 'Menggunakan Listrik', 'Sumur', 'Gas LPG', 'Tidak', 'Tidak', 'Tidak', 'Sanggup', 'Petani', 'Tamat SD', 'Ya', 'Tidak Layak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3 ', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
