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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
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
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
             <h2 style="text-align: center; font-weight:600"><i class="fa fa-user">Edit My Account</i></h2>
<form method="post" action="{{route('edit')}}">
@csrf
@method('PUT')
<div class="form-group">
    <label for="name"> Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your name" value="{{auth()->user()->name}}" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email Address" value="{{auth()->user()->email}}" name="email">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="color" placeholder="Enter Your address" value="{{auth()->user()->address}}" name="address">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input type="number" class="form-control" id="phone_number" placeholder="Enter Your Phone Number" value="{{auth()->user()->phone_number}}" name="phone_number">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" placeholder="Enter Your city" value="{{auth()->user()->city}}" name="city">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="color" value="{{auth()->user()->country}}" placeholder="Enter Your country" name="country">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
           </div>
    </div>
</div>


@stop