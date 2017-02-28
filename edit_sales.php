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

</head>
<body class="wide comments example">

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">
	<?php include("save_sales.php"); ?>
	<?php include("fill_sales.php"); ?>
	<div class="container">
		<section style="margin-top: 15px;" class="hidethis">
			<h3>Market Share</h3>
			<div id="confirm-message" class="alert alert-success alert-dismissable" style="display:none; margin-right:18px;" >
			   <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			
			</div>
			<div id="confirm-message2" style="color:#FF0000;"></div>
			<div class="well" style="margin-right:2%;">
				<?php include("sales_form.php"); ?>
			</div>
			<br/>
			<?php echo "<a class=\"btn btn-default\" href=\"sales_details.php?SalesID=" .  $_GET['SalesID'] . "\">Back</a>\n";  ?>
		</section>
	</div>
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
	});
});
</script>	

<script type="text/javascript">
function goBack() {
	window.history.back();
}
</script>

<script>
$(document).ready(function(){
	$('.input-group').find('.fa-calendar').on('click', function(){
		$(this).parent().siblings('#date1').trigger('focus');
	});
});
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
	});
});
</script>	

<script>
$(document).ready(function(){
	$('.input-group').find('.fa-calendar').on('click', function(){
		$(this).parent().siblings('#date2').trigger('focus');
	});
});
</script>

</body>
</html>
