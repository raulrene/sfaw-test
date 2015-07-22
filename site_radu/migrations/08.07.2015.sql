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

//tabel index


CREATE TABLE `primarydb`.`index` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `title` VARCHAR(45) NULL COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `text` VARCHAR(1500) NULL COMMENT '',
  `img` VARCHAR(45) NULL COMMENT '',
  `tag` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');
  
  INSERT INTO `primarydb`.`index` (`title`, `text`, `img`, `tag`) VALUES ('Learning Online Becomes Easier', 'Academy is a perfect theme for sharing and selling your knowledge online. It’s not just a theme, but learning management system that provides great features to make learning and teaching online easier for everyone.', 'slide_1.png', 'slide');
INSERT INTO `primarydb`.`index` (`title`, `text`, `img`, `tag`) VALUES ('Learn Anything Online', 'Suspendisse ante mi, iaculis ac eleifend id, venenatis non eros. Sed rhoncus gravida elit, eu sollicitudin sem iaculis. Proin scelerisque, ipsum mollis posuere metus.', 'book.png', 'info');
INSERT INTO `primarydb`.`index` (`title`, `text`, `img`, `tag`) VALUES ('Talk to Our Experts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna mauris, sagittis tempus varius vel, eleifend ut metus. Pellentesque sapien tellus, accumsan.', 'book.png', 'info');
INSERT INTO `primarydb`.`index` (`title`, `text`, `img`, `tag`) VALUES ('Communicate with People', 'Nullam viverra, magna vitae mollis venenatis, leo mi dignissim quam, et lacinia purus diam nec sapien. Cras aliquet, purus non rhoncus aliquet, dapibus.', 'book.png', 'info');
INSERT INTO `primarydb`.`index` (`name`, `text`, `img`) VALUES ('Jessica White', 'Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!', 'avatar.jpg');
INSERT INTO `primarydb`.`index` (`name`, `text`, `img`) VALUES ('John Dawson', 'Maecenas sed metus sem, ac varius ante. Nullam non mi tempor nisl varius consectetur vel in ipsum. Vestibulum sem diam, vehicula sit amet luctus adipiscing, viverra in sem. Proin molestie.', 'avatar.jpg');
INSERT INTO `primarydb`.`index` (`name`, `text`, `img`) VALUES ('Mary Springs', 'Donec convallis, mauris quis tempor pulvinar, lorem neque rhoncus nisl, at hendrerit quam leo volutpat est. Quisque fringilla, nulla vitae vehicula fermentum, nibh dolor tristique, scelerisque.', 'avatar.jpg');


//end tabel tindex

//tabel courses 

CREATE TABLE `primarydb`.`courses` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `price` VARCHAR(45) NULL COMMENT '',
  `img` VARCHAR(45) NULL COMMENT '',
  `author` VARCHAR(45) NULL COMMENT '',
  `users` VARCHAR(45) NULL COMMENT '',
  `stars` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '');
  
  INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Basic Cooking Techinques', '$128', 'Steven Granger', '12', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Home Fitness Training', 'FREE', 'Mark Blackwood', '12', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Digital Photography', '$142', 'Michael Lawson', '12', '3');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Architecture Basics', '$136', 'Steven Granger', '11', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Spa Treatment at Home', '$126', 'Mark Blackwood', '14', '5');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Professional Singing', '$138', 'Steven Granger', '12', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Business Management', '$146', 'Mark Blackwood', '10', '5');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Club Dance Course', '$125', 'Michael Lawson', '15', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Mountain Hiking Course', '$122', 'Mark Blackwood', '14', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('DJ Master Lessons', '$134', 'Steven Granger', '11', '4');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Steven Granger', 'FREE', 'Michael Lawson', '14', '3');
INSERT INTO `primarydb`.`courses` (`name`, `price`, `author`, `users`, `stars`) VALUES ('Starting Online Business', '$132', 'Steven Granger', '12', '4');
UPDATE `primarydb`.`courses` SET `img`='cook.jpg' WHERE `id`='1';
UPDATE `primarydb`.`courses` SET `img`='fitt.jpg' WHERE `id`='2';
UPDATE `primarydb`.`courses` SET `img`='picc.jpg' WHERE `id`='3';
UPDATE `primarydb`.`courses` SET `img`='arch.jpg' WHERE `id`='4';
UPDATE `primarydb`.`courses` SET `img`='spa.jpg' WHERE `id`='5';
UPDATE `primarydb`.`courses` SET `img`='sing.jpg' WHERE `id`='6';
UPDATE `primarydb`.`courses` SET `img`='business.jpg' WHERE `id`='7';
UPDATE `primarydb`.`courses` SET `img`='club.jpg' WHERE `id`='8';
UPDATE `primarydb`.`courses` SET `img`='mountain.jpg' WHERE `id`='9';
UPDATE `primarydb`.`courses` SET `img`='dj.jpg' WHERE `id`='10';
UPDATE `primarydb`.`courses` SET `img`='yoga.jpg' WHERE `id`='11';
UPDATE `primarydb`.`courses` SET `img`='online.jpg' WHERE `id`='12';


/end tabel courses