

<?php include 'session.php';?>
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
	<?php include("fill_product.php"); ?>
</head>
<body class="wide comments example">
	<?php include("header.php"); ?>
	
	
	<main role="main" property="mainContentOfPage" class="container">




		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
		
		<div class="container" >


  



<section style="margin-top: 15px;" class="hidethis">
<h3>Edit Product</h3>
<div id="confirm-message" style="color:#008000;"></div>

<div class="well" style="margin-right:2%;">
	<form role="form" method="post" action="#" id="vids-search-form">
	
	
		<div class="row">
		<div class="form-group col-xs-6">
				<label for="Description" class="required">Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control" style="width:540px" name="Description" id="Description" placeholder="Enter the Description" value="<?PHP echo $row['Description']; ?>" required/>
			</div>
			<div class="form-group col-xs-6">
				<label for="Classification_Number">Classification Number</label>
			
    <select class="form-control" id="Classification_Number" name="Classification_Number"  style="width:540px" onkeyup="showHint(this.value)">
	   <option value="<?PHP echo $row['Classification_Number']; ?>" selected="selected"><?PHP echo $row['Classification_Number']; ?></option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>

			
			
		</div>
			<?php include("fill_product.php"); ?>
		<div class="row">
				<div class="form-group col-sm-4">
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type" disabled="disabled" value="Sodium GBL"/>
			</div>
		<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand" value="<?PHP echo $row['Brand']; ?>" />
			</div>
				<div class="form-group col-sm-4">
				<label for="Manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the Manufacturer" value="<?PHP echo $row['Manufacturer']; ?>" />
			</div>
		
			

		
		</div>
		<div class="row">
					<div class="form-group col-sm-4">
				<label for="Cluster_ID">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="Cluster_ID"  placeholder="Enter the CNF Code" value="<?PHP echo $row['CNF_CODE']; ?>" />
			</div>
		
			
			<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter a Comment" value="<?PHP echo $row['Comments']; ?>"/>
			</div>
		
			<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster of the Product" value="<?PHP echo $row['Cluster_Number']; ?>"/>
			</div>
		</div>
			<div class="row">
			<div class="form-group col-sm-4 submit_button">
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</div>
		
	</form>
	</div>
	<?php include("save_product.php"); ?>
	<br>	 <?php echo " <a class=\"btn btn-default\" href=view_product.php?ProductID=" . $_GET['ProductID'] . ">Back</a>";  ?>

</section>

  </div>
   
</div>

		
	

<script>
function goBack() {
    window.history.back();
}
</script>
		
		

		</main>
<?php include 'footer.php';?>

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