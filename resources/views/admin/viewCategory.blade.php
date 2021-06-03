@extends('admin.home')

@section('main.content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="margin-top: 10px;">

                    <i class="fa fa-tags"></i> View Category

                </h3>
            </div>


            <br>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>category Name</th>
                                <th>Status</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categoryShow as $key=> $row)

                            <tr style="font-weight:500">
                                <td>{{$key+1}}</td>
                                <td>{{$row->name }}</td>
                                <td><a style="color:aliceblue" href="{{route('category.active',$row->id)}}">

                                        @if($row->status)
                                        <span class="label-custom label label-success"> Active </span>

                                        @else

                                        <span class="label-custom label label-danger"> Inactive </span>

                                        @endif


                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('delete.category'.$row->id) }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                    </a>


                                    <a class="btn btn-primary" href="{{ route('category.edit',$row->slug) }}">
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