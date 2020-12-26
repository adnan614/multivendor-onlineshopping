@extends('admin.home')

@section('main.content')


<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title" style="margin-top: 10px;"><!-- panel-title begin -->
               
                   <i class="fa fa-sliders"></i> View Slider
                
               </h3><!-- panel-title finish --> 
            </div>

            <br>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Slider Name</th>
                            <th>Slider Image</th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($sliderShow as $key=>$data)
                    <tr style="font-weight:500">
                        <td>{{$key+1}}</td>
                        <td>{{$data->name}}</td>
                        <td><img src="{{ asset('upload/'.$data->image) }}" width="75px" height="75px"></td>
                        <td>
                            <a class="btn btn-danger" href="{{route('slider.delete',$data->id)}}">
                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
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


