<?php
   $packageObject->setRecord($data[0]);
            $packageObject->setLabel_UPC($data[1]);
            $packageObject->setNielsen_Item_Rank_UPC($data[2]);
            $packageObject->setNielsen_Category($data[3]);
            $packageObject->setLabel_Description($data[4]);
            $packageObject->setBrand($data[5]);
            $packageObject->setManufacturer($data[6]);
            $packageObject->setCountry($data[7]);
            $packageObject->setPackage_Size($data[8]);
            $packageObject->setPackage_Size_UofM($data[9]);
            $packageObject->setNumber_Of_Units($data[10]);
            $packageObject->setStorage_Type($data[11]);
            $packageObject->setStorage_Statement($data[12]);
			$Collection_Date                                = (empty($data[13]) && strlen($data[13]) == 0 ?NULL :$data[13]); //$data[13]; //
            $packageObject->setCollection_Date($Collection_Date);
            $packageObject->setHealth_Claim($data[14]);
            $packageObject->setNutrient_Claim($data[15]);
            $packageObject->setOther_Package_Statement($data[16]);
            $packageObject->setSuggested_Direction($data[17]);
            $packageObject->setIngredients($data[18]);
			$Multipart                                      = $data[19];
    		$Multipart = strtolower($Multipart);
			$Multipart = ($Multipart=='false'?'No':$Multipart);
			$Multipart = ($Multipart=='true'?'Yes':$Multipart);
            $packageObject->setMultipart($Multipart);
            $packageObject->setNutrition_Fact_Table($data[20]);
            $packageObject->setCommon_Household_Measure($data[21]);		
			$Per_Serving_Amount                             = $data[22];
			$Per_Serving_Amount=  (empty($Per_Serving_Amount) && strlen($Per_Serving_Amount) == 0 ?NULL :$Per_Serving_Amount);
            $packageObject->setPer_Serving_Amount($Per_Serving_Amount);
            $packageObject->setPer_Serving_UofM($data[23]);
			$Per_Serving_Amount_PPD                         = $data[24];
			$Per_Serving_Amount_PPD =  (empty($Per_Serving_Amount_PPD) && strlen($Per_Serving_Amount_PPD) == 0 ?NULL :$Per_Serving_Amount_PPD);
            $packageObject->setPer_Serving_Amount_PPD($Per_Serving_Amount_PPD);
            $packageObject->setPer_Serving_Amount_PPD_UofM($data[25]);
            $packageObject->setComment($data[144]);
            $packageObject->setSource($data[145]);
            $packageObject->setProduct_Description($data[146]);
			$Per_Serving_Amount_In_Grams                    = $data[142];
			$Per_Serving_Amount_In_Grams=  (empty($Per_Serving_Amount_In_Grams) && strlen($Per_Serving_Amount_In_Grams) == 0 ?NULL :$Per_Serving_Amount_In_Grams);		
            $packageObject->setPer_Serving_Amount_In_Grams($Per_Serving_Amount_In_Grams);
            $Per_Serving_Amount_In_Grams_PPD                = $data[143];
			$Per_Serving_Amount_In_Grams_PPD =  (empty($Per_Serving_Amount_In_Grams_PPD) && strlen($Per_Serving_Amount_In_Grams_PPD) == 0 ?NULL :$Per_Serving_Amount_In_Grams_PPD);
            $packageObject->setPer_Serving_Amount_In_Grams_PPD($Per_Serving_Amount_In_Grams_PPD);
			$packageObject->setType($data[147]);
			$packageObject->setType_Of_Restaurant($data[148]);
			$packageObject->setInformed_Dining_Program($data[149]!=NULL?$data[149]:NULL);
			$packageObject->setNFT_Last_Update($data[150]);
			$packageObject->setChild_Item($data[151]!=NULL?$data[151]:NULL);
			$packageObject->setProduct_Grouping($data[152]);

			$Classification=  (empty($data[153]) && strlen($data[153]) == 0 ?NULL :$data[153]);
			
			$packageObject->setClassification_Number($Classification);
		
			
			$Per_Serving_Energy_Kcal                        = $data[26];
			$Per_Serving_Energy_PPD_Kcal                    = $data[27];
			$Per_Serving_Energy_Kj                          = $data[28];
			$Per_Serving_Energy_PPD_Kj                      = $data[29];
			$Fat_Per_Serving                                = $data[30];
			$Fat_Daily_Value                                = $data[31];
			/* added */                                       
			$Fat_Daily_Value_PPD                            = $data[32];
			$Saturated_Fat_Per_Serving                      = $data[33];
			$Trans_Fat_Per_Serving                          = $data[34];
			$Trans_And_Saturated_Fat_Daily_Vaue             = $data[35];
			/* added */                                       
			$Trans_And_Saturated_Fat_Daily_Vaue_PPD         = $data[36];
			$Fat_PolyUnsaturated                            = $data[37];
			$Omega_6_Per_Serving                            = $data[38];
			$Omega_3_Per_Serving                            = $data[39];
			$Fat_Monounsaturated_Per_Serving                = $data[40];
			$Carbohydrates_Per_Serving                      = $data[41];
			$Carbohydrates_Daily_Value                      = $data[42];
			/* added */                                     
			$Carbohydrates_Daily_Value_PPD                  = $data[43];
			$Fibre_Per_Serving                              = $data[44];
			$Fibre_Daily_Value                              = $data[45];
			/* added */                                      
			$Fibre_Daily_Value_PPD                          = $data[46];
			$Soluble_Fibre_Per_Serving                      = $data[47];
			$Insoluble_Fibre_Per_Serving                    = $data[48];
			$Sugar_Per_Serving                              = $data[49];
			$Sugar_Daily_Value                              = $data[50];
			/* added */                                      
			$Sugar_Daily_Value_PPD                          = $data[51];
			$Sugar_Alcohols_Per_Serving                     = $data[52];
			$Starch_Per_Serving                             = $data[53];
			$Protein_Per_Serving                            = $data[54];
			$Cholesterol_Per_Serving                        = $data[55];
			$Cholesterol_Daily_Value                        = $data[56];
			/* added */                                      
			$Cholesterol_Daily_Value_PPD                    = $data[57];
			$Sodium_Per_Serving                             = $data[58];
			$Sodium_Daily_Value                             = $data[59];
			/* added */                                     
			$Sodium_Daily_Value_PPD                         = $data[60];
			$Potassium_Per_Serving                          = $data[61];
			$Potassium_Daily_Value                          = $data[62];
			/* added */                                      
			$Potassium_Daily_Value_PPD                      = $data[63];
			$Calcium_Per_Serving                            = $data[64];
			$Calcium_Daily_Value                            = $data[65];
			/* added */                                       
			$Calcium_Daily_Value_PPD                        = $data[66];
			$Iron_Per_Serving                               = $data[67];
			$Iron_Daily_Value                               = $data[68];
			/* added */                                      
			$Iron_Daily_Value_PPD                           = $data[69];
			$VitaminA_Per_Serving                           = $data[70];
			$VitaminA_Daily_Value                           = $data[71];
			/* added */                                       
			$VitaminA_Daily_Value_PPD                       = $data[72];
			$VitaminC_Per_Serving                           = $data[73];
			$VitaminC_Daily_Value                           = $data[74];
			/* added */                                     
			$VitaminC_Daily_Value_PPD                       = $data[75];
			$VitaminD_Per_Serving                           = $data[76];
			$VitaminD_Daily_Value                           = $data[77];
			/* added */                                      
			$VitaminD_Daily_Value_PPD                       = $data[78];
			$VitaminE_Per_Serving                           = $data[79];
			$VitaminE_Daily_Value                           = $data[80];
			/* added */                                    
			$VitaminE_Daily_Value_PPD                       = $data[81];
			$VitaminK_Per_Serving                           = $data[82];
			$VitaminK_Daily_Value                           = $data[83];
			/* added */                                      
			$VitaminK_Daily_Value_PPD                       = $data[84];
			$Thiamine_Per_Serving                           = $data[85];
			$Thiamine_Daily_Value                           = $data[86];
			/* added */                                       
			$Thiamine_Daily_Value_PPD                       = $data[87];
			$Riboflavin_Per_Serving                         = $data[88];
			$Riboflavin_Daily_Value                         = $data[89];
			/* added */                                     
			$Riboflavin_Daily_Value_PPD                     = $data[90];
			$Niacin_Per_Serving                             = $data[91];
			$Niacin_Daily_Value                             = $data[92];
			/* added */                                      
			$Niacin_Daily_Value_PPD                         = $data[93];
			$VitaminB6_Per_Serving                          = $data[94];
			$VitaminB6_Daily_Value                          = $data[95];
			/* added */                                     
			$VitaminB6_Daily_Value_PPD                      = $data[96];
			$Folate_Per_Serving                             = $data[97];
			$Folate_Daily_Value                             = $data[98];
			/* added */                                      
			$Folate_Daily_Value_PPD                         = $data[99];
			$VitaminB12_Per_Serving                         = $data[100];
			$VitaminB12_Daily_Value                         = $data[101];
			/* added */                                      
			$VitaminB12_Daily_Value_PPD                     = $data[102];
			$Biotin_PerServing                              = $data[103];
			$Biotin_Daily_Value                             = $data[104];
			/* added */                                     
			$Biotin_Daily_Value_PPD                         = $data[105];
			$Choline_Per_Serving                            = $data[106];
			$Choline_Daily_Value                            = $data[107];
			/* added */                                       
			$Choline_Daily_Value_PPD                        = $data[108];
			$Pantothenate_Per_Serving                       = $data[109];
			$Pantothenate_Daily_Value                       = $data[110];
			/* added */                                      
			$Pantothenate_Daily_Value_PPD                   = $data[111];
			$Phosphorus_Per_Serving                         = $data[112];
			$Phosphorus_Daily_Value                         = $data[113];
			/* added */                                      
			$Phosphorus_Daily_Value_PPD                     = $data[114];
			$Iodide_Per_Serving                             = $data[115];
			$Iodide_Daily_Value                             = $data[116];
			/* added */                                      
			$Iodide_Daily_Value_PPD                         = $data[117];
			$Magnesium_Per_Serving                          = $data[118];
			$Magnesium_Daily_Value                          = $data[119];
			/* added */                                      
			$Magnesium_Daily_Value_PPD                      = $data[120];
			$Zinc_Per_Serving                               = $data[121];
			$Zinc_Daily_Value                               = $data[122];
			/* added */                                      
			$Zinc_Daily_Value_PPD                           = $data[123];
			$Selenium_Per_Serving                           = $data[124];
			$Selenium_Daily_Value                           = $data[125];
			/* added */                                       
			$Selenium_Daily_Value_PPD                       = $data[126];
			$Copper_Per_Serving                             = $data[127];
			$Copper_Daily_Value                             = $data[128];
			/* added */                                       
			$Copper_Daily_Value_PPD                         = $data[129];
			$Manganese_Per_Serving                          = $data[130];
			$Manganese_Daily_Value                          = $data[131];
			/* added */                                     
			$Manganese_Daily_Value_PPD                      = $data[132];
			$Chromium_Per_Serving                           = $data[133];
			$Chromium_Daily_Value                           = $data[134];
			/* added */                                     
			$Chromium_Daily_Value_PPD                       = $data[135];
			$Molybdenum_Per_Serving                         = $data[136];
			$Molybdenum_Daily_Value                         = $data[137];
			/* added */                                     
			$Molybdenum_Daily_Value_PPD                     = $data[138];
			$Chloride_Per_Serving                           = $data[139];
			$Chloride_Daily_Value                           = $data[140];
			/* added */                                      
			$Chloride_Daily_Value_PPD                       = $data[140];
	

$cars = array
  (
  array("1",$Per_Serving_Energy_Kcal,'kcal', '', TRUE),
  array("1",$Per_Serving_Energy_PPD_Kcal,'kcal', NULL, FALSE), 
  

  array("2",$Fat_Per_Serving,'g', $Fat_Daily_Value, TRUE),
  array("2",NULL,NULL, $Fat_Daily_Value_PPD, FALSE), 
  
  array("3",$Saturated_Fat_Per_Serving,'g', NULL, TRUE),
  array("3",NULL,NULL, NULL, FALSE), 

  array("4",$Trans_Fat_Per_Serving,'g', NULL, TRUE),
  array("4",NULL,NULL, NULL, FALSE), 
  
  array("5",$Omega_6_Per_Serving,'g', NULL, TRUE),
  array("5",NULL,NULL,NULL, FALSE), 
  
  array("6",$Omega_3_Per_Serving,'g', NULL, TRUE),
  array("6",NULL,NULL, NULL, FALSE), 

  array("7",$Carbohydrates_Per_Serving,'g', $Carbohydrates_Daily_Value, TRUE),
  array("7",NULL,NULL, $Carbohydrates_Daily_Value_PPD, FALSE), 

  array("8",$Fibre_Per_Serving,'g', $Fibre_Daily_Value, TRUE),
  array("8",NULL,NULL, $Fibre_Daily_Value_PPD, FALSE),

  array("9",$Soluble_Fibre_Per_Serving,'g',NULL, TRUE),
  array("9",NULL,NULL, NULL, FALSE), 
  
  array("10",$Insoluble_Fibre_Per_Serving,'g', NULL, TRUE),
  array("10",NULL,NULL, NULL, FALSE), 

  array("11",$Sugar_Per_Serving,'g', $Sugar_Daily_Value, TRUE),
  array("11",NULL,NULL, $Sugar_Daily_Value_PPD, FALSE), 

  
  array("12",$Sugar_Alcohols_Per_Serving,'g', NULL, TRUE),
  array("12",NULL,NULL, NULL, FALSE), 
  
  array("13",$Starch_Per_Serving,'g', NULL, TRUE),
  array("13",NULL,NULL,NULL, FALSE), 
  
  array("14",$Protein_Per_Serving,'g',NULL, TRUE),
  array("14",NULL,NULL,NULL, FALSE), 

  array("15",$Cholesterol_Per_Serving,'g', $Cholesterol_Daily_Value, TRUE),
  array("15",NULL,NULL,NULL, FALSE), 

  array("16",$Sodium_Per_Serving,'g', $Sodium_Daily_Value, TRUE),
  array("16",NULL,NULL, $Sodium_Daily_Value_PPD, FALSE),
  
  array("17",$Potassium_Per_Serving,'mg', $Potassium_Daily_Value, TRUE),
  array("17",NULL,NULL, $Potassium_Daily_Value_PPD, FALSE), 
  
  array("18",$Calcium_Per_Serving,'mg', $Calcium_Daily_Value, TRUE),
  array("18",NULL,NULL, $Calcium_Daily_Value_PPD, FALSE), 

  array("19",$Iron_Per_Serving,'mg', $Iron_Daily_Value, TRUE),
  array("19",NULL,NULL, $Iron_Daily_Value_PPD, FALSE), 

  array("20",$VitaminA_Per_Serving,'um', $VitaminA_Daily_Value, TRUE),
  array("20",NULL,NULL, $VitaminA_Daily_Value_PPD, FALSE), 

  array("21",$VitaminC_Per_Serving,'mg', $VitaminC_Daily_Value, TRUE),
  array("21",NULL,NULL, $VitaminC_Daily_Value_PPD, FALSE),

  array("22",$VitaminD_Per_Serving,'um', $VitaminD_Daily_Value, TRUE),
  array("22",NULL,NULL, $VitaminD_Daily_Value_PPD, FALSE), 
  
  array("23",$VitaminE_Per_Serving,'mg', $VitaminE_Daily_Value, TRUE),
  array("23",NULL,NULL, $VitaminE_Daily_Value_PPD, FALSE), 
  
  array("24",$VitaminK_Per_Serving,'ug', $VitaminK_Daily_Value, TRUE),
  array("24",NULL,NULL, $VitaminK_Daily_Value_PPD, FALSE), 

  array("25",$Thiamine_Per_Serving,'mg', $Thiamine_Daily_Value, TRUE),
  
  array("25",NULL,NULL, $Thiamine_Daily_Value_PPD, FALSE), 

  array("26",$Riboflavin_Per_Serving,'mg', $Riboflavin_Daily_Value, TRUE),
  array("26",NULL,NULL, $Riboflavin_Daily_Value_PPD, FALSE),

  array("27",$Niacin_Per_Serving,'mg', $Niacin_Daily_Value_PPD, TRUE),
  array("27",NULL,NULL, $Niacin_Daily_Value_PPD, FALSE),
  
  array("28",$VitaminB6_Per_Serving,'mg', $VitaminB6_Daily_Value, TRUE),
  array("28",NULL,NULL, $VitaminB6_Daily_Value_PPD, FALSE), 

  array("29",$Folate_Per_Serving,'ug', $Folate_Daily_Value, TRUE),
  array("29",NULL,NULL,$Folate_Daily_Value_PPD, FALSE), 

  array("30",$VitaminB12_Per_Serving,'mg', $VitaminB12_Daily_Value, TRUE),
  array("30",NULL,NULL, $VitaminB12_Daily_Value_PPD, FALSE), 
  
  array("31",$Biotin_PerServing,'ug', $Biotin_Daily_Value, TRUE),
  array("31",NULL,NULL, $Biotin_Daily_Value_PPD, FALSE), 
  
  array("32",$Choline_Per_Serving,'mg', $Choline_Daily_Value, TRUE),
  array("32",NULL,NULL, $Choline_Daily_Value_PPD, FALSE), 

  array("33",$Pantothenate_Per_Serving,'mg', $Pantothenate_Daily_Value, TRUE),
  array("33",NULL,NULL, $Pantothenate_Daily_Value_PPD, FALSE), 

  array("34",$Phosphorus_Per_Serving,'mg', $Phosphorus_Daily_Value, TRUE),
  array("34",NULL,NULL, $Phosphorus_Daily_Value_PPD, FALSE),
  
  array("35",$Iodide_Per_Serving,'ug', $Iodide_Daily_Value, TRUE),
  array("35",NULL,NULL, $Iodide_Daily_Value_PPD, FALSE), 
  
  array("36",$Magnesium_Per_Serving,'mg', $Magnesium_Daily_Value, TRUE),
  array("36",NULL,NULL, $Magnesium_Daily_Value_PPD, FALSE), 
  
  array("37",$Zinc_Per_Serving,'mg',$Zinc_Daily_Value, TRUE),
  array("37",NULL,NULL, $Zinc_Daily_Value_PPD, FALSE), 

  array("38",$Selenium_Per_Serving,'ug', $Selenium_Daily_Value, TRUE),
  array("38",NULL,NULL, $Selenium_Daily_Value_PPD, FALSE), 

  array("39",$Copper_Per_Serving,'mg', $Copper_Daily_Value, TRUE),
  array("39",NULL,NULL, $Copper_Daily_Value_PPD, FALSE),


  array("40",$Manganese_Per_Serving,'mg', $Manganese_Daily_Value, TRUE),
  array("40",NULL,NULL, $Manganese_Daily_Value_PPD, FALSE), 
  
  array("41",$Chromium_Per_Serving,'ug', $Chromium_Daily_Value, TRUE),
  array("41",NULL,NULL, $Chromium_Daily_Value_PPD, FALSE), 
  
  array("42",$Molybdenum_Per_Serving,'ug', $Molybdenum_Daily_Value, TRUE),
  array("42",NULL,NULL, $Molybdenum_Daily_Value_PPD, FALSE), 

  array("43",$Chloride_Per_Serving,'mg', $Chloride_Daily_Value, TRUE),
  array("43",NULL,NULL, $Chloride_Daily_Value_PPD, FALSE), 
 
  array("44",$Fat_PolyUnsaturated,'g', NULL, TRUE),
  array("44",NULL,NULL,NULL, FALSE),

  array("45",$Fat_Monounsaturated_Per_Serving,'g', NULL, TRUE),
  array("45",NULL,NULL,NULL, FALSE), 

  array("46",NULL,NULL, $Trans_And_Saturated_Fat_Daily_Vaue, TRUE),
  array("46",NULL,NULL, $Trans_And_Saturated_Fat_Daily_Vaue_PPD, FALSE), 
  
  array("47",$Per_Serving_Energy_Kj,'kJ', NULL, TRUE),
  array("47",$Per_Serving_Energy_PPD_Kj,'kJ', NULL, FALSE), 
  
  );			


?>