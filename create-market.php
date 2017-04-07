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
<?php include 'validate-sales.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
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

<!--Font Awesome (added because you use icons in your prepend/append)
<link rel="stylesheet" href="css/font-awesome.min.css" />-->


<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>




<!-- Include Date Range Picker -->




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
	background-color:  #ebf0fa;
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
		include("new-market.php");
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
		
	<strong><h3>Create Market Share</h3></strong>	
	<div id="confirm-message" style="color:#008000;"></div>
	<div id="confirm-message2" style="color:#FF0000;"></div>

	<div class="well wb-frmvld" style="margin-right:2%;">

	<form role="form" method="post" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'] . "?ProductID=" .  $_GET['ProductID']) ;?>" id="vids-search-form1">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Sales_UPC" class="required"> <span class="field-name">Sales UPC</span><strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_UPC"  id="Sales_UPC" placeholder="Enter the Sales UPC Code of the Market Share" required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Dollar_Volume" class="required"> Dollar Volume <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume" id="Dollar_Volume" placeholder="Enter the Sales figure of the Market Share" required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Kilo_Volume" class="required">Kilo Volume <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Vol" id="Kilo_Volume" placeholder="Enter the Volume of the Market Share" required="required"/>
			</div>
		
		
			
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Sales_Year" class="required">Sales Year <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_Year" id="Sales_Year" placeholder="Enter a Collection Year for the Market Share" required="required"/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Nielsen_Category" class="required">Nielsen Category <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category"  placeholder="Enter the Neilson Category of the Market Share" required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Source" class="required">Source <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Source" id="Source" placeholder="Enter the Source of the Market Share" required="required"/>
			</div>
		
	
		
		
		</div>
		<div class="row">
			
			<div class="form-group col-sm-4">
				<label for="Sales_Description" class="required">Sales Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Description " required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter a Comment "/>
			</div>
		
		<div class="form-group col-sm-4">
			<label for="date1">
			Collection Date
			</label>
			<div class="">
				<div class="input-group">
					<input class="form-control myDateFormat" id="date1" name="Collection_Date" placeholder="YYYY/MM/DD" type="text" />
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
				<label for="Brand" >Brand </label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand">
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Dollar_Rank" class="required">Dollar Rank <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Rank" id="Dollar_Rank"  placeholder="Enter the Dollar Rank " required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Dollar_Volume_PerCentage_Change" class="required">Dollar Volume % Change <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume_PerCentage_Change" id="Dollar_Volume_PerCentage_Change" placeholder="Enter the Dollar Volume % Change  " required/>
			</div>
		
	
		
		
		</div>

		
						<div class="row">
									<div class="form-group col-sm-4">
				<label for="Kilo_Volume_Percent_Change" class="required">Kilo Volume % Change <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Volume_Percent_Change" id="Kilo_Volume_Percent_Change" placeholder="Enter the Kilo Volume % Change " required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Average_AC_Dist">Average AC Dist</label>
				<input type="text" class="form-control" name="Average_AC_Dist" id="Average_AC_Dist" placeholder="Enter the Average AC Dist"/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Average_Retail_Price">Average Retail Price</label>
				<input type="text" class="form-control" name="Average_Retail_Price" id="Average_Retail_Price" placeholder="Enter the Average Retail Price "/>
			</div>
		
			
		</div>
						<div class="row">
			<div class="form-group col-sm-4">
				<label for="Dollar_Volume_Total" class="required">Dollar Volume Total <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume_Total" id="Dollar_Volume_Total" placeholder="Enter the Dollar Volume Total " required/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Kilo_Volume_Total" class="required">Kilo Volume Total <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Volume_Total" id="Kilo_Volume_Total"  placeholder="Enter the Kilo Volume Total " required/>
			</div>
	

		<div class="form-group col-sm-4">
	<label for="Control_Label_Flag" name="Control_Label_Flag">Control Label Flag</label>
      <select class="form-control" id="Control_Label_Flag" name="Control_Label_Flag">
		 <option value="No" selected>No</option>
		 <option value="Yes">Yes</option>
      </select></div>


			
		</div>
		
		<div class="row">
					<div class="form-group col-sm-4">
				<label for="Dollar_Share" class="required">Dollar Share <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Share" id="Dollar_Share"  placeholder="Enter the Dollar Share " required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Kilo_Share" class="required">Kilo Share <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Share" id="Kilo_Share" placeholder="Enter the Kilo Share " required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number "/>
			</div>			

		
		</div>
				<div class="row">

				<div class="form-group col-xs-6">
				<label for="Kilo_Rank">Kilo Rank</label>
				<input type="text" class="form-control" name="Kilo_Rank" style="width:540px" id="Kilo_Rank" placeholder="Enter the Kilo Rank "/>
			</div>
				<div class="form-group col-xs-6">
				<label for="Manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" style="width:540px" id="Manufacturer" placeholder="Enter the Manufacturer"/>
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
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type"/>
			</div>
	        <input type="hidden" name="token" value = "<?php echo $token; ?>"/>
			<div class="form-group col-sm-4" style="float:right;">
				<button style="float:right; margin-top:30px;" type="submit" class="btn btn-default" name="search" >Save</button>
			</div>
		
		</div>
		
	</form>
	</div>
<div>

	
	</div>	

<!-- Include Date Range Picker -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js" integrity="sha384-aHFhM5aT8aFA9xA6PAeaB8dav8Bc3nF2gDv/DnBl7E6Qhutr42h9VSmf7BXTdugy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" integrity="sha384-oQPlepmWw0NnzP5Cy8gA9Q3XOJrv+Os+uVsv93hZChsFr2FeEk2at3W50doSLPzu" crossorigin="anonymous">

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


		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('#date2').trigger('focus');
});
		})
</script>
<br>	<button onclick="goBack()" class="btn btn-default">Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
		</main>
	<?php include 'footer.php';?>
	</div>

</body>
</html>
