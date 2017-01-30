<?php include 'session.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
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

	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>



<!-- Include Date Range Picker -->







		<style>
		.submit_button{
		float:right;
		margin-bottom:-5px;
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
	
	

.hidethis2{
	margin-bottom:2%;
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
		
		<strong><h3>Create Product</h3></strong>
		<div id="confirm-message" style="color:#008000;"></div>
		<div id="confirm-message2" style="color:#FF0000;"></div>	
		<div class="well wb-frmvld" style="margin-right:2%; ">
<form role="form" method="post" action="#" id="vids-search-form">
	
	
		<div class="row">
			<div class="form-group col-xs-6">
				<label for="Description" class="required">Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" style="width:540px" name="Description" id="Description" placeholder="Enter the Description" required="required"/>
			</div>
			
				<div class="form-group col-xs-6">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number" name="Classification_Number" style="width:540px" >
		   <option value="" selected>Select a Classification Number</option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>
	
		</div>
		<div class="row">
		
	

					<div class="form-group col-sm-4">
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type"  id="Classification_Type" placeholder="Enter the Classification Type" disabled="disabled" value="Sodium GBL" />
			</div>
					<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand" />
			</div>
			<div class="form-group col-sm-4">
				<label for="manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer_Name" id="manufacturer" placeholder="Enter the  Manufacturer" />
			</div>
		
			

		</div>
		<div class="row">
				<div class="form-group col-sm-4">
				<label for="CNF_Code">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="CNF_Code" placeholder="Enter the CNF Code" />
			</div>
						<div class="form-group col-sm-4">
				<label for="Comments">Comment</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter the Comment" />
			</div>
						<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number" />
			</div>
	
	
	
		</div>
		
					<div class="row">
			<div class="form-group col-sm-4 submit_button" >
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</div>
		
	</form>
	</div>
		
	<div>
	  <?php include("new-product.php"); ?>
	
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