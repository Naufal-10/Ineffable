-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 10:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `pass`) VALUES
(1, 'Dhimas Kurnia Putra Supriyadi', 'dhimas', 'dhimask'),
(2, 'Dicky Bariyadi Sanwina', 'dickybar', 'dickybs'),
(3, 'Muhammad Fajar Pamungkas Satria', 'mfajar', 'fajarsp'),
(4, 'Naufal Fahrezi Maulana', 'naufal_10', 'Naufal10'),
(5, 'Sheli Maulida Salsiah', 'sheli', 'shelims');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `re_pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`nama`, `alamat`, `phone`, `email`, `username`, `pass`, `re_pass`) VALUES
('Dhimas Kurnia P. S.', 'Arcamanik, Bandung', '081214242679', 'dhimaskps@gmail.com', 'dhimkur', 'dhimas', 'dhimas'),
('Dicky Bariyadi Sanwina', 'Ujung Berung, Bandung', '085172032829', 'dicky@gmail.com', 'dickybar', 'dicky', 'dicky'),
('M. Fajar Satria Pamungkas ', 'Komplek Sampora Indah jl. Aster D. 49 No. 3', '081386840990', 'mfajarsp@gmail.com', 'fajarsp', 'fajarsp', 'fajarsp'),
('Naufal Fahrezi Maulana', 'Dago,Bandung', '081992070817', 'cheesedusty84@gmail.com', 'naufal_10', 'naufal10', 'naufal10'),
('Sheli Maulida Salsiah', 'Panghegar, Bandung', '085654112682', 'sheli@gmail.com', 'shelims', 'sheli', 'sheli');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kodebrg` varchar(5) NOT NULL,
  `jenis` varchar(10) NOT NULL COMMENT 'Wet, Dry, Snack',
  `usia` varchar(10) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `namaproduk` varchar(80) NOT NULL,
  `rasa` varchar(50) DEFAULT NULL,
  `ukuran` varchar(5) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `harga` double(10,3) NOT NULL,
  `foto` text NOT NULL COMMENT 'foto produk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kodebrg`, `jenis`, `usia`, `brand`, `namaproduk`, `rasa`, `ukuran`, `stok`, `harga`, `foto`) VALUES
(1, 'DF001', 'Dry', 'Adult', 'Whiskas', 'WHISKAS Hairball Control 450gr', '-', '450', 10, 33.000, './multimedia/images/dryHairballControl450g.jpeg'),
(2, 'DF002', 'Dry', 'Adult', 'Whiskas', 'WHISKAS Skin & Coat 450gr', '-', '450', 10, 33.000, './multimedia/images/dryKulitBulu450g.jpeg'),
(3, 'DF003', 'Dry', 'Adult', 'Whiskas', 'WHISKAS Makanan Kucing Kering 480gr', 'Ayam', '480', 10, 38.000, './multimedia/images/dryAdultAyam480g.jpeg'),
(4, 'WF001', 'Wet', 'Adult', 'Whiskas', 'WHISKAS Makanan Kucing Basah 80g', 'Tuna', '80', 10, 15.000, './multimedia/images/wetAdultTuna80g.jpeg'),
(5, 'WF002', 'Wet', 'Kitten', 'Whiskas', 'WHISKAS Makanan Kucing Basah Kitten 80g', 'Makarel', '80', 10, 8.000, './multimedia/images/wetKittenMakarel80g.png'),
(6, 'DF004', 'Dry', 'Kitten', 'Whiskas', 'WHISKAS MAKANAN KUCING KERING RASA IKAN LAUT 450g', 'Ikan Laut', '450g', 10, 33.000, './multimedia/images/dryKittenIkanLaut450g.jpeg'),
(7, 'WS001', 'Dry', 'Both', 'Sheba', 'Sheba Melty Snack Kucing Basah 48gr', 'Tuna', '48', 10, 28.000, './multimedia/images/wetSnackTuna12g.jpeg'),
(8, 'WS002', 'Snack Wet', 'Both', 'Temptation', 'TEMPTATIONS Snack Kucing Purrrr-ee 24gr', 'Ayam & Tuna', '24', 10, 14.500, './multimedia/images/wetSnackAyamTuna12g.jpeg'),
(9, 'DS001', 'Snack Dry', 'Both', 'Temptation', 'TEMPTATIONS MixUps Snack Kucing 75gr', 'Tuna, Salmo & Udang', '75', 10, 30.000, './multimedia/images/drySnackTunaUdangSalmon75g.jpeg'),
(10, 'DF005', 'Dry', 'Kitten', 'Cat Choize', 'CAT CHOIZE tuna & salmon with milk', 'Tuna & Salmon', '450', 10, 27.500, './multimedia/images/dryKittenTunaSalmon450g.jpg'),
(11, 'WF003', 'Wet', 'Kitten', 'Sheba', 'Sheba Kitten Food', 'Ayam', '70', 10, 10.000, './multimedia/images/wetKittenAyam70g.webp');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(8) NOT NULL,
  `voucher` varchar(255) NOT NULL,
  `harga` double(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `voucher`, `harga`) VALUES
(2, 'ANABUL', 10.000),
(1, 'INEFFABLE', 50.000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kodebrg` (`kodebrg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
