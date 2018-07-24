CREATE DATABASE `soap`;

CREATE TABLE `soap`.`student` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

INSERT INTO `student` (`id`, `name`) VALUES (NULL, 'Zin Mar Htun'), (NULL, 'Thazin Htun');