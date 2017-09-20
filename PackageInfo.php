<?php

   class PackageInfo {
      /* Member variables */



  		private	 $Record;                                         
		private	 $Label_UPC ;                                    
		private	 $Nielsen_Item_Rank_UPC;                          
		private	 $Nielsen_Category;                              
        private  $Label_Description;                              
		private	 $Brand;                                          
		private	 $Manufacturer;                                   
		private	 $Country;                                        
		private	 $Package_Size;                                   
		private	 $Package_Size_UofM;                             
		private	 $Number_Of_Units ;                               
		private	 $Storage_Type  ;                                
		private	 $Storage_Statement ;                            
		private	 $Collection_Date;                               
		private	 $Health_Claim ;                                  
		private	 $Nutrient_Claim  ;                               
		private	 $Other_Package_Statement ;                      
		private	 $Suggested_Direction  ;                         
		private	 $Ingredients   ;                                
		private	 $Multipart   ;                                   
		private	 $Nutrition_Fact_Table;                           
		private	 $Common_Household_Measure ;                      
		private	 $Per_Serving_Amount ;                            
		private	 $Per_Serving_UofM ;                              
		private	 $Per_Serving_Amount_PPD ;                       
		private	 $Per_Serving_Amount_PPD_UofM ;                  
		private	 $Comment        ;                                
		private	 $Source       ;                                 
		private	 $Product_Description  ;         
		private	 $Per_Serving_Amount_In_Grams   ;
		private	 $Per_Serving_Amount_In_Grams_PPD ;
        private  $Type;
        private  $Type_Of_Restaurant;
        private  $Informed_Dining_Program;
        private  $NFT_Last_Update;
        private  $Child_Item;
        private  $Product_Grouping;
		private  $Classification_Number;

		function __construct(){
			
			$this->Record = null;
			$this->Label_UPC = null;
			$this->Nielsen_Item_Rank_UPC = null;
			$this->Nielsen_Category = null;
			$this->Label_Description = null;
			$this->Brand = null;
			$this->Manufacturer = null;
			$this->Country = null;
			$this->Package_Size = null;
			$this->Package_Size_UofM = null;
			$this->Number_Of_Units = null;
			$this->Storage_Type = null;
			$this->Storage_Statement = null;
			$this->Collection_Date = null;
			$this->Health_Claim = null;
			$this->Nutrient_Claim = null;
			$this->Other_Package_Statement = null;
			$this->Suggested_Direction = null;
			$this->Ingredients = null;
			$this->Multipart = null;
			$this->Nutrition_Fact_Table = null;
			$this->Common_Household_Measure = null;
			$this->Per_Serving_Amount = null;
			$this->Per_Serving_UofM = null;
			$this->Per_Serving_Amount_PPD;
			$this->Per_Serving_Amount_PPD_UofM;
			$this->Comment = null;
			$this->Source = null;
			$this->Product_Description = null;
			$this->Per_Serving_Amount_In_Grams = null;
			$this->Per_Serving_Amount_In_Grams_PPD = null;
			$this->Type = null;
			$this->Type_Of_Restaurant = null;
			$this->Informed_Dining_Program = null;
			$this->NFT_Last_Update = null;
			$this->Child_Item = null;
			$this->Product_Grouping = null;
			$this->Classification_Number = null;

		}
	
	public function getClassification_Name(){

		return $this->Classification_Number;

	}


	public function setClassification_Number($Classification_Number){

		$this->Classification_Number = $Classification_Number;
	}

	public function getRecord(){
		return $this->Record;
	}

	public function setRecord($Record){
		$this->Record = $Record;
	}

	public function getLabel_UPC(){
		return $this->Label_UPC;
	}

	public function setLabel_UPC($Label_UPC){
		$this->Label_UPC = $Label_UPC;
	}

	public function getNielsen_Item_Rank_UPC(){
		return $this->Nielsen_Item_Rank_UPC;
	}

	public function setNielsen_Item_Rank_UPC($Nielsen_Item_Rank_UPC){
		$this->Nielsen_Item_Rank_UPC = $Nielsen_Item_Rank_UPC;
	}

	public function getNielsen_Category(){
		return $this->Nielsen_Category;
	}

	public function setNielsen_Category($Nielsen_Category){
		$this->Nielsen_Category = $Nielsen_Category;
	}

	public function getLabel_Description(){
		return $this->Label_Description;
	}

	public function setLabel_Description($Label_Description){
		$this->Label_Description = $Label_Description;
	}

	public function getBrand(){
		return $this->Brand;
	}

	public function setBrand($Brand){
		$this->Brand = $Brand;
	}

	public function getManufacturer(){
		return $this->Manufacturer;
	}

	public function setManufacturer($Manufacturer){
		$this->Manufacturer = $Manufacturer;
	}

	public function getCountry(){
		return $this->Country;
	}

	public function setCountry($Country){
		$this->Country = $Country;
	}

	public function getPackage_Size(){
		return $this->Package_Size;
	}

	public function setPackage_Size($Package_Size){
		$this->Package_Size = $Package_Size;
	}

	public function getPackage_Size_UofM(){
		return $this->Package_Size_UofM;
	}

	public function setPackage_Size_UofM($Package_Size_UofM){
		$this->Package_Size_UofM = $Package_Size_UofM;
	}

	public function getNumber_Of_Units(){
		return $this->Number_Of_Units;
	}

	public function setNumber_Of_Units($Number_Of_Units){
		$this->Number_Of_Units = $Number_Of_Units;
	}

	public function getStorage_Type(){
		return $this->Storage_Type;
	}

	public function setStorage_Type($Storage_Type){
		$this->Storage_Type = $Storage_Type;
	}

	public function getStorage_Statement(){
		return $this->Storage_Statement;
	}

	public function setStorage_Statement($Storage_Statement){
		$this->Storage_Statement = $Storage_Statement;
	}

	public function getCollection_Date(){
		return $this->Collection_Date;
	}

	public function setCollection_Date($Collection_Date){
		$this->Collection_Date = $Collection_Date;
	}

	public function getHealth_Claim(){
		return $this->Health_Claim;
	}

	public function setHealth_Claim($Health_Claim){
		$this->Health_Claim = $Health_Claim;
	}

	public function getNutrient_Claim(){
		return $this->Nutrient_Claim;
	}

	public function setNutrient_Claim($Nutrient_Claim){
		$this->Nutrient_Claim = $Nutrient_Claim;
	}

	public function getOther_Package_Statement(){
		return $this->Other_Package_Statement;
	}

	public function setOther_Package_Statement($Other_Package_Statement){
		$this->Other_Package_Statement = $Other_Package_Statement;
	}

	public function getSuggested_Direction(){
		return $this->Suggested_Direction;
	}

	public function setSuggested_Direction($Suggested_Direction){
		$this->Suggested_Direction = $Suggested_Direction;
	}

	public function getIngredients(){
		return $this->Ingredients;
	}

	public function setIngredients($Ingredients){
		$this->Ingredients = $Ingredients;
	}

	public function getMultipart(){
		return $this->Multipart;
	}

	public function setMultipart($Multipart){
		$this->Multipart = $Multipart;
	}

	public function getNutrition_Fact_Table(){
		return $this->Nutrition_Fact_Table;
	}

	public function setNutrition_Fact_Table($Nutrition_Fact_Table){
		$this->Nutrition_Fact_Table = $Nutrition_Fact_Table;
	}

	public function getCommon_Household_Measure(){
		return $this->Common_Household_Measure;
	}

	public function setCommon_Household_Measure($Common_Household_Measure){
		$this->Common_Household_Measure = $Common_Household_Measure;
	}

	public function getPer_Serving_Amount(){
		return $this->Per_Serving_Amount;
	}

	public function setPer_Serving_Amount($Per_Serving_Amount){
		$this->Per_Serving_Amount = $Per_Serving_Amount;
	}

	public function getPer_Serving_UofM(){
		return $this->Per_Serving_UofM;
	}

	public function setPer_Serving_UofM($Per_Serving_UofM){
		$this->Per_Serving_UofM = $Per_Serving_UofM;
	}

	public function getPer_Serving_Amount_PPD(){
		return $this->Per_Serving_Amount_PPD;
	}

	public function setPer_Serving_Amount_PPD($Per_Serving_Amount_PPD){
		$this->Per_Serving_Amount_PPD = $Per_Serving_Amount_PPD;
	}

	public function getPer_Serving_Amount_PPD_UofM(){
		return $this->Per_Serving_Amount_PPD_UofM;
	}

	public function setPer_Serving_Amount_PPD_UofM($Per_Serving_Amount_PPD_UofM){
		$this->Per_Serving_Amount_PPD_UofM = $Per_Serving_Amount_PPD_UofM;
	}

	public function getComment(){
		return $this->Comment;
	}

	public function setComment($Comment){
		$this->Comment = $Comment;
	}

	public function getSource(){
		return $this->Source;
	}

	public function setSource($Source){
		$this->Source = $Source;
	}

	public function getProduct_Description(){
		return $this->Product_Description;
	}

	public function setProduct_Description($Product_Description){
		$this->Product_Description = $Product_Description;
	}

	public function getPer_Serving_Amount_In_Grams(){
		return $this->Per_Serving_Amount_In_Grams;
	}

	public function setPer_Serving_Amount_In_Grams($Per_Serving_Amount_In_Grams){
		$this->Per_Serving_Amount_In_Grams = $Per_Serving_Amount_In_Grams;
	}

	public function getPer_Serving_Amount_In_Grams_PPD(){
		return $this->Per_Serving_Amount_In_Grams_PPD;
	}

	public function setPer_Serving_Amount_In_Grams_PPD($Per_Serving_Amount_In_Grams_PPD){
		$this->Per_Serving_Amount_In_Grams_PPD = $Per_Serving_Amount_In_Grams_PPD;
	}

	public function getType(){
		return $this->Type;
	}

	public function setType($Type){
		$this->Type = $Type;
	}

	public function getType_Of_Restaurant(){
		return $this->Type_Of_Restaurant;
	}

	public function setType_Of_Restaurant($Type_Of_Restaurant){
		$this->Type_Of_Restaurant = $Type_Of_Restaurant;
	}

	public function getInformed_Dining_Program(){
		return $this->Informed_Dining_Program;
	}

	public function setInformed_Dining_Program($Informed_Dining_Program){
		$this->Informed_Dining_Program = $Informed_Dining_Program;
	}

	public function getNFT_Last_Update(){
		return $this->NFT_Last_Update;
	}

	public function setNFT_Last_Update($NFT_Last_Update){
		$this->NFT_Last_Update = $NFT_Last_Update;
	}

	public function getChild_Item(){
		return $this->Child_Item;
	}

	public function setChild_Item($Child_Item){
		$this->Child_Item = $Child_Item;
	}

	public function getProduct_Grouping(){
		return $this->Product_Grouping;
	}

	public function setProduct_Grouping($Product_Grouping){
		$this->Product_Grouping = $Product_Grouping;
	}





        function checkForDuplicates ($conn){
			
							$query_duplicate =<<<EOQ
SELECT PackageID 
FROM Package
WHERE Label_UPC = ? AND Label_Description = ? AND Collection_Date = ?

EOQ;

				$stmt_duplicate = $conn->prepare($query_duplicate);
				$stmt_duplicate->bind_param("sss", $this->Label_UPC,$this->Label_Description, $this->Collection_Date);
				$stmt_duplicate->execute();
				$stmt_duplicate->store_result();

			if (($stmt_duplicate->num_rows) > 0 ){
				return true; //is a duplicate
				
			}else{
				return false; //not a dupicate 
			}

        }    


	function checkForUpcLabelMatch($Label_UPC,$conn){
				$label_query =<<<EOQ
SELECT DISTINCT ProductIDP
  FROM Package
 WHERE Label_UPC = ?  AND Label_UPC IS NOT NULL
EOQ;
				$stmt = $conn->prepare($label_query);
				$stmt->bind_param("s", $Label_UPC);
			    $stmt->execute();
			    $stmt->store_result();

				if($stmt->num_rows > 0){
					return true; //Found a UPC match
				}else{
					return false; //Did not find a UPC Label Match
				}

	}	

function checkForUpcSalesMatch($Neilsen_Item_Rank_UPC,$conn){
						$sales_query =<<<EOQ
SELECT DISTINCT ProductIDS
  FROM Sales
 WHERE Sales_UPC = ?  AND Sales_UPC IS NOT NULL
EOQ;
					$stmt = $conn->prepare($sales_query);
					$stmt->bind_param("s", $Neilsen_Item_Rank_UPC);
					$stmt->execute();
					$stmt->store_result();
				if($stmt->num_rows > 0){
					return true; //Found a UPC Sales  match
				}else{
					return false; //Did not find a UPC Sales Match
				}
}



       function checkIfSameGrouping($grouping,$conn) {
		   //echo "$grouping OYESSII";

		 if(is_numeric($grouping)){
				$query =<<<EOQ

SELECT DISTINCT ProductIDP
  FROM Package
 WHERE Product_Grouping = ? AND Product_Grouping IS NOT NULL
EOQ;
					$statement = $conn->prepare($query);
					$statement->bind_param("s", $grouping);
					$result = $statement->execute();
						$statement->store_result();

                    if($statement->num_rows > 0){
				
                        return true;
                    }else{
					
                        return false;
                    }

		 }else{
			  return false;
		 }

         }

       function checkIfSameUPCWithDifferentGrouping($upc,$grouping,$conn) {
		   //echo "$grouping OYESSII";
// select PackageID from Package where Label_UPC = 2222 AND Product_Grouping != 222.222 AND Product_Grouping IS NOT NULL

		 if(is_numeric($grouping)){
				$query =<<<EOQ

SELECT PackageID
  FROM Package
 WHERE Label_UPC = ? AND Product_Grouping != ? AND Product_Grouping IS NOT NULL
EOQ;
					$statement = $conn->prepare($query);
					$statement->bind_param("ss",$upc,$grouping);
					$result = $statement->execute();
						$statement->store_result();

                    if($statement->num_rows > 0){
				
                        return true;
                    }else{
					
                        return false;
                    }

		 }else{
			  return false;
		 }

         }

		function createProduct($Username,$conn){
						$query_product =<<<EOQ
INSERT INTO Product (Description, Brand, Manufacturer, Last_Edited_By,Type, Restaurant_Type) VALUES (?, ?, ?, ?, ?, ?)
EOQ;
						$stmt = $conn->prepare($query_product);
						$stmt->bind_param("ssssss", $this->Product_Description, $this->Brand, $this->Manufacturer,$Username, $this->Type, $this->Type_Of_Restaurant);
						$stmt->execute();
						$id = mysqli_insert_id($conn);

						if(!empty($this->Classification_Number) && strlen($this->Classification_Number) != 0){


			$stmt_classification = $conn->prepare("Select * From Classification Where Classification_Number= ?");		
			$stmt_classification->bind_param("s", $this->Classification_Number);
			$result_c = $stmt_classification->execute();
			$stmt_classification->store_result();
				if(($stmt_classification->num_rows)>0){

	$query2 =<<<EOQ

INSERT INTO Product_Classification (ProductID,ClassificationID)
Select ?, ClassificationID from Classification where Classification_Number = ?
EOQ;

								$stmt = $conn->prepare($query2);
									$stmt->bind_param("is",$id, $this->Classification_Number);
									$result2 = $stmt->execute();



						}





						
			
		}
		return $id;

		}




	function PopulateNFT($id,$cars,$conn){


$query_insert =<<<EOQ
INSERT INTO Product_Component(
			PackageID,
			ComponentID, 
			Amount, 
			Amount_Unit_Of_Measure,
			Daily_Value, 
			PPD
)
VALUES ( ?, ?, ?, ?, ?, ?)
EOQ;


$stmt = $conn->prepare($query_insert);

for ($row1 = 0; $row1 < 94; $row1++) {

								
								
								$cars[$row1][1] =  (empty($cars[$row1][1]) && strlen($cars[$row1][1]) == 0 ?NULL :$cars[$row1][1]);
								$cars[$row1][3] =  (empty($cars[$row1][3]) && strlen($cars[$row1][3]) == 0 ?NULL :$cars[$row1][3]);
								$cars[$row1][2] =  (empty($cars[$row1][1]) && strlen($cars[$row1][1]) == 0 ?NULL :$cars[$row1][2]);

								$stmt->bind_param("iidsds",$id, $cars[$row1][0],$cars[$row1][1],$cars[$row1][2],$cars[$row1][3],$cars[$row1][4]);
								$results = $stmt->execute();


}


	}		

function createPackage($productID,$conn,$Username){
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// echo "HERE $productID   Date: $this->NFT_Last_Update Child: $this->Child_Item **";


	$query_insert =<<<EOQ
INSERT Into Package(
       ProductIDP,
       Label_UPC,
       Label_Description,
       PPD_Per_Serving_Amount,
       PPD_Per_Serving_UofM,
       Per_Serving_Amount_In_Grams,
       Per_Serving_Amount_In_Grams_PPD,
       Package_Size_UofM,
       Nielsen_Category,
       Brand,
       Manufacturer,
       Country,
       Package_Size,
       Number_Of_Units,
       Storage_Type,
       Storage_Statement,
       Collection_Date,
       Health_Claim,
       Nutrition_Claim,
       Other_Package_Statement,
       Suggested_Direction,
       Ingredients,
       Multipart,
       Nutrition_Fact_Table,
       Common_Measure,
       Per_Serving_Amount,
       Per_Serving_Unit,
       Source,
       Comments,
       Product_Description,
	   Nielsen_Item_Rank_UPC,
	   Last_Edited_By,
	   Nft_Last_Update_Date,
	   Informed_Dining_Program,
	   Child_Item,

	   Product_Grouping
) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
EOQ;

$nft = ($this->NFT_Last_Update != null?$this->NFT_Last_Update:NULL);
$informed = ($this->Informed_Dining_Program != null?$this->Informed_Dining_Program:NULL);
$childItem =  ($this->Child_Item != null?$this->Child_Item:NULL);


						$stmt = $conn->prepare($query_insert);
						$stmt->bind_param("issdsddsssssssssssssssssssssssssssss", $productID,$this->Label_UPC,$this->Label_Description, 
						$this->Per_Serving_Amount_PPD, $this->Per_Serving_Amount_PPD_UofM, $this->Per_Serving_Amount_In_Grams, 
						$this->Per_Serving_Amount_In_Grams_PPD, $this->Package_Size_UofM, $this->Nielsen_Category,
						$this->Brand,$this->Manufacturer, $this->Country, $this->getPackage_Size, 
						$this->Number_Of_Units,$this->Storage_Type,$this->Storage_Statement, 
						$this->Collection_Date, $this->Health_Claim, $this->Nutrient_Claim, 
						$this->Other_Package_Statement, $this->Suggested_Direction,$this->Ingredients,
						$this->Multipart, $this->Nutrition_Fact_Table, $this->Common_Household_Measure,
						$this->Per_Serving_Amount, $this->Per_Serving_UofM,$this->Source, 
						$this->Comment, $this->Product_Description,$this->Nielsen_Item_Rank_UPC,$Username,$nft,
						$informed,$childItem,$this->Product_Grouping);
						

						if($stmt->execute()){
							
						}else{
							
							//die('Error : '. $conn->error);
						}

				
						return mysqli_insert_id($conn);



}
function createPackageSalesUPCMatch($Username,$conn){



						$query_insert =<<<EOQ
INSERT INTO Package(
       ProductIDP,
       Label_UPC,
       Label_Description,
       PPD_Per_Serving_Amount,
       PPD_Per_Serving_UofM,
       Per_Serving_Amount_In_Grams,
       Per_Serving_Amount_In_Grams_PPD,
       Package_Size_UofM,
       Nielsen_Category,
       Brand,
       Manufacturer,
       Country,
       Package_Size,
       Number_Of_Units,
       Storage_Type,
       Storage_Statement,
       Collection_Date,
       Health_Claim,
       Nutrition_Claim,
       Other_Package_Statement,
       Suggested_Direction,
       Ingredients,
       Multipart,
       Nutrition_Fact_Table,
       Common_Measure,
       Per_Serving_Amount,
       Per_Serving_Unit,
       Source,
       Comments,
       Product_Description,
	   Nielsen_Item_Rank_UPC,
	   Last_Edited_By,
	   Nft_Last_Update_Date,
	   Informed_Dining_Program,
	   Child_Item,
	   Product_Grouping
)
SELECT DISTINCT
       ProductIDS, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Sales
 WHERE Sales_UPC = ?
EOQ;

$nft = ($this->NFT_Last_Update != null?$this->NFT_Last_Update:NULL);
$informed = ($this->Informed_Dining_Program != null?$this->Informed_Dining_Program:NULL);
$childItem =   ($this->Child_Item != null?$this->Child_Item:NULL);
						$stmt = $conn->prepare($query_insert);
						$stmt->bind_param("ssdsddssssssssssssssssssssssssssssss", $this->Label_UPC,$this->Label_Description, 
						$this->Per_Serving_Amount_PPD, $this->Per_Serving_Amount_PPD_UofM, $this->Per_Serving_Amount_In_Grams, 
						$this->Per_Serving_Amount_In_Grams_PPD, $this->Package_Size_UofM, $this->Nielsen_Category,
						$this->Brand,$this->Manufacturer, $this->Country, $this->Package_Size, 
						$this->Number_Of_Units,$this->Storage_Type,$this->Storage_Statement, 
						$this->Collection_Date, $this->Health_Claim, $this->Nutrient_Claim, 
						$this->Other_Package_Statement, $this->Suggested_Direction,$this->Ingredients,
						$this->Multipart, $this->Nutrition_Fact_Table, $this->Common_Household_Measure,
						$this->Per_Serving_Amount, $this->Per_Serving_UofM,$this->Source, 
						$this->Comment, $this->Product_Description,$this->Nielsen_Item_Rank_UPC,$Username,$nft, 
						$informed, $childItem, 
						$this->Product_Grouping, $this->Nielsen_Item_Rank_UPC);
						
						$result_insert = $stmt->execute();
						

					
						return mysqli_insert_id($conn);


}

function updateFields($match,$value,$column,$tableName, $Username,$conn){

if (!empty($this->Manufacturer) && strlen($this->Manufacturer) != 0 && !ctype_space($this->Manufacturer)){

							$query_update1 =<<<EOQ
UPDATE Product
   SET Manufacturer = ?, Last_Edited_By = ?
 WHERE ProductID = (
          SELECT DISTINCT $column
            FROM $tableName
           WHERE $match = ?
       )
EOQ;
							$stmt22 = $conn->prepare($query_update1);
							$stmt22->bind_param("sss", $this->Manufacturer,$Username,$value);

						$stmt22->execute();



}
if (!empty($this->Product_Description) && strlen($this->Product_Description) != 0 && !ctype_space($this->Product_Description)){
							$query_updatep =<<<EOQ
UPDATE Product
   SET Description = ?, Last_Edited_By = ?
 WHERE ProductID = (
          SELECT DISTINCT $column
            FROM $tableName
           WHERE $match = ?
       )
EOQ;
							$stmt2p = $conn->prepare($query_updatep);
							$stmt2p->bind_param("sss", $this->Product_Description,$Username,$value);

							$stmt2p->execute();


}

if (!empty($this->Brand) && strlen($this->Brand) != 0 && !ctype_space($this->Brand)){

							$query_update =<<<EOQ
UPDATE Product
   SET Brand = ?, Last_Edited_By = ?
 WHERE ProductID = (
          SELECT DISTINCT $column
            FROM $tableName
           WHERE $match = ?
       )
EOQ;
							$stmt2 = $conn->prepare($query_update);
							$stmt2->bind_param("sss", $this->Brand,$Username,$value);
							$stmt2->execute();


}



}

function createPackageLabelUPCGroupingMatch($Username,$match,$value, $conn){
  
						$query_insert =<<<EOQ
INSERT Into Package(
       ProductIDP,
       Label_UPC,
       Label_Description,
       PPD_Per_Serving_Amount,
       PPD_Per_Serving_UofM,
       Per_Serving_Amount_In_Grams,
       Per_Serving_Amount_In_Grams_PPD,
       Package_Size_UofM,
       Nielsen_Category,
       Brand,
       Manufacturer,
       Country,
       Package_Size,
       Number_Of_Units,
       Storage_Type,
       Storage_Statement,
       Collection_Date,
       Health_Claim,
       Nutrition_Claim,
       Other_Package_Statement,
       Suggested_Direction,
       Ingredients,
       Multipart,
       Nutrition_Fact_Table,
       Common_Measure,
       Per_Serving_Amount,
       Per_Serving_Unit,
       Source,
       Comments,
       Product_Description,
	   Nielsen_Item_Rank_UPC,
	   Last_Edited_By,
	  Nft_Last_Update_Date,
	   Informed_Dining_Program,
	   Child_Item,
	 
	   Product_Grouping
)
SELECT DISTINCT
       ProductIDP, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
  FROM Package
 WHERE $match = ?
EOQ;

$nft = ($this->NFT_Last_Update != null?$this->NFT_Last_Update:NULL);
$informed = ($this->Informed_Dining_Program != null?$this->Informed_Dining_Program:NULL);
$childItem =  ($this->Child_Item != null?$this->Child_Item:NULL);

						$stmt = $conn->prepare($query_insert);
						$stmt->bind_param("ssdsddssssssssssssssssssssssssssssss", $this->Label_UPC,$this->Label_Description, 
						$this->Per_Serving_Amount_PPD, $this->Per_Serving_Amount_PPD_UofM, $this->Per_Serving_Amount_In_Grams, 
						$this->Per_Serving_Amount_In_Grams_PPD, $this->Package_Size_UofM, $this->Nielsen_Category,
						$this->Brand,$this->Manufacturer, $this->Country, $this->Package_Size, 
						$this->Number_Of_Units,$this->Storage_Type,$this->Storage_Statement, 
						$this->Collection_Date, $this->Health_Claim, $this->Nutrient_Claim, 
						$this->Other_Package_Statement, $this->Suggested_Direction,$this->Ingredients,
						$this->Multipart, $this->Nutrition_Fact_Table, $this->Common_Household_Measure,
						$this->Per_Serving_Amount, $this->Per_Serving_UofM,$this->Source, 
						$this->Comment, $this->Product_Description,$this->Nielsen_Item_Rank_UPC,$Username,
						$nft, $informed, $childItem,$this->Product_Grouping, $value);
						
						
						$result_insert = $stmt->execute();
						return mysqli_insert_id($conn);


}




   }
?>