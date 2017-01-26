
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

<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js">
	</script>



<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

	<script type="text/javascript" class="init">
	


$(document).ready(function() {
	$('#example').DataTable( {
   "columnDefs":[
     {
       "visible": false,
       "target": -1
     }
   ],
		dom: 'Bfrtip',
    "bFilter": false,
    
		buttons: [
			'copy', 'csv', 'excel',  'print'
		]
	} );
} );



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
    var table = $('#exampleX').DataTable( {
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

$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});


} );
	
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
	
	


<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>

<style type="text/css">


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

.well{
	background-color:  #ebf0fa;


}
</style>
</head>


<body class="wide comments example">
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<?php include 'header.php';?>


<main role="main" property="mainContentOfPage" class="container">

<div class="well" style="margin-right:2%;">

	<form role="form" method="post" action="#" id="vids-search-form1" >

	
		<div class="row">

				   <div class="form-group col-sm-4" >
      <label for="date2">
     Collection Date (YYYY-MM-DD) <br>From
      </label>
      <div class="">
       <div class="input-group">
      
        <input class="form-control" id="date2" name="date2" placeholder="YYYY/MM/DD" type="text" value=""/>
 <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>      
	  </div>
      </div>
     </div>

	 <div class="form-group col-sm-4">
	<label for="Sales_Year" name="Year_Recorded"><br>Sales Year</label>
      <select class="form-control" id="Sales_Year" name="Sales_Year">
	    <option value="">Select a year</option>
	
<?php include 'connection.php';?>	
		<?php

		$query = "select distinct Sales_Year from $dbname.Sales";
			$result = mysqli_query($conn,$query);

if (!$result) {
    echo "ERRORS";
}
	
	while($row = $result->fetch_assoc())  {
		echo "<option value=\"" .$row['Sales_Year'] . "\">" .$row['Sales_Year'] . "</option>";
	 }
		
	$conn->close();
?>	
      
      </select></div>
	  			<div class="form-group col-sm-4">
				<label for="Nielsen_Category"><br>Classification Number</label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category" placeholder="Enter the Neilson Category" />
			</div>
		</div>
		
		<div class="row">
		
	   <div class="form-group col-sm-4">
      <label for="date1">
     Collection Date (YYYY-MM-DD)<br> To
      </label>
      <div class="">
       <div class="input-group">
     
        <input class="form-control" id="date1" name="date1" placeholder="YYYY/MM/DD" type="text" value=""/>
          <div class="input-group-addon" >
         <i class="fa fa-calendar">
         </i>
        </div>
	   </div>
      </div>
     </div>
		
			<div class="form-group col-sm-4">
				<label for="Nielsen_Category"><br>Nielsen Category</label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category" placeholder="Enter the Neilson Category" />
			</div>
			<div class="form-group col-sm-4">
				<label for="Nielsen_Category"><br>Classification Type</label>
				<input type="text" class="form-control" name="Nielsen_Category" id="Nielsen_Category" placeholder="Enter the Neilson Category" />
			</div>
		
		</div>
					<div class="row">
			<div class="form-group col-sm-4 submit_button" >
				<button style="margin-top: 28px; float:right;" type="submit" class="btn btn-default" name="search">Save</button>
			</div>
		</div>
	</form>
	</div>

<div class="well" style="margin-right:2%; overflow:auto;">
<table id="example" class="display nowrap" cellspacing="0" width="100%">


<?php include 'reportqueries.php';?>
       

           

        </tbody>
    </table>	
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
function myFunction() {
    document.getElementById("hide").style.display="block";;
}
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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

</body>
</html>