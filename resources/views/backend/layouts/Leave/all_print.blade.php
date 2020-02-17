<head>
    <title>CMSIBP - Leave</title>
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
                            <h1><b>All Leave Information</b></h1> 
                            @if(auth()->user()->role=='Cadet')
                                <h4>Cadet Name: {{auth()->user()->name}}</h4>
                            @endif
                            <h4>Printing Date: {{date("d-m-y")}}</h4>
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                    <tr>
                                        <th>SL</th>
                                         @if(auth()->user()->role=='PUO')
                                            <th>Name</th>
                                            <th>Cadet ID</th>
                                        @endif
                                        <th>Reason</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Emergency Contact</th>
                                        <th>Location</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($leaves as $key=>$singleLeave)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          @if(auth()->user()->role=='PUO')
                                          <td>{{($singleLeave->cdt_leave)->name}}</td>
                                          <td>{{($singleLeave->cdt_leave)->cdt_id}}</td>
                                          @endif
                                          <td>{{$singleLeave->reason}}</td>
                                          <td>{{$singleLeave->from}}</td>
                                          <td>{{$singleLeave->to}}</td>
                                          <td>{{$singleLeave->emergency}}</td>
                                          <td>{{$singleLeave->location}}</td>
                                          <td>{{$singleLeave->remarks}}</td>
                                          <td>{{$singleLeave->status}}</td>
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