<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cmaterial extends Model
{
//    protected $fillable=['name','type','remarks'];
    protected $fillable=['name','type','puo_id','file','remarks'];
}
