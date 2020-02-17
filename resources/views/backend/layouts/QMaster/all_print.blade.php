<head>
    <title>CMSIBP - Quarter Master</title>
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
                            <h1><b>All Quarter Master Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Cadet ID</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Joining</th>
                                        <th>Rertirement</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($qmasters as $singleQMaster)
                                        <tr>
                                          <td>{{$singleQMaster->id}}</td>
                                          <td>{{$singleQMaster->name}}</td>
                                          <td>{{$singleQMaster->cdt_id}}</td>
                                          <td>{{$singleQMaster->email}}</td>
                                          <td>{{$singleQMaster->mobile}}</td>
                                          <td>{{$singleQMaster->join}}</td>
                                          <td>{{$singleQMaster->left}}</td>
                                          <td>{{$singleQMaster->status}}</td>
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