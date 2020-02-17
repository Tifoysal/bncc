<head>
    <title>CMSIBP - PUO</title>
    <link href="{{asset('/')}}backend/user/css/print.css" rel="stylesheet" />
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
                            <h1><b>Individual Attendance Information</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                    <th>Cadet ID</th><td>:</td><td>{{($attendances->cadet)->cdt_id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>:</td><td>{{($attendances->cadet)->name}}</td>
                                </tr>   
                                <tr>
                                    <th>Attendance Date</th><td>:</td><td>{{$attendances->date}}</td>
                                </tr>   
                                <tr>
                                    <th>Class Type</th><td>:</td><td>{{$attendances->type}}</td>
                                </tr>   
                                <tr>
                                    <th>Status</th><td>:</td><td>{{$attendances->status}}</td>
                                </tr>   
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

