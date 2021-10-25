-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 23, 2021 at 11:24 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlySinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` int(2) NOT NULL,
  `Address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` year(4) NOT NULL,
  `Faculty` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`ID`, `FullName`, `Gender`, `Address`, `Date`, `Faculty`) VALUES
(10264, 'Nguyễn Thị Lan Anh', 1, 'Khoái Châu - Hưng Yên ', 2001, 'Công nghệ thông tin'),
(44756, 'Vũ Duy Đan ', 0, 'Hải Hậu - Nam Định', 2001, 'Công nghệ thông tin'),
(20851, 'Đào Việt Cường', 0, 'Thành phố Hải Phòng', 2001, 'Điện tử viễn thông'),
(23401, 'Phạm Huy Hưng', 0, 'Thái Thuỵ - Thái Bình', 2001, 'Kinh tế xây dựng'),
(14901, 'Hoàng Thị Hương', 1, 'Thiệu Hoá - Thanh Hoá', 2001, 'Kiến trúc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
