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
							<p style="margin-bottom: 50px;">Please Fill those form....</p>
							<div class="form-one">
								<form method="post" action="{{route('add.shipping')}}">
									@csrf
									<input type="email" placeholder="Enter Email Address" name="email">
									<input type="text" placeholder="Enter Name" name="name">
									<input type="text" placeholder="Enter address" name="address">
									<input type="text" placeholder="Enter city" name="city">
									<input type="text" placeholder="Enter country" name="country">
									<input type="number" placeholder="Enter Phone Number" name="phone_number">
									<button type="submit" class="btn btn-primary">Done</button>
								</form>
							</div>
						</div>
					</div>
									
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
					@foreach(session()->get('cart')??[] as $key=>$data)
				
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{asset('upload/'.$data['image'])}}" alt="" width="75px" height="75px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$data['name']}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$data['price']}} BDT</p>
							</td>
							<td class="cart_quantity">
							<form method="post" action="{{route('cart.update',$key)}}">

								@csrf
								@method('PUT')
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input"style="width: 80px;"
									type="number" name="quantity" min="1" value="{{$data['quantity']}}">
									<button type="submit" style="margin-left:20px;" class="cart_quantity_update"><i class="fa fa-refresh" aria-hidden="true"></i></button>
								</div>
							</form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$data['quantity']*$data['price']}} BDT</p>
							</td>
							
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{route('cart.remove',$key)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						
                 @endforeach
						
						
					</tbody>
				</table>
			</div>

			<section id="do_action">
		<div class="container">
			<div class="row">			
				<div class="col-md-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>BDT{{$total}}</span></li>
							<li>Delivery Charge <span>BDT 60</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>BDT {{$total+60}}</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="col-sm-12" style="margin-top: -90px;">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>	
							<p class="text-center">Created with bootsrap button and using radio button</p>
					</div>
					<form style="text-align:center;">
                        <input type="radio" name="payment_method" value="handCash">Hand Cash <br>
						<input type="radio" name="payment_method" value="bkash"> Bkash <br>
						<button type="submit" class="btn btn-primary">Done</button>
					</form>
				</div>
	
	</section>

@stop