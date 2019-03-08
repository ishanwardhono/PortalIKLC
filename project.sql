-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 10:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id` int(5) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Posisi` varchar(10) NOT NULL DEFAULT 'Praktikan',
  `Matkul` varchar(30) DEFAULT NULL,
  `Nama Lengkap` varchar(50) NOT NULL,
  `Nama Panggilan` varchar(20) NOT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'nofoto.jpg',
  `Notes` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `NIM`, `Posisi`, `Matkul`, `Nama Lengkap`, `Nama Panggilan`, `Tanggal Lahir`, `Email`, `Password`, `Foto`, `Notes`) VALUES
(1, '141401075', 'Praktikan', NULL, 'Muhammad Ishan Wardhono', 'Ishan', '1996-01-21', 'ishan@gmail.com', 'ishan', '141401075-IMG-20130415-00081.jpg', 'Semoga Berhasil.....!!!!!!'),
(2, '141401057', 'Praktikan', NULL, 'Riza Puspita Siregar', 'Riza', '1996-01-15', 'riza@gmail.com', 'riza', 'nofoto.jpg', ''),
(3, '141401060', 'Praktikan', NULL, 'Shofia Rizqi Putri', 'Sofi', '1995-12-20', 'Shofia@gmail.com', 'sofi', 'nofoto.jpg', ''),
(4, '141401063', 'Praktikan', NULL, 'Dianda Rizky Permana', 'Dianda', '1996-05-22', 'dianda@gmail.com', 'dianda', '141401063-Koala.jpg', 'Kerjain pr'),
(5, '141401066', 'Praktikan', NULL, 'Randi Irawan', 'Randi', '1996-03-01', 'randi@gmail.com', 'randi', '141401066-Koala.jpg', ''),
(6, '141401069', 'Praktikan', NULL, 'Karin Pramudita Kurniadi', 'Karin', '1996-06-30', 'karin@gmail.com', 'karin', 'nofoto.jpg', ''),
(7, '141401072', 'Praktikan', NULL, 'Muhammad Faisal', 'Faisal', '1996-10-27', 'faisal@gmail.com', 'faisal', 'nofoto.jpg', ''),
(8, '141401078', 'Praktikan', NULL, 'Sandi Fivjly Andica', 'Sandi', '1996-05-12', 'sandi@gmail.com', 'sandi', 'nofoto.jpg', ''),
(9, '141401081', 'Praktikan', NULL, 'Farhan Aulia Rangkuti', 'Farhan', '1997-05-13', 'farhan@gmail.com', 'farhan', 'nofoto.jpg', ''),
(10, '141401084', 'Praktikan', NULL, 'Wiro Tirta Habibi', 'Wiro', '1996-11-07', 'wiro@gmail.com', 'wiro', '141401084-Penguins.jpg', ''),
(11, '141401087', 'Praktikan', NULL, 'Ramadhan Hamdi', 'Hamdi', '1998-01-10', 'hamdi@gmail.com', 'hamdi', 'nofoto.jpg', ''),
(12, '141401090', 'Praktikan', NULL, 'Fadil Fauzi', 'Fadil', '1996-06-19', 'fadil@gmail.com', 'fadil', 'nofoto.jpg', ''),
(13, '141401093', 'Praktikan', NULL, 'Kevin Rinanda', 'Kevin', '1995-10-31', 'Kevin@gmail.com', 'kevin', 'nofoto.jpg', ''),
(14, '141401096', 'Praktikan', NULL, 'Nadia Khairani Nasution', 'Nadia', '1996-07-01', 'nadi@gmail.com', 'nadia', 'nofoto.jpg', ''),
(15, '141401099', 'Praktikan', NULL, 'Abdul Aziz', 'Aziz', '1994-07-17', 'aziz@gmail.com', 'aziz', 'nofoto.jpg', ''),
(16, '141401102', 'Praktikan', NULL, 'Muhammad Fattahurrahman Hasan Nasution', 'Afgan', '1996-09-11', 'fathur@gmail.com', 'fathur', '141401102-Penguins.jpg', 'Notes'),
(17, '141401105', 'Praktikan', NULL, 'Putri Meila Vista', 'Meila', '1997-05-15', 'meila@gmail.com', 'meila', 'nofoto.jpg', ''),
(18, '121401006', 'Asisten', 'Pemrogramman Internet', 'Andika Mulia Utama', 'Andika', '1994-08-09', 'andika@iklc.com', 'andika', '121401006-Desert.jpg', ''),
(19, '121401002', 'Asisten', 'Algoritma & Pemrogramman', 'Dina Meiladya', 'Dina', '1995-09-12', 'dina@iklc.com', 'dina', '121401002-Chrysanthemum.jpg', ''),
(20, '121401021', 'Asisten', 'Sistem Digital', 'Furqan Alatas', 'Furqan', '1995-03-03', 'furqan@iklc.com', 'furqan', 'nofoto.jpg', 'Sistem Digital');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
`Nomor` int(10) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Obrolan` text NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`Nomor`, `NIM`, `Nama`, `Obrolan`, `Waktu`) VALUES
(1, '141401075', 'Muhammad Ishan Wardhono', 'Hai Semua', '2015-06-20 06:03:49'),
(2, '141401057', 'Riza Puspita Siregar', 'apa kabar?', '2015-06-20 06:15:50'),
(3, '141401060', 'Shofia Rizqi Putri', 'weei', '2015-06-20 06:17:44'),
(4, '141401063', 'Dianda Rizky Permana', 'apa cerita wak?\r\n', '2015-06-20 06:19:04'),
(5, '141401066', 'Randi Irawan', 'Assalamualaikum para teman teman se lab', '2015-06-20 06:21:00'),
(6, '141401069', 'Karin Pramudita Kurniadi', 'selfie yok wee', '2015-06-20 06:22:45'),
(7, '141401072', 'Muhammad Faisal', 'bagi  referensi wak', '2015-06-20 06:24:15'),
(8, '141401078', 'Sandi Fivjly Andica', 'aku pigi ya wee', '2015-06-20 06:25:58'),
(9, '141401081', 'Farhan Aulia Rangkuti', 'Aku sporing lagi malam ini ya waak', '2015-06-20 06:27:21'),
(10, '141401084', 'Wiro Tirta Habibi', 'aaiih cemana ini wee', '2015-06-20 06:28:56'),
(11, '141401087', 'Ramadhan Hamdi', 'poto poto yok wee di kolam wak buyong', '2015-06-20 06:31:02'),
(12, '141401090', 'Fadil Fauzi', 'wee cara make IC 555 pas buat form.php pake C++ kayak mana ?', '2015-06-20 06:32:56'),
(13, '141401093', 'Kevin Rinanda', 'hmm maiinn. cmana itu ? ', '2015-06-20 06:34:29'),
(14, '141401096', 'Nadia Khairani Nasution', 'cmnaaa ini tugasnadia wee ? ilang semua laa', '2015-06-20 06:36:12'),
(15, '141401099', 'Abdul Aziz', 'iyala laa', '2015-06-20 06:37:24'),
(16, '141401102', 'Muhammad Fattahurrahman Hasan Nasution', '...', '2015-06-20 06:38:30'),
(17, '141401105', 'Putri Meila Vista', 'ayok kumpul2 sambil mentoring~ di kampus lama ya wee~ datang nya yang lama~ aku juga datang lama~ sama sama~', '2015-06-20 06:40:39'),
(18, '141401102', 'Muhammad Fattahurrahman Hasan Nasution', 'siapa yang buat chat nya ini? notif please', '2015-06-20 06:42:01'),
(19, '141401066', 'Randi Irawan', 'assalamualaikum', '2015-06-20 13:37:05'),
(20, '141401102', 'Muhammad Fattahurrahman Hasan Nasution', 'walaikumsalam', '2015-06-24 03:55:49'),
(21, '141401063', 'Dianda Rizky Permana', 'Apa kabar?', '2015-06-24 07:42:36'),
(22, '141401063', 'Dianda Rizky Permana', 'gi paen???????', '2015-06-24 07:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(10) NOT NULL,
  `Matkul` varchar(50) NOT NULL,
  `File` varchar(150) NOT NULL,
  `Keterangan` text NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Matkul`, `File`, `Keterangan`, `Waktu`) VALUES
(1, 'Pemrogramman Internet', 'Pemrogramman Internet-SLIDE-BU-DIAN.rar', 'Ini Dari Bu Dian', '2015-06-20 07:22:41'),
(2, 'Algoritma & Pemrogramman', 'Algoritma & Pemrogramman-Soal UAS Praktikum AP 2014-2015.doc', '', '2015-06-20 13:16:46'),
(3, 'Sistem Digital', 'Sistem Digital-counter.pdf', '', '2015-06-24 03:57:40'),
(4, 'Sistem Digital', 'Sistem Digital-SLIDE-BU-DIAN.rar', 'ini dari bu dian', '2015-06-24 07:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `NIM` varchar(9) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Sistem Digital` varchar(2) NOT NULL,
  `Pemrogramman Internet` varchar(2) NOT NULL,
  `Algoritma & Pemrogramman` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIM`, `Nama`, `Sistem Digital`, `Pemrogramman Internet`, `Algoritma & Pemrogramman`) VALUES
('141401057', 'Riza Puspita Siregar', 'B', 'B+', 'A'),
('141401060', 'Shofia Rizqi Putri', 'B+', 'B+', 'A'),
('141401063', 'Dianda Rizky Permana', 'B+', 'A', 'A'),
('141401066', 'Randi Irawan', 'B+', 'E', 'D'),
('141401069', 'Karin Pramudita Kurniadi', 'B+', 'A', 'A'),
('141401072', 'Muhammad Faisal', 'B+', 'A', 'A'),
('141401075', 'Muhammad Ishan Wardhono', 'B+', 'A', 'A'),
('141401078', 'Sandi Fivjly Andica', 'B+', 'B+', 'D'),
('141401081', 'Farhan Aulia Rangkuti', 'B+', 'B', 'A'),
('141401084', 'Wiro Tirta Habibi', 'B+', 'C+', 'A'),
('141401087', 'Ramadhan Hamdi', 'B+', 'C+', 'A'),
('141401090', 'Fadil Fauzi', 'B+', 'B', 'A'),
('141401093', 'Kevin Rinanda', 'B+', 'B', 'A'),
('141401096', 'Nadia Khairani Nasution', 'A', 'C+', 'A'),
('141401099', 'Abdul Aziz', 'B+', 'C', 'A'),
('141401102', 'Muhammad Fattahurrahman Hasan ', 'A', 'B', 'B'),
('141401105', 'Putri Meila Vista', 'B+', 'B', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id` int(10) NOT NULL,
  `NIM Pengirim` varchar(9) NOT NULL,
  `Pengirim` varchar(50) NOT NULL,
  `NIM Penerima` varchar(9) NOT NULL,
  `Penerima` varchar(50) NOT NULL,
  `Pesan` text NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `NIM Pengirim`, `Pengirim`, `NIM Penerima`, `Penerima`, `Pesan`, `Waktu`) VALUES
(1, '141401102', 'Muhammad Fattahurrahman Hasan Nasution', '141401087', 'Ramadhan Hamdi', 'paket pre wedding brapaan ndong?', '2015-06-20 06:44:42'),
(2, '141401087', 'Ramadhan Hamdi', '141401102', 'Muhammad Fattahurrahman Hasan Nasution', 'kau mau nikah? kau langkahi dulu kolam wak buyong', '2015-06-20 06:45:45'),
(3, '141401066', 'Randi Irawan', '141401075', 'Muhammad Ishan Wardhono', 'anak mp', '2015-06-20 13:34:03'),
(4, '121401002', 'Dina Meiladya', '141401102', 'Muhammad Fattahurrahman Hasan Nasution', 'Fathur.........', '2015-06-23 05:42:11'),
(5, '141401075', 'Muhammad Ishan Wardhono', '121401006', 'Andika Mulia Utama', 'Bang amu', '2015-06-23 05:49:54'),
(6, '141401075', 'Muhammad Ishan Wardhono', '141401066', 'Randi Irawan', 'randi', '2015-06-23 05:50:09'),
(7, '141401084', 'Wiro Tirta Habibi', '141401081', 'Farhan Aulia Rangkuti', 'farhan....................................................', '2015-06-24 04:01:14'),
(8, '141401081', 'Farhan Aulia Rangkuti', '141401084', 'Wiro Tirta Habibi', 'apa wir?', '2015-06-24 04:01:44'),
(9, '141401063', 'Dianda Rizky Permana', '141401072', 'Muhammad Faisal', 'halo faisal.......', '2015-06-24 07:44:00'),
(10, '141401072', 'Muhammad Faisal', '141401060', 'Shofia Rizqi Putri', 'hai......', '2015-06-24 07:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
`id` int(10) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Matkul` varchar(40) NOT NULL,
  `File` varchar(200) NOT NULL,
  `Tugas Ke` int(1) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `NIM`, `Nama`, `Matkul`, `File`, `Tugas Ke`, `Waktu`) VALUES
(1, '141401057', 'Riza Puspita Siregar', 'Algoritma & Pemrogramman', 'Algoritma & Pemrogramman-7-141401057-1.cpp', 7, '2015-06-20 13:28:35'),
(2, '141401057', 'Riza Puspita Siregar', 'Sistem Digital', 'Sistem Digital-3-141401057-fungsi.h', 3, '2015-06-20 13:29:04'),
(3, '141401102', 'Muhammad Fattahurrahman Hasan Nasution', 'Sistem Digital', 'Sistem Digital-2-141401102-counter.DSN', 2, '2015-06-24 03:56:28'),
(4, '141401072', 'Muhammad Faisal', 'Sistem Digital', 'Sistem Digital-3-141401072-counter.DSN', 3, '2015-06-24 07:44:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `NIM` (`NIM`), ADD UNIQUE KEY `Email` (`Email`), ADD UNIQUE KEY `Matkul` (`Matkul`), ADD UNIQUE KEY `Matkul_2` (`Matkul`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`Nomor`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
MODIFY `Nomor` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
