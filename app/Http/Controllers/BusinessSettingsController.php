<?php

namespace App\Http\Controllers;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;

class BusinessSettingsController extends Controller
{
    public function list()
    {
    	$bussets=BusinessSetting::all();
    	return view('backend.layouts.Recruitment.list_settings',compact('bussets'));
    }
    
    public function update(Request $request,$id)
    { 
        BusinessSetting::where('id',$id)->update([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'recruitment'=>$request->recruitment,
            'instruction'=>$request->instruction,
       ]);
       return redirect()->route('puo.list-settings')->with('message','Settings Updated Successfully');
    }
}
