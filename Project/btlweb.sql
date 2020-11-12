-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 08:41 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ID` int(11) NOT NULL,
  `TIEUDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `HINHANH` text COLLATE utf8_unicode_ci NOT NULL,
  `TACGIA` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `THOIGIANTAO` datetime NOT NULL,
  `THOIGIANDANG` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ID`, `TIEUDE`, `NOIDUNG`, `HINHANH`, `TACGIA`, `THOIGIANTAO`, `THOIGIANDANG`) VALUES
(0, 'TLU', '...', '', 'quanly', '2020-11-11 22:53:09', '2020-11-11 22:53:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `ID` int(11) UNSIGNED NOT NULL,
  `MAHOCPHAN` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENHOCPHAN` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SOTINCHI` int(11) NOT NULL,
  `LANHOC` int(11) NOT NULL,
  `LANTHI` int(11) NOT NULL,
  `DANHGIA` enum('DAT','HOCLAI') COLLATE utf8mb4_unicode_ci NOT NULL,
  `QUATRINH` int(11) NOT NULL,
  `THI` int(11) NOT NULL,
  `TKHP` int(11) NOT NULL,
  `DIEMCHU` enum('A','B','C','D','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `HOCKY` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`ID`, `MAHOCPHAN`, `TENHOCPHAN`, `SOTINCHI`, `LANHOC`, `LANTHI`, `DANHGIA`, `QUATRINH`, `THI`, `TKHP`, `DIEMCHU`, `HOCKY`) VALUES
(1, 'KT1', 'Kinh tế 1', 3, 1, 1, 'DAT', 8, 8, 8, 'B', 1),
(2, 'KT2', 'Kinh tế 2', 3, 1, 1, 'DAT', 7, 5, 6, 'C', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MAGIANGVIEN` int(11) NOT NULL,
  `TEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MAGIANGVIEN`, `TEN`, `DIACHI`, `SDT`) VALUES
(3, 'giangvien', 'Dong Da', 2147483647);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `ID` int(11) UNSIGNED NOT NULL,
  `HK` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`ID`, `HK`) VALUES
(1, 'Học kỳ 1'),
(2, 'Học kỳ 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoachgiangday`
--

CREATE TABLE `kehoachgiangday` (
  `MAKHGD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MAGIANGVIEN` int(11) NOT NULL,
  `MALOPHOCPHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAY` date NOT NULL,
  `THU` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DIADIEM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `THOIGIAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kehoachgiangday`
--

INSERT INTO `kehoachgiangday` (`MAKHGD`, `MAGIANGVIEN`, `MALOPHOCPHAN`, `NGAY`, `THU`, `DIADIEM`, `THOIGIAN`, `NOIDUNG`) VALUES
('1', 3, '1', '2020-08-01', 'Thứ 2', '222 A2', 'Từ tiết 1 - tiết 3 (Sáng)', 'HỌC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinhthucte`
--

CREATE TABLE `lichtrinhthucte` (
  `MALTTT` int(11) NOT NULL,
  `MAKHGD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MAGIANGVIEN` int(11) NOT NULL,
  `MALOPHOCPHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NGAY` date NOT NULL,
  `THU` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DIADIEM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `THOIGIAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `MALOPHOCPHAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOPHOCPHAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MAMONHOC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MAGIANGVIEN` int(11) NOT NULL,
  `MATHOIGIAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophocphan`
--

INSERT INTO `lophocphan` (`MALOPHOCPHAN`, `TENLOPHOCPHAN`, `MAMONHOC`, `MAGIANGVIEN`, `MATHOIGIAN`) VALUES
('1', 'KT-1', '1', 3, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MANGANHHOC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MAMONHOC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TENMONHOC` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SOTIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MANGANHHOC`, `MAMONHOC`, `TENMONHOC`, `SOTIN`) VALUES
('KT1', '1', 'Kinh te', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhhoc`
--

CREATE TABLE `nganhhoc` (
  `MANGANHHOC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TENNGANHHOC` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganhhoc`
--

INSERT INTO `nganhhoc` (`MANGANHHOC`, `TENNGANHHOC`) VALUES
('KT1', 'Kinh te');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `MAQUANLY` int(11) NOT NULL,
  `TEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanly`
--

INSERT INTO `quanly` (`MAQUANLY`, `TEN`, `DIACHI`, `SDT`) VALUES
(1, 'admin', 'Dong Da', 2147483647),
(2, 'quanly', 'Dong Da', 2147483647),
(4, 'sinhsinh', 'Dong Dd', 383015010),
(5, 'sinhvies', 'Dong Dd', 383015010);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `MAQUANTRIVIEN` int(11) NOT NULL,
  `TEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MASINHVIEN` int(11) NOT NULL,
  `TEN` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIACHI` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MASINHVIEN`, `TEN`, `DIACHI`, `SDT`) VALUES
(6, 'sinhvienn', 'Dong Da', 1212213);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(11) NOT NULL,
  `TENTAIKHOAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MAKICHHOAT` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `QUYEN` int(11) NOT NULL,
  `TRANGTHAI` enum('CHUAXACMINH','DAXACMINH') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `TENTAIKHOAN`, `MATKHAU`, `EMAIL`, `MAKICHHOAT`, `QUYEN`, `TRANGTHAI`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'nguyen0@gmail.com', '1f2cc59b02c9cb95f5c5c6648140baef', 1, 'DAXACMINH'),
(2, 'quanly', '76ce09fc04225228897e61087b1172a8', 'ng00@gmail.com', '41470cd9d6af1a7e3ea2d46be0f9ce7b', 2, 'DAXACMINH'),
(3, 'giangvien', '2f830951c2e27fcf934a92d091971a02', 'n000@gmail.com', 'd1ad5f2bacc9463aafc5451c34cbf5ed', 3, 'DAXACMINH'),
(4, 'quanlye', 'b75f58301305183b958bf0488a88add8', '', 'b76c1ee42bdb9e0d1b5b1fa6b52a8208', 4, 'CHUAXACMINH'),
(5, 'sinhvien', '615ad206666f8086103305b8f77173f4', 'nguyencanh00@gmail.com', '03982466c087940d4e7e117e8d784efc', 4, 'DAXACMINH'),
(6, 'sinhvienn', '673d1daf2bcd4f86f8a044ff19c314e3', 'nguyesdf@gmail.com', '43027e97c6d5783b78a6f34240087e2c', 0, 'CHUAXACMINH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianhoc`
--

CREATE TABLE `thoigianhoc` (
  `MATHOIGIAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NAMHOC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HOCKI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GDBATDAU` date NOT NULL,
  `GDKETTHUC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thoigianhoc`
--

INSERT INTO `thoigianhoc` (`MATHOIGIAN`, `NAMHOC`, `HOCKI`, `GDBATDAU`, `GDKETTHUC`) VALUES
('1', '2019 - 2020', 'Kì 1', '2020-08-01', '2020-12-01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `HOCKY` (`HOCKY`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MAGIANGVIEN`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD PRIMARY KEY (`MAKHGD`),
  ADD KEY `MAGIANGVIEN` (`MAGIANGVIEN`),
  ADD KEY `MALOPHOCPHAN` (`MALOPHOCPHAN`);

--
-- Chỉ mục cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD PRIMARY KEY (`MALTTT`),
  ADD KEY `MALOPHOCPHAN` (`MALOPHOCPHAN`),
  ADD KEY `MAKHGD` (`MAKHGD`);

--
-- Chỉ mục cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`MALOPHOCPHAN`),
  ADD KEY `MATHOIGIAN` (`MATHOIGIAN`),
  ADD KEY `MAGIANGVIEN` (`MAGIANGVIEN`),
  ADD KEY `MAMONHOC` (`MAMONHOC`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MAMONHOC`),
  ADD KEY `monhoc_ibfk_1` (`MANGANHHOC`);

--
-- Chỉ mục cho bảng `nganhhoc`
--
ALTER TABLE `nganhhoc`
  ADD PRIMARY KEY (`MANGANHHOC`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`MAQUANLY`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`MAQUANTRIVIEN`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MASINHVIEN`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thoigianhoc`
--
ALTER TABLE `thoigianhoc`
  ADD PRIMARY KEY (`MATHOIGIAN`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hocky`
--
ALTER TABLE `hocky`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`HOCKY`) REFERENCES `hocky` (`ID`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`MAGIANGVIEN`) REFERENCES `taikhoan` (`ID`);

--
-- Các ràng buộc cho bảng `kehoachgiangday`
--
ALTER TABLE `kehoachgiangday`
  ADD CONSTRAINT `kehoachgiangday_ibfk_1` FOREIGN KEY (`MALOPHOCPHAN`) REFERENCES `lophocphan` (`MALOPHOCPHAN`),
  ADD CONSTRAINT `kehoachgiangday_ibfk_2` FOREIGN KEY (`MAGIANGVIEN`) REFERENCES `giangvien` (`MAGIANGVIEN`);

--
-- Các ràng buộc cho bảng `lichtrinhthucte`
--
ALTER TABLE `lichtrinhthucte`
  ADD CONSTRAINT `lichtrinhthucte_ibfk_1` FOREIGN KEY (`MALOPHOCPHAN`) REFERENCES `lophocphan` (`MALOPHOCPHAN`),
  ADD CONSTRAINT `lichtrinhthucte_ibfk_2` FOREIGN KEY (`MAKHGD`) REFERENCES `kehoachgiangday` (`MAKHGD`);

--
-- Các ràng buộc cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `lophocphan_ibfk_1` FOREIGN KEY (`MATHOIGIAN`) REFERENCES `thoigianhoc` (`MATHOIGIAN`),
  ADD CONSTRAINT `lophocphan_ibfk_2` FOREIGN KEY (`MAGIANGVIEN`) REFERENCES `giangvien` (`MAGIANGVIEN`),
  ADD CONSTRAINT `lophocphan_ibfk_3` FOREIGN KEY (`MAMONHOC`) REFERENCES `monhoc` (`MAMONHOC`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`MANGANHHOC`) REFERENCES `nganhhoc` (`MANGANHHOC`);

--
-- Các ràng buộc cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `quanly_ibfk_2` FOREIGN KEY (`MAQUANLY`) REFERENCES `taikhoan` (`ID`);

--
-- Các ràng buộc cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD CONSTRAINT `quantrivien_ibfk_1` FOREIGN KEY (`MAQUANTRIVIEN`) REFERENCES `taikhoan` (`ID`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MASINHVIEN`) REFERENCES `taikhoan` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
