@extends('backend.home')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-fw fa-edit" aria-hidden="true"></i> Update Category</h1>
        <br><br>

<form method="post" action="{{url('update.category'.$categoryEdit->id)}}">

@csrf
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" value="{{ $categoryEdit->name }}" name="category_name">
  </div>
  <div class="form-group">
    <label for="name">Category description</label>
    <input type="text" class="form-control" id="name" value="{{ $categoryEdit->description }}" name="category_description">
  </div>

  
 
  <button type="submit" class="btn btn-primary">Update Product</button>
  </form>
    </div>

</div>

@stop
