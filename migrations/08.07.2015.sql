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

ALTER TABLE `primarydb`.`subsubcapitol`
DROP FOREIGN KEY `key 2`;

ALTER TABLE `primarydb`.`subcapitol`
DROP FOREIGN KEY `key1`;

ALTER TABLE `primarydb`.`content`
DROP FOREIGN KEY `key3`;

ALTER TABLE `primarydb`.`capitol`
CHANGE COLUMN `idcapitol` `id` INT(11) NOT NULL COMMENT '' ;

ALTER TABLE `primarydb`.`subcapitol`
CHANGE COLUMN `idsubcapitol` `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '' ,
CHANGE COLUMN `idcapitol` `capitol` INT(11) NULL COMMENT '' ;
ALTER TABLE `primarydb`.`subcapitol`
ADD CONSTRAINT `capitol`
FOREIGN KEY (`capitol`)
REFERENCES `primarydb`.`capitol` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
ALTER TABLE `primarydb`.`subcapitol`
CHANGE COLUMN `subcapitol` `sub_capitol` VARCHAR(255) NULL DEFAULT NULL COMMENT '' ;

ALTER TABLE `primarydb`.`subsubcapitol`
CHANGE COLUMN `idsubsubcapitol` `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '' ,
CHANGE COLUMN `subsubcapitol` `sub_sub_capitol` VARCHAR(45) NULL COMMENT '' ,
CHANGE COLUMN `idsubcapitol` `subcapitol_id` INT(11) NOT NULL COMMENT '' ;
ALTER TABLE `primarydb`.`subsubcapitol`
ADD CONSTRAINT `subcapitol`
FOREIGN KEY (`subcapitol_id`)
REFERENCES `primarydb`.`subcapitol` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `primarydb`.`subcapitol`
DROP FOREIGN KEY `capitol`;
ALTER TABLE `primarydb`.`subcapitol`
CHANGE COLUMN `capitol` `capitol_id` INT(11) NULL DEFAULT NULL COMMENT '' ;
ALTER TABLE `primarydb`.`subcapitol`
ADD CONSTRAINT `capitol_id`
FOREIGN KEY (`capitol_id`)
REFERENCES `primarydb`.`capitol` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `primarydb`.`subsubcapitol`
DROP FOREIGN KEY `subcapitol`;
ALTER TABLE `primarydb`.`subsubcapitol`
ADD CONSTRAINT `subcapitol_id`
FOREIGN KEY (`subcapitol_id`)
REFERENCES `primarydb`.`subcapitol` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `primarydb`.`content`
CHANGE COLUMN `idcontent` `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '' ,
CHANGE COLUMN `idsubsubcapitol` `sub_sub_capitol_id` INT(11) NOT NULL COMMENT '' ;
ALTER TABLE `primarydb`.`content`
ADD CONSTRAINT `sub_sub_capitol_id`
FOREIGN KEY (`sub_sub_capitol_id`)
REFERENCES `primarydb`.`subsubcapitol` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `primarydb`.`subsubcapitol`
DROP FOREIGN KEY `subcapitol_id`;
ALTER TABLE `primarydb`.`subsubcapitol`
CHANGE COLUMN `subcapitol_id` `sub_capitol_id` INT(11) NOT NULL COMMENT '' ;
ALTER TABLE `primarydb`.`subsubcapitol`
ADD CONSTRAINT `sub_capitol_id`
FOREIGN KEY (`sub_capitol_id`)
REFERENCES `primarydb`.`subcapitol` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

CREATE TABLE `primarydb`.`comentarii` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `comentarii` VARCHAR(1500) NULL COMMENT '',
  `sub_sub_capitol_id` INT(11) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');

CREATE TABLE `primarydb`.`coding` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `coding` VARCHAR(1500) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');

ALTER TABLE `primarydb`.`subsubcapitol`
RENAME TO  `primarydb`.`sub_sub_capitol` ;

ALTER TABLE `primarydb`.`subcapitol`
RENAME TO  `primarydb`.`sub_capitol` ;

ALTER TABLE `primarydb`.`content`
DROP FOREIGN KEY `sub_sub_capitol_id`;

ALTER TABLE `primarydb`.`sub_capitol`
DROP FOREIGN KEY `capitol_id`;

ALTER TABLE `primarydb`.`sub_sub_capitol`
DROP FOREIGN KEY `sub_capitol_id`;

ALTER TABLE `primarydb`.`capitol`
ADD COLUMN `order` INT NULL COMMENT '' AFTER `capitol`,
ADD COLUMN `url` VARCHAR(1500) NULL COMMENT '' AFTER `order`;

ALTER TABLE `primarydb`.`comentarii`
DROP COLUMN `sub_sub_capitol_id`;

ALTER TABLE `primarydb`.`content`
DROP COLUMN `sub_sub_capitol_id`,
DROP INDEX `key3_idx` ;
