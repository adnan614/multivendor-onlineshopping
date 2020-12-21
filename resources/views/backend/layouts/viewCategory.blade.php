@extends('backend.home')

@section('content')

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
                        <th>Category ID</th>
                        <th>category Name</th>
                        <th>Status</th>
                        <th> Category Delete </th>
                        <th> Category Edit </th>
                        </tr>
                   </thead>
                    <tbody>
                        @foreach($categoryShow as $row)
                    <tr style="font-weight:500">
                        <td>{{$row->id}}</td>
                        <td>{{$row->name }}</td>
                        <td><span class="label-custom label label-success">Active</span></td>
                        <td>
                        <a href="{{ url('delete.category'.$row->id) }}">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                        </a>
                        </td>
                        <td>
                          <a href="{{ url('edit.category'.$row->id) }}">
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


