ALTER TABLE `site`.`users`
ADD COLUMN `type` VARCHAR(45) NOT NULL AFTER `phone`;

UPDATE `site`.`users` SET `type`='admin' WHERE `id`='1';
UPDATE `site`.`users` SET `type`='admin' WHERE `id`='4';
UPDATE `site`.`users` SET `name`='fifi ', `type`='user' WHERE `id`='3';
UPDATE `site`.`users` SET `type`='user' WHERE `id`='2';
