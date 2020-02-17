<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['item','user_id','category','qty','damage','remarks','status'];
}
