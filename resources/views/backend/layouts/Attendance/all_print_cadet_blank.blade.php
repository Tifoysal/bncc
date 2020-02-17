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
                            <h1><b>Cadet Attendance Sheet</b></h1>                         <h4>Printing Date : {{date("d-m-y")}}</h4>
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                
                                      <tr>
                                        <th>SL</th>
                                        <th>BNCC ID</th>
                                        <th>Name</th>
                                        <th>Rank</th>
                                        <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                       <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          <th>
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </th>
                                          
                                    </tr>
                            </thead>
                                 <tbody>
                                    @foreach($cadets as $key=>$singlecadet)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{($singlecadet->cdt_id)}}</td>
                                            <td>
                                                {{($singlecadet->name)}}
                                            </td>
                                            <td>
                                                {{($singlecadet->rank)}}
                                            </td>
                                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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