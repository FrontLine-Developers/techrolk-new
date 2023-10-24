<head>

<!-- jQuery -->
<script src="shop-styles/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="shop-styles/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="shop-styles/css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="shop-styles/fonts/tech_fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="shop-styles/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="shop-styles/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="shop-styles/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>


 <!-- Favicon -->
 	<link rel="shortcut icon" href="shop-content/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="shop-contenticons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="shop-content/icons/logo-180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="shop-contenticons/logo-192.png">
    <meta name="msapplication-TileImage" content="shop-content/icons/logo-70.png">
    <meta name="msapplication-TileColor" content="#FF4747">

</head>

<header class="section-header">

<nav class="navbar navbar-dark navbar-expand p-0 bg-dark">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
		<li class="nav-item"><a class="nav-link" href="{{ urldecode(url('/')) }}">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ urldecode(url('/services')) }}">Services</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ urldecode(url('/shop')) }}">Shop</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ urldecode(url('/contact')) }}">Contact</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ urldecode(url('/about')) }}">About</a></li>
    </ul>
    <ul class="navbar-nav">
	<li class="nav-item"><a href="https://wa.me/94761943645" class="nav-link"> <i class="fab fa-whatsapp"></i> +94761943645 </a></li>
		<li class="nav-item dropdown">
		 	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> LKR </a>
		    <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
				<li><a class="dropdown-item" href="#">USD</a></li>
		    </ul>
		</li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-4">
		<div class="brand-wrap">
			<a href="index.html"><img class="logo" src="shop-content/icons/logo-name.png"></a>
		</div> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-12">
		<div class="search-container">
			<input type="text" id="search-input" placeholder="Search products..." >
			<button id="search-button" ><i class="fa fa-search" ></i></button>
			
		</div>

	</div> <!-- col.// -->
	<div class="col-lg-4 col-sm-6 col-8">
		<div class="widgets-wrap float-md-right">
			<div class="widget-header  mr-3">
				<a href="cart.html" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
				<a href="account-details.html" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
				<div class="text">
					<span class="text-muted">Welcome!</span>
						<a href="user-login.html">Sign in</a> |  
						<a href="user-register.html"> Register</a>
					</div>
				</div>
			</div>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->