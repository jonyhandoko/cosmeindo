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
			<div class="first-block">
				<div class="container-fluid">
					<nav class="navbar navbar-default navbar-static-top">
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-left">
								<?php if($this->Customer_model->is_logged_in(false, false)):?>
									<li><a class="disabled">WELCOME, <?php echo strtoupper($this->customer['firstname']);?></a></li>
									<li><a href="<?php echo base_url('/secure/my_account');?>">MY ACCOUNT</a></li>
									<li><a href="my_wishlist">MY WISH LIST</a></li>
									<li><a href="<?php echo base_url('/secure/logout');?>" class="bordered-menu">SIGN OUT</a></li>
								<?php else:?>
									<li><a href="<?php echo base_url('/secure/login');?>" class="bordered-menu">SIGN IN</a></li>
									<li><a href="<?php echo base_url('/secure/login');?>" class="bordered-menu">REGISTER</a></li>
								<?php endif;?>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a id="search"><i class="header-icon icon ion-ios-search-strong"></i>SEARCH</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle cart-anchor" data-toggle="dropdown" role="button" aria-expanded="false">
										<i class="header-icon icon ion-bag"></i>SHOPPING CART
										<span class="number-indicator"><?php echo $this->go_cart->total_items();?></span>
									</a>
									<ul class="dropdown-menu def-dropdown" role="menu">
										<?php
										$grandtotal = 0;
										$subtotal = 0;
										foreach ($this->go_cart->contents() as $cartkey=>$product_cart):?>
											<li>
												<a href="">
													<div class="media">
														<div class="media-left">
															<img class="media-object" width="70" src="<?php echo base_url('uploads/product/thumb/'.$product_cart['images']);?>">
														</div>
														<div class="media-body">
															<h5 class="media-heading"><?php echo $product_cart['name']; ?></h5>
															<p class="sub-heading"><?php echo $product_cart['quantity'] ?> X <?php echo format_currency($product_cart['base_price']);   ?></p>
														</div>
													</div>
												</a>
											</li>
											<li class="divider"></li>
										<?php endforeach; ?>
										<li class="total">
											<div class="separator">
												<div class="row">
													<div class="col-xs-5">
														<p>SUBTOTAL</p>
													</div>
													<div class="col-xs-7">
														<p class="text-right"><b><?php echo format_currency($this->go_cart->subtotal());?></b></p>
													</div>
												</div>
											</div>
											<button type="submit" onclick="window.location='<?php echo base_url('/cart/view_cart');?>';" class="btn btn-orange btn-block">CHECKOUT</button>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="second-block">
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
						<div id="category" class="navbar-collapse collapse">
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
