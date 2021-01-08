@extends('backend.home')

@section('content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

           <div class="container-fluid">
               <div class="row justify-content-center">
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                       <div class="white-box analytics-info">
                           <h3 class="box-title">Total Products</h3>
                           <ul class="list-inline two-part d-flex align-items-center mb-0">
                               <li>
                                   <div id="sparklinedash"><canvas width="67" height="30"
                                           style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                               </li>
                               <li class="ml-auto"><span class="counter text-success">{{$show_product_quantity}}</span></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                       <div class="white-box analytics-info">
                           <h3 class="box-title">View Order</h3>
                           <ul class="list-inline two-part d-flex align-items-center mb-0">
                               <li>
                                   <div id="sparklinedash3"><canvas width="67" height="30"
                                           style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                               </li>
                               <li class="ml-auto"><span class="counter text-info"> {{$order_quantity}}</span>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
              
           </div>

@stop