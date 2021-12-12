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

 Date: 12/12/2021 19:43:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dienvien
-- ----------------------------
DROP TABLE IF EXISTS `dienvien`;
CREATE TABLE `dienvien`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenDienVien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `namSinh` datetime NULL DEFAULT NULL,
  `quocTich` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `gioiTinh` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of dienvien
-- ----------------------------
INSERT INTO `dienvien` VALUES (1, 'Tom Hardy', '1991-10-15 22:00:41', 'America', 1);
INSERT INTO `dienvien` VALUES (2, 'Harry James', '2021-11-17 22:01:39', 'England', 1);
INSERT INTO `dienvien` VALUES (3, 'David Wang ', '2021-10-27 22:02:04', 'China', 1);
INSERT INTO `dienvien` VALUES (4, 'Tiffani Pham', '2021-12-12 22:02:42', 'Vietnam', 2);
INSERT INTO `dienvien` VALUES (5, 'Tùng Sơn', '2021-09-30 22:03:16', 'Japan', 3);
INSERT INTO `dienvien` VALUES (6, 'Chi Peo ', '2000-06-13 22:03:44', 'India', 2);

SET FOREIGN_KEY_CHECKS = 1;
