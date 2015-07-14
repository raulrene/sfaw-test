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

INSERT INTO `site`.`sub_chapters` (`chapter_id`, `links`, `id_html`, `class`, `friendly_url`) VALUES ('1', 'Online Learning', 'online', 'current', '#online-learning');
INSERT INTO `site`.`sub_chapters` (`chapter_id`, `links`, `id_html`, `class`, `friendly_url`) VALUES ('1', 'WooCommerce', 'woo', ' ', '#woo-commerce');
INSERT INTO `site`.`sub_chapters` (`chapter_id`, `links`, `id_html`, `class`, `friendly_url`) VALUES ('1', 'User Profiles', 'user', ' ', '#user-profiles');
INSERT INTO `site`.`sub_chapters` (`chapter_id`, `links`, `class`, `friendly_url`) VALUES ('1', 'Media Player', ' ', '#media-player');

INSERT INTO `site`.`sub_sub_ch` (`sub_ch_id`, `sub_sub_ch_name`, `order`) VALUES ('1', 'Learning Management', ' ');
INSERT INTO `site`.`sub_sub_ch` (`sub_ch_id`, `sub_sub_ch_name`, `order`) VALUES ('2', 'WooCommerce Integration', ' ');
INSERT INTO `site`.`sub_sub_ch` (`sub_ch_id`, `sub_sub_ch_name`, `order`) VALUES ('3', 'Personal User Profiles', ' ');
INSERT INTO `site`.`sub_sub_ch` (`sub_ch_id`, `sub_sub_ch_name`, `order`) VALUES ('4', 'Bulit-in Media Player', ' ');


INSERT INTO `site`.`content` (`sub_sub_ch_id`, `text_1`, `text_2`, `text_3`) VALUES ('1', 'Quisque id augue erat, suscipit ultricies est. Maecenas feugiat justo ac massa porttitor mollis auctor nulla ullamcorper. sed blandit interdum.', 'Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.', 'Etiam quam est, malesuada ut fringilla eu, auctor vel odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem nam mattis.');
INSERT INTO `site`.`content` (`sub_sub_ch_id`, `text_1`, `text_2`, `text_3`) VALUES ('2', 'Nulla in orci justo. In elit elit, tempus sit amet pellentesque ut, tempus ac risus. Suspendisse imperdiet, mi in bibendum scelerisque massa.', 'Etiam quam est, malesuada ut fringilla eu, auctor vel odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem nam mattis.', 'Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.');
INSERT INTO `site`.`content` (`sub_sub_ch_id`, `text_1`, `text_2`, `text_3`) VALUES ('3', 'Fusce euismod euismod enim non adipiscing. Integer ante nisi, dictum tempus elementum hendrerit, convallis a tortor maecenas sed ante.', 'Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.', 'Etiam quam est, malesuada ut fringilla eu, auctor vel odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem nam mattis.');
INSERT INTO `site`.`content` (`sub_sub_ch_id`, `text_1`, `text_2`, `text_3`) VALUES ('4', 'Auctor hendrerit hendrerit lacus id euismod. Aliquam erat volutpat. In in sem tortor. Vestibulum facilisis consequat purus, vel adipiscing velit.', 'Etiam quam est, malesuada ut fringilla eu, auctor vel odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem nam mattis.', 'Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fringilla magna ut risus sagittis ultrices. Nam eget varius sem. Nam mattis consectetur suscipit. Vivamus quis ante enim. Cras id sodales metus.');
