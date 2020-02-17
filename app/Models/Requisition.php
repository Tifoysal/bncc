<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    protected $fillable=['apply_by','approve_by','pro_id','qty','req_for','return','remarks','status'];
    
    public function product()
    {
        return $this->belongsTo(Product::class,'pro_id','id');
    }
    
    public function personnel()
    {
        return $this->belongsTo(User::class,'apply_by','id');
    }
}
 