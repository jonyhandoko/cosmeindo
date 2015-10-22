<?php

	$provinces = $this->Place_model->get_jne_one_menu($customer['ship_address']['country']);
	$s_address1	= array('id'=>'ship_address1', 'class'=>'ship input ship_req', 'name'=>'ship_address1', 'value'=>@$customer['ship_address']['address1']);
	$s_address2	= array('id'=>'ship_address2', 'class'=>'ship input', 'name'=>'ship_address2', 'value'=> @$customer['ship_address']['address2']);
	$s_first	= array('id'=>'ship_firstname', 'class'=>'ship input ship_req', 'name'=>'ship_firstname', 'value'=> @$customer['ship_address']['firstname']);
	$s_last		= array('id'=>'ship_lastname', 'class'=>'ship input ship_req', 'name'=>'ship_lastname', 'value'=> @$customer['ship_address']['lastname']);
	$s_email	= array('id'=>'ship_email', 'class'=>'ship input ship_req', 'name'=>'ship_email', 'value'=>@$customer['ship_address']['email']);
	$s_phone	= array('id'=>'ship_phone', 'class'=>'ship input ship_req', 'name'=>'ship_phone', 'value'=> @$customer['ship_address']['phone']);
	// $s_city		= array('id'=>'ship_city', 'class'=>'ship input ship_req', 'name'=>'ship_city', 'value'=>@$customer['ship_address']['city']);
	$s_zip		= array('id'=>'ship_zip', 'maxlength'=>'10', 'class'=>'ship input ship_req', 'name'=>'ship_zip', 'value'=> @$customer['ship_address']['zip']);

?>

	<div class="customer-detail">
		<div id="customer_error_box" class="error error-box"></div>
			<h3 class="title-section"><?php echo lang('customer_information');?></h3>
			<form class="form-horizontal"	 id="customer_info_form">
				<div class="thing">
					<div class="form-group">
						<div class="col-sm-12">
							<?php if($this->Customer_model->is_logged_in(false, false)) : ?>
								<div>
									<button type="button" class="btn btn-block btn-orange address_picker" rel="ship">CHOOSE SHIPPING ADDRESS</button>
									<br>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="form-group">
						<input type="hidden" name="ship_email" value="<?php echo $customer['ship_address']['email'];?>"/>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="ship_firstname" name="ship_firstname" placeholder="First Name"  value="<?php echo $customer['ship_address']['firstname'];?>">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="ship_lastname" name="ship_lastname" placeholder="Last Name"  value="<?php echo $customer['ship_address']['lastname'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="ship_address1" name="ship_address1" placeholder="Address 1"  value="<?php echo $customer['ship_address']['address1'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="ship_address2" name="ship_address2" placeholder="Address 2"  value="<?php echo (!empty($customer['ship_address']['address2']))?$customer['ship_address']['address2'].'':'';?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<?php echo form_dropdown('ship_province_id',$provinces, @$customer['ship_address']['province_id'], 'id="ship_province_id" class="form-control ship input ship_req"');?>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control number" id="ship_sip" name="ship_zip" placeholder="Zip Code"  value="<?php echo $customer['ship_address']['zip'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control number" id="ship_phone" name="ship_phone" placeholder="Phone Number"  value="<?php echo $customer['ship_address']['phone'];?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="button" class="btn btn-block btn-black" onclick="save_customer();">UPDATE ADDRESS</button>
						</div>
					</div>
				</div>
			</form>
			<br>
			<table>
				<tr>
					<td><img id="save_customer_loader" class="dn" alt="loading" src="<?php echo base_url('images/ajax-loader.gif');?>"/></td>
				</tr>
			</table>
			<?php if ($this->Customer_model->is_logged_in(false, false)) : ?>
			<div id="stored_addresses" class="dn">
				<div id="address_manager">
					<h3 class="text-center"><?php echo lang('your_addresses');?></h3>
					<div id="address_list" class="address-list">
					<?php
					$c = 1;
					foreach($customer_addresses as $a):?>
						<div class="my_account_address" id="address_<?php echo $a['id'];?>">
							<div class="address-block">
								<div class="address-item">
									<?php
									$b	= $a['field_data'];
									echo nl2br(format_address($b));
									?>
								</div>
								<div class="address_toolbar">
									<button type="button" class="btn btn-black btn-sm choose_address" onclick="populate_address(<?php echo $a['id'];?>); $.colorbox.close()"><?php echo lang('form_choose');?></button>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
			<?php endif;?>
		</div>
		<div>
			<input type="hidden" id="php-boolean-require-shipping" value="<?php echo ($this->go_cart->requires_shipping()) ? 'true' : 'false'; ?>">
			<input type="hidden" id="php-url-get-cities-menu" value="<?php //echo site_url('https://www.scarletcollection.com/secure/get_cities_menu'); ?>">
			<input type="hidden" id="php-url-save-customer" value="<?php echo site_url('checkout/save_customer');?>">
			<input type="hidden" id="php-message-communication-error" value="<?php echo lang('communication_error');?>">
			<input type="hidden" id="php-url-get-zone-menu" value="<?php echo site_url('locations/get_zone_menu');?>">
			<input type="hidden" id="php-url-jne-one-cities-menu" value="<?php echo site_url('/places/get_jne_one_cities_menu');?>">
			<textarea id="php-customer-addresses" class="dn">
			<?php $add_list = array(); foreach($customer_addresses as $row) { $add_list[$row['id']] = $row['field_data']; } $add_list = json_encode($add_list); echo "$add_list" ?>
			</textarea>
		</div>
	</div>

	<script src="<?php echo base_url('gocart/themes/'.$this->config->item('theme').'/js/customer-detail.js');?>"></script>
