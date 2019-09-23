/*
 Navicat Premium Data Transfer

 Source Server         : DEMO
 Source Server Type    : MariaDB
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : Library_Manager

 Target Server Type    : MariaDB
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 23/09/2019 20:42:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for reader
-- ----------------------------
DROP TABLE IF EXISTS `reader`;
CREATE TABLE `reader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of reader
-- ----------------------------
BEGIN;
INSERT INTO `reader` VALUES (51, 'R01', 'Thor', 'thor@gmail.com', 'Asgard', 912863094, 'bgrVnPBRv.jpg');
INSERT INTO `reader` VALUES (54, 'R02', 'Loki', 'loki@gmail.com', 'Asgard', 912863099, 'DffEZSGpX.jpg');
INSERT INTO `reader` VALUES (55, 'R03', 'Odin', 'odin@gmail.com', 'Asgard', 912863099, 'AYmXVOaXI.jpeg');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
