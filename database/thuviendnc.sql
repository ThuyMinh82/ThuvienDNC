-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuviendnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_bv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mtngan_bv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_bv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `cd_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `ten_bv`, `mtngan_bv`, `noidung_bv`, `alias`, `created_at`, `updated_at`, `status`, `cd_id`, `user_id`) VALUES
(1, 'Hồ Chí Minh và phong cách lý luận gắn với thực tiễn', 'Sự gắn bó giữa lý luận với thực tiễn là đặc điểm nổi bật của phong cách tư duy Hồ Chí Minh và được thể hiện rõ nét trong toàn bộ quá trình hoạt động cách mạng của Người. Trong đó, đặc trưng và ổn định là tư duy lý luận dựa trên thực tiễn Việt Nam, là hướng đích Độc lập - Tự do - Hạnh phúc cho dân tộc và con người Việt Nam. Hiện nay, trước sự vận động ngày càng nhanh, mạnh của hiện thực khách quan trong nước và trên thế giới, việc học tập và vận dụng phong cách tư duy lý luận gắn với thực tiễn của Hồ Chí Minh càng có giá trị to lớn.', '<p>Phong c&aacute;ch l&agrave; một biểu hiện ri&ecirc;ng trong lối sống, l&agrave;m việc của một c&aacute; nh&acirc;n, thể hiện t&iacute;nh đặc trưng v&agrave; ổn định được &aacute;p dụng thường xuy&ecirc;n nhằm giải quyết c&aacute;c vấn đề nảy sinh trong qu&aacute; tr&igrave;nh hoạt động của con người. Phong c&aacute;ch kh&ocirc;ng chỉ biểu hiện bề ngo&agrave;i của c&aacute; nh&acirc;n, một lớp người, m&agrave; c&ograve;n biểu hiện lập trường, quan điểm giai cấp, phản &aacute;nh thế giới quan, l&yacute; tr&iacute; v&agrave; t&igrave;nh cảm s&acirc;u sắc của con người. Bởi vậy, phong c&aacute;ch l&agrave; kết quả của một qu&aacute; tr&igrave;nh để tạo n&ecirc;n t&iacute;nh đặc trưng v&agrave; ổn định của n&oacute;.</p>\r\n\r\n<p>Mối quan hệ giữa l&yacute; luận với thực tiễn trong tư duy được Hồ Ch&iacute; Minh diễn đạt như: &ldquo;L&yacute; luận li&ecirc;n hệ với thực tế&rdquo;(1), &ldquo;L&yacute; luận kết hợpvới thực h&agrave;nh&rdquo;(2), &ldquo;L&yacute; luận đi đ&ocirc;ivới thực tiễn&rdquo;(3)... Như vậy, khi n&oacute;i &ldquo;li&ecirc;n hệ&rdquo;, &ldquo;kết hợp&rdquo;, &ldquo;đi đ&ocirc;i&rdquo;...l&agrave; n&oacute;i tới sự gắn b&oacute; giữa l&yacute; luận với thực tiễn l&agrave; khẳng định của Hồ Ch&iacute; Minh về sự &ldquo;Thống nhất giữa l&yacute; luận v&agrave; thực tiễn l&agrave; một nguy&ecirc;n tắc căn bản của chủ nghĩa M&aacute;c -L&ecirc;nin&rdquo;(4). Người nhấn mạnh: &ldquo;Thực tiễn kh&ocirc;ng c&oacute; l&yacute; luận hướng dẫn th&igrave; th&agrave;nh thực tiễn m&ugrave; qu&aacute;ng. L&yacute; luận m&agrave; kh&ocirc;ng c&oacute; li&ecirc;n hệ với thực tiễn l&agrave; l&yacute; luận su&ocirc;ng&rdquo;(5). Sự gắn b&oacute; giữa l&yacute; luận v&agrave; thực tiễn mang t&iacute;nh biện chứng, trong đ&oacute; thực tiễn phải c&oacute; l&yacute; luận soi đường, hướng dẫn, c&ograve;n l&yacute; luận phải dựa tr&ecirc;n cơ sở thực tiễn, phản &aacute;nh thực tiễn v&agrave; phải lu&ocirc;n li&ecirc;n hệ với thực tiễn. Kh&ocirc;ng c&oacute; l&yacute; luận sẽ rơi v&agrave;o chủ nghĩa kinh nghiệm; thiếu thực tiễn sa v&agrave;o chủ nghĩa gi&aacute;o điều v&agrave; suy cho c&ugrave;ng, chủ nghĩa kinh nghiệm hay chủ nghĩa gi&aacute;o điều đều l&agrave; kết quả của tư duy chủ quan, duy &yacute; ch&iacute; cả trong hoạt động l&yacute; luận v&agrave; thực tiễn.</p>\r\n\r\n<p>Sự gắn b&oacute; giữa l&yacute; luận với thực tiễn l&agrave; đặc điểm nổi bật của phong c&aacute;ch tư duy Hồ Ch&iacute; Minh v&agrave; được thể hiện r&otilde; n&eacute;t trong to&agrave;n bộ qu&aacute; tr&igrave;nh hoạt động c&aacute;ch mạng của Người. Trong đ&oacute;, đặc trưng v&agrave; ổn định l&agrave; tư duy l&yacute; luận dựa tr&ecirc;n thực tiễn Việt Nam, l&agrave; hướng đ&iacute;ch Độc lập - Tự do - Hạnh ph&uacute;c cho d&acirc;n tộc v&agrave; con người Việt Nam.</p>\r\n\r\n<p>Để t&igrave;m l&yacute; luận cho hướng đ&iacute;ch đ&oacute;, Hồ Ch&iacute; Minh bắt đầu từ thực tiễn Việt Nam v&agrave; sự vận động của thế giới hiện thực. Muốn hiểu c&aacute;c nước kh&aacute;c đ&atilde; l&agrave;m thế n&agrave;o để trở về gi&uacute;p đồng b&agrave;o, Người kh&ocirc;ng lựa chọnnghi&ecirc;n cứu phi&ecirc;n bản của n&oacute; ở phương Đ&ocirc;ng m&agrave; đi tới nơi sinh ra c&aacute;c cuộc c&aacute;ch mạng tư sản điển h&igrave;nh ở phương T&acirc;y. Để hiểu c&aacute;ch mạng giải ph&oacute;ng d&acirc;n tộc, Người tới nước Mỹ; để hiểu r&otilde; c&aacute;ch mạng c&ocirc;ng nghiệp, Người đến nước Anh; để thấu hiểu cuộc c&aacute;ch mạng nh&acirc;n quyền v&agrave; d&acirc;n quyền, Người sống v&agrave; l&agrave;m việc ở Ph&aacute;p. Đi theo chủ nghĩa M&aacute;c - L&ecirc;nin khi c&ograve;n ở nước Ph&aacute;p, nhưng Người đ&atilde; tới nước Nga để quan s&aacute;t c&ocirc;ng cuộc x&acirc;y dựng chế độ x&atilde; hội mới ở đ&acirc;y. Người đến Trung Hoa để hiểu r&otilde; c&aacute;ch mạng d&acirc;n chủ ở Trung Quốc v&agrave; những ch&iacute;nh s&aacute;ch n&agrave;o của T&ocirc;n Trung Sơn ph&ugrave; hợp với Việt Nam. Tiếp nhận trực tiếp những l&yacute; luận mới với thực tiễn mới n&ecirc;n tư duy l&yacute; luận của Hồ Ch&iacute; Minh cũng lu&ocirc;n mới.</p>\r\n\r\n<p>Nhưng những kinh nghiệm lịch sử v&agrave; tổng kết thực tiễn c&aacute;ch mạng thế giới cũng chưa đủ để Hồ Ch&iacute; Minh x&acirc;y dựng l&yacute; luận c&aacute;ch mạng Việt Nam. Bằng thế giới quan v&agrave; phương ph&aacute;p luận của chủ nghĩa M&aacute;c - L&ecirc;nin, Người ph&acirc;n t&iacute;ch được thực chất của x&atilde; hội Việt Nam với những m&acirc;u thuẫn ri&ecirc;ng v&agrave; ph&aacute;t hiện ra những quy luật vận động của đất nước trong thời đại mới để hoạch định đường lối c&aacute;ch mạng. Do vậy, đường lối đ&oacute; hợp l&ograve;ng d&acirc;n, đ&uacute;ng quy luật v&agrave; thuận theo xu thế ph&aacute;t triển, ph&ugrave; hợp với sự tiến h&oacute;a của nh&acirc;n loại. Điều đ&oacute; thể hiện ở việc Hồ Ch&iacute; Minh x&aacute;c định c&aacute;ch mạng Việt Nam l&agrave; c&aacute;ch mạng giải ph&oacute;ng d&acirc;n tộc, nhưng trong thời đại mới, c&aacute;ch mạng giải ph&oacute;ng d&acirc;n tộc muốn thắng lợi triệt để phải theo con đường c&aacute;ch mạng v&ocirc; sản. Với l&ocirc;g&iacute;c đ&oacute;, c&aacute;ch mạng giải ph&oacute;ng d&acirc;n tộc ở Việt Nam phải do Đảng Cộng sản l&atilde;nh đạo, v&agrave; sự ra đời của Đảng Cộng sản ở Việt Nam kh&ocirc;ng chỉ l&agrave; sự kết hợp giữa chủ nghĩa M&aacute;c - L&ecirc;nin với phong tr&agrave;o c&ocirc;ng nh&acirc;n m&agrave; với cả phong tr&agrave;o y&ecirc;u nước; Đảng Cộng sản Việt Nam kh&ocirc;ng chỉ l&agrave; đội ti&ecirc;n phong của giai cấp c&ocirc;ng nh&acirc;n m&agrave; đại diện cho quyền lợi của tất cả nh&acirc;n d&acirc;n lao động v&agrave; của cả d&acirc;n tộc. Cương lĩnh đầu ti&ecirc;n của Đảng do Hồ Ch&iacute; Minh soạn thảo vạch r&otilde; con đường độc lập d&acirc;n tộc gắn liền với CNXH th&iacute;ch hợp với điền kiện Việt Nam, ph&ugrave; hợp với y&ecirc;u cầu của nh&acirc;n d&acirc;n Việt Nam, đồng thời thuận với sự tiến h&oacute;a chung. V&agrave; do đ&oacute;, theo Người, cuộc c&aacute;ch mạng giải ph&oacute;ng d&acirc;n tộc ở Việt Nam phải được thực hiện bởi sự li&ecirc;n minh của tất cả những người Việt Nam y&ecirc;u nước, kh&ocirc;ng ph&acirc;n biệt giai cấp, t&iacute;n ngưỡng tr&ecirc;n cơ sở li&ecirc;n minh c&ocirc;ng n&ocirc;ng. Xuất ph&aacute;t từ thực tiễn Việt Nam v&agrave; thế giới, những gi&aacute; trị đ&uacute;ng đắn trong Ch&iacute;nh cương vắn tắt v&agrave; S&aacute;ch lược vắn tắt của Đảng Cộng sản Việt Nam do Hồ Ch&iacute; Minh soạn thảo được khẳng định v&agrave; dẫn đường đưa tới thắng lợi của C&aacute;ch mạng Th&aacute;ng T&aacute;m vĩ đại.</p>\r\n\r\n<p>Sự gắn b&oacute;, thống nhất giữa l&yacute; luận v&agrave; thực tiễn trong phong c&aacute;ch tư duy Hồ Ch&iacute; Minh c&ograve;n thể hiện r&otilde; n&eacute;t trong l&yacute; luận x&acirc;y dựng chế độ mới ở nước ta sau C&aacute;ch mạng Th&aacute;ng T&aacute;m, đ&oacute; l&agrave; l&yacute; luận x&acirc;y dựng chế độ d&acirc;n chủ mới để tiến l&ecirc;n CNXH. Về ch&iacute;nh trị, l&agrave; chủ trương x&acirc;y dựng một Nh&agrave; nước ph&aacute;p quyền d&acirc;n chủ, đo&agrave;n kết d&acirc;n tộc nhằm ph&aacute;t huy sức mạnh to&agrave;n d&acirc;n để x&acirc;y dựng đất nước v&agrave; bảo vệ Tổ quốc. Về kinh tế, l&agrave; thực hiện một nền kinh tế nhiều th&agrave;nh phần, nhiều loại h&igrave;nh sở hữu, lấy kinh tế nh&agrave; nước v&agrave; tập thể để định hướng đến CNXH. Về văn h&oacute;a, l&agrave; x&acirc;y dựng nền văn h&oacute;a d&acirc;n tộc - khoa học - đại ch&uacute;ng v&agrave; thực hiện ch&iacute;nh s&aacute;ch x&atilde; hội c&ocirc;ng bằng dựa tr&ecirc;n sự đ&oacute;ng g&oacute;p lao động của mỗi c&aacute; nh&acirc;n.</p>\r\n\r\n<p>Từ thực tiễn đất nước, với nền kinh tế n&ocirc;ng nghiệp lạc hậu v&agrave; phải chiến đấu chống đế quốc mạnh về qu&acirc;n sự, Hồ Ch&iacute; Minh chủ trương thực hiện đường lối to&agrave;n d&acirc;n kh&aacute;ng chiến, to&agrave;n diện kh&aacute;ng chiến v&agrave; trường kỳ kh&aacute;ng chiến. Để chống lại sự li&ecirc;n kết đế quốc, Người chủ trương ngoại giao đa phương, l&agrave;m bạn với tất cả c&aacute;c nước d&acirc;n chủ, kh&ocirc;ng g&acirc;y th&ugrave; o&aacute;n với một ai, kết hợp sức mạnh d&acirc;n tộc với sức mạnh quốc tế v&agrave; sức mạnh thời đại để tăng cường thế v&agrave; lực cho d&acirc;n tộc chống lại những đế quốc lớn mạnh.</p>\r\n\r\n<p>Coi ch&acirc;n l&yacute; l&agrave; những g&igrave; c&oacute; lợi cho Tổ quốc v&agrave; nh&acirc;n d&acirc;n, Hồ Ch&iacute; Minh l&agrave; một nh&agrave; l&atilde;nh đạo của nh&acirc;n d&acirc;n, gắn b&oacute;, gần gũi với nh&acirc;n d&acirc;n, v&igrave; lợi &iacute;ch của nh&acirc;n d&acirc;n. Chỉ t&iacute;nh trong khoảng 10 năm từ 1955 - 1965, mỗi năm, Người đ&atilde; tiến h&agrave;nh hơn 70 lần đi cơ sở, gặp gỡ nh&acirc;n d&acirc;n... Bởi vậy, mọi chủ trương, ch&iacute;nh s&aacute;ch m&agrave; Người ban h&agrave;nh đều đ&aacute;p ứng nguyện vọng của đ&ocirc;ng đảo c&aacute;c tầng lớp nh&acirc;n d&acirc;n. Ch&iacute;nh điều đ&oacute; đ&atilde; tạo được niềm tin của nh&acirc;n d&acirc;n đối với Đảng v&agrave; chế độ. Bởi vậy, c&aacute;c phong tr&agrave;o do Hồ Ch&iacute; Minh ph&aacute;t động đều được to&agrave;n d&acirc;n t&iacute;ch cực tham gia với sự tự gi&aacute;c cao độ.</p>\r\n\r\n<p>L&yacute; luận gắn b&oacute; với thực tiễn được thể hiện trong tấm gương thực h&agrave;nh của Hồ Ch&iacute; Minh. L&atilde;nh đạo x&acirc;y dựng chế độ d&acirc;n chủ mới, Người l&agrave; tấm gương điển h&igrave;nh trong thực h&agrave;nh d&acirc;n chủ. Dẫn dắt d&acirc;n tộc x&acirc;y dựng một x&atilde; hội đạo đức, v&igrave; con người của XHCN, Người l&agrave; tấm gương thực h&agrave;nh cần, kiệm, li&ecirc;m ch&iacute;nh, ch&iacute; c&ocirc;ng v&ocirc; tư. Ch&iacute;nh tấm gương phong c&aacute;ch ấy đ&atilde; l&agrave;m cho tư tưởng của Người được thực hiện một c&aacute;ch sống động, hiệu quả trong nh&acirc;n d&acirc;n v&agrave; Hồ Ch&iacute; Minh trở th&agrave;nh một nh&acirc;n vật vĩ đại sống m&atilde;i trong l&ograve;ng nh&acirc;n d&acirc;n Việt Nam v&agrave; nh&acirc;n loại tiến bộ.</p>\r\n\r\n<p><img alt=\"\" src=\"C:\\Users\\admin\\Desktop\\18052018a1.jpg\" /></p>\r\n\r\n<p>Để l&yacute; luận gắn với thực tiễn, Hồ Ch&iacute; Minh cho rằng, trước hết phải n&acirc;ng cao tr&igrave;nh độ l&yacute; luận, khắc phục bệnh k&eacute;m l&yacute; luận, bệnh khinh l&yacute; luận. V&igrave; theo Người, những bệnh đ&oacute; nhất định sẽ viện dẫn tới kinh nghiệm, tuyệt đối ho&aacute; kinh nghiệm v&agrave; sẽ dẫn tới chủ nghĩa kinh nghiệm. Người chỉ r&otilde;, kh&ocirc;ng &iacute;t c&aacute;n bộ, đảng vi&ecirc;n &ldquo;chỉ bo bo giữ lấy kinh nghiệm lẻ tẻ. Họ kh&ocirc;ng hiểu rằng l&yacute; luận rất quan trọng cho sự thực h&agrave;nh c&aacute;ch mạng. V&igrave; vậy, họ cứ cắm đầu nhắm mắt m&agrave; l&agrave;m, kh&ocirc;ng hiểu r&otilde; to&agrave;n cuộc của c&aacute;ch mạng&rdquo;(6).Người cho rằng &ldquo;kinh nghiệm của họ tuy tốt, nhưng cũng chẳng qua l&agrave; từng bộ phận m&agrave; th&ocirc;i, chỉ thi&ecirc;n về một mặt m&agrave; th&ocirc;i. C&oacute; kinh nghiệm m&agrave; kh&ocirc;ng c&oacute; l&yacute; luận cũng như một mắt s&aacute;ng một mắt mờ&rdquo;(7). Bởi vậy, Hồ Ch&iacute; Minh khẳng định, l&yacute; luận c&oacute; vai tr&ograve; &ldquo;như c&aacute;i kim chỉ nam, n&oacute; chỉ phương hướng cho ch&uacute;ng ta trong c&ocirc;ng việc thực tế. Kh&ocirc;ng c&oacute; l&yacute; luận th&igrave; l&uacute;ng t&uacute;ng như nhắm mắt m&agrave; đi&rdquo;(8), &ldquo;L&agrave;m m&agrave; kh&ocirc;ng c&oacute; l&yacute; luận th&igrave; kh&ocirc;ng kh&aacute;c g&igrave; đi m&ograve; trong đ&ecirc;m tối vừa chậm chạp vừa hay vấp v&aacute;p&rdquo;(9) v&agrave; trước sự vận động của t&igrave;nh h&igrave;nh kh&aacute;ch quan, những người như vậy sẽ l&uacute;ng t&uacute;ng kh&ocirc;ng giải quyết được những vấn đề mới của thực tiễn.</p>\r\n\r\n<p>Mặt kh&aacute;c, theo Hồ Ch&iacute; Minh, c&oacute; l&yacute; luận th&igrave; phải li&ecirc;n hệ chặt chẽ với thực tiễn để tr&aacute;nh bệnh l&yacute; luận su&ocirc;ng, gi&aacute;o điều. Người cho rằng &ldquo;L&yacute; luận cũng như c&aacute;i t&ecirc;n (hoặc vi&ecirc;n đạn). Thực h&agrave;nh cũng như c&aacute;i đ&iacute;ch để bắn. C&oacute; t&ecirc;n m&agrave; kh&ocirc;ng bắn, hoặc bắn lung tung, cũng như kh&ocirc;ng c&oacute; t&ecirc;n&rdquo;(10) v&agrave; chỉ r&otilde;: &ldquo;L&yacute; luận cốt để &aacute;p dụng v&agrave;o c&ocirc;ng việc thực tế. L&yacute; luận m&agrave; kh&ocirc;ng &aacute;p dụng v&agrave;o c&ocirc;ng việc thực tế l&agrave; l&yacute; luận su&ocirc;ng. D&ugrave; xem được h&agrave;ng ng&agrave;n, h&agrave;ng vạn quyển l&yacute; luận, nếu kh&ocirc;ng biết đem ra thực h&agrave;nh, th&igrave; kh&aacute;c n&agrave;o một c&aacute;i h&ograve;m đựng s&aacute;ch&rdquo;(11). Như vậy, theo Hồ Ch&iacute; Minh, l&yacute; luận chỉ c&oacute; &yacute; nghĩa khi n&oacute; được vận dụng v&agrave;o thực tiễn, phục vụ thực tiễn trong vai tr&ograve; dẫn đắt, chỉ đạo thực tiễn đi tới kết quả. Đồng thời, khi vận dụng l&yacute; luận th&igrave; phải ph&ugrave; hợp điều kiện thực tiễn. Đ&oacute; l&agrave; sự t&aacute;c động tương hỗ giữa l&yacute; luận v&agrave; thực tiễn trong sự ph&aacute;t triển.</p>\r\n\r\n<p>Bởi vậy, Hồ Ch&iacute; Minh lu&ocirc;n nhắc nhở phải gắn l&yacute; luận v&agrave; thực tiễn trong tư duy v&agrave; hoạt động thực tiễn, phải khắc phục chủ nghĩa kinh nghiệm v&agrave; chủ nghĩa gi&aacute;o điều tr&ecirc;n cơ sở ra sức học tập, n&acirc;ng cao tr&igrave;nh độ l&yacute; luận, học phải đi đ&ocirc;i với h&agrave;nh, l&yacute; luận phải li&ecirc;n hệ với thực tế. Theo Người, học tập chủ nghĩa M&aacute;c - L&ecirc;nin l&agrave; &ldquo;phải học tinh thần,... lập trường, quan điểm v&agrave; phương ph&aacute;p của chủ nghĩa M&aacute;c - L&ecirc;nin để &aacute;p dụng lập trường, quan điểm v&agrave; phương ph&aacute;p ấy m&agrave; giải quyết cho tốt những vấn đề thực tế trong c&ocirc;ng t&aacute;c c&aacute;ch mạng của ch&uacute;ng ta&rdquo;(12) v&agrave; &ldquo;học tập chủ nghĩa M&aacute;c - L&ecirc;nin l&agrave; học tập c&aacute;i tinh thần xử tr&iacute; mọi việc, đối với mọi người v&agrave; đối với bản th&acirc;n m&igrave;nh, l&agrave; học tập những ch&acirc;n l&yacute; phổ biến của chủ nghĩa M&aacute;c -L&ecirc;nin để &aacute;p dụng một c&aacute;ch s&aacute;ng tạo v&agrave;o ho&agrave;n cảnh thực tế của nước ta. Học để m&agrave; l&agrave;m&rdquo;(13) nhưng kh&ocirc;ng n&ecirc;n coi chủ nghĩa M&aacute;c - L&ecirc;nin l&agrave; gi&aacute;o điều, l&agrave; những c&ocirc;ng thức c&oacute; sẵn.</p>\r\n\r\n<p>Hồ Ch&iacute; Minh căn dặn: Học tập kinh nghiệm v&agrave; vận dụng kinh nghiệm của nước kh&aacute;c phải căn cứ v&agrave;o ho&agrave;n cảnh lịch sử của d&acirc;n tộc, nếu &ldquo;kh&ocirc;ng ch&uacute; trọng đến đặc điểm của d&acirc;n tộc m&igrave;nh... l&agrave; sai lầm nghi&ecirc;m trọng, l&agrave; phạm chủ nghĩa gi&aacute;o điều&rdquo;. Nhưng, &ldquo;nếu qu&aacute; nhấn mạnh đặc điểm d&acirc;n tộc để phủ nhận gi&aacute; trị phổ biến của những kinh nghiệm lớn, cơ bản của c&aacute;c nước anh em, th&igrave; sẽ mắc sai lầm nghi&ecirc;m trọng của chủ nghĩa x&eacute;t lại&rdquo;(14).</p>\r\n\r\n<p>Hồ Ch&iacute; Minh cũng nhắc nhở phải d&ugrave;ng l&yacute; luận để tổng kết kinh nghiệm thực tiễn nhằm n&acirc;ng cao hiệu quả c&ocirc;ng t&aacute;c. Người chỉ r&otilde;: &ldquo;...c&ocirc;ng việc g&igrave; bất kỳ th&agrave;nh c&ocirc;ng hoặc thất bại, ch&uacute;ng ta cần nghi&ecirc;n cứu cội rễ, ph&acirc;n t&aacute;ch thật r&otilde; r&agrave;ng rồi kết luận. Kết luận đ&oacute; sẽ l&agrave; c&aacute;i ch&igrave;a kh&oacute;a ph&aacute;t triển c&ocirc;ng việc v&agrave; để gi&uacute;p cho c&aacute;n bộ tiến tới&rdquo;(15). Người cũng nhấn mạnh, cần phải nghi&ecirc;n cứu kinh nghiệm cũ để gi&uacute;p cho thực h&agrave;nh mới, lại đem thực h&agrave;nh mới để ph&aacute;t triển kinh nghiệm cũ, l&agrave;m cho n&oacute; đầy đủ dồi d&agrave;o th&ecirc;m. Đ&acirc;y ch&iacute;nh l&agrave; qu&aacute; tr&igrave;nh tổng kết kinh nghiệm từ thực tiễn, qu&aacute; tr&igrave;nh gi&uacute;p cho l&yacute; luận được &ldquo;bổ sung bằng những kết luận mới r&uacute;t ra từ trong thực tiễn sinh động&rdquo;(16) v&agrave; l&agrave;m như vậy l&agrave; để &ldquo;cho nhận thức của ch&uacute;ng ta đối với c&aacute;c vấn đề đ&oacute; được n&acirc;ng cao hơn v&agrave; c&ocirc;ng t&aacute;c c&oacute; kết quả hơn&rdquo;(17).</p>\r\n\r\n<p>Thực tiễn c&aacute;ch mạng nước ta đ&atilde; c&oacute; kh&ocirc;ng &iacute;t th&iacute; dụ về sự thiếu gắn b&oacute; giữa l&yacute; luận v&agrave; thực tiễn trong x&acirc;y dựng v&agrave; thực hiện đường lối c&aacute;ch mạng. Đ&oacute; l&agrave; sự gi&aacute;o điều trong vận dụng l&yacute; luận đấu tranh giai cấp ở đầu những năm 30 thế kỷ XX; l&agrave; gi&aacute;o điều trong vận dụng kinh nghiệm của nước ngo&agrave;i trong cải c&aacute;ch ruộng đất giữa những năm 50 thế kỷ XX; l&agrave; việc muốn đẩy nhanh qu&aacute; tr&igrave;nh x&acirc;y dựng CNXH tập trung v&agrave;o việc nhanh ch&oacute;ng tiến h&agrave;nh c&aacute;ch mạng quan hệ sản xuất, thực hiện hai h&igrave;nh thức sở hữu to&agrave;n d&acirc;n v&agrave; tập thể, kh&ocirc;ng t&iacute;nh tới tr&igrave;nh độ của lực lượng sản xuất v&agrave; duy tr&igrave; qu&aacute; l&acirc;u t&igrave;nh h&igrave;nh ph&acirc;n phối c&oacute; t&iacute;nh chất c&agrave;o bằng của thời chiến v&agrave;o thời b&igrave;nh. Thực chất của t&igrave;nh trạng tr&ecirc;n l&agrave; sự t&aacute;ch rời l&yacute; luận với thực tiễn trong tư duy, dẫn tới những sai lầm nghi&ecirc;m trọng trong hoạch định v&agrave; thực hiện chủ trương, đường lối, ch&iacute;nh s&aacute;ch, g&acirc;y ra những kh&oacute; khăn trong đấu tranh c&aacute;ch mạng v&agrave; x&acirc;y dựng x&atilde; hội mới ở nước ta.</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh đổi mới x&acirc;y dựng CNXH, Đảng đ&atilde; khắc phục t&igrave;nh trạng tr&ecirc;n trong hoạch định v&agrave; chỉ đạo thực hiện đường lối, chủ trương n&ecirc;n nước ta đ&atilde; vượt qua những kh&oacute; khăn do chủ quan duy &yacute; ch&iacute; g&acirc;y ra. Hiện nay, trước sự vận động ng&agrave;y c&agrave;ng nhanh, mạnh của hiện thực kh&aacute;ch quan ở trong nước v&agrave; tr&ecirc;n thế giới, việc học tập v&agrave; vận dụng phong c&aacute;ch tư duy l&yacute; luận gắn với thực tiễn của Hồ Ch&iacute; Minh c&agrave;ng c&oacute; gi&aacute; trị hết sức to lớn. Chỉ c&oacute; thể t&igrave;m lời giải đ&uacute;ng đắn v&agrave; tr&aacute;nh những sai lầm cho những vấn đề thực tiễn đặt ra một c&aacute;ch đ&uacute;ng đắn, kịp thời khi học tập, r&egrave;n luyện phong c&aacute;ch tư duy l&yacute; luận gắn với thực tiễn của Hồ Ch&iacute; Minh v&agrave; lu&ocirc;n nhớ lời Người: &ldquo;phải biết rằng thực tiễn kh&aacute;ch quan thay đổi h&agrave;ng giờ h&agrave;ng ph&uacute;t, một chủ trương của ta h&ocirc;m nay đ&uacute;ng, h&ocirc;m sau đ&atilde; kh&ocirc;ng hợp thời, nếu ta kh&ocirc;ng tỉnh t&aacute;o kiểm điểm những tư tưởng, h&agrave;nh vi của ta để bỏ đi những c&aacute;i qu&aacute; thời, sai hỏng, nhất địnhta sẽ kh&ocirc;ng theo kịp t&igrave;nh thế, ta sẽ bị bỏ rơi, bị c&aacute;c bạn tỉnh t&aacute;o nhanh nhẹn hơn vượt l&ecirc;n trước&rdquo;(18).</p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>PGS, TS.Phạm Hồng Chương - Viện Hồ Ch&iacute; Minh v&agrave; c&aacute;c l&atilde;nh tụ của Đảng, Học viện Ch&iacute;nh trị quốc gia Hồ Ch&iacute; Minh</strong></p>', 'ho-chi-minh-va-phong-cach-ly-luan-gan-voi-thuc-tien', '2018-07-01 17:00:00', NULL, 1, 4, 1),
(2, 'Nghiên cứu ảnh hưởng của bôi trơn tối thiểu (MQL) đến quá trình tạo phoi khi tiện thép 9crsi qua tôi', 'Bài báo giới thiệu một giải pháp công nghệ nhằm cải thiện điều kiện cắt khi tiện cứng, nâng cao hiệu quả của quá trình gia công với công nghệ bôi trơn tối thiểu (Minium Quantity Lubricant – MQL); đồng thời, đưa ra những kết luận về độ biến dạng của kim loại và quá trình tạo phoi khi gia công tiện cứng thép 9CrSi qua tôi có áp dụng công nghệ bôi...', '<p>Nội dung ch&iacute;nh bao gồm: - Nghi&ecirc;n cứu so s&aacute;nh giữa b&ocirc;i trơn l&agrave;m nguội tối thiểu v&agrave; gia c&ocirc;ng kh&ocirc; khi tiện tinh cứng qua c&aacute;c chỉ ti&ecirc;u về chất lượng bề mặt, lượng m&ograve;n dao, cơ chế m&ograve;n, để từ đ&oacute; t&igrave;m được c&aacute;c ưu điểm nổi trội của phương ph&aacute;p b&ocirc;i trơn tối thiểu. - Nghi&ecirc;n cứu sử dụng dầu thực vật của Việt Nam &aacute;p dụng v&agrave;o qu&aacute; tr&igrave;nh tiện cứng khi sử dụng phương ph&aacute;p b&ocirc;i trơn tối thiểu....</p>', 'nghien-cuu-anh-huong-cua-boi-tron-toi-thieu-(mql)-den-qua-trinh-tao-phoi-khi-tien-thep-9crsi-qua-toi', '2018-07-01 17:00:00', NULL, 1, 3, 1),
(3, 'NỘI DUNG KÝ KẾT GIỮA ĐẠI HỌC FUTURE GENERATION và  THƯ VIỆN ĐẠI HỌC NAM CẦN THƠ', 'Trong khuôn khổ hợp tác giữa Trường Đại học Nam Cần Thơ và Trường Đại học Future Generations, Hoa Kỳ nhằm triển khai Dự án nâng cao kỹ năng giảng dạy tiếng Anh cho giáo viên Anh Ngữ ở các trường Phổ Thông TP Cần Thơ - Bending Bamboo IC3 2017 - 2020, Trường Đại học Nam Cần Thơ đã chủ trì tổ chức Hội thảo ..', '<p>Trong khu&ocirc;n khổ hợp t&aacute;c giữa Trường Đại học Nam Cần Thơ v&agrave; Trường Đại học Future Generations, Hoa Kỳ nhằm triển khai Dự &aacute;n n&acirc;ng cao kỹ năng giảng dạy tiếng Anh cho gi&aacute;o vi&ecirc;n Anh Ngữ ở c&aacute;c trường Phổ Th&ocirc;ng TP Cần Thơ - Bending Bamboo IC3 2017 - 2020, Trường Đại học Nam Cần Thơ đ&atilde; chủ tr&igrave; tổ chức Hội thảo &ldquo;Tập huấn về kỹ&nbsp;năng dạy Anh Ngữ d&agrave;nh cho gi&aacute;o vi&ecirc;n Anh Ngữ c&aacute;c trường Phổ Th&ocirc;ng TP Cần Thơ - Training Workshop on English Teaching Skills for English Teachers of the General Education Schools of Can Tho City&rdquo; lần thứ 2 từ 14/3 - 30/3/2018.&nbsp;<em>(tr&iacute;ch trang Facebook trường ĐH Nam Cần thơ ng&agrave;y 30/03/2018).</em></p>\r\n\r\n<p>Tại buổi lễ bế giảng kh&oacute;a học ng&agrave;y 31/03/2018, đại diện hai trường đ&atilde; tiến h&agrave;nh k&yacute; BẢN GHI NHỚ hợp t&aacute;c với khoa Kinh tế - Luật v&agrave; Thư viện. Nội dung bản Ghi nhớ hỗ trợ Thư viện:</p>\r\n\r\n<ol>\r\n	<li>Thiết kế, x&acirc;y dựng, cung cấp c&aacute;c t&agrave;i liệu in về c&aacute;c chủ đề Văn học nước ngo&agrave;i, truyện nguy&ecirc;n bản tiếng Anh theo s&aacute;ch tham khảo c&oacute; hoặc chưa c&oacute; tại thư viện.</li>\r\n	<li>Sẽ mời một thư viện vi&ecirc;n t&igrave;nh nguyện qua l&agrave;m việc với đội ngũ thư viện trường, gi&uacute;p r&egrave;n luyện khả năng anh ngữ trong lĩnh vực nghiệp vụ thư viện.</li>\r\n	<li>Hỗ trợ n&acirc;ng cao khả năng Anh ngữ cho giảng vi&ecirc;n v&agrave; sinh vi&ecirc;n trường.</li>\r\n	<li>C&ugrave;ng ph&aacute;t triển nội dung trang web Thư viện qua ng&ocirc;n ngữ Anh.</li>\r\n</ol>\r\n\r\n<p>Ngo&agrave;i ra, theo đề nghị của Thư viện, đại diện trường Future Generations, GS.TS Dan Wessner hứa sẽ hỗ trợ về cơ sở dữ liệu điện tử cho trang Thư viện.</p>\r\n\r\n<p><em>Một số h&igrave;nh ảnh về buổi k&yacute;, kệ s&aacute;ch được tặng tại thư viện của Dự &aacute;n Bending Bamboo iC3.</em></p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"http://thuvien.nctu.edu.vn/upload/DSC_7889.jpg\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://thuvien.nctu.edu.vn/upload/DSC_7896.jpg\" /></p>', 'noi-dung-ky-ket-giua-dai-hoc-future-generation-va-thu-vien-dai-hoc-nam-can-tho', '2018-07-09 17:00:00', NULL, 1, 2, 1),
(4, 'Toggle main menu visibility  TRANG CHỦ GIỚI THIỆU TRA CỨU OPAC SÁCH ĐIỆN TỬ TÀI LIỆU NỘI SINH TIN TỨC HƯỚNG DẪN SỬ DỤNG GÓC TẢN MẠN SV Hướng dẫn khai thác tài liệu trên website thư viện DNC', 'Nhằm hỗ trợ sinh viên tìm kiếm tài liệu phục vụ cho việc học một cách hiệu quả và nhanh chóng, Thư viện DNC đã tổ chức nhiều', '<p>Nhằm hỗ trợ sinh vi&ecirc;n t&igrave;m kiếm t&agrave;i liệu phục vụ cho việc học một c&aacute;ch hiệu quả v&agrave; nhanh ch&oacute;ng, Thư viện DNC đ&atilde; tổ chức nhiều buổi hướng dẫn sinh vi&ecirc;n khai th&aacute;c nguồn t&agrave;i nguy&ecirc;n đang c&oacute; tại thư viện bao gồm: giới thiệu website thư viện,&nbsp;hướng dẫn c&aacute;ch t&igrave;m kiếm c&aacute;c nguồn&nbsp;t&agrave;i liệu điện tử tr&ecirc;n trang thư viện v&agrave; giới thiệu về kho s&aacute;ch của thư viện.</p>\r\n\r\n<p>H&igrave;nh ảnh hoạt động:</p>\r\n\r\n<p><img alt=\"\" src=\"http://thuvien.nctu.edu.vn/upload/dnc_ebook_train_3.PNG\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://thuvien.nctu.edu.vn/upload/dnc_ebook_train_2.PNG\" /></p>', 'toggle-main-menu-visibility-trang-chu-gioi-thieu-tra-cuu-opac-sach-dien-tu-tai-lieu-noi-sinh-tin-tuc-huong-dan-su-dung-goc-tan-man-sv-huong-dan-khai-thac-tai-lieu-tren-website-thu-vien-dnc', '2018-07-09 17:00:00', NULL, 1, 1, 1),
(5, 'TRƯỜNG ĐẠI HỌC NAM CẦN THƠ- KHÁNH THÀNH TRUNG TÂM THƯ VIỆN ĐIỆN TỬ VÀ KHAI GIẢNG NĂM HỌC MỚI 2017-2018', 'Hòa trong không khí tưng bừng phấn khởi của cả nước, toàn Đảng, toàn quân và toàn dân ta đang sôi nổi thi đua lập thành tích chào mừng kỉ niệm các ngày lễ lớn và đón chào năm học mới. Sáng ngày 28 tháng 9 năm 2017, Thầy và trò trường Đại học Nam Cần Thơ đã tổ chức Lễ khánh thành trung tâm thư viện điện tử và Lễ khai giảng năm học mới, năm học 2017-2018', '<p><strong>TRƯỜNG ĐẠI HỌC NAM CẦN THƠ-</strong></p>\r\n\r\n<p><strong>KH&Aacute;NH TH&Agrave;NH TRUNG T&Acirc;M THƯ VIỆN ĐIỆN TỬ</strong></p>\r\n\r\n<p><strong>V&Agrave; KHAI GIẢNG NĂM HỌC MỚI 2017-2018</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; H&ograve;a trong kh&ocirc;ng kh&iacute; tưng bừng phấn khởi của cả nước, to&agrave;n Đảng, to&agrave;n qu&acirc;n v&agrave; to&agrave;n d&acirc;n ta đang s&ocirc;i nổi thi đua lập th&agrave;nh t&iacute;ch ch&agrave;o mừng kỉ niệm c&aacute;c ng&agrave;y lễ lớn v&agrave; đ&oacute;n ch&agrave;o năm học mới. S&aacute;ng ng&agrave;y 28 th&aacute;ng 9 năm 2017, Thầy v&agrave; tr&ograve; trường Đại học Nam Cần Thơ đ&atilde; tổ chức Lễ kh&aacute;nh th&agrave;nh trung t&acirc;m thư viện điện tử v&agrave; Lễ khai giảng năm học mới, năm học 2017-2018.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Buổi lễ c&oacute; sự tham dự của: &ocirc;ng H&agrave; Hữu Ph&uacute;c-Ph&oacute; ch&aacute;nh Văn ph&ograve;ng đại diện cơ quan Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo ph&iacute;a Nam; b&agrave; V&otilde; Thị Hồng &Aacute;nh-Ph&oacute; Chủ tịch Ủy ban nh&acirc;n d&acirc;n th&agrave;nh phố Cần Thơ; nguy&ecirc;n l&atilde;nh đạo tỉnh Cần Thơ; l&atilde;nh đạo Ban chỉ đạo T&acirc;y Nam Bộ; l&atilde;nh đạo quận Ninh Kiều, huyện Phong Điền; l&atilde;nh đạo c&aacute;c Sở, ng&agrave;nh th&agrave;nh phố; Ban Gi&aacute;m hiệu c&aacute;c trường Đại học: ĐH Cần Thơ, ĐH T&acirc;y Đ&ocirc;, ĐH C&ocirc;ng nghệ Miền Đ&ocirc;ng,&hellip;; l&atilde;nh đạo Sở Gi&aacute;o dục v&agrave; Đ&agrave;o tạo c&aacute;c tỉnh khu vực ĐBSCL; l&atilde;nh đạo c&aacute;c cơ quan, doanh nghiệp; c&aacute;c cơ quan th&ocirc;ng tấn b&aacute;o ch&iacute;; v&agrave; Trường Đại học Nam Cần Thơ c&oacute;: TS. LS. Nguyễn Tiến Dũng-Chủ tịch Hội đồng quản trị, AHLĐ.NGND.GS.TS. V&otilde; T&ograve;ng Xu&acirc;n-Hiệu trưởng nh&agrave; trường, c&ugrave;ng đ&ocirc;ng đảo l&atilde;nh đạo, c&aacute;n bộ, giảng vi&ecirc;n, sinh vi&ecirc;n của Trường Đại học Nam Cần Thơ đến dự.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Nội dung chương tr&igrave;nh buổi lễ gồm c&oacute; hai phần:&nbsp;<strong>Phần thứ nhất&nbsp;</strong>l&agrave; nội dung chương tr&igrave;nh Lễ Kh&aacute;nh th&agrave;nh Trung t&acirc;m Thư viện điện tử v&agrave;&nbsp;<strong>Phần thứ hai</strong>&nbsp;l&agrave; nội dung chương tr&igrave;nh Lễ khai giảng năm học 2017 &ndash; 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H1.jpg\" /></p>\r\n\r\n<p><strong><em>H&igrave;nh 1: Lễ khai giảng năm học mới 2017 - 2018</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;C&ocirc;ng tr&igrave;nh Trung t&acirc;m thư viện điện tử được kh&aacute;nh th&agrave;nh nhằm ch&agrave;o mừng lễ khai giảng năm học mới v&agrave; phục vụ nhu cầu đ&agrave;o tạo, hoạt động nghi&ecirc;n cứu khoa học cho c&aacute;n bộ, giảng vi&ecirc;n, sinh vi&ecirc;n của trường. C&ocirc;ng tr&igrave;nh c&oacute; kiến tr&uacute;c hiện đại, được trang bị đầy đủ m&aacute;y vi t&iacute;nh, ph&ograve;ng hội nghị, hội thảo, được gắn kết phần mềm thư viện t&iacute;ch hợp &ndash; thư viện số - s&aacute;ch điện tử v&agrave; được trang bị tr&ecirc;n 5.285 tựa đầu s&aacute;ch, với tổng số lượng s&aacute;ch l&ecirc;n đến 38.670 cuốn. Ngo&agrave;i ra, b&ecirc;n trong thư viện c&ograve;n c&oacute; kh&ocirc;ng gian để thư giản như ph&ograve;ng gym, cafe,&hellip;c&oacute; diện t&iacute;ch sử dụng 4.200m2, gồm 3 tầng nổi v&agrave; 1 tầng trệt với kinh ph&iacute; đầu tư x&acirc;y dựng tr&ecirc;n 50 tỷ đồng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H2.jpg\" /></p>\r\n\r\n<p><strong><em>H&igrave;nh 2: Nghi thức cắt băng kh&aacute;nh th&agrave;nh Trung t&acirc;m thư vi&ecirc;n điện tử</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Trong năm học 2016 - 2017 vừa qua, Thầy v&agrave; Tr&ograve; của trường ĐH Nam Cần Thơ đ&atilde; kh&ocirc;ng ngừng hăng h&aacute;i thi đua dạy tốt học tốt, vượt qua mọi kh&oacute; khăn để ho&agrave;n th&agrave;nh tốt mục ti&ecirc;u v&agrave; nhiệm vụ của năm học. Để ghi nhận th&agrave;nh t&iacute;ch v&agrave; kịp thời động vi&ecirc;n phong tr&agrave;o thi đua của c&aacute;c đơn vị v&agrave; c&aacute; nh&acirc;n, Ủy ban nh&acirc;n d&acirc;n th&agrave;nh phố Cần Thơ đ&atilde; tặng bằng khen cho 16 c&aacute; nh&acirc;n c&oacute; th&agrave;nh t&iacute;ch xuất sắc trong năm học 2016-2017. V&agrave; trường đại học Nam Cần Thơ cũng rất vinh hạnh nhận được bằng khen của Ủy ban nh&acirc;n d&acirc;n tỉnh An Giang v&igrave; Trường đ&atilde; c&oacute; đ&oacute;ng g&oacute;p t&iacute;ch cực cho tỉnh An Giang trong kỳ thi Tốt nghiệp trung học phổ th&ocirc;ng quốc gia năm 2017. Ngo&agrave;i ra, l&atilde;nh đạo nh&agrave; Trường cũng đ&atilde; trao tặng danh hiệu &ldquo;Chiến sĩ thi đua cơ sở&rdquo; cho 25 c&aacute;n bộ, giảng vi&ecirc;n, nh&acirc;n vi&ecirc;n của Trường.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H3.jpg\" /></p>\r\n\r\n<p>&nbsp;<strong><em>H&igrave;nh 3: B&agrave; V&otilde; Thị Hồng &Aacute;nh trao bằng khen của UBND TP. Cần Thơ</em></strong></p>\r\n\r\n<p><strong><em>&nbsp;cho CB, GV của nh&agrave; Trường</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tuyển sinh năm 2017, Trường Đại học Nam Cần Thơ đ&atilde; d&agrave;nh hơn 4.000.000.000 đồng để hỗ trợ học bổng cho t&acirc;n sinh vi&ecirc;n, nhằm động vi&ecirc;n, khuyến kh&iacute;ch c&aacute;c em nhập học tại Trường. V&agrave; cũng trong buổi lễ, nh&agrave; Trường đ&atilde; trao tặng nhiều suất học bổng trị gi&aacute; cho c&aacute;c em sinh vi&ecirc;n c&oacute; th&agrave;nh t&iacute;ch học tập suất sắc, học tập loại giỏi năm học 2016-2017 v&agrave; c&aacute;c em t&acirc;n sinh vi&ecirc;n thủ khoa đầu v&agrave;o kh&oacute;a 5, với số tiền gần 200 triệu đồng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H4.jpg\" /></p>\r\n\r\n<p><strong><em>H&igrave;nh 4: TS.LS. Nguyễn Tiến Dũng trao học bổng cho t&acirc;n sinh vi&ecirc;n thủ khoa đầu v&agrave;o</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Tại buổi lễ, Trường cũng nhận được sự quan t&acirc;m của qu&yacute; c&ocirc;ng ty, doanh nghiệp. C&aacute;c đơn vị đ&atilde; t&agrave;i trợ c&aacute;c suất học bổng cho sinh vi&ecirc;n Trường. Đ&acirc;y l&agrave; niềm vinh hạnh rất lớn của Nh&agrave; trường v&agrave; l&agrave; niềm động vi&ecirc;n về vật chất v&agrave; tinh thần cho c&aacute;c em sinh vi&ecirc;n. Tổng số tiền được nhận t&agrave;i trợ l&agrave; 380.000.000 đồng.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Qua những nổ lực v&agrave; kết quả đạt được của Thầy v&agrave; Tr&ograve; trường Đại học Nam Cần Thơ, nh&acirc;n dịp lễ khai giảng năm học mới, đại diện Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo-&ocirc;ng H&agrave; Hữu Ph&uacute;c, Ph&oacute; ch&aacute;nh Văn ph&ograve;ng cơ quan đại diện ph&iacute;a Nam đ&atilde; c&oacute; những nhận định:&nbsp;<strong><em>&ldquo;T&ocirc;i đ&aacute;nh gi&aacute; cao sự ph&aacute;t triển vượt bậc của Trường Đại học Nam Cần Thơ, chỉ với thời gian gần 05 năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển l&agrave; chặng đường ngắn ngủi nhưng&nbsp; đủ để khẳng định vai tr&ograve;, vị thế của Trường Đại học Nam Cần Thơ v&agrave; thực tế đ&atilde; đ&oacute;ng g&oacute;p rất đ&aacute;ng kể cho nền gi&aacute;o dục của Tp. Cần Thơ v&agrave; khu vực Đồng bằng S&ocirc;ng Cửu Long&rdquo;</em></strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Với sự quan t&acirc;m của c&aacute;c cấp, c&aacute;c ngh&agrave;nh, sự ủng hộ của qu&yacute; phụ huynh sinh vi&ecirc;n, qu&yacute; doanh nghiệp c&ugrave;ng với sự nỗ lực của tập thể c&aacute;n bộ, giảng vi&ecirc;n Nh&agrave; trường&nbsp;<strong><em>&ldquo;Hết l&ograve;ng v&igrave; học sinh sinh vi&ecirc;n th&acirc;n y&ecirc;u&rdquo;</em></strong>, ch&uacute;ng ta tin tưởng trong năm học mới Trường Đại học Nam Cần Thơ sẽ gặt h&aacute;i thật nhiều th&agrave;nh c&ocirc;ng, xứng đ&aacute;ng với sự tin tưởng của mọi người v&agrave; x&atilde; hội. Nh&acirc;n dịp n&agrave;y, l&atilde;nh đạo nh&agrave; Trường cũng xin tr&acirc;n th&agrave;nh cảm ơn sự quan t&acirc;m, chỉ đạo s&acirc;u sắc của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo, Ban Chỉ đạo T&acirc;y Nam Bộ, sự gi&uacute;p đỡ của c&aacute;c cấp ủy Đảng, Ch&iacute;nh quyền th&agrave;nh phố Cần Thơ, c&aacute;c tỉnh th&agrave;nh địa phương, c&aacute;c Doanh nghiệp, c&aacute;c cơ quan th&ocirc;ng tấn b&aacute;o ch&iacute; v&agrave; c&aacute;c Trường bạn trong năm học vừa qua v&agrave; cũng xin qu&yacute; l&atilde;nh đạo, cơ quan, đơn vị, c&aacute;c tổ chức, c&aacute; nh&acirc;n tiếp tục d&agrave;nh sự tin y&ecirc;u v&agrave; hỗ trợ cho Trường Đại học Nam Cần Thơ trong thời gian tới.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em>Một số h&igrave;nh ảnh của buổi lễ</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H5.jpg\" /></em></strong></p>\r\n\r\n<p>&nbsp;<strong><em>H&igrave;nh 5: Quang cảnh lễ khai giảng</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H6.jpg\" /></p>\r\n\r\n<p>&nbsp;<strong><em>H&igrave;nh 6: Đ&ocirc;ng đảo đại biểu, kh&aacute;ch mời v&agrave; sinh vi&ecirc;n tham dự</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H7.jpg\" /></em></strong></p>\r\n\r\n<p>&nbsp;<strong><em>H&igrave;nh 7: TS. Nguyễn Văn Quang - Ph&oacute; hiệu trưởng đại diện nh&agrave; Trường</em></strong></p>\r\n\r\n<p><strong><em>nhận bằng khen của UBND tỉnh An Giang</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H8.jpg\" /></em></strong></p>\r\n\r\n<p><strong><em>&nbsp;</em></strong><strong><em>H&igrave;nh 8: Sinh vi&ecirc;n nhận học bổng</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><em><img alt=\"\" src=\"https://nctu.edu.vn/uploads/page/2017_09/H9.jpg\" /></em></strong></p>\r\n\r\n<p><strong><em>&nbsp;</em></strong><strong><em>H&igrave;nh 9: Đại biểu chụp ảnh lưu niệm c&ugrave;ng với l&atilde;nh đạo Trường</em></strong></p>', 'truong-dai-hoc-nam-can-tho--khanh-thanh-trung-tam-thu-vien-dien-tu-va-khai-giang-nam-hoc-moi-2017-2018', '2018-07-09 17:00:00', NULL, 1, 2, 1),
(6, 'CAN THO NEWS: Khánh thành Trung tâm Thư viện điện tử Trường Đại học Nam Cần Thơ', 'Sau 5 năm đi vào hoạt động, hiện trường Đại học Nam Cần Thơ có hơn 20 ngành học với hơn 8.000 sinh viên theo học tại trường. Trong ngày khai giảng năm học 2017-2018, trường cũng đã tổ chức khánh thành Trung tâm Thư viện điện tử phục vụ cho sinh viên và giảng viên trường. Công trình này được khởi công xây dựng vào tháng 12/2016, gồm tòa nhà chính và khuôn viên cây xanh bao quanh.', '<p>Sau 5 năm đi v&agrave;o hoạt động, hiện trường Đại học Nam Cần Thơ c&oacute; hơn 20 ng&agrave;nh học với hơn 8.000 sinh vi&ecirc;n theo học tại trường.&nbsp;Trong ng&agrave;y khai giảng năm học 2017-2018, trường cũng đ&atilde; tổ chức kh&aacute;nh th&agrave;nh Trung t&acirc;m Thư viện điện tử phục vụ cho sinh vi&ecirc;n v&agrave; giảng vi&ecirc;n trường. C&ocirc;ng tr&igrave;nh n&agrave;y được khởi c&ocirc;ng x&acirc;y dựng v&agrave;o th&aacute;ng 12/2016, gồm t&ograve;a nh&agrave; ch&iacute;nh v&agrave; khu&ocirc;n vi&ecirc;n c&acirc;y xanh bao quanh.</p>\r\n\r\n<p>C&ocirc;ng tr&igrave;nh thư viện điện tử l&agrave; một trong những hạng mục x&acirc;y dựng nằm trong tổng thể quy hoạch đầu tư v&agrave; ph&aacute;t triển cơ sở vật chất của Trường Đại học Nam Cần Thơ, c&ocirc;ng tr&igrave;nh với kiến tr&uacute;c hiện đại, gồm 4 tầng: tầng trệt được thiết kế l&agrave;m si&ecirc;u thị mini v&agrave; dịch vụ ăn uống nhanh; tầng 1 v&agrave; tầng 2 được bố tr&iacute; ph&ograve;ng m&aacute;y vi t&iacute;nh v&agrave; kệ s&aacute;ch; tầng 3 l&agrave; nơi hội thảo - hội nghị, tổng diện t&iacute;ch mặt s&agrave;n được sử dụng: 4.200m2&nbsp;kinh ph&iacute; đầu tư tr&ecirc;n 50 tỷ đồng. Ngo&agrave;i ra, b&ecirc;n trong thư viện c&ograve;n c&oacute; kh&ocirc;ng gian để thư giản như ph&ograve;ng gym, cafe,&hellip;</p>\r\n\r\n<p><img alt=\"\" src=\"http://canthostnews.vn/Portals/0/HinhBanTin/hang/2017/Capture.PNG\" /><br />\r\n<em>Cắt bảng kh&aacute;nh th&agrave;nh Trung t&acirc;m Thư viện điện tử. Ảnh: Th&uacute;y Hằng</em></p>\r\n\r\n<p>Với phương ch&acirc;m lu&ocirc;n l&agrave; người bạn đồng h&agrave;nh, th&acirc;n thiết, hữu &iacute;ch với giảng vi&ecirc;n, sinh vi&ecirc;n Trường Đại học Nam Cần Thơ tr&ecirc;n con đường học tập, nghi&ecirc;n cứu khoa học mở mang kiến thức. Thư viện điện tử của trường đ&atilde; được gắn kết phần mềm thư viện t&iacute;ch hợp &ndash; thư viện số - s&aacute;ch điện tử v&agrave; được trang bị tr&ecirc;n 5.285 tựa đầu s&aacute;ch, với tổng số lượng s&aacute;ch l&ecirc;n đến 38.670 cuốn. Đa dạng nhiều chuy&ecirc;n ng&agrave;nh như: Dược, Kế To&aacute;n, T&agrave;i ch&iacute;nh, &nbsp;Quản trị kinh doanh, Kiến tr&uacute;c, X&acirc;y dựng, Cơ bản, Tin học, Luật, Quan hệ c&ocirc;ng ch&uacute;ng, m&ocirc;i trường, Quản l&yacute; đất đai,&hellip;</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, trường đ&atilde; được Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng cấp giấy ph&eacute;p xuất bản Tạp ch&iacute; Khoa học v&agrave; Kinh tế ph&aacute;t triển theo quyết định số 291/GP-BTTTT ng&agrave;y 26/6/2017, dự kiến th&aacute;ng 10/2017 sẽ xuất bản số đầu ti&ecirc;n.</p>\r\n\r\n<p>Dự kiến, cuối năm nay, trường cũng sẽ khởi c&ocirc;ng x&acirc;y dựng Bệnh viện Nam Cần Thơ với quy m&ocirc; 300 giường bệnh nhằm phục vụ c&ocirc;ng t&aacute;c kh&aacute;m chữa bệnh, thực h&agrave;nh, thực tập cho sinh vi&ecirc;n khối ng&agrave;nh Y &ndash; Dược trong trưởng, kinh ph&iacute; khoảng 600 tỉ đồng v&agrave; sẽ kh&aacute;nh th&agrave;nh đưa v&agrave;o sử dụng v&agrave;o giữa năm 2019.</p>\r\n\r\n<p><img alt=\"\" src=\"http://canthostnews.vn/Portals/0/HinhBanTin/hang/2017/GSTS%20Vo%20Tong%20Xuan.PNG\" /><br />\r\n<em>GS.TS. V&otilde; T&ograve;ng Xu&acirc;n - Hiệu trưởng&nbsp;Đại học Nam Cần Thơ . Ảnh: Th&uacute;y Hằng<br />\r\n<img alt=\"\" src=\"http://canthostnews.vn/Portals/0/HinhBanTin/hang/2017/Quang%20canh%20chung.PNG\" /><br />\r\nQuang cảnh buổi lễ. Ảnh: Th&uacute;y Hằng</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Th&uacute;y Hằng</p>', 'can-tho-news-khanh-thanh-trung-tam-thu-vien-dien-tu-truong-dai-hoc-nam-can-tho', '2018-07-09 17:00:00', NULL, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chudebv`
--

CREATE TABLE `chudebv` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_cd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chudebv`
--

INSERT INTO `chudebv` (`id`, `ten_cd`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Góc tản mạn sinh viên', 'goc-tan-man-sinh-vien', NULL, NULL),
(2, 'Tin tức & sự kiện', 'tin-tuc-&-su-kien', NULL, NULL),
(3, 'Giới thiệu sách', 'gioi-thieu-sach', NULL, NULL),
(4, 'Sách tặng', 'sach-tang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bv_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `link_anh`, `bv_id`, `created_at`, `updated_at`) VALUES
(0, '1530587083.png', 1, NULL, NULL),
(1, '1530586831.jpg', NULL, NULL, NULL),
(3, '1530587132.png', 1, NULL, NULL),
(4, '1530587431.jpg', 2, NULL, NULL),
(5, '1530587421.jpg', 3, NULL, NULL),
(6, '15305874312.jpg', 5, NULL, NULL),
(7, '1530582217431.jpg', 6, NULL, NULL),
(8, '1531230587431.jpg', 4, NULL, NULL),
(9, '1530587435641.jpg', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_31_082819_create_chudebv_table', 1),
(5, '2020_07_31_084203_create_usergroup_table', 2),
(6, '2020_07_31_084219_create_chudebv_table', 2),
(7, '2020_07_31_084240_create_profileuser_table', 2),
(8, '2020_07_31_084257_create_phanquyen_table', 2),
(9, '2020_07_31_084319_create_users_table', 2),
(10, '2020_07_31_084336_create_baiviet_table', 2),
(11, '2020_07_31_084354_create_hinhanh_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_pq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usergroup_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `ten_pq`, `usergroup_id`, `created_at`, `updated_at`) VALUES
(1, 'Quyền Admin', 1, NULL, NULL),
(2, 'Quyền User', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profileuser`
--

CREATE TABLE `profileuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_prouser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profileuser`
--

INSERT INTO `profileuser` (`id`, `name_prouser`, `email`, `address`, `sdt`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoàng Giang', 'jasonnguyen0204@gmail.com', '2338/4 Mỹ hưng 1, Mỹ Hòa, Bình Minh, Vĩnh Long', '0789539650', NULL, NULL),
(2, 'Nguyễn Thị Diễm Hương', 'admin@example.com', 'Sóc Tờ Răng', '0123456789', NULL, NULL),
(3, 'Đỗ Ngô Thúy Minh', 'dongothuyminh@gmail.com', 'Bạc Liêu', '0915369209', NULL, NULL),
(4, 'Nguyễn Thị Thùy Quyên', 'user@example.com', 'Vĩnh Long', '09876543210', NULL, NULL),
(5, 'Võ Văn Trí', 'user2@example.com', 'Cần Thơ', '09876543212', NULL, NULL),
(6, 'Võ Thị Thu Hiền', 'user3@example.com', 'Hậu Giang', '098765432102', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id`, `name_group`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usergroup_id` int(10) UNSIGNED NOT NULL,
  `profileuser_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `usergroup_id`, `profileuser_id`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', '1', 1, 1, NULL, NULL),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', '1', 1, 2, NULL, NULL),
(3, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', '1', 1, 3, NULL, NULL),
(4, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '1', 2, 4, NULL, NULL),
(5, 'user2', '7e58d63b60197ceb55a1c487989a3720', '1', 2, 5, NULL, NULL),
(6, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', '1', 2, 6, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `baiviet_ten_bv_unique` (`ten_bv`),
  ADD KEY `baiviet_cd_id_foreign` (`cd_id`),
  ADD KEY `baiviet_user_id_foreign` (`user_id`);

--
-- Indexes for table `chudebv`
--
ALTER TABLE `chudebv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chudebv_ten_cd_unique` (`ten_cd`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinhanh_bv_id_foreign` (`bv_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phanquyen_usergroup_id_foreign` (`usergroup_id`);

--
-- Indexes for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profileuser_email_unique` (`email`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_usergroup_id_foreign` (`usergroup_id`),
  ADD KEY `users_profileuser_id_foreign` (`profileuser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chudebv`
--
ALTER TABLE `chudebv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profileuser`
--
ALTER TABLE `profileuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_cd_id_foreign` FOREIGN KEY (`cd_id`) REFERENCES `chudebv` (`id`),
  ADD CONSTRAINT `baiviet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_bv_id_foreign` FOREIGN KEY (`bv_id`) REFERENCES `baiviet` (`id`);

--
-- Constraints for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_usergroup_id_foreign` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_profileuser_id_foreign` FOREIGN KEY (`profileuser_id`) REFERENCES `profileuser` (`id`),
  ADD CONSTRAINT `users_usergroup_id_foreign` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
