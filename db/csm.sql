-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 11:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `csm`
--

CREATE TABLE `csm` (
  `id` int(3) NOT NULL,
  `csm_id` varchar(8) NOT NULL,
  `waktu` text NOT NULL,
  `email` text NOT NULL,
  `nama` text NOT NULL,
  `gender` text NOT NULL,
  `no_hp` text NOT NULL,
  `familiar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csm`
--

INSERT INTO `csm` (`id`, `csm_id`, `waktu`, `email`, `nama`, `gender`, `no_hp`, `familiar`) VALUES
(2, '5BRGGQ74', '2018/03/22 11:43:45 AM GMT+7', 'fitrisyukriasari@gmail.com', 'Fitri Syukriasari', 'Female', '08983012596', 'Pemrograman;Jaringan;Design;IT Security'),
(3, 'POSK7GXU', '2018/03/23 8:06:49 PM GMT+7', 'skamiui@gmail.com', 'alan', 'Male', '085743511513', 'Design'),
(4, 'ARDA7H6V', '2018/03/23 8:11:39 PM GMT+7', 'zainalgo@gmail.com', 'zaenal abidin', 'Male', '085725888579', 'Pemrograman;IT Security'),
(5, 'N07ZT6V7', '2018/03/23 8:17:20 PM GMT+7', 'fifiumayah101198@gmail.com', 'Fifi umayah', 'Female', '085601584696', 'Pemrograman'),
(6, 'UB3QDJX2', '2018/03/23 8:38:52 PM GMT+7', 'fanonym34@gmail.com', 'Fatkhurrohman', 'Male', '085225520622', 'Pemrograman'),
(7, 'X5MJS8H9', '2018/03/23 8:43:51 PM GMT+7', 'rizkiagus945@gmail.com', 'Rizki Agus Firmansyag', 'Male', '08557746105', 'Pemrograman'),
(8, 'XAJC2E0O', '2018/03/23 8:46:53 PM GMT+7', 'ameliakamilah@gmail.com', 'Zaki Nur Amalia Kamilah', 'Female', '08562559427', 'Pemrograman'),
(9, '831IKX9D', '2018/03/23 8:48:30 PM GMT+7', 'muhammadalfatah8@gmail.com', 'muhamad salim alfatah', 'Male', '082226569596', 'Pemrograman'),
(10, 'GWSQUPRE', '2018/03/23 8:53:07 PM GMT+7', 'septa006@gmail.com', 'septa', 'Male', '085647380900', 'IT Security'),
(11, '1403C4UR', '2018/03/23 9:06:28 PM GMT+7', 'muhammad.fu17@gmail.com', 'Muhammad Imam Fauzi', 'Male', '081260346699', 'Jaringan'),
(12, 'M6HAZW8I', '2018/03/23 9:23:22 PM GMT+7', 'ufinter@gmail.com', 'RO\'UF HIDAYAT', 'Male', '089661006083 ', 'Jaringan'),
(13, 'W9HOMNTU', '2018/03/23 9:31:48 PM GMT+7', 'nafilahumair2@gmail.com', 'Nafilah Umair', 'Female', '085879473288', 'Pemrograman'),
(14, 'K31G6HL1', '2018/03/23 10:02:28 PM GMT+7', 'yssyudi@gmail.com', 'Yudi Yuswita Sunarto', 'Male', '085642649547', 'Jaringan'),
(15, '3UTL2R3V', '2018/03/23 11:45:35 PM GMT+7', 'ellisintann@gmail.com', 'Ellis Intan Nurlaella ', 'Female', '082322237223 ', 'Pemrograman'),
(16, '14ADYH3C', '2018/03/24 3:51:44 AM GMT+7', 'rezadwitama@gmail.com', 'Alfareza Bayu Dwitama ', 'Male', '085878383130', 'Pemrograman'),
(17, 'WKQB3TUG', '2018/03/24 3:57:28 AM GMT+7', 'mahmudrizalmustofa100@gmail.com', 'Mahmud Rizal Mustofa', 'Male', '085225850492', 'Design'),
(18, 'J8WYH033', '2018/03/24 6:56:58 AM GMT+7', 'hendriprasetito@gmail.com', 'hendri prasetiyo', 'Male', '082199657298', 'Design'),
(19, '17TV42AL', '2018/03/24 7:00:39 AM GMT+7', 'durohman25@gmail.com', 'Durohman', 'Male', '082337753942', 'Pemrograman'),
(20, 'VYQ3NYLS', '2018/03/24 7:15:36 AM GMT+7', 'feryandryanto12@gmail.com', 'Fery Andryanto', 'Male', '081225627975', 'Pemrograman'),
(21, '7GJH30T9', '2018/03/24 7:17:46 AM GMT+7', 'laillamaulidaa@gmail.com', 'Lailatul Maulidah ', 'Female', '085802672184 ', 'Pemrograman'),
(22, 'AJIA688I', '2018/03/24 7:38:53 AM GMT+7', 'faizamrillah44@gmail.com', 'Faiz Amrillah', 'Male', '082221573529', 'Pemrograman'),
(23, 'ZQQRM3N2', '2018/03/24 8:06:01 AM GMT+7', 'siitiiymubarrokah36@gmail.com', 'Siti Mubarokah', 'Female', '083154695766', 'Pemrograman'),
(24, 'G5VCWARH', '2018/03/24 8:43:01 AM GMT+7', 'fiankhar@gmail.com', 'Kharfian', 'Male', '082241626189', 'Design'),
(25, 'VM3CVU88', '2018/03/24 8:46:12 AM GMT+7', 'hardiagunadi@gmail.com', 'Hardi Agunadi ', 'Male', '\'085743363803', 'Pemrograman;Jaringan;Design;IT Security'),
(26, '0DP3IO9Q', '2018/03/24 8:56:37 AM GMT+7', 'supardibenjamin@gmail.com', 'Kurniawan', 'Male', '082224083023', 'Pemrograman'),
(27, 'IK38LU8H', '2018/03/24 9:19:44 AM GMT+7', 'jakazakaryya@gmail.com', 'Jaka', 'Male', '082223072203', 'Pemrograman'),
(28, 'W8T3S3X8', '2018/03/24 10:48:59 AM GMT+7', 'arsenalade11@gmail.com', 'Ari ade prasetiyo', 'Male', '087734074424', 'Pemrograman'),
(29, 'PF0TD2VP', '2018/03/24 10:50:14 AM GMT+7', 'arizalryan22@gmail.com', 'Arizal Riyan Permadi', 'Male', '082324474749', 'Pemrograman'),
(30, 'XCUBG86U', '2018/03/24 10:54:48 AM GMT+7', 'nrhidayah517@gmail.com', 'Nurul Hidayah', 'Female', '085799162699', 'Pemrograman;Design'),
(31, '2DHYU9WH', '2018/03/24 11:02:42 AM GMT+7', 'ofeik.27@gmail.com', 'ofiq apriliyanto', 'Male', '085640086073', 'Pemrograman'),
(32, 'XFJFHB73', '2018/03/24 11:09:17 AM GMT+7', 'mahbubulchaq@gmail.com', 'Mah bubul chaq', 'Male', '6282137743753', 'Pemrograman'),
(33, '1GEW91U9', '2018/03/24 11:44:12 AM GMT+7', 'muhammadtahta@gmail.com', 'M.tahta dinillah', 'Male', '082285887558', 'Pemrograman'),
(34, 'WO07J0B1', '2018/03/24 11:53:29 AM GMT+7', 'ahmadlatif3399@gmail.com', 'ahmad latif', 'Male', '085776958044', 'Pemrograman'),
(35, 'IX82MTW4', '2018/03/24 11:57:55 AM GMT+7', 'ibnuchizam75@gmail.com', 'M. Itmamul Umam', 'Male', '085747755547', 'Pemrograman'),
(36, '9UMSJ7TQ', '2018/03/24 12:00:02 PM GMT+7', 'haidah.machsun@gmail.com', 'Muhammad Haidar Machsun', 'Male', '082328864507', 'Pemrograman'),
(37, 'T4QSHEVW', '2018/03/24 12:01:36 PM GMT+7', 'fahrudimaarif@gmail.com', 'Fahrudi Maarif', 'Male', '082221294453', 'Pemrograman'),
(38, 'FOBZGGSB', '2018/03/24 12:03:59 PM GMT+7', 'kurniawanarcher@gmail.com', 'Rizky kurniawan', 'Male', '085229463214', 'Pemrograman'),
(39, 'KUS1TB8C', '2018/03/24 12:30:38 PM GMT+7', 'Rianrifai17@gmail.com', 'Rian rifai', 'Male', '08563210453', 'Pemrograman'),
(40, 'OF4VSLIV', '2018/03/24 12:40:30 PM GMT+7', 'Fandyalbas@gmail.com', 'fandy albas', 'Male', '089644047524', 'Pemrograman;Jaringan'),
(41, 'DV50338L', '2018/03/24 3:41:27 PM GMT+7', 'an257.art@gmail.com', 'Akhmad Abdul Khalim', 'Male', '081226068842', 'Pemrograman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csm`
--
ALTER TABLE `csm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csm`
--
ALTER TABLE `csm`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
