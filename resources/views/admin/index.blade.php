@extends('admin.home')

@section('main.content')

<div class="container-fluid"> 
               <div class="row justify-content-center">
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                       <div class="white-box analytics-info">
                           <h3 class="box-title">Total Customers</h3>
                           <ul class="list-inline two-part d-flex align-items-center mb-0">
                               <li>
                                   <div id="sparklinedash"><canvas width="67" height="30"
                                           style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                               </li>
                               <li class="ml-auto"><span class="counter text-success">{{$customerShow}}</span></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                       <div class="white-box analytics-info">
                           <h3 class="box-title">Total Sellers</h3>
                           <ul class="list-inline two-part d-flex align-items-center mb-0">
                               <li>
                                   <div id="sparklinedash2"><canvas width="67" height="30"
                                           style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                               </li>
                               <li class="ml-auto"><span class="counter text-purple">{{$sellerShow}}</span></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                       <div class="white-box analytics-info">
                           <h3 class="box-title">Unique Visitor</h3>
                           <ul class="list-inline two-part d-flex align-items-center mb-0">
                               <li>
                                   <div id="sparklinedash3"><canvas width="67" height="30"
                                           style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                               </li>
                               <li class="ml-auto"><span class="counter text-info">911</span>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
              
        </div>

@stop