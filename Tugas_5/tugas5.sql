-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 03:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas5`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ku`
--

CREATE TABLE `data_ku` (
  `var1` varchar(50) NOT NULL,
  `var2` varchar(50) DEFAULT NULL,
  `var3` varchar(50) DEFAULT NULL,
  `var4` varchar(50) DEFAULT NULL,
  `var5` varchar(50) DEFAULT NULL,
  `var6` varchar(50) DEFAULT NULL,
  `var7` varchar(50) DEFAULT NULL,
  `var8` varchar(50) DEFAULT NULL,
  `var9` varchar(50) DEFAULT NULL,
  `var10` varchar(50) DEFAULT NULL,
  `var11` varchar(50) DEFAULT NULL,
  `var12` varchar(50) DEFAULT NULL,
  `var13` varchar(50) DEFAULT NULL,
  `var14` varchar(50) DEFAULT NULL,
  `var15` varchar(50) DEFAULT NULL,
  `var16` varchar(50) DEFAULT NULL,
  `var17` varchar(50) DEFAULT NULL,
  `var18` varchar(50) DEFAULT NULL,
  `var19` varchar(50) DEFAULT NULL,
  `var20` varchar(50) DEFAULT NULL,
  `var21` varchar(50) DEFAULT NULL,
  `var22` varchar(50) DEFAULT NULL,
  `var23` varchar(50) DEFAULT NULL,
  `var24` varchar(50) DEFAULT NULL,
  `var25` varchar(50) DEFAULT NULL,
  `var26` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ku`
--

INSERT INTO `data_ku` (`var1`, `var2`, `var3`, `var4`, `var5`, `var6`, `var7`, `var8`, `var9`, `var10`, `var11`, `var12`, `var13`, `var14`, `var15`, `var16`, `var17`, `var18`, `var19`, `var20`, `var21`, `var22`, `var23`, `var24`, `var25`, `var26`) VALUES
('Boy', 'UPN Veteran Jawa Timur', '17081010099', 'Teknik Informatika', 'Boy Man', 'Surabaya, 12 Januari 1998', 'Rungkut Kidul X 11-D', 'Pria', 'Belum Menikah', 'Islam', '173/65', 'O', 'Indonesia', '085731866606', 'kholilrnm54@gmail.com', 'UPN Veteran Jawa Timur', 'Basket', 'aaaaaaaa.xyz', 'SDN Rungkut Kidul 3', 'SMP Negeri 35 Sby', 'MBI Amanatul Ummah', 'UPN Veteran Jawa Timur', 'Pramuka', 'Ambalan', 'MBRC', 'Himmah UPN'),
('Kholilul Rachman NM', 'UPN Veteran Jawa Timur', '17081010055', 'Teknik Informatika', 'Kholilul Rachman NM', 'Surabaya, 5 April 1998', 'Rungkut Lor X 115-C', 'Pria', 'Belum Menikah', 'Islam', '163/68', 'O', 'Indonesia', '085731866606', 'kholil.zboy@gmail.com', 'UPN Veteran Jawa Timur', 'Ngoding', 'kholilzboy.xyz', 'SDN Rungkut Kidul 1', 'SMP Negeri 35 Sby', 'MBI Amanatul Ummah', 'UPN Veteran Jawa Timur', 'Pramuka', 'WIsSNU', 'MBF', 'Himmah UPN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_ku`
--
ALTER TABLE `data_ku`
  ADD PRIMARY KEY (`var1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
