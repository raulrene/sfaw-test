CREATE SCHEMA 'siteDB';

CREATE TABLE `siteDB`.`Configurare` (
  `idConfigurare` INT NULL AUTO_INCREMENT,
  `logo` VARCHAR(1500) NULL,
  `background` VARCHAR(1500) NULL,
  `font-family` VARCHAR(1500) NULL,
  PRIMARY KEY (`idConfigurare`));