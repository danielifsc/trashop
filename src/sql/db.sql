CREATE SCHEMA IF NOT EXISTS `db_trashop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci  ;
USE `db_trashop` ;

-- Tabela de Usuários
CREATE TABLE IF NOT EXISTS `db_trashop`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci ;

-- Tabela de Atividades
-- CREATE TABLE `atividades` (
 -- `id` INT AUTO_INCREMENT PRIMARY KEY,
 -- `usuario_id` INT NOT NULL,
 -- `titulo` VARCHAR(255) NOT NULL,
 -- `descricao` TEXT,
 -- `status` ENUM('pendente', 'concluida') NOT NULL DEFAULT 'pendente',
 -- `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE
-- ) ENGINE=InnoDB DEFAULT

-- Tabela de carteira
CREATE TABLE IF NOT EXISTS `db_trashop`.`carteira` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `trashcoin` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_carteira_usuario` (`usuario_id` ASC),
  CONSTRAINT `fk_carteira_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `db_trashop`.`usuario` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci ;

