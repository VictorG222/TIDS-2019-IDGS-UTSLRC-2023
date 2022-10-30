CREATE DATABASE si;
USE si;

CREATE TABLE `si`.`user` (
  `userid` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `correo_electronico` VARCHAR(255) NOT NULL,
  `contrasenia` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`userid`));
  
CREATE TABLE `si`.`admin` (
  `adminid` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `correo_electronico` VARCHAR(255) NOT NULL,
  `contrasenia` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`adminid`));

CREATE TABLE `si`.`log` (
  `logid` INT(10) NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`logid`)
  );

INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('1', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('2', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('3', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('4', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('5', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('6', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('7', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('8', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('9', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('10', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('11', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('12', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('13', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('14', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('15', '1', '1');
INSERT INTO `si`.`user` (`name`, `correo_electronico`, `contrasenia`) VALUES ('15', '1', '1');

INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('1', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('2', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('3', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('4', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('5', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('6', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('7', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('8', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('9', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('10', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('11', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('12', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('13', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('14', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('15', '1', '1');
INSERT INTO `si`.`admin` (`name`, `correo_electronico`, `contrasenia`) VALUES ('15', '1', '1');

INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-01');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-02');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-03');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-04');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-05');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-06');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-07');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-08');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-09');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-10');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-11');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-12');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-13');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-14');
INSERT INTO `si`.`log` (`fecha`) VALUES ('2022-01-15');
