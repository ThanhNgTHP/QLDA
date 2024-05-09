-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:9999
-- Generation Time: May 09, 2024 at 01:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlduan`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaAnh` (`maAnh` INT, `tenAnh` VARCHAR(255), `duongDan` VARCHAR(255), `maDA` INT)   BEGIN
    UPDATE anh 
    SET anh.TenAnh = tenAnh, anh.DuongDan = duongDan, anh.MaDA = maDA
    WHERE anh.MaAnh = maAnh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaBCCC` (`maBC` INT, `tenBC` VARCHAR(255), `ngayCap` DATE, `noiCap` VARCHAR(255), `maTV` INT)   BEGIN
	UPDATE bangcapchungchi 
    SET bangcapchungchi.TenBC = tenBC, bangcapchungchi.NgayCap = ngayCap, bangcapchungchi.NoiCap = noiCap, bangcapchungchi.MaTV = maTV
    WHERE bangcapchungchi.MaBC = maBC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaCV` (IN `maCV` INT, IN `tenCV` VARCHAR(255), IN `noiDung` TEXT, IN `ghiChu` TEXT, IN `ngayBatDau` DATE, IN `ngayKetthuc` DATE, IN `maNhom` INT, IN `maDA` INT)   BEGIN
    UPDATE congviec 
    SET congviec.TenCV = tenCV, congviec.NoiDung = noiDung, congviec.GhiChu = ghiChu, congviec.NgayBatDau = ngayBatDau, congviec.NgayKetThuc = ngayKetThuc, congviec.MaNhom = maNhom, congviec.MaDA = maDA
    WHERE congviec.MaCV = maCV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaDA` (IN `maDA` INT, IN `tenDA` VARCHAR(255), IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `trangThai` TEXT, IN `lienHe` TEXT, IN `moTa` TEXT, IN `maLoaiDA` INT)   BEGIN
    UPDATE duan 
    SET duan.TenDA = tenDA, duan.NgayBatDau = ngayBatDau, duan.NgayKetThuc = ngayKetThuc, duan.TrangThai = trangThai, duan.LienHe = lienHe, duan.MoTa = moTa, duan.MaLoaiDA = maLoaiDA
    WHERE duan.MaDA = maDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaDT` (IN `maDT` INT, IN `tenDT` VARCHAR(255), IN `email` TEXT, IN `sDT` CHAR(10), IN `fax` VARCHAR(15), IN `diaChi` VARCHAR(255), IN `trangThai` VARCHAR(255), IN `ghiChu` TEXT, IN `maSoThue` VARCHAR(255), IN `nguoiDaiDien` VARCHAR(255), IN `chucVu` VARCHAR(255))   BEGIN
    UPDATE doitac 
    SET doitac.TenDT = tenDT, doitac.Email = email, doitac.SDT = sDT, doitac.Fax = fax, doitac.DiaChi = diaChi, doitac.TrangThai = trangThai, doitac.GhiChu = ghiChu, doitac.MaSoThue = maSoThue, doitac.Nguoidaidien = nguoiDaiDien, doitac.ChucVu = chucVu
    WHERE doitac.MaDT = maDT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaHD` (IN `maHD` INT, IN `tenHD` VARCHAR(255), IN `soHD` VARCHAR(20), IN `ngayKiKet` DATE, IN `ngayHetHan` DATE, IN `ghiChu` TEXT, IN `giaTriHD` FLOAT, IN `trangThai` VARCHAR(255), IN `maDT` INT, IN `maDA` INT)   BEGIN
    UPDATE hopdong 
    SET hopdong.TenHD = tenHD, hopdong.SoHD = soHD, hopdong.NgayKiKet = ngayKiKet, hopdong.NgayHetHan = ngayHetHan, hopdong.GhiChu = ghiChu, hopdong.GiaTriHD = giaTriHD, hopdong.TrangThai = trangThai, hopdong.MaDT = maDT, hopdong.MaDA = maDA
    WHERE hopdong.MaHD = maHD;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaLDA` (IN `maLoaiDA` INT, IN `tenLoaiDA` VARCHAR(255), IN `moTa` TEXT)   BEGIN
    UPDATE loaiduan 
    SET loaiduan.TenLoaiDA = tenLoaiDA, loaiduan.MoTa = moTa
    WHERE loaiduan.MaLoaiDA = maLoaiDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaNhom` (`maNhom` INT, `tenNhom` VARCHAR(255), `truongNhom` VARCHAR(255), `maPB` INT)   BEGIN
    UPDATE nhom 
    SET nhom.TenNhom = tenNhom, nhom.TruongNhom = truongNhom, nhom.MaPB = maPB
    WHERE nhom.MaNhom = maNhom;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaPB` (IN `maPB` INT, IN `tenPB` VARCHAR(255), IN `moTa` TEXT)   BEGIN
    UPDATE phongban 
    SET phongban.TenPB = tenPB, phongban.MoTa = moTa
    WHERE phongban.MaPB = maPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaTK` (IN `maTK` INT, IN `tenTK` VARCHAR(255), IN `matKhau` VARCHAR(255), IN `maQuyen` INT, IN `trangThai` VARCHAR(255))   BEGIN
	UPDATE taikhoan 
    SET taikhoan.TenTK = tenTK, taikhoan.MatKhau = matKhau, taikhoan.MaQuyen = maQuyen, taikhoan.TrangThai = trangThai
    WHERE taikhoan.MaTK = MaTK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaTV` (IN `maTV` INT, IN `hoTen` VARCHAR(30), IN `sDT` VARCHAR(10), IN `diaChi` VARCHAR(255), IN `ngaySinh` DATE, IN `chucVu` VARCHAR(255), IN `email` VARCHAR(64), IN `maTK` INT, IN `gioiTinh` VARCHAR(20), IN `trangThai` VARCHAR(255), IN `anhDaiDien` VARCHAR(255), IN `maNhom` INT)   BEGIN
    UPDATE thanhvien 
    SET thanhvien.HoTen = hoTen, thanhvien.SDT = sDT, thanhvien.DiaChi = diaChi, thanhvien.NgaySinh = ngaySinh, thanhvien.ChucVu = chucVu, thanhvien.Email = email, thanhvien.MaTK = maTK, thanhvien.GioiTinh = gioiTinh, thanhvien.TrangThai = trangThai, thanhvien.AnhDaiDien = anhDaiDien, thanhvien.MaNhom = maNhom
    WHERE thanhvien.MaTV = maTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaTVTG` (`maTVTG` INT, `maTV` INT, `maDA` INT)   BEGIN
    UPDATE thanhvienthamgia 
    SET thanhvienthamgia.MaTV = maTV, thanhvienthamgia.MaDA = maDA
    WHERE thanhvienthamgia.MaTVTG = maTVTG;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemAnh` (`tenAnh` VARCHAR(255), `duongDan` VARCHAR(255), `maDA` INT)   BEGIN
    INSERT INTO `anh`(`TenAnh`, `DuongDan`, `MaDA`) VALUES (tenAnh, duongDan, maDA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemBCCC` (`tenBC` VARCHAR(255), `ngayCap` DATE, `noiCap` VARCHAR(255), `maTV` INT)   BEGIN
	INSERT INTO `bangcapchungchi`(`TenBC`, `NgayCap`, `NoiCap`, `MaTV`) VALUES (tenBC, ngayCap, noiCap, maTV);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemCV` (IN `tenCV` VARCHAR(255), IN `noiDung` TEXT, IN `ghiChu` TEXT, IN `ngayBatDau` DATE, IN `ngayKetthuc` DATE, IN `maNhom` INT, IN `maDA` INT)   BEGIN
    INSERT INTO `congviec`(`TenCV`, `NoiDung`, `GhiChu`, `NgayBatDau`, `NgayKetThuc`, `MaNhom`, `MaDA`) VALUES (tenCV, noiDung,ghiChu, ngayBatDau, ngayKetthuc, maNhom, maDA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemDA` (IN `tenDA` VARCHAR(255), IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `trangThai` TEXT, IN `lienHe` TEXT, IN `moTa` TEXT, IN `maLoaiDA` INT)   BEGIN
    INSERT INTO `duan`(`TenDA`, `NgayBatDau`, `NgayKetThuc`, `TrangThai`, `LienHe`, `MoTa`, `MaLoaiDA`) VALUES ('aaa','2020-05-13','2025-05-13','ss','www','qdqqd',1);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemDT` (IN `tenDT` VARCHAR(255), IN `email` TEXT, IN `sDT` CHAR(10), IN `fax` VARCHAR(15), IN `diaChi` VARCHAR(255), IN `trangThai` VARCHAR(255), IN `ghiChu` TEXT, IN `maSoThue` VARCHAR(255), IN `nguoiDaiDien` VARCHAR(255), IN `chucVu` VARCHAR(255))   BEGIN
    INSERT INTO `doitac`(`TenDT`, `Email`, `SDT`, `Fax`, `DiaChi`, `TrangThai`, `GhiChu`, `MaSoThue`, `Nguoidaidien`, `ChucVu`) VALUES (tenDT, email, sDT, fax, diaChi, trangThai, ghiChu, maSoThue, nguoiDaiDien, chucVu);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemHD` (IN `tenHD` VARCHAR(255), IN `soHD` VARCHAR(20), IN `ngayKiKet` DATE, IN `ngayHetHan` DATE, IN `ghiChu` TEXT, IN `giaTriHD` FLOAT, IN `trangThai` VARCHAR(255), IN `maDT` INT, IN `maDA` INT)   BEGIN
    INSERT INTO `hopdong`(`TenHD`, `SoHD`, `NgayKiKet`, `NgayHetHan`, `GhiChu`, `GiaTriHD`, `TrangThai`, `MaDT`, `MaDA`) VALUES (tenHD, soHD, ngayKiKet, ngayHetHan, ghiChu, giaTriHD, trangThai, maDT, maDA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemLDA` (IN `tenLoaiDA` VARCHAR(255), IN `moTa` TEXT)   BEGIN
    INSERT INTO `loaiduan`(`TenLoaiDA`, `MoTa`) VALUES (tenLoaiDA, moTa);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemNhom` (`tenNhom` VARCHAR(255), `truongNhom` VARCHAR(255), `maPB` INT)   BEGIN
    INSERT INTO `nhom`(`TenNhom`, `TruongNhom`, `MaPB`) VALUES (tenNhom, truongNhom, maPB);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemPB` (IN `tenPB` VARCHAR(255), IN `moTa` TEXT)   BEGIN
    INSERT INTO `phongban`(`TenPB`, `MoTa`) VALUES (tenPB, moTa);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemTK` (`tenTK` VARCHAR(255), `matKhau` VARCHAR(255), `maquyen` INT, `trangthai` VARCHAR(255))   BEGIN
    INSERT INTO `taikhoan`(`TenTK`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES (tenTK, matKhau, maquyen, trangthai);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemTV` (IN `hoTen` VARCHAR(30), IN `sDT` VARCHAR(10), IN `diaChi` VARCHAR(255), IN `ngaySinh` DATE, IN `chucVu` VARCHAR(255), IN `email` VARCHAR(64), IN `maTK` INT, IN `gioiTinh` VARCHAR(20), IN `trangThai` VARCHAR(255), IN `anhDaiDien` VARCHAR(255), IN `maNhom` INT)   BEGIN
    INSERT INTO `thanhvien`(`HoTen`, `SDT`, `DiaChi`, `NgaySinh`, `ChucVu`, `Email`, `MaTK`, `GioiTinh`, `TrangThai`, `AnhDaiDien`, `MaNhom`) VALUES (hoTen, sDT, diaChi, ngaySinh, chucVu, email, maTK, gioiTinh, trangThai, anhDaiDien,maNhom);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemTVTG` (`maTV` INT, `maDA` INT)   BEGIN
    INSERT INTO `thanhvienthamgia`(`MaTV`, `MaDA`) VALUES (maTV,maDA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongQuyenTK` (IN `MaQuyen` INT)   BEGIN
  SELECT taikhoan.MaTK AS ID, taikhoan.TenTK AS Name, taikhoan.MatKhau AS Password, taikhoan.MaQuyen AS PermissionID FROM taikhoan, taikhoan.TrangThai AS Status
  WHERE taikhoan.MaQuyen = MaQuyen;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnh` (`MaAnh` INT)   BEGIN
  SELECT MaAnh AS ID, TenAnh AS Name, DuongDan AS Path, MaDA AS ProjectID
  FROM anh
  WHERE anh.MaAnh = MaAnh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnhDA` (IN `MaDA` INT)   BEGIN
  SELECT anh.TenAnh as Name, anh.DuongDan as Path, anh.MaAnh AS ID, anh.MaDA AS ProjectID
  FROM duan 
  INNER JOIN anh ON duan.MaDA = anh.MaDA
  WHERE duan.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinChiTietDA` (IN `MaDA` INT)   BEGIN
    SELECT duan.MaDA AS ProjecID, duan.TenDA AS ProjectName, duan.NgayBatDau AS ProjectName, duan.NgayKetThuc AS ProjectExpire, duan.LienHe AS ProjectContact, duan.MoTa AS ProjectDescription, duan.TrangThai AS ProjectStatus, thanhvien.MaTV AS StaffID, thanhvien.HoTen AS StaffName, thanhvien.GioiTinh AS StaffGender, thanhvien.ChucVu AS StaffPosition, thanhvien.TrangThai AS StaffStatus, nhom.MaNhom AS TeamID, nhom.TenNhom AS TeamName, phongban.MaPB AS DepartmentID, phongban.TenPB AS DepartmentName, hopdong.MaHD AS ContractID, hopdong.TenHD AS ContractName, hopdong.SoHD AS ContractNumber, hopdong.NgayKiKet AS SignDay, hopdong.NgayHetHan AS ContractExpire, hopdong.GhiChu AS ContractNote, hopdong.GiaTriHD AS ContractValue, hopdong.TrangThai AS ContractStatus, doitac.MaDT AS PartnerID, doitac.TenDT AS PartnerName, doitac.NguoiLienHe AS PartnerContact, doitac.Email AS PartnerEmail, doitac.SDT AS PartnerPhone, doitac.Fax AS PartnerFax, doitac.DiaChi AS PartnerAddress, doitac.GhiChu AS PartnerNote, doitac.TrangThai AS PartnerStatus, doitac.MaSoThue AS TaxCode
	FROM duan
    INNER JOIN hopdong ON duan.MaDA = hopdong.MaDA
    INNER JOIN doitac ON hopdong.MaDT = doitac.MaDT
    INNER JOIN thanhvienthamgia ON duan.MaDA = thanhvienthamgia.MaDA
    INNER JOIN thanhvien ON thanhvienthamgia.MaTV = thanhvien.MaTV
    INNER JOIN nhom ON nhom.MaNhom = thanhvien.MaNhom
    INNER JOIN phongban ON nhom.MaPB = phongban.MaPB
    WHERE duan.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinDA` (IN `MaDA` INT)   BEGIN
    SELECT duan.MaDA AS ID, duan.TenDA AS Name, duan.NgayBatDau AS Begin, duan.NgayKetThuc AS End, duan.TrangThai AS Status, duan.LienHe AS Contact, duan.MoTa AS Description, duan.MaLoaiDA AS ProjectCategoryID 
    FROM duan 
    WHERE duan.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinDATVTG` (`MaDA` INT)   BEGIN
  SELECT thanhvienthamgia.MaTVTG AS ID, thanhvienthamgia.MaTV AS StaffID, thanhvienthamgia.MaDA AS ProjectID FROM thanhvienthamgia
  WHERE thanhvienthamgia.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinDT` (IN `MaDT` INT)   BEGIN
  SELECT doitac.MaDT AS ID, doitac.TenDT AS Name, doitac.Email AS Email, doitac.SDT AS Phone, doitac.Fax AS Fax, doitac.DiaChi AS Address, doitac.TrangThai AS Status, doitac.GhiChu AS Note, doitac.MaSoThue AS TaxCode, doitac.Nguoidaidien AS Representative, doitac.ChucVu AS Position
  FROM doitac
  WHERE doitac.MaDT = MaDT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinHDDT` (IN `MaDA` INT)   BEGIN
    SELECT hopdong.SoHD AS ContractNumber, doitac.TenDT AS PartnerName	
    FROM duan
    INNER JOIN hopdong ON duan.MaDA = hopdong.MaDA
    INNER JOIN doitac ON hopdong.MaDT = doitac.MaDT
    WHERE duan.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinLDA` (`MaLDA` INT)   BEGIN
  SELECT loaiduan.MaLoaiDA AS ID, loaiduan.TenLoaiDA AS Name, loaiduan.MoTa AS Description
  FROM loaiduan
  WHERE loaiduan.MaLoaiDA = MaLoaiDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinLDADA` (IN `MaLoaiDA` INT)   BEGIN
  SELECT duan.MaLoaiDA AS ProjectCategoryID, duan.MaDA AS ID, duan.TenDA AS Name, duan.NgayBatDau AS Begin, duan.NgayKetThuc AS End, duan.TrangThai AS Status, duan.LienHe AS Contact, duan.MoTa AS Description  FROM duan
  WHERE duan.MaLoaiDA = MaLoaiDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinNguoiDung` (IN `MaTK` INT)   BEGIN
  	SELECT quyen.TenQuyen AS PermissionName, thanhvien.MaTV AS StaffID, taikhoan.TenTK AS Username, thanhvien.MaTV
    FROM taikhoan
    INNER JOIN quyen ON taikhoan.MaQuyen = quyen.MaQuyen
    INNER JOIN thanhvien ON taikhoan.MaTK = thanhvien.MaTK
    WHERE taikhoan.MaTK = MaTK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinNhom` (`MaNhom` INT)   BEGIN
  SELECT nhom.MaNhom AS ID, nhom.TenNhom AS Name from nhom
  WHERE nhom.MaNhom = MaNhom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinNhomTV` (IN `MaNhom` INT)   BEGIN
  SELECT thanhvien.MaTV AS ID, thanhvien.HoTen AS Name, thanhvien.SDT AS Phone, thanhvien.DiaChi AS Address, thanhvien.NgaySinh AS BirthDay, thanhvien.ChucVu AS Position, thanhvien.Email AS Email, thanhvien.MaTK as AccountID, thanhvien.GioiTinh AS Gender, thanhvien.TrangThai AS Status, thanhvien.AnhDaiDien AS Avatar, thanhvien.MaNhom AS TeamID FROM thanhvien
  WHERE thanhvien.MaNhom = MaNhom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinPB` (`MaPB` INT)   BEGIN
  SELECT phongban.MaPB AS DepartmentID, phongban.TenPB AS DepartmentName FROM phongban
  WHERE phongban.MaPB = MaPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinPBNhom` (`MaPB` INT)   BEGIN
  SELECT nhom.MaNhom AS ID, nhom.TenNhom AS Name, nhom.TruongNhom AS Leader, nhom.MaPB AS DepartmentID FROM nhom
  WHERE nhom.MaPB = MaPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinQuyen` (`MaQuyen` INT)   BEGIN
  SELECT quyen.MaQuyen AS ID, quyen.TenQuyen AS Name, quyen.GhiChu AS Description FROM quyen
  WHERE quyen.MaQuyen = MaQuyen;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaAnh` ()   BEGIN
	SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID
    FROM anh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaBC` ()   BEGIN
    SELECT MaBC AS ID, TenBC AS Name, NgayCap AS Date, NoiCap AS Address , MaTV AS StaffID
    FROM bangcapchungchi;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaCV` ()   BEGIN
  SELECT congviec.MaCV AS ID, congviec.TenCV AS Name, congviec.NoiDung AS Content, congviec.GhiChu AS Note, congviec.NgayBatDau AS Begin, congviec.NgayKetThuc AS End, congviec.MaNhom AS TeamID, congviec.MaDA AS ProjectID
  FROM congviec;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaDA` ()   BEGIN
    SELECT MaDA AS ID, TenDA AS Name, NgayBatDau AS Begin , NgayKetThuc AS End, TrangThai AS Status, LienHe AS Contact, MoTa AS Description, MaLoaiDA AS ProjectCategoryID
    FROM duan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaDT` ()   BEGIN
  SELECT doitac.MaDT AS ID, doitac.TenDT AS Name, doitac.Email AS Email, doitac.SDT AS Phone, doitac.Fax AS Fax, doitac.DiaChi AS Address, doitac.TrangThai AS Status, doitac.GhiChu AS Note, doitac.MaSoThue AS TaxCode, doitac.Nguoidaidien AS Representative, doitac.ChucVu AS Position
  FROM doitac;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaHD` ()   BEGIN
    SELECT hopdong.MaHD AS ID, hopdong.TenHD AS Name, hopdong.SoHD AS Number, hopdong.NgayKiKet AS SignDay, hopdong.NgayHetHan AS Expire, hopdong.GhiChu AS Note, hopdong.GiaTriHD AS Value, hopdong.TrangThai AS Status, hopdong.MaDT AS PartnerID, hopdong.MaDA AS ProjectID
    FROM hopdong;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaLDA` ()   BEGIN
  SELECT loaiduan.MaLoaiDA AS ID, loaiduan.TenLoaiDA AS Name, loaiduan.MoTa AS Description
  FROM loaiduan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaNhom` ()   BEGIN
  SELECT nhom.MaNhom AS ID, nhom.TenNhom AS Name, nhom.TruongNhom AS Leader, nhom.MaPB AS DepartmentID
  from nhom
  WHERE nhom.MaNhom = MaNhom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaPB` ()   BEGIN
  SELECT phongban.MaPB AS ID, phongban.TenPB AS Name, phongban.MoTa AS Description
  FROM phongban;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaQuyen` ()   BEGIN
    SELECT quyen.MaQuyen AS ID, quyen.TenQuyen AS Name, quyen.GhiChu as Note
    FROM quyen;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaTK` ()   BEGIN
    SELECT taikhoan.MaTK AS ID, taikhoan.TenTK AS Name, taikhoan.MatKhau AS Password, taikhoan.MaQuyen AS PermissionID, taikhoan.TrangThai AS Status
    FROM taikhoan;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaTV` ()   BEGIN
    SELECT MaTV AS ID, HoTen AS Name, GioiTinh AS Gender, NgaySinh AS Birthday, SDT AS Phone, Email, DiaChi AS Address, ChucVu AS Position, AnhDaiDien AS Avatar, TrangThai AS Status, thanhvien.MaNhom AS TeamID, thanhvien.MaTK AS AccountID, thanhvien.NgaySinh AS BirthDay
    FROM thanhvien;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaTVTG` ()   BEGIN
  SELECT thanhvienthamgia.MaTVTG AS ID, thanhvienthamgia.MaTV AS StaffID, thanhvienthamgia.MaDA AS ProjectID
  FROM thanhvienthamgia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTV` (IN `MaTV` INT)   BEGIN
    SELECT HoTen AS StaffName, GioiTinh AS Gender, NgaySinh AS Birthday, SDT AS Phone, Email, DiaChi AS Address, ChucVu AS Position, AnhDaiDien AS Avatar, TrangThai AS Status
    FROM thanhvien WHERE thanhvien.MaTV = MaTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTVBC` (`MaTV` INT)   BEGIN
  SELECT bangcapchungchi.MaTV AS StaffID, bangcapchungchi.MaBC AS ID, bangcapchungchi.TenBC AS Name, bangcapchungchi.NoiCap AS Address, bangcapchungchi.NgayCap AS Date
  FROM thanhvien INNER JOIN bangcapchungchi ON thanhvien.MaTV = bangcapchungchi.MaTV
  WHERE thanhvien.MaTV = MaTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTVTG` (`MaDA` INT)   BEGIN
  SELECT COUNT(MaTVTG) FROM thanhvienthamgia
  INNER JOIN duan ON thanhvienthamgia.MaDA = duan.MaDA
  INNER JOIN thanhvien ON thanhvienthamgia.MaTV = thanhvien.MaTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTVTVTG` (IN `MaTV` INT)   BEGIN
  SELECT thanhvienthamgia.MaTVTG AS ID, thanhvienthamgia.MaTV AS StaffID, thanhvienthamgia.MaDA AS ProjectID FROM thanhvienthamgia
  WHERE thanhvienthamgia.MaTV = MaTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemDA` (IN `TenDA` VARCHAR(255) CHARSET utf8mb4)   BEGIN
    SET @TenDA = CONCAT('%', TenDA , '%');
    SELECT MaDA AS ProjectID, duan.TenDA AS ProjectName, NgayBatDau AS Begin , NgayKetThuc AS Expire, TrangThai AS Status, LienHe AS Contact, MoTa AS Description
    FROM duan
    WHERE duan.TenDA LIKE @TenDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XacMinhTaiKhoan` (IN `taikhoan` VARCHAR(255), IN `matkhau` VARCHAR(255))   BEGIN
    SELECT taikhoan.MaTK AS accountID, quyen.TenQuyen AS permissionName, thanhvien.MaTV AS staffID, taikhoan.TenTK AS username FROM taikhoan
    INNER JOIN quyen ON taikhoan.MaQuyen = quyen.MaQuyen
    INNER JOIN thanhvien ON taikhoan.MaTK = thanhvien.MaTK
    WHERE taikhoan.TenTK = taikhoan AND taikhoan.MatKhau = matkhau;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaAnh` (`maAnh` INT)   BEGIN
    DELETE FROM anh WHERE anh.MaAnh = maAnh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaBCCC` (`maBC` INT, `maTV` INT)   BEGIN
	DELETE FROM bangcapchungchi WHERE bangcapchungchi.MaBC = maBC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaCV` (IN `maCV` INT, IN `tenCV` VARCHAR(255), IN `noiDung` TEXT, IN `ghiChu` TEXT, IN `ngayBatDau` DATE, IN `ngayKetthuc` DATE, IN `maNhom` INT, IN `maDA` INT)   BEGIN
    DELETE FROM congviec WHERE congviec.MaCV = maCV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaDA` (IN `maDA` INT)   BEGIN
    DELETE FROM duan WHERE duan.MaDA = maDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaDT` (IN `maDT` INT)   BEGIN
	DELETE FROM doitac WHERE doitac.MaDT = maDT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaHD` (IN `maHD` INT)   BEGIN
	DELETE FROM hopdong WHERE hopdong.MaHD = maHD;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaLDA` (IN `maLoaiDA` INT)   BEGIN
    DELETE FROM loaiduan WHERE loaiduan.MaLoaiDA = maLoaiDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaNhom` (`maNhom` INT, `maPB` INT)   BEGIN
	DELETE FROM nhom WHERE nhom.MaNhomhom = maNhom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaPB` (IN `maPB` INT)   BEGIN
    DELETE FROM phongban WHERE phongban.MaPB = maPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaTK` (`maTK` INT)   BEGIN
    DELETE FROM taikhoan WHERE taikhoan.MaTK = maTK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaTV` (IN `maTV` INT)   BEGIN
    DELETE FROM thanhvien WHERE thanhvien.MaTV = maTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaTVTG` (`maTVTG` INT)   BEGIN
    DELETE FROM thanhvienthamgia WHERE thanhvienthamgia.MaTVTG = maTVTG;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `SoNguoiThamGia` (`MaDA` INT) RETURNS INT(11)  BEGIN 
  DECLARE count INT;
  SELECT COUNT(MaTV) INTO count FROM thanhvienthamgia WHERE thanhvienthamgia.MaDA = MaDA;
  RETURN count;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `anh`
--

CREATE TABLE `anh` (
  `MaAnh` int(11) NOT NULL,
  `TenAnh` varchar(255) DEFAULT NULL,
  `DuongDan` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anh`
--

INSERT INTO `anh` (`MaAnh`, `TenAnh`, `DuongDan`, `MaDA`) VALUES
(1, 'Mô Phỏng Xe Tăng', 'https://www.simulation.vn/templates/phoneapps-et/slideshow/1.jpg', 1),
(2, 'Mô Phỏng Lái Xe Ô Tô', 'https://www.simulation.vn/templates/phoneapps-et/slideshow/2.jpg', 2),
(3, 'Mô Phỏng Phòng Học', 'https://www.simulation.vn/images/sbhinh1.jpg', 1),
(4, 'Mô Phỏng Súng AK', 'https://www.simulation.vn/images/ak-nhinthang.jpg', 1),
(5, 'Mô Phỏng Cấu Tạo Hoạt Động Động Cơ Cơ Khí', 'https://www.simulation.vn/images/giamtoccanh2.jpg', 1),
(6, 'Mô Phỏng Huấn Luyện Chiến Thuật Phân Đội Tank - Thiết Giáp', 'https://www.simulation.vn/images/3dtank.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bangcapchungchi`
--

CREATE TABLE `bangcapchungchi` (
  `MaBC` int(11) NOT NULL,
  `TenBC` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgayCap` date DEFAULT NULL,
  `NoiCap` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaTV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bangcapchungchi`
--

INSERT INTO `bangcapchungchi` (`MaBC`, `TenBC`, `NgayCap`, `NoiCap`, `MaTV`) VALUES
(1, 'Bồi Dưỡng Kế Toán Trưởng', '2024-03-30', 'Hội Kế Toán Và Kiểm Toán Việt Nam', 1),
(2, 'Kỹ Sư', '2024-03-30', 'Trường Đại Học Sư Phạm Kỹ Thuật HCM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `MaCV` int(11) NOT NULL,
  `TenCV` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NganSachDuKien` float DEFAULT NULL,
  `TienDo` int(11) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doitac`
--

CREATE TABLE `doitac` (
  `MaDT` int(11) NOT NULL,
  `TenDT` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `SDT` char(10) DEFAULT NULL,
  `Fax` varchar(15) DEFAULT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `MaSoThue` varchar(255) DEFAULT NULL,
  `Nguoidaidien` varchar(255) DEFAULT NULL,
  `ChucVu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doitac`
--

INSERT INTO `doitac` (`MaDT`, `TenDT`, `Email`, `SDT`, `Fax`, `DiaChi`, `TrangThai`, `GhiChu`, `MaSoThue`, `Nguoidaidien`, `ChucVu`) VALUES
(1, 'Trường Cao Đẳng Nghề', 'truongcaodangnghe@gmail.com', '0977569889', '02203752519', 'Xã Nam Đồng, Thành Phố Hải Dương, Tỉnh Hải Dương', 'Ngừng Hợp Tác', 'Không Có', '0104922104', 'Nguyễn Văn Vọng', 'Hiệu Trưởng'),
(2, 'Tổng Công Ty Xây Dựng Lũng Lô', 'nguyenhuong@gmail.com', '0123575251', '04913722549', 'Số 162 Trường Chinh - Đống Đa - Hà Nội', 'Ngừng Hợp Tác', 'Không Có', '0434971814', 'Tăng Văn Chúc', 'Giám  Đốc');

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `MaDA` int(11) NOT NULL,
  `TenDA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `TrangThai` text DEFAULT NULL,
  `LienHe` text DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `MaLoaiDA` int(11) DEFAULT NULL,
  `NganSachThucTe` float DEFAULT NULL,
  `NganSachDuKien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`MaDA`, `TenDA`, `NgayBatDau`, `NgayKetThuc`, `TrangThai`, `LienHe`, `MoTa`, `MaLoaiDA`, `NganSachThucTe`, `NganSachDuKien`) VALUES
(1, 'Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành', '2017-07-21', '2017-12-12', 'Ngừng Phát Triển', 'Nguyễn Văn Long - 0845758492 - longvan@gmail.com', 'Hệ Thống Có Thể Theo Dõi Qúa Trình Thi Thực Hành Của Từng Học Viên, Ghi Lại Kết Quả Và Cung Cấp Phản Hồi Tức Thì', 1, NULL, NULL),
(2, 'Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng', '2005-06-14', '2025-12-25', 'Ngừng Phát Triển', 'Nguyễn Văn Mạnh - 0957557641- vanmanh@gmail.com', 'Bảo Vệ Mạng Và Dữ Liệu Từ Các Mối Đe Dọa Bằng Cách Sử Dụng Các Công Cụ Nhu Tường Lửa, Hệ Thống Tiêu Diệt Virus Và Phát Hiện Xâm Nhập', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHD` int(11) NOT NULL,
  `TenHD` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SoHD` varchar(20) DEFAULT NULL,
  `NgayKiKet` date DEFAULT NULL,
  `NgayHetHan` date DEFAULT NULL,
  `GhiChu` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GiaTriHD` float DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaDT` int(11) DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`MaHD`, `TenHD`, `SoHD`, `NgayKiKet`, `NgayHetHan`, `GhiChu`, `GiaTriHD`, `TrangThai`, `MaDT`, `MaDA`) VALUES
(1, 'Hợp Đồng Cung Cấp Hàng Hóa', '654/HĐ', '2024-07-21', '2024-12-12', 'Ghi Rõ Thông Tin Về Tên Doanh Nghiệp, Trụ Sở, Số Điện Thoại, Chức Vụ, Và Người Đại Diện', 1736730000, 'Hết Hiệu Lực', 1, 1),
(2, 'Hợp Đồng Kinh Tế', '101015/LLVNSIM', '2024-06-14', '2024-12-29', 'Mô Tả Chi Tiết Về Hàng Hóa Cần Cung Cấp, Bao Gồm Loại Hàng Số Lượng Và Chất Lượng', 2071190000, 'Hết Hiệu Lực', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `loaiduan`
--

CREATE TABLE `loaiduan` (
  `MaLoaiDA` int(11) NOT NULL,
  `TenLoaiDA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaiduan`
--

INSERT INTO `loaiduan` (`MaLoaiDA`, `TenLoaiDA`, `MoTa`) VALUES
(1, 'Thiết Bị', 'Không Có'),
(2, 'Phần Mềm', 'Không Có');

-- --------------------------------------------------------

--
-- Table structure for table `nhiemvu`
--

CREATE TABLE `nhiemvu` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `HoanThanh` tinyint(1) DEFAULT NULL,
  `DoUuTien` varchar(255) DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `NganSachDuKien` float DEFAULT NULL,
  `MaTV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

CREATE TABLE `nhom` (
  `MaNhom` int(11) NOT NULL,
  `TenNhom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TruongNhom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaPB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`MaNhom`, `TenNhom`, `TruongNhom`, `MaPB`) VALUES
(3, 'Nhóm Lập Trình', 'Nguyễn Thị Hoan', 1),
(4, 'Nhóm Thiết Kế', 'Bùi Hoan Tuân', 2),
(5, 'Nhóm Phân Tích Yêu Cầu', 'Phạm Hồng Quân', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPB` int(11) NOT NULL,
  `TenPB` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPB`, `TenPB`, `MoTa`) VALUES
(1, 'Phòng Kỹ Thuật', 'Không Có'),
(2, 'Phòng Thiết Kế', 'Không Có');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GhiChu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `TenQuyen`, `GhiChu`) VALUES
(1, 'Quản Trị', 'Không Có'),
(2, 'Chỉnh Sửa', 'Không Có'),
(3, 'Xem dự án', 'không có');

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `MaSK` int(11) NOT NULL,
  `TenSK` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `TenTK` varchar(16) DEFAULT NULL,
  `MatKhau` varchar(16) DEFAULT NULL,
  `MaQuyen` int(11) DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `TenTK`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'summon', '123456789', 1, 'Vẫn còn sử dụng'),
(2, 'galactot', '123456789', 2, 'Tạm ngưng hoạt động'),
(3, 'nguyentung', '123456789', 3, 'Vẫn còn sử dụng');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTV` int(11) NOT NULL,
  `HoTen` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `ChucVu` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `MaTK` int(11) DEFAULT NULL,
  `GioiTinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'Nam',
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `AnhDaiDien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaNhom` int(11) DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `HoTen`, `SDT`, `DiaChi`, `NgaySinh`, `ChucVu`, `Email`, `MaTK`, `GioiTinh`, `TrangThai`, `AnhDaiDien`, `MaNhom`, `MaDA`) VALUES
(1, 'Nguyễn Văn Tùng', '0245624669', 'Xã Kênh Giang - Thủy Nguyên - Hải Phòng - Thôn Đồng Phản', '2000-03-01', 'Nhân Viên', 'nguyenvantung@gmail.com', 1, 'Nam', 'Đang Làm Việc', 'https://demoda.vn/wp-content/uploads/2022/03/mau-anh-the-nhan-vien-van-phong.jpg', 3, NULL),
(2, 'Bùi Thị Hoan', '0942782218', 'Xã Ngũ Lão - Huyện Thủy Nguyên - Hải Phòng', '2024-03-01', 'Quản Trị Nội Dung', 'buithihoan@gmail.com', 2, 'Nữ', 'Đang Làm Việc', 'https://khoinguonsangtao.vn/wp-content/uploads/2022/11/mau-anh-the-nam-gai-ao-somi.jpg', 4, NULL),
(3, 'Trần Thị Long', '3767005332', 'Thủy Đường, Thủy Nguyên, Hải Phòng', '2024-03-03', 'Nhân Viên Thiết Kế Giao Diện', 'thilong632@gmail.com', 3, 'Nu', 'Nghỉ việc', 'https://tiemanhsky.com/wp-content/uploads/2020/03/%E1%BA%A3nh-th%E1%BA%BB-683x1024.jpg', 4, NULL),
(5, 'Le Quoc Dan', '4298892323', 'Đống Đa, Hà Nội, Việt Nam', '2000-03-04', 'Lập  Trình Viên', 'Dan50302@gmail.com', 3, 'Nam', 'Vẫn còn làm việc', 'https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202008/14/-05-33-414f09d19128976bbb896968910eec3503.JPEG', 5, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `MaDA` (`MaDA`);

--
-- Indexes for table `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  ADD PRIMARY KEY (`MaBC`),
  ADD KEY `MaTV` (`MaTV`);

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MaCV`),
  ADD KEY `MaDA` (`MaDA`);

--
-- Indexes for table `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`MaDT`);

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`MaDA`),
  ADD KEY `MaLoaiDA` (`MaLoaiDA`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaCT` (`MaDT`),
  ADD KEY `MaDA` (`MaDA`);

--
-- Indexes for table `loaiduan`
--
ALTER TABLE `loaiduan`
  ADD PRIMARY KEY (`MaLoaiDA`);

--
-- Indexes for table `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaTV` (`MaTV`);

--
-- Indexes for table `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`MaNhom`),
  ADD KEY `MaPB` (`MaPB`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPB`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSK`),
  ADD KEY `MaDA` (`MaDA`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD KEY `MaQuyen` (`MaQuyen`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`),
  ADD KEY `MaTK` (`MaTK`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh`
--
ALTER TABLE `anh`
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  MODIFY `MaBC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `congviec`
--
ALTER TABLE `congviec`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doitac`
--
ALTER TABLE `doitac`
  MODIFY `MaDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `MaDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaiduan`
--
ALTER TABLE `loaiduan`
  MODIFY `MaLoaiDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nhiemvu`
--
ALTER TABLE `nhiemvu`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhom`
--
ALTER TABLE `nhom`
  MODIFY `MaNhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`);

--
-- Constraints for table `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  ADD CONSTRAINT `bangcapchungchi_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

--
-- Constraints for table `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`);

--
-- Constraints for table `duan`
--
ALTER TABLE `duan`
  ADD CONSTRAINT `duan_ibfk_1` FOREIGN KEY (`MaLoaiDA`) REFERENCES `loaiduan` (`MaLoaiDA`);

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`MaDT`) REFERENCES `doitac` (`MaDT`),
  ADD CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`);

--
-- Constraints for table `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD CONSTRAINT `nhiemvu_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

--
-- Constraints for table `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`MaPB`) REFERENCES `phongban` (`MaPB`);

--
-- Constraints for table `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`);

--
-- Constraints for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),
  ADD CONSTRAINT `thanhvien_ibfk_2` FOREIGN KEY (`MaNhom`) REFERENCES `nhom` (`MaNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
