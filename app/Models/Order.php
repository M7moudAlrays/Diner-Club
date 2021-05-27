<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

protected $fillable=['status'];

    function receipes()
    {

        return $this->belongsToMany(Reciepe::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function orderDetails()
    {

        return $this->hasMany(OrderDetail::class);
    }





}
