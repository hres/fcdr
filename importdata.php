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



	<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="icon" type="image/x-icon">
<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">




<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->





	


	
		<style>
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
    <li class="active"><a href="importdata.php">Import Market Share </a></li>
    <li><a href="importlabel.php">Import Package Label</a></li>
    <li><a  href="importimages.php">Import Images</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">


<section style="margin-top: 15px;" class="hidethis">

<div class="well" style="margin-right:2%;">
<div style="margin-top:-37px;"><strong><h3>Select a CSV File (Maximum size: 1999 kb)</h3></strong></div>

<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" id="form1">
	
	<label class="btn btn-primary" for="my-file-selector">
    <input id="my-file-selector" type="file" name="file_save" style="display:none;" onchange="$('#upload-file-info').html($(this).val().replace(/.*[\/\\]/,''));">
    Browse
</label>
<span class='label label-info' id="upload-file-info"></span>
<div style="float:right;">
<label class="btn btn-primary" for="my-file-selector2">
  <!--  <input id="my-file-selector2" type="submit" onclick="myFunction()" style="display:none;" name="search" onchange="$('#upload-file-info').html($(this).val());" disabled>-->
     	<input id="my-file-selector2" type="button" style="display:none" />

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


<div class='label label-info' id="upload-file-info2"></div>


    <div style="margin-top:10px;"> <strong><h3>Import Results:</h3></strong></div>

 <div style="height:400px; overflow:auto;">
 
	<div id="post-file-info">
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	include 'impormarketcsv.php';
}
?>
</div>
 
 
 </div>

  
</div>

		
	
		
		</main>
<?php include 'footer.php';?>





	<script type="text/javascript">
	$('#my-file-selector2').on('click', function() {
		

console.log("in function");
	var input = document.getElementById('my-file-selector');

	$("#upload-file-info2").html("");

		

	$('#post-file-info').html("");
	if(!input){
			$('#upload-file-info2').html("<h2>Couldn't find the file input elemet</h2>");

	}else if(!input.files){

				$('#upload-file-info2').html("<h2>This Browser doesn't seem to support your file</h2>");
	
	}else if(!input.files[0]){
				$('#upload-file-info2').html("<h2>Must select a file</h2>");


	}else{

    var file= input.files[0];
	var size = file.size;
	if (size > 2046976) {
		$('#upload-file-info2').html("<h2>File is too big<br/>Upload a smaller file.</h2>");
	} else {
		$('#upload-file-info2').html("<h2>Your data is being processed, this can take several minutes...</h2>");
		$("#form1").submit();
	}

	}
});	
	
	</script>
</body>
</html>