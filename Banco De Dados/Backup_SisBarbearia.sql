CREATE DATABASE  IF NOT EXISTS `db_sisbarbearia` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_sisbarbearia`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: db_sisbarbearia
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_agendamento`
--

DROP TABLE IF EXISTS `tb_agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_agendamento` (
  `codagendamento` int NOT NULL AUTO_INCREMENT,
  `hora` char(5) NOT NULL,
  `dataagenda` date NOT NULL,
  `totalserv` double NOT NULL,
  `tb_funcionario_codmatri` int NOT NULL,
  `tb_cliente_codclie` int NOT NULL,
  `tb_servico_codservico` int NOT NULL,
  PRIMARY KEY (`codagendamento`),
  KEY `fk_tb_agendamento_tb_funcionario1_idx` (`tb_funcionario_codmatri`),
  KEY `fk_tb_agendamento_tb_cliente1_idx` (`tb_cliente_codclie`),
  KEY `fk_tb_agendamento_tb_servico1_idx` (`tb_servico_codservico`),
  CONSTRAINT `fk_tb_agendamento_tb_cliente1` FOREIGN KEY (`tb_cliente_codclie`) REFERENCES `tb_cliente` (`codclie`),
  CONSTRAINT `fk_tb_agendamento_tb_funcionario1` FOREIGN KEY (`tb_funcionario_codmatri`) REFERENCES `tb_funcionario` (`codmatri`),
  CONSTRAINT `fk_tb_agendamento_tb_servico1` FOREIGN KEY (`tb_servico_codservico`) REFERENCES `tb_servico` (`codservico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_agendamento`
--

LOCK TABLES `tb_agendamento` WRITE;
/*!40000 ALTER TABLE `tb_agendamento` DISABLE KEYS */;
INSERT INTO `tb_agendamento` VALUES (1,'14:30','2022-11-20',12,1,1,1),(2,'13:00','2022-11-20',12,2,1,1);
/*!40000 ALTER TABLE `tb_agendamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_categoria` (
  `codcateg` int NOT NULL AUTO_INCREMENT,
  `nomecateg` varchar(30) NOT NULL,
  PRIMARY KEY (`codcateg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categoria`
--

LOCK TABLES `tb_categoria` WRITE;
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
INSERT INTO `tb_categoria` VALUES (1,'Cortes'),(2,'Barba');
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente` (
  `codclie` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `email` longtext,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  PRIMARY KEY (`codclie`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'Teste','14785236985','123456','gmail.com','adm','clie','M');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_funcionario`
--

DROP TABLE IF EXISTS `tb_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_funcionario` (
  `codmatri` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `email` longtext,
  `rua` varchar(25) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `uf` char(2) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `cep` char(9) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  PRIMARY KEY (`codmatri`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_funcionario`
--

LOCK TABLES `tb_funcionario` WRITE;
/*!40000 ALTER TABLE `tb_funcionario` DISABLE KEYS */;
INSERT INTO `tb_funcionario` VALUES (1,'adm','1234567809','four','admin','adm','adm','ES','Vitória','123456','adm','adm','M'),(2,'rllrl','389','238','jadsadjsaj','shjhdf','d','ES','Cariacica','273','adm','adm','M');
/*!40000 ALTER TABLE `tb_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_servico`
--

DROP TABLE IF EXISTS `tb_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_servico` (
  `codservico` int NOT NULL AUTO_INCREMENT,
  `nomeserv` varchar(30) NOT NULL,
  `precoserv` double NOT NULL,
  `tb_categoria_codcateg` int NOT NULL,
  PRIMARY KEY (`codservico`),
  KEY `fk_tb_servico_tb_categoria_idx` (`tb_categoria_codcateg`),
  CONSTRAINT `fk_tb_servico_tb_categoria` FOREIGN KEY (`tb_categoria_codcateg`) REFERENCES `tb_categoria` (`codcateg`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_servico`
--

LOCK TABLES `tb_servico` WRITE;
/*!40000 ALTER TABLE `tb_servico` DISABLE KEYS */;
INSERT INTO `tb_servico` VALUES (1,'Surfista',12,1);
/*!40000 ALTER TABLE `tb_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_sisbarbearia'
--

--
-- Dumping routines for database 'db_sisbarbearia'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-20 18:55:13
