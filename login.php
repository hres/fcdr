
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<?php

ini_set('session.cookie_httponly', true);
session_start();



if(isset($_SESSION['currentuser'])){
header("location: index.php");
}
  //$_POST['token'] =  rtrim($_POST['token']);
 //$_SESSION['token'] =   rtrim($_SESSION['token']);

	if(isset($_POST['search'])){
			 if (!hash_equals(trim($_SESSION['token']),trim($_POST['token']))) {
				  header ('Location: error404.php');
			 }
	}
     $_SESSION['token'] = bin2hex(random_bytes(32));
	$token = $_SESSION['token'];

 ?>
<?php $sanitation_errors = array();?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>FCDR</title>
	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./theme-gcwu-fegc/css/theme.min.css">


<script src="https://formden.com/static/cdn/formden.js" integrity="sha384-MsKPMz6b6gP+SF0UXTkFPd6Vvm5s+oHuVfmfyMON0VCCrbPYxan15zuNk5sIQQBO" crossorigin="anonymous"></script>
<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" integrity="sha384-34U14a9ISTviFf44/OGfcoBiXJTk4jYxkR3fNtRqGxyCbsUyRM90SuD3D7Mmy4Bz" crossorigin="anonymous">

<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" integrity="sha384-MI32KR77SgI9QAPUs+6R7leEOwtop70UsjEtFEezfKnMjXWx15NENsZpfDgq8m8S" crossorigin="anonymous">
<!--Font Awesome (added because you use icons in your prepend/append)-->


<!--<![endif]-->
<!--[if lt IE 9]>
<link href="./theme-gcwu-fegc/assets/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="./theme-gcwu-fegc/css/ie8-theme.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./wet-boew/js/ie8-wet-boew.min.js"></script>
<![endif]-->

<script type="text/javascript">
/*
$(function(){
	$("#testJSON").submit(function(event){
          event.preventDefault();

		$(this).find(".error").remove();
		 pass = $(this).find("input[name=psw]").val();
		 user = $(this).find("input[name=uname]").val();
          //token2 = $(this).find("input[name=token]").val();
		 loginInput = $(this).find("input[name=uname]");
		 passordInput= $(this).find("input[name=psw]");

		 form=$(this);

		 url = $(this).attr("action");
		
	
		$.post(url,{psw:pass, uname:user}, function(data){	
			console.log(data);
			 if(data.error =="No"){
				form.fadeOut();
				form.before(data.success);
				
			}else{
			
					passordInput.after(data.errorPassword);
				
				form.append(data.error);
			} 
		
		},"json");
		return false;
				
		
	});
	
	
	
	
});*/

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


<?php
if (isset($_POST['search']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  
  include("save_session.php"); 

	if (count($sanitation_errors) == 0) {
		//include("new-product.php");

        ?>
        			<div class="alert alert-success">
                <strong>Success!</strong> You have successfully logged in as <strong><?php echo "<span style=\"color:red\"> " . $_SESSION['currentuser']."</span> Redirecting to the home page <script>setTimeout(\"location.href = 'index.php';\",2800);</script>" ;?></strong>
			</div>
            <?php
	} else {
		foreach ($sanitation_errors as $error) {
?>
			<div class="alert alert-danger">
				<strong>Error!</strong> Wrong Password and/or Username <strong><?php ?></strong>
			</div>
<?php
		}
	}
}
?>
<form  role="form" method="post" id="testJSON" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">


  <div class="container2">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" autocomplete="off" required>
    <input type="hidden" name="token" value = "<?php echo $token; ?>"/>
    <button type="submit" name="search">Login</button>
  </div>


</form>


		
	
		
	
		</main>

		<?php include 'footer.php';?>

</body>
</html>
<?php
if (isset($_POST['logoutbutton'])&& isset($_SESSION['currentuser']) && $_SERVER["REQUEST_METHOD"] == "POST") {

	//$_SESSION = array(); 

	if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
header("location: login.php");

}
?>