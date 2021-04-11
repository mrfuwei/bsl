/*
 Navicat Premium Data Transfer

 Source Server         : 106.52.246.190
 Source Server Type    : MySQL
 Source Server Version : 50562
 Source Host           : 106.52.246.190:3306
 Source Schema         : bsl

 Target Server Type    : MySQL
 Target Server Version : 50562
 File Encoding         : 65001

 Date: 11/04/2021 22:57:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_form
-- ----------------------------
DROP TABLE IF EXISTS `admin_form`;
CREATE TABLE `admin_form`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `mobile` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `form_type` int(11) NULL DEFAULT NULL COMMENT '1联系我们，2户型规划，3在线报名',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_form
-- ----------------------------
INSERT INTO `admin_form` VALUES (6, '1', '2', '3', 1);
INSERT INTO `admin_form` VALUES (7, '2', '3', '4', 2);

-- ----------------------------
-- Table structure for admin_honor
-- ----------------------------
DROP TABLE IF EXISTS `admin_honor`;
CREATE TABLE `admin_honor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_type` int(10) NULL DEFAULT NULL COMMENT '1证书，2奖项，3专利',
  `pic_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 92 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_honor
-- ----------------------------
INSERT INTO `admin_honor` VALUES (5, 3, '/uploads\\20210409\\f3704a305e7186e995d1f00bde5e06de.png', 0);
INSERT INTO `admin_honor` VALUES (6, 1, '/uploads/20210411/987eede32efe1c77d181ea653da82ab4.jpg', 1);
INSERT INTO `admin_honor` VALUES (7, 1, '/uploads/20210411/afff064d28d2519fa43fd582559b2dc2.jpg', 2);
INSERT INTO `admin_honor` VALUES (8, 1, '/uploads/20210411/d9a714e94f26e7f4e7c8da3a1903bda6.jpg', 3);
INSERT INTO `admin_honor` VALUES (9, 1, '/uploads/20210411/a3d2b59634a719f79eb96fec67176755.jpg', 4);
INSERT INTO `admin_honor` VALUES (10, 1, '/uploads/20210411/94708fd2c8d6a13fa3e30c6b1c5c5023.jpg', 5);
INSERT INTO `admin_honor` VALUES (11, 1, '/uploads/20210411/a6627eabf3712504c41e1a9deba556ee.jpg', 6);
INSERT INTO `admin_honor` VALUES (12, 1, '/uploads/20210411/1a67e28a170b4061283b4f9fdab8eaff.jpg', 7);
INSERT INTO `admin_honor` VALUES (13, 1, '/uploads/20210411/233731edae42e4c53e33e1e63fee88a4.jpg', 8);
INSERT INTO `admin_honor` VALUES (14, 1, '/uploads/20210411/5fa7741d8ebbbef6a0315c216c8aaf23.jpg', 9);
INSERT INTO `admin_honor` VALUES (40, 2, '/uploads/20210411/ed39a6a5d85a7a0681083580caf4df5e.jpg', 0);
INSERT INTO `admin_honor` VALUES (67, 2, '/uploads/20210411/1b6b5ac883e90f43152ca97764dfc07b.jpg', 0);
INSERT INTO `admin_honor` VALUES (68, 2, '/uploads/20210411/e351412c16e30291658adccf7c58e337.jpg', 0);
INSERT INTO `admin_honor` VALUES (69, 2, '/uploads/20210411/abc1edddcfbb1e59b29ef57bf6c754b3.jpg', 0);
INSERT INTO `admin_honor` VALUES (70, 2, '/uploads/20210411/6b5ea132f8d3d2a8d8f4f790868806fe.jpg', 0);
INSERT INTO `admin_honor` VALUES (71, 2, '/uploads/20210411/ee1110e5f82bbc5bbe4737545cbe7b5c.jpg', 0);
INSERT INTO `admin_honor` VALUES (72, 2, '/uploads/20210411/0ac55a9115a4d85a97fc35112d7c4e2a.jpg', 0);
INSERT INTO `admin_honor` VALUES (73, 2, '/uploads/20210411/762a8286e87e514a848d50f898b42940.jpg', 0);
INSERT INTO `admin_honor` VALUES (74, 2, '/uploads/20210411/c01b2f1728cea16afd8d0a0bd0d51ec8.jpg', 0);
INSERT INTO `admin_honor` VALUES (75, 2, '/uploads/20210411/1c4d5ceece15a9fb913920b220bbb45d.jpg', 0);
INSERT INTO `admin_honor` VALUES (76, 2, '/uploads/20210411/d87d3b6c80b34cc82d04456c71e17522.jpg', 0);
INSERT INTO `admin_honor` VALUES (77, 2, '/uploads/20210411/8366e8ec24466d50ab30e4c9db5a2674.jpg', 0);
INSERT INTO `admin_honor` VALUES (78, 2, '/uploads/20210411/d68707174eb339348d11280abb6b15b7.jpg', 0);
INSERT INTO `admin_honor` VALUES (79, 2, '/uploads/20210411/950e722d27d606d48f4cc75267b8feb0.jpg', 0);
INSERT INTO `admin_honor` VALUES (81, 2, '/uploads/20210411/24780869ee7489419d556b6c793da9d0.jpg', 0);
INSERT INTO `admin_honor` VALUES (83, 2, '/uploads/20210411/88ae926a721459e927f6aafadac8d072.jpg', 0);
INSERT INTO `admin_honor` VALUES (85, 2, '/uploads/20210411/81fd003ffc67cf26be11fe904d03844f.jpg', 0);
INSERT INTO `admin_honor` VALUES (87, 2, '/uploads/20210411/2839ffcd594893df158fc82c861927d8.jpg', 0);
INSERT INTO `admin_honor` VALUES (88, 2, '/uploads/20210411/79bafbb413191c6b0886498e66943646.jpg', 0);
INSERT INTO `admin_honor` VALUES (89, 2, '/uploads/20210411/571c65051e5c7d8f5f66e63f4af71231.jpg', 0);
INSERT INTO `admin_honor` VALUES (90, 2, '/uploads/20210411/b87b5f8ecb2618d35119f3e854ca8e7b.jpg', 0);
INSERT INTO `admin_honor` VALUES (91, 2, '/uploads/20210411/a78059a93ad85b7f2598a038848b0095.jpg', 0);

-- ----------------------------
-- Table structure for admin_index_banner
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_banner`;
CREATE TABLE `admin_index_banner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `c_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_banner
-- ----------------------------
INSERT INTO `admin_index_banner` VALUES (1, '/uploads/mmbanner-01.jpg', 'Blending4', 'LIGHTING5', '2021-04-08 10:00:10');
INSERT INTO `admin_index_banner` VALUES (2, '/uploads/mbanner-01.jpg', 'Blending', 'LIGHTING', '2021-04-07 22:25:47');
INSERT INTO `admin_index_banner` VALUES (3, '/uploads\\20210411\\9256c32d3a5f6ec1129d6663a8830fd6.jpg', 'symbiosis', 'LIGHTING', '2021-04-11 04:36:02');
INSERT INTO `admin_index_banner` VALUES (4, '/uploads/mbanner-03.jpg', 'born by beauty', 'LIGHTING', '2021-04-07 22:29:11');

-- ----------------------------
-- Table structure for admin_index_contact
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_contact`;
CREATE TABLE `admin_index_contact`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_contact
-- ----------------------------
INSERT INTO `admin_index_contact` VALUES (1, '/static/images/wb.png', '/static/images/wx.png', '关注我们1', '全国客服电话2', '400-8877-831', '邮箱：sales@jxbsl.com');

-- ----------------------------
-- Table structure for admin_index_part2
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_part2`;
CREATE TABLE `admin_index_part2`  (
  `id` int(11) NOT NULL,
  `title1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `pic1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_part2
-- ----------------------------
INSERT INTO `admin_index_part2` VALUES (1, 'Brand2', 'Traceability', '品牌溯源', '定制吊顶发明者  定制吊顶行业创始企业', '<p>宝仕龙集成家居创立于2006年，坐落于浙江海盐68000㎡的智能产业园，是集成吊顶创始企业之一，更是集成吊顶产业集群中的重点企业。旗下拥有宝仕龙、索菲尼洛双品牌，秉承让家更美、生活更美好的使命，为全国用户定制个性化的家居生活。</p>\n                        <p>宝仕龙连续9年蝉联集成吊顶行业十大领军品牌，并荣获“集成吊顶国家标准起草单位”、“集成吊顶行业标准参编单位、中国集成吊顶行业副会长单位、国家高新技术企业、浙江省专利示范企业”等108项荣誉，并拥有319项自主专利技术，853家全国营销网点。互联网大数据时代，宝仕龙实行拼搏、实干、创新、必达的企业精神，正在实现新的创新变革。</p>', '/static/images/mbsllogo0.png', '/static/images/mbsllogo1.png');

-- ----------------------------
-- Table structure for admin_index_part3
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_part3`;
CREATE TABLE `admin_index_part3`  (
  `id` int(11) NOT NULL,
  `video_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `video_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_6` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_6` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_part3
-- ----------------------------
INSERT INTO `admin_index_part3` VALUES (1, '/static/banners3.mp4', '/static/banners3.mp4', '/static/images/mypic.jpg', '/static/images/mypic.jpg', '/static/images/mypic.jpg', '/static/images/mypic.jpg', '/static/images/mypic.jpg', '/static/images/mypic.jpg', '\"人·物·居\"', '相融共生', '全景顶', '因美而生', '坚持原创之美，营造家居设计之美，传达艺术生活理念', '了解详情');
INSERT INTO `admin_index_part3` VALUES (2, '/static/banners3.mp4', '/static/banners3.mp4', '/static/images/ConnectShowcaseMarVista_12-300x300-c-center.jpg', '/static/images/ConnectShowcaseMarVista_12-600x600-c-center.jpg', '/static/images/mypic_800.jpg', '/static/images/ConnectShowcaseMarVista_12-400x400-c-center.jpg', '/static/images/mypic_800.jpg', '/static/images/mypic_800.jpg', '\"人·物·居\"', '相融共生', '全景顶', '因美而生', '坚持原创之美，营造家居设计之美，传达艺术生活理念', '了解详情');

-- ----------------------------
-- Table structure for admin_index_part4
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_part4`;
CREATE TABLE `admin_index_part4`  (
  `id` int(11) NOT NULL,
  `pic_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_5` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_part4
-- ----------------------------
INSERT INTO `admin_index_part4` VALUES (1, '/static/images/banner-02.jpg', 'PANORAMIC ROOF1', 'SCROLL DOWN2', 'EIGHT SPACES IN THE WHOLE HOUSE3', '全屋八大空间', '随着国家装配式装修政策的大力执行，精装修时代的到来，追求设计和品质的消费群体不断增多，传统石膏吊顶开裂脱落，易受潮发霉，已无法满足人们日益增长的双重需求。历经多年研发攻关，2019年“定制吊顶”震撼上市。<br />定制吊顶以铝为原基材，采用柔性定制一体化设计，实现空间定制、风格定制、功能定制、色彩定制、尺寸定制等多样个性化定制，完美呈现石膏板任意造型，1:1还原设计效果，达到顶部空间的专属定制方案。');

-- ----------------------------
-- Table structure for admin_index_part5
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_part5`;
CREATE TABLE `admin_index_part5`  (
  `id` int(11) NOT NULL,
  `pic_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_5` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_part5
-- ----------------------------
INSERT INTO `admin_index_part5` VALUES (1, '/static/images/banner-03.jpg', 'PRODUCT CONCEPT1', 'SCROLL DOWN2', 'Custom ceiling will not be replaced for 30 years3', '定制吊顶30年不用换4', '1.高级私人定制：定制吊顶更注重私人量身定制设计，相比流水生产的模块化集成吊顶，定制吊顶个人风格强烈、整体性更强，根据用户的喜好，设计师量身设计，1:1还原理想家；<br />\n2.	防水防裂防霉变：定制吊顶经久耐用，不发霉不发黄不脱落不开裂，不怕潮湿梅雨季节困恼；<br />\n3.	绿色环保无甲醛：定制吊顶以原生铝为基材，无甲醛污染，健康环保；<br />\n4.	可回收再利用：减少建筑垃圾对环境的危害，回收利用率高；<br />\n5.	抗油污易清洁：表面纳米超疏水技术，抗油污，可擦洗，即擦即净，打扫无忧。<br />\n6.	安装周期短：工厂量身定制生产，安装现场装配式组装，全屋施工只需3天（因复杂程度而言），大大缩短工期，即装即住；<br />\n7.	使用寿命长：定制吊顶是全铝合金定制，QE吊装系统安装，表面经过纳米抗油污处理，背面经过耐腐蚀处理，30年不用换。');

-- ----------------------------
-- Table structure for admin_index_part6
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_part6`;
CREATE TABLE `admin_index_part6`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `str_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_index_part6
-- ----------------------------
INSERT INTO `admin_index_part6` VALUES (1, '/static/images/banner-04.jpg', '/static/images/banner05.jpg', 'CORPORATE CULTURE1', '企业文化1', 'SI TRMINAL IMAGE2', 'SI终端形象2');

-- ----------------------------
-- Table structure for admin_new
-- ----------------------------
DROP TABLE IF EXISTS `admin_new`;
CREATE TABLE `admin_new`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `c_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_new
-- ----------------------------
INSERT INTO `admin_new` VALUES (1, 2, '1', NULL, '/uploads\\20210411\\fed2be909c0b4b6236038b90eb7d414c.png', '2021-04-11 03:17:56', '2');
INSERT INTO `admin_new` VALUES (2, 3, '4', NULL, '/uploads\\20210411\\a6eadc6e8ead51645067a063ce0a94e0.jpg', '2021-04-11 03:41:26', '5');
INSERT INTO `admin_new` VALUES (3, 3, '1', '<p>3</p>', '/uploads\\20210411\\dcb3e1aa476eec7a887d3b5a880c3236.jpg', '2021-04-11 03:54:12', '2');
INSERT INTO `admin_new` VALUES (4, 2, '5', '<p>78910111111</p>', '/uploads\\20210411\\c2e8f54913459d64bc769ce00ab857ee.png', '2021-04-11 03:56:19', '6');

-- ----------------------------
-- Table structure for admin_new_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_new_menu`;
CREATE TABLE `admin_new_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_new_menu
-- ----------------------------
INSERT INTO `admin_new_menu` VALUES (2, '11111222', 'abcdf');
INSERT INTO `admin_new_menu` VALUES (3, '222222', 'dEF');
INSERT INTO `admin_new_menu` VALUES (4, '3333', 'ffffff');

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES (1, 'admin', '6b48ef8b4e12cf3e1854f795c1895c56', 'eyJ1c2VybmFtZSI6ImFkbWluIiwiY190aW1lIjoxNjE4MTUyNjkzfQ==', '2021-04-07 20:27:12');

SET FOREIGN_KEY_CHECKS = 1;
