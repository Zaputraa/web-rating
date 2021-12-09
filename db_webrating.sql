-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2021 pada 13.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webrating`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asdos`
--

CREATE TABLE `asdos` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asdos`
--

INSERT INTO `asdos` (`id`, `nama`) VALUES
(3, 'Bima Bayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_mk`
--

CREATE TABLE `daftar_mk` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `matkul` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_mk`
--

INSERT INTO `daftar_mk` (`id`, `kode_mk`, `matkul`) VALUES
(1, 'TI101', 'Basic English'),
(2, 'TI102', 'Agama Islam Aqidah-Akhlaq'),
(3, 'TI103', 'Dasar Teknologi Informasi'),
(4, 'TI104', 'Aplikasi Produktifitas Kerja'),
(5, 'TI105', 'Logika dan Teknik Pemrograman'),
(6, 'TI106', 'Teknik Komputer'),
(7, 'TI107', 'Sistem Operasi'),
(8, 'TI108', 'Perancangan Basis Data'),
(9, 'TI201', 'English Small Talk'),
(10, 'TI202', 'Agama Islam Fiqih'),
(11, 'TI203', 'Pancasila Kewarganegaraan'),
(12, 'TI204', 'Bahasa Indonesia dan Tata Tulis Karya Ilmiah'),
(13, 'TI205', 'Fisika dan Elektronika'),
(14, 'TI206', 'Pemrograman Berorientasi Obyek'),
(15, 'TI207', 'Pengembangan Aplikasi Windows'),
(16, 'TI208', 'Implementasi Basis Data'),
(17, 'TI301', 'Intermediate English'),
(18, 'TI302', 'Komunikasi Antar Persona'),
(19, 'TI303', 'Probabilitas dan Statistik'),
(20, 'TI304', 'Pemrograman Java'),
(21, 'TI305', 'Analisa dan Perancangan Berorientasi Obyek'),
(22, 'TI306', 'Pengembangan Aplikasi Terintegras'),
(23, 'TI307', 'Algoritma dan Struktur Data'),
(24, 'TI308', 'Jaringan Komputer'),
(25, 'TI401', 'English For Specific Purposes'),
(26, 'TI402', 'Manajemen Proyek'),
(27, 'TI403', 'Interaksi Manusia dan Komputer'),
(28, 'TI404', 'Pengembangan Konten Web'),
(29, 'TI405', 'Pengembangan Aplikasi Mobile'),
(30, 'TI406', 'Pengembangan Aplikasi Basis Data'),
(31, 'TI407', 'Protokol Routing pada Jaringan Komputer'),
(32, 'TI501', 'Conversation On Professions And Experiences'),
(33, 'TI502', 'Perancangan Sistem Multimedia'),
(34, 'TI503', 'Pengembangan Aplikasi Terdistribusi'),
(35, 'TI504', 'Pengembangan Aplikasi Web'),
(36, 'TI505', 'Pengembangan Web Service'),
(37, 'TI506', 'Jaringan Switching dan Wireless'),
(38, 'TI601', 'Interview Essentials'),
(39, 'TI602', 'Agama Islam Al-Quran-Hadist'),
(40, 'TI603', 'Pengembangan Komponen Web'),
(41, 'TI604', 'Pengujian dan Pejaminan Kualitas Software'),
(42, 'TI605', 'Pengembangan Aplikasi Enterprise'),
(43, 'TI606', 'Teknologi Server'),
(44, 'TI607', 'Kerja Praktik'),
(45, 'TI608', 'Jaringan Area Luas'),
(46, 'TI701', 'Advanced English'),
(47, 'TI702', 'Kemuhammadiyahan'),
(48, 'TI703', 'Sistem Kecerdasan Bisnis'),
(49, 'TI704', 'Keamanan Sistem Informasi'),
(50, 'TI705', 'Tata Kelola Teknologi Informasi'),
(51, 'TI706', 'Kuliah Kerja Nyata'),
(52, 'TI801', 'Toefl Preparation'),
(53, 'TI802', 'Tugas Akhir'),
(54, 'TI901', 'Pengembangan Aplikasi Komputasi Awan'),
(55, 'TI902', 'Bootcamp Jaringan Komputer'),
(56, 'TI903', 'Pengembangan Aplikasi Berbasis Syariah'),
(57, 'TI904', 'Bootcamp Pengembangan Aplikasi'),
(58, 'TI905', 'Technopreneurship'),
(59, 'TI906', 'Bootcamp Pengembangan Basis Data'),
(60, 'TI907', 'Administrasi Sistem'),
(61, 'TI908', 'Bootcamp Keamanan Sistem Informasi'),
(62, 'TI909', 'Pengembangan Infrastruktur Kecerdasan Bisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nik`, `nama`) VALUES
(1, '509087801', 'Slamet Riyadi, S.T., M.Sc., Ph.D.'),
(2, '511116901', 'Ir. Haris Setyawan, S.T., M.Eng.'),
(3, '502026801', 'Dr. Ir. Dwijoko Purbohadi, M.T.'),
(4, '522046701', 'Eko Prasetyo, Ir. M.Eng.'),
(5, '526047401', 'Asroni, S.T., M.Eng.'),
(6, '518048401', 'Aprilia Kurnianti, ST. M. Eng.'),
(7, '503068601', 'Reza Giga Isnanda, S.T., M.Sc.'),
(8, '515038702', 'Cahya Damarjati, S.T. M. Eng.'),
(9, '707108402', 'Chayadi Oktomy N S, S.T., M.Eng. ITILF'),
(10, '516058701', 'Asep Setiawan S.Th.I., M.Ud.'),
(11, '506098902', 'Titis Wisnu Wijaya, S. Pd., M. Pd'),
(12, '509098901', 'Laila Ma\'rifatul Azizah, S.Kom., M.I.M.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instruktur`
--

CREATE TABLE `instruktur` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instruktur`
--

INSERT INTO `instruktur` (`id`, `name`) VALUES
(1, 'Rafid Fahar'),
(2, 'Ghian Alfaricha'),
(4, 'Bima Arya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'A'),
(2, 'B'),
(5, 'C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `tahunakademik` varchar(25) NOT NULL,
  `smstr` varchar(25) NOT NULL,
  `kodemk` varchar(25) NOT NULL,
  `matkul` varchar(100) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `dosen` varchar(200) NOT NULL,
  `instruktur` varchar(200) NOT NULL,
  `asdos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `tahunakademik`, `smstr`, `kodemk`, `matkul`, `kelas`, `dosen`, `instruktur`, `asdos`) VALUES
(1, '2020/2021', 'Gasal', 'TI101', 'Agama Islam', 'C', 'Asep Setiawan', 'Rafid Fahar', 'Bima Bayu'),
(2, '2020/2021', 'Gasal', 'TI101', 'Agama Islam', 'B', 'Asep Setiawan', 'Ghian Alfaricha', 'Bima Bayu'),
(3, '2020/2021', 'Gasal', 'TI101', 'Agama Islam', 'B', 'Asep Setiawan', 'Bima Arya', 'Bima Bayu'),
(4, '2020/2021', 'Gasal', 'TI102', 'Pengembangan Aplikasi Web', 'A', 'Angga Wika', 'Rafid Fahar', 'Bima Bayu'),
(17, '2021/2022', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu'),
(18, '2020/2021', 'Genap', 'TI204', 'Bahasa Indonesia dan Tata Tulis Karya Ilmiah', 'A', 'Slamet Riyadi, S.T., M.Sc., Ph.D.', 'Bima Arya', 'Bima Bayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_pilh`
--

CREATE TABLE `mk_pilh` (
  `id` int(11) NOT NULL,
  `tahunakademik` varchar(50) NOT NULL,
  `smstr` varchar(25) NOT NULL,
  `kodemk` varchar(100) NOT NULL,
  `matkul` varchar(200) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `dosen` varchar(200) NOT NULL,
  `instruktur` varchar(200) NOT NULL,
  `asdos` varchar(200) NOT NULL,
  `mhs` varchar(200) NOT NULL,
  `nim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mk_pilh`
--

INSERT INTO `mk_pilh` (`id`, `tahunakademik`, `smstr`, `kodemk`, `matkul`, `kelas`, `dosen`, `instruktur`, `asdos`, `mhs`, `nim`) VALUES
(2, '2020/2021', 'Gasal', 'TI101', 'Agama Islam', 'C', 'Asep Setiawan S.Th.I., M.Ud.', 'Rafid Fahar', 'Bima Bayu', 'Risang Prakosa', '2017014001'),
(4, '2020/2021', 'Gasal', 'TI102', 'Pengembangan Aplikasi Web', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Risang Prakosa', '2017014001'),
(5, '2020/2021', 'Gasal', 'TI103', 'Multimedia', 'B', 'Reza Giga Isnanda, S.T., M.Sc.', 'Rafid Fahar', 'Bima Bayu', 'Risang Prakosa', '2017014001'),
(6, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Rofy Anugrah Desrian', '20170140001'),
(7, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Elvi Yustika Dalimunthe', '20170140002'),
(8, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Windah Kusumawati', '20170140003'),
(9, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Annisa Dian Amarta', '20170140004'),
(10, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Risang Prakosa', '20170140005'),
(11, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Gilang Prakoso', '20170140006'),
(12, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Fadia Rani', '20170140007'),
(13, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Aisyah Dinia Kencana', '20170140008'),
(14, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Sekar Putri', '20170140009'),
(15, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Rayka Agustasya Ripha', '20170140010'),
(16, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Rizki Fajar', '20170140011'),
(17, '2020/2021', 'Gasal', 'TI104', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', 'Alfadha Turmahadi', '20170140012'),
(18, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Rofy Anugrah Desrian', '20170140001'),
(19, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Elvi Yustika Dalimunthe', '20170140002'),
(20, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Windah Kusumawati', '20170140003'),
(21, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Annisa Dian Amarta', '20170140004'),
(22, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Risang Prakosa', '20170140005'),
(23, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Gilang Prakoso', '20170140006'),
(24, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Fadia Rani', '20170140007'),
(25, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Aisyah Dinia Kencana', '20170140008'),
(26, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Sekar Putri', '20170140009'),
(27, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Rayka Agustasya Ripha', '20170140010'),
(28, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Rizki Fajar', '20170140011'),
(29, '2020/2021', 'Gasal', 'TI304', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', 'Alfadha Turmahadi', '20170140012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `tahunakademik` varchar(100) NOT NULL,
  `smstr` varchar(25) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `matkul` varchar(200) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `dosen` varchar(200) NOT NULL,
  `instruktur` varchar(200) NOT NULL,
  `asdos` varchar(200) NOT NULL,
  `rate` varchar(2) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `rate_ins` varchar(1) NOT NULL,
  `saran_ins` varchar(255) NOT NULL,
  `rate_asdos` varchar(1) NOT NULL,
  `saran_asdos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `tahunakademik`, `smstr`, `tgl`, `matkul`, `kelas`, `dosen`, `instruktur`, `asdos`, `rate`, `saran`, `rate_ins`, `saran_ins`, `rate_asdos`, `saran_asdos`) VALUES
(10, '2020/2021', 'Gasal', '30 / 11 / 21', 'Agama Islam', 'B', 'Asep Setiawan S.Th.I., M.Ud.', 'Bima Arya', 'Bima Bayu', '3', 'asdsa', '1', 'asdadadad', '1', 'qweoiasd'),
(11, '2020/2021', 'Gasal', '30 / 11 / 21', 'Pengembangan Aplikasi Web', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', '5', 'sudah mantab', '3', 'oioioasdsa', '4', 'sadhisuadas'),
(12, '2020/2021', 'Gasal', '30 / 11 / 21', 'Agama Islam', 'C', 'Asep Setiawan S.Th.I., M.Ud.', 'Rafid Fahar', 'Bima Bayu', '4', 'aaaaaaa', '5', 'sadkoaskdosiad', '4', 'iojsaidnsad'),
(13, '2020/2021', 'Gasal', '30 / 11 / 21', 'Multimedia', 'B', 'Reza Giga Isnanda, S.T., M.Sc.', 'Rafid Fahar', 'Bima Bayu', '5', 'mantab', '4', 'sadlksaldkj', '5', 'asdsandjasid'),
(14, '2020/2021', 'Gasal', '03 / 12 / 21', 'Agama Islam', 'C', 'Asep Setiawan S.Th.I., M.Ud.', 'Rafid Fahar', 'Bima Bayu', '5', 'a', '5', 'a', '5', 'a'),
(15, '2020/2021', 'Gasal', '03 / 12 / 21', 'Agama Islam', 'C', 'Asep Setiawan S.Th.I., M.Ud.', 'Rafid Fahar', 'Bima Bayu', '5', 'a', '5', 'b', '5', 'c'),
(16, '2020/2021', 'Gasal', '03 / 12 / 21', 'Pengembangan Aplikasi Web', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', '5', 'bagus', '4', 'lumayan', '3', 'kurang komunikasi dengan mhs'),
(17, '2020/2021', 'Gasal', '03 / 12 / 21', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', '5', 'bagus', '5', 'bagus', '5', 'bagus'),
(18, '2020/2021', 'Gasal', '03 / 12 / 21', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', '3', 'asdsad', '5', 'asdasd', '4', 'asdsad'),
(19, '2020/2021', 'Gasal', '03 / 12 / 21', 'Aplikasi Produktifitas Kerja', 'A', 'Aprilia Kurnianti, ST. M. Eng.', 'Rafid Fahar', 'Bima Bayu', '1', 'qeasd', '2', 'gasda', '2', 'gfdas'),
(20, '2020/2021', 'Gasal', '09 / 12 / 21', 'Pemrograman Java', 'A', 'Dr. Ir. Dwijoko Purbohadi, M.T.', 'Ghian Alfaricha', 'Bima Bayu', '2', 'add', '4', 'kjlk', '2', 'sds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `smstr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id`, `smstr`) VALUES
(1, 'Gasal'),
(2, 'Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahunakademik`
--

CREATE TABLE `tahunakademik` (
  `id` int(11) NOT NULL,
  `thn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahunakademik`
--

INSERT INTO `tahunakademik` (`id`, `thn`) VALUES
(6, '2021/2022'),
(7, '2022/2023'),
(8, '2020/2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik_nim` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik_nim`, `username`, `nama`, `password`, `level`) VALUES
(1, '20170140121', 'ade', 'Ade Syahreza Putra', 'ade', 'Admin'),
(8, '2017014001', 'risang', 'Risang Prakosa', '123', 'Mahasiswa'),
(9, '2017014002', 'gp12', 'Gilang Prakoso', '123', 'Mahasiswa'),
(88, '201701400101', 'hari', 'Hary Prihadi', '123', 'Admin'),
(89, '20170140009', 'oji', 'Achmad Fauzi', '123', 'Admin'),
(92, '20170140001', 'opi', 'Rofy Anugrah Desrian', '123', 'Mahasiswa'),
(93, '20170140002', 'ika', 'Elvi Yustika Dalimunthe', '123', 'Mahasiswa'),
(94, '20170140003', 'windah', 'Windah Kusumawati', '123', 'Mahasiswa'),
(95, '509087801', 'slamet', 'Slamet Riyadi, S.T., M.Sc., Ph.D.', '123', 'Dosen'),
(96, '511116901', 'haris', 'Ir. Haris Setyawan, S.T., M.Eng.', '123', 'Dosen'),
(97, '502026801', 'dwijoko', 'Dr. Ir. Dwijoko Purbohadi, M.T.', '123', 'Dosen'),
(98, '522046701', 'eko', 'Eko Prasetyo,  Ir. M.Eng.', '123', 'Dosen'),
(99, '526047401', 'asroni', 'Asroni, S.T.,  M.Eng.', '123', 'Dosen'),
(100, '518048401', 'aprilia', 'Aprilia Kurnianti, ST. M. Eng.', '123', 'Dosen'),
(101, '503068601', 'giga', 'Reza Giga Isnanda, S.T., M.Sc.', '123', 'Dosen'),
(102, '515038702', 'damarjati', 'Cahya Damarjati, S.T. M. Eng.', '123', 'Dosen'),
(103, '707108402', 'oktomy', 'Chayadi Oktomy N S, S.T., M.Eng. ITILF', '123', 'Dosen'),
(104, '516058701', 'asep', 'Asep Setiawan S.Th.I., M.Ud.', '123', 'Dosen'),
(105, '506098902', 'wisnu', 'Titis Wisnu Wijaya, S. Pd., M. Pd', '123', 'Dosen'),
(106, '509098901', 'laila', 'Laila Ma\'rifatul Azizah, S.Kom., M.I.M.\r\n', '123', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asdos`
--
ALTER TABLE `asdos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_mk`
--
ALTER TABLE `daftar_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mk_pilh`
--
ALTER TABLE `mk_pilh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahunakademik`
--
ALTER TABLE `tahunakademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asdos`
--
ALTER TABLE `asdos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `daftar_mk`
--
ALTER TABLE `daftar_mk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mk_pilh`
--
ALTER TABLE `mk_pilh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahunakademik`
--
ALTER TABLE `tahunakademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
