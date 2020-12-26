@extends('admin.home')

@section('main.content')
<div class="row" >
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-sliders" aria-hidden="true"></i> Insert Slider</h1>
        <br><br>

<form method="post" action="{{route('add.slider')}}" enctype="multipart/form-data">

@csrf

  <div class="form-group">
    <label for="name">Slider Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your slider name" name="name">
  </div>
  
  <div class="form-group">
    <label for="image">Product image</label>
    <input type="file"  id="name" name="image">
  </div>

  <button type="submit" class="btn btn-primary">Insert Slider</button>
  </form>


</div>



@stop