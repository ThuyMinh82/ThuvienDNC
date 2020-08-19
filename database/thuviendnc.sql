-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 03:37 AM
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
  `status` int(11) DEFAULT NULL,
  `cd_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `anhdaidien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `ten_bv`, `mtngan_bv`, `noidung_bv`, `alias`, `created_at`, `updated_at`, `status`, `cd_id`, `user_id`, `anhdaidien`) VALUES
(1, 'Đây là bài viết có tên 1234', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123</p>', 'day-la-bai-viet-co-ten-123', '2020-08-16 21:17:45', '2020-08-16 21:56:38', 1, 1, NULL, '/ThuvienDNC/userfiles/images/alt.png'),
(2, 'Đây là bài viết có tên 1234567890111111', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1234567890111111</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 1234567890111111</p>', 'day-la-bai-viet-co-ten-1234567890111111', '2020-08-16 21:53:25', '2020-08-16 23:12:03', 1, 1, NULL, '/ThuvienDNC/userfiles/images/117305039_694423771146978_241376177775210570_n.jpg'),
(3, 'Đây là bài viết có tên 1234566', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456</p>', 'day-la-bai-viet-co-ten-123456', '2020-08-16 21:58:20', '2020-08-16 22:00:14', 1, 1, NULL, '/ThuvienDNC/userfiles/images/teacher-small.png'),
(4, 'Bài viết kiểu mới', '<p>B&agrave;i viết kiểu mới</p>', '<p>B&agrave;i viết kiểu mới</p>', 'bai-viet-kieu-moi', '2020-08-16 22:46:42', '2020-08-16 23:12:14', 1, 1, NULL, '/ThuvienDNC/userfiles/images/students.png'),
(5, 'Đây là bài viết có tên 123456789', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456789</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456789</p>', 'day-la-bai-viet-co-ten-123456789', '2020-08-17 00:26:47', '2020-08-17 00:27:22', 1, 1, NULL, '/ThuvienDNC/userfiles/images/students.png'),
(6, 'Đây là bài viết có tên 123001123', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123001</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123001</p>\r\n\r\n<p><img alt=\"\" src=\"/ThuvienDNC/userfiles/images/117305039_694423771146978_241376177775210570_n.jpg\" style=\"height:280px; width:497px\" /></p>', 'day-la-bai-viet-co-ten-123001', '2020-08-17 00:53:32', '2020-08-17 01:06:36', 1, 1, NULL, '/ThuvienDNC/userfiles/images/select.png'),
(7, 'Đây là bài viết có tên 123456789123', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456789123</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456789123</p>', 'day-la-bai-viet-co-ten-123456789123', '2020-08-17 00:55:17', '2020-08-17 01:11:15', 1, 1, NULL, '/ThuvienDNC/userfiles/images/export.png'),
(8, 'Đây là bài viết có tên 123456890', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456890</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456890</p>', 'day-la-bai-viet-co-ten-123456890', '2020-08-17 00:56:07', '2020-08-17 00:56:07', 0, 1, NULL, '/ThuvienDNC/userfiles/images/print.png'),
(9, 'Hướng dẫn tham gia Cuộc thi Đại sứ Văn hóa đọc 2020', '<p><strong>Để cuộc thi Đại sứ Văn h&oacute;a đọc thực sự l&agrave; một s&acirc;n chơi bổ &iacute;ch cho học sinh và sinh vi&ecirc;n trong cả nước, g&oacute;p phần th&uacute;c đẩy phong tr&agrave;o đọc trong thế hệ trẻ, h&igrave;nh th&agrave;nh th&oacute;i quen v&agrave; kỹ năng đọc s&aacute;ch cho học sinh, sinh vi&ecirc;n, một yếu tố quan trọng g&oacute;p phần ph&aacute;t triển văn h&oacute;a đọc trong nh&agrave; trường v&agrave; cộng đồng, Ban Tổ chức cuộc thi c&oacute; một số hướng dẫn cụ thể về việc tham gia dự thi v&ograve;ng sơ khảo v&agrave; gợi &yacute; khi l&agrave;m b&agrave;i dự thi.</strong></p>', '<p style=\"text-align:center\"><img alt=\"\" src=\"/ThuvienDNC/userfiles/images/vhd21.jpg\" style=\"height:285px; width:257px\" /></p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Tổ chức Cu&ocirc;̣c thi Đại sứ Văn h&oacute;a l&agrave; một trong những hoạt động được Bộ Văn h&oacute;a, Thể thao v&agrave; Du lịch (BVHTTDL) thực hiện trong năm 2020. Cuộc thi Đại sứ Văn h&oacute;a đọc năm 2020 được tổ chức mở r&ocirc;̣ng hơn so với năm 2019. Đối tượng tham dự cuộc thi gồm: Học sinh từ lớp 1 đến lớp 12, sinh vi&ecirc;n đang theo học tại c&aacute;c trường&nbsp;đại học/học viện v&agrave; c&aacute;c loại h&igrave;nh gi&aacute;o dục kh&aacute;c.</p>\r\n\r\n			<p>Cuộc thi sẽ diễn ra qua 02 v&ograve;ng:</p>\r\n\r\n			<p>- V&ograve;ng sơ khảo: Tổ chức tại c&aacute;c tỉnh/th&agrave;nh, một số bộ ng&agrave;nh, đơn vị đồng h&agrave;nh với Bộ VHTTDL v&agrave; một số trường đại học/học viện từ th&aacute;ng 2/2020 đến&nbsp; th&aacute;ng 7/2020.</p>\r\n\r\n			<p>- V&ograve;ng chung kết: Tổ chức tại H&agrave; Nội v&agrave;o th&aacute;ng 9/2020</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trong thời gian vừa qua, đ&ecirc;̉ tri&ecirc;̉n khai Cu&ocirc;̣c thi Đại sứ Văn h&oacute;a đọc m&ocirc;̣t cách có hi&ecirc;̣u quả, BVHTTDL đã ban hành 3 văn bản:&nbsp;<a href=\"http://vuthuvien.bvhttdl.gov.vn/document.aspx?sitepageid=633&amp;id=19691\">C&ocirc;ng văn số 426/BVHTTDL-TV</a>&nbsp;ng&agrave;y 04 th&aacute;ng 02 năm 2020 về việc Hướng dẫn Cuộc thi Đại sứ Văn h&oacute;a đọc năm 2020, th&ocirc;ng b&aacute;o v&agrave; hướng dẫn c&aacute;c địa phương, c&aacute;c trường đại học/học viện về địa điểm, thời gian tổ chức v&ograve;ng sơ khảo, v&ograve;ng chung kết; nội dung cuộc thi (c&oacute; thể lệ k&egrave;m theo); kinh ph&iacute; v&agrave; tổ chức thực hiện Cuộc thi Đại sứ Văn h&oacute;a đọc năm 2020; C&ocirc;ng văn số 471/BVHTTDL-TV ng&agrave;y 07 th&aacute;ng 02 năm 2020 gửi Bộ Quốc ph&ograve;ng v&agrave; Bộ C&ocirc;ng an,&nbsp;<a href=\"http://vuthuvien.bvhttdl.gov.vn/document.aspx?sitepageid=633&amp;id=19700\">C&ocirc;ng văn số 852/BVHTTDL-TV</a>&nbsp;ng&agrave;y 27 th&aacute;ng 02 năm 2020 gửi&nbsp;Hội Người m&ugrave; Việt Nam về việc tham gia phối hợp tổ chức Cuộc thi Đại sứ Văn h&oacute;a đọc năm 2020.</p>\r\n\r\n<p>Từ c&aacute;c c&ocirc;ng văn n&agrave;y, nhiều địa phương, Bộ ng&agrave;nh v&agrave; đơn vị đ&atilde; x&acirc;y dựng kế hoạch cụ thể để triển khai v&ograve;ng sơ khảo. Tuy nhi&ecirc;n, do t&igrave;nh h&igrave;nh dịch bệnh COVID-19 đang diễn ra với những diễn biến phức tạp, n&ecirc;n việc ph&aacute;t động cuộc thi kh&ocirc;ng thực hiện được trực tiếp m&agrave; chủ yếu được thực hiện trực tuyến qua trang th&ocirc;ng tin điện tử (Website) của c&aacute;c Thư viện tỉnh, th&agrave;nh phố trực thuộc Trung ương, c&aacute;c trường Đại học hoặc c&aacute;c đơn vị đồng h&agrave;nh với Bộ VHTTDL cuộc thi như: B&aacute;o Tuổi trẻ, B&aacute;o Thiếu ni&ecirc;n tiền phong v&agrave; Nhi đồng; Nh&agrave; xuất bản Gi&aacute;o dục Việt Nam&hellip;</p>\r\n\r\n<p>Để c&oacute; những th&ocirc;ng tin về việc nộp b&agrave;i thi v&ograve;ng sơ khảo, c&aacute;c th&iacute; sinh c&oacute; thể xem hướng dẫn cụ thể tại địa chỉ website của c&aacute;c thư viện v&agrave; đơn vị đ&atilde; n&ecirc;u tr&ecirc;n.</p>\r\n\r\n<p>Đối với những tỉnh/th&agrave;nh v&agrave; c&aacute;c trường kh&ocirc;ng tổ chức v&ograve;ng sơ khảo, c&aacute;c th&iacute; sinh c&oacute; thể gửi b&agrave;i dự thi tham gia v&ograve;ng sơ khảo theo từng lứa tuổi tới c&aacute;c địa chỉ sau:</p>\r\n\r\n<p>- Học sinh tiểu học v&agrave; trung học cơ sở c&oacute; thể tham gia bằng c&aacute;ch gửi b&agrave;i thi đến: B&aacute;o Thiếu ni&ecirc;n tiền phong v&agrave; Nhi đồng, số 3, Nguyễn Qu&yacute; Đức, quận Thanh Xu&acirc;n, H&agrave; Nội. B&agrave;i dự thi c&oacute; thể gửi qua email:&nbsp;<strong>daisuvanhoadoc2020.tntpnd@gmail.com.</strong></p>\r\n\r\n<p>- Học sinh trung học phổ th&ocirc;ng c&oacute; thể tham gia bằng c&aacute;ch gửi b&agrave;i thi đến: Nh&agrave; xuất bản Gi&aacute;o dục Việt Nam, Tầng 2, số 73, L&ograve; Đ&uacute;c,&nbsp;phường Phạm Đ&igrave;nh Hổ, quận Hai B&agrave; Trưng, th&agrave;nh phố H&agrave; Nội. B&agrave;i dự thi c&oacute; thể gửi qua email:&nbsp;<strong><a href=\"mailto:daisuvanhoadoc2020@odes.edu.vn\">daisuvanhoadoc2020@oes.edu.vn</a></strong>.</p>\r\n\r\n<p>- Sinh vi&ecirc;n c&oacute; thể tham gia bằng c&aacute;ch gửi b&agrave;i dự thi đến: Chuy&ecirc;n trang Sinh vi&ecirc;n Việt Nam, b&aacute;o Tiền phong, &Ocirc; D29, Khu đ&ocirc; thị mới Cầu Giấy, Phạm Văn Bạch, th&agrave;nh phố H&agrave; Nội. B&agrave;i dự thi c&oacute; thể gửi qua email:&nbsp;<strong>sinhvien@baotienphong.com.vn.</strong></p>\r\n\r\n<p>Do c&oacute; nhiều đơn vị tổ chức v&ograve;ng sơ khảo, đề nghị th&iacute; sinh chỉ gửi đến một nơi để tr&aacute;nh tr&ugrave;ng lặp khi lựa chọn c&aacute;c b&agrave;i thi tham dự v&ograve;ng chung kết.</p>\r\n\r\n<p>Thực tế đ&atilde; khẳng định: Vi&ecirc;̣c đọc kh&ocirc;ng chỉ đơn thu&acirc;̀n giúp các em mở r&ocirc;̣ng ki&ecirc;́n thức, hình thành các kỹ năng sống, l&agrave;m phong ph&uacute; th&ecirc;m t&acirc;m hồn mà còn giúp các em hình thành thói quen tự học và học t&acirc;̣p su&ocirc;́t đời.</p>\r\n\r\n<p>Khi l&agrave;m b&agrave;i dự thi, th&iacute; sinh cần ch&uacute; &yacute; đến những điểm sau:</p>\r\n\r\n<p><strong>1. Về nội dung</strong></p>\r\n\r\n<p><strong><em>Chia sẻ về một cuốn s&aacute;ch m&agrave; em y&ecirc;u th&iacute;ch hoặc một cuốn s&aacute;ch đ&atilde; l&agrave;m thay đổi nhận thức hoặc cuộc sống của em</em></strong>: C&aacute;c em cần giới thiệu được c&aacute;c yếu tố xuất bản của t&aacute;c phẩm: t&ecirc;n t&aacute;c phẩm, t&aacute;c giả, nh&agrave; xuất bản, nơi xuất bản, số trang, khổ cỡ&hellip;; cấu tr&uacute;c/kh&aacute;i qu&aacute;t nội dung của t&aacute;c phẩm; sự độc đ&aacute;o, đặc sắc của t&aacute;c phẩm; Ph&acirc;n t&iacute;ch gi&aacute; trị khoa học/gi&aacute; trị nghệ thuật của t&aacute;c phẩm; N&ecirc;u &yacute; nghĩa, t&aacute;c dụng của t&aacute;c phẩm: Đối với bản th&acirc;n (c&oacute; hiệu quả v&agrave; l&agrave;m thay đổi nhận thức, mở rộng hiểu biết, truyền cảm hứng...) v&agrave; đối với cộng đồng.</p>\r\n\r\n<p><strong><em>Khi s&aacute;ng t&aacute;c một t&aacute;c phẩm nhằm kh&iacute;ch lệ mọi người đọc s&aacute;ch</em></strong>: C&aacute;c em c&oacute; thể s&aacute;ng t&aacute;c một c&acirc;u chuyện hoặc một b&agrave;i thơ. C&aacute;c em cần đặt t&ecirc;n cho t&aacute;c phẩm; t&aacute;c phẩm phải c&oacute; cấu tr&uacute;c chặt chẽ, logic, hợp l&yacute;; Khuyến kh&iacute;ch th&iacute; sinh vẽ tranh minh họa.</p>\r\n\r\n<p><strong><em>Viết tiếp lời cho một c&acirc;u chuyện hoặc cuốn s&aacute;ch m&agrave; em đ&atilde; đọc</em></strong>: C&aacute;c em cần n&ecirc;u được t&aacute;c phẩm lựa chọn để ph&aacute;t triển; triển khai tiếp nội dung của t&aacute;c phẩm một c&aacute;ch hợp l&yacute;, logic, chặt chẽ; đảm bảo nội dung c&oacute; &yacute; tưởng s&aacute;ng tạo, c&oacute; &yacute; nghĩa thiết thực. Khuyến kh&iacute;ch th&iacute; sinh vẽ tranh minh họa hoặc c&oacute; lời song ngữ tiếng Anh.</p>\r\n\r\n<p><strong><em>Khi lập kế hoạch v&agrave; biện ph&aacute;p để khuyến kh&iacute;ch c&aacute;c bạn v&agrave; mọi người đọc s&aacute;ch nhiều hơn</em></strong>: C&aacute;c em x&acirc;y dựng được kế hoạch hợp l&yacute; ph&ugrave; hợp với lứa tuổi; Kế hoạch c&oacute; t&iacute;nh thực tế, t&iacute;nh khả thi v&agrave; c&oacute; t&aacute;c động đối với cộng đồng; N&ecirc;u được nội dung c&aacute;c biện ph&aacute;p ph&ugrave; hợp với kế hoạch, với đối tượng cần ph&aacute;t triển văn h&oacute;a đọc.</p>\r\n\r\n<p><strong>2. Về tr&igrave;nh b&agrave;y b&agrave;i dự thi</strong></p>\r\n\r\n<p><strong><em>Đối với b&agrave;i viết</em></strong><em>:</em>&nbsp;Ch&uacute; &yacute; đảm bảo viết đ&uacute;ng ch&iacute;nh tả, ngữ ph&aacute;p, văn phong lưu lo&aacute;t, truyền cảm.</p>\r\n\r\n<p><strong><em>Đối với b&agrave;i thuyết tr&igrave;nh thể hiện bằng video clip</em></strong>:</p>\r\n\r\n<p>- T&ecirc;n video clip do th&iacute; sinh tự s&aacute;ng t&aacute;c (trong đ&oacute; cung cấp đầy đủ c&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n theo y&ecirc;u c&acirc;̀u của Ban Tổ chức: S&ocirc;́ đi&ecirc;̣n thoại, email đ&ecirc;̉ ti&ecirc;̣n li&ecirc;n h&ecirc;̣).</p>\r\n\r\n<p>- C&oacute; độ ph&acirc;n giải tối thiểu l&agrave; 640 x 480 pixel, phải được lưu bằng định dạng phổ biến mp4, avi, mpeg, mkv, klv...; Thời lượng tối thiểu l&agrave; 5 ph&uacute;t, tối đa l&agrave; 15 ph&uacute;t, đảm bảo về chất lượng h&igrave;nh ảnh v&agrave; &acirc;m thanh.</p>\r\n\r\n<p>- C&oacute; thể sử dụng c&aacute;c hiệu ứng, kỹ xảo về h&igrave;nh ảnh v&agrave; &acirc;m thanh, khuyến kh&iacute;ch th&iacute; sinh kh&ocirc;ng sử dụng c&aacute;c h&igrave;nh ảnh, b&agrave;i h&aacute;t hoặc &acirc;m thanh c&oacute; bản quyền. Trường hợp c&oacute; sử dụng c&aacute;c h&igrave;nh ảnh, b&agrave;i h&aacute;t hoặc &acirc;m thanh c&oacute; bản quyền phải ghi r&otilde; nguồn.</p>\r\n\r\n<p><strong>3. Về trích d&acirc;̃n</strong></p>\r\n\r\n<p>Th&iacute; sinh cần phải m&ocirc; tả nguồn đầy đủ khi sử dụng tr&iacute;ch dẫn, c&aacute;c nội dung, đoạn văn, c&acirc;u n&oacute;i, tranh, h&igrave;nh ảnh&hellip; của người kh&aacute;c trong b&agrave;i dự thi.</p>\r\n\r\n<p><strong>4. V&ecirc;̀ các bài tham dự chung k&ecirc;́t</strong></p>\r\n\r\n<p>B&agrave;i thi khi được lựa chọn tham dự v&ograve;ng chung kết phải được được hoàn thi&ecirc;̣n lại, có chỉnh sửa lỗi chỉnh tả, lỗi văn bản v&agrave; kh&ocirc;ng c&oacute; bất k&igrave; k&yacute; hiệu hoặc ghi chú n&agrave;o kh&aacute;c ghi tr&ecirc;n b&agrave;i của vòng sơ khảo (Ví dụ: Lời ph&ecirc;, ghi đi&ecirc;̉m của ban giám khảo vòng sơ khảo&hellip;)</p>\r\n\r\n<p>Ngo&agrave;i ra, Ban tổ chức c&oacute; điểm cộng đối với c&aacute;c th&iacute; sinh đ&atilde; tham gia hoạt động khuyến đọc dưới nhiều h&igrave;nh thức (c&oacute; chứng nhận của c&aacute;c nơi tham gia) hoặc c&oacute; b&agrave;i viết, &yacute; tưởng chia sẻ cho cộng đồng đ&atilde; được c&ocirc;ng nhận hoặc đ&atilde; được thực hiện v&agrave; c&oacute; th&ecirc;m giải phụ cho c&aacute;c th&iacute; sinh c&oacute; hoạt động khuyến đọc hiệu quả.</p>\r\n\r\n<p>Th&iacute; sinh nộp b&agrave;i dự thi k&egrave;m theo th&ocirc;ng tin đầy đủ&nbsp;<em>(theo biểu mẫu quy định)&nbsp;</em>theo địa chỉ đ&atilde; được Ban tổ chức Cuộc thi Đại sứ Văn h&oacute;a đọc 2020 v&ograve;ng sơ khảo quy định.</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c em th&agrave;nh c&ocirc;ng v&agrave; c&oacute; nhiều hứng khởi khi tham dự cuộc thi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ban Tổ chức Cuộc thi Đại sứ Văn h&oacute;a đọc 2020</strong></p>\r\n\r\n<p><em>(daisuvanhoadoc2020@bvhttdl.gov.vn)</em></p>\r\n\r\n<p><em><strong>Nguồn:</strong>&nbsp;</em><a href=\"http://vuthuvien.bvhttdl.gov.vn/articledetail.aspx?sitepageid=625&amp;articleid=10944\">http://vuthuvien.bvhttdl.gov.vn/articledetail.aspx?sitepageid=625&amp;articleid=10944</a></p>', 'huong-dan-tham-gia-cuoc-thi-dai-su-van-hoa-doc-2020', '2020-08-17 02:16:52', '2020-08-17 02:17:27', 1, 1, NULL, '/ThuvienDNC/userfiles/images/vhd21.jpg'),
(10, 'Đây là bài viết có tên 123456789011111112', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456789011111112</p>', '<p>Đ&acirc;y l&agrave; b&agrave;i viết c&oacute; t&ecirc;n 123456789011111112</p>', 'day-la-bai-viet-co-ten-123456789011111112', '2020-08-18 10:21:20', '2020-08-18 10:21:25', 1, 1, 3, '/ThuvienDNC/userfiles/files/Thu-vien4%20(1).jpg');

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
(1, 'Tin tức - Sự kiện', 'tin-tuc-su-kien', '2020-08-16 21:15:56', '2020-08-16 21:15:56'),
(4, 'Góc tản mạn sinh viên', 'goc-tan-man-sinh-vien', '2020-08-17 23:12:23', '2020-08-17 23:12:23'),
(5, 'Giới thiệu sách', 'gioi-thieu-sach', '2020-08-17 23:12:39', '2020-08-17 23:12:39'),
(6, 'Sách tặng', 'sach-tang', '2020-08-17 23:13:44', '2020-08-17 23:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id`, `link_anh`, `ten_anh`, `created_at`, `updated_at`) VALUES
(1, '/ThuvienDNC/userfiles/files/Thu-vien4%20(1).jpg', 'Hình 3', '2020-08-16 22:03:25', '2020-08-17 23:43:33'),
(2, '/ThuvienDNC/userfiles/files/Thu-vien1.png', 'Hình 2', '2020-08-17 23:43:15', '2020-08-17 23:43:15'),
(3, '/ThuvienDNC/userfiles/files/Thu-vien3.jpg', 'Hình 4', '2020-08-17 23:43:57', '2020-08-17 23:43:57');

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
(22, '2020_08_13_090626_create_chudebv_table', 1),
(23, '2020_08_13_090647_create_phanquyen_table', 1),
(24, '2020_08_13_090731_create_usergroup_table', 1),
(25, '2020_08_13_090804_create_users_table', 1),
(26, '2020_08_13_090829_create_profileuser_table', 1),
(27, '2020_08_13_090856_create_hinhanh_table', 1),
(28, '2020_08_13_090927_create_baiviet_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_pq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `ten_pq`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL);

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
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profileuser`
--

INSERT INTO `profileuser` (`id`, `name_prouser`, `email`, `address`, `sdt`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoàng Giang', 'giang@example.com', 'ở nhà', '0123', 1, NULL, NULL),
(6, 'Giang', 'giang@123', 'abc', '123', 2, NULL, NULL),
(7, 'Giang', 'giang@', 'giang', '123', 3, NULL, NULL),
(13, 'giang', 'giang@3523523523', 'dhfusdfusdkj', '1242141241', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pq_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`id`, `name_group`, `pq_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `usergroup_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', 1, NULL, NULL),
(2, 'admin1', '123456', '1', 1, NULL, NULL),
(3, 'admin2', '$2y$10$HsoYaYK.Ujdy5BI//HHYhuUOxBn5OG53Q4k2EAp.CwO1Dw6iMRp9q', '1', 1, '2020-08-18 08:54:38', '2020-08-18 08:54:38'),
(4, 'admin3', '$2y$10$PQ63EHwZxCVTjF2Qddra4OmfbJot9oOJAZNw2XaULL3gVi3dq86.m', '1', 1, '2020-08-18 10:48:24', '2020-08-18 10:48:24'),
(5, 'admin5', '$2y$10$OWYA29wMSXecnU0BZaPr7uIXN1pNf8GmNXpobC9pY/KsX82Y.rfU.', '1', 1, '2020-08-18 18:22:17', '2020-08-18 18:22:17');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profileuser_email_unique` (`email`),
  ADD KEY `profileuser_users_id_foreign` (`users_id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usergroup_pq_id_foreign` (`pq_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_usergroup_id_foreign` (`usergroup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chudebv`
--
ALTER TABLE `chudebv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profileuser`
--
ALTER TABLE `profileuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `profileuser`
--
ALTER TABLE `profileuser`
  ADD CONSTRAINT `profileuser_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD CONSTRAINT `usergroup_pq_id_foreign` FOREIGN KEY (`pq_id`) REFERENCES `phanquyen` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_usergroup_id_foreign` FOREIGN KEY (`usergroup_id`) REFERENCES `usergroup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
