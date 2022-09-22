-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table laravel_drink.bills
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.bills: ~7 rows (approximately)
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`) VALUES
	(1, 1, '2022-10-04', 45000.00, 'atm', 'Đơn hàng này đã thanh toán thành công'),
	(2, 1, '2022-10-05', 145000.00, 'atm', 'Đơn hàng này đã thanh toán thành công'),
	(3, 2, '2022-06-04', 300000.00, 'cod', 'Đơn hàng này thanh toán khi nhận hàng'),
	(4, 2, '2022-12-01', 450000.00, 'cod', 'Đơn hàng này thanh toán khi nhận hàng'),
	(5, 3, '2022-04-04', 115000.00, 'cod', 'Đơn hàng này thanh toán khi nhận hàng'),
	(6, 4, '2022-03-07', 422000.00, 'atm', 'Đơn hàng này đã thanh toán thành công'),
	(7, 5, '2022-09-14', 75000.00, 'atm', 'Đơn hàng này đã thanh toán thành công');
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;

-- Dumping structure for table laravel_drink.bill_detail
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.bill_detail: ~7 rows (approximately)
/*!40000 ALTER TABLE `bill_detail` DISABLE KEYS */;
INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`) VALUES
	(1, 1, 1, 1, 15000),
	(2, 1, 2, 3, 30000),
	(3, 1, 1, 1, 20000),
	(4, 2, 2, 3, 10000),
	(5, 2, 1, 3, 40000),
	(6, 3, 2, 3, 30000),
	(7, 3, 2, 3, 45000);
/*!40000 ALTER TABLE `bill_detail` ENABLE KEYS */;

-- Dumping structure for table laravel_drink.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.customer: ~10 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `adress`, `phone_number`, `note`) VALUES
	(1, 'Nguyễn Văn A', 'Nam', 'vanapeo@gmail.com', '123 Nguyễn Văn Tần , Quận 7, HCM', '0900225554', 'thành viên vàng'),
	(2, 'Nguyễn Văn b', 'Nam', 'vanbc1@gmail.com', '123 Võ Văn Tần , Quận 3, HCM', '08855545544', 'thành viên bạc'),
	(3, 'Nguyễn thị thùy', 'Nữ', 'thuykute123@gmail.com', '112 Nguyễn DU, Đà Nẵng', '09002454441', 'thành viên vàng'),
	(4, 'Trần Thanh Trúc', 'Nữ', 'trucxinhxinh@gmail.com', '123 Võ Văn hai , Quận 7 HCM', '0896786754', 'thành viên mới'),
	(5, 'Nguyễn Thành Nam', 'Nam', 'Namximang@gmail.com', '16 Nguyễn văn Cừ , Quận 1, HCM', '0922222211', 'thành viên bạch kim'),
	(6, 'Bảo Ngọc', 'Nữ', 'ngochotgirl@gmail.com', '24 Nguyễn Huệ , Huế', '0911221212', 'thành viên mới'),
	(7, 'Đặng Thanh Thiên', 'Nam', 'thanhthien112@gmail.com', '76 Nguyễn Oanh , Quận Gò Vấp, HCM', '0232233334', 'thành viên vàng'),
	(8, 'Bùi Hữu Lượng', 'Nam', 'luongmatpho@gmail.com', '123 Nguyễn Thị Thật , Quận 7 ,HCM', '090022342342', 'thành viên Đồng'),
	(9, 'Nguyễn Trung Kiên', 'Nam', 'trungkienphoco@gmail.com', '112 Phố cổ , Quận 14, Hội An', '0900112234', 'thành viên Mới'),
	(10, 'Nguyễn Thanh Nhiên', 'Nữ', 'honnhien1232@gmail.com', '34 Nguyễn Thị Minh Khai , Quận 1 HCM', '0876655554', 'thành viên vàng');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table laravel_drink.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_type` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `promotion_price` double(8,2) DEFAULT NULL,
  `image` varchar(225) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `properties` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.products: ~49 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `properties`) VALUES
	(1, 'coca', 1, 'Nước uống coca', 10000.00, 8000.00, 'coca.jpg', 'lon', 1),
	(2, 'pepsi', 1, 'Nước uống pepsi', 10000.00, NULL, 'pesi.jpg', 'lon', 2),
	(3, '7 Up', 1, 'Nước uống 7up', 10000.00, NULL, '7up.jpg', 'lon', 1),
	(4, 'c2 trà xanh', 1, 'Nước uống c2 trà xanh', 10000.00, NULL, 'c2.jpg', 'chai', 0),
	(5, 'c2 táo', 1, 'Nước uống c2 táo', 10000.00, NULL, 'c2tao.jpg', 'chai', 1),
	(6, 'Dr.thanh', 1, 'Nước uống DR.Thanh', 10000.00, NULL, 'drthanh.jpg', 'chai', 0),
	(7, 'Wake-up 247', 1, 'Nước uống wake-up 247', 10000.00, NULL, '247.jpg', 'chai', 2),
	(8, 'Coca không Đường', 2, 'Nước uống coca không đường', 10000.00, NULL, 'cocaid.jpg', 'lon', 1),
	(9, 'pepsi không Đường', 2, 'Nước uống pepsi không đường', 10000.00, NULL, 'pesiid.jpg', 'lon', 0),
	(10, '7up Không dường', 2, 'Nước uống 7up không đường', 10000.00, NULL, '7upid.jpg', 'lon', 2),
	(11, 'all free', 2, 'Nước uống all free không đường', 10000.00, 7500.00, 'afri.jpg', 'lon', 1),
	(12, 'Vĩnh hảo', 2, 'Nước uống vĩnh hảo', 7000.00, NULL, 'vh.jpg', 'chai', 1),
	(13, 'Sprite', 2, 'Nước uống sprite không đường', 10000.00, NULL, 'sprite.jpg', 'lon', 0),
	(14, 'fanta cam', 2, 'Nước uống fanta cam không đường', 10000.00, NULL, 'fanta.jpg', 'lon', 2),
	(15, 'Monster', 2, 'Nước uống monster không đường', 28000.00, NULL, 'monster.jpg', 'lon', 1),
	(16, 'coca', 3, 'Nước uống có ga coca', 10000.00, NULL, 'coca.jpg', 'lon', 1),
	(17, 'pepsi', 3, 'Nước uống có ga pepsi', 10000.00, NULL, 'pesi.jpg', 'lon', 0),
	(18, '7 Up', 3, 'Nước uống có ga 7up', 10000.00, NULL, '7up.jpg', 'lon', 1),
	(19, 'c2 trà xanh', 3, 'Nước uống có ga c2 trà xanh', 10000.00, NULL, 'c2.jpg', 'chai', 2),
	(20, 'c2 táo', 3, 'Nước uống có ga c2 táo', 10000.00, NULL, 'c2tao.jpg', 'chai', 1),
	(21, 'Dr.thanh', 3, 'Nước uống có ga DR.Thanh', 10000.00, NULL, 'drthanh.jpg', 'chai', 0),
	(22, 'Wake-up 247', 3, 'Nước uống có ga wake-up 247', 10000.00, NULL, '247.jpg', 'chai', 2),
	(23, 'c2 trà xanh', 4, 'Nước uống c2 trà xanh', 10000.00, NULL, 'c2.jpg', 'chai', 0),
	(24, 'c2 táo', 4, 'Nước uống c2 táo', 10000.00, NULL, 'c2tao.jpg', 'chai', 1),
	(25, 'c2 chanh', 4, 'Nước uống c2 chanh', 10000.00, 9000.00, 'c2chanh.jpg', 'chai', 2),
	(26, 'Ô long tea plus', 4, 'Nước uống tea plus táo', 10000.00, NULL, 'teaplus.jpg', 'chai', 0),
	(27, 'Ô long chanh', 4, 'Nước uống ô long chanh', 10000.00, NULL, 'olongchanh.jpg', 'chai', 1),
	(28, 'Fuze tea', 4, 'Nước uống fuze tea', 10000.00, NULL, 'tradao.jpg', 'chai', 2),
	(29, 'trà đào cam sả', 4, 'Nước uống trà đào cam sả', 20000.00, 15000.00, 'tradaocamsa.jpg', 'chai', 1),
	(30, 'Sữa chua hoa quả', 4, 'Nước uống hoa quả', 30000.00, 25000.00, 'suachuahu.jpg', 'hũ', 1),
	(31, 'Sữa tươi vinamil', 5, 'vinamil', 8000.00, NULL, 'vinamil.jpg', 'bịch', 0),
	(32, 'Sữa tươi vinamil dâu', 5, 'vinamil', 8000.00, NULL, 'vinamildau.jpg', 'bịch', 0),
	(33, 'Sữa tươi vinamil socola', 5, 'vinamil', 8000.00, NULL, 'vinamisocola.jpg', 'bịch', 2),
	(34, 'Sữa tươi TH True milk thùng', 5, 'th true milk thùng', 300000.00, 270000.00, 'ththung.jpg', 'thùng', 0),
	(35, 'TH true milk', 5, 'vinamil', 10000.00, NULL, 'thtruemilk.jpg', 'hộp', 2),
	(36, 'nutriboost', 5, 'nutriboost', 10000.00, NULL, 'nutriboost.jpg', 'chai', 1),
	(37, 'nutriboost cam', 5, 'nutriboost cam', 10000.00, NULL, 'nutricam.jpg', 'chai', 0),
	(38, 'vfresh', 6, 'vfresh', 12000.00, NULL, 'vfresh.jpg', 'hộp', 2),
	(39, 'vfresh cam', 6, 'vfresh cam', 10000.00, NULL, 'vfreshcam.jpg', 'hộp', 0),
	(40, 'vfresh táo', 6, 'vfresh táo', 11000.00, NULL, 'vfreshtao.jpg', 'hộp', 1),
	(41, 'vfresh trái cây sữa', 6, 'vfresh trái cây sữa', 10000.00, 8000.00, 'vfreshsua.jpg', 'hộp', 1),
	(42, 'TH true milk', 6, 'vinamil', 10000.00, 8500.00, 'thtruemilk.jpg', 'hộp', 0),
	(43, 'nutriboost', 6, 'nutriboost', 10000.00, NULL, 'nutriboost.jpg', 'chai', 1),
	(44, 'nutriboost cam', 6, 'nutriboost cam', 10000.00, NULL, 'nutricam.jpg', 'chai', 2),
	(45, 'Nước ép ổi', 7, 'Nước ép ổi', 20000.00, NULL, 'epoi.jpg', 'ly', 0),
	(46, 'Nước ép táo', 7, 'Nước ép táo', 20000.00, 17000.00, 'eptao.jpg', 'ly', 1),
	(47, 'Nước ép xoài', 7, 'Nước ép xoài', 20000.00, NULL, 'epxoai.jpg', 'ly', 0),
	(48, 'Nước ép cà rốt', 7, 'Nước ép cà rốt', 20000.00, 18000.00, 'carot.jpg', 'ly', 2),
	(49, 'Nước ép dứa', 7, 'Nước ép dứa', 20000.00, NULL, 'epdua.jpg', 'ly', 0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table laravel_drink.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.slider: ~4 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id`, `link`, `image`) VALUES
	(1, 'banner1.com', 'banner1.jpg'),
	(2, 'banner2.com', 'banner2.jpg'),
	(3, 'banner3.com', 'banner3.jpg'),
	(4, 'banner4.com', 'banner4.jpg');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Dumping structure for table laravel_drink.type_product
CREATE TABLE IF NOT EXISTS `type_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.type_product: ~7 rows (approximately)
/*!40000 ALTER TABLE `type_product` DISABLE KEYS */;
INSERT INTO `type_product` (`id`, `name`, `description`, `image`) VALUES
	(1, 'Nước ngọt có đường', 'Nước uống có đường', 'coduong.jpg'),
	(2, 'Nước ngọt không đường', 'Nước uống có lượng đường không dành cho người hạn chế đường', 'itduong.jpg'),
	(3, 'Có ga', 'Nước uống có ga', 'coga.jpg'),
	(4, 'Không ga', 'Nước uống không có ga', 'coduong.jpg'),
	(5, 'Sữa tươi', 'Sữa tươi Có bịch và chai', 'sữa tươi.jpg'),
	(6, 'Sữa trái cây', 'Sữa tươi kết hợp với trái cây tăng thêm vitamin và khoáng chất', 'suatraicay.jpg'),
	(7, 'Nước ép trái cây', 'Nước ép trái cây tươi ngon nhiều chất dinh dương vitamin', 'nuocep.jpg');
/*!40000 ALTER TABLE `type_product` ENABLE KEYS */;

-- Dumping structure for table laravel_drink.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nickname` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `auth_type` varchar(255) NOT NULL DEFAULT 'email',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table laravel_drink.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
