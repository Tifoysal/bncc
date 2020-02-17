<?php

namespace App\Http\Controllers;
use App\Models\Cadet;
use App\Models\User;
use App;
use PDF;
use Illuminate\Http\Request;

class CadetController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request,  [
            
            'email'=>'email|unique:users,email',                      
        ]);    
        
        $user_image = $request->file('photo');
        $file_name =uniqid('cadet_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('cadet', $file_name);
//left side for database column name and right side for form name="this text"
        $new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'status'=>$request->status,
            'password'=>bcrypt($request->password),
        ]);
        
        Cadet::create([
            'user_id'=>$new_user->id,
            'name'=>$request->name,
            'std_id'=>$request->std_id,
            'cdt_id'=>$request->cdt_id,
            'dept'=>$request->dept,
            'rank'=>$request->rank,
            'section'=>$request->section,
            'platoon'=>$request->platoon,
            'gender'=>$request->gender,
            'join'=>$request->join,
            'left'=>$request->left,
            'photo'=>$file_name,
            'status'=>$request->status,
            'photo'=>$file_name,
            'skill'=>$request->skill,
            'responsibility'=>$request->responsibility,
            'fname'=>$request->fname,
            'foccu'=>$request->foccu,
            'mname'=>$request->mname,
            'moccu'=>$request->moccu,
            'dob'=>$request->dob,
            'birth_locs'=>$request->birth_locs,
            'blood_grp'=>$request->blood_grp,
            'marital'=>$request->marital,
            'nid'=>$request->nid,
            'religion'=>$request->religion,
            'sibling'=>$request->sibling,
            'position'=>$request->position,
            'fmobile'=>$request->fmobile,
            'mmobile'=>$request->mmobile,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'fbid'=>$request->fbid,
            'pre_add'=>$request->pre_add,
            'par_add'=>$request->par_add,
            'exam'=>json_encode($request->addmore),
            'height'=>$request->height,
            'weight'=>$request->weight,
            'complexion'=>$request->complexion,
            'visible_mark'=>$request->visible_mark,
            'hobby'=>$request->hobby,
            'career'=>$request->career,
            'study_subject'=>$request->study_subject,
            'person'=>$request->person,
            'eca_name'=>$request->eca_name,
            'eca_institute'=>$request->eca_institute,
            'eca_award'=>$request->eca_award,
            'involvement'=>$request->involvement,
            'remarks'=>$request->remarks,
        ]);
        
        
        return redirect()->route('puo.list-cadet')->with('message','Cadet Added Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$cadets=Cadet::orderBy('id','desc')->whereNotIn('status',['Applied','Communicated'])->get();//should return collection

    	return view('backend.layouts.Cadet.list',compact('cadets'));
    }
    
    public function update(Request $request,$id)
    {
        $cadet_photo = $request->file;
        
        if($cadet_photo)
        {
            Cadet::where('id',$id)->update([
                'name'=>$request->name,
                'std_id'=>$request->std_id,
                'cdt_id'=>$request->cdt_id,
                'dept'=>$request->dept,
                'rank'=>$request->rank,
                'section'=>$request->section,
                'platoon'=>$request->platoon,
                'gender'=>$request->gender,
                'join'=>$request->join,
                'left'=>$request->left,
                'photo'=>$request->file->store('cadet'),
                'status'=>$request->status,
                'photo'=>$file_name,
                'skill'=>$request->skill,
                'responsibility'=>$request->responsibility,
                'fname'=>$request->fname,
                'foccu'=>$request->foccu,
                'mname'=>$request->mname,
                'moccu'=>$request->moccu,
                'dob'=>$request->dob,
                'birth_locs'=>$request->birth_locs,
                'blood_grp'=>$request->blood_grp,
                'marital'=>$request->marital,
                'nid'=>$request->nid,
                'religion'=>$request->religion,
                'sibling'=>$request->sibling,
                'position'=>$request->position,
                'fmobile'=>$request->fmobile,
                'mmobile'=>$request->mmobile,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'fbid'=>$request->fbid,
                'pre_add'=>$request->pre_add,
                'par_add'=>$request->par_add,
                'exam'=>json_encode($request->addmore),
                'height'=>$request->height,
                'weight'=>$request->weight,
                'complexion'=>$request->complexion,
                'visible_mark'=>$request->visible_mark,
                'hobby'=>$request->hobby,
                'career'=>$request->career,
                'study_subject'=>$request->study_subject,
                'person'=>$request->person,
                'eca_name'=>$request->eca_name,
                'eca_institute'=>$request->eca_institute,
                'eca_award'=>$request->eca_award,
                'involvement'=>$request->involvement,
                'remarks'=>$request->remarks,
            ]);
        }
        else
        {
            Cadet::where('id',$id)->update([
                'name'=>$request->name,
                'std_id'=>$request->std_id,
                'cdt_id'=>$request->cdt_id,
                'dept'=>$request->dept,
                'rank'=>$request->rank,
                'section'=>$request->section,
                'platoon'=>$request->platoon,
                'gender'=>$request->gender,
                'join'=>$request->join,
                'left'=>$request->left,
                'status'=>$request->status,
                'skill'=>$request->skill,
                'responsibility'=>$request->responsibility,
                'fname'=>$request->fname,
                'foccu'=>$request->foccu,
                'mname'=>$request->mname,
                'moccu'=>$request->moccu,
                'dob'=>$request->dob,
                'birth_locs'=>$request->birth_locs,
                'blood_grp'=>$request->blood_grp,
                'marital'=>$request->marital,
                'nid'=>$request->nid,
                'religion'=>$request->religion,
                'sibling'=>$request->sibling,
                'position'=>$request->position,
                'fmobile'=>$request->fmobile,
                'mmobile'=>$request->mmobile,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'fbid'=>$request->fbid,
                'pre_add'=>$request->pre_add,
                'par_add'=>$request->par_add,
                'exam'=>json_encode($request->addmore),
                'height'=>$request->height,
                'weight'=>$request->weight,
                'complexion'=>$request->complexion,
                'visible_mark'=>$request->visible_mark,
                'hobby'=>$request->hobby,
                'career'=>$request->career,
                'study_subject'=>$request->study_subject,
                'person'=>$request->person,
                'eca_name'=>json_encode($request->eca_act),
                'involvement'=>$request->involvement,
                'remarks'=>$request->remarks,
            ]);
        }
       return redirect()->route('puo.list-cadet')->with('message','Cadet Information Updated Successfully');
    }
    public function update_pass_cadet(Request $request,$id)
    {
        if(auth()->user()->role=='Cadet')
        {
            User::find(auth()->user()->id)->update([
            'password'=>bcrypt($request->password),
            ]);
               return redirect()->route('puo.dashboard')->with('message','Password Updated Successfully');
        }
        else
        {   
            $cadet=Cadet::find($id);
            User::find($cadet->user_id)->update([
            'password'=>bcrypt($request->password),
           ]);
            return redirect()->route('puo.dashboard')->with('message','Password Updated Successfully');
        }
    }
    
    public function delete($id)
    {
        Cadet::find($id)->delete();
        return redirect()->route('puo.list-cadet')->with('message','Cadet Deleted Successfully');
    }
    
    public function print_single($id)
    {
        
        $cadets=Cadet::find($id);
        return view('backend.layouts.Cadet.single_print_pre',compact('cadets'));
    }
    
    public function print_one($id)
    {
        $cadets=Cadet::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Cadet.single_print',compact('cadets'));
        return $pdf->stream('Individual Cadet Information.pdf');
    }
    
    public function print_all()
    {
        $cadets=Cadet::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Cadet.all_print',compact('cadets'));
        return $pdf->stream('All Cadet Information.pdf');
    }
}
