
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
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php include 'header.php';?>


<main role="main" property="mainContentOfPage" class="container">


<details style="margin-right:2%;">
  <summary><h3>Design Report</h3></summary>
  <h4>Leave the search fields blank for a full report</h4>
</details>

<div class="well" style="margin-right:2%;">

	<form role="form" method="post" action="#" id="vids-search-form1" onsubmit ="showDiv()">

	
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
	  			<div class="form-group col-sm-4">
				<label for="Sales_UPC">Sales UPC Contains<br><br></label>
				<input type="number" class="form-control" name="Sales_UPC" id="Sales_UPC" placeholder="Enter a Sales UPC" />
			</div>
		</div>
		
		<div class="row">
		
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
				<label for="Sales_Description"><br>Sales Description Contains</label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Sales Description" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Description"><br>Product Description Contains</label>
				<input type="text" class="form-control" name="Description" id="Description" placeholder="Enter the Product Description" />
			</div>
		
		</div>
					<div class="row">
			<div class="form-group col-sm-4 submit_button" >
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</div>
	</form>
	</div>

<div class="well" style="margin-right:2%; overflow:auto;" id="toHide">
<table id="example" class="display nowrap" cellspacing="0" width="100%">
<thead> <tr>
        <th>Description (Product)</th>
        <th>Market Share Year</th>
        <th>Market Share Collection Date</th>
        <th>Market Share UPC</th>
        <th>Description (Market Share)</th>
        <th>Product Grouping</th>
        <th>Manufacturer</th>
        <th>Brand</th>
        <th>Nielsen Category</th>
        <th>GBL Classification Number</th>
        <th>Custer Number</th>
        <th>Control Label?</th>
        <th>Kilo<br>Share</th>
        <th>Kilo<br> Volume</th>
        <th>Kilo<br> Volume<br> % <br>Change</th>
        <th>Kilo <br>Volume <br>Rank</th>
        <th>Kilo<br>Volume <br>Total</th>
        <th>Dollar <br>Share</th>
        <th>Dollar<br> Volume</th>
        <th>Dollar<br> Volume <br>Total</th> 
        <th>Average <br>AC <br>Dist</th>
        <th>Average<br> Retail <br>Price</th>
        <th>Comments<br> (Market Share)</th>
        <th>Comments <br>(Product)</th>                     
    </tr></thead> <tbody>

<?php include 'second_report.php';?>
       

           

        </tbody>
    </table>	
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