<head>
    <title>CMSIBP - Cadet</title>
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
                            <h1><b>All Applicant Information</b></h1>    
                            <h3>Printing Date : {{date("d-m-y")}}</h3>
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                      <tr>
                                        <th>SL</th>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Dept</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($cadets as $key=>$singlecadet)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$singlecadet->std_id}}</td>
                                            <td>{{$singlecadet->name}}</td>
                                            <td>{{$singlecadet->mobile}}</td>
                                            <td>{{$singlecadet->email}}</td>
                                            <td>{{$singlecadet->dept}}</td>  
                                            <td>{{$singlecadet->status}}</td>
                                            <td>{{$singlecadet->remarks}}</td>
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