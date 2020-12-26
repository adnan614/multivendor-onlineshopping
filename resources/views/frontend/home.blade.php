@extends('frontend.master')

@section('content')

<section id="slider"><!--slider-->
    <div class="container">
      <div class="row"> 

         <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach( $sliders as $slider )
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach( $sliders as $slider )
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
							<img src="{{ asset('upload/'.$slider->image) }}"  style="width: 100%; height: 200pz;" >
							<div class="carousel-caption d-none d-md-block">
                          <h5  style="color: black; font-size: 40px;">{{$slider->name}}</h5>
                           
                         </div>
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

         </div>
     </div>
 </section>
    
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
						<div class="col-sm-3">
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