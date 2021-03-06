<?php include 'session.php';?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=e05f4cd9972d1e8bde5217487a96b110">
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


<script>

$(function(){
	$('#vids-search-form2').submit(function (event) {
		//This code runs when the 'airport_code' form is submitted. We use the event variable to stop it from actually sending the data and refreshing the page

		//No need to mess around setting variables for data and putting them in a URL data string, serialize() will do all that for you. If you're using PHP POST vars on the output page, they will have the same name as the inputs in the form

		//This post function is just a shorthand version of the AJAX post you were using
		$.post('search_package.php', $(this).serialize(), 
			function(data) {
			//The data var is what it returned by the AJAX call. It should contain everything that's outputted on output.php

				//We've got the data, now do something with it! Like stick it in the #msg <div>
				//$('#msg').html(data);
			var table = $('#example3').DataTable();
			  $.each(data, function(idx, elem){
       table.append("<tr><td>"+elem.UPC12+"</td><td>"+elem.Description+"</td>   <td>"+elem.Sample_Date+"</td> <td>"+elem.Sources+"</td> <td>"+elem.Create_Date+"</td> <td>"+elem.Last_Edit+"</td> <td>"+elem.Edited_by+"</td></tr>");
 
			
			});
		

		//Return false is a bit of an overkill. This is a much better way of stopping the form submitting
		event.preventDefault();
	});
}); 


</script>



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
	
	
	
		<style>
		.mainsearch{
			border-style: solid;
			border-color:#F0F0F0 ;
			
		}
		
		
	

	</style>
</head>
<body class="wide comments example">
<?php include 'header.php';?>
<main role="main" property="mainContentOfPage" class="container">




		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">

		<div class="container" id="tabs" >
		<div style="height:400px; margin-top:3%;">
		
		<?php include("save-relink-market.php"); ?>
		</div>

  

</div>

		
	
		
		

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