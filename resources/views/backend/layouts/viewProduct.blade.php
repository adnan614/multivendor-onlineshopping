@extends('backend.home')

@section('content')

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title" style="margin-top: 10px;"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i> View Products
                
               </h3><!-- panel-title finish --> 
            </div>

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

            <br>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Color</th>
                        <th>image</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th> Product Delete </th>
                        <th> Product Edit </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productShow as $key=>$row)
                    <tr style="font-weight:500">
                        <td>{{$key+1}}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{$row->categoryRelation->name}}</td>
                        <td>{{ $row->color }}</td>
                        <td><img src="{{ asset('upload/'.$row->image) }}" width="75px" height="75px"></td>
                        <td>{{ $row->price }}</td>
                        <td><a style="color:aliceblue" href="{{route('product.active',$row->id)}}">
                        
                        @if($row->status)
                        <span class="label-custom label label-success"> Active </span>

                        @else

                        <span class="label-custom label label-danger"> Inactive </span>

                        @endif
                    
                    
                    </a>
                </td>
                        <td>
                        <a class="btn btn-danger" href="{{ url('delete.product'.$row->id) }}">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                        </a>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="{{ url('edit.product'.$row->id)}}">
                           <i class="fa fa-tags" aria-hidden="true"></i> Edit
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


