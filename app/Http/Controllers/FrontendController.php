<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessSetting;

class FrontendController extends Controller
{
    public function home()
    {
        return view ('frontend.master');
    }
    
    public function login()
    {
        return view ('frontend.login');
    }
    
    public function cadet_recruitment()
    { 
        $business_data=BusinessSetting::first();
        return view('frontend.recruitement',compact('business_data'));
    }
    
    public function confirmation()
    {
        return view('frontend.confirmation');
    }
    
}
