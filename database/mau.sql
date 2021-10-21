-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 03:53 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `bd_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bd_sex` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bd_age` int(11) DEFAULT NULL,
  `bd_bgroup` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bd_reg_date` date DEFAULT NULL,
  `bd_phno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
('1', 'Lâm Gia Khánh', 'nam', 18, 'O', '0000-00-00', 987652118),
('2', 'Nguyễn Như Nghi', 'nam', 20, 'O', '0000-00-00', 2147483647),
('3', 'Nguyễn Bảo Như', 'nữ', 18, 'AB', '0000-00-00', 967543117),
('4', 'Đặng Yến Nhi', 'nữ', 18, 'A', '0000-00-00', 967546773),
('5', 'Vũ Thị Linh', 'nữ', 22, 'O', '0000-00-00', 978272931),
('6', 'Nguyễn Minh Thu', 'nữ', 21, 'O', '0000-00-00', 985637113);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
