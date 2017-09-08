<?php include 'session.php';?>
<?php include 'Check_ProductID.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>

	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
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
function show(){
		 document.getElementById('hideTable').style.display = 'block';

}
</script>


	<script>
$(document).ready(function() {
    var table = $('#example4').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
		
		  bFilter: false, 
		  stateSave: true,
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
		
		  bFilter: false, 
		  stateSave: true,
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
	

		<style>
.market_class{
		background-color:  #ebf0fa;
}
.label_class{
	background-color:hsl(60, 100%, 98%);
}
		
		.button1{
			margin-left:84.5%;
			
		}
		.btn-default{
			width:150px;
		}

	


.form-control{
	width:360px;
	
}
	#editfooter{
		display:inline-block;
	}
	.editfooter{
		margin-left:9%;
		margin-right:9%;
	}
	


	.table2{
		margin-bottom:2%;
		
	}	
			.table2{
	 border-collapse: separate;
	  border-spacing: 8px;
}
.table2 td{
	background-color:#F5F5F5;
	 border: 2px solid #F0F0F0;
	
}
.table2 td, th{
	   border-radius: 3px;
}

.well{
	padding:5px;
}
.data12{
	
	    display: inline-block;
	
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

  border-bottom: 1px solid #ddd;

}

 

.modal-box header h3,

.modal-box header h4,

.modal-box .modal-header h3,

.modal-box .modal-header h4 { margin: 0; }

 

.modal-box .modal-body { padding: 2em 1.5em; }


.modal-box footer,

.modal-box .modal-footer {

  padding: 1em;

  border-top: 1px solid #ddd;

  background: rgba(0, 0, 0, 0.02);

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




td, th {
    padding: 9px;
    border: none;
}
th{
    text-align: left;

}
tr:nth-child(odd){
    background-color: #f0f5f5;
}


th:last-child, td:last-child{
border-right: 1px solid lightgray;
border-left:1px solid lightgray;

}
th:first-child, td:first-child{
border-left: 1px solid lightgray;
}
table{
    border-collapse: collapse;
}
tr:last-child, th{
  border-bottom:   1px solid lightgray;
}
/*td:last-child{
    text-align: right;
}*/
 tr:first-child{
	 border-top: 1px solid lightgray;

 }


	</style>
</head>
<body class="wide comments example">

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">


	<!--	<div class="fw-body"> -->
		<!--	<div class="content">-->
		

<p style="color:#FF0000"><?php include 'last_product.php';?></p>
<div id="deletemess"> </div>
<div >

<div class="row">
<div class=" col-md-6" style="float:left">
<h2 style="margin-top:2px;"> Product </h2>
</div>

<div class=" col-md-6" style="text-align:right">

<a class="js-open-modal btn btn-default btn-large" href="#" data-modal-id="popup" id="button">Delete Product</a>

 <?php echo " <a class=\"btn btn-default\" href=edit_product.php?ProductID=" .$_GET['ProductID'] . ">Edit</a>";  ?>

</div>

</div>




	</div>	
<div id="popup" class="modal-box"> 

  <header style="background-color:	#E8E8E8  ;">


    <h2>Delete Product</h2>

  </header>

  <div class="modal-body" style="background-color:#F8F8F8;">
   <div style="display:inline-block;"> <strong><h4>Are you sure you want to delete this Product and all associated Labels and Market Share?</h4></strong></div>
 <div style="display:inline-block;"> <form action="#" method="post">

  <input type="submit" value="Cancel" class="btn btn-default">
</form></div>
<div style="display:inline-block;">
  <form action="#" method="post">

  <input type="submit" value="Delete" class="btn btn-default" name="delete-product">
</form>
 <?php include("delete-product.php"); ?>

</div>
</div>

  <footer style=" background-color:#F0F0F0;">

    <a href="#" class="js-modal-close">Close window</a>

  </footer>

</div>
	 <?php include("product_info.php"); ?>

      <table style="width:100%; margin-top:10px;">

<tr>
  <th>Classification Name</th>
  <td><?php echo $row['Classification_Name']; ?></td>

</tr>
<tr> <th> Classification Number</th>
<td> <?php echo $row['Classification_Number']; ?></td>
</tr>
<tr> <th> Classification Type</th>
<td> <?php echo $row['Classification_Type']; ?></td>
</tr>
<tr> <th> Manufacturer</th>
<td> <?php echo $row['Manufacturer']; ?></td>
</tr>
<tr> <th> Brand</th>
<td> <?php echo $row['Brand']; ?></td>
</tr>
<tr> <th> CNF CODE</th>
<td> <?php echo $row['CNF_CODE']; ?></td>
</tr>
<tr> <th> Description</th>
<td> <?php echo $row['Description']; ?></td>
</tr>

<tr> <th> Comment</th>
<td> <?php echo $row['Comments']; ?></td>
</tr>
<tr> <th> Restaurant Type</th>
<td> <?php echo $row['Restaurant_Type']; ?></td>
</tr>
<tr> <th> Type</th>
<td> <?php echo $row['Type']; ?></td>
</tr>
</table>
<!--
<table style="width:100%; margin-top:25px;" class="table2" border="0">
  <tr>
  
    <th>Classification Name</th>
    <th>Classification Number</th>
	<th>Classification Type</th>

  </tr>

<?php  echo "<tr><td> ". $row['Classification_Name'] ." </td><td> ". $row['Classification_Number'] ." </td><td> ". $row['Classification_Type'] ." </td></tr>"; ?>


</table>

<table style="width:100%;  " class="table2" border="0">
  <tr>
  

	<th>Manufacturer</th>
		<th>Brand</th>
	<th>CNF Code</th>
	
	<th>Cluster Number</th>
  </tr>

<?php  echo "<tr><td> ". $row['Manufacturer'] ." </td><td> ". $row['Brand'] ." </td><td> ". $row['CNF_CODE'] ." </td><td> ". $row['Cluster_Number'] ." </td></tr>"; ?>


</table>

	<div>

<strong>Description</strong> 
<div class="well">
	 
 <?php echo " ". $row['Description'] ."";  ?>
</div>
</section>
</div>
    <section>
	<div>
<strong>Comments</strong> 
<div class="well">
 <?php echo " ". $row['Comments'] ."";  ?></div>
</div>
</section>

    <section>
	<div>
<strong>Restaurant Type</strong> 
<div class="well">
 <?php echo " ". $row['Restaurant_Type'] ."";  ?></div>
</div>
</section>
    <section>
	<div>
<strong>Type</strong> 
<div class="well">
 <?php echo " ". $row['Type'] ."";  ?></div>
</div>
</section>-->


<div class="clearfix">
<div id="editfooter">
Creation Date: <?php echo " ". $row['Create_Date'] ."";  ?>
</div>
<div id="editfooter" class="editfooter">
Last Edit: <?php echo " ". $row['Last_Edit_Date'] ."";  ?></div>

<div id="editfooter" class="editfooter">
Edited By: <?php echo " ". $row['Last_Edited_By'] ."";  ?>
</div>

</div>



<div class="well label_class">
<h2 style="margin-top:2px;">Package Label </h2>

			<table id="example4" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Label UPC</th>
							<th>Description</th>
							<th>Collection Date</th>
							<th>Source</th>
							<th>Created Date</th>
							<th>Last Edit</th>
							<th>Edited By</th>

							
						</tr>
					</thead>
		
					<tbody>
							<?php include("view_package.php"); ?>						    

					</tbody>
				</table>

</div>
			<div style="float:right;">
 <?php echo " <a class=\"btn btn-default\" href=create-label.php?ProductID=" .$_GET['ProductID'] . ">Add Label</a>";  ?>
	</div>	
	<!--	</div> -->


	<div class="well market_class" style="margin-top:6%">	
<h2 style="margin-top:2px;">Market Share</h2>		
			<table id="example2" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Sales UPC</th>
							<th>Sales Description</th>
							<th>Dollar Volume</th>
							<th>Kilo Volume</th>
							<th>Sales Year</th>
							<th>Nielsen Category</th>
							<th>Source</th>
						
						</tr>
					</thead>
			
					<tbody>
						<?php include("view_sales.php"); ?>

					</tbody>
				</table>
		
</div>
	<div style="float:right;">	
	 <?php echo " <a class=\"btn btn-default\" href=create-market.php?ProductID=" .$_GET['ProductID'] . ">Add Market Share</a>";  ?>
	</div>	
		<br> <a class ="btn btn-default" href="index.php">Back</a>

<script>
function goBack() {
    window.history.back();
}
</script>

		</main>
	<?php include 'footer.php';?>

<!--	</div> -->

</body>
</html>