-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2024 lúc 02:06 AM
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaCV` (IN `maCV` INT, IN `tenCV` VARCHAR(255), IN `noiDung` TEXT, IN `ghiChu` TEXT, IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `maDA` INT, IN `tienDo` INT, IN `doUuTien` VARCHAR(255), IN `nganSachDuKien` FLOAT, IN `nganSachThucTe` FLOAT, IN `maTV` INT)   BEGIN
    UPDATE congviec 
    SET congviec.TenCV = tenCV, congviec.NoiDung = noiDung, congviec.NgayKetThuc = ngayKetThuc, congviec.NgayBatDau = ngayBatDau, congviec.NganSachDuKien = nganSachDuKien, congviec.TienDo = tienDo, congviec.GhiChu = ghiChu, congviec.MaDA = maDA, congviec.NganSachThucTe = nganSachThucTe, congviec.MaTV = maTV, congviec.DoUuTien = doUuTien
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaQuyen` (`maQuyen` INT, `tenQuyen` VARCHAR(255), `ghiChu` TEXT)   BEGIN
    UPDATE quyen 
    SET quyen.TenQuyen = tenQuyen, quyen.TenQuyen = tenQuyen, quyen.GhiChu = ghiChu
    WHERE quyen.MaQuyen = maQuyen;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaSK` (`maSK` INT, `tenSK` VARCHAR(255), `anh` VARCHAR(255), `ghiChu` TEXT, `noiDung` TEXT, `maDA` INT)   BEGIN
    UPDATE sukien 
    SET sukien.TenSK = tenSK, sukien.Anh = anh, sukien.GhiChu = ghiChu, sukien.NoiDung = noiDung, sukien.MaDA = maDA
    WHERE sukien.MaSK = maSK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaThongTinNguoiDung` (IN `maTV` INT, IN `hoTen` VARCHAR(30), IN `sDT` VARCHAR(10), IN `diaChi` VARCHAR(255), IN `ngaySinh` DATE, IN `email` VARCHAR(64), IN `gioiTinh` VARCHAR(20))   BEGIN
    UPDATE thanhvien 
    SET thanhvien.HoTen = hoTen, thanhvien.SDT = sDT, thanhvien.DiaChi = diaChi, thanhvien.NgaySinh = ngaySinh, thanhvien.Email = email, thanhvien.GioiTinh = gioiTinh
    WHERE thanhvien.MaTV = maTV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaTK` (IN `maTK` INT, IN `tenTK` VARCHAR(255), IN `matKhau` VARCHAR(255), IN `maQuyen` INT, IN `trangThai` VARCHAR(255))   BEGIN
	UPDATE taikhoan 
    SET taikhoan.TenTK = tenTK, taikhoan.MatKhau = matKhau, taikhoan.MaQuyen = maQuyen, taikhoan.TrangThai = trangThai
    WHERE taikhoan.MaTK = MaTK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SuaTV` (IN `maTV` INT, IN `hoTen` VARCHAR(30), IN `sDT` VARCHAR(10), IN `diaChi` VARCHAR(255), IN `ngaySinh` DATE, IN `chucVu` VARCHAR(255), IN `email` VARCHAR(64), IN `maTK` INT, IN `gioiTinh` VARCHAR(20), IN `trangThai` VARCHAR(255), IN `anhDaiDien` VARCHAR(255), `maNhom` INT)   BEGIN
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemCV` (IN `tenCV` VARCHAR(255), IN `noiDung` TEXT, IN `ghiChu` TEXT, IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `maDA` INT, IN `tienDo` INT, IN `doUuTien` VARCHAR(255), IN `nganSachDuKien` FLOAT, IN `nganSachThucTe` FLOAT, IN `maTV` INT)   BEGIN
    INSERT INTO congviec(TenCV, NoiDung, NgayKetThuc, NgayBatDau, NganSachDuKien, TienDo, GhiChu, MaDA, NganSachThucTe, MaTV, DoUuTien) VALUES (tenCV, noiDung, ngayKetThuc, ngayBatDau, nganSachDuKien, tienDo, ghiChu, maDA, nganSachThucTe, maTV, doUuTien);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemDA` (IN `tenDA` VARCHAR(255), IN `ngayBatDau` DATE, IN `ngayKetThuc` DATE, IN `trangThai` TEXT, IN `lienHe` TEXT, IN `moTa` TEXT, IN `maLoaiDA` INT, IN `nganSachDuKien` FLOAT, IN `nganSachThucTe` FLOAT, IN `tienDo` INT)   BEGIN
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemQuyen` (`tenQuyen` VARCHAR(255), `ghiChu` TEXT)   BEGIN
    INSERT INTO `quyen`(`TenQuyen`, `GhiChu`) VALUES (tenQuyen, ghiChu);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemSK` (`tenSK` VARCHAR(255), `anh` VARCHAR(255), `ghiChu` TEXT, `noiDung` TEXT, `maDA` INT)   BEGIN
    INSERT INTO sukien(`TenSK`, `Anh`, `GhiChu`, `NoiDung`, `MaDA`) VALUES (tenSK, anh, ghiChu, noiDung, maDA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemTK` (`tenTK` VARCHAR(255), `matKhau` VARCHAR(255), `maquyen` INT, `trangthai` VARCHAR(255))   BEGIN
    INSERT INTO `taikhoan`(`TenTK`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES (tenTK, matKhau, maquyen, trangthai);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThemTV` (IN `hoTen` VARCHAR(30), IN `sDT` VARCHAR(10), IN `diaChi` VARCHAR(255), IN `ngaySinh` DATE, IN `chucVu` VARCHAR(255), IN `email` VARCHAR(64), IN `maTK` INT, IN `gioiTinh` VARCHAR(20), IN `trangThai` VARCHAR(255), IN `anhDaiDien` VARCHAR(255), `maNhom` INT)   BEGIN
    INSERT INTO thanhvien(HoTen, SDT, DiaChi, NgaySinh, ChucVu, Email, MaTK, GioiTinh, TrangThai, AnhDaiDien, MaNhom) VALUES (hoTen, sDT, diaChi, ngaySinh, chucVu, email, maTK, gioiTinh, trangThai, anhDaiDien, maNhom);
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnhCuaDuAn` (IN `maDA` INT)   BEGIN
  SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID
  FROM anh
  WHERE anh.LoaiAnh = 'anh du an' AND anh.MaDA = maDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinAnhCuaHopDong` (IN `maHD` INT)   BEGIN
  SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaHD AS ContractID
  FROM anh
  WHERE anh.LoaiAnh = 'anh hop dong' AND anh.MaHD = maHD;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinDA` (IN `MaDA` INT)   BEGIN
    SELECT duan.MaDA AS ID, duan.TenDA AS Name, duan.NgayBatDau AS Begin, duan.NgayKetThuc AS End, duan.TrangThai AS Status, duan.LienHe AS Contact, duan.MoTa AS Description, duan.MaLoaiDA AS ProjectCategoryID, duan.NganSachThucTe AS ActualBudget, duan.NganSachDuKien AS TargetBudget, duan.TienDo AS Progress
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
	SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID, anh.MaHD AS ContractID, anh.LoaiAnh AS ImageCategory
    FROM anh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaBC` ()   BEGIN
    SELECT MaBC AS ID, TenBC AS Name, NgayCap AS Date, NoiCap AS Address , MaTV AS StaffID
    FROM bangcapchungchi;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTatCaCV` ()   BEGIN
  SELECT congviec.MaCV AS ID, congviec.TenCV AS Name, congviec.NoiDung AS Content, congviec.NgayKetThuc AS End, congviec.NgayBatDau AS Begin, congviec.NganSachDuKien AS TargetBudget, congviec.TienDo AS Progress, congviec.GhiChu AS Note, congviec.MaDA AS ProjectID, congviec.NganSachThucTe AS ActualBudget, congviec.MaTV AS StaffID, congviec.DoUuTien AS Priority
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
    SELECT MaTV AS ID, HoTen AS Name, GioiTinh AS Gender, NgaySinh AS Birthday, SDT AS Phone, Email, DiaChi AS Address, ChucVu AS Position, AnhDaiDien AS Avatar, TrangThai AS Status, thanhvien.MaTK AS AccountID, thanhvien.NgaySinh AS BirthDay, thanhvien.MaNhom AS TeamID
    FROM thanhvien;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinThanhVienThamGiaDuAn` (IN `MaDA` INT)   BEGIN
    SELECT HoTen AS Name, GioiTinh AS Gender, ChucVu AS Position, AnhDaiDien AS Avatar, TrangThai AS Status, congviec.MaTV AS StaffID
    FROM congviec 
    INNER JOIN thanhvien ON thanhvien.MaTV = congviec.MaTV
    WHERE congviec.MaDA = MaDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongTinTV` (IN `MaTV` INT)   BEGIN
    SELECT HoTen AS StaffName, GioiTinh AS Gender, NgaySinh AS Birthday, SDT AS Phone, Email, DiaChi AS Address, ChucVu AS Position, AnhDaiDien AS Avatar, TrangThai AS Status, MaNhom AS TeamID
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemAnh` (IN `TenAnh` VARCHAR(255))   BEGIN
    SET @TenAnh = CONCAT('%', TenAnh , '%');
    SELECT anh.MaAnh AS ID, anh.TenAnh AS Name, anh.DuongDan AS Path, anh.MaDA AS ProjectID, anh.MaHD AS ContractID, anh.LoaiAnh AS ImageCategory
    FROM anh
    WHERE anh.TenAnh LIKE @TenAnh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemBCCC` (IN `TenBCCC` VARCHAR(255))   BEGIN
    SET @TenBCCC = CONCAT('%', TenBCCC , '%');
    SELECT bangcapchungchi.MaBC AS ID, bangcapchungchi.TenBC AS Name, bangcapchungchi.NgayCap AS Date,bangcapchungchi.NoiCap AS Address, bangcapchungchi.MaTV AS StaffID
    FROM bangcapchungchi
    WHERE bangcapchungchi.TenBC LIKE @TenBCCC;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemCV` (IN `TenCV` VARCHAR(255))   BEGIN
    SET @TenCV = CONCAT('%', TenCV , '%');
    SELECT congviec.MaCV AS ID, congviec.TenCV AS Name, congviec.NoiDung AS Content, congviec.NgayKetThuc AS End, congviec.NgayBatDau AS Begin, congviec.NganSachDuKien AS TargetBudget, congviec.TienDo AS Progress, congviec.GhiChu AS Note, congviec.MaDA AS ProjectID, congviec.NganSachThucTe AS ActualBudget, congviec.MaTV AS StaffID, congviec.DoUuTien AS Priority
    FROM congviec
    WHERE congviec.TenCV LIKE @TenCV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemDA` (IN `TenDA` VARCHAR(255) CHARSET utf8mb4)   BEGIN
    SET @TenDA = CONCAT('%', TenDA , '%');
    SELECT MaDA AS ID, duan.TenDA AS Name, NgayBatDau AS Begin , NgayKetThuc AS End, TrangThai AS Status, LienHe AS Contact, MoTa AS Description, duan.MaLoaiDA AS ProjectCategoryID, duan.NganSachThucTe AS ActualBudget, duan.NganSachDuKien AS TargetBudget, duan.TienDo AS Progress
    FROM duan
    WHERE duan.TenDA LIKE @TenDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemDT` (IN `TenDT` VARCHAR(255))   BEGIN
    SET @TenDT = CONCAT('%', TenDT , '%');
    SELECT doitac.MaDT AS ID, doitac.TenDT AS Name, doitac.Email AS Email, doitac.SDT AS Phone, doitac.Fax AS Fax, doitac.DiaChi AS Address, doitac.TrangThai as Status, doitac.GhiChu AS Note, doitac.MaSoThue AS TaxCode, doitac.Nguoidaidien AS Representative, doitac.ChucVu AS Position
    FROM doitac
    WHERE doitac.TenDT LIKE @TenDT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemHD` (IN `TenHD` VARCHAR(255))   BEGIN
    SET @TenHD = CONCAT('%', TenHD , '%');
    SELECT hopdong.MaHD AS ID, hopdong.TenHD AS Name, hopdong.SoHD AS Number, hopdong.NgayKiKet AS SignDay, hopdong.NgayHetHan AS Expire, hopdong.GhiChu AS Note, hopdong.GiaTriHD AS Value, hopdong.TrangThai AS Status, hopdong.MaDT AS PartnerID, hopdong.MaDA AS ProjectID
    FROM hopdong
    WHERE hopdong.TenHD LIKE @TenHD;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemLDA` (IN `TenLDA` VARCHAR(255))   BEGIN
    SET @TenLDA = CONCAT('%', TenLDA , '%');
    SELECT loaiduan.MaLoaiDA AS ID, loaiduan.TenLoaiDA AS Name, loaiduan.MoTa AS Description
    FROM loaiduan
    WHERE loaiduan.TenLoaiDA LIKE @TenLDA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemNhom` (IN `TenNhom` VARCHAR(255))   BEGIN
    SET @TenNhom = CONCAT('%', TenNhom , '%');
    SELECT nhom.MaNhom AS ID, nhom.TenNhom AS Name, nhom.TruongNhom AS Leader,nhom.MaPB AS DepartmentID
    FROM nhom
    WHERE nhom.TenNhom LIKE @TenNhom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemPB` (IN `TenPB` VARCHAR(255))   BEGIN
    SET @TenPB = CONCAT('%', TenPB , '%');
    SELECT phongban.MaPB AS ID, phongban.TenPB AS Name, phongban.MoTa AS Description
    FROM phongban
    WHERE phongban.TenPB LIKE @TenPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemQuyen` (IN `TenQuyen` VARCHAR(255))   BEGIN
    SET @TenQuyen = CONCAT('%', TenQuyen , '%');
    SELECT quyen.MaQuyen AS ID, quyen.TenQuyen AS Name, quyen.GhiChu AS Note
    FROM quyen
    WHERE quyen.TenQuyen LIKE @TenQuyen;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemSK` (IN `TenSK` VARCHAR(255))   BEGIN
    SET @TenSK = CONCAT('%', TenSK , '%');
    SELECT sukien.MaSK AS ID, sukien.TenSK AS Name, sukien.Anh AS Image, sukien.GhiChu AS Note, sukien.NoiDung AS Content, sukien.MaDA AS ProjectID
    FROM sukien
    WHERE sukien.TenSK LIKE @TenSK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemTK` (IN `TenTK` VARCHAR(255))   BEGIN
    SET @TenTK = CONCAT('%', TenTK , '%');
    SELECT taikhoan.MaTK AS ID, taikhoan.TenTK AS Name, taikhoan.MatKhau AS Password, taikhoan.MaQuyen AS PermissionID, taikhoan.TrangThai AS Status
    FROM taikhoan
    WHERE taikhoan.TenTK LIKE @TenTK;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TimKiemTV` (IN `HoTen` VARCHAR(255))   BEGIN
    SET @HoTen = CONCAT('%', HoTen , '%');
    SELECT MaTV AS ID, thanhvien.HoTen AS Name, thanhvien.SDT AS Phone, thanhvien.DiaChi AS Address, thanhvien.NgaySinh as BirthDay, thanhvien.ChucVu AS Position, thanhvien.Email AS Email, thanhvien.MaTK AS AccountID, thanhvien.GioiTinh AS Gender, thanhvien.TrangThai AS Status, thanhvien.AnhDaiDien AS Avatar, thanhvien.MaNhom AS TeamID
    FROM thanhvien
    WHERE thanhvien.HoTen LIKE @HoTen;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaBCCC` (IN `maBC` INT)   BEGIN
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaNhom` (IN `maNhom` INT)   BEGIN
	DELETE FROM nhom WHERE nhom.MaNhom = maNhom;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaNV` (`maNV` INT)   BEGIN
    DELETE FROM nhiemvu WHERE nhiemvu.MaNV = MaNV;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaPB` (IN `maPB` INT)   BEGIN
    DELETE FROM phongban WHERE phongban.MaPB = maPB;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `XoaQuyen` (`maQuyen` INT)   BEGIN
    DELETE FROM quyen WHERE quyen.MaQuyen = maQuyen;
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
CREATE DEFINER=`root`@`localhost` FUNCTION `DoiMatKhau` (`MaTK` INT, `MatKhauCu` VARCHAR(16), `MatKhauMoi` VARCHAR(16)) RETURNS TINYINT(1)  BEGIN 
  DECLARE count INT;
  
  UPDATE taikhoan 
  SET  taikhoan.MatKhau = MatKhauMoi
  WHERE taikhoan.MatKhau = MatKhauCu AND taikhoan.MaTK = MaTK;
 
  SET count = ROW_COUNT();
  
  IF count > 0 THEN
  	RETURN true;
  ELSE
  	RETURN false;
  END IF;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `SoNguoiThamGia` (`MaDA` INT) RETURNS INT(11)  BEGIN 
  DECLARE count INT;
  SELECT COUNT(MaDA) INTO count 
  FROM congviec INNER JOIN duan 
  ON congviec.MaDA = duan.MaDA
  INNER JOIN thanhvien
  ON thanhvien.MaTV = congviec.MaTV
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
(1, 'Mô Phỏng Xe Tăng', 'https://www.simulation.vn/templates/phoneapps-et/slideshow/1.jpg', 1, 1, 'anh du an'),
(2, 'Mô Phỏng Lái Xe Ô Tô', 'https://www.simulation.vn/templates/phoneapps-et/slideshow/2.jpg', 2, 1, 'anh du an'),
(3, 'Mô Phỏng Phòng Học', 'https://www.simulation.vn/images/sbhinh1.jpg', 1, 1, 'anh du an'),
(4, 'Mô Phỏng Súng AK', 'https://www.simulation.vn/images/ak-nhinthang.jpg', 1, 1, 'anh du an'),
(5, 'Mô Phỏng Cấu Tạo Hoạt Động Động Cơ Cơ Khí', 'https://www.simulation.vn/images/giamtoccanh2.jpg', 1, 1, 'anh du an'),
(6, 'Mô Phỏng Huấn Luyện Chiến Thuật Phân Đội Tank - Thiết Giáp', 'https://www.simulation.vn/images/3dtank.jpg', 1, 1, 'anh du an'),
(8, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 1', 'https://sanketoan.vn/public/library_staff/25094/images/3(273).PNG', 1, 1, 'anh hop dong'),
(9, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 2', 'https://o.vdoc.vn/data/image/2022/05/16/Hop-dong-ve-quay-phim-chup-hinh-1-1.jpg', 1, 1, 'anh hop dong'),
(10, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 3', 'https://s1.hopdongmau.com/pehAUEk9tIABIOBY/thumb/2015/08/20/mau-hop-dong-dich-vu-quang-cao-thuong-mai_1qA3eaucDq.jpg', 1, 1, 'anh hop dong'),
(11, 'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 4', 'https://panoquangcao.net/wp-content/uploads/2016/11/mau-hop-dong-quang-cao-ngoai-troi-1.jpg', 1, 1, 'anh hop dong'),
(12, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEXTJUlDUf3Z2fUJIF_lt1Y_rFNfKfxanpTED8alu6hmsY6cvqb9lP9ORtTs1-VOMgQRo&usqp=CAU', 2, 2, 'anh hop dong'),
(13, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 2', 'https://image.slidesharecdn.com/hpngcungngdchvqungco-220530095856-53a865bd/85/H-P-D-NG-CUNG-NG-D-CH-V-QU-NG-CAO-doc-1-320.jpg', 2, 2, 'anh hop dong'),
(14, 'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 3', 'https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/756a7eaa66f9a88f9f768174f70790cc/thumb_1200_1553.png', 2, 2, 'anh hop dong'),
(34, 'Tàu cập cảng Hải Phòng', 'https://simulation.vn/images/taucapcanghp.jpg', 17, 10, 'anh du an'),
(35, 'website quản lý dự án', 'http://localhost/wordpress/wp-content/QL_Du_An/resources/img/trangtru.png', 18, NULL, 'anh du an');

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
  `MaTV` int(11) DEFAULT NULL,
  `DoUuTien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`MaCV`, `TenCV`, `NoiDung`, `NgayKetThuc`, `NgayBatDau`, `NganSachDuKien`, `TienDo`, `GhiChu`, `MaDA`, `NganSachThucTe`, `MaTV`, `DoUuTien`) VALUES
(1, 'khảo sát hệ thống', 'xác định mục đích, mục tiêu, yêu cầu của hệ thống, tài liệu, dữ liệu liên quan đến hệ thống', '2016-02-02', '2016-03-02', 2000, 62, 'cần lấy dữ liệu chính xác', 1, 840, 2, 'cao'),
(2, 'phân tích thiết kế hệ thống', 'sơ đồ hệ thống, các thành phần phần cứng và phần mềm', '2016-03-02', '2016-06-02', 10000, 57, 'không có', 1, 6060, 2, 'cao'),
(3, 'triển khai hệ thống', 'lắp đặt phần cứng và phần mềm của hệ thống', '2016-06-02', '2016-08-02', 15000, 83, 'không có', 1, 9147.15, 1, 'cao'),
(4, 'Kiểm thử hệ thống', 'Kiểm tra và thử nghiệm hệ thống', '2016-08-02', '2016-09-02', 1000, 0, 'không có', 1, 1550, 6, 'cao'),
(5, 'Vận hành và bảo trì hệ thống', 'Huấn luyện cán bộ vận hành và sử dụng hệ thống. Chuyển giao hệ thống', '2016-09-02', '2016-10-02', 2000, 0, 'không có', 1, 1600, 4, 'cao'),
(8, 'Xác định yêu cầu', 'không có', '2005-06-16', '2005-06-20', 1500, 100, 'không có', 2, 500, 2, 'cao'),
(9, 'Chọn giải pháp', 'không có', '2005-06-21', '2005-06-30', 1250, 100, 'không có', 2, 755, 2, 'cao'),
(10, 'Triển khai hệ thống', 'không có', '2005-07-01', '2005-12-15', 1250, 10, 'không có', 2, 8787, 1, 'cao'),
(11, 'Quản lý và vận hành', 'không có', '2005-12-16', '2005-12-30', 1200, 0, 'không có', 2, 1200, 4, 'cao'),
(13, 'Duy trì và nâng cấp', 'không có', '2005-12-30', '2006-01-01', 1000, 10, 'không có', 2, 1200, 1, 'high'),
(14, 'Cập nhật phần mềm quản trị mạng và firmware thiết bị mạng', 'không có', '2006-01-02', '2006-01-10', 1000, 10, 'không có', 2, 1200, 1, 'high'),
(15, 'Nâng cấp hệ thống', 'không có', '2006-01-11', '2006-01-15', 1009.3, 10, 'không có', 2, 1200, 1, 'high'),
(16, 'Đảm bảo hoạt động của hệ thống', 'Đảm bảo hệ thống luôn hoạt động an toàn và hiệu quả', '2006-01-16', '2006-01-17', 1000, 10, 'không có', 2, 1200, 1, 'high'),
(17, 'Lập kế hoạch dự phòng và khôi phục', 'không có', '2006-01-18', '2006-01-20', 1000, 10, 'không có', 2, 1200, 1, 'high'),
(27, 'phân tích thiết kế hệ thống', 'sơ đồ hệ thống, các thành phần phần cứng, phần mềm, chức năng cần thiết cho hệ thống', '2013-12-20', '2014-02-03', 0, 100, 'Thông tin dữ liệu chính xác', 17, 0, 17, 'cao'),
(28, 'khảo sát hệ thống', 'xác định mục đích, mục tiêu, yêu cầu của hệ thống, tài liệu, dữ liệu liên quan đến hệ thống', '2013-12-20', '2014-02-03', 750, 100, 'cần lấy dữ liệu chính xác', 17, 523, 18, 'Cao'),
(29, 'triển khai hệ thống', 'Không có', '2014-07-22', '2014-02-03', 1200, 100, 'cần lấy dữ liệu chính xác', 17, 1172, 28, 'Cao'),
(30, 'triển khai hệ thống', 'Không có', '2014-07-22', '2014-02-03', 1200, 100, 'cần lấy dữ liệu chính xác', 17, 1172, 27, 'Cao'),
(32, 'Kiểm thử hệ thống', 'Không có', '2014-12-02', '2014-07-22', 900, 100, 'kiểm thử kĩ càng', 17, 921, 24, 'Cao'),
(33, 'Thiết kế giao diện', 'cần tối ưu', '2015-06-22', '2014-12-02', 900, 100, 'thiết kế gọn gàng', 17, 921, 19, 'Cao'),
(34, 'kiểm thử hệ thống', 'cần tối ưu', '2016-01-02', '2015-06-22', 2000, 100, 'thiết kế gọn gàng', 17, 1722, 23, 'Cao'),
(35, 'Phân tích thiết kế hệ thống và làm báo cáo', 'PTTKHT', '2024-02-07', '2024-06-10', 1500, 100, 'hoàn thiện trước hạn', 18, 0, 32, 'Trung Cao'),
(36, 'Thiết kế giao diện, hỗ trợ lập trình', 'Thiết kế giao diện, hỗ trợ lập trình thành viên: Nguyễn Tiến Thànhh', '2024-02-07', '2024-06-10', 800, 90, 'hoàn thiện', 18, 0, 33, 'Cao'),
(37, 'lập trình các chức năng của website', 'lập trình các chức năng theo yêu cầu', '2024-02-07', '2024-06-10', 500, 90, 'hoàn thiện', 18, 0, 34, 'Cao'),
(38, 'aaa1', 'aaa', '2024-05-15', '2024-05-01', 2000, 0, 'abc', 19, 500, 2, 'cao'),
(39, 'aaa2', 'babc', '2024-06-01', '2024-07-01', 4000, 0, 'gcayasugbc', 19, 200, 3, 'cao');

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
(2, 'Tổng Công Ty Xây Dựng Lũng Lô', 'nguyenhuong@gmail.com', '0123575251', '04913722549', 'Số 162 Trường Chinh - Đống Đa - Hà Nội', 'Ngừng Hợp Tác', 'Không Có', '0434971814', 'Tăng Văn Chúc', 'Giám  Đốc'),
(3, 'Công ty cổ phần Tân Minh Giang', 'tmg@viettel.vn', '0839895240', '08398952', 'A8 Phan Văn Trị - Phường 10 - Quận Gò Vấp - Tp HCM', 'đối tác cũ', 'không có', '0302996482', 'Trần Xuân Hùng', 'Tổng Giám đốc');

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
(1, 'Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành', '2017-07-21', '2017-12-12', 'Ngừng Phát Triển', 'Nguyễn Văn Long - 0845758492 - longvan@gmail.com', 'Hệ Thống Có Thể Theo Dõi Qúa Trình Thi Thực Hành Của Từng Học Viên, Ghi Lại Kết Quả Và Cung Cấp Phản Hồi Tức Thì', 1, 19197.2, 19197.2, 40),
(2, 'Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng', '2005-06-14', '2010-12-26', 'Ngừng Phát Triển', 'Nguyễn Văn Mạnh - 0957557641- vanmanh@gmail.com', 'Bảo Vệ Mạng Và Dữ Liệu Từ Các Mối Đe Dọa Bằng Cách Sử Dụng Các Công Cụ Nhu Tường Lửa, Hệ Thống Tiêu Diệt Virus Và Phát Hiện Xâm Nhập', 2, 17242, 17242, 28),
(17, 'Hệ thống mô phỏng dạy lái tàu thủy', '2013-12-20', '2016-11-15', 'đã hoàn thành', 'Hoàng Tuấn Long - 0963504821 - hoangtuanlong@gmail.com', 'Hệ thống mô phỏng lái tàu đường sông cho phép các học viên thực hành tập lái trên một cabin mô phỏng được thiết kế giống như thực tế. Quang cảnh hoạt động của khúc sông tập luyện được tái tạo phù hợp với quang cảnh thực tế trên môi trường đồ họa 3D.', 21, 6431, 100000, 100),
(18, 'Website quản lý dự án Công ty Cổ phần đầu tư và phát triển Công Nghệ Mô phỏng Việt Nam', '2024-02-07', '2024-06-28', 'Đang phát triển', 'Nguyễn Tuấn Anh - 0963504821 - hoangtuanlong@gmail.com', 'website quản lý dự án cho nội bộ trong công ty', 20, 0, 5000, 93),
(19, 'abc', '2024-06-01', '2024-12-01', 'ĐANG PHAT TRIEN', 'abc', 'abc', 2, 700, 1000, 0);

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
(2, 'Hợp Đồng Kinh Tế', '101015/LLVNSIM', '2024-06-14', '2024-12-29', 'Mô Tả Chi Tiết Về Hàng Hóa Cần Cung Cấp, Bao Gồm Loại Hàng Số Lượng Và Chất Lượng', 2071190000, 'Hết Hiệu Lực', 2, 2),
(10, 'Hợp đồng xây dựng hệ thống mô phỏng dạy lái tàu sông cho trường trung cấp nghề Tiền Giang', '20-12/TMG-VNSIM', '2013-12-20', '2016-11-15', 'không có', 200000, 'hợp đồng đã hoàn thành', 3, 17);

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
(2, 'Phần Mềm', 'Không Có'),
(18, 'Game - Trò chơi', 'không có'),
(19, 'Ứng dụng điện thoại', 'không có'),
(20, 'Website', 'không có'),
(21, 'Phần mềm nhúng', 'không có');

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
(5, 'Nhóm Phân Tích', 'Phạm Hồng Quân', 1),
(6, 'Nhóm điều khiển điện tử', 'Trần Thị Long', 3),
(7, 'Nhóm kiểm thử', 'Lê Thị Liên', 7);

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
(1, 'Phòng lập trình', 'Phòng code'),
(2, 'Phòng Thiết Kế', 'Không Có'),
(3, 'Phòng điều khiển điện tử', 'không có'),
(4, 'Phòng dữ liệu 3D', 'không có'),
(5, 'Phòng thiết kế cơ khí', 'không có'),
(6, 'phòng bảo hành', 'không có'),
(7, 'Phòng kiểm thử', 'không có');

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
(2, 'galactot', '1234567', 2, 'Vẫn còn sử dụng'),
(3, 'nguyentung', '12345678', 3, 'Vẫn còn sử dụng'),
(8, 'nguyenvantung', 'password123', 1, 'Active'),
(9, 'buithihoan', 'password123', 1, 'Active'),
(10, 'thilong632', 'password123', 1, 'Inactive'),
(11, 'Dan50302', 'password123', 1, 'Active'),
(12, 'phamdong', 'password123', 1, 'Active'),
(13, 'cunguyenchat', 'password123', 1, 'Active'),
(14, 'tungnv', 'password123', 1, 'Active'),
(15, 'datlt', 'password123', 1, 'Active'),
(16, 'dienlt', 'password123', 1, 'Active'),
(17, 'hant0', 'password123', 1, 'Active'),
(18, 'phuchl00', 'password123', 1, 'Active'),
(19, 'haudp00', 'password123', 1, 'Active'),
(20, 'thaith00', 'password123', 1, 'Active'),
(21, 'minhtc0', 'password123', 1, 'Active'),
(22, 'linhht0', 'password123', 1, 'Active'),
(23, 'thaovt0', 'password123', 1, 'Active'),
(24, 'duccn0', 'password123', 1, 'Active'),
(25, 'phucnv0', 'password123', 1, 'Active'),
(26, 'quydt0', 'password123', 1, 'Active'),
(27, 'hailv0', 'password123', 1, 'Active'),
(28, 'longdv0', 'password123', 1, 'Active'),
(29, 'conglh0', 'password123', 1, 'Active'),
(30, 'anhvm0', 'password123', 1, 'Active'),
(31, 'minhhezi1304', 'password123', 1, 'Active'),
(32, 'toan0505', 'password123', 1, 'Active'),
(33, 'vodanh12', 'password123', 1, 'Active');

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
  `MaNhom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `HoTen`, `SDT`, `DiaChi`, `NgaySinh`, `ChucVu`, `Email`, `MaTK`, `GioiTinh`, `TrangThai`, `AnhDaiDien`, `MaNhom`) VALUES
(1, 'Nguyễn Văn Tùng', '0245624669', 'Xã Kênh Giang - Thủy Nguyên - Hải Phòng - Thôn Đồng Phản', '2000-03-01', 'kĩ sư lập trình', 'nguyenvantung@gmail.com', 8, 'Nam', 'Đang Làm Việc', 'https://demoda.vn/wp-content/uploads/2022/03/mau-anh-the-nhan-vien-van-phong.jpg', 3),
(2, 'Bùi Thị Hoan', '0942782218', 'Xã Ngũ Lão - Huyện Thủy Nguyên - Hải Phòng', '2024-03-01', 'Phân tích hệ thống', 'buithihoan@gmail.com', 9, 'Nữ', 'Đang Làm Việc', 'https://khoinguonsangtao.vn/wp-content/uploads/2022/11/mau-anh-the-nam-gai-ao-somi.jpg', 3),
(3, 'Trần Thị Long', '3767005332', 'Thủy Đường, Thủy Nguyên, Hải Phòng', '2024-03-03', 'Nhân Viên Thiết Kế Giao Diện', 'thilong632@gmail.com', 10, 'Nu', 'Nghỉ việc', 'https://tiemanhsky.com/wp-content/uploads/2020/03/%E1%BA%A3nh-th%E1%BA%BB-683x1024.jpg', 3),
(4, 'Le Quoc Dan', '4298892323', 'Đống Đa, Hà Nội, Việt Nam', '2000-03-04', 'Kỹ thuật viên điều khiển', 'Dan50302@gmail.com', 11, 'Nam', 'Vẫn còn làm việc', 'https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202008/14/-05-33-414f09d19128976bbb896968910eec3503.JPEG', 3),
(6, 'Phạm Tiến Đồng', '0978563485', 'Trung hòa, Cầu Giấy, HN', '1989-04-05', 'Nhân viên kiểm thử', 'phamdong@gmail.com', 12, 'Nam', 'Đang làm việc', 'https://jobsgo.vn/blog/wp-content/uploads/2023/05/Anh-ho-so.jpg', 3),
(13, 'Đồng Nguyên Chất', '0124934734', 'Thanh xuân, Hà Nội', '1995-03-23', 'kĩ sư lập trình', 'cunguyenchat@gmail.com', 13, 'Nam', 'Đang làm việc', 'https://haycafe.vn/wp-content/uploads/2021/12/Mau-anh-the-nam.jpg', 3),
(14, 'Nguyễn văn Tùng', '0123957347', 'Nam Từ Niêm, Hà Nội', '1996-06-02', 'kĩ sư lập trình', 'tungnv@gmail.com', 14, 'Nam', 'Đang làm việc', 'https://m.thebank.vn/uploads/users/f8b4c999264ebabcba1dddf44cad57eb_daotranthu.jpeg', 3),
(16, 'Lê Tiến Đạt', '0955484733', 'Hai Bà Trưng, Hà Nội', '1997-12-04', 'kĩ sư lập trình', 'datlt@gmail.com', 15, 'Nam', 'Đang làm việc', 'https://img2.thuthuatphanmem.vn/uploads/2019/05/06/anh-the-nam-dep-nhat_100828554.jpg', 3),
(17, 'Lê thị Diễn', '0955563573', 'Hai Bà Trưng, Hà Nội', '1995-11-11', 'Phân tích hệ thống', 'dienlt@gmail.com', 16, 'Nữ', 'Đang làm việc', 'https://i0.wp.com/thatnhucuocsong.com.vn/wp-content/uploads/2022/03/mau-anh-the.jpg?ssl=1', 3),
(18, 'Nguyễn Thanh Hà', '0847934734', 'Tiên Lữ, Hưng Yên', '1997-03-22', 'Phân tích hệ thống', 'hant0@gmail.com', 17, 'Nữ', 'Đang làm việc', 'https://fn.vinhphuc.edu.vn/UploadImages/thptngogiatu/admin/2017_10/thu%2030.JPG', 3),
(19, 'Lê Hồng Phúc', '0847974655', 'Đằng Giang, Ngô Quyền, Hải Phòng', '2000-02-28', 'Nhân Viên Thiết Kế Giao Diện', 'phuchl00@gmail.com', 18, 'Nam', 'Đang làm việc', 'https://www.uit.edu.vn/sites/vi/files/image_from_word/va.jpeg', 3),
(20, 'Đồng Phúc Hậu', '0984336557', 'Hai Bà Trưng, hà Nội', '1999-02-28', 'Nhân Viên Thiết Kế Giao Diện', 'haudp00@gmail.com', 19, 'Nam', 'Đang làm việc', 'D:\\Xampp\\htdocs\\wordpress/wp-content\\QL_Du_An\\resources\\img/', 3),
(21, 'Trần Hoàng Thái', '0984446437', 'Hai Bà Trưng, hà Nội', '1999-07-02', 'Nhân Viên Thiết Kế Giao Diện', 'thaith00@gmail.com', 20, 'Nam', 'Đang làm việc', 'https://www.giasucantho.net.vn/gia-su/images/nguyen-phuoc-sang-3555.jpg', 3),
(22, 'Trần Thái Minh', '0983646437', 'Thanh Xuân, hà Nội', '1993-07-30', 'Nhân Viên Thiết Kế Giao Diện', 'minhtc0@gmail.com', 21, 'Nam', 'Đang làm việc', 'https://bizweb.dktcdn.net/100/175/849/files/bi-kip-chup-anh-the-dep-va-an-anh-05.jpg?v=1608028893933', 3),
(23, 'Hồng Thái Linh', '098364435', 'Cầu Giấy, hà Nội', '1996-09-15', 'Nhân viên kiểm thử', 'linhht0@gmail.com', 22, 'Nam', 'Đang làm việc', 'https://i.pinimg.com/564x/5e/6c/57/5e6c572eed026b75f81682e02f83a983.jpg', 3),
(24, 'Vũ Thị Thảo', '098366635', 'Cầu Giấy, hà Nội', '1998-03-15', 'Nhân viên kiểm thử', 'thaovt0@gmail.com', 23, 'Nữ', 'Đang làm việc', 'https://bizweb.dktcdn.net/100/175/849/files/chup-anh-chan-dung-lam-ho-so-nop-thcs-thpt-thi-vao-lop-10-cao-dang-dai-hoc-03.jpg?v=1594895178127', 3),
(25, 'Nguyễn Công Đức', '098366635', 'Cầu Giấy, hà Nội', '1998-02-22', 'Nhân viên kiểm thử', 'duccn0@gmail.com', 24, 'Nữ', 'Đang làm việc', 'https://toigingiuvedep.vn/wp-content/uploads/2021/07/anh-the.jpg', 3),
(26, 'Nguyễn Văn Phúc', '0987349879', 'Đường Láng, Hà Nội', '1998-02-22', 'Kỹ thuật viên điều khiển', 'phucnv0@gmail.com', 25, 'Nam', 'Đang làm việc', 'https://vn-test-11.slatic.net/p/a12f377df925c0bffdc309b91a2efcf4.jpg', 3),
(27, 'Dỗ Thị Quy', '0933422577', 'Ba Đình, Hà Nội', '1998-02-22', 'Kỹ thuật viên điều khiển', 'quydt0@gmail.com', 26, 'Nữ', 'Đang làm việc', 'https://tiemanhsky.com/wp-content/uploads/2020/03/jhjh-1-768x1024.jpg', 3),
(28, 'Lương Văn hải', '0933422577', 'Hoàn Kiếm, Hà Nội', '1992-03-08', 'Kỹ thuật viên điều khiển', 'hailv0@gmail.com', 27, 'nam', 'Đang làm việc', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWQyEU_CfGvsgKoJE628kiuSXLDbrBua5Rwg&usqp=CAU', 3),
(29, 'Đào Văn Long', '0933422577', 'Hoàn Kiếm, Hà Nội', '1999-08-03', 'kĩ sư lập trình', 'longdv0@gmail.com', 28, 'nam', 'Đang làm việc', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJWhCtkn2kvqdh1PBkqx3hrqfdPIeJ5exO4A-_9oPqT7-ZrphLivtVyt3Ny0rlfUvQYV4&usqp=CAU', 3),
(30, 'Lê hoàng Công', '0933493247', 'Đống Đa, Hà Nội', '1997-11-23', 'kĩ sư lập trình', 'conglh0@gmail.com', 29, 'nam', 'Đang làm việc', 'https://benhviensannhibacninh.vn/wp-content/uploads/2019/11/pk.jpg', 3),
(31, 'Vũ Minh Anh', '0923224978', 'Tây Hồ, Hà Nội', '2000-12-31', 'kĩ sư lập trình', 'anhvm0@gmail.com', 30, 'nữ', 'Đang làm việc', 'https://toplist.vn/images/800px/kieu-toc-va-mau-toc-812636.jpg', 3),
(32, 'Bùi Đức Minh', '0869105701', 'Tiên Lữ, Hưng Yên', '2002-04-13', 'Phân tích hệ thống', 'minhhezi1304@gmail.com', 31, 'nam', 'Đang làm việc', 'https://i.pinimg.com/736x/53/fa/94/53fa941122c8d54ec88af31eedd2f884.jpg', 3),
(33, 'Nguyễn Công Toàn', '0939465882', 'Thủy Nguyên, Hải Phòng', '2002-05-05', 'Nhân Viên Thiết Kế Giao Diện', 'toan0505@gmail.com', 32, 'nam', 'Đang làm việc', 'https://png.pngtree.com/png-clipart/20230729/ourlarge/pngtree-cute-fat-boy-sticker-png-image_9116119.png', 3),
(34, 'Nguyễn tiến thành', '0939465882', 'Thủy Nguyên, Hải Phòng', '2002-12-07', 'kĩ sư lập trình', 'vodanh12@gmail.com', 33, 'nam', 'Đang làm việc', 'https://donoithatdanang.com/wp-content/uploads/2021/11/hinh-anh-anime-boy-chibi.jpg', NULL);

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
  ADD KEY `MaTV` (`MaTV`);

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
  MODIFY `MaAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `bangcapchungchi`
--
ALTER TABLE `bangcapchungchi`
  MODIFY `MaBC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `doitac`
--
ALTER TABLE `doitac`
  MODIFY `MaDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `MaDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loaiduan`
--
ALTER TABLE `loaiduan`
  MODIFY `MaLoaiDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `nhom`
--
ALTER TABLE `nhom`
  MODIFY `MaNhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  ADD CONSTRAINT `congviec_ibfk_3` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

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
