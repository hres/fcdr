<?php
if (isset($_POST['search'])) {



	if ( !empty($_POST["Label_UPC"])         &&  !filter_var($_POST["Label_UPC"], FILTER_SANITIZE_NUMBER_INT)) {
		$sanitation_errors[] = "Label UPC";
	}
}
?>