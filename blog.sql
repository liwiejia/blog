/*
Navicat MySQL Data Transfer

Source Server         : sticker
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-12 21:24:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_act
-- ----------------------------
DROP TABLE IF EXISTS `blog_act`;
CREATE TABLE `blog_act` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL COMMENT '分类id',
  `title` char(100) NOT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `date` int(11) NOT NULL COMMENT '加入时间',
  `view` int(11) NOT NULL COMMENT '访问量',
  `comment` int(11) NOT NULL COMMENT '评论数量',
  `seotitle` char(100) NOT NULL COMMENT 'SEO标题',
  `keywords` char(100) NOT NULL COMMENT '关键词',
  `description` varchar(255) NOT NULL COMMENT '文章摘要',
  `thumbnail` varchar(255) NOT NULL COMMENT '缩略图',
  `thumbs` int(255) NOT NULL DEFAULT '0' COMMENT '点赞量',
  `usersid` int(11) NOT NULL DEFAULT '1' COMMENT '发布用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1527150218 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_act
-- ----------------------------
INSERT INTO `blog_act` VALUES ('2', '2', '2222', '<p><img src=\"Uploads/image/2018/05/31/1527758719236158.png\" style=\"\" title=\"1527758719236158.png\"/></p><p><img src=\"Uploads/image/2018/05/31/1527758720106938.png\" style=\"\" title=\"1527758720106938.png\"/></p><p>&lt;img src=&quot;Uploads/image/2018/05/31/152', '1527760607', '0', '0', '色哦标题', '关键字', '摘要', '/blog/./Uploads/image/2018/05/31/5b0fc6d7a0506.png', '0', '1');
INSERT INTO `blog_act` VALUES ('3', '3', '3', '3', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('4', '4', '4', '4', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('5', '5', '5', '5', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('6', '6', '6', '6', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('7', '7', '7', '7', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('8', '8', '8', '8', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('9', '9', '9', '9', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('10', '10', '10', '10', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('11', '10', '11', '11', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('12', '1', '12', '12', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('13', '2', '13', '13', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('14', '3', '14', '14', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('15', '4', '15', '15', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('16', '5', '16', '16', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('17', '6', '17', '17', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('18', '7', '18', '18', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('19', '8', '19', '19', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('20', '8', '20', '20', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('21', '9', '你好', '21', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('22', '1', '标题', '<p>内容</p>', '1527150211', '0', '0', '标题', '关键词', '摘要', '', '0', '1');
INSERT INTO `blog_act` VALUES ('23', '1', '标题1', '<p>内容&nbsp;&nbsp;</p>', '1527754676', '0', '0', '标题', '关键词', '摘要', '', '0', '1');
INSERT INTO `blog_act` VALUES ('24', '1', '24', '24', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('25', '8', '25', '25', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('26', '9', '26', '26', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('27', '4', '27', '27', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('28', '5', '28', '28', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('29', '6', '29', '29', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('30', '7', '30', '30', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('31', '8', '31', '31', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('32', '9', '32', '34', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('33', '1', '33', '33', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('34', '2', '34', '34', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('35', '9', '35', '35', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('36', '4', '36', '36', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('37', '5', '37', '37', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('38', '6', '38', '38', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('39', '7', '39', '39', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('40', '8', '40', '40', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('41', '9', '41', '41', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('42', '1', '42', '42', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('43', '2', '43', '43', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('44', '5', '44', '44', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('45', '3', '45', '45', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('46', '4', '46', '46', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('47', '6', '47', '47', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('48', '8', '48', '48', '1527150211', '0', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('49', '7', '49', '49', '1528435544', '500', '0', '标题', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('1527150216', '0', '', '', '0', '0', '0', '', '', '', '', '0', '1');
INSERT INTO `blog_act` VALUES ('1527150217', '0', '', '', '0', '0', '0', '', '', '', '', '0', '1');

-- ----------------------------
-- Table structure for blog_admin
-- ----------------------------
DROP TABLE IF EXISTS `blog_admin`;
CREATE TABLE `blog_admin` (
  `userid` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` char(20) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '用户密码',
  `nickname` char(20) NOT NULL COMMENT '昵称',
  `head` varchar(255) NOT NULL,
  `regdate` int(10) NOT NULL COMMENT '注册时间',
  `lastdate` int(10) NOT NULL COMMENT '最后一次登录时间',
  `regip` char(15) NOT NULL COMMENT '注册ip',
  `lastip` char(15) NOT NULL COMMENT '最后一次登录ip',
  `loginnum` smallint(5) NOT NULL COMMENT '登录次数',
  `email` char(32) NOT NULL COMMENT '邮箱',
  `mobile` char(11) NOT NULL COMMENT '手机号码',
  `islock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否锁定',
  `vip` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否会员',
  `qq` varchar(20) NOT NULL COMMENT 'QQ',
  `sex` tinyint(1) NOT NULL COMMENT '0保密1男，2女',
  `birthday` int(10) NOT NULL COMMENT '生日',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_admin
-- ----------------------------
INSERT INTO `blog_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '/blog/Uploads/image/5b091d267355d.jpg', '0', '1531394598', '', '127.0.0.1', '37', '1076217644@qq.com', '18310009074', '0', '0', '1076217644', '0', '901036800');

-- ----------------------------
-- Table structure for blog_ask
-- ----------------------------
DROP TABLE IF EXISTS `blog_ask`;
CREATE TABLE `blog_ask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(150) NOT NULL COMMENT '标题',
  `tag` char(100) NOT NULL COMMENT '分类',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `userid` int(11) NOT NULL DEFAULT '1' COMMENT '发布用户id',
  `date` int(11) NOT NULL COMMENT '发布日期',
  `ip` char(15) NOT NULL COMMENT '发布ip',
  `thumbs` int(255) NOT NULL DEFAULT '0' COMMENT '点赞量',
  `comment` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_ask
-- ----------------------------

-- ----------------------------
-- Table structure for blog_atc_tag
-- ----------------------------
DROP TABLE IF EXISTS `blog_atc_tag`;
CREATE TABLE `blog_atc_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '父标签id',
  `name` char(20) NOT NULL COMMENT '分类名字',
  `iconurl` char(100) NOT NULL COMMENT '分类图标',
  `total` int(10) NOT NULL DEFAULT '0' COMMENT '文章总数量',
  `regdate` int(10) NOT NULL COMMENT '加入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_atc_tag
-- ----------------------------
INSERT INTO `blog_atc_tag` VALUES ('3', '0', '开发语言', '', '0', '1531375051');
INSERT INTO `blog_atc_tag` VALUES ('4', '0', '平台框架', '', '0', '1531394633');
INSERT INTO `blog_atc_tag` VALUES ('5', '0', '服务器', '', '0', '1531394752');
INSERT INTO `blog_atc_tag` VALUES ('6', '0', '数据库和缓存', '', '0', '1531394764');
INSERT INTO `blog_atc_tag` VALUES ('7', '0', '开发工具', '', '0', '1531394773');
INSERT INTO `blog_atc_tag` VALUES ('8', '0', '系统设备', '', '0', '1531394781');
INSERT INTO `blog_atc_tag` VALUES ('9', '0', '其它', '', '0', '1531394789');
INSERT INTO `blog_atc_tag` VALUES ('10', '3', 'javascript', '', '0', '1531394809');
INSERT INTO `blog_atc_tag` VALUES ('11', '3', 'php', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('12', '3', 'css', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('13', '3', 'html', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('14', '3', 'java', 'http://www.liweijia.site/blog/Public/Image/868271510-54cb382abb7a1_small.png', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('15', '3', 'html5', 'http://www.liweijia.site/blog/Public/Image/1025005915-54cb538538eea_small.png', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('16', '3', 'python', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('17', '3', 'node.js', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('18', '3', 'c++', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('19', '3', 'c', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('20', '3', 'objecttive-c', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('21', '3', 'golang', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('22', '3', 'shell', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('23', '3', 'swift', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('24', '3', 'c#', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('25', '3', 'typescript', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('26', '3', 'rudy', 'http://www.liweijia.site/blog/Public/Image/3367608758-54cb53ca5a132_small.png', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('27', '3', 'bash', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('28', '3', 'sass', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('29', '3', 'asp.net', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('30', '3', 'less', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('31', '3', 'lua', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('32', '3', 'scala', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('33', '3', 'coffeescript', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('34', '3', 'actionscript', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('35', '3', 'erlang', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('36', '3', 'perl', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('37', '3', 'rust', '', '0', '1531394907');
INSERT INTO `blog_atc_tag` VALUES ('38', '4', 'laravel', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('39', '4', 'spring', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('40', '4', 'django', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('41', '4', 'express', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('42', '4', 'flask', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('43', '4', 'yii', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('44', '4', 'ruby-on-rails', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('45', '4', 'tomado', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('46', '4', 'struts', '', '0', '1531395230');
INSERT INTO `blog_atc_tag` VALUES ('47', '5', 'linux', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('48', '5', 'nginx', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('49', '5', 'apache', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('50', '5', 'docker', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('51', '5', 'ubuntu', 'http://www.liweijia.site/blog/Public/Image/3351090335-569f0f26a2a86_small.png', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('52', '5', 'oentos', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('53', '5', 'tomcat', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('54', '5', '缓存', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('55', '5', '负载均衡', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('56', '5', 'unix', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('57', '5', 'hadoop', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('58', '5', 'windows-server', '', '0', '1531395480');
INSERT INTO `blog_atc_tag` VALUES ('59', '6', 'mysql', 'http://www.liweijia.site/blog/Public/Image/', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('60', '6', 'redis', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('61', '6', 'sql', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('62', '6', 'mongodb', 'http://www.liweijia.site/blog/Public/Image/', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('63', '6', 'pracle', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('64', '6', 'nosql', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('65', '6', 'memcached', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('66', '6', 'sqlserver', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('67', '6', 'sqlite', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('68', '6', 'postgresql', '', '0', '1531395644');
INSERT INTO `blog_atc_tag` VALUES ('69', '7', 'git', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('70', '7', 'github', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('71', '7', 'vim', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('72', '7', 'sublime-text', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('73', '7', 'xcode', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('74', '7', 'visual-studio-code', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('75', '7', 'intellij-idea', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('76', '7', 'eclipse', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('77', '7', 'maven', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('78', '7', 'svn', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('79', '7', 'ide', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('80', '7', 'atom', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('81', '7', 'visual-studio', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('82', '7', 'emacs', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('83', '7', 'hg', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('84', '7', 'textmate', '', '0', '1531395906');
INSERT INTO `blog_atc_tag` VALUES ('85', '8', 'android', 'http://www.liweijia.site/blog/Public/Image/', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('87', '8', 'ios', 'http://www.liweijia.site/blog/Public/Image/', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('88', '8', 'chrome', 'http://www.liweijia.site/blog/Public/Image/', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('89', '8', 'windows', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('90', '8', 'iphone', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('91', '8', 'firefox', 'http://www.liweijia.site/blog/Public/Image/', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('92', '8', 'internet-explorer', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('93', '8', 'safari', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('94', '8', 'ipad', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('95', '8', 'opera', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('96', '8', 'apple-watch', '', '0', '1531396069');
INSERT INTO `blog_atc_tag` VALUES ('97', '9', 'html5', 'http://www.liweijia.site/blog/Public/Image/1025005915-54cb538538eea_small.png', '0', '1531396165');
INSERT INTO `blog_atc_tag` VALUES ('98', '9', 'react.js', '', '0', '1531396165');
INSERT INTO `blog_atc_tag` VALUES ('99', '9', '搜索引擎', '', '0', '1531396165');
INSERT INTO `blog_atc_tag` VALUES ('100', '9', 'virtualenv', '', '0', '1531396165');
INSERT INTO `blog_atc_tag` VALUES ('101', '9', 'lucene', '', '0', '1531396165');

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL COMMENT '0正常，1单页，2外链',
  `pid` int(11) NOT NULL COMMENT '父ID',
  `name` char(50) NOT NULL COMMENT '分类名称',
  `seotitle` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL COMMENT '关键字',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL COMMENT '连接',
  `iconUrl` varchar(100) NOT NULL,
  `lastdate` int(10) NOT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('16', '0', '0', '开发语言', '', '', '', '', '', '', '0');
INSERT INTO `blog_category` VALUES ('2', '0', '0', '区块链', '区块链', '区块链', '', '', 'Bc', 'http://www.liweijia.site/blog/Public/Image/950262627-5a7048175cdc9_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('3', '0', '0', '前端', '前端', '前端', '', '', 'Frontend', 'http://www.liweijia.site/blog/Public/Image/3997397795-5a6edc1c3167f_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('4', '0', '0', '后端', '后端', '后端', '', 'yyy', 'Backend', 'http://www.liweijia.site/blog/Public/Image/1998904068-5a6edc3e40de1_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('5', '0', '0', 'Android', 'Android', 'Android', '', 'Android', 'Android', 'http://www.liweijia.site/blog/Public/Image/3466976217-5a6edc9817073_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('6', '0', '0', 'iOS', 'iOS', 'iOS', '', 'iOS', 'Ios', 'http://www.liweijia.site/blog/Public/Image/3641835720-5a6edcc072849_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('7', '0', '0', '工具', '工具', '工具', '', '工具', 'Toolkit', 'http://www.liweijia.site/blog/Public/Image/619301590-5a6ee7ff8fee2_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('8', '0', '0', '安全', '安全', '安全', '', '安全', 'Netsec', 'http://www.liweijia.site/blog/Public/Image/177555825-5a6edd409405a_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('9', '0', '0', '程序员', '程序员', '程序员', '', '程序员', 'Programmer', 'http://www.liweijia.site/blog/Public/Image/46315654-5a6edd4a8f67e_small.png', '1527150211');
INSERT INTO `blog_category` VALUES ('10', '0', '0', '行业', '行业', '行业', '', '行业', 'Industry', 'http://www.liweijia.site/blog/Public/Image/3509536808-5a6edd577ced0_small.png', '1527150211');

-- ----------------------------
-- Table structure for blog_mail_verify
-- ----------------------------
DROP TABLE IF EXISTS `blog_mail_verify`;
CREATE TABLE `blog_mail_verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verify` char(70) NOT NULL COMMENT '验证码',
  `email` char(32) NOT NULL COMMENT '邮箱',
  `date` int(2) NOT NULL,
  `ip` char(15) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '验证码类型，1注册，2找回密码',
  `IsExpiried` int(1) NOT NULL DEFAULT '1' COMMENT '是否有效，1有效，2失效',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_mail_verify
-- ----------------------------
INSERT INTO `blog_mail_verify` VALUES ('17', 'fee62ac6aafe23e5bf70e4b10d04b9ed', '1076217644@qq.com', '1530630303', '0.0.0.0', '2', '1');

-- ----------------------------
-- Table structure for blog_menu
-- ----------------------------
DROP TABLE IF EXISTS `blog_menu`;
CREATE TABLE `blog_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `title` char(50) NOT NULL,
  `lastdate` int(10) NOT NULL,
  `icon` char(50) NOT NULL,
  `islink` int(1) NOT NULL DEFAULT '0',
  `tips` char(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_menu
-- ----------------------------
INSERT INTO `blog_menu` VALUES ('1', '0', 'Index/index', '控制台', '1527494051', 'menu-icon fa fa-tachometer', '1', '这是网站设置的提示qqq。');
INSERT INTO `blog_menu` VALUES ('2', '0', '', '系统设置', '1524292325', 'menu-icon fa fa-cog', '1', '');
INSERT INTO `blog_menu` VALUES ('3', '2', 'Menu/index', '后台菜单', '1524296162', 'menu-icon fa fa-caret-right', '1', '这是后台菜单');
INSERT INTO `blog_menu` VALUES ('4', '2', 'Menu/add', '新增菜单', '1524292367', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('5', '2', 'Setting/setting', '网站设置', '1524292367', 'menu-icon fa fa-caret-right', '1', '111');
INSERT INTO `blog_menu` VALUES ('6', '0', '', '用户及组', '1524292367', 'menu-icon fa fa-users', '1', '');
INSERT INTO `blog_menu` VALUES ('7', '0', '', '网站内容', '1524292367', 'menu-icon fa fa-desktop', '1', '');
INSERT INTO `blog_menu` VALUES ('18', '0', '', '个人中心', '1524292367', 'menu-icon fa fa-user', '1', '');
INSERT INTO `blog_menu` VALUES ('9', '2', 'Menu/edit', '编辑菜单', '1524292367', '', '0', '');
INSERT INTO `blog_menu` VALUES ('10', '7', 'Article/index', '文章管理', '1524882986', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('11', '7', 'Article/add', '新增文章', '1524883033', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('12', '7', 'Article/edit', '编辑文章', '1524883073', 'menu-icon fa fa-caret-right', '0', '');
INSERT INTO `blog_menu` VALUES ('13', '7', 'Article/update', '保存文章', '1524883135', 'menu-icon fa fa-caret-right', '0', '');
INSERT INTO `blog_menu` VALUES ('14', '7', 'Article/del', '删除文章', '1524883151', '', '0', '');
INSERT INTO `blog_menu` VALUES ('15', '7', '', '技术频道', '1527159255', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('16', '15', 'Channel/add', '新增频道', '1524883259', 'menu-icon fa fa-caret-righ', '1', '');
INSERT INTO `blog_menu` VALUES ('17', '15', 'Channel/edit', '编辑', '1524883286', 'menu-icon fa fa-caret-right', '0', '');
INSERT INTO `blog_menu` VALUES ('8', '0', '', '其它功能', '1524883701', 'menu-icon fa fa-legal', '1', '');
INSERT INTO `blog_menu` VALUES ('19', '8', 'Link/index', '友情链接', '1524883738', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('20', '8', 'Link/add', '增加链接', '1524883793', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('21', '6', 'Member/index', '用户管理', '1524884107', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('22', '6', 'Member/add', '新增用户', '1524884125', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('23', '2', 'Database/backup', '数据库备份', '1527159255', 'menu-icon fa fa-caret-right', '1', 'aaa');
INSERT INTO `blog_menu` VALUES ('24', '23', 'Database/recovery', '数据库还原', '1527159255', '', '0', '');
INSERT INTO `blog_menu` VALUES ('26', '18', 'Logout/index', '退出', '1527159255', '', '1', '');
INSERT INTO `blog_menu` VALUES ('25', '18', 'Personal/index', '信息管理', '1527159255', 'menu-icon fa fa-caret-right', '1', null);
INSERT INTO `blog_menu` VALUES ('28', '7', '', '文章分类', '1527159257', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('33', '28', 'Category/add', '编辑分类', '1527159256', '', '0', null);
INSERT INTO `blog_menu` VALUES ('30', '15', 'Channel/index', '频道列表', '1524883258', 'menu-icon fa fa-caret-righ', '1', null);
INSERT INTO `blog_menu` VALUES ('31', '28', 'Category/index', '分类列表', '1527159256', '', '1', null);
INSERT INTO `blog_menu` VALUES ('32', '28', 'Category/add', '新增分类', '1527159256', '', '1', null);

-- ----------------------------
-- Table structure for blog_users
-- ----------------------------
DROP TABLE IF EXISTS `blog_users`;
CREATE TABLE `blog_users` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` char(20) NOT NULL COMMENT '用户名',
  `password` char(60) NOT NULL COMMENT '用户密码',
  `nickname` char(20) NOT NULL COMMENT '昵称',
  `head` varchar(255) NOT NULL,
  `regdate` int(10) NOT NULL COMMENT '注册时间',
  `lastdate` int(10) NOT NULL COMMENT '最后一次登录时间',
  `regip` char(15) NOT NULL COMMENT '注册ip',
  `lastip` char(15) NOT NULL COMMENT '最后一次登录ip',
  `loginnum` smallint(5) NOT NULL COMMENT '登录次数',
  `email` char(32) NOT NULL COMMENT '邮箱',
  `mobile` char(11) NOT NULL COMMENT '手机号码',
  `islock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否锁定',
  `vip` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否会员',
  `qq` varchar(20) NOT NULL COMMENT 'QQ',
  `sex` tinyint(1) NOT NULL COMMENT '0保密1男，2女',
  `birthday` int(10) NOT NULL COMMENT '生日',
  `pageurl` char(15) NOT NULL COMMENT '个人信息页面',
  `info` varchar(255) DEFAULT NULL COMMENT '个人说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_users
-- ----------------------------
INSERT INTO `blog_users` VALUES ('1', 'admin', 'a66abb5684c45962d887564f08346e8d', 'admin', '/blog/Uploads/image/5b091d267355d.jpg', '0', '1528250665', '', '192.168.1.241', '28', '1076217644@qq.com1', '18310009074', '0', '0', '1076217644', '0', '901036800', 'admin', null);
INSERT INTO `blog_users` VALUES ('25', '1076217644@qq.com', 'c2a3yqCuHAqPHSRJOyLeZWWTiXe+Z9KZVfbtkTA+LFZVYUs', 'admin', '/blog/Public/Image/user-64.png', '1530097603', '1530097603', '192.168.1.241', '192.168.1.241', '1', '1076217644@qq.com', '', '0', '0', '', '0', '0', 'admin799827', null);

-- ----------------------------
-- Table structure for blog_website
-- ----------------------------
DROP TABLE IF EXISTS `blog_website`;
CREATE TABLE `blog_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k` char(50) DEFAULT NULL,
  `v` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_website
-- ----------------------------
INSERT INTO `blog_website` VALUES ('1', 'sitename', 'Blog');
INSERT INTO `blog_website` VALUES ('2', 'logo', '/blog/Uploads/image/5b0912f9a939c.png');
INSERT INTO `blog_website` VALUES ('3', 'footer', '京ICP备18019844号');
INSERT INTO `blog_website` VALUES ('4', 'title', 'title');
INSERT INTO `blog_website` VALUES ('5', 'description', 'description');
INSERT INTO `blog_website` VALUES ('6', 'keywords', 'keywords');
