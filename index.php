
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

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>



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
    <li class="active"><a href="index.php">Search Product </a></li>
    <li><a href="home-market.php">Search Market Share</a></li>
    <li><a  href="home-label.php">Search Package Label</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


<section style="margin-top: 15px;" class="hidethis">

<div class="well" style="margin-right:2%;">
<div id="noField"></div>
	<form role="form" method="post" action="#" id="vids-search-form" onsubmit="return myFunct()">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Description">Description</label>
				<input type="text" class="form-control" name="Description" id="Description" placeholder="Enter the Description" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the name of the manufacturer" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number"   name="Classification_Number" style="width:540px">
		   <option value="" selected>Select a Classification Number</option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>
			<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
				 <select class="form-control" id="Classification_Name" placeholder="Select a Classification Name" name="Classification_Name" style="width:540px">
		  <option value="" selected>Select a Classification Name</option>
		<?php include 'List_Classification.php';?>
	
			 </select>
			</div>
				<div class="form-group col-sm-4">
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type" />		
			</div>
			
		
		</div>
		<div class="row">
	
				<div class="form-group col-sm-4">
				<label for="CNF_Code">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="CNF_Code" placeholder="Enter the CNF Code" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number" />
			</div>
			
		<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter the Comments" />
			</div>
		
		</div>
		<div class="row">
			<div class="form-group col-sm-4 submit_button">
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Search</button>
			</div>
		</div>
		
	</form>
	</div>
</section>

<div id="noResult"></div>

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
								      <?php include("search_product1.php"); ?>

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
			var elements = document.getElementByTagName("input").elements;
			for(var i = 0; i < elements.length; i++){
				if(elements[i].value === ""){
					console.log((elements[i].value);
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

</body>
</html>