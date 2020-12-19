@extends('frontend.master')

@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row ">
					<div class="col-sm-12" style="float:right">
						<div class="bill-to">
							<p style="margin-bottom: 50px;">Please Fill this form....</p>
							<div class="form-one">
								<form method="post" action="{{route('add.shipping')}}">
									@csrf
									<input type="email" placeholder="Enter Email Address" name="email">
									<input type="text" placeholder="Enter Name" name="name">
									<input type="text" placeholder="Enter address" name="address">
									<input type="text" placeholder="Enter city" name="city">
									<input type="text" placeholder="Enter country" name="country">
									<input type="number" placeholder="Enter Phone Number" name="phone_number">
									<select name="payment_method" id="payment_method" class="form-control">
                                   <option value="0">Select a payment method</option>
										
										<option value="1">Cash On Delivery</option>
										
										
									</select>

									<button type="submit" class="btn btn-primary">Place order</button>
								</form>
							</div>
						</div>
					</div>
									
				</div>
			</div>
	</section>

@stop