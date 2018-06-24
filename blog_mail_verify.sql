/*
Navicat MySQL Data Transfer

Source Server         : web
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-06-24 22:28:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_mail_verify
-- ----------------------------
DROP TABLE IF EXISTS `blog_mail_verify`;
CREATE TABLE `blog_mail_verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verify` char(32) NOT NULL COMMENT '验证码',
  `email` char(32) NOT NULL COMMENT '邮箱',
  `date` int(2) NOT NULL,
  `ip` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
