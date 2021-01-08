@extends('frontend.master')
@section('content')

<hr>


<div class="container">
    <div class="row">
         <div class="col-sm-3" style="border: 1px solid #d4e9ea;">
         <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('edit.account')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color: grey;">Edit My Account</span>
                            </a>
                        </li>
                 </br> 
                      <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('change.password')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color: grey;">Change My password</span>
                            </a>
                        </li>
                    </br>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('my.order')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color: grey;">My Order</span>
                            </a>
                        </li>
                 </ul>
           </aside>
         </div>

         <div class="col-sm-9">

             <h2 style="text-align: center;">Order Details</h2>
             
    
         <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Size</th>
                        <th>Product Price</th>
                        <th>Sub Total</th>
                        <th>Order Status</th>
                        </tr>
                  </thead>
                  <tbody>
                     
                       
              @foreach($orderProducts as $key=>$data)
                      <tr style="font-weight:500">
                         <td>{{$key+1}}</td>
                         <td>{{$data->product_name}}</td>
                         <td>{{$data->product_quantity}}</td>
                         <td>{{$data->product_size}}</td>
                         <td>{{$data->product_price}}</td>
                         <td>{{$data->sub_total}}</td>
                         <td>{{$data->order_status}}</td>
                      </tr>
                     
                @endforeach 
                    
                     

                  </tbody>
            </table> 
         </div>

    </div>
</div>
@stop