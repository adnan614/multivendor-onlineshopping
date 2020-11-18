
<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard')}}"
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
                        <a href="{{ route('insertProduct')}}" style="color: grey;"> Insert Product </a>
                    </li>
                    <li>
                        <a href="{{ route('viewProduct') }}" style="color: grey;"> View Products </a>
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
                        <a href="{{ route('insertCategory')}}" style="color: grey;"> Insert Category </a>
                    </li>
                    <li>
                        <a href="{{route('viewCategory')}}" style="color: grey;"> View Category </a>
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