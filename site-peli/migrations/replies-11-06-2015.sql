CREATE TABLE `site`.`replies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment_id` INT NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `author_img` VARCHAR(255) NOT NULL,
  `date_posted` DATETIME NOT NULL,
  `comm_text` VARCHAR(1500) NOT NULL,
  `author_link` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));

  INSERT INTO `site`.`replies` (`comment_id`, `author`, `author_img`, `date_posted`, `comm_text`, `author_link`) VALUES ('1', 'Harry', 'assets/img/harry.jpg', 'February 23,2013', 'Suspendisse varius, leo nec eleifend faucibus, neque ante molestie massa, eu vestibulum massa tortor non odio. Quisque porta velit vel purus blandit faucibus elementum.', '#');
INSERT INTO `site`.`replies` (`author`, `author_img`, `date_posted`, `comm_text`, `author_link`) VALUES ('Marrco', 'assets/img/marcho.jpg', 'February 23,2013', 'Suspendisse varius, leo nec eleifend faucibus, neque ante molestie massa, eu vestibulum massa tortor non odio. Quisque porta velit vel purus blandit faucibus elementum.', '#');
