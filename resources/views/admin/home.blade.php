@extends('backend.master')

@section('main')


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
<header class="topbar" data-navbarbg="skin5">
<nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    
                   
    
                        <span class="logo-text">
                            <span style="margin-left: 15px;font-size:25px; font-weight:500;">Online Shopping</span>
                        </span>
                  
               
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block mr-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="backend/assets/plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">{{auth()->user()->name}}</span></a>

                        </li>
                        <p style="color:aliceblue"><a href="{{route('logout')}}">Logout</a></p>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
    </header>

<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color: grey;">Dashboard</span>
                            </a>
                        </li>
                    
                   
            <li style="margin-left: 30px; margin-top: 20px;">
                <div href="#" data-toggle="collapse" data-target="#products" aria-expanded="true"style="color: grey;">
                        
                        <i class="fa fa-fw fa-tags" style="color: grey;"></i> Products
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </div>
                
                <ul id="products" class="collapse" style="margin-top: 20px; margin-left:20px;" >
                    <li style="margin-bottom: 17px;">
                        <a href="#" style="color: grey;"> Insert Product </a>
                    </li>
                    <li>
                        <a href="#" style="color: grey;"> View Products </a>
                    </li>
                </ul>
                
            </li>
            <br>
            <li style="margin-left: 30px; margin-top: 20px;">
                <div href="#" data-toggle="collapse" data-target="#category" aria-expanded="true"style="color: grey;">
                        
                        <i class="fa fa-fw fa-book" style="color: grey;"></i> Category
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </div>
                
                <ul id="category" class="collapse" style="margin-top: 20px; margin-left:20px;" >
                    <li style="margin-bottom: 17px;">
                        <a href="#" style="color: grey;"> Insert Category </a>
                    </li>
                    <li>
                        <a href="#" style="color: grey;"> View Category </a>
                    </li>
                </ul>
                
            </li>
            <br>
                        
                      
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
</aside>

 <div class="page-wrapper">
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
                               <li class="ml-auto"><span class="counter text-success">11</span></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-4 col-sm-6 col-xs-12">
                       <div class="white-box analytics-info">
                           <h3 class="box-title">Total Categories</h3>
                           <ul class="list-inline two-part d-flex align-items-center mb-0">
                               <li>
                                   <div id="sparklinedash2"><canvas width="67" height="30"
                                           style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                   </div>
                               </li>
                               <li class="ml-auto"><span class="counter text-purple">12</span></li>
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

    </div>  

</div>
@stop