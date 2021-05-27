<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Order;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table="orders_details";


function user(){
    return $this->belongsTo(User::class);
}


function order()
{

      return $this->belongsTo(Order::class);


}

function orders(){
    return $this->hasMany(Order::class);
}

}





