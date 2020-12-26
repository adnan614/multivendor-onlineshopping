@extends('frontend.master')
@section('content')

<div class="container">


		
	<div class="row">
    <div class="col-sm-12">
					
						<h2 class="title text-center">All shop</h2>
						@foreach($shopShow as $data)
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
								<a href="{{route('shopWise.show',$data->user_id)}}">
										<div class="productinfo text-center">
											
											<img src="{{ asset('upload/'.$data->image) }}" alt="" />
											
											<p>{{$data->shop_name}}</p>
									
										</div>
										</a>
										
								</div>
							
							</div>
						</div>
						@endforeach
						</div>
						
				
	
				</div>
    </div>
</div>            

@stop