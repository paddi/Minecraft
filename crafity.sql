/*
Navicat MySQL Data Transfer

Source Server         : crafity
Source Server Version : 50615
Source Host           : localhost:3306
Source Database       : crafity

Target Server Type    : MYSQL
Target Server Version : 50615
File Encoding         : 65001

Date: 2014-01-12 03:51:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for codes
-- ----------------------------
DROP TABLE IF EXISTS `codes`;
CREATE TABLE `codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `code` int(5) NOT NULL,
  `registered` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of codes
-- ----------------------------
INSERT INTO `codes` VALUES ('1', 'nittzor', '11111', '1');
INSERT INTO `codes` VALUES ('2', 'xdarksoulsx18', '12111', '1');
INSERT INTO `codes` VALUES ('3', 'nittzor', '12211', '0');
INSERT INTO `codes` VALUES ('4', 'nittzor', '12221', '0');
