<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
     protected $fillable=['cdt_id','puo_id','from','to','reason','emergency','location','remarks','status'];
    
    public function cdt_leave()
    {
      return $this->belongsTo(Cadet::class,'cdt_id','user_id');   
    }  
}
