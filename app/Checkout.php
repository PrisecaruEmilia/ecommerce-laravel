<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkouts';
    protected $fillable = ['email', 'name', 'address', 'city', 'province', 'postalcode', 'phone'];
}
