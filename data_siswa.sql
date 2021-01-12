/*
 Navicat Premium Data Transfer

 Source Server         : phpMyAdmin
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : db_bergerak

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 11/01/2021 22:34:46
*/ 
SET NAMES utf8mb4;

SET FOREIGN_KEY_CHECKS = 0;


-- ----------------------------
-- Table structure for agama
-- ----------------------------
DROP TABLE IF	EXISTS `agama`;
CREATE TABLE `agama` 
( `id_agama` INT NOT NULL, 
`nama_agama` VARCHAR ( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, 
PRIMARY KEY ( `id_agama` ) USING BTREE ) ENGINE = INNODB CHARACTER 
SET = latin1 COLLATE = latin1_swedish_ci;
-- ----------------------------
-- Records of agama
-- ----------------------------
BEGIN;
	INSERT INTO `agama`
	VALUES
		( 10001, 'Islam' ),
		( 10002, 'Kristen' ),
		( 10003, 'Katolik' ),
		( 10004, 'Hindu' ),
		( 10005, 'Buddha' ),
		( 10006, 'Konghucu' );
	COMMIT;


-- ----------------------------
-- Table structure for data_siswa
-- ----------------------------
	DROP TABLE
	IF
		EXISTS `data_siswa`;
	CREATE TABLE `data_siswa` (
		`nisn` INT NOT NULL,
		`nama` VARCHAR ( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
		`tempat_lahir` VARCHAR ( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
		`tanggal_lahir` VARCHAR ( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
		`asal_sekolah` VARCHAR ( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
		`alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
		`id_gender` VARCHAR ( 5 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
		`id_agama` INT NOT NULL,
		PRIMARY KEY ( `nisn` ) USING BTREE ) ENGINE = INNODB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;
-- ----------------------------
-- Records of data_siswa
-- ----------------------------
	BEGIN;
		INSERT INTO `data_siswa`
		VALUES
			( 100807010, 'Denis Irawan', 'Surabaya', '15-10-2002', 'SMPN 04 Surabaya', 'Purwosari, Surakarta', '10002', 10001 ),
			( 100807020, 'Bella Soekamti', 'Surakarta', '2004-01-14', 'SMP Batik 01 Surakarta', 'Laweyan, Surakarta', '10002', 10002 ),
			( 100807030, 'Reza Risky Nugroho', 'Jakarta', '12-11-2003', 'SMPN 32 Jakarta', 'Mojosongo, Surakarta', '10001', 10003 ),
			( 100807040, 'Bima Saputra', 'Malang', '22-09-2003', 'SMP Al Islam 01 Surakarta', 'Ngemplak, Boyolali', '10001', 10006 ),
			( 100807050, 'Salsabila', 'Yogyakarta', '01-03-2003', 'SMPN 20 Surakarta', 'Solo baru, Sukoharjo', '10002', 10002 ),
			( 100807060, 'Budi Utomo', 'Semarang', '02-12-2002', 'SMPN 24 Semarang', 'Jaten, Karanganyar', '10001', 10001 );
		COMMIT;
		
-- ----------------------------
-- Table structure for gender
-- ----------------------------
		DROP TABLE
		IF
			EXISTS `gender`;
		CREATE TABLE `gender` 
		( `id_gender` INT NOT NULL, 
		`nama_gender` VARCHAR ( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL, 
		PRIMARY KEY ( `id_gender` ) USING BTREE ) ENGINE = INNODB CHARACTER 
		SET = latin1 COLLATE = latin1_swedish_ci;
-- ----------------------------
-- Records of gender
-- ----------------------------
		BEGIN;
			INSERT INTO `gender`
			VALUES
				( 10001, 'Laki - Laki' ),
				( 10002, 'Perempuan' );
			COMMIT;
		
SET FOREIGN_KEY_CHECKS = 1;

