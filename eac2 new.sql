-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 06:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eac2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `name_ad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `name_ad`, `email`, `sdt`, `position`, `pass`, `img_ad`) VALUES
(1, 'Nguyễn Trường An', 'truongan123@gmail.com', '123456789', 'leader', '12345678', 'ad_an.jpg'),
(2, 'Nguyễn Đức Công', 'duccongnguyen14102001@gmail.com', '0962595677', 'member', 'duccong1410', 'ad_cong.jpg'),
(3, 'Lê Trâm Anh', 'tramanh123@gmail.com', '0922922159', 'member', 'ahnhani', 'ta.jpg'),
(4, 'Bùi Kim Ngân', 'kimngan123@gmail.com', '123456789', 'member', '12345678', 'ad_ngan.jpg'),
(5, 'Hồ Thị lan', 'lanho123@gmail.com', '123456789', 'member', '12345678', 'lan.jpg'),
(19, 'smile', 'lalala@gmail.com', '123553', 'member', '123425', 'lan.jpg'),
(26, 'smile2434', 'anisenough@yahoo.com', '123553', NULL, '111', NULL),
(27, 'kakakaka', '0Thresh0@gmail.com', '123553', NULL, '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booktour`
--

CREATE TABLE `booktour` (
  `id_kh` int(50) NOT NULL,
  `hoten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(15) NOT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `id_dd` int(10) NOT NULL,
  `id_kh_login` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booktour`
--

INSERT INTO `booktour` (`id_kh`, `hoten`, `email`, `sdt`, `diachi`, `ngaydat`, `id_dd`, `id_kh_login`) VALUES
(1, 'An n', 'lalala@gmail.com', 2131223, '122 stress, Ho Chi Minh city', '0000-00-00', 10, NULL),
(2, 'An n', '0Thresh0@gmail.com', 213124, '122 stress, Ho Chi Minh city', '0000-00-00', 3, NULL),
(3, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(4, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(5, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(6, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(7, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(8, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(9, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(10, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(11, 'An n', '0Thresh0@gmail.com', 21312444, '122 stress, Ho Chi Minh city', '2020-12-07', 3, NULL),
(12, 'Công', 'aesfaef@gmail.com', 13467465, '', '2020-12-14', 2, NULL),
(13, 'áuefbauef', 'afawef ăe', 13467465, '', '2020-12-14', 3, NULL),
(14, 'áuefbauef', 'afawef ăe', 13467465, '', '2020-12-14', 3, NULL),
(15, 'Trường An', 'truongan123@gmail.com', 962595679, '', '2020-12-15', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cm` int(11) NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `id_dd` int(11) DEFAULT NULL,
  `ngay_cm` datetime DEFAULT NULL,
  `noidung_cm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cm`, `id_kh`, `id_dd`, `ngay_cm`, `noidung_cm`) VALUES
(18, 5, 2, '2020-12-17 06:21:16', 'ewFWEFWEF');

-- --------------------------------------------------------

--
-- Table structure for table `diadiem`
--

CREATE TABLE `diadiem` (
  `id_dd` int(11) NOT NULL,
  `name_dd` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating_dd` float NOT NULL,
  `id_kv` int(11) DEFAULT NULL,
  `img_dd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view` double NOT NULL,
  `sl` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaydi` date DEFAULT NULL,
  `ngayve` date DEFAULT NULL,
  `gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diadiem`
--

INSERT INTO `diadiem` (`id_dd`, `name_dd`, `rating_dd`, `id_kv`, `img_dd`, `view`, `sl`, `trangthai`, `ngaydi`, `ngayve`, `gia`) VALUES
(1, 'Bà Nà Hill', 1.88889, 1, 'cauvang.jpg', 4, 9, 1, '2020-12-16', '2020-12-23', 122324),
(2, 'Cù Lao Chàm', 3.76922, 1, '9bc1cfd89b3654e11b05beb9534a3bd8.jpg', 4, 13, 1, '2020-12-18', '2020-12-23', 122),
(3, 'Nhà Thờ Đức Bà', 5, 2, 'nhathoducba.jpg', 0, 1, 1, NULL, NULL, 0),
(4, 'Landmark 81', 5, 2, 'landmark.jpg', 1, 1, 1, NULL, NULL, 0),
(7, 'Vịnh Hạ Long', 5, 3, 'ha-long-bay-2194608__340.jpg', 0, 1, 1, NULL, NULL, 0),
(9, 'Vinpearl Land', 4, 12, 'vinpearlland.jpg', 0, 1, 1, NULL, NULL, 0),
(10, 'Hòn Nội', 4, 12, 'nhatrang1.png', 0, 1, 1, NULL, NULL, 0),
(11, 'Hội An', 0.99, 1, 'hoian3.jpg', 0, 0, 1, NULL, NULL, 0),
(12, 'Ngũ Hành Sơn', 0.99, 1, 'nguhanhsonr2.jpg', 0, 0, 1, NULL, NULL, 0),
(13, 'Trung tâm Đà Lạt', 0.99, 13, 'dalat.jpg', 0, 0, 1, NULL, NULL, 0),
(14, 'Huế', 5, 14, 'hue.jpg', 0, 1, 1, NULL, NULL, 0),
(15, 'Ruộng bậc thang Mù Cang Chải', 0.99, 15, 'ruongbatthang.jpg', 0, 0, 1, NULL, NULL, 0),
(16, 'Thác Cam Ly', 0.99, 13, 'thaccamly1.jpg', 0, 0, 1, NULL, NULL, 0),
(17, 'Động Phong Nha', 0.99, 16, 'dongphongnha.jpg', 0, 0, 1, NULL, NULL, 0),
(18, 'Hang Sơn Đoòng', 0.99, 16, 'sondoong.jpg', 0, 0, 1, NULL, NULL, 0),
(19, 'lalalala', 0, 1, 'bongdentest.jpg', 0, NULL, 1, NULL, NULL, 0),
(23, 'sẻtggserg', 0, 1, 'doantest2.jpg', 0, NULL, 1, NULL, NULL, 0),
(24, 'ăefawef', 0, 1, 'doantest2.jpg', 0, NULL, 1, NULL, NULL, 0),
(25, 'eargearg', 0, 1, 'bongdentest.jpg', 0, NULL, 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `name_kh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_kh` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `name_kh`, `email_kh`, `sdt_kh`, `pass`) VALUES
(1, 'Hồ Thị Lan', 'hothilan@gmail.com', '123456789', '12345678'),
(2, 'Kim Ngân', 'hothilan1@gmail.com', '1234567821', '123456789'),
(3, 'Nguyễn Đức Công', 'duccong1410@gmail.com', '0962595677', 'duccong1410'),
(4, 'Trâm Anh', 'tramanh123@gmail.com', '0962595678', '12345678'),
(5, 'Trường An', 'truongan123@gmail.com', '0962595679', '12345678'),
(22, 'smile', 'lalala@gmail.com', '565768', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `khuvuc`
--

CREATE TABLE `khuvuc` (
  `id_kv` int(11) NOT NULL,
  `name_kv` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_kv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuvuc`
--

INSERT INTO `khuvuc` (`id_kv`, `name_kv`, `img_kv`) VALUES
(1, 'Đà Nẵng', 'danang.jpg'),
(2, 'TP-HCM', 'tphcm.jfif'),
(3, 'Quảng Ninh', '7359527096858a0912023af9b1feb0d1.jpg'),
(12, 'Nha Trang', 'vinpearlland.jpg'),
(13, 'Đà Lạt', 'dalat.jpg'),
(14, 'Huế', 'hue.jpg'),
(15, 'Yên Bái', 'yenbai.jpg'),
(16, 'Quảng Bình', 'quangbinh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `luotxem`
--

CREATE TABLE `luotxem` (
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `luotxem`
--

INSERT INTO `luotxem` (`view`) VALUES
(16);

-- --------------------------------------------------------

--
-- Table structure for table `noidungbocuc`
--

CREATE TABLE `noidungbocuc` (
  `id_noidung` int(11) NOT NULL,
  `noidung` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `noidung2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_noidung1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_noidung2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_right1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_right2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_food1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img_food2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img_food3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `loaifood1` text COLLATE utf8_unicode_ci NOT NULL,
  `tenfood1` text COLLATE utf8_unicode_ci NOT NULL,
  `noidungfood1` text COLLATE utf8_unicode_ci NOT NULL,
  `loaifood2` text COLLATE utf8_unicode_ci NOT NULL,
  `tenfood2` text COLLATE utf8_unicode_ci NOT NULL,
  `noidungfood2` text COLLATE utf8_unicode_ci NOT NULL,
  `loaifood3` text COLLATE utf8_unicode_ci NOT NULL,
  `tenfood3` text COLLATE utf8_unicode_ci NOT NULL,
  `noidungfood3` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `id_dd` int(11) DEFAULT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noidungbocuc`
--

INSERT INTO `noidungbocuc` (`id_noidung`, `noidung`, `noidung2`, `noidung3`, `img_noidung1`, `img_noidung2`, `img_right1`, `img_right2`, `img_food1`, `img_food2`, `img_food3`, `loaifood1`, `tenfood1`, `noidungfood1`, `loaifood2`, `tenfood2`, `noidungfood2`, `loaifood3`, `tenfood3`, `noidungfood3`, `ngaydang`, `rating`, `id_dd`, `trangthai`) VALUES
(3, 'Bà Nà được mệnh danh là “Lá phổi xanh” của miền Trung của Việt Nam…Đến với tour Bà Nà Hills 1 ngày, Quý khách sẽ thỏa thích vui chơi tại Bà Nà Hills Fantasy Park – khu vui chơi giải trí trong nhà với diện tích 21.000m2 đẳng cấp quốc tế. Đáp ứng nhu cầu v ui chơi giải trí  cùng các trò chơi vui nhộn và cảm giác mạnh phù hợp với mọi lứa tuổi. Cùng iViVu khám phá ngay hôm nay! lalalala', 'Thuộc hệ thống thương hiệu giải trí Sun World, cách trung tâm thành phố Đà Nẵng hơn 20 km, Sun World Ba Na Hills là quần thể du lịch nghỉ dưỡng kết hợp vui chơi giải trí đẳng cấp bậc nhất Việt Nam.\r\n\r\nNằm ở độ cao 1.487m so với mực nước biển, Sun World Ba Na Hills được mênh danh là “chốn bồng lai tiên cảnh”, sở hữu khí hậu tuyệt vời cùng cảnh quan thiên nhiên kỳ thú. Đến với Sun World Ba Na Hills để trải nghiệm khí hậu 4 mùa trong một ngày cùng nhiều hoạt động lễ hội, vui chơi giải trí, ẩm thực hấp dẫn đa dạng', 'Đáp ứng nhu cầu của hàng triệu du khách đến với Bà Nà, Sun World Ba Na Hills có 5 tuyến cáp treo, trong đó có nhiều tuyến đạt kỷ lục thế giới và các giải thưởng quốc tế với tổng công suất gần 7.000 khách/giờ, do hãng Doppermayer chế tạo\r\n\r\n– Suối Mơ – Bà Nà,\r\n\r\n– Debay – Morin\r\n\r\n– Thác Tóc Tiên – L’Indochine,\r\n\r\n– Hội An – Marseille,\r\n\r\n– Bordeaux- Louvre', 'doantest2.jpg', 'bana3.jpg', 'bana2.jpg', 'cauvang.jpg', 'miquang.jpg', 'bunbo.jpg', 'banhnam.jpg', 'Mì', 'Mì Quảng', 'Mì Quảng là món bạn nhất định phải ăn khi đi du lịch Đà Nẵng. Sợi mì dày và dai được làm từ bột gạo mềm thơm.', 'Món nước', 'Bún Bò Đà Nẵng', 'Bún bò bắt nguồn từ Huế nhưng khi đến với Đà Nẵng thì được thay đổi đôi chút để phù hợp với khẩu vị địa phương.', 'Bánh', 'Bánh Nậm', 'Bánh nậm được làm từ bột gạo, có hình chữ nhật, được gói trong lá chuối xanh và mỏng hơn bánh bèo. Bánh có nhân tôm bằm và thịt ba chỉ xào.', '2020-11-20', 5, 1, 1),
(4, 'Dù vẫn được coi là một hòn ngọc thô, nhưng Cù Lao Chàm đã và đang trở thành điểm đến cực kỳ hấp dẫn đối với rất nhiều du khách trong và ngoài nước mỗi khi tới Hội An.', 'Cù Lao Chàm hay còn được biết đến với tên gọi khác là Chiêm Bất Lao, có diện tích khoảng 15 km2 với hơn 2.950 dân sinh sống. Đây là một hòn đảo thuộc thành phố Hội An, tỉnh Quảng nam, nằm cách đất liền khoảng 15 km về hướng Đông. Ngoài đảo chính nơi đây còn có 8 hòn đảo nhỏ xanh mướt trải dài theo hình cánh cung, tạo nên hệ sinh thái vô cùng phong phú.', 'Tháng 3 – 8 hàng năm là thời điểm phù hợp cho chuyến tham quan. Lúc này, thời tiết ấm, nắng vàng, trong và biển lặng. Không nên đi vào các tháng còn lại vì có bão, biển động, đảo trở thành khu vực bị cô lập.\r\n\r\nNếu muốn kết hợp chuyến đi của mình với việc tham quan đèn lồng phố cổ Hội An thì các bạn nên đi vào ngày rằm các tháng âm lịch. Nhưng lưu ý ngày 14 phố cổ lung linh hơn ngày 15 nhiều.\r\n\r\nHoặc nếu muốn tham gia vào văn hóa tín ngưỡng của cư dân trên đào thì các bạn có thể chọn đi vào dịp lễ hội như: Lễ hội Cầu Ngư (ngày 3-4 tháng 4 âm lịch) hay Lễ giỗ Tổ nghề Yến (ngày 9-10 tháng 3 âm lịch).', 'dao-cu-lao-cham-ivivu-1.jpg', 'dao-cu-lao-cham-ivivu-2-1024x571.jpg', '9bc1cfd89b3654e11b05beb9534a3bd8.jpg', 'bd6db72788ab98982bb1abbdb0ba6832.jpg', 'cuada.jpg', 'ocvunang.png', 'raudang.jpg', 'Hải sản', 'Cua Đá Cù Lao Chàm', 'Món bình dân của Cù Lao Chàm gọi là cua đá vì nó sống trên các hang đá trên núi.', 'Hải sản', 'Ốc Vú Nàng', 'Ốc vú nàng là loài ốc hình chóp lệch, trên đỉnh có một cái núm nhỏ, vỏ ngoài màu đen xám, mặt trong lấp lánh xà cừ', 'Rau', 'Rau Rừng', ' rau rừng mọc hoang ở các chân núi, khá phong phú về chủng loại: rau dớn, rau sân, rau lủi, mã đề…', '2020-11-20', 5, 2, 1),
(5, 'Là một dự án của tập đoàn Vingroup, Landmark 81 được khai trương vào tháng 7.2018. Với chiều cao là 470m tính đến ăng ten, đây hiện là tòa nhà cao nhất Việt Nam. Trước đó kỷ lục này thuộc về tòa nhà Keangnam Hanoi Landmark Tower với chiều cao 345m (tính đến ăng ten). Hiện Landmark 81 cũng đang là tòa nhà cao nhất Đông Nam Á, trước đó danh hiệu này thuộc về tòa tháp Twin Tower ở Malaysia với chiều cao 452m. Landmark 81 SkyView nằm trọn ở 3 lầu cao nhất của Landmark 81 sẽ đem đến cho các bạn rất nhiều trải nghiệm thú vị. Để lên Đài Quan Sát, bạn sẽ được đi từ tầng B1 lên tầng 79 với thang máy đặc biệt có vận tốc siêu nhanh là 8m/s nha.', 'Land Mark 81 là tòa nhà cao thứ 8 thế giới kể từ lúc công bố nhưng đến bây giờ đã tụt xuống hạng thứ 17 rồi. Tòa nhà được khởi công xây dựng từ tháng 12/2016 và cất nóc vào tháng 2/2018, chỉ trong vòng 1.000 ngày, người Việt chúng ta đã xây dựng nên một công trình lịch sử, sánh vai với các nước giàu mạnh khác. Lúc đầu đơn vị trúng thầu xây dựng là Lotte Group nhưng Coteccons được ông Phạm Nhật Vượng tạo cơ hội để người Việt khẳng định tài năng của mình. Tòa nhà được đánh giá là công trình có tiến độ xây nhanh nhất, chỉ mất 3,5 ngày để hoàn thiện 1 tầng sàn.Vị trí: Tòa nhà này nằm trong khu Vinhomes Central Park trên trục đường Nguyễn Hữu Cảnh giao với Xa lộ Hà Nội. ', 'Cảm nhận ban đầu của  khi đặt chân đến tòa tháp này đó là hoành tráng. Cái sự cao của nó thì không nói rồi nhưng cái hoành tráng được tạo dựng bởi những căn chung cư Vinhomes san sát ở bên tòa tháp này. Cảm tưởng như đang đi trong một khu rừng khổng lồ và chúng ta như những chú bé tí hon vậy. Tiếp theo là đông quá chừng đông. Do là ngày khai trương nên người dân hiếu kỳ đổ về đây rất đông. Đoạn đường nhỏ để vào Tòa tháp và chỗ để xe đầy xe máy, grab, taxi và những người điều hướng với tiếng còi ing ỏi. Thật nhộn nhịp, tấp nập và cũng không kém phần thú vị. Có vẻ như mặt trước tòa tháp đã hoàn thiện nhưng ở phần đuôi phía sau vẫn tiếp tục được thi công.', 'kinh-nghiem-tham-quan-landmark-81-skyview-2.jpg', '9fe178682a92ee0a0396d06abd2cbb8b.jpg', '1c072f2ebf1981657d6ecdea81a3447a.jpg', 'f8901e8af1fd97a5b8dc09ed26d71886.jpg', 'bokobe.jpg', 'lauhotpot.jpg', 'che.jpg', 'Thịt', 'Bò KoBe', 'Bò Kobe ở Kohaku Sashimi & Yakiniku rất tươi ngon.Đây là nhà hàng chuyên các món ăn đặc trưng của Nhật Bản như sushi, sashimi. Một trong những mục nổi bật nhất ở đây là bữa tiệc thịt nướng Yakiniku Nhật Bản với mức giá 350.000đ – 500.000đ/ người.', 'Lẩu', 'Lẩu Khao Lao', 'Khao Lao là nhà hàng rất độc đáo, chuyên về ẩm thực của xứ sở Lào. Những món ăn nổi bật ở đây là xôi Lào, lạp vịt, xúc xích Lào, cá nựng chanh, thịt heo một nắng chiên, tằm mặc hùng, cá chiên Mê Kong, lẩu cá nghịch nước chua cay...', 'Khai Vị', 'Chè Hạt Sen', 'Gánh là nhà hàng chuyên về các món ăn của thành phố biển Nha Trang của Việt Nam. Nhà hàng này được xây dựng dựa trên ý tưởng về những đôi quang gánh truyền thống của người Việt dân dã.', '2020-11-20', 5, 4, 1),
(6, 'Nhà thờ Đức bà tọa lạc tại quận 1 nơi rất nhiều du khách từ khắp các nước du lịch đến đây đều thích ghé qua chiêm ngưỡng kiến trúc cổ kính tuyệt đẹp. Các bạn có thể chụp choạt sống ảo lên view cực đẹp nha, chụp khi nắng lên sẽ càng đẹp hơn nữa không cần chỉnh effect luôn, cả phía trước và phía sau nhà thờ các bạn đều có thể chụp được. Đi vài lần mình vẫn thắc mắc không biết có thể đi vào bên trong tham quan được không nhỉ. Kế nhà thờ còn có công viên, đứng đó bạn có thể nghe thấy mọi thứ tiếng từ Anh, Pháp, Hàn, Trung,.. ', 'Tòa thánh đường được thiết kế đặc biệt, có thể chịu tới gấp 10 lần toàn bộ kiến trúc ngôi nhà thờ bên trong. Nội thất bên trong được thiết kế gồm một lòng chính, hai lòng phụ, tiếp đến là 2 dãy nhà nguyện. Toàn bộ chiều dài của thánh đường là 93m, chiều rộng nhất lên tới 35m, chiều cao của mái vòm là 21m. Với thiết kế này, thánh đường có sức chứa có thể đạt tới 1.200 người.Các bàn thờ ở bên trong đều được khắc tinh tế bằng đá cẩm thạch nguyên khối. 56 ô cửa kính nhiều màu sắc ghép lại với nhau tạo nên hình ảnh rất đẹp. Tất cả các đường nét, gờ chỉ, hoa văn đều tuân thủ theo hình thức Roman và Gothic tôn nghiêm và trang nhã.', 'Công viên là khuôn viên bên ngoài mặt trước tòa thánh đường. Trung tâm của công viên là bức tượng Đức Mẹ Hòa Bình, do điêu khắc G.Ciocchetti thực hiện vào năm 1959. Bức tượng cao 4.6m, nặng 8 tấn, bằng đá cẩm thạch trắng của Ý. Tượng Đức Mẹ trong tư thế đứng thẳng, tay cầm trái địa cầu, trên trái địa cầu có đính cây thánh giá, mắt Đức Mẹ đăm chiêu nhìn lên trời như cầu nguyện hòa bình cho người dân và đất nước Việt Nam.Nhà thờ Đức Bà không chỉ là một kiến trúc nghệ thuật nổi tiếng mà còn là nhân chứng lịch sử của Sài Gòn. Tồn tại từ những năm kháng chiến chống Pháp, luôn đứng sừng sững chứng kiến mọi biến động, sự thay đổi và phát triển của thành phố Hồ Chí Minh cũng như Việt Nam. Nơi đây luôn luôn thu hút hàng triệu khách du lịch trong và ngoài nước hàng năm.', 'ben-tron.png', '17b9afcc53b24c35babfdb62c8289e0f.jpg', '90ae1bd8336eb34a3d8c487f746450d5.jpg', '8a55f8e2c4d3e40e39a5cd8e1a272f90.jpg', 'banhcan.jpg', 'banhcanh.jpg', 'banhtrang.jpg', 'Bánh', 'Bánh Căn', 'Bên trong hẻm và cũng là món quầy được săn đón nhất ở đây là quầy bánh canh bánh căn. 20k cho 1 phần, ăn no căn bụng.', 'Món nước', 'Bánh Canh Chả Cá', '1 phần bánh canh như vậy chỉ 20k nhưng rất chất lượng, có chả cá, trứng cút và gà xé nữa.', 'Ăn Vặt', 'Bánh Tráng Trộn', 'Món ăn vặt được yêu thích nhất của giới trẻ hiện nay. Một phần bánh tráng trộn với giá chỉ 20k gồm trứng cút, khô bò, xoài, ... siêu chất lượng.', '2020-11-20', 5, 3, 1),
(7, 'Vịnh Hạ Long – được Unesco nhiều lần công nhận là di sản thiên nhiên của thế giới với hàng nghìn hòn đảo được làm nên bởi tạo hoá kỳ vĩ và sống động. Vịnh Hạ Long có phong cảnh tuyệt đẹp nên nơi đây là một điểm du lịch rất hấp dẫn với du khách trong nước và quốc tế.', 'Những điểm dừng chân nổi tiếng trên vịnh phải kể đến: đảo Titop, hang Sửng Sốt, Động Thiên Cung, Đầu Gỗ, động Mê Cung, hang Tiên Ông… Đặc biệt các chuyến tàu thăm quan vịnh đều đi qua hòn Trống Mái – biểu tượng của vịnh Hạ Long nói riêng và tỉnh Quảng Ninh nói chung. Tới đây, bạn có thể thoải mái check-in với những bức ảnh tuyệt đẹp.\r\n\r\nTrong hành trình tham quan trên vịnh, đừng nên bỏ đảo Soi Sim. Đây là hòn đảo nhỏ nằm ở phía Tây Nam trong quần thể danh lam thắng cảnh Hạ Long, cách đảo Ti Tốp chưa tới 700m. Trong hành trình này, bạn có thể kết hợp tham quan những địa điểm khác như: hang Sửng Sốt, hang Bồ Nâu, động Mê Cung, hang Luồn…\r\n\r\nĐảo Soi Sim là nơi duy nhất trên vịnh còn cây sim mọc hoang dại. Vào mùa hè, du khách có thể tham quan cảnh biển, ngắm hoa sim nở. Điểm du khách yêu thích nhất khi tới đảo chính là bãi tắm tự nhiên với nước biển trong bắt, bãi biển dài.\r\n\r\nNếu đi theo đoàn, đừng quên mang theo tấm bạt cùng chút đồ ăn nhẹ. Bạn sẽ được thưởng thức một bữa tiệc tuyệt vời trên bãi biển. Còn với những bạn trẻ ưa mạo hiểm, thích cảm giác mạnh, có thể khám phá trò mô tô nước lượn vòng quanh đảo.', 'Tham quan vịnh Hạ Long nhất định không thể bỏ qua làng chài Cửa Vạn. Đây là một trong nhiều làng chài nổi tiếng lâu đời trên vịnh Hạ Long. Du khách không chỉ được đắm mình trong không gian êm ả, thanh bình, ngắm nhìn những ngôi nhà gỗ nhỏ trên mặt nước yên bình mà còn được tìm hiểu đời sống văn hoá của ngư dân, được học cách chèo thuyền, giăng lưới, thả câu bắt tôm cá… Bạn cũng có thể mua những đồ hải sản tươi ngon tại đây. Các làng chài hiện giờ đa phần người dân đã được di dời ổn định cuộc sống trên bờ nhưng vẫn còn các hoạt động nuôi trồng hải sản, dịch vụ chèo thuyền tham quan cho khách du lịch nên vẫn là điểm tham quan độc đáo trong hành trình thăm vịnh Hạ Long.  Đi xa hơn một chút, có thể tham quan vịnh Bái tử Long, vịnh Hạ Lan, hay đến đảo Cát Bà. Để có thể trải nghiệm một cách tốt nhất, du khách nên thuê tàu ngủ đêm trên vịnh với tour 1 ngày, 2 ngày hoặc 3 ngày.  Những du thuyền chất lượng 5 sao được đánh giá cao: du thuyền Athena, du thuyền Huong Hai Sealife,  du thuyền Paradise Elegance, du thuyền Đông Dương (Indochina Junk), du thuyền Alisa hay du thuyền Âu Cơ…. Tại đây, bạn sẽ được hưởng những dịch vụ chất lượng tốt nhất, nghỉ đêm tại những phòng hạng sang. Cùng với đó là tham gia các hoạt động theo tour như chèo thuyền kayak, ngắm cảnh, thăm làng chài và thưởng thức hải sản… Tuy nhiên, để trải nghiệm các dịch vụ cao cấp này, bạn cần bỏ qua một khoản chi phí đáng kể. (> 2.500.000 VND/ người cho một hành trình 2 ngày 1 đêm trên du thuyền)', 'hl1.jpg', 'vinh ha long.jpg', '22a04a0d66894732c2841f1f9b1eb54a.jpg', 'eba8a84e2f63d382c417fc09dc5e91f6.jpg', 'xoitrang.jpg', 'sambien.jpg', 'gadoi.jpg', 'Ăn vặt', 'Xôi Trắng Chả Mực', ' Chả mực là cái tên không quá xa lạ với người yêu ẩm thực; tuy nhiên, mực Hạ Long sừng sực và ngọt thịt hơn hẳn những vùng khác.', 'Món nướng', 'Sam Biển', 'Sam Biển là gợi ý tiếp theo. Sam Biển có thịt thơm, độ ngọt và dai vừa phải,Sam được chế biến thành nhiều món như: riêu sam, chả sam, trứng sam, nộm sam. ', 'Thịt', 'Gà Đồi Tiên Yên', 'Gà Đồi Tiên Yên vốn nổi tiếng về thịt săn chắc, thơm và béo mềm mà không gây ngán. Gà luộc ăn kèm với cơm và nước chấm bí truyền ', '2020-11-25', 5, 7, 1),
(9, 'Vinpearl Land Nha Trang hay Khu du lịch Hòn Ngọc Việt (tên cũ cho đến tháng 12 năm 2006) là một khu du lịch nghỉ dưỡng sang trọng nằm ở đảo Hòn Tre, phường Vĩnh Nguyên, thành phố Nha Trang, tỉnh Khánh Hòa. Đơn vị chủ quản là Công ty Cổ phần Vinpearl thành lập năm 2001, lên sàn chứng khoán HOSE từ năm 2008 và là thành viên của tập đoàn Vingroup. Đặc biệt, Vinpearl Land Nha Trang là nơi vinh dự đăng cai tổ chức cuộc thi Hoa hậu Hoàn vũ 2008 và Hoa hậu Trái Đất 2010.', 'Ngoài những phương tiện đi lại như canô ta-xi, tàu cao tốc và phà, khách tham quan còn có thể sang đảo Hòn Tre bằng hệ thống cáp treo dài 3320 mét, cáp treo vượt biển dài thứ hai Việt Nam với 9 cột trụ trên biển và đất liền có hình dáng và cấu trúc giống tháp Eiffel, vào ban đêm sẽ được thắp sáng bằng laser. Hệ thống này có thể chuyên chở từ 1000 đến 1500 người một giờ, giúp cho việc qua lại giữa đảo và đất liền được dễ dàng hơn.', 'Được đánh giá là một trong những tuyến cáp treo vượt biển dài nhất thế giới (cho đến năm 2018).Cáp treo Vinpearl Land được khởi công xây dựng vào tháng 4 năm 2006 và khai trương vào ngày 10 tháng 3 năm 2007. Tuyến cáp này dài 3,32km, điểm cao nhất là 54m với chiều cao trung bình là 45m so với mặt nước biển. Tuyến được nối với nhau bởi bảy trụ trên biển, hai trụ trên bờ và hai nhà ga đặt tại hai đầu Nha Trang và Hòn Tre. Sự thông suốt vận chuyển được đảm bảo nhờ 47 cabin 8 chỗ, rút ngắn thời gian di chuyển còn 9 phút 20 giây và có thể hoạt động ở điều kiện gió cấp 7.', 'vinpearlland.jpg', 'vinpearlland1.jpg', 'vinp1.jpg', 'vinp2.jpg', 'nem.jpg', 'bunsua.jpg', 'mucrim.jpg', 'Ăn vặt', 'Nem Ninh Hòa', 'Nem Ninh Hòa  nướng này nổi danh, trở thành thương hiệu cho vùng đất Ninh Hòa – Nha Trang là nhờ vào công thức chế biến riêng của người dân nơi đây.', 'Món nước', 'Bún Sứa', 'Bún sứa là món ăn thứ hai trong thực đơn những món ăn ngon Nha Trang là hương vị của biển cả nhờ vào nước dùng ngọt từ cá và các nguyên liệu hải sản ăn kèm cũng vô cùng phong phú.', 'Ăn vặt', 'Mực Rim', 'Cũng giống như nem chua, mực rim cũng là một trong những đặc sản Nha Trang thường được mua về làm quà tặng sau mỗi chuyến du lịch.', '2020-11-27', 5, 9, 1),
(10, 'Hội An là một thành phố trực thuộc tỉnh Quảng Nam, Việt Nam.\r\nPhố cổ Hội An từng là một thương cảng quốc tế sầm uất, gồm những di sản kiến trúc đã có từ hàng trăm năm trước, được UNESCO công nhận là di sản văn hóa thế giới từ năm 1999. la', 'Theo ông Nguyễn Văn Dũng, Phó chủ tịch UBND Hội An, tính từ năm 2007 đến 2014, tại bờ biển Hội An dọc Cửa Đại lên đến gần Thị xã Điện Bàn, biển đã lấn sâu vào bờ 150m. Dọc bãi biển này, trước đây là cả một rừng cây dương liễu, đã bị các doanh nghiệp cho san bằng toàn bộ, khi họ xây dựng các resort, khách sạn dọc bờ biển, đã đưa đến tình trạng này.', 'Hội An trở thành thành phố vào tháng 1 năm 2008 trên cơ sở toàn bộ diện tích tự nhiên, dân số và các đơn vị hành chính trực thuộc của thị xã Hội An, với 6.148 ha, 122.000 nhân khẩu\r\nHiện nay trên địa bàn thành phố Hội An đã và đang hình thành một số khu đô thị mới như khu đô thị Time Hoi An, khu đô thị New Hoi An City, khu đô thị Trảng Kèo...\r\nTheo thống kê năm 2019, thành phố Hội An có diện tích là 61,48 km² và có dân số là 98.599 người: trong đó dân số thành thị là 72.898 người chiếm 75%, dân số nông thôn là 25.701 người chiếm 26%, mật độ dân số đạt 1.604 người/km².\r\nHội An là đô thị lớn thứ hai của Quảng Nam. Tỷ lệ đô thị hoá của Hội An đã đạt khoảng 75%.', 'hoian.jpg', 'hoian1.jpg', 'hoianr1.jpg', 'hoianr2.jpg', 'caolau.jpg', 'comhen.jpg', 'banhvac.jpg', 'Món nước', 'Cao Lầu Hội An', 'Không quá lời nếu bảo rằng nếu chưa ăn cao lầu thì xem như chưa từng đến Hội An.', 'Cơm', 'Cơm Hến', 'Nhiều du khách Hàn Quốc nói vui rằng cơm hến chính là bibimbap của người Việt.', 'Bánh', 'Bánh Vạc', 'Vào những chiều trời mưa rả rích, thưởng thức một dĩa bánh vạc nóng hổi và ngắm phố xá lên đèn thì còn gì thi vị bằng.. ', '2020-11-30', 5, 11, 1),
(11, 'Ngũ Hành Sơn (chữ Hán: 五行山) hay núi Non Nước là tên của một danh thắng gồm 5 ngọn núi đá vôi nhô lên trên một bãi cát ven biển, trên một diện tích khoảng 2 km². Ngũ Hành Sơn gồm các ngọn núi: Mộc Sơn, Thủy Sơn (lớn, cao và đẹp nhất), Thổ Sơn, Kim Sơn và Hỏa Sơn (có hai ngọn là Dương Hỏa Sơn và Âm Hỏa Sơn), nằm cách trung tâm thành phố Đà Nẵng khoảng 8 km về phía Đông Nam, ngay trên tuyến đường Đà Nẵng - Hội An; nay thuộc phường Hòa Hải, quận Ngũ Hành Sơn, thành phố Đà Nẵng.\r\nNgày 22 tháng 3 năm 1990, khu danh thắng này đã được Bộ Văn hóa (nay là Bộ Văn hóa, Thể thao và Du lịch) ra quyết định công nhận là Di tích Lịch sử Văn hóa cấp Quốc gia.', 'Theo một số người, tên Ngũ Hành Sơn không những mang tính hoa mỹ hơn, mà người đặt ra nó đã dựa vào thế đất, thế núi và có kết hợp các yếu tố cơ bản của thuyết âm dương-ngũ hành. Tuy nhiên, ở cuối thế kỷ 19, một nhà nghiên cứu người Pháp là Albert Sallet, thì lại dựa vào chất liệu của núi đá để đặt tên cho thắng cảnh là \"Les montagnes de marbre\" (Những ngọn núi đá cẩm thạch).\r\n\r\nNgoài ra, Ngũ Hành Sơn còn có các tên khác như: Ngũ Uẩn Sơn, Ngũ Chỉ Sơn,...', 'Dưới chân ngọn Thủy Sơn là các cơ sở điêu khắc đá mỹ nghệ phát triển từ các làng nghề có tuổi đời trên 400 năm, tổ nghề là Huỳnh Bá Quát, tiên tổ của Đô ngự sử Huỳnh Bá Chánh. Từ các loại đá cẩm thạch có ở Ngũ Hành Sơn, người thợ đã chế tác các tác phẩm tinh xảo. Đá núi ở đây cũng đã từng góp phần trang trí Lăng Chủ tịch Hồ Chí Minh.[16]\r\n\r\nThời gian gần đây, để bảo vệ di tích và cảnh quan khu danh thắng, chính quyền thành phố Đà Nẵng đã ra lệnh cấm khai thác đá trên núi. Không thể để làng nghề mai một, những nghệ nhân có tâm huyết với nghề đã tìm được hướng đi mới. Họ đã bỏ công đi khắp trong nước để tìm nguồn nguyên liệu phù hợp.', 'nguhanhson1.jpg', 'nguhanhson.jpg', 'nguhanhsonr1.jpg', 'nguhanhsonr2.jpg', 'banhxeo.jpg', 'chaovit.jpg', 'cake.jpg', 'Bánh', 'Bánh Xèo Cô Mười', 'Bánh xèo Cô Mười là quán ăn ngon ở Ngũ Hành Sơn phục vụ món bánh xèo Quảng Ngãi, giá cả phải chăng..', 'Cháo', 'Cháo Vịt Thủy', ' thịt vịt ở đây thơm ngon, được chế biến sạch sẽ, cháo ở đây cũng có hơng vị đậm đà, thơm ngon. ', 'Ăn vặt', 'Cà Kê Quán', 'các món ăn ở đây rẻ và độc đáo. Cà Kê Quán nổi tiếng có món bún đậu mắm tôm. Chén mắm tôm ở đây được pha đậm đà, thơm và cuốn hút cùng đủ các loại bún, đậu, lòng, chả… tạo nên món ăn thơm ngon, bắt mắt.', '2020-11-30', 5, 12, 1),
(12, 'Đà Lạt là một trong những thành phố lãng mạn và  êm ả. Thành phố ẩn mình giữa những khu rừng thông bao phủ. Không  những thế thành phố cũng được ẩn mình trong một con hồ mang tên là hồ Xuân Hương. Đây được mệnh danh là một trong những  thành phố có rất nhiều địa điểm du lịch hấp dẫn thú vị. Thu hút đông đảo các du khách đủ mọi tầng lớp, lứa tuổi đến tham quan.', 'Nét đẹp mộc mạc và giản dị ấy. Như đại diện cho bản chất của con người cũng như mành đất Tây Nguyên nơi đây. Hòa vào vẻ đẹp mộc mạc và giản dị ấy là  bầu không khi mát mẻ trong lành và thoáng mát quanh năm.', 'Không chỉ dừng lại ở đó. Mà tại Đà Lạt luôn nổi lên những địa điểm du lịch rất mới và rất thú vị đối với du khách. Chính vì thế mà các du khách  đã đến Đà Lạt rồi , vẫn muốn đến lại lần hai , lần ba.', 'dalat1.jpg', 'dalat2.jpg', 'dalatr1.jpg', 'dalatr2.jpg', 'banhuot.jpg', 'laubo.jpg', 'oc.jpg', 'Món Nước', 'Bánh Ướt Lòng Gà', ' Bánh ướt lòng gà bất kì một ai khi lên Đà Lạt cũng đều phải ghé đến quán bánh ướt lòng gà.', 'Lẩu', 'Lẩu Bò Ba Toa', ' những ngày đông se lạnh, trời thì mưa lả tả, du khách dừng lại bên hiên nhà gỗ và thưởng thức một nồi lẩu bò thơm ngát.', 'Ăn vặt', 'Ốc Nhồi Thịt', 'Đây là một món ăn khá nổi tiếng tại Đà Lạt. Đây là một món ăn có giá khá cao. Nhưng vẫn được xếp vào top 10 món ăn ngon Đà Lạt. Vì nó là đặc sắc của ẩm thực Đà Lạt. ', '2020-11-30', 5, 13, 1),
(13, 'Từ thời chúa Nguyễn thế kỷ 19, Huế đã là một vùng đất hứa với nền văn hoá đậm đà bản sắc dân tộc cũng như “cái nôi” ẩm thực phong phú, độc đáo không nơi nào sánh bằng. \r\nDù đi đâu khắp đất nước Việt Nam cũng đừng quên ghé lại mảnh đất cố đô huế nhé. Huế là thành phố yên bình, cổ kính với những di sản, công trình kiến trúc mang đậm dấu ấn lịch sử nước nhà.\r\n\r\n', 'Thừa hưởng vẻ đẹp kiến trúc di sản của triều đại nhà Nguyễn, kế thừa nét đẹp trong văn hóa phong tục Hoàng Cung, Huế đã hội tụ đủ và sâu để du khách khi đặt chân đến đây cũng phải gật gù. Nếu tâm hồn của du khách đủ sâu, tĩnh lặng hoặc đang muốn tìm lại sự yên bình thì Huế chính là địa điểm giúp bạn sống chậm, hiểu sâu và tái tạo năng lượng cho bạn. ', 'Ai ai đến Huế cũng sẽ ngỡ ngàng: “Huế cái gì cũng không có” nhưng mà nếu bạn nhìn chậm lại và sống chậm lại hơn nhịp sống hàng ngày của mình sẽ thấy rằng “Huế – cái gì cũng có mà không có nơi nào có được”. ', 'hue.jpg', 'hue1.jpg', 'huer1.jpg', 'huer2.jpg', 'banhhue.jpg', 'nemlui.jpg', 'comamphu.jpg', 'Bánh', 'Bánh Huế', 'Nếu đến Huế, ghé chợ Đông Ba các bạn nên thử thưởng thức một đĩa bánh ở đây, các bạn sẽ ngạc nhiên cho coi. Mỗi dĩa bánh sẽ có đủ các loại bánh đặc sản của Huế như bánh bèo, bánh nậm, bánh ram ít.', 'Ăn vặt', 'Nem Lụi', 'Nem lụi ăn một lần rồi bạn sẽ muốn ăn lần 2, lần 3… rồi lần nào đến Huế cũng muốn thưởng thức món này, thậm chí đến về nhà rồi vẫn muốn tìm kiếm quán nem lụi nào đó cho thật giống hương vị ở Huế.', 'Cơm', 'Cơm Âm Phủ', 'Một món ăn ngon ở Huế mà có cái tên khá lạ, gây nhiều tò mò cho khách du lịch với câu nói “Muốn ăn cơm dĩa trữ tình, có quán Âm phủ ma rình phía sau” là món Cơm Âm phủ. Nhưng có thể nói món ăn này hấp dẫn từ hình thức cho tới hương vị. ', '2020-12-02', 5, 14, 1),
(14, 'Những ngày này, dân mê du lịch đang háo hức chia sẻ hình ảnh về bãi tắm đôi Hòn Nội - Đảo Yến ở Nha Trang. Cảnh sắc tuyệt đẹp nơi đây thực sự khiến những đôi chân ham đi không thể chối từ...\r\nNhắc tới Nha Trang chắc chắn người ta sẽ nghĩ ngay tới biển rồi, cách đây một quãng thời gian thì sự phát hiện đầy lý thú về đảo Điệp Sơn đã khiến cho du lịch Nha Trang thêm mới mẻ hơn. Thậm chí Điệp Sơn còn được mệnh danh là hòn đảo hot nhất hè này nữa.', 'Hòn Nội vốn nổi tiếng với bãi tắm đôi cực độc đáo. Cùng một bờ cát trắng mịn, nhưng lại có đến 2 bãi tắm nước trong vắt ở hai bên. Nếu như quan sát từ trên cao xuống du khách mới có thể chiêm ngưỡng được trọn vẹn cảnh sắc vô cùng tuyệt đẹp này.\r\nMen theo những bậc thang đá để lên đỉnh núi Du Hạ cao khoảng 90m, các bạn sẽ được thu vào tầm mắt bức tranh thiên nhiên có núi, có biển bao la cực lãng mạn của Đảo Yến này.\r\n', 'Gần gần đây, dân mê du lịch Nha Trang lại đang háo hức chia sẻ những hình ảnh về một bãi tắm đôi cực đặc biệt. Phải thừa nhận là ngắm những hình ảnh được chụp từ trên xuống, bao quát được khung cảnh một bờ cát trắng - hai bãi tắm xanh trong nơi đây, người ta mới thấy thiên nhiên thực sự quá vi diệu! Và sự vi diệu đó đã được ban tặng cho Nha Trang, bãi tắm đôi được nhắc tới đây chính là Hòn Nội.', 'honnoi.jpg', 'honnoi1.jpg', 'hoinoir1.jpg', 'hoinoir2.jpg', 'haisan.jpg', 'goica.jpg', 'buncha.jpg', 'Hải sản', 'Hải Sản Nha Trang', '“lò nuôi hải sản” ở làng chài thưởng thức các món ăn tươi sống.', 'Gỏi', 'Gỏi Cá Mai', 'Gỏi cá mai một loại món ăn ngon nổi tiếng và có thể tìm thấy ở bất cứ quán ăn dù là bình dân hay các nhà hàng sang trọng ở Nha trang. ', 'Món Nước', 'Bún Chả Cá', 'Bún chả cá ở Nha Trang với sợi bún thanh mảnh, hơi dai, chả cá được làm từ cá thu, cá mối, cá cờ tươi rói, giòn dai và nước dùng trong vắt được ninh từ xương, đầu cá tươi và xương heo.', '2020-12-02', 5, 10, 1),
(15, 'Ruộng bậc thang Mù Cang Chải là những ruộng bậc thang nằm trên các sườn núi, lớp nọ gối tiếp lớp kia với diện tích khoảng 2.200 ha ở huyện Mù Cang Chải, Yên Bái. Năm 2007, 500 ha diện tích ruộng bậc thang thuộc 3 xã La Pán Tẩn, Chế Cu Nha, Dế Xu Phình được xếp hạng là di tích quốc gia như là một trong những danh thắng độc đáo bậc nhất tại Việt Nam.', 'Mù Cang Chải đẹp nhất trong năm vào hai dịp, khi những thửa ruộng vào mùa đổ nước (khoảng tháng 5 tháng 6, là thời điểm người dân đắp đập, ke bờ, dẫn nước vào ruộng để chuẩn bị cày ải, gieo mạ và cấy lúa) và vào mùa lúa chín (khoảng tháng 9 tháng 10).', 'Năm 2018, Tuần Văn hóa - Du lịch Mường Lò và Lễ hội khám phá Danh thắng Quốc gia ruộng bậc thang Mù Cang Chải sẽ diễn ra từ ngày 21 đến ngày 25/9.', 'ruongbatthang.jpg', 'ruongbatthang1.jpg', 'ruongbatthangr1.jpg', 'ruongbatthangr2.jpg', 'cachep.jpg', 'thitheo.jpg', 'taomeo.jpg', 'Hải sản', 'Cá Chép', 'đây là món truyền thống được đưa vào khẩu phần ăn cho khách du lịch thể hiện nét đẹp văn hóa truyền thống của người dân nơi đây', 'Thịt', 'Lợn Nướng', 'thịt chắc, hương thơm đặc trưng quyến rũ. Món thịt lợn kẹp cây rừng nướng, là món ăn ngon cuốn hút mọi thực khách phương xa.', 'Trái Cây', 'Táo Mèo', 'Lên Mù Cang Chải, Yên Bái du khách sẽ bắt gặp nhiều nơi bày bán loại quả hình trứng, thích mắt, đó là quả táo mèo.', '2020-12-02', 5, 15, 1),
(16, 'Thác Cam Ly là thác trên sông Cam Ly ở Phường 5 thành phố Đà Lạt. Thác cách khu Hòa Bình 2,3 km về phía đông - nam.\r\nCam Ly ở gần trung tâm thành phố Đà Lạt, nằm trên thượng nguồn sông Cam Ly, cách khu Hòa Bình 2,3 km về phía đông - nam.\r\nVị trí cách trung tâm thành phố Đà Lạt 2km về phía Tây\r\n', 'Thác mùa mưa nước chảy cuồn cuộn, từng khối nước khổng lồ đổ xuống dữ dội, nhờ vị trí gần trung tâm thành phố nên du khách thường ghé thăm.', 'Dưới chân thác là một vườn hoa nhỏ. Phong cảnh chung quanh thác không còn hoang vu như ngày xưa mà đã trở nên đẹp hơn, đó là 1 sự hòa hợp của thiên nhiên. Trong khu vực thác có lăng Nguyễn Hữu Hào với nhiều kiến trúc độc đáo.', 'thaccamly.jpg', 'thaccamly1.jpg', 'thaccamlyr1.jpg', 'thaccamlyr2.jpg', 'donuong.jpg', 'lauga.jpg', 'chevung.jpg', 'Món nướng', 'Đồ Nướng', 'là món lôi cuốn khách du lịch khi nhắc đến ẩm thực Đà Lạt.  Một số quán còn bán đồ nướng ngon xuất sắc rất đáng để ghé qua.', 'Lẩu', 'Lẩu Gà Lá É', 'Lẩu gà lá é bạn phải thưởng thức món ăn này tại đây bạn mới cảm nhận được hết độ ngon của nó.', 'Ăn vặt', 'Chè Vừng Nóng', 'Thêm một món ăn Đà Lạt hay ho khác là chè vừng đen thơm vị vừng, ngọt nhẹ, thoảng mùi dứa vô cùng quyến rũ.', '2020-12-02', 5, 16, 1),
(17, 'Động Phong Nha là danh thắng tiêu biểu nhất của hệ thống hang động thuộc quần thể danh thắng Phong Nha – Kẻ Bàng. Phong Nha được bình chọn là một trong những hang động đẹp nhất thế giới với các tiêu chí: Sông ngầm dài nhất, Hồ nước ngầm đẹp nhất. Cửa hang cao và rộng nhất, Các bãi cát, bãi đá ngầm đẹp nhất, Hang khô rộng và đẹp nhất, Hệ thống thạch nhũ kỳ ảo và tráng lệ nhất, Hang động nước dài nhất. Động Phong Nha là một điểm đến được nhiều du khách lựa chọn trong chuyến du lịch Quảng Bình.', 'Động Phong Nha dài 7.729m. Cửa động rộng 20-25m, cao khoảng 10m . Thuyền tắt máy, người chèo thuyền dùng sào đưa thuyền lặng lẽ tiến vào trong lòng động Phong Nha. Cửa động hình thang, cao chừng 10 mét, rộng 20-25 mét. Lọt vào trong động, cảm giác oi nồng của mùa hè nơi miền Trung gió Lào lập tức biến mất.', 'Chứng kiến những hình ảnh kỳ lạ của tạo hóa thiên nhiên, mỗi du khách không khỏi xúc động trước vẻ đẹp của thạch nhũ. Cái đẹp mang những hình dáng vô cùng hoang sơ nhưng mang tính kỳ dị và luôn biết cách thu hút mọi ánh mắt của du khách dồn về phía mình với những hình thù kỳ dị nguyên sơ mà trí tưởng tượng của con người tha hồ gán cho chúng biết bao huyền thoại, sự tích… Khó có thể mô tả vẻ đẹp hùng vĩ của những buồng, những hành lang đá vôi phủ đầy thạch nhũ long lanh dưới ánh đuốc của dòng sông ngầm.', 'dongphongnha.jpg', 'dongphongnha1.jpg', 'dongphongnhar1.jpg', 'dongphongnhar2.jpg', 'cachinh.jpg', 'chaobanhcanh.jpg', 'lauca.jpg', 'Hải sản', 'Cá Sông Son', 'đừng quên thưởng thức những món cá từ Sông Son như cá trắm, cá mè  đặc biệt là cá chình thơm ngon nổi tiếng..', 'Cháo', 'Cháo Bánh Canh', 'rất giống tô bún mà ta vẫn ăn thường ngày. Đây là món ăn sáng được người dân Quảng Bình thích.', 'Lẩu', 'Lẩu Cá Khoai', 'Lẩu cá khoai Quảng Bình là món ăn vùng đất biển lạ, nhiều người ví cá khoai nấu lẩu ngon đến thụt lưỡi. Bạn đến và thử vị ngon này nhé! ', '2020-12-02', 5, 17, 1),
(18, 'Hang Sơn Đoòng là một hang động tự nhiên tại xã Tân Trạch, huyện Bố Trạch, tỉnh Quảng Bình, Việt Nam. Hang Sơn Đoòng được coi là hang động tự nhiên lớn nhất thế giới. Hang này nằm trong quần thể hang động Phong Nha-Kẻ Bàng. Hang Sơn Đoòng là một phần của hệ thống ngầm nối với hơn 150 động khác ở Việt Nam gần biên giới với Lào. Thời báo New York xếp hạng hang Sơn Đoòng vào vị trí thứ 8 trong 52 địa danh trong danh sách những nơi nên đến năm 2014.', 'Hang Sơn Đoòng được hình thành khoảng 2-5 triệu năm trước, khi nước sông chảy ngang qua vùng đá vôi đã bị vùi lấp dọc theo một đường đứt gãy. Dòng nước làm xói mòn và tạo ra một đường hầm khổng lồ trong lòng đất dưới dãy núi. Tại những nơi đá mềm, phần trần sụp xuống tạo thành những lỗ hổng, lâu ngày tạo thành những vòm hang khổng lồ. ', 'Hang có chiều rộng 150 mét, cao hơn 200 mét, chiều dài lên tới gần 9 ki-lô-mét. Ước tính dung tích của Hang Sơn Đoòng là 38.5 triệu mét khối (tương đương 15.000 bể bơi Olympic). ', 'sondoong.jpg', 'sondoong1.jpg', 'sondoongr1.jpg', 'sondoongr2.jpg', 'botloc.jpg', 'banhbeo.jpg', 'sohuyet.jpg', 'Bánh', 'Bánh Bột Lọc', 'Bánh lọc vốn là món đặc sản  một phong vị mới lạ, trở thành một trong những món ăn mà du khách không thể không thưởng thức khi đến thành phố biển miền Trung này.', 'Bánh', 'Bánh Bèo', 'bạn có thể bắt gặp những quán bánh bèo bình dị và đơn giản, bạn có thể vừa thưởng thức món ăn dân dã này vừa có thể tìm hiểu cách chế biến ngay tại quán.', 'Hải sản', 'Sò Huyết Sông Ròon', 'ò huyết sông Roòn nổi tiếng ngon ngọt và rất bổ là một trong những đặc sản món ăn không thể thiếu trong trải nghiệm.', '2020-12-02', 5, 18, 1),
(19, 'aaef', 'baewf', 'caewf', 'doantest.jpg', 'doantest.jpg', 'doantest2.jpg', 'doantest.jpg', 'doantest.jpg', 'doantest.jpg', 'doantest.jpg', 'aergaerg ', 'aer fearawef w', 'ăef faw fwaefwaef eadhb wehfb awhefb hajwef hjawevf jhaewf hjvds', 'aewf', 'ăef', 'aewf', 'aef', 'aewf', 'aewf', '2020-12-16', 5, 19, 0),
(27, 'weafewaf ', 'ăefwaef', 'aewfewafwaef', 'doantest2.jpg', 'doantest2.jpg', 'doantest2.jpg', 'doantest2.jpg', 'doantest2.jpg', 'ăefaewf', 'doantest2.jpg', 'aewfawef', 'ăefewaf', 'ăefewaf', 'ăefwaefewa', 'ăefewaf', 'ăefewaf', 'aewfwaefewa', 'doantest2.jpg', 'doantest2.jpg', '2020-12-17', 5, 23, 0),
(28, 'a', 'a', 'a', 'doantest.jpg', 'doantest2.jpg', 'doantest2.jpg', 'doantest2.jpg', 'lazar-gugleta-HtaxUx', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'doantest2.jpg', 'doantest2.jpg', '2020-12-17', 5, 24, 0),
(29, 'qưe', 'qưe', 'qưe', 'doantest2.jpg', 'doantest.jpg', 'doantest2.jpg', 'doantest.jpg', 'doantest2.jpg', 'doantest2.jpg', 'doantest2.jpg', 'qưe', 'qưe', 'qưe', 'qưe', 'qưe', 'qưe', 'qưe', 'doantest.jpg', 'doantest2.jpg', '2020-12-17', 5, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `noidungtipnote`
--

CREATE TABLE `noidungtipnote` (
  `id_nd` int(10) NOT NULL,
  `name_nd1` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name_nd2` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name_nd3` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name_nd4` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung1` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung2` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung3` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung4` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung5` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung6` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung7` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noidung8` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `noidungtipnote`
--

INSERT INTO `noidungtipnote` (`id_nd`, `name_nd1`, `name_nd2`, `name_nd3`, `name_nd4`, `noidung1`, `noidung2`, `noidung3`, `noidung4`, `noidung5`, `noidung6`, `noidung7`, `noidung8`, `id_tip`) VALUES
(1, 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi aygfdaeysf ưaef', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', ' Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 'Tuy nhiên có 1 lưu ý nhỏ cho các bạn, vào buổi trưa khi mà ánh nắng mặt trời chói chang có thể làm tổn hại làn da của các bạn, do đó việc mang theo một chiếc nón hay một cây dù che nắng là rất cần thi', 1),
(2, 'NHỮNG ĐỊA ĐIỂM KHÔNG THỂ BỎ QUA Ở HẠ LONG', 'NHỮNG TRẢI NGHIỆM THÚ VỊ NHẤT TRÊN VỊNH HẠ LONG', 'KINH NGHIỆM ĐI TOUR DU LỊCH', 'CHUẨN BỊ HÀNH LÍ NHƯ THẾ NÀO KHI ĐI DU LỊCH HẠ LON', '1. Thành phố Hạ Long\r\nHạ Long là một thành phố biển xinh đẹp có đường bờ biển dài 50 km. Với lợi thế tự nhiên cùng việc đầu tư phát triển, Hạ Long đã và đang là thành phố du lịch đáng sống.\r\nĐặt chân ', 'Bên trên là những địa điểm hấp dẫn với quang cảnh thiên nhiên đẹp, mang lại cho bạn một chuyến đi ý nghĩa và thú vị', '1. Ngắm cảnh trên boong tàu\r\n\r\nChào đón buổi bình minh và hoàng hôn trên boong tàu là hoạt động được các du khách rất yêu thích. Từ du thuyền bạn có thể bắt máy những bức ảnh rực rỡ khi từ từ đi qua c', 'Bạn sẽ được trải nghiệm 1 số hoạt động thú vị và mới lạ khi đến với Hạ Long!', 'Không nên mang quá nhiều tiền mặt, và tài sản giá trị tránh đầu óc xuốt ngày lo giữ tài sản mà quên mất mình đang đi chơi du lịch để lấy lại những phút giây thư thái\r\nKhông mang quá nhiều đồ đạc, trán', 'Note ngay những lưu ý trên để lưu trữ cho mình những lựa chọn tốt nhất.', 'Khi đi du lịch Hạ Long, ngoài những hành lý tư trang cá nhân, bạn cần lưu ý mang theo những thứ sau:\r\n- Giấy tờ tùy thân như CMND hoặc hộ chiếu, giấy khai sinh bản gốc hoặc bản trích lục của trẻ em là', 'Hãy chuẩn bị hành trang đầy đủ để có một chuyến tham quan đầy thú vị nhé!', 2),
(3, 'NÊN ĐI CÙ LAO CHÀM VÀO THỜI GIAN NÀO?', 'CÁC ĐỊA ĐIỂM THAM QUAN HẤP DẪN Ở CÙ LAO CHÀM', 'DU LỊCH CÙ LAO CHÀM - CẦN CHUẨN BỊ GÌ?', 'MỘT SỐ LƯU Ý KHÁC', ' Chắc chắn là mùa hè rồi. Tầm tháng 3 đến tháng 8, Cù Lao Chàm có nắng ấm chứ không gay gắt như trong đất liền, biển lặng, nước biển trong xanh và hơi ấm. Thời tiết đẹp, ít mưa, thuận lợi cho kế hoạch', 'Nếu bạn định kết hợp muốn chuyến du lịch Hội An-Đà Nẵng với thăm quan Cù Lao Chàm thì theo kinh nghiệm du lịch Cù Lao Chàm vui vẻ, đáng nhớ thì bạn nên đi vào ngày rằm âm lịch (14-15) hoặc tết trung t', 'Bảo tàng biển Cù Lao Chàm: Nơi bạn có cái nhìn toàn diện về cuộc sống, văn hóa, phong tục và lễ hội của người dân Cù Lao Chàm.\r\nGiếng Cổ Chăm: Một di tích cổ Tiền Sa Huỳnh và là nơi cung cấp nước ngọt', 'Bên trên là những nơi hấp dẫn khi đến với Cù Lao Chàm và vô số địa điểm khác đang chờ bạn khám phá.', 'Các bạn có thể xem gợi ý những món đồ cực kỳ cần thiết khi du lịch Cù Lao Chàm sau đây:\r\nQuần áo tắm.\r\nMũ rộng vành, kính mát và kem chống nắng.\r\nĐiện thoại và máy ảnh sạc đầy pin.\r\nMột đôi giày thật ', 'Bên trên là những chia sẻ bổ ích giúp cho bạn có một chuyến đi hoàn hảo nhất.', 'Bạn không nên mang theo bao ni lông khi đi du lịch vì Cù Lao Chàm là hòn đảo nói không với bao ni lông.\r\nKhi lặn ngắm san hô, không được bẻ san hô mang vào đất liền, để bảo vệ sự dạng sinh học và tài ', 'Cù Lao Chàm tuy đã là điểm du lịch nổi tiếng nhưng vẫn giữ được nét hoang sơ, xinh đẹp khó cưỡng. Tôi hy vọng bạn sẽ áp dụng được các kinh nghiệm đi Cù Lao Chàm mà tôi vừa mới sẻ chia. Chúc bạn sớm có', 3),
(4, 'KINH NGHIỆM THAM QUAN NHÀ THỜ ĐỨC BÀ', '5 ĐIỀU CẦN PHẢI LÀM KHI THAM QUAN NHÀ THỜ ĐỨC BÀ', 'THÔNG TIN CẦN BIẾT TRƯỚC KHI GHÉ NHÀ THỜ ĐỨC BÀ', 'ĐIỂM LANG THANG HẤP DẪN QUANH NHÀ THỜ ĐỨC BÀ', 'Đến Nhà thờ Đức Bà lúc nào thích hợp nhất?\r\nBạn có thể đến Nhà thờ Đức Bà vào bất kỳ lúc nào trong ngày, kể cả vào buổi tối vẫn sẽ có rất đông người tham quan và \"đội ngũ\" quà vặt, cà phê cho bạn chọn', 'Cùng nhau tham khảo những kinh nghiệm bổ ích khi tham quan Nhà Thờ Đức Bà.', '01.Tham quan nội thất nhà thờ\r\nNhững bức tường gạch đỏ hồng không bám bụi, ô kính màu rực rỡ dưới nắng chỉ là một phần trong những gì bạn có thể nhìn ngám tại đây.\r\n02. Cà phê bệt\r\nThưởng thức ly cà p', 'Hãy đến tham quan và trải nghiệm những hoạt động trên nhé!', 'Địa chỉ: số 01 Công Xã Paris, Bến Nghé, Quận 1, Hồ Chí Minh\r\n\r\nGiờ mở cửa: 05h30 – 17h00\r\n\r\nVé vào cửa: Miễn phí\r\n\r\nThời gian tham quan: 90 phút – 2 tiếng', 'Hy vọng trên đây sẽ là những thông tin hữu ích. Giúp ích được bạn trước khi tham quan nhà thờ Đức Bà Sài Gòn. Chúc bạn có một chuyến khám phá Sài Gòn thật vui với nhiều trải nghiệm lý thú nhé!', 'Từ nhà thờ Đức Bà mọi người có thể dễ dàng di chuyển đến những địa điểm tham quan thú vị khác như Bưu điện thành phố, Hội trường Thống Nhất, hồ Con Rùa, Bảo tàng lịch sử Việt Nam, Thảo cầm viên, Đường', 'Hiện nhà thờ Đức Bà đang trong thời gian đóng cửa để trùng tu nên chỉ có thể tham quan, chụp ảnh bên ngoài, tuy nhiên vẫn không ảnh hưởng nhiều đến những trải nghiệm thú vị khác tại địa điểm này đâu b', 4),
(5, 'HƯỚNG DẪN MUA VÉ LANDMARK 81 SKYVIEW', 'HƯỚNG DẪN SỮ DỤNG VÉ ĐỂ LÊN LANDMARK 81', 'CÁC TRÒ CHƠI TRẢI NGHIỆM TẠI LANDMARK 81', 'MỘT SỐ LƯU Ý KHI THAM QUAN LANDMARK 81 SKYVIEW', 'Để mua vé thì có 2 cách:\r\n\r\nMua trực tiếp tại quầy vé ở tầng B1 của tòa nhà (Vincom Center Landmark 81)\r\nMua online trên website chính thức của Landmark 81 SkyView hoặc mua tại đây.\r\nDu khách mua vé t', 'Thông tin thêm:\r\n\r\nVé vào cổng không bao gồm dịch vụ chụp ảnh lấy ngay SkyPhoto, các dịch vụ ăn uống, trò chơi trải nghiệm trên Đài Quan Sát\r\nVé chỉ có giá trị sử dụng trong ngày đã đăng ký\r\nKhông đượ', 'Để sử dụng vé lên Đài Quan Sát thì bạn đến tòa nhà Landmark 81 rồi gửi xe và vào khu vực tầng B1, tìm quầy vé và thực hiện các bước sau:\r\n\r\nBước 1: mua vé hoặc xuất trình mã code trên vé mua online.\r\n', 'Bên trên là những review thực tế giúp bạn có thể tham quan Landmark 81 một cách tự tin nhất.', 'Các trò chơi trải nghiệm tại Đài Quan Sát  Landmark 81 SkyView cũng rất ấn tượng như: game thực tế ảo “Top of Vietnam” – trải nghiệm cảm giác mạnh như nhảy dù từ đỉnh Landmark 81; trải nghiệm cảm giác', 'Nhiều trò chơi hấp dẫn khác đang chờ đón bạn. Hãy đến tham quan ngay nhé!', 'Nên đi Landmark 81 SkyView vào buổi chiều tối để ngắm hoàng hôn hoặc Sài Gòn buổi tối sẽ rất lung linh, ấn tượng.\r\nNên kết hợp đi mua sắm hoặc giải trí ở các tầng dưới của Landmark 81 luôn cho tiện. Đ', 'Bên trên là toàn bộ kinh nghiệm tham quan Landmark 81 SkyView đầy đủ nhất. Chúc bạn có một chuyến tham quan vui vẻ.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rt` int(11) NOT NULL,
  `id_dd` int(11) DEFAULT NULL,
  `id_kh_dg` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rt`, `id_dd`, `id_kh_dg`, `rate`) VALUES
(8, 1, 3, 4),
(9, 2, 3, 4),
(13, 1, 3, 5),
(14, 11, 3, 5),
(15, 1, 3, 5),
(16, 1, 3, 5),
(17, 2, 3, 1),
(18, 3, 3, 5),
(19, 2, 3, 5),
(20, 2, 3, 4),
(21, 3, 1, 5),
(22, 2, 3, 3),
(23, 2, 3, 3),
(24, 2, 3, 3),
(25, 2, 3, 3),
(26, 2, 3, 3),
(27, 2, 3, 3),
(28, 2, 3, 3),
(29, 2, 3, 3),
(31, 2, 3, 5),
(32, 2, 3, 5),
(33, 2, 3, 5),
(34, 2, 3, 5),
(35, 1, 3, 1),
(36, 1, 3, 1),
(37, 1, 3, 1),
(38, 1, 3, 1),
(39, 1, 3, 1),
(40, 1, 3, 1),
(41, 1, 3, 1),
(42, 1, 3, 5),
(43, 1, 3, 5),
(44, 14, 3, 5),
(45, 9, 3, 4),
(46, 10, 3, 4),
(47, 4, 3, 5),
(48, 7, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tip_note`
--

CREATE TABLE `tip_note` (
  `id_tip` int(11) NOT NULL,
  `name_tip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_tip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tip_note`
--

INSERT INTO `tip_note` (`id_tip`, `name_tip`, `img_tip`, `trangthai`) VALUES
(1, ' Sắp xếp thời gian biểu', 'tip1.jpg', 1),
(2, 'Hỏi kỹ về các điều khoản', 'tip2.jpg', 1),
(3, 'Làm bạn với hướng dẫn viên', 'tip3.jpg', 1),
(4, 'Theo sát  lịch trình', 'tip4.jpg', 1),
(5, 'Nắm bắt cơ hội giảm giá', '7-meo-vang.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booktour`
--
ALTER TABLE `booktour`
  ADD PRIMARY KEY (`id_kh`),
  ADD KEY `fk_book_diadiem` (`id_dd`),
  ADD KEY `fk_khLogin_khDS` (`id_kh_login`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cm`),
  ADD KEY `fm_cm_kh` (`id_kh`),
  ADD KEY `fk_cm_dd` (`id_dd`);

--
-- Indexes for table `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`id_dd`),
  ADD KEY `fk_diadiem` (`id_kv`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`id_kv`);

--
-- Indexes for table `noidungbocuc`
--
ALTER TABLE `noidungbocuc`
  ADD PRIMARY KEY (`id_noidung`),
  ADD KEY `fk_noidungbocuc_diadiem` (`id_dd`);

--
-- Indexes for table `noidungtipnote`
--
ALTER TABLE `noidungtipnote`
  ADD PRIMARY KEY (`id_nd`),
  ADD KEY `fk_nd_tip` (`id_tip`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rt`),
  ADD KEY `fk_rt_kh` (`id_kh_dg`),
  ADD KEY `fk_rt_dd` (`id_dd`);

--
-- Indexes for table `tip_note`
--
ALTER TABLE `tip_note`
  ADD PRIMARY KEY (`id_tip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `booktour`
--
ALTER TABLE `booktour`
  MODIFY `id_kh` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `id_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `id_kv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `noidungbocuc`
--
ALTER TABLE `noidungbocuc`
  MODIFY `id_noidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `noidungtipnote`
--
ALTER TABLE `noidungtipnote`
  MODIFY `id_nd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tip_note`
--
ALTER TABLE `tip_note`
  MODIFY `id_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booktour`
--
ALTER TABLE `booktour`
  ADD CONSTRAINT `fk_book_diadiem` FOREIGN KEY (`id_dd`) REFERENCES `diadiem` (`id_dd`),
  ADD CONSTRAINT `fk_khLogin_khDS` FOREIGN KEY (`id_kh_login`) REFERENCES `khachhang` (`id_kh`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_cm_dd` FOREIGN KEY (`id_dd`) REFERENCES `diadiem` (`id_dd`),
  ADD CONSTRAINT `fm_cm_kh` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Constraints for table `diadiem`
--
ALTER TABLE `diadiem`
  ADD CONSTRAINT `fk_diadiem` FOREIGN KEY (`id_kv`) REFERENCES `khuvuc` (`id_kv`);

--
-- Constraints for table `noidungbocuc`
--
ALTER TABLE `noidungbocuc`
  ADD CONSTRAINT `fk_noidungbocuc_diadiem` FOREIGN KEY (`id_dd`) REFERENCES `diadiem` (`id_dd`);

--
-- Constraints for table `noidungtipnote`
--
ALTER TABLE `noidungtipnote`
  ADD CONSTRAINT `fk_nd_tip` FOREIGN KEY (`id_tip`) REFERENCES `tip_note` (`id_tip`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rt_dd` FOREIGN KEY (`id_dd`) REFERENCES `diadiem` (`id_dd`),
  ADD CONSTRAINT `fk_rt_kh` FOREIGN KEY (`id_kh_dg`) REFERENCES `khachhang` (`id_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
