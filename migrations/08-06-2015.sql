CREATE SCHEMA `site` ;
CREATE TABLE `site`.`config` (
  `idconfig` INT NULL AUTO_INCREMENT,
  `site-logo` VARCHAR(1500) NULL,
  `site-background` VARCHAR(1500) NULL,
  `site-fontFam` VARCHAR(1500) NULL,
  `site-fontSize` VARCHAR(1500) NULL,
  PRIMARY KEY (`idconfig`));
