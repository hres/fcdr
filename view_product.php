
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
	<style type="text/css" class="init">
	
	</style>


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
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>
<!--
<script>
$(document).on("click", "td:nth-child(3)", function () {
      if (confirm("Are you sure ?")) {
          $(this).closest("tr").hide();
      }
  });

-->

<script>
function show(){
		 document.getElementById('hideTable').style.display = 'block';

}
</script>

<script>

function showUser(str){
	
	 document.getElementById('txtHint').style.display = 'block';

    if (str == "") {
        //document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML += xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","view_sales.php?q="+str,true);
        xmlhttp.send();
    }
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

	</style>
</head>
<body class="wide comments example">

<header role="banner">
<div id="wb-bnr">
<div id="wb-bar">
<div class="container">
<div class="row">
<object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="./theme-gcwu-fegc/assets/sig-en.svg" aria-label="Government of Canada"></object>
<ul id="gc-bar" class="list-inline">
<li><a href="http://www.canada.ca/en/index.html" rel="external">Canada.ca</a></li>
<li><a href="http://www.canada.ca/en/services/index.html" rel="external">Services</a></li>
<li><a href="http://www.canada.ca/en/gov/dept/index.html" rel="external">Departments</a></li>
<li id="wb-lng"><h2>Language selection</h2>
<ul class="list-inline">
<li><a lang="fr" href="content-fr.html">Français</a></li>
</ul>
</li>
</ul>
<section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
<h2>Search and menus</h2>
<ul class="pnl-btn list-inline text-right">
<li><a href="#mb-pnl" title="Search and menus" aria-controls="mb-pnl" class="overlay-lnk btn btn-sm btn-default" role="button"><span class="glyphicon glyphicon-search"><span class="glyphicon glyphicon-th-list"><span class="wb-inv">Search and menus</span></span></span></a></li>
</ul>
<div id="mb-pnl"></div>
</section>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div id="wb-sttl" class="col-md-5">
<a href="home.php">
<span>Food Component Data Repository</span>
</a>
</div>
<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="./theme-gcwu-fegc/assets/wmms.svg" aria-label="Symbol of the Government of Canada"></object>
<section id="wb-srch" class="visible-md visible-lg">
<h2>Search</h2>
<form action="https://google.ca/search" method="get" role="search" class="form-inline">
<div class="form-group">
<label for="wb-srch-q">Search website</label>
<input id="wb-srch-q" class="form-control" name="q" type="search" value="" size="27" maxlength="150">
<input type="hidden" name="q" value="site:wet-boew.github.io OR site:github.com/wet-boew/">
</div>
<button type="submit" id="wb-srch-sub" class="btn btn-default">Search</button>
</form>
</section>
</div>
</div>
</div>
<nav role="navigation" id="wb-sm" data-trgt="mb-pnl" class="wb-menu visible-md visible-lg" typeof="SiteNavigationElement">
	<div class="container nvbar">
		<h2>Topics menu</h2>
		<div class="row">
			<ul class="list-inline menu">
			
  <li><a href="index.php">Search</a></li>
  <li> <a href="create-product.php">Create Product</a></li>
				   <li><a class="" href="importdata.php">Import</a></li>

				<li><a href="#">Export</a></li>
			</ul>
		</div>
	</div>
</nav>
<nav role="navigation" id="wb-bc" property="breadcrumb">
<h2>You are here:</h2>
<div class="container">
<div class="row">
<!--      -->
</div>
</div>
</nav>
</header>

<main role="main" property="mainContentOfPage" class="container">


	<!--	<div class="fw-body"> -->
		<!--	<div class="content">-->
		

<h2 style="margin-top:2px;"> Product</h2>
<div id="deletemess"> </div>
<div style="float:right; ">


<a class="js-open-modal btn btn-default btn-large" href="#" data-modal-id="popup" id="button">Delete Product</a>
 <?php echo " <a class=\"btn btn-default\" href=edit_product.php?ProductID=" .$_GET['ProductID'] . ">Edit</a>";  ?>

	</div>	
<div id="popup" class="modal-box"> 

  <header style="background-color:	#E8E8E8  ;">


    <h2>Delete Product</h2>

  </header>

  <div class="modal-body" style="background-color:#F8F8F8;">
   <div style="display:inline-block;"> <strong><h3>Are you sure you want to delete this Product?</h3></strong></div>
 <div style="display:inline-block;"> <form action="#" method="post">

  <input type="submit" value="Cancel" class="btn btn-default">
</form></div>
<div style="display:inline-block;">
  <form action="#" method="post">

  <input type="submit" value="Delete!" class="btn btn-default" name="delete-product">
</form>
 <?php include("delete-product.php"); ?>

</div>
</div>

  <footer style=" background-color:#F0F0F0;">

    <a href="#" class="js-modal-close">Close window</a>

  </footer>

</div>

	<div style="margin-top:3%;">
<strong>Description</strong> 
<div class="well">
	  <?php include("product_info.php"); ?>
 <?php echo " ". $row['Description'] ."";  ?>
</div>
</section>
</div>



<table style="width:100%; " class="table2" border="0">
  <tr>
  
    <th>Classification Name</th>
    <th>Classification Number</th>
	<th>Classification Type</th>
	<th>Brand</th>
	<th>Manufacturer</th>
	<th>CNF Code</th>
	
	<th>Cluster Number</th>
  </tr>

<?php  echo "<tr><td> ". $row['Classification_Name'] ." </td><td> ". $row['Classification_Number'] ." </td><td> ". $row['Classification_Type'] ." </td><td> ". $row['Brand'] ." </td><td> ". $row['Manufacturer'] ." </td><td> ". $row['CNF_CODE'] ." </td><td> ". $row['Cluster_Number'] ." </td></tr>"; ?>


</table>
<!--
<div >
<div class="data12 ">Classification Name<div class="well div_height"></div></div>
<div class="data12 ">Classification Number<div class="well div_height"></div></div>
<div class="data12">Brand<div class="well div_height"></div></div>
<div class="data12">Manufacturer<div class="well div_height"></div></div>
<div class="data12">CNF Code<div class="well div_height"></div></div>
<div class="data12">Classification Type<div class="well div_height"></div></div>
<div class="data12">Cluster<div class="well div_height">12355a</div></div>


</div> -->

    <section>
	<div>
<strong>Comments</strong> 
<div class="well">
 <?php echo " ". $row['Comments'] ."";  ?></div>
</div>
</section>


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
	<footer role="contentinfo" id="wb-info" class="visible-sm visible-md visible-lg wb-navcurr">
<div class="container">
<nav role="navigation">
<h2>About this site</h2>
<ul id="gc-tctr" class="list-inline">
<li><a rel="license" href="http://wet-boew.github.io/wet-boew/License-en.html">Terms and conditions</a></li>
<li><a href="http://www.tbs-sct.gc.ca/tbs-sct/common/trans-eng.asp">Transparency</a></li>
</ul>
<div class="row">
<section class="col-sm-3">
<h3>Contact us</h3>
<ul class="list-unstyled">
<li><a href="https://github.com/wet-boew/wet-boew/issues/new">Questions or comments?</a></li>
</ul>
</section>
<section class="col-sm-3">
<h3>About</h3>
<ul class="list-unstyled">
<li><a href="http://wet-boew.github.io/v4.0-ci/index-en.html#about">About the Web Experience Toolkit</a></li>
<li><a href="http://www.tbs-sct.gc.ca/ws-nw/index-eng.asp">About the Web Standards</a></li>
</ul>
</section>
<section class="col-sm-3">
<h3>News</h3>
<ul class="list-unstyled">
<li><a href="https://github.com/wet-boew/wet-boew/pulse">Recent project activity</a></li>
<li><a href="https://github.com/wet-boew/wet-boew/graphs">Project statistics</a></li>
</ul>
</section>
<section class="col-sm-3">
<h3>Stay connected</h3>
<ul class="list-unstyled">
<li><a href="https://twitter.com/WebExpToolkit">Twitter</a></li>
</ul>
</section>
</div>
</nav>
</div>
<div id="gc-info">
<div class="container">
<nav role="navigation">
<h2>Government of Canada footer</h2>
<ul class="list-inline">
<li><a href="http://healthycanadians.gc.ca"><span>Health</span></a></li>
<li><a href="http://travel.gc.ca"><span>Travel</span></a></li>
<li><a href="http://www.servicecanada.gc.ca/eng/home.shtml"><span>Service Canada</span></a></li>
<li><a href="http://www.jobbank.gc.ca"><span>Jobs</span></a></li>
<li><a href="http://actionplan.gc.ca/en"><span>Economy</span></a></li>
<li id="canada-ca"><a href="http://www.canada.ca/en/index.html">Canada.ca</a></li>
</ul>
</nav>
</div>
</div>
</footer>
<!--	</div> -->
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