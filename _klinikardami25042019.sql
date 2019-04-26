/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100133
 Source Host           : localhost:3306
 Source Schema         : _klinikardami

 Target Server Type    : MySQL
 Target Server Version : 100133
 File Encoding         : 65001

 Date: 25/04/2019 11:13:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for g_penyesuaian_stok
-- ----------------------------
DROP TABLE IF EXISTS `g_penyesuaian_stok`;
CREATE TABLE `g_penyesuaian_stok`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `petugas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alasan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of g_penyesuaian_stok
-- ----------------------------
INSERT INTO `g_penyesuaian_stok` VALUES (1, '2019-04-15', 'Asbun', 'Stok Opname bulanan', 'OPEN');

-- ----------------------------
-- Table structure for kunjungan
-- ----------------------------
DROP TABLE IF EXISTS `kunjungan`;
CREATE TABLE `kunjungan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `id_pasien` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_pasien` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dokter` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_pasien` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kunjungan
-- ----------------------------
INSERT INTO `kunjungan` VALUES (6, '2019-04-23', '22', 'lutfi', 'Majalaya', '1', 'BPJS', 'ACTIVE');
INSERT INTO `kunjungan` VALUES (7, '2019-04-23', '20', 'Adri Idrus', 'kadatuan', '1', 'BPJS', 'ACTIVE');
INSERT INTO `kunjungan` VALUES (8, '2019-04-23', '23', 'Hen hen', 'Bojong salawe', '1', 'BPJS', 'ACTIVE');
INSERT INTO `kunjungan` VALUES (9, '2019-04-22', '8', 'Natsir', 'kadatuan', '1', 'BPJS', 'ACTIVE');
INSERT INTO `kunjungan` VALUES (10, '2019-04-24', '23', 'Hen hen', 'Bojong salawe', '1', 'BPJS', 'ACTIVE');
INSERT INTO `kunjungan` VALUES (11, '2019-04-25', '22', 'lutfi', 'Majalaya', '1', 'BPJS', 'ACTIVE');

-- ----------------------------
-- Table structure for kunjungan_detil_barang
-- ----------------------------
DROP TABLE IF EXISTS `kunjungan_detil_barang`;
CREATE TABLE `kunjungan_detil_barang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kunjungan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_barang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_barang` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` float(9, 0) NULL DEFAULT NULL,
  `qty` float(9, 0) NULL DEFAULT NULL,
  `total` float(9, 0) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kunjungan_detil_barang
-- ----------------------------
INSERT INTO `kunjungan_detil_barang` VALUES (14, '6', '17', 'ASPILET', 800, 2, 1600, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (15, '6', '35', 'PARASETAMOL 500 MG', 300, 3, 900, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (16, '7', '15', 'ASAM MEFENAMAT', 400, 10, 4000, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (17, '8', '14', 'AMOXICILIN', 500, 1, 500, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (18, '8', '35', 'PARASETAMOL 500 MG', 300, 1, 300, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (19, '8', '8', 'ALLOPURINOL 100MG', 500, 1, 500, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (20, '8', '22', 'CAPTOPRIL 25 MG GENERIK', 200, 4, 800, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (22, '10', '27', 'CETIRIZINE', 500, 1, 500, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (29, '10', '76', 'PREDNISON POT', 200, 1, 200, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (30, '10', '11', 'AMLODIPIN 10 MG', 800, 1, 800, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (31, '10', '15', 'ASAM MEFENAMAT', 400, 150, 60000, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (34, '11', '6', 'ACICLOVIR 400MG', 900, 1, 900, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (35, '11', '35', 'PARASETAMOL 500 MG', 300, 3, 900, 'OPEN');
INSERT INTO `kunjungan_detil_barang` VALUES (36, '11', '7', 'CTM', 200, 10, 2000, 'OPEN');

-- ----------------------------
-- Table structure for kunjungan_detil_layanan
-- ----------------------------
DROP TABLE IF EXISTS `kunjungan_detil_layanan`;
CREATE TABLE `kunjungan_detil_layanan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kunjungan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_layanan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_layanan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` float(9, 0) NULL DEFAULT NULL,
  `qty` float(9, 0) NULL DEFAULT NULL,
  `total` float(9, 0) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kunjungan_detil_layanan
-- ----------------------------
INSERT INTO `kunjungan_detil_layanan` VALUES (9, '6', '1', 'NEBULIZER', 45000, 1, 45000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (10, '6', '16', 'BHP 1', 20000, 1, 20000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (11, '6', '4', 'WT SEDANG', 40000, 1, 40000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (12, '7', '12', 'BEDAH MINOR CLAVUS', 100000, 1, 100000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (14, '8', '6', 'EKSTRAKSI SERUMEN', 25000, 1, 25000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (15, '8', '6', 'EKSTRAKSI SERUMEN', 25000, 1, 25000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (16, '8', '10', 'OKSIGEN / 15 MENIT', 20000, 1, 20000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (17, '8', '8', 'HECTING PERTAMA (1)', 50000, 1, 50000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (18, '9', '6', 'EKSTRAKSI SERUMEN', 25000, 1, 25000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (19, '9', '8', 'HECTING PERTAMA (1)', 50000, 1, 50000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (47, '10', '12', 'BEDAH MINOR CLAVUS', 100000, 1, 100000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (49, '11', '8', 'HECTING PERTAMA (1)', 50000, 2, 100000, 'OPEN');
INSERT INTO `kunjungan_detil_layanan` VALUES (52, '11', '8', 'HECTING PERTAMA (1)', 50000, 12, 600000, 'OPEN');

-- ----------------------------
-- Table structure for kunjungan_diagnosa
-- ----------------------------
DROP TABLE IF EXISTS `kunjungan_diagnosa`;
CREATE TABLE `kunjungan_diagnosa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kunjungan` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `diagnosa_awal` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tindakan` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `diagnosa_akhir` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `id_kunjungan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for m_barang
-- ----------------------------
DROP TABLE IF EXISTS `m_barang`;
CREATE TABLE `m_barang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merk` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_barang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan_besar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan_kecil` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga_beli` float(15, 0) NULL DEFAULT NULL,
  `margin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga_jual` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `generik_status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `stok` int(50) NULL DEFAULT NULL,
  `jenis` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 270 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_barang
-- ----------------------------
INSERT INTO `m_barang` VALUES (6, 'ACICLOVIR ', 'ACICLOVIR 400MG', 'TABLET', 'TABLET', NULL, '', '900', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (7, 'ORPHEN', 'CTM', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (8, 'ALOFAR 100', 'ALLOPURINOL 100MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (9, 'ROVERTON ', 'AMBROXOL', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (10, 'ERPHAPHILIN', 'AMINOPHILIN', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (11, 'ZEVASK 10', 'AMLODIPIN 10 MG', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (12, 'ZEVASK 5', 'AMLODIPIN 5 MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (13, 'AMLODIPIN 10 MG GENERIK', 'AMLODIPIN 10 MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (14, 'HUFANOXIL', 'AMOXICILIN', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (15, 'ANASTAN ', 'ASAM MEFENAMAT', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (16, 'ANTASIDA POT', 'ANTASIDA', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (17, 'ASPILETS', 'ASPILET', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (18, 'B COMPLEX POT', 'B COMPLEX', 'TABLET', 'TABLET', NULL, '', '100', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (19, 'BICNAT POT', 'BICNAT', 'TABLET', 'TABLET', NULL, '', '100', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (20, 'BIOMEGA', 'BIOMEGA', 'TABLET', 'TABLET', NULL, '', '700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (21, 'BUFACARYL', 'BUFACARYL', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (22, 'CAPTOPRIL 25 MG GENERIK', 'CAPTOPRIL 25 MG GENERIK', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (23, 'CARBIDU', 'DEXA 0.5 MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (24, 'CAVIPLEX', 'CAVIPLEX', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (25, 'LOSTACEF ', 'CEFADROXIL', 'TABLET', 'TABLET', NULL, '', '1000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (26, 'PHARMAFIX ', 'CEFIXIME 100MG', 'TABLET', 'TABLET', NULL, '', '1400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (27, 'TRISELA', 'CETIRIZINE', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (28, 'ETAFLOX ', 'CIPROFLOXAXIN', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (29, 'CALORTUSIN', 'CALORTUSIN', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (30, 'CTM POT', 'CTM POT', 'TABLET', 'TABLET', NULL, '', '100', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (31, 'CAVICUR', 'CURCUMA', 'TABLET', 'TABLET', NULL, '', '1300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (32, 'DEXA POT', 'DEXA POT', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (33, 'DEXTRAL', 'DEXTRAL', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (34, 'DIGOXIN', 'DIGOXIN', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (35, 'EMTURNAS', 'PARASETAMOL 500 MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (36, 'EMTURNAS FORTE ', 'PARASETAMOL 650 MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (37, 'FARIZOL ', 'METRONIDAZOLE', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (38, 'FARMOTEN 25', 'CAPTOPRIL 25 MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (39, 'FARSIFEN 400 ', 'IBUPROFEN 400MG', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (40, 'FARSIFEN PLUS', 'FARSIFEN PLUS', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (41, 'FLUCADEX', 'FLUCADEX', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (42, 'FLUTAMOL', 'FLUTAMOL', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (43, 'GRALIXA ', 'FUROSEMIDE', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (44, 'GASELA', 'RANITIDIN', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (45, 'GASTRUSID', 'ANTASIDA', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (46, 'GEEBIO', 'GEEBIO', 'TABLET', 'TABLET', NULL, '', '5500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (47, 'GG POT', 'GG POT', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (48, 'RENABETIC', 'GLIBENCLAMIDE', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (49, 'GLUDEUPATIC', 'METFORMIN', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (50, 'HEMORID', 'HEMORID', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (51, 'HISTIGO', 'HISTIGO', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (52, 'HUFABION', 'HUFABION', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (53, 'HUFADON', 'DOMPERIDONE', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (54, 'ANTIDIA', 'LOPERAMIDE', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (55, 'HUFAXICAM 15', 'MELOXICAM 15 MG', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (56, 'ZULTROP FORTE ', 'KOTRIMOXAZOLE 960 MG', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (57, 'ISDN', 'ISDN', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (58, 'KADITIK', 'KADITIK', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (59, 'GRATHEOS', 'GRATHEOS', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (60, 'LICOKALK', 'KALK', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (61, 'KETOKONAZOLE', 'KETOKONAZOLE', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (62, 'CLINDAMICIN 150 MG', 'CLINDAMICIN 150 MG', 'TABLET', 'TABLET', NULL, '', '1200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (63, 'LANSOPRAZOLE', 'LANSOPRAZOLE', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (64, 'LAXANA', 'BISACODIL', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (65, 'LOKEV', 'OMEPRAZOLE', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (66, 'LORIHIS', 'LORATADIN', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (67, 'OXYCOBAL', 'MECOBALAMIN', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (68, 'MOLAGIT', 'MOLAGIT', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (69, 'LEXCOMET', 'MP', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (70, 'MOLEXFLU', 'MOLEXFLU', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (71, 'NEURODEX', 'NEURODEX', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (72, 'NEXITRA', 'ASAM TRANEXAMAT', 'TABLET', 'TABLET', NULL, '', '1400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (73, 'PAPAVERIN POT', 'PAPAVERIN POT', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (74, 'PCT POT', 'PCT POT', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (75, 'FAXIDEN 10', 'PIROXICAM 10MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (76, 'PREDNISON POT', 'PREDNISON POT', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (77, 'GRAFALIN 4 ', 'SALBUTAMOL 4MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (78, 'SCOPMA PLUS', 'SCOPMA PLUS', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (79, 'SEREMIG', 'FLUNARIZINE', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (80, 'NORPID 10', 'SIMVASTATIN 10MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (81, 'SPIRONOLACTON', 'SPIRONOLACTON', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (82, 'SUPRABIOTIK', 'TETRACYCLIN 500MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (83, 'TEOSAL', 'TEOSAL', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (84, 'TERA F', 'TERA F', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (85, 'ASTHERIN', 'TERBUTALIN', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (86, 'TETRASIKLIN POT', 'TETRASIKLIN POT', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (87, 'ULCRON ', 'SUKRALFAT', 'TABLET', 'TABLET', NULL, '', '2200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (88, 'VIT B1 100 MG POT', 'VIT B1 100 MG POT', 'TABLET', 'TABLET', NULL, '', '200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (89, 'VIT C POT', 'VIT C POT', 'TABLET', 'TABLET', NULL, '', '100', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (90, 'ZINK', 'ZINK', 'TABLET', 'TABLET', NULL, '', '700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (91, 'VIT K POT', 'VIT K POT', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (92, 'RAMOLIT', 'RAMOLIT', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (93, 'RIFABIOTIK 600 MG', 'RIFAMPISIN 600 MG', 'TABLET', 'TABLET', NULL, '', '2500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (94, 'RIFABIOTIK 450 MG', 'RIFAMPISIN 450 MG', 'TABLET', 'TABLET', NULL, '', '2000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (95, 'INADOXIN', 'INADOXIN', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (96, 'TIBIGON', 'TIBIGON', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (97, 'ZIDALEV', 'LEVOFLOXAXIN', 'TABLET', 'TABLET', NULL, '', '1200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (98, 'ALPARA', 'ALPARA', 'TABLET', 'TABLET', NULL, '', '700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (99, 'PYRATIBI', 'PYRATIBI', 'TABLET', 'TABLET', NULL, '', '600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (100, 'PIRACETAM', 'PIRACETAM', 'TABLET', 'TABLET', NULL, '', '1000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (101, 'SUPERHOID SUPP', 'SUPERHOID SUPP', 'TABLET', 'TABLET', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (102, 'VIT B6 POT', 'VIT B6 POT', 'TABLET', 'TABLET', NULL, '', '100', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (103, 'FG TROCHES', 'FG TROCHES', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (104, 'GABAPENTIN', 'GABAPENTIN', 'TABLET', 'TABLET', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (105, 'CITICOLIN ', 'CITICOLIN ', 'TABLET', 'TABLET', NULL, '', '8000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (106, 'BISOPROLOL', 'BISOPROLOL', 'TABLET', 'TABLET', NULL, '', '1000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (107, 'VIRPRES', 'ACICLOVIR 400MG', 'TABLET', 'TABLET', NULL, '', '1000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (108, 'ALOFAR 300', 'ALLOPURINOL 300MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (109, 'AMLODIPIN 5 MG GENERIK', 'AMLODIPIN 5 MG GENERIK', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (110, 'METOLON', 'METOCLOPRAMID', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (111, 'DEGIROL', 'DEGIROL', 'TABLET', 'TABLET', NULL, '', '1200', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (112, 'ANTIZA', 'ANTIZA', 'TABLET', 'TABLET', NULL, '', '1400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (113, 'CROFED', 'CROFED', 'TABLET', 'TABLET', NULL, '', '1700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (114, 'SIMTIN', 'GABAPENTIN', 'TABLET', 'TABLET', NULL, '', '13000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (115, 'REMATOF', 'KETOPROFEN 100MG', 'TABLET', 'TABLET', NULL, '', '1000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (116, 'AR-GOUT', 'COLCHISIN', 'TABLET', 'TABLET', NULL, '', '10500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (117, 'GLUCOSAMIN', 'GLUCOSAMIN', 'TABLET', 'TABLET', NULL, '', '2000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (118, 'VALSARTAN', 'VALSARTAN', 'TABLET', 'TABLET', NULL, '', '4800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (119, 'CLOPIDOGREL', 'CLOPIDOGREL', 'TABLET', 'TABLET', NULL, '', '2800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (120, 'RAMIPRIL 5', 'RAMIPRIL 5', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (121, 'LISINOPRIL', 'LISINOPRIL', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (122, 'PLACTA', 'CLOPIDOGREL', 'TABLET', 'TABLET', NULL, '', '3500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (123, 'NORFLAM', 'NORFLAM', 'TABLET', 'TABLET', NULL, '', '5500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (124, 'SIMPROFEN', 'KETOPROFEN 100MG', 'TABLET', 'TABLET', NULL, '', '8000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (125, 'MAXTAN', 'ASAM MEFENAMAT', 'TABLET', 'TABLET', NULL, '', '1800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (126, 'FENAREN', 'NA DIC', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (127, 'GLIMEPIRIDE 2', 'GLIMEPIRIDE 2', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (128, 'GLIMEPIRIDE 4', 'GLIMEPIRIDE 4', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (129, 'GITRI', 'KOTRIMOXAZOLE 480 MG', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (130, 'XIETY', 'XIETY', 'TABLET', 'TABLET', NULL, '', '5700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (131, 'SIMCOBAL', 'MECOBALAMIN', 'TABLET', 'TABLET', NULL, '', '2600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (132, 'ANATON', 'ANATON', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (133, 'PARAFLU', 'PARAFLU', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (134, 'SPASMINAL', 'SPASMINAL', 'TABLET', 'TABLET', NULL, '', '700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (135, 'PRORIS 200', 'IBUPROFEN 200MG', 'TABLET', 'TABLET', NULL, '', '1300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (136, 'REBAMAX', 'REBAMAX', 'TABLET', 'TABLET', NULL, '', '4700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (137, 'FARMALAT 10', 'NIFEDIPIN 10MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (138, 'HCT', 'HCT', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (139, 'RELAXON', 'EPERISON', 'TABLET', 'TABLET', NULL, '', '800', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (140, 'BRONEX', 'BROMHEXIN', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (141, 'MELOXICAM 15 GENERIK', 'MELOXICAM 15 GENERIK', 'TABLET', 'TABLET', NULL, '', '500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (142, 'HARNAL', 'HARNAL', 'TABLET', 'TABLET', NULL, '', '16700', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (143, 'BROCON', 'BROCON', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (144, 'CLINDAMICIN 300MG', 'CLINDAMICIN 300MG', 'TABLET', 'TABLET', NULL, '', '1600', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (145, 'FAXIDEN 20', 'PIROXICAM 20MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (146, 'NORPID 20', 'SIMVASTATIN 20MG', 'TABLET', 'TABLET', NULL, '', '1000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (147, 'ATORVASTATIN 20', 'ATORVASTATIN 20', 'TABLET', 'TABLET', NULL, '', '3500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (148, 'TIDIFAR', 'CIMETIDIN', 'TABLET', 'TABLET', NULL, '', '400', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (149, 'TILIDON', 'DOMPERIDONE', 'TABLET', 'TABLET', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (150, 'KETOROLAC 30', 'KETOROLAC 30', 'TABLET', 'TABLET', NULL, '', '1500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (151, 'CONCOR', 'BISOPROLOL', 'TABLET', 'TABLET', NULL, '', '2500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (152, 'INTERLAC', 'INTERLAC', 'TABLET', 'TABLET', NULL, '', '14000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (153, 'PARAMOL', 'PARASETAMOL 600MG', 'TABLET', 'TABLET', NULL, '', '300', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (154, 'CEFIXIME 200', 'CEFIXIME 200', 'TABLET', 'TABLET', NULL, '', '4000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (155, 'VECTRINE', 'ERDOSTEIN', 'TABLET', 'TABLET', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (156, 'AMOXICILIN GENERIK', 'AMOXICILIN GENERIK', 'SIRUP', 'SIRUP', NULL, '', '4000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (157, 'ANTASIDA GENERIK', 'ANTASIDA GENERIK', 'SIRUP', 'SIRUP', NULL, '', '4000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (158, 'BRONCHITIN ', 'BRONCHITIN ', 'SIRUP', 'SIRUP', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (159, 'BUFAKRIS', 'BUFAKRIS', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (160, 'CURCUMA', 'CURCUMA', 'SIRUP', 'SIRUP', NULL, '', '13000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (161, 'CURVIPLEX', 'CURVIPLEX', 'SIRUP', 'SIRUP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (162, 'COLFIN', 'COLFIN', 'SIRUP', 'SIRUP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (163, 'DIONICOL', 'THIAMPENICOL', 'SIRUP', 'SIRUP', NULL, '', '7500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (164, 'HUFADON', 'DOMPERIDON', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (165, 'FARSIFEN', 'FARSIFEN', 'SIRUP', 'SIRUP', NULL, '', '5500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (166, 'ITRAMOL', 'PARASETAMOL', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (167, 'FLUCADEX', 'FLUCADEX', 'SIRUP', 'SIRUP', NULL, '', '9000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (168, 'GASTRUSID', 'GASTRUSID', 'SIRUP', 'SIRUP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (169, 'HUFABETAMIN', 'HUFABETAMIN', 'SIRUP', 'SIRUP', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (170, 'HUFANOXIL', 'AMOXICILIN', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (171, 'TRISELA', 'CETIRIZINE', 'SIRUP', 'SIRUP', NULL, '', '5500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (172, 'LOSTACEF ', 'CEFADROXIL', 'SIRUP', 'SIRUP', NULL, '', '9500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (173, 'ZULTROP ', 'KOTRIMOXAZOLE', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (174, 'MOLEXFLU', 'MOLEXFLU', 'SIRUP', 'SIRUP', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (175, 'OBH', 'OBH', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (176, 'PACDIN ', 'PACDIN ', 'SIRUP', 'SIRUP', NULL, '', '4500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (177, 'PARASETAMOL GENERIK', 'PARASETAMOL GENERIK', 'SIRUP', 'SIRUP', NULL, '', '3500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (178, 'PIMTRAKOL', 'PIMTRAKOL', 'SIRUP', 'SIRUP', NULL, '', '12500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (179, 'PLANTASYD', 'PLANTASYD', 'SIRUP', 'SIRUP', NULL, '', '10500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (180, 'ROVERTON', 'AMBROXOL', 'SIRUP', 'SIRUP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (181, 'TYALISIN', 'TYALISIN', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (182, 'PHARMAFIX', 'CEFIXIME', 'SIRUP', 'SIRUP', NULL, '', '14500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (183, 'MOLAFATE', 'SUCRALFAT', 'SIRUP', 'SIRUP', NULL, '', '22000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (184, 'ULCRON', 'ULCRON', 'SIRUP', 'SIRUP', NULL, '', '55000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (185, 'CAZETIN DROP', 'NYSTATIN DROP', 'SIRUP', 'SIRUP', NULL, '', '24000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (186, 'LAXADINE', 'LAXADINE', 'SIRUP', 'SIRUP', NULL, '', '50000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (187, 'FARIZOL ', 'FARIZOL ', 'SIRUP', 'SIRUP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (188, 'KANINA', 'KAOLIN', 'SIRUP', 'SIRUP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (189, 'METOLON', 'METOCLOPRAMID', 'SIRUP', 'SIRUP', NULL, '', '9000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (190, 'APECUR', 'APECUR', 'SIRUP', 'SIRUP', NULL, '', '47000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (191, 'ULTILOX', 'ULTILOX', 'SIRUP', 'SIRUP', NULL, '', '51000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (192, 'CROFED', 'CROFED', 'SIRUP', 'SIRUP', NULL, '', '20000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (193, 'PARATUSIN', 'PARATUSIN', 'SIRUP', 'SIRUP', NULL, '', '29500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (194, 'STIMUNO', 'STIMUNO', 'SIRUP', 'SIRUP', NULL, '', '26000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (195, 'EXOVON', 'BROMHEXIN', 'SIRUP', 'SIRUP', NULL, '', '12500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (196, 'VECTRINE', 'ERDOSTEIN', 'SIRUP', 'SIRUP', NULL, '', '55000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (197, 'SIDIADYL', 'SIDIADYL', 'SIRUP', 'SIRUP', NULL, '', '14000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (198, 'BRONKRIS', 'BROMHEXIN', 'SIRUP', 'SIRUP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (199, 'NOVATUSIN', 'NOVATUSIN', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (200, 'REMCO', 'REMCO', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (201, 'ZENIREX', 'ZENIREX', 'SIRUP', 'SIRUP', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (202, 'SANMAG', 'SANMAG', 'SIRUP', 'SIRUP', NULL, '', '37000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (203, 'VOSEA', 'METOCLOPRAMID', 'SIRUP', 'SIRUP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (204, 'ANTIZA', 'ANTIZA', 'SIRUP', 'SIRUP', NULL, '', '23000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (205, 'ACICLOVIR ', 'ACICLOVIR ', 'SALEP', 'SALEP', NULL, '', '4000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (206, 'BETAMETASON', 'BETAMETASON', 'SALEP', 'SALEP', NULL, '', '3500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (207, 'BIOPLACENTON', 'BIOPLACENTON', 'SALEP', 'SALEP', NULL, '', '17000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (208, 'KLORFESON', 'KLORFESON', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (209, 'ERLAMYCETIN SALEP MATA', 'ERLAMYCETIN SALEP MATA', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (210, 'ERLAMYCETIN TT', 'ERLAMYCETIN TT', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (211, 'ERLAMYCETIN PLUS TM', 'ERLAMYCETIN PLUS TM', 'SALEP', 'SALEP', NULL, '', '12000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (212, 'GENOINT SALEP MATA', 'GENTAMYCIN SALEP MATA', 'SALEP', 'SALEP', NULL, '', '8000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (213, 'GENTAMYCIN GENERIK', 'GENTAMYCIN GENERIK', 'SALEP', 'SALEP', NULL, '', '3000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (214, 'GOM', 'GOM', 'SALEP', 'SALEP', NULL, '', '4000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (215, 'HIDROCORTISON 1%', 'HIDROCORTISON 1%', 'SALEP', 'SALEP', NULL, '', '5000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (216, 'HIDROCORTISON 2,5%', 'HIDROCORTISON 2,5%', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (217, 'SCABIMITE', 'PERMETRIN LOTION', 'SALEP', 'SALEP', NULL, '', '50000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (218, 'GENOINT SALEP KULIT', 'GENTAMYCIN', 'SALEP', 'SALEP', NULL, '', '9000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (219, 'TRIFAMYCETIN', 'KLORAMPHENICOL', 'SALEP', 'SALEP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (220, 'MYCONAZOLE', 'MYCONAZOLE', 'SALEP', 'SALEP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (221, 'TRIFACYCLIN', 'TETRASIKLIN', 'SALEP', 'SALEP', NULL, '', '6000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (222, 'ARMACORT', 'ARMACORT', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (223, 'RECO SALEP MATA', 'KLORAMPHENICOL', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (224, 'CENDO XYTROL', 'CENDO XYTROL', 'SALEP', 'SALEP', NULL, '', '40000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (225, 'ICHTIOL', 'ICHTIOL', 'SALEP', 'SALEP', NULL, '', '7000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (226, 'ERLAMYCETIN TM', 'ERLAMYCETIN TM', 'SALEP', 'SALEP', NULL, '', '9000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (227, 'MEDSCAB', 'PERMETRIN LOTION', 'SALEP', 'SALEP', NULL, '', '50000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (228, 'MEDSCAB LOTION', 'PERMETRIN LOTION', 'SALEP', 'SALEP', NULL, '', '88000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (229, 'MEBO', 'MEBO', 'SALEP', 'SALEP', NULL, '', '104000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (230, 'SANOSKIN GEL', 'SANOSKIN GEL', 'SALEP', 'SALEP', NULL, '', '240000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (231, 'SANOSKIN POT', 'SANOSKIN POT', 'SALEP', 'SALEP', NULL, '', '50000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (232, 'SANOSKIN FOAM', 'SANOSKIN FOAM', 'SALEP', 'SALEP', NULL, '', '158000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (233, 'CARMED', 'CARMED', 'SALEP', 'SALEP', NULL, '', '36500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (234, 'KETOMED ', 'KETOKONAZOLE', 'SALEP', 'SALEP', NULL, '', '33000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (235, 'DARYANT-TULLE', 'DARYANT-TULLE', 'SALEP', 'SALEP', NULL, '', '22500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (236, 'KLODERMA LOTION', 'KLOBETASOL LOTION', 'SALEP', 'SALEP', NULL, '', '95000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (237, 'KLODERMA CRM', 'KLOBETASOL CRM', 'SALEP', 'SALEP', NULL, '', '38000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (238, 'MYCOZOLE', 'MYCONAZOLE', 'SALEP', 'SALEP', NULL, '', '4000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (239, 'COTTON BUD CHARMI', 'COTTON BUD CHARMI', 'SALEP', 'SALEP', NULL, '', '10500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (240, 'PIPET', 'PIPET', 'SALEP', 'SALEP', NULL, '', '2000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (241, 'MYCO+WP', 'MYCO+WP', 'SALEP', 'SALEP', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (242, 'HC 2,5+GENTA', 'HC 2,5+GENTA', 'SALEP', 'SALEP', NULL, '', '10500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (243, 'OXY+WP', 'OXY+WP', 'SALEP', 'SALEP', NULL, '', '6500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (244, 'HC 1+GENTA', 'HC 1+GENTA', 'SALEP', 'SALEP', NULL, '', '8500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (245, 'MYCO 1/2', 'MYCO 1/2', 'SALEP', 'SALEP', NULL, '', '3500', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (246, 'BUSCOPAN', 'BUSCOPAN', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '50000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (247, 'METOLON', 'METOCLOPRAMIDE', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (248, 'B COMPLEX', 'B COMPLEX', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '10000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (249, 'SIDIADRYL', 'SIDIADRYL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '10000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (250, 'BENODON', 'BENODON', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '15000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (251, 'RANITIDIN', 'RANITIDIN', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '20000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (252, 'DEXAMETASONE', 'DEXAMETASONE', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '15000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (253, 'EPINEPHRINE', 'EPINEPHRINE', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '30000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (254, 'ASAM TRANEKSAMAT (KALNEX)', 'ASAM TRANEKSAMAT (KALNEX)', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (255, 'VALISANBE (DIAZEPAM)', 'VALISANBE (DIAZEPAM)', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '35000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (256, 'KETOROLAC', 'KETOROLAC', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (257, 'ONDANSETRON', 'ONDANSETRON', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (258, 'KANAMISIN 2 VIAL', 'KANAMISIN 2 VIAL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '150000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (259, 'MECOBALAMIN', 'MECOBALAMIN', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (260, 'KETOPROFEN', 'KETOPROFEN', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '35000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (261, 'FUROSEMID', 'FUROSEMID', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '35000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (262, 'BC+ADYRIL', 'BC+ADYRIL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '15000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (263, 'KETO+ADYRIL', 'KETO+ADYRIL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '30000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (264, 'BENODON+BC', 'BENODON+BC', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '20000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (265, 'BENODON+ADYRIL', 'BENODON+ADYRIL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '20000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (266, 'RANIT+ADYRIL', 'RANIT+ADYRIL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (267, 'DEXA+ADYRIL', 'DEXA+ADYRIL', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '20000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (268, 'RANIT+BC', 'RANIT+BC', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '25000', '', NULL, '', 'ACTIVE');
INSERT INTO `m_barang` VALUES (269, 'KETO+BC', 'KETO+BC', 'SUNTIKAN', 'SUNTIKAN', NULL, '', '30000', '', NULL, '', 'ACTIVE');

-- ----------------------------
-- Table structure for m_dokter
-- ----------------------------
DROP TABLE IF EXISTS `m_dokter`;
CREATE TABLE `m_dokter`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_dokter
-- ----------------------------
INSERT INTO `m_dokter` VALUES (1, 'dr. Ahmad Rival', 'OPEN');
INSERT INTO `m_dokter` VALUES (2, 'Ichsan, dr', 'OPEN');

-- ----------------------------
-- Table structure for m_kategoribarang
-- ----------------------------
DROP TABLE IF EXISTS `m_kategoribarang`;
CREATE TABLE `m_kategoribarang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_barang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_kategoribarang
-- ----------------------------
INSERT INTO `m_kategoribarang` VALUES (41, 'ATK', NULL);
INSERT INTO `m_kategoribarang` VALUES (42, 'MEBELER', NULL);

-- ----------------------------
-- Table structure for m_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `m_kecamatan`;
CREATE TABLE `m_kecamatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_kecamatan
-- ----------------------------
INSERT INTO `m_kecamatan` VALUES (1, 'MAJALAYA', NULL);
INSERT INTO `m_kecamatan` VALUES (2, 'IBUN', NULL);
INSERT INTO `m_kecamatan` VALUES (3, 'PASEH', NULL);
INSERT INTO `m_kecamatan` VALUES (4, 'SOLOKAN JERUK', NULL);
INSERT INTO `m_kecamatan` VALUES (5, 'CIPARAY', NULL);

-- ----------------------------
-- Table structure for m_layanan
-- ----------------------------
DROP TABLE IF EXISTS `m_layanan`;
CREATE TABLE `m_layanan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tarif` float(9, 0) NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_layanan
-- ----------------------------
INSERT INTO `m_layanan` VALUES (1, 'NEBULIZER', 'NON OPERATIF', 45000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (2, 'EKG', 'NON OPERATIF', 50000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (3, 'WT RINGAN', 'NON OPERATIF', 20000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (4, 'WT SEDANG', 'NON OPERATIF', 40000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (5, 'WT BERAT', 'NON OPERATIF', 60000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (6, 'EKSTRAKSI SERUMEN', 'NON OPERATIF', 25000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (7, 'EKSTRAKSI SERUMEN 2 TELINGA', 'NON OPERATIF', 50000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (8, 'HECTING PERTAMA (1)', 'NON OPERATIF', 50000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (9, 'HECTING SELANJUTNYA (2-DST)', 'NON OPERATIF', 25000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (10, 'OKSIGEN / 15 MENIT', 'NON OPERATIF', 20000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (11, 'EKSTRAKSI KUKU', 'NON OPERATIF', 100000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (12, 'BEDAH MINOR CLAVUS', 'NON OPERATIF', 100000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (13, 'HOME VISITE 1', 'NON OPERATIF', 50000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (14, 'HOME VISITE 2', 'NON OPERATIF', 100000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (15, 'HOME VISITE 3', 'NON OPERATIF', 150000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (16, 'BHP 1', 'NON OPERATIF', 20000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (17, 'BHP 2', 'NON OPERATIF', 30000, 'ACTIVE');
INSERT INTO `m_layanan` VALUES (18, 'BHP 3 ', 'NON OPERATIF', 40000, 'ACTIVE');

-- ----------------------------
-- Table structure for m_pasien
-- ----------------------------
DROP TABLE IF EXISTS `m_pasien`;
CREATE TABLE `m_pasien`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` int(20) NOT NULL,
  `nama_pasien` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gender` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `no_bpjs` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kk` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telpon1` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telpon2` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `no_rm`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_pasien
-- ----------------------------
INSERT INTO `m_pasien` VALUES (27, 1, 'Atep', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (28, 2, 'Ilyas SUparjadireja', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (29, 3, 'Haryono', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (30, 4, 'Edzekiel', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (31, 5, 'Inkyun', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (32, 6, 'Dede', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (33, 7, 'Febry ', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (34, 8, 'Natsir', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (35, 9, 'Yusuf', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (36, 10, 'Abu Bakar', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (37, 11, 'Jupe', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (38, 12, 'Fabiano', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (39, 20, 'Adri Idrus', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (40, 13, 'Maman', '', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (41, 21, 'next', 'next', 'laki-laki', '0000-00-00', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (42, 22, 'lutfi', 'Majalaya', 'laki-laki', '1988-08-12', '', '', '', 'ISLAM', '', '', '', 'ACTIVE');
INSERT INTO `m_pasien` VALUES (43, 23, 'Hen hen', 'Bojong salawe', 'laki-laki', '1988-12-02', '', '', '', 'ISLAM', '0854545111222', '', '', 'ACTIVE');

-- ----------------------------
-- Table structure for m_role
-- ----------------------------
DROP TABLE IF EXISTS `m_role`;
CREATE TABLE `m_role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_role
-- ----------------------------
INSERT INTO `m_role` VALUES (1, 'IBS');
INSERT INTO `m_role` VALUES (2, 'IPSRS');
INSERT INTO `m_role` VALUES (3, 'ICU');
INSERT INTO `m_role` VALUES (4, 'CSSD');
INSERT INTO `m_role` VALUES (5, 'FARMASI');
INSERT INTO `m_role` VALUES (6, 'GIZI');
INSERT INTO `m_role` VALUES (7, 'HCU');
INSERT INTO `m_role` VALUES (8, 'HD');
INSERT INTO `m_role` VALUES (9, 'IGD');
INSERT INTO `m_role` VALUES (10, 'LABORATORIUM');
INSERT INTO `m_role` VALUES (11, 'OBGYN');
INSERT INTO `m_role` VALUES (12, 'PERINATOLOGI');
INSERT INTO `m_role` VALUES (13, 'RADIOLOGI');
INSERT INTO `m_role` VALUES (14, 'RANAP');
INSERT INTO `m_role` VALUES (15, 'RAJAN');
INSERT INTO `m_role` VALUES (16, 'REHABILITASI MEDIK');
INSERT INTO `m_role` VALUES (17, 'REKAM MEDIS');

-- ----------------------------
-- Table structure for m_ruangan
-- ----------------------------
DROP TABLE IF EXISTS `m_ruangan`;
CREATE TABLE `m_ruangan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_ruangan
-- ----------------------------
INSERT INTO `m_ruangan` VALUES (32, 'RUANGAN 1', '', 'ACTIVE');
INSERT INTO `m_ruangan` VALUES (33, 'RUANGAN 2', '', 'ACTIVE');
INSERT INTO `m_ruangan` VALUES (34, 'ADMIN', NULL, 'ACTIVE');

-- ----------------------------
-- Table structure for m_users
-- ----------------------------
DROP TABLE IF EXISTS `m_users`;
CREATE TABLE `m_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `room` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `access` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_users
-- ----------------------------
INSERT INTO `m_users` VALUES (1, 'admin', 'admin', 'admin', 'ADMIN', '34', 'ADMIN', 'ACTIVE');
INSERT INTO `m_users` VALUES (15, 'user', 'user', 'user', 'user', '33', 'USER', 'OPEN');

-- ----------------------------
-- Table structure for pm_menu
-- ----------------------------
DROP TABLE IF EXISTS `pm_menu`;
CREATE TABLE `pm_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_main_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pm_menu
-- ----------------------------
INSERT INTO `pm_menu` VALUES (1, 'master', '#', 'glyphicon glyphicon-book', '0');
INSERT INTO `pm_menu` VALUES (2, 'user', 'master/users', 'fa fa-dashboard', '1');
INSERT INTO `pm_menu` VALUES (3, 'ruangan', 'master/ruangan', 'fa fa-dashboard', '1');
INSERT INTO `pm_menu` VALUES (4, 'Role Menu', 'master/role', 'fa fa-dashboard', '1');
INSERT INTO `pm_menu` VALUES (5, 'Barang', 'master/barang', 'fa fa-dashboard', '1');
INSERT INTO `pm_menu` VALUES (6, 'Setting Aplikasi', '#', 'fa fa-dashboard', '0');
INSERT INTO `pm_menu` VALUES (7, 'Pendaftaran', 'pendaftaran', 'fa fa-dashboard', '0');
INSERT INTO `pm_menu` VALUES (8, 'Dokter', 'master/dokter', 'fa fa-dashboard', '1');
INSERT INTO `pm_menu` VALUES (9, 'Layanan', 'master/layanan', 'fa fa-dashboard', '1');
INSERT INTO `pm_menu` VALUES (10, 'Penyesuaian Stok', 'transaksi/penyesuaian_stok', 'fa fa-edit', '11');
INSERT INTO `pm_menu` VALUES (11, 'Apotek', '#', 'fa fa-edit', '0');
INSERT INTO `pm_menu` VALUES (12, 'Transaksi apotik umum', 'transaksi', 'fa fa-edit', '11');
INSERT INTO `pm_menu` VALUES (13, 'laporan ', '#', 'fa fa-edit', '0');
INSERT INTO `pm_menu` VALUES (34, 'laporan Kunjungan', 'pendaftaran/laporan_kunjungan', 'fa fa-edit', '13');
INSERT INTO `pm_menu` VALUES (35, 'Stok Barang', '#', 'fa fa-dashboard', '11');
INSERT INTO `pm_menu` VALUES (36, 'Laporan Data Pasien', 'master/laporandatapasien', 'fa fa-edit', '13');
INSERT INTO `pm_menu` VALUES (37, 'Laporan Pendapatan', '#', 'fa fa-edit', '13');

-- ----------------------------
-- Table structure for pm_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `pm_role_menu`;
CREATE TABLE `pm_role_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pm_role_menu
-- ----------------------------
INSERT INTO `pm_role_menu` VALUES (26, 'ADMIN', 1);
INSERT INTO `pm_role_menu` VALUES (27, 'ADMIN', 2);
INSERT INTO `pm_role_menu` VALUES (28, 'ADMIN', 3);
INSERT INTO `pm_role_menu` VALUES (29, 'ADMIN', 4);
INSERT INTO `pm_role_menu` VALUES (30, 'ADMIN', 5);
INSERT INTO `pm_role_menu` VALUES (31, 'ADMIN', 6);
INSERT INTO `pm_role_menu` VALUES (32, 'ADMIN', 7);
INSERT INTO `pm_role_menu` VALUES (33, 'ADMIN', 8);
INSERT INTO `pm_role_menu` VALUES (34, 'ADMIN', 9);
INSERT INTO `pm_role_menu` VALUES (35, 'ADMIN', 10);
INSERT INTO `pm_role_menu` VALUES (36, 'ADMIN', 11);
INSERT INTO `pm_role_menu` VALUES (37, 'ADMIN', 12);
INSERT INTO `pm_role_menu` VALUES (38, 'ADMIN', 13);
INSERT INTO `pm_role_menu` VALUES (39, 'ADMIN', 14);
INSERT INTO `pm_role_menu` VALUES (40, 'ADMIN', 34);
INSERT INTO `pm_role_menu` VALUES (41, 'ADMIN', 0);
INSERT INTO `pm_role_menu` VALUES (42, 'ADMIN', 36);
INSERT INTO `pm_role_menu` VALUES (43, 'ADMIN', 37);
INSERT INTO `pm_role_menu` VALUES (44, 'ADMIN', 35);

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for transaksi_det
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_det`;
CREATE TABLE `transaksi_det`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(11) NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `id_barang` int(11) NULL DEFAULT NULL,
  `nama_barang` varchar(0) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` float NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `total` float NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
