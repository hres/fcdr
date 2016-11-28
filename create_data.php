
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=e05f4cd9972d1e8bde5217487a96b110">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.3.2/css/colReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css">
	
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.11/angular.min.js"></script>
    <script src="dist/angular-bootstrap-file-field.min.js"></script>
    <script src="js/app.js"></script>
	
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
	<script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js">
	</script>
	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">


<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>


<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>




  	
	
	
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
  <li> <a href="create_data.php">Create</a></li>
				   <li><a href="#" >Import</a></li>

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




		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
		
		<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Create Product </a></li>
    <li><a data-toggle="tab" href="#menu1">Create Market Share</a></li>
    <li><a data-toggle="tab" href="#menu2">Create Package Label</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">



<section style="margin-top: 15px;" class="hidethis">

<div class="well" style="margin-right:2%;">
	<form role="form" method="post" action="#" id="vids-search-form">
	
	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Description</label>
				<input type="text" class="form-control" name="Description" id="SR_Group" placeholder="Enter the Description of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Brand</label>
				<input type="text" class="form-control" name="Standardied_Brand" id="Standardied_Brand" placeholder="Enter the Brand of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer_Address" id="manufacturer" placeholder="Enter the name of the manufacturer" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="immunizing_agent">GBL Group ID</label>
				<input type="text" class="form-control" name="GroupID" id="GroupID" placeholder="Enter the GBL Group ID of the product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">GBL Food Category</label>
				<input type="text" class="form-control" name="ClusterID" id="Cluster_ID" placeholder="SR Group" placeholder="Enter the GBL Food Category of the Product" />
			</div>
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">CNF Code</label>
				<input type="text" class="form-control" name="CNF_Code" id="CNF_Code" placeholder="Enter the CNF Code pf the Product" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="immunizing_agent">Target Level</label>
				<input type="text" class="form-control" name="Edited_by" id="SR_Product_Category" placeholder="Enter the Target level of the Product" />
			</div>
			
		<div class="form-group col-sm-4">
				<label for="immunizing_agent">Edited By</label>
				<input type="text" class="form-control" name="Edited_by" id="SR_Product_Category" placeholder="Enter the Editor name" />
			</div>
			<div class="form-group col-sm-4 ">
				<button style="margin-top: 28px;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</div>
		
	</form>
	</div>
</section>

	
	  </div>
    <div id="menu1" class="tab-pane fade">


<section style="margin-top: 15px;">
<div class="well" style="margin-right:2%; background-color:  #ebf0fa; ">

	<form role="form" method="post" action="#" id="vids-search-form1">

	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Description</label>
				<input type="text" class="form-control" name="Description" id="Standardied_Brand" placeholder="Enter the Description of the Market Share" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Food_Name">UPC 10</label>
				<input type="text" class="form-control" name="UPC10" id="product_name" placeholder="Enter the UPC 10 of the Market Share" />
			</div>
		
			<div class="form-group col-sm-4">
				<label for="manufacturer">Source</label>
				<input type="text" class="form-control" name="Info_Source" id="manufacturer" placeholder="Enter the Source of the Market Share" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="immunizing_agent">Collection Year</label>
				<input type="text" class="form-control" name="date_collected" id="SR_Product_Category" placeholder="Enter the Collection Date of the Market Share" />
			</div>
		
			<div class="form-group col-sm-4">
				<label for="immunizing_agent">Neilson Category</label>
				<input type="text" class="form-control" name="Neilson_Category" id="Neilson_Category" placeholder="Enter the Neilson Category of the Market Share" />
			</div>
			<div class="form-group col-sm-4 ">
				<button style="margin-top: 28px;" type="submit" class="btn btn-default" name="search1">Save</button>
			</div>
		</div>
		
	</form>
	</div>
</section>  


  </div>
    <div id="menu2" class="tab-pane fade">
 

<section style="margin-top: 15px;">
<div class="well hidethis2" style="margin-right:2%;  background-color: hsl(60, 100%, 98%);">

	<form role="form" method="post" action="#" id="vids-search-form2">

	
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="UPC12">UPC 12</label>
				<input type="text" class="form-control" name="UPC12" id="product_name" placeholder="Enter the UPC 12 code of the Package Label" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Sources">Info Source</label>
				<input type="text" class="form-control" name="Sources" id="Standardied_Brand" placeholder="Enter the source of the Package Label" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Description">Description</label>
				<input type="text" class="form-control" name="Description" id="manufacturer" placeholder="Enter the Description of the Package Label" />
			</div>
		</div>
		<div class="row">
		<div class="form-group col-sm-4">
				<label for="Sample_Date">Collection Date</label>
				<input type="text" class="form-control" name="Sample_Date" id="SR_Product_Category" placeholder="Please type the collection date" />
			</div>
	
			<div class="form-group col-sm-4">
				<label for="Ingredients">Ingredients</label>
				<input type="text" class="form-control" name="Ingredients" id="Neilson_Category" placeholder="Enter the Ingredients of the Package Label" />
			</div>
			<div class="form-group col-sm-4 ">
				<button style="margin-top: 28px;" type="submit" class="btn btn-default" name="search2">Save</button>
			</div>
		</div>
		
	</form>
</div>	
</section>  

  </div>
    <div >
	</div>
  </div>
</div>

		
	
		
		
<br>	<button onclick="goBack()">Back</button>
<script src="http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js"></script>
<script src="bootstrap.file-input.js"></script>
<script>
$(document).ready(function(){
  $('input[type=file]').bootstrapFileInput();
});
</script>
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