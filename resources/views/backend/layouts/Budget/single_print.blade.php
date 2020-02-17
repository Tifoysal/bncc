<head>
    <title>CMSIBP - Budget</title>
    <link href="{{asset('/')}}backend/user/css/print-single.css" rel="stylesheet" />
</head>
<div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox"> 
                <div class="ibox-body budget-print">
                        <div class="print_head">
                            <img src="img/print_header.png"/>    
                        </div>
                        <div class="print_title">
                            <h1><b>Individual Budget Information</b></h1>    
                        </div>
                        <br>
                        <div class="print_body">                                                   
                             <center>
                                 <h3>Budget For BNCC Cadet's Uniform, Accessories and Other Activities</h3>
                                 <p>This is the budget for cadet's uniform of IUBAT BNCC (Male and Female) Platoon. The amout will be adjusted upon giving bills.</p>
                              <h4>Semester : {{$budgets->semester}} <br>
                                  Date : {{$budgets->date}}</h4>
                              
                             <table class="table notice"> 
                              
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
                                <td>{{$singlebudget->rate}} Taka</td>
                                <td>{{$subtotal =($singlebudget->qty)*($singlebudget->rate)}} Taka</td>
                            </tr>    
                                
                        @endforeach
                                <tr><td></td><td></td><td></td><td>Grand Total = </td>
                                <td>{{$total}} Taka</td>
                            </tr>
                        </table>
                                 
                        </center>
                                
                    </div>
                            
                        </div>
                    </div>
                </div>  
                    </div>

                <div class="notice">
                                <br><br><br><br>
                                <p>___________________________</p>
                                <h4>Autorized by<br>
                                M.M. Rakibul Hasan<br>
                                Professor Under Office<br>
                                IUBAT BNCC Platoon</h4>
                            </div>
<style>
table,th,td {
  border: 1px solid black;
  border-collapse: collapse;
text-align: left;
}
    .notice{
        padding-left: 3%;
    }
</style>