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
<?php include 'Check_SalesID.php';?>
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
<?php include("fill_sales.php"); ?>
<main role="main" property="mainContentOfPage" class="container">
	
	<?php
if (isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
	if (count($sanitation_errors) == 0) {
		include("save_sales.php");
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
	
	<div class="container">
		<section style="margin-top: 15px;" class="hidethis">
			<h3>Market Share</h3>
			<div id="confirm-message"  style="display:none; color:green; margin-right:20px;" >
			
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
