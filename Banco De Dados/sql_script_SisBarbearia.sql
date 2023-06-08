-- MySQL Workbench Synchronization
-- Generated: 2022-11-18 22:29
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Fellipy

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `db_SisBarbearia` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `db_SisBarbearia`.`tb_funcionario` (
  `codmatri` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(13) NOT NULL,
  `email` LONGTEXT NULL DEFAULT NULL,
  `rua` VARCHAR(25) NOT NULL,
  `bairro` VARCHAR(25) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `cidade` VARCHAR(20) NOT NULL,
  `cep` CHAR(9) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  PRIMARY KEY (`codmatri`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `db_SisBarbearia`.`tb_cliente` (
  `codclie` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(13) NOT NULL,
  `email` LONGTEXT NULL DEFAULT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  PRIMARY KEY (`codclie`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `db_SisBarbearia`.`tb_servico` (
  `codservico` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeserv` VARCHAR(30) NOT NULL,
  `precoserv` REAL NOT NULL,
  `tb_categoria_codcateg` INT(11) NOT NULL,
  PRIMARY KEY (`codservico`),
  INDEX `fk_tb_servico_tb_categoria_idx` (`tb_categoria_codcateg` ASC) ,
  CONSTRAINT `fk_tb_servico_tb_categoria`
    FOREIGN KEY (`tb_categoria_codcateg`)
    REFERENCES `db_SisBarbearia`.`tb_categoria` (`codcateg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `db_SisBarbearia`.`tb_agendamento` (
  `codagendamento` INT(11) NOT NULL AUTO_INCREMENT,
  `hora` CHAR(5) NOT NULL,
  `dataagenda` DATE NOT NULL,
  `totalserv` REAL NOT NULL,
  `tb_funcionario_codmatri` INT(11) NOT NULL,
  `tb_cliente_codclie` INT(11) NOT NULL,
  `tb_servico_codservico` INT(11) NOT NULL,
  PRIMARY KEY (`codagendamento`),
  INDEX `fk_tb_agendamento_tb_funcionario1_idx` (`tb_funcionario_codmatri` ASC),
  INDEX `fk_tb_agendamento_tb_cliente1_idx` (`tb_cliente_codclie` ASC) ,
  INDEX `fk_tb_agendamento_tb_servico1_idx` (`tb_servico_codservico` ASC) ,
  CONSTRAINT `fk_tb_agendamento_tb_funcionario1`
    FOREIGN KEY (`tb_funcionario_codmatri`)
    REFERENCES `db_SisBarbearia`.`tb_funcionario` (`codmatri`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_agendamento_tb_cliente1`
    FOREIGN KEY (`tb_cliente_codclie`)
    REFERENCES `db_SisBarbearia`.`tb_cliente` (`codclie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_agendamento_tb_servico1`
    FOREIGN KEY (`tb_servico_codservico`)
    REFERENCES `db_SisBarbearia`.`tb_servico` (`codservico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `db_SisBarbearia`.`tb_categoria` (
  `codcateg` INT(11) NOT NULL AUTO_INCREMENT,
  `nomecateg` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`codcateg`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
