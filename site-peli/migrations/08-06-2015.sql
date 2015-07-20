CREATE SCHEMA `site` ;
CREATE TABLE `site`.`config` (
  `id` INT NULL AUTO_INCREMENT,
  `site_logo` VARCHAR(1500) NULL,
  `site_background` VARCHAR(1500) NULL,
  `site_font_fam` VARCHAR(1500) NULL,
  `site_font_size` VARCHAR(1500) NULL,
  PRIMARY KEY (`id`));
CREATE TABLE `site`.`chapters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `chapter_name` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`id`));
  CREATE TABLE `site`.`sub_chapters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `chapter_id` INT NOT NULL,
  `sub_ch_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
  CREATE TABLE `site`.`sub_sub_ch` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sub_ch` INT NOT NULL,
  `sub_sub_ch_name` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`id`));
  CREATE TABLE `site`.`content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sub_sub_ch` INT NOT NULL,
  `text` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`id`));
  CREATE TABLE `site`.`comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` INT NOT NULL,
  `comments_content` VARCHAR(1500) NOT NULL,
  PRIMARY KEY (`id`));
