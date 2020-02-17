<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puo;
use App\Models\Qmaster;
use App\Models\Cadet;
use App\Models\Attendance;
use App\Models\CMaterial;
use App\Models\Leave;
use App\Models\Notice;
use App\Models\Product;
use App\Models\Requisition;
use App\Models\Budget;
use App\Models\BusinessSetting;

class BackendController extends Controller
{
   
    public function dashboard()
    {
        $puo=PUO::all();
        $cadet=Cadet::whereNotIn('status',['Applied','Communicated'])->get();
        $qmaster=Qmaster::all();
        $attendance=Attendance::all();
        $cmaterial=CMaterial::all();
        $notice=Notice::all();
        $leave=Leave::all();
        $product=Product::all();
        $req=Requisition::all();
        $recruitment=Cadet::whereIn('status',['Applied','Communicated'])->get();
        $budget=Budget::all();
        return view('backend.layouts.index',compact('puo','cadet','qmaster','attendance','cmaterial','notice','leave','product','req','recruitment','budget'));
    }
    
    public function create_puo()
    { 
        return view('backend.layouts.PUO.add');
    }
    
    public function update_puo($id)
    { 
        $puo=Puo::where('user_id',$id)->first();
        return view('backend.layouts.PUO.update',compact('puo'));
    }
    
    public function create_cadet()
    { 
        return view('backend.layouts.Cadet.add');
    }
    
    public function update_cadet($id)
    {
        $cadet=Cadet::find($id);
        return view('backend.layouts.Cadet.update',compact('cadet'));
    }
        
    public function view_cadet_profile($id)
    {      
        $cadets=Cadet::where('user_id',$id)->first();
        return view('backend.layouts.Cadet.single_print_pre',compact('cadets'));
    }
    
    public function update_cadet_own_pass($id)
    {    
        
        if(auth()->user()->role=='Cadet')
        {
            $cadet=Cadet::where('user_id',$id)->first();
            return view('backend.layouts.Cadet.update',compact('cadet'));
        }
        else
        {   $cadet=Cadet::where('id',$id)->first();
            return view('backend.layouts.Cadet.password',compact('cadet'));
        }
    }
    
    public function create_qmaster()
    { 
        return view('backend.layouts.QMaster.add');
    }
    
    public function update_qmaster($id)
    {
        //$qmaster=Qmaster::with('qmaster')->find($id);
        $qmaster=Qmaster::find($id);
        return view('backend.layouts.QMaster.update',compact('qmaster'));
    }
    
    public function update_qmaster_pass($id)
    {   
        if(auth()->user()->role=='QMaster')
        {
            $qmaster=Qmaster::where('user_id',$id)->first();
            return view('backend.layouts.QMaster.password',compact('qmaster'));
        }
        else
        {   $qmaster=Qmaster::where('id',$id)->first();
            return view('backend.layouts.QMaster.password',compact('qmaster'));
        }      
    }
    
    public function view_qmaster_profile($id)
    {      
        $qmasters=Qmaster::where('user_id',$id)->first();
        return view('backend.layouts.QMaster.single_print_pre',compact('qmasters'));
    }
    
    public function create_cmaterial()
    { 
        return view('backend.layouts.CMaterial.add');
    }
    
    public function update_cmaterial($id)
    {
        $cmaterial=CMaterial::find($id);
        return view('backend.layouts.CMaterial.update',compact('cmaterial'));
    }
    
    public function create_notice()
    { 
        return view('backend.layouts.Notice.add');
    }
    
    public function update_notice($id)
    {
        $notice=Notice::find($id);
        return view('backend.layouts.Notice.update',compact('notice'));
    }
    
    public function create_leave()
    { 
        return view('backend.layouts.Leave.add');
    }
    
    public function update_leave($id)
    {
        $leave=Leave::find($id);
        return view('backend.layouts.Leave.update',compact('leave'));
    }
    
    public function create_product()
    {   
        return view('backend.layouts.Product.add');
    }
    
    public function update_product($id)
    {
        $product=Product::find($id);
        return view('backend.layouts.Product.update',compact('product'));
    }
    
    public function create_req()
    { 
        $product=Product::where('status','available')->get();
        return view('backend.layouts.Requisition.add',compact('product'));
    }
    
    public function update_req($id)
    {
        $req=Requisition::find($id);         
        $product=Product::where('status','available')->get();
        return view('backend.layouts.Requisition.update',compact('req','product'));
    }
    
    public function create_cadet_att()
    { 
        $cadets=Cadet::where('status','Active')->get();        
        return view('backend.layouts.Attendance.cadet_add',compact('cadets'));
    }
    
    public function update_cadet_att($id)
    {
        $attendance=Attendance::find($id);
        return view('backend.layouts.Attendance.cadet_update',compact('attendance'));
    }
    
    public function create_qmaster_att()
    { 
        $qmasters=Qmaster::where('status','active')->get();        
        return view('backend.layouts.Attendance.qmaster_add',compact('qmasters'));
    }
    
    public function update_qmaster_att($id)
    {
        $attendance=Attendance::find($id);
        return view('backend.layouts.Attendance.qmaster_update',compact('attendance'));
    }
    
    public function create_personnel_att()
    { 
        $puos=Puo::where('status','Active')->get();        
        return view('backend.layouts.Attendance.personnel_add',compact('puos')); 
    }
    
    public function update_personnel_att($id)
    {
        $attendance=Attendance::find($id);
        return view('backend.layouts.Attendance.personnel_update',compact('attendance'));
    }
    
    public function update_application($id)
    {
        $cadet=Cadet::find($id);
        return view('backend.layouts.Recruitment.update',compact('cadet'));
    }
    
    public function create_budget()
    { 
        return view('backend.layouts.Budget.add');
    }
    
    public function update_setting($id)
    {   
        $business=BusinessSetting::find($id);
        return view('backend.layouts.Recruitment.update_settings',compact('business'));
        dd($business);
    }
}
