-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2022 lúc 02:23 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlcuahanggiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadonban`
--

CREATE TABLE `ct_hoadonban` (
  `Mahd` int(50) NOT NULL,
  `Magiay` int(11) NOT NULL,
  `Soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_hoadonban`
--

INSERT INTO `ct_hoadonban` (`Mahd`, `Magiay`, `Soluongban`) VALUES
(1006, 65, 1),
(1583, 69, 2),
(2143, 64, 1),
(3890, 69, 1),
(3939, 65, 1),
(5033, 64, 1),
(7691, 55, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_phieunhap`
--

CREATE TABLE `ct_phieunhap` (
  `Maphieu` int(11) NOT NULL,
  `Magiay` int(11) NOT NULL,
  `Soluong` int(11) NOT NULL,
  `Gianhap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay`
--

CREATE TABLE `giay` (
  `Magiay` int(15) NOT NULL,
  `Tengiay` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Maloai` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Magt` int(15) NOT NULL,
  `STT_size` int(10) NOT NULL,
  `Soluong` int(11) NOT NULL,
  `Gia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giay`
--

INSERT INTO `giay` (`Magiay`, `Tengiay`, `Maloai`, `Hinh`, `Magt`, `STT_size`, `Soluong`, `Gia`) VALUES
(3, 'New Balance', 'L11', '1670146780_new-balance.jpg', 2, 4, 5, 500000),
(6, 'Facota', 'L09', '1670146818_Facota-V1.jpg', 2, 3, 6, 250000),
(7, 'Converse Cổ Thấp', 'L11', '1670146841_converse.jpg', 2, 5, 7, 450000),
(8, 'MLB Big Ball Chunky', 'L11', '1670146859_mlb-big-ball-chunky.jpg', 2, 5, 9, 600000),
(9, 'ConverseCổ Cao', 'L11', '1670146881_converse-co-cao.jpg', 2, 4, 4, 500000),
(10, 'Mossono', 'L09', '1670146908_giay-sandal-nu-mossono.jpg', 2, 4, 10, 300000),
(11, 'Eva Phun Bitits', 'L09', '1670146931_sandal-eva-phun-bitit.jpg', 2, 4, 15, 250000),
(12, 'Quai Chéo', 'L09', '1670146961_quai-cheo.jpg', 2, 3, 18, 300000),
(14, 'Quai Chéo ', 'L01', '1667490705_quai-cheo.jpg', 1, 6, 12, 250000),
(15, 'Vento', 'L01', '1667490725_vento.jpg', 1, 7, 0, 300000),
(16, 'Camel Crown', 'L01', '1667540587_camel-crown.jpg', 1, 7, 11, 400000),
(17, 'Dockers', 'L01', '1667490803_dockers.jpg', 2, 8, 10, 600000),
(19, 'Air Force 1', 'Giày Sneaker Nam', '1667489435_Air-force-1.jpg', 1, 6, 12, 450000),
(20, 'Vans', 'Giày Sneaker Nam', '1667489407_vans.jpg', 1, 1, 17, 350000),
(22, 'Alphabounce', 'L03', '1667488460_alphabounce.jpg', 1, 6, 18, 450000),
(23, 'Yeeze - 350', 'L03', '1667488731_yeeze-350.jpg', 1, 8, 29, 900000),
(25, 'Moccasin', 'L04', '1667540558_Moccasin.jpg', 1, 6, 19, 450000),
(27, 'Chelsea Boot', 'L05', '1667487926_chelsea-boot.jpg', 1, 7, 20, 650000),
(28, 'Boot Công Sở', 'L05', '1667488660_boot-cong-so-GL10.jpg', 1, 6, 15, 550000),
(29, 'Boot Da Bò', 'L05', '1667488679_Boot-da-bo-GL16.jpg', 1, 6, 10, 750000),
(30, 'Boot Cổ Cao Có Dây', 'L05', '1667488596_Boot-co-cao.png', 1, 8, 11, 550000),
(32, 'Penny Loafer', 'L06', '1667488574_penny-loafer.jpg', 1, 9, 0, 600000),
(33, 'Oxford Da Bò', 'L06', '1667488515_oxford-da-bo.jpg', 1, 7, 19, 700000),
(35, 'Giày Tây Nam LTG4087', 'L06', '1667488494_giay-tay-nam-LTG4087-4-300x300.jpg', 1, 6, 10, 500000),
(36, 'Juno', 'L012', '1667487733_juno.jpg', 2, 4, 20, 450000),
(38, 'Búp Bê Mũi Nhọn Đính Hạt', 'L012', '1667487715_bup-be-mui-nhon-dinh-hat.jpg', 2, 5, 10, 300000),
(39, 'Búp Bê Mũi Nhọn Đính Hạt', 'L012', '1667487694_bup-be-mui-nhon-phoi-no-kim-loai.jpg', 2, 1, 15, 400000),
(40, 'Búp Bê Mũi Bầu', 'L012', '1667487676_bup-be-mui-bau.jpg', 2, 2, 17, 350000),
(41, 'Crocs Brooklyn', 'L07', '1667549013_de-xuong-crocs-brooklyn.jpg', 2, 4, 9, 250000),
(43, 'Nine Nine Swest Elenta', 'L07', '1670147575_nine-nine-swest-elenta.jpg', 2, 4, 18, 200000),
(44, 'Thời Trang Công Sở', 'L07', '1667487597_thoi-trang-cong-so.jpg', 2, 2, 20, 300000),
(47, 'Khoano', 'L08', '1667487543_khoano.jpg', 2, 4, 11, 250000),
(48, 'Kitas', 'L08', '1667487521_kitas.jpg', 2, 3, 15, 300000),
(49, 'Sapo Mũi Nhọn', 'L08', '1667487493_sapo-mui-nhon.jpg', 2, 2, 19, 400000),
(50, 'AK238', 'L08', '1667487468_sapo-nu-AK238-4-2.jpg', 2, 5, 29, 450000),
(51, 'Boot Cổ Ngắn Cột Dây Đế Thô', 'L10', '1667487440_boot-co-ngan-cot-day-de-tho.jpg', 2, 2, 30, 300000),
(53, 'Dodavi', 'L10', '1667487417_dodavi.jpg', 2, 1, 15, 550000),
(54, 'Yamet Boot', 'L10', '1667487374_yamet.jpg', 2, 4, 18, 400000),
(55, 'Chelsea Boot', 'L10', '1667486763_chelsea-boot.jpg', 2, 5, 17, 500000),
(57, 'Scorpion', 'L02', '1667486823_cao-got-de-vuong-scorpion.jpg', 2, 3, 25, 400000),
(59, 'Cao Gót Mũi Nhọn Trắng', 'L02', '1667486808_cao-got-mui-nhon.jpeg', 2, 4, 20, 200000),
(60, 'Cao Gót Mũi Nhọn Phối Dây Cao 5cm', 'L02', '1667486794_cao-got-mui-nhon-pho-day-ho-got-5cm.jpg', 2, 5, 30, 300000),
(61, 'Uniqlo', 'L02', '1667485467_cao-got-uniqlo.jpg', 2, 3, 16, 250000),
(64, 'Jordan 1', 'L03', '1667636620_jordan.jpg', 1, 7, 19, 500000),
(65, 'Giày Thê Thao Nam', 'L03', '1670146716_giay-the-thao-nam-MTY9652-2-300x300.jpg', 1, 6, 40, 350000),
(69, 'Air Force 1 Phối Gucci', 'L11', '1670411616_air-force-1-phoi-mau-gucci.jpg', 2, 6, 20, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `Magt` int(11) NOT NULL,
  `Tengt` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`Magt`, `Tengt`) VALUES
(1, 'Nam'),
(2, 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonban`
--

CREATE TABLE `hoadonban` (
  `Mahd` int(50) NOT NULL,
  `Makh` int(11) NOT NULL,
  `Trigia` int(10) NOT NULL,
  `Ngayban` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonban`
--

INSERT INTO `hoadonban` (`Mahd`, `Makh`, `Trigia`, `Ngayban`) VALUES
(1006, 23, 350000, '2022-12-23 14:09:18'),
(1583, 28, 4000000, '2022-12-07 13:38:48'),
(2143, 23, 500, '2022-12-01 15:50:06'),
(3890, 23, 2000000, '2022-12-08 15:23:40'),
(3939, 28, 350000, '2022-12-07 13:39:56'),
(5033, 21, 500, '2022-12-03 14:23:55'),
(7026, 23, 2000000, '2022-12-08 15:23:20'),
(7691, 21, 1000000, '2022-12-07 12:14:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Makh` int(11) NOT NULL,
  `Tenkh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` char(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Tendangnhap` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Matkhau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Makh`, `Tenkh`, `Diachi`, `SDT`, `Tendangnhap`, `Matkhau`) VALUES
(21, 'Trần Thị Thúy Tiên', 'CT', '0868404734', 'thuytien', '43fac43d5c9bb309af3ec645dfd4c743'),
(22, 'Trần Thị Thúy Tiên', 'CT', '0868404734', 'thuytien', '202cb962ac59075b964b07152d234b70'),
(23, 'Thúy Tiên', 'CT', '0868404734', 'tien', '2a26569e98b26668f39e98e6baef2d54'),
(26, 'Trần Thị Thúy Tiên', 'Sóc Trăng', '0868404734', 'thuytien', '43fac43d5c9bb309af3ec645dfd4c743'),
(27, 'Tien', 'ST', '0123456789', 'thuytien', '202cb962ac59075b964b07152d234b70'),
(28, 'Phan Tấn Tài', 'Cần Thơ', '0868404734', 'tai', 'a412ba79e6bcd018c48faf00f057c0bb');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaigiay`
--

CREATE TABLE `loaigiay` (
  `Maloai` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Tenloai` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Magt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaigiay`
--

INSERT INTO `loaigiay` (`Maloai`, `Tenloai`, `Magt`) VALUES
('L01', 'Giày Sandal Nam', 1),
('L012', 'Giày Búp Bê - Giày Lười', 2),
('L02', 'Giày Cao Gót', 2),
('L03', 'Giày Sneaker Nam', 1),
('L04', 'Giày Lười Nam', 1),
('L05', 'Giày Boot Nam', 1),
('L06', 'Giày Tây', 1),
('L07', 'Giày Đế Xuông', 2),
('L08', 'Giày Mule - Sapo', 2),
('L09', 'Giày Sandal Nữ', 2),
('L10', 'Giày Boot Nữ', 2),
('L11', 'Giày Sneaker Nữ', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `Mancc` int(11) NOT NULL,
  `Tenncc` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Manv` int(11) NOT NULL,
  `Hotennv` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` char(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Tendangnhap` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Matkhau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Manv`, `Hotennv`, `Diachi`, `SDT`, `Tendangnhap`, `Matkhau`) VALUES
(1, 'Thúy Tiên', 'CT', '0868404734', 'tien', '2a26569e98b26668f39e98e6baef2d54'),
(2, 'Thúy Tiên', 'CT', '0868404734', 'tien', '2a26569e98b26668f39e98e6baef2d54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `Maphieu` int(11) NOT NULL,
  `Mancc` int(11) NOT NULL,
  `Trigia` float NOT NULL,
  `Ngaynhap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `STT_size` int(10) NOT NULL,
  `Size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`STT_size`, `Size`) VALUES
(1, 35),
(2, 36),
(3, 37),
(4, 38),
(5, 39),
(6, 40),
(7, 41),
(8, 42),
(9, 43),
(10, 44);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_hoadonban`
--
ALTER TABLE `ct_hoadonban`
  ADD PRIMARY KEY (`Mahd`,`Magiay`),
  ADD KEY `Mahd` (`Magiay`),
  ADD KEY `Mahd_2` (`Mahd`);

--
-- Chỉ mục cho bảng `ct_phieunhap`
--
ALTER TABLE `ct_phieunhap`
  ADD PRIMARY KEY (`Maphieu`,`Magiay`),
  ADD KEY `Magiay` (`Magiay`),
  ADD KEY `Maphieu` (`Maphieu`);

--
-- Chỉ mục cho bảng `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`Magiay`),
  ADD KEY `Maloai` (`Maloai`),
  ADD KEY `Magt` (`Magt`),
  ADD KEY `STT_size` (`STT_size`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`Magt`);

--
-- Chỉ mục cho bảng `hoadonban`
--
ALTER TABLE `hoadonban`
  ADD PRIMARY KEY (`Mahd`),
  ADD KEY `Manv` (`Makh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Makh`);

--
-- Chỉ mục cho bảng `loaigiay`
--
ALTER TABLE `loaigiay`
  ADD PRIMARY KEY (`Maloai`),
  ADD KEY `Magt` (`Magt`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`Mancc`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Manv`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`Maphieu`),
  ADD KEY `Mancc` (`Mancc`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`STT_size`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_phieunhap`
--
ALTER TABLE `ct_phieunhap`
  MODIFY `Maphieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giay`
--
ALTER TABLE `giay`
  MODIFY `Magiay` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `Magt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `Mancc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `Manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `Maphieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `STT_size` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
