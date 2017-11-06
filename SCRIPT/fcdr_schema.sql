-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: fcdr_prod
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `CSV`
--

--
-- Table structure for table `Classification`
--

DROP TABLE IF EXISTS `Classification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Classification` (
  `ClassificationID` int(11) NOT NULL AUTO_INCREMENT,
  `Classification_Number` varchar(10) DEFAULT NULL,
  `Classification_Name` text,
  `Classification_Type` text,
  PRIMARY KEY (`ClassificationID`)
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Components`
--

DROP TABLE IF EXISTS `Components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Components` (
  `ComponentID` int(11) NOT NULL AUTO_INCREMENT,
  `Component_Name` text,
  `Display_Order` int(11) DEFAULT NULL,
  `flag` text,
  `DVUofM` varchar(5) DEFAULT NULL,
  `DVReferenceAmount` text,
  PRIMARY KEY (`ComponentID`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Images`
--

DROP TABLE IF EXISTS `Images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Images` (
  `ImageID` int(11) NOT NULL AUTO_INCREMENT,
  `ImageName` text,
  `Image` longblob,
  `LabelID` int(11) NOT NULL DEFAULT '0',
  `Extension` text,
  PRIMARY KEY (`ImageID`),
  KEY `fk_LabelID` (`LabelID`),
  CONSTRAINT `fk_LabelID` FOREIGN KEY (`LabelID`) REFERENCES `Package` (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Package`
--

DROP TABLE IF EXISTS `Package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Package` (
  `PackageID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductIDP` int(11) DEFAULT NULL,
  `Label_UPC` text,
  `Label_Description` text,
  `Health_Claim` text,
  `Suggested_Direction` text,
  `Other_Package_Statement` text,
  `Nutrition_Claim` text,
  `Ingredients` text,
  `Nutrition_Fact_Table` text,
  `Common_Measure` text,
  `Per_Serving_Amount` varchar(6) DEFAULT NULL,
  `Per_Serving_Unit` varchar(3) DEFAULT NULL,
  `Collection_Date` date DEFAULT NULL,
  `Comments` text,
  `PPD_Per_Serving_Amount` varchar(10) DEFAULT NULL,
  `PPD_Per_Serving_UofM` varchar(8) DEFAULT NULL,
  `Last_Edit_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Create_Date` datetime DEFAULT NULL,
  `Last_Edited_By` text,
  `Image1` longblob,
  `Image2` longblob,
  `Image3` longblob,
  `Image4` longblob,
  `Image5` longblob,
  `Image6` longblob,
  `Nielsen_Category` text,
  `Brand` text,
  `Manufacturer` text,
  `Country` text,
  `Package_Size` text,
  `Number_Of_Units` text,
  `Storage_Type` text,
  `Storage_Statement` text,
  `Product_Description` text,
  `Multipart` text,
  `Nielsen_Item_Rank_UPC` text,
  `Package_Size_UofM` varchar(4) DEFAULT NULL,
  `Per_Serving_Amount_In_Grams` text,
  `Per_Serving_Amount_In_Grams_PPD` text,
  `MultipartFlag` text,
  `Source` text,
  `Calculated` tinyint(4) DEFAULT NULL,
  `Classification_Number` varchar(9) DEFAULT NULL,
  `Classification_Name` text,
  `Product_Grouping` text,
  `Nft_Last_Update_Date` date DEFAULT NULL,
  `Informed_Dining_Program` tinyint(1) DEFAULT NULL,
  `Child_Item` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`PackageID`),
  KEY `ProductIDP` (`ProductIDP`),
  CONSTRAINT `ProductIDP` FOREIGN KEY (`ProductIDP`) REFERENCES `Product` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `createtion_date` BEFORE INSERT ON  Package
FOR EACH ROW
BEGIN
    SET NEW.`Create_Date` = NOW();
    SET NEW.`Last_Edit_Date` = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text,
  `Brand` text,
  `Manufacturer` text,
  `Comments` text,
  `Create_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Last_Edit_Date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CNF_CODE` varchar(10) DEFAULT NULL,
  `Cluster_Number` int(11) DEFAULT NULL,
  `Last_Edited_By` text,
  `Restaurant_Type` text,
  `Type` text,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER update_creation_timestamp BEFORE INSERT ON Product
FOR EACH ROW
BEGIN
    SET NEW.Last_Edit_Date = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`fcdruser`@`localhost`*/ /*!50003 TRIGGER `update_time` BEFORE UPDATE ON  Product
 FOR EACH ROW
BEGIN
    SET NEW.`Last_Edit_Date` = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `ProductManufacturer`
--

DROP TABLE IF EXISTS `ProductManufacturer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ProductManufacturer` (
  `ManufacturerID` int(11) NOT NULL AUTO_INCREMENT,
  `Manufacturer_Name` text,
  `Manufacturer_Address` text,
  `Manufacturer_URL` text,
  PRIMARY KEY (`ManufacturerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Product_Classification`
--

DROP TABLE IF EXISTS `Product_Classification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product_Classification` (
  `ProductID` int(11) DEFAULT NULL,
  `ClassificationID` int(11) DEFAULT NULL,
  KEY `ProductID` (`ProductID`),
  KEY `ClassificationID` (`ClassificationID`),
  CONSTRAINT `ClassificationID` FOREIGN KEY (`ClassificationID`) REFERENCES `Classification` (`ClassificationID`),
  CONSTRAINT `ProductID` FOREIGN KEY (`ProductID`) REFERENCES `Product` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Product_Component`
--

DROP TABLE IF EXISTS `Product_Component`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product_Component` (
  `PackageID` int(11) DEFAULT NULL,
  `ComponentID` int(11) DEFAULT NULL,
  `Amount` varchar(7) DEFAULT NULL,
  `Amount_Unit_Of_Measure` varchar(4) DEFAULT NULL,
  `Daily_Value` varchar(4) DEFAULT NULL,
  `PPD` text,
  `Amountper100g` decimal(8,3) DEFAULT NULL,
  `AmountIsCalculated` tinyint(1) DEFAULT NULL,
  KEY `PackageID` (`PackageID`),
  KEY `ComponentID` (`ComponentID`),
  CONSTRAINT `ComponentID` FOREIGN KEY (`ComponentID`) REFERENCES `Components` (`ComponentID`),
  CONSTRAINT `PackageID` FOREIGN KEY (`PackageID`) REFERENCES `Package` (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Sales`
--

DROP TABLE IF EXISTS `Sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Sales` (
  `SalesID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductIDS` int(11) DEFAULT NULL,
  `Sales_UPC` text,
  `Sales_Description` text,
  `Kilo_Vol` text,
  `Dollar_Volume` text,
  `Nielsen_Category` text,
  `Sales_Year` smallint(6) DEFAULT NULL,
  `Source` text,
  `Comments` text,
  `Brand` text,
  `Package_Size` varchar(10) DEFAULT NULL,
  `Dollar_Rank` text,
  `Dollar_Volume_PerCentage_Change` text,
  `Kilo_Share` text,
  `Kilo_Volume_Percent_Change` text,
  `Average_AC_Dist` text,
  `Average_Retail_Price` text,
  `Manufacturer` text,
  `Classification_Number` text,
  `Classification_Type` text,
  `Create_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Last_Edited_by` text,
  `Collection_Date` date DEFAULT NULL,
  `Product_Grouping` text,
  `Neilson_Category_Number` text,
  `Last_Edit_Date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Dollar_Volume_Total` text,
  `Kilo_Volume_Total` text,
  `Control_Label_Flag` text,
  `Cluster_Number` text,
  `Dollar_Share` text,
  `Kilo_Rank` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`SalesID`),
  KEY `ProductIDS` (`ProductIDS`),
  CONSTRAINT `ProductIDS` FOREIGN KEY (`ProductIDS`) REFERENCES `Product` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`fcdruser`@`localhost`*/ /*!50003 TRIGGER update_creation_timestamp_sales BEFORE INSERT ON Sales
FOR EACH ROW
BEGIN
    SET NEW.Last_Edit_Date = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `last_update_time_sales` BEFORE UPDATE  ON  Sales
FOR EACH ROW
BEGIN
    SET NEW.`Last_Edit_Date` = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `Test`
--

DROP TABLE IF EXISTS `Test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Test` (
  `F_Name` text,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Unit_Of_Measure`
--

DROP TABLE IF EXISTS `Unit_Of_Measure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Unit_Of_Measure` (
  `UofM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UofM_Name` text,
  PRIMARY KEY (`UofM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` text,
  `Name` text,
  `User_Role` text,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-03 15:06:23


