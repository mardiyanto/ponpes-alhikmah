-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jun 2024 pada 16.02
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
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama`, `pekerjaan`, `keterangan`, `gambar`) VALUES
(1, 'Mahmudin Wibowo', 'Mahasiswa', 'Saya Alumni Pondok Pesantren Al-Hidayah Keputran Tahun 2010', '25052024095822.jpg'),
(2, 'KH. Munawir', 'Pengasuh Pondok Pesantren', 'Saya Alumni Tahun 2005 sekarang saya sudah mempunyai pesantren, berkat beliau KH. Imam Asrori saya bisa menjadi pengasuh pesantren', '25052024100255.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL,
  `dilihat` int(5) NOT NULL DEFAULT '0',
  `gambar` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`, `jenis`) VALUES
(7, 'Festival Jamiyyah Nahdlatut Thulab Pondok Pesantern AL-Hidayah Keputran', '24/05/2024', '2024-05-24 03:59:39', '<p>Festival Jamiyyah Nahdlatul Thulab Merupakan Kegiatan Akhir Tahun Madrasah Diniyah Pondok Pesantren Al-Hidayah Keputran</p>\r\n', 0, '24052024105939.jpg', 'informasi'),
(8, 'Song Song Bulan Ramadhan', '24/05/2024', '2024-05-24 04:05:03', '<p>&nbsp;</p>\r\n\r\n<p>Di Pondok Pesantren Al-Hidayah Keputran, bulan Ramadhan tiba dengan penuh keceriaan dan semangat. Di bawah teriknya sinar mentari, para santri mulai bersiap-siap menyambut bulan penuh berkah ini. Suasana pesantren dipenuhi dengan kegiatan ibadah dan pembelajaran agama yang intensif, menciptakan atmosfer spiritual yang menggugah hati.</p>\r\n', 0, '24052024110503.jpg', 'informasi'),
(11, 'PPDB MTs dan SMK Maarif Keputran', '25/05/2024', '2024-05-25 02:11:14', '<p>Penerimaan Peserta Didik Baru (PPDB) Tahun Pelajaran 2024/2025 Sudah dibuka ayoo buruan daftar</p>\r\n', 0, '25052024091114.jpg', 'informasi'),
(10, 'Penerimaan Santri Baru Tahun Pelajaran 2024/2025', '25/05/2024', '2024-05-25 02:08:14', '<p>Penerimaan Santri Baru (PSB) Tahun Pelajaran 2024/2025 Sudah dibuka segera daftarkan diri anda ayoo buruan daftar</p>\r\n', 0, '25052024090814.jpg', 'informasi'),
(12, 'VISI MISI', '25/05/2024', '2024-05-25 02:40:44', '<p>Visi MISI</p>\r\n', 0, '25052024094044.jpg', 'halaman'),
(13, 'SEJARAH PESANTREN', '25/05/2024', '2024-05-25 02:42:51', '<p>Sejarah Berdirinya Pondok Pesantren Al-Hidayah Keputran</p>\r\n', 0, '25052024094251.jpg', 'halaman'),
(14, 'MADRASAH DINIYAH', '25/05/2024', '2024-05-25 02:44:51', '<p>Madrasah diniyah Pondok Pesantern Al-Hidayah</p>\r\n', 0, '25052024094451.jpg', 'halaman'),
(15, 'DAWUH MASAYIKH', '25/05/2024', '2024-05-25 02:45:39', '<p>Ceramah</p>\r\n', 0, '25052024094539.jpg', 'halaman'),
(16, 'ALUMNI', '25/05/2024', '2024-05-25 02:48:46', '<p>Foto Alumni</p>\r\n', 0, NULL, 'halaman'),
(17, 'PRESTASI', '25/05/2024', '2024-05-25 02:49:11', '<p>Prestasi</p>\r\n', 0, '25052024094911.jpg', 'halaman'),
(5, 'Tentang Kami', '19/04/2024', '2024-04-30 06:09:41', '<p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) adalah sebuah lembaga pemerintah di Indonesia yang bertanggung jawab dalam pembangunan dan pengelolaan infrastruktur publik serta perumahan bagi masyarakat. Tugas utama dari Dinas PUPR adalah merencanakan, melaksanakan, dan mengawasi pembangunan serta pemeliharaan infrastruktur yang meliputi jalan, jembatan, irigasi, bendungan, gedung, fasilitas air minum, sanitasi, serta pembangunan perumahan untuk rakyat.</p>\r\n\r\n<p>Beberapa fungsi penting dari Dinas PUPR antara lain:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Perencanaan Infrastruktur</strong>: Merencanakan pembangunan infrastruktur dan perumahan sesuai dengan kebutuhan masyarakat dan arah pembangunan nasional.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pelaksanaan Proyek</strong>: Melaksanakan pembangunan infrastruktur dan perumahan baik secara langsung maupun melalui kontraktor yang diamanahkan oleh pemerintah.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengawasan dan Pengendalian</strong>: Mengawasi dan mengendalikan pelaksanaan proyek pembangunan agar sesuai dengan standar teknis, waktu, dan anggaran yang telah ditetapkan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pemeliharaan Infrastruktur</strong>: Bertanggung jawab atas pemeliharaan dan perawatan infrastruktur yang telah dibangun agar tetap berfungsi dengan baik dan aman digunakan oleh masyarakat.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pengelolaan Perumahan</strong>: Mengelola program perumahan bagi masyarakat, termasuk dalam hal pembangunan rumah subsidi, perumahan bagi masyarakat berpenghasilan rendah (MBR), dan peningkatan akses terhadap perumahan layak huni.</p>\r\n	</li>\r\n</ol>\r\n', 0, '19042024091810.jpg', 'profil');

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
(1, 'MONDOK/20240603/001/20:54:02', 'Salafi', '1810011604900002', '089526007843', 'MARDI mardiyanto', 'WNI', '665dcb2f64422.jpg', 'laki-laki', 'Gunung Sugih ', '2024-06-05', 'SMK MA\'ARIF KEPUTRAN', 'jalan johar perumahan perdana village no. a40\r\npodomoro', '36', '36', 'FAJAR BARU', 'PRINGSEWU', 'KABUPATEN PRINGSEWU', '9', '35371', '082373971991', 'mardybest@gmail.com', '20:54:14', 'haminah', 'smk', 'tani', '1000000', '082373971991', 'suryadi', 'smk', 'tani', '100000', '082373971991', 0, 1, '2024-06-03', NULL, 0, '911589384289');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(4) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `keterangan`, `gambar`) VALUES
(4, 'Wisuda Jauharul Maknun', 'Wisuda', '25052024092026.jpg'),
(5, 'Kelas Al - Imrithy', 'Foto Bersama', '25052024092203.jpg'),
(6, 'Kelas Alfiyah Tsani', 'Foto Bersama', '25052024092236.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`id_kritik`, `nama`, `email`, `pesan`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `gambar`, `keterangan`) VALUES
(2, 'Ust. Muhammad Asrori', '25052024085835.jpg', 'Kitab Talim Mutaalim'),
(3, 'Ust. Agus Zainudin Ahsan', '25052024093608.jpg', 'Nahwu Al Imrithy'),
(5, 'Ust. KH. Zainal Afandi', '25052024093936.jpg', 'Kitab Nahwu Alfiyah Tsani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(20) NOT NULL,
  `nama_app` varchar(100) NOT NULL,
  `tahun` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alias` varchar(350) NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `akabest` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_app`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `gambar`, `akabest`) VALUES
(1, 'PON-PES AL-HIDAYAH KEPUTRAN', '2023/2024', 'PONDOK PESANTREN AL-HIDAYAH KEPUTRAN PRINGSEWU', 'PON-PES', 'JL Raya Veteran No. 300 Pekon Keputran Kec.Sukoharjo Kabupten Pringsewu Lampung', '<p>Puji syukur kami panjatkan ke hadirat Allah SWT, karena atas segala limpahan rahmat dan hidayah-Nya, kami dapat menyambut kehadiran sebuah inovasi baru di Pondok Pesantren Al-Hidayah Keputran Pringsewu, yaitu berdirinya website resmi pondok pesantren kami.</p>\r\n\r\n<p>Sebagai pengurus, kami sangat bangga dan berterima kasih atas dukungan serta partisipasi semua pihak yang telah turut berkontribusi dalam proses pembangunan dan peluncuran website ini. Website ini bukan hanya sekadar wadah informasi, tetapi juga merupakan langkah maju kami dalam memanfaatkan teknologi informasi untuk meningkatkan kualitas layanan pendidikan dan dakwah di lingkungan pondok pesantren.</p>\r\n\r\n<p>Melalui website ini, kami berharap dapat memberikan akses yang lebih luas bagi masyarakat, termasuk calon santri dan orang tua, untuk mendapatkan informasi tentang program-program pendidikan, kegiatan-kegiatan keagamaan, serta berbagai prestasi dan pencapaian yang telah diraih oleh pondok pesantren kami.</p>\r\n\r\n<p>Kami juga berkomitmen untuk terus mengembangkan dan memperbarui konten-konten yang ada dalam website ini, sehingga dapat selalu memberikan informasi yang akurat, relevan, dan bermanfaat bagi semua pihak yang mengunjungi website kami.</p>\r\n\r\n<p>Terima kasih kepada seluruh tim yang telah bekerja keras dalam pembangunan website ini, serta kepada semua pihak yang telah memberikan dukungan dan doa restu. Semoga website Pondok Pesantren Al-Hidayah Keputran Pringsewu ini dapat menjadi sarana yang bermanfaat dan memberikan manfaat yang besar bagi kita semua.</p>\r\n', '28042024084839.jpg', 'mardybest@gmail.com'),
(2, 're', '', 'MARDIYANTO', '19081989578978975', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(1, 'Adminatun Jhony', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
