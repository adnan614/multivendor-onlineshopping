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
                                <img src="{{asset('backend/assets/plugins/images/users/varun.jpg')}}" alt="user-img" width="36"
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.dashboard')}}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu" style="color: grey;">Dashboard</span>
                            </a>
                        </li>
                    
                   
            <li style="margin-left: 30px; margin-top: 20px;">
                <a href="{{route('view.customer')}}"style="color: grey;">    
                        <i class="fa fa-users" style="color: grey;"></i> View Customers                    
                </a>
                 
            </li>
            <br>
            <li style="margin-left: 30px; margin-top: 20px;">
                <a href="{{route('view.seller')}}" style="color: grey;">
                        
                        <i class="fa fa-users" style="color: grey;"></i>
                        View Seller
                </a>         
            </li>
            <br>

            <li style="margin-left: 30px; margin-top: 20px;">
                <div href="#" data-toggle="collapse" data-target="#slider" aria-expanded="true"style="color: grey;">
                        
                        <i class="fa fa-sliders" style="color: grey;"></i> Slider
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </div>
                
                <ul id="slider" class="collapse" style="margin-top: 20px; margin-left:20px;" >
                    <li style="margin-bottom: 17px;">
                        <a href="{{route('insert.slider')}}" style="color: grey;"> Insert Slider </a>
                    </li>
                    <li>
                        <a href="{{route('view.slider')}}" style="color: grey;"> View Slider </a>
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
      
           @yield('main.content')

    </div>  

</div>
@stop