-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 10:58 PM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements_awards`
--

CREATE TABLE `achievements_awards` (
  `achievements_awards_name` text NOT NULL,
  `achievements_awards_description` text NOT NULL,
  `achievements_awards_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements_awards`
--

INSERT INTO `achievements_awards` (`achievements_awards_name`, `achievements_awards_description`, `achievements_awards_src`) VALUES
('Dishwasher Awards', 'America\'s Most Trusted&reg; Dishwasher 5 Years in a Row 2019-2023*', './public/img/achievements/awardB-01.jpg'),
('Refrigeration Awards', 'America’s Most Trusted® Refrigerator 5 Years in a Row 2019-2023* by Lifestory Research', './public/img/achievements/awardB-02.jpg'),
('GH Best Products Award', 'Good Housekeeping Best Tested Products 2021 Award', './public/img/achievements/awardB-03.jpg'),
('Cooktop Awards', 'Good Housekeeping Best Kitchen Gear 2021 Award', './public/img/achievements/awardB-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `achievements_main`
--

CREATE TABLE `achievements_main` (
  `achievements_main_name` text NOT NULL,
  `achievements_main_description` text NOT NULL,
  `achievements_main_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements_main`
--

INSERT INTO `achievements_main` (`achievements_main_name`, `achievements_main_description`, `achievements_main_src`) VALUES
('Partner of the Year Award!', 'Bosch earns 2023 ENERGY STAR® Partner of the Year Award!', './public/img/achievements/baner-right-image-01.jpg'),
('America’s Most Trusted®', 'America’s Most Trusted® Kitchen Brand 5 Years in a Row 2019-2023*', './public/img/achievements/baner-right-image-02.jpg'),
('IF Design Award', 'Bosch Industrial-Style Range awarded 2022 IF Design Award', './public/img/achievements/baner-right-image-03.jpg'),
('Company of the Year', 'Bosch Wins Connected Home Company of the Year Award.', './public/img/achievements/baner-right-image-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `init` varchar(255) DEFAULT '0',
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `init`, `createAt`, `updateAt`) VALUES
('admin', '$2y$10$16nKrw2Lk8TGRgEF0VYwqevMqG3JnEIkw3kmKqd2KDkvkxoskBiZu', '0', '2023-04-22 19:49:49', '2023-04-22 19:49:49'),
('ducnguyen', '$2y$10$7MwPTLycJRZNwFzHnHrYWO2VkFKfgYLKmQUIWBUMSlghO8hucC6jy', '0', '2023-04-22 19:50:28', '2023-04-22 19:50:28'),
('hoangphuc', '$2y$10$13d5OlDv5R74P6lemUMVJejsNjwq1IbuMqCR0LzlLn0KWKx5MnpWm', '0', '2023-04-22 19:50:10', '2023-04-22 19:50:10'),
('quangvinh', '$2y$10$ng45/YpuZVsHo5CnlEYazOsnCSpgvkJ552vFBKSwN4yB147/FAH0u', '0', '2023-04-22 19:49:59', '2023-04-22 19:49:59'),
('thaibinh', '$2y$10$r0MLe8ouBSK8u3Nn8tWwV.JMVM9GdktQS3Tleo5wv5uEJfiD2ALrq', '0', '2023-04-22 19:50:19', '2023-04-22 19:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `date`, `approved`, `content`, `news_id`, `user_id`, `parent`) VALUES
(35, '2023-04-23 02:09:04', 1, 'Thật hay !!', 8, 'vinh.dangquang03@hcmut.edu.vn', NULL),
(36, '2023-04-23 02:09:55', 1, 'Thật tuyệt !! Bosch xứng đáng là nơi làm việc lý tưởng', 8, 'phuc.nguyen2003@hcmut.edu.vn', NULL),
(37, '2023-04-23 02:11:05', 1, 'Thực sự rất mong chờ !!', 7, 'vinh.dangquang03@hcmut.edu.vn', NULL),
(38, '2023-04-23 02:11:19', 1, 'Tài năng của các kỹ sư quả là tuyệt vời', 6, 'vinh.dangquang03@hcmut.edu.vn', NULL),
(39, '2023-04-23 02:11:57', 1, 'Mong Bosch sớm đến với Bách Khoa HCM', 7, 'phuc.nguyen2003@hcmut.edu.vn', NULL),
(40, '2023-04-23 02:12:24', 1, 'Rất đáng để mong đợi!!', 7, 'phuc.nguyen2003@hcmut.edu.vn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `createAt`, `updateAt`) VALUES
(1, 'Chi nhánh TPHCM', '268 Lý Thường Kiệt, Phường 14, Quận 10, TPHCM', NULL, NULL),
(2, 'Chi nhánh Đà Nẵng', 'Số 346, đường 2/9,\nQuận Hải Châu,\nThành phố Đà Nẵng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `status`, `date`, `description`, `content`, `title`) VALUES
(3, 1, '2023-04-22 08:59:04', 'Bosch Việt Nam đạt chứng nhận Great Place to Work năm 2023 cho những nỗ lực không ngừng nghỉ trong việc xây dựng môi trường làm việc đáng tin cậy và chuyên nghiệp\r\n', 'Thành phố Hồ Chí Minh, Việt Nam – Bosch Việt Nam, nhà cung cấp dịch vụ và công nghệ hàng đầu thế giới, đã đạt được chứng nhận “Great Place to Work” năm 2023 cấp bởi Great Place to Work, cơ quan toàn cầu về đánh giá và công nhận văn hóa nơi làm việc. Đây là minh chứng cho cam kết của Bosch Việt Nam trong việc tạo ra một môi trường làm việc tích cực và gắn kết cho nhân viên.\r\n\r\n\r\nKết quả mà Bosch Việt Nam đạt được đánh giá dựa trên khảo sát từ 1.272 nhân viên với những yếu tố chính như: Tín nhiệm (Credibility), Tôn trọng (Respect), Công bằng (Fairness), Gắn bó (Camaraderie) và Tự hào (Pride). Khảo sát cho thấy 89% nhân viên đánh giá Bosch Việt Nam là một nơi tuyệt vời để làm việc, khẳng định nỗ lực của công ty trong việc thúc đẩy văn hóa làm việc tích cực.', 'Bosch Việt Nam đạt chứng nhận “Great Place to Work” năm 2023'),
(4, 1, '2023-04-22 09:05:07', 'Ông Vijay Ratnaparkhe được bổ nhiệm vị trí tân chủ tịch Bosch tại khu vực Đông Nam Á và giám đốc điều hành của Bosch Singapore. Ông đảm nhiệm trọng trách định hướng, thiết lập chiến lược tăng trưởng và hoạt động kinh doanh của tập đoàn Bosch trong khu vực Đông Nam Á', 'Singapore – Hiệu lực từ ngày 01 tháng 01 năm 2023, ông Vijay Ratnaparkhe chính thức đảm nhận cương vị tân chủ tịch Bosch tại khu vực Đông Nam Á và giám đốc điều hành của Bosch Singapore, kế nhiệm ông Martin Hayes sau khi ông Martin rời đi. Trên cương vị mới, ông Vijay chịu trách nhiệm về chiến lược định hướng, phát triển kinh doanh tổng thể bao gồm nhiều khu vực kinh doanh khác nhau của Bosch tại thị trường Đông Nam Á, với trụ sở chính tại Singapore.\r\n\r\nÔng Vijay đã có hơn 16 năm kinh nghiệm làm việc tại Tập đoàn Bosch ở nhiều đơn vị kinh doanh và bộ phận khác nhau. Gần đây nhất là từ tháng 9 năm 2019 đến tháng 12 năm 2022, ông đảm nhận vị trí Giám đốc Thông tin và chủ tịch Dịch vụ và Hệ thống Thông tin Toàn cầu của Tập đoàn Bosch tại Đức. Ông chịu trách nhiệm về tầm nhìn chiến lược và đổi mới, quản lý chất lượng, cơ sở hạ tầng và công nghệ vượt trội, v.v', 'Bosch bổ nhiệm tân chủ tịch điều hành khu vực Đông Nam Á'),
(5, 1, '2023-04-22 09:06:00', 'Công ty sẽ đẩy mạnh trọng tâm vào các hoạt động đổi mới sáng tạo trong việc nghiên cứu và phát triển;\r\nTriển khai kế hoạch mở rộng bằng việc thành lập chi nhánh Trung tâm mới tại Hà Nội, Việt Nam;', 'Tp.HCM, Ngày 04 tháng 01 năm 2022, Công ty Robert Bosch Engineering and Business Solutions Việt Nam (RBVH), hay còn gọi là Trung tâm Nghiên cứu & Phát triển Công nghệ và các giải pháp doanh nghiệp Bosch tại Việt Nam sẽ chính thức trở thành Bosch Global Software Technologies Vietnam - Công ty Công nghệ Phần mềm Toàn cầu Bosch (BGSV).', 'Trung tâm Nghiên cứu & Phát triển Công nghệ và các giải pháp doanh nghiệp Bosch tại Việt Nam chính thức đổi tên thành Công ty Công nghệ Phần mềm Toàn cầu Bosch'),
(6, 1, '2023-04-22 09:06:33', 'Thỏa thuận hợp tác nhằm đưa bí quyết công nghệ sử dụng AI và IoT nuôi trồng thủy sản vào giảng dạy\r\nCách tiếp cận ba mũi nhọn bao gồm các chương trình đào tạo đa cấp, các dự án nghiên cứu khoa học, cùng với các cơ hội thực tập và học bổng cho sinh viên.', 'Bạc Liêu, Việt Nam – Ngày 11/06/2022, Trường Đại học Bạc Liêu cùng với AquaEasy, một liên doanh thuộc grow – trung tâm ươm mầm sáng tạo nội bộ của Bosch, đã ký kết Biên bản Ghi nhớ thỏa thuận hợp tác, nhằm đưa bí quyết công nghệ trí tuệ nhân tạo (Artificial Intelligent – AI) và Internet vạn vật (Internet of Things – IoT) vào chương trình giảng dạy. Cụ thể bằng cách kết hợp kiến thức này vào một phần của giáo trình cho học sinh các ngành đào tạo nuôi trồng Thuỷ sản, Khoa Nông nghiệp của Trường Đại học Bạc Liêu. Đồng thời, sinh viên sẽ được trực tiếp tiếp nhận kiến thức từ các chuyên gia trong ngành của Bosch và AquaEasy, thông qua các hội nghị, hội thảo hàng năm về khoa học và công nghệ.', 'Bosch, AquaEasy thuộc trung tâm ươm mầm sáng tạo grow của Bosch, mang bí quyết nuôi trồng thủy sản đến Trường Đại học Bạc Liêu'),
(7, 1, '2023-04-22 09:06:58', 'Phòng thí nghiệm Hộp số truyền động vô cấp CVT (Bosch Transmission Lab) cung cấp cho sinh viên cơ hội học tập và thực hành liên quan đến ngành công nghiệp ô tô\r\nĐội ngũ kỹ sư giàu kinh nghiệm từ Bosch hỗ trợ nhà trường đào tạo chuyên môn cho kỹ sư tương lai.\r\nHợp tác với các trung tâm giáo dục địa phương là cam kết liên tục của Bosch trong việc phát triển và ươm mầm tài năng trẻ..', 'TP.HCM – Bosch Việt Nam và Trường Đại học Sư pham Kỹ thuật TP.HCM (HCMUTE) đã thành công tổ chức Lễ khánh thành Phòng thí nghiệm Hộp số truyền động vô cấp CVT (Bosch Transmission Lab). Phòng thí nghiệm được thành lập với mục đích cung cấp cho sinh viên Khoa Cơ khí động lực những kiến thức thực tế thông qua chương trình đào tạo thực hành, thiết kế và ứng dụng thiết bị vào thực tiễn.\r\n\r\nDự án Phòng thí nghiệm Hộp số truyền động vô cấp CVT (Bosch Transmission Lab) do Bosch tài trợ ước tính trị giá 90.000 Euro (hơn 2.5 tỷ đồng), đáp ứng tính ứng dụng trong lĩnh vực nghiên cứu công nghệ di chuyển. Cơ sở mới này được trang bị 01 mô hình hộp số truyền động vô cấp CVT và 01 băng thử dây đai truyền động trong Hộp số truyền động vô cấp CVT, 01 phòng học thực hành và nghiên cứu chuyên sâu, cùng các thiết bị và máy móc hỗ trợ giảng dạy và đào tạo .', 'Bosch và Trường Đại học Sư phạm Kỹ thuật TP.HCM hợp tác xây dựng Phòng thí nghiệm Hộp số truyền động vô cấp CVT'),
(8, 1, '2023-04-22 09:07:28', 'Bosch nằm trong danh sách những môi trường làm việc tốt nhất trong ngành kỹ thuật, công nghệ cao và công nghệ thông tin ở năm thứ 7.\r\nTại Bosch, chúng tôi quan tâm đến con người, hoạt động kinh doanh và môi trường.', 'Thành phố Hồ Chí Minh, Việt Nam – Vào ngày 22/12/2021, Bosch Việt Nam được vinh danh trong “Top 100 Nơi làm việc tốt nhất Việt Nam” dựa trên kết quả bình chọn và khảo sát do Anphabe thực hiện. Giải thưởng này đã giúp công ty kéo dài chuỗi thành tích bảy năm liên tiếp lọt vào danh sách top 100 nơi làm việc hàng đầu trong nước. Trong suốt bảy năm qua, giới chuyên môn đã công nhận Bosch là một trong những công ty dẫn đầu ở cả ba lĩnh vực hoạt động: kỹ thuật, công nghệ cao và công nghệ thông tin. Năm 2021, Bosch Việt Nam xếp thứ 22 chung cuộc và vinh dự nhận được nhiều giải thưởng với những hạng mục tương ứng:\r\n\r\nHạng 1 toàn ngành Điện tử / Công nghệ cao / Thiết bị phụ trợ\r\nHạng 2 toàn ngành Kỹ thuật / Máy móc / Cơ khí Công nghiệp\r\nHạng 3 toàn Ngành Công nghệ thông tin / Phần mềm & Ứng dụng / Thương mại điện tử', 'Bosch được bình chọn Top 1 nơi làm việc tốt nhất ngành công nghệ cao');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`) VALUES
(1, 0, 'Katalon', 'Katalon Studio là một giải pháp kiểm thử tự động được phát triển bởi Katalon LLC.', 'Phần mềm này được xây dựng dựa trên các khung tự động hóa nguồn mở Selenium, Appium với giao diện IDE chuyên dụng để kiểm thử ứng dụng web, API, di động và máy tính để bàn. Bản phát hành đầu tiên để sử dụng nội bộ là vào tháng 1 năm 2015. Bản phát hành công khai đầu tiên là vào tháng 9 năm 2016. Năm 2018, phần mềm đã giành được 9% thâm nhập thị trường trong lĩnh vực kiểm thử tự động giao diện người dùng, theo Báo cáo về tình hình kiểm thử năm 2018 của SmartBear.\r\n\r\nKatalon được công nhận là Sự lựa chọn của khách hàng trong lĩnh vực kiểm thử tự động phần mềm của Gartner Peer Insights tháng 3 năm 2019 và tháng 3 năm 2020.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Katalon-logo-vector.svg/1200px-Katalon-logo-vector.svg.png'),
(2, 50000, 'Kobiton', '“Kobiton là công ty duy nhất trên thị trường có khả năng kết hợp việc kiểm thử trên các thiết bị thực với giải pháp tự động hóa”', 'Kobiton là startup phần mềm được sáng lập năm 2016 từ đội ngũ lãnh đạo và kỹ sư người Việt thuộc KMS Technology, và đang có hơn 120 nhân viên tại Việt Nam và Atlanta (Mỹ). Họ phát triển giải pháp kiểm thử phần mềm trên thiết bị di động duy nhất cung cấp đầy đủ điều kiện cần thiết để doanh nghiệp có thể phát hành ứng dụng di động ra thị trường nhanh chóng.\nQuá trình kiểm thử phần mềm được thực hiện trên các thiết bị di động thực, hỗ trợ khách hàng trên toàn cầu ở nhiều quy mô, từ các doanh nghiệp “kỳ lân” cho đến các công ty blue-chip, đáp ứng yêu cầu của nhiều lĩnh vực như bán lẻ, giải trí, dịch vụ tài chính, sáng tạo và ngành du lịch.\n\nĐến đầu năm nay, Kobiton đã đạt mốc hơn 50.000 người dùng trên toàn cầu. Nhờ vào việc ứng dụng công nghệ AI và việc sáp nhập gần đây cùng Mobile Labs, Kobiton đã đạt mức tăng trưởng 250% so với cùng kỳ năm trước.\n\n', 'https://theme.zdassets.com/theme_assets/292254/86844d094285d4818cfd9bbb1c0c1bedea95b65d.png'),
(3, 25000, 'Grove', 'Bạn đang quản lý nhân sự hay quản lý giấy tờ?', 'Trải nghiệm FREE phần mềm quản trị nhân sự toàn diện trong 2 tháng\nBạn dành phần lớn thời gian để tìm kiếm, sắp xếp, tổng hợp dữ liệu trên các tập tin Excel, spreadsheet khác nhau. Hay bạn dành thời gian để lên kế hoạch, trình bày báo cáo, đưa ra những quyết định chiến lược và xây dựng đội ngũ làm việc gắn kết, hiệu quả cao.\n\nGrove HR tin rằng với một giải pháp nhân sự hiện đại và đồng bộ hoá, quản lý giấy tờ sẽ không còn là gánh nặng. Bạn sẽ có thời gian để tập trung vào việc quan trọng nhất - phát triển nguồn nhân lực! Trải nghiệm ngay giải pháp nhân sự toàn diện Grove HR.\nGrove HR là sản phẩm HR được phát triển và xây dựng bởi công ty công nghệ hàng đầu - KMS Technology. Với mục tiêu giúp các doanh nghiệp tại Việt Nam phát triển tối ưu, Grove HR “số hoá\" các bài toán nhân sự.', 'https://c.smartrecruiters.com/sr-company-images-prod/58cbb8d5e4b0867c17f57588/699da839-5f7d-45c3-8810-8c86dca65287_social_logo/300x300?r=s3&_1621408203503'),
(4, 25000, 'Visily', 'Visily là một phần mềm thiết kế giao diện sản phẩm (UI – user interface)', 'Visily là một phần mềm thiết kế giao diện sản phẩm (UI – user interface) dành cho người dùng không chuyên, tập trung vào câu chuyện hỗ trợ người dùng thiết kế dễ dàng với các tính năng sử dụng sức mạnh của trí thông minh nhân tạo (AI – artificial intelligence). Sau 6 tháng ở giai đoạn thử nghiệm, Visily cũng đã cho ra mắt phiên bản chính thức đầu tiên của mình vào tháng 5/2022.\n\nVới một giao diện trực quan, cùng với thư viện thiết kế phong phú và các tính năng sử dụng sức mạnh của trí thông minh nhân tạo, Visily đã giúp hàng nghìn người dùng ở các vị trí khác nhau trong các đội ngũ xây dựng và phát triển sản phẩm tạo nên những mockup giao diện ứng dụng một cách dễ dàng.', 'https://prices.vn/photos/banner/1639114098-ma-giam-gia-visily.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_name` text NOT NULL,
  `service_description` text NOT NULL,
  `service_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_name`, `service_description`, `service_img`) VALUES
('Product Authentication', 'Learn more >', './public/img/services/icon-apartment.png'),
('Carbon Neutrality', 'Learn more >', './public/img/services/icon-apartment.png'),
('Commercial Buildings', 'Learn more >', './public/img/services/icon-apartment.png'),
('Airport Facilities', 'Learn more >', './public/img/services/icon-apartment.png'),
('Automotive Industry', 'Learn more >', './public/img/services/icon-apartment.png'),
('Entertainment Facilities', 'Learn more >', './public/img/services/icon-apartment.png'),
('Hotel Facilities', 'Learn more >', './public/img/services/icon-apartment.png'),
('Mining Facilities', 'Learn more >', './public/img/services/icon-apartment.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_info`
--

CREATE TABLE `services_info` (
  `services_info_name` text NOT NULL,
  `services_info_description` text NOT NULL,
  `services_info_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_info`
--

INSERT INTO `services_info` (`services_info_name`, `services_info_description`, `services_info_img`) VALUES
('Stories', 'Explore the fascinating world of technology and innovation and learn more about digitalization in industries, energy transition and smart infrastructure.', 'https://cdn-icons-png.flaticon.com/512/6081/6081056.png '),
('Fairs & Events', 'Innovations for Tomorrow. Cutting-edge technology showcased at premier fairs and events worldwide. Experience excellence, efficiency, and sustainability.', 'https://cdn-icons-png.flaticon.com/512/2680/2680341.png'),
('Investor Relations', 'Here you will find capital market relevant information around our financial disclosure, our share, the AGM and Corporate Governance topics.', 'https://cdn-icons-png.flaticon.com/512/2329/2329158.png'),
('Topic Areas', 'What are the most relevant topics for us? Discover our state-of-the-art solutions and ideas.', 'https://cdn-icons-png.flaticon.com/512/9111/9111567.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_place`
--

CREATE TABLE `services_place` (
  `services_place_name` text NOT NULL,
  `services_place_description` text NOT NULL,
  `services_place_img` text NOT NULL,
  `services_place_button` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_place`
--

INSERT INTO `services_place` (`services_place_name`, `services_place_description`, `services_place_img`, `services_place_button`) VALUES
('Mobility', 'Bosch offers innovative mobility through vehicle technology, data cloud, and services.', './public/img/services/Convenience_Everywhere_1.webp', 'Our mobility offerings'),
('At home', 'Bosch offers you individual solutions for your home to make life a bit easier every day.', './public/img/services/Convenience_Everywhere_2.webp', 'Our offerings for your home'),
('Industry and trades', 'Bosch offers innovative products and services for industry and trades.', './public/img/services/Convenience_Everywhere_3.webp', 'Our offerings for industry and trades');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('kquangvinhn@gmail.com', 'public/img/user/default.png', 'Đặng ', 'Quang Vinh', 1, 20, '0123456789', '2023-04-23 01:14:39', '2023-04-23 01:14:39', '$2y$10$YniSP1jg2X3kdq1DV7OmTOBhg6lIXpVfeU5lqU5xvLbLYwjY92Cx2'),
('phuc.nguyen2003@hcmut.edu.vn', 'public/img/user/2023_04_22_08_10_22pm.', 'Nguyễn Phan Hoàng', 'Phúc', 0, 20, '0369322789', '2023-04-23 01:10:22', '2023-04-23 01:10:22', '$2y$10$1T8YfBfTv6dNwyT1dh2bC.wxO5GanBRb3vcYNwL0XTvNbCn5LH7Ju'),
('vinh.dangquang03@hcmut.edu.vn', 'public/img/user/2023_04_22_08_05_40pm.jpg', 'Đặng Quang', 'Vinh', 1, 20, '0704833644', '2023-04-22 20:23:23', '2023-04-23 01:05:40', '$2y$10$3jGkRsV5PvDFEbh1488AguInIHWg5lxp7S49LKIXYIvSxvE0zDpCu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
