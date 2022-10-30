-- MySQL dump 10.13  Distrib 8.0.0-dmr, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: master_clinician
-- ------------------------------------------------------
-- Server version	8.0.0-dmr-log

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
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `cita_id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_de_cancelacion` date DEFAULT NULL,
  `paciente` int(10) NOT NULL,
  `medico` int(10) NOT NULL,
  PRIMARY KEY (`cita_id`),
  KEY `fk_paciente_id` (`paciente`),
  KEY `fk_medico_id` (`medico`),
  CONSTRAINT `fk_medico_id` FOREIGN KEY (`medico`) REFERENCES `medico` (`medico_id`),
  CONSTRAINT `fk_paciente_id` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`paciente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (1,'2021-07-04','07:00:00',NULL,2,1),(2,'2021-08-04','07:00:00',NULL,2,1),(3,'2021-08-04','07:00:00',NULL,1,1);
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medico`
--

DROP TABLE IF EXISTS `medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medico` (
  `medico_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(255) NOT NULL,
  `cedula_profesional` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  PRIMARY KEY (`medico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medico`
--

LOCK TABLES `medico` WRITE;
/*!40000 ALTER TABLE `medico` DISABLE KEYS */;
INSERT INTO `medico` VALUES (1,'Roberto Jaime Palacio Gaxiola','9573168492','Cardiología'),(2,'Laura Silvia Perez Garcia','7214685394','Cardiología');
/*!40000 ALTER TABLE `medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `paciente_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_completo_paciente` varchar(255) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `genero` varchar(12) NOT NULL,
  `tipo_de_sangre` varchar(5) NOT NULL,
  `peso` float NOT NULL,
  `estatura` float NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `contraseña` varchar(12) NOT NULL,
  `telefono_de_casa` varchar(12) NOT NULL,
  `telefono_movil` varchar(12) NOT NULL,
  `enfermedades` varchar(255) NOT NULL,
  `alergias` varchar(255) NOT NULL,
  `cirugias_y_accidentes` varchar(255) NOT NULL,
  PRIMARY KEY (`paciente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'Juan Meza Alvarez','2000-11-21','Masculino','O-',80,1.76,'Avenida Madero 13 y 14','insertauncorreoelectronico@gmail.com','123456789','6531326854','653491132','n/a','n/a','n/a'),(2,'Victor Manuel Galvan Covarrubias','2000-11-02','Masculino','O+',85,1.7,'Avenida Flores 30 y 31','victor@gmail.com','123','6531550633','6532097580','n/a','Ambroxol','Apendicitis');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-01 13:37:12
