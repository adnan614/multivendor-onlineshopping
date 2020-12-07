@extends('frontend.master')

@section('content')



<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($categoryShow as $cat)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
									<a  href="{{route('categoryWiseShow',  $cat->id)}}">
											{{$cat->name}}
										</a>
									</h4>
								</div>
						
							</div>
						@endforeach
							
							
						
						</div><!--/category-products-->
	
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('upload/'.$productShow->image) }}" alt="" />
								<h3>{{$productShow->name}}</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{asset('frontend/assets/images/product-details/similar1.jpg')}}" alt=""></a>
										  <a href=""><img src="{{asset('frontend/assets/images/product-details/similar2.jpg')}}" alt=""></a>
										  <a href=""><img src="{{asset('frontend/assets/images/product-details/similar3.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{asset('frontend/assets/images/product-details/similar1.jpg')}}" alt=""></a>
										  <a href=""><img src="{{asset('frontend/assets/images/product-details/similar2.jpg')}}" alt=""></a>
										  <a href=""><img src="{{asset('frontend/assets/images/product-details/similar3.jpg')}}" alt=""></a>
										</div>
										
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>{{$productShow->name}}</h2>
								
								<span>
									<span>BDT {{$productShow->price}} </span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Shop:</b> {{$productShow->seller->shop_name}}</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

				</div>
			</div>
		</div>
	</section> 

@stop