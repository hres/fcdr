
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
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fcolreorder%2Fexamples%2Fintegration%2Fcolvis.html" async>
	</script>
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



<!-- Include Date Range Picker -->





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
			<script>

$(document).ready(function() {
    var table = $('#example3').DataTable( {
        dom: 'Bfrtip',
        colReorder: true,
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
		

		.mainsearch{
			border-style: solid;
			border-color:#F0F0F0 ;
			
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
	
	

#hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid red;
    margin: 1em 0;
    padding: 0; 
}



.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: lightblue;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #000066}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover #button {
    background-color: #006699;
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

 

a.close {

  line-height: 1;

  font-size: 1.5em;

  position: absolute;

  top: 5%;

  right: 2%;

  text-decoration: none;

  color: #bbb;

}

 

a.close:hover {

  color: #222;

  -webkit-transition: color 1s ease;

  -moz-transition: color 1s ease;

  transition: color 1s ease;

}

@media (min-width: 32em) {

  .modal-box { width: 61.5%; }

}	
.hidethis2{
	margin-bottom:2%;
}
.well{
	background-color:  #ebf0fa;
}
		.submit_button{
		float:right;
		margin-bottom:-5px;
	}
	</style>
</head>
<body class="wide comments example">
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

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
<span>Food Composition Repository</span>
</a>
</div>
<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="./theme-gcwu-fegc/assets/wmms.svg" aria-label="Symbol of the Government of Canada"></object>
<section id="wb-srch" class="visible-md visible-lg">
<h2>Search</h2>
<form action="https://google.ca/search" method="get" role="search" class="form-inline ">
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
			
  <li><a href="home.php">Search</a></li>
  <li> <a href="create-product.php">Create Product</a></li>
				   <li><a  href="importdata.php" >Import</a></li>

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

<div id="popup" class="modal-box"> 

  <header style="background-color: #E8E8E8;">

    <a href="#" class="js-modal-close close">×</a>

    <h3>Import CSV File</h3>

  </header>

  <div class="modal-body" style="text-align:center; background-color:#F8F8F8;">
  
  <form action="#" method="post">

<label class="btn btn-primary" for="my-file-selector">
    <input id="my-file-selector" type="file" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">
    Browse for file
</label>
<span class='label label-info' id="upload-file-info"></span>
<span id="demo"></span>
  <input type="checkbox" name="vehicle" value="Bike"> Market Share
  <input type="checkbox" name="vehicle" value="Car"> Package
<input type="checkbox" name="vehicle" value="Car" checked="checked"> Product
  <input type="submit" value="Submit" class="btn btn-default">
</form>


</div>

  <footer style=" background-color:#F0F0F0;">

    <a href="#" class="js-modal-close">Close window</a>

  </footer>

</div>


		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
		
	<strong><h3>Create Market Share</h3></strong>	
	<div class="well wb-frmvld" style="margin-right:2%;">

	<form role="form" method="post" action="#" id="vids-search-form1">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Sales_UPC" class="required"> <span class="field-name">Sales UPC</span><strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_UPC"  id="Sales_UPC" placeholder="Enter the Sales UPC Code of the Market Share" required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Dollar_Volume" class="required"> Dollar Volume <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume" id="Dollar_Volume" placeholder="Enter the Sales figure of the Market Share" required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Kilo_Volume" class="required">Kilo Volume <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Vol" id="Kilo_Volume" placeholder="Enter the Volume of the Market Share" required="required"/>
			</div>
		
		
			
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Sales_Year" class="required">Sales Year <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_Year" id="Sales_Year" placeholder="Enter a Collection Year for the Market Share" required="required"/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Nielsen_Category" class="required">Nielsen Category <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category"  placeholder="Enter the Neilson Category of the Market Share" required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Source" class="required">Source <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Source" id="Source" placeholder="Enter the Source of the Market Share" required="required"/>
			</div>
		
	
		
		
		</div>
		<div class="row">
			
			<div class="form-group col-sm-4">
				<label for="Sales_Description" class="required">Sales Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Sales_Description" id="Sales_Description" placeholder="Enter the Description " required="required"/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter a Comment "/>
			</div>
		
		   <div class="form-group col-sm-4">
      <label for="date1">
     Collection Date
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control" id="date1" name="Collection_Date" placeholder="YYYY/MM/DD" type="text" />
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
     </div>
		
		
		</div>
				<div class="row">
			<div class="form-group col-sm-4">
				<label for="Brand" class="required">Brand <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand" required>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Dollar_Rank" class="required">Dollar Rank <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Rank" id="Dollar_Rank"  placeholder="Enter the Dollar Rank " required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Dollar_Volume_PerCentage_Change" class="required">Dollar Volume % Change <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume_PerCentage_Change" id="Dollar_Volume_PerCentage_Change" placeholder="Enter the Dollar Volume % Change  " required/>
			</div>
		
	
		
		
		</div>

		
						<div class="row">
									<div class="form-group col-sm-4">
				<label for="Kilo_Volume_Percent_Change" class="required">Kilo Volume % Change <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Volume_Percent_Change" id="Kilo_Volume_Percent_Change" placeholder="Enter the Kilo Volume % Change " required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Average_AC_Dist">Average AC Dist</label>
				<input type="text" class="form-control" name="Average_AC_Dist" id="Average_AC_Dist" placeholder="Enter the Average AC Dist"/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Average_Retail_Price">Average Retail Price</label>
				<input type="text" class="form-control" name="Average_Retail_Price" id="Average_Retail_Price" placeholder="Enter the Average Retail Price "/>
			</div>
		
			
		</div>
						<div class="row">
			<div class="form-group col-sm-4">
				<label for="Dollar_Volume_Total" class="required">Dollar Volume Total <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Volume_Total" id="Dollar_Volume_Total" placeholder="Enter the Dollar Volume Total " required/>
			</div>
			
				<div class="form-group col-sm-4">
				<label for="Kilo_Volume_Total" class="required">Kilo Volume Total <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Volume_Total" id="Kilo_Volume_Total"  placeholder="Enter the Kilo Volume Total " required/>
			</div>
	

		<div class="form-group col-sm-4">
	<label for="Control_Label_Flag" name="Control_Label_Flag">Control Label Flag</label>
      <select class="form-control" id="Control_Label_Flag" name="Control_Label_Flag">
		 <option value="No" selected>No</option>
		 <option value="Yes">Yes</option>
      </select></div>


			
		</div>
		
		<div class="row">
					<div class="form-group col-sm-4">
				<label for="Dollar_Share" class="required">Dollar Share <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Dollar_Share" id="Dollar_Share"  placeholder="Enter the Dollar Share " required/>
			</div>
				<div class="form-group col-sm-4">
				<label for="Kilo_Share" class="required">Kilo Share <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" name="Kilo_Share" id="Kilo_Share" placeholder="Enter the Kilo Share " required/>
			</div>
			<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster Number "/>
			</div>			

		
		</div>
				<div class="row">

			
			
				<button style="margin-top: 30px 0px; margin-right:16px; float:right;" type="submit" class="btn btn-default" name="search" >Save</button>
			
		
		</div>
		
	</form>
	</div>
<div>
	  <?php include("new-market.php"); ?>
	
	</div>	

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<script>
	$(document).ready(function(){
		var date_input=$('input[name="Collection_Date"]'); //our date input has the name "date"
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



	<script>
	$(document).ready(function(){
		var date_input=$('input[name="Sales_Reference_Date"]'); //our date input has the name "date"
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
    $(this).parent().siblings('#date2').trigger('focus');
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
<br>	<button onclick="goBack()" class="btn btn-default">Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
		</main>
	<footer role="contentinfo" id="wb-info">
<nav role="navigation" class="container visible-sm visible-md visible-lg wb-navcurr">
<h2 class="wb-inv">About this site</h2>
<div class="row">
<div class="col-sm-3 col-lg-3">
<section>
<h3>Contact information</h3>
<ul class="list-unstyled">
<li><a href="#">Link 1</a></li>
<li><a href="#">Link 2</a></li>
<li><a href="#">Link 3</a></li>
</ul>
</section>
<section>
<h3>News</h3>
<ul class="list-unstyled">
<li><a href="http://news.gc.ca/web/index-en.do">Newsroom</a></li>
<li><a href="http://news.gc.ca/web/nwsprdct-en.do?mthd=tp&amp;crtr.tp1D=1">News releases</a></li>
<li><a href="http://news.gc.ca/web/nwsprdct-en.do?mthd=tp&amp;crtr.tp1D=3">Media advisories</a></li>
<li><a href="http://news.gc.ca/web/nwsprdct-en.do?mthd=tp&amp;crtr.tp1D=970">Speeches</a></li>
<li><a href="http://news.gc.ca/web/nwsprdct-en.do?mthd=tp&amp;crtr.tp1D=980">Statements</a></li>
</ul>
</section>
</div>
<section class="col-sm-3 col-lg-3">
<h3>Government</h3>
<ul class="list-unstyled">
<li><a href="http://www.canada.ca/en/gov/system">How government works</a></li>
<li><a href="http://www.canada.ca/en/gov/dept">Departments and agencies</a></li>
<li><a href="http://pm.gc.ca/eng">Prime Minister</a></li>
<li><a href="http://www.canada.ca/en/gov/ministers">Ministers</a></li>
<li><a href="http://www.canada.ca/en/gov/publicservice">Public service and military</a></li>
<li><a href="http://www.canada.ca/en/gov/policy">Policies, regulations and laws</a></li>
<li><a href="http://www.canada.ca/en/gov/libraries">Libraries</a></li>
<li><a href="http://www.canada.ca/en/gov/publications">Publications</a></li>
<li><a href="http://www.canada.ca/en/gov/statistics">Statistics and data</a></li>
<li><a href="http://www.canada.ca/en/newsite.html">About Canada.ca</a></li>
</ul>
</section>
<section class="col-sm-3 col-lg-3 brdr-lft">
<h3>Transparency</h3>
<ul class="list-unstyled">
<li><a href="http://www.canada.ca/en/transparency/reporting.html">Government-wide reporting</a></li>
<li><a href="http://open.canada.ca/en">Open government</a></li>
<li><a href="http://www.canada.ca/en/transparency/disclosure.html">Proactive disclosure</a></li>
<li><a href="http://www.canada.ca/en/transparency/terms.html">Terms and conditions</a></li>
<li><a href="http://www.canada.ca/en/transparency/privacy.html">Privacy</a></li>
</ul>
</section>
<div class="col-sm-3 col-lg-3 brdr-lft">
<section>
<h3>Feedback</h3>
<p><a href="http://www.canada.ca/en/contact/feedback.html"><img src="./GCWeb/assets/feedback.png" alt="Feedback about this Web site"></a></p>
</section>
<section>
<h3>Social media</h3>
<p><a href="http://www.canada.ca/en/social"><img src="./GCWeb/assets/social.png" alt="Social media"></a></p>
</section>
<section>
<h3>Mobile centre</h3>
<p><a href="http://www.canada.ca/en/mobile"><img src="./GCWeb/assets/mobile.png" alt="Mobile centre"></a></p>
</section>
</div>
</div>
</nav>
<div class="brand">
<div class="container">
<div class="row">
<div class="col-xs-6 visible-sm visible-xs tofpg">
<a href="#wb-cont">Top of Page <span class="glyphicon glyphicon-chevron-up"></span></a>
</div>
<div class="col-xs-6 col-md-12 text-right">
<object type="image/svg+xml" tabindex="-1" role="img" data="./GCWeb/assets/wmms-blk.svg" aria-label="Symbol of the Government of Canada"></object>
</div>
</div>
</div>
</div>
</footer>
	</div>
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