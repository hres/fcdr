
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

	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.colVis.min.js">
	</script>

	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">


<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


	
		<style>
		
		.well{
		
    background-color:  	hsl(60, 100%, 98%);
		}
		
		.mainsearch{
			border-style: solid;
			border-color:#F0F0F0 ;
			
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
	
	.submit_button{
		float:right;
		margin-bottom:-5px;
	}
	</style>
</head>
<body class="wide comments example">

<?php include 'header.php';?>

<main role="main" property="mainContentOfPage" class="container">

		
		<div class="container" id="tabs" >
  <ul class="nav nav-tabs">
    <li ><a  href="importdata.php">Import Market Share</a></li>
	 <li ><a  href="importlabel.php">Import Package Label</a></li>
	 <li class="active"><a  href="importimages.php">Import Images</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane ">
		
	  </div> 
 
    <div id="menu2" class="tab-pane fade in active">
 
<section style="margin-top: 15px;" class="hidethis">

	<div class="well" style="margin-right:2%;">

		<div style="margin-top:-37px;"><strong><h3>Select your images (allowed types: jpg, png, gif, jpeg)</h3></strong></div>

		<form id="first" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
			<label class="btn btn-primary" for="my-file-selector">
				<input id="my-file-selector" type="file"  name="files[]" style="display:none;" multiple>
				Browse
			</label>
			<div style="float:right;">
				<label class="btn btn-primary" for="my-file-selector2">
					<!--<input id="my-file-selector2" type="Submit" style="display:none;" name="search">-->
					<input id="my-file-selector2" type="button" style="display:none"/>
					Import
				</label>
			</div>
		</form>

		<form id="second">
		</form>

	</div>

</section>



  </div>
     <div id="menu1" class="tab-pane ">

  </div>
    <div >
	</div>
  </div>
  	<div class='label label-info' id="upload-file-info"></div>
  
  
  
    <div style="margin-top:10px;"><strong><h3>Report log file(s)</h3></strong></div>


	  <?php include 'saveimages.php';?>
</div>

		
	
		
	
		</main>
	<?php include 'footer.php';?>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>

$('#my-file-selector').on('change', function(e){
	var files = $(this).prop('files');
  for (var i = 0; i < files.length; i++) {
  console.log(files[i]);
  	$('#upload-file-info').append((files[i].name).fontsize(3) +"</br>");
  }
});

$('#my-file-selector2').on('click', function() {
	alert($('#my-file-selector').prop('files').length);
});

</script>

</body>
</html>
