<?php	
    if (isset($_POST['search'])) {

			//$_POST['PPD_Per_Serving_Amount'] = preg_replace('/[^\d.]/', '', $_POST['PPD_Per_Serving_Amount']);

			//$_POST['Per_Serving_Amount'] = preg_replace('/[^\d.]/', '', $_POST['Per_Serving_Amount']);

			//$_POST['Number_Of_Units'] = preg_replace('/[^\d.]/', '', $_POST['Number_Of_Units']);

			//$_POST['Per_Serving_Amount_In_Grams'] = preg_replace('/[^\d.]/', '', $_POST['Per_Serving_Amount_In_Grams']);
			//$_POST['Per_Serving_Amount_In_Grams_PPD'] = preg_replace('/[^\d.]/', '', $_POST['Per_Serving_Amount_In_Grams_PPD']);


	if (!filter_var($_POST["Per_Serving_Amount"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Per Serving Amount";
	}

    if (!empty($_POST["PPD_Per_Serving_Amount"])           && !filter_var($_POST["PPD_Per_Serving_Amount"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "PPD Per Serving Amount";
	}

    	if (!empty($_POST["Per_Serving_Amount_In_Grams"])           && !filter_var($_POST["Per_Serving_Amount_In_Grams"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Per Serving Amount In Grams";
	}


    	if (!empty($_POST["Per_Serving_Amount_In_Grams_PPD"])           && !filter_var($_POST["Per_Serving_Amount_In_Grams_PPD"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Per Serving Amount In Grams PPD";
	}
    	if (!empty($_POST["Number_Of_Units"])           && !filter_var($_POST["Number_Of_Units"], FILTER_SANITIZE_NUMBER_INT)) {
		$sanitation_errors[] = "Number Of Units";
	}

    	if (!empty($_POST["Nielsen_Item_Rank_UPC"])           && !filter_var($_POST["Nielsen_Item_Rank_UPC"], FILTER_SANITIZE_NUMBER_INT)) {
		$sanitation_errors[] = "Nielsen Item Rank UPC";
	}

    	if (!empty($_POST["Storage_Statement"])                  && !filter_var($_POST["Storage_Statement"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Storage Statement";
	}

    	if (!empty($_POST["Multi_Part_Package"])                  && !filter_var($_POST["Multi_Part_Package"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Multi Part Package";
	}

    	if (!empty($_POST["Calculated"])                  && !filter_var($_POST["Calculated"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Calculated";
	}

    	if (!empty($_POST["Storage_Type"])                  && !filter_var($_POST["Storage_Type"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Storage Type";
	}



    	if (!empty($_POST["Product_Description"])                  && !filter_var($_POST["Product_Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Product Description";
	}

    	if (!empty($_POST["Calculated"])                  && !filter_var($_POST["Calculated"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Calculated";
	}

    	if (!empty($_POST["Per_Serving_Unit"])                  && !filter_var($_POST["Per_Serving_Unit"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Per Serving Unit";
	}

    	if (!empty($_POST["Source"])                  && !filter_var($_POST["Source"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Source";
	}

    	if (!filter_var($_POST["Collection_Date"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Collection Date";
	}

    	if (!empty($_POST["Comments"])                  && !filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Comments";
	}

    	if (!filter_var($_POST["Nutrition_Fact_Table"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Nutrition Fact Table";
	}

    	if (!empty($_POST["Other_Package_Statement"])                  && !filter_var($_POST["Other_Package_Statement"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Other Package Statement";
	}

    	if (!empty($_POST["Nutrition_Claim"])                  && !filter_var($_POST["Nutrition_Claim"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Nutrition Claim";
	}


    	if (!empty($_POST["Suggested_Direction"])                  && !filter_var($_POST["Suggested_Direction"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Suggested Direction";
	}

    	if (!empty($_POST["Health_Claim"])                  && !filter_var($_POST["Health_Claim"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Health Claim";
	}

    	if (!empty($_POST["Nielsen_Category"])                  && !filter_var($_POST["Nielsen_Category"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Nielsen Category";
	}


    	if (!filter_var($_POST["Brand"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Brand";
	}

    	if (!filter_var($_POST["Manufacturer"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Manufacturer";
	}

    	if (!empty($_POST["Country"])                  && !filter_var($_POST["Country"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Country";
	}

    	if (!empty($_POST["Package_Size"])                  && !filter_var($_POST["Package_Size"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Package Size";
	}

    	if (!empty($_POST["Package_Size_UofM"])                  && !filter_var($_POST["Package_Size_UofM"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Package Size Unit of Measure";
	}

    	if (!empty($_POST["PPD_Per_Serving_UofM"])                  && !filter_var($_POST["PPD_Per_Serving_UofM"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "PPD Per Serving Unit of Measure";
	}

    	if (!filter_var($_POST["Label_Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Label Description";
	}

    	if (!filter_var($_POST["Ingredients"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Ingredients";
	}

    	if (!empty($_POST["Common_Measure"])                  && !filter_var($_POST["Common_Measure"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Common Measure";
	}


    }
?>