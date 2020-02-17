<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use App;
use PDF;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
        public function create(Request $request)
    {

//left side for database column name and right side for form name="this text"
        Notice::create([
            'title'=>$request->title,
            'puo_id'=>$request->puo_id,
            'body'=>$request->body,
            'start'=>$request->start,
            'file'=>$request->file->store('notice'),
        ]);

        return redirect()->route('puo.list-notice')->with('message','Noitce Posted Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$notices=Notice::all();//should return collection
    	return view('backend.layouts.Notice.list',compact('notices'));
    }
    
    public function update(Request $request,$id)
    {
        $course_file = $request->file;
        if($course_file)
        {
            Notice::where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'start'=>$request->start,
            'file'=>$request->file->store('notice'),
            ]);
        }
        else
        {
            Notice::where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'start'=>$request->start,
            ]);
        }
        
       return redirect()->route('puo.list-notice')->with('message','Notice Updated Successfully');
    }
    
    public function delete($id)
    {
        Notice::find($id)->delete();
        return redirect()->route('puo.list-notice')->with('message','Notice Deleted Successfully');

    }
    
    public function print_single($id)
    {
        
        $notices=Notice::find($id);
        return view('backend.layouts.Notice.single_print_pre',compact('notices'));
    } 
    
    public function print_one($id)
    {
        $notices=Notice::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Notice.single_print',compact('notices'));
        return $pdf->stream('Individual Notice Information.pdf');
    }
    
    public function print_all()
    {
        $notices=Notice::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Notice.all_print',compact('notices'));
        return $pdf->stream('All Notice Information.pdf');
    }

}
