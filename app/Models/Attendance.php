<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable=['user_id','status','date','type','topic'];
    
    public function puo()
    {
        return $this->belongsTo(PUO::class,'user_id','id');
    }
    
    public function qmaster()
    {
        return $this->belongsTo(Qmaster::class,'user_id','id');
    }
    
    public function cadet()
    {
        return $this->belongsTo(Cadet::class,'user_id','id');
    }
}

