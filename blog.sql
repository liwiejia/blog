/*
Navicat MySQL Data Transfer

Source Server         : sticker
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-06-25 09:51:25
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
INSERT INTO `blog_admin` VALUES ('1', 'admin', 'a66abb5684c45962d887564f08346e8d', 'admin', '/blog/Uploads/image/5b091d267355d.jpg', '0', '1529408224', '', '192.168.1.241', '31', '1076217644@qq.com', '18310009074', '0', '0', '1076217644', '0', '901036800');

-- ----------------------------
-- Table structure for blog_atc_tag
-- ----------------------------
DROP TABLE IF EXISTS `blog_atc_tag`;
CREATE TABLE `blog_atc_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagid` int(16) NOT NULL COMMENT '分类id',
  `name` char(20) NOT NULL COMMENT '分类名字',
  `iconurl` char(50) NOT NULL COMMENT '分类图标',
  `pid` int(11) NOT NULL COMMENT '父标签id',
  `pname` char(20) NOT NULL COMMENT '父标签名字',
  `total` int(10) NOT NULL DEFAULT '0' COMMENT '文章总数量',
  `regdate` int(10) NOT NULL COMMENT '加入时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_atc_tag
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('1', '0', '0', '人工智能', '人工智能', '人工智能', '', '', 'Ai', 'http://www.liweijia.site/blog/Public/Image/1940304143-5a72802e507db_small.png', '1527150211');
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
  `verify` char(32) NOT NULL COMMENT '验证码',
  `email` char(32) NOT NULL COMMENT '邮箱',
  `date` int(2) NOT NULL,
  `ip` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_mail_verify
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

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
INSERT INTO `blog_menu` VALUES ('15', '7', 'Category/index', '分类管理', '1524883231', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('16', '7', 'Category/add', '新增分类', '1524883259', 'menu-icon fa fa-caret-righ', '1', '');
INSERT INTO `blog_menu` VALUES ('17', '7', 'Category/edit', '编辑分类', '1524883286', 'menu-icon fa fa-caret-right', '0', '');
INSERT INTO `blog_menu` VALUES ('8', '0', '', '其它功能', '1524883701', 'menu-icon fa fa-legal', '1', '');
INSERT INTO `blog_menu` VALUES ('19', '8', 'Link/index', '友情链接', '1524883738', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('20', '8', 'Link/add', '增加链接', '1524883793', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('21', '6', 'Member/index', '用户管理', '1524884107', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('22', '6', 'Member/add', '新增用户', '1524884125', 'menu-icon fa fa-caret-right', '1', '');
INSERT INTO `blog_menu` VALUES ('23', '2', 'Database/backup', '数据库备份', '1527159255', 'menu-icon fa fa-caret-right', '1', 'aaa');
INSERT INTO `blog_menu` VALUES ('24', '23', 'Database/recovery', '数据库还原', '1527159255', '', '0', '');
INSERT INTO `blog_menu` VALUES ('26', '18', 'Logout/index', '退出', '1527159255', '', '1', '');
INSERT INTO `blog_menu` VALUES ('25', '18', 'Personal/index', '信息管理', '1527159255', 'menu-icon fa fa-caret-right', '1', null);

-- ----------------------------
-- Table structure for blog_users
-- ----------------------------
DROP TABLE IF EXISTS `blog_users`;
CREATE TABLE `blog_users` (
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
  `pageurl` char(15) NOT NULL COMMENT '个人信息页面',
  `info` varchar(255) DEFAULT NULL COMMENT '个人说明',
  PRIMARY KEY (`userid`,`pageurl`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_users
-- ----------------------------
INSERT INTO `blog_users` VALUES ('1', 'admin', 'a66abb5684c45962d887564f08346e8d', 'admin', '/blog/Uploads/image/5b091d267355d.jpg', '0', '1528250665', '', '192.168.1.241', '28', '1076217644@qq.com', '18310009074', '0', '0', '1076217644', '0', '901036800', 'admin', null);

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