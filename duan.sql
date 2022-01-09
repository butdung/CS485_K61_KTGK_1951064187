-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 16:15 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951064187_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `maduan` int(11) NOT NULL,
  `tenduan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namthuhien` year(4) NOT NULL,
  `linhvuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhiemvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquanthuchien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuhien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'Đánh giá biến mức độ Biến đổi khí hậu và Xây dựng kịch bản Biến đổi khí hậu tỉnh Bắc Ninh', 2019, 'Biến Đổi Khí Hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu'),
(2, 'Xây dựng và triển khai kế hoạch hành động ứng phó với Biến đổi khí hậu tỉnh Bắc Ninh', 2012, 'Biến Đổi Khí Hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu'),
(3, 'Cập nhật kế hoạch ứng phó với BĐKH tỉnh Bắc Ninh đến năm 2030 tầm nhìn đến năm 2050', 2018, 'Biến Đổi Khí Hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `maduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
