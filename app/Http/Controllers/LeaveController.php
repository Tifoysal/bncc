<?php
namespace App\Http\Controllers;
use App\Models\Leave;
use App;
use PDF;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request,  [
            
            'from'=>'date_format:Y-m-d|after:today',           
            'to'=>'date_format:Y-m-d|after:today',
            
        ]);

//left side for database column name and right side for form name="this text"
        Leave::create([
            'cdt_id'=>$request->cdt_id,
            'from'=>$request->from,
            'to'=>$request->to,
            'reason'=>$request->reason,
            'emergency'=>$request->emergency,
            'location'=>$request->location,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
        ]);

        // Should be changed after successful implementation
        return redirect()->route('puo.list-leave')->with('message','Leave Posted Successfully');
    }
    
    public function list()
    {

    	$leaves=Leave::all();//should return collection

    	return view('backend.layouts.Leave.list',compact('leaves'));
    }
    
    public function cadetleave($id)
    {   
    	$leaves=Leave::where('cdt_id',$id)->get();//should return collection
    	return view('backend.layouts.Leave.list',compact('leaves'));
    }
    
     public function cadetleave_print($id)
    {   
        $leaves=Leave::where('cdt_id',$id)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Leave.all_print',compact('leaves'));
        return $pdf->stream('All Quarter Master Information.pdf');
    }
    
    public function update(Request $request,$id)
    { 
        $this->validate($request,  [
            
            'from'=>'date_format:Y-m-d|after:today',           
            'to'=>'date_format:Y-m-d|after:today',            
        ]);

       Leave::where('id',$id)->update([
            'puo_id'=>$request->puo_id,
            'reason'=>$request->reason,
            'emergency'=>$request->emergency,
            'location'=>$request->location,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
       ]);
       return redirect()->route('puo.list-leave')->with('message','Leave Updated Successfully');
    }
    
    public function delete($id)
    {
        Leave::find($id)->delete();
        return redirect()->route('puo.list-leave')->with('message','Leave Application Deleted Successfully');

    }
    
    public function print_single($id)
    {
        
        $leaves=Leave::find($id);
        return view('backend.layouts.Leave.single_print_pre',compact('leaves'));
    } 
    
    public function print_one($id)
    {
        $leaves=Leave::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Leave.single_print',compact('leaves'));
        return $pdf->stream('Individual Leave Application Information.pdf');
    }
    
    public function print_all()
    {
        $leaves=Leave::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Leave.all_print',compact('leaves'));
        return $pdf->stream('All Cadet Leave Information.pdf');
    }

}
