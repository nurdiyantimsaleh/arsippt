-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 08:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('admin', 'admin'),
('hukum', 'hukum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arsipperkara`
--

CREATE TABLE `tbl_arsipperkara` (
  `kode_perkara` int(11) NOT NULL,
  `id_perkara` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_pn` varchar(50) NOT NULL,
  `no_pt` varchar(50) NOT NULL,
  `kd_lemari` int(11) NOT NULL,
  `id_boxperkara` int(11) NOT NULL,
  `kd_rak` int(11) NOT NULL,
  `file` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_arsipperkara`
--

INSERT INTO `tbl_arsipperkara` (`kode_perkara`, `id_perkara`, `tanggal`, `no_pn`, `no_pt`, `kd_lemari`, `id_boxperkara`, `kd_rak`, `file`) VALUES
(21, 1, '2017-05-22', '156/pdt/2015/pn.thn', '55/pdt/2017/pt.mnd', 1, 2, 2, ''),
(22, 1, '2017-06-12', '95/pdt/2015/pn.arm', '54/pdt/2016/pt.mnd', 1, 2, 2, ''),
(23, 2, '2017-03-23', '304/pid/2016/pn.ktg', '32/pid/2017/pt.mnd', 2, 4, 1, ''),
(24, 2, '2017-04-27', '27/pid/2017/pn.thn', '42/pid/2017/pt.mnd', 2, 4, 1, ''),
(25, 2, '2017-03-20', '520/pid/2016/pn.mnd', '38/pid/2017/pt.mnd', 2, 4, 1, ''),
(26, 1, '2017-04-19', '34/pid/2016/pn.thn', '33/pid/2017/pt.mnd', 1, 6, 1, ''),
(27, 2, '2017-01-23', '267/pid/2016/pn.ktg', '20/pid/2017/pt.mnd', 2, 4, 1, ''),
(28, 2, '2017-01-10', '241/pid/2016/pn.thn', '16/pid/2017/pt/mnd', 2, 4, 1, ''),
(29, 2, '2017-03-06', '475/pid/2016/pn.arm', '26/pid/2017/pt.mnd', 2, 4, 1, ''),
(30, 3, '2010-12-23', '190/pid/2008/pn.tdo', '110/pid/2011/pt.mnd', 3, 5, 1, '110_PID_2011_PT.MDO.pdf'),
(39, 2, '2013-02-12', '37/PID/2013/PN.Btg', '167/PID/2013/PT.MND', 2, 4, 1, '37_Pid.B_2013_PN.Btg.pdf'),
(40, 1, '2016-05-11', '157/pdt/2016/pn.bit', '157/pdt/2016/pt.mnd', 1, 1, 1, '157-Pdt.G-2015-PN.Bit.pdf'),
(41, 1, '2017-02-26', '70/PDT/2015/PN.BIT', '159/PDT/2016', 1, 1, 1, '70-Pdt.BTH-2015-PN.Bit.pdf'),
(42, 1, '2016-04-26', '120/Pdt/2015/Pn.Bit', '160/pdt/2016/pt.mnd', 1, 1, 1, '120_Pdt.G_2015_PN.BIT.pdf'),
(43, 2, '2011-08-16', '190/pid/2008/pn.tdo', '110/pid/2011/pt.mnd', 2, 1, 1, '110_PID_2011_PT.MDO.pdf'),
(44, 2, '2013-11-29', '477/Pid/2013/PN.Mnd', '145/Pid/2013/PT.Mnd', 2, 7, 1, '477_Pid.B_2013_PN.Mdo.pdf'),
(45, 2, '2013-07-02', '252/Pdt/2013/PN.Mdo', '134/PDT/2014/PT.MND', 2, 7, 1, '252_PDT.G_2013_PN.Mdo.pdf'),
(46, 1, '2013-09-21', '330/PDT/2012/PN.MND', '121/PDT/2012/PT.MND', 1, 2, 1, '330_Pdt.PLW_2012_PN.Mdo.pdf'),
(47, 3, '2015-06-03', '82/PDT.G/2015/PN.Arm', '46/TIP/2015/PT.MND', 3, 5, 1, '82_PDT.G_2015_PN.Arm.pdf'),
(48, 3, '0000-00-00', '115/TIP/2015/PN.Amr ', '51/TIP/2015/PT.MND', 3, 5, 1, '115_Pid.B_2015_PN.Amr.pdf'),
(49, 1, '2010-04-12', '23/PDT.G/2010/PN.THNA', '82/PDT/2010/PT.MND', 1, 1, 1, '23_PDT.G_2010_PN._THNA..pdf'),
(50, 1, '2010-04-12', '23/PDT.G/2010/PN.THNA', '139/PDT/2010/PT.MND', 1, 1, 1, '23_PDT.G_2010_PN._THNA..pdf'),
(51, 1, '2011-12-02', '71/PDT/2011/PN.THN', '45/PDT/2011/PT.MND', 1, 7, 1, '71_PDT.G_2011_PN.THNA.pdf'),
(52, 3, '2014-11-18', '58/TIP/2014/PN.THN', '69/TIP/2014/PT.MND', 3, 1, 1, '58_PDT.G_2014_PN.THN.pdf'),
(53, 1, '2017-08-05', 'sdgaksfjgk', 'asffdg', 1, 2, 2, '5_Pdt.G_2010_PN.Bitung.pdf'),
(54, 2, '2017-08-02', '1234455696', '456457467467', 1, 1, 1, '170_PDT.G_2016_PN_Mnd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_box`
--

CREATE TABLE `tbl_box` (
  `id_boxperkara` int(11) NOT NULL,
  `box` varchar(50) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_box`
--

INSERT INTO `tbl_box` (`id_boxperkara`, `box`, `klasifikasi`) VALUES
(1, 'Box 1', 'Tanah'),
(2, 'Box 2', 'Warisan'),
(3, 'Box 3', 'Pembunuhan'),
(4, 'Box 4', 'Penganiayaan'),
(5, 'Box 5', 'Korupsi'),
(6, 'Box 6', 'Pencabulan'),
(7, 'Box 7', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lemari`
--

CREATE TABLE `tbl_lemari` (
  `kd_lemari` int(11) NOT NULL,
  `lemari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lemari`
--

INSERT INTO `tbl_lemari` (`kd_lemari`, `lemari`) VALUES
(1, 'Lemari 1'),
(2, 'Lemari 2'),
(3, 'Lemari 3'),
(4, 'Lemari 4'),
(5, 'Lemari 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perkara`
--

CREATE TABLE `tbl_perkara` (
  `id_perkara` int(10) NOT NULL,
  `nama_perkara` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_perkara`
--

INSERT INTO `tbl_perkara` (`id_perkara`, `nama_perkara`, `ket`) VALUES
(1, 'Perdata', ''),
(2, 'Pidana', ''),
(3, 'Tipikor', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rak`
--

CREATE TABLE `tbl_rak` (
  `kd_rak` int(11) NOT NULL,
  `rak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rak`
--

INSERT INTO `tbl_rak` (`kd_rak`, `rak`) VALUES
(0, 'Rak 4'),
(1, 'Rak 1'),
(2, 'Rak 2'),
(3, 'Rak 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_arsipperkara`
--
ALTER TABLE `tbl_arsipperkara`
  ADD PRIMARY KEY (`kode_perkara`),
  ADD KEY `id_boxperkara` (`id_boxperkara`),
  ADD KEY `kd_lemari` (`kd_lemari`),
  ADD KEY `kd_rak` (`kd_rak`),
  ADD KEY `id_perkara` (`id_perkara`);

--
-- Indexes for table `tbl_box`
--
ALTER TABLE `tbl_box`
  ADD PRIMARY KEY (`id_boxperkara`);

--
-- Indexes for table `tbl_lemari`
--
ALTER TABLE `tbl_lemari`
  ADD PRIMARY KEY (`kd_lemari`);

--
-- Indexes for table `tbl_perkara`
--
ALTER TABLE `tbl_perkara`
  ADD PRIMARY KEY (`id_perkara`);

--
-- Indexes for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  ADD PRIMARY KEY (`kd_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_arsipperkara`
--
ALTER TABLE `tbl_arsipperkara`
  MODIFY `kode_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_arsipperkara`
--
ALTER TABLE `tbl_arsipperkara`
  ADD CONSTRAINT `tbl_arsipperkara_ibfk_1` FOREIGN KEY (`id_boxperkara`) REFERENCES `tbl_box` (`id_boxperkara`),
  ADD CONSTRAINT `tbl_arsipperkara_ibfk_2` FOREIGN KEY (`kd_lemari`) REFERENCES `tbl_lemari` (`kd_lemari`),
  ADD CONSTRAINT `tbl_arsipperkara_ibfk_3` FOREIGN KEY (`kd_rak`) REFERENCES `tbl_rak` (`kd_rak`),
  ADD CONSTRAINT `tbl_arsipperkara_ibfk_4` FOREIGN KEY (`id_perkara`) REFERENCES `tbl_perkara` (`id_perkara`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
