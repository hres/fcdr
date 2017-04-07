<?php
if (isset($_POST['search'])) {

	if (!empty($_POST["Classification_Name"])           && !filter_var($_POST["Classification_Name"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Classification_Name";
	}
	if (!empty($_POST["Classification_Number"])         && !filter_var($_POST["Classification_Number"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Classification_Number";
	}
	if (!empty($_POST["Manufacturer"])                  && !filter_var($_POST["Manufacturer"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Manufacturer";
	}
	if (!empty($_POST["Brand"])                         && !filter_var($_POST["Brand"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Brand";
	}
	if (!empty($_POST["CNF_CODE"])                      && !filter_var($_POST["CNF_CODE"], FILTER_SANITIZE_NUMBER_FLOAT)) {
		$sanitation_errors[] = "CNF_CODE";
	}
	if (!empty($_POST["Cluster_Number"])                && !filter_var($_POST["Cluster_Number"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Cluster_Number";
	}
	if (!empty($_POST["Description"])                   && !filter_var($_POST["Description"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Description";
	}
	if (!empty($_POST["Comments"])                      && !filter_var($_POST["Comments"], FILTER_SANITIZE_STRING)) {
		$sanitation_errors[] = "Comments";
	}
	if (!filter_var($_GET["ProductID"], FILTER_SANITIZE_NUMBER_INT)) {
		$sanitation_errors[] = "ProductID";
	}
}


?>
