-- MySQL dump 10.13  Distrib 8.0.0-dmr, for Win64 (x86_64)
--
-- Host: localhost    Database: universidad_ut
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `idalumno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `contrasenia` varchar(12) NOT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Q','1@gmail.com','1'),(2,'W','2@gmail.com','2'),(3,'E','3@gmail.com','3'),(4,'R','4@gmail.com','4'),(5,'T','5@gmail.com','5'),(6,'Y','6@gmail.com','6'),(7,'U','7@gmail.com','7'),(8,'I','8@gmail.com','8'),(9,'O','9@gmail.com','9'),(10,'P','10@gmail.com','10'),(11,'A','11@gmail.com','11'),(12,'S','12@gmail.com','12'),(13,'D','13@gmail.com','13'),(14,'F','14@gmail.com','14'),(15,'G','15@gmail.com','15'),(16,'H','16@gmail.com','16'),(17,'I','17@gmail.com','17'),(18,'J','18@gmail.com','18'),(19,'K','19@gmail.com','19'),(20,'L','20@gmail.com','20'),(21,'Q','1@gmail.com','1'),(22,'W','2@gmail.com','2'),(23,'E','3@gmail.com','3'),(24,'R','4@gmail.com','4'),(25,'T','5@gmail.com','5'),(26,'Y','6@gmail.com','6'),(27,'U','7@gmail.com','7'),(28,'I','8@gmail.com','8'),(29,'O','9@gmail.com','9'),(30,'P','10@gmail.com','10'),(31,'A','11@gmail.com','11'),(32,'S','12@gmail.com','12'),(33,'D','13@gmail.com','13'),(34,'F','14@gmail.com','14'),(35,'G','15@gmail.com','15'),(36,'H','16@gmail.com','16'),(37,'I','17@gmail.com','17'),(38,'J','18@gmail.com','18'),(39,'K','19@gmail.com','19'),(40,'L','20@gmail.com','20');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificaciones`
--

DROP TABLE IF EXISTS `calificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calificaciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `valor` varchar(5) NOT NULL,
  `alumno` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificaciones`
--

LOCK TABLES `calificaciones` WRITE;
/*!40000 ALTER TABLE `calificaciones` DISABLE KEYS */;
INSERT INTO `calificaciones` VALUES (1,'AU',1),(2,'AU',2),(3,'AU',3),(4,'AU',4),(5,'AU',5),(6,'AU',6),(7,'AU',7),(8,'AU',8),(9,'AU',9),(10,'AU',10),(11,'AU',11),(12,'AU',12),(13,'AU',13),(14,'AU',14),(15,'AU',15),(16,'AU',16),(17,'AU',17),(18,'AU',18),(19,'AU',19),(20,'AU',20);
/*!40000 ALTER TABLE `calificaciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-29  1:33:14
