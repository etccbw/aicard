/*
Navicat MySQL Data Transfer

Source Server         : 236
Source Server Version : 50535
Source Host           : localhost:3336
Source Database       : zysales

Target Server Type    : MYSQL
Target Server Version : 50535
File Encoding         : 65001

Date: 2019-03-08 19:45:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cm_admin
-- ----------------------------
DROP TABLE IF EXISTS `cm_admin`;
CREATE TABLE `cm_admin` (
  `admin_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add_time` bigint(20) NOT NULL,
  `last_login` bigint(20) NOT NULL,
  `is_effect` tinyint(1) NOT NULL DEFAULT '0',
  `login_ip` varchar(15) NOT NULL,
  `token` varchar(64) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_admin
-- ----------------------------
INSERT INTO `cm_admin` VALUES ('1', '0', 'admin', '$2y$10$H/OZGtJlFgKhpOg/AcNOUeu69PKy2DZPsjp7XjQqmakNrthyRbZVy', '0', '0', '1', '119.123.45.47', 'ec24ecce0247a67408d1d9706493259009acac41');

-- ----------------------------
-- Table structure for cm_card
-- ----------------------------
DROP TABLE IF EXISTS `cm_card`;
CREATE TABLE `cm_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `card_style` tinyint(4) DEFAULT '1' COMMENT '名片样式',
  `username` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `company` varchar(200) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `duties` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `introduce` text,
  `image` varchar(15) DEFAULT NULL,
  `video` varchar(15) DEFAULT NULL,
  `product` varchar(15) DEFAULT NULL,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  `is_found` int(1) NOT NULL DEFAULT '0',
  `intime` int(11) DEFAULT NULL,
  `deadline` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_card
-- ----------------------------
INSERT INTO `cm_card` VALUES ('37', '39', '3', '张建', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJf0qdT5vP69ORFhNmEy5QibmLvTV8qYf366RiaWoUPXTXJkPxvtgVHqRbXHI8whyFjbOiaiaTJfFLpcA/132', '中亚集团有限公司', '1', '项目经理', '13924667758', '', '深圳市宝安区岗头路20号', '个人简介', '', '', '', '1', '1', null, '0');
INSERT INTO `cm_card` VALUES ('38', '40', '1', 'Kaite', 'https://wx.qlogo.cn/mmopen/vi_32/ZxHWicn0eGvOyPn4FMCLQNU05qibfncoeNCcArdpRnayoclXZtbK0k19iaJNx796CtV8dB5sCOFx4yzicia1E5HHzXQ/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('39', '41', '1', 'Emma', 'https://wx.qlogo.cn/mmopen/vi_32/UXHJn1yic5Nf97l4vI9nylAnk0d3k6c5BicFyswhnxU7cqx5FBvXwBNvxwqvvja1V4MVWfNbKIwNib5F9wAPzqAMA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('40', '42', '1', '杨爱民', 'https://wx.qlogo.cn/mmopen/vi_32/kuRicCbWhUmhG4gCsjAicxibEDv06fgGv5ByicCpChzuHJgiaibqMYiaPJicibZFtU7qZkvibAaVjqVJeMZiaelZRibfA4ASMQ/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('35', '37', '1', '小龙', 'https://wx.qlogo.cn/mmopen/vi_32/6ZISeXe5BzZWoRgibpVq0WibwDmJtRwd72c5kZ306fNuwsUITjKuL4L3Y5TaElnxKF82EdibVeHbHUI9ia2UU8bxiaA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('36', '38', '1', 'A         装修13972275656', 'https://wx.qlogo.cn/mmopen/vi_32/v03e7Qm87Jb5WRSyicVm15TJyQO6HT2LLiceHiceaSScRm1DpdciaeBM7uLQz9tnxGkqJLYnMg9iaic6lXhCBPK32pdg/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('32', '34', '1', '????大瓜子 ????', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83ep28W88H8okUwBXJbfpLyY46uhLcReXfRyMyUPv7cuKlACJ2LVIlAzW3wNCIWQWibz2fjFvVnljabA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('49', '51', '1', '三年。', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eqVMLKa5NXlehhYQYhaaXlObwzBFY193vm1j3PJ52E2Jp6hNIy5fqSY53bnGt3CSQATUsowJ6Qsjw/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('33', '35', '1', 'BALE·G', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJXye8tgmHBibOGaWsXyEngg0khApL8w9uiaGQZ9hUDZRoqzduN3w4L1cECtBddibr7A3hzCicnASLvFg/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('34', '36', '1', '隨遇而安，不欢而散＝宁缺勿滥', 'https://wx.qlogo.cn/mmopen/vi_32/Xhw4RmnYIPcORaoYlHFEncuElsCAXWnZIJt8asPytvPcB4qTScYIhLtXetLeibkVkFJQicqaFMmJqKhTkkKnicqEA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('31', '33', '3', '张梦', 'https://wx.qlogo.cn/mmopen/vi_32/jYiafmBf2icsdG3uib41nhb5h0WGJ04nRJh9vm2TIo3pckpIXTZyyibBiaic36n9RXnEDfEtOUhibZRsv70QV8zTGSMhA/132', '中亚集团有限公司', '1', '实习生', '18371530756', '', '深圳市宝安区岗头路20号', '', '', '', '', '1', '1', null, '0');
INSERT INTO `cm_card` VALUES ('48', '50', '1', 'LH', 'https://wx.qlogo.cn/mmopen/vi_32/Jzt7pqicAia93kabmuJ5icyCcOWJek0xPmXIUAqlOJBUtLCUhFv3umJozD62zowcZSReBQH3GSqjHtGbHGHun6bJA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('30', '32', '3', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '中亚集团有限公司', '1', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '1', '1', null, '0');
INSERT INTO `cm_card` VALUES ('28', '30', '1', '张清', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIjZLu7uoOyNHxDRAU03CFgucloORWoFelDQeTTmoQicibL1wq254T4VQeWtNZBEkEes7DEiaUcHBLRg/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('45', '47', '2', '纪昌鸿', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTI0Wjshxm16cMzD2iaeUmu041icg4Co9s1qIJ0sqV0NUKSsW8hzGBvccayorLmLOfxjiaQG88cLIeUiag/132', '中亚集团有限公司', '1', 'PHP程序员', '13632923910', '284529721@qq.com', '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('41', '43', '1', '牛牛.', 'https://wx.qlogo.cn/mmopen/vi_32/mhoXC8JSA8eLiatuwGSBCHlvAZia22ugfjS27vd4OLCkQI9wVuzJA8Sr5eN4mqIiaZFE780AJYRsvoQdy8T4wq7gA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('42', '44', '1', '柴进', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIxGdK1tRoPoVX3ZTx8cGibSAmeHqFVoxI3njTKO4LuuJicyqfx3QIJrmeAk6lEiaA9QFuJibQsJDq7Og/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('43', '45', '1', '谢美玲', 'https://wx.qlogo.cn/mmopen/vi_32/Dia7M60TQvzN5jgVk9H2A6n588LXCskeZjaCicYl8LveGO5SkVWRd7WA7jZB3MwA9kYBZPC90BicwW8wPghZu6huQ/132', '中亚集团有限公司', '1', '总监', '13760258474', null, '深圳市宝安区岗头路20号', null, null, null, null, '1', '1', null, '0');
INSERT INTO `cm_card` VALUES ('47', '49', '1', '许浩荣', 'https://wx.qlogo.cn/mmopen/vi_32/MVEtpGDxryibiaHibTiaAmSRYibAHEcmovQXX3QtfXD8kYxNGBD0icDVY7LcsWQvhYIghKDstAN4VhnDgibnMPxReWZCg/132', '中亚集团有限公司', '1', 'web', '13809879662', '123456286@qq.com', '深圳市宝安区岗头路20号', '她咯哦哦哦111', '340,341,342', '99', '', '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('50', '52', '3', '贺志航', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/55f27c2ce9784b574389c524786fb27e-tmp_ebd3caccbac5162c9a6d910f4bfc05e81202e6b64b2574f6.jpg', '中亚集团有限公司', '1', '实习生', '15971075083', '15971075083@163.com', '深圳市宝安区岗头路20号', null, '', '', '', '1', '1', null, '0');
INSERT INTO `cm_card` VALUES ('51', '53', '1', 'test', 'https://wx.qlogo.cn/mmopen/vi_32/HZ9UeezIaJkXicvuO9pdBZUgGJ9nkdUjByxiaS3yWI5n5gUgbScxYPcGMnnR0EIprlcgu5A024QS0f9Fho8aeUcA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('52', '54', '1', '吴用', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLlAWhNHHibHoUXDKybUCQAFndhicVlmXYQ71SLAt9kQVXexx4y09G4lSk2g7K8jHJpxLEDFHU3pxGw/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('53', '55', '1', '后知后觉', 'https://wx.qlogo.cn/mmopen/vi_32/EDqU1F8x2EXThMHlBbH26bsScj5dDSpLcyRhnH6u8UnmnsiaHibWqDHzp45xTSOQhzykEral49DQD8TSxHrerXKw/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('54', '56', '1', '莫忘', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eroG8b8qCia3W7oQP8sn30WCic3C2gGnDV0wLuA0xRBicufRYd1icAxhvs7WpukXqWSwU6kIoMhJvCopQ/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('55', '57', '1', 'Surrender', 'https://wx.qlogo.cn/mmopen/vi_32/dm8LIKS2OJXLHgrAgINISajYzG6sJPAjbQzNhOibOmuZFicic563O4b8jbTicorXFNNakj85ZlMkrCyxCWaDic4dMKg/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('56', '58', '1', '程博文', 'https://wx.qlogo.cn/mmopen/vi_32/EfN5mVsTXIibHPeyUWGVeicmva6ex5pTduo7FTRHptiahiacyHBezN4XK1p0X9OLunBY2rpnib9QBD3KTIRELhzqg5w/132', '中亚集团有限公司', '1', '项目经理', '13068706819', '604435477@qq.com', '深圳市宝安区岗头路20号', '6666hhh', '', '', '', '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('57', '59', '1', '莲建宇蒲小姐13168783737', 'https://wx.qlogo.cn/mmopen/vi_32/N1OSkQgfVOlXbiaM3fnaK2CxXJwHRx8fx1BvFNLHeqzWnDYG83aahAmZJ72o7CjFGLEvEkWJxyLZjs97FeWh8AQ/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('58', '60', '1', '小楠', 'https://wx.qlogo.cn/mmopen/vi_32/SCyOjjg7ic88Z3O0AzA4SvRDk1kK0EDOZWjQEmuQUvvYHLartW2atR0Eiae7IlGnNEjEDicxc4THIRG91HO9O908g/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('59', '61', '1', '杨奥杰', 'https://wx.qlogo.cn/mmopen/vi_32/EwmZ8EEMC0sHTuWjibpB37SxeicJZPOCw6sB7P2eTq7iblZ1mIibAPTfCiaKlyiahHHRsv44icUeAAjThFraYUyHSO8rA/132', '中亚电子城集团股份有限公司', '1', 'PHP开发工程师', '1306706859', 'yaj@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('60', '62', '1', '戴勇军', 'https://wx.qlogo.cn/mmopen/vi_32/ibp6PtS75aENCiaG1QueQn0HEoCkz2dGM6M9lNicofbibnxiatdlUCQAP9nz0qSQBSZPyHkIpLTkBXzgnLIVpOqgatw/132', '中亚电子城集团股份有限公司', '1', '总监', '13410895468', '13410895468@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('61', '63', '1', '张金星', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKyZmfA7eWBVG11Vomib9SxOyVL47DC9JKwDHnibWdoQicWE8I6JRGAwMSuAE7XZow2J45enIXLoaHgg/132', '中亚电子城集团股份有限公司', '1', '总监', '15817431358', '', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('62', '64', '1', '夏春晖', 'https://wx.qlogo.cn/mmopen/vi_32/nCLXdjpDP7oaAy5ibfxX9bAcar9CoWKJTTXYiaa0XILdIIHqicib0JcEqy8Y0kscBBIVUT1o5OJAaWKCSkdOZTibxkA/132', '中亚电子城集团股份有限公司', '1', '主管', '13670191890', '15040022@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null, '0');
INSERT INTO `cm_card` VALUES ('63', '65', '1', '萧亚', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTK32EqYFKRvwL0JAg3Y3Dqa2PMGGE3d6o6xgs83kkM9qoDMNgqeB8ulTJyZoWqWSqaibIxaFhs8BGA/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('64', '66', '2', '七月', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJKlLhxOoKicPm9rX5P1cDHzL4pRukOLszHQfrbkpcxKQI8xKMdbc7Ced5aHsibOS3mFbCLPQmpovXQ/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('65', '67', '1', '炎热的夏天', 'https://wx.qlogo.cn/mmopen/vi_32/DEIe0hJiby3ic52ABGxHAH6NZrjC3U0BbgxeeibrplGh31KIOIe5ur1Pp86zf1rUALQjL4rwlWSvIORH3BIDsLcEg/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('66', '68', '1', 'etclij', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eremdfYmic4Mp4uc6pk2Rrrx7BUAibuvHHkYDQrAfopMTgxw6BPdF0sjZxsJ85DRictHDQVx9JGESEXg/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');
INSERT INTO `cm_card` VALUES ('67', '69', '1', '小叶子', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIej063rpdVze91riauge6oRQKwZWb8ZtYialPVBs7ggdwX9G1S0JCCKduCWCpV5Q9s9c9ngVRVy5AQ/132', null, null, null, null, null, null, null, null, null, null, '0', '0', null, '0');

-- ----------------------------
-- Table structure for cm_card_style
-- ----------------------------
DROP TABLE IF EXISTS `cm_card_style`;
CREATE TABLE `cm_card_style` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_style` tinyint(4) DEFAULT NULL,
  `company_id` tinyint(4) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_card_style
-- ----------------------------
INSERT INTO `cm_card_style` VALUES ('1', '2', '1', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/aeb3393bd592905947e482b21bdb0cbc-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.wyQmwjUiznaaf9bfe7e60baf4bf2dcd9063a16633a19.png');
INSERT INTO `cm_card_style` VALUES ('2', '3', '1', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/1e8f57e67d1e490e596b1c30f81d4d48-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.BFWic7ofHSgz22db161b5b976e5d9ac0c7ce281b6a90.png');
INSERT INTO `cm_card_style` VALUES ('3', '1', '1', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/2dae9778c72938b5680ca67bbbc5908e-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.IWopD2lbZRNt70e521576d137c076d8f2aba537f5310.png');

-- ----------------------------
-- Table structure for cm_carousel
-- ----------------------------
DROP TABLE IF EXISTS `cm_carousel`;
CREATE TABLE `cm_carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `picstr` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_carousel
-- ----------------------------
INSERT INTO `cm_carousel` VALUES ('18', '0-1533891550519', '', null);
INSERT INTO `cm_carousel` VALUES ('19', '0-1534753849003', 'upload/5b7cc45096266.jpeg', null);
INSERT INTO `cm_carousel` VALUES ('20', '0-1539847428304', 'upload/5bc835e63dc9c.jpeg,upload/5bc835e63e2b1.jpeg,upload/5bc835e641567.jpeg', null);
INSERT INTO `cm_carousel` VALUES ('21', '0-1540870042057', 'upload/5bd7cf27cbfc2.jpeg', null);
INSERT INTO `cm_carousel` VALUES ('22', '0-1540890120884', 'upload/5bd81d9a216b6.jpeg,upload/5bd81d9a21bc6.jpeg,upload/5bd81d9a245cd.jpeg', null);
INSERT INTO `cm_carousel` VALUES ('23', '0-1540890237494', 'upload/5bd81e7ebd4c5.jpeg', null);

-- ----------------------------
-- Table structure for cm_company
-- ----------------------------
DROP TABLE IF EXISTS `cm_company`;
CREATE TABLE `cm_company` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL COMMENT '公司名称',
  `address` varchar(100) NOT NULL,
  `company_login` varchar(255) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_company
-- ----------------------------
INSERT INTO `cm_company` VALUES ('1', '中亚电子城集团股份有限公司', '深圳市宝安沙井中亚硅谷海岸营销中心', '/upload/20180927/1538016279.png', 'http://www.chinaasiaetc.com/');

-- ----------------------------
-- Table structure for cm_companyaddress
-- ----------------------------
DROP TABLE IF EXISTS `cm_companyaddress`;
CREATE TABLE `cm_companyaddress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companyaddress
-- ----------------------------
INSERT INTO `cm_companyaddress` VALUES ('11', '8-1533351826317', '深圳市沙井中亚硅谷海岸营销中心', '公司地址');
INSERT INTO `cm_companyaddress` VALUES ('12', '8-1533891512017', '请填写公司阿斯蒂芬地址', '公司地址阿斯蒂芬');
INSERT INTO `cm_companyaddress` VALUES ('13', '8-1533893493699', '深圳市宝安区沙井岗头路20号', '公司地址');
INSERT INTO `cm_companyaddress` VALUES ('14', '8-1540797428100', '中亚电子博览中心', '公司地址');

-- ----------------------------
-- Table structure for cm_companyinfo
-- ----------------------------
DROP TABLE IF EXISTS `cm_companyinfo`;
CREATE TABLE `cm_companyinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companyinfo
-- ----------------------------
INSERT INTO `cm_companyinfo` VALUES ('57', '1-1533351559279', '企业简介', '    中亚置业集团有限公司，经国家工商行政管理总局审核批准，企业登记称谓为【中亚集团】，注册资本人民币10000万元。中亚企业主导产业战略性开发，着眼跨区域、跨行业 \"一体化\"合作，目前，集团旗下有中亚控股集团、中亚股份、中亚实业、惠鹏实业、中亚地产、中亚物业、');
INSERT INTO `cm_companyinfo` VALUES ('58', '1-1533891407039', '企业简介asdf阿斯顿发斯蒂芬', '请填写公司简阿斯顿发斯蒂芬介...');
INSERT INTO `cm_companyinfo` VALUES ('59', '1-1533891784018', '中亚电子城集团股份有限公司', '深圳市壆岗中亚电子城集团股份有限公司简称中亚电子城集团，是由中亚置业集团与壆岗股份合作公司共同出资建立。旗下拥有深圳市壆岗中亚电子博览中心股份有限公司等5家子公司，总注册资本5000万元人民币。中亚电子城集团主导产业战略性开发，着眼跨区域、跨行业 “一体化”合作，以打造120万平米国际性电子产业展贸平台为集团核心业务。\n');
INSERT INTO `cm_companyinfo` VALUES ('60', '1-1534333096535', '深圳市壆岗中亚电子城集', '深圳市壆岗中亚电子城集团股份有限公司简称中亚电子城集团，是由中亚置业集团与壆岗股份合作公司共同出资建立。旗下拥有深圳市壆岗中亚电子博览中心股份有限公司等5家子公司，总注册资本5000万元人民币。中亚电子城集团主导产业战略性开发，着眼跨区域、跨行业 “一体化”合作，以打造120万平米国际性电子产业展贸平台为集团核心业务。\n集团经营范围包括高科技新兴产业、高端电子物流业、电子商务、文化旅游、电子产品技术研发、休闲配套、物业管理、货物及技术进出口等多个领域。自创建以来，中亚人发扬“求真务实、追求卓越”的创新精神');
INSERT INTO `cm_companyinfo` VALUES ('61', '1-1534333812064', '深圳市壆岗中亚电子城集团股份', '深圳市壆岗中亚电子城集团股份有限公司简称中亚电子城集团，是由中亚置业集团与壆岗股份合作公司共同出资建立。旗下拥有深圳市壆岗中亚电子博览中心股份有限公司等5家子公司，总注册资本5000万元人民币。中亚电子城集团主导产业战略性开发，着眼跨区域、跨行业 “一体化”合作，以打造120万平米国际性电子产业展贸平台为集团核心业务。\n集团经营范围包括高科技新兴产业、高端电子物流业、电子商务、文化旅游、电子产品技术研发、休闲配套、物业管理、货物及技术进出口等多个领域。自创建以来，中亚人发扬“求真务实、追求卓越”的创新精神');
INSERT INTO `cm_companyinfo` VALUES ('62', '1-1534333876694', '深圳市壆岗中亚电子城集团股份有', '深圳市壆岗中亚电子城集团股份有限公司简称中亚电子城集团，是由中亚置业集团与壆岗股份合作公司共同出资建立。旗下拥有深圳市壆岗中亚电子博览中心股份有限公司等5家子公司，总注册资本5000万元人民币。中亚电子城集团主导产业战略性开发，着眼跨区域、跨行业 “一体化”合作，以打造120万平米国际性电子产业展贸平台为集团核心业务。\n集团经营范围包括高科技新兴产业、高端电子物流业、电子商务、文化旅游、电子产品技术研发、休闲配套、物业管理、货物及技术进出口等多个领域。自创建以来，中亚人发扬“求真务实、追求卓越”的创新精神');

-- ----------------------------
-- Table structure for cm_companyintv
-- ----------------------------
DROP TABLE IF EXISTS `cm_companyintv`;
CREATE TABLE `cm_companyintv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `divid` varchar(255) DEFAULT NULL,
  `intvid` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companyintv
-- ----------------------------

-- ----------------------------
-- Table structure for cm_companyintvinfo
-- ----------------------------
DROP TABLE IF EXISTS `cm_companyintvinfo`;
CREATE TABLE `cm_companyintvinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addtime` datetime DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `connecter` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `endtime` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `del` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companyintvinfo
-- ----------------------------
INSERT INTO `cm_companyintvinfo` VALUES ('15', '2018-08-15 22:19:51', '大', '在', '应届毕业生', '大专', '在', '在', '2018-8-16', '', null);
INSERT INTO `cm_companyintvinfo` VALUES ('16', '2018-08-15 22:20:22', '在', '在', '3年及以下', '大专', '在', '在', '2018-8-17', '', null);

-- ----------------------------
-- Table structure for cm_companylink
-- ----------------------------
DROP TABLE IF EXISTS `cm_companylink`;
CREATE TABLE `cm_companylink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `person` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `divid` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companylink
-- ----------------------------
INSERT INTO `cm_companylink` VALUES ('21', '联系我们', '刘远辉 （先生）', null, '7-1533892625143', 'upload/5b889be66a5fd.png', '18938693866', '123@163.com', '推广部');
INSERT INTO `cm_companylink` VALUES ('22', '联系我们', '', null, '7-1535527661694', null, '', '', '');

-- ----------------------------
-- Table structure for cm_companymage
-- ----------------------------
DROP TABLE IF EXISTS `cm_companymage`;
CREATE TABLE `cm_companymage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `mageid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companymage
-- ----------------------------
INSERT INTO `cm_companymage` VALUES ('16', '4-1533352825004', '管理团队', '2018-08-04 05:21:12', '13');

-- ----------------------------
-- Table structure for cm_companymageinfo
-- ----------------------------
DROP TABLE IF EXISTS `cm_companymageinfo`;
CREATE TABLE `cm_companymageinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `del` varchar(255) DEFAULT NULL COMMENT '1为删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companymageinfo
-- ----------------------------
INSERT INTO `cm_companymageinfo` VALUES ('13', 'upload/5b651ba4c7516.png', '姓名', '职位', '简介', '2018-08-04 05:21:08', '1');
INSERT INTO `cm_companymageinfo` VALUES ('14', null, '姓名磊', '职位大', '简介大', '2018-08-15 22:19:15', null);
INSERT INTO `cm_companymageinfo` VALUES ('15', null, '姓名大', '职位大', '简介在', '2018-08-15 22:19:25', null);
INSERT INTO `cm_companymageinfo` VALUES ('16', 'upload/5bc805e98ead4.png', '测试', '测试工程师', '测试添加团队', '2018-10-18 12:02:49', null);

-- ----------------------------
-- Table structure for cm_companynews
-- ----------------------------
DROP TABLE IF EXISTS `cm_companynews`;
CREATE TABLE `cm_companynews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `newid` varchar(11) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companynews
-- ----------------------------

-- ----------------------------
-- Table structure for cm_companynewsinfo
-- ----------------------------
DROP TABLE IF EXISTS `cm_companynewsinfo`;
CREATE TABLE `cm_companynewsinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '0为不显示，1为显示',
  `info` varchar(255) DEFAULT NULL,
  `del` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companynewsinfo
-- ----------------------------
INSERT INTO `cm_companynewsinfo` VALUES ('61', '标题', null, '2018-08-10 16:58:21', null, '阿斯顿发斯蒂芬', null);
INSERT INTO `cm_companynewsinfo` VALUES ('62', '测试测试测试测试测试', null, '2018-08-10 17:03:41', null, '测试测试测试测试测试测试测试测试测试测试测试', null);
INSERT INTO `cm_companynewsinfo` VALUES ('63', '测试测试测试测试测试', null, '2018-08-10 17:03:51', null, '测试测试测试测试测试测试测试测试测试测试测试', null);
INSERT INTO `cm_companynewsinfo` VALUES ('64', '测试测试测试测试测试', null, '2018-08-10 17:05:53', null, '测试测试测试测试测试测试测试测试测试测试测试', null);
INSERT INTO `cm_companynewsinfo` VALUES ('65', '测试', 'upload/5bc80593da360.png', '2018-10-18 12:01:23', null, '测试', null);
INSERT INTO `cm_companynewsinfo` VALUES ('66', '标题', 'upload/5bd6db1682f7b.png', '2018-10-29 18:04:06', null, '采光好', null);

-- ----------------------------
-- Table structure for cm_companyteam
-- ----------------------------
DROP TABLE IF EXISTS `cm_companyteam`;
CREATE TABLE `cm_companyteam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companyteam
-- ----------------------------
INSERT INTO `cm_companyteam` VALUES ('33', '5-1533892591660', '合作伙伴');
INSERT INTO `cm_companyteam` VALUES ('34', '5-1533892626885', '合作伙伴');
INSERT INTO `cm_companyteam` VALUES ('35', '5-1539835366590', '测试');

-- ----------------------------
-- Table structure for cm_companyteaminfo
-- ----------------------------
DROP TABLE IF EXISTS `cm_companyteaminfo`;
CREATE TABLE `cm_companyteaminfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `del` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_companyteaminfo
-- ----------------------------
INSERT INTO `cm_companyteaminfo` VALUES ('62', '5-1533892591660', null, null);
INSERT INTO `cm_companyteaminfo` VALUES ('64', '5-1533892626885', null, null);
INSERT INTO `cm_companyteaminfo` VALUES ('65', '5-1539835366590', 'upload/5bc8222d53546.jpeg', null);

-- ----------------------------
-- Table structure for cm_company_member
-- ----------------------------
DROP TABLE IF EXISTS `cm_company_member`;
CREATE TABLE `cm_company_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `wc_userid` varchar(50) NOT NULL COMMENT '企业用户id',
  `username` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `company_id` tinyint(4) NOT NULL,
  `company_group` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `is_del` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_company_member
-- ----------------------------
INSERT INTO `cm_company_member` VALUES ('32', '47', '', '纪昌鸿', '13632923910', '284529721@qq.com', '1', '21', 'PHP程序员', '0');
INSERT INTO `cm_company_member` VALUES ('33', '32', '', '杨青敏', '13266685160', null, '1', '22', '软件测试工程师', '0');
INSERT INTO `cm_company_member` VALUES ('34', '0', '', '张梦', '18070465', null, '1', '22', '实习生', '1');
INSERT INTO `cm_company_member` VALUES ('35', '33', '', '张梦', '18371530756', null, '1', '22', '实习生', '0');
INSERT INTO `cm_company_member` VALUES ('36', '0', '', '罗鹏', '17612158373', null, '1', '22', '软件测试工程师', '0');
INSERT INTO `cm_company_member` VALUES ('38', '39', '', '张建', '13924667758', null, '1', '21', '项目经理', '0');
INSERT INTO `cm_company_member` VALUES ('39', '45', '', '谢美玲', '13760258474', 'zyetc0322@163.com', '1', '35', '总监', '0');
INSERT INTO `cm_company_member` VALUES ('40', '49', 'xuronghao13809879662', '许浩荣', '13809879662', '123456286@qq.com', '1', '21', 'web', '0');
INSERT INTO `cm_company_member` VALUES ('41', '58', '', '程博文', '13068706819', '604435477@qq.com', '1', '6', '项目经理', '1');
INSERT INTO `cm_company_member` VALUES ('42', '52', '', '贺志航', '15971075083', '15971075083@163.com', '1', '22', '实习生', '0');
INSERT INTO `cm_company_member` VALUES ('43', '0', '', '成佳龙', '17607649615', '18070469@casvip.com', '1', '22', '软件测试工程师', '0');
INSERT INTO `cm_company_member` VALUES ('44', '61', '', '杨奥杰', '1306706859', 'yaj@casvip.com', '1', '6', 'PHP开发工程师', '0');
INSERT INTO `cm_company_member` VALUES ('45', '63', '', '张金星', '15817431358', '', '1', '28', '总监', '0');
INSERT INTO `cm_company_member` VALUES ('46', '0', '', '王东', '18126521256', '12050003@casvip.com', '1', '28', '经理', '0');
INSERT INTO `cm_company_member` VALUES ('47', '0', '', '袁晓东', '17665265444', '16060077@casvip.com', '1', '28', '主管', '0');
INSERT INTO `cm_company_member` VALUES ('48', '0', '', '曾令周', '18038106539', '17060279@casvip.com', '1', '28', '法务主管', '0');
INSERT INTO `cm_company_member` VALUES ('49', '0', '', '陈功亮', '18938959888', '16050024@casvip.com', '1', '28', '经理', '0');
INSERT INTO `cm_company_member` VALUES ('50', '0', '', '丁学兵', '13631667217', '10050231@casvip.com', '1', '28', '总裁办主任', '0');
INSERT INTO `cm_company_member` VALUES ('51', '0', '', '龚科洲', '13554939905', '17100348@casvip.com', '1', '28', '市场总监', '0');
INSERT INTO `cm_company_member` VALUES ('52', '0', '', '郝师许', '18938693960', '17050267@casvip.com', '1', '28', '人力总监', '0');
INSERT INTO `cm_company_member` VALUES ('53', '0', '', '黄贵英', '18898655494', '17060281@casvip.com', '1', '28', '人事主管', '0');
INSERT INTO `cm_company_member` VALUES ('54', '0', '', '焦晓川', '18520848097', '13030056@casvip.com', '1', '28', '策划经理', '0');
INSERT INTO `cm_company_member` VALUES ('55', '0', '', '李军', '18923890733', '14070063@casvip.com', '1', '28', '经理', '0');
INSERT INTO `cm_company_member` VALUES ('56', '0', '', '刘贵芬', '15219487409', '11080123@casvip.com', '1', '28', '人事经理', '0');
INSERT INTO `cm_company_member` VALUES ('57', '0', '', '刘远辉', '18938693866', '11060129@casvip.com', '1', '28', '总监', '0');
INSERT INTO `cm_company_member` VALUES ('58', '0', '', '刘忠正', '18589013611', '11120013@casvip.com', '1', '28', '收银经理', '0');
INSERT INTO `cm_company_member` VALUES ('59', '0', '', '潘磊', '13160656119', '14060015@casvip.com', '1', '28', '后勤主管', '0');
INSERT INTO `cm_company_member` VALUES ('60', '0', '', '孙秀丽', '13528787450', '18080482@casvip.com', '1', '28', '企划主管', '0');
INSERT INTO `cm_company_member` VALUES ('61', '64', '', '夏春晖', '13670191890', '15040022@casvip.com', '1', '28', '主管', '0');
INSERT INTO `cm_company_member` VALUES ('62', '0', '', '熊志恒', '13640981120', '11110088@casvip.com', '1', '28', '采购副经理', '0');
INSERT INTO `cm_company_member` VALUES ('63', '0', '', '赵欢', '13728957063', '11060023@casvip.com', '1', '28', '经理', '0');
INSERT INTO `cm_company_member` VALUES ('64', '0', '', '陈德金', '13959703029', '14020122@casvip.com', '1', '28', '市场管理员', '0');
INSERT INTO `cm_company_member` VALUES ('65', '0', '', '胡起银', '13828856081', '14110121@casvip.com', '1', '28', '市场经理', '0');
INSERT INTO `cm_company_member` VALUES ('66', '0', '', '黄志', '13922889699', '16030145@casvip.com', '1', '28', '副总监', '0');
INSERT INTO `cm_company_member` VALUES ('67', '0', '', '潘长茂', '18938693815', '12090227@casvip.com', '1', '28', '安防工程师', '0');
INSERT INTO `cm_company_member` VALUES ('68', '0', '', '夏萍', '13714973696', '11030131@casvip.com', '1', '28', '副总裁', '0');
INSERT INTO `cm_company_member` VALUES ('69', '62', '', '戴勇军', '13410895468', '13410895468@casvip.com', '1', '28', '总监', '0');
INSERT INTO `cm_company_member` VALUES ('70', '0', '', '王红燕', '13410913292', '18010382@casvip.com', '1', '22', '软件测试工程师', '0');
INSERT INTO `cm_company_member` VALUES ('71', '0', '', '张三', '19607649615', '173047155@qq.com', '1', '39', '软件测试工程师', '0');
INSERT INTO `cm_company_member` VALUES ('72', '0', '', '121', '51', '151', '1', '39', '1515', '0');

-- ----------------------------
-- Table structure for cm_data_type
-- ----------------------------
DROP TABLE IF EXISTS `cm_data_type`;
CREATE TABLE `cm_data_type` (
  `id` int(11) NOT NULL,
  `num_dt` int(2) DEFAULT NULL,
  `eng_dt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_data_type
-- ----------------------------
INSERT INTO `cm_data_type` VALUES ('1', '1', 'companyinfo');
INSERT INTO `cm_data_type` VALUES ('2', '27', 'textblock');
INSERT INTO `cm_data_type` VALUES ('3', '9', 'titlebar');
INSERT INTO `cm_data_type` VALUES ('4', '15', 'phone');
INSERT INTO `cm_data_type` VALUES ('5', '25', 'companynews');
INSERT INTO `cm_data_type` VALUES ('6', '16', 'white');
INSERT INTO `cm_data_type` VALUES ('7', '26', 'sketch');
INSERT INTO `cm_data_type` VALUES ('8', '7', 'companylink');
INSERT INTO `cm_data_type` VALUES ('9', '8', 'companyaddress');
INSERT INTO `cm_data_type` VALUES ('10', '13', 'video');
INSERT INTO `cm_data_type` VALUES ('11', '5', 'companyteam');
INSERT INTO `cm_data_type` VALUES ('12', '6', 'companyintv');
INSERT INTO `cm_data_type` VALUES ('13', '4', 'companymage');
INSERT INTO `cm_data_type` VALUES ('14', '0', 'carousel');
INSERT INTO `cm_data_type` VALUES ('15', '10', 'images');

-- ----------------------------
-- Table structure for cm_images
-- ----------------------------
DROP TABLE IF EXISTS `cm_images`;
CREATE TABLE `cm_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_images
-- ----------------------------
INSERT INTO `cm_images` VALUES ('23', '10-1539847297131', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('24', '10-1539847365796', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('25', '10-1539847586031', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('26', '10-1539848084825', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('27', '10-1539917540812', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('28', '10-1539917587880', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('29', '10-1540793130034', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('30', '10-1540794076540', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('31', '10-1540794678467', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('32', '10-1540795164356', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('33', '10-1540799137416', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('34', '10-1540807172694', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('35', '10-1540867972385', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('36', '10-1540868176398', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('37', '10-1540869985602', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('38', '10-1540870350224', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('39', '10-1540881155491', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('40', '10-1540882549929', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('41', '10-1540882714847', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('42', '10-1540882887934', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('43', '10-1540884688530', null, 'uploads/5bd80858354e3.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('44', '10-1540884761593', null, 'uploads/5bd808a1d6e55.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('45', '10-1540885026471', null, 'uploads/5bd809abbd3a7.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('46', '10-1540885276622', null, 'uploads/5bd80aa59b7e7.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('47', '10-1540885348894', null, 'uploads/5bd80aec93313.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('48', '10-1540885425085', null, 'uploads/5bd80b3949636.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('49', '10-1540885566564', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('50', '10-1540885701947', null, 'uploads/5bd80c4caba8b.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('51', '10-1540886158062', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('52', '10-1540886283223', null, '', '', '', '');
INSERT INTO `cm_images` VALUES ('53', '10-1540888471082', null, 'uploads/5bd8171d9ba05.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('54', '10-1540890252894', null, 'uploads/5bd81e933fc59.jpg', '', '', '');
INSERT INTO `cm_images` VALUES ('55', '10-1541040173458', null, 'uploads/5bda68821041d.png', '', '', '');

-- ----------------------------
-- Table structure for cm_invitation
-- ----------------------------
DROP TABLE IF EXISTS `cm_invitation`;
CREATE TABLE `cm_invitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '发起人',
  `username` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `company` varchar(150) NOT NULL,
  `duties` varchar(50) NOT NULL,
  `departure_time` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `creation_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_invitation
-- ----------------------------
INSERT INTO `cm_invitation` VALUES ('1', '1', '赵柳', '13632365874', '中铁集团', '总经理', '2018年9月10日', '测试测试测试测试', '2018');
INSERT INTO `cm_invitation` VALUES ('2', '1', '张三', '13632365874', '中铁集团', '总监', '2018年9月10日', '测试测试测试测试', '2018');
INSERT INTO `cm_invitation` VALUES ('3', '1', '李四', '13632365874', '中铁集团', '总经理', '2018年9月10日', '测试测试测试测试', '2018');
INSERT INTO `cm_invitation` VALUES ('6', '1', '王五', '13632365874', '中铁集团', '总裁助理', '2018年9月10日', '测试测试测试测试', '2018');
INSERT INTO `cm_invitation` VALUES ('7', '1', '张三', '13632365874', '中铁集团', '总监', '2018年9月10日', '测试测试测试测试', '2018');
INSERT INTO `cm_invitation` VALUES ('8', '1', '王五', '13632365874', '中铁集团', '总裁助理', '2018年9月10日', '测试测试测试测试', '2018');
INSERT INTO `cm_invitation` VALUES ('9', '1', '我的', '下次去', '不能够', '在下我还是', '不过这个', '下次来看哈电视\n', '2018');
INSERT INTO `cm_invitation` VALUES ('10', '1', '我的', '下次去', '不能够', '在下我还是', '不过这个', '下次来看哈电视\n', '2018');
INSERT INTO `cm_invitation` VALUES ('11', '1', '我的', '下次去', '不能够', '在下我还是', '不过这个', '下次来看哈电视\n', '2018');
INSERT INTO `cm_invitation` VALUES ('12', '1', 'asdfasdf', 'asdfasdf', 'asdfsadf', 'asdfasdf', 'sadfasdf', 'asdfasdfsdaf', '2018');

-- ----------------------------
-- Table structure for cm_log
-- ----------------------------
DROP TABLE IF EXISTS `cm_log`;
CREATE TABLE `cm_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `opentime` int(11) DEFAULT NULL,
  `target` varchar(11) DEFAULT NULL COMMENT '目标ID',
  `target_uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8750 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_log
-- ----------------------------
INSERT INTO `cm_log` VALUES ('8590', '39', '19', '1535683947', '39', '39');
INSERT INTO `cm_log` VALUES ('8591', '31', '7', '1535683947', '30', '32');
INSERT INTO `cm_log` VALUES ('8592', '31', '7', '1535683947', '29', '31');
INSERT INTO `cm_log` VALUES ('8593', '31', '7', '1535683947', '30', '32');
INSERT INTO `cm_log` VALUES ('8594', '31', '3', '1535683947', '30', '32');
INSERT INTO `cm_log` VALUES ('8595', '31', '7', '1535683947', '29', '31');
INSERT INTO `cm_log` VALUES ('8596', '31', '7', '1535683947', '30', '32');
INSERT INTO `cm_log` VALUES ('8597', '31', '11', '1535683947', '333', '31');
INSERT INTO `cm_log` VALUES ('8598', '31', '11', '1535683947', '334', '31');
INSERT INTO `cm_log` VALUES ('8599', '31', '15', '1535683947', '98', '31');
INSERT INTO `cm_log` VALUES ('8600', '31', '19', '1535683947', '31', '31');
INSERT INTO `cm_log` VALUES ('8601', '31', '10', '1535683947', '31', '31');
INSERT INTO `cm_log` VALUES ('8602', '31', '7', '1535683947', '29', '31');
INSERT INTO `cm_log` VALUES ('8603', '31', '7', '1535684361', '30', '32');
INSERT INTO `cm_log` VALUES ('8604', '31', '8', '1535684654', '184', '31');
INSERT INTO `cm_log` VALUES ('8605', '31', '7', '1535685028', '29', '31');
INSERT INTO `cm_log` VALUES ('8606', '31', '7', '1535685199', '29', '31');
INSERT INTO `cm_log` VALUES ('8607', '31', '8', '1535685275', '184', '31');
INSERT INTO `cm_log` VALUES ('8608', '31', '7', '1535686185', '29', '31');
INSERT INTO `cm_log` VALUES ('8609', '31', '3', '1535686190', '29', '31');
INSERT INTO `cm_log` VALUES ('8610', '32', '7', '1535686291', '29', '31');
INSERT INTO `cm_log` VALUES ('8611', '32', '7', '1535686357', '29', '31');
INSERT INTO `cm_log` VALUES ('8612', '32', '3', '1535686364', '29', '31');
INSERT INTO `cm_log` VALUES ('8613', '32', '7', '1535686488', '29', '31');
INSERT INTO `cm_log` VALUES ('8614', '32', '7', '1535686518', '29', '31');
INSERT INTO `cm_log` VALUES ('8615', '31', '7', '1535695615', '29', '31');
INSERT INTO `cm_log` VALUES ('8616', '31', '7', '1535696181', '30', '32');
INSERT INTO `cm_log` VALUES ('8617', '31', '7', '1535696192', '30', '32');
INSERT INTO `cm_log` VALUES ('8618', '31', '10', '1535697730', '31', '31');
INSERT INTO `cm_log` VALUES ('8619', '31', '7', '1535697798', '30', '32');
INSERT INTO `cm_log` VALUES ('8620', '31', '7', '1535697809', '30', '32');
INSERT INTO `cm_log` VALUES ('8621', '31', '7', '1535699036', '30', '32');
INSERT INTO `cm_log` VALUES ('8622', '31', '7', '1535699051', '29', '31');
INSERT INTO `cm_log` VALUES ('8623', '31', '7', '1535699404', '30', '32');
INSERT INTO `cm_log` VALUES ('8624', '31', '7', '1535699472', '30', '32');
INSERT INTO `cm_log` VALUES ('8625', '31', '7', '1535699556', '30', '32');
INSERT INTO `cm_log` VALUES ('8626', '31', '7', '1535699708', '30', '32');
INSERT INTO `cm_log` VALUES ('8627', '31', '7', '1535699806', '30', '32');
INSERT INTO `cm_log` VALUES ('8628', '31', '7', '1535699894', '30', '32');
INSERT INTO `cm_log` VALUES ('8629', '31', '7', '1535700079', '30', '32');
INSERT INTO `cm_log` VALUES ('8630', '31', '7', '1535700134', '29', '31');
INSERT INTO `cm_log` VALUES ('8631', '31', '7', '1535700203', '29', '31');
INSERT INTO `cm_log` VALUES ('8632', '31', '7', '1535700228', '30', '32');
INSERT INTO `cm_log` VALUES ('8633', '31', '7', '1535700239', '30', '32');
INSERT INTO `cm_log` VALUES ('8634', '31', '7', '1535702678', '30', '32');
INSERT INTO `cm_log` VALUES ('8635', '31', '3', '1535702682', '30', '32');
INSERT INTO `cm_log` VALUES ('8636', '31', '7', '1535703731', '29', '31');
INSERT INTO `cm_log` VALUES ('8637', '31', '3', '1535703740', '29', '31');
INSERT INTO `cm_log` VALUES ('8638', '31', '7', '1535785017', '29', '31');
INSERT INTO `cm_log` VALUES ('8639', '31', '7', '1535938022', '30', '32');
INSERT INTO `cm_log` VALUES ('8640', '44', '19', '1535961458', '44', '44');
INSERT INTO `cm_log` VALUES ('8641', '44', '22', null, '185', '44');
INSERT INTO `cm_log` VALUES ('8642', '31', '7', '1535965559', '30', '32');
INSERT INTO `cm_log` VALUES ('8643', '31', '7', '1535965569', '30', '32');
INSERT INTO `cm_log` VALUES ('8644', '31', '7', '1535966469', '30', '32');
INSERT INTO `cm_log` VALUES ('8645', '31', '7', '1535966477', '29', '31');
INSERT INTO `cm_log` VALUES ('8646', '31', '7', '1535966524', '29', '31');
INSERT INTO `cm_log` VALUES ('8647', '31', '7', '1535966543', '30', '32');
INSERT INTO `cm_log` VALUES ('8648', '31', '3', '1535966549', '30', '32');
INSERT INTO `cm_log` VALUES ('8649', '31', '7', '1535966630', '30', '32');
INSERT INTO `cm_log` VALUES ('8650', '31', '7', '1535966667', '30', '32');
INSERT INTO `cm_log` VALUES ('8651', '31', '3', '1535966673', '30', '32');
INSERT INTO `cm_log` VALUES ('8652', '31', '7', '1535966734', '29', '31');
INSERT INTO `cm_log` VALUES ('8653', '31', '3', '1535966738', '29', '31');
INSERT INTO `cm_log` VALUES ('8654', '31', '7', '1535967137', '30', '32');
INSERT INTO `cm_log` VALUES ('8655', '31', '3', '1535967146', '30', '32');
INSERT INTO `cm_log` VALUES ('8656', '31', '7', '1535967356', '30', '32');
INSERT INTO `cm_log` VALUES ('8657', '31', '3', '1535967366', '30', '32');
INSERT INTO `cm_log` VALUES ('8658', '31', '7', '1535967443', '30', '32');
INSERT INTO `cm_log` VALUES ('8659', '31', '7', '1535967638', '30', '32');
INSERT INTO `cm_log` VALUES ('8660', '31', '7', '1535967731', '30', '32');
INSERT INTO `cm_log` VALUES ('8661', '31', '7', '1536023637', '30', '32');
INSERT INTO `cm_log` VALUES ('8662', '31', '3', '1536023647', '30', '32');
INSERT INTO `cm_log` VALUES ('8663', '49', '11', null, '335', '49');
INSERT INTO `cm_log` VALUES ('8664', '49', '15', null, '99', '49');
INSERT INTO `cm_log` VALUES ('8665', '49', '19', '1536028164', '49', '49');
INSERT INTO `cm_log` VALUES ('8666', '49', '11', null, '336', '49');
INSERT INTO `cm_log` VALUES ('8667', '49', '10', '1536028313', '49', '49');
INSERT INTO `cm_log` VALUES ('8668', '49', '14', null, '335', '49');
INSERT INTO `cm_log` VALUES ('8669', '49', '14', null, '336', '49');
INSERT INTO `cm_log` VALUES ('8670', '49', '14', null, '', '49');
INSERT INTO `cm_log` VALUES ('8671', '49', '11', null, '337', '49');
INSERT INTO `cm_log` VALUES ('8672', '49', '11', null, '338', '49');
INSERT INTO `cm_log` VALUES ('8673', '49', '11', null, '339', '49');
INSERT INTO `cm_log` VALUES ('8674', '49', '11', null, '340', '49');
INSERT INTO `cm_log` VALUES ('8675', '49', '11', null, '341', '49');
INSERT INTO `cm_log` VALUES ('8676', '49', '11', null, '342', '49');
INSERT INTO `cm_log` VALUES ('8677', '49', '10', '1536028409', '49', '49');
INSERT INTO `cm_log` VALUES ('8678', '49', '22', null, '186', '49');
INSERT INTO `cm_log` VALUES ('8679', '49', '8', '1536028479', '186', '49');
INSERT INTO `cm_log` VALUES ('8680', '49', '7', '1536028664', '30', '32');
INSERT INTO `cm_log` VALUES ('8681', '49', '3', '1536028668', '30', '32');
INSERT INTO `cm_log` VALUES ('8682', '49', '19', '1536033307', '49', '49');
INSERT INTO `cm_log` VALUES ('8683', '49', '23', null, '187', '49');
INSERT INTO `cm_log` VALUES ('8684', '49', '23', null, '', '49');
INSERT INTO `cm_log` VALUES ('8685', '49', '7', '1536568658', '30', '32');
INSERT INTO `cm_log` VALUES ('8686', '32', '7', '1536821104', '30', '32');
INSERT INTO `cm_log` VALUES ('8687', '32', '7', '1536821113', '30', '32');
INSERT INTO `cm_log` VALUES ('8688', '32', '7', '1536821370', '30', '32');
INSERT INTO `cm_log` VALUES ('8689', '32', '7', '1536821395', '30', '32');
INSERT INTO `cm_log` VALUES ('8690', '47', '7', '1536822073', '56', '58');
INSERT INTO `cm_log` VALUES ('8691', '32', '7', '1536822328', '30', '32');
INSERT INTO `cm_log` VALUES ('8692', '32', '7', '1536822343', '30', '32');
INSERT INTO `cm_log` VALUES ('8693', '32', '7', '1536822365', '30', '32');
INSERT INTO `cm_log` VALUES ('8694', '32', '7', '1536822369', '30', '32');
INSERT INTO `cm_log` VALUES ('8695', '32', '7', '1536822383', '30', '32');
INSERT INTO `cm_log` VALUES ('8696', '32', '7', '1536823792', '30', '32');
INSERT INTO `cm_log` VALUES ('8697', '32', '7', '1536823846', '30', '32');
INSERT INTO `cm_log` VALUES ('8698', '32', '7', '1536823921', '30', '32');
INSERT INTO `cm_log` VALUES ('8699', '52', '11', null, '343', '52');
INSERT INTO `cm_log` VALUES ('8700', '52', '11', null, '344', '52');
INSERT INTO `cm_log` VALUES ('8701', '52', '14', null, '343', '52');
INSERT INTO `cm_log` VALUES ('8702', '52', '14', null, '', '52');
INSERT INTO `cm_log` VALUES ('8703', '52', '10', '1536824545', '52', '52');
INSERT INTO `cm_log` VALUES ('8704', '32', '7', '1536825270', '30', '32');
INSERT INTO `cm_log` VALUES ('8705', '32', '7', '1536825303', '50', '52');
INSERT INTO `cm_log` VALUES ('8706', '32', '7', '1536825391', '50', '52');
INSERT INTO `cm_log` VALUES ('8707', '52', '7', '1536825393', '30', '32');
INSERT INTO `cm_log` VALUES ('8708', '52', '7', '1536825640', '50', '52');
INSERT INTO `cm_log` VALUES ('8709', '52', '7', '1536825691', '50', '52');
INSERT INTO `cm_log` VALUES ('8710', '52', '7', '1536825720', '50', '52');
INSERT INTO `cm_log` VALUES ('8711', '52', '7', '1536831446', '50', '52');
INSERT INTO `cm_log` VALUES ('8712', '32', '10', '1537340802', '32', '32');
INSERT INTO `cm_log` VALUES ('8713', '58', '11', null, '345', '58');
INSERT INTO `cm_log` VALUES ('8714', '58', '11', null, '346', '58');
INSERT INTO `cm_log` VALUES ('8715', '58', '11', null, '347', '58');
INSERT INTO `cm_log` VALUES ('8716', '58', '10', '1538190458', '58', '58');
INSERT INTO `cm_log` VALUES ('8717', '58', '7', '1538190809', '45', '47');
INSERT INTO `cm_log` VALUES ('8718', '58', '7', '1538190879', '45', '47');
INSERT INTO `cm_log` VALUES ('8719', '49', '19', '1538980317', '49', '49');
INSERT INTO `cm_log` VALUES ('8720', '58', '14', null, '347', '58');
INSERT INTO `cm_log` VALUES ('8721', '58', '14', null, '346', '58');
INSERT INTO `cm_log` VALUES ('8722', '58', '14', null, '345', '58');
INSERT INTO `cm_log` VALUES ('8723', '58', '14', null, '', '58');
INSERT INTO `cm_log` VALUES ('8724', '58', '10', '1539066020', '58', '58');
INSERT INTO `cm_log` VALUES ('8725', '58', '7', '1539066214', '45', '47');
INSERT INTO `cm_log` VALUES ('8726', '49', '10', '1539079484', '49', '49');
INSERT INTO `cm_log` VALUES ('8727', '62', '11', null, '348', '62');
INSERT INTO `cm_log` VALUES ('8728', '49', '7', '1539143809', '47', '49');
INSERT INTO `cm_log` VALUES ('8729', '62', '15', null, '100', '62');
INSERT INTO `cm_log` VALUES ('8730', '49', '23', null, '188', '49');
INSERT INTO `cm_log` VALUES ('8731', '49', '23', null, '', '49');
INSERT INTO `cm_log` VALUES ('8732', '49', '11', null, '349', '49');
INSERT INTO `cm_log` VALUES ('8733', '49', '11', null, '350', '49');
INSERT INTO `cm_log` VALUES ('8734', '49', '7', '1539157569', '47', '49');
INSERT INTO `cm_log` VALUES ('8735', '49', '7', '1539160158', '47', '49');
INSERT INTO `cm_log` VALUES ('8736', '58', '7', '1539935626', '45', '47');
INSERT INTO `cm_log` VALUES ('8737', '58', '11', null, '351', '58');
INSERT INTO `cm_log` VALUES ('8738', '58', '11', null, '352', '58');
INSERT INTO `cm_log` VALUES ('8739', '58', '15', null, '101', '58');
INSERT INTO `cm_log` VALUES ('8740', '58', '15', null, '102', '58');
INSERT INTO `cm_log` VALUES ('8741', '58', '19', '1539936241', '58', '58');
INSERT INTO `cm_log` VALUES ('8742', '58', '19', '1539936349', '58', '58');
INSERT INTO `cm_log` VALUES ('8743', '58', '7', '1539936609', '59', '61');
INSERT INTO `cm_log` VALUES ('8744', '58', '7', '1539936670', '59', '61');
INSERT INTO `cm_log` VALUES ('8745', '58', '7', '1539936715', '45', '47');
INSERT INTO `cm_log` VALUES ('8746', '49', '7', '1539998687', '47', '49');
INSERT INTO `cm_log` VALUES ('8747', '49', '7', '1539998695', '47', '49');
INSERT INTO `cm_log` VALUES ('8748', '49', '7', '1539998705', '47', '49');
INSERT INTO `cm_log` VALUES ('8749', '49', '7', '1539998807', '47', '49');

-- ----------------------------
-- Table structure for cm_modules
-- ----------------------------
DROP TABLE IF EXISTS `cm_modules`;
CREATE TABLE `cm_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) NOT NULL,
  `is_effect` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_modules
-- ----------------------------
INSERT INTO `cm_modules` VALUES ('1', '官网', '1', 'main_site');
INSERT INTO `cm_modules` VALUES ('2', '名片夹', '1', 'card_holder');
INSERT INTO `cm_modules` VALUES ('3', '分享了我的名片', '1', 'shared_card');
INSERT INTO `cm_modules` VALUES ('4', '会员中心', '1', 'user_center');
INSERT INTO `cm_modules` VALUES ('5', '我的名片', '1', 'my_card');
INSERT INTO `cm_modules` VALUES ('6', '保存了我的名片', '1', 'received_card');
INSERT INTO `cm_modules` VALUES ('7', '查看了我的名片', '1', 'view_card');
INSERT INTO `cm_modules` VALUES ('8', '查看了我的产品', '1', 'view_product');
INSERT INTO `cm_modules` VALUES ('9', '拨打了我的电话', '1', 'call_me');
INSERT INTO `cm_modules` VALUES ('10', '修改名片', '1', 'edit_card');
INSERT INTO `cm_modules` VALUES ('11', '上传图片', '1', 'add_image');
INSERT INTO `cm_modules` VALUES ('14', '删除图片', '1', 'del_image');
INSERT INTO `cm_modules` VALUES ('15', '添加视频', '1', 'add_video');
INSERT INTO `cm_modules` VALUES ('18', '删除视频', '1', 'del_video');
INSERT INTO `cm_modules` VALUES ('19', '添加产品', '1', 'add_product');
INSERT INTO `cm_modules` VALUES ('22', '修改产品', '1', 'edit_product');
INSERT INTO `cm_modules` VALUES ('23', '删除产品', '1', 'del_product');

-- ----------------------------
-- Table structure for cm_nodeinfo
-- ----------------------------
DROP TABLE IF EXISTS `cm_nodeinfo`;
CREATE TABLE `cm_nodeinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `WeChat_id` int(11) DEFAULT NULL COMMENT '企业微信ID',
  `f_id` int(11) NOT NULL COMMENT '所属部门ID',
  `parentid` int(11) DEFAULT NULL COMMENT '企业微信父ID',
  `name` varchar(50) NOT NULL COMMENT '部门名称',
  `company_id` tinyint(4) NOT NULL COMMENT '公司ID',
  `company` varchar(255) NOT NULL COMMENT '公司名称',
  `is_del` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_nodeinfo
-- ----------------------------
INSERT INTO `cm_nodeinfo` VALUES ('1', '0', '0', null, '中亚集团', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('2', '0', '1', null, '中亚电子城集团', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('3', '0', '2', null, '电子商务中心', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('4', '0', '3', null, '产品设计部', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('5', '0', '3', null, '技术研发部', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('6', '0', '5', null, '项目一组', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('7', '0', '5', null, '项目二组', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('8', '0', '5', null, '项目三组', '1', '中亚集团有限公司', '1');
INSERT INTO `cm_nodeinfo` VALUES ('9', '0', '4', null, '产品组', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('10', '0', '4', null, '设计组', '1', '中亚集团有限公司', '0');
INSERT INTO `cm_nodeinfo` VALUES ('11', '0', '9', null, 'UI组', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('12', '0', '2', null, 'rgreg ', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('13', '0', '5', null, 'fff ', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('14', '0', '1', null, '4454545', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('15', '0', '0', null, 'dvdf ', '0', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('16', '0', '1', null, 'efsdgdg', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('17', '0', '2', null, '6556454', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('18', '0', '5', null, '项目四组', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('19', null, '5', null, '项目三组', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('20', null, '5', null, '项目三组', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('21', null, '5', null, '项目四组', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('22', null, '5', null, '软件测试组', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('23', null, '5', null, '网络管理组', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('24', null, '5', null, 'WEB前端组', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('25', null, '3', null, '综合运营部', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('26', null, '3', null, '企划推广部', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('27', null, '3', null, '客户服务事业群', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('28', null, '2', null, '电子城领导', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('29', null, '2', null, '总裁办公室', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('30', null, '2', null, '商管中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('31', null, '2', null, '会展中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('32', null, '2', null, '战略规划中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('33', null, '2', null, '营销中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('34', null, '2', null, '资本运营中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('35', null, '2', null, '资源管理中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('36', null, '2', null, '供应链金融中心', '1', '', '0');
INSERT INTO `cm_nodeinfo` VALUES ('37', null, '1', null, 'dgfdf', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('38', null, '1', null, 'dgfdf', '1', '', '1');
INSERT INTO `cm_nodeinfo` VALUES ('39', null, '3', null, '测试账号', '1', '', '0');

-- ----------------------------
-- Table structure for cm_page_show
-- ----------------------------
DROP TABLE IF EXISTS `cm_page_show`;
CREATE TABLE `cm_page_show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `sort` int(255) NOT NULL,
  `engdt` varchar(255) DEFAULT NULL,
  `delete` varchar(255) DEFAULT NULL COMMENT '1为删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=420 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_page_show
-- ----------------------------
INSERT INTO `cm_page_show` VALUES ('353', '15-1533351409276', '2018-08-04 04:58:56', '1', 'phone', '1');
INSERT INTO `cm_page_show` VALUES ('354', '1-1533351559279', '2018-08-04 05:01:02', '0', 'companyinfo', '1');
INSERT INTO `cm_page_show` VALUES ('355', '8-1533351826317', '2018-08-04 05:04:23', '2', 'companyaddress', '1');
INSERT INTO `cm_page_show` VALUES ('356', '4-1533352825004', '2018-08-04 05:21:12', '3', 'companymage', '1');
INSERT INTO `cm_page_show` VALUES ('357', '25-1533803506959', '2018-08-09 16:31:50', '0', 'companynews', '1');
INSERT INTO `cm_page_show` VALUES ('358', '1-1533891407039', '2018-08-10 16:57:01', '0', 'companyinfo', '1');
INSERT INTO `cm_page_show` VALUES ('359', '8-1533891512017', '2018-08-10 16:58:32', '0', 'companyaddress', '1');
INSERT INTO `cm_page_show` VALUES ('360', '4-1533891518205', '2018-08-10 16:58:39', '0', 'companymage', '1');
INSERT INTO `cm_page_show` VALUES ('361', '0-1533891550519', '2018-08-10 16:59:15', '0', 'carousel', '1');
INSERT INTO `cm_page_show` VALUES ('362', '1-1533891784018', '2018-08-10 17:03:11', '0', 'companyinfo', null);
INSERT INTO `cm_page_show` VALUES ('363', '5-1533892591660', '2018-08-10 17:16:48', '0', 'companyteam', '1');
INSERT INTO `cm_page_show` VALUES ('364', '15-1533892597267', '2018-08-10 17:17:00', '3', 'phone', '1');
INSERT INTO `cm_page_show` VALUES ('365', '5-1533892626885', '2018-08-10 17:17:18', '0', 'companyteam', '1');
INSERT INTO `cm_page_show` VALUES ('366', '7-1533892625143', '2018-08-10 17:19:17', '4', 'companylink', '1');
INSERT INTO `cm_page_show` VALUES ('367', '8-1533893493699', '2018-08-10 17:32:02', '5', 'companyaddress', '1');
INSERT INTO `cm_page_show` VALUES ('368', '1-1534333096535', '2018-08-15 19:43:16', '0', 'companyinfo', '1');
INSERT INTO `cm_page_show` VALUES ('369', '1-1534333812064', '2018-08-15 19:50:30', '0', 'companyinfo', '1');
INSERT INTO `cm_page_show` VALUES ('370', '1-1534333876694', '2018-08-15 19:51:35', '1', 'companyinfo', '1');
INSERT INTO `cm_page_show` VALUES ('371', '15-1534339464602', '2018-08-15 21:24:34', '2', 'phone', '1');
INSERT INTO `cm_page_show` VALUES ('372', '0-1534753849003', '2018-08-20 16:31:53', '0', 'carousel', '1');
INSERT INTO `cm_page_show` VALUES ('373', '7-1535527661694', '2018-08-29 15:28:08', '0', 'companylink', '1');
INSERT INTO `cm_page_show` VALUES ('374', '9-1536823095447', '2018-09-13 15:20:39', '0', 'titlebar', '1');
INSERT INTO `cm_page_show` VALUES ('375', '27-1536823151021', '2018-09-13 15:22:05', '0', 'textblock', '1');
INSERT INTO `cm_page_show` VALUES ('376', '5-1539835366590', '2018-10-18 14:03:25', '0', 'companyteam', '1');
INSERT INTO `cm_page_show` VALUES ('377', '15-1539842424618', '2018-10-18 14:03:55', '0', 'phone', '1');
INSERT INTO `cm_page_show` VALUES ('378', '27-1539847238415', '2018-10-18 15:24:36', '0', 'textblock', '1');
INSERT INTO `cm_page_show` VALUES ('379', '10-1539847297131', '2018-10-18 15:25:20', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('380', '10-1539847365796', '2018-10-18 15:26:11', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('381', '9-1539847402744', '2018-10-18 15:26:42', '0', 'titlebar', '1');
INSERT INTO `cm_page_show` VALUES ('382', '0-1539847428304', '2018-10-18 15:27:32', '0', 'carousel', '1');
INSERT INTO `cm_page_show` VALUES ('383', '10-1539847586031', '2018-10-18 15:30:12', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('384', '10-1539848084825', '2018-10-18 15:38:05', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('385', '10-1539917540812', '2018-10-19 10:52:18', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('386', '10-1539917587880', '2018-10-19 10:53:01', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('387', '10-1540793130034', '2018-10-29 14:09:40', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('388', '10-1540794076540', '2018-10-29 14:21:20', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('389', '10-1540794678467', '2018-10-29 14:31:20', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('390', '10-1540795164356', '2018-10-29 14:40:00', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('391', '27-1540795746002', '2018-10-29 14:49:07', '0', 'textblock', null);
INSERT INTO `cm_page_show` VALUES ('392', '8-1540797428100', '2018-10-29 15:15:26', '0', 'companyaddress', null);
INSERT INTO `cm_page_show` VALUES ('393', '10-1540799137416', '2018-10-29 15:45:38', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('394', '10-1540807172694', '2018-10-29 17:59:33', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('395', '10-1540867972385', '2018-10-30 10:50:51', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('396', '9-1540868020102', '2018-10-30 10:52:09', '0', 'titlebar', null);
INSERT INTO `cm_page_show` VALUES ('397', '10-1540868176398', '2018-10-30 10:54:16', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('398', '10-1540869985602', '2018-10-30 11:24:32', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('399', '0-1540870042057', '2018-10-30 11:25:27', '0', 'carousel', '1');
INSERT INTO `cm_page_show` VALUES ('400', '10-1540870350224', '2018-10-30 11:33:22', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('401', '10-1540881155491', '2018-10-30 14:30:45', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('402', '10-1540882549929', '2018-10-30 14:53:52', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('403', '10-1540882714847', '2018-10-30 14:56:40', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('404', '10-1540882887934', '2018-10-30 14:59:27', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('405', '10-1540884688530', '2018-10-30 15:29:28', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('406', '10-1540884761593', '2018-10-30 15:30:41', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('407', '10-1540885026471', '2018-10-30 15:35:07', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('408', '10-1540885276622', '2018-10-30 15:39:17', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('409', '10-1540885348894', '2018-10-30 15:40:28', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('410', '10-1540885425085', '2018-10-30 15:41:45', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('411', '10-1540885566564', '2018-10-30 15:44:05', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('412', '10-1540885701947', '2018-10-30 15:46:20', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('413', '10-1540886158062', '2018-10-30 15:53:59', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('414', '10-1540886283223', '2018-10-30 15:56:03', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('415', '10-1540888471082', '2018-10-30 16:32:29', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('416', '0-1540890120884', '2018-10-30 17:00:10', '0', 'carousel', null);
INSERT INTO `cm_page_show` VALUES ('417', '0-1540890237494', '2018-10-30 17:03:58', '0', 'carousel', '1');
INSERT INTO `cm_page_show` VALUES ('418', '10-1540890252894', '2018-10-30 17:04:19', '0', 'images', '1');
INSERT INTO `cm_page_show` VALUES ('419', '10-1541040173458', '2018-11-01 10:43:22', '0', 'images', null);

-- ----------------------------
-- Table structure for cm_phone
-- ----------------------------
DROP TABLE IF EXISTS `cm_phone`;
CREATE TABLE `cm_phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_phone
-- ----------------------------
INSERT INTO `cm_phone` VALUES ('15', '15-1533351409276', '公司电话', ' 0755-2222-0000');
INSERT INTO `cm_phone` VALUES ('16', '15-1533892597267', '公司电话', '0755-22220000');
INSERT INTO `cm_phone` VALUES ('17', '15-1534339464602', '公司电话', '0795-XXXXXXXXX');
INSERT INTO `cm_phone` VALUES ('18', '15-1539842424618', '公司电话', '075555555555555');

-- ----------------------------
-- Table structure for cm_product
-- ----------------------------
DROP TABLE IF EXISTS `cm_product`;
CREATE TABLE `cm_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  `is_audited` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_product
-- ----------------------------
INSERT INTO `cm_product` VALUES ('180', '29', '测试', '327', '测试', '0', '0');
INSERT INTO `cm_product` VALUES ('181', '30', '', '', '', '1', '0');
INSERT INTO `cm_product` VALUES ('182', '32', '测试', '328', '测的', '1', '1');
INSERT INTO `cm_product` VALUES ('183', '39', '中亚会展中心一号馆', '332', '', '1', '1');
INSERT INTO `cm_product` VALUES ('184', '31', '经营企业', '333', '你永远是一种自信', '0', '0');
INSERT INTO `cm_product` VALUES ('185', '44', '', '', '', '1', '0');
INSERT INTO `cm_product` VALUES ('186', '49', '来咯哦o', '338,339,340', '来了wwwwwww', '1', '0');
INSERT INTO `cm_product` VALUES ('187', '49', '通通', '338,339', '看看他嫩健健康康', '1', '0');
INSERT INTO `cm_product` VALUES ('188', '49', 'sadsfg ', '337', 'sadfadfasd f', '1', '0');
INSERT INTO `cm_product` VALUES ('189', '58', '企业云平台', '352', '企业云平台就是好用！', '0', '0');
INSERT INTO `cm_product` VALUES ('190', '58', '中亚云市场', '351', '撮合交易，你懂得！', '0', '0');

-- ----------------------------
-- Table structure for cm_sessions
-- ----------------------------
DROP TABLE IF EXISTS `cm_sessions`;
CREATE TABLE `cm_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_sessions
-- ----------------------------
INSERT INTO `cm_sessions` VALUES ('053b6dedf818674066f0241770d457b0648c9b37', '113.116.47.165', '1540880425', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838303139393B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235366333303939363939356638333566366239656638353565346637663363303738613435666166223B7D);
INSERT INTO `cm_sessions` VALUES ('f01fbe0ca7805ff5213c71acb593c2a43a8792d2', '113.116.47.165', '1540880708', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838303438383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2263613832306239313964633663323264663831386230623233323366363235383935376530343338223B7D);
INSERT INTO `cm_sessions` VALUES ('b0c63d1d082086a3fdcad4f02d08d8e41ee34de2', '113.116.47.165', '1540881045', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838303838303B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2263613832306239313964633663323264663831386230623233323366363235383935376530343338223B7D);
INSERT INTO `cm_sessions` VALUES ('1ab45d5fdcf7f4e609d0e189871afbd0083cfb65', '113.116.47.165', '1540881433', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838313338383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2263613832306239313964633663323264663831386230623233323366363235383935376530343338223B7D);
INSERT INTO `cm_sessions` VALUES ('31d347d388400a1d9d68ec058f86a5a9d28dff65', '119.123.45.47', '1540881978', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838313835363B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2263613832306239313964633663323264663831386230623233323366363235383935376530343338223B7D);
INSERT INTO `cm_sessions` VALUES ('57eadd672efed8da53dd53af081445ce7f268799', '119.123.45.47', '1540882432', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838323139313B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2263613832306239313964633663323264663831386230623233323366363235383935376530343338223B7D);
INSERT INTO `cm_sessions` VALUES ('286b3cb6663a66eb1a7acf6807c722d6a20b4975', '119.123.45.47', '1540882767', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838323536323B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235663137323366346362303136343535303730383936346162633663353230333862333637613430223B7D);
INSERT INTO `cm_sessions` VALUES ('2f4f18115c97364076fabf1c4529f30ba02a76fd', '119.123.45.47', '1540883433', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838333138303B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235663137323366346362303136343535303730383936346162633663353230333862333637613430223B7D);
INSERT INTO `cm_sessions` VALUES ('3e5a7fc2df933a122484810bea8002f0fa5c1a7a', '119.123.45.47', '1540883883', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838333537393B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235663137323366346362303136343535303730383936346162633663353230333862333637613430223B7D);
INSERT INTO `cm_sessions` VALUES ('c38b6089664daa75259bde9caddeed3b6f2e0c01', '113.116.47.165', '1540884292', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838343035353B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235663137323366346362303136343535303730383936346162633663353230333862333637613430223B7D);
INSERT INTO `cm_sessions` VALUES ('b4e078db37efb0a44868cdef9c495aba03bdde79', '119.123.45.47', '1540884641', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838343438353B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235663137323366346362303136343535303730383936346162633663353230333862333637613430223B7D);
INSERT INTO `cm_sessions` VALUES ('60dfd3f48cfb02a7453c6ef251233be3919af5ee', '113.116.47.165', '1540885157', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838343838383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2235663137323366346362303136343535303730383936346162633663353230333862333637613430223B7D);
INSERT INTO `cm_sessions` VALUES ('1dd56168f41aa11dae5a768a8e32967551aa4b0e', '119.123.45.47', '1540885445', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838353139323B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('6c49df4ec311bc53b4b7094a36e84cdb2771f8fe', '113.116.47.165', '1540885580', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838353536333B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('bc8326155f5edb2b6bc71f773f3f54f7c6bac74e', '113.116.47.165', '1540886237', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838363031343B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('ed36ef5c96d31109b8f9a6a6513ce3c1118c613e', '119.123.45.47', '1540887969', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838363433373B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('af87332f8872ba5c3b6e60ecaf3d0aaefa1ec78d', '113.116.47.165', '1540888247', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838373937363B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('ec6ded98ce89c152b4ed8e59d99a3bc3f53f5d83', '113.116.47.165', '1540888487', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838383333353B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('e582b7ac9c5fdf9b6ad2942c79fbed7127721e12', '113.116.47.165', '1540890366', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303838393932383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2234336630633439363137393833623966613431316361303161346263353764633562623435633361223B7D);
INSERT INTO `cm_sessions` VALUES ('e5a43cdc28efe444fa89d6b3d76aac223528096c', '113.116.47.165', '1540890268', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839303139313B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2232316337376434363861616165323266316166393132623436613962373030363333386534346565223B7D);
INSERT INTO `cm_sessions` VALUES ('8d3cce67eca4cf7bca151aae209425c9b5abefdf', '113.116.47.165', '1540890442', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839303336393B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2231653833333032353434633362666633616166336139303734353733343661643266623136646562223B7D);
INSERT INTO `cm_sessions` VALUES ('35faa44660b0511ffbfe86ca6ba9f3038c1e6a8f', '113.116.47.165', '1540891021', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839303739303B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2231653833333032353434633362666633616166336139303734353733343661643266623136646562223B7D);
INSERT INTO `cm_sessions` VALUES ('515bec391b2698a2a51df3cb92834cd33c0354b1', '119.123.45.47', '1540892239', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839323233323B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2231653833333032353434633362666633616166336139303734353733343661643266623136646562223B7D);
INSERT INTO `cm_sessions` VALUES ('f108cc7cf5bacdf22081db037ec00f91465aa906', '119.123.45.47', '1540893074', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839323831383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2231653833333032353434633362666633616166336139303734353733343661643266623136646562223B7D);
INSERT INTO `cm_sessions` VALUES ('2123f8a900454393071b8a0d9eea08bde5ca5df1', '113.116.47.165', '1540893160', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839333135383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2231653833333032353434633362666633616166336139303734353733343661643266623136646562223B7D);
INSERT INTO `cm_sessions` VALUES ('9b58378694e713b4d0f639ab0af1ef371e4e32d1', '119.123.45.47', '1540893526', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839333233353B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2230373733633861633833376534626635373138363064323632376566643138313938663232393430223B7D);
INSERT INTO `cm_sessions` VALUES ('e788f6ae5095fbe8a7d9f7ea7c6c34c00941f32f', '119.123.45.47', '1540893664', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839333536323B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2266613162313662383137626234613938623033366561346361366561636466353237323030323261223B7D);
INSERT INTO `cm_sessions` VALUES ('020c0e3ef200c95df553aaae9e56dd1fdcfb96a0', '113.116.47.165', '1540893871', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303839333836383B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2266613162313662383137626234613938623033366561346361366561636466353237323030323261223B7D);
INSERT INTO `cm_sessions` VALUES ('8281966f46f00fb967a135e60dbd51c101186cb0', '119.123.45.47', '1540948389', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303934383338393B);
INSERT INTO `cm_sessions` VALUES ('68dbc1d56d753e58fd6d1eba871894693ad6f4f3', '113.116.47.165', '1540949859', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534303934393831353B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2261383436316465333233313237373636663066343538353763393833393337656538323536303634223B7D);
INSERT INTO `cm_sessions` VALUES ('2b8684497e02bfaa40511b53c4423675f1069b95', '116.25.36.64', '1541040258', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534313034303135343B75736572696E666F7C613A343A7B733A383A2261646D696E5F6964223B733A313A2231223B733A393A22757365725F6E616D65223B733A353A2261646D696E223B733A383A2270617373776F7264223B733A36303A2224327924313024482F4F5A47744A6C46674B68704F672F41634E4F5565753639504B7932445A50736A7037586A51716D616B4E7274687952625A5679223B733A353A22746F6B656E223B733A34303A2265633234656363653032343761363734303864316439373036343933323539303039616361633431223B7D);
INSERT INTO `cm_sessions` VALUES ('91ff8a57845eadd4593720271c51bc8b9225ec39', '119.123.49.0', '1541488042', 0x5F5F63695F6C6173745F726567656E65726174657C693A313534313438383031363B);

-- ----------------------------
-- Table structure for cm_textblock
-- ----------------------------
DROP TABLE IF EXISTS `cm_textblock`;
CREATE TABLE `cm_textblock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(255) DEFAULT NULL,
  `divid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_textblock
-- ----------------------------
INSERT INTO `cm_textblock` VALUES ('64', '深圳市壆岗中亚电子博览中心', '27-1536823151021');
INSERT INTO `cm_textblock` VALUES ('65', '012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234', '27-1539847238415');
INSERT INTO `cm_textblock` VALUES ('66', '请填asdf撒打发打发写内容', '27-1540795746002');

-- ----------------------------
-- Table structure for cm_titlebar
-- ----------------------------
DROP TABLE IF EXISTS `cm_titlebar`;
CREATE TABLE `cm_titlebar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `divid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_titlebar
-- ----------------------------
INSERT INTO `cm_titlebar` VALUES ('92', '中亚电子城集团', null, '9-1536823095447');
INSERT INTO `cm_titlebar` VALUES ('93', '测试', null, '9-1539847402744');
INSERT INTO `cm_titlebar` VALUES ('94', '5555555', null, '9-1540868020102');

-- ----------------------------
-- Table structure for cm_unaudited_card
-- ----------------------------
DROP TABLE IF EXISTS `cm_unaudited_card`;
CREATE TABLE `cm_unaudited_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `card_style` tinyint(4) DEFAULT '1',
  `username` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `duties` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `introduce` text,
  `image` varchar(15) DEFAULT NULL,
  `video` varchar(15) DEFAULT NULL,
  `product` varchar(15) DEFAULT NULL,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  `is_audited` tinyint(1) NOT NULL DEFAULT '0',
  `intime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_unaudited_card
-- ----------------------------
INSERT INTO `cm_unaudited_card` VALUES ('73', '31', '1', '许浩荣', null, '1', '中亚集团有限公司', 'web前端工程师', '13809879662', 'zyetc0322@163.com', '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', '1536024984');
INSERT INTO `cm_unaudited_card` VALUES ('65', '33', '3', '张梦', 'https://wx.qlogo.cn/mmopen/vi_32/jYiafmBf2icsdG3uib41nhb5h0WGJ04nRJh9vm2TIo3pckpIXTZyyibBiaic36n9RXnEDfEtOUhibZRsv70QV8zTGSMhA/132', '1', '中亚集团有限公司', '实习生', '18371530756', '', '深圳市宝安区岗头路20号', '', '', '', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('68', '39', '3', '张建', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJf0qdT5vP69ORFhNmEy5QibmLvTV8qYf366RiaWoUPXTXJkPxvtgVHqRbXHI8whyFjbOiaiaTJfFLpcA/132', '1', '中亚集团有限公司', '项目经理', '13924667758', '', '深圳市宝安区岗头路20号', '个人简介', '', '', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('62', '32', '3', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', '18040426@casvip.com', '深圳市宝安区岗头路20号', '', '', '', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('64', '33', '3', '张梦', 'https://wx.qlogo.cn/mmopen/vi_32/jYiafmBf2icsdG3uib41nhb5h0WGJ04nRJh9vm2TIo3pckpIXTZyyibBiaic36n9RXnEDfEtOUhibZRsv70QV8zTGSMhA/132', '1', '中亚集团有限公司', '实习生', '18371530756', '', '深圳市宝安区岗头路20号', '', '', '', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('76', '47', '2', '纪昌鸿', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTI0Wjshxm16cMzD2iaeUmu041icg4Co9s1qIJ0sqV0NUKSsW8hzGBvccayorLmLOfxjiaQG88cLIeUiag/132', '1', '中亚集团有限公司', 'PHP程序员', '13632923910', '284529721@qq.com', '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('85', '58', '1', '程博文', 'https://wx.qlogo.cn/mmopen/vi_32/EfN5mVsTXIibHPeyUWGVeicmva6ex5pTduo7FTRHptiahiacyHBezN4XK1p0X9OLunBY2rpnib9QBD3KTIRELhzqg5w/132', '1', '中亚集团有限公司', '项目经理', '13068706819', '604435477@qq.com', '深圳市宝安区岗头路20号', '6666hhh', '', '', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('84', '58', '1', '程博文', 'https://wx.qlogo.cn/mmopen/vi_32/EfN5mVsTXIibHPeyUWGVeicmva6ex5pTduo7FTRHptiahiacyHBezN4XK1p0X9OLunBY2rpnib9QBD3KTIRELhzqg5w/132', '1', '中亚集团有限公司', '项目经理', '13068706819', '604435477@qq.com', '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('83', '49', '1', '许浩荣', 'https://wx.qlogo.cn/mmopen/vi_32/MVEtpGDxryibiaHibTiaAmSRYibAHEcmovQXX3QtfXD8kYxNGBD0icDVY7LcsWQvhYIghKDstAN4VhnDgibnMPxReWZCg/132', '1', '中亚集团有限公司', 'web', '13809879662', '123456286@qq.com', '深圳市宝安区岗头路20号', '她咯哦哦哦111', '340,341,342', '99', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('86', '52', '3', '贺志航', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/55f27c2ce9784b574389c524786fb27e-tmp_ebd3caccbac5162c9a6d910f4bfc05e81202e6b64b2574f6.jpg', '1', '中亚集团有限公司', '实习生', '15971075083', '15971075083@163.com', '深圳市宝安区岗头路20号', null, '', '', '', '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('87', '52', '3', '贺志航', 'https://wx.qlogo.cn/mmopen/vi_32/00RFI6V3lq67XOnlicyJ1B773Tckrgqo7Qian7n9XC7h3EFEaO5WbSUZDpjLhxupDlke8faSUmPJQSiby3GcNxeFg/132', '1', '中亚集团有限公司', '实习生', '15971075083', '15971075083@163.com', '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('88', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('89', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('90', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('91', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('92', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('93', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('94', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('95', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('96', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('97', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('98', '32', '1', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', '1', '中亚集团有限公司', '软件测试工程师', '13266685160', null, '深圳市宝安区岗头路20号', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('99', '61', '1', '杨奥杰', 'https://wx.qlogo.cn/mmopen/vi_32/EwmZ8EEMC0sHTuWjibpB37SxeicJZPOCw6sB7P2eTq7iblZ1mIibAPTfCiaKlyiahHHRsv44icUeAAjThFraYUyHSO8rA/132', '1', '中亚电子城集团股份有限公司', 'PHP开发工程师', '1306706859', 'yaj@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('100', '62', '1', '戴勇军', 'https://wx.qlogo.cn/mmopen/vi_32/ibp6PtS75aENCiaG1QueQn0HEoCkz2dGM6M9lNicofbibnxiatdlUCQAP9nz0qSQBSZPyHkIpLTkBXzgnLIVpOqgatw/132', '1', '中亚电子城集团股份有限公司', '总监', '13410895468', '13410895468@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('101', '62', '1', '戴勇军', 'https://wx.qlogo.cn/mmopen/vi_32/ibp6PtS75aENCiaG1QueQn0HEoCkz2dGM6M9lNicofbibnxiatdlUCQAP9nz0qSQBSZPyHkIpLTkBXzgnLIVpOqgatw/132', '1', '中亚电子城集团股份有限公司', '总监', '13410895468', '13410895468@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('102', '63', '1', '张金星', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKyZmfA7eWBVG11Vomib9SxOyVL47DC9JKwDHnibWdoQicWE8I6JRGAwMSuAE7XZow2J45enIXLoaHgg/132', '1', '中亚电子城集团股份有限公司', '总监', '15817431358', '', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('103', '63', '1', '张金星', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKyZmfA7eWBVG11Vomib9SxOyVL47DC9JKwDHnibWdoQicWE8I6JRGAwMSuAE7XZow2J45enIXLoaHgg/132', '1', '中亚电子城集团股份有限公司', '总监', '15817431358', '', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('104', '64', '1', '夏春晖', 'https://wx.qlogo.cn/mmopen/vi_32/nCLXdjpDP7oaAy5ibfxX9bAcar9CoWKJTTXYiaa0XILdIIHqicib0JcEqy8Y0kscBBIVUT1o5OJAaWKCSkdOZTibxkA/132', '1', '中亚电子城集团股份有限公司', '主管', '13670191890', '15040022@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);
INSERT INTO `cm_unaudited_card` VALUES ('105', '64', '1', '夏春晖', 'https://wx.qlogo.cn/mmopen/vi_32/nCLXdjpDP7oaAy5ibfxX9bAcar9CoWKJTTXYiaa0XILdIIHqicib0JcEqy8Y0kscBBIVUT1o5OJAaWKCSkdOZTibxkA/132', '1', '中亚电子城集团股份有限公司', '主管', '13670191890', '15040022@casvip.com', '深圳市宝安沙井中亚硅谷海岸营销中心', null, null, null, null, '0', '1', null);

-- ----------------------------
-- Table structure for cm_user
-- ----------------------------
DROP TABLE IF EXISTS `cm_user`;
CREATE TABLE `cm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openId` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `company_id` int(11) NOT NULL DEFAULT '0',
  `company` varchar(100) DEFAULT NULL COMMENT '公司名称',
  `duties` varchar(20) DEFAULT NULL COMMENT '职责',
  `tel` varchar(15) DEFAULT NULL COMMENT '电话',
  `email` varchar(50) DEFAULT NULL COMMENT '电子邮箱',
  `address` varchar(100) DEFAULT NULL COMMENT '公司地址',
  `introduce` text COMMENT '介绍',
  `image` text COMMENT '图片',
  `video` text COMMENT '视频',
  `product` text NOT NULL,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  `intime` int(11) NOT NULL DEFAULT '0',
  `deadline` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_user
-- ----------------------------
INSERT INTO `cm_user` VALUES ('1', 'oOeOY5UfFYJreJh5d73wWuoj3HCM', '许浩荣', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/997f9d0e270b43011d5942728a93d8ac-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.xLj8x1kvas2Pfb0f79eb9d08179008152dd6c8b6b28e.jpg', '1', '中亚集团有限公司', 'WEB前端工程师', '13809879662', 'xuhaorongjob@foxmail.com', '深圳市沙井硅谷海岸中心', '中亚硅谷海岸(又称中亚电子博览中心）由中亚集团与深圳市沙井壆岗股份合作公司合作开发。中亚硅谷海岸位于深圳市沙井街道中心，东临宝安大道，北依北环路，项目规划用地2000余亩，总规划建筑面积约120万平方米。其中，首期开发面积约60万平方米，总投资超过20亿元人民币。以总长1.3公里', '153,154,155', '55', '94,95,96', '0', '2018', '1849159423');
INSERT INTO `cm_user` VALUES ('4', 'oOeOY5WxxumCfoupcCFazTZqogj0', '纪昌鸿', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/c2419b6f72d877ce3404cccdd6a823f1-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.FC10lKp6sajC8e0efea7f14abb9bc43de7c558886d8d.jpg', '1', '中亚集团有限公司', '项目经理', '18988886666', '189888@vip.com', '深圳市沙井硅谷海岸中心', '生活中的点点滴滴,磕磕绊绊，一幕幕相信都有值得我们回味和感动的事吧走进岁月的长廊，翻阅生命的相册，重温那曾经令我感动的瞬间生活中的点点滴滴,磕磕绊绊，一幕幕相信都有值得我们回味和感动的事吧走进岁月的长廊，翻阅生命的相册，重温那曾经令我感动的瞬间', '20', '', '2,3', '0', '2018', '1849159423');
INSERT INTO `cm_user` VALUES ('5', 'oOeOY5cjcCfmXinDTKMJ8KsdzK7s', '杨青敏', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/a29934eb7e7d9c96a9ca91c1252711e0-tmp_b256f53076cf03d1f8f72fe3ed972e34a879bbdb5ba24563.jpg', '1', '中亚集团有限公司', '项目经理', '123456789', '擦擦擦', '深圳市沙井硅谷海岸中心', '生活中的点点滴滴,磕磕绊绊，一幕幕相信都有值得我们回味和感动的事吧走进岁月的长廊，翻阅生命的相册，重温那曾经令我感动的瞬间生活中的点点滴滴,磕磕绊绊，一幕幕相信都有值得我们回味和感动的事吧走进岁月的长廊，翻阅生命的相册，重温那曾经令我感动的瞬间', '164,165,166', '19', '36,102', '0', '2018', '1849159423');
INSERT INTO `cm_user` VALUES ('6', 'oOeOY5Tos6Rhn6Y8NP8W8SRINIwQ', '张建', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/fbd90ce3e2b44e9f5d4364109259dae2-tmp_038b3f4f86ada33fc789d3ddba196c6b.jpg', '1', '中亚集团有限公司', '项目管理', '18319990373', '18030398@casvip.com', '深圳市宝安区沙井中亚电子博览中心', '中亚智能名片系统，推进企业营销变革，为企业信息化建设，提供高效优质的工具。中亚智能名片以卓越的产品为追求，以优质的服务为使命，不断推陈出新，为企业带来更加便捷的营销服务', '94', '70', '108,109', '0', '2018', '1849159423');
INSERT INTO `cm_user` VALUES ('7', 'oOeOY5dWrMwvbUCh-WmeJwG9iIyc', '黄坚', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/1c8baa8481bd9980b43269f17f7ea272-tmp_059d3c1fe46bed3a15560d258f377165.jpg', '1', '中亚集团有限公司', '', '13500045120', '584326775@qq.com', '', '1111', '102', '', '104', '0', '2018', '1849159423');
INSERT INTO `cm_user` VALUES ('8', 'oOeOY5aPWU-BwC-EZPY75MrRv_D0', null, null, '1', null, null, null, null, null, null, null, null, '', '0', '2018', '1849159423');
INSERT INTO `cm_user` VALUES ('9', 'oOeOY5VbRlsZz2iK88m_wfk8R6SM', '高规格哈哈', null, '0', null, null, null, null, null, null, '', '', '', '0', '2018', '1849159423');

-- ----------------------------
-- Table structure for cm_userimage
-- ----------------------------
DROP TABLE IF EXISTS `cm_userimage`;
CREATE TABLE `cm_userimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `intime` int(11) DEFAULT NULL,
  `is_del` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_userimage
-- ----------------------------
INSERT INTO `cm_userimage` VALUES ('326', '27', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/2fa8dcab035cb1d45d26108773fb3211-tmp_fe8d3890e0ec5f9d6a90f9466a2cee1d8da0178f245f1b6e.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('327', '29', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/f79b8a427afd8497ec2776f026aa1e95-tmp_8c95a4378e9689d574dffa043d8797952776d57055cf0265.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('328', '32', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/efd2e87a47b4143f52479a9738cb424c-tmp_48431390573289713a2541a4308c3cfd0f9df212af0cfe8f.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('329', '32', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/52a5cb2b9f9a9d1799c60d76c2e6fd2c-tmp_411d59b8d2418e67cb4b6433837303cc25f3c8eeeeaf0c81.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('330', '32', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/9f3cb6606f96968e48396016b50fcd04-tmp_ceae0fa603a19abd54c4f1a0281911221b415fc81b603e16.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('331', '32', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ba2d36944ff8992543bc45b5c3cc1c34-tmp_c4144d79f4f9a16ee728064d3292b4452478c6555b5fe7a1.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('332', '39', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/4be9bb2e55cc4e3365b69a9fbd5cdeb2-tmp_a778d0d137f6942dea589e703e3e62d0.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('333', '31', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/5c8f4e8a2e69e26d01dea22b1d2927b1-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.Q1yH4sXeMdHDc18965db8a14293ab7c6e49e00a63a43.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('334', '31', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/6c718cad25b53bfcc3a0a00b216affa6-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.v1LhXzeehGRjfb0f79eb9d08179008152dd6c8b6b28e.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('335', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/33129d3ea6f544511b0b862a8d0b0ebb-tmp_605b9bdad765de529c9a447faa1836cf.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('336', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/8f38b28f5e968179dd155c5f704fd5ab-tmp_232e2e5e2a68ba50b8abf1143e73c16e.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('337', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/708804774c53a822f02c0caba819e481-tmp_591c977fa8bf3f490ef8ee1212f987c8.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('338', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/d187b667aa5c07f3450e3a745d00e2cf-tmp_c841a75042e26916a637366a4bd0c6ef.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('339', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/b41b6fd2831498bed1b4e0be0b39fd21-tmp_ebc3213fe91a51562b3af454315c9305.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('340', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/525a48eb7b51e1201b4612218275d948-tmp_4f63d2fb5ef3a58471282a2b72ef20c8.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('341', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/d6410b0c55645a39cc831a4c5b71a55b-tmp_7960e3695362f10aefad427bca3ad6e8.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('342', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/fc222a7bf99e025acc808eb775a653fc-tmp_86562ca0bea9962b799fd0b21c0c10ac.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('343', '52', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/0efeabfd0451ac42304c32ba679ea786-tmp_aeadbd1af051f1251e141af413179bce6c336fa2de223671.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('344', '52', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/55f27c2ce9784b574389c524786fb27e-tmp_ebd3caccbac5162c9a6d910f4bfc05e81202e6b64b2574f6.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('345', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/757e989c881d8a8f6bf20060c1632479-tmp_cd96e15e35fbd96f8cadc3254f165959.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('346', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/2312f76575ae2107991eec76512fc95b-tmp_2ac345eb13ab991470f23d1bf40bc63a.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('347', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/4b252cdfac9db8e31a9707848caad191-tmp_57fe406b54998201701e23713adf4b5f.jpg', null, '1');
INSERT INTO `cm_userimage` VALUES ('348', '62', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/1a036832da3c0a035948dca3264c1ee1-tmp_eb6e6a6abf7c40a0f78d495cc79a3224ca6b9998c0a28728.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('349', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/1d273b4c0c9b148981a9a3e3a16282f7-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.qhGaKo05lojLf07966eac5990269279f727929cd8dab.png', null, '0');
INSERT INTO `cm_userimage` VALUES ('350', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/efb1546ae6df54d0abc97b02ecbae05a-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.Me9CXJXUtvYaf07966eac5990269279f727929cd8dab.png', null, '0');
INSERT INTO `cm_userimage` VALUES ('351', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/30adde3dcb9d3064b7c9490ff262174a-tmp_5acabc16fc154420ba4b131314dbef6a.jpg', null, '0');
INSERT INTO `cm_userimage` VALUES ('352', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/9b57aaa813cbb5e95ad6191dc2536e9e-tmp_c9feecfdfe048e42cc79212f9b40c61c.jpg', null, '0');

-- ----------------------------
-- Table structure for cm_users
-- ----------------------------
DROP TABLE IF EXISTS `cm_users`;
CREATE TABLE `cm_users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `mid` int(5) NOT NULL,
  `car_id` int(11) NOT NULL,
  `intime` int(11) DEFAULT NULL,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1887 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_users
-- ----------------------------
INSERT INTO `cm_users` VALUES ('285', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('286', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('287', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('288', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('294', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('295', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('307', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('308', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('312', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('325', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('351', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('352', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('353', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('354', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('355', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('356', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('357', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('391', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('392', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('393', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('394', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('395', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('396', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('397', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('398', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('399', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('400', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('401', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('402', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('403', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('404', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('405', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('406', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('407', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('408', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('409', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('410', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('411', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('412', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('413', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('414', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('415', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('416', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('417', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('418', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('419', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('420', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('421', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('422', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('423', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('424', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('425', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('426', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('427', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('428', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('429', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('430', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('431', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('432', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('433', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('434', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('435', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('436', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('437', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('438', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('439', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('440', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('441', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('442', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('443', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('444', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('445', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('446', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('447', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('448', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('449', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('450', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('451', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('452', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('453', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('454', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('455', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('456', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('457', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('458', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('459', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('460', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('461', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('462', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('463', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('464', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('465', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('466', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('467', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('468', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('469', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('470', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('471', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('472', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('473', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('474', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('475', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('476', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('477', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('478', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('479', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('480', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('481', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('482', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('483', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('484', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('485', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('486', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('487', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('488', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('489', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('490', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('491', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('492', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('493', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('494', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('495', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('496', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('497', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('498', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('499', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('500', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('501', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('502', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('503', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('504', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('505', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('506', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('507', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('508', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('509', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('510', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('511', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('512', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('513', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('514', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('515', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('516', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('517', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('518', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('519', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('520', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('521', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('522', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('523', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('524', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('525', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('526', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('527', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('528', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('529', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('530', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('531', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('532', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('533', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('534', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('535', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('536', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('537', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('538', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('539', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('540', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('541', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('542', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('543', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('544', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('545', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('546', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('547', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('548', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('549', '12', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('550', '12', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('551', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('552', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('553', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('554', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('555', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('556', '12', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('557', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('558', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('559', '1', '10', '2018', '1');
INSERT INTO `cm_users` VALUES ('560', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('561', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('562', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('563', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('564', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('565', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('566', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('567', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('568', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('569', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('570', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('571', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('572', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('573', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('574', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('575', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('576', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('577', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('578', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('579', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('580', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('581', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('582', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('583', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('584', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('585', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('586', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('587', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('588', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('589', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('590', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('591', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('592', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('593', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('594', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('595', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('596', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('597', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('598', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('599', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('600', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('601', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('602', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('603', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('604', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('605', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('606', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('607', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('608', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('609', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('610', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('611', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('612', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('613', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('614', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('615', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('616', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('617', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('618', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('619', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('620', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('621', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('622', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('623', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('624', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('625', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('626', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('627', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('628', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('629', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('630', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('631', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('632', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('633', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('634', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('635', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('636', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('637', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('638', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('639', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('640', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('641', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('642', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('643', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('644', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('645', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('646', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('647', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('648', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('649', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('650', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('651', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('652', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('653', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('654', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('655', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('656', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('657', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('658', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('659', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('660', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('661', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('662', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('663', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('664', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('665', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('666', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('667', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('668', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('669', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('670', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('671', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('672', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('673', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('674', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('675', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('676', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('677', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('678', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('679', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('680', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('681', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('682', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('683', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('684', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('685', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('686', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('687', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('688', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('689', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('690', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('691', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('692', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('693', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('694', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('695', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('696', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('697', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('698', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('699', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('700', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('701', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('702', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('703', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('704', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('705', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('706', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('707', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('708', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('709', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('710', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('711', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('712', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('713', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('714', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('715', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('716', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('717', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('718', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('719', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('720', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('721', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('722', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('723', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('724', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('725', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('726', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('727', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('728', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('729', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('730', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('731', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('732', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('733', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('734', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('735', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('736', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('737', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('738', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('739', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('740', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('741', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('742', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('743', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('744', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('745', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('746', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('747', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('748', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('749', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('750', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('751', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('752', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('753', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('754', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('755', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('756', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('757', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('758', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('759', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('760', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('761', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('762', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('763', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('764', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('765', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('766', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('767', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('768', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('769', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('770', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('771', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('772', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('773', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('774', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('775', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('776', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('777', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('778', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('779', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('780', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('781', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('782', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('783', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('784', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('785', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('786', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('787', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('788', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('789', '10', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('790', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('791', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('792', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('793', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('794', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('795', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('796', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('797', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('798', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('799', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('800', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('801', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('802', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('803', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('804', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('805', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('806', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('807', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('808', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('809', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('810', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('811', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('812', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('813', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('814', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('815', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('816', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('817', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('818', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('819', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('820', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('821', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('822', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('823', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('824', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('825', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('826', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('827', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('828', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('829', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('830', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('831', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('832', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('833', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('834', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('835', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('836', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('837', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('838', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('839', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('840', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('841', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('842', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('843', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('844', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('845', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('846', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('847', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('848', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('849', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('850', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('851', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('852', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('853', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('854', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('855', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('856', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('857', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('858', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('859', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('860', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('861', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('862', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('863', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('864', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('865', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('866', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('867', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('868', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('869', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('870', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('871', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('872', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('873', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('874', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('875', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('876', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('877', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('878', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('879', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('880', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('881', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('882', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('883', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('884', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('885', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('886', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('887', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('888', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('889', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('890', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('891', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('892', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('893', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('894', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('895', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('896', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('897', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('898', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('899', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('900', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('901', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('902', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('903', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('904', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('905', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('906', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('907', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('908', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('909', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('910', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('911', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('912', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('913', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('914', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('915', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('916', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('917', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('918', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('919', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('920', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('921', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('922', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('923', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('924', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('925', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('926', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('927', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('928', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('929', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('930', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('931', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('932', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('933', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('934', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('935', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('936', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('937', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('938', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('939', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('940', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('941', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('942', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('943', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('944', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('945', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('946', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('947', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('948', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('949', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('950', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('951', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('952', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('953', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('954', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('955', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('956', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('957', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('958', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('959', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('960', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('961', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('962', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('963', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('964', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('965', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('966', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('967', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('968', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('969', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('970', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('971', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('972', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('973', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('974', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('975', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('976', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('977', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('978', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('979', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('980', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('981', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('982', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('983', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('984', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('985', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('986', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('987', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('988', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('989', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('990', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('991', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('992', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('993', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('994', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('995', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('996', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('997', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('998', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('999', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1000', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1001', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1002', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1003', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1004', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1005', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1006', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1007', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1008', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1009', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1010', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1011', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1012', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1013', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1014', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1015', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1016', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1017', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1018', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1019', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1020', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1021', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1022', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1023', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1024', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1025', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1026', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1027', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1028', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1029', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1030', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1031', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1032', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1033', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1034', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1035', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1036', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1037', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1038', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1039', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1040', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1041', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1042', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1043', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1044', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1045', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1046', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1047', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1048', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1049', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1050', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1051', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1052', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1053', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1054', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1055', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1056', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1057', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1058', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1059', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1060', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1061', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1062', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1063', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1064', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1065', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1066', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1067', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1068', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1069', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1070', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1071', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1072', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1073', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1074', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1075', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1076', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1077', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1078', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1079', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1080', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1081', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1082', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1083', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1084', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1085', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1086', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1087', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1088', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1089', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1090', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1091', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1092', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1093', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1094', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1095', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1096', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1097', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1098', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1099', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1100', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1101', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1102', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1103', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1104', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1105', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1106', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1107', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1108', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1109', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1110', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1111', '12', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1112', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1113', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1114', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1115', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1116', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1117', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1118', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1119', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1120', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1121', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1122', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1123', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1124', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1125', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1126', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1127', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1128', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1129', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1130', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1131', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1132', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1133', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1134', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1135', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1136', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1137', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1138', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1139', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1140', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1141', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1142', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1143', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1144', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1145', '12', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1146', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1147', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1148', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1149', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1150', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1151', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1152', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1153', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1154', '8', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1155', '8', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1156', '8', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1157', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1158', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1159', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1160', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1161', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1162', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1163', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1164', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1165', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1166', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1167', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1168', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1169', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1170', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1171', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1172', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1173', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1174', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1175', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1176', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1177', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1178', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1179', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1180', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1181', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1182', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1183', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1184', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1185', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1186', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1187', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1188', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1189', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1190', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1191', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1192', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1193', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1194', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1195', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1196', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1197', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1198', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1199', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1200', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1201', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1202', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1203', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1204', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1205', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1206', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1207', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1208', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1209', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1210', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1211', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1212', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1213', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1214', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1215', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1216', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1217', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1218', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1219', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1220', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1221', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1222', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1223', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1224', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1225', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1226', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1227', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1228', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1229', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1230', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1231', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1232', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1233', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1234', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1235', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1236', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1237', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1238', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1239', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1240', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1241', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1242', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1243', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1244', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1245', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1246', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1247', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1248', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1249', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1250', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1251', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1252', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1253', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1254', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1255', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1256', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1257', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1258', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1259', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1260', '12', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1261', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1262', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1263', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1264', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1265', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1266', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1267', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1268', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1269', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1270', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1271', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1272', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1273', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1274', '10', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1275', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1276', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1277', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1278', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1279', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1280', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1281', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1282', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1283', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1284', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1285', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1286', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1287', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1288', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1289', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1290', '13', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1291', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1292', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1293', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1294', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1295', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1296', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1297', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1298', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1299', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1300', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1301', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1302', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1303', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1304', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1305', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1306', '14', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1307', '14', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1308', '14', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1309', '14', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1310', '14', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1311', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1312', '14', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1313', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1314', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1315', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1316', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1317', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1318', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1319', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1320', '1', '10', '2018', '0');
INSERT INTO `cm_users` VALUES ('1321', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1322', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1323', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1324', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1325', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1326', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1327', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1328', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1329', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1330', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1331', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1332', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1333', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1334', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1335', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1336', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1337', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1338', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1339', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1340', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1341', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1342', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1343', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1344', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1345', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1346', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1347', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1348', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1349', '15', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1350', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1351', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1352', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1353', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1354', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1355', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1356', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1357', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1358', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1359', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1360', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1361', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1362', '15', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1363', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1364', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1365', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1366', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1367', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1368', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1369', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1370', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1371', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1372', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1373', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1374', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1375', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1376', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1377', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1378', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1379', '16', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1380', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1381', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1382', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1383', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1384', '16', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1385', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1386', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1387', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1388', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1389', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1390', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1391', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1392', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1393', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1394', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1395', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1396', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1397', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1398', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1399', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1400', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1401', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1402', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1403', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1404', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1405', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1406', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1407', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1408', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1409', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1410', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1411', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1412', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1413', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1414', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1415', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1416', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1417', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1418', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1419', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1420', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1421', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1422', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1423', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1424', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1425', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1426', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1427', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1428', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1429', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1430', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1431', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1432', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1433', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1434', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1435', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1436', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1437', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1438', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1439', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1440', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1441', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1442', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1443', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1444', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1445', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1446', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1447', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1448', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1449', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1450', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1451', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1452', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1453', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1454', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1455', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1456', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1457', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1458', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1459', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1460', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1461', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1462', '13', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1463', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1464', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1465', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1466', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1467', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1468', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1469', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1470', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1471', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1472', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1473', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1474', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1475', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1476', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1477', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1478', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1479', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1480', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1481', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1482', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1483', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1484', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1485', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1486', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1487', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1488', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1489', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1490', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1491', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1492', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1493', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1494', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1495', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1496', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1497', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1498', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1499', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1500', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1501', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1502', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1503', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1504', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1505', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1506', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1507', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1508', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1509', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1510', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1511', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1512', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1513', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1514', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1515', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1516', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1517', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1518', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1519', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1520', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1521', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1522', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1523', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1524', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1525', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1526', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1527', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1528', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1529', '13', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1530', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1531', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1532', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1533', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1534', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1535', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1536', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1537', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1538', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1539', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1540', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1541', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1542', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1543', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1544', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1545', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1546', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1547', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1548', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1549', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1550', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1551', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1552', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1553', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1554', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1555', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1556', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1557', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1558', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1559', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1560', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1561', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1562', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1563', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1564', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1565', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1566', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1567', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1568', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1569', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1570', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1571', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1572', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1573', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1574', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1575', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1576', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1577', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1578', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1579', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1580', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1581', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1582', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1583', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1584', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1585', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1586', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1587', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1588', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1589', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1590', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1591', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1592', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1593', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1594', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1595', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1596', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1597', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1598', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1599', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1600', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1601', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1602', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1603', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1604', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1605', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1606', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1607', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1608', '18', '1', '2018', '1');
INSERT INTO `cm_users` VALUES ('1609', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1610', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1611', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1612', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1613', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1614', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1615', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1616', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1617', '18', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1618', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1619', '18', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1620', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1621', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1622', '13', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1623', '13', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1624', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1625', '13', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1626', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1627', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1628', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1629', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1630', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1631', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1632', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1633', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1634', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1635', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1636', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1637', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1638', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1639', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1640', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1641', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1642', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1643', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1644', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1645', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1646', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1647', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1648', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1649', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1650', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1651', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1652', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1653', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1654', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1655', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1656', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1657', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1658', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1659', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1660', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1661', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1662', '19', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1663', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1664', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1665', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1666', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1667', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1668', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1669', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1670', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1671', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1672', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1673', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1674', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1675', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1676', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1677', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1678', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1679', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1680', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1681', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1682', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1683', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1684', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1685', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1686', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1687', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1688', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1689', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1690', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1691', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1692', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1693', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1694', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1695', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1696', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1697', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1698', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1699', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1700', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1701', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1702', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1703', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1704', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1705', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1706', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1707', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1708', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1709', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1710', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1711', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1712', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1713', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1714', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1715', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1716', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1717', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1718', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1719', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1720', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1721', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1722', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1723', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1724', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1725', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1726', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1727', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1728', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1729', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1730', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1731', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1732', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1733', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1734', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1735', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1736', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1737', '19', '1', '2018', '0');
INSERT INTO `cm_users` VALUES ('1738', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1739', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1740', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1741', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1742', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1743', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1744', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1745', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1746', '1', '19', '2018', '0');
INSERT INTO `cm_users` VALUES ('1747', '1', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1748', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1749', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1750', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1751', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1752', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1753', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1754', '20', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1755', '1', '20', '2018', '0');
INSERT INTO `cm_users` VALUES ('1756', '1', '20', '2018', '0');
INSERT INTO `cm_users` VALUES ('1757', '21', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1758', '21', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1759', '21', '0', '2018', '0');
INSERT INTO `cm_users` VALUES ('1760', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1761', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1762', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1763', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1764', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1765', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1766', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1767', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1768', '1', '21', '2018', '1');
INSERT INTO `cm_users` VALUES ('1769', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1770', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1771', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1772', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1773', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1774', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1775', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1776', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1777', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1778', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1779', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1780', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1781', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1782', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1783', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1784', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1785', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1786', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1787', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1788', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1789', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1790', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1791', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1792', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1793', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1794', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1795', '21', '0', null, '0');
INSERT INTO `cm_users` VALUES ('1796', '1', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1797', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1798', '1', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1799', '1', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1800', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1801', '1', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1802', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1803', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1804', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1805', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1806', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1807', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1808', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1809', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1810', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1811', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1812', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1813', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1814', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1815', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1816', '21', '19', null, '0');
INSERT INTO `cm_users` VALUES ('1817', '1', '1', null, '0');
INSERT INTO `cm_users` VALUES ('1818', '1', '25', null, '0');
INSERT INTO `cm_users` VALUES ('1819', '1', '27', null, '0');
INSERT INTO `cm_users` VALUES ('1820', '33', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1821', '34', '33', null, '0');
INSERT INTO `cm_users` VALUES ('1822', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1823', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1824', '32', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1825', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1826', '32', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1827', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1828', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1829', '32', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1830', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1831', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1832', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1833', '33', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1834', '32', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1835', '35', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1836', '36', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1837', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1838', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1839', '38', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1840', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1841', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1842', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1843', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1844', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1845', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1846', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1847', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1848', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1849', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1850', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1851', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1852', '32', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1853', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1854', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1855', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1856', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1857', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1858', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1859', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1860', '31', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1861', '31', '31', null, '1');
INSERT INTO `cm_users` VALUES ('1862', '31', '31', null, '0');
INSERT INTO `cm_users` VALUES ('1863', '31', '47', null, '0');
INSERT INTO `cm_users` VALUES ('1864', '49', '49', null, '1');
INSERT INTO `cm_users` VALUES ('1865', '49', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1866', '49', '49', null, '1');
INSERT INTO `cm_users` VALUES ('1867', '49', '49', null, '1');
INSERT INTO `cm_users` VALUES ('1868', '49', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1869', '49', '49', null, '1');
INSERT INTO `cm_users` VALUES ('1870', '32', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1871', '38', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1872', '55', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1873', '56', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1874', '49', '49', null, '1');
INSERT INTO `cm_users` VALUES ('1875', '36', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1876', '47', '58', null, '0');
INSERT INTO `cm_users` VALUES ('1877', '32', '52', null, '1');
INSERT INTO `cm_users` VALUES ('1878', '52', '52', null, '1');
INSERT INTO `cm_users` VALUES ('1879', '60', '52', null, '1');
INSERT INTO `cm_users` VALUES ('1880', '52', '32', null, '1');
INSERT INTO `cm_users` VALUES ('1881', '58', '47', null, '0');
INSERT INTO `cm_users` VALUES ('1882', '58', '61', null, '0');
INSERT INTO `cm_users` VALUES ('1883', '61', '58', null, '0');
INSERT INTO `cm_users` VALUES ('1884', '64', '64', null, '0');
INSERT INTO `cm_users` VALUES ('1885', '49', '49', null, '0');
INSERT INTO `cm_users` VALUES ('1886', '65', '62', null, '0');

-- ----------------------------
-- Table structure for cm_uservideo
-- ----------------------------
DROP TABLE IF EXISTS `cm_uservideo`;
CREATE TABLE `cm_uservideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `is_del` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_uservideo
-- ----------------------------
INSERT INTO `cm_uservideo` VALUES ('94', '29', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/bbd9a0ce1ab1e920965d3964b6b8da6a-tmp_aba59f30541a3713ed724ed596272f3149b56daf106356d6.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('95', '32', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/dbee20854825c2e9aba8fef09f6b447f-tmp_c59b7eeecd749e44efbb69590516c5dc66e424bf2ee2fd22.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('96', '32', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/ec901d2491f3265edc70f150c2a0bbf6-tmp_d82789d147c5c1c0ddbd3524ce57c349752af565829aa1c4.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('97', '39', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/a532cd5e5c3c98151c71bee4842b24ab-tmp_fa70141e63cc1d691e833ef95ca7cbfb.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('98', '31', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/870b3dcc59e0140779e7957b426e8620-wxfd95d065e748cb2b.o6zAJsy-Cqe6M6VIOyPEDUdkhk2Q.MG7itPXAjVBb693b61948644bd10e0d09c2403ad006b.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('99', '49', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/57896686f9aa66711de2af98a5472f06-tmp_227856e70f9f259ddcc40704e3109e98.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('100', '62', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/5e025caf0835d5064ba2c8d374196b30-tmp_f95f7ed09a8c5aeede791e6cee078d9714923a8e210a701b.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('101', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/02773291851b779eb2df75549764da9d-tmp_dd5c2dfdfde5ec4b36246125a2e3824f.mp4', '0');
INSERT INTO `cm_uservideo` VALUES ('102', '58', 'http://wafer-1256003361.cos.ap-guangzhou.myqcloud.com/6000fe36f3fed21cdb0132935c99fb27-tmp_02efc22991b51d4c438b2479db136d00.mp4', '0');

-- ----------------------------
-- Table structure for cm_user_info
-- ----------------------------
DROP TABLE IF EXISTS `cm_user_info`;
CREATE TABLE `cm_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openId` varchar(50) NOT NULL,
  `nickName` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `language` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `avatarUrl` varchar(200) NOT NULL,
  `opentime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cm_user_info
-- ----------------------------
INSERT INTO `cm_user_info` VALUES ('36', 'oOeOY5Z9KbLri6jFR9xCQ1JjZMvA', '隨遇而安，不欢而散＝宁缺勿滥', '2', 'zh_CN', 'Maoming', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Xhw4RmnYIPcORaoYlHFEncuElsCAXWnZIJt8asPytvPcB4qTScYIhLtXetLeibkVkFJQicqaFMmJqKhTkkKnicqEA/132', null);
INSERT INTO `cm_user_info` VALUES ('35', 'oOeOY5VbRlsZz2iK88m_wfk8R6SM', 'BALE·G', '1', 'zh_CN', '', 'Hamburg', 'Germany', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJXye8tgmHBibOGaWsXyEngg0khApL8w9uiaGQZ9hUDZRoqzduN3w4L1cECtBddibr7A3hzCicnASLvFg/132', null);
INSERT INTO `cm_user_info` VALUES ('34', 'oOeOY5eoDp_qmO82-Bj_q9VmCF4E', '????大瓜子 ????', '1', 'zh_CN', 'Ganzhou', 'Jiangxi', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83ep28W88H8okUwBXJbfpLyY46uhLcReXfRyMyUPv7cuKlACJ2LVIlAzW3wNCIWQWibz2fjFvVnljabA/132', null);
INSERT INTO `cm_user_info` VALUES ('33', 'oOeOY5axrSCVWTO-fMR683wPXxyo', '张灵夕', '0', 'zh_CN', '', '', '', 'https://wx.qlogo.cn/mmopen/vi_32/jYiafmBf2icsdG3uib41nhb5h0WGJ04nRJh9vm2TIo3pckpIXTZyyibBiaic36n9RXnEDfEtOUhibZRsv70QV8zTGSMhA/132', null);
INSERT INTO `cm_user_info` VALUES ('32', 'oOeOY5cjcCfmXinDTKMJ8KsdzK7s', 'Mr.杨', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/7SuJg00KQRdwWUP2IyoULiaZabBesku0b7x6qXkSVlxVxiacSjhHczeae4B4eYNo8ibNzDzOO1teuxCsGb9U4EDCg/132', null);
INSERT INTO `cm_user_info` VALUES ('49', 'oOeOY5UfFYJreJh5d73wWuoj3HCM', 'RonXu', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/MVEtpGDxryibiaHibTiaAmSRYibAHEcmovQXX3QtfXD8kYxNGBD0icDVY7LcsWQvhYIghKDstAN4VhnDgibnMPxReWZCg/132', null);
INSERT INTO `cm_user_info` VALUES ('47', 'oOeOY5WxxumCfoupcCFazTZqogj0', '漫步蜗牛', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTI0Wjshxm16cMzD2iaeUmu041icg4Co9s1qIJ0sqV0NUKSsW8hzGBvccayorLmLOfxjiaQG88cLIeUiag/132', null);
INSERT INTO `cm_user_info` VALUES ('30', 'oOeOY5ZJeveAgitug3tt5thgb4eA', '张清', '0', 'zh_CN', '', '', '', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIjZLu7uoOyNHxDRAU03CFgucloORWoFelDQeTTmoQicibL1wq254T4VQeWtNZBEkEes7DEiaUcHBLRg/132', null);
INSERT INTO `cm_user_info` VALUES ('37', 'oOeOY5ZnNg19X27_j6vTrdknpaBU', '小龙', '1', 'zh_CN', 'Yongzhou', 'Hunan', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/6ZISeXe5BzZWoRgibpVq0WibwDmJtRwd72c5kZ306fNuwsUITjKuL4L3Y5TaElnxKF82EdibVeHbHUI9ia2UU8bxiaA/132', null);
INSERT INTO `cm_user_info` VALUES ('38', 'oOeOY5eUAw34UUm7xYYyVC759-Zw', 'A         装修13972275656', '1', 'zh_CN', '', 'Berlin', 'Germany', 'https://wx.qlogo.cn/mmopen/vi_32/v03e7Qm87Jb5WRSyicVm15TJyQO6HT2LLiceHiceaSScRm1DpdciaeBM7uLQz9tnxGkqJLYnMg9iaic6lXhCBPK32pdg/132', null);
INSERT INTO `cm_user_info` VALUES ('39', 'oOeOY5Tos6Rhn6Y8NP8W8SRINIwQ', '大张', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJf0qdT5vP69ORFhNmEy5QibmLvTV8qYf366RiaWoUPXTXJkPxvtgVHqRbXHI8whyFjbOiaiaTJfFLpcA/132', null);
INSERT INTO `cm_user_info` VALUES ('40', 'oOeOY5an6r_PAUOX7AmWRJnhOwVA', 'Kaite', '1', 'zh_CN', '', 'Guizhou', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/ZxHWicn0eGvOyPn4FMCLQNU05qibfncoeNCcArdpRnayoclXZtbK0k19iaJNx796CtV8dB5sCOFx4yzicia1E5HHzXQ/132', null);
INSERT INTO `cm_user_info` VALUES ('41', 'oOeOY5WymGmZ_uhmWgelIDLKIGek', 'Emma', '2', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/UXHJn1yic5Nf97l4vI9nylAnk0d3k6c5BicFyswhnxU7cqx5FBvXwBNvxwqvvja1V4MVWfNbKIwNib5F9wAPzqAMA/132', null);
INSERT INTO `cm_user_info` VALUES ('42', 'oOeOY5WUXJ6v7PE8UbgHsOyU0yis', '杨爱民', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/kuRicCbWhUmhG4gCsjAicxibEDv06fgGv5ByicCpChzuHJgiaibqMYiaPJicibZFtU7qZkvibAaVjqVJeMZiaelZRibfA4ASMQ/132', null);
INSERT INTO `cm_user_info` VALUES ('43', 'oOeOY5QaO9wVEKDvstiQHsncubSM', '牛牛.', '1', 'zh_CN', 'Jingzhou', 'Hubei', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/mhoXC8JSA8eLiatuwGSBCHlvAZia22ugfjS27vd4OLCkQI9wVuzJA8Sr5eN4mqIiaZFE780AJYRsvoQdy8T4wq7gA/132', null);
INSERT INTO `cm_user_info` VALUES ('44', 'oOeOY5f56Bs0OCY4N5BDpRexRGa8', '柴进', '0', 'zh_CN', '', '', '', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIxGdK1tRoPoVX3ZTx8cGibSAmeHqFVoxI3njTKO4LuuJicyqfx3QIJrmeAk6lEiaA9QFuJibQsJDq7Og/132', null);
INSERT INTO `cm_user_info` VALUES ('45', 'oOeOY5fGyULzfBSuQnHGTPV3S0II', 'may', '2', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Dia7M60TQvzN5jgVk9H2A6n588LXCskeZjaCicYl8LveGO5SkVWRd7WA7jZB3MwA9kYBZPC90BicwW8wPghZu6huQ/132', null);
INSERT INTO `cm_user_info` VALUES ('50', 'oOeOY5W7xXAuRrUCE6bj6NPYjDjk', 'LH', '1', 'zh_CN', '', 'Dubai', 'United Arab Emirates', 'https://wx.qlogo.cn/mmopen/vi_32/Jzt7pqicAia93kabmuJ5icyCcOWJek0xPmXIUAqlOJBUtLCUhFv3umJozD62zowcZSReBQH3GSqjHtGbHGHun6bJA/132', null);
INSERT INTO `cm_user_info` VALUES ('51', 'oOeOY5f9lNHRHBPfoxAhJTbl-dqI', '三年。', '1', 'zh_CN', '', 'Dubai', 'United Arab Emirates', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eqVMLKa5NXlehhYQYhaaXlObwzBFY193vm1j3PJ52E2Jp6hNIy5fqSY53bnGt3CSQATUsowJ6Qsjw/132', null);
INSERT INTO `cm_user_info` VALUES ('52', 'oOeOY5SJcLpdzovt-WlAnvQBD4RI', '轨迹', '0', 'zh_CN', 'Wuhan', 'Hubei', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/00RFI6V3lq67XOnlicyJ1B773Tckrgqo7Qian7n9XC7h3EFEaO5WbSUZDpjLhxupDlke8faSUmPJQSiby3GcNxeFg/132', null);
INSERT INTO `cm_user_info` VALUES ('53', 'oOeOY5fKnyqgS2FPn7aAb13NC0YQ', 'test', '0', 'zh_CN', '', '', '', 'https://wx.qlogo.cn/mmopen/vi_32/HZ9UeezIaJkXicvuO9pdBZUgGJ9nkdUjByxiaS3yWI5n5gUgbScxYPcGMnnR0EIprlcgu5A024QS0f9Fho8aeUcA/132', null);
INSERT INTO `cm_user_info` VALUES ('54', 'oOeOY5bVp5I8NSrxcRGMIli0Jb9Q', '吴用', '0', 'zh_CN', '', '', '', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLlAWhNHHibHoUXDKybUCQAFndhicVlmXYQ71SLAt9kQVXexx4y09G4lSk2g7K8jHJpxLEDFHU3pxGw/132', null);
INSERT INTO `cm_user_info` VALUES ('55', 'oOeOY5ewg0NONaTb_f9L4cPlo5Ng', '后知后觉', '2', 'zh_CN', 'Shiyan', 'Hubei', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/EDqU1F8x2EXThMHlBbH26bsScj5dDSpLcyRhnH6u8UnmnsiaHibWqDHzp45xTSOQhzykEral49DQD8TSxHrerXKw/132', null);
INSERT INTO `cm_user_info` VALUES ('56', 'oOeOY5bARaIeHCB_zVx6gVxsbOxk', '莫忘', '1', 'zh_CN', 'Shiyan', 'Hubei', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eroG8b8qCia3W7oQP8sn30WCic3C2gGnDV0wLuA0xRBicufRYd1icAxhvs7WpukXqWSwU6kIoMhJvCopQ/132', null);
INSERT INTO `cm_user_info` VALUES ('57', 'oOeOY5a_nAxqqt_m1GD0S-6o-LFo', 'Surrender', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/dm8LIKS2OJXLHgrAgINISajYzG6sJPAjbQzNhOibOmuZFicic563O4b8jbTicorXFNNakj85ZlMkrCyxCWaDic4dMKg/132', null);
INSERT INTO `cm_user_info` VALUES ('58', 'oOeOY5e-ycJBUPXkabGd2vs8sn_g', 'Mr.K', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/EfN5mVsTXIibHPeyUWGVeicmva6ex5pTduo7FTRHptiahiacyHBezN4XK1p0X9OLunBY2rpnib9QBD3KTIRELhzqg5w/132', null);
INSERT INTO `cm_user_info` VALUES ('59', 'oOeOY5e-SyTJBxnmJzDW8DNLAyAc', '莲建宇蒲小姐13168783737', '2', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/N1OSkQgfVOlXbiaM3fnaK2CxXJwHRx8fx1BvFNLHeqzWnDYG83aahAmZJ72o7CjFGLEvEkWJxyLZjs97FeWh8AQ/132', null);
INSERT INTO `cm_user_info` VALUES ('60', 'oOeOY5e-qTWPZB3Uud5oDzvpRIis', '小楠', '1', 'zh_CN', 'Yangyang', 'Hubei', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/SCyOjjg7ic88Z3O0AzA4SvRDk1kK0EDOZWjQEmuQUvvYHLartW2atR0Eiae7IlGnNEjEDicxc4THIRG91HO9O908g/132', null);
INSERT INTO `cm_user_info` VALUES ('61', 'oOeOY5cTZLBRxDoiybj37ObMCdsY', '奥杰', '1', 'zh_CN', '', '', 'Honduras', 'https://wx.qlogo.cn/mmopen/vi_32/EwmZ8EEMC0sHTuWjibpB37SxeicJZPOCw6sB7P2eTq7iblZ1mIibAPTfCiaKlyiahHHRsv44icUeAAjThFraYUyHSO8rA/132', null);
INSERT INTO `cm_user_info` VALUES ('62', 'oOeOY5YOORpch5lkLbel_vSSY7EU', '区块链、军，歌', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/ibp6PtS75aENCiaG1QueQn0HEoCkz2dGM6M9lNicofbibnxiatdlUCQAP9nz0qSQBSZPyHkIpLTkBXzgnLIVpOqgatw/132', null);
INSERT INTO `cm_user_info` VALUES ('63', 'oOeOY5diLYMSp55yo1nM42W15PG8', '金星', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKyZmfA7eWBVG11Vomib9SxOyVL47DC9JKwDHnibWdoQicWE8I6JRGAwMSuAE7XZow2J45enIXLoaHgg/132', null);
INSERT INTO `cm_user_info` VALUES ('64', 'oOeOY5awO5hXzrJL2ve37JhkA1gI', '中亚硅谷夏先生:13670191890', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/nCLXdjpDP7oaAy5ibfxX9bAcar9CoWKJTTXYiaa0XILdIIHqicib0JcEqy8Y0kscBBIVUT1o5OJAaWKCSkdOZTibxkA/132', null);
INSERT INTO `cm_user_info` VALUES ('65', 'oOeOY5Td79K-NuzluqpIQyCnnoTw', '萧亚', '2', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTK32EqYFKRvwL0JAg3Y3Dqa2PMGGE3d6o6xgs83kkM9qoDMNgqeB8ulTJyZoWqWSqaibIxaFhs8BGA/132', null);
INSERT INTO `cm_user_info` VALUES ('66', 'oOeOY5WTTgg_53KfYduiG5P32j9U', '七月', '2', 'zh_CN', '', 'North Shore', 'New Zealand', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJKlLhxOoKicPm9rX5P1cDHzL4pRukOLszHQfrbkpcxKQI8xKMdbc7Ced5aHsibOS3mFbCLPQmpovXQ/132', null);
INSERT INTO `cm_user_info` VALUES ('67', 'oOeOY5Z-HhCV-gQbxrE0ERtBpixo', '炎热的夏天', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/DEIe0hJiby3ic52ABGxHAH6NZrjC3U0BbgxeeibrplGh31KIOIe5ur1Pp86zf1rUALQjL4rwlWSvIORH3BIDsLcEg/132', null);
INSERT INTO `cm_user_info` VALUES ('68', 'oOeOY5VumZM_vaMrdB-d0YVkT3go', 'etclij', '1', 'zh_CN', 'Shenzhen', 'Guangdong', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eremdfYmic4Mp4uc6pk2Rrrx7BUAibuvHHkYDQrAfopMTgxw6BPdF0sjZxsJ85DRictHDQVx9JGESEXg/132', null);
INSERT INTO `cm_user_info` VALUES ('69', 'oOeOY5fdXZiw3Y69_si_wnYkBawY', '小叶子', '2', 'zh_CN', 'Dalian', 'Liaoning', 'China', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIej063rpdVze91riauge6oRQKwZWb8ZtYialPVBs7ggdwX9G1S0JCCKduCWCpV5Q9s9c9ngVRVy5AQ/132', null);

-- ----------------------------
-- Table structure for cm_video
-- ----------------------------
DROP TABLE IF EXISTS `cm_video`;
CREATE TABLE `cm_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divid` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_video
-- ----------------------------

-- ----------------------------
-- Table structure for cm_white
-- ----------------------------
DROP TABLE IF EXISTS `cm_white`;
CREATE TABLE `cm_white` (
  `id` int(11) NOT NULL,
  `divid` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cm_white
-- ----------------------------
