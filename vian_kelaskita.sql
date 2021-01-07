/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : vian_kelaskita

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-01-07 16:25:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `var` (`var`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'APP_NAME', 'Kelas Belajar', 'application name', '2021-01-07 13:55:37', '2021-01-07 13:55:37', null);
INSERT INTO `config` VALUES ('2', 'APP_VERSION', '1.0.0', 'aplication version', '2021-01-07 13:55:37', '2021-01-07 13:55:37', null);
INSERT INTO `config` VALUES ('3', 'LOGIN_SIGNATURE', '_!KELAS!_', 'signature for login account', '2021-01-07 13:55:37', '2021-01-07 13:55:37', null);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for master_jurusan
-- ----------------------------
DROP TABLE IF EXISTS `master_jurusan`;
CREATE TABLE `master_jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of master_jurusan
-- ----------------------------
INSERT INTO `master_jurusan` VALUES ('1', 'IPA');
INSERT INTO `master_jurusan` VALUES ('2', 'IPS');

-- ----------------------------
-- Table structure for master_kelas
-- ----------------------------
DROP TABLE IF EXISTS `master_kelas`;
CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of master_kelas
-- ----------------------------
INSERT INTO `master_kelas` VALUES ('1', 'Kelas X');
INSERT INTO `master_kelas` VALUES ('2', 'Kelas XI');
INSERT INTO `master_kelas` VALUES ('3', 'Kelas XII');

-- ----------------------------
-- Table structure for master_mapel
-- ----------------------------
DROP TABLE IF EXISTS `master_mapel`;
CREATE TABLE `master_mapel` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(50) DEFAULT '',
  `nama_mapel` varchar(200) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of master_mapel
-- ----------------------------
INSERT INTO `master_mapel` VALUES ('1', '1', 'Bahasa Indonesia');
INSERT INTO `master_mapel` VALUES ('2', '2', 'Bahasa Inggris');
INSERT INTO `master_mapel` VALUES ('3', '3', 'Matematika');
INSERT INTO `master_mapel` VALUES ('4', '4', 'Biologi');
INSERT INTO `master_mapel` VALUES ('5', '5', 'Fisika');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Teacher', 'teacher', 'Teacher', '2', null, '1', '2021-01-07 09:55:56', '2021-01-07 13:37:39', null);
INSERT INTO `menu` VALUES ('2', 'Teacher', '/matapelajaran', 'Mata Pelajaran', '1', 'book', '1', '2021-01-07 09:56:10', '2021-01-07 14:14:57', null);
INSERT INTO `menu` VALUES ('3', 'Teacher', '/materi', 'Materi dan Bahan', '1', 'book-open', '2', '2021-01-07 09:56:20', '2021-01-07 14:15:03', null);
INSERT INTO `menu` VALUES ('4', 'Teacher', '/absen', 'Absensi Guru', '1', 'activity', '3', '2021-01-07 09:56:20', '2021-01-07 14:15:05', null);
INSERT INTO `menu` VALUES ('5', 'Students', 'student', 'Student', '2', null, '2', '2021-01-07 13:22:40', '2021-01-07 13:48:31', null);
INSERT INTO `menu` VALUES ('6', 'Students', 'students', 'Materi dan Bahan', '1', 'book', '1', '2021-01-07 13:22:40', '2021-01-07 13:48:32', null);
INSERT INTO `menu` VALUES ('7', 'Kepala Sekolah', 'kepalasekolah', 'Kepala Sekolah', '2', null, '3', '2021-01-07 13:37:16', '2021-01-07 13:48:37', null);
INSERT INTO `menu` VALUES ('8', 'Kepala Sekolah', 'kepalasekolahh', 'Menu Kepala Sekolah', '1', 'book', '1', '2021-01-07 13:37:31', '2021-01-07 13:48:38', null);
INSERT INTO `menu` VALUES ('9', 'Kurikulum', 'kurikulum', 'Kurikulum', '2', null, '4', '2021-01-07 13:40:59', '2021-01-07 13:48:40', null);
INSERT INTO `menu` VALUES ('10', 'Kurikulum', 'kurikulumm', 'Menu Kurikulum', '1', 'book', '1', '2021-01-07 13:41:11', '2021-01-07 13:48:41', null);

-- ----------------------------
-- Table structure for menu_role
-- ----------------------------
DROP TABLE IF EXISTS `menu_role`;
CREATE TABLE `menu_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_role
-- ----------------------------
INSERT INTO `menu_role` VALUES ('1', '1', '1', '2021-01-07 09:57:07', '2021-01-07 09:57:07', null);
INSERT INTO `menu_role` VALUES ('2', '2', '1', '2021-01-07 09:57:12', '2021-01-07 09:57:17', null);
INSERT INTO `menu_role` VALUES ('3', '3', '1', '2021-01-07 09:57:12', '2021-01-07 09:57:17', null);
INSERT INTO `menu_role` VALUES ('4', '4', '1', '2021-01-07 09:57:12', '2021-01-07 09:57:17', null);
INSERT INTO `menu_role` VALUES ('5', '5', '5', '2021-01-07 13:27:49', '2021-01-07 13:40:18', null);
INSERT INTO `menu_role` VALUES ('6', '6', '5', '2021-01-07 13:27:51', '2021-01-07 13:40:17', null);
INSERT INTO `menu_role` VALUES ('7', '7', '2', '2021-01-07 13:40:30', '2021-01-07 13:40:30', null);
INSERT INTO `menu_role` VALUES ('8', '8', '2', '2021-01-07 13:40:32', '2021-01-07 13:40:32', null);
INSERT INTO `menu_role` VALUES ('9', '9', '3', '2021-01-07 13:41:29', '2021-01-07 13:41:29', null);
INSERT INTO `menu_role` VALUES ('10', '10', '3', '2021-01-07 13:41:31', '2021-01-07 13:41:31', null);
INSERT INTO `menu_role` VALUES ('11', '5', '1', '2021-01-07 13:42:22', '2021-01-07 13:42:22', null);
INSERT INTO `menu_role` VALUES ('12', '6', '1', '2021-01-07 13:42:24', '2021-01-07 13:42:24', null);
INSERT INTO `menu_role` VALUES ('13', '7', '1', '2021-01-07 13:42:26', '2021-01-07 13:42:26', null);
INSERT INTO `menu_role` VALUES ('14', '8', '1', '2021-01-07 13:42:30', '2021-01-07 13:42:30', null);
INSERT INTO `menu_role` VALUES ('15', '9', '1', '2021-01-07 13:42:33', '2021-01-07 13:42:33', null);
INSERT INTO `menu_role` VALUES ('16', '10', '1', '2021-01-07 13:42:35', '2021-01-07 13:42:35', null);
INSERT INTO `menu_role` VALUES ('17', '1', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);
INSERT INTO `menu_role` VALUES ('18', '2', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);
INSERT INTO `menu_role` VALUES ('19', '3', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);
INSERT INTO `menu_role` VALUES ('20', '4', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'Administrator', '2021-01-05 10:45:09', '2021-01-07 13:32:19', null);
INSERT INTO `role` VALUES ('2', 'Kepala Sekolah', '2021-01-07 13:27:43', '2021-01-07 13:32:26', null);
INSERT INTO `role` VALUES ('3', 'Kurikulum', '2021-01-07 13:32:29', '2021-01-07 13:32:29', null);
INSERT INTO `role` VALUES ('4', 'Guru', '2021-01-07 13:32:35', '2021-01-07 13:32:35', null);
INSERT INTO `role` VALUES ('5', 'Siswa', '2021-01-07 13:32:38', '2021-01-07 13:32:38', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin@gmail.com', '$2y$10$C3.Jn5ZiSK2q3Bp9aaG6I.fPD6ZagTt1HhD8AcojxwZoFGCPwkdam', '', '1', '2021-01-07 13:33:06', '2021-01-07 13:47:22', null, null);
INSERT INTO `users` VALUES ('2', 'kepalasekolah@gmail.com', '$2y$10$qAEKTNKaLDITJXm7qkbjS.lWnRnhCJsLdyjYjDqhGHNs./hIan0B6', '', '2', '2021-01-07 13:33:13', '2021-01-07 13:39:15', null, null);
INSERT INTO `users` VALUES ('3', 'kurikulum@gmail.com', '$2y$10$4Hbm/qwaR3eC53sqVoIzleUcXGdiYDqNi36eu8lP7IRFJvJsHwKG6', '', '3', '2021-01-07 13:33:20', '2021-01-07 13:39:18', null, null);
INSERT INTO `users` VALUES ('4', 'guru@gmail.com', '$2y$10$qfvGoJgS7nXGWJnqAP7wRelIuvtCwonOcwlAEzRqtCZgIgeFx9svK', '', '4', '2021-01-07 13:33:37', '2021-01-07 13:39:21', null, null);
INSERT INTO `users` VALUES ('5', 'siswa@gmail.com', '$2y$10$k8kbu3WFEa3Kv6WpO5WbE.HVAaMOZYa9FWbiuGaeDazdpMrHiHe2.', '', '5', '2021-01-07 13:33:44', '2021-01-07 13:39:21', null, null);
