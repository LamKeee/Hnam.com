/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : film_test

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 05/01/2022 20:00:47
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '', '$2y$10$O8JvZb7nkdX4sQkx8mRrk.DekjcA1nz/uo6XTCBDP/PuXwI3ijP4.', '2022-01-05 16:36:21');
INSERT INTO `users` VALUES (5, 'namnh1416', '$2y$10$hc7uPFe9rqmQghQHk8r/9OIoamBgoOK7NPUc.HWKstE73/BNPvAq2', '2022-01-05 16:41:13');

SET FOREIGN_KEY_CHECKS = 1;
