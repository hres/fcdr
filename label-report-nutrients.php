<?php


$Component_List = array('Energy','Fat', 'Saturated Fat', 'Trans Fat', 'Fat Polyunsaturated', 'Carbohydrates', 'Fibre', 'Sugars', 'Protein', 'Cholesterol', 'Sodium', 'Potassium', 'Calcium', 'Iron', 'Vitamin A', 'Vitamin C');
   $PPD = 1;
        $Energy = null;
        $Fat_Perserving = null;
        $Saturated_Fat = null;
        $Trans_Fat = null;
        $Polyunsaturated_Fat = null;
        $Carbohydrates_Perserving = null;
        $Fibre_Perserving = null;
        $Sugars = null;
        $Protein = null;
        $Cholesterol = null;

        $Sodium_Perserving = null;
        $Sodium_DV = null;

        $Potassium_Perserving = null;
        $Calcium_DV = null;
        $Iron_DV = null;
        $Vitamin_A_DV = null;
        $Vitamin_C_DV = null;



       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[0], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_1 = $editpackagestmt->get_result();
        $row_1 = $result_1->fetch_assoc();
        $Energy = $row_1['Amount'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[1], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_2 = $editpackagestmt->get_result();
        $row_2 = $result_2->fetch_assoc();
        $Fat_Perserving = $row_2['Amount'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[2], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_3 = $editpackagestmt->get_result();
        $row_3 = $result_3->fetch_assoc();
        $Saturated_Fat = $row_3['Amount'];
        
        $editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[3], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_4 = $editpackagestmt->get_result();
        $row_4 = $result_4->fetch_assoc();
        $Trans_Fat = $row_4['Amount'];


       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[4], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_5 = $editpackagestmt->get_result();
        $row_5 = $result_5->fetch_assoc();
        $Polyunsaturated_Fat = $row_5['Amount'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[5], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_6 = $editpackagestmt->get_result();
        $row_6 = $result_6->fetch_assoc();
        $Carbohydrates_Perserving = $row_6['Amount'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[6], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_7 = $editpackagestmt->get_result();
        $row_7 = $result_7->fetch_assoc();
        $Fibre_Perserving = $row_7['Amount'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[7], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_8 = $editpackagestmt->get_result();
        $row_8 = $result_8->fetch_assoc();
        $Sugars = $row_8['Amount'];

        $editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[8], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_9 = $editpackagestmt->get_result();
        $row_9 = $result_9->fetch_assoc();
        $Protein = $row_9['Amount'];
      
       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[9], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_10 = $editpackagestmt->get_result();
        $row_10 = $result_10->fetch_assoc();
        $Cholesterol = $row_10['Amount'];


       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[10], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_11 = $editpackagestmt->get_result();
        $row_11 = $result_11->fetch_assoc();
        $Sodium_Perserving = $row_11['Amount'];
        $Sodium_DV = $row_11['Daily_Value'];
        

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[11], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_12 = $editpackagestmt->get_result();
        $row_12 = $result_12->fetch_assoc();
        $Potassium_Perserving = $row_12['Amount'];

        $editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[12], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_13 = $editpackagestmt->get_result();
        $row_13 = $result_13->fetch_assoc();
        $Calcium_DV = $row_13['Daily_Value'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[13], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_14 = $editpackagestmt->get_result();
        $row_14 = $result_14->fetch_assoc();
        $Iron_DV = $row_14['Daily_Value'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[14], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_15 = $editpackagestmt->get_result();
        $row_15 = $result_15->fetch_assoc();
        $Vitamin_A_DV = $row_15['Daily_Value'];

       	$editpackagestmt = $conn->prepare($editpackagequery);
        $editpackagestmt->bind_param("sii", $Component_List[15], $row['PackageID'], $PPD);
        $editpackagestmt->execute();
        $result_16 = $editpackagestmt->get_result();
        $row_16 = $result_16->fetch_assoc();
        $Vitamin_C_DV = $row_16['Daily_Value'];





?>