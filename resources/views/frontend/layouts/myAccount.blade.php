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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color: grey;">My Order</span>
                            </a>
                        </li>
                 </ul>
           </aside>
         </div>
         <div class="col-sm-9">
               <h2 style="text-align: center;"><i style="margin-right:10px;" class="fa fa-user"
               ></i>Personal Information</h2>
               <hr>
               <p><span style="font-size: 20px; font-weight: 600">Mobile Number:</span> <span style="margin-left: 100px;">{{auth()->user()->phone_number}}</span> </p>
               <p><span style="font-size: 20px; font-weight: 600">Name:</span> <span style="margin-left: 193px;">{{auth()->user()->name}}</span> </p>
               <p><span style="font-size: 20px; font-weight: 600">Email:</span> <span style="margin-left: 193px;">{{auth()->user()->email}}</span> </p>
               <p><span style="font-size: 20px; font-weight: 600">Address:</span> <span style="margin-left: 170px;">{{auth()->user()->address}}</span> </p>
               <p><span style="font-size: 20px; font-weight: 600">City:</span> <span style="margin-left: 207px;">{{auth()->user()->city}}</span> </p>
               <p><span style="font-size: 20px; font-weight: 600">Country:</span> <span style="margin-left: 174px;">{{auth()->user()->country}}</span> </p>
               
           </div>
    </div>
</div>


@stop