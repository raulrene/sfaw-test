CREATE TABLE `site`.`replies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment_id` INT NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `author_img` VARCHAR(255) NOT NULL,
  `date_posted` DATETIME NOT NULL,
  `comm_text` VARCHAR(1500) NOT NULL,
  `author_link` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));