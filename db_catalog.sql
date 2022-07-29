-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataex`
--

CREATE TABLE `dataex` (
  `id_berkas` int(11) NOT NULL,
  `label` varchar(128) NOT NULL,
  `judul_dokumen` varchar(128) NOT NULL,
  `judul_proyek` varchar(128) NOT NULL,
  `penyedia` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `reff_kontrak` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataex`
--

INSERT INTO `dataex` (`id_berkas`, `label`, `judul_dokumen`, `judul_proyek`, `penyedia`, `tanggal`, `reff_kontrak`) VALUES
(1, 'ABC0000', 'QWERTY1', 'PR1', 'YI1', '2022-09-09', 'KN000'),
(2, 'ABC2', 'QWERTY2', 'PR2', 'YI2', '9/9/2022', 'KN2'),
(3, 'ABC3', 'QWERTY3', 'PR3', 'YI3', '9/10/2022', 'KN3'),
(4, 'ABC4', 'QWERTY4', 'PR4', 'YI4', '9/11/2022', 'KN4'),
(5, 'ABC5', 'QWERTY5', 'PR5', 'YI5', '9/12/2022', 'KN5'),
(6, 'ABC6', 'QWERTY6', 'PR6', 'YI6', '9/13/2022', 'KN6'),
(7, 'ABC7', 'QWERTY7', 'PR7', 'YI7', '9/14/2022', 'KN7'),
(8, 'ABC8', 'QWERTY8', 'PR8', 'YI8', '9/15/2022', 'KN8'),
(10, 'ABC10', 'QWERTY10', 'PR10', 'YI10', '9/17/2022', 'KN10'),
(11, 'ABC11', 'QWERTY11', 'PR11', 'YI11', '9/18/2022', 'KN11'),
(12, 'ABC12', 'QWERTY12', 'PR12', 'YI12', '9/19/2022', 'KN12'),
(13, 'ABC13', 'QWERTY13', 'PR13', 'YI13', '9/20/2022', 'KN13'),
(14, 'ABC14', 'QWERTY14', 'PR14', 'YI14', '9/21/2022', 'KN14'),
(15, 'ABC15', 'QWERTY15', 'PR15', 'YI15', '9/22/2022', 'KN15'),
(16, 'ABC16', 'QWERTY16', 'PR16', 'YI16', '9/23/2022', 'KN16'),
(17, 'ABC17', 'QWERTY17', 'PR17', 'YI17', '9/24/2022', 'KN17'),
(18, 'ABC18', 'QWERTY18', 'PR18', 'YI18', '9/25/2022', 'KN18'),
(19, 'ABC19', 'QWERTY19', 'PR19', 'YI19', '9/26/2022', 'KN19'),
(20, 'ABC20', 'QWERTY20', 'PR20', 'YI20', '9/27/2022', 'KN20'),
(21, 'ABC21', 'QWERTY21', 'PR21', 'YI21', '9/28/2022', 'KN21'),
(22, 'ABC22', 'QWERTY22', 'PR22', 'YI22', '9/29/2022', 'KN22'),
(23, 'ABC23', 'QWERTY23', 'PR23', 'YI23', '9/30/2022', 'KN23'),
(24, 'ABC24', 'QWERTY24', 'PR24', 'YI24', '10/1/2022', 'KN24'),
(25, 'ABC25', 'QWERTY25', 'PR25', 'YI25', '10/2/2022', 'KN25'),
(26, 'ABC26', 'QWERTY26', 'PR26', 'YI26', '10/3/2022', 'KN26'),
(27, 'ABC27', 'QWERTY27', 'PR27', 'YI27', '10/4/2022', 'KN27'),
(28, 'ABC28', 'QWERTY28', 'PR28', 'YI28', '10/5/2022', 'KN28'),
(29, 'ABC29', 'QWERTY29', 'PR29', 'YI29', '10/6/2022', 'KN29'),
(30, 'ABC30', 'QWERTY30', 'PR30', 'YI30', '10/7/2022', 'KN30'),
(31, 'ABC31', 'QWERTY31', 'PR31', 'YI31', '10/8/2022', 'KN31'),
(32, 'ABC32', 'QWERTY32', 'PR32', 'YI32', '10/9/2022', 'KN32'),
(33, 'ABC33', 'QWERTY33', 'PR33', 'YI33', '10/10/2022', 'KN33'),
(34, 'ABC34', 'QWERTY34', 'PR34', 'YI34', '10/11/2022', 'KN34'),
(35, 'ABC35', 'QWERTY35', 'PR35', 'YI35', '10/12/2022', 'KN35'),
(36, 'ABC36', 'QWERTY36', 'PR36', 'YI36', '10/13/2022', 'KN36'),
(37, 'ABC37', 'QWERTY37', 'PR37', 'YI37', '10/14/2022', 'KN37'),
(38, 'ABC38', 'QWERTY38', 'PR38', 'YI38', '10/15/2022', 'KN38'),
(39, 'ABC39', 'QWERTY39', 'PR39', 'YI39', '10/16/2022', 'KN39'),
(40, 'ABC40', 'QWERTY40', 'PR40', 'YI40', '10/17/2022', 'KN40'),
(41, 'ABC41', 'QWERTY41', 'PR41', 'YI41', '10/18/2022', 'KN41'),
(42, 'ABC42', 'QWERTY42', 'PR42', 'YI42', '10/19/2022', 'KN42'),
(43, 'ABC43', 'QWERTY43', 'PR43', 'YI43', '10/20/2022', 'KN43'),
(44, 'ABC44', 'QWERTY44', 'PR44', 'YI44', '10/21/2022', 'KN44'),
(45, 'ABC45', 'QWERTY45', 'PR45', 'YI45', '10/22/2022', 'KN45'),
(46, 'ABC46', 'QWERTY46', 'PR46', 'YI46', '10/23/2022', 'KN46'),
(47, 'ABC47', 'QWERTY47', 'PR47', 'YI47', '10/24/2022', 'KN47'),
(48, 'ABC48', 'QWERTY48', 'PR48', 'YI48', '10/25/2022', 'KN48'),
(49, 'ABC49', 'QWERTY49', 'PR49', 'YI49', '10/26/2022', 'KN49'),
(50, 'ABC50', 'QWERTY50', 'PR50', 'YI50', '10/27/2022', 'KN50'),
(51, 'ABC51', 'QWERTY51', 'PR51', 'YI51', '10/28/2022', 'KN51'),
(52, 'ABC52', 'QWERTY52', 'PR52', 'YI52', '10/29/2022', 'KN52'),
(53, 'ABC53', 'QWERTY53', 'PR53', 'YI53', '10/30/2022', 'KN53'),
(54, 'ABC54', 'QWERTY54', 'PR54', 'YI54', '10/31/2022', 'KN54'),
(55, 'ABC55', 'QWERTY55', 'PR55', 'YI55', '11/1/2022', 'KN55'),
(56, 'ABC56', 'QWERTY56', 'PR56', 'YI56', '11/2/2022', 'KN56'),
(57, 'ABC57', 'QWERTY57', 'PR57', 'YI57', '11/3/2022', 'KN57'),
(58, 'ABC58', 'QWERTY58', 'PR58', 'YI58', '11/4/2022', 'KN58'),
(59, 'ABC59', 'QWERTY59', 'PR59', 'YI59', '11/5/2022', 'KN59'),
(60, 'ABC60', 'QWERTY60', 'PR60', 'YI60', '11/6/2022', 'KN60'),
(61, 'ABC61', 'QWERTY61', 'PR61', 'YI61', '11/7/2022', 'KN61'),
(62, 'ABC62', 'QWERTY62', 'PR62', 'YI62', '11/8/2022', 'KN62'),
(63, 'ABC63', 'QWERTY63', 'PR63', 'YI63', '11/9/2022', 'KN63'),
(64, 'ABC64', 'QWERTY64', 'PR64', 'YI64', '11/10/2022', 'KN64'),
(65, 'ABC65', 'QWERTY65', 'PR65', 'YI65', '11/11/2022', 'KN65'),
(66, 'ABC66', 'QWERTY66', 'PR66', 'YI66', '11/12/2022', 'KN66'),
(67, 'ABC67', 'QWERTY67', 'PR67', 'YI67', '11/13/2022', 'KN67'),
(68, 'ABC68', 'QWERTY68', 'PR68', 'YI68', '11/14/2022', 'KN68'),
(69, 'ABC69', 'QWERTY69', 'PR69', 'YI69', '11/15/2022', 'KN69'),
(70, 'ABC70', 'QWERTY70', 'PR70', 'YI70', '11/16/2022', 'KN70'),
(71, 'ABC71', 'QWERTY71', 'PR71', 'YI71', '11/17/2022', 'KN71'),
(72, 'ABC72', 'QWERTY72', 'PR72', 'YI72', '11/18/2022', 'KN72'),
(73, 'ABC73', 'QWERTY73', 'PR73', 'YI73', '11/19/2022', 'KN73'),
(74, 'ABC74', 'QWERTY74', 'PR74', 'YI74', '11/20/2022', 'KN74'),
(75, 'ABC75', 'QWERTY75', 'PR75', 'YI75', '11/21/2022', 'KN75'),
(76, 'ABC76', 'QWERTY76', 'PR76', 'YI76', '11/22/2022', 'KN76'),
(77, 'ABC77', 'QWERTY77', 'PR77', 'YI77', '11/23/2022', 'KN77'),
(78, 'ABC78', 'QWERTY78', 'PR78', 'YI78', '11/24/2022', 'KN78'),
(79, 'ABC79', 'QWERTY79', 'PR79', 'YI79', '11/25/2022', 'KN79'),
(80, 'ABC80', 'QWERTY80', 'PR80', 'YI80', '11/26/2022', 'KN80'),
(81, 'ABC81', 'QWERTY81', 'PR81', 'YI81', '11/27/2022', 'KN81'),
(82, 'ABC82', 'QWERTY82', 'PR82', 'YI82', '11/28/2022', 'KN82'),
(83, 'ABC83', 'QWERTY83', 'PR83', 'YI83', '11/29/2022', 'KN83'),
(84, 'ABC84', 'QWERTY84', 'PR84', 'YI84', '11/30/2022', 'KN84'),
(85, 'ABC85', 'QWERTY85', 'PR85', 'YI85', '12/1/2022', 'KN85'),
(86, 'ABC86', 'QWERTY86', 'PR86', 'YI86', '12/2/2022', 'KN86'),
(87, 'ABC87', 'QWERTY87', 'PR87', 'YI87', '12/3/2022', 'KN87'),
(88, 'ABC88', 'QWERTY88', 'PR88', 'YI88', '12/4/2022', 'KN88'),
(89, 'ABC89', 'QWERTY89', 'PR89', 'YI89', '12/5/2022', 'KN89'),
(90, 'ABC90', 'QWERTY90', 'PR90', 'YI90', '12/6/2022', 'KN90'),
(91, 'ABC91', 'QWERTY91', 'PR91', 'YI91', '12/7/2022', 'KN91'),
(92, 'ABC92', 'QWERTY92', 'PR92', 'YI92', '12/8/2022', 'KN92'),
(93, 'ABC93', 'QWERTY93', 'PR93', 'YI93', '12/9/2022', 'KN93'),
(94, 'ABC94', 'QWERTY94', 'PR94', 'YI94', '12/10/2022', 'KN94'),
(95, 'ABC95', 'QWERTY95', 'PR95', 'YI95', '12/11/2022', 'KN95'),
(96, 'ABC96', 'QWERTY96', 'PR96', 'YI96', '12/12/2022', 'KN96'),
(98, 'test', 'test', 'test', 'test', '2022-07-20', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataex`
--
ALTER TABLE `dataex`
  ADD PRIMARY KEY (`id_berkas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataex`
--
ALTER TABLE `dataex`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
