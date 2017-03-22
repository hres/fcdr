<?php include 'session.php';?>
<?php include 'Check_ProductID.php';?>
<?php $sanitation_errors = array();?>
<?php include 'validate-product.php';?>
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
<noscript><link rel="stylesheet" href="./wet-boew/css/noscript.min.css" /></noscript>




	
	
		<style>
			.error {
    color:red;
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
	<?php include("fill_product.php"); ?>
</head>
<body class="wide comments example">
	<?php include("header.php"); ?>
	
	
	<main role="main" property="mainContentOfPage" class="container">




		<div class="fw-body" style="margin-left:-5px; margin-right:-5px;">
		
		<div class="container" >

<?php
// if (isset($_POST['search'])) {
	// if (count($sanitation_errors) != 0) {
		// foreach ($sanitation_errors as $error) {
			// echo "<div class=\"alert alert-danger\">";
			// echo "<strong>Error!</strong> Please correct the following field: $error";
			// echo "</div>";
		// }
	// }
// }
if (isset($_POST['search'])) {
	if (count($sanitation_errors) != 0) {
		foreach ($sanitation_errors as $error) {
?>
			<div class="alert alert-danger">
				<strong>Error!</strong> Please correct the following field: <?php $error;?>
			</div>";
<?php
		}
	}
}
?>

<section style="margin-top: 15px;" class="hidethis">
<h3>Edit Product</h3>
<div id="confirm-message" style="color:#008000;"></div>

<?php include("save_product.php"); ?>

<div class="well" style="margin-right:2%;">
	<form role="form" method="post" action="#" id="vids-search-form">
	
	
		<div class="row">

			<?php include("fill_product.php"); ?>
				<div class="form-group col-sm-4">
				<label for="Classification_Name">Classification Name</label>
    <select class="form-control" id="Classification_Name" name="Classification_Name" >
	   <option value="<?PHP echo $row['Classification_Number']; ?>" selected="selected"><?PHP echo $row['Classification_Name']; ?></option>
	<?php include 'List_Classification.php';?>
		
			 </select>
			</div>
			<div class="form-group col-sm-4">
				<label for="Classification_Number">Classification Number</label>
		<?php include("fill_product.php"); ?>	
    <select class="form-control" id="Classification_Number" name="Classification_Number"   onkeyup="showHint(this.value)">
	   <option value="<?PHP echo $row['Classification_Number']; ?>" selected="selected"><?PHP echo $row['Classification_Number']; ?></option>
	<?php include 'List_Classification_Number.php';?>
		
			 </select>
			</div>
				<div class="form-group col-sm-4">
				<label for="Classification_Type">Classification Type</label>
				<input type="text" class="form-control" name="Classification_Type" id="Classification_Type" placeholder="Enter the Classification Type" disabled="disabled" value="Sodium GBL"/>
			</div>
	
			
		</div>


			<?php include("fill_product.php"); ?>
		<div class="row">
				<div class="form-group col-sm-4">
				<label for="Manufacturer">Manufacturer</label>
				<input type="text" class="form-control" name="Manufacturer" id="Manufacturer" placeholder="Enter the Manufacturer" value="<?PHP echo $row['Manufacturer']; ?>" />
			</div>


		<div class="form-group col-sm-4">
				<label for="Brand">Brand</label>
				<input type="text" class="form-control" name="Brand" id="Brand" placeholder="Enter the Brand" value="<?PHP echo $row['Brand']; ?>" />
			</div>
					<div class="form-group col-sm-4">
				<label for="Cluster_ID">CNF Code</label>
				<input type="text" class="form-control" name="CNF_CODE" id="Cluster_ID"  placeholder="Enter the CNF Code" value="<?PHP echo $row['CNF_CODE']; ?>" />
			</div>
		
	

		
		</div>
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="Cluster_Number">Cluster Number</label>
				<input type="text" class="form-control" name="Cluster_Number" id="Cluster_Number" placeholder="Enter the Cluster of the Product" value="<?PHP echo $row['Cluster_Number']; ?>"/>
			</div>


								<div class="form-group col-sm-4">
				<label for="Description" class="required">Description <strong class="required">(required)</strong></label>
				<input type="text" class="form-control"  name="Description" id="Description" placeholder="Enter the Description" value="<?PHP echo $row['Description']; ?>" required/>
			</div>		
			<div class="form-group col-sm-4">
				<label for="Comments">Comments</label>
				<input type="text" class="form-control" name="Comments" id="Comments" placeholder="Enter a Comment" value="<?PHP echo $row['Comments']; ?>"/>
			</div>			

		</div>
			<div class="row">
			<div class="form-group col-sm-4 submit_button">
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</div>
		
	</form>
	</div>
	<?php // include("save_product.php"); ?>
	<br>	 <?php

	 echo " <a class=\"btn btn-default\" href=view_product.php?ProductID=" . $_GET['ProductID'] . ">Back</a>"; 
	 

	 
	  ?>

</section>

  </div>
   
</div>

		
	

<script>
function goBack() {
    window.history.back();
}
</script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="validate-product.js"></script>		
		

		</main>
<?php include 'footer.php';?>

	</div>
<?php include 'List_Classification_Object.php'?>
</body>
</html>
