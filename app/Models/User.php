<?php
namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
     use HasFactory;

    // use HasFactory
use Notifiable;
use HasRoles;
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable =
[
'name', 'email', 'password','phone','address','roles_name','Status'
];

function contact()
{
    return $this->hasOne(Contact::class);
}

function orders()
{
    return $this->hasMany(Order::class);
}
/**
 *
* The attributes that should be hidden for arrays.
*
* @var array
*/
protected $hidden =
[
    'password', 'remember_token',
];
/**
* The attributes that should be cast to native types.
*
* @var array
*/
protected $casts =
[
    'email_verified_at' => 'datetime',
    'roles_name'=>'array'
];
}



