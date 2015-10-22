<?php include(APPPATH.'themes/'.$this->config->item('theme').'/views/header.php'); ?>


<?php if(!$login_check):?>

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-login">
							<div class="greet">
								<h3>HELLO VALUE CUSTOMER</h3>
								<p>It Looks Like you wish to order without creating an account. So complete the form address below</p>
							</div>
							<?php echo form_open('secure/login', array('class'=>'form-horizontal', 'role'=>'form'))?>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" class="form-control" name="email" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="hidden" value="checkout/order_summary" name="redirect"/>
										<input type="hidden" value="submitted" name="submitted"/>
										<button type="submit" class="btn btn-block btn-orange">LOG IN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-2">
						<h1 class="form-intersection">OR</h1>
					</div>
					<div class="col-sm-6">
						<div class="form-register">
							<div class="greet">
								<h3>NEW CUSTOMER</h3>
								<p>It Looks Like you wish to order without creating an account. So complete the form address below</p>
							</div>
							<?php echo form_open('secure/register', array('class'=>'form-horizontal', 'role'=>'form')); ?>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="email" class="form-control" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>
									<div class="col-sm-6">
										<input type="password" class="form-control" name="confirm" placeholder="Confirm Password">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-6">
										<input type="text" class="form-control" name="firstname" placeholder="First Name">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="lastname" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" class="form-control" name="address1" placeholder="Address">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" class="form-control number" name="zip" placeholder="Zip Code">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<!-- <?php echo form_dropdown('province_id', $provinces_menu,  set_value('province_id', ''), '  id="f_province_id" class="form-control"');?> -->
										<input type="text" class="form-control" name="city" placeholder="City">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" class="form-control number" name="phone" placeholder="Phone Number">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
									<button type="submit" class="btn btn-block btn-orange">REGISTER</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

<?php else: ?>

			<div class="order-summary">
				<div class="container-fluid">
					<div class="arrow-steps">
						<div class="row">
							<div class="col-xs-3">
								<div class="arrow-step">
									<p>CART</p>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="arrow-step">
									<p>CHECKOUT</p>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="arrow-step active">
									<p>CONFIRM ORDER</p>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="arrow-step">
									<p>THANK YOU</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="payment-box">
								<h3 class="title"><span class="orange">SHIPPING</span> ADDRESS</h3>
								<div class="detail">
									<p><b>NAME :</b> <span>jonyeeee</span> <span>handokoaaa</span></p>
									<p><b>ADDRESS :</b> <span>pluit timue 2</span></p>
									<p><b>CITY : </b> <span>Ambon</span></p>
									<p><b>ZIP CODE : </b> <span>111</span></p>
									<p><b>PHONE NUMBER : </b> 01231231231</p>
								</div>
							</div>
							<div class="payment-box">
								<h3 class="title"><span class="orange">PAYMENT</span> METHOD</h3>
								<div class="detail">
									<p>BANK TRANSFER</p>
								</div>
							</div>
							<div class="payment-box">
								<h3 class="title"><span class="orange">DELIVERY</span> METHOD</h3>
								<div class="detail">
									<p>JNE REG - 45000</p>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<form id="order_submit_form" action="<?php echo site_url('checkout/place_order'); ?>" name="theForm" method="post">
								<div class="order-box">
									<h3 class="title"><span class="orange">ORDER</span> SUMMARY</h3>
									<div class="cart">
										<div class="view-cart">
											<div class="row">
												<div class="col-xs-12">
													<div class="panel">
														<div class="panel-heading">
															<div class="row">
																<div class="col-sm-6">
																	<p>PRODUCT</p>
																</div>
																<div class="col-sm-2">
																	<p>PRICE</p>
																</div>
																<div class="col-sm-2">
																	<p>QUANTITY</p>
																</div>
																<div class="col-sm-2">
																	<p>TOTAL</p>
																</div>
															</div>
														</div>
														<div class="panel-body">
															<?php
															$grandtotal = 0;
															$subtotal = 0;
															foreach ($this->go_cart->contents() as $cartkey=>$product):
															?>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="media">
																			<div class="pull-left">
																				<img class="media-object" width="100" src="<?php echo base_url('uploads/product/thumb/'.$product['images']);?>" alt="cart-2.jpg">
																			</div>
																			<div class="media-body">
																				<p class="media-heading"><?php echo $product['name']; ?></p>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-2">
																		<div class="row">
																			<div class="col-xs-6 col-sm-12">
																				<p class="price"><?php echo format_currency($product['base_price']); ?></p>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-2">
																		<div class="row">
																			<div class="col-xs-6 col-sm-12">
																				<p class="quantity"><?php echo $product['quantity'] ?></p>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-2">
																		<div class="row">
																			<div class="col-xs-6 col-sm-12">
																				<p class="price"><?php $subtotal = $product['base_price'] * $product['quantity']; echo format_currency($subtotal); $grandtotal += $subtotal; ?></p>
																			</div>
																		</div>
																	</div>
																</div>
															<?php endforeach;?>
														</div>
														<div class="panel-footer">
															<div class="row">
																<div class="col-sm-6"></div>
																<div class="col-sm-4">
																	<p>Total Item Price</p>
																</div>
																<div class="col-sm-2">
																	<p><?php echo format_currency($this->go_cart->subtotal());?></p>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6"></div>
																<div class="col-sm-4">
																	<p>Delivery Costs</p>
																</div>
																<div class="col-sm-2">
																	<p><?php echo "<span class='shipping'>".format_currency($this->go_cart->shipping_cost())."</span>";?></p>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6"></div>
																<div class="col-sm-4">
																	<p>Total</p>
																</div>
																<div class="col-sm-2">
																	<p><?php echo "<span class='grandtotal'>".format_currency($this->go_cart->total())."</span>"; ?></p>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-3"></div>
																<div class="col-sm-6">
																	<input id="redirect_path" type="hidden" name="redirect" value=""/>
																	<input type="hidden" name="process_order" value="true">
																	<br><br>
																	<button type="submit" class="btn btn-block btn-black">CONFIRM ORDER</button>
																</div>
																<div class="col-sm-3"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

<?php endif; ?>

<?php include(APPPATH.'themes/'.$this->config->item('theme').'/views/footer.php'); ?>