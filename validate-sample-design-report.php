
<?php
if (isset($_POST['search'])) {

    
        	if (!empty($_POST["Classification_Name"])  &&!filter_var($_POST["Classification_Name"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Classification Name";
	}
    if (!empty($_POST["Sales_Year"])  && filter_var($_POST["Sales_Year"], FILTER_VALIDATE_INT)===false ) {
		$sanitation_errors[] = "Sales Year";
	}
    
        if (!empty($_POST["Sales_UPC"])  && filter_var($_POST["Sales_UPC"], FILTER_VALIDATE_INT)===false ) {
		$sanitation_errors[] = "Sales UPC";
	}
}
