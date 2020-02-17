<?php

namespace App\Http\Controllers;
use App\Models\Puo;
use App\Models\User;
use App;
use PDF;
use Illuminate\Http\Request;

class PuoController extends Controller
{
    public function create(Request $request)
    {

        $user_image = $request->file('photo');
        $file_name =uniqid('puo_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('puo', $file_name);
        
//left side for database column name and right side for form name="this text"
        if($request->role=='PUO')
        {
            $new_user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'status'=>$request->status,
            'password'=>bcrypt($request->password),
        ]);
            Puo::create([
            'user_id'=>$new_user->id,
            'puo_id'=>$request->puo_id,
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'rank'=>$request->rank,
            'role'=>$request->role,
            'join'=>$request->join,
            'left'=>$request->left,
            'photo'=>$file_name,
            'status'=>$request->status,
            'gender'=>$request->gender,
        ]);
        }
        else{
            Puo::create([
                'user_id'=>1,
                'puo_id'=>$request->puo_id,
                'name'=>$request->name,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'rank'=>$request->rank,
                'role'=>$request->role,
                'join'=>$request->join,
                'left'=>$request->left,
                'photo'=>$file_name,
                'status'=>$request->status,
                'gender'=>$request->gender,
              ]);
        }
        
        
//      insert into 'products'('column name') values('value');
        return redirect()->route('puo.list-puo')->with('message','Personnel Added Successfully');
        //return redirect()->back()->with('message','Product Added Successfully');


    }
    
    public function list()
    {

    	//$puos=Puo::get()->paginate(6);//should return collection
    	$puos=Puo::all();//should return collection

    	return view('backend.layouts.PUO.list',compact('puos'));
    }
    
    public function update(Request $request,$id)
    {
        
        $user_image = $request->file('photo');
        if($user_image)
        {    
            $file_name =uniqid('puo_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
            $user_image->storeAs('puo', $file_name);

            User::find(auth()->user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
            
            Puo::where('id',$id)->update([
                'puo_id'=>$request->puo_id,
                'name'=>$request->name,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'rank'=>$request->rank,
                'role'=>$request->role,
                'join'=>$request->join,
                'left'=>$request->left,
                'photo'=>$file_name,
                'status'=>$request->status,
                'gender'=>$request->gender,
           ]);
        }
        else
        {
            User::find(auth()->user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
            
            Puo::where('id',$id)->update([
                'puo_id'=>$request->puo_id,
                'name'=>$request->name,
                'mobile'=>$request->mobile,
                'email'=>$request->email,
                'rank'=>$request->rank,
                'role'=>$request->role,
                'join'=>$request->join,
                'left'=>$request->left,
                'status'=>$request->status,      
            ]);
        }
        return redirect()->route('puo.dashboard')->with('message','Information Updated Successfully');
    }
    
    public function delete($id)
    {
        Puo::find($id)->delete();
        return redirect()->route('puo.list-puo')->with('message','Personnel Deleted Successfully');

    }
    
    public function print_single($id)
    {
        
        $puos=Puo::find($id);
        return view('backend.layouts.PUO.single_print_pre',compact('puos'));
    } 
    
    public function print_one($id)
    {
        $puos=Puo::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.PUO.single_print',compact('puos'));
        return $pdf->stream('Individual Personnel Information.pdf');
    }
    
    public function print_all()
    {
        $puos=Puo::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.PUO.all_print',compact('puos'));
        return $pdf->stream('All Personnel Information.pdf');
    }
    

}
