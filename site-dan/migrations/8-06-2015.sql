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

CREATE TABLE `siteDB`.`SubCapitol` (
  `idSubCapitol` INT NOT NULL AUTO_INCREMENT,
  `idParentCapitol` INT NOT NULL,
  `numeSubCapitol` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idSubCapitol`),
  INDEX `fk_subcapCapitol_idx` (`idParentCapitol` ASC),
  CONSTRAINT `fk_subcapCapitol`
    FOREIGN KEY (`idParentCapitol`)
    REFERENCES `siteDB`.`Capitol` (`idCapitol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `siteDB`.`SubSubCapitol` (
  `idSubSubCapitol` INT NOT NULL AUTO_INCREMENT,
  `idParentSubCapitol` INT NOT NULL,
  `numeSubSubCapitol` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idSubSubCapitol`),
  INDEX `fk_subsubcapitolSubcapitol_idx` (`idParentSubCapitol` ASC),
  CONSTRAINT `fk_subsubcapitolSubcapitol`
    FOREIGN KEY (`idParentSubCapitol`)
    REFERENCES `siteDB`.`SubCapitol` (`idSubCapitol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `siteDB`.`Content` (
  `idContent` INT NOT NULL AUTO_INCREMENT,
  `idParentSubSubCapitol` INT NOT NULL,
  `contentText` VARCHAR(1500) NULL,
  PRIMARY KEY (`idContent`),
  INDEX `fk_contentSubSubCapitol_idx` (`idParentSubSubCapitol` ASC),
  CONSTRAINT `fk_contentSubSubCapitol`
    FOREIGN KEY (`idParentSubSubCapitol`)
    REFERENCES `siteDB`.`SubSubCapitol` (`idSubSubCapitol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `siteDB`.`Coding` (
  `idCoding` INT NOT NULL AUTO_INCREMENT,
  `idParentSubSubCapitol` INT NOT NULL,
  `codingText` VARCHAR(1500) NULL,
  PRIMARY KEY (`idCoding`),
  INDEX `fk_codingSubSubCapitol_idx` (`idParentSubSubCapitol` ASC),
  CONSTRAINT `fk_codingSubSubCapitol`
    FOREIGN KEY (`idParentSubSubCapitol`)
    REFERENCES `siteDB`.`SubSubCapitol` (`idSubSubCapitol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `siteDB`.`Comentarii` (
  `idComentarii` INT NOT NULL AUTO_INCREMENT,
  `idParentSubSubCapitol` INT NOT NULL,
  `commentText` VARCHAR(1500) NULL,
  `dateAdded` DATETIME NOT NULL,
  PRIMARY KEY (`idComentarii`),
  INDEX `fk_comentariiSubSubCapitol_idx` (`idParentSubSubCapitol` ASC),
  CONSTRAINT `fk_comentariiSubSubCapitol`
    FOREIGN KEY (`idParentSubSubCapitol`)
    REFERENCES `siteDB`.`SubSubCapitol` (`idSubSubCapitol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

