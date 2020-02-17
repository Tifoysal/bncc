<?php
namespace App\Http\Controllers;
use App\Models\Budget;
use App;
use PDF;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function create(Request $request)
    {

        Budget::create([
            'user_id'=>$request->user_id,
            'semester'=>$request->semester,
            'date'=>$request->date,
            'budget'=>json_encode($request->budget),
        ]);

        return redirect()->route('puo.list-budget')->with('message','Budget Added Successfully');
        //return redirect()->back();


    }
    
    public function list()
    {

    	$budgets=Budget::all();
        return view('backend.layouts.Budget.list',compact('budgets')); 
    }
    
    public function print_single($id)
    {
        
        $budgets=Budget::find($id);       
        
        $budgetsArray=json_decode($budgets->budget);
    
    
            $collection = collect($budgetsArray);
            $data = $collection->map(function($budget){        
              return  [
                  'item'=>$budget->item,
                  'qty'=>$budget->qty,
                  'rate'=>$budget->rate,
                  'subtotal'=>$budget->rate * $budget->qty
              ];
            
            });
        $total=$data->sum('subtotal');
    
        return view('backend.layouts.Budget.single_print_pre',compact('budgets','total'));
    } 
    
    public function print_one($id)
    {
        $budgets=Budget::find($id);       
        $budgetsArray=json_decode($budgets->budget);
        $collection = collect($budgetsArray);
        $data = $collection->map(function($budget){        
              return  [
                  'item'=>$budget->item,
                  'qty'=>$budget->qty,
                  'rate'=>$budget->rate,
                  'subtotal'=>$budget->rate * $budget->qty
              ];
            });
        $total=$data->sum('subtotal');
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Budget.single_print',compact('budgets','total'));
        return $pdf->stream('Individual Budget Information.pdf');
    }
    
    public function print_all()
    {
        $budgets=Budget::all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.Budget.all_print',compact('budgets'));
        return $pdf->stream('All Budget Information.pdf');
    }
}
