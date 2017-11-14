-- Drop account table
DROP TABLE ACCOUNT;

-- Drop save table
DROP TABLE SAVE;

-- Drop comment table
DROP TABLE COMMENT;

-- Drop rate table
DROP TABLE RATE;

-- Drop type table
DROP TABLE TYPE;

-- Drop shop table
DROP TABLE SHOP;

-- Drop type_shop table
DROP TABLE TYPE_SHOP;

-- Drop feedback table
DROP TABLE FEEDBACK;

-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql12.freemysqlhosting.net
-- Generation Time: Oct 23, 2017 at 07:09 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql12198667`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACCOUNT`
--

CREATE TABLE `ACCOUNT` (
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FIRST_NAME` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LAST_NAME` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FULL_NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IMAGE` text COLLATE utf8_unicode_ci,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ADDRESS` text COLLATE utf8_unicode_ci,
  `ROLE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ACCOUNT`
--

INSERT INTO `ACCOUNT` (`USERNAME`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `FULL_NAME`, `IMAGE`, `EMAIL`, `PHONE`, `ADDRESS`, `ROLE`) VALUES
('Admin', '16bfa2a7cbc5f5563e107d8b15b138b9', 'Admin4', 'Admin', 'Admin Admin4', 'hinh-1508231611.PNG', 'tranvthanhson@gmail.com', '01269736096', '', 2),
('ngan', '4297f44b13955235245b2497399d7a93', 'thuong', 'thuong', 'thuong thuong', 'hinh-1508231651.jpg', 'tranvthanhson@gmail.com', '123123123', '1231231231323', 3),
('Adminre', '585ec9a3518aaecb3fa93bd921688dd5', 'thanh', 'son', 'son thanh', 'hinh-1508261376.jpeg', 'Admin@gmail.com', '123', '', 2),
('testlancuoi', '827d399e6f92a0e10363832ac71e7466', 'thuong', 'hoai', 'hoai thuong', 'hinh-1508231757.jpg', 'hoaithuong14cntt@gmail.com', 'thuong', 'thuong', 1),
('Admin121212', 'e04755387e5b5968ec213e41f70c1d46', 'thuong', 'huynh thi hoai thuon', 'huynh thi hoai thuon thuong', 'image-1508383236.png', 'tranvthanhson@gmail.com', '0987654321', 'Hoa vang - Da Nang', 1),
('Admin212121', '0f5aaaf14d9a2d371853e46119abba27', 'ádasd', 'áddasdasd', 'áddasdasd ádasd', 'hinh-1508258305.png', 'Admin@gmail.com', '', '', 2),
('hieuxd', 'df69d0bc56e1ce6d2577f6978d6fca02', 'Hoai', 'Thuong thuong', 'Thuong thuong Hoai', 'image-1508474182.png', 'hieutran040495@gmail.com', '0905674086', '242 Nguyen Hoang street, DaNang City', 3),
('quangadmin', '93279e3308bdbbeed946fc965017f67a', 'a', 'a', 'a a', 'a', 'a@mzkaskd', 'a', 'a', 1),
('testdat', '93279e3308bdbbeed946fc965017f67a', '12', 'dat', 'dat 12', 'hinh-1508396281.jpg', 'dat@gmail.com', '11122112121', 'dat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `COMMENT_ID` int(11) NOT NULL,
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHOP_ID` int(11) DEFAULT NULL,
  `CONTENT` text COLLATE utf8_unicode_ci,
  `DATE_CREATED` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `COMMENT`
--

INSERT INTO `COMMENT` (`COMMENT_ID`, `USERNAME`, `SHOP_ID`, `CONTENT`, `DATE_CREATED`) VALUES
(102, 'Admin121212', 31, 'xin chao, minh la thuong', '2017-10-23 12:05:14'),
(103, 'Admin121212', 31, 'quan nay ngon lam', '2017-10-23 12:05:22'),
(104, 'Admin121212', 32, 'chao ban, minh la hieu', '2017-10-23 12:06:03'),
(105, 'Admin121212', 32, 'biet danh cua minh la lep xinh dep', '2017-10-23 12:06:14'),
(106, 'Admin121212', 32, 'minh khong noi la minh lep dau', '2017-10-23 12:06:21'),
(107, 'Admin121212', 34, 'xinh xinh ', '2017-10-23 12:07:46'),
(108, 'Admin121212', 34, 'dep dep', '2017-10-23 12:07:50'),
(109, 'Admin121212', 34, 'dep qua', '2017-10-23 12:07:53'),
(110, 'Admin121212', 35, 'son song c', '2017-10-23 12:10:52'),
(111, 'Admin121212', 35, 'son delete', '2017-10-23 12:11:05'),
(112, 'Admin121212', 35, 'ád', '2017-10-23 13:45:32'),
(113, 'quangadmin', 35, 'hello', '2017-10-23 14:03:08'),
(114, 'hieuxd', 36, 'th', '2017-10-23 14:04:31'),
(115, 'quangadmin', 35, 'quán này ngon nè', '2017-10-23 14:05:39'),
(116, 'quangadmin', 35, 'Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.', '2017-10-23 14:06:11'),
(117, 'quangadmin', 35, 'Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.Thất bại trước Huddersfield cùng các chiến thắng đậm của Man City, Tottenham đang đẩy Man Utd vào tình thế cực kỳ khó chịu tại Premier League.', '2017-10-23 14:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `FEEDBACK`
--

CREATE TABLE `FEEDBACK` (
  `FEEDBACK_ID` int(11) NOT NULL,
  `NAME` text COLLATE utf8_unicode_ci,
  `CONTENT` text COLLATE utf8_unicode_ci,
  `PHONE` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `RATE`
--

CREATE TABLE `RATE` (
  `RATE_ID` int(11) NOT NULL,
  `SHOP_ID` int(11) DEFAULT NULL,
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SCORE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `RATE`
--

INSERT INTO `RATE` (`RATE_ID`, `SHOP_ID`, `USERNAME`, `SCORE`) VALUES
(14, 31, 'Admin121212', 2),
(15, 31, 'Admin121212', 2),
(16, 32, 'Admin121212', 3),
(17, 32, 'Admin121212', 4),
(18, 34, 'Admin121212', 3),
(19, 34, 'Admin121212', 1),
(20, 34, 'Admin121212', 5),
(21, 35, 'Admin121212', 5),
(22, 35, 'Admin121212', 5),
(23, 31, 'quangadmin', 5);

-- --------------------------------------------------------

--
-- Table structure for table `SAVE`
--

CREATE TABLE `SAVE` (
  `SAVE_ID` int(11) NOT NULL,
  `USERNAME` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SHOP_ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SHOP`
--

CREATE TABLE `SHOP` (
  `SHOP_ID` int(11) NOT NULL,
  `SHOP_NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LAT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LNG` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DATE_CREATED` datetime DEFAULT NULL,
  `PHONE` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIME_OPEN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIME_CLOSE` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `DISCOUNT` double DEFAULT NULL,
  `ADDRESS` text COLLATE utf8_unicode_ci,
  `DETAIL` text COLLATE utf8_unicode_ci,
  `VIEW` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USERNAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `SHOP`
--

INSERT INTO `SHOP` (`SHOP_ID`, `SHOP_NAME`, `LAT`, `LNG`, `DATE_CREATED`, `PHONE`, `TIME_OPEN`, `TIME_CLOSE`, `STATUS`, `DISCOUNT`, `ADDRESS`, `DETAIL`, `VIEW`, `USERNAME`) VALUES
(31, 'Ăn Vặt 3Colu', '16.0548498', '108.2186568', '2017-10-23 09:09:04', '0905266222', '09:00 ', '22:00', 1, 10, '242 Nguyen Hoang street, DaNang City', 'Quá cũng khá rộng rãi mà đông khách lắm nên phục vụ hơi lâu. Có chỗ ngồi bên trong với cả bên ngoài nữa. Menu cũng nhiều món, giá cả vừa phải. 1 bàn như vậy hết khoảng 100k. 2 đứa ăn là khá rẻ. Bạch tuộc trứng cút ngon nhưng mà cay lắm, vừa ăn vừa uống nước liên tục mà vẫn k ăn hết được. Pizza trứng cút ngon còn bánh mì combodia thì bình thường. ', 'hinh-1508724544.jpg', 'hieuxd'),
(32, 'Khu Ẩm Thực Chợ Cồn', '16.067725', '108.2121626', '2017-10-23 09:12:10', '0905594382', '16:00 ', '19:00', 1, 0, 'Ngã 4 Ông Ích Khiêm - Hùng Vương,  Quận Hải Châu, Đà Nẵng', 'Đến Đà Nẵng mà bỏ qua chợ Cồn thì quả thực là phí quá phí. Ở chợ đến tầm chiều là vô vàn các quán ăn luôn. Quán nào cũng ngon, quán nào cũng nhiều món. Thích quán nào tạt vào quán đó là có ngay bữa xế ấm lòng ấm dạ.\r\nNghe bảo quán phá lấu đầu chợ ngon lắm nhưng mình khá no nên không ăn. \r\nVào chợ ăn bánh bột lọc, mà chả phải bột lọc, một đĩa thập cẩm linh tinh hằng hà sa số các món khác. Mà rẻ luôn. Có 20k / đĩa đầy ụ như thế.\r\nMấy bác bán hàng nhiệt tình lắm luôn.', 'hinh-1508724730.jpg', 'Admin121212'),
(34, 'Cộng Caphe', '16.0679671', '108.2212799', '2017-10-23 09:20:51', '0943622533', '07:00 ', ' 23:30', 1, 0, '39 - 41 Nguyễn Thái Học,  Quận Hải Châu, Đà Nẵng', 'Cộng là cafe bao cấp giá cũng cao cấp nốt. Tuy nhiên Cộng ở bạch đằng thì mình không vào rồi. Đơn giản vì lúc nào cũng thây đông và xô bồ.\r\nĐợt này thấy công khai trương thêm chi nhánh mới (cũng ngay gần đó luôn) mới ghê. Thôi thì thử ghé vào làm cốc cafe dừa.\r\nKhông gian theo motip chung của cộng toàn quốc với màu xanh rêu tối, ngồi cứ hơi âm u. Có điều máy lạnh phà phà cũng đã.\r\nCafe ở đây ngon, chí ít uống ở đây thoải mái hơn bên bạch đằng vì khoảng còn mới nên đỡ đông.', 'hinh-1508725251.jpg', 'Admin121212'),
(35, 'Trà Sữa TocoToco', '16.0664531', '108.2184219', '2017-10-23 09:27:42', '0943622533', '07:00 ', '22:00', 1, 0, '72 Trần Quốc Toản,  Quận Hải Châu, Đà Nẵng', 'Lần nào tới Toco TQT cũng đi một mình hết ', 'hinh-1508725662.jpg', 'Admin121212'),
(36, 'Royal Tea', '16.0524901', '108.2155045', '2017-10-23 09:30:12', '0905594382', '08:00', ' 22:40', 1, 10, '369 - 371 Hoàng Diệu,  Quận Hải Châu, Đà Nẵng', 'Hôm nay mua qua deliverynow. Bạn đó ship nhanh nên khi uống vẫn còn mát lạnh. Muốn thử lại Royaltea và nhất là trà xanh kem chese lần nữa =)) lần này mình chọn 50 đường thôi nên uống rất vừa miệng (lần trước hơi bị ngọt và tan hết đá nên kem cũng tan gần hết hic). Trân châu thì ngập mặt luôn =)). Nói chung đã thích royaltea lại ', 'hinh-1508725812.jpg', 'Admin121212'),
(37, 'GongCha', '-33.87981500000001', '151.20478500000002', '2017-10-23 13:53:02', '01283412220', '11h', '23h', 0, 10, 'Gong cha, George Street, Haymarket, New South Wales, Australia', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'hinh-1508741747.jpg', 'quangadmin'),
(38, 'popping', '16.0725251', '108.15000520000001', '2017-10-23 13:55:02', '01283412220', '7h', '22h', 0, 0, 'Popping Tea, Danang, Da Nang, Vietnam', 'Trong trận cầu đinh của vòng 9 Premier League, Liverpool đã thua thảm trên sân Tottenham vì các sai lầm liên tiếp của hàng phòng ngự.', 'hinh-1508741728.png', 'quangadmin'),
(39, 'Hi Tea!', '10.8684472', '106.61711059999993', '2017-10-23 13:56:55', '01283412220', '8h', '22h30', 0, 12, 'Hi! Tea - Milk Tea Cafe, Nguyễn Ảnh Thủ, Hiệp Thành, Ho Chi Minh, Vietnam', 'Trong trận cầu đinh của vòng 9 Premier League, Liverpool đã thua thảm trên sân Tottenham vì các sai lầm liên tiếp của hàng phòng ngự.', 'hinh-1508741815.jpg', 'quangadmin');

-- --------------------------------------------------------

--
-- Table structure for table `TYPE`
--

CREATE TABLE `TYPE` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE_NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TYPE`
--

INSERT INTO `TYPE` (`TYPE_ID`, `TYPE_NAME`) VALUES
(15, 'Coffee'),
(13, 'Nhà hàng'),
(14, 'Ăn vặt'),
(16, 'Trà sữa');

-- --------------------------------------------------------

--
-- Table structure for table `TYPE_SHOP`
--

CREATE TABLE `TYPE_SHOP` (
  `TYPE_ID` int(11) DEFAULT NULL,
  `SHOP_ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `TYPE_SHOP`
--

INSERT INTO `TYPE_SHOP` (`TYPE_ID`, `SHOP_ID`) VALUES
(14, 31),
(14, 32),
(15, 34),
(16, 35),
(16, 36),
(16, 37),
(16, 38),
(16, 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACCOUNT`
--
ALTER TABLE `ACCOUNT`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  ADD PRIMARY KEY (`FEEDBACK_ID`);

--
-- Indexes for table `RATE`
--
ALTER TABLE `RATE`
  ADD PRIMARY KEY (`RATE_ID`);

--
-- Indexes for table `SAVE`
--
ALTER TABLE `SAVE`
  ADD PRIMARY KEY (`SAVE_ID`);

--
-- Indexes for table `SHOP`
--
ALTER TABLE `SHOP`
  ADD PRIMARY KEY (`SHOP_ID`);

--
-- Indexes for table `TYPE`
--
ALTER TABLE `TYPE`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `COMMENT`
--
ALTER TABLE `COMMENT`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
  MODIFY `FEEDBACK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `RATE`
--
ALTER TABLE `RATE`
  MODIFY `RATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `SAVE`
--
ALTER TABLE `SAVE`
  MODIFY `SAVE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `SHOP`
--
ALTER TABLE `SHOP`
  MODIFY `SHOP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `TYPE`
--
ALTER TABLE `TYPE`
  MODIFY `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
