
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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

<script type="text/javascript">
$(function(){
	$("#testJSON").submit(function(event){
		$(this).find(".error").remove();
		 pass = $(this).find("input[name=psw]").val();
		 user = $(this).find("input[name=uname]").val();
		 loginInput = $(this).find("input[name=uname]");
		 passordInput= $(this).find("input[name=psw]");
		 form=$(this);

		 url = $(this).attr("action");
		  console.log(url);
		 console.log(user);
		$.post(url,{psw:pass, uname:user}, function(data){	
		 console.log(data);
			 if(data.error =="No"){
				 console.log("OYESSSOo");
				form.fadeOut();
				form.before(data.success);
				
			}else{
				if(data.errorUsername){
					loginInput.after(data.errorUsername);
				}
					if(data.errorPassword){
					passordInput.after(data.errorPassword);
				}
				form.append(data.error);
			} 
		
		},"json");
		return false;
				
		
	});
	
	
	
	
});

</script>


<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container2 {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
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
<a href="index.php">
<span>Food Component Data Repository</span>
</a>
</div>
<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="./theme-gcwu-fegc/assets/wmms.svg" aria-label="Symbol of the Government of Canada"></object>

</div>
</div>
</div>

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

<form  method="post" id="testJSON"  action="save_session.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container2">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>


</form>


		
	
		
	
		</main>

		<?php include 'footer.php';?>



</body>
</html>