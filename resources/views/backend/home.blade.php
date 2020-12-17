@extends('backend.master')
@section('main')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('backend.partial.navbar')
        
    @include('backend.partial.sidebar')
    <div class="page-wrapper">
        @yield('content')
    </div>
</div>  
    
@stop