
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
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>





<script>

$(document).ready(function()
{
 $(document).on('submit', '#vids-search-form3', function()
 {

  
  
$.ajax({ 
   type    : "POST",
   url     : "search_package.php",
	 dataType: "json",
   data:  $(this).serialize(),
     
   success:function(data) {
	 
	 var table = $('#example3').DataTable();
  $.each(data, function(idx, elem){
      // table.append("<tr><td>"+elem.UPC12+"</td><td>"+elem.Description+"</td>   <td>"+elem.Sample_Date+"</td> <td>"+elem.Sources+"</td> <td>"+elem.Create_Date+"</td> <td>"+elem.Last_Edit+"</td> <td>"+elem.Edited_by+"</td></tr>");
    
  table.row.add( [elem.UPC12, elem.Description, elem.Sample_Date, elem.Sources,elem.Create_Date,elem.Last_Edit,elem.Edited_by] )
  .draw();
	});
  
   
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
	.submit_button{
		float:right;
		margin-bottom:-5px;
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
			
  <li><a href="index.php">Search</a></li>
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


	
		
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li class="active"><a href="importdata.php">Import Market Share </a></li>
    <li><a href="importlabel.php">Import Package Label</a></li>
    <li><a  href="importimages.php">Import Images</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


<section style="margin-top: 15px;" class="hidethis">

<div class="well" style="margin-right:2%;">
<div style="margin-top:-37px;"><strong><h3>Select an Excel File</h3></strong></div>

<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" id="form1">
	
	<label class="btn btn-primary" for="my-file-selector">
    <input id="my-file-selector" type="file" name="file_save" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">
    Browse
</label>
<span class='label label-info' id="upload-file-info"></span>
<div style="float:right;">
<label class="btn btn-primary" for="my-file-selector2">
    <input id="my-file-selector2" type="submit" onclick="myFunction()" style="display:none;" name="search" onchange="$('#upload-file-info').html($(this).val());">
    Import
</label></div>

	</form>
	
	</div>
</section>

	
	  </div> 
    <div id="menu1" class="tab-pane fade">

  </div>
    <div id="menu2" class="tab-pane fade">
 

  </div>
    <div >
	</div>
  </div>
  <div style="margin-top:10px;"><strong><h3>Report log file(s)</h3></strong></div>
  	<div id="hide" style="display:none; margin-bottom:3%;"><h3>Your data is being processed, this can take several minutes...</h3></div>
  <div style="height:400px; overflow:auto;"><?php include 'save_import.php';?></div>
</div>

		
	
		
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
	<script>
function myFunction() {
    document.getElementById("hide").style.display="block";;
}
</script>
</body>
</html>