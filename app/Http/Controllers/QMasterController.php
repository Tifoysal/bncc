<?php

namespace App\Http\Controllers;
use App\Models\Qmaster;
use App\Models\User;
use App;
use PDF;
use Illuminate\Http\Request;

class QMasterController extends Controller
{
    public function create(Request $request)
    {

//left side for database column name and right side for form name="this text"
        $new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'status'=>$request->status,
            'password'=>bcrypt($request->password),
        ]);
        
        Qmaster::create([
            'user_id'=>$new_user->id,
            'name'=>$request->name,
            'cdt_id'=>$request->cdt_id,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'join'=>$request->join,
            'left'=>$request->left,
            'status'=>$request->status,
        ]);
        
        
        return redirect()->route('puo.list-qmaster')->with('message','Quarter Master Added Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {
    	$qmasters=Qmaster::all();//should return collection

    	return view('backend.layouts.QMaster.list',compact('qmasters'));
    }
    
    public function update(Request $request,$id)
    {
       Qmaster::where('id',$id)->update([
            'name'=>$request->name,
            'cdt_id'=>$request->cdt_id,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'join'=>$request->join,
            'left'=>$request->left,
            'status'=>$request->status,
       ]);
       return redirect()->route('puo.list-qmaster')->with('message','Quarter Master Updated Successfully');
    }
    
    public function update_pass(Request $request,$id)
    {
        if(auth()->user()->role=='QMaster')
        {
            User::find(auth()->user()->id)->update([
            'password'=>bcrypt($request->password),
            ]);
               return redirect()->route('puo.dashboard')->with('message','Password Updated Successfully');
        }
        else
        {   
            $qmaster=Qmaster::find($id);
            User::find($qmaster->user_id)->update([
            'password'=>bcrypt($request->password),
           ]);
            return redirect()->route('puo.dashboard')->with('message','Password Updated Successfully');
        }
    }
    
    public function delete($id)
    {
        Qmaster::find($id)->delete();
        return redirect()->route('puo.list-qmaster')->with('message','Quarter Master Deleted Successfully');

    }
    
    public function print_single($id)
    {
        
        $qmasters=Qmaster::find($id);
        return view('backend.layouts.Qmaster.single_print_pre',compact('qmasters'));
    } 
    
    public function print_one($id)
    {
        $qmasters=Qmaster::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Qmaster.single_print',compact('qmasters'));
        return $pdf->stream('Individual Quarter Master Information.pdf');
    }
    
    public function print_all()
    {
        $qmasters=Qmaster::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Qmaster.all_print',compact('qmasters'));
        return $pdf->stream('All Quarter Master Information.pdf');
    }

}
