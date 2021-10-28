CREATE DATABASE procesos_memoria;
USE procesos_memoria;
CREATE TABLE `procesos_memoria`.`t_process` (
  `id_process` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `letra_process` VARCHAR(45) NOT NULL,
  `page_process` INT NOT NULL,
  `estado_process` VARCHAR(45) NOT NULL,
  `fech_insert` DATETIME NULL DEFAULT now(),
  PRIMARY KEY (`id_process`));