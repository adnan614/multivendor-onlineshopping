@extends('backend.master')
@section('main')
    @include('backend.partial.navbar')
        
    @include('backend.partial.sidebar')
    <div class="page-wrapper">   
        @yield('content')

    </div>
@stop