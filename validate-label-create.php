<?php	
    if (isset($_POST['search'])) {

			//$_POST['PPD_Per_Serving_Amount'] = preg_replace('/[^\d.]/', '', $_POST['PPD_Per_Serving_Amount']);

			//$_POST['Per_Serving_Amount'] = preg_replace('/[^\d.]/', '', $_POST['Per_Serving_Amount']);

			//$_POST['Number_Of_Units'] = preg_replace('/[^\d.]/', '', $_POST['Number_Of_Units']);

			//$_POST['Per_Serving_Amount_In_Grams'] = preg_replace('/[^\d.]/', '', $_POST['Per_Serving_Amount_In_Grams']);
			//$_POST['Per_Serving_Amount_In_Grams_PPD'] = preg_replace('/[^\d.]/', '', $_POST['Per_Serving_Amount_In_Grams_PPD']);






	  //  if (!empty($_POST["Fat_Amount"]) && filter_var($_POST["Fat_Amount"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$saturated_fat = filter_var($_POST["Saturated_Fat_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$trans_fat = filter_var($_POST["Trans_Fat_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$polyunsaturated_fat = filter_var($_POST["Polyunsaturated_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$omega6_fat = filter_var($_POST["Omega6_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$omega3_fat = filter_var($_POST["Omega3_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$monounsaturated_fat = filter_var($_POST["Monounsaturated_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$trans_plus_saturated = filter_var($_POST["Saturated_Trans_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

		$fat_total = $saturated_fat + $trans_fat + $polyunsaturated_fat + $omega6_fat + $omega3_fat + $monounsaturated_fat + $trans_plus_saturated;

		$fat_amount =  filter_var($_POST["Fat_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

		if ($fat_total > $fat_amount){

			$sanitation_errors[] = "Sum of all fat should not exceed total fat";
		}
		
	//}
		$saturated_fat_s = filter_var($_POST["Saturated_Fat_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$trans_fat_s = filter_var($_POST["Trans_Fat_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$polyunsaturated_fat_s = filter_var($_POST["Polyunsaturated_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$omega6_fat_s = filter_var($_POST["Omega6_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$omega3_fat_s = filter_var($_POST["Omega3_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$monounsaturated_fat_s = filter_var($_POST["Monounsaturated_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$trans_plus_saturated_s = filter_var($_POST["Saturated_Trans_kj_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

		$fat_total_s = $saturated_fat_s + $trans_fat_s + $polyunsaturated_fat_s + $omega6_fat_s + $omega3_fat_s + $monounsaturated_fat_s + $trans_plus_saturated_s;

		$fat_amount_s =  filter_var($_POST["Fat_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

		if ($fat_total_s > $fat_amount_s){

			$sanitation_errors[] = "Sum of all fat should not exceed total fat (as prepared)";
		}

        $soluble_fibre = filter_var($_POST["Soluble_Fibre_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$insoluble_fibre = filter_var($_POST["Insoluble_Fibre_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);	

		$total_fibre = filter_var($_POST["Fibre_Amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);	
		$sum_of_fibre = $soluble_fibre + $insoluble_fibre;

		if($sum_of_fibre > $total_fibre){
			$sanitation_errors[] = "Soluble and Insolubre fibre should not exceed Fibre Amount";
		}

		$soluble_fibre_s = filter_var($_POST["Soluble_Fibre_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$insoluble_fibre_s = filter_var($_POST["Insoluble_Fibre_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);	

		$total_fibre_s = filter_var($_POST["Fibre_Amount_S"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);	
		$sum_of_fibre_s = $soluble_fibre_s + $insoluble_fibre_s;

		if($sum_of_fibre_s > $total_fibre_s){
			$sanitation_errors[] = "Soluble and Insolubre fibre should not exceed Fibre Amount (as prepared)";
		}

		    	if (!empty($_POST["Product_Grouping"])           && !filter_var($_POST["Product_Grouping"], FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) {
		$sanitation_errors[] = "Invalid Product Grouping";
	}
    }
?>