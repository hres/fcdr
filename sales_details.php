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
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
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
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>

	
<script type="text/javascript">
$(document).ready(function()
{
 $(document).on('submit', '#vids-search-formx', function()
 {

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  :  'search-modal-market.php?SalesID=<?php echo $_GET['SalesID']; ?>',
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



<script type="text/javascript">
$(document).ready(function()
{
 $(document).on('submit', '#vids-search-form222', function()
 {

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'search_package.php',
  data : data,
  success :  function(data) {
                $('.result2').html(data);
				
            },
            error: function (request, status, error) {
                alert(request.responseText);
                //or console.log(request.responseText), or status or error;
            }
  });
  return false;
 });
 
});
</script>



	<script>

$(document).ready(function() {
    var table = $('#example').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
        buttons: [
        	'colvis'
        ]
	} );
} );


	</script>
		<script>

$(document).ready(function() {
    var table = $('#example2').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
        buttons: [
        	'colvis'
        ]
	} );
} );


	</script>
			<script>

$(document).ready(function() {
    var table = $('#example3').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
        buttons: [
        	'colvis'
        ]
	} );
} );


	</script>
	
	
	<script>
	
	$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

  $('a[data-modal-id]').click(function(e) {
    e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
    var modalBox = $(this).attr('data-modal-id');
    $('#'+modalBox).fadeIn($(this).data());
  });  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
  $(".modal-box, .modal-overlay").fadeOut(500, function() {
    $(".modal-overlay").remove();
  });
});
 
$(window).resize(function() {
  $(".modal-box").css({
    top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
    left: ($(window).width() - $(".modal-box").outerWidth()) / 2
  });
});
 
$(window).resize();
 
});
	
	</script>
	
		<script>
	
	function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
    document.getElementById('toHide').style.display = "none";
	
}
	</script>
	<script>
	
	function showDiv2() {
    document.getElementById('toHide').style.display = "inline-block";
	 document.getElementById('welcomeDiv').style.display = "none";
	 document.getElementById('result-modal').style.display = "none";
	 document.getElementById('delete-message').style.display = "none";
	 document.getElementById('relink-message').style.display = "none";
	 
	document.getElementById('toHide').style.display = "inline-block";
	document.getElementById('toHide2').style.display = "inline-block";
	document.getElementById('toHide3').style.display = "inline-block";
}
	</script>
		
	<script>
	
	function showResults() {
    document.getElementById('result-modal').style.display = "block";
}
	</script>	
	
		<script>
	
	function hidedeletemessage() {
    document.getElementById('delete-message').style.display = "inline-block";
}
	</script>
	
	<script>
	
	function hiderelinkmessage() { 
    document.getElementById('relink-message').style.display = "inline-block";
		document.getElementById('welcomeDiv').style.display = "block";
	document.getElementById('toHide').style.display = "none";
	document.getElementById('toHide2').style.display = "none";
	document.getElementById('toHide3').style.display = "none";
}
	</script>
	
		<style>
		#ingredients{
			margin:1%;
		}

	.table1{
		margin-bottom:2%;
		
	}	
	
		.table2{
		margin-top:2%;
		
	}
		.box{
			display:inline-block;
			
		}
		
				.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
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
		
		.btn-default{
			width:150px;
		}
	
	

#hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid red;
    margin: 1em 0;
    padding: 0; 
}


.table, th, td {
    border-collapse: collapse;
}

.box{
	border-width:1px;
	border-color:black;
	 display: inline-block;
    width:45%;
	margin:1%;
	height:100px;
	 overflow: scroll;

}

.table-striped{
	border: 1.5px solid black;
}

.table2 td{
	background-color:#F5F5F5;
	 border: 2px solid #F0F0F0;
	
}
	.table2{
		margin-bottom:2%;
		
	}	
			.table2{
	 border-collapse: separate;
	  border-spacing: 8px;
}
.table2 td, th{
	   border-radius: 3px;
}



.well{
	padding:5px;
	margin-left:2px;
}
.well1{

	margin-left:2px;
}

.tbody1:before {
  
    line-height: 0.5px;
   
}
.div1 {
    float: right;
	display:inline-block;
  
}
.div2 {
    float: left;
  	display:inline-block;

}
 hr {
	 background-color: #ebf0fa; height: 1px; border: 0; }

.well2{
	background-color:  #ebf0fa;
}
.modal-box {

  display: none;

  position: absolute;

  z-index: 1000;

  width: 98%;

  background: white;

  border-bottom: 1px solid #aaa;

  border-radius: 4px;

  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);

  border: 1px solid rgba(0, 0, 0, 0.1);

  background-clip: padding-box;

}

 

.modal-box header,

.modal-box .modal-header {

  padding: 1.25em 1.5em;

  border-bottom: 1px solid #ebf0fa;

}

 

.modal-box header h3,

.modal-box header h4,

.modal-box .modal-header h3,

.modal-box .modal-header h4 { margin: 0; }

 

.modal-box .modal-body { padding: 0.6em 0.4em; }


.modal-box footer,

.modal-box .modal-footer {

  padding: 1em;

  border-top: 1px solid #ebf0fa;

 background-color:  #ebf0fa;
  

  text-align: right;

}

 

.modal-overlay {

  opacity: 0;

  filter: alpha(opacity=0);

  position: absolute;

  top: 0;

  left: 0;

  z-index: 900;

  width: 100%;

  height: 100%;

  background: rgba(0, 0, 0, 0.3) !important;

}
@media (min-width: 32em) {

  .modal-box { width: 61.5%; }

}
	.submit_button{
		
		margin-bottom:-1px;
	}
	
	.wellx{
	background-color:  #ebf0fa;
}
	</style>
</head>
<body class="wide comments example">
<?php include 'header.php';?>


<main role="main" property="mainContentOfPage" class="container">


<div class="well well2" style="">
<h1 property="name" id="wb-cont" style="margin-top:1px;">Market Share</h1>
</div>

<div style="float:right; ">
<?php echo " <a class=\"btn btn-default\" href=edit_sales.php?SalesID=" .  $_GET['SalesID']. ">Edit</a>";  ?>

<a class="js-open-modal btn btn-default btn-large" href="#" data-modal-id="popup" style="width:180px;" id="button" onclick="return hidedeletemessage();">Delete Market Share</a>
<a class="js-open-modal btn btn-default btn-large" href="#" data-modal-id="popup"  id="button" onclick="return hiderelinkmessage();">Re-Link</a>


	</div>	

	
	<div id="popup" class="modal-box"> 

  <header style="background-color:	#ebf0fa  ;">

<div id="delete-message" style="display:none;">
    <h3>Delete Market Share</h3>
</div>
<div id="relink-message" style="display:none;">
    <h3>Re-link Market Share</h3>
</div>
  </header>

  <div class="modal-body" style="background-color:#F8F8F8;">
   <div style="display:inline-block;" id="toHide3"> <strong><h3>Would you like to re-link to a different product instead?</h3></strong></div>
 <div style="display:inline-block;" id="toHide2">

  <input type="button" value="Re-Link" class="btn btn-default" onclick="showDiv()">
</div>
<div style="display:inline-block;" id="toHide">
  <form action="#" method="post" id="vids-search-formxx">

  <input type="submit" value="Delete" class="btn btn-default" name="delete-market-share" >
</form>

</div>

</div>	<br>

<div class="well wellx" style=" display:none; margin-left:0.5%; margin-right:0.5%;" id="welcomeDiv">

	<form role="form" method="post" action="#" id="vids-search-formx">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Description">Description</label>
				<input type="text" class="form-control" name="Description" id="Description" placeholder="Enter the Description of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="manufacturer" placeholder="Enter the name of the manufacturer of the Product" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number" name="Classification_Number" style="width:540px" onkeyup="showHint(this.value)">
		  <option value="" selected="selected"></option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>
			<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
				 <select class="form-control" id="Classification_Name" name="Classification_Name" style="width:540px">
		  <option value="" selected="selected"></option>
		<?php include 'List_Classification.php';?>
	
			 </select>
			</div>
				<div class="form-group col-sm-4">
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type of the Product" />		
			</div>
			
		
		</div>
		<div class="row">
	
				<div class="form-group col-sm-4">
				<label for="CNF_Code">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="CNF_Code" placeholder="Enter the CNF Code of the Product" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster of the Product" />
			</div>
			
		<div class="form-group col-sm-4">
				<label for="Last_Edited_by">Last Edited By</label>
				<input type="text" class="form-control" name="Last_Edited_by" id="Last_Edited_by" placeholder="Enter the Editor Name of the Product" />
			</div>
		
		</div>
		<div class="row">
			<div class="form-group submit_button">
				<button style="margin-top: 28px; float:right; margin-right:17px;" type="submit" class="btn btn-default" onclick="showResults();">Search</button>
			</div>
		</div>
		
	</form>
	</div>


	<div id="result-modal" class="result-modal well" style="display:none; margin-left:0.5%; margin-right:0.5%; height:150px; overflow:auto;"></div>
  <footer style=" background-color:#ebf0fa;">

    <a href="#" class="js-modal-close" onclick="showDiv2()">Close window</a>

  </footer>

</div>
	
	
<?php include("delete-market-share.php"); ?>
	
<table style="width:100%" class="table2">
  <tr >
    <th>Sales UPC</th>
    <th>Dollar Volume</th>
    <th>Kilo Volume</th>
	<th>Sales Year</th>
	<th>Nielsen Category</th>
	<th>Source</th>
  </tr>
<?php include("view_sales2.php"); ?>
</table>	
		

 <div class="well1">
<strong>Sales Description</strong>
<div class="well" style="margin-right:1%;">
  <?php echo " ". $row['Sales_Description'] ."";  ?>
</div>

</div>

<table style="width:100%" class="table2">
  <tr >
    <th>Brand</th>
    <th>Dollar Rank</th>
	<th>Dollar Volume % Change</th>
	<th>Kilo Volume % Change</th>
  </tr>
  <tr>
  <td><?php echo " ". $row['Brand'] ."";  ?></td>
  <td><?php echo " ".number_format($row['Dollar_Rank']) ."";  ?></td>  
  <td><?php echo " ". $row['Dollar_Volume_PerCentage_Change'] ."";  ?></td>
  <td><?php echo " ". $row['Kilo_Volume_Percent_Change'] ."";  ?></td>
  </tr>
</table>

<table style="width:100%" class="table2">
  <tr >
    <th>Average AC Dist</th>
    <th>Average Retail Price</th>
    <th>Dollar Volume Total</th>
	<th>Kilo Volume Total</th>
  </tr>
  <tr>
  <td><?php echo " ". $row['Average_AC_Dist'] ."";  ?></td>
  <td><?php echo " $".$row['Average_Retail_Price']."";  ?></td>
  <td><?php echo " $". number_format($row['Dollar_Volume_Total'],2) ."";  ?></td>  
  <td><?php echo " ". number_format($row['Kilo_Volume_Total'],2) ."";  ?></td>

  </tr>
</table>

<table style="width:100%" class="table2">
  <tr >
    <th>Control Label Flag</th>
    <th>Dollar Share</th>
	<th>Kilo Share</th>
	<th>Cluster Number</th>
	<th>Product Grouping</th>
	<th>Kilo Rank</th>
	
  </tr>
  <tr>
  <td><?php echo " ". $row['Control_Label_Flag'] ."";  ?></td>
  <td><?php echo " ". $row['Dollar_Share'] ."";  ?></td>  
  <td><?php echo " ". $row['Kilo_Share'] ."";  ?></td>
  <td><?php echo " ". $row['Cluster_Number'] ."";  ?></td>
  <td><?php echo " ". $row['Product_Grouping'] ."";  ?></td>
  <td><?php echo " ". $row['Kilo_Rank'] ."";  ?></td>
  </tr>
</table>
 <div class="well1">
<strong>Comments</strong>
<div class="well" style="margin-right:1%;">
  <?php echo " ". $row['Comments'] ."";  ?>
</div>

</div>

	
 

	
<!--h3-section-start-->

<!--h3-section-start-->

<!--h3-section-start-->

<!--h3-section-start-->

		
<table style="width:100%" class="table2">
  <tr>
 
    <th>Collection Date</th>
    <th>Creation Date</th>
	<th>Last Edit</th>
	<th>Edited by</th>

  </tr>
  <tr>

    <td><?php echo " ". $row['Collection_Date'] ."";  ?> </td>
    <td><?php echo " ". $row['Create_Date'] ."";  ?> </td>
	<td><?php echo " ". $row['Last_Edit_Date'] ."";  ?> </td>
	<td><?php echo " ". $row['Last_Edited_by'] ."";  ?> </td>
  </tr>
</table>
<div class="div2">


	 <?php echo " <a class=\"btn btn-default\" href=view_product.php?ProductID=" . $row['ProductIDS'] . ">Back</a>";  ?>
</div>	


		




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
</body>
</html>