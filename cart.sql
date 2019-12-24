-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 24, 2019 lúc 12:02 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cart`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `handbook`
--

CREATE TABLE `handbook` (
  `id` int(10) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(5000) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `handbook`
--

INSERT INTO `handbook` (`id`, `title`, `image`, `short_description`, `updated_at`, `created_at`) VALUES
(1, 'Sườn xào chua ngọt', 'suon_xao_chua_ngot.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', '2019-12-23 17:00:00', '2019-12-23 17:00:00'),
(2, 'Dạ dày trộn cay', 'da_day_tron_cay.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(3, 'Sườn xào chua ngọt', 'suon_xao_chua_ngot.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(4, 'Dạ dày trộn cay', 'da_day_tron_cay.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(5, 'Sườn xào chua ngọt', 'suon_xao_chua_ngot.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(6, 'Dạ dày trộn cay', 'da_day_tron_cay.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(7, 'Sườn xào chua ngọt', 'suon_xao_chua_ngot.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(8, 'Dạ dày trộn cay', 'da_day_tron_cay.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(9, 'Sườn xào chua ngọt', 'suon_xao_chua_ngot.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00'),
(10, 'Dạ dày trộn cay', 'da_day_tron_cay.jpg', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, '2019-12-23 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list-product`
--

CREATE TABLE `list-product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `price_sale` int(10) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(5000) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list-product`
--

INSERT INTO `list-product` (`id`, `name`, `price`, `price_sale`, `image`, `type`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Xà lách Lâm Đồng', 25000, 30000, 'new_good1.jpg', 'vegetable', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', '2019-12-23 17:00:00', '2019-12-23 17:00:00'),
(2, 'Dẻ sường bò Úc', 250000, 0, 'new_good2.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(3, 'Nho đen Mỹ', 100000, 0, 'new_good3.jpg', 'fruit', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(4, 'Nho đen Mỹ', 100000, 0, 'new_good3.jpg', 'fruit', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(5, 'Ngao trắng', 75000, 0, 'new_good4.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(6, 'Xà lách Lâm Đồng', 25000, 0, 'new_good1.jpg', 'vegetable', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(7, 'Dẻ sường bò Úc', 250000, 0, 'new_good2.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(8, 'Nho đen Mỹ', 100000, 0, 'new_good3.jpg', 'fruit', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(9, 'Ngao trắng', 75000, 0, 'new_good4.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(10, 'Xà lách Lâm Đồng', 25000, 0, 'new_good1.jpg', 'vegetable', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(11, 'Dẻ sường bò Úc', 250000, 0, 'new_good2.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(12, 'Nho đen Mỹ', 100000, 0, 'new_good3.jpg', 'fruit', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(13, 'Ngao trắng', 75000, 0, 'new_good4.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(14, 'Xà lách Lâm Đồng', 25000, 0, 'new_good1.jpg', 'vegetable', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(15, 'Dẻ sường bò Úc', 250000, 0, 'new_good2.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(16, 'Nho đen Mỹ', 100000, 0, 'new_good3.jpg', 'fruit', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(17, 'Ngao trắng', 75000, 0, 'new_good4.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(18, 'Xà lách Lâm Đồng', 25000, 0, 'new_good1.jpg', 'vegetable', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL),
(19, 'Dẻ sường bò Úc', 250000, 0, 'new_good2.jpg', 'meat', 'Trong bài viết hôm nay chúng tôi sẽ hướng dẫn các bạn cách làm dạ dày trộn cay hấp dẫn.Khi mua dạ dày về bạn cần phải làm sạch dạ dày, đây là một công đoạn quan trọng quyết định đến chất lượng của món ăn này. Đầu tiên bạn phải lộn mặt trong của dạ dày ra', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `handbook`
--
ALTER TABLE `handbook`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list-product`
--
ALTER TABLE `list-product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `handbook`
--
ALTER TABLE `handbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `list-product`
--
ALTER TABLE `list-product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
