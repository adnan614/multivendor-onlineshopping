@extends('backend.home')

@section('content')

 <div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title" style="margin-top: 10px;"><!-- panel-title begin -->
               
                   <i class="fa fa-first-order"></i> View Order
                
               </h3><!-- panel-title finish --> 
            </div>

            <br>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Address</th>
                        <th>city</th>
                        <th>Phone Number</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th> Amount </th>
                        <th>Payment Method </th>
                        <th> Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                 @foreach($orders as $key=>$data)
                    <tr style="font-weight:500">
                        <td>{{$key+1}}</td>
                        <td>{{$data->order->name}}</td>
                        <td>{{$data->order->email}}</td>
                        <td>{{$data->order->address}}</td>
                        <td>{{$data->order->city}}</td>
                        <td>{{$data->order->phone_number}}</td>
                        <td>{{$data->product_name}}</td>
                        <td>{{$data->product_price}}</td>
                        <td>{{$data->product_quantity}}</td>
                        <td>{{$data->sub_total}}</td>
                        <td>Cash On delivery</td>
                        <td>
                            
                            <select name="order_status">
                                <option>Processed</option>
                                <option>cancelled</option>
                                <option>Delivered</option>
                            </select>
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