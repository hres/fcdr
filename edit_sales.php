<?php include 'session.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">

	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
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

<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />



<script type="text/javascript" src="js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="css/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)
<link rel="stylesheet" href="css/font-awesome.min.css" />-->


<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>





<!-- Include Date Range Picker -->


	
	
	
		<style>
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
	
	

.well{
	background-color:  #ebf0fa;
}
.sales_button{
	float:right;
}
		.error {
    color:red;
}	
	</style>
	<?php include("fill_sales.php"); ?>
</head>
<body class="wide comments example">

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">




		
		<div class="container">

<section style="margin-top: 15px;" class="hidethis">
<h3>Market Share</h3>
 <div id="confirm-message" style="color:#008000;"></div>
  <div id="confirm-message2" style="color:#FF0000;"></div>

<div class="well" style="margin-right:2%;">
	<form role="form" method="post" action="#" id="vids-search-form1">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Sales_UPC" class="required">Sales UPC <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_UPC" disabled="disabled" id="Sales_UPC" placeholder="Enter the Sales UPC Code of the Market Share" value="<?PHP echo $row['Sales_UPC']; ?>" required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Dollar_Volume" class="required">Dollar Volume <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume" id="Dollar_Volume" placeholder="Enter the Sales figure of the Market Share" value="<?PHP echo $row['Dollar_Volume']; ?>" required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Kilo_Volume" class="required">Kilo Volume <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Vol" id="Kilo_Volume" placeholder="Enter the Volume " value="<?PHP echo $row['Kilo_Vol']; ?>" required/>
			</div>
		
		
			
		</div>
		<div class="row">
		
			<div class="form-group col-sm-4">
				<label for="Sales_Year" class="required">Sales Year <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_Year" id="Sales_Year" placeholder="Enter a Collection Year for the Market Share" value="<?PHP echo $row['Sales_Year']; ?>" required/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Nielsen_Category" class="required">Nielsen Category <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category"  placeholder="Enter the Neilson Category " value="<?PHP echo $row['Nielsen_Category']; ?>" required/> 
			</div>
				<div class="form-group col-sm-4">
				<label for="Source" class="required">Source <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Source" id="Source" placeholder="Enter the Source " value="<?PHP echo $row['Source']; ?>" required/>
			</div>
			
		</div>
		<div class="row">
			
			<div class="form-group col-sm-4">
				<label for="Sales_Description" class="required">Sales Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Description " value="<?PHP echo $row['Sales_Description']; ?>" required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Comments">Comments </label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter a Comment for the Market Share" value="<?PHP echo $row['Comments']; ?>"/>
			</div>
		
		   <div class="form-group col-sm-4">
      <label for="date1" class="required">
     Collection Date <strong class="required">(required)</strong>
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control myDateFormat" id="date1" name="Collection_Date" placeholder="YYYY/MM/DD" type="text" value="<?PHP echo $row['Collection_Date']; ?>" required/>
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
	   <label class="error" for="date1"></label>
      </div>
     </div>
		
		
		</div>
				<div class="row">
			<div class="form-group col-sm-4">
				<label for="Brand" >Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand the Market Share" value="<?PHP echo $row['Brand']; ?>"/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Dollar_Rank" class="required">Dollar Rank <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Rank" id="Dollar_Rank"  placeholder="Enter the Dollar Rank " value="<?PHP echo $row['Dollar_Rank']; ?>" required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Dollar_Volume_PerCentage_Change" class="required">Dollar Volume % Change <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume_PerCentage_Change" id="Dollar_Volume_PerCentage_Change" placeholder="Enter the Dollar Volume % Change  " value="<?PHP echo $row['Dollar_Volume_PerCentage_Change']; ?>" required/>
			</div>
		
	
		
		
		</div>

		
						<div class="row">
									<div class="form-group col-sm-4">
				<label for="Kilo_Volume_Percent_Change" class="required">Kilo Volume % Change <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Volume_Percent_Change" id="Kilo_Volume_Percent_Change" placeholder="Enter the Kilo Volume % Change " value="<?PHP echo $row['Kilo_Volume_Percent_Change']; ?>" required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Average_AC_Dist">Average AC Dist</label>
				<input type="text" class="form-control" name="Average_AC_Dist" id="Average_AC_Dist" placeholder="Enter the Average AC Dist of  the Market Share" value="<?PHP echo $row['Average_AC_Dist']; ?>"/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Average_Retail_Price">Average Retail Price</label>
				<input type="text" class="form-control" name="Average_Retail_Price" id="Average_Retail_Price" placeholder="Enter the Average Retail Price " value="<?PHP echo $row['Average_Retail_Price']; ?>" />
			</div>
		
			
		</div>
						<div class="row">
			<div class="form-group col-sm-4">
				<label for="Dollar_Volume_Total" class="required">Dollar Volume Total <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume_Total" id="Dollar_Volume_Total" placeholder="Enter the Dollar Volume Total " value="<?PHP echo $row['Dollar_Volume_Total']; ?>" required/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Kilo_Volume_Total" class="required">Kilo Volume Total <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Volume_Total" id="Kilo_Volume_Total"  placeholder="Enter the Kilo Volume Total " value="<?PHP echo $row['Kilo_Volume_Total']; ?>" required/>
			</div>

		<div class="form-group col-sm-4">
	<label for="Control_Label_Flag" name="Control_Label_Flag">Control Label Flag</label>
      <select class="form-control" id="Control_Label_Flag" name="Control_Label_Flag">
	    <option value="<?PHP echo $row['Control_Label_Flag']; ?>" selected><?PHP echo $row['Control_Label_Flag']; ?></option>
		 <option value="No">No</option>
		 <option value="Yes">Yes</option>
      </select></div>



			
		</div>
		
		<div class="row">
					<div class="form-group col-sm-4">
				<label for="Dollar_Share" class="required">Dollar Share <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Share" id="Dollar_Share"  placeholder="Enter the Dollar Share " value="<?PHP echo $row['Dollar_Share']; ?>" required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Kilo_Share" class="required">Kilo Share <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Share" id="Kilo_Share" placeholder="Enter the Kilo Share " value="<?PHP echo $row['Kilo_Share']; ?>" required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number " value="<?PHP echo $row['Cluster_Number']; ?>"/>
			</div>			

		
		</div>
				<div class="row">
					<div class="form-group col-sm-4">
				<label for="Product_Grouping">Product Grouping</label>
				<input type="text" class="form-control" name="Product_Grouping" style="" id="Product_Grouping"  placeholder="Enter the Product Grouping " value="<?PHP echo $row['Product_Grouping']; ?>" />
			</div>
				
					<div class="form-group col-sm-4">
				<label for="Kilo_Rank">Kilo Rank</label>
				<input type="text" class="form-control" name="Kilo_Rank" style="" id="Kilo_Rank"  placeholder="Enter the Kilo Rank " value="<?PHP echo $row['Kilo_Rank']; ?>" />
				</div>		
					<div class="form-group col-sm-4">
				<label for="Manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" style="" id="Manufacturer"  placeholder="Enter the Manufacturer " value="<?PHP echo $row['Manufacturer']; ?>" />
				</div>

				</div>
				<div class="row">	
			<div class="form-group">
			
				<button style="margin-top: 30px; margin-right:15px;  margin-bottom:0px; float:right;" type="submit" class="btn btn-default" name="search" >Save</button>
			</div>
		
		</div>
		
	</form>
	</div>
	<?php include("save_sales.php"); ?>
	<br>	 
<?php echo " <a \" class=\"btn btn-default\" href=sales_details.php?SalesID=" .  $_GET['SalesID'] . ">Back</a>";  ?>
</section>
	



  </div>
 

  


		
	

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
<script type="text/javascript" src="validate-market.js"></script>
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
	<script>
	$(document).ready(function(){
		var date_input=$('input[name="Sales_Reference_Date"]'); //our date input has the name "date"
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
    $(this).parent().siblings('#date2').trigger('focus');
});
		})
</script>

</body>
</html>