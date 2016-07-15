CREATE DATABASE  IF NOT EXISTS `ajaxsearchandpagination` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ajaxSearchAndPagination`;
-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: ajaxSearchAndPagination
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Cody','Williams','a;slkfalsj','2016-04-23 23:59:51'),(2,'Eric','Williams','aldskflkj','2016-04-24 00:01:12'),(3,'Ana','Williams','sldkjflskdfj','2016-04-24 00:02:04'),(4,'Jill','Williams','asdfjlsdfkj','2016-04-24 00:02:50'),(5,'Michael','Laymon','aldkjfaldkj','2016-04-24 12:41:00'),(6,'Michael','Laymon','aldkjfaldkj','2016-04-24 12:41:24'),(7,'Nate','Daugherty','alkjasdlfkj','2016-04-24 12:42:27'),(8,'Kristen','Walker','alkjd\'oiban','2016-03-21 00:00:00'),(9,'Justin','Walker','a;ldkfbi','2016-03-30 00:00:00'),(10,'Jill','Jones','oiabdnglk','2016-05-15 00:00:00'),(11,'Billy','Jones','asdf;lkajd','2016-03-08 00:00:00'),(12,'Stephanie','King','adgoiag','2015-05-11 00:00:00'),(13,'Donnie','Williams','a;nbah','2015-06-13 00:00:00'),(14,'Kenny','Hatten','as;ldkabi','2016-03-25 00:00:00'),(15,'Josh','Presnell','aldff;in','2016-02-18 00:00:00'),(16,'Dan','Porter','adlfasd;l','2016-02-20 00:00:00'),(17,'Ryder','Inge','dfs;odifja','2016-02-14 00:00:00'),(18,'Dirk','Nowitzki','aldkfja;l','2016-01-23 00:00:00'),(19,'Bernie','Sanders','asdlkfjas','2016-04-17 00:00:00'),(20,'Wayne','Gretzky','a;ldkfja','2016-01-23 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-25 16:49:00
