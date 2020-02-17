<head>
    <title>CMSIBP - PUO</title>
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
                            <h1><b>All Personnel Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>BNCC ID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Rank</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                         @foreach($puos as $key=>$singlePuo)
                                            <tr>
                                              <td>{{$key+1}}</td>
                                              <td>{{$singlePuo->puo_id}}</td>
                                              <td>{{$singlePuo->name}}</td>
                                              <td>{{$singlePuo->mobile}}</td>
                                              <td>{{$singlePuo->email}}</td>
                                              <td>{{$singlePuo->role}}</td>
                                              <td>{{$singlePuo->status}}</td>
                                              <td>{{$singlePuo->rank}}</td>
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