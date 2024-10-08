-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: curso_24
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.16-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00' ON UPDATE current_timestamp(),
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  `usuario_alteracao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'04667644052','lucastomazini2008@gmail.com','1234','2024-09-24 20:32:45','0001-01-01 00:00:00',0,'0000-00-00 00:00:00'),(2,'04542508500','email@gmail.com','4567','2024-10-01 20:56:49','0001-01-01 00:00:00',0,NULL);
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rua` varchar(512) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(9) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `cidade` varchar(512) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `id_pessoa` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_pessoa_FK` (`id_pessoa`),
  CONSTRAINT `endereco_pessoa_FK` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'sao paulo','top','123','95702300','em algum lugar ','bento','rs',1);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `sobrenome` varchar(500) NOT NULL,
  `nome_completo` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00' ON UPDATE current_timestamp(),
  `sexo` enum('M','F') NOT NULL DEFAULT 'M',
  `tipo_pessoa` enum('Juridica','Fisica') NOT NULL DEFAULT 'Juridica',
  `estado_civil` enum('Solteiro','Casado','Divorciado','Viuvo') NOT NULL DEFAULT 'Solteiro',
  `data_aniversario` date NOT NULL,
  `id_usuario` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoa_Usuario_FK` (`id_usuario`),
  CONSTRAINT `pessoa_Usuario_FK` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'lucas','inutilismo','lucas inutilismo','lucasinutilismo@gmail.com','04667644088','04667644088981','2024-10-01 20:54:42','2024-10-01 20:57:33','M','Juridica','Solteiro','2012-12-12',1),(2,'pedro','inutilismo','pedro inutilismo','pedroinutilismo@gmail.com','04667644089','04667644088982','2024-10-01 20:58:51','0001-01-01 00:00:00','M','Juridica','Solteiro','2012-12-12',2);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_24'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-01 21:37:43
