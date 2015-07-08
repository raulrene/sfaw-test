CREATE SCHEMA `site` ;
CREATE TABLE `site`.`config` (
  `idconfig` INT NULL AUTO_INCREMENT,
  `site-logo` VARCHAR(1500) NULL,
  `site-background` VARCHAR(1500) NULL,
  `site-fontFam` VARCHAR(1500) NULL,
  `site-fontSize` VARCHAR(1500) NULL,
  PRIMARY KEY (`idconfig`));
CREATE TABLE `site`.`Chapters` (
  `idChapters` INT NOT NULL AUTO_INCREMENT,
  `ChapterName` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idChapters`));
  CREATE TABLE `site`.`Subchapters` (
  `idSubchapters` INT NOT NULL AUTO_INCREMENT,
  `chapter` VARCHAR(1500) NOT NULL,
  `Subchapterscol` VARCHAR(45) NULL,
  PRIMARY KEY (`idSubchapters`));
  CREATE TABLE `site`.`Subsubch` (
  `idSubsubch` INT NOT NULL AUTO_INCREMENT,
  `Subch` VARCHAR(1500) NOT NULL,
  `Subsubchname` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idSubsubch`));
  CREATE TABLE `site`.`content` (
  `idcontent` INT NOT NULL AUTO_INCREMENT,
  `subsubch` VARCHAR(1500) NOT NULL,
  `text` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idcontent`));
  CREATE TABLE `site`.`comments` (
  `idcomments` INT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(1500) NOT NULL,
  `commentscontent` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`idcomments`));
  ALTER TABLE `site`.`comments` 
ADD INDEX `fk_comments_1_idx` (`content` ASC);
ALTER TABLE `site`.`comments` 
ADD CONSTRAINT `fk_comments_1`
  FOREIGN KEY (`content`)
  REFERENCES `site`.`content` (`idcontent`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  ALTER TABLE `site`.`content` 
ADD INDEX `fk_content_2_idx` (`subsubch` ASC);
ALTER TABLE `site`.`content` 
ADD CONSTRAINT `fk_content_2`
  FOREIGN KEY (`subsubch`)
  REFERENCES `site`.`Subsubch` (`idSubsubch`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

  ALTER TABLE `site`.`Subsubch` 
ADD INDEX `fk_Subsubch_1_idx` (`Subch` ASC);
ALTER TABLE `site`.`Subsubch` 
ADD CONSTRAINT `fk_Subsubch_1`
  FOREIGN KEY (`Subch`)
  REFERENCES `site`.`Subchapters` (`idSubchapters`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

  ALTER TABLE `site`.`Subchapters` 
ADD INDEX `fk_Subchapters_4_idx` (`chapter` ASC);
ALTER TABLE `site`.`Subchapters` 
ADD CONSTRAINT `fk_Subchapters_4`
  FOREIGN KEY (`chapter`)
  REFERENCES `site`.`Chapters` (`idChapters`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;