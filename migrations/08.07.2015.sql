CREATE SCHEMA `primarydb` ;
CREATE TABLE `primarydb`.`configurare` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `logo` VARCHAR(1500) NULL COMMENT '',
  `background` VARCHAR(1500) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '');
CREATE TABLE `primarydb`.`capitol` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `capitol` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');
CREATE TABLE `primarydb`.`subcapitol` (
  `idsubcapitol` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `subcapitol` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`idsubcapitol`)  COMMENT '');