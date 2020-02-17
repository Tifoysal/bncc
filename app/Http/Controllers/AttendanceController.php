<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\PUO;
use App;
use PDF;
use App\Models\Qmaster;
use App\Models\Cadet;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function create_cadet_att(Request $request)
    {
        $user_ids=$request->input('user_id');
        foreach( $user_ids as $key=> $singledata){
        Attendance::create([
            'user_id'=>$singledata,
            'status'=>$request->status[$key],
            'date'=>$request->date,
            'type'=>$request->type,
        ]);
        }

        return redirect()->route('puo.list-cadet-attendance')->with('message','Attendance Added Successfully');

    }
    
    public function cadet_list()
    {
    	$attendances=Attendance::whereNull('topic')->with('cadet')->get();
    	return view('backend.layouts.Attendance.cadet_list',compact('attendances'));
    }
    
    public function update_cadet(Request $request,$id)
    {        
       Attendance::where('id',$id)->update([
            'status'=>$request->status,
            'date'=>$request->date,
            'type'=>$request->type,
       ]);
       return redirect()->route('puo.list-cadet-attendance')->with('message','Attendance Updated Successfully');
    }
    
    public function print_single_cadet_att($id)
    {
        
        $attendances=Attendance::find($id);
        return view('backend.layouts.Attendance.single_print_cadet_pre',compact('attendances'));
    } 
    
    public function print_one_cadet_att($id)
    {
        $attendances=Attendance::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.single_print_cadet',compact('attendances'));
        return $pdf->stream('Individual Attendance Information.pdf');
    }
    
    public function print_all_cadet_att()
    {
        $attendances=Attendance::whereNull('topic')->with('cadet')->get();;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.all_print_cadet',compact('attendances'));
        return $pdf->stream('All Attendance Information.pdf');
    }
    
    public function print_blank_cadet_att()
    { 
        $cadets=Cadet::whereIn('status',['Trainee','active'])->get(); 
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.all_print_cadet_blank',compact('cadets'));
        return $pdf->stream('Blank Attendance Information.pdf');
    }
    
    public function create_personnel_att(Request $request)
    {
        Attendance::create([
            'user_id'=>$request->user_id,
            'status'=>$request->status,
            'date'=>$request->date,
            'type'=>$request->type,
            'topic'=>$request->topic,
        ]);

        return redirect()->route('puo.list-personnel-attendance')->with('message','Attendance Added Successfully');
    }
    
    public function personnel_list()
    {

    	$attendances=Attendance::whereNotNull('topic')->with('puo')->get();//should return collection
    	return view('backend.layouts.Attendance.personnel_list',compact('attendances'));
    }
    
    public function update_personnel (Request $request,$id)
    {        
       Attendance::where('id',$id)->update([
            'status'=>$request->status,
            'date'=>$request->date,
            'type'=>$request->type,
       ]);
       return redirect()->route('puo.list-personnel-attendance')->with('message','Attendance Updated Successfully');
    }
    
    public function print_single_personnel_att($id)
    {
        
        $attendances=Attendance::find($id);
        return view('backend.layouts.Attendance.single_print_personnel_pre',compact('attendances'));
    } 
    
    public function print_one_personnel_att($id)
    {
        $attendances=Attendance::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.single_print_personnel',compact('attendances'));
        return $pdf->stream('Individual Attendance Information.pdf');
    }
    
    public function print_all_personnel_att()
    {
        $attendances=Attendance::whereNotNull('topic')->with('puo')->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.all_print_personnel',compact('attendances'));
        return $pdf->stream('All Attendance Information.pdf');
    }
    
    public function create_qmaster_att(Request $request)
    {
        $user_ids=$request->input('user_id');
        foreach( $user_ids as $key=> $singledata){
        Attendance::create([
            'user_id'=>$singledata,
            'status'=>$request->status[$key],
            'date'=>$request->date,
            'type'=>$request->type,
        ]);
        }

        return redirect()->route('puo.list-qmaster-attendance')->with('message','Attendance Added Successfully');

    }
    
    public function qmaster_list()
    {

    	$attendances=Attendance::whereNull('topic')->with('qmaster')->get();//should return collection
    	return view('backend.layouts.Attendance.qmaster_list',compact('attendances'));
    }
    
    public function update_qmaster(Request $request,$id)
    {        
       Attendance::where('id',$id)->update([
            'status'=>$request->status,
            'date'=>$request->date,
            'type'=>$request->type,
       ]);
       return redirect()->route('puo.list-qmaster-attendance')->with('message','Attendance Updated Successfully');
    }
    
    public function print_single_qmaster_att($id)
    {
        
        $attendances=Attendance::find($id);
        return view('backend.layouts.Attendance.single_print_qmaster_pre',compact('attendances'));
    } 
    
    public function print_one_qmaster_att($id)
    {
        $attendances=Attendance::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.single_print_qmaster',compact('attendances'));
        return $pdf->stream('Individual Attendance Information.pdf');
    }
    
    public function print_all_qmaster_att()
    {
        $attendances=Attendance::whereNull('topic')->with('qmaster')->get();;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.all_print_qmaster',compact('attendances'));
        return $pdf->stream('All Attendance Information.pdf');
    }
    
    public function print_blank_qmaster_att()
    { 
        $qmasters=Qmaster::where('status','active')->get(); 
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Attendance.all_print_qmaster_blank',compact('qmasters'));
        return $pdf->stream('Blank Attendance Information.pdf');
    }
    
}
