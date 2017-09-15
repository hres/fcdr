
<?php
// setcookie("name", "romario",time()+10);
//  echo $_COOKIE['name'] ;
 include 'session.php';


  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);

	// if(isset($_POST['search'])){
	// 		 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
	// 			  header ('Location: error404.php');
	// 		 }
	// }
    //  $_SESSION['token'] = bin2hex(random_bytes(32));
	// $token = $_SESSION['token'];

 ?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
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


	 



<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>




<script>
function mainInfo(str) {
	
  if (str=="") {
   
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
		//alert(this.responseText);   onchange="mainInfo(this.value);"
	 $("#Classification_Name").val(this.responseText);
    }
  }
  xmlhttp.open("GET","getclass.php?q="+str,true);
  xmlhttp.send();
}
</script>



	<script>

$(document).ready(function() {
    var table = $('#example').DataTable( {
		
		//  "processing": true,
        //  "serverSide": true,
        //  "ajax":{
        //     url :"search_pagination.php", // json datasource
        //     type: "post",  // type of method  ,GET/POST/DELETE

        //   },
		//   "columns": [
		// 	{ "data": "Description" },
		// 	{ "data": "Brand"},
		// 	{ "data": "Manufacturer"},
		// 	{ "data": "Classification_Number"},
		// 	{ "data": "Classification_Name"},
		// 	{ "data": "Classification_Type"},	  
		// 	{ "data": "CNF_CODE"},
		// 	{ "data": "Cluster_Number"}

		//   ], 
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

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">

	
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li class="active"><a href="index.php">Search Product 1</a></li>
    <li><a href="home-market.php">Search Market Share</a></li>
    <li><a  href="home-label.php">Search Package Label</a></li>
	  <li><a  href="search.php">Search All</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


<section style="margin-top: 15px;" class="hidethis">

<div class="well" style="margin-right:2%;">
	<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="vids-search-form">
	
	

		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
				 <select class="form-control" id="Classification_Name" placeholder="Select a Classification Name" name="Classification_Name" style="width:540px">
		  <option value="" selected>Select a Classification Name</option>
		<?php include 'List_Classification.php';?>
	
			 </select>
			</div>
		<div class="form-group col-sm-4">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number"   name="Classification_Number" style="width:540px">
		   <option value="" selected>Select a Classification Number</option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>

				<div class="form-group col-sm-4">
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type" />		
			</div>
			
		
		</div>

				<div class="row">

			<div class="form-group col-sm-4">
				<label for="Manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the name of the manufacturer" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand" />
			</div>	
							<div class="form-group col-sm-4">
				<label for="CNF_Code">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="CNF_Code" placeholder="Enter the CNF Code" />
			</div>			



		</div>
		<div class="row">
	

				<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Description">Description</label>
				<input type="text" class="form-control" name="Description" id="Description" placeholder="Enter the Description"/>
			</div>				
		<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter the Comments" />
			</div>

		</div>
		<div class="row">
		<input type="hidden" name="token" value = "<?php echo $token; ?>"/>
			<div class="form-group col-sm-4">
							<label for="Restaurant_Type">Restaurant Type</label>
				 <select class="form-control" id="Restaurant_Type" placeholder="Select a Restaurant Type" name="Restaurant_Type">

			<option value="" selected>Select a Restaurant Type</option>
			<option value="Caterer" >Caterer</option>
			<option value="Family" slected>Family</option>
			<option value="Fine Dining" slected>Fine Dining</option>
			<option value="Food Service Distributor" slected>Food Service Distributor</option>
			<option value="Food Service Manufacturer" slected>Food Service Manufacturer</option>
			<option value="Home Meal Replacement" slected>Home Meal Replacement</option>
			<option value="Institutional Food Service" slected>Institutional Service</option>
			<option value="Quick Service" slected>Quick Service</option>
			 </select>
			</div>
						<div class="form-group col-sm-4">
							<label for="Type">Type</label>
				 <select class="form-control" id="Type"  name="Type">

			<option value="" selected>Select a Type</option>
			  <option value="Retail" >Retail</option>
			<option value="Food Service" slected>Food Service</option>
			 </select>
			</div>
			<div class="form-group col-sm-4 submit_button" >
			    <button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Search</button>
			</div>
		</div>
		
	</form>
	</div>
</section>
<div id="noResult" style="color:#FF0000;"></div>
<div class="well" style="margin-right:2%; overflow:auto;">
<table id="example" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Description</th>
							<th>Brand</th>
							<th>Manufacturer</th>	
							<th>Classification Number</th>
							<th>Classification Name</th>
							<th>Classification Type</th>														
							<th>CNF Code</th>							
							<th>Cluster Number</th>
							
							
						</tr>
					</thead>
			
					<tbody > 
					<?php	include 'search_product1.php'; ?>		     

					</tbody>
				</table>
	</div>		
	  </div> 
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

	<script>

		function myFunct(){
			console.log("in console");
			var flag = false;
			var elements = document.getElementsByTagName("input").elements;
			for(var i = 0; i < elements.length; i++){
				console.log(elements[i].value)
				if(elements[i].value === ""){
					console.log(elements[i].value);
						continue;
				}else{
					flag = true;
					break;
				}
			}
			if(!flag) {
				document.getElementById("noResult").innerHTML = "<h3>Must Enter at least one field</h3>";
				
				return false;
			}
		}



	</script>

<?php include 'List_Classification_Object.php';?>

</body>
</html>