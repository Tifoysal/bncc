<head>
    <title>CMSIBP - PUO</title>
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
                            <h1><b>Individual Leave Application</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table class="table">
                                <tr>
                                    <th>Date of Application</th><td>:</td><td>{{$leaves->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Cadet Name</th><th>:</th><th>{{($leaves->cdt_leave)->name}}</th>
                                </tr>
                                <tr>
                                    <th>Cadet ID</th><td>:</td><td>{{($leaves->cdt_leave)->cdt_id}}</td>
                                </tr>             
                                <tr>
                                    <th>Leave From</th><td>:</td><td>{{$leaves->from}}</td>
                                </tr>   
                                <tr>
                                    <th>Leave To</th><td>:</td><td>{{$leaves->to}}</td>
                                </tr>   
                                <tr>
                                    <th>Leave Reason</th><td>:</td><td>{{$leaves->reason}}</td>
                                </tr>   
                                <tr>
                                    <th>Emergency Contact</th><td>:</td><td>{{$leaves->emergency}}</td>
                                </tr>   
                                <tr>
                                    <th>During Leave Location</th><td>:</td><td>{{$leaves->location}}</td>
                                </tr>
                                <tr>
                                    <th>Remarks</th><td>:</td><td>{{$leaves->remarks}}</td>
                                </tr> 
                                <tr>
                                    <th>Status</th><th>:</th><th>{{$leaves->status}}</th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

