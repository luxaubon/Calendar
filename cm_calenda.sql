-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2018 at 08:56 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community`
--

-- --------------------------------------------------------

--
-- Table structure for table `cm_calenda`
--

CREATE TABLE `cm_calenda` (
  `Id` int(11) NOT NULL,
  `caDate` varchar(255) DEFAULT NULL,
  `caTitle` varchar(255) DEFAULT NULL,
  `caDescription` varchar(255) DEFAULT NULL,
  `caType` int(11) DEFAULT NULL,
  `caTime` varchar(255) DEFAULT NULL,
  `caPlace` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cm_calenda`
--

INSERT INTO `cm_calenda` (`Id`, `caDate`, `caTitle`, `caDescription`, `caType`, `caTime`, `caPlace`) VALUES
(1, 'yyyy-01-01', 'วันขึ้นปีใหม่', NULL, NULL, NULL, NULL),
(2, 'yyyy-04-06', 'วันจักรี', NULL, NULL, NULL, NULL),
(3, 'yyyy-04-13', 'วันสงกรานต์', NULL, NULL, NULL, NULL),
(4, 'yyyy-04-14', 'วันสงกรานต์', NULL, NULL, NULL, NULL),
(5, 'yyyy-04-15', 'วันสงกรานต์', NULL, NULL, NULL, NULL),
(6, 'yyyy-05-01', 'วันแรงงานแห่งชาติ', NULL, NULL, NULL, NULL),
(7, 'yyyy-05-05', 'วันฉัตรมงคล', NULL, NULL, NULL, NULL),
(8, 'yyyy-05-13', 'วันพืชมงคล', NULL, NULL, NULL, NULL),
(9, 'yyyy-08-12', 'วันแม่', NULL, NULL, NULL, NULL),
(10, 'yyyy-10-23', 'วันปิยมหาราช', NULL, NULL, NULL, NULL),
(11, 'yyyy-12-05', 'วันพ่อแห่งชาติ', NULL, NULL, NULL, NULL),
(12, 'yyyy-12-10', 'วันพระราชทานรัฐธรรมนูญ', NULL, NULL, NULL, NULL),
(13, 'yyyy-12-31', 'วันสิ้นปี', NULL, NULL, NULL, NULL),
(21, '2018-03-04', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'วัดหนองผักหนาม   '),
(43, '2018-03-11', 'หน่วยแพทย์เคลื่อนที่', '', 1, '08.30  -  12.00', 'เทศบาลตำบลทับมา'),
(44, '2018-03-18', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'ศูนย์บริการสาธารณสุขห้วยโป่ง'),
(45, '2018-04-29', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'ศาลเจ้าแม่จันเท มาบตาพุด'),
(46, '2018-05-06', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'โรงเรียนวัดบ้านฉาง'),
(47, '2018-05-27', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'วัดหนองแฟบ '),
(48, '2018-06-10', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'โรงเรียนวัดชากลูกหญ้า'),
(49, '2018-06-24', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'ศูนย์พัฒนาเด็กเล็กเทศบาลมาบข่า'),
(50, '2018-07-01', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'ศูนย์บริการสาธารณสุขตากวน'),
(51, '2018-07-22', 'หน่วแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'วัดกรอกยายชา'),
(52, '2018-08-05', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'โรงเรียนวัดเนินพระ'),
(53, '2018-09-02', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'วัดประชุมมิตรบำรุง'),
(54, '2018-09-09', 'หน่วยแพทย์เคลื่อนที่', 'ด้านสุขภาพ', 1, '08.30  -  12.00', 'มัสยิดยามี้อุลมุตาดี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cm_calenda`
--
ALTER TABLE `cm_calenda`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cm_calenda`
--
ALTER TABLE `cm_calenda`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
