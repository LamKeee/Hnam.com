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

 Date: 12/12/2021 19:44:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for filmdienvien
-- ----------------------------
DROP TABLE IF EXISTS `filmdienvien`;
CREATE TABLE `filmdienvien`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idFilm` int NULL DEFAULT NULL,
  `idDienVien` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of filmdienvien
-- ----------------------------
INSERT INTO `filmdienvien` VALUES (1, 1, 1);
INSERT INTO `filmdienvien` VALUES (2, 1, 2);
INSERT INTO `filmdienvien` VALUES (3, 1, 3);
INSERT INTO `filmdienvien` VALUES (4, 3, 2);
INSERT INTO `filmdienvien` VALUES (5, 4, 3);
INSERT INTO `filmdienvien` VALUES (6, 3, 1);
INSERT INTO `filmdienvien` VALUES (7, 5, 1);
INSERT INTO `filmdienvien` VALUES (8, 5, 2);
INSERT INTO `filmdienvien` VALUES (9, 5, 2);

SET FOREIGN_KEY_CHECKS = 1;
