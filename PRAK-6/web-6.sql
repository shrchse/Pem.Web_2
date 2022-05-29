-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 02:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-6`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(2, 'Bangsa gagal', 'Nasruddin Anshoriy', 'LKiS', 2008),
(3, 'Satu Untuk Semua', 'Udin', 'Sidu', 2001),
(4, 'Semua Untuk Satu', 'Bambang', 'Dunia Sahaja', 2001),
(5, 'Semua in Aja', 'Handil', 'Bukan Dunia', 2002),
(6, 'Semaunya', 'Handy Edward', 'MProMaks', 1998),
(7, 'Bukan Kisah Kita', 'Ricky Renaldi', 'MProMaks', 1999),
(8, 'Bukan Kisah Biasa', 'Endeline Edward', 'MSWord', 1990),
(9, 'Deward', 'Wednesday AfterSchool', 'MsKl', 1997),
(10, 'Good Supp', 'Jerax', 'Utilitype', 2000),
(11, 'Into The Ocean', 'Kier', 'Non', 1998),
(12, 'Sema', 'Ed Shakira', 'Dwdtype', 2001),
(13, 'Asimtot', 'Erwin', 'SKK', 1999),
(14, 'Semantic Math', 'SinCos', 'Sidu', 2003),
(15, 'Into Tersier', 'Azure', 'Shrchse', 1998),
(16, 'A-Z Psikologi', 'Zainul Anwar	', 'Andi Offset	', 2012),
(22, 'Paranoid', 'Oling', 'Teletubbies', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `password`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(101, 'pass', 'Upin', '2100', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(102, 'pass', 'Ipin', '2101', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(103, 'pass', 'Pin', '2102', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(104, 'pass', 'Fariz', '2103', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(105, 'pass', 'Sder', '2104', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(106, 'pass', 'Mntn', '2105', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(107, 'pass', 'Reys', '2106', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(108, 'pass', 'Spurin', '2107', 'teras', '2021-01-01 00:12:34', '2022-01-01'),
(109, 'pass', 'Vithaa', '2108', 'trrgeg', '2021-01-01 00:12:00', '2022-01-01'),
(111, 'pass', 'Van Der', '2110', 'wqqwwq', '2021-01-01 00:12:00', '2022-01-01'),
(112, 'pass', 'Pijl Von', '2111', 'Dimana saja', '2021-01-01 00:12:00', '2022-01-01'),
(123, 'pass', 'Vithachuu', '2112', 'haha', '2022-05-14 10:41:00', '2022-05-25'),
(126, 'pass', 'Oling Anugrah Fajar Pratama', '20013', 'Kamar', '2022-05-14 17:15:00', '2022-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_peminjaman`, `tgl_pengembalian`) VALUES
(1, '2021-01-03', '2021-01-10'),
(2, '2021-01-04', '2021-01-11'),
(9, '2022-05-12', '2022-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
