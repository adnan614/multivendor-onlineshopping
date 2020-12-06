@extends('backend.home')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-fw fa-edit" aria-hidden="true"></i> Update Product</h1>
        <br><br>

<form method="post" action="{{ route('update.product',$productEdit->id) }}" enctype="multipart/form-data">

@csrf

<div class="form-group">
    <label for="id">Under Category</label>
    <select name="category_id" id="id" class="form-control">
    @foreach($categories as $cat)
      <option {{ $productEdit->category_id == $cat->id ? 'selected':''}} value="{{$cat->id}}">{{$cat->name}}</option>
      @endforeach
    </select>

  </div>
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" id="name" value="{{ $productEdit->name }}" name="name">
  </div>
  <div class="form-group">
    <label for="color">Product Color</label>
    <input type="text" class="form-control" id="color" value="{{ $productEdit->color }}"  name="color">
  </div>
  <div class="form-group">
    <label for="image">Product image</label>
    <input type="file"  id="name" name="image">
    <div>
    <p>Old Picture:</p><img src="{{asset('upload/'.$productEdit->image) }}"  style="height: 40px; width: 80px; float: left;">
    </div>
  </div>
<br><br>
  <div class="form-group" style="margin-top: 10px;">
    <label for="price">Product Price</label>
    <input type="text" class="form-control" id="color" name="price" value="{{ $productEdit->price }}">
  </div>

  <div class="form-group">
      <label for="description">Product Description</label>
      <input name="description" class="form-control" id="description" value="{{ $productEdit->description }}"  >
  </div>
  <button type="submit" class="btn btn-primary">Update Product</button>
  </form>
    </div>

</div>

@stop
