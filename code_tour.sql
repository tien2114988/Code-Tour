-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 01:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `adult_count` int(11) NOT NULL,
  `child_count` int(11) NOT NULL,
  `depart_date` date NOT NULL,
  `total_money` int(11) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tour_id` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `adult_count`, `child_count`, `depart_date`, `total_money`, `fullname`, `address`, `phone_number`, `email`, `status`, `user_id`, `tour_id`, `created_datetime`) VALUES
(39, 1, 1, '2023-12-23', 190000, 'Tiến Nguyễn', 'Di An, Binh Duong', '0346066323', 'tien.nguyen2283@hcmut.edu.vn', 1, 6, 1, '2023-12-15 19:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(64) NOT NULL,
  `category_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_img`) VALUES
(1, 'Miền tây trong ngày', 'https://tourbonphuong.com/upload/product/305x300x1/z4957220225110-6ceaca3f2879f35207ff6738d62a84c9-2314_305x300.jpg'),
(2, 'Sài gòn', 'https://tourbonphuong.com/upload/product/305x300x1/ds-tour-sg-5348_305x300.jpg'),
(3, 'Miền tây', 'https://tourbonphuong.com/upload/product/305x300x1/cheo-thuyen-con-thoi-son-2163_305x300.png'),
(4, 'Phú Quốc', 'https://tourbonphuong.com/upload/product/305x300x1/ds-tour-pq-5869_305x300.jpg'),
(5, 'Đà Lạt', 'https://tourbonphuong.com/upload/product/305x300x1/san-may-da-lat-2968_305x300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `content` mediumtext NOT NULL,
  `response` mediumtext NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `tour_id`, `fullname`, `phone_number`, `email`, `content`, `response`, `time`) VALUES
(30, 3, 'Tiến Nguyễn', '0346066323', 'tien.nguyen2283@hcmut.edu.vn', 'noi dung', 'a', '2023-12-15 07:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `content` mediumtext NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `fullname`, `phone_number`, `email`, `content`, `address`) VALUES
(13, 'Tiến Nguyễn', '0346066323', 'tien.nguyen2283@hcmut.edu.vn', 'aa', 'Di An, Binh Duong');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `address` varchar(256) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `hotline` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `transfer_name` varchar(64) NOT NULL,
  `account_number` varchar(32) NOT NULL,
  `bank_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`address`, `phone_number`, `hotline`, `email`, `transfer_name`, `account_number`, `bank_name`) VALUES
('Trường Đại học Bách Khoa, TPHCM', '0346066323', '0346066323', 'codetour@gmail.com', 'Nguyễn Đại Tiến', '111122223333', 'OCB');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_img` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `opening_paragraph` mediumtext NOT NULL,
  `introduction` longtext NOT NULL,
  `body` longtext NOT NULL,
  `conclusion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_img`, `location`, `title`, `opening_paragraph`, `introduction`, `body`, `conclusion`) VALUES
(1, 'https://tourbonphuong.com/upload/images/bien-tan-thanh-vao-luc-hoang-hon.jpg', 'TIỀN GIANG', 'Đi đâu chơi ở Tiền Giang? Top địa điểm hot ở tiền Giang', 'Tiền Giang la địa điểm du lịch cực hot trong năm 2023, thế nên \"đi đau chơi ở Tien Giang\" la cau hỏi đang đuợc rất nhiều du\r\nkhách có ý định du lịch Tiền Giang quan tam va tìm kiem. Qua bai viet dưoi day, Tour Bốn Phương xin chia sẻ đen bạn 10+ địa\r\nđiểm du lịch nổi tiếng ở Tiền Giang để bạn có thể tham khảo và ghé thăm khi có dịp du lịch Tiền Giang.', 'Vùng đất Tiền Giang từ lâu đã được biết đến là nơi có sản vật trù phú, đất đai màu mỡ và phong cảnh miền quê hữu tình đặc trưng của vùng sông nước. Khi du lịch Tiền Giang, du khách sẽ có cơ hội trải nghiệm nhiều điều thú vị như khám phá chợ nổi, tham quan miệt vườn, trò chuyện cùng những người nông dân miền Tây nhiệt tình hiếu khách. Sau đây, Tour Bốn Phương cùng bạn đi tìm câu trả lời cho câu hỏi “ đi đâu chơi ở Tiền Giang”.', '', 'Thông qua bài viết trên, Tour Bốn Phương đã giúp bạn trả loi cho câu hỏi \"đi đâu chơi ở Tiền Giang\". Hy vọng rằng nhung thông tin trên có thể giúp ích cho chuyến đi của bạn. Nếu bạn đang có kế hoạch đi du lịch miền Tây nhung vẫn còn nhiều điều thắc\r\nmắc thì hãy liên he ngay với Tour Bốn Phương để đuợc hỗ tro va tu vấn chi tiết về các địa điểm du lịch ở mien Tay cũng như là các tour du lịch miền Tây nhé.'),
(2, 'https://tourbonphuong.com/upload/images/thuong-thuc-bua-sang-tai-cho-noi-cai-rang-can-tho.jpg', 'CHỢ NỔI CÁI RĂNG - CẦN THƠ', 'Khám phá chợ nổi Cái Răng Cần Thơ - Nét đẹp xứ sở Tây Đô', 'Chợ nổi là nét văn hóa đặc trưng của vùng đồng bằng sông Cửu Long. Trong đó là khu chợ nổi lớn nhất, được tạp chí Anh Quốc bình chọn là 1 trong 10 khu chợ ấn tượng nhất thế giới. Hãy cùng Tour Bốn Phương đi tìm hiểu loại hình chợ độc đáo này bạn nhé.', 'Chợ nổi Cái Răng họp trên một nhánh của sông Hậu, chảy qua quận Cái Răng, thành phố Cần Thơ, cách trung tâm thành phố Cần Thơ khoảng 6km. Nếu du khách đi đến chợ nổi Cái Răng bằng đường bộ sẽ mất khoảng 15 phút và sẽ mất 30 phút nếu đi thuyền từ bến Ninh Kiều. Du khách chọn đường bộ có thể đi dọc theo con đường Võ Tánh đến Kênh Ba Láng hướng về huyện Phong Điền. Nhưng phần lớn du khách sẽ tham quan chợ nổi Cái Răng bằng thuyền để có thể cảm nhận trọn vẹn vẻ đẹp vùng sông nước. Trong quá trình ngồi thuyền từ bến Ninh Kiều đến chợ nổi Cái Răng, du khách sẽ có cơ hội hiểu thêm về cuộc sống lênh đênh sông nước của người dân thương hồ khi ngắm nhìn cảnh đẹp hai bên bờ và cuộc sống sinh hoạt của người dân nơi đây.', '', 'Để chuyến tham quan chợ nổi Cái Răng có thể diễn ra suôn sẻ, bạn cần chú ý những điều sau: Bạn nên chủ động tìm hiểu tình hình thời tiết của Cần Thơ trước khi đi để có thể tận hưởng chuyến đi một cách trọn vẹn.\r\nKhi thuê tàu tham quan chợ nổi, bạn cần tìm hiểu đầy đủ thông tin của chủ tàu như số điện thoại của đại lý, người quản lý và thông tin của chú lái tàu. Ngoài ra bạn cũng cần phải thương lượng về giá cả, thời gian và các điểm tham quan trước khi bắt đầu khởi hành đi chợ nổi. Bạn không nên đặt cọc bất cứ khoản nào trước, trong trường hợp bắt buộc phải cọc thì bạn cần yêu cầu biên lai và biên nhận. Khi tham quan chợ nổi Cái Răng bạn cũng có thể ghé thăm những địa điểm tham quan gần đó như lò hủ tiếu, khu du lịch Mỹ Khánh, ... Khi tàu đang di chuyển trên sông, bạn cần mặc áo phao và chú ý không nên gác tay lên mạn tàu để tránh bị thương khi tàu va chạm với nhau. Khi thưởng thức ẩm thực ở chợ nổi Cái Răng và khi mua hàng tại các tụ điểm bán đặc sản miền Tây, bạn nên hỏi giá trước, và hạn chế hỏi quá nhiều nhưng không mua. '),
(3, 'https://tourbonphuong.com/upload/images/ca-linh-mien-tay-kho-tieu.JPG', 'MIỀN TÂY', 'Đặc sản cá linh miền Tây - Món quà của mùa nước nổi', 'Cá linh là một trong những sản vật quý giá mà mùa nước nổi mang đến cho vùng đất Nam Bộ. Sau đây, Tour Bốn Phương sẽ giới thiệu đến các bạn những món ngon được chế biến từ đặc sản cá linh ở miền Tây khiến nhiều du khách phải gây thương nhớ', 'Cá linh có nguồn gốc từ biển hồ Campuchia, thuộc h...', 'Mùa nước nổi thường bắt đầu từ tháng 7 đến tháng 11 âm lịch, lúc này trứng cá linh bắt đầu nở ra và cá linh non lớn lên âm thầm trong các kênh rạch, cánh đồng ngập nước. Khi cá linh lớn bằng ngón tay chúng bắt đầu theo nước rút và lội trở ngược ra sông lớn. Cá linh nổi tiếng là một trong những món đặc sản nổi tiếng ở miền Tây mùa nước nổi được nhiều người yêu thích, bởi cá linh có thể chế biến được rất nhiều món ăn ngon với hương vị đặc biệt khó quên.', 'Miền Tây là vùng đất của đồng ruộng, sông rạch vì vậy những món ăn về cá không bao giờ kể hết, mỗi loại cá đều có cách chế biến riêng. Tuy nhiên, muốn thưởng thức đầy đủ hương đất vị đồng thì phải có được mớ cá tươi sống khi mới mua về, mớ rau đồng đúng mùa mơn mởn mới làm được món ăn ngon đúng điệu đúng chất miền Tây.Muốn thưởng thức món cá ở Miền Tây chuẩn vị, bạn chỉ còn cách là phải đến thưởng thức tại vùng đất miền Tây thôi. Một chuyến du lịch miền Tây cùng Tour Bốn Phương chắc chắn sẽ để lại cho du khách một kỉ niệm khó phai mờ.');

-- --------------------------------------------------------

--
-- Table structure for table `related_tour`
--

CREATE TABLE `related_tour` (
  `news_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `related_tour`
--

INSERT INTO `related_tour` (`news_id`, `tour_id`) VALUES
(1, 1),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL,
  `view_count` int(11) NOT NULL,
  `comment_count` int(11) NOT NULL,
  `booking_count` int(11) NOT NULL,
  `map` varchar(256) NOT NULL,
  `adult_price` int(11) NOT NULL,
  `child_price` int(11) NOT NULL,
  `vehicle` varchar(16) NOT NULL,
  `tour_days` varchar(32) NOT NULL,
  `description` longtext NOT NULL,
  `tour_include` mediumtext NOT NULL,
  `tour_exclude` mediumtext NOT NULL,
  `tour_condition` mediumtext NOT NULL,
  `tour_cancel` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `hotel_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `avatar`, `view_count`, `comment_count`, `booking_count`, `map`, `adult_price`, `child_price`, `vehicle`, `tour_days`, `description`, `tour_include`, `tour_exclude`, `tour_condition`, `tour_cancel`, `category_id`, `hotel_rate`) VALUES
(1, 'Chợ nôi Cái Bè- Cù Lao Tân Phong  ', 'https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg', 1, 12, 5, 'https://tourbonphuong.com/upload/product/xnmt-01-8842.png', 120000, 70000, 'Ô tô', '1 Ngày', '      Vùng đất phương Nam ngay từ thời khẩn hoang mở cõi đã được truyền tụng là nơi đất đai màu mỡ, cây trái ngọt lành, cá tôm hào sảng và trong quá trình cư dân đồng bằng sông Cửu Long giang tay đón nhận sự hào phóng của thiên nhiên đã tạo nên những nét văn hóa vô cùng đặc sắc mang đậm hương sắc của đất và người phương Nam. Hãy cùng Tour Bốn Phương rời xa thành phố nhộn nhịp, xô bồ trong ngày nghỉ cuối tuần hay một chuyến dã ngoại để khám phá những nét độc đáo của sông nước miền Tây qua tour du lịch miền Tây 1 ngày tham quan chợ nổi Cái Bè - Cù lao Tân Phong hứa hẹn mang lại cho quý khách những trải nghiệm về vẻ đẹp bình dị từ thiên nhiên, con người và cuộc sống nơi đây.      ', 'Xe du lịch đời mới, máy lạnh xuyên suốt. Hướng dẫn viên tiếng Anh, tiếng Việt suốt tuyến. Ăn trưa phục vụ theo chương trình. Trái cây, mật ong. Vé tàu và xuồng chèo tham quan theo chương trình. Đờn ca tài tử. Bảo hiểm du lịch 20.000.000/vụ.       ', 'Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAT 10%            ', ' Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour.  ', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 1, 3),
(2, 'Tát Mương Bắt Cá: Mỹ Tho - Bến tre', 'https://tourbonphuong.com/upload/product/z3520138770601-738a79951dd9ebdf805babb6a3ec4f18-8267_1000x1000.jpg', 1, 15, 4, 'https://tourbonphuong.com/upload/product/xnmt-01-05-9932.png', 780000, 585000, 'Ô tô', '1 Ngày', 'Miền Tây từ lâu được biết đến là nơi được thiên nhiên ưu ái ban tặng cho địa hình sông nước đầy ắp cá tôm và dồi dào phù sa, những đồng lúa chín vàng trải dài và những vườn cây ăn trái sai trĩu quả. Chính vì thế, du lịch miền Tây là một trong những sự lựa chọn lý tưởng để thư giãn cuối tuần cùng gia đình và bạn bè. Hãy cùng Tour Bốn Phương rời xa thành phố về thăm Mỹ Tho - Bến Tre qua tour miền Tây 1 ngày: tát mương bắt cá. Tour du lịch miền Tây khởi hành từ Sài Gòn của Tour Bốn Phương sẽ đưa quý khách trải nghiệm cuộc sống của người dân miền Tây với những hoạt động thú vị như chèo xuồng ba lá, thư giãn với giai điệu đàn ca tài tử, tự tay tát mương, bắt cá...và ghé thăm những làng nghề truyền thống.', 'Xe du lịch đời mới máy lạnh (15,25,35,45) chỗ tùy theo số lượng khách. Hướng dẫn viên chuyên nghiệp suốt tuyến. Ăn trưa phần 4-5 món. Bảo hiểm du lịch 20.000.000/vụ. Nước suối 2 chai/ người. \r\n', 'Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAt 08%. \r\n', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. ', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 3, 2),
(3, 'Tour Miền Tây 1 ngày Mỹ Tho - Bến tre ', 'https://tourbonphuong.com/upload/product/hinh-chi-tiet-8881_1000x1000.jpg', 3, 12, 3, 'https://tourbonphuong.com/upload/product/xnmt-01-4378.png', 450000, 337500, 'Ô tô', '2 Ngày 1 Đêm', ' Tour Mỹ Tho - Bến Tre 1 ngày của Tour Bốn Phương sẽ đưa quý khách đi du lịch Mỹ Tho - Bến Tre và cùng nhau khám phá miền Tây với những nét văn hóa đặc trưng của vùng sông nước Cửu Long. Quý Khách sẽ có cơ hội đắm chìm vào giai điệu đờn ca tài tử da diết, chèo xuồng nhỏ len lỏi giữa hai hàng dừa nước xanh mát, ghé thăm chùa Vĩnh Tràng - ngôi chùa độc đáo có nét giao thoa văn hóa phương Đông và phương Tây cùng hội tụ, tham quan khu du lịch sinh thái Bến Tre - Cồn Phụng, cù lao Thới Sơn, dạo vườn trái cây và thưởng thức trái cây theo mùa. Tour Bốn Phương tin rằng tour du lịch Mỹ Tho - Bến Tre 1 ngày sẽ mang lại cho quý khách nhiều trải nghiệm thú vị.\r\n\r\n\r\n\r\n\r\n ', 'Xe du lịch đời mới máy lạnh (15, 29, 35, 45 chỗ tùy theo số lượng khách từng ngày). Hướng dẫn viên song ngữ Anh Việt, chuyên nghiệp suốt tuyến (tour ghép với người nước ngoài). Ăn trưa cơm dĩa hoặc cơm phần 4-5 món. Tàu tham quan trên sông (có trang bị áo phao), xuồng chèo, trái cây, trà mật ông, đờn ca tài tử, xe ngựa. Bảo hiểm du lịch 20.000.000 vnđ/vụ. Nước suốt 1 chai/người/xe tour.  ', 'Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAT 08%.   ', ' Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour.  ', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 1, 2),
(4, 'TOUR Miền Tây 2 Ngày 1 Đêm', 'https://tourbonphuong.com/upload/product/hinh-chi-tiet-8881_1000x1000.jpg', 16, 12, 5, 'https://tourbonphuong.com/upload/product/xnmt-01-4378.png', 1550000, 1162500, 'Ô tô', '2 Ngày 1 Đêm', 'Là một phần của Nam Bộ, Miền Tây được biết đến với địa hình sông nước, những vườn trái cây ngọt lành và những đồng lúa chín vàng thẳng cánh cò bay. Vì thế, Miền Tây luôn được ưu tiên lựa chọn làm điểm du lịch để thư giản cho những ai yêu thiên nhiên và phong cảnh miền quê bình dị dân dã. Hãy cùng&nbsp;Tour Bốn Phương rời xa thành phố xô bồ về Miền Tây đến với Mỹ Tho - Bến Tre - Cần Thơ qua tour Miền Tây 2&nbsp;ngày&nbsp;1&nbsp;đêm để khám phá những nét văn hóa đặc trưng của người dân Nam Bộ. Đến với tour du lịch Cần Thơ 2 ngày 1 đêm, quý khách sẽ có những trải nghiệm mới khi đi du lịch Cần Thơ như tham quan chợ nổi Cái Răng- chợ nổi lớn nhất Cần Thơ, để tìm hiểu văn hóa họp chợ trên sông, ghé thăm chùa Vĩnh Tràng, tham quan khu du lịch sinh thái Bến Tre – Cồn Phụng, cù lao Thới Sơn, dạo vườn trái cây và thưởng thức trái cây theo mùa, phim trường Căn nhà Màu Tím. Tin rằng những trải nghiệm thú vị khi du lịch miền Tây sẽ giúp quý khách tiếp thêm năng lượng để bắt đầu tuần làm việc mới.\r\n\r\n', 'Xe du lịch đời mới máy lạnh. Hướng dẫn viên chuyên nghiệp suốt tuyến. Tàu tham quan trên sông - Bến Tre + Chợ Nổi + Xuồng chèo. Trái cây, trà mật ong, đờn ca tài tử, xe ngựa, xem cá lốc bay. Suất ăn tiêu chuẩn 4-5 món bữa, các món thay đổi linh động. ', 'Phụ thu thêm nếu quý khách lưu trú phòng đơn. Chi phí tham quan ngoài chương trình, phí tham quan Căn nhà màu tím, phí vào vườn trái cây trả tại vườn. Chi phí ăn uống ngoài chương trình. Thuế VAT 08%. ', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \r\n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 3, 5),
(5, 'Tòa thánh tây ninh - Núi Bà Đen', 'https://tourbonphuong.com/upload/product/chi-tiet-5628_1000x1000.jpg', 14, 25, 12, 'https://tourbonphuong.com/upload/product/z4879350092771-49a79d2c2c26bf57b93cf1136a13e6c4-7226.jpg', 1450000, 1160000, 'Ô tô', '2 Ngày 1 Đêm', 'Tour du lịch Sài Gòn: Tòa thánh Tây Ninh -  Núi Bà Đen sẽ đem đến cho quý khách những trải nghiệm về văn hóa - tôn giáo đầy sống động ở ngoại ô thành phố Hồ Chí Minh, giúp quý khách có một cái nhìn sâu sắc và rõ nét hơn về tôn giáo, văn hóa của vùng đất miền Đông Nam Bộ.\r\n', 'Xe máy lạnh tham quan suốt chương trình. Nước 01 chai/người/ngày. Hướng dẫn viên tiếng Việt. Ăn sáng bánh canh trang bàng. Ăn trưa tại nhà hàng địa phương cho ngày thường. Chi phí tổ chức, dịch vụ. Bảo hiểm du lịch 20.000.000/vụ. ', 'Thuế VAT 08', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \r\n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 2, 3),
(6, 'Ăn tối trên du thuyền đông dương INDOCHINE CRUISE', 'https://tourbonphuong.com/upload/product/chi-tiet-4484_1000x1000.jpg', 23, 1, 67, 'https://tourbonphuong.com/upload/product/0027508-tiec-buffet-toi-tren-tau-indochina-queen-nu-hoang-dong-duong--5474.jpeg', 550000, 550000, 'Máy bay', '1 Ngày ', 'Sài Gòn - Hòn Ngọc Viễn Đông vẫn đang ngày một rạng rỡ, lung linh hơn, một thành phố dường như không bao giờ ngủ. Về đêm, sông Sài Gòn như một dải lụa óng ánh vắt qua thành phố sôi động với những con đường rực rỡ đèn xe, những ô cửa cao ốc, những góc cafe ấm áp... Đều đặn trên sông Sài Gòn hằng đêm, dịch vụ ăn tối trên du thuyền Đông Dương là một sự lựa chọn hoàn hảo cho những ai muốn trải nghiệm cảm giác thật khác biệt, thưởng ngoạn thành phố về đêm cùng với các món ăn và chương trình ca múa nhạc, ảo thuật, múa Hawai đặc sắc. Vậy còn chần chờ gì và không cùng Tour Bốn Phương lên du thuyền bồng bềnh ngắm nhìn một Sài Gòn lộng lẫy, kiêu kỳ mà cũng vô cùng bình dị qua một ánh nhìn khác lạ từ sông nước.\r\n', 'Từ 4-6 tuổi tính 75% giá người lớn. Dưới 4 tuổi miễn phí, gia đình tự túc. Từ 6 tuổi trở lên vé người lớn.', 'Giá trong thực đơn chưa bao gồm 08% thuế VAT. ', '', 'Trường hợp hủy không báo trước hoặc đến trễ giời khởi hành, quý khách chịu phạt 100% phí tour. ', 2, 5),
(7, 'TOUR 3 ngày 2 đêm : Đảo Ngọc Phú Quốc', 'https://tourbonphuong.com/upload/product/main-7316_1000x1000.jpg', 1, 23, 15, 'https://tourbonphuong.com/upload/product/xn41116-18-2969.png', 3080000, 2310000, 'Ô tô', '1 Ngày ', 'Được mệnh danh là Đảo Ngọc, là hòn đảo lớn nhất của Việt Nam, Phú Quốc nằm ở vùng biển phía Tây Nam của tổ quốc là hòn đảo lớn nhất trong quần thể 22 đảo lớn nhỏ tại đây. Năm 2006, Khu dự trữ sinh quyển ven biển và biển đảo Kiên Giang bao gồm cả huyện này được UNESCO công nhận là khu dự trữ sinh quyển thế giới. Nằm tại vị trí đặc biệt của vịnh Thái Lan, Phú Quốc ít bị ảnh hưởng bởi thiên tai, thiên nhiên đã ban tặng cho Phú Quốc cảnh sắc hài hòa, mát mẻ dễ chịu quanh năm và nguồn tài nguyên vô cùng đa dạng, thiên nhiên tuyệt đẹp với những cánh rừng nguyên sinh bạt ngàn, những bãi biển dài đầy nắng vàng và làn nước trong xanh. Đặc biệt, bãi Dài của Phú Quốc đứng đầu danh sách các bãi biển tiềm ẩn được các hãng thông tấn cũng như du khách nước ngoài đánh giá và bình chọn là bãi biển đứng đầu 5 bãi biển đẹp nhất thế giới. Tất cả là điểm hấp dẫn không thể cưỡng nổi với mọi du khách đưa Phú Quốc trở thành một trong những địa danh du lịch hấp dẫn nhất Việt Nam.\r\n', 'Khách sạn: Phòng tiện nghi điều hòa, tivi, nóng lạnh, khép kín 2 người/phòng. Trường hợp lẻ nam hoặc nữ ghép 3 người/phòng. 1 Xe ô tô chỗ du lịch hiện đại, điều hòa, đời mới để đưa đón theo chương trình. Bữa chính Ăn 1 bữa theo trên tàu du lịch + 3 bữa cho chương trình 3N2Đ tại nhà hàng. Vé thắng cảnh vào cổng các điểm du lịch theo chương trình. Hướng dẫn viên nhiệt tình, kinh nghiệm, am hiểu kiến thức. Bảo hiểm du lịch mức cao nhất 20.000.000 đồng/người/vụ. Nước uống, khăn lạnh, phục vụ đoàn. Thuốc, y tế theo tour. ', 'Chi phí tắm bùn khoáng nóng. Chi phí ngủ phòng đơn và các chi phí cá nhân ngoài chương trình. Chi phí ăn ngoài chương trình. Chi phí ăn phát sinh trên tàu. Vé tham quan Vinperland, Vinperland Safari. Thuế VAT 10%. ', 'Khi đi máy bay Quý khách nên mang theo một trong các giấy tờ sau: (Chứng minh thư nhân dân còn hạn dưới 15 năm, hoặc hộ chiếu, giấy khai sinh (đối với trẻ em), với trẻ em không đi cùng bố mẹ phải có giấy xác nhận ủy quyền của bố mẹ có xác nhận của địa phương nơi cư trú cho người đi cùng, để làm thủ tục lên máy bay. Đối với khách hàng từ 70 - 85 tuổi, gia đình và quý khách phải cam kết đảm bảo tình trạng sức khỏe với chúng tôi trước khi tham gia tour. Nếu có bất cứ sự cố nào xảy ra trên tour công ty không chịu trách nhiệm dưới mọi tình huống. Dưới 4 tuổi: Miễn phí giá tour. Từ 4-10 tuổi: Tính 75% giá trọn vé. Từ 10 tuổi trở lên: Vui lòng thanh toán như giá của người lớn', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 4, 5),
(8, 'Tour 1 Ngày: Nam Đảo - Lặn Biển Phú Quốc', 'https://tourbonphuong.com/upload/product/main-98186-5280_1000x1000.jpg', 1, 1, 0, 'https://tourbonphuong.com/upload/product/xn98186-20-6115.png', 550000, 550000, 'Máy bay', '1 Ngày ', 'Được mệnh danh là Đảo Ngọc, là hòn đảo lớn nhất của Việt Nam, Phú Quốc nằm ở vùng biển phía Tây Nam của tổ quốc là hòn đảo lớn nhất trong quần thể 22 đảo lớn nhỏ tại đây. Năm 2006, Khu dự trữ sinh quyển ven biển và biển đảo Kiên Giang bao gồm cả huyện này được UNESCO công nhận là khu dự trữ sinh quyển thế giới. Nằm tại vị trí đặc biệt của vịnh Thái Lan, Phú Quốc ít bị ảnh hưởng bởi thiên tai, thiên nhiên đã ban tặng cho Phú Quốc cảnh sắc hài hòa, mát mẻ dễ chịu quanh năm và nguồn tài nguyên vô cùng đa dạng, thiên nhiên tuyệt đẹp với những cánh rừng nguyên sinh bạt ngàn, những bãi biển dài đầy nắng vàng và làn nước trong xanh. Đặc biệt, bãi Dài của Phú Quốc đứng đầu danh sách các bãi biển tiềm ẩn được các hãng thông tấn cũng như du khách nước ngoài đánh giá và bình chọn là bãi biển đứng đầu 5 bãi biển đẹp nhất thế giới. Tất cả là điểm hấp dẫn không thể cưỡng nổi với mọi du khách đưa Phú Quốc trở thành một trong những địa danh du lịch hấp dẫn nhất Việt Nam.\r\n\r\n', 'Xe vận chuyển đời mới máy lạnh đưa đón theo chương trình. Xe và hướng dẫn viên đón tại khách sạn. Tàu tham quan. Ăn trưa theo chương trình trên tàu. Phao bơi, kính lặn Ống thở. Hướng dẫn viên Tiếng Việt/ Tiến Anh. Nươc suối 1 người/chai. Bảo hiểm du lịch 20.000.000 đồng/vụ. ', 'Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAT 10%', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \r\n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 4, 1),
(9, 'Tour 4N3D: Đà lạt thiên đường hoa', 'https://tourbonphuong.com/upload/product/z4412487493697-a15ca79e63202ad81864176473515368-8949_1000x1000.jpg', 11, 2, 5, 'https://tourbonphuong.com/upload/product/vuon-hoa-cam-tu-cau-da-lat-1-286.jpeg', 3650000, 2737500, 'Ô tô', '3 Ngày 2 Đêm', 'Đà Lạt không chỉ là một điểm đến nổi tiếng với cảnh sắc thơ mộng, xanh mướt của những hàng thông, mà nơi đây còn nổi tiếng với khí hậu mát mẻ, và là xứ sở của các loài hoa đua sắc. Ở Thành phố Đà Lạt có rất nhiều loại hoa quý mang vẻ đẹp làm say đắm lòng người chính điều này đã tạo cho mảnh đất này vẻ đẹp thơ mộng, lãng mạn vô cùng. Đến với tour “Đà Lạt thiên đường hoa” quý khách sẽ được chìm đắm trong cảnh sắc mộng mơ của thiên nhiên và các loài hoa lạ, khám phá đỉnh Langbiang - Nóc nhà của Đà Lạt, tự do mua sắm tại chợ đêm  m Phủ, thưởng thức những món ăn dân dã tại đây, tìm lại cảm giác thanh bình tại Thiền Viện Trúc Lâm, thưởng thức buffet rau tươi xanh “MADE IN ĐÀ LẠT”, và chinh phục thác Pongour được mệnh danh là Nam Thiên đệ nhất thác…Nếu bạn đang tìm kiếm một chuyến đi để thư giãn và tận hưởng cuộc sống, hãy bỏ túi ngay tour Đà Lạt này nhé! \r\n', 'Xe du lịch đời mới máy lạnh. Hướng dẫn viên chuyên nghiệp suốt chuyến. Ăn cơm phần 4-5 món, 3 bữa ăn tối + ăn 4 bữa ăn sáng tại khách sạn. Phí vào cổng các điểm tham quan theo chương trình. Bảo hiểm du lịch 20.000.000/vụ. Khách sạn tiêu chuẩn. Nước suối 1 chai/người. ', 'Phụ thu phòng đơn khách đi 1 người: 300.000vnđ/khách (KS 3 sao), 450.000 vnđ/Khách (KS 4 sao). Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAT 10%. ', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 5, 3),
(10, 'Tour 3N3Đ: Đà Lạt Săn Mây', 'https://tourbonphuong.com/upload/product/san-may-da-lat-6559_1000x1000.jpg', 54, 2, 0, 'https://tourbonphuong.com/upload/product/san-may-da-lat-7015.jpg', 2890000, 2167500, 'Xe khách', '1 Ngày', 'Đà Lạt không chỉ là một địa điểm du lịch hấp dẫn bởi danh xưng “thành phố ngàn hoa”. Mà Đà Lạt còn là một nơi để quý khách tận hưởng những phút giây lắng đọng, tĩnh tâm, khi ngắm nhìn những dải mây bạc vắt ngang trời vào mỗi sớm mai tại thành phố. Đến với tour “Thiên Đường Săn Mây - Cầu Đất Panorama” quý khách sẽ có trải nghiệm “chạm vào nàng mây” trên những ngọn đồi cao vào sáng sớm, ngắm nhìn biển mây bao quanh núi đồi, cuốn lấy những tán thông và có những khoảnh khắc đáng nhớ trong đời. Ngoài trải nghiệm săn mây, quý khách sẽ được ghé thăm Quảng trường Lâm Viên - Trái tim của thành phố Đà Lạt bên bờ hồ Xuân Hương, tự do khám phá Chợ đêm  m Phủ - thiên đường của các loại mứt – trái cây sấy khô, thưởng thức chiếc bánh tráng nướng, củ khoai lang mật nướng nóng hổi, nhâm nhi ly sữa đậu nành nóng dưới thời tiết se lạnh của Đà Lạt. Còn gì bằng khi đến một nơi rời xa phố thị xô bồ, để hít tràn bầu không khí trong lành, thơm mát mùi cỏ cây.', 'Xe du lịch đời mới máy lạnh. Hướng dẫn viên chuyên nghiệp suốt chuyến. Ăn cơm phần 4-5 món, 3 bữa ăn tối + ăn 4 bữa ăn sáng tại khách sạn. Phí vào cổng các điểm tham quan theo chương trình. Bảo hiểm du lịch 20.000.000/vụ. Khách sạn tiêu chuẩn. Nước suối 1 chai/người. ', 'Phụ thu phòng đơn khách đi 1 người: 300.000vnđ/khách (KS 3 sao), 450.000 vnđ/Khách (KS 4 sao). Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAT 10%. ', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 5, 3),
(11, 'Tour Địa đạo củ chi', 'https://tourbonphuong.com/upload/product/chi-tiet-3248_1000x1000.jpg', 85, 63, 28, 'https://tourbonphuong.com/upload/product/xncc-01-13-5496.png', 450000, 337500, 'Xe khách', '2 Ngày 1 Đêm', 'Địa đạo Củ Chi không chỉ là di tích lịch sử nổi tiếng cấp quốc gia, mà nơi đây còn là một trong những điểm tham quan không thể bỏ qua khi du lịch Sài Gòn. Tour du lịch địa đạo Củ Chi của Tour Bốn Phương sẽ đem đến cho du khách những trải nghiệm sống động khi khám phá hầm địa đạo, đồng thời giúp du khách có cái nhìn rõ nét hơn về lịch sử hình thành của địa đạo Củ Chi và đời sống chiến đấu anh dũng của quân dân Việt Nam ở địa đạo.', 'Xe máy lạnh tham quan suốt chương trình. Nước 1 chai/người/ngày. Hướng dẫn viên tiếng Việt/ tiếng Anh. Chi phí tổ chức, dịch vụ. Chi phí tham quan địa đạo Củ Chi 35.000/vnđ/khách Việt Nam | Khách quốc tế 125.000vnđ/khách. Bảo hiểm du lịch 20.000.000vnđ/vụ. ', 'Chi phí ăn uống ngoài chương trình. Thuế VAT 08%. ', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \r\n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 2, 1),
(12, 'TOUR 1 ngày: Khám phá Cần Giờ', 'https://tourbonphuong.com/upload/product/chi-tiet-4848_1000x1000.jpg', 17, 79, 43, 'https://tourbonphuong.com/upload/product/xncg-01-16-3683.png', 750000, 562000, 'Xe khách', '1 Ngày ', 'Cần Giờ là “lá phổi xanh” của thành phố Hồ Chí Minh, nơi được du khách ví von là “ốc đảo xanh”  bởi những khu rừng ngập mặn xanh mướt. Với những danh hiệu trên Cần Giờ luôn là địa điểm bỏ túi khi du lịch Sài Gòn. Khi lựa chọn Tour du lịch khám phá Cần Giờ, Tour Bốn Phương sẽ đưa quý khách tận hưởng không gian xanh mát, yên tĩnh của rừng ngập mặn, hòa mình vào thiên nhiên hoang dã trên Đảo Khỉ, ghé thăm Trại cá sấu Hoa Cà để tận mắt chiêm ngưỡng loài bò sát này. Ngoài ra quý khách sẽ chiêm ngưỡng cảnh sắc bình yên tại bãi biển 30/4 và thưởng thức hải sản tươi sống, giá rẻ vừa được ngư dân đánh bắt xa bờ tại chợ hải sản Cần Giờ…  Mặc dù Cần Giờ nằm không quá xa trung tâm Sài Gòn, nhưng tour Cần Giờ trong ngày hứa hẹn sẽ mang lại cho quý khách những giây phút nhẹ nhàng, bình yên xoa dịu tâm hồn sau những ồn ào, khói bụi, tất bật của thành phố.  \r\n', 'Xe đời mới, máy lạnh, đưa đón đoàn tham quan suốt chuyến. Chi phí tham quan các điểm trong chương trình. Hướng dẫn viên chuyên nghiệp, năng động, phục vụ suốt tuyến. Nước uống - suất ăn trưa cơm phần ghép 4-5 món. Bảo hiểm du lịch 20.000.000 vụ', 'Chi phí tham quan ngoài chương trình. Chi phí ăn uống ngoài chương trình. Thuế VAT 08%. ', 'Trẻ em dưới 4 tuổi được miễn phí (ngồi chung với người lớn). Trẻ em từ 4-10 tuổi tính giá 75% giá vé người lớn. Trẻ em trên 10 tuổi tính giá người lớn. \r\n', 'Hủy trước 10 ngày chịu phạt 50% phí tour. Hủy trước 03-09 ngày chịu phạt 75% phí tour. Hủy trước 02 ngày chịu phạt 100% phí tour. ', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_image`
--

CREATE TABLE `tour_image` (
  `image_id` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_image`
--

INSERT INTO `tour_image` (`image_id`, `img`, `tour_id`) VALUES
(1, 'https://tourbonphuong.com/upload/album/img-1170-8339.JPG', 2),
(2, 'https://tourbonphuong.com/upload/album/img-0757-3537.jpg', 2),
(3, 'https://tourbonphuong.com/upload/album/img-0756-6555.JPG', 2),
(4, 'https://tourbonphuong.com/upload/album/z4268842211383-2cf94295d0f7e99852b867c3ea1d8990-1558.jpg', 4),
(5, 'https://tourbonphuong.com/upload/album/z4263774953594-f573431fd37110b255385d452cfa1277-1913.jpg ', 3),
(6, 'https://tourbonphuong.com/upload/album/z4263774953594-f573431fd37110b255385d452cfa1277-1913.jpg ', 3),
(7, 'https://tourbonphuong.com/upload/album/tuor-du-lich-sai-gon-(2)-7481.jpg', 11),
(8, 'https://tourbonphuong.com/upload/album/toa-thanh-tay-ninh-dia-dao-cu-chi-(4)-3259.jpg', 11),
(9, 'https://tourbonphuong.com/upload/album/tour-dia-dao-cu-chi-(6)-8880.jpg', 11),
(10, 'https://ik.imagekit.io/tvlk/blog/2023/01/canh-dep-da-lat-1.jpg?tr=dpr-2,w-675', 9),
(11, 'https://ik.imagekit.io/tvlk/blog/2023/01/canh-dep-da-lat-2.jpg?tr=dpr-2,w-675', 9),
(12, 'https://ik.imagekit.io/tvlk/blog/2023/01/canh-dep-da-lat-3.jpg?tr=dpr-2,w-675', 10),
(13, 'https://ik.imagekit.io/tvlk/blog/2023/01/canh-dep-da-lat-4.jpg?tr=dpr-2,w-675', 10),
(14, 'https://ik.imagekit.io/tvlk/blog/2023/01/canh-dep-da-lat-7.jpg?tr=dpr-2,w-675', 10),
(15, 'https://ik.imagekit.io/tvlk/blog/2023/01/canh-dep-da-lat-16.jpg?tr=dpr-2,w-675', 9),
(16, 'https://i-dulich.vnecdn.net/2023/11/08/pha1-8030-1699438964.jpg', 12),
(17, 'https://i-dulich.vnecdn.net/2023/11/08/khi4-3646-1699414901.jpg', 12),
(18, 'https://i1-dulich.vnecdn.net/2023/11/08/SUP-7567-1699438965.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=h7DPxleghQLXT-becLX1bQ', 12),
(19, 'https://i-dulich.vnecdn.net/2023/11/08/thieng1-7723-1699438965.jpg', 12),
(20, 'https://bachkhoaland.com/wp-content/uploads/2021/07/dao-ngoc-phu-quoc-2.jpg', 7),
(21, 'https://bachkhoaland.com/wp-content/uploads/2021/07/dao-ngoc-phu-quoc-3.jpg', 7),
(22, 'https://lh6.googleusercontent.com/GC4Ig06C-TpFQWdOjkt3yLm-ujeUSyRmODZJbMDD2AHNIGWtawi_HWT9I_7ER_tDCt3PT6I8yy7rwx2isr9hylSp6WxEyUaALph0kY6sxMH9FAcCSAK--ntN6W2y9rk9QT9-NW4K', 7),
(23, 'https://www.gotadi.com/tour/wp-content/uploads/2021/12/Bai-Dai.jpg', 7),
(24, 'https://lh4.googleusercontent.com/KVtYMpfWqOzJ3_Bq77r6E6Ieok12OVhWQdbZAbVan8Far2s62PAhbFXX35nG24i10vzMKIexFvbMwYok2Hjsa8cUxhjpB-t9o258M3MheLr1iJnPEsIXv5Dui1rdDv1nI2KaikDC', 7),
(25, 'https://statics.vinpearl.com/nam-dao-phu-quoc-co-nhung-gi-2_1632651602.png', 8),
(26, 'https://statics.vinpearl.com/nam-dao-phu-quoc-co-nhung-gi-5_1679646156.jpg', 8),
(27, 'https://indochinaqueencruise.com.vn/wp-content/uploads/2023/05/PTA01355-scaled.jpg', 6),
(28, 'https://indochinaqueencruise.com.vn/wp-content/uploads/2023/05/PTA01345-1-scaled.jpg', 6),
(29, 'https://indochinaqueencruise.com.vn/wp-content/uploads/2023/04/365902-du-thuyen-indochina-queen-5-sao-buffet-tet-tay-1.jpg', 6),
(30, 'https://cdn2.ivivu.com/2023/02/06/16/ivivu-nui-ba-den-1.gif', 5),
(31, 'https://cdn2.ivivu.com/2020/10/13/15/ivivu-toa-thanh-cao-dai1.gif', 5),
(32, 'https://cdn2.ivivu.com/2019/06/04/10/ivivu-nui-ba-den-220812.jpg', 5),
(33, 'https://cdn2.ivivu.com/2020/10/13/15/ivivu-toa-thanh-cao-dai1.gif', 5),
(34, 'https://vietpowertravel.vn/data/images/dia%20dao%20cu%20chi3.jpg', 11),
(35, 'https://datviettour.com.vn/uploads/images/mien-nam/cu-chi/hinh-danh-thang/dia-dao-cu-chi-850px.jpg', 11),
(36, 'https://thamhiemmekong.com/wp-content/uploads/2020/05/culaotanphong06.jpg      ', 1),
(37, 'https://thamhiemmekong.com/wp-content/uploads/2020/05/culaotanphong06.jpg      ', 1),
(38, 'https://thamhiemmekong.com/wp-content/uploads/2020/05/culaotanphong06.jpg      ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_schedule`
--

CREATE TABLE `tour_schedule` (
  `schedule_id` int(11) NOT NULL,
  `location` varchar(64) NOT NULL,
  `description` longtext NOT NULL,
  `day` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_schedule`
--

INSERT INTO `tour_schedule` (`schedule_id`, `location`, `description`, `day`, `tour_id`) VALUES
(2, 'MỸ THO - BẾN TRE', 'Xe và hướng dẫn viên sẽ đón quý khách tại điểm hẹn, sau đó khởi hành đi Mỹ Tho, bắt đầu hành trình. Đầu tiên, đoàn sẽ ghé trạm dừng chân Mekong Rest Stop - trạm dừng chân nổi tiếng với nhiều tiểu cảnh đẹp, để đoàn dùng bữa sáng (chi phí tự túc) và tham quan. Tiếp tục chương trình, đoàn tham quan chùa Vĩnh Tràng - điểm du lịch tâm linh nổi tiếng nhất Tiền Giang. Sau đó, đoàn đến bến tàu để du ngoạn sông Tiền, chiêm ngưỡng cù lao Tứ linh và tham quan Cồn Lân - Cồn Phụng. Tại Cồn Phụng, đoàn sẽ được trải nghiệm thú vui tái mương bắt cá quen thuộc của người dân xứ sở miệt vườn. Sau khi dùng cơm trưa và nghỉ ngơi ở Cồn Phụng, quý khách di chuyển sang tham quan Cồn Lần. Khi khám phá Cồn Lân, quý khách sẽ được tham gia các hoạt động như sau: thưởng thức hương vị trà mật ong hoa nhãn thơm ngon tại trại nuôi ong và chụp hình với tổ ong, tham quan xưởng chế biến kẹo dừa, tìm hiểu quy trình làm kẹo dừa thủ công và dùng thử kẹo dừa mới ra lò, thưởng thức trái cây theo mùa tưới ngon và giao lưu đờn ca tài tử cùng người dân địa phương, đi dạo quanh đường làng bằng xe ngựa, chèo xuồng ba lá cùng người dân địa phương, tận hưởng không gian xanh mát giữa hai hàng dừa nước. Đoàn quay lại bến tàu ban đầu và khởi hành lại về TP.HCM, kết thúc hành trình tour tát mương bắt cá. ', 1, 2),
(3, 'MỸ THO - BẾN TRE', 'Bắt đầu hành trình tour miền Tây 1 ngày, xe và hướng dẫn viên sẽ đón quý khách tại điểm hẹn và khởi hành đến thành phố Mỹ Tho. Tại Mỹ Tho, đoàn sẽ ghé trạm dung chan Mekong Rest Stop - mot điem dung chan ấn tượng voi du khách khi du lịch miền Tây bởi những món đặc sản thơm và những tiểu cảnh của cảnh sắc miền Tây. Tiếp tục hành trình du lịch Mỹ Tho, đoàn di chuyển đến bến tàu và thay đổi phương tien sang thuyền để du ngoạn trên sông Tiền, ngắm cù lao - Tứ Linh va tham quan va tham quan Cồn Lan, Con Phung. Đầu tien, quý khách sẽ khám phá cồn Lân với những điểm nổi bật: Thưởng thức trà mật ong hoa nhãn thơm ngon và chụp hình với tổ ong, Tham quan cơ sở sản xuất kẹo dừa, tìm hiểu quy trình làm kẹo dừa thủ công và dùng thử kẹo dừa mới ra lò. Dạo vườn trái cây, thưởng thức trái cây theo mùa và đắm chìm trong giai điệu đờn ca tài tử mùi mẫn. Dạo quanh đường làng bằng xe ngựa. Chèo xuồng ba lá len lỏi trên con rạch nhỏ giữa hai hàng dừa nước xanh mát. \r\nThuyền sẽ đưa quý khách đến cồn Phụng dùng bữa trưa tại nhà hàng trong khu du lịch sinh thái Cồn Phụng. Sau khi dùng bữa trưa, quý khách sẽ có thời gian tự do tham quan Cồn phụng, dạo quanh cù lao và ngắm cảnh làng quê miền Tây yên ả, khám phá, tìm hiểu về di tích đạo Dừa.\r\nĐoàn sẽ di chuyển đến điểm đến cuối cùng là chùa Vĩnh Tràng - địa điểm du\r\nlịch tâm linh nổi tiếng, đồng thời là ngôi chùa cổ lớn nhất ở Tiền Giang với kiến\r\ntrúc Đông - Tây kết hợp vô cùng độc đáo.\r\nKhởi hành về lại thành phố Hồ Chí Minh, kết thúc tour du lịch miền Tây 1 ngày.', 1, 3),
(4, 'MỸ THO - BẾN TRE', 'Xe tour và hướng dẫn viên sẽ đón quý khách tại văn phòng công ty và khởi hành\r\nđi thành phố Mỹ Tho, bắt đầu hành trình tour miền tây 2 ngày 1 đêm. Đoàn sẽ dừng chân dùng bữa sáng (chi phí tự túc) tại trạm dừng chân Mekong Rest Stop - trạm dừng chân noi tiếng với nhieu tiểu cảnh mo phong canh đep mien Tây. Tiếp tục hành trình, đoàn viếng thăm chùa Vĩnh Tràng - di tích lịch sử - văn hóa cấp quốc gia, đồng thời đây cũng là điểm du lịch tâm linh nổi tiếng ở miền Tây. Sau đó, đoàn di chuyển đến bến tàu, xuôi theo dòng sông Tiền ngắm cảnh cù lao Tứ Linh từ xa va tham quan Con Lan - Con Phung. Tại Cồn Lân, đoàn sẽ tham gia những hoạt động thú vị như: Dùng trà mật ong hoa nhãn tại trại nuôi ong của người dân địa phương và chụp ảnh cùng tổ ong. Tham quan xưởng sản xuất kẹo dừa, tìm hiểu cách làm kẹo dừa và dùng thử kẹo dừa mới ra lò. Thưởng thức trái cây theo mùa và lắng nghe giai điệu đờn ca tài tử lãng mạn Đi dạo bằng xe ngựa quanh đường làng. Trải nghiệm chèo xuồng ba lá cùng người dân địa phương. Đoàn dùng cơm trưa tại khu du lịch sinh thái Cồn Phụng. Sau bữa trưa, đoàn có thời gian tự do tham quan Cồn Phụng với những hoạt động giải trí như: câu cá sấu, cá bú bình, ... và một số trò chơi dân gian. Buổi chiều: Đoàn quay lại bến tàu ban đầu và khởi hành đi Cần Thơ, tiếp tục hành trình tour miền Tây 2 ngày 1 đêm. Đến thành phố Cần Thơ, đoàn nhận phòng khách sạn, nghỉ ngơi và dùng bữa tối trên du thuyền. Sau bữa tối, đoàn có thời gian tự do khám phá thành phố Cần Thơ về đêm với những địa điểm vui chơi nổi bật như: bến Ninh Kiều, chợ đêm Tây Đô, ..', 1, 4),
(5, 'CẦN THƠ - CHỢ NỔI CÁI RĂNG - TP.HCM', 'Đoàn dùng bữa sáng tại khách sạn. Sau đó, đoàn di chuyển ra bến tàu để tham quan chợ nổi Cái Răng - di sản văn hóa phi vật thể cấp quốc gia. Quý khách sẽ có cơ hội tìm hiểu nét văn hóa mua bán trên sông đặc trưng của người dân Nam Bộ và cuộc sống lênh của con người nơi đây. Khi tham quan chợ, đoàn sẽ ghé tham quan làng hủ tiểu, thưởng thức món \"pizza hủ tiếu\" độc lạ và tìm hiểu về làng nghề truyền thống làm hủ tiếu nổi tiếng một thời của vùng đất Cần Thơ. Tiếp tục hành trình tour miền Tây 2 ngày 1 đêm, đoàn sẽ di chuyển đến địa điểm tham quan tiếp theo là Cồn Sơn. Tại đây, đoàn sẽ dùng cơm trưa với những món đặc sản đậm chất miền Tây như: bánh xèo, cá kho tộ, lầu cá lóc bông súng, ... Sau đó, đoàn sẽ có thời gian tự do tham quan, đi dạo vườn trái cây theo mùa và xem mô hình \"cá lóc bay\" độc đáo. Đoàn khởi hành về lại thành phố Hồ Chí Minh, kết thúc hành trình tour miền Tây 2 ngày 1 đêm. ', 2, 4),
(6, 'TÒA THÁNH TÂY NINH - NÚI BÀ ĐEN', 'Xe và hướng dẫn viên sẽ đón Quý khách tại điểm hẹn vào lúc 05h00 sáng và bắt\r\nđầu hành trình tour Tòa thánh Tây Ninh - Núi Bà Đen 1 ngày. Trên đường đến Tây Ninh, đoàn sẽ dừng chân thưởng thức đặc sản bánh canh Trảng Bàng tại quán điểm tâm sáng ở địa phương. Đến Tây Ninh, Quý khách sẽ chinh phục đỉnh Vân Sơn của núi Bà Đen bằng tuyến cap treo nha ga Van Son thuoc he thong cap treo Sun World Ba Den Mountain. Đây là hệ thống cáp treo được tổ chức kỹ lục Guinness công nhận là \" NHA GA CAP TREO LON NHẤT THẾ GIOI\" voi diện tích len đen 10,959m2 tại Tay Ninh, đuợc xây dựng theo phong cách châu Âu cổ điển và huyền bí. Tại đỉnh Vân Sơn, Quý khách có thể tham gia các hoạt động như: Thưởng ngoạn vườn hoa rực rỡ và đa dạng. Check-in tại cột mốc độ cao 968m - niềm tự hào của người dân Tây Ninh. Chiêm ngưỡng tượng Phật Bà Tây Bồ Đà Sơn - được Tổ chức Kỷ lục Châu Á ghi nhận là \" Tượng Phật Bà bằng đồng cao nhất Châu Á tọa lạc trên đỉnh núi\". Tìm hiểu văn hóa phật giáo tại không gian trưng bày nghệ thuật Phật Giáo. Quý khách nghỉ ngơi dùng cơm trưa tại nhà hàng cho ngày thường ( T7&CN ăn buffet trên đỉnh Vân Sơn - với hơn 80 món). Sau khi dùng bữa, đoàn sẽ ghé qua vườn nho Tây Ninh, thưởng thức nho tại vườn và chụp ảnh cùng những chùm nho chính mọng. Tiếp tục hành trình, đoàn tham quan và tìm hiểu về đạo Cao Đài tại tòa thánh Tây Ninh hay còn đuợc gọi là Đen Thánh voi quần the kiến trúc the hiện sự hai hoa giua phong cách kiến trúc Á Đông và phương Tây. Tham quan chùa Gò Kén Tây Ninh, một trong những ngôi chùa cổ có tuổi đời hơn trăm năm, sở hữu bức tưong Phật Quan Thế Am lon bac nhất mien Đông Nam Bộ. Đoàn ghé dừng chân tại cơ sở dược liệu Bảy Nga tìm hiểu về cây Trà Hoàn Ngọc và Đông Trùng Hạ Thảo, ... mua trái cây theo mùa tại vườn ( dưa lưới, nho, mãng cầu, .... ) làm quà cho người thân, bạn bè. Đoàn khởi hành về lại thành phố Hồ Chí Minh, kết thúc hành trình tour Tòa thánh Tây Ninh - Núi Bà Đen 1 ngày. ', 1, 5),
(8, 'DU THUYỀN ĐÔNG DƯƠNG INDOCHINE CRUISE', 'LỊCH TRÌNH TOUR:\r\n18h30 - 19h00: Đon khach tại cau tau so 05 Nguyen Tat Thanh, Q.4, TP.HCM\r\n19h30 - 19h45: Tau khoi hanh du ngoạn song đem Sai Gòn va ăn tối tren du thuyen\r\nĐong Dương - Indochine Cruise\r\n21h15 : Kết thúc chương trình, tau cap ben tra khách', 1, 6),
(9, 'PHÚ QUỐC CHÀO ĐON ĐOÀN', 'Buổi sáng: Don khach tai san bay Phu Quoc > Tham quan Dinh Cau, Thuy Long Thánh Mẫu > Dùng bữa trưa tại nhà hàng > Nhận phòng khách. Buoi chieu: Doan tham quan chua Sung Hung Co Tự viếng huong > Tham nha thùng lâu đời làm nước mắm cá cơm truyền thống > tham quan vườn Tiêu Suối Đá, Trại Ong, Suối tranh > Tham quan cơ sở sản xuất hải sản khô, làng chài Hàm Ninh. Buổi tối: Dùng cơm tối, thưởng thức hải sản tươi ngon > Tự do khám phá Phú Quốc về đêm. ', 1, 7),
(10, 'KHÁM PHÁ NAM ĐẢO PHÚ QUỐC', 'Buổi sáng: Đi dạo, ngắm cảnh bình minh và dùng điểm tâm sáng > Đoàn khởi hành\r\nđi câu cá biển Đông - lặn ngắm san hô và khám phá đảo hoang Phú Quốc > Thưởng\r\nthức những món ăn dân dã trên đảo > Dùng cơm trưa trên tàu. Buổi chiều: Đoàn quay về khách sạn > Khoi hành đi khu nuoi cấy Ngọc Trai - một trong những nét đặc trưng mà du khách không thể bỏ qua khi đến với Phú Quốc > Tham quan khu di tích lịch sử nhà Tù Phú Quốc nơi được mệnh danh là địa ngục trần gian, đã từng trải qua hai thời kỳ chống thực dân Pháp và đế quốc Mỹ > Tắm biển tại bãi Sao một trong những bãi biển với làn nước xanh biếc, bờ cát trắng mịn nổi tiếng tại Phú Quốc > Tham quan chùa Hộ Quốc, lễ Phật và ngắm phong cảnh tuyệt đẹp của chùa. Buổi tối: Dùng bữa tối tại nhà hàng > nghỉ đêm tại khách sạn.', 2, 7),
(11, 'PHÚ QUỐC - HEN GẶP LẠI', 'Buổi sáng: Dùng điểm tâm sáng > Đoàn đi tham quan mua sắm vai điem trung tâm > Làm thủ tục trả phòng > Du khách có thể chọn 1 trong 3 chương trình tự túc sau: Khám pha Vinpearl Land - Disneyland Hong Kong và Safari. Khám phá đảo Hòn Thơm bằng cáp treo. Khám phá làng chài Rạch Vẹm. Xe và HDV đưa du khách ra sân bay đáp chuyến bay về lại TP. HCM/HN, kết thúc tour Phú Quốc 3 ngày 2 đêm. ', 3, 7),
(12, 'NAM ĐẢO - LẶN BIỂN PHÚ QUỐC', 'Buổi sáng: Tham quan bến cang Dinh Cau > Lên tàu ra khơi câu ca bien Đông - lặn\r\nngắm san hô và khám phá hoang đảo Phú Quốc > Dùng cơm trưa trên tàu > Về\r\nkhách sạn nghỉ ngơi. Buổi chiều: Đoàn khởi hành đi tham quan Nam Đao > Tham quan khu nuoi cấy Ngọc Trai một trong những điểm đến mà du khách không thể bỏ qua khi đến với\r\nPhú Quốc > Tham quan khu di tích lịch sử nhà tù Phú Quốc nơi được mệnh danh là địa ngục trần gian, đã từng trải qua hai thời kỳ chống thực dân Pháp và đế quốc Mỹ\r\n> Tắm biển tại bãi Sao một trong những bãi biển với làn nước xanh biếc, bờ cát trắng mịn nổi tiếng tại Phú Quốc > Tham quan và viếng Chùa Hộ Quốc > Kết thúc tour 1 ngày khám phá Nam Đảo và lặn biển Phú Quốc. ', 1, 8),
(13, 'PHÚ QUỐC - ĐÔNG ĐẢO', 'Buoi sang: Don khach tai san bay Phu Quoc > Tham quan Dinh Cau, Thuy Long Thánh Mẫu mot bieu tượng tín ngưong của ngưoi dân hải đảo > Đoan dùng cơm trưa tại nhà hàng > Nhận phòng khách sạn. Buoi chieu: Doan tham quan chua Sung Hung Co Tự viếng huơng, hai loc đầu năm > Thăm nhà thùng lâu đời làm nước mắm cá cơm truyền thống > Tham quan vườn Tiêu Suối Đá, Suối Tranh > Tham quan cơ sở hải sản khô, cơ sở sản xuất rượu vang sim, làng chai Hàm Ninh làng chai cổ xưa cua ngưoi dân tren đảo, nơi nổi tiếng với nhiều loại hải sản tươi ngon và giá rẻ. Buổi tối: Dùng cơm tối, thưởng thức hải sản tươi ngon > Tự do khám phá Phú Quốc về đêm. ', 1, 9),
(14, 'KHÁM PHÁ NAM ĐẢO PHÚ QUỐC', 'Buổi sáng: Ngắm cảnh bình minh, đi dạo và dùng điểm tâm sáng > Khởi hành đi tham quan Nam Đao > Tham quan khu nuoi cấy Ngọc Trai - mot trong nhung nét đặc trưng mà du khách không thể bỏ qua khi đến với Phú Quốc > Tham quan khu di tích lịch sử nhà tù Phú Quốc nơi mệnh danh là địa ngục trần gian, đã từng trải qua hai thời kỳ chống thực dân Pháp và đế quốc Mỹ > Tắm biển bãi Sao một trong những bãi biển với làn nước xanh biếc, bờ cát trắng mịn nổi tiếng tại Phú Quốc > Tham quan chùa Hộ Quốc lễ Phật và ngắm phong cảnh tuyệt đẹp của chùa > Đoàn dùng cơm trưa tại nhà hàng. Buổi chiều: Đoàn đến cảng biển > Lên tàu bắt đầu trải nghiệm câu cá biển Đông - lặn ngắm san hô và khám phá đảo hoang Phú Quốc > Dùng cơm chiều. Buổi tối: Tự do tham quan chợ đêm Dinh Cậu trải nghiệm văn hóa ẩm thực Phú Quốc > Du khách có thể đặt tour Câu mực đêm (chi phí tự túc) để tận hưởng trọn vẹn hơn vẻ đẹp Phú Quốc về đêm.', 2, 9),
(15, 'KHÁM PHÁ VINPEARL LAND/SAFARI', 'Buổi sáng: Dùng điểm tâm sáng > Tự do nghi ngơi va tam bien Duơng Đong > Dang\r\nký tham quan Vinpearland/Safari (Chi phí tự túc). Buoi chiều: Dùng cơm tối tại Vinpearland (Ap dung cho đoàn 10 ngưoi tro len) > Thưởng thức chương trình nhạc nước hoành tráng nhất Đông Nam Á, biểu diễn cá heo ... (Chi phí tham quan tự túc) > Đoàn về khách sạn nghỉ ngơi. ', 3, 9),
(16, 'PHÚ QUỐC - HẸN GẶP LẠI', 'Buổi sáng: quý khách ăn sáng muộn, tự do nghỉ ngơi tại khách sạn > Xe và HDV đưa\r\ndu khách ra sân bay quay về TP.HCM kết thúc tour Phú Quốc 4 ngày 3 đêm.', 4, 9),
(17, 'Cái Bè', 'hi', 1, 1),
(19, 'BẾN TRE', ' Bắt đầu hành trình tour miền Tây 1 ngày, xe và hướng dẫn viên sẽ đón quý khách tại điểm hẹn và khởi hành đến thành phố Mỹ Tho. Tại Mỹ Tho, đoàn sẽ ghé trạm dung chan Mekong Rest Stop - mot điem dung chan ấn tượng voi du khách khi du lịch miền Tây bởi những món đặc sản thơm và những tiểu cảnh của cảnh sắc miền Tây. Tiếp tục hành trình du lịch Mỹ Tho, đoàn di chuyển đến bến tàu và thay đổi phương tien sang thuyền để du ngoạn trên sông Tiền, ngắm cù lao - Tứ Linh va tham quan va tham quan Cồn Lan, Con Phung. Đầu tien, quý khách sẽ khám phá cồn Lân với những điểm nổi bật: Thưởng thức trà mật ong hoa nhãn thơm ngon và chụp hình với tổ ong, Tham quan cơ sở sản xuất kẹo dừa, tìm hiểu quy trình làm kẹo dừa thủ công và dùng thử kẹo dừa mới ra lò. Dạo vườn trái cây, thưởng thức trái cây theo mùa và đắm chìm trong giai điệu đờn ca tài tử mùi mẫn. Dạo quanh đường làng bằng xe ngựa. Chèo xuồng ba lá len lỏi trên con rạch nhỏ giữa hai hàng dừa nước xanh mát. \r\n', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(64) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `avatar` varchar(256) DEFAULT NULL,
  `role` varchar(1) NOT NULL DEFAULT 'U',
  `username` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `phone_number`, `email`, `avatar`, `role`, `username`, `password`, `address`) VALUES
(5, 'Tiến Nguyễn', '0346066323', 'tien.nguyen2283@hcmut.edu.vn', '', 'U', 'tien.nguyen2283', '$2y$10$w8UVLztDz7kMrKiJ55GR7OTiCMJA1QM32571GNj/tJ4jOGsfM57Da', 'nha'),
(6, NULL, NULL, 'tienyen2283@gmail.com', '', 'A', 'tien2114988', '$2y$10$3rzCFjLiKK4.Rfd2Q0VUkec8dtGNnBtjqFzcbemlZ4tBKHKZKJbce', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_fk` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`,`tour_id`),
  ADD KEY `comment_fk` (`tour_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `related_tour`
--
ALTER TABLE `related_tour`
  ADD PRIMARY KEY (`news_id`,`tour_id`),
  ADD KEY `related_fk_2` (`tour_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `tour_cate_fk` (`category_id`);

--
-- Indexes for table `tour_image`
--
ALTER TABLE `tour_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `tour_image_fk` (`tour_id`);

--
-- Indexes for table `tour_schedule`
--
ALTER TABLE `tour_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `tour_schedule_fk` (`tour_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tour_image`
--
ALTER TABLE `tour_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tour_schedule`
--
ALTER TABLE `tour_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_fk` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Constraints for table `related_tour`
--
ALTER TABLE `related_tour`
  ADD CONSTRAINT `related_fk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`),
  ADD CONSTRAINT `related_fk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_cate_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `tour_image`
--
ALTER TABLE `tour_image`
  ADD CONSTRAINT `tour_image_fk` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Constraints for table `tour_schedule`
--
ALTER TABLE `tour_schedule`
  ADD CONSTRAINT `tour_schedule_fk` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
