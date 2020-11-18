@extends('backend.home')

@section('content')
<div class="row" >
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-plus" aria-hidden="true"></i> Insert Category</h1>
        <br><br>
  
       <ul>
      
           <li>Category ID: {{$categories->id}}</li>
           <li>Category Name: {{$categories->name}}</li>
       
       </ul>
    
    </div>

</div>


@stop
