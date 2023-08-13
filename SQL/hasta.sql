/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : hasta

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 13/08/2023 22:15:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bilgiedinme
-- ----------------------------
DROP TABLE IF EXISTS `bilgiedinme`;
CREATE TABLE `bilgiedinme`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `hizmet` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tarih` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bilgiedinme
-- ----------------------------
INSERT INTO `bilgiedinme` VALUES (25, 'Samiel TR', '1113332233', 'Şubu', '070199');

-- ----------------------------
-- Table structure for iletisim
-- ----------------------------
DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE `iletisim`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `eposta` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `mesaj` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 34 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of iletisim
-- ----------------------------

-- ----------------------------
-- Table structure for kayan
-- ----------------------------
DROP TABLE IF EXISTS `kayan`;
CREATE TABLE `kayan`  (
  `id` int NOT NULL,
  `foto` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint NOT NULL,
  `sira` int NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kayan
-- ----------------------------
INSERT INTO `kayan` VALUES (4, 'n.png', 'Kayan 2 Başlık', 'Kayan 2 Üst Başlık', '<p>kayan2 açıklama</p>', 1, 300);
INSERT INTO `kayan` VALUES (3, 'banner33.png', 'Kayan 3 başlık', 'Kayan 3 Üst Başlık', '<p>İçerik</p>', 1, 400);

-- ----------------------------
-- Table structure for kullanicilar
-- ----------------------------
DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kadi` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parola` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of kullanicilar
-- ----------------------------
INSERT INTO `kullanicilar` VALUES (16, 'demo', '31411f16e675560d45d82d1033d6a897');

-- ----------------------------
-- Table structure for musteri
-- ----------------------------
DROP TABLE IF EXISTS `musteri`;
CREATE TABLE `musteri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telefon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `adres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `calisan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tckimlik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of musteri
-- ----------------------------
INSERT INTO `musteri` VALUES (3, 'Samet Erten', '11111111111', 'aaaaaaaaa', NULL, 'Covid', '09.00 - 17.00', '11111111111');

-- ----------------------------
-- Table structure for personel
-- ----------------------------
DROP TABLE IF EXISTS `personel`;
CREATE TABLE `personel`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint NOT NULL,
  `sira` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personel
-- ----------------------------
INSERT INTO `personel` VALUES (13, 'resim_2021-11-02_020634.png', 'Genel Sekreter', 'Davut Karacan<br><br>', '<p>-</p>', 1, 2);
INSERT INTO `personel` VALUES (12, 'trgt.jpg', 'Genel Başkan', 'Turgut Cumhur Şanlı', '<p>biyografisi</p>', 1, 1);
INSERT INTO `personel` VALUES (15, 'unnamed.jpg', 'Doktor', 'Samet Erten', '<p>----</p>', 1, 4);

-- ----------------------------
-- Table structure for personelist
-- ----------------------------
DROP TABLE IF EXISTS `personelist`;
CREATE TABLE `personelist`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` char(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ustBaslik` char(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aktif` tinyint NOT NULL,
  `sira` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personelist
-- ----------------------------

-- ----------------------------
-- Table structure for sayfalar
-- ----------------------------
DROP TABLE IF EXISTS `sayfalar`;
CREATE TABLE `sayfalar`  (
  `kucukbaslik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `buyukbaslik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `sayfa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sayfalar
-- ----------------------------
INSERT INTO `sayfalar` VALUES ('KURUMSAL', 'KURUMSAL', '<h4>Neden &nbsp;Hasta Bakım Hizmetleri ?</h4><p>Amacımız hastalarimıza zor dönemlerinde en iyi şekilde hizmet vermek. Bu ideolojiyle yola çıktık. Hastalık dönemi zor ve sıkıntılı bir süreçtir. Sizlere en iyi hizmeti verebilme çabası içindeyiz. Hasta bakıcılarımız senelerdir bu işin içinde olan tecrübeli insanlardır ve bu tecrübelerini eğitimle destekleyerek kendilerinin hasta bakım sertifikalarını almalarını sağlıyoruz. Hasta yakınlarıyla anlaşma yapıldıktan sonra hastanın taburcu olacağı güne kadar refakatçilerin denetimlerini düzenli olarak gerçekleştiriyoruz. Hasta yakınlarıyla gerekli durumlarda irtibata geçiyoruz aileler bize ihtiyaç halinde ulaşabilirler gerek ailelerin gerekse çalışan arkadaşlarımızın mağduriyet yaşamaması için gerekli tedbirleri alıyoruz ailelerin isteği doğrultusunda gerekli görülürse refakatçi değişimini gerçekleştiriyoruz &nbsp;Bizler firma olarak sorumluluklarımızı biliyoruz. Konu insan ve insan sağlığı en iyi hizmeti verebilmek çabamız bunun için &nbsp;Firmanın çalışanları biz hizmet ettiklerimiz sizlersiniz. Sizin destekleriniz önerileriniz ve eleştirilerinizi büyüyüp gelişeceğiz. Bütün Hastalarımıza acil şifalar dileriz. Acil Hasta Bakım Yönetimi</p><p>&nbsp;</p><h4>Anlaşmalı Olduğumuz Kurumlar</h4><p>Blabla&nbsp;<br>&nbsp;</p>', 'kurumsal', 1);
INSERT INTO `sayfalar` VALUES ('ŞEFFAFLIK', 'ŞEFFAFLIK', '<h4>Müşteri Sözleşmemiz</h4><p>İmzalayacağınız sözleşmeyi önden size sunuyoruz. Kafanıza takılan veya hoşunuza gitmeyen maddeler varsa önden görüyorsunuz. Karşınıza farklı maddelerle çıkmıyor ve sizi şoka uğratmıyoruz.</p><p>Buraya Sözleşme Eklenecek</p><h4>Hasta Bakıcı Sözleşmemiz</h4><p>Hasta Bakıcı Sözleşmemizi görerek hastalarınızı bize güvenle emanet edebilirsiniz.</p><p>Buraya Sözleşme Eklenecek</p>', 'seffaflik', 2);

-- ----------------------------
-- Table structure for yorumlar
-- ----------------------------
DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE `yorumlar`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `eposta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `yorum` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `onay` int NULL DEFAULT NULL,
  `Tarih` datetime NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of yorumlar
-- ----------------------------
INSERT INTO `yorumlar` VALUES (13, 'murat şirin', NULL, 'ilgi ve alakanızdan ve hizmetlerinizden dolayı çok teşekkür ettim. \r\nçevreme tavsiye edeceğim.\r\n*****', 1, '2022-01-11 12:55:39');
INSERT INTO `yorumlar` VALUES (14, 'Tomris Erten', NULL, 'İlgi ve alakalarını çok teşekkür ederim. Temiz ve titiz.', 1, '2022-01-11 16:25:58');
INSERT INTO `yorumlar` VALUES (11, 'Emine Şen', NULL, 'Çok alakalı bir kurum. Hizmetimizden memnun kaldım.', 1, '2022-01-03 21:02:28');
INSERT INTO `yorumlar` VALUES (12, 'kudret bulut', NULL, 'müşteri hizmetlerinize ve iş takibiniz konusunda çok memnun kaldım. kaliteli bir hizmet aldım. teşekkür ederm. ', 1, '2022-01-03 21:02:41');

SET FOREIGN_KEY_CHECKS = 1;
