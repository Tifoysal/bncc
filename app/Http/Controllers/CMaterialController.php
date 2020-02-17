<?php

namespace App\Http\Controllers;
use App\Models\CMaterial;
use App;
use PDF;
use Illuminate\Http\Request;

class CMaterialController extends Controller
{
    public function create(Request $request)
    {
//left side for database column name and right side for form name="this text"
        CMaterial::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'puo_id'=>$request->puo_id,
            'file'=>$request->file->store('cmaterials'),
            'remarks'=>$request->remarks,
        ]);
        
        return redirect()->route('puo.list-cmaterial')->with('message','Course Material Added Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$cmaterials=Cmaterial::all();//should return collection

    	return view('backend.layouts.CMaterial.list',compact('cmaterials'));
    }
    
    public function update(Request $request,$id)
    {
        $course_file = $request->file;
        if($course_file)
        {
            CMaterial::where('id',$id)->update([
                'name'=>$request->name,
                'type'=>$request->type,
                'file'=>$request->file->store('cmaterials'),
                'remarks'=>$request->remarks,
            ]);
        }
        else
        {
            CMaterial::where('id',$id)->update([
                'name'=>$request->name,
                'type'=>$request->type,
                'remarks'=>$request->remarks,
            ]);
        }
       return redirect()->route('puo.list-cmaterial')->with('message','Course Material Updated Successfully');
    }
    
    public function delete($id)
    {
        CMaterial::find($id)->delete();
        return redirect()->route('puo.list-cmaterial')->with('message','Course Material Deleted Successfully');

    }
    
    public function print_all()
    {
        $cmaterials=CMaterial::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.CMaterial.all_print',compact('cmaterials'));
        return $pdf->stream('All Course Material Information.pdf');
    }
    
   public function getDownload($id)
{   
    //PDF file is stored under project/public/download/info.pdf
    $dbFile=  CMaterial::find($id);
    $pdf=$dbFile->file;
    $file= public_path(). "/user/{$pdf}";
    $headers = array(
              'Content-Type: application/pdf',
            );

    return response()->download($file, 'filename.pdf', $headers);
}

}
