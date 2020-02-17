<head>
    <title>CMSIBP - Requisition</title>
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
                            <h1><b>Individual Requisition Information</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table class="table">
                                    <tr>
                                        <th>Printing Date</th><td>:</td><td>{{date("d-m-y")}}</td>
                                    </tr>
                                    <tr>
                                        <th>Prduct Name</th><td>:</td><td>{{$reqs->item}}</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th><td>:</td><td>{{$reqs->qty}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Requsition For</th><td>:</td><td>{{$reqs->req_for}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Tentative Return Date</th><td>:</td><td>{{$reqs->return}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Remarks</th><td>:</td><td>{{$reqs->remarks}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Status</th><td>:</td><td>{{$reqs->status}}</td>
                                    </tr>     
                                </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

