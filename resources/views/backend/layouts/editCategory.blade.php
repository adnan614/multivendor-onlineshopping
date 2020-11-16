@extends('backend.home')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 style="margin-top: 10px;"> <i class="fa fa-fw fa-edit" aria-hidden="true"></i> Update Category</h1>
        <br><br>

<form method="post" action="{{url('edit.category'.$categoryDetails->id)}}">

@csrf
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" value="{{ $categoryDetails->name }}" name="category_name">
  </div>
  <div class="form-group">
    <label>Parent Category</label>
    <select name="parent_id" id="parent_id" class="form-control">
        <option value="0">Parent Category</option>
        @foreach($levels as $val)
        <option value="{{ $val->id }}">  {{ $val->name }} </option>
        @endforeach
    </select>
  </div>
 
  <button type="submit" class="btn btn-primary">Update Product</button>
  </form>
    </div>

</div>

@stop
