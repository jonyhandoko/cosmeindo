<?php
	$ship	= $customer['ship_address'];
?>

		<div class="greet">
			<p>Please enter your valid address</p>
		</div>
		<div class="thing">
			<div class="row">
				<div class="col-sm-12">
					<button type="button" class="btn btn-block btn-orange" onclick="get_customer_form();">CHANGE ADDRESS</button>
					<br/><br/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-6">
					<input type="text" class="form-control" name="city" placeholder="First Name" disabled value="<?php echo $ship['firstname'];?>">
				</div>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="state" placeholder="Last Name" disabled value="<?php echo $ship['lastname'];?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="address" placeholder="Address 1" disabled value="<?php echo $ship['address1'];?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="address" placeholder="Address 2" disabled value="<?php echo (!empty($ship['address2']))?$ship['address2'].'':'';?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-6">
					<input type="text" class="form-control" name="city" placeholder="Province" disabled value="<?php echo $ship['province'];?>">
				</div>
				<div class="col-sm-6">
					<input type="text" class="form-control number" name="zipCode" placeholder="Zip Code" disabled value="<?php echo $ship['zip'];?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control number" name="phone" placeholder="Phone Number" disabled value="<?php echo $ship['phone'];?>">
				</div>
			</div>
		</div>
		<br><br>
		<div class="greet">
			<p>Please enter order note (like size or color, etc)</p>
		</div>
		<div class="thing">
			<div class="form-group">
				<div class="col-sm-12">
					<textarea class="form-control" rows="4" placeholder="* order note" style="resize: none;"	></textarea>
				</div>
			</div>
		</div>

		<div>
			<input type="hidden" id="php-boolean-address-update" value="<?php if(isset($address_update) && $address_update == 1):?><?php echo '1';?><?php else:	?><?php echo '0';?><?php endif;?>">
			<input type="hidden" id="php-format-currency-shipping-cost" value="<?php echo format_currency($this->go_cart->shipping_cost());?>">
			<input type="hidden" id="php-format-currency-total" value="<?php echo format_currency($this->go_cart->total());?>">
			<input type="hidden" id="php-format-currency-jne-reg" value="<?php echo format_currency($jne->reg);?>">
			<input type="hidden" id="php-format-currency-jne-yes" value="<?php echo format_currency($jne->yes);?>">
		</div>
