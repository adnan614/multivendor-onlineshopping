@extends('admin.home')

@section('main.content')

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
@endforeach
@endif

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title" style="margin-top: 10px;"><!-- panel-title begin -->
               
                   <i class="fa fa-users"></i> View Customers
                
               </h3><!-- panel-title finish --> 
            </div>

            <br>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phone Number</th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($customerShow as $key=>$data)   
                    <tr style="font-weight:500">
                        <td>{{$key+1}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->city}}</td>
                        <td>{{$data->country}}</td>
                        <td>{{$data->phone_number}}</td>
                        <td>
                            <a href="{{route('customer.delete',$data->id)}}">
                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>
</div>

@stop


