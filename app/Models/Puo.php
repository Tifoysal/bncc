<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puo extends Model
{
    protected $fillable=['user_id','puo_id','name','mobile','email','rank','role','join','left','photo','status','gender'];
}
