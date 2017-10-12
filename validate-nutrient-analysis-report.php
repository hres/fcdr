<?php
        	if (!empty($_POST["Cluster_Number"])  &&!filter_var($_POST["Cluster_Number"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Cluster Number";
	}
    if (!empty($_POST["Sales_Year"])  && filter_var($_POST["Sales_Year"], FILTER_VALIDATE_INT)===false ) {
		$sanitation_errors[] = "Sales Year";
	}
?>