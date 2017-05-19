
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
 <?php $sanitation_errors = array();?>
<?php include 'validate-sample-design-report.php';?>

<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">

<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">
	</script>  

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js">
	</script>



<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />



<script type="text/javascript" src="js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="css/bootstrap-iso.css" />

	 



<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>

	<style type="text/css">
#toHide{
	display:none;
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

.well{
	background-color:  #ebf0fa;


}

		.button1{
			margin-left:84.5%;
			
		}
		.btn-default{
			width:150px;
		}
				.submit_button{
		float:right;
		margin-bottom:-5px;
	}	
</style>
</head>
<body class="wide comments example">

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">

	
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li class="active"><a href="sample-designreport.php">Sample Design Report</a></li>
    <li><a href="nutrient-analysis-report.php">Nutrient Analysis Report</a></li>

  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


<section style="margin-top: 15px;" class="hidethis">

    <?php
if (isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
	if (count($sanitation_errors) == 0) {

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


<details style="margin-right:2%;">
  <summary><h3>Design Report</h3></summary>
  <h4>Leave the search fields blank for a full report</h4>
</details>

<div class="well" style="margin-right:2%;">

	<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="vids-search-form1" onsubmit ="showDiv()">

	
		<div class="row">

				   <div class="form-group col-sm-4" >
      <label for="date2">
     Collection Date (YYYY-MM-DD) <br>From
      </label>
      <div class="">
       <div class="input-group">
      
        <input class="form-control" id="date2" name="date2" placeholder="YYYY/MM/DD" type="text" value=""/>
 <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>      
	  </div>
      </div>
     </div>
	   <div class="form-group col-sm-4">
      <label for="date1">
     Collection Date (YYYY-MM-DD)<br> To
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
	<label for="Sales_Year" name="Year_Recorded">Sales Year<br><br></label>
      <select class="form-control" id="Sales_Year" name="Sales_Year">
	    <option value="">Select a year</option>
	
<?php include 'connection.php';?>	
		<?php

		$query = "select distinct Sales_Year from $dbname.Sales";
			$result = mysqli_query($conn,$query);

if (!$result) {
    echo "ERRORS";
}
	
	while($row = $result->fetch_assoc())  {
		echo "<option value=\"" .$row['Sales_Year'] . "\">" .$row['Sales_Year'] . "</option>";
	 }
		
	$conn->close();
?>	
      
      </select></div>

		</div>
		
		<div class="row">
			  			<div class="form-group col-sm-4">
				<label for="Sales_UPC">Sales UPC Contains</label>
				<input type="text" class="form-control" name="Sales_UPC" id="Sales_UPC" placeholder="Enter a Sales UPC" />
			</div>

		
			<div class="form-group col-sm-4">
				<label for="Sales_Description">Sales Description Contains</label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Sales Description" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Description">Product Description Contains</label>
				<input type="text" class="form-control" name="Description" id="Description" placeholder="Enter the Product Description" />
			</div>
		
		</div>
<!-- New fields added start-->
		<div class="row">
			  			<div class="form-group col-sm-4">
				<label for="Brand">Product Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Product's Brand'" />
			</div>

		
			<div class="form-group col-sm-4">
				<label for="Manufacturer">Product Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the Product's Manufacturer'" />
			</div>
					<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
			
    <select class="form-control" id="Classification_Name" name="Classification_Name">
		   <option value="" selected>Select a Classification Name</option>
	<?php include 'List_Classification.php';?>
		
			 </select>
			</div>
		
		</div>

		<div class="row">
					<div class="form-group col-md-6">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number" name="Classification_Number[]" style="width:580px" multiple>
		   <option value="" selected>Select a Classification Number</option>
		<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>



							<div class="form-group col-md-6">
				<label for="Nielsen_Category">Nielsen Category</label>
			
    <select class="form-control" id="Nielsen_Category" name="Nielsen_Category[]" style="width:580px" multiple>
		   <option value="" selected>Select a Nielsen Category</option>
	<?php include 'Nielsen_List.php';?>
		
			 </select>
			</div>	
		
		</div>

		
<!-- </div> New fields added end-->

					<div class="row">
					<input type="hidden" name="token" value = "<?php echo $token; ?>"/>
			<div class="form-group col-sm-4 submit_button" >
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Generate Report</button>
			</div>
		</div>
	</form>
	</div>

<div class="well" style="margin-right:2%; overflow:auto;" id="toHide">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
<thead> <tr>
        <th>Description (Product)</th>
		<th>Manufacturer (Product)</th>
		<th>Brand (Product)</th>
		<th>GBL Classification Number (Product)</th>
		<th>GBL Classification Name (Product)</th>
		<th>Cluster Number (Product)</th>
        <th>UPC </th>
		<th>Description (Market Share)</th>
		<th>Brand (Market Share)</th>
		<th>Manufacturer (Market Share)</th>
        <th>Dollar Rank</th>
        <th>Dollar Volume</th>
        <th>Dollar Share</th>
        <th>Dollar Volume % Change</th>
        <th>Kilo Volume</th>
        <th>Kilo Share</th>
        <th>Kilo Volume % Change</th>
        <th>Average AC Dist</th>
        <th>Average Retail Price</th>
        <th>Source</th>
        <th>Nielsen Category</th> 
        <th>Collection Date</th>
        <th>Sales Year</th>
        <th>Control Label?</th>
        <th>Kilo Volume Total</th>   
		<th>Kilo Volume Rank</th>  
		<th>Dollar Volume Total</th>       
		<th>Cluster Number (Market Share)</th>     
		<th>Product Grouping (Market Share)</th>       
		<th>Classification Number (Market Share)</th>
    </tr></thead> <tbody>



       <?php
if(isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
	if (count($sanitation_errors) == 0) {
		include("second_report.php");
	} 
}
?>	    

           

        </tbody>
    </table>	
</div>
	

</section>

    <div id="menu1" class="tab-pane fade">

  </div>
    <div id="menu2" class="tab-pane fade">
 

  </div>
    <div >
	</div>
  </div>
</div>
		
		</main>
<?php include 'footer.php';?>


	<script type="text/javascript">
				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-365466-5']);
				  _gaq.push(['_trackPageview']);

				  (function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();
	</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

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



	<script type="text/javascript" class="init">




$(document).ready(function() {
	$('#example').DataTable( {
   "columnDefs":[
     {
       "visible": false,
       "target": -1
     }
   ],
		dom: 'Bfrtip',		
	"lengthChange": true,
        "iDisplayLength": 25,
    "bFilter": false,
    
		buttons: [
			'copy', 'csv', 'excel',  'print'
		]
	} );
} );



	</script>



</body>
</html>