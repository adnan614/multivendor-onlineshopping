@extends('backend.home')

@section('content')
<div class="row" >
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-plus" aria-hidden="true"></i> Insert Category</h1>
        <br><br>

<form method="post" action="{{ route('storeCategory') }}">

@csrf

  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Category name" name="name">
  </div>
  <div class="form-group">
    <label>Parent category</label>
    <select name="parent_id" class="form-control" id="parent_id">
    <option value="0">Parent Category</option>
      @foreach($parentCategory as $data)
        <option value="{{$data->id}}">{{ $data->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
      <label>Category Description</label>
      <textarea name="description" class="form-control" id="description" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add Category</button>
  </form>
    </div>

</div>


@stop
