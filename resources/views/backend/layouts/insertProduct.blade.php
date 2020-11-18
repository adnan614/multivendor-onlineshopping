@extends('backend.home')

@section('content')
<div class="row" >
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-plus" aria-hidden="true"></i> Insert Product</h1>
        <br><br>

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

<form method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">

@csrf
<div class="form-group">
    <label for="name">Under Category</label>
    <select name="category_id" id="category_id" class="form-control">
      <option value="0">Select a Product Category</option>
      @foreach($categories as $cat)
      <option value="{{$cat->id}}">{{$cat->name}}</option>
      @endforeach
    </select>

  </div>
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Product name" name="name">
  </div>
  <div class="form-group">
    <label for="color">Product Color</label>
    <input type="text" class="form-control" id="color" placeholder="Enter Your Product name" name="color">
  </div>
  <div class="form-group">
    <label for="image">Product image</label>
    <input type="file"  id="name" name="image">
  </div>

  <div class="form-group">
    <label for="price">Product Price</label>
    <input type="text" class="form-control" id="color" placeholder="Enter Your Product price" name="price">
  </div>

  <div class="form-group">
      <label>Product Description</label>
      <textarea name="description" class="form-control" id="description" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add Product</button>
  </form>
    </div>

</div>


@stop
