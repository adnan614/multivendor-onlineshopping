<html>
<head>
  <title>Invoice - {{ $orderInvoice->orderRelation->id }}</title>

  <style>
  .content-wrapper{
    background: #FFF;
  }
  .invoice-header {
    background: #f7f7f7;
    padding: 10px 20px 10px 20px;
    border-bottom: 1px solid gray;
}
.invoice-right-top h3 {
    padding-right: 20px;
    margin-top: 20px;
    color: #ec5d01;
    font-size: 55px!important;
    font-family: serif;
}
.invoice-left-top {
    border-left: 4px solid #ec5d00;
    padding-left: 20px;
    padding-top: 20px;
}
thead {
        background: #ec5d01;
        color: #FFF;
    }

    .authority h5 {
        margin-top: -10px;
        color: #ec5d01;
        /*text-align: center;*/
    }
    .thanks h4 {
        color: #ec5d01;
        font-size: 25px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
    .site-address p {
          line-height: 6px;
          font-weight: 300;
      }
</style>
</head>
<body>

  <div class="content-wrapper">

    <div class="invoice-header">
      <div class="float-left site-logo">
      </div>
      <div class="float-right site-address">
        <h4>E-Shopper</h4>
        <p>31/1, Purana Paltan, Dhaka-1200</p>
        <p>Phone: <a href="#">01533137582</a></p>
        <p>Email: <a href="mailto:info@eshopper.com">info@eshopper.com</a></p>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="invoice-description">
      <div class="invoice-left-top float-left">
        <h6>Invoice to</h6>
         <h3>{{ $orderInvoice->orderRelation->name }}</h3>
         <div class="address">
          <p>
            <strong>Address: </strong>
            {{ $orderInvoice->orderRelation->address }}
          </p>
           <p>Phone: {{ $orderInvoice->phone_no }}</p>
           <p>Email: <a href="mailto:{{ $orderInvoice->orderRelation->email }}">{{ $orderInvoice->orderRelation->email }}</a></p>
         </div>
      </div>
      <div class="invoice-right-top float-right">
        <h3>Invoice #{{ $orderInvoice->orderRelation->id }}</h3>
         <p>
           {{ $orderInvoice->orderRelation->created_at }}
         </p>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="">
    
        <h3>Products</h3>

      
        <table class="table table-bordered table-stripe">
          <thead>
            <tr>
             
              <th>Product Title</th>
              <th>Product Quantity</th>
              <th>Product size</th>
              <th>Unit Price</th>
              <th>Sub total Price</th>
            </tr>
          </thead>
          <tbody>
          
          <tr>
        
           <td>{{$orderInvoice->product_name}}</td>
           <td>{{$orderInvoice->product_quantity}}</td>
           <td>{{$orderInvoice->product_size}}</td>
           <td>{{$orderInvoice->product_price}}</td>
           <td>{{$orderInvoice->sub_total}}</td>
          
          </tr>
          
          </tbody>
         
        </table>
      

        <div class="thanks mt-3">
          <h4>Thank you for your Ordering !!</h4>
        </div>

        <div class="authority float-right mt-5">
            <p>-----------------------------------</p>
            <h5>Authority Signature:</h5>
          </div>
          <div class="clearfix"></div>

  </div>

</body>
</html>