/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mediqueenclinic

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-20 16:03:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_th` text,
  `title_en` text,
  `detail_th` text,
  `detail_en` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES ('1', 'ดดด', 'fff', '<p class=\"p_page\">จุดเริ่มต้นเมดิควีนส์ คลินิก เกิดจากการที่เรามีความต้องการที่จะดูแลลูกค้าของเราเองได้อย่างใกล้ชิด ต้องการให้บริการที่ดีที่สุด ในราคามาตรฐาน ใช้สินค้าที่ดีที่สุดที่จะหาซื้อได้ พร้อมทั้งการให้บริการแบบกันเองและจะพัฒนาด้านการบริการให้ดีมากขึ้นเรื่อยๆ ปลอดภัย ไว้ใจได้ ด้วยแพทย์ที่มีประสบการณ์งานด้านความงาม</p>\n<div class=\"container group_img\">\n<div class=\"row\">\n<div class=\"col-sm img_page\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/about/about_pic1.jpg?1552827537194\" alt=\"about_pic1\" /></div>\n<div class=\"col-sm img_page\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/about/about_pic2.jpg?1552827548345\" alt=\"about_pic2\" /></div>\n<div class=\"col-sm img_page\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/about/about_pic3.jpg?1552827557161\" alt=\"about_pic3\" /></div>\n<div class=\"col-sm img_page\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/about/about_pic4.jpg?1552827566106\" alt=\"about_pic4\" /></div>\n<div class=\"col-sm img_page\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/about/about_pic5.jpg?1552827574794\" alt=\"about_pic5\" /></div>\n<div class=\"col-sm img_page\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/about/about_pic6.jpg?1552827584042\" alt=\"about_pic6\" /></div>\n</div>\n</div>\n<p>&nbsp;</p>\n<div class=\"title_page2\">มาตรฐานความปลอดภัย</div>\n<p class=\"p_page\">จุดเริ่มต้นเมดิควีนส์ คลินิก เกิดจากการที่เรามีความต้องการที่จะดูแลลูกค้าของเราเองได้อย่างใกล้ชิด ต้องการให้บริการที่ดีที่สุด ในราคามาตรฐาน ใช้สินค้าที่ดีที่สุดที่จะหาซื้อได้ พร้อมทั้งการให้บริการแบบกันเองและจะพัฒนาด้านการบริการให้ดีมากขึ้นเรื่อยๆ ปลอดภัย ไว้ใจได้ ด้วยแพทย์ที่มีประสบการณ์งานด้านความงาม</p>\n<div class=\"container group_img\">\n<div class=\"row\">\n<div class=\"col-sm img_page\"><iframe src=\"https://www.youtube.com/embed/2fqdbpEcdbw\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\n<div class=\"col-sm img_page\"><iframe src=\"https://www.youtube.com/embed/r2ZMqZk1qOg\" width=\"100%\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\n</div>\n</div>', '', '2019-03-07 23:03:56', '2019-03-17 19:59:49');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address_th` text,
  `tel_th` text,
  `time_th` text,
  `address_en` text,
  `tel_en` text,
  `time_en` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('1', '<p><span style=\"color: #800080;\"><strong>สาขา พัทยา</strong></span><br />212/10-12 ม.5 ถ.พัทยาเหนือ ต.นาเกลือ อ.บางละมุง จ.ชลบุรี 20150 <br /><br /><span style=\"color: #800080;\"><strong>สาขา ยโสธร</strong></span><br />9 ถ.ร่วมใจ ต.ในเมือง อ.เมือง จ.ยโสธร 35000</p>', '<p><span style=\"color: #800080;\"><strong>สาขา พัทยา</strong></span>&nbsp;(+66) 095 362 6235<br /><span style=\"color: #800080;\"><strong>สาขา ยโสธร</strong></span>&nbsp;(+66) 096 642 4636</p>', '<p><span style=\"color: #800080;\"><strong>สาขา พัทยา</strong></span><br />เปิดทำการ อังคาร-อาทิตย์ เวลา 10:00-20:00น.(มีแพทย์ทุกวัน)</p>\n<p><span style=\"color: #800080;\"><strong>สาขา ยโสธร</strong></span><br />เปิดทำการทุกวัน 10:00-20:00น. (แพทย์เข้าวันจันทร์)</p>', '<p><span style=\"color: #800080;\"><strong>สาขา Pattaya</strong></span><br />212/10-12 ม.5 ถ.พัทยาเหนือ ต.นาเกลือ อ.บางละมุง จ.ชลบุรี 20150 <br /><br /><span style=\"color: #800080;\"><strong>สาขา Yasotorn</strong></span><br />9 ถ.ร่วมใจ ต.ในเมือง อ.เมือง จ.ยโสธร 35000</p>', '', '');

-- ----------------------------
-- Table structure for doctors
-- ----------------------------
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `name_th` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `nickname_th` varchar(255) DEFAULT NULL,
  `nickname_en` varchar(255) DEFAULT NULL,
  `position_th` varchar(255) DEFAULT NULL,
  `position_en` varchar(255) DEFAULT NULL,
  `exp_th` text,
  `exp_en` text,
  `expert_th` text,
  `expert_en` text,
  `youtube` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of doctors
-- ----------------------------
INSERT INTO `doctors` VALUES ('1', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-17 20:56:19', 'public');
INSERT INTO `doctors` VALUES ('2', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('3', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('4', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('5', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('6', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('7', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('8', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('9', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');
INSERT INTO `doctors` VALUES ('10', '5c7e57ee31f73.jpg', 'นพ.ณธกร วรวัชรธนโชค', '', 'คุณหมอกอล์ฟ', '', 'แพทย์ผู้เชี่ยวชาญไหมปรับรูปหน้า', '', 'แพทย์ผู้เชี่ยวชาญ แพทย์ประจำเมดิค คลินิก แพทย์ประจำเมดิควีนส์คลินิก แพทย์ประจำ เมดิควีนส์คลินิก พทย์ประจำเมดิควีนส์คลินิก แพทย์', '', 'แพทย์ผู้เชี่ยวชาญความสวยงาม ร้อยไหม cog, ไหมก้างปลา, ไหมเงี่ยง ยกกระชับ ฟิลเลอร์ (เติมเต็มร่องลึก) ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก ใต้ตา, แก้มตอบ, จมูก, คาง ร้อยไหมจมูก', '', 'https://www.youtube.com/watch?v=QTO65nAxKG4', '2019-03-05 18:05:18', '2019-03-05 18:06:37', 'public');

-- ----------------------------
-- Table structure for hilights
-- ----------------------------
DROP TABLE IF EXISTS `hilights`;
CREATE TABLE `hilights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_th` varchar(255) DEFAULT NULL,
  `img_en` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hilights
-- ----------------------------
INSERT INTO `hilights` VALUES ('8', '5c814a24a9b85.jpg', '5c814a24b639e.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-07 23:43:38', 'public');
INSERT INTO `hilights` VALUES ('7', '5c814a24a9b85.jpg', '5c814a24b639e.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-07 23:43:38', 'public');
INSERT INTO `hilights` VALUES ('9', '5c814a24a9b85.jpg', '5c814a24b639e.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-07 23:43:38', 'public');
INSERT INTO `hilights` VALUES ('10', '5c814a24a9b85.jpg', '5c814a24b639e.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-07 23:43:38', 'public');
INSERT INTO `hilights` VALUES ('11', '5c814a24a9b85.jpg', '5c814a24b639e.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-07 23:43:38', 'public');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `message` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('2', 'name', 'example@example.com', '1234567890', 'message', '2019-03-18 18:03:43', '2019-03-18 18:03:43');
INSERT INTO `messages` VALUES ('3', 'name', 'example@example.com', '1234567890', 'message', '2019-03-18 18:10:42', '2019-03-18 18:10:42');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `detail_th` text,
  `detail_en` text,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'BPH EQ+ Hydrocomplex Soothing Aqua Gel (บีพีเอช อีคิว+ ไฮโดรคอมเพล็กซ์ ซูตติ้ง อควา เจล)', '', 'มอยเจอร์ไรเซอร์เนื้อสัมผัสเจล ที่จะเปลี่ยนเป็นเม็ดน้ำแร่เมื่อสัมผัสผิว และซึมซาบสู่ผิวอย่างรวดเร็ว อันเป็นนวัตกรรมความงามอันเป็นเอกสิทธิ์เฉพาะจากแบรนด์ “BPH” (บีพีเอช) ด้วยแร่ธาตุกว่า 20 ชนิดสกัดจากเกลือทะเลเดดซี (Dead Sea Salt) ช่วยปลอบประโลม ปรับสมดุล กักเก็บและเพิ่มความชุ่มชื้นของผิว', '', '5c7e9089af4bb.jpg', '฿1,500.00', '2019-03-05 22:06:49', '2019-03-05 22:07:51', 'public');

-- ----------------------------
-- Table structure for promotions
-- ----------------------------
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `detail_th` text,
  `detail_en` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promotions
-- ----------------------------
INSERT INTO `promotions` VALUES ('2', 'โปรโมชั่นประจำเดือนมีนาคม 2562', 'Promotions!!! March 2019', '<div class=\"pro2\"><strong>โปรโมชั่น สุดคุ้ม ! ประจำเดือนมีนาคม</strong></div>\n<div class=\"pro3\">แก้ปัญหาผิวหน้า ยกกระชับสัดส่วน ผิวหน้าดูเปล่งปลั่งเต่งตึง<br />ด้วยนวัตกรรมใหม่ ไปดูกันเลยว่ามีอะไรกันบ้าง</div>\n<div class=\"pro3\">\n<table style=\"width: 100%; border-collapse: collapse;\" border=\"0\" cellpadding=\"20\">\n<tbody>\n<tr>\n<td style=\"width: 50%;\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/promotion/pro01.jpg?1552828122723\" alt=\"pro01\" /></td>\n<td style=\"width: 50%;\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/promotion/pro02.jpg?1552828128505\" alt=\"pro02\" /></td>\n</tr>\n<tr>\n<td style=\"width: 50%;\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/promotion/pro03.jpg?1552828134178\" alt=\"pro03\" /></td>\n<td style=\"width: 50%;\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/promotion/pro04.jpg?1552828139674\" alt=\"pro04\" /></td>\n</tr>\n<tr>\n<td style=\"width: 50%;\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/promotion/pro05.jpg?1552828144866\" alt=\"pro05\" /></td>\n<td style=\"width: 50%;\"><img src=\"http://localhost/mediqueenclinic/media/tinymce_file_manager/source/promotion/pro06.jpg?1552828150146\" alt=\"pro06\" /></td>\n</tr>\n</tbody>\n</table>\n</div>', '<p>ddd</p>', '2019-03-07 23:16:56', '2019-03-17 20:18:01', 'draft');

-- ----------------------------
-- Table structure for promotion_hilights
-- ----------------------------
DROP TABLE IF EXISTS `promotion_hilights`;
CREATE TABLE `promotion_hilights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_th` varchar(255) DEFAULT NULL,
  `img_en` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promotion_hilights
-- ----------------------------
INSERT INTO `promotion_hilights` VALUES ('7', '5c867ae6bed62.jpg', '5c867ae6c49fb.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-11 22:12:38', 'public');
INSERT INTO `promotion_hilights` VALUES ('8', '5c867ae6bed62.jpg', '5c867ae6c49fb.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-11 22:12:38', 'public');
INSERT INTO `promotion_hilights` VALUES ('9', '5c867ae6bed62.jpg', '5c867ae6c49fb.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-11 22:12:38', 'public');
INSERT INTO `promotion_hilights` VALUES ('10', '5c867ae6bed62.jpg', '5c867ae6c49fb.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-11 22:12:38', 'public');
INSERT INTO `promotion_hilights` VALUES ('11', '5c867ae6bed62.jpg', '5c867ae6c49fb.jpg', 'http://www.google.com', '2019-03-07 23:43:16', '2019-03-11 22:12:38', 'public');

-- ----------------------------
-- Table structure for promotion_lists
-- ----------------------------
DROP TABLE IF EXISTS `promotion_lists`;
CREATE TABLE `promotion_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promotion_lists
-- ----------------------------
INSERT INTO `promotion_lists` VALUES ('2', 'โปรโมชั่นประจำเดือนมีนาคม 2562', 'Promotions!!! March 2019', '2019-03-07 23:16:56', '2019-03-18 11:36:06', 'public');

-- ----------------------------
-- Table structure for promotion_list_details
-- ----------------------------
DROP TABLE IF EXISTS `promotion_list_details`;
CREATE TABLE `promotion_list_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `promotion_list_id` int(11) DEFAULT NULL,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promotion_list_details
-- ----------------------------
INSERT INTO `promotion_list_details` VALUES ('18', '2', 'กำจัดขน Quanta', 'กำจัดขน Quanta', 'เริ่มต้น 999.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');
INSERT INTO `promotion_list_details` VALUES ('19', '2', 'หน้ากระชับ วีเชฟ', 'หน้ากระชับ วีเชฟ', '14,900.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');
INSERT INTO `promotion_list_details` VALUES ('20', '2', 'กำจัดขนถาวร', 'กำจัดขนถาวร', '9,990.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');
INSERT INTO `promotion_list_details` VALUES ('21', '2', 'กำจัดขน Bikini, Brazillian', 'กำจัดขน Bikini, Brazillian', '2,000.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');
INSERT INTO `promotion_list_details` VALUES ('22', '2', 'หน้าผอม เรียว ทันใจ', 'หน้าผอม เรียว ทันใจ', '15,900.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');
INSERT INTO `promotion_list_details` VALUES ('23', '2', 'หน้า ใสเด้ง', 'หน้า ใสเด้ง', '19,900.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');
INSERT INTO `promotion_list_details` VALUES ('24', '2', 'ร้อยไหมเหมาทั้งหน้า', 'ร้อยไหมเหมาทั้งหน้า', '24,900.-', '2019-03-18 11:36:06', '2019-03-18 11:36:06');

-- ----------------------------
-- Table structure for review_images
-- ----------------------------
DROP TABLE IF EXISTS `review_images`;
CREATE TABLE `review_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review_images
-- ----------------------------
INSERT INTO `review_images` VALUES ('3', 'รีวิว LIPOSUCTION', 'รีวิว LIPOSUCTION', '2019-03-16 00:21:02', '2019-03-18 13:26:00', 'public');
INSERT INTO `review_images` VALUES ('5', 'รีวิวเสริมจมูก ทรงต่างๆ by Mediqueen clinic', 'รีวิวเสริมจมูก ทรงต่างๆ by Mediqueen clinic', '2019-03-18 13:34:07', '2019-03-18 13:34:07', 'public');

-- ----------------------------
-- Table structure for review_image_details
-- ----------------------------
DROP TABLE IF EXISTS `review_image_details`;
CREATE TABLE `review_image_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `review_image_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review_image_details
-- ----------------------------
INSERT INTO `review_image_details` VALUES ('21', '3', '5c8f39f89e12a.jpg', '2019-03-18 13:26:00', '2019-03-18 13:26:00');
INSERT INTO `review_image_details` VALUES ('22', '3', '5c8f39f8cf078.jpg', '2019-03-18 13:26:00', '2019-03-18 13:26:00');
INSERT INTO `review_image_details` VALUES ('23', '3', '5c8f39f8f093b.jpg', '2019-03-18 13:26:00', '2019-03-18 13:26:00');
INSERT INTO `review_image_details` VALUES ('24', '3', '5c8f39f909db7.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('25', '3', '5c8f39f917dc6.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('26', '3', '5c8f39f922156.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('27', '3', '5c8f39f9326bc.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('28', '3', '5c8f39f94085c.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('29', '3', '5c8f39f94ce88.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('30', '3', '5c8f39f95b150.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('31', '3', '5c8f39f9695dc.jpg', '2019-03-18 13:26:01', '2019-03-18 13:26:01');
INSERT INTO `review_image_details` VALUES ('32', null, '5c8f3b4e877c6.jpg', '2019-03-18 13:31:42', '2019-03-18 13:31:42');
INSERT INTO `review_image_details` VALUES ('33', null, '5c8f3b4ea3fe9.jpg', '2019-03-18 13:31:42', '2019-03-18 13:31:42');
INSERT INTO `review_image_details` VALUES ('34', null, '5c8f3b4eb2380.jpg', '2019-03-18 13:31:42', '2019-03-18 13:31:42');
INSERT INTO `review_image_details` VALUES ('35', null, '5c8f3b4ec089d.jpg', '2019-03-18 13:31:42', '2019-03-18 13:31:42');
INSERT INTO `review_image_details` VALUES ('36', null, '5c8f3b4ed0ce9.jpg', '2019-03-18 13:31:42', '2019-03-18 13:31:42');
INSERT INTO `review_image_details` VALUES ('37', null, '5c8f3b4ee10a7.jpg', '2019-03-18 13:31:42', '2019-03-18 13:31:42');
INSERT INTO `review_image_details` VALUES ('38', null, '5c8f3b4f011ad.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('39', null, '5c8f3b4f0b4bc.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('40', null, '5c8f3b4f198a3.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('41', null, '5c8f3b4f23a13.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('42', null, '5c8f3b4f2ff5c.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('43', null, '5c8f3b4f3c300.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('44', null, '5c8f3b4f486c3.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('45', null, '5c8f3b4f5693d.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('46', null, '5c8f3b4f60d71.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('47', null, '5c8f3b4f6eeb5.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('48', null, '5c8f3b4f792f4.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('49', null, '5c8f3b4f85704.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('50', null, '5c8f3b4f93baa.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('51', null, '5c8f3b4f9fb03.jpg', '2019-03-18 13:31:43', '2019-03-18 13:31:43');
INSERT INTO `review_image_details` VALUES ('52', '5', '5c8f3bdfc4b5f.jpg', '2019-03-18 13:34:07', '2019-03-18 13:34:07');
INSERT INTO `review_image_details` VALUES ('53', '5', '5c8f3bdfd6855.jpg', '2019-03-18 13:34:07', '2019-03-18 13:34:07');
INSERT INTO `review_image_details` VALUES ('54', '5', '5c8f3bdfe0c15.jpg', '2019-03-18 13:34:07', '2019-03-18 13:34:07');
INSERT INTO `review_image_details` VALUES ('55', '5', '5c8f3bdfeaea4.jpg', '2019-03-18 13:34:07', '2019-03-18 13:34:07');
INSERT INTO `review_image_details` VALUES ('56', '5', '5c8f3be000eca.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('57', '5', '5c8f3be009156.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('58', '5', '5c8f3be027bdd.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('59', '5', '5c8f3be035f47.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('60', '5', '5c8f3be04436c.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('61', '5', '5c8f3be0526d5.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('62', '5', '5c8f3be060bc5.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('63', '5', '5c8f3be074f05.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('64', '5', '5c8f3be0811f4.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('65', '5', '5c8f3be08f7f5.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('66', '5', '5c8f3be09d8ae.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('67', '5', '5c8f3be0b21b4.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('68', '5', '5c8f3be0bc219.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('69', '5', '5c8f3be0c63e6.jpg', '2019-03-18 13:34:08', '2019-03-18 13:34:08');
INSERT INTO `review_image_details` VALUES ('70', '5', '5c8f3be10d7c3.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('71', '5', '5c8f3be125b49.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('72', '5', '5c8f3be12fc15.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('73', '5', '5c8f3be13c045.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('74', '5', '5c8f3be148190.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('75', '5', '5c8f3be156877.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('76', '5', '5c8f3be164a9a.jpg', '2019-03-18 13:34:09', '2019-03-18 13:34:09');
INSERT INTO `review_image_details` VALUES ('108', null, '5c8f7e61c2492.jpg', '2019-03-18 18:17:53', '2019-03-18 18:17:53');
INSERT INTO `review_image_details` VALUES ('109', null, '5c8f7e61cc01d.jpg', '2019-03-18 18:17:53', '2019-03-18 18:17:53');
INSERT INTO `review_image_details` VALUES ('110', null, '5c8f7e61d415b.jpg', '2019-03-18 18:17:53', '2019-03-18 18:17:53');
INSERT INTO `review_image_details` VALUES ('111', null, '5c8f7e61e08e4.jpg', '2019-03-18 18:17:53', '2019-03-18 18:17:53');
INSERT INTO `review_image_details` VALUES ('112', null, '5c8f7e61ee8d9.jpg', '2019-03-18 18:17:53', '2019-03-18 18:17:53');
INSERT INTO `review_image_details` VALUES ('113', null, '5c8f7e6206b68.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('114', null, '5c8f7e6210ec0.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('115', null, '5c8f7e621d187.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('116', null, '5c8f7e62273ec.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('117', null, '5c8f7e623846e.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('118', null, '5c8f7e6249d65.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('119', null, '5c8f7e62562d2.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('120', null, '5c8f7e6262489.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('121', null, '5c8f7e626e7e1.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('122', null, '5c8f7e627a9a5.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('123', null, '5c8f7e6284d44.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('124', null, '5c8f7e6291e3c.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('125', null, '5c8f7e62bdf33.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('126', null, '5c8f7e62ca0f9.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('127', null, '5c8f7e62d8694.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('128', null, '5c8f7e62e4870.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('129', null, '5c8f7e62f0ae5.jpg', '2019-03-18 18:17:54', '2019-03-18 18:17:54');
INSERT INTO `review_image_details` VALUES ('130', null, '5c8f7e630798c.jpg', '2019-03-18 18:17:55', '2019-03-18 18:17:55');
INSERT INTO `review_image_details` VALUES ('131', null, '5c8f7e6314f71.jpg', '2019-03-18 18:17:55', '2019-03-18 18:17:55');
INSERT INTO `review_image_details` VALUES ('132', null, '5c8f7e63211a0.jpg', '2019-03-18 18:17:55', '2019-03-18 18:17:55');

-- ----------------------------
-- Table structure for review_videos
-- ----------------------------
DROP TABLE IF EXISTS `review_videos`;
CREATE TABLE `review_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review_videos
-- ----------------------------
INSERT INTO `review_videos` VALUES ('7', 'Review ร้อยไหมจมูก', 'Review ร้อยไหมจมูก', 'https://www.youtube.com/watch?v=r2ZMqZk1qOg', '2019-03-07 23:43:16', '2019-03-18 12:47:07', 'public');
INSERT INTO `review_videos` VALUES ('8', 'Review ร้อยไหมจมูก', 'Review ร้อยไหมจมูก', 'https://www.youtube.com/watch?v=r2ZMqZk1qOg', '2019-03-07 23:43:16', '2019-03-18 12:32:24', 'public');
INSERT INTO `review_videos` VALUES ('9', 'Review ร้อยไหมจมูก', 'Review ร้อยไหมจมูก', 'https://www.youtube.com/watch?v=r2ZMqZk1qOg', '2019-03-07 23:43:16', '2019-03-18 12:32:24', 'public');
INSERT INTO `review_videos` VALUES ('10', 'Review ร้อยไหมจมูก', 'Review ร้อยไหมจมูก', 'https://www.youtube.com/watch?v=r2ZMqZk1qOg', '2019-03-07 23:43:16', '2019-03-18 12:32:24', 'public');
INSERT INTO `review_videos` VALUES ('11', 'Review ร้อยไหมจมูก', 'Review ร้อยไหมจมูก', 'https://www.youtube.com/watch?v=r2ZMqZk1qOg', '2019-03-07 23:43:16', '2019-03-18 12:32:24', 'public');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_category_id` int(11) DEFAULT NULL,
  `title_th` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `subtitle_th` varchar(255) DEFAULT NULL,
  `subtitle_en` varchar(255) DEFAULT NULL,
  `detail_th` text,
  `detail_en` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', '1', 'เมโสแฟต', '', 'สลายไขมันส่วนเกิน', '', '<div class=\"col-sm-6 col-xs-12 meso\">\n<p>เป็นการฉีดตัวยาเฉพาะเข้าไปในชั้นไขมัน เพื่อสลายไขมันส่วนเกิน ลดเซลล์ลูไลท์กระตุ้นการสร้างคอลลาเจนใหม่ ทำให้ผิวไม่หย่อนคล้อย หลังการสลายไขมันเมื่อตัวยาถูกฉีดเข้าไปในชั้นไขมัน จะไปทำลาย เซลล์ไขมัน เมื่อเซลล์ไขมันตายก็จะกลายเป็นของเสีย ซึ่งของเสียจะถูก ขับออกทางระบบน้ำเหลือง</p>\n<span class=\"title2-meso\">เหมาะกับผู้ที่มีปัญหาแบบไหนบ้าง ?</span>\n<p>เหมาะสำหรับผู้ที่มีปัญหาเรื่องไขมันบริเวณใบหน้า เช่น แก้ม เหนียง ที่ทำให้รูปหน้าไม่เรียวและดูหน้ากลม และต้องการกำจัดไขมัน ปรับรูป หน้าให้เล็กลง</p>\n</div>\n<div class=\"col-sm-6 meso2\"><img class=\"img-meso\" src=\"http://localhost/mediqueenclinic/themes/demo_mediqueenclinic/images/service/meso.jpg\" alt=\"...\" /></div>\n<div class=\"clearfix\">&nbsp;</div>\n<div class=\"col-sm-12\"><span class=\"title2-meso\">ขั้นตอนการรักษา</span>\n<div class=\"num-meso\">\n<ol>\n<li>แพทย์จะฉีดยาเข้าไปในชั้นไขมันหลายๆ จุดและแต่ละจุดมีระยะห่างสม่ำเสมอกันทั่วบริเวณที่ต้องการรักษา</li>\n<li>หลังฉีดทันทีจะมีอาการบวมและจะบวมมากที่สุดในวันรุ่งขึ้น โดยอาการบวมจะค่อยๆ ลดลงประมาณ 2-5 วัน ซึ่งผิวจะเริ่มกระชับในสัปดาห์ที่ 5 และกระชับ ได้มากที่สุดในสัปดาห์ที่ 8</li>\n<li>ต้องทำการเข้ามาฉีดอย่างต่อเนื่องตามคำแนะนำของแพทย์เพื่อผลลัพธ์ที่ชัดเจน</li>\n</ol>\n</div>\n<span class=\"title2-meso\">ข้อปฎิบัติหลังการฉีด</span>\n<div class=\"num-meso\">\n<ol>\n<li>ควรดื่มน้ำมาก ๆ เพราะร่างกายจะกำจัดไขมันส่วนใหญ่ออกทางปัสสาวะ ดังนั้นยิ่งดื่มน้ำมากเท่าไหร่ ไขมันจะถูกกำจัดออกไปมากและเร็วยิ่งขึ้น</li>\n<li>ควรออกกำลังกายเบา ๆ ครั้งละ 30 นาทีประมาณ อาทิตย์ละ 1-2 ครั้ง เพื่อช่วยให้ร่างกายเผาผลาญไขมันได้ดียิ่งขึ้น</li>\n<li>เลี่ยงอาหารรสเค็ม หรืออาหารที่มีส่วนผสมของเกลือ อีกทั้งควรเปลี่ยนพฤติกรรมการทานอาหารจำพวก แป้ง น้ำตาลและไขมันให้น้อยลง เพื่อหลีกเลี่ยงการสะสมของไขมันอีกครั้ง</li>\n</ol>\n</div>\n</div>', '', '2019-03-05 21:22:35', '2019-03-05 21:46:26', 'public');
INSERT INTO `services` VALUES ('2', '1', 'ฟิลเลอร์', '', 'เติมเต็มให้ดูมีมิติ', '', '<div class=\"col-sm-6 col-xs-12 meso\"><span class=\"title2-meso\">บริเวณที่นิยมฉีด Filler</span>\n<div class=\"num-meso\">\n<ol>\n<li>เติมเต็มให้คางดูยาวได้รูปมากขึ้น</li>\n<li>เติมเต็มริมฝีปากให้ดูอวบอิ่ม</li>\n<li>เติมเต็มใต้ตาให้ดูไม่ลึก</li>\n<li>เติมเต็มร่องแก้มให้เรียบเนียน</li>\n<li>เติมเต็มบริเวณใบหน้าส่วนต่างๆให้ดูเต็มอิ่ม</li>\n<li>ในกรณีที่ไม่ต้องการทำศัลยกรรมจมูกสามารถนำมาเติมเต็มจมูกให้ดูมีมิติเพิ่มขึ้นได้</li>\n</ol>\n</div>\n</div>\n<div class=\"col-sm-6 meso2\"><img class=\"img-meso\" src=\"http://localhost/mediqueenclinic/themes/demo_mediqueenclinic/images/service/filler.jpg\" alt=\"...\" /></div>\n<div class=\"clearfix\">&nbsp;</div>\n<div class=\"col-sm-12\"><span class=\"title2-meso\">ข้อความรู้เกี่ยวกับ Filler</span>\n<p><strong>ผลการรักษา</strong><br />หลังฉีดสามารถเห็นผลได้ทันที โดยทั่วไปแพทย์จะทายาชาที่บริเวณที่จะฉีดฟิลเลอร์ หรือในบางกรณี แพทย์อาจใช้วิธีประคบน้ำแข็งก่อนทำการรักษา ซึ่งใช้เวลาฉีด 10 &ndash; 20 นาที โดยคนไข้สามารถกลับบ้านได้เลยหลังรับการรักษาไม่ต้องพักฟื้น</p>\n<p><strong>อาการข้างเคียง</strong><br />อาจมีอาการบวมเป็นการชั่วคราว (ส่วนใหญ่ในกรณีที่ฉีดฟิลเลอร์ที่ริมฝีปาก) แดง กดเจ็บ และฟกช้ำ การประคบเย็นสามารถช่วยบรรเทาอาการเหล่านี้ได้ อาการบวมแดงมักจะหายไปภายใน 24 &ndash; 48 ชั่วโมง และกลับไปดำเนินชีวิตตามปกติได้ทันทีโดยใช้เครื่องสำอางช่วยปกปิด</p>\n<span class=\"title2-meso\">การดูแลหลังการรักษา</span>\n<div class=\"num-meso\">\n<ol>\n<li>48 ชั่วโมงแรก ไม่ควรออกกำลังกายให้เหงื่อออกมาก หรือไปตากแดดร้อนๆ เพราะอาจทำให้เกิดรอยแดงมากขึ้นบริเวณที่ฉีด</li>\n<li>หลังฉีดทันทีไม่ควรจับ ลูบคลำ นวด หรือปั้นเอง ในบริเวณที่ฉีด เพราะอาจมีผลต่อการเคลื่อนตำแหน่งของตัวยาไปยังตำแหน่งที่ไม่ต้องการได้</li>\n<li>หลังฉีดควรดื่มน้ำในปริมาณที่มากโดยเฉพาะ 4 วันแรก ของหลังฉีด Filler ประมาณ 8-46 แก้ว เพราะ Filler เป็นสารอุ้มน้ำ การดื่มน้ำมากๆ จะทำให้ Filler ที่ทำการเติมเต็มเข้าไปนั้นอยู่ได้นานขึ้น และช่วยให้น้ำจับกับโมเลกุล ของ Filler ที่ฉีด ทำให้ดูเป็นธรรมชาติมากขึ้น</li>\n<li>หลีกเลี่ยงการทำเลเซอร์ความร้อนบริเวณที่ฉีด 2 สัปดาห์</li>\n</ol>\n</div>\n</div>', '', '2019-03-17 22:13:24', '2019-03-17 22:13:24', 'public');

-- ----------------------------
-- Table structure for service_categories
-- ----------------------------
DROP TABLE IF EXISTS `service_categories`;
CREATE TABLE `service_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_th` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `img_th` varchar(255) DEFAULT NULL,
  `img_en` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service_categories
-- ----------------------------
INSERT INTO `service_categories` VALUES ('1', 'AESTHETIC MEDICINE', 'AESTHETIC MEDICINE', '5c86741bc2534.jpg', '5c86741bc4e82.jpg', 'public');
INSERT INTO `service_categories` VALUES ('2', 'COSMETIC SURGERY', 'COSMETIC SURGERY', '5c867437383b5.jpg', '5c86743740356.jpg', 'public');
INSERT INTO `service_categories` VALUES ('3', 'LASER', 'LASER', '5c86744db1714.jpg', '5c86744db7f29.jpg', 'public');
INSERT INTO `service_categories` VALUES ('4', 'HIFU', 'HIFU', '5c86746655fa8.jpg', '5c86746658c8b.jpg', 'public');
INSERT INTO `service_categories` VALUES ('5', 'OTHER', 'OTHER', '5c86749247d20.jpg', '5c8674924a573.jpg', 'public');

-- ----------------------------
-- Table structure for sys_users
-- ----------------------------
DROP TABLE IF EXISTS `sys_users`;
CREATE TABLE `sys_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `identitycard` varchar(13) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `ext` varchar(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `user_group_id` int(11) DEFAULT NULL,
  `group2_id` int(3) DEFAULT NULL,
  `user_premission_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of sys_users
-- ----------------------------
INSERT INTO `sys_users` VALUES ('1', 'admin', 'fd1234', 'Admin', 'System', null, '', '0000-00-00', '', '', 'ictcsupport@m-society.go.th', '1', '1', '1', null);

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_th` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `detail_th` text,
  `detail_en` text,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES ('1', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('3', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('4', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('5', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('6', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('7', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('8', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('9', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('10', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('11', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('12', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('13', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('14', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('15', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('16', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('17', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('18', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('19', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('20', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('21', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('22', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('23', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('24', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
INSERT INTO `testimonials` VALUES ('25', 'คุณ สมใจ สะสวย', 'คุณ สมใจ สะสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', 'มารู้จักกับเมดิควีนส์ คลินิก ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวยความงามของเรามาตลอด ตั้งแต่จมูก หน้า รวมถึงผิว มารู้จักกับวลีรัตน์คลินิก ก็ทำให้เราเปิดใจมากขึ้น แล้วให้ดูแลเรื่องความสวย', '5c7e31f2872a5.jpg', '2019-03-05 15:17:38', '2019-03-05 15:26:12', 'public');
