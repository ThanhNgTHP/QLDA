-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2024 lúc 03:58 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlduan`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaAnh` (`maAnh` INT, `tenAnh` VARCHAR(255), `duongDan` VARCHAR(255), `maDA` INT, `maHD` INT, `loaiAnh` VARCHAR(255))   BEGIN
    UPDATE anh 
    SET anh.TenAnh = tenAnh, anh.DuongDan = duongDan, anh.MaDA = maDA, anh.MaHD = maHD, anh.LoaiAnh = loaiAnh
    WHERE anh.MaAnh = maAnh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaBCCC` (`maBC` INT, `tenBC` VARCHAR(255), `ngayCap` DATE, `noiCap` VARCHAR(255), `maTV` INT)   BEGIN
	UPDATE bangcapchungchi 
    SET bangcapchungchi.TenBC = tenBC, bangcapchungchi.NgayCap = ngayCap, bangcapchungchi.NoiCap = noiCap, bangcapchungchi.MaTV = maTV
    WHERE bangcapchungchi.MaBC = maBC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaCV` (`maCV` INT, `tenCV` VARCHAR(255), `noiDung` TEXT, `ngayKetThuc` DATE, `ngayBatDau` DATE, `nganSachDuKien` FLOAT, `tienDo` INT, `ghiChu` TEXT, `maDA` INT, `nganSachThucTe` FLOAT, `maNhom` INT)   BEGIN
    UPDATE congviec 
    SET congviec.TenCV = tenCV, congviec.NoiDung = noiDung, congviec.NgayKetThuc = ngayKetThuc, congviec.NgayBatDau = ngayBatDau, congviec.NganSachDuKien = nganSachDuKien, congviec.TienDo = tienDo, congviec.GhiChu = ghiChu, congviec.MaDA = maDA, congviec.NganSachThucTe = nganSachThucTe, congviec.MaNhom = maNhom
    WHERE congviec.MaCV = maCV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaDA` (IN `maDA` INT, IN `tenDA` VARCHAR(255), IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `trangThai` TEXT, IN `lienHe` TEXT, IN `moTa` TEXT, IN `maLoaiDA` INT, `nganSachThucTe` FLOAT, `nganSachDuKien` FLOAT, `tienDo` INT)   BEGIN
    UPDATE duan 
    SET duan.TenDA = tenDA, duan.NgayBatDau = ngayBatDau, duan.NgayKetThuc = ngayKetThuc, duan.TrangThai = trangThai, duan.LienHe = lienHe, duan.MoTa = moTa, duan.MaLoaiDA = maLoaiDA, duan.NganSachThucTe = nganSachThucTe, duan.NganSachDuKien = nganSachDuKien, duan.TienDo = tienDo
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaNV` (`maNV` INT, `tenNV` VARCHAR(255), `noiDung` TEXT, `hoanThanh` TINYINT, `doUuTien` VARCHAR(255), `ngayBatDau` DATE, `ngayKetThuc` DATE, `nganSachDuKien` FLOAT, `maTV` INT, `maCV` INT, `nganSachThucTe` FLOAT)   BEGIN
    UPDATE nhiemvu 
    SET nhiemvu.TenNV = tenNV, nhiemvu.NoiDung = noiDung, nhiemvu.HoanThanh = hoanThanh, nhiemvu.DoUuTien = doUuTien, nhiemvu.NgayBatDau = ngayBatDau, nhiemvu.NgayKetThuc = ngayKetThuc, nhiemvu.NganSachDuKien = nganSachDuKien, nhiemvu.MaTV = maTV, nhiemvu.MaCV = maCV, nhiemvu.NganSachThucTe = nganSachThucTe
    WHERE nhiemvu.MaNV = maNV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaPB` (IN `maPB` INT, IN `tenPB` VARCHAR(255), IN `moTa` TEXT)   BEGIN
    UPDATE phongban 
    SET phongban.TenPB = tenPB, phongban.MoTa = moTa
    WHERE phongban.MaPB = maPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaSK` (`maSK` INT, `tenSK` VARCHAR(255), `anh` VARCHAR(255), `ghiChu` TEXT, `noiDung` TEXT, `maDA` INT)   BEGIN
    UPDATE sukien 
    SET sukien.TenSK = tenSK, sukien.Anh = anh, sukien.GhiChu = ghiChu, sukien.NoiDung = noiDung, sukien.MaDA = maDA
    WHERE sukien.MaSK = maSK;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemAnh` (`tenAnh` VARCHAR(255), `duongDan` VARCHAR(255), `maDA` INT, `maHD` INT, `loaiAnh` VARCHAR(255))   BEGIN
    INSERT INTO `anh`(`TenAnh`, `DuongDan`, `MaDA`, `MaHD`, `LoaiAnh`) VALUES (tenAnh, duongDan, maDA,maHD, loaiAnh);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemBCCC` (`tenBC` VARCHAR(255), `ngayCap` DATE, `noiCap` VARCHAR(255), `maTV` INT)   BEGIN
	INSERT INTO `bangcapchungchi`(`TenBC`, `NgayCap`, `NoiCap`, `MaTV`) VALUES (tenBC, ngayCap, noiCap, maTV);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemCV` (`tenCV` VARCHAR(255), `noiDung` TEXT, `ngayKetThuc` DATE, `ngayBatDau` DATE, `nganSachDuKien` FLOAT, `tienDo` INT, `ghiChu` TEXT, `maDA` INT, `nganSachThucTe` FLOAT, `maNhom` INT)   BEGIN
    INSERT INTO `congviec`(`TenCV`, `NoiDung`, `NgayKetThuc`, `NgayBatDau`, `NganSachDuKien`, `TienDo`, `GhiChu`, `MaDA`, `NganSachThucTe`, `MaNhom`) VALUES (tenCV, noiDung, ngayKetThuc, ngayBatDau, nganSachDuKien, tienDo, ghiChu, maDA, nganSachThucTe, maNhom);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemDA` (IN `tenDA` VARCHAR(255), IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `trangThai` TEXT, IN `lienHe` TEXT, IN `moTa` TEXT, IN `maLoaiDA` INT, `nganSachThucTe` FLOAT, `nganSachDuKien` FLOAT, `tienDo` INT)   BEGIN
    INSERT INTO `duan`(`TenDA`, `NgayBatDau`, `NgayKetThuc`, `TrangThai`, `LienHe`, `MoTa`, `MaLoaiDA`, `NganSachThucTe`, `NganSachDuKien`, `TienDo`) VALUES (tenDA, ngayBatDau, ngayKetThuc, trangThai, lienHe, moTa, maLoaiDA, nganSachThucTe, nganSachDuKien, tienDo);
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemNV` (IN `tenNV` VARCHAR(255), IN `noiDung` TEXT, IN `hoanThanh` TINYINT, IN `doUuTien` VARCHAR(255), IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `nganSachDuKien` FLOAT, IN `maTV` INT, IN `maCV` INT, IN `nganSachThucTe` FLOAT)   BEGIN
    INSERT INTO nhiemvu(`TenNV`, `NoiDung`, `HoanThanh`, `DoUuTien`, `NgayBatDau`, `NgayKetThuc`, `NganSachDuKien`, `MaTV`, `MaCV`, `NganSachThucTe`) VALUES (tenNV, noiDung, hoanThanh, doUuTien, ngayBatDau, ngayKetThuc, nganSachDuKien, maTV, maCV, nganSachThucTe);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemPB` (IN `tenPB` VARCHAR(255), IN `moTa` TEXT)   BEGIN
    INSERT INTO `phongban`(`TenPB`, `MoTa`) VALUES (tenPB, moTa);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemSK` (`tenSK` VARCHAR(255), `anh` VARCHAR(255), `ghiChu` TEXT, `noiDung` TEXT, `maDA` INT)   BEGIN
    INSERT INTO sukien(`TenSK`, `Anh`, `GhiChu`, `NoiDung`, `MaDA`) VALUES (tenSK, anh, ghiChu, noiDung, maDA);
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnhDA_old` (IN `MaDA` INT)   BEGIN
  SELECT anh.TenAnh as Name, anh.DuongDan as Path, anh.MaAnh AS ID, anh.MaDA AS ProjectID
  FROM duan 
  INNER JOIN anh ON duan.MaDA = anh.MaDA
  WHERE duan.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnhDuAn` (IN `maDA` INT)   BEGIN
  SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID, anh.MaHD AS ContractID
  FROM anh
  WHERE anh.LoaiAnh = 'anh du an' AND anh.MaDA = maDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnhHopDong` (IN `maHD` INT)   BEGIN
  SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID, anh.MaHD AS ContractID
  FROM anh
  WHERE anh.LoaiAnh = 'anh hop dong' AND anh.MaHD = maHD;
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
	SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID, anh.MaHD AS ContractID, anh.LoaiAnh AS CategoryImage
    FROM anh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaBC` ()   BEGIN
    SELECT MaBC AS ID, TenBC AS Name, NgayCap AS Date, NoiCap AS Address , MaTV AS StaffID
    FROM bangcapchungchi;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaCV` ()   BEGIN
  SELECT congviec.MaCV AS ID, congviec.TenCV AS Name, congviec.NoiDung AS Content, congviec.NgayKetThuc AS End, congviec.NgayBatDau AS Begin, congviec.NganSachDuKien AS Targetbudget, congviec.TienDo AS Progress, congviec.GhiChu AS Note, congviec.MaDA AS ProjectID, congviec.NganSachThucTe AS ActualBudget, congviec.MaNhom AS TeamID
  FROM congviec;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaDA` ()   BEGIN
    SELECT MaDA AS ID, TenDA AS Name, NgayBatDau AS Begin , NgayKetThuc AS End, TrangThai AS Status, LienHe AS Contact, MoTa AS Description, MaLoaiDA AS ProjectCategoryID, duan.NganSachThucTe AS ActualBudget, duan.NganSachDuKien AS TargetBudget, duan.TienDo AS Progress
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaNhiemVu` ()   BEGIN
    SELECT nhiemvu.MaNV AS ID, nhiemvu.TenNV AS Name, nhiemvu.NoiDung AS Content, nhiemvu.HoanThanh AS Complete, nhiemvu.DoUuTien AS Priority, nhiemvu.NgayBatDau AS Begin, nhiemvu.NgayKetThuc AS End, nhiemvu.NganSachDuKien AS TargetBudget, nhiemvu.MaTV AS StaffID, nhiemvu.MaCV AS JobID, nhiemvu. NganSachThucTe AS ActualBudget
    FROM nhiemvu;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaSK` ()   BEGIN
    SELECT sukien.MaSK AS ID, sukien.TenSK AS Name, sukien.Anh AS Image , sukien.GhiChu AS Note, sukien.NoiDung AS Content, sukien.MaDA AS ProjectID
    FROM sukien;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaCV` (`maCV` INT)   BEGIN
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaNV` (`maNV` INT)   BEGIN
    DELETE FROM nhiemvu WHERE nhiemvu.MaNV = MaNV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaPB` (IN `maPB` INT)   BEGIN
    DELETE FROM phongban WHERE phongban.MaPB = maPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaSK` (`maSK` INT)   BEGIN
    DELETE FROM sukien WHERE sukien.MaSK = maSK;
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
-- Các hàm
--
CREATE DEFINER=`root`@`localhost` FUNCTION `SoNguoiThamGia` (`MaDA` INT) RETURNS INT(11)  BEGIN 
  DECLARE count INT;
  SELECT COUNT(MaTV) INTO count 
  FROM thanhvien INNER JOIN duan 
  ON thanhvien.MaDA = duan.MaDA
  WHERE duan.MaDA = MaDA;

  RETURN count;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `MaAnh` int(11) NOT NULL,
  `TenAnh` varchar(255) DEFAULT NULL,
  `DuongDan` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL,
  `MaHD` int(11) DEFAULT NULL,
  `LoaiAnh` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`MaAnh`, `TenAnh`, `DuongDan`, `MaDA`, `MaHD`, `LoaiAnh`) VALUES
(1, 'Mô Phỏng Xe Tăng', 'https://www.simulation.vn/templates/phoneapps-et/slideshow/1.jpg', 1, NULL, 'anh du an'),
(2, 'Mô Phỏng Lái Xe Ô Tô', 'https://www.simulation.vn/templates/phoneapps-et/slideshow/2.jpg', 2, NULL, 'anh du an'),
(3, 'Mô Phỏng Phòng Học', 'https://www.simulation.vn/images/sbhinh1.jpg', 1, NULL, 'anh du an'),
(4, 'Mô Phỏng Súng AK', 'https://www.simulation.vn/images/ak-nhinthang.jpg', 1, NULL, 'anh du an'),
(5, 'Mô Phỏng Cấu Tạo Hoạt Động Động Cơ Cơ Khí', 'https://www.simulation.vn/images/giamtoccanh2.jpg', 1, NULL, 'anh du an'),
(6, 'Mô Phỏng Huấn Luyện Chiến Thuật Phân Đội Tank - Thiết Giáp', 'https://www.simulation.vn/images/3dtank.jpg', 1, NULL, 'anh du an'),
(8, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 1', 'https://sanketoan.vn/public/library_staff/25094/images/3(273).PNG', 1, 1, 'anh hop dong'),
(9, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 2', 'https://o.vdoc.vn/data/image/2022/05/16/Hop-dong-ve-quay-phim-chup-hinh-1-1.jpg', 1, 1, 'anh hop dong'),
(10, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 3', 'https://s1.hopdongmau.com/pehAUEk9tIABIOBY/thumb/2015/08/20/mau-hop-dong-dich-vu-quang-cao-thuong-mai_1qA3eaucDq.jpg', 1, 1, 'anh hop dong'),
(11, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 4', 'https://panoquangcao.net/wp-content/uploads/2016/11/mau-hop-dong-quang-cao-ngoai-troi-1.jpg', 1, 1, 'anh hop dong'),
(12, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEXTJUlDUf3Z2fUJIF_lt1Y_rFNfKfxanpTED8alu6hmsY6cvqb9lP9ORtTs1-VOMgQRo&usqp=CAU', 2, 2, 'anh hop dong'),
(13, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 2', 'https://image.slidesharecdn.com/hpngcungngdchvqungco-220530095856-53a865bd/85/H-P-D-NG-CUNG-NG-D-CH-V-QU-NG-CAO-doc-1-320.jpg', 2, 2, 'anh hop dong'),
(14, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 3', 'https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/756a7eaa66f9a88f9f768174f70790cc/thumb_1200_1553.png', 2, 2, 'anh hop dong'),
(15, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 3', 'https://phangiaco.com.vn/upload/images/giay-phep-quang-cao-hop-den-quang-cao.jpg', 2, 2, 'anh hop dong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangcapchungchi`
--

CREATE TABLE `bangcapchungchi` (
  `MaBC` int(11) NOT NULL,
  `TenBC` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgayCap` date DEFAULT NULL,
  `NoiCap` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaTV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bangcapchungchi`
--

INSERT INTO `bangcapchungchi` (`MaBC`, `TenBC`, `NgayCap`, `NoiCap`, `MaTV`) VALUES
(1, 'Bồi Dưỡng Kế Toán Trưởng', '2024-03-30', 'Hội Kế Toán Và Kiểm Toán Việt Nam', 1),
(2, 'Kỹ Sư', '2024-03-30', 'Trường Đại Học Sư Phạm Kỹ Thuật HCM', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
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
  `MaDA` int(11) DEFAULT NULL,
  `NganSachThucTe` float DEFAULT NULL,
  `MaNhom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`MaCV`, `TenCV`, `NoiDung`, `NgayKetThuc`, `NgayBatDau`, `NganSachDuKien`, `TienDo`, `GhiChu`, `MaDA`, `NganSachThucTe`, `MaNhom`) VALUES
(1, 'khảo sát hệ thống', 'xác định mục đích, mục tiêu, yêu cầu của hệ thống, tài liệu, dữ liệu liên quan đến hệ thống', '2016-02-02', '2016-03-02', 2000, 20, 'cần lấy dữ liệu chính xác', 1, 350.3, 3),
(2, 'phân tích thiết kế hệ thống', 'sơ đồ hệ thống, các thành phần phần cứng và phần mềm', '2016-03-02', '2016-06-02', 10000, 25, 'không có', 1, 5305, 4),
(3, 'triển khai hệ thống', 'lắp đặt phần cứng và phần mềm của hệ thống', '2016-06-02', '2016-08-02', 15000, 50, 'không có', 1, 360.15, 5),
(4, 'Kiểm thử hệ thống', 'Kiểm tra và thử nghiệm hệ thống', '2016-08-02', '2016-09-02', 1000, 0, 'không có', 1, 1550, 3),
(5, 'Vận hành và bảo trì hệ thống', 'Huấn luyện cán bộ vận hành và sử dụng hệ thống. Chuyển giao hệ thống', '2016-09-02', '2016-10-02', 2000, 0, 'không có', 1, 1600, 3);

--
-- Bẫy `congviec`
--
DELIMITER $$
CREATE TRIGGER `congviec_ngansachthucte_delete_trigger` AFTER DELETE ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = OLD.MaDA;
    SET @MaCV = OLD.MaCV;
    
    SET @FactBudget = 0;
    
 	SELECT SUM(congviec.NganSachThucTe) INTO @FactBudget
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    UPDATE duan 
    SET duan.NganSachThucTe = @FactBudget
    WHERE duan.MaDA = @MaDA;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `congviec_ngansachthucte_insert_trigger` AFTER INSERT ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = NEW.MaDA;
    SET @MaCV = NEW.MaCV;
    
    SET @FactBudget = 0;
    
 	SELECT SUM(congviec.NganSachThucTe) INTO @FactBudget
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    UPDATE duan 
    SET duan.NganSachThucTe = @FactBudget
    WHERE duan.MaDA = @MaDA;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `congviec_ngansachthucte_update_trigger` AFTER UPDATE ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = NEW.MaDA;
    SET @MaCV = NEW.MaCV;
    
    SET @FactBudget = 0;
    
 	SELECT SUM(congviec.NganSachThucTe) INTO @FactBudget
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    UPDATE duan 
    SET duan.NganSachThucTe = @FactBudget
    WHERE duan.MaDA = @MaDA;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `congviec_tiendo_delete_trigger` AFTER DELETE ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = OLD.MaDA;
    SET @MaCV = OLD.MaCV;
    SET @JobTotal = 0;
    SET @JobProcessTotal = 0;
    
 	SELECT COUNT(congviec.TienDo) INTO @JobTotal
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
	SELECT SUM(congviec.TienDo) INTO @JobProcessTotal
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    SET @Process = FLOOR(@JobProcessTotal / @JobTotal);
    
    UPDATE duan 
    SET duan.TienDo = @Process
    WHERE duan.MaDA = @MaDA;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `congviec_tiendo_insert_trigger` AFTER INSERT ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = NEW.MaDA;
    SET @MaCV = NEW.MaCV;
    SET @JobTotal = 0;
    SET @JobProcessTotal = 0;
    
 	SELECT COUNT(congviec.TienDo) INTO @JobTotal
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
	SELECT SUM(congviec.TienDo) INTO @JobProcessTotal
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    SET @Process = FLOOR(@JobProcessTotal / @JobTotal);
    
    UPDATE duan 
    SET duan.TienDo = @Process
    WHERE duan.MaDA = @MaDA;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `congviec_tiendo_update_trigger` AFTER UPDATE ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = NEW.MaDA;
    SET @MaCV = NEW.MaCV;
    SET @JobTotal = 0;
    SET @JobProcessTotal = 0;
    
 	SELECT COUNT(congviec.TienDo) INTO @JobTotal
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
	SELECT SUM(congviec.TienDo) INTO @JobProcessTotal
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    SET @Process = FLOOR(@JobProcessTotal / @JobTotal);
    
    UPDATE duan 
    SET duan.TienDo = @Process
    WHERE duan.MaDA = @MaDA;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doitac`
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
-- Đang đổ dữ liệu cho bảng `doitac`
--

INSERT INTO `doitac` (`MaDT`, `TenDT`, `Email`, `SDT`, `Fax`, `DiaChi`, `TrangThai`, `GhiChu`, `MaSoThue`, `Nguoidaidien`, `ChucVu`) VALUES
(1, 'Trường Cao Đẳng Nghề', 'truongcaodangnghe@gmail.com', '0977569889', '02203752519', 'Xã Nam Đồng, Thành Phố Hải Dương, Tỉnh Hải Dương', 'Ngừng Hợp Tác', 'Không Có', '0104922104', 'Nguyễn Văn Vọng', 'Hiệu Trưởng'),
(2, 'Tổng Công Ty Xây Dựng Lũng Lô', 'nguyenhuong@gmail.com', '0123575251', '04913722549', 'Số 162 Trường Chinh - Đống Đa - Hà Nội', 'Ngừng Hợp Tác', 'Không Có', '0434971814', 'Tăng Văn Chúc', 'Giám  Đốc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
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
  `NganSachDuKien` float DEFAULT NULL,
  `TienDo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`MaDA`, `TenDA`, `NgayBatDau`, `NgayKetThuc`, `TrangThai`, `LienHe`, `MoTa`, `MaLoaiDA`, `NganSachThucTe`, `NganSachDuKien`, `TienDo`) VALUES
(1, 'Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành', '2017-07-21', '2017-12-12', 'Ngừng Phát Triển', 'Nguyễn Văn Long - 0845758492 - longvan@gmail.com', 'Hệ Thống Có Thể Theo Dõi Qúa Trình Thi Thực Hành Của Từng Học Viên, Ghi Lại Kết Quả Và Cung Cấp Phản Hồi Tức Thì', 1, 9165.45, 900, 19),
(2, 'Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng', '2005-06-14', '2025-12-25', 'Ngừng Phát Triển', 'Nguyễn Văn Mạnh - 0957557641- vanmanh@gmail.com', 'Bảo Vệ Mạng Và Dữ Liệu Từ Các Mối Đe Dọa Bằng Cách Sử Dụng Các Công Cụ Nhu Tường Lửa, Hệ Thống Tiêu Diệt Virus Và Phát Hiện Xâm Nhập', 2, NULL, 1500, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
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
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`MaHD`, `TenHD`, `SoHD`, `NgayKiKet`, `NgayHetHan`, `GhiChu`, `GiaTriHD`, `TrangThai`, `MaDT`, `MaDA`) VALUES
(1, 'Hợp Đồng Cung Cấp Hàng Hóa', '654/HĐ', '2024-07-21', '2024-12-12', 'Ghi Rõ Thông Tin Về Tên Doanh Nghiệp, Trụ Sở, Số Điện Thoại, Chức Vụ, Và Người Đại Diện', 1736730000, 'Hết Hiệu Lực', 1, 1),
(2, 'Hợp Đồng Kinh Tế', '101015/LLVNSIM', '2024-06-14', '2024-12-29', 'Mô Tả Chi Tiết Về Hàng Hóa Cần Cung Cấp, Bao Gồm Loại Hàng Số Lượng Và Chất Lượng', 2071190000, 'Hết Hiệu Lực', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiduan`
--

CREATE TABLE `loaiduan` (
  `MaLoaiDA` int(11) NOT NULL,
  `TenLoaiDA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiduan`
--

INSERT INTO `loaiduan` (`MaLoaiDA`, `TenLoaiDA`, `MoTa`) VALUES
(1, 'Thiết Bị', 'Không Có'),
(2, 'Phần Mềm', 'Không Có');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhiemvu`
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
  `MaTV` int(11) DEFAULT NULL,
  `MaCV` int(11) DEFAULT NULL,
  `NganSachThucTe` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhiemvu`
--

INSERT INTO `nhiemvu` (`MaNV`, `TenNV`, `NoiDung`, `HoanThanh`, `DoUuTien`, `NgayBatDau`, `NgayKetThuc`, `NganSachDuKien`, `MaTV`, `MaCV`, `NganSachThucTe`) VALUES
(1, 'khảo sát các thông tin về loại tàu, thuyền và môi trường được đưa vào thi thực hành', 'thu thập các thông số của tàu thuyền, địa điểm, thời tiết thi thực hành thực tế', 1, 'high', '2016-05-11', '2016-05-25', 20, 2, 1, 30),
(2, 'thiết kế hệ thống', 'Thiết kế sơ đồ kiến trúc hệ thống, Thiết kế chi tiết các thành phần phần mềm và phần cứng của hệ thống, Lựa chọn nhà cung cấp phần mềm và phần cứng, Lập tài liệu hướng dẫn kỹ thuật cho hệ thống.', 1, 'trung bình', '2016-06-11', '2016-07-25', 200, 2, 2, 115),
(3, 'Lắp đặt và cấu hình phần cứng hệ thống', 'triển khai lắp đạt hệ thống', 0, 'trung bình', '2016-06-11', '2016-07-25', 200, 4, 3, 160),
(4, 'kiểm tra và kiểm thử hệ thống', 'sự tương thích, tối ưu, chính xác giữa phần cứng và phần mềm', 0, 'trung bình', '2016-07-26', '2016-07-30', 2000, 4, 4, 1550),
(11, 'Huấn luyện cán bộ vận hành hệ thống', 'Huấn luyện cán bộ cách vận hành hệ thống', 0, 'trung bình', '2016-10-03', '2016-11-11', 1500, 4, 5, 1600),
(12, 'xác định mục tiêu của hệ thống', 'xác định hệ thống dùng để làm gì?', 0, 'trung bình', '2016-02-05', '2016-02-07', 100, 2, 1, 100),
(13, 'Phân tích thông tin', 'xác định các điểm mạnh, điểm yếu, cơ hội và thách thức của hệ thống', 0, 'trung bình', '2016-02-07', '2016-02-10', 100, 2, 1, 140),
(14, 'Đề xuất giải pháp', 'Lập kế hoạch triển khai các giải pháp đề xuất', 0, 'trung bình', '2016-02-11', '2016-02-15', 100, 2, 1, 70),
(15, 'Thiết kế chi tiết các thành phần phần mềm và phần cứng của hệ thống', 'thiết kế hệ thống phần mềm và phần cứng', 0, 'trung bình', '2016-03-01', '2016-03-10', 1750, 3, 2, 1420),
(16, 'Lựa chọn nhà cung cấp phần cứng', 'tìm hiểu, lựa chọn các nhà cung cấp phần cứng của hệ thống', 0, 'trung bình', '2016-03-11', '2016-03-15', 1750, 2, 2, 520),
(17, 'Lập tài liệu hướng dẫn kỹ thuật cho hệ thống', 'tài liệu hướng dẫn kỹ thuật', 0, 'trung bình', '2016-03-16', '2016-03-30', 1750, 2, 2, 3250),
(18, 'lập trình phần mềm hệ thống', 'hoàn thiện các chức năng của hệ thống', 1, 'high', '2016-03-01', '2016-03-17', 250, 1, 3, 200.15);

--
-- Bẫy `nhiemvu`
--
DELIMITER $$
CREATE TRIGGER `nhiemvu_hoanthanh_delete_trigger` AFTER DELETE ON `nhiemvu` FOR EACH ROW BEGIN
    SET @MaCV = OLD.MaCV;
    SET @MaNV = OLD.MaNV;
    SET @TaskTotal = 0;
    SET @CompleteTaskCount = 0;

 	SELECT COUNT(*) INTO @TaskTotal
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV;
    
	SELECT COUNT(*) INTO @CompleteTaskCount
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV AND nhiemvu.HoanThanh = true;
    
    SET @Process = FLOOR(@CompleteTaskCount / @TaskTotal * 100);
    
    UPDATE congviec 
    SET congviec.TienDo = @Process
    WHERE congviec.MaCV = @MaCV;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nhiemvu_hoanthanh_insert_trigger` AFTER INSERT ON `nhiemvu` FOR EACH ROW BEGIN
	SET @MaCV = NEW.MaCV;
    SET @MaNV = NEW.MaNV;
    SET @TaskTotal = 0;
    SET @CompleteTaskCount = 0;
    
 	SELECT COUNT(*) INTO @TaskTotal
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV;
    
	SELECT COUNT(*) INTO @CompleteTaskCount
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV AND nhiemvu.HoanThanh = true;
    
    SET @Process = FLOOR(@CompleteTaskCount / @TaskTotal * 100);
    
    UPDATE congviec 
    SET congviec.TienDo = @Process
    WHERE congviec.MaCV = @MaCV;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nhiemvu_hoanthanh_update_trigger` AFTER UPDATE ON `nhiemvu` FOR EACH ROW BEGIN
	SET @MaCV = NEW.MaCV;
    SET @MaNV = NEW.MaNV;
    SET @TaskTotal = 0;
    SET @CompleteTaskCount = 0;
    
 	SELECT COUNT(*) INTO @TaskTotal
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV;
    
	SELECT COUNT(*) INTO @CompleteTaskCount
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV AND nhiemvu.HoanThanh = true;
    
    SET @Process = FLOOR(@CompleteTaskCount / @TaskTotal * 100);
    
    UPDATE congviec 
    SET congviec.TienDo = @Process
    WHERE congviec.MaCV = @MaCV;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nhiemvu_ngansachthucte_delete_trigger` AFTER DELETE ON `nhiemvu` FOR EACH ROW BEGIN
SET @MaCV = OLD.MaCV;
    SET @MaNV = OLD.MaNV;
    SET @FactBudget = 0;
    
 	SELECT SUM(nhiemvu.NganSachThucTe) INTO @FactBudget
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV;
    
    UPDATE congviec 
    SET congviec.NganSachThucTe = @FactBudget
    WHERE congviec.MaCV = @MaCV;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nhiemvu_ngansachthucte_insert_trigger` AFTER INSERT ON `nhiemvu` FOR EACH ROW BEGIN
SET @MaCV = NEW.MaCV;
    SET @MaNV = NEW.MaNV;
    SET @FactBudget = 0;
    
 	SELECT SUM(nhiemvu.NganSachThucTe) INTO @FactBudget
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV;
    
    UPDATE congviec 
    SET congviec.NganSachThucTe = @FactBudget
    WHERE congviec.MaCV = @MaCV;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nhiemvu_ngansachthucte_update_trigger` AFTER UPDATE ON `nhiemvu` FOR EACH ROW BEGIN
	SET @MaCV = NEW.MaCV;
    SET @MaNV = NEW.MaNV;
    SET @FactBudget = 0;
    
 	SELECT SUM(nhiemvu.NganSachThucTe) INTO @FactBudget
    FROM nhiemvu 
    WHERE nhiemvu.MaCV = @MaCV;
    
    UPDATE congviec 
    SET congviec.NganSachThucTe = @FactBudget
    WHERE congviec.MaCV = @MaCV;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `MaNhom` int(11) NOT NULL,
  `TenNhom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TruongNhom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaPB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhom`
--

INSERT INTO `nhom` (`MaNhom`, `TenNhom`, `TruongNhom`, `MaPB`) VALUES
(3, 'Nhóm Lập Trình', 'Nguyễn Thị Hoan', 1),
(4, 'Nhóm Thiết Kế', 'Bùi Hoan Tuân', 2),
(5, 'Nhóm Phân Tích Yêu Cầu', 'Phạm Hồng Quân', 1),
(6, 'Nhóm điều khiển điện tử', 'Trần Thị Long', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `MaPB` int(11) NOT NULL,
  `TenPB` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`MaPB`, `TenPB`, `MoTa`) VALUES
(1, 'Phòng lập trình', 'Không Có'),
(2, 'Phòng Thiết Kế', 'Không Có'),
(3, 'Phòng điều khiển điện tử', 'không có');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GhiChu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `TenQuyen`, `GhiChu`) VALUES
(1, 'Quản Trị', 'Không Có'),
(2, 'Chỉnh Sửa', 'Không Có'),
(3, 'Xem dự án', 'không có');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `MaSK` int(11) NOT NULL,
  `TenSK` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`MaSK`, `TenSK`, `Anh`, `GhiChu`, `NoiDung`, `MaDA`) VALUES
(1, 'Xây dựng hệ thống điện tử tự động giám sát thi thực hành - nghề điều khiển phương tiện thủy nội địa', 'https://file.qdnd.vn/data/old_img/phucthang/2013/4/19/5171054220130419204601609.jpg', 'hệ thống tương tự như hệ thống sát hạch lái xe ô tô', 'Đây là hệ thống được xây dựng tương tự như hệ thống sát hạch điện tử lái xe ô tô. Quy trình thi thực hành được thực hiện trên bến cảng, sử dụng phương tiện thi đúng tiêu chuẩn cấp độ tàu theo quy định của Bộ GTVT. Hệ thống bao gồm phần mềm quản lý, đánh giá và các thiết bị điện tử, cảm biến, camera giám sát lắp đặt tại tàu, bến cảng tự động giám sát, chấm điểm quá trình thực hiện các bài thi thực hành của thí sinh trên luồng dài 200m. Kết quả đánh giá hình ảnh quá trình thực hiện bài thi của thí sinh được truyền về trung tâm điều hành qua hệ thống mạng không dây và cáp quang nội bộ, đồng thời được cập nhật trực tiếp lên Internet thông qua website của trung tâm.\r\n\r\nHệ thống được thiết kế để tự động giám sát, đánh giá chấm điểm các bài thi thực hành:\r\n\r\nBài 1: Điều động tàu rời cầu, có chướng ngại vật khống chế phía mũi tàu.\r\nBài 2: Điều động tàu rời cầu, có chướng ngại vật khống chế phía lái tàu.\r\nBài 3: Điều động tàu cập cầu, có chướng ngại vật khống chế phía mũi\r\nBài 4: Điều động tàu cập cầu, có chướng ngại vật khống chế phía lái tàu.\r\nBài 5: Điều động tàu bắt chập tiêu phía mũi tàu.\r\nBài 6: Điều động tàu bắt chập tiêu phía sau lái tàu.', 1),
(2, 'Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng', 'https://infovina.vn/content/article/09-10-2023/cac-loai-he-thong-monitor-giam-sat-thiet-bi-mang-hien-nay-091023095023.png', 'Hệ thống Phần mềm Quản trị Mạng (NMS) là một công cụ thiết yếu cho quản trị viên mạng, giúp họ giám sát, quản lý và tối ưu hóa hiệu suất mạng của mình. NMS cung cấp nhiều lợi ích như nâng cao hiệu suất mạng, giảm thời gian ngừng hoạt động, nâng cao khả năng bảo mật và giảm chi phí vận hành.', 'Hệ Thống Phần Mềm Quản Trị Mạng\r\nHệ thống Phần mềm Quản trị Mạng (NMS) là một công cụ thiết yếu cho quản trị viên mạng, giúp họ giám sát, quản lý và tối ưu hóa hiệu suất mạng của mình. NMS cung cấp một giao diện tập trung để quản lý các thiết bị mạng, theo dõi hiệu suất mạng, phát hiện và khắc phục sự cố, đồng thời đảm bảo bảo mật mạng.\r\n\r\nChức năng chính của NMS:\r\n\r\nGiám sát thiết bị mạng: NMS có thể thu thập dữ liệu từ các thiết bị mạng như bộ định tuyến, bộ chuyển đổi, điểm truy cập không dây và máy chủ, cho phép quản trị viên theo dõi trạng thái hoạt động, hiệu suất và cấu hình của các thiết bị này.\r\nTheo dõi hiệu suất mạng: NMS có thể theo dõi các chỉ số hiệu suất mạng quan trọng (KPI) như lưu lượng truy cập mạng, thời gian phản hồi, tỷ lệ mất gói tin và tỷ lệ sử dụng băng thông, giúp quản trị viên xác định và giải quyết các vấn đề về hiệu suất mạng.\r\nPhát hiện và khắc phục sự cố: NMS có thể phát hiện các sự cố mạng như lỗi thiết bị, gián đoạn kết nối và tấn công mạng, đồng thời thông báo cho quản trị viên để họ có thể khắc phục sự cố kịp thời.\r\nCấu hình thiết bị: NMS cho phép quản trị viên cấu hình các thiết bị mạng từ xa, giúp tiết kiệm thời gian và công sức.\r\nQuản lý bảo mật mạng: NMS có thể giúp quản trị viên theo dõi các hoạt động mạng, phát hiện các mối đe dọa bảo mật và thực hiện các biện pháp phòng ngừa để bảo vệ mạng khỏi các cuộc tấn công mạng.\r\nLợi ích của việc sử dụng NMS:\r\n\r\nNâng cao hiệu suất mạng: NMS giúp quản trị viên xác định và giải quyết các vấn đề về hiệu suất mạng một cách nhanh chóng và hiệu quả, từ đó nâng cao hiệu suất tổng thể của mạng.\r\nGiảm thời gian ngừng hoạt động: NMS giúp phát hiện và khắc phục sự cố mạng kịp thời, giúp giảm thiểu thời gian ngừng hoạt động của mạng và đảm bảo hoạt động liên tục của các ứng dụng kinh doanh.\r\nNâng cao khả năng bảo mật: NMS giúp quản trị viên theo dõi các hoạt động mạng và phát hiện các mối đe dọa bảo mật, giúp bảo vệ mạng khỏi các cuộc tấn công mạng.\r\nGiảm chi phí vận hành: NMS giúp tự động hóa các tác vụ quản trị mạng, giúp tiết kiệm thời gian và công sức cho quản trị viên, đồng thời giảm chi phí vận hành mạng.', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `TenTK` varchar(16) DEFAULT NULL,
  `MatKhau` varchar(16) DEFAULT NULL,
  `MaQuyen` int(11) DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `TenTK`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'summon', '123456789', 1, 'Vẫn còn sử dụng'),
(2, 'galactot', '123456789', 2, 'Tạm ngưng hoạt động'),
(3, 'nguyentung', '123456789', 3, 'Vẫn còn sử dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
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
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `HoTen`, `SDT`, `DiaChi`, `NgaySinh`, `ChucVu`, `Email`, `MaTK`, `GioiTinh`, `TrangThai`, `AnhDaiDien`, `MaNhom`, `MaDA`) VALUES
(1, 'Nguyễn Văn Tùng', '0245624669', 'Xã Kênh Giang - Thủy Nguyên - Hải Phòng - Thôn Đồng Phản', '2000-03-01', 'kĩ sư lập trình', 'nguyenvantung@gmail.com', 1, 'Nam', 'Đang Làm Việc', 'https://demoda.vn/wp-content/uploads/2022/03/mau-anh-the-nhan-vien-van-phong.jpg', 3, 1),
(2, 'Bùi Thị Hoan', '0942782218', 'Xã Ngũ Lão - Huyện Thủy Nguyên - Hải Phòng', '2024-03-01', 'Phân tích hệ thống', 'buithihoan@gmail.com', 2, 'Nữ', 'Đang Làm Việc', 'https://khoinguonsangtao.vn/wp-content/uploads/2022/11/mau-anh-the-nam-gai-ao-somi.jpg', 5, 1),
(3, 'Trần Thị Long', '3767005332', 'Thủy Đường, Thủy Nguyên, Hải Phòng', '2024-03-03', 'Nhân Viên Thiết Kế Giao Diện', 'thilong632@gmail.com', 3, 'Nu', 'Nghỉ việc', 'https://tiemanhsky.com/wp-content/uploads/2020/03/%E1%BA%A3nh-th%E1%BA%BB-683x1024.jpg', 4, 2),
(4, 'Le Quoc Dan', '4298892323', 'Đống Đa, Hà Nội, Việt Nam', '2000-03-04', 'Kỹ thuật viên điều khiển', 'Dan50302@gmail.com', 3, 'Nam', 'Vẫn còn làm việc', 'https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202008/14/-05-33-414f09d19128976bbb896968910eec3503.JPEG', 6, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`MaAnh`),
  ADD KEY `MaDA` (`MaDA`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  ADD PRIMARY KEY (`MaBC`),
  ADD KEY `MaTV` (`MaTV`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MaCV`),
  ADD KEY `MaDA` (`MaDA`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Chỉ mục cho bảng `doitac`
--
ALTER TABLE `doitac`
  ADD PRIMARY KEY (`MaDT`);

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`MaDA`),
  ADD KEY `MaLoaiDA` (`MaLoaiDA`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaCT` (`MaDT`),
  ADD KEY `MaDA` (`MaDA`);

--
-- Chỉ mục cho bảng `loaiduan`
--
ALTER TABLE `loaiduan`
  ADD PRIMARY KEY (`MaLoaiDA`);

--
-- Chỉ mục cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaTV` (`MaTV`),
  ADD KEY `MaCV` (`MaCV`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`MaNhom`),
  ADD KEY `MaPB` (`MaPB`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPB`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSK`),
  ADD KEY `MaDA` (`MaDA`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD KEY `MaQuyen` (`MaQuyen`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`),
  ADD KEY `MaTK` (`MaTK`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  MODIFY `MaBC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `doitac`
--
ALTER TABLE `doitac`
  MODIFY `MaDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `MaDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaiduan`
--
ALTER TABLE `loaiduan`
  MODIFY `MaLoaiDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `nhom`
--
ALTER TABLE `nhom`
  MODIFY `MaNhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`),
  ADD CONSTRAINT `anh_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`);

--
-- Các ràng buộc cho bảng `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  ADD CONSTRAINT `bangcapchungchi_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`),
  ADD CONSTRAINT `congviec_ibfk_2` FOREIGN KEY (`MaNhom`) REFERENCES `nhom` (`MaNhom`);

--
-- Các ràng buộc cho bảng `duan`
--
ALTER TABLE `duan`
  ADD CONSTRAINT `duan_ibfk_1` FOREIGN KEY (`MaLoaiDA`) REFERENCES `loaiduan` (`MaLoaiDA`);

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`MaDT`) REFERENCES `doitac` (`MaDT`),
  ADD CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`);

--
-- Các ràng buộc cho bảng `nhiemvu`
--
ALTER TABLE `nhiemvu`
  ADD CONSTRAINT `nhiemvu_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`),
  ADD CONSTRAINT `nhiemvu_ibfk_2` FOREIGN KEY (`MaCV`) REFERENCES `congviec` (`MaCV`);

--
-- Các ràng buộc cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`MaPB`) REFERENCES `phongban` (`MaPB`);

--
-- Các ràng buộc cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),
  ADD CONSTRAINT `thanhvien_ibfk_2` FOREIGN KEY (`MaNhom`) REFERENCES `nhom` (`MaNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
