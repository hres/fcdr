<?php include '../session.php';?>
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
	
	
	<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	
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


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





<!--<![endif]-->
<!--[if lt IE 9]>
<link href="/theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="/theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="/wet-boew/css/noscript.min.css" /></noscript>
<script type="text/javascript">



$(function(){
	$("#first44").submit(function(event){
          event.preventDefault();

		$(this).find(".error").remove();
		 file = $(this).find("input[name=file_save]").val();
		
		 form=$(this);

		 url = $(this).attr("action");
		
	
		$.post(url,{file_save:file}, function(data){	
			console.log(data);

		},"json");
		return false;
				
		
	});
		
});

</script>
<script type="text/javascript">
/*
$(document).ready(function(){
$('#butclicked').on('click', function() {
    var file_data = $('#my-file-selector').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    alert(form_data);                             
    $.ajax({
				url: 'addImage.php?PackageID=<?php echo  $_GET['PackageID']; ?>', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response); // display response from the PHP script, if any
                }
     });
});
}); */
</script>


<script type="text/javascript">
$(document).ready(function (e) {
	$("#first").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
				url: 'addImage.php?PackageID=<?php echo $_GET['PackageID']; ?>', // point to server-side PHP script 
				type: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				dataType: 'json',
				processData: false,
				success: function(data) {
					console.log(data);
					if (data.error == "No") {
						$("#first").fadeOut();
						$("#first").before(data.success);
					} else {
						$("#first").append(data.errorPassword);
					}
					// $("#targetLayer").html(data);
				},
				error: function() {
				}
		})
		.then(function() {
			$.ajax({
					url: 'getImage.php?PackageID=<?php echo $_GET['PackageID']; ?>',
					type: 'GET',
					cache: false,
					dataType: 'html',
					success: function(data) {
						console.log(data);
						$('#reloadDIv').html(data);
					},
					error: function() {
					}
			});
		});
	}));
});
</script>


	<script>

$(document).ready(function() {

$('input[name="intervaltype"]').click(function () {
    //jQuery handles UI toggling correctly when we apply "data-target" attributes and call .tab('show') 
    //on the <li> elements' immediate children, e.g the <label> elements:
    $(this).closest('label').tab('show');
});
} );


	</script>
		<script>

$(document).ready(function() {

$('input[name="intervaltype"]').click(function () {
    //jQuery handles UI toggling correctly when we apply "data-target" attributes and call .tab('show') 
    //on the <li> elements' immediate children, e.g the <label> elements:
    $(this).closest('label').tab('show');
});
} );


	</script>



<script type="text/javascript">
$(document).ready(function()
{
 $(document).on('submit', '#vids-search-form3', function()
 {

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  :  'search-modal-label.php?PackageID=<?php echo $_GET['PackageID']; ?>',
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
$(function(){
	//acknowledgement message
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var field_userid = $(this).attr("id") ;
        var value = $(this).text() ;
        $.post('ajax2.php' , field_userid + "=" + value, function(data){
            if(data != '')
			{
				message_status.show();
				message_status.text(data);
				//hide the message
				setTimeout(function(){message_status.hide()},1000);
			}
        });
    });
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
.align-input{
	display: inline-block
}


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
		.button1{
			margin-left:75%;
			
		}
		.btn-default{
			width:150px;
		}
	
	 hr {
	 background-color: #ecf9f2; height: 2px; border: 0; }





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

.table3 td{
	background-color:#FFFFFF ;
	 border: 2px solid #F0F0F0;
	
}


			.table3{
	 border-collapse: separate;
	  border-spacing: 8px;
}
.table3 td, th{
	   border-radius: 3px;
}
.well{
	padding:5px;
}

.tbody1:before {
  
    line-height: 0.5px;
   
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0; 
}
.div1 {
    float: right;
	margin-right:6px;
	display:inline-block;
  
}
.div2 {
    float: left;

	display:inline-block;
  
}
.well2{
	background-color:  	hsl(60, 100%, 98%);
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

 

.modal-box .modal-body { padding: 0.6em 0.4em; }


.modal-box footer,

.modal-box .modal-footer {

  padding: 1em;

  border-top: 1px solid #ddd;

  background: hsl(60, 100%, 98%);

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
		float:right;
		margin-bottom:-1px;
	}
	
	.well3{
		
    background-color:  	hsl(60, 100%, 98%);
		}



		
	</style>
</head>
<body class="wide comments example" >

<?php include '../header.php';?>

<main role="main" property="mainContentOfPage" class="container">


<div class="well well3" style="">
<h1 property="name" id="wb-cont" style="margin-top:1px;">Label Details</h1>
</div>

<div style="float:right; ">

<?php echo " <a class=\"btn btn-default\" href=/label/edit_package.php?PackageID=" .$_GET['PackageID'] . ">Edit</a>";  ?>
<a class="js-open-modal btn btn-default btn-large" href="#" style="margin-left:4px;" data-modal-id="popup" id="button"  onclick="return hidedeletemessage();">Delete Label</a>
<a class="js-open-modal btn btn-default btn-large" href="#" data-modal-id="popup" id="button" onclick="return hiderelinkmessage();">Re-Link</a>


	</div>

<div id="popup" class="modal-box"> 

  <header style="background-color:	hsl(60, 100%, 98%) ;">


  <div id="delete-message" style="display:none;">
    <h3>Delete Package Label</h3>
</div>
<div id="relink-message" style="display:none;">
    <h3>Re-link Package Label</h3>
</div>

  </header>

  <div class="modal-body" style="background-color:#F8F8F8;">
   <div style="display:inline-block;" id="toHide3"> <strong><h3>Would you like to re-link to a different product instead?</h3></strong></div>
 <div style="display:inline-block;"  id="toHide2">

  <input type="button" value="Re-Link" class="btn btn-default" onclick="showDiv()">
</div>
<div style="display:inline-block;" id="toHide">
  <form action="#" method="post" id="vids-search-form2">

  <input type="submit" value="Delete" class="btn btn-default" name="delete-label" >
</form>

</div>

</div>	<br>
<div class="well well2" style=" display:none; margin-left:0.5%; margin-right:0.5%;" id="welcomeDiv">
	<form role="form" method="post" action="#" id="vids-search-form3">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Description</label>
				<input type="text" class="form-control" name="Description" id="SR_Group" placeholder="Enter the Description of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the name of the manufacturer of the Product" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="immunizing_agent">Classification Number</label>
			
    <select class="form-control" id="sel1" name="Classification_Number" style="width:540px" onkeyup="showHint(this.value)">
		  <option value="" selected="selected"></option>
	<?php include '../List_Classification_Number.php';?>
		
			 </select>
			</div>
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Classification Name</label>
				 <select class="form-control" id="class_num" name="Classification_Name" style="width:540px">
		  <option value="" selected="selected"></option>
		<?php include '../List_Classification.php';?>
	
			 </select>
			</div>
				<div class="form-group col-sm-4">
				<label for="immunizing_agent">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type of the Product" />		
			</div>
			
		
		</div>
		<div class="row">
	
				<div class="form-group col-sm-4">
				<label for="immunizing_agent">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="CNF_Code" placeholder="Enter the CNF Code of the Product" />
			</div>
				<div class="form-group col-sm-4">
				<label for="immunizing_agent">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number of the Product" />
			</div>
			
		<div class="form-group col-sm-4">
				<label for="immunizing_agent">Last Edited By</label>
				<input type="text" class="form-control" name="Last_Edited_by" id="Last_Edited_by" placeholder="Enter the Editor Name of the Product" />
			</div>
		
		</div>
		<div class="row">
			<div class="form-group submit_button">
				<button style="margin-top: 28px; margin-right:17px;" type="submit" class="btn btn-default" name="search-modal" onclick="showResults();">Search</button>
			</div>
		</div>
		
	</form>
	</div>
	<div id="result-modal" class="result-modal well" style="display:none; margin-left:0.5%; margin-right:0.5%; height:150px; overflow:auto;"></div>
  <footer style=" background-color:hsl(60, 100%, 98%);">

    <a href="#" class="js-modal-close" onclick="showDiv2()">Close window</a>

  </footer>

</div>
<?php include("delete-label.php"); ?>	
<table style="width:100%" class="table2">
  <tr >
    <th>Label UPC</th>
    <th>Label Description</th>
	<th>Household Measure</th>
	<th>Nielsen Category</th>
	
	
  </tr>
  			<?php include("package_d_1.php"); ?>
		<?php echo "<tr><td>". $row['Label_UPC'] . "</td><td>". $row['Label_Description'] . "</td><td>". $row['Common_Measure'] . "</td><td>". $row['Nielsen_Category'] . "</td></tr>"?>

</table>	
<table style="width:100%" class="table2">
  <tr >
    <th>Brand</th>
    <th>Manufacturer</th>
	<th>Country</th>
	<th>Package Size</th>
	
	
  </tr>
  			<?php echo "<tr><td>". $row['Brand'] . "</td><td>". $row['Manufacturer'] . "</td><td>". $row['Country'] . "</td><td>". $row['Package_Size'] . "</td></tr>"?>
		

</table>
<table style="width:100%" class="table2">
  <tr >
    <th>Package  Size Unit Of Measure</th>
    <th>Storage Type</th>
	<th>Storage Statements</th>
	<th>Number Of Units</th>
	<th>Multi Parts?</th>
	
	
  </tr>
  			<?php echo "<tr><td>". $row['Package_Size_UofM'] . "</td><td>". $row['Storage_Type'] . "</td><td>". $row['Storage_Statement'] . "</td><td>". $row['Number_Of_Units'] . "</td><td>". $row['Multipart'] . "</td></tr>"?>
		

</table>

		<div class="container">

  <div class="row">
    <div class="col-sm-6" >
	
				


<div role="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
        
        <li role="tab" class="active">
            <label data-target="#scheduleDaily">
                <input id="optDaily" name="intervaltype" type="radio" checked />
                As Sold &nbsp; &nbsp; &nbsp;
            </label>
        </li>
        
        <li role="tab">
            <label data-target="#scheduleWeekly">
                <input id="optWeekly" name="intervaltype" type="radio" />
                As Prepared
            </label>
        </li>
        
  
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="scheduleDaily">
	    <div style="margin-top:4%;">  
	 <section>

<div class="well">



<table style="width:100%; " class="table3" border="0" >
  <tr>
    <th>Per Serving Size</th>
    <th>Per Serving UofM</th>

  </tr>
   <?php echo "<tr><td> ". $row['Per_Serving_Amount'] ." </td><td> ". $row['Per_Serving_Unit'] ." </td></tr>"; $conn->close(); ?>

</table>





</div>
</section>
</div>
		<strong>Nutrition Fact Table</strong>
      <p>   <table class="table table-striped" >
					<thead>
						<tr>
							<th>Component</th>
							<th>Amount</th>
							<th>Unit of Measure</th>
							<th>% DV</th>
							
						</tr>
					</thead>
			
					<tbody >
				
<?php include("nutrition_table.php"); ?>
					</tbody>
				</table>
			
<!--h3-section-start-->

				</p>
        </div>
        
        <div role="tabpanel" class="tab-pane" id="scheduleWeekly">
  <div id="status"></div>       
	    <div style="margin-top:4%;">  
	 <section>

<div class="well">



<table style="width:100%; " class="table3" border="0" >
  <tr>
    <th>PPD Per Serving Amount</th>
    <th>PPD Per Serving UofM</th>

  </tr>
 
  <?php echo "<tr><td> ". $row['PPD_Per_Serving_Amount'] ." </td><td> ". $row['PPD_Per_Serving_UofM'] ." </td></tr>"; $conn->close(); ?>
</table>





</div>
</section>


</div>
		<strong>Nutrition Fact Table</strong>
      <p>   <table class="table table-striped" >
					<thead>
						<tr>
							<th>Component</th>
							<th>Amount</th>
							<th>Unit of Measure</th>
							<th>% DV</th>
							
						</tr>
					</thead>
			
					<tbody >
				
<?php include("nutrition_table2.php"); ?>
					</tbody>
				</table>
			
<!--h3-section-start-->

				</p>
        </div>
     
    </div>
    
</div>

				
				
    </div>
    <div class="col-sm-6"  >
	

	<section>
<strong>Ingredients</strong>
<div class="well" style="margin-right:3%;">
  <?php echo " ". $row['Ingredients'] ."";  ?>
</div>
</section>
  

	<section>
<strong>Nutrition Fact Table</strong>
<div class="well" style="margin-right:3%;">
  <?php echo " ". $row['Nutrition_Fact_Table'] ."";  ?>
</div>
</section>



<div class="container"  style="width:1080px;">
  <h2>Image Gallery</h2>
<div id="reloadDIv">
  <?php include("../getImage.php"); ?>
  </div>
</div>
<input type = "Button" class="btn btn-primary" value = "Add an image" id = "hiddenButton"/>
<div  id = "hiddenForm">

<form id="first" method="post" action="addImage.php">

				
			
	<div class = "align-input"><input id="my-file-selector"class="btn btn-primary" type="file"  name="file_save">		
			
				</div>

		<div class="align-input" style="margin-left:150px">
					<input  type="submit"  class="btn btn-primary" value="Save">
			</div>
						</div>
</form>

</div>




    </div>
	
  </div>
 
</div>
<?php include '../connection.php';?>
<?php

$packageID = ($_GET['PackageID']?$_GET['PackageID']:'');

	
	$query = "  SELECT * FROM $dbname.Package P WHERE P.PackageID = $packageID";
	$result = mysqli_query($conn,$query);
							
							

if (!$result) {
    echo "ERRORS";
}
	
	$row = $result->fetch_assoc();

	


$conn->close();
?>


	
<!--h3-section-start-->
   <section>
<strong>Suggested Direction</strong> 
<div class="well"  id="diva" >
<?php echo " ". $row['Suggested_Direction'] ."";  ?></div>
</section>
<!--h3-section-start-->
<section>
<strong>Nutrient Claims</strong>
<div class="well">
<?php echo " ". $row['Nutrition_Claim'] ."";  ?></div>
</section>

<!--h3-section-start-->
<section>
<strong>Other Package Statements</strong>
<div class="well">
<?php echo " ". $row['Other_Package_Statement'] ."";  ?></div>
</section>

<!--h3-section-start-->
<section>
<strong>Health Claim</strong>
<div class="well">
<?php echo " ". $row['Health_Claim'] ."";  ?></div>
</section>
		
<table style="width:100%" class="table2">
  <tr>
    <th>Source</th>
    <th>Collection Date</th>
    <th>Creation Date</th>
	<th>Last Edit</th>
	<th>Edited by</th>

  </tr>
  <tr>
    <td><?php echo " ". $row['Source'] ."";  ?></td>
    <td><?php echo " ". $row['Collection_Date'] ."";  ?></td>
    <td><?php echo " ". $row['Create_Date'] ."";  ?></td>
	<td><?php echo " ". $row['Last_Edit_Date'] ."";  ?></td>
	<td><?php echo " ". $row['Last_Edited_By'] ."";  ?></td>
  </tr>
</table>
	<div class="div2"> 
	
			 		<?php include '../connection.php';?>
					<?php 
					$PackageID =  $_GET['PackageID'];
	$query= "select ProductIDP from $dbname.Package where PackageID=$PackageID";
	
	$result = mysqli_query($conn,$query);
	$row = $result->fetch_assoc();
	
	?>
	 <?php echo " <a class=\"btn btn-default\" href=/product/view_product.php?ProductID=" . $row['ProductIDP'] . ">Back</a>";  ?>
	<!--<a class ="btn btn-default" href="/home.php">Back</a>-->
	
	</div>





		</main>
	<?php include '../footer.php';?>


<script>
$(document).ready(function(){
 console.log("INN");
        $("#hiddenForm").hide();
  
    $("#hiddenButton").click(function(){
		  $("#hiddenButton").hide();
       $("#hiddenForm").show();
    });
});
</script>


</body>
</html>
