
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
<a href="<?php echo $_SERVER["CONTEXT_PREFIX"];?>/index.php">
<span>Food Component Data Repository</span>
</a>
</div>
<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="/theme-gcwu-fegc/assets/wmms.svg" aria-label="Symbol of the Government of Canada"></object>

</div>
<div id= "logout-but" style="float:right; margin-right:-13px;">					<?php
					if(isset($_SESSION['currentuser'])){
					echo "<li><a href='logout.php' class = 'btn btn-default'>Logout</a></li>"; }					
					
					?> </div>
</div>

</div>
<nav role="navigation" id="wb-sm" data-trgt="mb-pnl" class="wb-menu visible-md visible-lg" typeof="SiteNavigationElement">
	<div class="container nvbar">
		<h2>Topics menu</h2>
		<div class="row">
			<ul class="list-inline menu">

  <li><a href="<?php echo $_SERVER["CONTEXT_PREFIX"];?>/index.php">Search</a></li>
  <li> <a href="<?php echo $_SERVER["CONTEXT_PREFIX"];?>/product/create-product.php">Create Product</a></li>
				   <li><a  href="<?php echo $_SERVER["CONTEXT_PREFIX"];?>/market/importdata.php" >Import</a></li>

				<li><a href="#">Export</a></li>
			</ul>
		</div>
	</div>
</nav>
<nav role="navigation" id="wb-bc" property="breadcrumb">
<h2>You are here:</h2>
<div class="container">
<div class="row">
<!--      -->
</div>
</div>
</nav>
</header>
