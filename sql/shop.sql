/*
Navicat MySQL Data Transfer

Source Server         : main_connect
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001


Date: 2016-06-27 22:50:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Рубашки', '1', '1');
INSERT INTO `category` VALUES ('2', 'Платья', '5', '1');
INSERT INTO `category` VALUES ('3', 'Футболки', '3', '1');
INSERT INTO `category` VALUES ('4', 'Майки', '4', '1');
INSERT INTO `category` VALUES ('5', 'Сумки', '2', '1');
INSERT INTO `category` VALUES ('6', 'Чемоданы', '6', '1');
INSERT INTO `category` VALUES ('7', 'Брюки', '7', '1');
INSERT INTO `category` VALUES ('8', 'Пиджаки', '8', '1');
INSERT INTO `category` VALUES ('9', 'Галстуки', '9', '1');
