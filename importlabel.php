<?php


 include 'session.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {



			 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
				  header ('Location: error404.php');
			 }
	}
     $_SESSION['token'] = bin2hex(random_bytes(32));
	$token = $_SESSION['token'];




?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" integrity="sha384-o6l2EXLcx4A+q7ls2O2OP2Lb2W7iBgOsYvuuRI6G+Efbjbk6J4xbirJpHZZoHbfs" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  



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
		
		.well{
		
    background-color:  	hsl(60, 100%, 98%);
		}
		
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
    <li ><a  href="importdata.php">Import Market Share</a></li>
    <li class="active"><a  href="importlabel.php">Import Package Label</a></li>
	 <li ><a  href="importimages.php">Import Images</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane ">
		
	  </div> 
 
    <div id="menu2" class="tab-pane fade in active">
 
<section style="margin-top: 15px;" class="hidethis">

<div class="well" style="margin-right:2%;">
<div style="margin-top:-37px;"><strong><h3>Select a CSV file (Maximum size: 585 kb) </h3></strong></div>

<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" id="form1">
	
	<label class="btn btn-primary" for="my-file-selector">
    <input id="my-file-selector" type="file" name="file_save" style="display:none;" onchange="$('#upload-file-info').html($(this).val().replace(/.*[\/\\]/,''));">
    Browse
</label>
<span class='label label-info' id="upload-file-info"></span>
<input type="hidden" name="token" value = "<?php echo $token; ?>"/>
<div style="float:right;">
<label class="btn btn-primary" for="my-file-selector2">
  <!--  <input id="my-file-selector2" type="submit" style="display:none;" onclick="myFunction()" name="search" onchange="$('#upload-file-info').html($(this).val());" disabled>-->
   	<input id="my-file-selector2" type="button" style="display:none" />

    Import
</label></div>

	</form>
	
	</div>
</section>



  </div>
     <div id="menu1" class="tab-pane ">

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
	include 'label_import_csv.php';
}
?>
</div>
 
 
 </div>
</div>

		
	
		
	
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
    $(this).parent().siblings('.date1').trigger('focus');
});
		})
</script>


		<script>
	$(document).ready(function(){
				$('.input-group').find('.fa-calendar').on('click', function(){
    $(this).parent().siblings('.date2').trigger('focus');
});
		})
</script>
<script>
function myFunction() {
    document.getElementById("hide").style.display="block";;
}
</script>
<script type="text/javascript">
$(document).ready(
    function(){
        $('input:file').change(
            function(){
                if ($(this).val()) {
                    $('input:submit').attr('disabled',false);
                    // or, as has been pointed out elsewhere:
                    // $('input:submit').removeAttr('disabled'); 
                } 
            }
            );
    });
	</script>

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
	if (size > 599040) {
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