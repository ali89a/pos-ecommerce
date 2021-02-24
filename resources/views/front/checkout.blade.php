@extends('layouts.front-app')

@section('front-content')
<!-- Main Container  -->
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="{{ route('front') }}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('checkout') }}">Checkout</a></li>

	</ul>

	<div class="row">
		<!--Middle Part Start-->
		<div id="content" class="col-sm-12">
			<h2 class="title">Checkout</h2>
			<div class="so-onepagecheckout row">
				<form method="POST" action="{{route('orders.store')}}">
					{{-- <form method="POST" action="{{route('new-order')}}"> --}}


					@csrf
					<div class="col-left col-sm-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
							</div>
							<div class="panel-body">
								<div class="radio">
									<label>
										<input type="radio" value="register" name="account">
										Register Account</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" checked="checked" value="guest" name="account">
										Guest Checkout</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="returning" name="account">
										Returning Customer</label>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
							</div>
							<div class="panel-body">
								<fieldset id="account">
									<div class="form-group required">
										<label for="input-payment-firstname" class="control-label">Name</label>
										<input type="text" class="form-control" id="input-payment-firstname" placeholder="Name" value="" name="name">
									</div>

									<div class="form-group required">
										<label for="input-payment-email" class="control-label">E-Mail</label>
										<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
									</div>
									<div class="form-group required">
										<label for="input-payment-telephone" class="control-label">Mobile</label>
										<input type="text" class="form-control" id="input-payment-telephone" placeholder="Mobile" value="" name="mobile">
									</div>

								</fieldset>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
							</div>
							<div class="panel-body">
								<fieldset id="address" class="required">
									<div class="form-group required">
										<label for="input-payment-address-1" class="control-label">Address</label>
										<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address">
									</div>

									<div class="form-group required">
										<label for="input-payment-city" class="control-label">City</label>
										<input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
									</div>
									<div class="form-group required">
										<label for="input-payment-postcode" class="control-label">Post Code</label>
										<input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" checked="checked" value="1" name="shipping_address">
											My delivery and billing addresses are the same.</label>
									</div>
								</fieldset>
							</div>
						</div>
					</div>
					<div class="col-right col-sm-9">
						<div class="row">
							<div class="col-sm-12">
								<div class="panel panel-default no-padding">
									<div class="col-sm-6 checkout-shipping-methods">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
										</div>
										<div class="panel-body ">
											<p>Please select the preferred shipping method to use on this order.</p>
											<div class="radio">
												<label>
													<input type="radio" name="shipping_method">
													Inside Dhaka - 60.00</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="shipping_method">
													Outside Dhaka - 100.00</label>
											</div>

										</div>
									</div>
									<div class="col-sm-6  checkout-payment-methods">
										<div class="panel-heading">
											<h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
										</div>
										<div class="panel-body">
											<p>Please select the preferred payment method to use on this order.</p>
											<div class="radio">
												<label><input type="radio" name="payment_method" value="Cash">Cash On Delivery</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="payment_method">Paypal</label>
											</div>
										</div>
									</div>
								</div>



							</div>



							<div class="col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon?</h4>
									</div>
									<div class="panel-body row">
										<div class="col-sm-6 ">
											<div class="input-group">
												<input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
												<span class="input-group-btn">
													<input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
									</div>
									@php
									$content=Cart::content();
									@endphp
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<td class="text-center">Image</td>
														<td class="text-left">Product Name</td>
														<td class="text-left">Quantity</td>
														<td class="text-right">Unit Price</td>
														<td class="text-right">Total</td>
													</tr>
												</thead>
												<tbody>
													@php

													$total = 0;
													@endphp
													@foreach ($content as $row)
													<tr>

														<td class="text-center"> <a href="{{route('single.product',$row->options->slug)}}"><img src="{{asset('storage/'.$row->options->img_url)}}" style="height: 50px;" alt="Pariatur porking" title="Pariatur porking" class="img-thumbnail"></a>
														</td>

														<td class="text-left"><a href="{{route('single.product',$row->options->slug)}}"><?php echo $row->name; ?></a>
														</td>
														<td class="text-left">
														<?php echo $row->qty; ?>
														</td>
														<td class="text-right">&#x9F3; <?php echo $row->price; ?></td>
														<td class="text-right">&#x9F3; <?php echo $row->priceTotal; ?></td>
													</tr>
													@php
													$total += $row->subtotal;
													@endphp
													@endforeach
												</tbody>
												<tfoot>
													<tr>
														<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
														<td class="text-right">&#x9F3; <?php echo Cart::subtotal(); ?></td>
														<input type="hidden" value="{{$total}}" name="subtotal">
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Coupon Discount:</strong></td>
														<td class="text-right">&#x9F3; 4.69.00</td>
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Shipping Cost:</strong></td>
														<td class="text-right">&#x9F3; 4.69.00</td>
													</tr>
													<tr>
														<td class="text-right" colspan="4"><strong>Total:</strong></td>
														<td class="text-right">&#x9F3; <?php echo Cart::subtotal(); ?></td>
														<input type="hidden" value="{{$total}}" name="grandtotal">
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><i class="fa fa-pencil"></i> Terms & Conditions </h4>
									</div>
									<div class="panel-body">
										<label class="control-label" for="confirm_agree">
											<input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
											<span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
										<div class="buttons">
											<div class="pull-right">
												<input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
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
		<!--Middle Part End -->

	</div>
</div>
<!-- //Main Container -->
@endsection