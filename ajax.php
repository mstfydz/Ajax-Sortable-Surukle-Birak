
<?php 
$db =  new PDO("mysql:host=localhost;dbname=dersler", "root", "localhost"); 

foreach ($_GET['listItem'] as $position => $item)
{
	   $sql[] = $db->query("UPDATE konular SET sira = $position WHERE id = $item");
	   
}

//print_r ($sql); 

?>
<div class="valid_box">Data sıralaması başarıyla güncellendi.</div>



<!--- Veritanaına İmport Edin -

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


----->