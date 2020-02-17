<head>
    <title>CMSIBP - Store</title>
    <link href="{{asset('/')}}backend/user/css/print-single.css" rel="stylesheet" />
</head>
<div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox"> 
                <div class="ibox-body">
                        <div class="print_head">
                            <img src="img/print_header.png"/>    
                        </div>
                        <div class="print_title">
                            <h1><b>Individual Product Information</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table class="table">
                                <tr>
                                    <th>Printing Date</th><td>:</td><td>{{date("d-m-y")}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th><td>:</td><td>{{$products->item}}</td>
                                </tr>   
                                <tr>
                                    <th>Product Category</th><td>:</td><td>{{$products->category}}</td>
                                </tr>   
                                <tr>
                                    <th>Total Quantity</th><td>:</td><td>{{$products->qty}}</td>
                                </tr>   
                                <tr>
                                    <th>Usable</th><td>:</td><td>{{($products->qty)-($products->damage)}}</td>
                                </tr>   
                                <tr>
                                    <th>Damaged</th><td>:</td><td>{{$products->damage}}</td>
                                </tr>   
                                <tr>
                                    <th>Updated On</th><td>:</td><td>{{$products->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Remarks</th><td>:</td><td>{{$products->remarks}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th><td>:</td><td>{{$products->status}}</td>
                                </tr>   
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

