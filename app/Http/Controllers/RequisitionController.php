<?php

namespace App\Http\Controllers;
use App\Models\Requisition;
use App\Models\Product;
use App;
use PDF;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
   public function create(Request $request)
    {

//left side for database column name and right side for form name="this text"
        Requisition::create([
            'apply_by'=>$request->apply_by,
            'pro_id'=>$request->pro_id,
            'qty'=>$request->qty,
            'req_for'=>$request->req_for,
            'return'=>$request->return,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
        ]);

        return redirect()->route('puo.list-req')->with('message','Requisition Placed Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$reqs=Requisition::all();//should return collection
    	return view('backend.layouts.Requisition.list',compact('reqs'));
    }
    
    public function cadet_req($id)
    {   
    	$reqs=Requisition::where('apply_by',$id)->get();//should return collection
    	return view('backend.layouts.Requisition.list',compact('reqs'));
    }
    
    public function update(Request $request,$id)
    {
       Requisition::where('id',$id)->update([
            'approve_by'=>$request->approve_by,
            'status'=>$request->status,
       ]);
       return redirect()->route('puo.list-req')->with('message','Requisition Updated Successfully');
    }
    
    public function delete($id)
    {
        Requisition::find($id)->delete();
        return redirect()->route('puo.list-req')->with('message','Requisition Deleted Successfully');

    }
    
    public function print_single($id)
    {
        $reqs=Requisition::find($id);
        $product=Product::where('status','available')->get();
        return view('backend.layouts.Requisition.single_print_pre',compact('reqs','product'));
    } 
    
    public function print_one($id)
    {
        $reqs=Requisition::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Requisition.single_print',compact('reqs'));
        return $pdf->stream('Individual Requisition Information.pdf');
    }
    
    public function print_all()
    {
        $reqs=Requisition::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Requisition.all_print',compact('reqs'));
        return $pdf->stream('All Requisition Information.pdf');
    }
    
    public function print_all_own($id)
    {
        $reqs=Requisition::where('apply_by',$id)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Requisition.all_print',compact('reqs'));
        return $pdf->stream('All Requisition Information.pdf');
    }
}
