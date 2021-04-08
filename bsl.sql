/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : 127.0.0.1:3306
 Source Schema         : bsl

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 08/04/2021 11:56:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_index_banner
-- ----------------------------
DROP TABLE IF EXISTS `admin_index_banner`;
CREATE TABLE `admin_index_banner`  (
  `id` int(11) NOT NULL,
  `pic_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `c_time` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_index_banner
-- ----------------------------
INSERT INTO `admin_index_banner` VALUES (1, '/uploads/mmbanner-01.jpg', 'Blending4', 'LIGHTING5', '2021-04-08 10:00:10');
INSERT INTO `admin_index_banner` VALUES (2, '/uploads/mbanner-01.jpg', 'Blending', 'LIGHTING', '2021-04-07 22:25:47');
INSERT INTO `admin_index_banner` VALUES (3, '/uploads/mbanner-02.jpg', 'symbiosis', 'LIGHTING', '2021-04-07 22:28:29');
INSERT INTO `admin_index_banner` VALUES (4, '/uploads/mbanner-03.jpg', 'born by beauty', 'LIGHTING', '2021-04-07 22:29:11');

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES (1, 'admin', '6b48ef8b4e12cf3e1854f795c1895c56', 'eyJ1c2VybmFtZSI6ImFkbWluIiwiY190aW1lIjoxNjE3ODQxMzg0fQ==', '2021-04-07 20:27:12');

SET FOREIGN_KEY_CHECKS = 1;
