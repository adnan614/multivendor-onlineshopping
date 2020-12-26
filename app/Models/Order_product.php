<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    protected $guarded = [];

   public function order()
   {
       return $this->belongsTo(Order::class);
   }

   public function payment()
   {
       return $this->belongsTo(Payment::class);
   }
}


