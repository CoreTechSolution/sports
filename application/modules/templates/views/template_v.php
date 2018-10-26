<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<!-- Remove this after development Start -->
	<meta name="robots" content="noindex,nofollow,noodp,noydir,noarchive"/>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<!-- Remove this after development End -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700|Open+Sans:300,400,600,700|Raleway:300,400,500,600|Roboto:100,300,400,500,700|Lato:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.bxslider.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" media="only screen and (min-width: 321px) and (max-width: 480px)" href="<?php echo base_url('assets/css/styleMax480.css'); ?>">
	<title>Sports Pitches, Courts and Facilities</title>
</head>
<body>
<div class="wrapper1">
	<div class="container">
		<div class="row">
			<div class="col-xl-3">
				<div class="logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></a>
				</div>
			</div>
			<div class="col-xl-6">
				<ul class="nav justify-content-end headerNavMenu">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);">Sports</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0);">Find Players Online</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cities</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="javascript:void(0);">City 1</a>
							<a class="dropdown-item" href="javascript:void(0);">City 2</a>
							<a class="dropdown-item" href="javascript:void(0);">City 3</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-xl-3">
				<div class="login-signup">
					<ul>
						<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                        <li><a href="<?php echo base_url('signup'); ?>">Sign Up</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!---->
<div class="wrapper1_1">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" width="105" class="d-inline-block align-top" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);">About us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);">Sports</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);">Blog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);">Find Players Online</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle"href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cities</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:void(0);">City 1</a>
									<a class="dropdown-item" href="javascript:void(0);">City 2</a>
									<a class="dropdown-item" href="javascript:void(0);">City 3</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="login-signup">
					<ul>
						<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
						<li><a href="<?php echo base_url('signup'); ?>">Sign Up</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!---->
<?php $this->load->view($content_v); ?>

<div class="wrapper8">
	<div class="container">
		<div class="row">
			<div class="col-xl-3">
				<div class="footerlogo"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></div>
			</div>
			<div class="col-xl-5">
				<h2>Menu</h2>
				<div class="footermenu">
					<ul>
						<li><a href="javascript:void(0)">Cities</a></li>
						<li><a href="<?php echo base_url('signup'); ?>">Sign Up</a></li>
						<li><a href="javascript:void(0)">Privacy Policy</a></li>
						<li><a href="javascript:void(0)">About Us</a></li>
						<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
						<li><a href="javascript:void(0)">Terms & Conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4">
				<h2>Newsletter Subscription</h2>
				<div class="newsletter">
					<form method="post" action="">
						<input class="newsletter_email" type="text" name="newsletter_email" placeholder="Your email address">
						<input class="newsletter_submit" type="submit" name="newsletter_submit" value="GO">
					</form>
				</div>
				<div class="newsletter-contact">
					<table>
						<tr>
							<td><img src="<?php echo base_url('assets/images/phone-icon.png'); ?>"></td>
							<td><a href="tel:+1223334434" target="_blank">+1-223-3344-34</a></td>
						</tr>
						<tr>
							<td><img src="<?php echo base_url('assets/images/email-icon.png'); ?>"></td>
							<td><a href="mailto:info@bookyoursports.com" target="_blank">info@bookyoursports.com</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!---->
<div class="wrapper9">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="copyright">Copyright 2018 BOOK YOUR SPORTS</div>
			</div>
			<div class="col-xl-6">
				<div class="social-connects">
					<ul>
						<li><a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/facebook.png'); ?>"></a></li>
						<li><a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/twitter.png'); ?>"></a></li>
						<li><a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/google-plus.png'); ?>"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- JavaScript -->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.bxslider.min.js'); ?>"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('.bxslider').bxSlider({
            auto: true,
            pager: false,
            minSlides: 3,
            maxSlides: 6,
            moveSlides: 1,
            infiniteLoop: true,
        });
    })
</script>
</body>
</html>
