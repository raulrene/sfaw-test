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

ALTER TABLE `primarydb`.`capitol`
CHANGE COLUMN `id` `idcapitol` INT(11) NOT NULL COMMENT '' ;

ALTER TABLE `primarydb`.`subcapitol`
ADD CONSTRAINT `key 1`
FOREIGN KEY (`idcapitol`)
REFERENCES `primarydb`.`capitol` (`idcapitol`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

CREATE TABLE `primarydb`.`subsubcapitol` (
  `idsubsubcapitol` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `subsubcapitol` VARCHAR(45) NULL COMMENT '',
  `idsubcapitol` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idsubsubcapitol`)  COMMENT '');

ALTER TABLE `primarydb`.`subsubcapitol`
ADD CONSTRAINT `key 2`
FOREIGN KEY (`idsubcapitol`)
REFERENCES `primarydb`.`subcapitol` (`idsubcapitol`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

CREATE TABLE `primarydb`.`content` (
  `idcontent` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `content` VARCHAR(1500) NULL COMMENT '',
  `idsubsubcapitol` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idcontent`)  COMMENT '',
  INDEX `key3_idx` (`idsubsubcapitol` ASC)  COMMENT '',
  CONSTRAINT `key3`
  FOREIGN KEY (`idsubsubcapitol`)
  REFERENCES `primarydb`.`subsubcapitol` (`idsubsubcapitol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
