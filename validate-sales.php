<?php
if (isset($_POST['search'])) {



	if (!filter_var($_POST["Dollar_Volume"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Dollar_Volume"] !=0) {
		$sanitation_errors[] = "Dollar Volume";
	}
		if (!filter_var($_POST["Kilo_Volume_Percent_Change"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Kilo_Volume_Percent_Change"] != 0) {
		$sanitation_errors[] = "Kilo Volume Percent Change";
	}
    	if (!filter_var($_POST["Kilo_Vol"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Kilo_Vol"] != 0) {
		$sanitation_errors[] = "Kilo Vol";
	}
    	if (!filter_var($_POST["Dollar_Rank"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Dollar_Rank"] != 0) {
		$sanitation_errors[] = "Dollar Rank";
	}
    	if (!filter_var($_POST["Dollar_Volume_PerCentage_Change"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Dollar_Volume_PerCentage_Change"] != 0) {
		$sanitation_errors[] = "Dollar Volume PerCentage Change";
	}
    	if (!empty($_POST["Average_AC_Dist"])           && !filter_var($_POST["Average_AC_Dist"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Average_AC_Dist"] !=0) {
		$sanitation_errors[] = "Average AC Dist";
	}
	    	if (!filter_var($_POST["Dollar_Share"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Dollar_Share"] != 0) {
		$sanitation_errors[] = "Dollar Share";
	}
    	if (!empty($_POST["Average_Retail_Price"])           && !filter_var($_POST["Average_Retail_Price"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Average Retail Price";
	}
    	if (!filter_var($_POST["Dollar_Volume_Total"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Dollar_Volume_Total"]!=0) {
		$sanitation_errors[] = "Dollar Volume Total";
	}
    	if (!filter_var($_POST["Kilo_Volume_Total"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Kilo_Volume_Total"]!=0) {
		$sanitation_errors[] = "Kilo Volume Total";
	}
    	if (!filter_var($_POST["Kilo_Share"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Kilo_Share"]!= 0) {
		$sanitation_errors[] = "Kilo Share";
	}
    	if (!empty($_POST["Kilo_Rank"])           && !filter_var($_POST["Kilo_Rank"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION) && $_POST["Kilo_Rank"] !=0) {
		$sanitation_errors[] = "Kilo Rank";
	}
    	if (!empty($_POST["Product_Grouping"])           && !filter_var($_POST["Product_Grouping"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Product Grouping";
	}
    	if (!empty($_POST["Cluster_Number"])           && !filter_var($_POST["Cluster_Number"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Cluster Number";
	}

    	if (!empty($_POST["Classification_Number"])           && !filter_var($_POST["Classification_Number"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Classification Number";
	}
	    	if (!empty($_POST["Classification_Type"])           && !filter_var($_POST["Classification_Type"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Classification Type";
	}

	if (!empty($_POST["Manufacturer"])                  && !filter_var($_POST["Manufacturer"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Manufacturer";
	}

	if (!filter_var($_POST["Nielsen_Category"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Nielsen Category";
	}


	if (!filter_var($_POST["Sales_Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Sales Description";
	}

	if (!empty($_POST["Comments"])                  && !filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Comments";
	}

	if (!filter_var($_POST["Source"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Source";
	}


	if (!empty($_POST["Brand"])                  && !filter_var($_POST["Brand"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Brand";
	}

	if (!empty($_POST["Comments"])                  && !filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Comments";
	}



	if (!empty($_POST["Collection_Date"])                  && !filter_var($_POST["Collection_Date"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Collection Date";
	}
		if (!filter_var($_POST["Sales_Year"], FILTER_SANITIZE_NUMBER_INT))  {
		$sanitation_errors[] = "Sales Year";
	}


}
        ?>