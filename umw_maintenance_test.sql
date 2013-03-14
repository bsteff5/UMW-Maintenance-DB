SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS 'reports' (
	'id' bigint(20) NOT NULL AUTO_INCREMENT,
	'Description' longtext NOT NULL,
	'ReportDate' date NOT NULL,
	'Priority' int(11) DEFAULT '0',
	'BuildingID' int(3) NOT NULL,
	PRIMARY KEY ('id')
);

CREATE TABLE IF NOT EXISTS 'users' (
	'id' bigint(20) NOT NULL AUTO_INCREMENT,
	'username' varchar(30) NOT NULL,
	'password' varchar(80) NOT NULL,
	'permissions' int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY ('id')
);

CREATE TABLE IF NOT EXISTS 'resolved' (
	'id' bigint(20) NOT NULL AUTO_INCREMENT,
	'Description' longtext NOT NULL,
	'Priority' int(11) DEFAULT '0',
	'BuildingID' int(3) NOT NULL,
	PRIMARY KEY('id')
);

CREATE TABLE IF NOT EXISTS 'rooms' (
	'room' varchar(3) NOT NULL,
	'building_id' int(3) NOT NULL,
	PRIMARY KEY('room')
);

CREATE TABLE IF NOT EXISTS 'room_problems' (
	'room' varchar(3) NOT NULL,
	'report_id' int(3) NOT NULL,
	PRIMARY KEY('report_id')
);
