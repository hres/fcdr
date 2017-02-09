<?php include '../session.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html lang="en">
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

	<link href="../theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="../theme-gcwu-fegc/css/theme.min.css">




<!--<![endif]-->
<!--[if lt IE 9]>
<link href="/theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="/theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->



<!--<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>-->

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso 
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />-->

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />



<script type="text/javascript" src="/js/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="../css/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)
<link rel="stylesheet" href="/css/font-awesome.min.css" />-->



<noscript><link rel="stylesheet" href="../wet-boew/css/noscript.min.css" /></noscript>



<!-- Include Date Range Picker -->
	
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
.well{
	background-color:  #ebf0fa;
}
	
	</style>
</head>
<body class="wide comments example">
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php include '../header.php';?>

<main role="main" property="mainContentOfPage" class="container">
		
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li ><a  href="../index.php">Search Product </a></li>
    <li  class="active"><a  href="home-market.php">Search Market Share</a></li>
    <li><a  href="label/home-label.php">Search Package Label</a></li>
	  <li><a  href="../search.php">Search All</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane">


		
	  </div> 
    <div id="menu1" class="tab-pane  fade in active">


<section style="margin-top: 15px;">
<div class="well" style="margin-right:2%;">

	<form role="form" method="post" action="#" id="vids-search-form1">

	
		<div class="row">

			<div class="form-group col-sm-4">
				<label for="Sales_UPC">Sales UPC</label>
				<input type="text" class="form-control" name="Sales_UPC" id="Sales_UPC" placeholder="Enter The Sales UPC code" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Sales_Description">Sales Description</label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Sales Description" />
			</div>
		
			<div class="form-group col-sm-4">
				<label for="Source">Source</label>
				<input type="text" class="form-control" name="Source" id="Source" placeholder="Enter the Source" />
			</div>
		</div>
		
		<div class="row">
		<div class="form-group col-sm-4">
	<label for="Sales_Year" name="Year_Recorded">Sales Year</label>
      <select class="form-control" id="Sales_Year" name="Sales_Year">
	    <option value="">Select a year</option>
	
<?php include '../connection.php';?>	
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
				<label for="Nielsen_Category">Nielsen Category</label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category" placeholder="Enter the Neilson Category" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter the Comments" />
			</div>
		
		</div>
				<div class="row">
	   <div class="form-group col-sm-4">
      <label for="date1">
     Collection Date (YYYY-MM-DD)<br> From
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
     Collection Date (YYYY-MM-DD) <br>To
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
			<div class="form-group col-sm-4 "> <br>
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search1">Search</button>
			</div>
		</div>
	</form>
	</div>
</section>  

  <div id="noResult" style="color:#FF0000;"></div>


<div class="well" style="margin-right:2%; overflow:auto;">

<table id="example2" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Sales UPC</th>
							<th>Sales Description</th>
							<th>Source</th>
							<th>Sales Year</th>
							<th>Nielsen Category</th>
							<th>Dollar Volume</th>
							<th>Kilo Volume</th>					
							
						</tr>
					</thead>
		
					<tbody>

					 <?php include("sales_search.php"); ?>
					</tbody>
				</table>
</div>
  </div>
    <div id="menu2" class="tab-pane ">
 

  </div>
  
  </div>
</div>
		<form id="clearbd">

				<button style=" float:right;" type="submit" class="btn btn-default" name="clearbd">Clear DB</button>
</form> 

		</main>
<?php include '../footer.php';?>
	<script type="text/javascript">
$(document).ready(function()
{
 $(document).on('submit', '#clearbd', function()
 {

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  :  '/cleardb.php',
  data : data,
  success :  function(data) {
                $('.result-modal').html(data);
				
            },
            error: function (request, status, error) {
                alert(error.responseText);
                //or console.log(request.responseText), or status or error;
            }
  });
  return false;
 });
 
});
</script>
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
</body>
</html>
