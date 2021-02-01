-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 08:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kondisi` enum('baik','rusak') NOT NULL,
  `ketersedian` enum('ada','tidak') NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `kondisi`, `ketersedian`, `image`) VALUES
(1, 'LCD', 'baik', 'ada', 'lcd1.jpg'),
(2, 'Layar Proyektor', 'baik', 'tidak', 'layar_proyektor1.jpg'),
(3, 'Kabel UTP', 'rusak', 'ada', 'utp.png'),
(4, 'Router', 'baik', 'ada', 'router.jpg'),
(7, 'Speaker', 'baik', 'ada', 'speker1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `id_dinas` int(11) NOT NULL,
  `nama_dinas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`id_dinas`, `nama_dinas`) VALUES
(3, 'Dinas Komunikasi dan Informatika'),
(4, 'Dinas Pariwisata'),
(5, 'Dinas Lingkungan Hidup'),
(6, 'Satpol PP'),
(7, 'Dinas Pertanian'),
(8, 'Dinas Kesehatan'),
(9, 'Dinas Perhubungan'),
(10, 'Dinas Pemadam Kebakaran'),
(11, 'Dinas PUPR Bina Marga'),
(14, 'Dinas Ketahanan Pangan'),
(17, 'Dinas Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` text NOT NULL,
  `status_peminjaman` enum('diajukan','disetujui') NOT NULL,
  `status_pengembalian` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_barang`, `tgl_peminjaman`, `tgl_kembali`, `keterangan`, `status_peminjaman`, `status_pengembalian`) VALUES
(1, 8, 1, '2021-01-12', '2021-01-15', 'Untuk acara penting', 'disetujui', 'belum'),
(2, 7, 2, '2021-01-13', '2021-01-14', 'Untuk rapat', 'disetujui', 'sudah'),
(3, 11, 2, '2021-01-19', '2021-01-19', 'asasas', 'disetujui', 'sudah'),
(5, 11, 3, '2021-01-21', '2021-01-06', '', 'disetujui', 'belum'),
(11, 8, 4, '2021-01-20', '2021-01-21', 'aaaa', 'diajukan', 'belum'),
(12, 8, 4, '2021-01-19', '2021-01-22', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'diajukan', 'belum'),
(13, 8, 2, '2021-01-15', '2021-01-22', '111', 'disetujui', 'belum'),
(38, 8, 3, '2021-01-22', '2021-01-23', '1111', 'diajukan', 'belum'),
(39, 10, 3, '2021-01-20', '2021-01-22', 'aaa', 'diajukan', 'belum'),
(40, 11, 3, '2021-01-18', '2021-01-28', 'sss', 'diajukan', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `id_dinas` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `id_role` int(1) NOT NULL,
  `is_active` enum('aktif','pasif') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `id_dinas`, `email`, `image`, `password`, `id_role`, `is_active`, `date_created`) VALUES
(4, 'Winandri Kusuma', 3, 'winandrikusuma27@gmail.com', 'petertnak1.png', '$2y$10$yJIJZGjBQIeXK2LcYtO33OCVWp9.NTkjQ86WZURVZWJ9tvpK7e99.', 1, 'aktif', 1604837683),
(7, 'coba2333c', 4, 'narutomimimi@gmail.com', 'kerbau11.png', '$2y$10$OhDGLMd/gIiZ.YWEXxPypOB68SJQQBdZ/82euoq3yWfULCwv8nniy', 2, 'aktif', 1610359846),
(8, 'fandizaq', 6, 'fandi.zahiradana@gmail.com', 'avatar2.png', '$2y$10$/NST2DhalV4YLkMXPum24uvg3LupxHBfQy4qLl/N/WclToZmbmvq.', 2, 'aktif', 1610359986),
(9, 'cccc', 5, 'coba2@gmail.com', 'default.png', '$2y$10$Trv2SjUQwJO85s3xpTWAlujXKCNXbVvFCG7yzIBT6aSR7JhFxuRH2', 2, 'pasif', 1610386221),
(10, 'aaa', 11, 'robert@gmail.com', 'default.png', '$2y$10$4h3CQHNQwI88nabtacb79.ucp5NmiYc9q7D.ChuUgyRuEgCYhYXhW', 2, 'aktif', 1610552184),
(11, 'ade chandra', 4, 'ade.cand.jr@gmail.com', 'default.png', '$2y$10$VhrHNjmsgH57ulVZSR2gpueizWYf8X7m5FGlGL.d3gKVA3l42ae82', 2, 'pasif', 1610634268),
(12, 'asdas', 10, 'albabaihaki12@gmail.com', 'default.png', '$2y$10$XSbxuqk1ZoYNmmGjJC7u/.C8IQdNASxzZzdoyrPvk13GTCU.ZpJza', 2, 'pasif', 1611557711);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'peminjam');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id_token`, `email`, `token`, `date_created`) VALUES
(1, 'narutomimimi@gmail.com', 'nXJmNztJXQyZVSFTEE3i/uFS4R3fBPw5b9gGg9bOvQc=', 1610359846),
(2, 'fandi.zahiradana@gmail.com', 'qhT4LJ+7ypY1fWAKzxzJqUkGEGGUxVC9FyUemTMywLM=', 1610359986),
(3, 'coba2@gmail.com', 'Ptj9+kT8V5IoMshLqIU0zayihCpiIQP3jdnYl4ia+wE=', 1610386221),
(4, 'robert@gmail.com', 'sdFrSUIwStuMInys9qP9XLTsVJP5Z4uH1KyuPU1XYxk=', 1610552184),
(5, 'ade.cand.jr@gmail.com', 'VYO+P+ydVmRCqd8ZF9kuZaHUpd5g78txX19smcjp8X8=', 1610634268),
(6, 'winandrikusuma27@gmail.com', 'Q1TV7ZP9nWyfiNTZA8E9EVPY3eQeYb+o6tsNTHoS3jc=', 1610873986),
(7, 'winandrikusuma27@gmail.com', 'J/lECwMwIJw5SJ9hBMCXO3ddaDYVkxs37kOLnBddmfw=', 1610874232),
(8, 'winandrikusuma27@gmail.com', 'yK7iYglV2Zuh1s/PHt5DzhxVkf2Nfg7yOiBC45NHcZo=', 1610874251),
(9, 'winandrikusuma27@gmail.com', 'O55rIzIrzLcKeHHaYW40/lSm9sU5Bh5F+5p713BCNtc=', 1610874295),
(10, 'albabaihaki12@gmail.com', 'hT3X7ytC4A5DY27qo0Bg9DH70wDLUmweuJlzYOHBrWY=', 1611557711);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`,`id_barang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_dinas` (`id_dinas`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_dinas`) REFERENCES `dinas` (`id_dinas`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
