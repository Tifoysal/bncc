<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App;
use PDF;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {

//left side for database column name and right side for form name="this text"
        Product::create([
            'item'=>$request->item,
            'user_id'=>$request->user_id,
            'category'=>$request->category,
            'qty'=>$request->qty,
            'damage'=>$request->damage,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
        ]);

        return redirect()->route('puo.list-product')->with('message','Product Added Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$products=Product::all();//should return collection

    	return view('backend.layouts.Product.list',compact('products'));
    }
    
    public function update(Request $request,$id)
    {
       Product::where('id',$id)->update([
            'item'=>$request->item,
            'category'=>$request->category,
            'qty'=>$request->qty,
            'damage'=>$request->damage,
            'remarks'=>$request->remarks,
            'status'=>$request->status,
       ]);
       return redirect()->route('puo.list-product')->with('message','Product Updated Successfully');
    }
    
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('puo.list-product')->with('message','Product Deleted Successfully');

    }
    
    public function print_single($id)
    {
        
        $products=Product::find($id);
        return view('backend.layouts.Product.single_print_pre',compact('products'));
    } 
    
    public function print_one($id)
    {
        $products=Product::find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Product.single_print',compact('products'));
        return $pdf->stream('Individual Product Information.pdf');
    }
    
    public function print_all()
    {
        $products=Product::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Product.all_print',compact('products'));
        return $pdf->stream('All Product Information.pdf');
    }

}
