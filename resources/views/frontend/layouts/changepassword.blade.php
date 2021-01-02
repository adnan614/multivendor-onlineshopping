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
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
            <h2 style="text-align: center;">Change Password</h2>
            <form method="post" action="{{route('edit.password')}}">
                @csrf
                @method('put')
            <div class="form-group">
                <label for="oldPassword">Old Password</label>
                <input type="password" class="form-control" style="width: 267px;" id="oldPassword" placeholder="old password" name="old_password">
           </div>
           <div class="form-group">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" style="width: 267px;"  id="newPassword" placeholder="New Password" name="password">
           </div>
           <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" style="width: 267px;"  id="oldPassword" placeholder="Confirm password" name="password_confirmation">
           </div>
           <button type="submit" class="btn btn-primary">Save</button>
            </form>
         </div>
    </div>
</div>


@stop