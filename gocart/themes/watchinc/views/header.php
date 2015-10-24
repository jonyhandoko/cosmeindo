<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=1170, user-scalable=yes">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">

		<title>Cosme Indo <?php if (isset($page_title)) echo ' - '.$page_title;?></title>

		<link href="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/css/init.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/css/plug.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/css/devs.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/css/style.css');?>" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<script src="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/js/modernizr.min.js');?>"></script>
		<script src="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/js/init.js');?>"></script>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('images/watchinc/ico/apple-touch-icon-144-precomposed.ico');?>">
		<link rel="shortcut icon" href="<?php echo base_url('images/watchinc/ico/favicon.ico');?>">
	</head>
	<body>

		<div class="def-header">
			<div class="container-fluid">
				<nav class="navbar navbar-default navbar-static-top">
					<div class="navbar-header">
						<button class="navbar-toggle navbar-toggle-left collapsed" data-toggle="collapse" data-target="#category" aria-expanded="false" aria-controls="category">
							<img alt="Menu" src="<?php echo base_url('/images/watchinc/icon/menu.png');?>">
						</button>
						<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#advance" aria-expanded="false" aria-controls="advance">
							<img alt="Bag" src="<?php echo base_url('/images/watchinc/icon/shopping-bag.png');?>">
						</button>
						<a class="navbar-brand" href="<?php echo base_url('/');?>">
							<img alt="Watchinc" src="<?php echo base_url('/images/watchinc/brand.png');?>" class="img-responsive">
						</a>
					</div>
					<div id="advance" class="navbar-collapse collapse">
					</div>
					<div id="category" class="navbar-collapse yamm collapse">
						<ul class="nav navbar-nav text-center def-list">
							<li><a href="<?php echo base_url('/make_up');?>">MAKE UP</a></li>
							<li><a href="<?php echo base_url('/skin_care');?>">SKIN CARE</a></li>
							<li><a href="<?php echo base_url('/fragnance');?>">FRAGNANCE</a></li>
							<li><a href="<?php echo base_url('/bath_and_body');?>">BATH AND BODY</a></li>
							<li><a href="<?php echo base_url('/nails');?>">NAILS</a></li>
							<li><a href="<?php echo base_url('/hair');?>">HAIR</a></li>
							<li><a href="<?php echo base_url('/men');?>">MEN</a></li>
							<li><a href="<?php echo base_url('/gifts');?>">GIFTS</a></li>
							<li><a href="<?php echo base_url('/sale');?>">SALE</a></li>
							<li><a href="<?php echo base_url('/brands');?>">BRANDS</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="search-block closed">
				<a class="search-close">CLOSE</a>
				<div class="container">
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<form method="post" action="<?php echo base_url('/cart/search');?>">
								<div class="form-group">
									<label class="sr-only" for="exampleInputAmount">Search</label>
									<div class="input-group">
										<div class="input-group-addon">
											<img src="<?php echo base_url('/images/watchinc/icon/white-search.png');?>">
										</div>
										<input type="text" class="form-control" placeholder="Enter words you want to search">
									</div>
								</div>
							</form>
						</div>
						<div class="col-sm-3"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="def-content">
			<?php
				if ($this->session->flashdata('message')) {
					echo '<div class="gmessage">'.$this->session->flashdata('message').'</div>';
				}
				if ($this->session->flashdata('error')) {
					echo '<div class="error">'.$this->session->flashdata('error').'</div>';
				}
				if (!empty($error)) {
					echo '<div class="error">'.$error.'</div>';
				}
			?>
