/*
 Navicat MySQL Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : film_test

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 12/12/2021 19:44:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for film
-- ----------------------------
DROP TABLE IF EXISTS `film`;
CREATE TABLE `film`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenFilm` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `daoDien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `quocGia` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `namSanXuat` int NULL DEFAULT NULL,
  `thoiLuong` int NULL DEFAULT NULL,
  `theLoai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `avt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ctySanXuat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `moTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `luotXem` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of film
-- ----------------------------
INSERT INTO `film` VALUES (0, 'rwetg', 'sdfgsdfg', '', 1231, 123, '', '', 'movie2.jpg', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', 'movie2.jpg', 0);
INSERT INTO `film` VALUES (1, 'Twenty One ', 'Alex Pham', 'America', 2018, 90, 'Hành động', '/img/movie1.jpg', 'Olimpia', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', '/video/film.mp4', 15);
INSERT INTO `film` VALUES (2, 'Twenty Three', 'Johnny Dang ', 'England', 2015, 120, 'Hành động', '/img/movie2.jpg', 'JK', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', '/video/film.mp4', 16);
INSERT INTO `film` VALUES (3, 'Algorithm', 'Ngoc Trinh ', 'Viet Nam ', 2021, 150, 'Tâm lý ', '/img/movie3.jpg', 'Vũ Khắc Tiệp ', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', '/video/film.mp4', 27);
INSERT INTO `film` VALUES (4, 'Anoymous', 'Ngọc Ngạn ', 'Việt Nam ', 2018, 120, 'Trinh thám', '/img/movie4.jpg', 'Phương Nam', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', '/video/film.mp4', 85);
INSERT INTO `film` VALUES (5, 'Antitrust', 'Tommy Wang', 'China', 2017, 100, 'Hài ', '/img/movie5.jpg', '20Century', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', '/video/film.mp4', 100);
INSERT INTO `film` VALUES (6, 'Blackhat', 'Jame Wans', 'America ', 2019, 150, 'Hành  động ', '/img/movie6.jpg', 'Marvle Studio ', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 600);
INSERT INTO `film` VALUES (7, 'Brazil ', 'Dante Ho', 'Brazil ', 2013, 123, 'Tâm lý', '/img/movie7.jpg', 'Hãng Phim Phương Nam', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 105);
INSERT INTO `film` VALUES (9, 'Hacker\'s game ', 'Wiliiam Pham', 'America', 1985, 100, 'Chính Kịch', '/img/movie9.jpg', 'Hãng phim Phương Nam', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1985);
INSERT INTO `film` VALUES (10, 'Hidden Figures', 'Kenny Gunderman', 'America', 1985, 108, 'Hành động', '/img/movie10.jpg', 'DC Comic ', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1475);
INSERT INTO `film` VALUES (11, 'The Fifth Estate', 'Tom Cruise', 'America', 1958, 109, 'Tâm lý', '/img/movie11.jpg', 'Warner Bros', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 2358);
INSERT INTO `film` VALUES (12, 'The Girl with the Dragon Tattoo', 'Mario Gomez', 'America', 2000, 120, 'Xã Hội', '/img/movie12.jpg', 'Columbia Pictures', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1498);
INSERT INTO `film` VALUES (14, 'Giang Hồ Mõm Việt Nam ', 'Phú Lê ', 'Việt Nam', 2000, 121, 'Giang hồ ', '/img/movie14.jpg', '20th Century FOX', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 8532);
INSERT INTO `film` VALUES (15, 'Who am I ', 'Van De Boek ', 'China', 1999, 99, 'Hành động ', '/img/movie15.jpg', 'CNN', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1698);
INSERT INTO `film` VALUES (16, 'Anon ', 'David Silva', 'Korea', 2007, 97, 'Khoa học viễn tưởng', '/img/movie16.jpg', 'RCCA', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1578);
INSERT INTO `film` VALUES (17, 'Eagle Eye ', 'Tom Holland ', 'Korea', 2009, 95, 'Khoa học viễn tưởng', '/img/movie17.jpg', 'VTV 1', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1000);
INSERT INTO `film` VALUES (18, 'Firewall ', 'Aubameyang', 'China', 2011, 98, 'Kinh dị ', '/img/movie1.jpg', 'Đài truyền hình Việt Nam', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 111);
INSERT INTO `film` VALUES (19, 'Kung Fury ', 'Janny Wzhang', 'America', 2000, 95, 'Kinh dị ', '/img/movie2.jpg', 'Paramount Picturé', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1213);
INSERT INTO `film` VALUES (20, 'Sneakers', 'Nike Adidas', 'England', 1996, 94, 'Khoa học viễn tưởng', '/img/movie3.jpg', 'Lionsgate Films', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1545);
INSERT INTO `film` VALUES (21, 'The Island', 'AnhHangXom', 'Holland', 2025, 94, 'Tâm lý ', '/img/movie4.jpg', 'The Weisteint Company', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1858);
INSERT INTO `film` VALUES (22, 'The Italian Job ', 'DBRR', 'Mexico', 2020, 109, 'Giang hồ', '/img/movie4.jpg', 'Metro-GoldWyn', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1456);
INSERT INTO `film` VALUES (24, 'Mắt biếc', 'Ngọc Ngạn', 'Việt Nam', 2019, 108, 'Giang hồ', '/img/matbiec.jpg', 'Box Studio ', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 1684);
INSERT INTO `film` VALUES (25, 'The Shawshank redemption (1994)', 'Frank Darabont', 'America', 1994, 142, 'Chính kịch, hình sự', '/img/Shawshank.jpg', 'DreamsWork Pictures', 'Ngày xửa ngày xưa, câu chuyện kể về nhân vật X gặp biến cố Y , sau rất nhiều lần nỗ lực và nhờ tới sự trợ giúp của A, X đã giải cứu được công chúa', NULL, 14);

SET FOREIGN_KEY_CHECKS = 1;
