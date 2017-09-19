
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<form method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" id="form1">
	

    <input id="my-file-selector" type="file" name="file_save"  >
  


		


  <!--  <input id="my-file-selector2" type="submit" onclick="myFunction()" style="display:none;" name="search" onchange="$('#upload-file-info').html($(this).val());" disabled>-->
     	<input  type="submit" value="SUBMIT" />




	</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {



	include 'loadfile.php';
}
?>

	<script type="text/javascript">
	$('#my-file-selector2').on('click', function() {
		

console.log("in function");


$("#form1").submit();
   include "loadfile.php";
});	
	
	</script>
</body>

</html>