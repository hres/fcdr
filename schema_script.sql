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
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=2438 DEFAULT CHARSET=latin1;

#Trigger, set Last_Edit_Date  to current date/time before each update
DELIMITER //
CREATE TRIGGER `update_time` BEFORE UPDATE ON  Product
 FOR EACH ROW SET NEW.`Last_Edit_Date` = NOW()
//
DELIMITER ;

CREATE TABLE `Classification` (
  `ClassificationID` int(11) NOT NULL AUTO_INCREMENT,
  `Classification_Number` varchar(10) DEFAULT NULL,
  `Classification_Name` text,
  `Classification_Type` text,
  PRIMARY KEY (`ClassificationID`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;

CREATE TABLE `Product_Classification` (
  `ProductID` int(11) DEFAULT NULL,
  `ClassificationID` int(11) DEFAULT NULL,
  KEY `ProductID` (`ProductID`),
  KEY `ClassificationID` (`ClassificationID`),
  CONSTRAINT `ClassificationID` FOREIGN KEY (`ClassificationID`) REFERENCES `Classification` (`ClassificationID`),
  CONSTRAINT `ProductID` FOREIGN KEY (`ProductID`) REFERENCES `Product` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Package` (
  `PackageID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductIDP` int(11) DEFAULT NULL,
  `UPC12` varchar(16) DEFAULT NULL,
  `Description` text,
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
  `Sources` text,
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
  `ValuePackFlag` tinyint(1) DEFAULT NULL,
  `ValuePackUPC` text,
  PRIMARY KEY (`PackageID`),
  KEY `ProductIDP` (`ProductIDP`),
  CONSTRAINT `ProductIDP` FOREIGN KEY (`ProductIDP`) REFERENCES `Product` (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=739 DEFAULT CHARSET=latin1;

DELIMITER $$
CREATE TRIGGER `createtion_date` BEFORE INSERT ON  Package
FOR EACH ROW
BEGIN
	SET NEW.`Create_Date` = NOW();
	SET NEW.`Last_Edit_Date` = NOW();
END$$

CREATE TABLE `Components` (
  `ComponentID` int(11) NOT NULL AUTO_INCREMENT,
  `Component_Name` text,
  `Display_Order` int(11) DEFAULT NULL,
  `flag` text,
  `DVUofM` varchar(5) DEFAULT NULL,
  `DVReferenceAmount` text,
  PRIMARY KEY (`ComponentID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

CREATE TABLE `Product_Component` (
  `PackageID` int(11) DEFAULT NULL,
  `ComponentID` int(11) DEFAULT NULL,
  `Amount` varchar(7) DEFAULT NULL,
  `Amount_Unit_Of_Measure` varchar(4) DEFAULT NULL,
  `Daily_Value` varchar(4) DEFAULT NULL,
  `PPD` text,
  `Amountper100g` decimal(8,3) DEFAULT NULL,
  `Amountper100gPPD` decimal(8,3) DEFAULT NULL,
  `AmountIsCalculated` tinyint(1) DEFAULT NULL,
  KEY `PackageID` (`PackageID`),
  KEY `ComponentID` (`ComponentID`),
  CONSTRAINT `ComponentID` FOREIGN KEY (`ComponentID`) REFERENCES `Components` (`ComponentID`),
  CONSTRAINT `PackageID` FOREIGN KEY (`PackageID`) REFERENCES `Package` (`PackageID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Sales` (
  `SalesID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductIDS` int(11) DEFAULT NULL,
  `UPC10` varchar(15) DEFAULT NULL,
  `Description` text,
  `Kilo_Vol` text,
  `Dollar_Volume` text,
  `Neilson_Category` text,
  `Year_Recorded` int(11) DEFAULT NULL,
  `Collection_Year` date DEFAULT NULL,
  `Sources` text,
  `Comments` text,
  `Brand` text,
  `Package_Size` varchar(10) DEFAULT NULL,
  `Dollar_Rank` varchar(3) DEFAULT NULL,
  `Dollar_Volume_PerCentage_Change` text,
  `Kilo_Share` text,
  `Kilo_Volume_Percent_Change` text,
  `Average_AC_Dist` text,
  `Average_Retail_Price` text,
  `Sales_Period` text,
  `Sales_Period_UofM` text,
  `Sales_Reference_Date` date DEFAULT NULL,
  `Manufacturer` text,
  `Classification_Number` text,
  `Classification_Type` text,
  `Create_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Last_Edit_Date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Last_Edited_by` text,
  `Sample_Date` date DEFAULT NULL,
  PRIMARY KEY (`SalesID`),
  KEY `ProductIDS` (`ProductIDS`),
  CONSTRAINT `ProductIDS` FOREIGN KEY (`ProductIDS`) REFERENCES `Product` (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=3715 DEFAULT CHARSET=latin1
