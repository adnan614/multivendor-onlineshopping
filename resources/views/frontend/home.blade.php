@extends('frontend.master')

@section('content')

<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								@foreach($sliders as $data)
								<div class="col-sm-6">
									<img src="{{ asset('upload/'.$data->image) }}" class="girl img-responsive" alt="" />
									
								</div>
								@endforeach
							</div>
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
    </section><!--/slider-->
    
    <section>
		<div class="container">
		
			<div class="row">
			
				<div class="col-sm-3">
				
					<div class="left-sidebar">
						<h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($categories as $cat)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a  href="{{route('categoryWiseShow',$cat->id)}}">
											
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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($products as $data)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
								<a href="{{route('productDetails',$data->id)}}">
										<div class="productinfo text-center">
											
											<img src="{{ asset('upload/'.$data->image) }}" alt="" />
											<h2>BDT {{$data->price}}</h2>
											<p>{{$data->name}}</p>
										</div>
										</a>
										
								</div>
							
							</div>
						</div>
						@endforeach
						</div>
						
					</div><!--features_items-->
	
				</div>
			</div>
		</div>
	</section>

    

@stop