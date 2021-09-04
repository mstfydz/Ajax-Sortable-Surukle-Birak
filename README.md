# Ajax-Sortable-Surukle-Birak
 Ajax ile Sortable sürükle bırak yaparak sıra güncelleme


Ekran Çıktısı Resimi Aşagıdaki Gibidir 
![1](https://user-images.githubusercontent.com/34952020/132057484-ab68de63-857e-496d-9cf1-4bab4fb3443b.PNG)

*******************************************


SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for konular
-- ----------------------------
DROP TABLE IF EXISTS `konular`;
CREATE TABLE `konular`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konu_baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `konu_aciklama` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sira` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konular
-- ----------------------------
INSERT INTO `konular` VALUES (1, 'Türkçe', 'Türkçe Açıklama', 2);
INSERT INTO `konular` VALUES (2, 'Matematik', 'Matematik Açıklama', 3);
INSERT INTO `konular` VALUES (3, 'Edebiyat', 'Edebiyat Açıklama', 6);
INSERT INTO `konular` VALUES (4, 'Biyoloji', 'Biyoloji Açıklama', 0);
INSERT INTO `konular` VALUES (5, 'Kimya', 'Kimya Açıklama', 7);
INSERT INTO `konular` VALUES (6, 'Felsefe', 'Felsefe Açıklama', 1);
INSERT INTO `konular` VALUES (7, 'Tarih', 'Tarih Açıklama', 4);
INSERT INTO `konular` VALUES (8, 'Coğrafya', 'Coğrafya Açıklama1', 5);

SET FOREIGN_KEY_CHECKS = 1;
