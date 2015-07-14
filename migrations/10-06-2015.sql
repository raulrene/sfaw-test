ALTER TABLE `site`.`sub_chapters`
CHANGE COLUMN `sub_ch_name` `links` VARCHAR(255) NOT NULL ,
CHANGE COLUMN `order` `id_html` VARCHAR(255) NOT NULL ,
ADD COLUMN `class` VARCHAR(45) NOT NULL AFTER `id_html`;
ALTER TABLE `site`.`sub_chapters`
ADD COLUMN `friendly_url` VARCHAR(255) NOT NULL AFTER `class`;
ALTER TABLE `site`.`content`
CHANGE COLUMN `text` `text_1` VARCHAR(1500) NOT NULL ,
ADD COLUMN `text_2` VARCHAR(1500) NOT NULL AFTER `text_1`,
ADD COLUMN `text_3` VARCHAR(1500) NOT NULL AFTER `text_2`;
