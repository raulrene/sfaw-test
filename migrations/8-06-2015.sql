CREATE SCHEMA 'siteDB';

CREATE TABLE `siteDB`.`Configurare` (
  `idConfigurare` INT NULL AUTO_INCREMENT,
  `logo` VARCHAR(1500) NULL,
  `background` VARCHAR(1500) NULL,
  `font-family` VARCHAR(1500) NULL,
  PRIMARY KEY (`idConfigurare`));


CREATE TABLE `siteDB`.`Capitol` (
  `idCapitol` INT NOT NULL AUTO_INCREMENT,
  `numeCapitol` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idCapitol`));
