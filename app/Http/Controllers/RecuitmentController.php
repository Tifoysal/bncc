<?php

namespace App\Http\Controllers;
use App\Models\Cadet;
use App\Models\User;
use App;
use PDF;
use Illuminate\Http\Request;

class RecuitmentController extends Controller
{
   
    public function create(Request $request)
    { 
        $this->validate($request,  [
            
            'email'=>'email|unique:cadets,email',                      
        ]);    
        
        $user_image = $request->file('photo');
        $file_name =uniqid('cadet_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('cadet', $file_name);
        
        $user_image = $request->file('id_card');
        $file_id_card =uniqid('id_card_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('id_card', $file_id_card);
//left side for database column name and right side for form name="this text"
        
        Cadet::create([
            'name'=>$request->name,
            'std_id'=>$request->std_id,
            'dept'=>$request->dept,
            'gender'=>$request->gender,
            'photo'=>$file_name,
            'id_card'=>$file_id_card,
            'status'=>$request->status,
            'fname'=>$request->fname,
            'foccu'=>$request->foccu,
            'mname'=>$request->mname,
            'moccu'=>$request->moccu,
            'dob'=>$request->dob,
            'marital'=>$request->marital,
            'nid'=>$request->nid,
            'religion'=>$request->religion,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'fbid'=>$request->fbid,
            'pre_add'=>$request->pre_add,
            'par_add'=>$request->par_add,
            'exam'=>json_encode($request->education),
            'height'=>$request->height,
            'weight'=>$request->weight,
            'visible_mark'=>$request->visible_mark,
            'hobby'=>$request->hobby,
            'career'=>$request->career,
            'study_subject'=>$request->study_subject,
            'eca_name'=>json_encode($request->eca_act),
            'involvement'=>$request->involvement,
            'ex_involvement'=>$request->ex_involvement,
            
        ]);
        
        
        return redirect()->route('recruitment-confirmation');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$cadets=Cadet::orderBy('id','desc')->whereNull('cdt_id')->where('status','Applied')->Orwhere('status','Communicated')->get();//should return collection

    	return view('backend.layouts.Recruitment.list',compact('cadets'));
    }
    
    public function update(Request $request,$id)
    {        
        if($request->status=='Active')
        { 
            $this->validate($request,  [
            
            'email'=>'email|unique:users,email',                      
        ]);    
        
        
//left side for database column name and right side for form name="this text"
        $new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'password'=>bcrypt($request->password),
            'status'=>$request->status,
        ]);
        
            Cadet::where('id',$id)->update([
            'user_id'=>$new_user->id,
            'status'=>$request->status,
       ]);
       return redirect()->route('puo.list-cadet')->with('message','Cadet Created Successfully');

        }
        else
        {
            Cadet::where('id',$id)->update([
            'status'=>$request->status,
       ]);
       return redirect()->route('puo.list-application')->with('message','Information Updated Successfully');

        }
        
    }
    
    public function print_single($id)
    {
        
        $cadets=Cadet::find($id);
        return view('backend.layouts.Recruitment.single_print_pre',compact('cadets'));
    }
    
    public function print_one($id)
    {
        $cadets=Cadet::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Recruitment.single_print',compact('cadets'));
        return $pdf->stream('Individual Cadet Information.pdf');
    }
    
    public function print_all()
    {
        $cadets=Cadet::where('status','Applied')->Orwhere('status','Communicated')->whereNull('cdt_id')->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Recruitment.all_print',compact('cadets'));
        return $pdf->stream('All Cadet Information.pdf');
    }
}
    
    
