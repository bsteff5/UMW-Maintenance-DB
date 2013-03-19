SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE IF NOT EXISTS umw_maintenance;

CREATE TABLE IF NOT EXISTS `reports` (
	`id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`Description` longtext NOT NULL,
	`ReportDate` date NOT NULL,
	`Priority` int(11) DEFAULT '0',
	building_id INT(3) NOT NULL,
	CONSTRAINT reports_buildings_id_fk
	FOREIGN KEY (`building_id`)
	REFERENCES buildings (`id`)
);

CREATE TABLE IF NOT EXISTS `users` (
	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	`username` varchar(30) NOT NULL,
	`password` varchar(80) NOT NULL,
	`permissions` int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `resolved` (
	`id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`Description` longtext NOT NULL,
	`Priority` int(11) DEFAULT '0',
	building_id INT(3) NOT NULL,
	CONSTRAINT resolved_buildings_id_fk
	FOREIGN KEY(`building_id`)
	REFERENCES buildings (id)
);

CREATE TABLE IF NOT EXISTS `rooms`(
	`room` varchar(3) NOT NULL PRIMARY KEY,
	building_id INT(3) NOT NULL,
	CONSTRAINT rooms_buildings_id_fk
	FOREIGN KEY(building_id)
	REFERENCES buildings (id)
);

CREATE TABLE IF NOT EXISTS buildings (
	`id` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS `room_problems` (
	`room` varchar(3) NOT NULL,
	`report_id` int(3) NOT NULL,
	PRIMARY KEY(`report_id`)
);

--INSERT INTO buildings (name) VALUES ('Trinkle');
--INSERT INTO buildings (name) VALUES ('Coombs');
