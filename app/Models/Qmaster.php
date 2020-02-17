<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qmaster extends Model
{
     protected $fillable=['user_id','name','cdt_id','email','mobile','join','left','status'];
    
}