<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=ucfirst($titlu);?></title>
    <link href="<?=base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/animate.css" rel="stylesheet">
	<link href="<?=base_url();?>public/css/main.css" rel="stylesheet">
	<link href="<?=base_url();?>public/css/responsive.css" rel="stylesheet">
	<link href="<?=base_url();?>public/css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url();?>public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url();?>public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url();?>public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>public/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url();?>"><img src="<?=base_url();?>public/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="cos.php"><i class="fa fa-shopping-cart"></i> Cos</a></li>
								<?php if(!empty($_SESSION['email'])) { ?>
									<li><a href="<?=base_url();?>cont/logout"><i class="fa fa-lock"></i> Logout</a></li>
								<?php } else { ?>
									<li><a href="<?=base_url();?>cont"><i class="fa fa-lock"></i> Login</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=base_url()?>" class="active">Homepage</a></li>
								<li><a href="<?=base_url()?>lista" class="active">Produse</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->