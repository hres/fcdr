<?php
if (isset($_POST['search1'])) {


	if (!empty($_POST["Label_UPC"])  &&!filter_var($_POST["Label_UPC"], FILTER_VALIDATE_FLOAT)) {
		$sanitation_errors[] = "Label UPC";
	}
	if (!empty($_POST["Sales_UPC"])  &&!filter_var($_POST["Sales_UPC"], FILTER_VALIDATE_FLOAT)) {
		$sanitation_errors[] = "Sales UPC";
	}
    	if (!empty($_POST["Sales_Year"])  &&!filter_var($_POST["Sales_Year"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Sales Year";
	}
    	if (!empty($_POST["Classification_Number"])  &&!filter_var($_POST["Classification_Number"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Classification Number";
	}
        	if (!empty($_POST["Cluster_Number"])  &&!filter_var($_POST["Cluster_Number"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Cluster Number";
	}
    	if (!empty($_POST["CNF_Code"])  && !filter_var($_POST["CNF_Code"], FILTER_VALIDATE_FLOAT)) {
		$sanitation_errors[] = "CNF Code";
	}
        	if (!empty($_POST["Dollar_Rank_From"])  &&!filter_var($_POST["Dollar_Rank_From"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Dollar Rank From";
	}

        if (!empty($_POST["Dollar_Rank_To"])  &&!filter_var($_POST["Dollar_Rank_To"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Dollar Rank To";
	}
	if (!empty($_POST["Description"]) && !filter_var($_POST["Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Description";
	}
    	if (!empty($_POST["Label_Description"]) && !filter_var($_POST["Label_Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Label Description";
	}
    	if (!empty($_POST["Sales_Description"]) && !filter_var($_POST["Sales_Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Sales Description";
	}

    	if (!empty($_POST["Nielsen_Category"]) && !filter_var($_POST["Nielsen_Category"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Nielsen Category";
	}	
    
    if (!empty($_POST["Manufacturer"]) && !filter_var($_POST["Manufacturer"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Manufacturer";
	}
    	if (!empty($_POST["Brand"]) && !filter_var($_POST["Brand"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Brand";
	}
    	if (!empty($_POST["Classification_Type"]) && !filter_var($_POST["Classification_Type"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Classification Type";
	}
        	if (!empty($_POST["Label_Source"]) && !filter_var($_POST["Label_Source"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Label Source";
	}

    	if (!empty($_POST["Sales_Source"]) && !filter_var($_POST["Sales_Source"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Sales Source";
	}
        	if (!empty($_POST["Ingredients"]) && !filter_var($_POST["Ingredients"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Ingredients";
	}
        	if (!empty($_POST["Comments"]) && !filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Comments";
	}



    	if (!empty($_POST["Label_Comments"]) && !filter_var($_POST["Label_Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Label Comments";
	}
        	if (!empty($_POST["Sales_Comments"]) && !filter_var($_POST["Sales_Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Sales Comments";
	}
        	if (!empty($_POST["Comments"]) && !filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Comments";
	}
	if (!empty($_POST["Classification_Type"]) && !filter_var($_POST["Classification_Type"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Classification Type";
	}

        if (!empty($_POST["date1"])){
	


        	    $test_array_date1 = explode('/',$_POST["date1"]);
    if(count($test_array_date1) == 3){
        if(!checkdate($test_array_date1[2],$test_array_date1[1],$test_array_date1[0])){
            $sanitation_errors[] = "Label collection date From is invalid";
        }
    }else{
        $sanitation_errors[] = "Market Share collection date From is invalid";

    }
	}
        	if (!empty($_POST["date2"])) {
		
        	    $test_array_date2 = explode('/',$_POST["date2"]);
    if(count($test_array_date2) == 3){
        if(!checkdate($test_array_date2[2],$test_array_date2[1],$test_array_date2[0])){
            $sanitation_errors[] = "Label collection date To is invalid";
        }
    }else{
        $sanitation_errors[] = "Market Share collection date From is invalid";

    }
	}
        	if (!empty($_POST["dateFrom"])) {
	    $test_array_from = explode('/',$_POST["dateFrom"]);
    if(count($test_array_from) == 3){
        if(!checkdate($test_array_from[2],$test_array_from[1],$test_array_from[0])){
            $sanitation_errors[] = "Market Share collection date From is invalid";
        }
    }else{
        $sanitation_errors[] = "Market Share collection date From is invalid";

    }
	}
	if (!empty($_POST["dateTo"])) {

    $test_array = explode('/',$_POST["dateTo"]);
    if(count($test_array) == 3){
        if(!checkdate($test_array[2],$test_array[1],$test_array[0])){
            $sanitation_errors[] = "Market Share collection date To is invalid";
        }
    }else{
        $sanitation_errors[] = "Market Share collection date To is invalid";

    }
		
	}



}

?>