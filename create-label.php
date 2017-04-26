<?php


 include 'session.php';


  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);

	if(isset($_POST['search'])){
			 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
				  header ('Location: error404.php');
			 }
	}
     $_SESSION['token'] = bin2hex(random_bytes(32));
	$token = $_SESSION['token'];

 ?>
<?php include 'Check_ProductID.php';?>
<?php $sanitation_errors = array();?>
<?php include 'validate-label-create.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">

<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" integrity="sha384-MI32KR77SgI9QAPUs+6R7leEOwtop70UsjEtFEezfKnMjXWx15NENsZpfDgq8m8S" crossorigin="anonymous">

	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" integrity="sha384-o6l2EXLcx4A+q7ls2O2OP2Lb2W7iBgOsYvuuRI6G+Efbjbk6J4xbirJpHZZoHbfs" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" integrity="sha384-89aj/hOsfOyfD0Ll+7f2dobA15hDyiNb8m1dJ+rJuqgrGR+PVqNU8pybx4pbF3Cc" crossorigin="anonymous"></script>



	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">




<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->




<script type="text/javascript" src="js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="css/bootstrap-iso.css" />

<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>




<!-- Include Date Range Picker -->

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

@media (min-width: 32em) {

  .modal-box { width: 61.5%; }

}	
.hidethis2{
	margin-bottom:2%;
}
	.well{
		
    background-color:  	hsl(60, 100%, 98%);
		}
		.submit_button{
		float:right;
		margin-bottom:-5px;
	}
	</style>
</head>
<body class="wide comments example">
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">
	<?php
if (isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
	if (count($sanitation_errors) == 0) {
		include("new-label-updated.php");
	} else {
		foreach ($sanitation_errors as $error) {
?>
			<div class="alert alert-danger">
				<strong>Error!</strong> Please correct the following field: <strong><?php echo $error;?></strong>
			</div>
<?php
		}
	}
}
?>



		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
	<strong><h3>Create Label</h3></strong>	
	<div id="confirm-message" style="color:#008000;"></div>
	<div id="confirm-message2" style="color:#FF0000;"></div>	
	
<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "?ProductID=" .  $_GET['ProductID']) ;?>" id="vids-search-form"  name="myForm" >
	
	<div class="well" style="margin-right:2%;">



	
		<div class="row">
			<div class="form-group col-xs-6">
				<label for="Label_UPC" class="required">Label UPC <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" style="width:540px" name="Label_UPC" id="Label_UPC" placeholder="Enter Label UPC" required/>
			</div>
            			<div class="form-group col-xs-6">
				<label for="Label_Description" class="required">Label Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" style="width:540px" name="Label_Description" id="Label_Description" placeholder="Enter the Label description " required/>
			</div>


</div>
        <div class="row">
        				<div class="form-group col-sm-4">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number" name="Classification_Number" >
		   <option value="" selected>Select a Classification Number</option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>
					<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
			
    <select class="form-control" id="Classification_Name" name="Classification_Name">
		   <option value="" selected>Select a Classification Name</option>
	<?php include 'List_Classification.php';?>
		
			 </select>
			</div>		

          			<div class="form-group col-sm-4">
				<label for="Nielsen_Item_Rank_UPC" >Nielsen Item Rank UPC</label>
				<input type="text" class="form-control" name="Nielsen_Item_Rank_UPC"  id="Nielsen_Item_Rank_UPC" placeholder="Enter the Nielsen Item Rank UPC"/> 
			</div>	

        </div>
        		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Nielsen_Category">Nielsen Category </label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category" placeholder="Enter the Nielsen Category "/>
			</div>
		
			<div class="form-group col-sm-4">
				<label for="Brand" class="required">Brand <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand " required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Manufacturer" class="required">Manufacturer <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the Manufacturer " required/>
			</div>
		</div>

        <div class="row">
			<div class="form-group col-sm-4">
				<label for="Country">Country</label>
				<input type="text" class="form-control" name="Country" id="Country" placeholder="Enter Country " />
			</div>

            			<div class="form-group col-sm-4">
				<label for="Package_Size" > Net Quantity</label>
				<input type="text" class="form-control" name="Package_Size" id="Package_Size" placeholder="Enter the Net Quantity "/>
			</div>

					<div class="form-group col-sm-4">
	<label for="Package_Size_UofM" name="Package_Size_UofM" >Net Quantity Unit of Measure </label>
    <select class="form-control" id="Package_Size_UofM" name="Package_Size_UofM"> 
		   <option value="" selected="selected">Select Serving Unit of Measure</option>
			<?php include 'Units.php';?>
      
      </select></div>

        </div>



    <div class="row">
			<div class="form-group col-md-6">
				<label for="Number_Of_Units">Number of Units</label>
				<input type="text" class="form-control" name="Number_Of_Units" style="width:580px" id="Number_Of_Units" placeholder="Enter the Number of Units " />
			</div>
            		<div class="form-group col-md-6">
	<label for="Multi_Part_Package" name="Multi_Part_Package">Multi-part Package?</label>
      <select class="form-control" id="Multi_Part_Package" style="width:580px" name="Multi_Part_Package">
		<option value="" selected></option>
         <option value="No">No</option>
		 <option value="Yes">Yes</option>
      </select></div>
      </div>
      <div class="row">
      			<div class="form-group  col-md-6">
				<label for="Storage_Type">Storage Type</label>
				<input type="text" class="form-control" style="width:580px" name="Storage_Type"  id="Storage_Type" placeholder="Enter the Storage Type " /> 
			</div>

      				<div class="form-group col-md-6">
				<label for="Common_Measure" >Common Household Measure </label>
				<input type="text" class="form-control"  name="Common_Measure" id="Common_Measure" style="width:580px" placeholder="Enter the Common Household Measure " />
			</div>
    </div>

	
	
<div class="row">
	
					<div class="form-group col-md-12 ">
  <label for="Ingredients" class="required">Ingredients <strong class="required">(required)</strong></label>
  <textarea class="form-control"  style="width:100%" rows="2"  id="Ingredients" placeholder="Enter the Ingredients " name="Ingredients" required></textarea>
</div>
	</div>	

	<div class="row">	
				
					<div class="form-group col-md-12">
  <label for="Nutrition_Fact_Table" class="required">Nutrition Fact Table <strong class="required">(required)</strong></label>
  <textarea class="form-control" style="width:100%" placeholder="Enter The Nutrition Fact Table "   rows="2"  id="Nutrition_Fact_Table" name="Nutrition_Fact_Table" required></textarea>
</div>
		
</div>

<div class="row">
	
					<div class="form-group col-md-12">
  <label for="Suggested_Direction">Suggested Direction</label>
  <textarea class="form-control"  style="width:100%; " rows="2"  placeholder="Enter the Suggested Direction " id="Suggested_Direction" name="Suggested_Direction"></textarea>
</div>
		

	
		
</div>
<div class="row">
					<div class="form-group  col-md-12">
  <label for="Nutrition_Claim">Nutrient Claim</label>
  <textarea class="form-control" style="width:100%"  placeholder="Enter the Nutrient Claim " rows="1"  id="Nutrition_Claim" name="Nutrition_Claim" ></textarea>
</div>

</div>


<div class="row">
	
					<div class="form-group col-xs-6 ">
  <label for="Other_Package_Statement">Other Package Statements</label>
  <textarea class="form-control"  style="width:540px" rows="2"  id="Other_Package_Statement" placeholder="Enter the Other Package Statements " name="Other_Package_Statement" ></textarea>
</div>
		

		
				
					<div class="form-group col-xs-6">
  <label for="Health_Claim">Health Claim</label>
  <textarea class="form-control" style="width:540px" placeholder="Enter the Health Claim "  rows="2"  id="Health_Claim" name="Health_Claim" ></textarea>
</div>
		
</div>


            <div class="row">
			<div class="form-group  col-md-12">
				<label for="Storage_Statement">Storage Statements</label>
				<input type="text" class="form-control" name="Storage_Statement" style="width:100%;" id="Storage_Statement" placeholder="Enter the Storage Statements " />
			</div>

		
		</div>
			<div class="row">
			<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments"  placeholder="Enter a Comment on a Package Label"/>
			</div>
						   <div class="form-group col-sm-4">
      <label for="date1" class="required">
     Collection Date  <strong class="required">(required)</strong>
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control myDateFormat" id="date1" name="date1" placeholder="YYYY/MM/DD" type="text" value="" required/> 
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
       	<label class="error" for="date1"></label>
      </div>
     </div>
		
			<div class="form-group col-sm-4">
				<label for="Source">Source</label>
				<input type="text" class="form-control" name="Source"  id="Source" placeholder="Enter the Source "  /> 
			</div>
		
			
			
		</div>
	</div>
    <div class="well">
				<div class="row">

			<div class="form-group col-xs-6">
				<label for="Per_Serving_Amount_In_Grams">Per Serving Amount (in grams)</label>
				<input type="text" class="form-control" style="width:540px" name="Per_Serving_Amount_In_Grams" id="Per_Serving_Amount_In_Grams" placeholder="Enter the Serving Amount (in grams) "/>
			</div>
			<div class="form-group col-xs-6">
				<label for="Per_Serving_Amount_In_Grams_PPD">PPD Per Serving Amount (in grams) </label>
				<input type="text" class="form-control" style="width:540px" name="Per_Serving_Amount_In_Grams_PPD" id="Per_Serving_Amount_In_Grams_PPD" placeholder="Enter the PPD Serving Amount (in grams) "/>
			</div>
		
		</div>
<div class="row">
			<div class="form-group col-md-12">
				<label for="Product_Description">Product Description</label>
				<input type="text" class="form-control" style="width:100%" name="Product_Description"  id="Product_Description" placeholder="Enter the Product Description " /> 
			</div>


</div>	

		
	
	</div>
	
	
	
	
	
	
	
	
		<div role="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
        
        <li role="tab" class="active">
            <label for="optDaily" data-target="#scheduleDaily">
                <input id="optDaily" name="intervaltype" type="radio" checked />
                As Sold &nbsp; &nbsp; &nbsp;
            </label>
        </li>
        
        <li role="tab">
            <label for="optWeekly" data-target="#scheduleWeekly">
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
				<input type="text" style="width:540px" class="form-control" name="Per_Serving_Amount" id="Per_Serving_Amount" placeholder="Enter the Amount in the Package Label"  required/>
			</div>
	
					<div class="form-group col-xs-6">
	<label for="Per_Serving_Unit" name="Year_Recorded" class="required"> Per Serving Unit <strong class="required">(required)</strong></label>
    <select class="form-control" id="Per_Serving_Unit" name="Per_Serving_Unit" style="width:540px" required> 
		   <option value="" selected="selected">Select the Per Serving Unit</option>
			<?php include 'Units.php';?>
      
      </select></div>
			

			

	</div>
	</div>	
	
		
		
		
	<div class="well" style="margin-right:2%;">
<div class= "row">
		 <div class="form-group">
  <label for="Energy_Amount" class="col-sm-3 control-label required" >Energy <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy" name="Energy_Amount" id="Energy_Amount" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">

 <select class="form-control" id="Energy_Unit" name="Energy_Unit">
  <option value="kcal" selected="selected">kcal</option>
			
      
      </select>  </div>
  <div class="col-sm-3">

   <input type="text" class="form-control" placeholder="% Daily value of Energy" name="Energy_DValue" id="Energy_DValue">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
	<div class="form-group">
  <label for="Fat_Amount" class="col-sm-3 control-label">Energy kJ</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy kJ" name="Energy_kj_Amount" id="Energy_kj_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">

 <select class="form-control" id="Energy_kj_Unit" name="Energy_kj_Unit">
  <option value="" selected="selected"></option>
  
  <option value="kJ" >kJ</option>
		
      
      </select>  </div>
  <div class="col-sm-3">


   <input type="text" class="form-control" placeholder="% Daily value of Energy kJ" name="Engergy_kj_DValue" id="Fat_DValue">
  </div>
 </div>
 </div>
 

 
    <div class= "row" style="margin-top:4px;">
	<div class="form-group">
  <label for="Fat_Amount" class="col-sm-3 control-label">Saturated + Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated + Trans Fat" name="Saturated_Trans_Amount" id="Saturated_Trans_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">

 <select class="form-control" id="Saturated_Trans_Unit" name="Saturated_Trans_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
		
      
      </select>  </div>
  <div class="col-sm-3">


   <input type="text" class="form-control" placeholder="% Daily value of Saturated + Trans Fat" name="Saturated_Trans_DValue" id="Fat_DValue">
  </div>
 </div>
 </div>
 
 <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Fat_Amount" class="col-sm-3 control-label required">Fat <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fat" name="Fat_Amount" id="Fat_Amount" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">

 <select class="form-control" id="Fat_Unit" name="Fat_Unit" required>
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">


   <input type="text" class="form-control" placeholder="% Daily value of Fat" name="Fat_DValue" id="Fat_DValue">
  </div>
 </div>
 </div>
 <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Saturated_Fat_Amount" class="col-sm-3 control-label">Saturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated Fat" name="Saturated_Fat_Amount" id="Saturated_Fat_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">


 <select class="form-control" id="Saturated_Fat_Unit" name="Saturated_Fat_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">


   <input type="text" class="form-control" placeholder="% Daily value of Saturated Fat" name="Saturated_Fat_DValue" id="Saturated_Fat_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Trans_Fat_Amount" class="col-sm-3 control-label">Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Trans Fat" name="Trans_Fat_Amount" id="Trans_Fat_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">


 <select class="form-control" id="Trans_Fat_Unit" name="Trans_Fat_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">

   <input type="text" class="form-control" placeholder="% Daily value of Trans Fat" name="Trans_Fat_DValue" id="Trans_Fat_DValue">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Polyunsaturated_Amount" class="col-sm-3 control-label">Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Polyunsaturated Fat" name="Polyunsaturated_Amount" id="Polyunsaturated_Amount" >
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Polyunsaturated_Unit" name="Polyunsaturated_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Polyunsaturated Fat" name="Polyunsaturated_DValue" id="Polyunsaturated_DValue">
  </div>
 </div>
 </div> 
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Omega6_Amount" class="col-sm-3 control-label">Omega-6 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-6 Polyunsaturated Fat" name="Omega6_Amount" id="Omega6_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega6_Unit" name="Omega6_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Omega-6 Polyunsaturated Fat" name="Omega6_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Omega3_Amount" class="col-sm-3 control-label">Omega-3 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-3 Polyunsaturated Fat" name="Omega3_Amount" id="Omega3_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega3_Unit" name="Omega3_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">

   <input type="text" class="form-control" placeholder="% Daily value of Omega-3 Polyunsaturated Fat" name="Omega3_DValue" id="Omega3_DValue">
  </div>
 </div>
 </div>
 
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Monounsaturated_Amount" class="col-sm-3 control-label">Monounsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Monounsaturated Fat" name="Monounsaturated_Amount" id="Monounsaturated_Amount" >
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Monounsaturated_Unit" name="Monounsaturated_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Monounsaturated Fat" name="Monounsaturated_DValue" id="Monounsaturated_DValue">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Carbohydrates_Amount" class="col-sm-3 control-label required">Carbohydrates <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Carbohydrates" name="Carbohydrates_Amount" id="Carbohydrates_Amount" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Carbohydrates_Unit" name="Carbohydrates_Unit" required>
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Carbohydrates" name="Carbohydrates_DValue" id="Carbohydrates_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Fibre_Amount" class="col-sm-3 control-label required">Fibre <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fibre" name="Fibre_Amount" id="Fibre_Amount" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Fibre_Unit" name="Fibre_Unit" required>
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Fibre" name="Fibre_DValue" id="Fibre_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Soluble_Fibre_Amount" class="col-sm-3 control-label">Soluble Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Soluble Fibre" name="Soluble_Fibre_Amount" id="Soluble_Fibre_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Soluble_Fibre_Unit" name="Soluble_Fibre_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Soluble Fibre" name="Soluble_Fibre_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Insolube_Fibre_Amount" class="col-sm-3 control-label">Insolube Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Insolube Fibre" name="Insolube_Fibre_Amount" id="Insolube_Fibre_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Insolube_Fibre_Unit"  name="Insolube_Fibre_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Insolube Fibre" name="Insolube_Fibre_DValue" id="Insolube_Fibre_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Sugar_Amount" class="col-sm-3 control-label">Sugar</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar" name="Sugar_Amount" id="Sugar_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Unit" name="Sugar_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Sugar" name="Sugar_DValue" id="Sugar_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Sugar_Alcohols_Amount" class="col-sm-3 control-label">Sugar Alcohols</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar Alcohols" name="Sugar_Alcohols_Amount" id="Sugar_Alcohols_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Alcohols_Unit" name="Sugar_Alcohols_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Sugar Alcohols" name="Sugar_Alcohols_DValue" id="Sugar_Alcohols_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Starch_Amount" class="col-sm-3 control-label">Starch</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Starch" name="Starch_Amount" id="Starch_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Starch_Unit" name="Starch_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Starch" name="Starch_DValue" id="Starch_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Protein_Amount" class="col-sm-3 control-label required">Protein <strong class="required">(required)</strong></label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Protein" name="Protein_Amount" id="Protein_Amount" required>
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Protein_Unit" name="Protein_Unit" required>
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Protein" name="Protein_DValue" id="Protein_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Cholesterol_Amount" class="col-sm-3 control-label">Cholesterol</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Cholesterol" name="Cholesterol_Amount" id="Cholesterol_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Cholesterol_Unit" name="Cholesterol_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Cholesterol" name="Cholesterol_DValue" id="Cholesterol_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Sodium_Amount" class="col-sm-3 control-label">Sodium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sodium" name="Sodium_Amount" id="Sodium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sodium_Unit" name="Sodium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Sodium" name="Sodium_DValue" id="Sodium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Potassium_Amount" class="col-sm-3 control-label">Potassium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Potassium" name="Potassium_Amount" id="Potassium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Potassium_Unit" name="Potassium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Potassium" name="Potassium_DValue" id="Potassium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Calcium_Amount" class="col-sm-3 control-label">Calcium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Calcium" name="Calcium_Amount" id="Calcium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Calcium_Unit" name="Calcium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Calcium" name="Calcium_DValue" id="Calcium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Iron_Amount" class="col-sm-3 control-label">Iron</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iron" name="Iron_Amount" id="Iron_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iron_Unit" name="Iron_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Iron" name="Iron_DValue" id="Iron_DValue">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminA_Amount" class="col-sm-3 control-label">Vitamin A</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin A" name="VitaminA_Amount" id="VitaminA_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminA_Unit" name="VitaminA_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin A" name="VitaminA_DValue" id="VitaminA_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminC_Amount" class="col-sm-3 control-label">Vitamin C</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin C" name="VitaminC_Amount" id="VitaminC_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminC_Unit" name="VitaminC_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin C" name="VitaminC_DValue" id="VitaminC_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminD_Amount" class="col-sm-3 control-label">Vitamin D</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin D" name="VitaminD_Amount" id="VitaminD_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminD_Unit" name="VitaminD_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin D" name="VitaminD_DValue" id="VitaminD_DValue">
  </div>
 </div>
 </div>

  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminE_Amount" class="col-sm-3 control-label">Vitamin E</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin E" name="VitaminE_Amount" id="VitaminE_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminE_Unit" name="VitaminE_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin E" name="VitaminE_DValue" id="VitaminE_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminK_Amount" class="col-sm-3 control-label">Vitamin K</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin K" name="VitaminK_Amount" id="VitaminK_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminK_Unit" name="VitaminK_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin K" name="VitaminK_DValue" id="VitaminK_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Thiamine_Amount" class="col-sm-3 control-label">Thiamine</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Thiamine" name="Thiamine_Amount" id="Thiamine_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Thiamine_Unit" name="Thiamine_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Thiamine" name="Thiamine_DValue" id="Thiamine_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Riboflavin_Amount" class="col-sm-3 control-label">Riboflavin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Riboflavin" name="Riboflavin_Amount" id="Riboflavin_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Riboflavin_Unit" name="Riboflavin_Unit">
	<option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Riboflavin" name="Riboflavin_DValue" id="Riboflavin_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Niacin_Amount" class="col-sm-3 control-label">Niacin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Niacin" name="Niacin_Amount" id="Niacin_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Niacin_Unit" name="Niacin_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Niacin" name="Niacin_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminB6_Amount" class="col-sm-3 control-label">Vitamin B6</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B6" name="VitaminB6_Amount" id="VitaminB6_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB6_Unit" name="VitaminB6_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B6" name="VitaminB6_DValue" id="VitaminB6_DValue"> 
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Folate_Amount" class="col-sm-3 control-label">Folate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Folate" name="Folate_Amount" id="Folate_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Folate_Unit" name="Folate_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Folate" name="Folate_DValue" id="Folate_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="VitaminB12_Amount" class="col-sm-3 control-label">Vitamin B12</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B12" name="VitaminB12_Amount" id="VitaminB12_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB12_Unit" name="VitaminB12_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B12" name="VitaminB12_DValue" id="VitaminB12_Unit_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Biotin_Amount" class="col-sm-3 control-label">Biotin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Biotin" name="Biotin_Amount" id="Biotin_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Biotin_Unit" name="Biotin_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Biotin" name="Biotin_DValue" id="Biotin_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Choline_Amount" class="col-sm-3 control-label">Choline</label>
  <div class="col-sm-3">
  
   <input type="text" class="form-control" placeholder="Amount of Choline" name="Choline_Amount" id="Choline_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Choline_Unit" name="Choline_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Choline" name="Choline_DValue" id="Choline_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Pantothenate_Amount" class="col-sm-3 control-label">Pantothenate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Pantothenate" name="Pantothenate_Amount" id="Pantothenate_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Pantothenate_Unit" name="Pantothenate_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Pantothenate" name="Pantothenate_DValue" id="Pantothenate_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Phosphorus_Amount" class="col-sm-3 control-label">Phosphorus</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Phosphorus" name="Phosphorus_Amount" id="Phosphorus_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Phosphorus_Unit" name="Phosphorus_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Phosphorus" name="Phosphorus_DValue" id="Phosphorus_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Iodide_Amount" class="col-sm-3 control-label">Iodide</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iodide" name="Iodide_Amount" id="Iodide_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iodide_Unit" name="Iodide_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Iodide" name="Iodide_Dvalue" id="Iodide_Dvalue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Magnesium_Amount" class="col-sm-3 control-label">Magnesium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Magnesium" name="Magnesium_Amount" id="Magnesium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Magnesium_Unit" name="Magnesium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Magnesium" name="Magnesium_DValue" id="Magnesium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Zinc_Amount" class="col-sm-3 control-label">Zinc</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Zinc" name="Zinc_Amount" id="Zinc_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Zinc_Unit" name="Zinc_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Zinc" name="Zinc_DValue" id="Zinc_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Selenium_Amount" class="col-sm-3 control-label">Selenium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Selenium" name="Selenium_Amount" id="Selenium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Selenium_Unit" name="Selenium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Selenium" name="Selenium_DValue" id="Selenium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Copper_Amount" class="col-sm-3 control-label">Copper</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Copper" name="Copper_Amount" id="Copper_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Copper_Unit" name="Copper_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Copper" name="Copper_DValue" id="Copper_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Manganese_Amount" class="col-sm-3 control-label">Manganese</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Manganese" name="Manganese_Amount" id="Manganese_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Manganese_Unit" name="Manganese_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Manganese" name="Manganese_DValue" id="Manganese_DValue">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Chromium_Amount" class="col-sm-3 control-label">Chromium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chromium" name="Chromium_Amount" id="Chromium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chromium_Unit" name="Chromium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Chromium" name="Chromium_DValue" id="Chromium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Molybdenium_Amount" class="col-sm-3 control-label">Molybdenum</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Molybdenum" id="Molybdenium_Amount" name="Molybdenium_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Molybdenium_Unit" name="Molybdenium_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Molybdenum" name="Molybdenium_DValue" id="Molybdenium_DValue">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Chloride_Amount" class="col-sm-3 control-label">Chloride</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chloride" id="Chloride_Amount" name="Chloride_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chloride_Unit" name="Chloride_Unit">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Chloride" name="Chloride_DValue" id="Chloride_DValue">
  </div>
 </div>
 </div>




	
</div>
	
	
</div>

        </div>
        
        <div role="tabpanel" class="tab-pane" id="scheduleWeekly">
  <div id="status"></div>       
	    <div style="margin-top:4%;">  

<div class="well" style="margin-right:2%;">	
					<div class="row" >
		<div class="form-group col-sm-4">
				<label for="PPD_Per_Serving_Amount">Per Serving Size as Prepared</label>
				<input type="text" class="form-control" name="PPD_Per_Serving_Amount" id="PPD_Per_Serving_Amount" placeholder="Enter the Serving Size " value="<?PHP echo $row['Per_Serving_Amount']; ?>" />
			</div>
	
				<div class="form-group col-sm-4">
	<label for="PPD_Per_Serving_UofM" name="Year_Recorded"> Per Serving Size Unit of Measure</label>
      <select class="form-control" id="PPD_Per_Serving_UofM" name="PPD_Per_Serving_UofM">
  <option value="" selected="selected">Select the Per Serving Size Unit of Measure</option>
			<?php include 'Units.php';?>
      
      </select></div>
		
				<div class="form-group col-sm-4">
	<label for="Calculated" name="Cal"> Calculated</label>
      <select class="form-control" id="Calculated" name="Calculated">
  <option value="" selected="selected"></option>
   <option value="0">No</option>
   <option value="1">Yes</option>

      
      </select></div>		

	</div>
		
	</div>	
	
		
		
		
	<div class="well" style="margin-right:2%;">
<div class= "row">
		 <div class="form-group">
  <label for="Energy_Amount_S" class="col-sm-3 control-label">Energy</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy" name="Energy_Amount_S" id="Energy_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Energy_Unit_S" name="Energy_Unit_S" >
   <option value="" selected="selected"></option>
  <option value="kcal" >kcal</option>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Energy" name="Energy_DValue_S" id="Energy_DValue_S">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Energy_kj_Amount_S" class="col-sm-3 control-label">Energy kJ</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy kJ" name="Energy_kj_Amount_S" id="Energy_kj_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Energy_kj_Unit_S" name="Energy_kj_Unit_S">
  <option value="" selected="selected"></option>
  <option value="kJ" >kJ</option>			
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Energy kJ" name="Energy_kj_DValue_S">
  </div>
 </div>
 </div>
 
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Saturated_Trans_kj_Unit_S" class="col-sm-3 control-label">Saturated + Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated + Trans Fat" name="Saturated_Trans_kj_Amount_S" id="Saturated_Trans_kj_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Saturated_Trans_kj_Unit_S" name="Saturated_Trans_kj_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Saturated + Trans Fat" name="Saturated_Trans_DValue_S">
  </div>
 </div>
 </div>
 
 
 <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Fat_Amount_S" class="col-sm-3 control-label">Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fat" name="Fat_Amount_S" id="Fat_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Fat_Unit_S" name="Fat_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Fat" name="Fat_DValue_S">
  </div>
 </div>
 </div>
 <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Saturated_Fat_Amount_S" class="col-sm-3 control-label">Saturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated Fat" name="Saturated_Fat_Amount_S" id="Saturated_Fat_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Saturated_Fat_Unit_S" name="Saturated_Fat_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Saturated Fat" name="Saturated_Fat_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Trans_Fat_Amount_S" class="col-sm-3 control-label">Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Trans Fat" name="Trans_Fat_Amount_S" id="Trans_Fat_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Trans_Fat_Unit_S" name="Trans_Fat_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Trans Fat" name="Trans_Fat_DValue_S">
  </div>
 </div>
 </div>
 
    <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Polyunsaturated_Amount_S" class="col-sm-3 control-label">Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Polyunsaturated Fat" name="Polyunsaturated_Amount_S" id="Polyunsaturated_Amount_S" >
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Polyunsaturated_Unit_S" name="Polyunsaturated_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Polyunsaturated Fat" name="Polyunsaturated_DValue_S" id="Polyunsaturated_DValue_S">
  </div>
 </div>
 </div> 
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Omega6_Amount_S" class="col-sm-3 control-label">Omega-6 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-6 Polyunsaturated Fat" name="Omega6_Amount_S" id="Omega6_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega6_Unit_S" name="Omega6_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Omega-6 Polyunsaturated Fat" name="Omega6_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Omega3_Amount_S" class="col-sm-3 control-label">Omega-3 Polyunsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Omega-3 Polyunsaturated Fat" name="Omega3_Amount_S" id="Omega3_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Omega3_Unit_S" name="Omega3_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Omega-3 Polyunsaturated Fat" name="Omega3_DValue_S">
  </div>
 </div>
 </div>
 
    <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Monounsaturated_Amount_S" class="col-sm-3 control-label">Monounsaturated Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Monounsaturated Fat" name="Monounsaturated_Amount_S" id="Monounsaturated_Amount_S" >
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Monounsaturated_Unit_S" name="Monounsaturated_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Monounsaturated Fat" name="Monounsaturated_DValue_S" id="Monounsaturated_DValue_S">
  </div>
 </div>
 </div>
 
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Carbohydrates_Amount_S" class="col-sm-3 control-label">Carbohydrates</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Carbohydrates" name="Carbohydrates_Amount_S" id="Carbohydrates_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Carbohydrates_Unit_S" name="Carbohydrates_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Carbohydrates" name="Carbohydrates_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Fibre_Amount_S" class="col-sm-3 control-label">Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Fibre" name="Fibre_Amount_S" id="Fibre_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Fibre_Unit_S" name="Fibre_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Fibre" name="Fibre_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Soluble_Fibre_Amount_S" class="col-sm-3 control-label">Soluble Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Soluble Fibre" name="Soluble_Fibre_Amount_S" id="Soluble_Fibre_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Soluble_Fibre_Unit_S" name="Soluble_Fibre_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Soluble Fibre" name="Soluble_Fibre_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Insolube_Fibre_Amount_S" class="col-sm-3 control-label">Insolube Fibre</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Insolube Fibre" name="Insolube_Fibre_Amount_S" id="Insolube_Fibre_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Insolube_Fibre_Unit_S"  name="Insolube_Fibre_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Insolube Fibre" name="Insolube_Fibre_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Sugar_Amount_S" class="col-sm-3 control-label">Sugar</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar" name="Sugar_Amount_S" id="Sugar_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Unit_S" name="Sugar_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Sugar" name="Sugar_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Sugar_Alcohols_Amount_S" class="col-sm-3 control-label">Sugar Alcohols</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sugar Alcohols" name="Sugar_Alcohols_Amount_S" id="Sugar_Alcohols_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sugar_Alcohols_Unit_S" name="Sugar_Alcohols_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Sugar Alcohols" name="Sugar_Alcohols_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Starch_Amount_S" class="col-sm-3 control-label">Starch</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Starch" name="Starch_Amount_S" id="Starch_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Starch_Unit_S" name="Starch_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Starch" name="Starch_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Protein</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Protein" id="Protein_Amount_S" name="Protein_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Protein_Unit_S" name="Protein_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Protein" name="Protein_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Cholesterol</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Cholesterol" id="Cholesterol_Amount_S" name="Cholesterol_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Cholesterol_Unit_S" name="Cholesterol_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Cholesterol" name="Cholesterol_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Sodium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Sodium" id="Sodium_Amount_S" name="Sodium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Sodium_Unit_S" name="Sodium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Sodium" name="Sodium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Potassium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Potassium" id="Potassium_Amount_S" name="Potassium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Potassium_Unit_S" name="Potassium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Potassium" name="Potassium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Calcium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Calcium" id="Calcium_Amount_S" name="Calcium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Calcium_Unit_S" name="Calcium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Calcium" id="Calcium_DValue_S" name="Calcium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Iron</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iron" name="Iron_Amount_S" id="Iron_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iron_Unit_S" name="Iron_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Iron" name="Iron_DValue_S">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin A</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin A" id="VitaminA_Amount_S" name="VitaminA_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminA_Unit_S" name="VitaminA_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin A" name="VitaminA_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin C</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin C" id="VitaminC_Amount_S" name="VitaminC_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminC_Unit_S" name="VitaminC_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin C" name="VitaminC_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin D</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin D" name="VitaminD_Amount_S" id="VitaminD_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminD_Unit_S" name="VitaminD_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin D" name="VitaminD_DValue_S">
  </div>
 </div>
 </div>

  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin E</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin E" id="VitaminE_Amount_S" name="VitaminE_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminE_Unit_S" name="VitaminE_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin E" name="VitaminE_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin K</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin K" id="VitaminK_Amount_S" name="VitaminK_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminK_Unit_S" name="VitaminK_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin K" name="VitaminK_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Thiamine</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Thiamine" id="Thiamine_Amount_S" name="Thiamine_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Thiamine_Unit_S" name="Thiamine_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Thiamine" name="Thiamine_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Riboflavin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Riboflavin" id="Riboflavin_Amount_S" name="Riboflavin_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Riboflavin_Unit_S" name="Riboflavin_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Riboflavin" name="Riboflavin_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Niacin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Niacin" id="Niacin_Amount_S" name="Niacin_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Niacin_Unit_S" name="Niacin_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Niacin" name="Niacin_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin B6</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B6" id="VitaminB6_Amount_S" name="VitaminB6_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB6_Unit_S" name="VitaminB6_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B6" name="VitaminB6_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Folate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Folate" id="Folate_Amount_S" name="Folate_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Folate_Unit_S" name="Folate_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Folate" name="Folate_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Vitamin B12</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Vitamin B12" id="VitaminB12_Amount_S"  name="VitaminB12_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="VitaminB12_Unit_S" name="VitaminB12_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B12" id="VitaminB12_DValue_S" name="VitaminB12_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Biotin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Biotin" id="Biotin_Amount_S" name="Biotin_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Biotin_Unit_S" name="Biotin_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Biotin" name="Biotin_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Choline</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Choline" id="Choline_Amount_S" name="Choline_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Choline_Unit_S" name="Choline_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Choline" name="Choline_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Pantothenate</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Pantothenate" id="Pantothenate_Amount_S" name="Pantothenate_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Pantothenate_Unit_S" name="Pantothenate_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Pantothenate" name="Pantothenate_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Phosphorus</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Phosphorus" id="Phosphorus_Amount_S" name="Phosphorus_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Phosphorus_Unit_S" name="Phosphorus_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Phosphorus" name="Phosphorus_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Iodide</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iodide" id="Iodide_Amount_S" name="Iodide_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Iodide_Unit_S" name="Iodide_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Iodide" name="Iodide_Dvalue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Magnesium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Magnesium" id="Magnesium_Amount_S" name="Magnesium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Magnesium_Unit_S" name="Magnesium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Magnesium" name="Magnesium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Zinc</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Zinc" id="Zinc_Amount_S" name="Zinc_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Zinc_Unit_S" name="Zinc_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Zinc" id="Zinc_DValue_S" name="Zinc_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Selenium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Selenium" id="Selenium_Amount_S" name="Selenium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Selenium_Unit_S" name="Selenium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Selenium" name="Selenium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Copper</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Copper" id="Copper_Amount_S" name="Copper_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Copper_Unit_S" name="Copper_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Copper" name="Copper_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Manganese</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Manganese" id="Manganese_Amount_S" name="Manganese_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Manganese_Unit_S" name="Manganese_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Manganese" name="Manganese_DValue_S">
  </div>
 </div>
 </div>
   <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Chromium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chromium" id="Chromium_Amount_S" name="Chromium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chromium_Unit_S" name="Chromium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Chromium" name="Chromium_DValue_S">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Molybdenum</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Molybdenum" id="Molybdenium_Amount_S" name="Molybdenium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Molybdenium_Unit_S" name="Molybdenium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Molybdenum" name="Molybdenium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Chloride</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Chloride" id="Chloride_Amount_S" name="Chloride_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="Chloride_Unit_S" name="Chloride_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Chloride" name="Chloride_DValue_S">
  </div>
 </div>
 </div>




	
</div>

</div>

        </div>
     
    </div>
    
</div>
			
		
		
	<div id="demo"></div>
             <input type="hidden" name="token" value = "<?php echo $token; ?>"/>
			<div class="form-group col-sm-4 submit_button">
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</form>
	
	<div>
	 	

	
	</div>	
</div>
<!-- Include Date Range Picker -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js" integrity="sha384-aHFhM5aT8aFA9xA6PAeaB8dav8Bc3nF2gDv/DnBl7E6Qhutr42h9VSmf7BXTdugy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" integrity="sha384-oQPlepmWw0NnzP5Cy8gA9Q3XOJrv+Os+uVsv93hZChsFr2FeEk2at3W50doSLPzu" crossorigin="anonymous">

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="validate-create-label.js"></script>


	<script>
	$(document).ready(function(){
		var date_input=$('input[name="date1"]'); //our date input has the name "date"
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
		var date_input=$('input[name="date2"]'); //our date input has the name "date"
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


		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('#date2').trigger('focus');
});
		})
</script>
<br>	
	 <?php echo " <a class=\"btn btn-default\" href=view_product.php?ProductID=" . $_GET['ProductID'] . ">Back</a>";  ?>

<script>
function goBack() {
    window.history.back();
}
</script>


	
		</main>
	<?php include 'footer.php';?>
	</div>
<?php include 'List_Classification_Object.php'; ?>
</body>
</html>
