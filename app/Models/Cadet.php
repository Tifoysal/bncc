<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadet extends Model
{
    //protected $fillable=['user_id','cdt_id'];
    protected $fillable=['user_id','name','std_id','cdt_id','dept','rank','section','platoon','gender','join','left','photo','status','skill','responsibility','fname','foccu','mname','moccu','dob','birth_locs','blood_grp','marital','nid','religion','sibling','position','fmobile','mmobile','email','mobile','fbid','pre_add','par_add','exam','height','weight','complexion','visible_mark','hobby','career','study_subject','person','eca_name','involvement','ex_involvement','remarks','instruction','id_card','semester','nation','ex_cdt_status','ex_cdt_id','ex_cdt_div',' ex_cdt_inst'];
}
