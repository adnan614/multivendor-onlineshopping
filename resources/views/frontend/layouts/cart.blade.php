@extends('frontend.master')

@section('content')

<section id="cart_items">

		<div class="container">
						
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif
	
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
		</div>
    </section> 
    
    <section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>

				
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>BDT{{$total}}</span></li>
							<li>Delivery Charge <span>BDT 60</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>BDT {{$total+60}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->


@stop