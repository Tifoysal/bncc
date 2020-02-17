@extends('backend.master')
@section('content')    
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h3>Print Budget Information</h3>
                        </div>
                    </div>
                    
                <div class="ibox-body">
                        <div class="print_title">
                            <h1><b>Individual Budget Information</b></h1>    
                        </div>
                        <br>
                        <div class="print_body">
                            <h5>
                                <div class="print_body_single">
                            <br>        
                            <table class="table">
                             <tr><td colspan="5"><center>
                                 <h3>Budget For<br>BNCC Cadet's Uniform, Accessories and Other Activities</h3></center>
                                 <p>This is the budget for cadet's uniform of IUBAT BNCC (Male and Female) Platoon. The amout will be adjusted upon giving bills.</p>
                                 <br><br><br> 
                                 </td>
                             </tr>
                              
                            <tr>
                              <th>Semester</th>  <td>: {{$budgets->semester}}</td>
                              <th>Date</th>  <td>: {{$budgets->date}}</td>
                                <br><br><br> 
                            </tr>  
                            <tr>
                                <th>SL</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Price</th>
                            </tr>

                                @foreach(json_decode($budgets->budget) as $key=>$singlebudget)
                                
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$singlebudget->item}}</td>
                                <td>{{$singlebudget->qty}}</td>
                                <td>{{$singlebudget->rate}}</td>
                                <td>{{$subtotal =($singlebudget->qty)*($singlebudget->rate)}}</td>
                            </tr>    
                                
                        @endforeach
                                <tr><td></td><td></td><td></td><td>Grand Total = </td>
                                <td>{{$total}}</td>
                            </tr>
                        </table>
                        <br>
                                <a href="{{route('puo.print-budget-one',$budgets->id)}}">
                                        <button class="btn btn-primary btn-md"> Print</button>
                                    </a>
                                    <a href="{{route('puo.list-budget')}}">
                                        <button type="button" class="btn btn-danger">Back</button>
                                    </a>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
                    
  
@stop
