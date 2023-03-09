-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: educode
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `fitgactivities`
--

DROP TABLE IF EXISTS `fitgactivities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fitgactivities` (
  `activityID` int NOT NULL AUTO_INCREMENT,
  `unfilledText` text NOT NULL,
  `filledText` text NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `lang` char(1) DEFAULT NULL,
  `desiredOutput` text,
  `task` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`activityID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitgactivities`
--

LOCK TABLES `fitgactivities` WRITE;
/*!40000 ALTER TABLE `fitgactivities` DISABLE KEYS */;
INSERT INTO `fitgactivities` VALUES (1,'? ?(\'Hello World!\')','print(\'Hello World!\')','Output','P','Hello World!','This code should output \'Hello World!\''),(2,'? ? a = 6 <br>\r\n                    ? ? b = 0.6 <br>\r\n                    ? ? c = \'six\'','int a = 6 \r\n    float b = 0.6 \r\n    string c = \'six\'','Data Types','P',NULL,'Assign the correct data types to these variables'),(4,'colour = green <br>\r\n    if colour ? ? \'red\':<br>\r\n        print(\'You have a red car\')<br>\r\n    ? ? colour == \'blue\':<br>\r\n        print(\'You have a blue car\')<br>\r\n    else:<br>\r\n        print(\'You have a green car\')','colour = green \r\n    if colour == \'red\':\r\n        print(\'You have a red car\')\r\n    elif colour == \'blue\':\r\n        print(\'You have a blue car\')\r\n    else:\r\n        print(\'You have a green car\')','Branching','P',NULL,'Fill in the blanks to complete this branching code statement');
/*!40000 ALTER TABLE `fitgactivities` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-09 13:28:51
