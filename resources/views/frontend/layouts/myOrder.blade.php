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

             <h2 style="text-align: center;">My Order</h2>
             
    
         <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Phone Number</th>
                        <th>Grant Total</th>
                        <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                      @if($orderT->count()>0)
                      @foreach($orderT as $key=>$data)
                       

                      <tr style="font-weight:500">
                         <td>{{$key+1}}</td>
                         <td>{{$data->name}}</td>
                         <td>{{$data->email}}</td>
                         <td>{{$data->address}}</td>
                         <td>{{$data->city}}</td>
                         <td>{{$data->phone_number}}</td>
                         <td>{{$data->grant_total}}</td>
                         <td><a class="btn btn-primary" style="margin: 0;" href="{{route('order.products',$data->id)}}">
                         View
                        </a></td>
                      </tr>
                     
                      @endforeach
                      @else
                      <h2>No data found.</h2>
                      @endif

                  </tbody>
            </table> 
         </div>

    </div>
</div>
@stop