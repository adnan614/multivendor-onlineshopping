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
							<td class="price">Size</td>
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
							<td class="cart_price">
								<p>{{$data['product_size']}}</p>
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
			<div class="row">			
				<div class="col-md-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>BDT{{$total}}</span></li>
							<li>Delivery Charge <span>BDT 60</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>BDT {{$total+60}}</span></li>
						</ul>
							<a class="btn btn-default check_out" href="{{route('checkout.form')}}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->


@stop