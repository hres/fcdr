
<?php


 include 'session.php';


  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);

	if(isset($_POST['search1'])){
			 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
				  header ('Location: error404.php');
			 }
	}
     $_SESSION['token'] = bin2hex(random_bytes(32));
	$token = $_SESSION['token'];

 ?>
<?php $sanitation_errors = array();?>
<?php include 'validate-search.php';?>
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

  <script type="text/javascript" src="validate.js"></script>
  



	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">

<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<![endif]-->

	<style type="text/css" class="init">
	
	</style>



<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" integrity="sha384-MI32KR77SgI9QAPUs+6R7leEOwtop70UsjEtFEezfKnMjXWx15NENsZpfDgq8m8S" crossorigin="anonymous">


<script type="text/javascript" src="js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="css/bootstrap-iso.css" />




<style type="text/css">
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

.well{
	


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
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">

    <?php
if (isset($_POST['search1']) && $_SERVER["REQUEST_METHOD"] == "POST") {
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
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li ><a  href="index.php">Search Product </a></li>
    <li ><a  href="home-market.php">Search Market Share</a></li>
    <li><a  href="home-label.php">Search Package Label</a></li>
    <li class="active"> <a href="search.php">Search All</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane">


		
	  </div> 
    <div id="menu1" class="tab-pane">

</div>
  
    <div id="menu2" class="tab-pane ">
 

  </div>
  <div id="menu3" class= "tab-pane fade in active">
  
  
  <section style="margin-top: 15px;">
<div  style="margin-right:2%;">

	<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="vids-search-form1">

<div class="well">	
<div class="row">

			<div class="form-group col-sm-4">
				<label for="Description">Product Description</label>
				<input type="text" class="form-control" name="Description" id="Description" placeholder="Enter The Description of the Product" />
			</div>
			<div class="form-group col-sm-4">
                <label for="Manufacturer">Manufacturer (Product)</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the Manufacturer of the Product" />
			</div>
		
			<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand of the Product" />
			</div>
						<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
				 <select class="form-control" id="Classification_Name"  name="Classification_Name" style="width:540px">
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


			<div class="form-group col-sm-4">
				<label for="CNF_Code">CNF Code</label>
				<input type="number" class="form-control" step="any" name="CNF_Code" id="CNF_Code" placeholder="Enter The CNF Code" />
			</div>
				 				<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="number" step="any" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number" />
			</div>
						<div class="form-group col-sm-4">
				<label for="Comments">Product Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter the Comments of the Product" />
			</div>


</div>
</div>

<div class="well market" style="background-color:  #ebf0fa;">
<div class="row" >
			<div class="form-group col-sm-4">
				<label for="Sales_UPC">Sales UPC</label>
				<input type="number" class="form-control" name="Sales_UPC" id="Sales_UPC" placeholder="Enter the Sales UPC" />
			</div>

				<div class="form-group col-sm-4">
				<label for="Sales_Description">Sales Description</label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Sales Description" />
			</div>
			            <div class="form-group col-sm-4">
	<label for="Sales_Year" name="Year_Recorded">Sales Year</label>
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

                        <div class="form-group col-sm-4">
	<label for="Nielsen_Category" name="Year_Recorded">Nielsen Category</label>
      <select class="form-control" id="Nielsen_Category" name="Nielsen_Category">
		  <option value="" selected>Select a Nielsen Category</option>
		<?php include 'Nielsen_List.php';?>
	
			 </select></div>
		
			<div class="form-group col-sm-4">
				<label for="Sales_Source">Sales Source</label>
				<input type="text" class="form-control" name="Sales_Source" id="Sales_Source" placeholder="Enter the Source of the Sales" />
			</div>
			<div class="form-group col-sm-4">
      <label for="dateFrom">
     Collection Date Market Share From
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control" id="dateFrom" name="dateFrom" placeholder="YYYY/MM/DD" type="text" value=""/>
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
</div>

<di class="row"> 
				   <div class="form-group col-sm-4">
      <label for="dateTo">
   Collection Date Market Share To
      </label>
      <div class="">
       <div class="input-group">
      
        <input class="form-control" id="dateTo" name="dateTo" placeholder="YYYY/MM/DD" type="text" value=""/>
 <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
</div>
			<div class="form-group col-sm-4">
				<label for="Dollar_Rank_From">Dollar Rank From</label>
				<input type="number" step="any" class="form-control" name="Dollar_Rank_From" id="Dollar_Rank_From" placeholder="Enter The Dollar Rank" />
			</div>

			<div class="form-group col-sm-4">
				<label for="Dollar_Rank_To">Dollar Rank to</label>
				<input type="number" step="any" class="form-control" name="Dollar_Rank_To" id="Dollar_Rank_To" placeholder="Enter The Dollar Rank" />
			</div>

				<div class="form-group col-sm-4">
				<label for="Sales_Comments">Market Share Comments</label>
				<input type="text" class="form-control" name="Sales_Comments" id="Sales_Comments" placeholder="Enter the Comments of the Market Share" />
			</div>

		
</div>
		

		</div>
<div class="well" style="background-color:  	hsl(60, 100%, 98%);">	
<div class="row">

				<div class="form-group col-sm-4">
				<label for="Sales_Description">Label UPC</label>
				<input type="text" class="form-control" name="Label_UPC" id="Label_UPC" placeholder="Enter the Label UPC of the Label"/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Label_Description">Label Description</label>
				<input type="text" class="form-control" name="Label_Description" id="Label_Description" placeholder="Enter The Label Description" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Label_Source">Label Source</label>
				<input type="text" class="form-control" name="Label_Source" id="Label_Source" placeholder="Enter the Source of the Label" />
			</div>
				 			<div class="form-group col-sm-4">
				<label for="Ingredients">Ingredients</label>
				<input type="text" class="form-control" name="Ingredients" id="Ingredients" placeholder="Enter The Ingredients of the Label" />
			</div>

				<div class="form-group col-sm-4">
      <label for="date1">
     Collection Date Label From
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
		
				   <div class="form-group col-sm-4" >
      <label for="date2">
   Collection Date Label To
      </label>

       <div class="input-group">
      
        <input class="form-control" id="date2" name="date2" placeholder="YYYY/MM/DD" type="text" value=""/>
 <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>      

      </div>
     </div>
	 			<div class="form-group col-sm-4">
				<label for="Label_Comments">Label Comments</label>
				<input type="text" class="form-control" name="Label_Comments" id="Label_Comments" placeholder="Enter The Comments of the Label" />
			</div>
			<input type="hidden" name="token" value = "<?php echo $token; ?>"/>
						<div class="form-group  "> 
				<button style="margin-top: 28px; margin-right:20px; float:right;" type="submit" class="btn btn-default" name="search1">Search</button>
			</div>
</div>

</div>


		</div>


	</form>

	</div>
  <div id="noResult" style="color:#FF0000;"></div>
<div class="well" style="margin-right:2%; overflow:auto;" id="toHide">
<table id="example2" class="display" cellspacing="0" width="100%">


	<thead>
            <tr>
                <th>Product Description</th>
				<th>Product Brand</th>
				<th>Product Manufacturer</th>
                <th>Classification Name</th>
				<th>Classification Nunber</th>
				<th>Classification Type</th>
                <th>CNF Code</th>
                <th>Cluster Number</th>
				<th>Comments (Product)</th>
                <th>Market Share UPC</th>
                <th>Sales Description</th>
                <th>Sales Year</th>
                <th>Nielsen Category</th>
               <th>Market Share Source</th>
                <th>Market Share Collection Date</th>
				<th>Dollar Rank</th>
				<th>Comments (Market Share)</th>
                <th>Label UPC</th>
                <th>Label Description</th>
				<th>Label Source</th> 
                <th>Ingredients</th>
                <th>Label Collection Date</th>
				<th>Comments (Label)</th>

            </tr>
        </thead>
		<tbody>

    <?php
if (isset($_POST['search1'])) {
	if (count($sanitation_errors) == 0) {
		include("search_all.php");
	} 
}
?>	   


           

        </tbody>
    </table>	
</div>

</section>  
  </div>
</div>
<!--
		<form id="clearbd">

				<button style=" float:right;" type="submit" class="btn btn-default" name="clearbd">Clear DB</button>
</form>  -->

		</main>
<?php include 'footer.php';?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js" integrity="sha384-aHFhM5aT8aFA9xA6PAeaB8dav8Bc3nF2gDv/DnBl7E6Qhutr42h9VSmf7BXTdugy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" integrity="sha384-oQPlepmWw0NnzP5Cy8gA9Q3XOJrv+Os+uVsv93hZChsFr2FeEk2at3W50doSLPzu" crossorigin="anonymous">

<script type="text/javascript" src="js/jquery.validate.min.js"></script>

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
		});
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
		var date_input=$('input[name="dateFrom"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		});
	})
</script>



		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('#dateFrom').trigger('focus');
});
		})
</script>






	<script>
	$(document).ready(function(){
		var date_input=$('input[name="dateTo"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy/mm/dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		});
	})
</script>



		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('#dateTo').trigger('focus');
});
		})
</script>
		<script>

$(document).ready(function() {
    var table = $('#example2').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
		  stateSave: true,
        buttons: [
        	'colvis'
        ]
	} );
} );


	</script>
<?php include 'List_Classification_Object.php'?>

</body>
</html>