<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex,nofollow,noodp,noydir,noarchive"/>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">
	<title><?php echo $page_title; ?></title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<!-- Menu CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar-nav.min.css'); ?>">
	<!-- animation CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/admin-style.css'); ?>">
	<!-- color CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/default.css'); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
	<svg class="circular" viewBox="25 25 50 50">
		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
	</svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
	<!-- ============================================================== -->
	<!-- Topbar header - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<nav class="navbar navbar-default navbar-static-top m-b-0">
		<div class="navbar-header">
			<div class="top-left-part">
				<!-- Logo -->
				<a class="logo" href="<?php echo base_url('dashboard'); ?>">
					<img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="home" />
				</a>
			</div>
			<!-- /Logo -->
			<ul class="nav navbar-top-links navbar-right pull-right">
				<li>
					<a class="profile-pic" href="<?php echo base_url($this->session->userdata('user_role').'/edit_profile/'.$this->session->userdata('user_id')) ?>"> <img src="<?php echo base_url('assets/images/varun.jpg'); ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $login_as; ?></b></a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-header -->
		<!-- /.navbar-top-links -->
		<!-- /.navbar-static-side -->
	</nav>
	<!-- End Top Navigation -->
	<!-- ============================================================== -->
	<!-- Left Sidebar - style you can find in sidebar.scss  -->
	<!-- ============================================================== -->
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav slimscrollsidebar">
			<div class="sidebar-head">
				<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
			</div>
			<ul class="nav" id="side-menu">
				<li style="padding: 70px 0 0;">
					<a href="<?php echo base_url($this->session->userdata('user_role').'/dashboard'); ?>" class="waves-effect"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
				</li>
                <li>
                    <a href="<?php echo base_url($this->session->userdata('user_role').'/profile'); ?>" class="waves-effect"><i class="fas fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="<?php echo base_url($this->session->userdata('user_role').'/become-league-owner'); ?>" class="waves-effect"><i class="fab fa-galactic-republic"></i> League Owner</a>
                </li>
				<li>
					<a href="<?php echo base_url('logout'); ?>" class="waves-effect"><i class="fas fa-sign-out-alt"></i> Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Left Sidebar -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Page Content -->
	<!-- ============================================================== -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row bg-title">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h4 class="page-title"><?php echo $nav_title; ?></h4>
				</div>
			</div>
			<?php $this->load->view($page_content); ?>
		</div>
		<!-- /.container-fluid -->
		<footer class="footer text-center">Copyright <?php echo date('Y'); ?> BOOK YOUR SPORTS</footer>
	</div>
	<!-- ============================================================== -->
	<!-- End Page Content -->
	<!-- ============================================================== -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/sidebar-nav.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/waves.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
</body>
</html>