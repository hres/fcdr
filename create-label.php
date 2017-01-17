
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.3.2/css/colReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fcolreorder%2Fexamples%2Fintegration%2Fcolvis.html" async>
	</script>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
	</script>  
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/colreorder/1.3.2/js/dataTables.colReorder.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.colVis.min.js">
	</script>

	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">




<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->



<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>



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




		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
	<strong><h3>Create Label</h3></strong>	
	<div id="confirm-message" style="color:#008000;"></div>
	<div id="confirm-message2" style="color:#FF0000;"></div>	
	
<form role="form" method="post" action="#" id="vids-search-form2 validation-example" onsubmit="return validateForm()" name="myForm" >
	
	<div class="well" style="margin-right:2%;">



	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Label_UPC" class="required">Label UPC <strong class="required"><br>(required)</strong></label>
				<input type="text" class="form-control" name="Label_UPC" id="Label_UPC" placeholder="Enter Label UPC" required/>
			</div>
		
			<div class="form-group col-sm-4">
				<label for="Label_Description" class="required">Label Description <strong class="required"><br>(required)</strong></label>
				<input type="text" class="form-control" name="Label_Description" id="Label_Description" placeholder="Enter the Label description " required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Common_Measure" >Common Household Measure </label>
				<input type="text" class="form-control" name="Common_Measure" id="Common_Measure" placeholder="Enter the Common Household Measure " />
			</div>
		</div>
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Nielsen_Category" class="required">Nielsen Category <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category" placeholder="Enter the Nielsen Category " required/>
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
				<label for="Package_Size" > Package Size</label>
				<input type="text" class="form-control" name="Package_Size" id="Package_Size" placeholder="Enter the Package Size "/>
			</div>

					<div class="form-group col-sm-4">
	<label for="Package_Size_UofM" name="Package_Size_UofM" >Package Size Unit of Measure </label>
    <select class="form-control" id="Package_Size_UofM" name="Package_Size_UofM"> 
		   <option value="" selected="selected">Select the Per Serving Unit</option>
			<?php include 'Units.php';?>
      
      </select></div>


		</div>		
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Storage_Type">Storage Type</label>
				<input type="text" class="form-control" name="Storage_Type"  id="Storage_Type" placeholder="Enter the Storage Type " /> 
			</div>
			<div class="form-group col-sm-4">
				<label for="Storage_Statement">Storage Statements</label>
				<input type="text" class="form-control" name="Storage_Statement" id="Storage_Statement" placeholder="Enter the Storage Statements " />
			</div>
			<div class="form-group col-sm-4">
				<label for="Number_Of_Units">Number of Units</label>
				<input type="text" class="form-control" name="Number_Of_Units" id="Number_Of_Units" placeholder="Enter the Number of Units " />
			</div>
		
		</div>
	
	
<div class="row">
	
					<div class="form-group col-xs-6 ">
  <label for="Ingredients" class="required">Ingredients <strong class="required">(required)</strong></label>
  <textarea class="form-control"  style="width:540px" rows="2"  id="Ingredients" placeholder="Enter the Ingredients " name="Ingredients" required></textarea>
</div>
		

		
				
					<div class="form-group col-xs-6">
  <label for="Nutrition_Fact_Table" class="required">Nutrition Fact Table <strong class="required">(required)</strong></label>
  <textarea class="form-control" style="width:540px" placeholder="Enter The Nutrition Fact Table "   rows="2"  id="Nutrition_Fact_Table" name="Nutrition_Fact_Table" required></textarea>
</div>
		
</div>

<div class="row">
	
					<div class="form-group col-xs-6 ">
  <label for="Suggested_Direction">Suggested Direction</label>
  <textarea class="form-control"  style="width:540px" rows="2" placeholder="Enter the Suggested Direction " id="Suggested_Direction" name="Suggested_Direction"></textarea>
</div>
		

		
				
					<div class="form-group col-xs-6">
  <label for="Nutrition_Claim">Nutrition Claim</label>
  <textarea class="form-control" style="width:540px"  placeholder="Enter the Nutrition Claim " rows="2"  id="Nutrition_Claim" name="Nutrition_Claim" ></textarea>
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
			<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments"  placeholder="Enter a Comment on a Package Label"/>
			</div>
						   <div class="form-group col-sm-4">
      <label for="date1">
     Collection Date (YYYY-MM-DD)
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control" id="date1" name="date1" placeholder="YYYY/MM/DD" type="text" value=""/>
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
     </div>
		
			<div class="form-group col-sm-4">
				<label for="Source">Source</label>
				<input type="text" class="form-control" name="Source"  id="Source" placeholder="Enter the Source "  /> 
			</div>
		
			
			
		</div>
	
				<div class="row">
			<div class="form-group col-sm-4">
				<label for="Product_Description">Product Description</label>
				<input type="text" class="form-control" name="Product_Description"  id="Product_Description" placeholder="Enter the Product Description " /> 
			</div>
			<div class="form-group col-sm-4">
				<label for="Per_Serving_Amount_In_Grams">Per Serving Amount (in grams)</label>
				<input type="text" class="form-control" name="Per_Serving_Amount_In_Grams" id="Per_Serving_Amount_In_Grams" placeholder="Enter the Serving Amount (in grams) "/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Per_Serving_Amount_In_Grams_PPD">PPD Per Serving Amount (in grams) </label>
				<input type="text" class="form-control" name="Per_Serving_Amount_In_Grams_PPD" id="Per_Serving_Amount_In_Grams_PPD" placeholder="Enter the PPD Serving Amount (in grams) "/>
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
   <input type="text" class="form-control" placeholder="Amount of Energy kJ" name="Energy_kj_Amount" id="Fat_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">

 <select class="form-control" id="Fat_Unit" name="Energy_kj_Unit">
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
   <input type="text" class="form-control" placeholder="Amount of Saturated + Trans Fat" name="Saturated_Trans_Amount" id="Fat_Amount">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">

 <select class="form-control" id="Fat_Unit" name="Saturated_Trans_Unit">
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
   <input type="text" class="form-control" placeholder="Amount of Molybdenum" name="Molybdenium_Amount">
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
   <input type="text" class="form-control" placeholder="Amount of Chloride" name="Chloride_Amount">
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
		<div class="form-group col-xs-6">
				<label for="PPD_Per_Serving_Amount">Per Serving Size as Prepared</label>
				<input type="text" style="width:540px" class="form-control" name="PPD_Per_Serving_Amount" id="PPD_Per_Serving_Amount" placeholder="Enter the Serving Size " value="<?PHP echo $row['Per_Serving_Amount']; ?>" />
			</div>
	
				<div class="form-group col-xs-6">
	<label for="PPD_Per_Serving_UofM" name="Year_Recorded"> Per Serving Size Unit of Measure</label>
      <select class="form-control" id="PPD_Per_Serving_UofM" name="PPD_Per_Serving_UofM" style="width:540px">
  <option value="" selected="selected">Select the Per Serving Size Unit of Measure</option>
			<?php include 'Units.php';?>
      
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
  <option value="kcal" selected="selected">kcal</option>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Energy" name="Energy_DValue_S" id="Energy_DValue_S">
  </div>
 </div>
 </div>
 
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label for="Fat_Amount_S" class="col-sm-3 control-label">Energy kJ</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Energy kJ" name="Energy_kj_Amount_S" id="Fat_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Energy_kj_Unit_S">
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
  <label for="Fat_Amount_S" class="col-sm-3 control-label">Saturated + Trans Fat</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Saturated + Trans Fat" name="Saturated_Trans_kj_Amount_S" id="Fat_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Saturated_Trans_kj_Unit_S">
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
 <select class="form-control" id="sel1" name="Fat_Unit_S">
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
 <select class="form-control" id="sel1" name="Saturated_Fat_Unit_S">
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
 <select class="form-control" id="sel1" name="Trans_Fat_Unit_S">
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
 <select class="form-control" id="sel1" name="Omega6_Unit_S">
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
 <select class="form-control" id="sel1" name="Omega3_Unit_S">
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
 <select class="form-control" id="sel1" name="Carbohydrates_Unit_S">
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
 <select class="form-control" id="sel1" name="Fibre_Unit_S">
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
 <select class="form-control" id="sel1" name="Soluble_Fibre_Unit_S">
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
 <select class="form-control" id="sel1"  name="Insolube_Fibre_Unit_S">
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
 <select class="form-control" id="sel1" name="Sugar_Unit_S">
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
 <select class="form-control" id="sel1" name="Sugar_Alcohols_Unit_S">
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
 <select class="form-control" id="sel1" name="Starch_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Protein" name="Protein_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Protein_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Cholesterol" name="Cholesterol_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Cholesterol_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Sodium" name="Sodium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Sodium_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Potassium" name="Potassium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Potassium_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Calcium" name="Calcium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Calcium_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Calcium" name="Calcium_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Iron</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Iron" name="Iron_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Iron_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin A" name="VitaminA_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminA_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin C" name="VitaminC_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminC_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin D" name="VitaminD_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminD_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin E" name="VitaminE_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminE_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin K" name="VitaminK_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminK_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Thiamine" name="Thiamine_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Thiamine_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Riboflavin" name="Riboflavin_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Riboflavin_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Niacin" name="Niacin_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Niacin_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin B6" name="VitaminB6_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminB6_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Folate" name="Folate_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Folate_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Vitamin B12" name="VitaminB12_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="VitaminB12_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Vitamin B12" name="VitaminB12_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Biotin</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Biotin" name="Biotin_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Biotin_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Choline" name="Choline_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Choline_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Pantothenate" name="Pantothenate_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Pantothenate_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Phosphorus" name="Phosphorus_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Phosphorus_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Iodide" name="Iodide_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Iodide_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Magnesium" name="Magnesium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Magnesium_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Zinc" name="Zinc_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Zinc_Unit_S">
  <option value="" selected="selected"></option>
			<?php include 'Units.php';?>
      
      </select>  </div>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="% Daily value of Zinc" name="Zinc_DValue_S">
  </div>
 </div>
 </div>
  <div class= "row" style="margin-top:4px;">
		 <div class="form-group">
  <label class="col-sm-3 control-label">Selenium</label>
  <div class="col-sm-3">
   <input type="text" class="form-control" placeholder="Amount of Selenium" name="Selenium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Selenium_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Copper" name="Copper_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Copper_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Manganese" name="Manganese_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Manganese_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Chromium" name="Chromium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Chromium_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Molybdenum" name="Molybdenium_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Molybdenium_Unit_S">
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
   <input type="text" class="form-control" placeholder="Amount of Chloride" name="Chloride_Amount_S">
  </div><!-- /col-sm-9 -->
  <div class="col-sm-3">
 <select class="form-control" id="sel1" name="Chloride_Unit_S">
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
			<div class="form-group col-sm-4 submit_button">
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</form>
	
	<div>
	 	 <?php include("new-label-updated.php"); ?>

	
	</div>	
</div>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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
<br>	<button class="btn btn-default" onclick="goBack()">Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>


	<script>
function validateForm() {
	
	/* 	values for as sold  
    var energy_amount = document.forms["myForm"]["Energy_Amount"].value;
	var energy_unit = document.forms["myForm"]["Energy_Unit"].value;
	
	var fat_amount = document.forms["myForm"]["Fat_Amount"].value;
	var fat_unit = document.forms["myForm"]["Fat_Unit"].value;
	
	var saturated_amount = document.forms["myForm"]["Saturated_Fat_Amount"].value;
	var saturated_unit = document.forms["myForm"]["Saturated_Fat_Unit"].value;
	
	var trans_fat_amount = document.forms["myForm"]["Trans_Fat_Amount"].value;
	var trans_fat_unit = document.forms["myForm"]["Trans_Fat_Unit"].value;	
	
	var omega6_amount = document.forms["myForm"]["Omega6_Amount"].value;
	var omega6_unit = document.forms["myForm"]["Omega6_Unit"].value;
	
	var omega3_amount = document.forms["myForm"]["Omega3_Amount"].value;
	var omega3_unit = document.forms["myForm"]["Omega3_Unit"].value;		

	var carbohydrate_amount = document.forms["myForm"]["Carbohydrates_Amount"].value;
	var carbohydrate_unit = document.forms["myForm"]["Carbohydrates_Unit"].value;		

	var fibre_amount = document.forms["myForm"]["Fibre_Amount"].value;
	var fibre_unit = document.forms["myForm"]["Fibre_Unit"].value;		
	
	var soluble_fibre_amount = document.forms["myForm"]["Soluble_Fibre_Amount"].value;
	var soluble_fibre_unit = document.forms["myForm"]["Soluble_Fibre_Unit"].value;
	
	var insoluble_fibre_amount = document.forms["myForm"]["Insolube_Fibre_Amount"].value;
	var insoluble_fibre_unit = document.forms["myForm"]["Insolube_Fibre_Unit"].value;		

	var sugar_amount = document.forms["myForm"]["Sugar_Amount"].value;
	var sugar_unit = document.forms["myForm"]["Sugar_Unit"].value;		
	
	var sugar_alcohol_amount = document.forms["myForm"]["Sugar_Alcohols_Amount"].value;
	var sugar_alcohol_unit = document.forms["myForm"]["Sugar_Alcohols_Unit"].value;
	
	
	var starch_amount = document.forms["myForm"]["Starch_Amount"].value;
	var starch_unit = document.forms["myForm"]["Starch_Unit"].value;		

	var protein_amount = document.forms["myForm"]["Protein_Amount"].value;
	var protein_unit = document.forms["myForm"]["Protein_Unit"].value;		
	
	var cholesterol_amount = document.forms["myForm"]["Cholesterol_Amount"].value;
	var cholesterol_unit = document.forms["myForm"]["Cholesterol_Unit"].value;	
	

	var sodium_amount = document.forms["myForm"]["Sodium_Amount"].value;
	var sodium_unit = document.forms["myForm"]["Sodium_Unit"].value;		

	var potassium_amount = document.forms["myForm"]["Potassium_Amount"].value;
	var potassium_unit = document.forms["myForm"]["Potassium_Unit"].value;		
	
	var calcium_amount = document.forms["myForm"]["Calcium_Amount"].value;
	var calcium_unit = document.forms["myForm"]["Calcium_Unit"].value;	
	
	var iron_amount = document.forms["myForm"]["Iron_Amount"].value;
	var iron_unit = document.forms["myForm"]["Iron_Unit"].value;		

	var vitamina_amount = document.forms["myForm"]["VitaminA_Amount"].value;
	var vitamina_unit = document.forms["myForm"]["VitaminA_Unit"].value;		
	
	var vitaminc_amount = document.forms["myForm"]["VitaminC_Amount"].value;
	var vitaminc_unit = document.forms["myForm"]["VitaminC_Unit"].value;	
	

	var vitamind_amount = document.forms["myForm"]["VitaminD_Amount"].value;
	var vitamind_unit = document.forms["myForm"]["VitaminD_Unit"].value;		

	var vitamine_amount = document.forms["myForm"]["VitaminE_Amount"].value;
	var vitamine_unit = document.forms["myForm"]["VitaminE_Unit"].value;		
	
	var vitamink_amount = document.forms["myForm"]["VitaminK_Amount"].value;
	var vitamink_unit = document.forms["myForm"]["VitaminK_Unit"].value;	
	
	var thiamine_amount = document.forms["myForm"]["Thiamine_Amount"].value;
	var thiamine_unit = document.forms["myForm"]["Thiamine_Unit"].value;		

	var riboflavin_amount = document.forms["myForm"]["Riboflavin_Amount"].value;
	var riboflavin_unit = document.forms["myForm"]["Riboflavin_Unit"].value;		
	
	var niacin_amount = document.forms["myForm"]["Niacin_Amount"].value;
	var niacin_unit = document.forms["myForm"]["Niacin_Unit"].value;	
	
	var vitaminb6_amount = document.forms["myForm"]["VitaminB6_Amount"].value;
	var vitaminb6_unit = document.forms["myForm"]["VitaminB6_Unit"].value;		

	var folate_amount = document.forms["myForm"]["Folate_Amount"].value;
	var folate_unit = document.forms["myForm"]["Folate_Unit"].value;		
	
	var vitaminb12_amount = document.forms["myForm"]["VitaminB12_Amount"].value;
	var vitaminb12_unit = document.forms["myForm"]["VitaminB12_Unit"].value;	
	
	var biotin_amount = document.forms["myForm"]["Biotin_Amount"].value;
	var biotin_unit = document.forms["myForm"]["Biotin_Unit"].value;		

	var choline_amount = document.forms["myForm"]["Choline_Amount"].value;
	var choline_unit = document.forms["myForm"]["Choline_Unit"].value;		
	
	var pantothenate_amount = document.forms["myForm"]["Pantothenate_Amount"].value;
	var pantothenate_unit = document.forms["myForm"]["Pantothenate_Unit"].value;
	
	var phosporus_amount = document.forms["myForm"]["Phosphorus_Amount"].value;
	var phosporus_unit = document.forms["myForm"]["Phosphorus_Unit"].value;		

	var iodide_amount = document.forms["myForm"]["Iodide_Amount"].value;
	var iodide_unit = document.forms["myForm"]["Iodide_Unit"].value;		
	
	var magnesium_amount = document.forms["myForm"]["Magnesium_Amount"].value;
	var magnesium_unit = document.forms["myForm"]["Magnesium_Unit"].value;	
	
	var zinc_amount = document.forms["myForm"]["Zinc_Amount"].value;
	var zinc_unit = document.forms["myForm"]["Zinc_Unit"].value;		

	var selenium_amount = document.forms["myForm"]["Selenium_Amount"].value;
	var selenium_unit = document.forms["myForm"]["Selenium_Unit"].value;		
	
	var copper_amount = document.forms["myForm"]["Copper_Amount"].value;
	var copper_unit = document.forms["myForm"]["Copper_Unit"].value;	
	
	var manganese_amount = document.forms["myForm"]["Manganese_Amount"].value;
	var manganese_unit = document.forms["myForm"]["Manganese_Unit"].value;	
	
	var chromium_amount = document.forms["myForm"]["Chromium_Amount"].value;
	var chromium_unit = document.forms["myForm"]["Chromium_Unit"].value;		

	var molybdenium_amount = document.forms["myForm"]["Molybdenium_Amount"].value;
	var molybdenium_unit = document.forms["myForm"]["Molybdenium_Unit"].value;		
	
	var chloride_amount = document.forms["myForm"]["Chloride_Amount"].value;
	var chloride_unit = document.forms["myForm"]["Chloride_Unit"].value;
	
 	console.log(energy_amount);
	console.log(energy_unit);
	
	console.log(typeof energy_amount);
	console.log(energy_amount === ""); 
	

	
	if ((energy_amount === "" && energy_unit !== "") || (energy_amount !== "" && energy_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Energy";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((fat_amount === "" && fat_unit !== "") || (fat_amount !== "" && fat_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Fat";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((saturated_amount === "" && saturated_unit !== "") || (saturated_amount !== "" && saturated_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Saturated Fat";
document.getElementById("demo").style.color = 'red';
		return false;
	}	

	if ((trans_fat_amount === "" && trans_fat_unit !== "") || (trans_fat_amount !== "" && trans_fat_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Trans Fat";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((omega6_amount === "" && omega6_unit !== "") || (omega6_amount !== "" && omega6_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Omega-6 Polyunsaturated Fat";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((omega3_amount === "" && omega3_unit !== "") || (omega3_amount !== "" && omega3_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Omega-3 Polyunsaturated Fat";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((carbohydrate_amount === "" && carbohydrate_unit !== "") || (carbohydrate_amount !== "" && carbohydrate_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Carbohydrates";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((fibre_amount === "" && fibre_unit !== "") || (fibre_amount !== "" && fibre_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Fibre";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((soluble_fibre_amount === "" && soluble_fibre_unit !== "") || (soluble_fibre_amount !== "" && soluble_fibre_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Soluble Fibre";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((insoluble_fibre_amount === "" && insoluble_fibre_unit !== "") || (insoluble_fibre_amount !== "" && insoluble_fibre_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Insolube Fibre";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((sugar_amount === "" && sugar_unit !== "") || (sugar_amount !== "" && sugar_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Sugar";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((sugar_alcohol_amount === "" && sugar_alcohol_unit !== "") || (sugar_alcohol_amount !== "" && sugar_alcohol_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Sugars Alcohol";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((starch_amount === "" && starch_unit !== "") || (starch_amount !== "" && starch_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Starch";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((protein_amount === "" && protein_unit !== "") || (protein_amount !== "" && protein_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Proteins";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((cholesterol_amount === "" && cholesterol_unit !== "") || (cholesterol_amount !== "" && cholesterol_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Cholesterol";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((sodium_amount === "" && sodium_unit !== "") || (sodium_amount !== "" && sodium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Sodium";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((potassium_amount === "" && potassium_unit !== "") || (potassium_amount !== "" && potassium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Potassium";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((calcium_amount === "" && calcium_unit !== "") || (calcium_amount !== "" && calcium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Calcium";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((iron_amount === "" && iron_unit !== "") || (iron_amount !== "" && iron_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Iron";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitamina_amount === "" && vitamina_unit !== "") || (vitamina_amount !== "" && vitamina_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin A";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitaminc_amount === "" && vitaminc_unit !== "") || (vitaminc_amount !== "" && vitaminc_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin C";
document.getElementById("demo").style.color = 'red';
		return false;
	}	

	
	if ((vitamind_amount === "" && vitamind_unit !== "") || (vitamind_amount !== "" && vitamind_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin D";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitamine_amount === "" && vitamine_unit !== "") || (vitamind_amount !== "" && vitamind_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin D";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitamink_amount === "" && vitamink_unit !== "") || (vitamink_amount !== "" && vitamink_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin K";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((thiamine_amount === "" && thiamine_unit !== "") || (thiamine_amount !== "" && thiamine_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Thiamine";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((riboflavin_amount === "" && riboflavin_unit !== "") || (riboflavin_amount !== "" && riboflavin_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Riboflavin";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((niacin_amount === "" && niacin_unit !== "") || (niacin_amount !== "" && niacin_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Niacin";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((vitaminb6_amount === "" && vitaminb6_unit !== "") || (vitaminb6_amount !== "" && vitaminb6_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin B6";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((folate_amount === "" && folate_unit !== "") || (folate_amount !== "" && folate_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Folate";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((vitaminb12_amount === "" && vitaminb12_unit !== "") || (vitaminb12_amount !== "" && vitaminb12_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin B12";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((biotin_amount === "" && biotin_unit !== "") || (biotin_amount !== "" && biotin_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Biotin";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((choline_amount === "" && choline_unit !== "") || (choline_amount !== "" && choline_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Choline";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((pantothenate_amount === "" && pantothenate_unit !== "") || (pantothenate_amount !== "" && pantothenate_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Pantothenate";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((phosporus_amount === "" && phosporus_unit !== "") || (phosporus_amount !== "" && phosporus_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Phosphorus";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((iodide_amount === "" && iodide_unit !== "") || (iodide_amount !== "" && iodide_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Iodide";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((magnesium_amount === "" && magnesium_unit !== "") || (magnesium_amount !== "" && magnesium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Magnesium";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((zinc_amount === "" && zinc_unit !== "") || (zinc_amount !== "" && zinc_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Zinc";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((selenium_amount === "" && selenium_unit !== "") || (selenium_amount !== "" && selenium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Selenium";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((copper_amount === "" && copper_unit !== "") || (copper_amount !== "" && copper_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Copper";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((manganese_amount === "" && manganese_unit !== "") || (manganese_amount !== "" && manganese_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Manganese";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((chromium_amount === "" && chromium_unit !== "") || (chromium_amount !== "" && chromium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Chromium";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((molybdenium_amount === "" && molybdenium_unit !== "") || (molybdenium_amount !== "" && molybdenium_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Molybdenum";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((chloride_amount === "" && chloride_unit !== "") || (chloride_amount !== "" && chloride_unit === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Chloride";
document.getElementById("demo").style.color = 'red';
		return false;
	}*/
	/* values for as prepared 
	
	var energy_amount_s = document.forms["myForm"]["Energy_Amount_S"].value;
	var energy_unit_s = document.forms["myForm"]["Energy_Unit_S"].value;
		
		console.log(energy_amount_s);
		console.log(energy_unit_s);
	console.log(typeof energy_amount_s);
	console.log(energy_amount_s === ""); 
	
	if ((energy_amount_s === "" && energy_unit_s !== "") || (energy_amount_s !== "" && energy_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Energy -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	


		
	var saturated_amount_s = document.forms["myForm"]["Saturated_Fat_Amount_S"].value;
	var saturated_unit_s = document.forms["myForm"]["Saturated_Fat_Unit_S"].value;
	
	var trans_fat_amount_s = document.forms["myForm"]["Trans_Fat_Amount_S"].value;
	var trans_fat_unit_s = document.forms["myForm"]["Trans_Fat_Unit_S"].value;	
	
	var omega6_amount_s = document.forms["myForm"]["Omega6_Amount_S"].value;
	var omega6_unit_s = document.forms["myForm"]["Omega6_Unit_S"].value;
	
	var omega3_amount_s = document.forms["myForm"]["Omega3_Amount_S"].value;
	var omega3_unit_s = document.forms["myForm"]["Omega3_Unit_S"].value;		

	var carbohydrate_amount_s = document.forms["myForm"]["Carbohydrates_Amount_S"].value;
	var carbohydrate_unit_s = document.forms["myForm"]["Carbohydrates_Unit_S"].value;		

	var fibre_amount_s = document.forms["myForm"]["Fibre_Amount_S"].value;
	var fibre_unit_s = document.forms["myForm"]["Fibre_Unit_S"].value;		
	
	var soluble_fibre_amount_s = document.forms["myForm"]["Soluble_Fibre_Amount_S"].value;
	var soluble_fibre_unit_s = document.forms["myForm"]["Soluble_Fibre_Unit_S"].value;
	
	var insoluble_fibre_amount_s = document.forms["myForm"]["Insolube_Fibre_Amount_S"].value;
	var insoluble_fibre_unit_s = document.forms["myForm"]["Insolube_Fibre_Unit_S"].value;		

	var sugar_amount_s = document.forms["myForm"]["Sugar_Amount_S"].value;
	var sugar_unit_s = document.forms["myForm"]["Sugar_Unit_S"].value;		
	
	var sugar_alcohol_amount_s = document.forms["myForm"]["Sugar_Alcohols_Amount_S"].value;
	var sugar_alcohol_unit_s = document.forms["myForm"]["Sugar_Alcohols_Unit_S"].value;
	
	
	var starch_amount_s = document.forms["myForm"]["Starch_Amount_S"].value;
	var starch_unit_s = document.forms["myForm"]["Starch_Unit_S"].value;		

	var protein_amount_s = document.forms["myForm"]["Protein_Amount_S"].value;
	var protein_unit_s = document.forms["myForm"]["Protein_Unit_S"].value;		
	
	var cholesterol_amount_s = document.forms["myForm"]["Cholesterol_Amount_S"].value;
	var cholesterol_unit_s = document.forms["myForm"]["Cholesterol_Unit_S"].value;	
	

	var sodium_amount_s = document.forms["myForm"]["Sodium_Amount_S"].value;
	var sodium_unit_s = document.forms["myForm"]["Sodium_Unit_S"].value;		

	var potassium_amount_s = document.forms["myForm"]["Potassium_Amount_S"].value;
	var potassium_unit_s = document.forms["myForm"]["Potassium_Unit_S"].value;		
	
	var calcium_amount_s = document.forms["myForm"]["Calcium_Amount_S"].value;
	var calcium_unit_s = document.forms["myForm"]["Calcium_Unit_S"].value;	
	
	var iron_amount_s = document.forms["myForm"]["Iron_Amount_S"].value;
	var iron_unit_s = document.forms["myForm"]["Iron_Unit_S"].value;		

	var vitamina_amount_s = document.forms["myForm"]["VitaminA_Amount_S"].value;
	var vitamina_unit_s = document.forms["myForm"]["VitaminA_Unit_S"].value;		
	
	var vitaminc_amount_s = document.forms["myForm"]["VitaminC_Amount_S"].value;
	var vitaminc_unit_s = document.forms["myForm"]["VitaminC_Unit_S"].value;	
	

	var vitamind_amount_s = document.forms["myForm"]["VitaminD_Amount_S"].value;
	var vitamind_unit_s = document.forms["myForm"]["VitaminD_Unit_S"].value;		

	var vitamine_amount_s = document.forms["myForm"]["VitaminE_Amount_S"].value;
	var vitamine_unit_s = document.forms["myForm"]["VitaminE_Unit_S"].value;		
	
	var vitamink_amount_s = document.forms["myForm"]["VitaminK_Amount_S"].value;
	var vitamink_unit_s = document.forms["myForm"]["VitaminK_Unit_S"].value;	
	
	var thiamine_amount_s = document.forms["myForm"]["Thiamine_Amount_S"].value;
	var thiamine_unit_s = document.forms["myForm"]["Thiamine_Unit_S"].value;		

	var riboflavin_amount_s = document.forms["myForm"]["Riboflavin_Amount_S"].value;
	var riboflavin_unit_s = document.forms["myForm"]["Riboflavin_Unit_S"].value;		
	
	var niacin_amount_s = document.forms["myForm"]["Niacin_Amount_S"].value;
	var niacin_unit_s = document.forms["myForm"]["Niacin_Unit_S"].value;	
	
	var vitaminb6_amount_s = document.forms["myForm"]["VitaminB6_Amount_S"].value;
	var vitaminb6_unit_s = document.forms["myForm"]["VitaminB6_Unit_S"].value;		

	var folate_amount_s = document.forms["myForm"]["Folate_Amount_S"].value;
	var folate_unit_s = document.forms["myForm"]["Folate_Unit_S"].value;		
	
	var vitaminb12_amount_s = document.forms["myForm"]["VitaminB12_Amount_S"].value;
	var vitaminb12_unit_s = document.forms["myForm"]["VitaminB12_Unit_S"].value;	
	
	var biotin_amount_s = document.forms["myForm"]["Biotin_Amount_S"].value;
	var biotin_unit_s = document.forms["myForm"]["Biotin_Unit_S"].value;		

	var choline_amount_s = document.forms["myForm"]["Choline_Amount_S"].value;
	var choline_unit_s = document.forms["myForm"]["Choline_Unit_S"].value;		
	
	var pantothenate_amount_s = document.forms["myForm"]["Pantothenate_Amount_S"].value;
	var pantothenate_unit_s = document.forms["myForm"]["Pantothenate_Unit_S"].value;
	
	var phosporus_amount_s = document.forms["myForm"]["Phosphorus_Amount_S"].value;
	var phosporus_unit_s = document.forms["myForm"]["Phosphorus_Unit_S"].value;		

	var iodide_amount_s = document.forms["myForm"]["Iodide_Amount_S"].value;
	var iodide_unit_s = document.forms["myForm"]["Iodide_Unit_S"].value;		
	
	var magnesium_amount_s = document.forms["myForm"]["Magnesium_Amount_S"].value;
	var magnesium_unit_s = document.forms["myForm"]["Magnesium_Unit_S"].value;	
	
	var zinc_amount_s = document.forms["myForm"]["Zinc_Amount_S"].value;
	var zinc_unit_s = document.forms["myForm"]["Zinc_Unit_S"].value;		

	var selenium_amount_s = document.forms["myForm"]["Selenium_Amount_S"].value;
	var selenium_unit_s = document.forms["myForm"]["Selenium_Unit_S"].value;		
	
	var copper_amount_s = document.forms["myForm"]["Copper_Amount_S"].value;
	var copper_unit_s = document.forms["myForm"]["Copper_Unit_S"].value;	
	
	var manganese_amount_s = document.forms["myForm"]["Manganese_Amount_S"].value;
	var manganese_unit_s = document.forms["myForm"]["Manganese_Unit_S"].value;	
	
	var chromium_amount_s = document.forms["myForm"]["Chromium_Amount_S"].value;
	var chromium_unit_s = document.forms["myForm"]["Chromium_Unit_S"].value;		

	var molybdenium_amount_s = document.forms["myForm"]["Molybdenium_Amount_S"].value;
	var molybdenium_unit_s = document.forms["myForm"]["Molybdenium_Unit_S"].value;		
	
	var chloride_amount_s = document.forms["myForm"]["Chloride_Amount_S"].value;
	var chloride_unit_s = document.forms["myForm"]["Chloride_Unit_S"].value;
	
		
	if ((energy_amount_s === "" && energy_unit_s !== "") || (energy_amount_s !== "" && energy_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Energy -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	return false;
	
	if ((fat_amount_s === "" && fat_unit_s !== "") || (fat_amount_s !== "" && fat_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Fat -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((saturated_amount_s === "" && saturated_unit_s !== "") || (saturated_amount_s !== "" && saturated_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Saturated Fat -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	

	if ((trans_fat_amount_s === "" && trans_fat_unit_s !== "") || (trans_fat_amount_s !== "" && trans_fat_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Trans Fat -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((omega6_amount_s === "" && omega6_unit_s !== "") || (omega6_amount_s !== "" && omega6_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Omega-6 Polyunsaturated Fat -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((omega3_amount_s === "" && omega3_unit_s !== "") || (omega3_amount_s !== "" && omega3_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Omega-3 Polyunsaturated Fat -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((carbohydrate_amount_s === "" && carbohydrate_unit_s !== "") || (carbohydrate_amount_s !== "" && carbohydrate_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Carbohydrates -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((fibre_amount_s === "" && fibre_unit_s !== "") || (fibre_amount_s !== "" && fibre_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Fibre -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((soluble_fibre_amount_s === "" && soluble_fibre_unit_s !== "") || (soluble_fibre_amount_s !== "" && soluble_fibre_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Soluble Fibre -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((insoluble_fibre_amount_s === "" && insoluble_fibre_unit_s !== "") || (insoluble_fibre_amount_s !== "" && insoluble_fibre_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Insolube Fibre -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((sugar_amount_s === "" && sugar_unit_s !== "") || (sugar_amount_s !== "" && sugar_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Sugar -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((sugar_alcohol_amount_s === "" && sugar_alcohol_unit_s !== "") || (sugar_alcohol_amount_s !== "" && sugar_alcohol_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Sugars Alcohol -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((starch_amount_s === "" && starch_unit_s !== "") || (starch_amount_s !== "" && starch_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Starch -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((protein_amount_s === "" && protein_unit_s !== "") || (protein_amount_s !== "" && protein_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Proteins -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((cholesterol_amount_s === "" && cholesterol_unit_s !== "") || (cholesterol_amount_s !== "" && cholesterol_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Cholesterol -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((sodium_amount_s === "" && sodium_unit_s !== "") || (sodium_amount_s !== "" && sodium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Sodium -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}

	if ((potassium_amount_s === "" && potassium_unit_s !== "") || (potassium_amount_s !== "" && potassium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Potassium -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((calcium_amount_s === "" && calcium_unit_s !== "") || (calcium_amount_s !== "" && calcium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Calcium -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((iron_amount_s === "" && iron_unit_s !== "") || (iron_amount_s !== "" && iron_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Iron -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitamina_amount_s === "" && vitamina_unit_s !== "") || (vitamina_amount_s !== "" && vitamina_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin A -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitaminc_amount_s === "" && vitaminc_unit_s !== "") || (vitaminc_amount_s !== "" && vitaminc_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin C -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	

	
	if ((vitamind_amount_s === "" && vitamind_unit_s !== "") || (vitamind_amount_s !== "" && vitamind_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin D -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitamine_amount_s === "" && vitamine_unit_s !== "") || (vitamind_amount_s !== "" && vitamind_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin D -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((vitamink_amount_s === "" && vitamink_unit_s !== "") || (vitamink_amount_s !== "" && vitamink_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin K -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((thiamine_amount_s === "" && thiamine_unit_s !== "") || (thiamine_amount_s !== "" && thiamine_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Thiamine -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((riboflavin_amount_s === "" && riboflavin_unit_s !== "") || (riboflavin_amount_s !== "" && riboflavin_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Riboflavin -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((niacin_amount_s === "" && niacin_unit_s !== "") || (niacin_amount_s !== "" && niacin_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Niacin -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((vitaminb6_amount_s === "" && vitaminb6_unit_s !== "") || (vitaminb6_amount_s !== "" && vitaminb6_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin B6 -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((folate_amount_s === "" && folate_unit_s !== "") || (folate_amount_s !== "" && folate_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Folate -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}	
	
	if ((vitaminb12_amount_s === "" && vitaminb12_unit_s !== "") || (vitaminb12_amount_s !== "" && vitaminb12_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Vitamin B12 -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((biotin_amount_s === "" && biotin_unit_s !== "") || (biotin_amount_s !== "" && biotin_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Biotin -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((choline_amount_s === "" && choline_unit_s !== "") || (choline_amount_s !== "" && choline_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Choline -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((pantothenate_amount_s === "" && pantothenate_unit_s !== "") || (pantothenate_amount_s !== "" && pantothenate_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Pantothenate -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((phosporus_amount_s === "" && phosporus_unit_s !== "") || (phosporus_amount_s !== "" && phosporus_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Phosphorus -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((iodide_amount_s === "" && iodide_unit_s !== "") || (iodide_amount_s !== "" && iodide_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Iodide -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((magnesium_amount_s === "" && magnesium_unit_s !== "") || (magnesium_amount_s !== "" && magnesium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Magnesium -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((zinc_amount_s === "" && zinc_unit_s !== "") || (zinc_amount_s !== "" && zinc_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Zinc -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((selenium_amount_s === "" && selenium_unit_s !== "") || (selenium_amount_s !== "" && selenium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Selenium -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((copper_amount_s === "" && copper_unit_s !== "") || (copper_amount_s !== "" && copper_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Copper -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
		if ((manganese_amount_s === "" && manganese_unit_s !== "") || (manganese_amount_s !== "" && manganese_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Manganese -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((chromium_amount_s === "" && chromium_unit_s !== "") || (chromium_amount_s !== "" && chromium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Chromium -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	
	if ((molybdenium_amount_s === "" && molybdenium_unit_s !== "") || (molybdenium_amount_s !== "" && molybdenium_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Molybdenum -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}
	if ((chloride_amount_s === "" && chloride_unit_s !== "") || (chloride_amount_s !== "" && chloride_unit_s === "")) {
		console.log(true);
		document.getElementById("demo").innerHTML = "Missing Unit of measure for amount or missing amount for a Unit of measure for Chloride -as prepared";
document.getElementById("demo").style.color = 'red';
		return false;
	}

}*/
</script>
		</main>
	<?php include 'footer.php';?>
	</div>

</body>
</html>
