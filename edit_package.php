<?php include 'session.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />



<script type="text/javascript" src="js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="css/bootstrap-iso.css" />

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
	</script>  




	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<script>

$(document).ready(function() {

$('input[name="intervaltype"]').click(function () {
    //jQuery handles UI toggling correctly when we apply "data-target" attributes and call .tab('show') 
    //on the <li> elements' immediate children, e.g the <label> elements:
    $(this).closest('label').tab('show');
});
} );


	</script>



<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->



	
	

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


		<script>

$(document).ready(function() {

$('input[name="intervaltype"]').click(function () {
    //jQuery handles UI toggling correctly when we apply "data-target" attributes and call .tab('show') 
    //on the <li> elements' immediate children, e.g the <label> elements:
    $(this).closest('label').tab('show');
});
} );


	</script>

	

	
	
		<style>
.error {
    color:red;
}


		.mainsearch{
			border-style: solid;
			border-color:#F0F0F0 ;
			
		}
		
		
				.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
		.button1{
			margin-left:84.5%;
			
		}
		.btn-default{
			width:150px;
		}
		.form-control{
	width:355px;
	
}
		.button1{
			margin-left:75%;
			
		}
		.btn-default{
			width:150px;
		}
	
	

#hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid red;
    margin: 1em 0;
    padding: 0; 
}




.hidethis2{
	margin-bottom:2%;
}
.well{
			    background-color:  	hsl(60, 100%, 98%);
				padding-top:1%;
				padding-bottom:1%;
		}
	
	</style>
	<?php include("fill_package.php"); ?>
</head>
<body class="wide comments example">

<?php include 'header.php';?>
<main role="main" property="mainContentOfPage" class="container">

<?php
$UPC12 = ($_GET['PackageID']?$_GET['PackageID']:'');
 ?>


		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
		
		<div class="container" >


  


<form role="form" method="post" action="#" id="vids-search-form" onsubmit="return validateForm()" name="myForm" >
<section style="margin-top: 15px;" class="hidethis">
<h3>Package Label</h3>
	  <div id="confirm-message" style="color:#008000;"></div>
<div class="well" style="margin-right:2%;">
	

	
	
		<div class="row">
			<div class="form-group col-xs-6">
				<label for="Label_UPC" class="required">Label UPC <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" style="width:540px" name="Label_UPC" disabled="disabled" id="Label_UPC" placeholder="Enter the UPC Code of the Package Label" value="<?PHP echo $row['Label_UPC']; ?>" required/> 
			</div>
			<div class="form-group col-xs-6">
				<label for="Nielsen_Item_Rank_UPC" >Nielsen Item Rank UPC</label>
				<input type="text" class="form-control" style="width:540px" name="Nielsen_Item_Rank_UPC"  id="Nielsen_Item_Rank_UPC" placeholder="Enter the Nielsen Item Rank UPC of the Package Label" value="<?PHP echo $row['Nielsen_Item_Rank_UPC']; ?>"/> 
			</div>

</div>
			<div class="row">
			<div class="form-group col-xs-6">
				<label for="Label_Description" class="required">Label Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" style="width:540px" name="Label_Description" id="Label_Description" placeholder="Enter the Description of the Package Label" value="<?PHP echo $row['Label_Description']; ?>" required/>
			</div>
			<div class="form-group col-xs-6">
				<label for="Common_Measure" >Common Household Measure </label>
				<input type="text" class="form-control" style="width:540px" name="Common_Measure" id="Common_Measure" placeholder="Enter the Common Household Measure of the Package Label" value="<?PHP echo $row['Common_Measure']; ?>"/>
			</div>
		
		</div>
	
	</div>
	<div class="well" style="margin-right:2%;">
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Nielsen_Category" >Nielsen Category </label>
				<input type="text" class="form-control" name="Nielsen_Category"  id="Nielsen_Category" placeholder="Enter the Nielsen of the Package Label" value="<?PHP echo $row['Nielsen_Category']; ?>"/> 
			</div>
			<div class="form-group col-sm-4">
				<label for="Brand" class="required">Brand <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand of the Package Label" value="<?PHP echo $row['Brand']; ?>" required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Manufacturer" class="required">Manufacturer <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the Manufacturer of the Package Label" value="<?PHP echo $row['Manufacturer']; ?>" required/>
			</div>
		
		</div>
	
	</div>
	
	<div class="well" style="margin-right:2%;">
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Country">Country</label>
				<input type="text" class="form-control" name="Country"  id="Country" placeholder="Enter the Country of the Package Label" value="<?PHP echo $row['Country']; ?>" /> 
			</div>
			<div class="form-group col-sm-4">
				<label for="Package_Size">Package Size </label>
				<input type="text" class="form-control" name="Package_Size" id="Package_Size" placeholder="Enter the Package Size of the Package Label" value="<?PHP echo $row['Package_Size']; ?>" />
			</div>


			

								<div class="form-group col-sm-4">
	<label for="Package_Size_UofM" > Package Size Unit of Measure </label>
    <select class="form-control" id="Package_Size_UofM" name="Package_Size_UofM" > 
		   <option value="<?PHP echo $row['Package_Size_UofM']; ?>" selected="selected"><?PHP echo $row['Package_Size_UofM']; ?></option>
			<?php include 'Units.php';?>
      
      </select></div>
			<?php include("fill_package.php"); ?>	
		
		</div>
	
	</div>
	<div class="well" style="margin-right:2%;">
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Storage_Type">Storage Type</label>
				<input type="text" class="form-control" name="Storage_Type"  id="Storage_Type" placeholder="Enter the Storage Type of the Package Label" value="<?PHP echo $row['Storage_Type']; ?>" /> 
			</div>
			<div class="form-group col-sm-4">
				<label for="Storage_Statement">Storage Statements</label>
				<input type="text" class="form-control" name="Storage_Statement" id="Storage_Statement" placeholder="Enter the Storage Statements of the Package Label" value="<?PHP echo $row['Storage_Statement']; ?>" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Number_Of_Units">Number of Units</label>
				<input type="text" class="form-control" name="Number_Of_Units" id="Number_Of_Units" placeholder="Enter the Number of Units of the Package Label" value="<?PHP echo $row['Number_Of_Units']; ?>"/>
			</div>
		
		</div>
	
	</div>
	
		<div class="well" style="margin-right:2%; ">
		
<div class="row">
	
					<div class="form-group col-xs-6 ">
  <label for="Ingredients" class="required">Ingredients <strong class="required">(required)</strong></label>
  <textarea class="form-control"  style="width:540px" rows="2"  id="Ingredients" name="Ingredients" required><?PHP echo $row['Ingredients']; ?></textarea>
</div>
		

		
				
					<div class="form-group col-xs-6">
  <label for="Nutrition_Fact_Table" class="required">Nutrition Fact Table <strong class="required">(required)</strong></label>
  <textarea class="form-control" style="width:540px"   rows="2" name="Nutrition_Fact_Table" id="Nutrition_Fact_Table" required><?PHP echo $row['Nutrition_Fact_Table']; ?></textarea>
</div>
		
</div>
</div>

		<div class="well" style="margin-right:2%; ">
		
<div class="row">
	
					<div class="form-group col-xs-6 ">
  <label for="Suggested_Direction">Suggested Direction</label>
  <textarea class="form-control"  style="width:540px" rows="2" name="Suggested_Direction" id="Suggested_Direction" ><?PHP echo $row['Suggested_Direction']; ?></textarea>
</div>
		

		
				
					<div class="form-group col-xs-6">
  <label for="Nutrition_Claim">Nutrition Claim</label>
  <textarea class="form-control" style="width:540px" name="Nutrition_Claim"  rows="2"  id="Nutrition_Claim" ><?PHP echo $row['Nutrition_Claim']; ?></textarea>
</div>
		
</div>
</div>

		<div class="well" style="margin-right:2%; ">
		
<div class="row">
	
					<div class="form-group col-xs-6 ">
  <label for="Other_Package_Statement">Other Package Statements</label>
  <textarea class="form-control"  style="width:540px" rows="2" name="Other_Package_Statement" id="Other_Package_Statement" ><?PHP echo $row['Other_Package_Statement']; ?></textarea>
</div>
		

		
				
					<div class="form-group col-xs-6">
  <label for="Health_Claim">Health Claim</label>
  <textarea class="form-control" style="width:540px" name="Health_Claim"  rows="2"  id="Health_Claim" ><?PHP echo $row['Health_Claim']; ?></textarea>
</div>
		
</div>
</div>


	
		
			<div class="well" style="margin-right:2%;">
			<div class="row">
			<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" value="<?PHP echo $row['Comments']; ?>" placeholder="Enter a Comment on a Package Label"/>
			</div>
						   <div class="form-group col-sm-4">
      <label for="date1" class="required">
     Collection Date <strong class="required">(required)</strong>
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control" id="date1" name="Collection_Date" placeholder="YYYY/MM/DD" type="text" value="<?PHP echo $row['Collection_Date']; ?>" required/>
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
     </div>
			<div class="form-group col-sm-4">
				<label for="Sources">Source</label>
				<input type="text" class="form-control" name="Source"  id="Sources" placeholder="Enter the Source of the Package Label" value="<?PHP echo $row['Source']; ?>" /> 
			</div>
		
			
			
		</div>
			

	</div>
	<div class="well" style="margin-right:2%;">
		
		<div class="row">

			<div class="form-group col-xs-6">
				<label for="Per_Serving_Amount_In_Grams">Per Serving Amount (in grams)</label>
				<input type="text" class="form-control" style="width:540px" name="Per_Serving_Amount_In_Grams" id="Per_Serving_Amount_In_Grams" placeholder="Enter the Serving Amount (in grams) of the Package Label" value="<?PHP echo $row['Per_Serving_Amount_In_Grams']; ?>" />
			</div>
			<div class="form-group col-xs-6">
				<label for="Per_Serving_Amount_In_Grams_PPD">PPD Per Serving Amount (in grams) </label>
				<input type="text" class="form-control" style="width:540px" name="Per_Serving_Amount_In_Grams_PPD" id="Per_Serving_Amount_In_Grams_PPD" placeholder="Enter the PPD Serving Amount (in grams) of the Package Label" value="<?PHP echo $row['Per_Serving_Amount_In_Grams_PPD']; ?>"/>
			</div>
		
		</div>

		<div class="row">
			<div class="form-group col-xs-6">
				<label for="Product_Description">Product Description</label>
				<input type="text" class="form-control" style="width:540px" name="Product_Description"  id="Product_Description" placeholder="Enter the Product Description of the Package Label" value="<?PHP echo $row['Product_Description']; ?>" /> 
			</div>

            		<div class="form-group col-xs-6">
	<label for="Multi_Part_Package" name="Multi_Part_Package">Multi Part Package</label>
      <select class="form-control" id="Multi_Part_Package" style="width:540px" name="Multi_Part_Package">
	  	<option value"<?PHP echo $row['Multipart']; ?>" selected><?PHP echo $row['Multipart']; ?></option>
		 <option value="No">No</option>
		 <option value="Yes">Yes</option>
      </select></div>
		</div>
	
	</div>

		<div role="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
        
        <li role="tab" class="active">
            <label data-target="#scheduleDaily">
                <input id="optDaily" name="intervaltype" type="radio" checked />
                As Sold &nbsp; &nbsp; &nbsp;
            </label>
        </li>
        
        <li role="tab">
            <label data-target="#scheduleWeekly">
                <input id="optWeekly" name="intervaltype" type="radio" />
                As Prepared
            </label>
        </li>
        
  
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="scheduleDaily">
	    <div style="margin-top:4%;">  

<div class="well" style="margin-right:2%;">	
			<div class="row">
		<div class="form-group col-xs-6">
				<label for="Per_Serving_Amount" class="required">Per Serving Amount <strong class="required">(required)</strong></label>
				<input type="text" style="width:540px" class="form-control" name="Per_Serving_Amount" id="manufacturer" placeholder="Enter the Amount in the Package Label" value="<?PHP echo $row['Per_Serving_Amount']; ?>" required/>
			</div>
	
					<div class="form-group col-xs-6">
	<label for="sel1" name="Per_Serving_Unit" class="required"> Per Serving  Unit of measure <strong class="required">(required)</strong></label>
    <select class="form-control" id="sel1" name="Per_Serving_Unit" style="width:540px" required>
		  <option value="<?PHP echo $row['Per_Serving_Unit']; ?>" selected="selected"><?PHP echo $row['Per_Serving_Unit']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select></div>
			

			

	</div>
	</div>	
	
		
	
		
	<div class="well" style="margin-right:2%;">

<div class= "row">
<?php include 'connection.php';?>
<?php

$editpackagequery = <<<EOQ
SELECT *
  FROM Package K
 INNER JOIN Product_Component PC
    ON K.PackageID      = PC.PackageID
 INNER JOIN Components C
    ON PC.ComponentID   = C.ComponentID
 WHERE C.Component_Name = ?
   AND K.PackageID      = ?
   AND PPD              = ?
EOQ;

?>
	<?php 
	
	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Energy';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();
	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label required">Energy <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy" name="Energy_Amount" value="<?PHP echo $row['Amount']; ?>" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Energy_Unit">
  <option value="kcal" selected="selected">kcal</option>
	
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Energy" name="Energy_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 
 
 </div>
 
 <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy kj';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();
	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Energy kJ</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy kJ" id="Energy_kj_Amount" name="Energy_kj_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Energy_kj_Unit" name="Energy_kj_Unit">
  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
  <option value="kJ" >kJ</option>	
   <option value="" ></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy kj';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Energy kJ" name="Energy_kj_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 
 
 </div>
 
 
  <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Saturated + Trans Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();
	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Saturated + Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated + Trans Fat" id="Saturated_Plus_Trans_Amount" name="Saturated_Plus_Trans_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
<select class="form-control" id="Saturated_Plus_Trans_UofM" name="Saturated_Plus_Trans_UofM">
  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select> </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Saturated + Trans Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Saturated + Trans Fat" name="Saturated_Plus_Trans_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 
 
 </div>
 
 <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?> 
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">

  <label class="col-sm-3 control-label required">Fat <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fat" name="Fat_Amount" value="<?PHP echo $row['Amount']; ?>" required> 
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
<select class="form-control" id="sel1" name="Fat_Unit_Of" required>
  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select> </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			   
	$Component_Name = 'Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Fat" name="Fat_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 <div class= "row" style="margin-top:4px;">

 
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	  
	$Component_Name = 'Saturated Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>	 
  <label class="col-sm-3 control-label">Saturated Fat</label>
  <div class="col-sm-3">
  
   <input type="text" class="form-control" placeholder="Amount of Saturated Fat" id="Saturated_Fat_Amount" name="Saturated_Fat_Amount" value="<?PHP echo $row['Amount']; ?>"> 

  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Saturated_Fat_Unit" name="Saturated_Fat_Unit">
		 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>

		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Saturated Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Saturated Fat" name="Saturated_Fat_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Trans Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Trans Fat</label>

  
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Trans Fat" id="Trans_Fat_Amount" name="Trans_Fat_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Trans_Fat_Unit" name="Trans_Fat_Unit">
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Trans Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Trans Fat" name="Trans_Fat_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
    <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Fat Polyunsaturated';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label ">Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Polyunsaturated Fat" id="Polyunsaturated_Amount" name="Polyunsaturated_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Polyunsaturated_Unit" name="Polyunsaturated_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Fat Polyunsaturated';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Polyunsaturated Fat" name="Polyunsaturated_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Omega-6 Polyunsaturated Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Omega-6 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-6 Polyunsaturated Fat" id="Omega6_Amount" name="Omega6_Amount" value = "<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega6_Unit" name="Omega6_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
	  
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Omega-6 Polyunsaturated Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Omega-6 Polyunsaturated Fat" name="Omega6_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Omega-3 Polyunsaturated Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Omega-3 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-3 Polyunsaturated Fat" id="Omega3_Amount" name="Omega3_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega3_Unit" name="Omega3_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Omega-3 Polyunsaturated Fat';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Omega-3 Polyunsaturated Fat" name="Omega3_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
   <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		    
	$Component_Name = 'Fat Monounsaturated';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label ">Monounsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Monounsaturated Fat" id="Monounsaturated_Amount" name="Monounsaturated_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Monounsaturated_Unit" name="Monounsaturated_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>  
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);		    
	$Component_Name = 'Fat Monounsaturated';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Monounsaturated Fat" name="Monounsaturated_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
 
 
  <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		    
	$Component_Name = 'Carbohydrates';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label required">Carbohydrates <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Carbohydrates" id="Carbohydrates_Amount"  name="Carbohydrates_Amount" value="<?PHP echo $row['Amount']; ?>" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Carbohydrates_Unit" name="Carbohydrates_Unit" required>
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>  
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		    
	$Component_Name = 'Carbohydrates';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Carbohydrates" name="Carbohydrates_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	  
	$Component_Name = 'Fibre';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>	 
		 
  <label class="col-sm-3 control-label required">Fibre <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fibre" id="Fibre_Amount" name="Fibre_Amount" value="<?PHP echo $row['Amount']; ?>" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Fibre_Unit" name="Fibre_Unit" required>
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected" required><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">   
	<?php include 'connection.php';?>  
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Fibre';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Fibre" name="Fibre_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
  

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Soluble Fibre';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Soluble Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Soluble Fibre" id="Soluble_Fibre_Amount" name="Soluble_Fibre_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Soluble_Fibre_Unit" name="Soluble_Fibre_Unit">
	     <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">  
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Soluble Fibre';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Soluble Fibre" name="Soluble_Fibre_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		  
	$Component_Name = 'Insolube Fibre';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
		 
  <label class="col-sm-3 control-label">Insolube Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Insolube Fibre" id="Insoluble_Fibre_Amount" name="Insoluble_Fibre_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Insoluble_Fibre_Unit"  name="Insoluble_Fibre_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
<?php include 'Units.php';?>	
	<option value=""></option>
	
      
      </select>  </div>
  <div class="col-sm-3">  
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Insolube Fibre';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Insolube Fibre" name="Insolube_Fibre_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Sugars';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Sugar</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar" id="Sugar_Amount" name="Sugar_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Unit" name="Sugar_Unit">
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		<option value=""></option>

      </select>  </div>
  <div class="col-sm-3">	
	<?php include 'connection.php';?>  
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Sugars';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Sugar" name="Sugar_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Sugars Alcohol';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Sugar Alcohols</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar Alcohols" id="Sugar_Alcohols_Amount" name="Sugar_Alcohols_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Alcohols_Unit" name="Sugar_Alcohols_Unit">
	<option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>

	<?php include 'Units.php';?>
	<option value=""></option>
      </select>  </div>
  <div class="col-sm-3">	
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Sugars Alcohol';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Sugar Alcohols" name="Sugar_Alcohols_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Starch';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Starch</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Starch" id="Starch_Amount" name="Starch_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Starch_Unit" name="Starch_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>	
	<option value=""></option>

      </select>  </div>
  <div class="col-sm-3">	
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  
	$Component_Name = 'Starch';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Starch" name="Starch_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);									
	$Component_Name = 'Protein';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label required">Protein <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Protein" name="Protein_Amount" value="<?PHP echo $row['Amount']; ?>"  required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Protein_Unit" required>
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>

	<?php include 'Units.php';?>
     <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				  		 		    		 		  
	$Component_Name = 'Protein';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Protein" name="Protein_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Cholesterol';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Cholesterol</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Cholesterol" id="Cholesterol_Amount" name="Cholesterol_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Cholesterol_Unit" name="Cholesterol_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
<?php include 'Units.php';?>	
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);  	
	$Component_Name = 'Cholesterol';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Cholesterol" name="Cholesterol_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 
	$Component_Name = 'Sodium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Sodium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sodium" id="Sodium_Amount" name="Sodium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sodium_Unit" name="Sodium_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>	
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		   
	$Component_Name = 'Sodium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Sodium" name="Sodium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				  
	$Component_Name = 'Potassium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Potassium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Potassium" id="Potassium_Amount" name="Potassium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Potassium_Unit" name="Potassium_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>	
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				
	$Component_Name = 'Potassium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Potassium" name="Potassium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 
	$Component_Name = 'Calcium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Calcium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Calcium" id="Calcium_Amount" name="Calcium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Calcium_Unit" name="Calcium_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	 <?php include 'Units.php';?>	
	 <option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				 
	$Component_Name = 'Calcium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Calcium" name="Calcium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		
	$Component_Name = 'Iron';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Iron</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iron" id="Iron_Amount" name="Iron_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iron_Unit" name="Iron_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>	
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Iron';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Iron" name="Iron_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			
	$Component_Name = 'Vitamin A';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin A</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin A" id="VitaminA_Amount"  name="VitaminA_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminA_Unit" name="VitaminA_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
	   <option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);					
	$Component_Name = 'Vitamin A';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin A" name="VitaminA_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		
	$Component_Name = 'Vitamin C';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin C</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin C" id="VitaminC_Amount" name="VitaminC_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminC_Unit" name="VitaminC_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>	
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Vitamin C';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin C" name="VitaminC_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		
	$Component_Name = 'Vitamin D';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin D</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin D" id="VitaminD_Amount" name="VitaminD_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminD_Unit" name="VitaminD_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
<?php include 'Units.php';?>		
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Vitamin D';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin D" name="VitaminD_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>

  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Vitamin E';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin E</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin E" id="VitaminE_Amount" name="VitaminE_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminE_Unit" name="VitaminE_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>	
	<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Vitamin E';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin E" name="VitaminE_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				 		 		 		 		
	$Component_Name = 'Vitamin K';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin K</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin K" id="VitaminK_Amount" name="VitaminK_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminK_Unit" name="VitaminK_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
			<?php include 'Units.php';?>
		<option value=""></option>

      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				 		 		 		 		 	
	$Component_Name = 'Vitamin K';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin K" name="VitaminK_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 
	$Component_Name = 'Thiamine';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Thiamine</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Thiamine" id="Thiamine_Amount" name="Thiamine_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Thiamine_Unit" name="Thiamine_Unit">
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	 	<?php include 'Units.php';?>
	 <option value=""></option>

      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);					
	$Component_Name = 'Thiamine';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Thiamine" name="Thiamine_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			 		 		 		 		 		 		 		 
	$Component_Name = 'Riboflavin';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Riboflavin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Riboflavin" id="Riboflavin_Amount" name="Riboflavin_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Riboflavin_Unit" name="Riboflavin_Unit">
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	 	<?php include 'Units.php';?>
	 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Riboflavin';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Riboflavin" name="Riboflavin_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			 		 		 		 		 		 		 		 		
	$Component_Name = 'Niacin';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Niacin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Niacin" id="Niacin_Amount" name="Niacin_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Niacin_Unit" name="Niacin_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
 	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 		 		 		 		
	$Component_Name = 'Niacin';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Niacin" name="Niacin_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 		 		  
	$Component_Name = 'Vitamin B6';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Vitamin B6</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B6" id="VitaminB6_Amount" name="VitaminB6_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB6_Unit" name="VitaminB6_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			 		 		 		 		 		 		 		 		
	$Component_Name = 'Vitamin B6';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B6" name="VitaminB6_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			 		 		 		 
	$Component_Name = 'Folate';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Folate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Folate" id="Folate_Amount"  name="Folate_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Folate_Unit" name="Folate_Unit">
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Folate';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Folate" name="Folate_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 		 		 		 		 		
	$Component_Name = 'Vitamin B12';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Vitamin B12</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B12" id="VitaminB12_Amount" name="VitaminB12_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB12_Unit" name="VitaminB12_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 		 		 		 		 		 
	$Component_Name = 'Vitamin B12';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B12" name="VitaminB12_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 	 		 		 		 			
	$Component_Name = 'Biotin';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Biotin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Biotin" id="Biotin_Amount" name="Biotin_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Biotin_Unit" name="Biotin_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);   	 		 		 		 			
	$Component_Name = 'Biotin';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Biotin" name="Biotin_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		  		 		 		 		 		 		 		 		 		 		 		 		 		 		 		
	$Component_Name = 'Choline';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Choline</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Choline" id="Choline_Amount" name="Choline_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Choline_Unit" name="Choline_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 		 		 		 		 		 		 		 		 		 		 		 		 		 		
	$Component_Name = 'Choline';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Choline" name="Choline_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 		 		 		 		 		 		 		 		 		 		
	$Component_Name = 'Choline';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Pantothenate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Pantothenate" id="Pantothenate_Amount" name="Pantothenate_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Pantothenate_Unit" name="Pantothenate_Unit">
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				 	 		 		 		 		 		 		 		 		 		 		 		 		 		 		 		
	$Component_Name = 'Choline';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Pantothenate" name="Pantothenate_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			  
	$Component_Name = 'Phosphorus';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Phosphorus</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Phosphorus" id="Phosphorus_Amount" name="Phosphorus_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Phosphorus_Unit" name="Phosphorus_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value="Tbsp"></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	   		 		 		 		 		 	 		 		 		 		 		 		 		 		 		 		 		 	
	$Component_Name = 'Phosphorus';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
  
   <input type="text" class="form-control" placeholder="% Daily value of Phosphorus" name="Phosphorus_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			 		 		 		 		 		 		 		 		 		 		 		 		 	
	$Component_Name = 'Iodide';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
		 
  <label class="col-sm-3 control-label">Iodide</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iodide" id="Iodide_Amount" name="Iodide_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iodide_Unit" name="Iodide_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
<?php include 'Units.php';?>	
	<option value=""></option>
		
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		 		 		 		 		 		 		 		 		 		 		 		 		 	
	$Component_Name = 'Iodide';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		
  
   <input type="text" class="form-control" placeholder="% Daily value of Iodide" name="Iodide_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Magnesium</label>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);					
	$Component_Name = 'Magnesium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="Amount of Magnesium" id="Magnesium_Amount" name="Magnesium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Magnesium_Unit" name="Magnesium_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			  
	$Component_Name = 'Magnesium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Magnesium" name="Magnesium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Zinc';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Zinc</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Zinc" id="Zinc_Amount" name="Zinc_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Zinc_Unit" name="Zinc_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		  
	$Component_Name = 'Zinc';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
	  
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Zinc" name="Zinc_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);				  
	$Component_Name = 'Selenium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Selenium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Selenium" id="Selenium_Amount" name="Selenium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Selenium_Unit" name="Selenium_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);									
	$Component_Name = 'Selenium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Selenium" name="Selenium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Copper';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>		 
		 
  <label class="col-sm-3 control-label">Copper</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Copper" id="Copper_Amount" name="Copper_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Copper_Unit" name="Copper_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Copper';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>	
  
   <input type="text" class="form-control" placeholder="% Daily value of Copper" name="Copper_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Manganese';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Manganese</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Manganese" id="Manganese_Amount" name="Manganese_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Manganese_Unit" name="Manganese_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery); 
	$Component_Name = 'Manganese';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Manganese" name="Manganese_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		
	$Component_Name = 'Chromium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Chromium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chromium" id="Chromium_Amount" name="Chromium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chromium_Unit" name="Chromium_Unit">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Chromium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Chromium" name="Chromium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Molybdenium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
  <label class="col-sm-3 control-label">Molybdenum</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Molybdenum" id="Molybdenium_Amount" name="Molybdenium_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Molybdenium_Unit" name="Molybdenium_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Molybdenium';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
  
   <input type="text" class="form-control" placeholder="% Daily value of Molybdenum" name="Molybdenium_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery); 
	$Component_Name = 'Chloride';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Chloride</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chloride" id="Chloride_Amount" name="Chloride_Amount" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chloride_Unit" name="Chloride_Unit">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>	 	
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery); 
	$Component_Name = 'Chloride';
	$PPD = 1;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		
   <input type="text" class="form-control" placeholder="% Daily value of Chloride" name="Chloride_DValue" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>




	
</div>
	
	
</div>

        </div>
        
        <div role="tabpanel" class="tab-pane" id="scheduleWeekly">
  <div id="status"></div>       
	    <div style="margin-top:4%;">  
	<?php include("fill_package.php"); ?>
<div class="well" style="margin-right:2%;">	
					<div class="row" >
		<div class="form-group col-sm-4">
				<label for="manufacturer">PPD Per Serving Amount</label>
				<input type="text"  class="form-control" name="PPD_Per_Serving_Amount" id="PPD_Per_Serving_Amount" placeholder="Enter the Serving Size of the Package Label" value="<?PHP echo $row['PPD_Per_Serving_Amount']; ?>" />
			</div>
	
				<div class="form-group col-sm-4">
	<label for="sel1" name="Year_Recorded"> PPD Per Serving Unit of Measure</label>
      <select class="form-control" id="PPD_Per_Serving_UofM" name="PPD_Per_Serving_UofM">
		  <option value="<?PHP echo $row['PPD_Per_Serving_UofM']; ?>" selected="selected"><?PHP echo $row['PPD_Per_Serving_UofM']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select></div>
<?php include("fill_package.php"); ?>
					<div class="form-group col-sm-4">
	<label for="sel1" name="cal"> Calculated</label>
      <select class="form-control" id="Calculated" name="Calculated" >
		  <option value="<?PHP echo $row['Calculated']; ?>" selected="selected"><?PHP echo $row['Calculated']; ?></option>
		 <option value="0">0</option>
     	 <option value="1">1</option>
      </select></div>		

	</div>
		
	</div>	
	
		
		
	<div class="well" style="margin-right:2%;">

<div class= "row">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Energy</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy" id="Energy_Amount_S" name="Energy_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Energy_Unit_S" name="Energy_Unit_S" >
  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
  <option value="kcal" >kcal</option>
		
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Energy" name="Energy_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy kj';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Energy kJ</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy kJ" id="Energy_Amount_kj_S"   name="Energy_Amount_kj_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Energy_Unit_kj_S" name="Energy_Unit_kj_S">
  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
  <option value="kJ">kJ</option>	
	
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Energy kj';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Energy kJ" name="Energy_DValue_kj_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);			 
	$Component_Name = 'Saturated + Trans Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Saturated + Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount os Saturated + Trans Fat" id="Saturated_Trans_Amount_S" name="Saturated_Trans_Amount_S" value="<?PHP echo $row['Amount']; ?>"> 
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Saturated_Trans_Unit_S" name="Saturated_Trans_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Saturated + Trans Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Saturated + Trans Fat" name="Saturated_Trans_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
 
 <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fat" id="Fat_Amount_S" name="Fat_Amount_S" value="<?PHP echo $row['Amount']; ?>"> 
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Fat_Unit_S" name="Fat_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	
	$Component_Name = 'Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Fat" name="Fat_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery); 
	$Component_Name = 'Saturated Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
 
		 <div class="form-group">
  <label class="col-sm-3 control-label">Saturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated Fat" id="Saturated_Fat_Amount_S" name="Saturated_Fat_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Saturated_Fat_Unit_S" name="Saturated_Fat_Unit_S" >
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);   
	$Component_Name = 'Saturated Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Saturated Fat" name="Saturated_Fat_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Trans Fat</label>
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);   
	$Component_Name = 'Trans Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Trans Fat" id="Trans_Fat_Amount_S" name="Trans_Fat_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Trans_Fat_Unit_S" name="Trans_Fat_Unit_S">
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);	 
	$Component_Name = 'Trans Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Trans Fat" name="Trans_Fat_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
    <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);		
	$Component_Name = 'Fat Polyunsaturated';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label ">Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Polyunsaturated Fat" id="Polyunsaturated_Amount_S" name="Polyunsaturated_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Polyunsaturated_Unit_S" name="Polyunsaturated_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>  
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Fat Polyunsaturated';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Polyunsaturated Fat" name="Polyunsaturated_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Omega-6 Polyunsaturated Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Omega-6 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-6 Polyunsaturated Fat" id="Omega6_Amount_S" name="Omega6_Amount_S" value = "<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega6_Unit_S" name="Omega6_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Omega-6 Polyunsaturated Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Omega-6 Polyunsaturated Fat" name="Omega6_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Omega-3 Polyunsaturated Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Omega-3 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-3 Polyunsaturated Fat" id="Omega3_Amount_S" name="Omega3_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega3_Unit_S" name="Omega3_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Omega-3 Polyunsaturated Fat';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Omega-3 Polyunsaturated Fat" name="Omega3_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
    <div class= "row" style="margin-top:4px;">

		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Fat Monounsaturated';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label ">Monounsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Monounsaturated Fat" id="Monounsaturated_Amount_S" name="Monounsaturated_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Monounsaturated_Unit_S" name="Monounsaturated_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>  
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Fat Monounsaturated';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Monounsaturated Fat" name="Monounsaturated_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
 
 
  <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Carbohydrates';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Carbohydrates</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Carbohydrates" id="Carbohydrates_Amount_S"  name="Carbohydrates_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Carbohydrates_Unit_S" name="Carbohydrates_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
			<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Carbohydrates';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Carbohydrates" name="Carbohydrates_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Fibre';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fibre" id="Fibre_Amount_S" name="Fibre_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Fibre_Unit_S" name="Fibre_Unit_S">
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>	
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Fibre';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Fibre" name="Fibre_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Soluble Fibre';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Soluble Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Soluble Fibre" id="Soluble_Fibre_Amount_S" name="Soluble_Fibre_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Soluble_Fibre_Unit_S" name="Soluble_Fibre_Unit_S">
	     <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>	
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Soluble Fibre';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Soluble Fibre" name="Soluble_Fibre_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Insolube Fibre';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 <div class="form-group">
  <label class="col-sm-3 control-label">Insolube Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Insolube Fibre" id="Insoluble_Fibre_Amount_S" name="Insoluble_Fibre_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Insolube_Fibre_Unit_S"  name="Insolube_Fibre_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Insolube Fibre';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Insolube Fibre" name="Insolube_Fibre_DValue_S" value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Sugars';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Sugar</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar" id="Sugar_Amount_S" name="Sugar_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Unit_S" name="Sugar_Unit_S">
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Sugars';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Sugar" name="Sugar_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Sugars Alcohol';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Sugar Alcohols</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar Alcohols" id="Sugar_Alcohols_Amount_S" name="Sugar_Alcohols_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Alcohols_Unit_S" name="Sugar_Alcohols_Unit_S">
	<option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Sugars Alcohol';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Sugar Alcohols" name="Sugar_Alcohol_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Starch';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Starch</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Starch" id="Starch_Amount_S" name="Starch_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Starch_Unit_S" name="Starch_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Starch';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Starch" name="Starch_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Protein';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Protein</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Protein" id="Protein_Amount_S" name="Protein_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Protein_Unit_S" name="Protein_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Protein';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Protein" name="Protein_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Cholesterol';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Cholesterol</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Cholesterol" id="Cholesterol_Amount_S" name="Cholesterol_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Cholesterol_Unit_S" name="Cholesterol_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Cholesterol';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Cholesterol" name="Cholesterol_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Sodium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Sodium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sodium" id="Sodium_Amount_S" name="Sodium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sodium_Unit_S" name="Sodium_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	  <?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Sodium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Sodium" name="Sodium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Potassium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Potassium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Potassium" id="Potassium_Amount_S" name="Potassium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Potassium_Unit_S" name="Potassium_Unit_S">
	    <option value="" selected="selected"></option>
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Potassium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Potassium" name="Potassium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Calcium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Calcium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Calcium" id="Calcium_Amount_S" name="Calcium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Calcium_Unit_S" name="Calcium_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Calcium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Calcium"  name="Calcium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Iron';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Iron</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iron" id="Iron_Amount_S" name="Iron_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iron_Unit_S" name="Iron_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Iron';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Iron" name="Iron_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin A';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin A</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin A" id="VitaminA_Amount_S" name="VitaminA_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminA_Unit_S" name="VitaminA_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin A';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin A" name="VitaminA_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>		 		 		 		 	
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin C';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin C</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin C" id="VitaminC_Amount_S" name="VitaminC_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminC_Unit_S" name="VitaminC_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin C';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin C" name="VitaminC_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin D';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin D</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin D" id="VitaminD_Amount_S" name="VitaminD_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminD_Unit_S" name="VitaminD_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin D';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin D" name="VitaminD_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>

  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin E';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin E</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin E" id="VitaminE_Amount_S" name="VitaminE_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminE_Unit_S" name="VitaminE_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin E';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin E" name="VitaminE_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin K';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Vitamin K</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin K" id="VitaminK_Amount_S" name="VitaminK_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminK_Unit_S" name="VitaminK_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin K';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin K" name="VitaminK_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Thiamine';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Thiamine</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Thiamine" id="Thiamine_Amount_S" name="Thiamine_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Thiamine_Unit_S" name="Thiamine_Unit_S">
	 <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Thiamine';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  
   <input type="text" class="form-control" placeholder="% Daily value of Thiamine" name="Thiamine_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Riboflavin';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Riboflavin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Riboflavin" id="Riboflavin_Amount_S" name="Riboflavin_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Riboflavin_Unit_S" name="Riboflavin_Unit_S" value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>">
	    <option value="" selected="selected"></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Riboflavin';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Riboflavin" name="Riboflavin_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Niacin';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Niacin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Niacin" id="Niacin_Amount_S" name="Niacin_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Niacin_Unit_S" name="Niacin_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Niacin';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Niacin" name="Niacin_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin B6';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Vitamin B6</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B6" id="VitaminB6_Amount_S" name="VitaminB6_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB6_Unit_S" name="VitaminB6_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin B6';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B6" name="VitaminB6_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Folate';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Folate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Folate" id="Folate_Amount_S" name="Folate_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Folate_Unit_S" name="Folate_Unit_S">
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value="Tbsp">Tbsp</option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Folate';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Folate" name="Folate_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin B12';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Vitamin B12</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B12" id="VitaminB12_Amount_S" name="VitaminB12_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB12_Unit_S" name="VitaminB12_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Vitamin B12';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B12" name="VitaminB12_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Biotin';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Biotin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Biotin" id="Biotin_Amount_S" name="Biotin_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Biotin_Unit_S" name="Biotin_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>

	<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Biotin';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Biotin" name="Biotin_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">	
	<?php include 'connection.php';?>
	<?php 

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Choline';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Choline</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Choline" id="Choline_Amount_S" name="Choline_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Choline_Unit_S" name="Choline_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Choline';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Choline" name="Choline_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Choline';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Pantothenate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Pantothenate" id="Pantothenate_Amount_S" name="Pantothenate_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Pantothenate_Unit_S" name="Pantothenate_Unit_S">
	  <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Choline';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily of value Pantothenate" name="Pantothenate_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Phosphorus';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Phosphorus</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Phosphorus" id="Phosphorus_Amount_S" name="Phosphorus_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Phosphorus_Unit_S" name="Phosphorus_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Phosphorus';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Phosphorus" name="Phosphorus_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Iodide';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
		 
  <label class="col-sm-3 control-label">Iodide</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iodide" id="Iodide_Amount_S" name="Iodide_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iodide_Unit_S" name="Iodide_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Iodide';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
   <input type="text" class="form-control" placeholder="% Daily value of Iodide" name="Iodide_Dvalue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Magnesium</label>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Magnesium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="Amount of Magnesium" id="Magnesium_Amount_S" name="Magnesium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Magnesium_Unit_S" name="Magnesium_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Magnesium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Magnesium" name="Magnesium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Zinc';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Zinc</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Zinc" id="Zinc_Amount_S" name="Zinc_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Zinc_Unit_S" name="Zinc_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Zinc';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Zinc" name="Zinc_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Selenium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Selenium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Selenium" id="Selenium_Amount_S" name="Selenium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Selenium_Unit_S" name="Selenium_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Selenium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Selenium" name="Selenium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Copper';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>		 
		 
  <label class="col-sm-3 control-label">Copper</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Copper" id="Copper_Amount_S" name="Copper_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Copper_Unit_S" name="Copper_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Copper';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>	
   <input type="text" class="form-control" placeholder="% Daily value of Copper" name="Copper_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Manganese';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Manganese</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Manganese" id="Manganese_Amount_S" name="Manganese_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Manganese_Unit_S" name="Manganese_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Manganese';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Manganese" name="Manganese_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Chromium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
  <label class="col-sm-3 control-label">Chromium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chromium" id="Chromium_Amount_S" name="Chromium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chromium_Unit_S" name="Chromium_Unit_S">
	   <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Chromium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Chromium" name="Chromium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Molybdenium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
  <label class="col-sm-3 control-label">Molybdenum</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Molybdenum" id="Molybdenium_Amount_S" name="Molybdenium_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Molybdenium_Unit_S" name="Molybdenium_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Molybdenium';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?> 
  
   <input type="text" class="form-control" placeholder="% Daily value of Molybdenum" name="Molybdenium_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Chloride';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
		 
  <label class="col-sm-3 control-label">Chloride</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chloride" id="Chloride_Amount_S" name="Chloride_Amount_S" value="<?PHP echo $row['Amount']; ?>">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chloride_Unit_S" name="Chloride_Unit_S">
	    <option value="<?PHP echo $row['Amount_Unit_Of_Measure']; ?>" selected="selected"><?PHP echo $row['Amount_Unit_Of_Measure']; ?></option>
		<?php include 'Units.php';?>
		 <option value=""></option>
      
      </select>  </div>
  <div class="col-sm-3">
	<?php include 'connection.php';?>
	<?php

	$editpackagestmt = $conn->prepare($editpackagequery);
	$Component_Name = 'Chloride';
	$PPD = 0;
	$editpackagestmt->bind_param("sii", $Component_Name, $UPC12, $PPD);
	$editpackagestmt->execute();
	$result = $editpackagestmt->get_result();
	$row = $result->fetch_assoc();

	
	?>
   <input type="text" class="form-control" placeholder="% Daily value of Chloride" name="Chloride_DValue_S" value="<?PHP echo $row['Daily_Value']; ?>">
  </div>
 </div>
 </div>




	
</div>

</div>

        </div>
     
    </div>
    
</div>
	
	
	
  
</div>
<div id="demo"></div>	
		<div style="float:left; display:inline-block;">
			 <?php echo " <a class=\"btn btn-default\" href=package_details.php?PackageID=" . $_GET['PackageID'] . ">Back</a>";  ?>
		</div>
		<div style="float:right; display:inline-block; margin-right:2%;">
				<button  type="submit" class="btn btn-default" name="search" >Save</button>
			</div>


</section>
	</form>


  </div>
      <div id="result1">
	  	  <?php include("save-label-updated.php"); ?>

	   
	
  </div>


		
	<br>	

<script>
function goBack() {
    window.history.back();
}
</script>
	
		

		</main>
<?php include 'footer.php';?>

	</div>
	
	<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="validate-nft.js"></script>

	<script>
	$(document).ready(function(){
		var date_input=$('input[name="Collection_Date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>	


		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('#date1').trigger('focus');
});
		})
</script>
	

</body>
</html>
