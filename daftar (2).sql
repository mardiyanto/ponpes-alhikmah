-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jun 2024 pada 15.15
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ponpesalhikmah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` varchar(100) DEFAULT NULL,
  `program` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `nisn` varchar(100) DEFAULT NULL,
  `nama` varchar(128) NOT NULL,
  `warga_siswa` varchar(100) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `alamat` text,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `aktif` int(1) DEFAULT '0',
  `status` int(1) DEFAULT '0',
  `tgl_daftar` date DEFAULT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `konfirmasi` int(1) DEFAULT '0',
  `id_sesi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `no_daftar`, `program`, `nik`, `nisn`, `nama`, `warga_siswa`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `jurusan`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `no_hp`, `email`, `waktu`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `aktif`, `status`, `tgl_daftar`, `tgl_konfirmasi`, `konfirmasi`, `id_sesi`) VALUES
(1, 'MONDOK/20240603/001/19:27:14', 'Salafi', '1820706109100034', '15421', 'sumo', 'WNI', '665db6ed33e37.jpg', 'laki-laki', 'Gunung Sugih ', '2024-06-03', 'HANYA MONDOK', 'pringsewu\r\n', '36', '6', 'FAJAR BARU', 'PAGELARAN UTARA', 'PRINGSEWU', 'LAMPUNG', '21332', '0988789798', 'sumo@gmail.com', '19:27:36', 'SUMO', 'SMK', 'RANI', '100', '9087987', 'SUMI', 'SMK', 'RAI', '100', '0898908', 0, 0, '2024-06-03', NULL, 0, '665944556130'),
(4, 'MONDOK/20240603/002/19:46:30', 'Tahfidzul Qur\'an', NULL, NULL, 'MARDI mardiyanto', NULL, NULL, NULL, NULL, NULL, NULL, 'jalan johar perumahan perdana village no. a40\r\npodomoro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082373971991', 'mardybest@gmail.com', '19:46:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2024-06-03', NULL, 0, '451436961350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
