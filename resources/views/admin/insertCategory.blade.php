@extends('admin.home')

@section('main.content')
<div class="row">

  <div class="col-md-6 offset-md-3">
    <h1 style="margin-top: 10px;"> <i class="fa fa-plus" aria-hidden="true"></i> Insert Category</h1>
    <br><br>

    <form method="post" id="catForm" action="{{ route('storeCategory') }}">

      @csrf

      <div class="form-group">
        <label for="name">Enter Category Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Your Category name" name="name">
      </div>
      <div class="form-group">
        <label for="slug">Enter slug Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Your Category name" name="slug">
      </div>
      <div class="form-group">
        <label>Category Description</label>
        <input name="description" class="form-control" id="description">
      </div>
      <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>

</div>



@stop