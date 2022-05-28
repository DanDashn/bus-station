CREATE DATABASE  IF NOT EXISTS `bus_station` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bus_station`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: bus_station
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `brones`
--

DROP TABLE IF EXISTS `brones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brones` (
  `idticket` int NOT NULL AUTO_INCREMENT,
  `idpassenger` int DEFAULT NULL,
  `idflight` int DEFAULT NULL,
  PRIMARY KEY (`idticket`),
  KEY `pass_idx` (`idpassenger`),
  KEY `flight_idx` (`idflight`),
  CONSTRAINT `flight` FOREIGN KEY (`idflight`) REFERENCES `bus_flight` (`id`),
  CONSTRAINT `pass` FOREIGN KEY (`idpassenger`) REFERENCES `passenger` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brones`
--

LOCK TABLES `brones` WRITE;
/*!40000 ALTER TABLE `brones` DISABLE KEYS */;
/*!40000 ALTER TABLE `brones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bus_flight`
--

DROP TABLE IF EXISTS `bus_flight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bus_flight` (
  `id` int NOT NULL AUTO_INCREMENT,
  `direction` int DEFAULT NULL,
  `data` int DEFAULT NULL,
  `vremya` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_idx` (`data`),
  KEY `cityes_idx` (`direction`),
  KEY `time_idx` (`vremya`),
  CONSTRAINT `cityes` FOREIGN KEY (`direction`) REFERENCES `cities` (`id`),
  CONSTRAINT `dat` FOREIGN KEY (`data`) REFERENCES `data` (`id`),
  CONSTRAINT `time` FOREIGN KEY (`vremya`) REFERENCES `time` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bus_flight`
--

LOCK TABLES `bus_flight` WRITE;
/*!40000 ALTER TABLE `bus_flight` DISABLE KEYS */;
INSERT INTO `bus_flight` VALUES (4,1,1,1),(5,1,2,2),(6,1,3,3),(7,1,4,4),(8,1,5,5),(9,2,1,1),(10,2,2,2),(11,2,3,3),(12,2,4,4),(13,2,5,5),(14,3,1,1),(15,3,2,2),(16,3,3,3),(17,3,4,4),(18,3,5,5),(19,4,1,1),(20,4,2,2),(21,4,3,3),(22,4,4,4),(23,4,5,5),(24,5,1,1),(25,5,2,2),(26,5,3,3),(27,5,4,4),(28,5,5,5);
/*!40000 ALTER TABLE `bus_flight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Москва-Химки'),(2,'Москва-Королёв'),(3,'Москва-Балашиха'),(4,'Москва-Коломна'),(5,'Москва-Щелково'),(6,'Щелково-Москва'),(7,'Коломна-Москва'),(8,'Балашиха-Москва'),(9,'Королёв-Москва'),(10,'Химки-Москва');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'Москва'),(2,'Химки'),(3,'Королёв'),(4,'Балашиха'),(5,'Щёлково'),(6,'Коломна');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` VALUES (1,'2022-06-01'),(2,'2022-06-02'),(3,'2022-06-03'),(4,'2022-06-04'),(5,'2022-06-05'),(6,'2022-06-07'),(7,'2022-06-08'),(8,'2022-06-09'),(9,'2022-06-10'),(10,'2022-06-11'),(11,'2022-06-12'),(12,'2022-06-13'),(13,'2022-06-14'),(14,'2022-06-15'),(15,'2022-06-16'),(16,'2022-06-17'),(17,'2022-06-18'),(18,'2022-06-19'),(19,'2022-06-20'),(20,'2022-06-21'),(21,'2022-06-22'),(22,'2022-06-23'),(23,'2022-06-24'),(24,'2022-06-25'),(25,'2022-06-26'),(26,'2022-06-27'),(27,'2022-06-28'),(28,'2022-06-29'),(29,'2022-06-30');
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `passenger` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `otchestvo` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  `kolichestvo` varchar(45) DEFAULT NULL,
  `direction` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passenger`
--

LOCK TABLES `passenger` WRITE;
/*!40000 ALTER TABLE `passenger` DISABLE KEYS */;
/*!40000 ALTER TABLE `passenger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `time` (
  `id` int NOT NULL AUTO_INCREMENT,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time`
--

LOCK TABLES `time` WRITE;
/*!40000 ALTER TABLE `time` DISABLE KEYS */;
INSERT INTO `time` VALUES (1,'08:00:00'),(2,'11:50:00'),(3,'13:40:00'),(4,'17:00:00'),(5,'20:00:00');
/*!40000 ALTER TABLE `time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bus_station'
--

--
-- Dumping routines for database 'bus_station'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-23 21:26:48
