<head>
    <title>CMSIBP - Attendance</title>
    <link href="{{asset('/')}}backend/user/css/print-all.css" rel="stylesheet" />
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
                            <h1><b>All Quarter Master Attendance Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                      <tr>
                                        <th>SL</th>
                                        <th>BNCC ID</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Class Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($attendances as $key=>$singleattendance)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($singleattendance->qmaster)->cdt_id}}</td>
                                            <td>
                                                {{($singleattendance->qmaster)->name}}
                                            </td>
                                            <td>{{$singleattendance->date}}</td>
                                            <td>{{$singleattendance->type}}</td>
                                            <td>{{$singleattendance->status}}</td>
                                        </tr>
                                       @endforeach                   
                                   </tbody>
                                </table>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>