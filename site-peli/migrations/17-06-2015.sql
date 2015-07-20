CREATE TABLE `site`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `site`.`users`
ADD COLUMN `email` VARCHAR(255) NOT NULL AFTER `password`,
ADD COLUMN `phone` VARCHAR(45) NOT NULL AFTER `email`;
