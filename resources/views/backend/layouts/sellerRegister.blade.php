<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title> Registration</title>
  </head>
  <body>
  <div class="row col-md-6 offset-md-3">

  <form class="form-horizontal  col-md-6 offset-md-3" action="{{route('sellerRegister')}}" method="POST">
      @csrf
  <fieldset>
    <div id="legend" style="margin-top: 46px;">
      <h1> Registration</h1>
    </div>
    <div class="control-group" style="margin-top: 40px;">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username" class="input-xlarge">
        
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" class="form-control" name="email" placeholder="Enter Valid Email" class="input-xlarge">
        
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="address">Address</label>
      <div class="controls">
        <input type="text" id="address" class="form-control" name="address" placeholder="Enter address" class="input-xlarge">
        
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="shop_name">Shop Name</label>
      <div class="controls">
        <input type="text" id="shop_name" class="form-control" name="shop_name" placeholder="Enter Shop Name" class="input-xlarge">
        
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="shop_location">Shop Location</label>
      <div class="controls">
        <input type="text" id="shop_location" class="form-control" name="shop_location" placeholder="Enter Shop Location" class="input-xlarge">
        
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" class="input-xlarge">
     
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="city">City</label>
      <div class="controls">
        <input type="text" id="city" class="form-control" name="city" placeholder="Enter City" class="input-xlarge">
        
      </div>
    </div>
    

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="country">Country</label>
      <div class="controls">
        <input type="text" id="country" class="form-control" name="country" placeholder="Enter Country" class="input-xlarge">
        
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="phone_number">Phone Number</label>
      <div class="controls">
        <input type="number" id="phone_number" class="form-control" name="phone_number" placeholder="Enter Phone Number" class="input-xlarge">
        
      </div>
    </div>
 
   
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls" style="margin-top: 10px;">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>


</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>