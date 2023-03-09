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
-- Table structure for table `quizquestions`
--

DROP TABLE IF EXISTS `quizquestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quizquestions` (
  `questionID` int NOT NULL AUTO_INCREMENT,
  `questionText` text NOT NULL,
  `correctAnswer` varchar(255) NOT NULL,
  `wrongA` varchar(255) NOT NULL,
  `wrongB` varchar(255) DEFAULT NULL,
  `wrongC` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `lang` char(1) DEFAULT NULL,
  PRIMARY KEY (`questionID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizquestions`
--

LOCK TABLES `quizquestions` WRITE;
/*!40000 ALTER TABLE `quizquestions` DISABLE KEYS */;
INSERT INTO `quizquestions` VALUES (1,'What is encapsulation?','Grouping variables with methods that act on those variables','Grouping variables together, seperate from methods','Grouping methods into logical groups to act on global variables',NULL,'Encapsulation','J'),(2,'What is the key word used in Java for inheritance?','Extends','Inherits','Include','Uses','Inheritance','J'),(3,'What is the key word to define a function in Python?','def','function','func','let','Functions','P'),(4,'What keyword is used to import Java modules?','import','require','use',NULL,'Modules','J'),(5,'True of False: Creating a specialised constructor removes the default constructor from a class?','True','False',NULL,NULL,'Classes','J'),(6,'How many primitive data types are there in Java?','8','7','5','6','Data Types','J');
/*!40000 ALTER TABLE `quizquestions` ENABLE KEYS */;
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
