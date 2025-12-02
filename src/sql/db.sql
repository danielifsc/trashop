CREATE SCHEMA IF NOT EXISTS `db_trashop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci  ;
USE `db_trashop` ;

-- Tabela de Usuários
CREATE TABLE IF NOT EXISTS `db_trashop`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `carteira` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci ;
