
<?php


 include 'session.php';


  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);

	if(isset($_POST['search2'])){
			 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
				  header ('Location: error404.php');
			 }
	}
     $_SESSION['token'] = bin2hex(random_bytes(32));
	$token = $_SESSION['token'];

 ?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" integrity="sha384-YcTv91pbdpZ4It88TK5bVHIGTuPqoSi0CpPF9UA9eRicGHEJ3lpQZajpytN4rLkp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.3.2/css/colReorder.dataTables.min.css" integrity="sha384-pZdQdq24rAs5sZ1c0Czd9CB0JqVM3x+QErFeTVuevibVoB+qT9jg5kGWOIwvnCjr" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" integrity="sha384-QDuPH5mj+mpSlxOMdoDh7QVS2FWsvwk7xLb8FlISOJG5V75v8rmHEjn65broLs2a" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" integrity="sha384-o6l2EXLcx4A+q7ls2O2OP2Lb2W7iBgOsYvuuRI6G+Efbjbk6J4xbirJpHZZoHbfs" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" integrity="sha384-89aj/hOsfOyfD0Ll+7f2dobA15hDyiNb8m1dJ+rJuqgrGR+PVqNU8pybx4pbF3Cc" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/colreorder/1.3.2/js/dataTables.colReorder.min.js" integrity="sha384-8sKIxe0MxXanTEDqgeFTtwr/DWqio79X5LQLGmQfdZ3ZZdNkmUB+ss+x24nrzOfZ" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js" integrity="sha384-cC2sz8BWN0I1n3XbG2KKhjJF31hrA0GPkFXqDm8DLKKUYhqOM2Aev2kQ0WVInKti" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.colVis.min.js" integrity="sha384-TdIaUKl/EwwwHwa3nhI1Hczghkj7f81+nTuSFG8+bS7qwPZzihqHDlRkY4K4TaBq" crossorigin="anonymous"></script>


	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">


<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" integrity="sha384-MI32KR77SgI9QAPUs+6R7leEOwtop70UsjEtFEezfKnMjXWx15NENsZpfDgq8m8S" crossorigin="anonymous">



<script type="text/javascript" src="js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="css/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)
<link rel="stylesheet" href="css/font-awesome.min.css" />-->


<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->


			<script>

$(document).ready(function() {
    var table = $('#example3').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
		  stateSave: true,
        buttons: [
        	'colvis'
        ]
	} );
} );


	</script>
	

	
	
		<style>
		
		.well{
		
    background-color:  	hsl(60, 100%, 98%); 
		}
		
		.mainsearch{
			border-style: solid;
			border-color:#F0F0F0 ;
			
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

		
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li ><a  href="index.php">Search Product </a></li>
    <li ><a  href="home-market.php">Search Market Share</a></li>
    <li class="active"><a  href="home-label.php">Search Package Label</a></li>
		  <li><a  href="search.php">Search All</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane ">
		
	  </div> 
    <div id="menu1" class="tab-pane ">

  </div>
    <div id="menu2" class="tab-pane fade in active">
 

<section style="margin-top: 15px;">
<div class="well hidethis2" style="margin-right:2%;">

	<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="vids-search-form2">

	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="UPC_Label">Label UPC</label>
				<input type="text" class="form-control" name="Label_UPC" id="UPC_Label" placeholder="Enter Label UPC code" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Label_Description">Label Description</label>
				<input type="text" class="form-control" name="Label_Description" id="Label_Description" placeholder="Enter the Description" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Source">Source</label>
				<input type="text" class="form-control" name="Source" id="Source" placeholder="Enter the Source" />
			</div>

		</div>
		<div class="row">
		
		
			<div class="form-group col-sm-4">
			<br>
				<label for="Ingredients">Ingredients</label>
				<input type="text" class="form-control" name="Ingredients" id="Ingredients" placeholder="Enter the Ingredients" />
			</div>
				   <div class="form-group col-sm-4">
      <label for="datex">
     Collection Date (YYYY-MM-DD) <br> From
      </label>
      <div class="">
       <div class="input-group">
        
        <input class="form-control date1" id="datex" name="date1" placeholder="YYYY/MM/DD" type="text" value=""/>
		<div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
       </div>
      </div>
     </div>
		
				   <div class="form-group col-sm-4">
      <label for="date">
     Collection Date (YYYY-MM-DD)<br> To 
      </label>
      <div class="">
       <div class="input-group">
        
        <input class="form-control date2" id="date" name="date2" placeholder="YYYY/MM/DD" type="text" value=""/>
       <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
     </div>
	 		<input type="hidden" name="token" value = "<?php echo $token; ?>"/>

			<div class="form-group col-sm-4 submit_button">
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search2">Search</button>
			</div>
		</div>
		
	</form>
</div>	
</section>  
<div id="noResult" style="color:#FF0000;"></div>
<div class="well" style="margin-right:2%; overflow:auto;">

<table id="example3" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>UPC Label</th>
							<th>Label Description</th>
							<th>Source</th>
							<th>Collection Date</th>							
							<th>Created Date</th>
							<th>Last Edited</th>
							<th>Edited By</th>
						
							
						</tr>
					</thead>
			
					<tbody >

					<?php include("search_package.php"); ?>
					</tbody>
</table>
</div>
  </div>
    <div >
	</div>
  </div>
</div>
	
		</main>
<?php include 'footer.php';?>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js" integrity="sha384-aHFhM5aT8aFA9xA6PAeaB8dav8Bc3nF2gDv/DnBl7E6Qhutr42h9VSmf7BXTdugy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" integrity="sha384-oQPlepmWw0NnzP5Cy8gA9Q3XOJrv+Os+uVsv93hZChsFr2FeEk2at3W50doSLPzu" crossorigin="anonymous">

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
    $(this).parent().siblings('.date1').trigger('focus');
});
		})
</script>


		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('.date2').trigger('focus');
});
		})
</script>
</body>
</html>