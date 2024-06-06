-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: QLDuAn
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anh`
--

DROP TABLE IF EXISTS `anh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anh` (
  `MaAnh` int(11) NOT NULL AUTO_INCREMENT,
  `TenAnh` varchar(255) DEFAULT NULL,
  `DuongDan` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL,
  `MaHD` int(11) DEFAULT NULL,
  `LoaiAnh` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`MaAnh`),
  KEY `MaDA` (`MaDA`),
  KEY `MaHD` (`MaHD`),
  CONSTRAINT `anh_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`),
  CONSTRAINT `anh_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anh`
--

LOCK TABLES `anh` WRITE;
/*!40000 ALTER TABLE `anh` DISABLE KEYS */;
INSERT INTO `anh` VALUES (1,'Mô Phỏng Xe Tăng','https://www.simulation.vn/templates/phoneapps-et/slideshow/1.jpg',1,1,'anh du an'),(2,'Mô Phỏng Lái Xe Ô Tô','https://www.simulation.vn/templates/phoneapps-et/slideshow/2.jpg',2,1,'anh du an'),(3,'Mô Phỏng Phòng Học','https://www.simulation.vn/images/sbhinh1.jpg',1,1,'anh du an'),(4,'Mô Phỏng Súng AK','https://www.simulation.vn/images/ak-nhinthang.jpg',1,1,'anh du an'),(5,'Mô Phỏng Cấu Tạo Hoạt Động Động Cơ Cơ Khí','https://www.simulation.vn/images/giamtoccanh2.jpg',1,1,'anh du an'),(6,'Mô Phỏng Huấn Luyện Chiến Thuật Phân Đội Tank - Thiết Giáp','https://www.simulation.vn/images/3dtank.jpg',1,1,'anh du an'),(8,'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 1','https://sanketoan.vn/public/library_staff/25094/images/3(273).PNG',1,1,'anh hop dong'),(9,'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 2','https://o.vdoc.vn/data/image/2022/05/16/Hop-dong-ve-quay-phim-chup-hinh-1-1.jpg',1,1,'anh hop dong'),(10,'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 3','https://s1.hopdongmau.com/pehAUEk9tIABIOBY/thumb/2015/08/20/mau-hop-dong-dich-vu-quang-cao-thuong-mai_1qA3eaucDq.jpg',1,1,'anh hop dong'),(11,'Hợp đồng xây dựng Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành trang số 4','https://panoquangcao.net/wp-content/uploads/2016/11/mau-hop-dong-quang-cao-ngoai-troi-1.jpg',1,1,'anh hop dong'),(12,'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 1','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEXTJUlDUf3Z2fUJIF_lt1Y_rFNfKfxanpTED8alu6hmsY6cvqb9lP9ORtTs1-VOMgQRo&usqp=CAU',2,2,'anh hop dong'),(13,'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 2','https://image.slidesharecdn.com/hpngcungngdchvqungco-220530095856-53a865bd/85/H-P-D-NG-CUNG-NG-D-CH-V-QU-NG-CAO-doc-1-320.jpg',2,2,'anh hop dong'),(14,'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 3','https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/756a7eaa66f9a88f9f768174f70790cc/thumb_1200_1553.png',2,2,'anh hop dong'),(15,'Hợp đồng Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng trang số 3','D:\\xampp\\xampp_install\\htdocs\\wordpress/wp-content\\QL_Du_An\\resources\\img/',2,2,'anh du an');
/*!40000 ALTER TABLE `anh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bangcapchungchi`
--

DROP TABLE IF EXISTS `bangcapchungchi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bangcapchungchi` (
  `MaBC` int(11) NOT NULL AUTO_INCREMENT,
  `TenBC` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgayCap` date DEFAULT NULL,
  `NoiCap` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaTV` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaBC`),
  KEY `MaTV` (`MaTV`),
  CONSTRAINT `bangcapchungchi_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bangcapchungchi`
--

LOCK TABLES `bangcapchungchi` WRITE;
/*!40000 ALTER TABLE `bangcapchungchi` DISABLE KEYS */;
INSERT INTO `bangcapchungchi` VALUES (1,'Bồi Dưỡng Kế Toán Trưởng','2024-03-30','Hội Kế Toán Và Kiểm Toán Việt Nam',1),(2,'Kỹ Sư','2024-03-30','Trường Đại Học Sư Phạm Kỹ Thuật HCM',2);
/*!40000 ALTER TABLE `bangcapchungchi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `congviec`
--

DROP TABLE IF EXISTS `congviec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `congviec` (
  `MaCV` int(11) NOT NULL AUTO_INCREMENT,
  `TenCV` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NganSachDuKien` float DEFAULT NULL,
  `TienDo` int(11) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL,
  `NganSachThucTe` float DEFAULT NULL,
  `MaNhom` int(11) DEFAULT NULL,
  `MaTV` int(11) DEFAULT NULL,
  `DoUuTien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`MaCV`),
  KEY `MaDA` (`MaDA`),
  KEY `MaNhom` (`MaNhom`),
  KEY `MaTV` (`MaTV`),
  CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`),
  CONSTRAINT `congviec_ibfk_2` FOREIGN KEY (`MaNhom`) REFERENCES `nhom` (`MaNhom`),
  CONSTRAINT `congviec_ibfk_3` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `congviec`
--

LOCK TABLES `congviec` WRITE;
/*!40000 ALTER TABLE `congviec` DISABLE KEYS */;
INSERT INTO `congviec` VALUES (1,'khảo sát hệ thống','xác định mục đích, mục tiêu, yêu cầu của hệ thống, tài liệu, dữ liệu liên quan đến hệ thống','2016-02-02','2016-03-02',2000,62,'cần lấy dữ liệu chính xác',1,840,5,2,'cao'),(2,'phân tích thiết kế hệ thống','sơ đồ hệ thống, các thành phần phần cứng và phần mềm','2016-03-02','2016-06-02',10000,57,'không có',1,6060,5,2,'cao'),(3,'triển khai hệ thống','lắp đặt phần cứng và phần mềm của hệ thống','2016-06-02','2016-08-02',15000,83,'không có',1,9147.15,3,1,'cao'),(4,'Kiểm thử hệ thống','Kiểm tra và thử nghiệm hệ thống','2016-08-02','2016-09-02',1000,0,'không có',1,1550,7,6,'cao'),(5,'Vận hành và bảo trì hệ thống','Huấn luyện cán bộ vận hành và sử dụng hệ thống. Chuyển giao hệ thống','2016-09-02','2016-10-02',2000,0,'không có',1,1600,6,4,'cao'),(8,'Xác định yêu cầu','không có','2005-06-16','2005-06-20',1500,100,'không có',2,500,5,2,'cao'),(9,'Chọn giải pháp','không có','2005-06-21','2005-06-30',1250,100,'không có',2,755,5,2,'cao'),(10,'Triển khai hệ thống','không có','2005-07-01','2005-12-15',1250,10,'không có',2,8787,3,1,'cao'),(11,'Quản lý và vận hành','không có','2005-12-16','2005-12-30',1200,0,'không có',2,1200,6,4,'cao'),(13,'Duy trì và nâng cấp','không có','2005-12-30','2006-01-01',1000,10,'không có',2,1200,4,1,'high'),(14,'Cập nhật phần mềm quản trị mạng và firmware thiết bị mạng','không có','2006-01-02','2006-01-10',1000,10,'không có',2,1200,5,1,'high'),(15,'Nâng cấp hệ thống','không có','2006-01-11','2006-01-15',1009.3,10,'không có',2,1200,6,1,'high'),(16,'Đảm bảo hoạt động của hệ thống','Đảm bảo hệ thống luôn hoạt động an toàn và hiệu quả','2006-01-16','2006-01-17',1000,10,'không có',2,1200,7,1,'high'),(17,'Lập kế hoạch dự phòng và khôi phục','không có','2006-01-18','2006-01-20',1000,10,'không có',2,1200,4,1,'high');
/*!40000 ALTER TABLE `congviec` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `congviec_ngansachthucte_insert_trigger` AFTER INSERT ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = NEW.MaDA;
    SET @MaCV = NEW.MaCV;
    
    SET @FactBudget = 0;
    
 	SELECT SUM(congviec.NganSachThucTe) INTO @FactBudget
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    UPDATE duan 
    SET duan.NganSachThucTe = @FactBudget
    WHERE duan.MaDA = @MaDA;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `congviec_tiendo_insert_trigger` AFTER INSERT ON `congviec` FOR EACH ROW BEGIN
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
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `congviec_ngansachthucte_update_trigger` AFTER UPDATE ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = NEW.MaDA;
    SET @MaCV = NEW.MaCV;
    
    SET @FactBudget = 0;
    
 	SELECT SUM(congviec.NganSachThucTe) INTO @FactBudget
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    UPDATE duan 
    SET duan.NganSachThucTe = @FactBudget
    WHERE duan.MaDA = @MaDA;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `congviec_tiendo_update_trigger` AFTER UPDATE ON `congviec` FOR EACH ROW BEGIN
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
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `congviec_ngansachthucte_delete_trigger` AFTER DELETE ON `congviec` FOR EACH ROW BEGIN
	SET @MaDA = OLD.MaDA;
    SET @MaCV = OLD.MaCV;
    
    SET @FactBudget = 0;
    
 	SELECT SUM(congviec.NganSachThucTe) INTO @FactBudget
    FROM congviec 
    WHERE congviec.MaDA = @MaDA;
    
    UPDATE duan 
    SET duan.NganSachThucTe = @FactBudget
    WHERE duan.MaDA = @MaDA;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `congviec_tiendo_delete_trigger` AFTER DELETE ON `congviec` FOR EACH ROW BEGIN
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
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `doitac`
--

DROP TABLE IF EXISTS `doitac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doitac` (
  `MaDT` int(11) NOT NULL AUTO_INCREMENT,
  `TenDT` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `SDT` char(10) DEFAULT NULL,
  `Fax` varchar(15) DEFAULT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `MaSoThue` varchar(255) DEFAULT NULL,
  `Nguoidaidien` varchar(255) DEFAULT NULL,
  `ChucVu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MaDT`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doitac`
--

LOCK TABLES `doitac` WRITE;
/*!40000 ALTER TABLE `doitac` DISABLE KEYS */;
INSERT INTO `doitac` VALUES (1,'Trường Cao Đẳng Nghề','truongcaodangnghe@gmail.com','0977569889','02203752519','Xã Nam Đồng, Thành Phố Hải Dương, Tỉnh Hải Dương','Ngừng Hợp Tác','Không Có','0104922104','Nguyễn Văn Vọng','Hiệu Trưởng'),(2,'Tổng Công Ty Xây Dựng Lũng Lô','nguyenhuong@gmail.com','0123575251','04913722549','Số 162 Trường Chinh - Đống Đa - Hà Nội','Ngừng Hợp Tác','Không Có','0434971814','Tăng Văn Chúc','Giám  Đốc'),(3,'Công ty cổ phần Tân Minh Giang','tmg@viettel.vn','0839895240','08398952','A8 Phan Văn Trị - Phường 10 - Quận Gò Vấp - Tp HCM','đối tác cũ','không có','0302996482','Trần Xuân Hùng','Tổng Giám đốc');
/*!40000 ALTER TABLE `doitac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `duan`
--

DROP TABLE IF EXISTS `duan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duan` (
  `MaDA` int(11) NOT NULL AUTO_INCREMENT,
  `TenDA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `TrangThai` text DEFAULT NULL,
  `LienHe` text DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `MaLoaiDA` int(11) DEFAULT NULL,
  `NganSachThucTe` float DEFAULT NULL,
  `NganSachDuKien` float DEFAULT NULL,
  `TienDo` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaDA`),
  KEY `MaLoaiDA` (`MaLoaiDA`),
  CONSTRAINT `duan_ibfk_1` FOREIGN KEY (`MaLoaiDA`) REFERENCES `loaiduan` (`MaLoaiDA`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duan`
--

LOCK TABLES `duan` WRITE;
/*!40000 ALTER TABLE `duan` DISABLE KEYS */;
INSERT INTO `duan` VALUES (1,'Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành','2017-07-21','2017-12-12','Ngừng Phát Triển','Nguyễn Văn Long - 0845758492 - longvan@gmail.com','Hệ Thống Có Thể Theo Dõi Qúa Trình Thi Thực Hành Của Từng Học Viên, Ghi Lại Kết Quả Và Cung Cấp Phản Hồi Tức Thì',1,19197.2,19197.2,40),(2,'Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng','2005-06-14','2010-12-26','Ngừng Phát Triển','Nguyễn Văn Mạnh - 0957557641- vanmanh@gmail.com','Bảo Vệ Mạng Và Dữ Liệu Từ Các Mối Đe Dọa Bằng Cách Sử Dụng Các Công Cụ Nhu Tường Lửa, Hệ Thống Tiêu Diệt Virus Và Phát Hiện Xâm Nhập',2,17242,17242,28);
/*!40000 ALTER TABLE `duan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hopdong`
--

DROP TABLE IF EXISTS `hopdong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hopdong` (
  `MaHD` int(11) NOT NULL AUTO_INCREMENT,
  `TenHD` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SoHD` varchar(20) DEFAULT NULL,
  `NgayKiKet` date DEFAULT NULL,
  `NgayHetHan` date DEFAULT NULL,
  `GhiChu` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GiaTriHD` float DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaDT` int(11) DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaHD`),
  KEY `MaCT` (`MaDT`),
  KEY `MaDA` (`MaDA`),
  CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`MaDT`) REFERENCES `doitac` (`MaDT`),
  CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hopdong`
--

LOCK TABLES `hopdong` WRITE;
/*!40000 ALTER TABLE `hopdong` DISABLE KEYS */;
INSERT INTO `hopdong` VALUES (1,'Hợp Đồng Cung Cấp Hàng Hóa','654/HĐ','2024-07-21','2024-12-12','Ghi Rõ Thông Tin Về Tên Doanh Nghiệp, Trụ Sở, Số Điện Thoại, Chức Vụ, Và Người Đại Diện',1736730000,'Hết Hiệu Lực',1,1),(2,'Hợp Đồng Kinh Tế','101015/LLVNSIM','2024-06-14','2024-12-29','Mô Tả Chi Tiết Về Hàng Hóa Cần Cung Cấp, Bao Gồm Loại Hàng Số Lượng Và Chất Lượng',2071190000,'Hết Hiệu Lực',2,2);
/*!40000 ALTER TABLE `hopdong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaiduan`
--

DROP TABLE IF EXISTS `loaiduan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loaiduan` (
  `MaLoaiDA` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiDA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  PRIMARY KEY (`MaLoaiDA`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaiduan`
--

LOCK TABLES `loaiduan` WRITE;
/*!40000 ALTER TABLE `loaiduan` DISABLE KEYS */;
INSERT INTO `loaiduan` VALUES (1,'Thiết Bị','Không Có'),(2,'Phần Mềm','Không Có'),(18,'Game - Trò chơi','không có'),(19,'Ứng dụng điện thoại','không có'),(20,'Website','không có'),(21,'Phần mềm nhúng','không có'),(23,'Thiết Bị','Có');
/*!40000 ALTER TABLE `loaiduan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhom`
--

DROP TABLE IF EXISTS `nhom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhom` (
  `MaNhom` int(11) NOT NULL AUTO_INCREMENT,
  `TenNhom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TruongNhom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MaPB` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaNhom`),
  KEY `MaPB` (`MaPB`),
  CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`MaPB`) REFERENCES `phongban` (`MaPB`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhom`
--

LOCK TABLES `nhom` WRITE;
/*!40000 ALTER TABLE `nhom` DISABLE KEYS */;
INSERT INTO `nhom` VALUES (3,'Nhóm Lập Trình','Nguyễn Thị Hoan',1),(4,'Nhóm Thiết Kế','Bùi Hoan Tuân',2),(5,'Nhóm Phân Tích','Phạm Hồng Quân',1),(6,'Nhóm điều khiển điện tử','Trần Thị Long',3),(7,'Nhóm kiểm thử','Lê Thị Liên',7);
/*!40000 ALTER TABLE `nhom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phongban`
--

DROP TABLE IF EXISTS `phongban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phongban` (
  `MaPB` int(11) NOT NULL AUTO_INCREMENT,
  `TenPB` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  PRIMARY KEY (`MaPB`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phongban`
--

LOCK TABLES `phongban` WRITE;
/*!40000 ALTER TABLE `phongban` DISABLE KEYS */;
INSERT INTO `phongban` VALUES (1,'Phòng lập trình','Không CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông CóKhông Có'),(2,'Phòng Thiết Kế','Không Có'),(3,'Phòng điều khiển điện tử','không có'),(4,'Phòng dữ liệu 3D','không có'),(5,'Phòng thiết kế cơ khí','không có'),(6,'phòng bảo hành','không có'),(7,'Phòng kiểm thử','không có');
/*!40000 ALTER TABLE `phongban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quyen`
--

DROP TABLE IF EXISTS `quyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quyen` (
  `MaQuyen` int(11) NOT NULL AUTO_INCREMENT,
  `TenQuyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  PRIMARY KEY (`MaQuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quyen`
--

LOCK TABLES `quyen` WRITE;
/*!40000 ALTER TABLE `quyen` DISABLE KEYS */;
INSERT INTO `quyen` VALUES (1,'Quản Trị','Không Có'),(2,'Chỉnh Sửa','Không Có'),(3,'Xem dự án','không có');
/*!40000 ALTER TABLE `quyen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sukien`
--

DROP TABLE IF EXISTS `sukien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sukien` (
  `MaSK` int(11) NOT NULL AUTO_INCREMENT,
  `TenSK` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Anh` varchar(255) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `MaDA` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaSK`),
  KEY `MaDA` (`MaDA`),
  CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaDA`) REFERENCES `duan` (`MaDA`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sukien`
--

LOCK TABLES `sukien` WRITE;
/*!40000 ALTER TABLE `sukien` DISABLE KEYS */;
INSERT INTO `sukien` VALUES (1,'Xây dựng hệ thống điện tử tự động giám sát thi thực hành - nghề điều khiển phương tiện thủy nội địa','https://file.qdnd.vn/data/old_img/phucthang/2013/4/19/5171054220130419204601609.jpg','hệ thống tương tự như hệ thống sát hạch lái xe ô tô','Đây là hệ thống được xây dựng tương tự như hệ thống sát hạch điện tử lái xe ô tô. Quy trình thi thực hành được thực hiện trên bến cảng, sử dụng phương tiện thi đúng tiêu chuẩn cấp độ tàu theo quy định của Bộ GTVT. Hệ thống bao gồm phần mềm quản lý, đánh giá và các thiết bị điện tử, cảm biến, camera giám sát lắp đặt tại tàu, bến cảng tự động giám sát, chấm điểm quá trình thực hiện các bài thi thực hành của thí sinh trên luồng dài 200m. Kết quả đánh giá hình ảnh quá trình thực hiện bài thi của thí sinh được truyền về trung tâm điều hành qua hệ thống mạng không dây và cáp quang nội bộ, đồng thời được cập nhật trực tiếp lên Internet thông qua website của trung tâm.\r\n\r\nHệ thống được thiết kế để tự động giám sát, đánh giá chấm điểm các bài thi thực hành:\r\n\r\nBài 1: Điều động tàu rời cầu, có chướng ngại vật khống chế phía mũi tàu.\r\nBài 2: Điều động tàu rời cầu, có chướng ngại vật khống chế phía lái tàu.\r\nBài 3: Điều động tàu cập cầu, có chướng ngại vật khống chế phía mũi\r\nBài 4: Điều động tàu cập cầu, có chướng ngại vật khống chế phía lái tàu.\r\nBài 5: Điều động tàu bắt chập tiêu phía mũi tàu.\r\nBài 6: Điều động tàu bắt chập tiêu phía sau lái tàu.',1),(2,'Xây Dựng Hệ Thống Phần Mềm Quản Trị Mạng','https://infovina.vn/content/article/09-10-2023/cac-loai-he-thong-monitor-giam-sat-thiet-bi-mang-hien-nay-091023095023.png','Hệ thống Phần mềm Quản trị Mạng (NMS) là một công cụ thiết yếu cho quản trị viên mạng, giúp họ giám sát, quản lý và tối ưu hóa hiệu suất mạng của mình. NMS cung cấp nhiều lợi ích như nâng cao hiệu suất mạng, giảm thời gian ngừng hoạt động, nâng cao khả năng bảo mật và giảm chi phí vận hành.','Hệ Thống Phần Mềm Quản Trị Mạng\r\nHệ thống Phần mềm Quản trị Mạng (NMS) là một công cụ thiết yếu cho quản trị viên mạng, giúp họ giám sát, quản lý và tối ưu hóa hiệu suất mạng của mình. NMS cung cấp một giao diện tập trung để quản lý các thiết bị mạng, theo dõi hiệu suất mạng, phát hiện và khắc phục sự cố, đồng thời đảm bảo bảo mật mạng.\r\n\r\nChức năng chính của NMS:\r\n\r\nGiám sát thiết bị mạng: NMS có thể thu thập dữ liệu từ các thiết bị mạng như bộ định tuyến, bộ chuyển đổi, điểm truy cập không dây và máy chủ, cho phép quản trị viên theo dõi trạng thái hoạt động, hiệu suất và cấu hình của các thiết bị này.\r\nTheo dõi hiệu suất mạng: NMS có thể theo dõi các chỉ số hiệu suất mạng quan trọng (KPI) như lưu lượng truy cập mạng, thời gian phản hồi, tỷ lệ mất gói tin và tỷ lệ sử dụng băng thông, giúp quản trị viên xác định và giải quyết các vấn đề về hiệu suất mạng.\r\nPhát hiện và khắc phục sự cố: NMS có thể phát hiện các sự cố mạng như lỗi thiết bị, gián đoạn kết nối và tấn công mạng, đồng thời thông báo cho quản trị viên để họ có thể khắc phục sự cố kịp thời.\r\nCấu hình thiết bị: NMS cho phép quản trị viên cấu hình các thiết bị mạng từ xa, giúp tiết kiệm thời gian và công sức.\r\nQuản lý bảo mật mạng: NMS có thể giúp quản trị viên theo dõi các hoạt động mạng, phát hiện các mối đe dọa bảo mật và thực hiện các biện pháp phòng ngừa để bảo vệ mạng khỏi các cuộc tấn công mạng.\r\nLợi ích của việc sử dụng NMS:\r\n\r\nNâng cao hiệu suất mạng: NMS giúp quản trị viên xác định và giải quyết các vấn đề về hiệu suất mạng một cách nhanh chóng và hiệu quả, từ đó nâng cao hiệu suất tổng thể của mạng.\r\nGiảm thời gian ngừng hoạt động: NMS giúp phát hiện và khắc phục sự cố mạng kịp thời, giúp giảm thiểu thời gian ngừng hoạt động của mạng và đảm bảo hoạt động liên tục của các ứng dụng kinh doanh.\r\nNâng cao khả năng bảo mật: NMS giúp quản trị viên theo dõi các hoạt động mạng và phát hiện các mối đe dọa bảo mật, giúp bảo vệ mạng khỏi các cuộc tấn công mạng.\r\nGiảm chi phí vận hành: NMS giúp tự động hóa các tác vụ quản trị mạng, giúp tiết kiệm thời gian và công sức cho quản trị viên, đồng thời giảm chi phí vận hành mạng.',2);
/*!40000 ALTER TABLE `sukien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL AUTO_INCREMENT,
  `TenTK` varchar(16) DEFAULT NULL,
  `MatKhau` varchar(16) DEFAULT NULL,
  `MaQuyen` int(11) DEFAULT NULL,
  `TrangThai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`MaTK`),
  KEY `MaQuyen` (`MaQuyen`),
  CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taikhoan`
--

LOCK TABLES `taikhoan` WRITE;
/*!40000 ALTER TABLE `taikhoan` DISABLE KEYS */;
INSERT INTO `taikhoan` VALUES (1,'summon','123456789',1,'Vẫn còn sử dụng'),(2,'galactot','1234567',2,'Tạm ngưng hoạt động'),(3,'nguyentung','12345678',3,'Vẫn còn sử dụng');
/*!40000 ALTER TABLE `taikhoan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thanhvien`
--

DROP TABLE IF EXISTS `thanhvien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thanhvien` (
  `MaTV` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`MaTV`),
  KEY `MaTK` (`MaTK`),
  CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thanhvien`
--

LOCK TABLES `thanhvien` WRITE;
/*!40000 ALTER TABLE `thanhvien` DISABLE KEYS */;
INSERT INTO `thanhvien` VALUES (1,'Nguyễn Văn Tùng','0245624669','Xã Kênh Giang - Thủy Nguyên - Hải Phòng - Thôn Đồng Phản','2000-03-01','kĩ sư lập trình','nguyenvantung@gmail.com',1,'Nam','Đang Làm Việc','https://demoda.vn/wp-content/uploads/2022/03/mau-anh-the-nhan-vien-van-phong.jpg'),(2,'Bùi Thị Hoan','0942782218','Xã Ngũ Lão - Huyện Thủy Nguyên - Hải Phòng','2024-03-01','Phân tích hệ thống','buithihoan@gmail.com',2,'Nữ','Đang Làm Việc','https://khoinguonsangtao.vn/wp-content/uploads/2022/11/mau-anh-the-nam-gai-ao-somi.jpg'),(3,'Trần Thị Long','3767005332','Thủy Đường, Thủy Nguyên, Hải Phòng','2024-03-03','Nhân Viên Thiết Kế Giao Diện','thilong632@gmail.com',3,'Nu','Nghỉ việc','https://tiemanhsky.com/wp-content/uploads/2020/03/%E1%BA%A3nh-th%E1%BA%BB-683x1024.jpg'),(4,'Le Quoc Dan','4298892323','Đống Đa, Hà Nội, Việt Nam','2000-03-04','Kỹ thuật viên điều khiển','Dan50302@gmail.com',3,'Nam','Vẫn còn làm việc','https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202008/14/-05-33-414f09d19128976bbb896968910eec3503.JPEG'),(6,'Phạm Tiến Đồng','0978563485','Trung hòa, Cầu Giấy, HN','1989-04-05','Nhân viên kiểm thử','phamdong@gmail.com',3,'Nam','Đang làm việc','https://jobsgo.vn/blog/wp-content/uploads/2023/05/Anh-ho-so.jpg');
/*!40000 ALTER TABLE `thanhvien` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-07  1:48:01
