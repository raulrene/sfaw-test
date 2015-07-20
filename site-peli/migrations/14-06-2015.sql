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


CREATE TABLE `site`.`home` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(55) NOT NULL,
  `img` VARCHAR(155) NOT NULL,
  `text` VARCHAR(1500) NOT NULL,
  `tag` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `site`.`home`
ADD COLUMN `name` VARCHAR(45) NOT NULL AFTER `tag`;


INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Share Your Knowledge Online', 'assets/img/', 'Maecenas semper accumsan turpis, suscipit pharetra tortor dignissim sed. Morbi at justo nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis rutrum nisl, imperdiet.', 'slider', ' ');
INSERT INTO `site`.`home` (`id`, `title`, `img`, `text`, `tag`, `name`) VALUES ('', 'Learning Online Becomes Easier', 'assets/img/', 'estibulum ipsum diam, mattis in dictum et, vulputate nec libero. Nunc feugiat ultrices convallis. Nulla non nisi tellus, nec egestas est. Sed congue semper nisl et pellentesque. In rhoncus orci eu diam rutrum.', 'slider', ' ');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Start Teaching With Academy', 'assets/img/slide_1.png', 'Academy is a perfect theme for sharing and selling your knowledge online. It’s not just a theme, but learning management system that provides great features to make learning and teaching online easier for everyone.', 'slider', ' ');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Testimonials', 'assets/img/avatar.jpg', 'Pellentesque pulvinar sodales quam a placerat. Vivamus quis vitae consectetur ligula. Ut bibendum eleifend quam eget fermentum. Nulla facilisi. Augue aliquam augue vel odio faucibus luctus!', 'testimonials', 'Jessica White');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Testimonials', 'assets/img/john.png', 'Maecenas sed metus sem, ac varius ante. Nullam non mi tempor nisl varius consectetur vel in ipsum. Vestibulum sem diam, vehicula sit amet luctus adipiscing, viverra in sem. Proin molestie.', 'testimonials', 'John Dawson');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Testimonials', 'assets/img/mary.png', 'Donec convallis, mauris quis tempor pulvinar, lorem neque rhoncus nisl, at hendrerit quam leo volutpat est. Quisque fringilla, nulla vitae vehicula fermentum, nibh dolor tristique, scelerisque.', 'testimonials', 'Mary Springs');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Learn Anything Online', 'assets/img/book.jpg', 'Suspendisse ante mi, iaculis ac eleifend id, venenatis non eros. Sed rhoncus gravida elit, eu sollicitudin sem iaculis. Proin scelerisque, ipsum mollis posuere metus.', 'sub_sl', ' ');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Talk to Our Experts', 'assets/img/image_3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna mauris, sagittis tempus varius vel, eleifend ut metus. Pellentesque sapien tellus, accumsan.', 'sub_sl', ' ');
INSERT INTO `site`.`home` (`title`, `img`, `text`, `tag`, `name`) VALUES ('Communicate with People', 'assets/img/image_4.jpg', 'Nullam viverra, magna vitae mollis venenatis, leo mi dignissim quam, et lacinia purus diam nec sapien. Cras aliquet, purus non rhoncus aliquet, dapibus.', 'sub_sl', ' ');
